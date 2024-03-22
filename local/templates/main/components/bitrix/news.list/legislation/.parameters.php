<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arProperty = array();

if(is_array($arCurrentValues["IBLOCK_ID"])){
	$iBlocks = $arCurrentValues["IBLOCK_ID"];
}else if(isset($arCurrentValues["IBLOCK_ID"]) && is_numeric(trim($arCurrentValues["IBLOCK_ID"]))){
	$iBlocks = array(trim($arCurrentValues["IBLOCK_ID"]));
}

foreach($iBlocks as $iBlock) {
	if($iBlock) {
		$rsProp = CIBlockProperty::GetList(array("sort" => "asc", "name" => "asc"), array("ACTIVE" => "Y", "IBLOCK_ID" => $iBlock));
		while ($arr = $rsProp->Fetch()) {
			$arProperty[$iBlock][$arr["CODE"]] = "[" . $arr["CODE"] . "] " . $arr["NAME"];
		}
	}
}

$arTemplateParameters = array(
	"DISPLAY_DATE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_NAME" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_NAME"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
);

foreach($iBlocks as $iBlock){
	if($iBlock) {
		$arTemplateParameters["PROP_NAME_" . $iBlock] = array(
			"PARENT" => "IBLOCK_" . $iBlock,
			"NAME" => GetMessage("EL_T_L_PROP_NAME"),
			"TYPE" => "LIST",
			"VALUES" => array_merge(array("(не выбрано)"), $arProperty[$iBlock]),
			"DEFAULT" => '',
		);
		$arTemplateParameters["PROP_REQUISITES_" . $iBlock] = array(
			"PARENT" => "IBLOCK_" . $iBlock,
			"NAME" => GetMessage("EL_T_L_PROP_REQUISITIES"),
			"TYPE" => "LIST",
			"VALUES" => array_merge(array("(не выбрано)"), $arProperty[$iBlock]),
			"DEFAULT" => '',
		);
		$arTemplateParameters["PROP_DESCRIPTION_" . $iBlock] = array(
			"PARENT" => "IBLOCK_" . $iBlock,
			"NAME" => GetMessage("EL_T_L_PROP_DESCRIPTION"),
			"TYPE" => "LIST",
			"VALUES" => array_merge(array("(не выбрано)"), $arProperty[$iBlock]),
			"DEFAULT" => '',
		);
	}
}
?>
