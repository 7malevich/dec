<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Волонтерская программа");
?><p>
	 Дальневосточная энергетическая компания&nbsp; присоединилась к&nbsp; Проекту ПАО&nbsp; «РусГидро» и холдинга РАО «ЭС Востока» по&nbsp; социально-профессиональной адаптации детей-сирот и детей, оставшихся без попечения родителей в 2014 году. На сегодняшний день Программа успешно реализуется на базах Бикинского, Светлогорского детских домов, а также детского дома № 2 в г. Биробиджане.
</p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"template_vlnt",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "57",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Статьи",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	)
);?><br>
<p>
	 Читайте также о благотворительной, спонсорской и волонтерской деятельности на сайтах компаний:
</p>
<ul>
	<li><a href="http://www.rushydro.ru/sustainable_development/socialotvetstvenost/alms/" target="_blank">ПАО «РусГидро»</a></li>
	<li><a href="http://www.dvgk.ru/ru/static/o-volontiorstvie-v-dgk" target="_blank">АО «Дальневосточная генерирующая компания»</a></li>
	<li><a href="http://drsk.ru/blagotvoritelnaja_dejatelnost.html" target="_blank">АО «Дальневосточная распределительная сетевая компания»</a><br>
 </li>
</ul><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>