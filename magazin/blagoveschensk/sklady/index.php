<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пункты выдачи");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.store.detail",
	"bootstrap_v4",
	Array(
		"CACHE_TIME" => "360000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"MAP_TYPE" => "0",
		"SET_TITLE" => "Y",
		"STORE" => "156"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>