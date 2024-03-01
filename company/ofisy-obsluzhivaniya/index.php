<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Офисы обслуживания");
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

    <div id="bx_1949384460_34">
        <section class="block block_relative">
            <div class="container">
                <div class="map-filters mb-40">

                    <div class="select-with-name select-with-ico map-select" id="map-object-select" style="z-index: 2;">
                        <div class="select-with-name__name">Вид объекта</div>
                        <div class="jq-selectbox jqselect select-with-name__select changed" style="z-index: 1;"><select
                                    name="type_of_object" class="select-with-name__select">
                                <option data-have-power="" value="Показать все" selected="">Показать все</option>
                                <option value="Головной офис" data-color="582E91">Головной офис</option>
                                <option value="Территориальное управление" data-color="00AEEF">Территориальное
                                    управление
                                </option>
                                <option value="Районное отделение (участок)" data-color="005D9F">Районное отделение
                                    (участок)
                                </option>
                                <option value="Выездной офис" data-color="AFAFAF">Выездной офис</option>
                            </select>
                            <div class="jq-selectbox__dropdown"
                                 style="height: auto; bottom: auto; top: 56px; display: none;">
                                <ul style="max-height: 406px;">
                                    <li class="" style="">Показать все</li>
                                    <li data-color="582E91" style="" class="option-ico option-ico_582E91">Головной
                                        офис
                                    </li>
                                    <li data-color="00AEEF" style="" class="option-ico option-ico_00AEEF">
                                        Территориальное управление
                                    </li>
                                    <li data-color="005D9F" style="" class="option-ico option-ico_005D9F">Районное
                                        отделение (участок)
                                    </li>
                                    <li data-color="AFAFAF" style="" class="option-ico option-ico_AFAFAF selected sel">
                                        Выездной офис
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                <div class="geography-map geography-map--full" id="geography-map" style="">
                    <div class="button-center-map">
                        <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/earth.svg" alt="">
                    </div>
                    <div id="wrapMap">
                        <iframe style="pointer-events: none;"
                                src="https://yandex.ru/map-widget/v1/?um=constructor%3A5f8f9dac2da4c43a7645540933d436e2a3a13b5a094752354af9114d3756d0bc&amp;source=constructor"
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
        </section>
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
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>