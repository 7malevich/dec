<?
//Файл используется для задания массива соответствий 
//между страницами старого сайта и страницами нового сайта.
//Т.о. пользователи пришедшие по устаревшим закладкам - 
//будут правильно перенаправлены.

$arPagesInc = Array(
"personal.site.com"  => "/personal/"
);

$pg = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$from = array_keys($arPagesInc);
for($i=0; $i<count($from); $i++)
{
	if(strpos($pg, $from[$i])!==false)
	{
		$REQUEST_URI=$arPagesInc[$from[$i]];
		require($_SERVER["DOCUMENT_ROOT"].$REQUEST_URI);
		die();
	}
}
?>