<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заявки на изменения на сайте");
?><?$APPLICATION->IncludeComponent(
	"bitrix:support.ticket",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"MESSAGES_PER_PAGE" => "20",
		"MESSAGE_MAX_LENGTH" => "70",
		"MESSAGE_SORT_ORDER" => "asc",
		"SEF_MODE" => "N",
		"SET_PAGE_TITLE" => "Y",
		"SET_SHOW_USER_FIELD" => array(),
		"SHOW_COUPON_FIELD" => "N",
		"TICKETS_PER_PAGE" => "50",
		"VARIABLE_ALIASES" => Array("ID"=>"ID")
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>