<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); //Подключили ядро битрикса
global $APPLICATION;
include_once("settings.php");
$oid = htmlspecialchars($_GET["oid"]); // айди офиса

if ($o_servers[$oid] != 'local') { // если запись АБТ ///////////////
	$sign = md5($_GET["cid"].$_GET["cle"].$_GET["cln"].$_GET["clt"]);
	$data = '{
"data":{
"calendarCellId":'.htmlspecialchars($_GET["cid"]).', 
"clientEmail":"'.htmlspecialchars($_GET["cle"]).'", 
"clientPhoneNumber":"'.htmlspecialchars($_GET["clt"]).'", 
"clientFIO":"'.htmlspecialchars($_GET["cln"]).'", 
"sign":"'.$sign.'"
}
}';
	$myurl = $o_servers[$oid].'/public/preorder/register/';
	$ch = curl_init($myurl);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Accept: application/json',
		'Content-Length: ' . strlen($data))
	);
	$response = curl_exec($ch);
	if(curl_errno($ch))
	{
		echo '<span style="color:red">Ошибка cURL: ' . curl_error($ch).'</span><br>';
	} else {
		if (CModule::IncludeModule('statistic')) { CStatEvent::AddCurrent('zapis', $oid); } // записываем в статистику событий битрикс
	}
	curl_close($ch); // Закрываем дескриптор

	$res2 = json_decode($response);
	$res2->data->pinCode = "Запишите пин-код: ".$res2->data->pinCode;
	$response = json_encode($res2, JSON_UNESCAPED_UNICODE);

} else { // если запись локальная //////////////////////////

	$cellid = htmlspecialchars($_GET["cid"]);
	$clientname = htmlspecialchars(str_replace(";", "", $_GET["cln"]));
	$clienttel = htmlspecialchars(str_replace(";", "", $_GET["clt"]));
	$clientemail = htmlspecialchars(str_replace(";", "", $_GET["cle"]));
	$file = $oid.'/queue.txt';
	$content = file($file); //Read the file into an array. Line number => line content
	$response = '{"command":"answer","data":"","status":"oops"}'; //по умолчанию занято
	if (CModule::IncludeModule('statistic')) { CStatEvent::AddCurrent('zapis', $oid); }

foreach($content as $lineNumber => &$lineContent) { //Loop through the array (the "lines")
	$row = explode(";", $lineContent);
	$symbols = array(".", ":", " ", PHP_EOL); //удаляемые символы
	$cidCheck = str_replace($symbols, "", $row[2].$row[3].$row[0]); //переменная для проверки cellid: дата.время.номерофиса
	if (($cidCheck == $cellid) and !isset($row[4])) { //если не занято
		$pincode = rand(1000, 9999);
		$dayid = (int)str_replace(".", "", $row[2]); //айди дня
		$lineContent = str_replace(PHP_EOL, "", $lineContent).";".$clientname.";".$clienttel.";".$clientemail.";".$pincode.PHP_EOL; //Modify the line
		$allContent = implode("", $content); //Put the array back into one string
		file_put_contents($file, $allContent); //Overwrite the file with the new content
		$response = '{"command":"answer","data":{"pinCode":"В указанное время обратитесь к менеджеру зала. При себе необходимо иметь паспорт.","registeredCalendarDayId":'.$dayid.'},"status":"ok"}';

		/* $mailFields = array( // отправка письма-уведомления в офис
			"CL_NAME" => $clientname,
			"CL_TEL" => $clienttel,
			"CL_EMAIL" => $clientemail,
			"DATA" => $row[2],
			"VREMIA" => $row[3],
			"OKNO" => $row[1]
		);
		if ($oid == 'des_vl_okt') { CEvent::Send('ERIC', 'r6', $mailFields, 'Y', 510); };
		if ($oid == 'des_nhk_eric') { CEvent::Send('ERIC', 'r6', $mailFields, 'Y', 520); }; */

		if ( !empty($clientemail) ) {
			$mymessage = 'Уважаемый клиент!<br>Ждем Вас '.$row[2].' к '.$row[3];
			$mymessage = substr($mymessage, 0, -1);
			$mymessage .= '.<br>В указанное время обратитесь к менеджеру зала. При себе необходимо иметь паспорт.';
			$headers  = "From: no-reply@dvec.ru\r\n";
			//$headers .= "Reply-To: pressa8@dvec.ru\r\n";
			//$headers .= "CC: pressa8@dvec.ru\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			mail($clientemail, 'Напоминание: Запись в офис ДЭК', $mymessage, $headers);
		}
		break;
	}
}
}

header('Content-type:application/json;charset=utf-8');
echo ($response); 
?>