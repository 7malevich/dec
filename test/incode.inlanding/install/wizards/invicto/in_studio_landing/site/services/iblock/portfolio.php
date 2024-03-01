<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("iblock"))
	return;

$iblockXMLFile = WIZARD_SERVICE_RELATIVE_PATH."/xml/".LANGUAGE_ID."/portfolio.xml"; 
$iblockCode = "in_portfolio_".WIZARD_SITE_ID; 
$iblockType = "in_studio_landing_".WIZARD_SITE_ID; 

$rsIBlock = CIBlock::GetList(array(), array("CODE" => $iblockCode, "TYPE" => $iblockType));
$iblockID = false; 
if ($arIBlock = $rsIBlock->Fetch())
{
	$iblockID = $arIBlock["ID"]; 
	if (WIZARD_REINSTALL_DATA)
	{
		CIBlock::Delete($arIBlock["ID"]); 
		$iblockID = false; 
	}
}

if($iblockID == false)
{
	$permissions = Array(
			"1" => "X",
			"2" => "R"
		);
	$iblockID = WizardServices::ImportIBlockFromXML(
		$iblockXMLFile,
		$iblockCode,
		$iblockType,
		WIZARD_SITE_ID,
		$permissions
	);

	if ($iblockID < 1)
		return;	
	
	//IBlock fields
	$iblock = new CIBlock;
	$arFields = Array(
		"ACTIVE" => "Y",
		"FIELDS" => array ( 
			'IBLOCK_SECTION' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => '', 
			), 
			'ACTIVE' => array ( 
				'IS_REQUIRED' => 'Y', 
				'DEFAULT_VALUE' => 'Y', 
			), 
			'ACTIVE_FROM' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => '=today', 
			), 
			'ACTIVE_TO' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => '', 
			), 
			'SORT' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => '', 
			), 
			'NAME' => array ( 
				'IS_REQUIRED' => 'Y', 
				'DEFAULT_VALUE' => '', 
			), 
			'PREVIEW_PICTURE' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => array ( 
					'FROM_DETAIL' => 'Y', 
					'SCALE' => 'Y', 
					'WIDTH' => '350', 
					'HEIGHT' => '', 
					'IGNORE_ERRORS' => 'N', 
					'DELETE_WITH_DETAIL' => 'Y', 
					'UPDATE_WITH_DETAIL' => 'Y' 
				), 
			), 
			'PREVIEW_TEXT_TYPE' => array ( 
				'IS_REQUIRED' => 'Y', 
				'DEFAULT_VALUE' => 'text', 
			), 
			'PREVIEW_TEXT' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => '', 
			), 
			'DETAIL_PICTURE' => array ( 
				'IS_REQUIRED' => 'Y', 
				'DEFAULT_VALUE' => array ( 
					'SCALE' => 'Y', 
					'WIDTH' => '500', 
					'HEIGHT' => '', 
					'IGNORE_ERRORS' => 'N', 
				), 
			), 
			'DETAIL_TEXT_TYPE' => array ( 
				'IS_REQUIRED' => 'Y', 
				'DEFAULT_VALUE' => 'text', 
			), 
			'DETAIL_TEXT' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => '', 
			), 
			'XML_ID' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => '', 
			), 
			'CODE' => array ( 
				'IS_REQUIRED' => 'Y', 
				'DEFAULT_VALUE' => array( 
					'UNIQUE' => 'Y', 
					'TRANSLITERATION' => 'Y', 
					'TRANS_SPACE' => '_', 
					'TRANS_CASE' => 'L', 
					'TRANS_OTHER' => '_' 
				), 
			), 
			'TAGS' => array ( 
				'IS_REQUIRED' => 'N', 
				'DEFAULT_VALUE' => '', 
				), 
			), 
		"CODE" => $iblockCode, 
		"XML_ID" => $iblockCode,
		"NAME" => $iblock->GetArrayByID($iblockID, "NAME"),
	);
	
	$iblock->Update($iblockID, $arFields);
}
else
{
	$arSites = array(); 
	$db_res = CIBlock::GetSite($iblockID);
	while ($res = $db_res->Fetch())
		$arSites[] = $res["LID"]; 
	if (!in_array(WIZARD_SITE_ID, $arSites))
	{
		$arSites[] = WIZARD_SITE_ID;
		$iblock = new CIBlock;
		$iblock->Update($iblockID, array("LID" => $arSites));
	}
}


CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/_index.php", array("PORTFOLIO_IBLOCK_ID" => $iblockID));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/_index.php", array("PORTFOLIO_IBLOCK_TYPE" => $iblockType));