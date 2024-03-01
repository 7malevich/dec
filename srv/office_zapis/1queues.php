<?
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//set_time_limit(8);

include_once("settings.php");
$oid = htmlspecialchars($_GET["oid"]); // айди офиса

/////////////////////////////////////////////////////////////
function send_warning ($oid, $w_type, $w_arr) {
	global $o_addresses;
	global $o_servers;
	global $o_emails;
	if ($w_type == 'slots') {
		$my_message = 'Внимание! Клиент открыл страницу предварительной записи в ЕРИЦ '.$o_addresses[$oid].' - заканчиваются свободные талоны для записи, необходимо добавить! ';
		foreach ($w_arr as $k => $v) {
			$my_message .= $k . ' - осталось ' . $v . ' талонов. ';
		}
	}
	if ($w_type == 'connection') {
		$my_message = 'Внимание! Клиент открыл страницу предварительной записи в ЕРИЦ '.$o_addresses[$oid].' - таймаут или ошибка сервера эл.очереди! Сервер: '.$o_servers[$oid];
	}
	$mailFields = array(
	"THEME"               => 'Ошибка записи в ЕРИЦ: '.$o_addresses[$oid],
	"MESSAGE"             => $my_message,
	"EMAIL_TO"            => 'pressa8@dvec.ru, '.$o_emails[$oid]
    );
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); //Подключили ядро битрикса
	CEvent::Send('zapis_ofis_abt', 'ru', $mailFields, 'N', 598);
	return null;
}
/////////////////////////////////////////////////

if ($o_servers[$oid] != 'local') { // если запись АБТ ///////////////

	$myurl = $o_servers[$oid].'/public/preorder/queues';
	$data = '{}';
	$ch = curl_init($myurl);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 7); //timeout in seconds
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
	    $response = '{"msg":"'.curl_error($ch).'"}';
		$my_err = 'connection';
	  }
	curl_close($ch); // Закрываем дескриптор

	if (!isset($response)) { 
	    $response = '{"data": {"qFreeSlots": 0}}'; 
		$my_err = 'connection';
	}

	if (!isset($my_err)) { // если нет ошибок связи
		$my_arr = json_decode($response, true);
		$q_sum = 0;
		foreach ($my_arr["data"] as $v) {   // поиск очередей с кол-вом слотов ниже заданного
			if (($v["qFreeSlots"] > 0) and ($v["qFreeSlots"] < $qFreeSlotsThreshold)) {
				$send_me[$v["qFullName"]] = $v["qFreeSlots"];
			}
			$q_sum = $q_sum + $v["qFreeSlots"];
		}
		if ($q_sum == 0) {
			$send_me['Все очереди'] = '0';
		}
		if (isset($send_me)) { // мало слотов
			send_warning($oid, 'slots', $send_me);
		}
	} else { // если ошибка связи
		send_warning($oid, 'connection', null);
	}

} else { // если запись локальная ///////////////////////////
	$response = '{"command":"answer","data":[{"position":1,"qFreeSlots":1,"qFullName":"Запись для частных клиентов","qId":"1","qName":"Запись для частных клиентов"}],"status":"ok"}';
}

/////////////////////////////////////////////////////////////////////////

header('Content-type:application/json;charset=utf-8');
echo ($response); 

?>