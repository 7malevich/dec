<?
//echo "<pre>";
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

include_once("settings.php");

if (!isset($_GET["region_id"]) or !isset($_GET["date1"]) or !isset($_GET["date2"])) {
	$response = '{"result":false}';
} else {
$region_id = htmlspecialchars($_GET["region_id"]); // айди региона (совпадает с номером формы)
$date1 = date_create_from_format('Y-m-d', htmlspecialchars($_GET["date1"]));
$date2 = date_create_from_format('Y-m-d', htmlspecialchars($_GET["date2"]));

$filename = $region_id.".txt";
$array = explode(PHP_EOL, file_get_contents($filename));
$response = '{"command":"answer","data":[';
$output = array();
$themes_fl = array_flip($themes);

	foreach ($array as $string) { //подсчет кол-ва
	$row = explode("\t", $string);
	$date_check = date_create_from_format('Y-m-d', $row[0]);
	if (($date_check >= $date1) and ($date_check < $date2)) {
		if (in_array($row[1], $themes_fl)) {
			$output[$row[1]]++; 
		}
	}
}

	$response = '{"result":true,"region":"'. $forms[$region_id] .'","data":[';
for ($i = 1; $i <= count($themes); $i++) {
	if ($output[$i] == "") { $output[$i] = 0; }
	$response .= '{"theme_id":'.$i.',"title":"'.$themes[$i].'","count":'.$output[$i].'},';
}

}
$response = substr($response, 0, -1); //отрезать последнюю запятую
echo $response.']}';

?>