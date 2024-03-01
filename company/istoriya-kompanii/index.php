<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История компании");
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
    <section id="bx_1949384460_1101">
        <div class="block section-pt0">
            <div class="container text-block">
                <p>ПАО «Рязанская энергетическая сбытовая компания» является дочерним зависимым обществом АО «Энергосбытовая компания РусГидро»</p>

                <p>ОАО «РЭСК» (с 26.06.2015 г. – ПАО «РЭСК) создано в результате реорганизации ОАО «Рязаньэнерго» в форме выделения (протокол внеочередного общего собрания акционеров ОАО «Рязаньэнерго» от 29 июня 2004г.) и зарегистрировано в качестве юридического лица 11 января 2005 года.</p>

                <p>Основными видами деятельности эмитента являются покупка электрической энергии на оптовом и розничных рынках электрической энергии (мощности), реализация (продажа) электрической энергии на оптовом и розничных рынках электрической энергии (мощности) потребителям (в том числе гражданам).</p>

                <p>В составе компании функционируют 3 межрайонных отделения и 26 участков сбыта, осуществляющих энергосбытовую деятельность во всех административных районах, городах и различных населенных пунктах Рязанской области.</p>

                <p>ПАО «РЭСК» - крупнейшая энергосбытовая компания, занимающая доминирующее положение на розничном рынке электроэнергии на территории Рязани и Рязанской области, обслуживает 42,25% регионального электроэнергетического рынка. Клиентами ПАО «РЭСК» являются свыше&nbsp;435 тысяч бытовых абонентов и 11 тысяч юридических лиц.</p>

            </div>
        </div>
    </section>
    <dsectioniv id="bx_1949384460_726">
        <div class="block block_gray">
            <div class="container">
                <div class="h2-block h2-marginBot">
                    <h2 class="h2 color-blue">Основные события</h2>
                </div>
                <div class="main-events__wrapper" style="opacity: 1;">
                    <div class="main-events__wrapper-sticks">
                        <div class="main-events__wrapper-start"></div>
                        <div class="main-events__wrapper-end"></div>
                    </div>
                    <div class="main-events-year owl-carousel owl-loaded">


                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 202px;"><div class="owl-item active" style="width: auto;"><div class="main-events-year__item main-events-year__item-active" data-year="2022" style="width: 352.259px;">
                                        <div class="main-events-year__item-dot"></div>
                                        <div class="main-events-year__item-text">2022</div>
                                        <div class="main-events-year__item-text--big">2022</div>
                                    </div></div><div class="owl-item active" style="width: auto;"><div class="main-events-year__item" style="width: 125.551px;">
                                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
                    <div class="main-events-year__nav">
                        <div class="main-events-year__nav-prev main-events-year__nav-disabled">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main-events-nav-arrow.svg" alt="">
                        </div>
                        <div class="main-events-year__nav-next main-events-year__nav-disabled">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main-events-nav-arrow.svg" alt="">
                        </div>
                    </div>
                    <div class="main-events-items__nav">
                        <div class="main-events-items__nav-prev main-events-items__nav-disabled">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main-events-nav-arrow--orange.svg" alt="">
                        </div>
                        <div class="main-events-items__nav-next main-events-items__nav-disabled">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/main-events-nav-arrow--orange.svg" alt="">
                        </div>
                    </div>
                    <style>
                        .main-events-items__nav {
                            position: absolute;
                            top: 250px;
                            left: 50%;
                            transform: translateX(-50%);
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            width: calc(100% + 160px);
                        }
                        @media (max-width: 1560px) {
                            .main-events-items__nav {
                                width: calc(100% + 130px);
                            }
                        }
                        @media (max-width: 1024px) {
                            .main-events-items__nav {
                                display: none;
                            }
                        }
                        .main-events-items__nav > div {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            width: 48px;
                            height: 48px;
                            border: 2px solid #f0d7b9;
                            border-radius: 50%;
                            cursor: pointer;
                            transition: border-color 0.2s ease 0s;
                        }
                        .main-events-items__nav > div:hover {
                            border-color: #f08400;
                        }
                        .main-events-items__nav > div img {
                            opacity: 1;
                            transition: opacity 0.2s ease 0s;
                        }
                        .main-events-items__nav-prev {
                            transform: rotate(180deg);
                        }
                        .main-events-items__nav-disabled {
                            pointer-events: none;
                        }
                        .main-events-items__nav-disabled img {
                            opacity: 0.5 !important;
                        }
                    </style>
                    <div class="select-with-name main-events-year__select">
                        <div class="select-with-name__name">Выберите год</div>
                        <div class="jq-selectbox jqselect select-with-name__select"><select name="" class="select-with-name__select">
                                <option value="2022" data-year="2022" selected="">2022</option>
                            </select><div class="jq-selectbox__select"><div class="jq-selectbox__select-text" style="width: 38.088px;">2022</div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div><div class="jq-selectbox__dropdown" style="display: none;"><ul><li data-year="2022" class="selected sel" style="">2022</li></ul></div></div>
                    </div>
                    <div class="main-events-items--wrapper">
                        <div class="main-events-items main-events-items--show owl-loaded owl-drag" data-year="2022">

                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 432px;"><div class="owl-item active" style="width: auto; margin-right: 60px;"><div class="main-events-items__item" id="bx_3218110189_727">
                                            <div class="main-events-items__item-text">
                                                ываываываываываываыва							</div>
                                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
                    </div>
                </div>
            </div>
        </div>

    </dsectioniv>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>