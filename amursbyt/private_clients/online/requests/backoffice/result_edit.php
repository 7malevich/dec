<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Онлайн-заявка на оказание услуг");
?><?$APPLICATION->IncludeComponent(
	"zayavki:form.result.edit",
	"",
	Array(
		"SEF_MODE" => "N",
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"EDIT_ADDITIONAL" => "Y",
		"EDIT_STATUS" => "Y",
		"LIST_URL" => "index.php",
		"VIEW_URL" => "index.php",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "Y",
		"USE_EXTENDED_ERRORS" => "N"
	)
);?> 
<!-- <p> <? echo("результат: ".$_REQUEST[RESULT_ID]) ?> </p> -->
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>