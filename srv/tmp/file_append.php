<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$WEB_FORM_ID = "77";
// пишем в лог
$mypath = $_SERVER["DOCUMENT_ROOT"]."/srv/ias/ip/";
$myfile = file_put_contents($mypath.$WEB_FORM_ID.".txt", date_create()->format('Y-m-d')."\t"."0".PHP_EOL , FILE_APPEND | LOCK_EX);
?>