<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Формы договоров и заявлений");
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


<section class="section-mt-2">
    <div class="container">
        <div class="spoiler">
            <div class="spoiler__title">
                <div class="h5">
                    Типовой договор энергоснабжения
                </div>
            </div>
            <div class="spoiler__content" style="display: none;">
                <?/*$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"legislation", 
	array(
		"COMPONENT_TEMPLATE" => "legislation",
		"IBLOCK_TYPE" => "Main",
		"IBLOCK_ID" => "264",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "Файл документа",
			2 => "",
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
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
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
		"MESSAGE_404" => ""
	),
	false
);*/?>
            </div>
        </div>

        <div class="spoiler">
            <div class="spoiler__title">
                <div class="h5">
                    Типовой договор купли-продажи                </div>
            </div>
            <div class="spoiler__content">
                <div class="file-download-list">
                    <div class="text-block">
                    </div>
                    <a href="/upload/iblock/1f9/x9chcdemqlrp2rij0ymr2hi1i2718nv3/tdkp.doc" class="file-download ">
                        <div class="h6">
                            Форма договора купли-продажи (поставки) электроэнергии                        </div>
                        <div class="c2">
                            doc, 161 кб                        </div>
                    </a>
                    <a href="/upload/iblock/0ad/h8n7oait99vc16azjbuq26iajp2f3852/tdkp_esc.doc" class="file-download ">
                        <div class="h6">
                            Форма договора купли-продажи электроэнергии с ЭСК                        </div>
                        <div class="c2">
                            doc, 166 кб                        </div>
                    </a>
                    <a href="/upload/iblock/84d/rke6i12u558mtxrn0eujwmuioewiwrgj/tdkp_kpes.doc" class="file-download ">
                        <div class="h6">
                            Форма договора купли-продажи электроэнергии в целях компенсации потерь в электрических сетях                        </div>
                        <div class="c2">
                            doc, 144 кб                        </div>
                    </a>
                    <a href="/upload/iblock/8e6/8fz2r7upe7vjwct11kmk9c50xnwu174d/p1_tdkp2018.xlsx" class="file-download ">
                        <div class="h6">
                            Форма приложения № 1 к договору купли-продажи                        </div>
                        <div class="c2">
                            xlsx, 17 кб                        </div>
                    </a>
                    <a href="/upload/iblock/fc8/sz5l3ul8py6e89nm0teexm3c5c2m34x6/p2_5_tdkp2018.docx" class="file-download ">
                        <div class="h6">
                            Форма приложений №№ 2-5 к договору купли-продажи                        </div>
                        <div class="c2">
                            docx, 23 кб                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="spoiler">
            <div class="spoiler__title">
                <div class="h5">
                    Типовой договор купли-продажи для объектов микрогенерации                </div>
            </div>
            <div class="spoiler__content">
                <div class="file-download-list">
                    <div class="text-block">
                    </div>
                    <a href="/upload/iblock/b91/929sj7jwbkhdtl2mnuwak2xso94v3q5h/tdkp_omg_yur.docx" class="file-download ">
                        <div class="h6">
                            Форма договора купли-продажи электроэнергии, производимой на объектах микрогенерации                        </div>
                        <div class="c2">
                            docx, 42 кб                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
