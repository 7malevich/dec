<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	".default", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "0",
		"COLOR_OLD" => "C8C8C8",
		"COLOR_TYPE" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILTER_NAME" => "",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"NO_WORD_LOGIC" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "10",
		"PATH_TO_USER_PROFILE" => "",
		"PERIOD_NEW_TAGS" => "",
		"RATING_TYPE" => "",
		"RESTART" => "Y",
		"SHOW_CHAIN" => "Y",
		"SHOW_RATING" => "",
		"SHOW_WHEN" => "Y",
		"SHOW_WHERE" => "N",
		"TAGS_INHERIT" => "Y",
		"TAGS_PAGE_ELEMENTS" => "20",
		"TAGS_PERIOD" => "",
		"TAGS_SORT" => "NAME",
		"TAGS_URL_SEARCH" => "",
		"USE_LANGUAGE_GUESS" => "N",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"WIDTH" => "100%",
		"arrFILTER" => array(
			0 => "iblock_Main",
		),
		"arrFILTER_iblock_Vacancies" => array(
			0 => "all",
		),
		"arrFILTER_iblock_articles" => array(
			0 => "all",
		),
		"arrFILTER_iblock_disclosure" => array(
			0 => "all",
		),
		"arrFILTER_iblock_faq" => array(
			0 => "all",
		),
		"arrFILTER_iblock_news" => array(
			0 => "all",
		),
		"arrFILTER_iblock_otklucheniya" => array(
			0 => "all",
		),
		"arrFILTER_iblock_procurement" => array(
			0 => "all",
		),
		"arrFILTER_main" => array(
		),
		"arrWHERE" => array(
			0 => "iblock_news",
			1 => "iblock_procurement",
			2 => "iblock_faq",
			3 => "iblock_articles",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"arrFILTER_iblock_Main" => array(
			0 => "262",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>