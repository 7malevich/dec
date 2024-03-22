<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Потенциальным клиентам");
?>
<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "PATH" => "",
    "SITE_ID" => "ru",
    "START_FROM" => "1",
),
    false
); ?>
<div class="container">
    <h1 class="h1-marginBot h1-relative"><?= $APPLICATION->showTitle() ?></h1>
</div>
<section class="block section-pt0">
    <div class="container">

    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"list_link", 
	array(
		"COMPONENT_TEMPLATE" => "list_link",
		"IBLOCK_TYPE" => "korporativnym",
		"IBLOCK_ID" => "273",
		"PARENT_SECTION" => "2063",
		"PARENT_SECTION_CODE" => "",
		"NEWS_COUNT" => "50",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"TEMPLATE_THEME" => "blue",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK_SECTION",
			1 => "",
		)
	),
	false
);?>

        <!-- <a class="link-with-lines border-top-bottom" href="formy-dogovorov-i-zayavleniy/">
            Формы договоров и заявлений            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="poryadok-zaklyucheniya-dogovora-1/">
            Порядок заключения договора            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="perechen-dokumentov-dlya-zaklyucheniya-dogovora-i-vneseniya-izmeneniy/">
            Перечень документов для заключения договора и внесения изменений            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="ispolnitelyam-kommunalnykh-uslug/">
            Исполнителям коммунальных услуг            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="byudzhetnym-organizatsiyam/">
            Бюджетным организациям            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="potrebitelyam-priravnennykh-k-naseleniyu/">
            Потребителям, приравненных к населению            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="energosbytovym-kompaniyam/">
            Энергосбытовым компаниям            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="vladeltsam-mikrogeneratsii-169/">
            Владельцам микрогенерации            <div class="link-with-lines_arrow "></div>
        </a> -->
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
