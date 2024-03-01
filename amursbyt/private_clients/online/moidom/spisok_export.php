<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

//echo '<pre>hello<br>';
$columns = array("uk", "adres", "otopl", "podogr");
$response = '{"data":[';
$filename = "spisok.txt"; // файл должен быть в юникоде с табуляциями-разделителями
$array = explode(PHP_EOL, file_get_contents($filename));
$output = array();
foreach ($array as $string) {
	$string = str_replace('"', '\"', $string); //переделка кавычек в формат json
	$row = explode("\t", $string);
	$size = count($row); // кол-во элементов в строке
	$response .= '{';
	//$response .= '"'.$columns[0].'":"'.$col[0].'","'.$columns[1].'":"'.$row[1].'","'.$columns[2].'":"'.$row[2].'","'.$columns[3].'":"'.$row[3].'","'.$columns[4].'":"'.$row[4].'","'.$columns[5].'":"'.$row[5].'"},';
	for($i = 0; $i < $size; ++$i) {
		$row[$i] = trim($row[$i]); //удалить спецсимволы и пробелы на концах
		$response .= '"'.$columns[$i].'":"'.$row[$i].'",';
	}
	$response = substr($response, 0, -1); //отрезать последнюю запятую
	$response .= '},';
}
$response = substr($response, 0, -1); //отрезать последнюю запятую
$response .= ']}';

$myfile = file_put_contents("spisok.json", $response, LOCK_EX);

echo 'в файл записаны данные:<br>';
echo $response;
?>