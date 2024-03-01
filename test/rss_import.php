<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:rss.show", 
	"template1", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"NUM_NEWS" => "",
		"OUT_CHANNEL" => "N",
		"PROCESS" => "NONE",
		"URL" => "http://www.rushydro.ru/rss/press/novosti-v-strane-i-mire/",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>