<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<?
	$mypath = $_SERVER["DOCUMENT_ROOT"]."/srv/elkvit/";
	$curr_counter = file_get_contents($mypath."30.txt");
	echo('counter: '.$curr_counter);
	$myfile = file_put_contents($mypath."30.txt", ++$curr_counter , LOCK_EX);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>