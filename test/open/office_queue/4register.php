<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

$myurl = 'http://172.19.126.223:48080/public/preorder/register/';
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
}
curl_close($ch); // Закрываем дескриптор

echo ($response); 
?>