<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
IncludeTemplateLangFile(__FILE__);

$arrForms = array();
if (CModule::IncludeModule("form"))
{
	$rsForm = CForm::GetList($v1, $v2, array("SITE" => array($_REQUEST["site"])), $v3);
	while ($arForm = $rsForm->Fetch())
	{
		$arrForms[$arForm["ID"]] = "[".$arForm["ID"]."] ".$arForm["NAME"];	
	}
}

$arTemplateDescription["result_new/feedback.php"] = array(
	"NAME" => GetMessage("FORM_FEEDBACK_TEMPLATE_NAME"),
	"PARENT" => "result_new",
	"ICON" => "/bitrix/templates/.default/images/form/components/form_fill_ru.gif",
	"PARAMS" => array(			
		"WEB_FORM_ID" => array(
			"NAME" => GetMessage("FORM_WEB_FORM_ID"), 
			"TYPE" => "LIST",
			"VALUES" => $arrForms,
			"DEFAULT" => 8
			),
		"REDIRECT_URL" => array(
			"NAME" => GetMessage("FORM_REDIRECT_PAGE"), 
			"TYPE" => "STRING",
			"DEFAULT" => "contacts.php"
			)
		)
	);

$arTemplateDescription["result_new/feedback_en.php"] = array(
	"NAME" => GetMessage("FORM_FEEDBACK_EN_TEMPLATE_NAME"),
	"PARENT" => "result_new",
	"ICON" => "/bitrix/templates/.default/images/form/components/form_fill_en.gif",
	"PARAMS" => array(			
		"WEB_FORM_ID" => array(
			"NAME" => GetMessage("FORM_WEB_FORM_ID"), 
			"TYPE" => "LIST",
			"VALUES" => $arrForms,
			"DEFAULT" => 8
			),
		"REDIRECT_URL" => array(
			"NAME" => GetMessage("FORM_REDIRECT_PAGE"), 
			"TYPE" => "STRING",
			"DEFAULT" => "contacts.php"
			)
		)
	);
?>