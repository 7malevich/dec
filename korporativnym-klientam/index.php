<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корпоративным клиентам");
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


<div>
    <section class="block block_overflow-hidden section-pt0">
        <div class="container">
            <div class="h2 color-blue h2-marginBot">Дистанционные сервисы</div>
            
            <div class="banners-slider swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper banners-block">

                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"legislation", 
	array(
		"COMPONENT_TEMPLATE" => "legislation",
		"IBLOCK_TYPE" => "korporativnym",
		"IBLOCK_ID" => "273",
        "PARENT_SECTION" => "2059",
        "PARENT_SECTION_CODE" => "",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "DESC",
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
		"PROP_NAME_273" => "0",
		"PROP_REQUISITES_273" => "0",
		"PROP_DESCRIPTION_273" => "0"
	),
	false
);?> 

                    <!-- <a href="distantsionnye-servisy1/lichnyy-kabinet/" class="swiper-slide swiper-slide-active" id="bx_565502798_643" style="width: 240.75px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">
                                Интернет-приемная
                            </div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/6bb/tm93vi25ekke6v75wsxd9hunou8yqbs8.png')"></div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide swiper-slide-next" id="bx_565502798_644" style="width: 240.75px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">
                                Онлайн-заказ услуг
                            </div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/447/xtuawm35avqornw2ewji1dwcfpnmyzwm.png')"></div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="bx_565502798_645" style="width: 240.75px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">
                                Заказать обратный звонок
                            </div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/446/kyqnguir2qhyf6opul9a72dke6lg83tf.png')"></div>
                        </div>
                    </a>
                    <a href="distantsionnye-servisy1/elektronnyy-dokumentooborot/" class="swiper-slide" id="bx_565502798_646" style="width: 240.75px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">
                                Электронный документооборот
                            </div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/32d/uxs4yak8x8fk4b6p8fugnq6wp38ptri2.png')"></div>
                        </div>
                    </a> -->

                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
    <section class="block block_gray">
        <div class="container">
            <h2 class="color-blue h2-marginBot">Потенциальным клиентам</h2>
            <div class="elements-row element-row__fullscreen-1280">
                <div class="elements-row__one-third">
                    <a href="#" class="content-block content-block_before content-block_outer" style="display:block;">
                        <div class="p3 color-black">
                            Документы, необходимые для заключения договора
                        </div>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="mt-32 ml-a" style="display:block;">
                            <path d="M8.95668 30.9547L30.9556 8.95585M30.9556 8.95585L13.0618 8.93621M30.9556 8.95585L30.9752 26.8496" stroke="#F08400" stroke-width="4" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="elements-row__two-thirds--ml">
                    <p class="p2">Для получения информации о состоянии процесса заключения договора энергоснабжения (купли-продажи (поставки) электрической энергии), заявителю необходимо обратиться к специалисту ПАО «РЭСК» по телефонам, указанным в разделе «<a href="">Офисы обслуживания</a>».</p>
                    <a class="button button_mt" href="potentsialnym-klientam/">
                        <div class="button_inner">
                            Подробнее
                            <div class="button_arrow"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="block">
        <div class="container">
            <h2 class="color-blue h2-marginBot">Оплата</h2>
            <div class="elements-row element-row__fullscreen-1280">
                <div class="elements-row__one-third">
                    <p class="p2">
                        Размер задолженности по оплате электрической энергии можно узнать в <a href="">офисе обслуживания</a>.
                    </p>
                </div>
                <div class="elements-row__two-thirds--ml">
                    <p>Исполнители коммунальной услуги обязаны вносить в адрес гарантирующего поставщика оплату стоимости поставленной за расчетный период электрической энергии (мощности) до 15-го числа месяца, следующего за расчетным периодом, если соглашением с гарантирующим поставщиком не предусмотрен более поздний срок оплаты (п.81 Основных положений функционирования розничных рынков электрической энергии).</p>
                    <p>Покупатели, приобретающие электрическую энергию для ее поставки населению, обязаны оплачивать стоимость электрической энергии (мощности) в объеме потребления населения за расчетный период до 15-го числа месяца, следующего за расчетным периодом (п.81 Основных положений функционирования розничных рынков электрической энергии).</p>
                    <a class="button button_mt" href="oplata1/">
                        <div class="button_inner">
                            Подробнее
                            <div class="button_arrow"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


