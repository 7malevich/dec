<?
error_reporting(E_ALL);
ini_set('display_errors', 1);


$data = '{}';
$param1 = htmlspecialchars($_GET["did"]);
$param2 = htmlspecialchars($_GET["qid"]);
$myurl = 'http://172.19.126.223:48080/public/preorder/day/'.$param1.'?queueId='.$param2;
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