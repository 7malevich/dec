<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "PATH" => "",
    "SITE_ID" => "ru",
    "START_FROM" => "0",
),
    false
); ?>

    <div class="container">
        <h1 class="h1-marginBot h1-relative"><?= $APPLICATION->showTitle() ?></h1>
    </div>

    <section>
        <div class="block section-pb0 section-pt0">
            <div class="top-page-img top-page-img--company"
                 style="background-image: url('<?= DEFAULT_TEMPLATE_PATH ?>/img/company.jpg');">
            </div>
        </div>
    </section>

    <section>
        <div class="block block_gray">
            <div class="container">
                <div class="elements-row element-row__fullscreen-1280">
                    <div class="elements-row__one-third elements-row--trans-top-256">
                        <div class="content-block content-block_before">
                            <div class="p3">
                                ПАО «РЭСК» - крупнейшая энергосбытовая компания на территории Рязани и Рязанской области
                            </div>
                        </div>
                    </div>
                    <div class="elements-row__two-thirds--ml">
                        <p class="p2">
                            ПАО «Рязанская энергетическая сбытовая компания» является дочерним зависимым обществом АО
                            «Энергосбытовая компания РусГидро».
                        </p><br>
                        <p class="p2">ПАО «РЭСК» - крупнейшая энергосбытовая компания, занимающая доминирующее положение
                            на розничном рынке электроэнергии на территории Рязани и Рязанской области, обслуживает
                            42,25% регионального электроэнергетического рынка.</p><br>
                        <div class="elements-row elements-row__numbers">
                            <div class="elements-row__half">
                                <div class="middle-number">
                                    <div class="middle-number__content middle-number__orange">
                                        435
                                        <div class="middle-number__sub middle-number__sub-ml16">
                                            тыс.
                                        </div>
                                    </div>
                                    <p class="t2">
                                        бытовых абонентов
                                    </p>
                                </div>
                            </div>
                            <div class="elements-row__half">
                                <div class="middle-number">
                                    <div class="middle-number__content middle-number__orange">
                                        11
                                        <div class="middle-number__sub middle-number__sub-ml16">
                                            тыс.
                                        </div>
                                    </div>
                                    <p class="t2">
                                        корпоративных клиентов
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block block_relative">
            <div class="container">
                <h2 class="h2 color-blue h2-marginBot">География присутствия</h2>
                <div class="map-filters">
                    <div class="switch map-switch" style="margin-left: auto;">
                        <div class="switch__title">
                            Вид:
                        </div>
                        <div class="switch__button">
                            <div class="switch__button-item switch__button-item--active" id="geography-map-switch"
                                 style="width: 130.8px;">Карта
                            </div>
                            <div class="switch__button-item" id="geography-table-switch" style="width: 130.8px;">
                                Таблица
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="geography__wrapper">
                <div class="geography-map " id="geography-map" style="">
                    <div class="button-center-map">
                        <img src="/local/templates/main/img/earth.svg" alt="">
                    </div>
                    <div class="button-page-map button-page-map--show">
                        <a href="/company/company_geography/"></a>
                    </div>
                    <div id="wrapMap">
                        <iframe style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A5f8f9dac2da4c43a7645540933d436e2a3a13b5a094752354af9114d3756d0bc&amp;source=constructor"
                                width="1150" height="350" frameborder="0"></iframe>

                    </div>
                    <div class="geography-table" id="geography-table">
                        <div class="container">
                            <div class="geography-table__inner">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="geography-coordinates" id="geography-coordinates">
                    <div class="geography-coordinates__item" style="display: none;" data-name="Головной офис Рязани"
                         data-type="" data-station-img="" data-color="" data-color-active="true" data-power=""
                         data-power-active="true" data-district="" data-district-active="true"
                         data-coordinates="54.624249, 39.718795" data-active="true" data-date-start="" data-river=""
                         data-url="/company/company_geography/golovnoy-ofis-ryazani/" data-altertext="">
                        <div class="geography-coordinates__item-text">
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .select-with-ico .option-ico_582E91::after {
                    background: #582E91;
                }

                .geography-table__type-color--582E91::before {
                    background: #582E91;
                }

                .informer__inner .informer__inner-item--582E91::before {
                    background: #582E91;
                }

                .select-with-ico .option-ico_00AEEF::after {
                    background: #00AEEF;
                }

                .geography-table__type-color--00AEEF::before {
                    background: #00AEEF;
                }

                .informer__inner .informer__inner-item--00AEEF::before {
                    background: #00AEEF;
                }

                .select-with-ico .option-ico_005D9F::after {
                    background: #005D9F;
                }

                .geography-table__type-color--005D9F::before {
                    background: #005D9F;
                }

                .informer__inner .informer__inner-item--005D9F::before {
                    background: #005D9F;
                }

                .select-with-ico .option-ico_AFAFAF::after {
                    background: #AFAFAF;
                }

                .geography-table__type-color--AFAFAF::before {
                    background: #AFAFAF;
                }

                .informer__inner .informer__inner-item--AFAFAF::before {
                    background: #AFAFAF;
                }

                .select-with-ico .option-ico_FEC773::after {
                    background: #FEC773;
                }

                .geography-table__type-color--FEC773::before {
                    background: #FEC773;
                }

                .informer__inner .informer__inner-item--FEC773::before {
                    background: #FEC773;
                }

                .select-with-ico .option-ico_F6B07D::after {
                    background: #F6B07D;
                }

                .geography-table__type-color--F6B07D::before {
                    background: #F6B07D;
                }

                .informer__inner .informer__inner-item--F6B07D::before {
                    background: #F6B07D;
                }

                .select-with-ico .option-ico_E71C00::after {
                    background: #E71C00;
                }

                .geography-table__type-color--E71C00::before {
                    background: #E71C00;
                }

                .informer__inner .informer__inner-item--E71C00::before {
                    background: #E71C00;
                }

                .select-with-ico .option-ico_AEC836::after {
                    background: #AEC836;
                }

                .geography-table__type-color--AEC836::before {
                    background: #AEC836;
                }

                .informer__inner .informer__inner-item--AEC836::before {
                    background: #AEC836;
                }

                .select-with-ico .option-ico_FAF000::after {
                    background: #FAF000;
                }

                .geography-table__type-color--FAF000::before {
                    background: #FAF000;
                }

                .informer__inner .informer__inner-item--FAF000::before {
                    background: #FAF000;
                }

                .select-with-ico .option-ico_F08400::after {
                    background: #F08400;
                }

                .geography-table__type-color--F08400::before {
                    background: #F08400;
                }

                .informer__inner .informer__inner-item--F08400::before {
                    background: #F08400;
                }

                .select-with-ico .option-ico_A60000::after {
                    background: #A60000;
                }

                .geography-table__type-color--A60000::before {
                    background: #A60000;
                }

                .informer__inner .informer__inner-item--A60000::before {
                    background: #A60000;
                }

                .select-with-ico .option-ico_9800F7::after {
                    background: #9800F7;
                }

                .geography-table__type-color--9800F7::before {
                    background: #9800F7;
                }

                .informer__inner .informer__inner-item--9800F7::before {
                    background: #9800F7;
                }
            </style>

            <!-- API Яндекс карт -->

            <!-- Скрипт для работы карты -->
    </section>

    <section>
        <div class="block block_gray section-pt0">
            <div class="container"><h2 class="color-blue h2-marginBot">Деятельность</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third">
                        <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/aqiyx0393qnxwhvqzpl3ip1wqfo5llvr.png" alt="">
                    </div>
                    <div class="elements-row__two-thirds--ml">

                        <div class="text-block">
                            <p class="p2">
                                В составе компании функционируют 3 межрайонных отделения и 26 участков сбыта,
                                осуществляющих энергосбытовую деятельность во всех административных районах, городах и
                                различных населенных пунктах Рязанской области.
                            </p>

                        </div>
                        <a class="button button_mt" href="deyatelnost/">
                            <div class="button_inner">
                                Подробнее
                                <div class="button_arrow">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bx_1949384460_33">


        <section class="block section-pt0">
            <div class="container"><h2 class="color-blue h2-marginBot">История компании</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third">
                        <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/ancz0wkdizefol171ent2ypnbw1v66yr.png" alt="">
                    </div>
                    <div class="elements-row__two-thirds--ml">

                        <div class="text-block">
                            <p class="p2">
                                ОАО «РЭСК» (с 26.06.2015 г. – ПАО «РЭСК) создано в результате реорганизации ОАО
                                «Рязаньэнерго»
                            </p>

                        </div>
                        <a class="button button_mt" href="istoriya-kompanii/">
                            <div class="button_inner">
                                Подробнее
                                <div class="button_arrow">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>