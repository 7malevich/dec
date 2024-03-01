<?
error_reporting(E_ALL);
ini_set('display_errors', 1);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("index");
?><ul>
	<li><a href="/company">О компании</a></li>
	<li><a href="/customs">Закупки</a></li>
	<li><a href="/press_center">Пресс-центр</a></li>
</ul>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>