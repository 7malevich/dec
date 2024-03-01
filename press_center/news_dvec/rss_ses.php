<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости Публичного акционерного общества «Дальневосточная энергетическая компания»");
?><?$arrFilter = Array(
"SECTION_ID" => Array(561,190),
);?>
<div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:rss.out",
	"",
	Array(
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "34",
		"IBLOCK_TYPE" => "news",
		"NUM_DAYS" => "60",
		"NUM_NEWS" => "20",
		"RSS_TTL" => "60",
		"SECTION_CODE" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"YANDEX" => "Y"
	)
);?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>