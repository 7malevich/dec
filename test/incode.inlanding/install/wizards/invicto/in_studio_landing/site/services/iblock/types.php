<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("iblock"))
	return;

$arTypes = Array(
	Array(
		"ID" => "in_studio_landing_".WIZARD_SITE_ID,
		"SECTIONS" => "Y",
		"IN_RSS" => "N",
		"SORT" => 100,
		"LANG" => Array("ru" => array("NAME"=>GetMessage("NAME_TYPE")), "en" => array("NAME"=>"CarService")),
	)
);

$iblockType = new CIBlockType;
foreach($arTypes as $arType)
{
	$dbType = CIBlockType::GetList(Array(),Array("=ID" => $arType["ID"]));
	if($dbType->Fetch())
		continue;

	$iblockType->Add($arType);
}