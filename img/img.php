<?
$cur_dir = "/img";
$download_dir = "/images";

function init_params($url) // инициализирует параметры из строки запроса
{
	if (strpos($url,"?")>0)
	{
		$par = substr($url,strpos($url,"?")+1,strlen($url));
		$arr = explode("#",$par);
		$par = $arr[0];
		$arr1 = explode("&",$par);
		foreach ($arr1 as $pair)
		{
			$arr2 = explode("=",$pair);
			global $$arr2[0];
			$$arr2[0] = $arr2[1];
		}
	}
}

if(($p=strpos($REQUEST_URI, "?"))!==false)
	$path = substr($REQUEST_URI, 0, $p);
else
	$path = $REQUEST_URI;

$path = str_replace("..", "", $path);
if(substr($path, 0, strlen($cur_dir))==$cur_dir)
	$path = substr($path, strlen($cur_dir));

$filename = $_SERVER["DOCUMENT_ROOT"].$download_dir.$path;
if(file_exists($filename))
{
	header('P3P: policyref="http://"'.$_SERVER["HTTP_HOST"].'"/bitrix/p3p.xml", CP="NOI CURa ADMa DEVa TAIa OUR BUS IND UNI COM NAV INT"');

	set_time_limit(0);
	session_cache_limiter('');
	session_start();
	init_params($REQUEST_URI);
	define("GENERATE_EVENT","Y");
	include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	ob_end_clean();
	session_write_close();
	LocalRedirect($download_dir.$path);
}
?>