<?
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$data = '{}';
include_once("settings.php");
$oid = htmlspecialchars($_GET["oid"]); // айди офиса

if ($o_servers[$oid] != 'local') { // если запись АБТ ///////////////
	$myurl = $o_servers[$oid].'/public/preorder/calendar/'.htmlspecialchars($_GET["qid"]);
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
	$dayzcount = 0;
	foreach ($array as $string) {
		$row = explode(";", $string);
		$date2 = date_create_from_format('d.m.Y G:i', $row[2].' '.$row[3]); //датавремя в строке файла для проверки
		if (($row[0]==$oid) and !isset($row[4]) and ($date2 >= $date1)) { //айди офиса передан в запросе + слот свободен + датавремя в будущем:
			if ((!in_array($row[2], $output2)) and ($dayzcount < $dayz_in_queue)) { // - такой даты еще нет в массиве И количество дней в выдаче не больше заданного: добавляем
				array_push($output2,$row[2]);
				$dayid = str_replace(".", "", $row[2]);
				if (substr($row[2], 0, 1)=='0') { $row[2] = substr($row[2], 1); } //отрезать 0 в дате, если есть
				$response .= '{"calendarDayDate":"'.$row[2].'","calendarDayFreeSlots":99,"calendarDayId":'.(int)$dayid.'},';
				$dayzcount++;
			}
		};
	}
	$response = substr($response, 0, -1); //отрезать последнюю запятую
	$response = $response.'],"status":"ok"}';
	if ($dayzcount < 1) { $response = '{"command":"answer","data":[{"calendarDayDate":"1.1.1980","calendarDayFreeSlots":0,"calendarDayId":111980}],"status":"ok"}'; };
}

header('Content-type:application/json;charset=utf-8');
echo ($response); 
?>