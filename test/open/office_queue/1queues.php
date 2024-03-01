
<?
error_reporting(E_ALL);
ini_set('display_errors', 1);



$data = '{}';

$ch = curl_init('http://172.19.126.223:48080/public/preorder/queues');
//$ch = curl_init('http://172.19.126.223:48080/public/preorder/calendar/11');
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