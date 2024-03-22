<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дистанционные сервисы");
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
    <section class="block block_gray section-pt0">
        <div class="container">
            <div class="bloks-with-img">

                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"distantsionnye", 
	array(
		"COMPONENT_TEMPLATE" => "distantsionnye",
		"IBLOCK_TYPE" => "korporativnym",
		"IBLOCK_ID" => "274",
		"PARENT_SECTIONS" => array(
			0 => "2062",
			1 => "",
			2 => "",
		),
		"SECTION_ID" => "",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
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
			1 => "LINK_SECRTION",
			2 => "",
		),
		"PARENT_SECTIONS_6" => array(
			0 => "2059",
			1 => "",
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
);?>

                <!-- <div class="bloks-with-img__item bloks-with-img__big">
                    <h5 class="h5">Личный кабинет</h5>
                    <div class="bloks-with-img__img" style="background-image: url('https://resk.smhost.ru/upload/resize_cache/iblock/dd4/dv28kwr7m4lckp2qukw3knfvzs477d1l/560_588_1/servises_lk.jpg');"></div>
                    <a href="/korporativnym-klientam/distantsionnye-servisy1/lichnyy-kabinet/"></a>
                </div>

                <div class="bloks-with-img__wrapper">

                    <div class="bloks-with-img__row">

                        <div class="bloks-with-img__item bloks-with-img__small">
                            <h5 class="h5">Подача заявлений Онлайн</h5>
                            <div class="bloks-with-img__img" style="background-image: url('https://resk.smhost.ru/upload/resize_cache/iblock/f6d/8ppisdvcvhevujfey34pg394xhahkfi7/374_240_1/pay.jpg');"></div>
                            <a href="/korporativnym-klientam/distantsionnye-servisy1/podacha-zayavleniy-onlayn/"></a>
                        </div>

                        <div class="bloks-with-img__item bloks-with-img__small">
                            <h5 class="h5">Электронный документооборот</h5>
                            <div class="bloks-with-img__img" style="background-image: url('https://resk.smhost.ru/upload/resize_cache/iblock/8e6/mt23r7a9dq4o1kvro14el071tdwzsikb/374_240_1/servises_elektronnaya_kvitantsiya.jpg');"></div>
                            <a href="/korporativnym-klientam/distantsionnye-servisy1/elektronnyy-dokumentooborot/"></a>
                        </div>

                    </div>

                    <div class="bloks-with-img__row">

                        <div class="bloks-with-img__item bloks-with-img__small">
                            <h5 class="h5">Поиск входящего документа</h5>
                            <div class="bloks-with-img__img" style="background-image: url('https://resk.smhost.ru/upload/resize_cache/iblock/d7b/gq41v0n4envi88vs9wyy247bj14l1aj1/374_240_1/ol69cw20lyd85sdpo2sfj8cnn0i3vnwd.png');"></div>
                            <a href="/korporativnym-klientam/distantsionnye-servisy1/poisk-vkhodyashchego-dokumenta/"></a>
                        </div>

                        <div class="bloks-with-img__item bloks-with-img__small">
                            <h5 class="h5">Заказ обратного звонка</h5>
                            <div class="bloks-with-img__img" style="background-image: url('https://resk.smhost.ru/upload/resize_cache/iblock/cad/sv3ugzgarg7zsszkzrrwyoozmyyx4svi/374_240_1/servises_mobile_app.jpg');"></div>
                            <a href="/korporativnym-klientam/distantsionnye-servisy1/zakaz-obratnogo-zvonka/"></a>
                        </div>

                    </div>
                </div> -->

            </div>
        </div>
    </section>
    <section class="block section-pb0">
        <div class="container">
            <h2 class="color-blue h2-marginBot">Консультации</h2>
            <div class="elements-row">
                <div class="elements-row__one-third elements-row--relative">
                    <!--<img class="elements-row__inner-absolute" src="https://storage.yandexcloud.net/storage.rushydro.ru/medialibrary/176/u8q3sygs0s72o3o6xez1mc66kwc03iq4/2.png" alt="">-->
                </div>
                <div class="elements-row__two-thirds--ml">
                    <div class="text-block">
                        <p class="p2">В разделах ниже описаны способы связи со специалистами ПАО "РЭСК"</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="block section-pt0">
        <div class="container">
            <div class="elements-row">
                <div class="elements-row__one-third pda-off">
                </div>
                <div class="elements-row__two-thirds--ml">

                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"list_link", 
	array(
		"COMPONENT_TEMPLATE" => "list_link",
		"IBLOCK_TYPE" => "korporativnym",
		"IBLOCK_ID" => "274",
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
		"PARENT_SECTION" => "2062",
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
		"MESSAGE_404" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK_SECTION",
			1 => "",
		)
	),
	false
);?>

                    <!-- <a class="link-with-lines border-top-bottom" href="/korporativnym-klientam/distantsionnye-servisy1/internet-priemnaya/">
                        Интернет-приемная
                        <div class="link-with-lines_arrow">
                        </div>
                    </a>
                    <a class="link-with-lines border-top-bottom" href="/korporativnym-klientam/distantsionnye-servisy1/uvedomleniya-ob-ogranicheniyakh/">
                        Уведомления об ограничениях
                        <div class="link-with-lines_arrow">
                        </div>
                    </a> <a class="link-with-lines border-top-bottom" href="/korporativnym-klientam/distantsionnye-servisy1/informatsionnye-soobshcheniya-po-elektronnoy-pochte/">
                        Информационные сообщения по электронной почте
                        <div class="link-with-lines_arrow">
                        </div>
                    </a> <a class="link-with-lines border-top-bottom" href="/korporativnym-klientam/distantsionnye-servisy1/zapis-v-ofis/">
                        Запись в офис
                        <div class="link-with-lines_arrow">
                        </div>
                    </a> <a class="link-with-lines border-top-bottom" href="/korporativnym-klientam/distantsionnye-servisy1/chat-boty/">
                        Чат-боты
                        <div class="link-with-lines_arrow">
                        </div>
                    </a> <a class="link-with-lines border-top-bottom" href="/korporativnym-klientam/distantsionnye-servisy1/videokonsultatsiya/">
                        Видеоконсультация
                        <div class="link-with-lines_arrow">
                        </div>
                    </a> -->
                </div>
            </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>