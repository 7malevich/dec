<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
IncludeTemplateLangFile(__FILE__);

$arTemplateDescription =
	Array(
		"basket_line.php" =>
			Array(
				"NAME" => GetMessage("TSD_NAME_LINE"),
				"DESCRIPTION" => GetMessage("TSD_NAME_LINE_DESCR"),
				"PARAMS" =>
					Array(
						"BASKET_PAGE" => Array("NAME"=>GetMessage("TSD_PARAM_BASKET_PAGE_NAME"), "TYPE"=>"STRING", "MULTIPLE"=>"N", "DEFAULT"=>"/personal/basket.php", "COLS"=>25),
						"PERSONAL_PAGE" => Array("NAME"=>GetMessage("TSD_PARAM_PERSONAL_PAGE_NAME"), "TYPE"=>"STRING", "MULTIPLE"=>"N", "DEFAULT"=>"/personal/index.php", "COLS"=>25)
						)
				)
		);
?>