<?
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$data = '{}';
include_once("settings.php");
$oid = htmlspecialchars($_GET["oid"]); // айди офиса
$did = htmlspecialchars($_GET["did"]); // айди дня
$qid = htmlspecialchars($_GET["qid"]); // айди очереди

if ($o_servers[$oid] != 'local') { // если запись АБТ ///////////////
	$myurl = $o_servers[$oid].'/public/preorder/day/'.$did.'?queueId='.$qid;
	$ch = curl_init($myurl);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Accept: application/json',
		'Content-Length: ' . strlen($data))
	);
	$response = curl_exec($ch);
	if(curl_errno($ch)) { echo '<span style="color:red">Ошибка cURL: ' . curl_error($ch).'</span><br>'; }
	curl_close($ch); // Закрываем дескриптор
	
} else { // если запись локальная //////////////////////////
	$date1 = date_create();
	$date1->modify($time_shift); //сдвигаем время проверки на установленную величину из сеттингс
	$filename = $oid.'/queue.txt';
	$array = explode(PHP_EOL, file_get_contents($filename));
	$response = '{"command":"answer","data":[';
	$output2 = array();
	foreach ($array as $string) {
		$row = explode(";", $string);
		$date2 = date_create_from_format('d.m.Y G:i', $row[2].' '.$row[3]); //датавремя в строке файла для проверки
		$didCheck = (int)str_replace(".", "", $row[2]);//переменная в формате айди дня для сверки с переданным айди дня
		if (($row[0]==$oid) and !isset($row[4]) and ($didCheck==$did) and ($date2 >= $date1)) { //айди офиса передан в запросе + слот свободен + датавремя в будущем:
			if (!in_array($row[2].$row[3], $output2)) { // - такой даты еще нет в массиве - добавляем
				array_push($output2,$row[2].$row[3]);
				//calendarCellId в числовом формате дата.время.номерофиса
				$response .= '{"calendarCellDate":"'.$row[2].'","calendarCellId":"'.str_replace(".", "", $row[2]).str_replace(":", "", $row[3]).$row[0].	'","calendarCellTime":"'.$row[3].'"},';
			}
		}
	}
	$response = substr($response, 0, -1); //отрезать последнюю запятую
	$response = $response.'],"status":"ok"}';
}

header('Content-type:application/json;charset=utf-8');
echo ($response); 
?>