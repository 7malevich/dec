<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	echo 'TEST CURL<BR>';
	$filefullpath='https://www.yandex.ru';
	echo htmlspecialchars($filefullpath).'<br>';
	
$ch = curl_init($filefullpath);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// get headers too with this line
curl_setopt($ch, CURLOPT_HEADER, 1);
$result = curl_exec($ch);
// get cookie
// multi-cookie variant contributed by @Combuster in comments
// preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);

preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches); $cookies = array(); foreach($matches[1] as $item) { parse_str($item, $cookie); $cookies = array_merge($cookies, $cookie); }

$cookies = array();
foreach($matches[1] as $item) {
    parse_str($item, $cookie);
    $cookies = array_merge($cookies, $cookie);
}
var_dump($cookies);

	curl_close($ch);

	echo '<BR>';
	echo 'TEST END';

?>