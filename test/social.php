<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><div>
	 Text here.... <br>
</div>
<div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.share",
	"",
	Array(
		"HANDLERS" => array("lj","facebook","twitter","vk"),
		"HIDE" => "Y",
		"PAGE_TITLE" => "",
		"PAGE_URL" => "",
		"SHORTEN_URL_KEY" => "",
		"SHORTEN_URL_LOGIN" => ""
	)
);?>
</div>

<?echo($_SERVER["DOCUMENT_ROOT"]);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

