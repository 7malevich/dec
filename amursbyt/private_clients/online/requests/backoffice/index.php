<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список заявок");
?> 
<br />
 <?$APPLICATION->IncludeComponent("bitrix:form.result.list", "templateabo1", array(
	"WEB_FORM_ID" => "25",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/amur-blag/private_clients/service/requests/backoffice/",
	"VIEW_URL" => "",
	"EDIT_URL" => "result_edit.php",
	"NEW_URL" => "",
	"SHOW_ADDITIONAL" => "Y",
	"SHOW_ANSWER_VALUE" => "N",
	"SHOW_STATUS" => "Y",
	"NOT_SHOW_FILTER" => array(
		0 => "",
		1 => "",
	),
	"NOT_SHOW_TABLE" => array(
		0 => "new_field_51427",
		1 => "new_field_73606",
		2 => "new_field_20465",
		3 => "new_field_61184",
		4 => "new_field_56479",
		5 => "new_field_91124",
		6 => "new_field_31474",
		7 => "work_status",
		8 => "",
	),
	"CHAIN_ITEM_TEXT" => "",
	"CHAIN_ITEM_LINK" => ""
	),
	false
);?> 
<br />
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>