<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	echo 'TEST CURL<BR>';

	$filefullpath = 'https://www.yandex.ru/';
	echo htmlspecialchars($filefullpath).'<br>';
	
	$handle = curl_init($filefullpath);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
	/* Получить HTML или что там в урле */
	$response = curl_exec($handle);
	$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
	echo 'HTTP_CODE: '.$httpCode.'<BR>';
	
	$cookielist = curl_getinfo($handle, CURLINFO_COOKIELIST); 
	echo 'COOKIELIST: ';
	var_dump($cookielist);
	echo '<BR>';

	$headerfunction = curl_getinfo($handle, CURLOPT_HEADERFUNCTION); 
	echo 'HEADERFUNCTION: ';
	var_dump($headerfunction);
	echo '<BR>';
	

	curl_close($handle);
	echo 'TEST END';

?>