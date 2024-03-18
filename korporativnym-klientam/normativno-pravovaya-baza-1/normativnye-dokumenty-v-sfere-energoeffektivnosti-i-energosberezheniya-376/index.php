<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Нормативные документы в сфере энергоэффективности и энергосбережения");
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

    <section class="block section-pt0 section-pb0">
        <div class="container">

            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1551">
                <a class="link-with-lines" href="https://base.garant.ru/193388/">
                    Указ Президента Российской Федерации от 4 июня 2008 г. № 889 «О некоторых мерах по повышению
                    энергетической и экологической эффективности российской экономики» <div
                        class="link-with-lines_arrow"></div>
                </a>
            </div>
            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1552">
                <a class="link-with-lines" href="https://www.garant.ru/products/ipo/prime/doc/6631326/">
                    Распоряжение Правительства РФ от 1 декабря 2009 г. № 1830-р "Об утверждении плана мероприятий по
                    энергосбережению и повышению энергетической эффективности в Российской Федерации" <div
                        class="link-with-lines_arrow"></div>
                </a>
            </div>
            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1553">
                <a class="link-with-lines" href="https://base.garant.ru/196681/">
                    Энергетическая стратегия России на период до 2030 года. Утверждена распоряжением Председателя
                    Правительства РФ от 13 ноября 2009 года № 1715-р <div class="link-with-lines_arrow"></div>
                </a>
            </div>
        </div>

    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>