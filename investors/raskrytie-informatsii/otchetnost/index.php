<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отчетность");
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

    <div id="bx_1949384460_1142"><section class="block section-pt0">
            <div class="container">

                <a class="link-with-lines border-top-bottom" href="godovaya-bukhgalterskaya-otchetnost/">
                    Годовая бухгалтерская отчетность            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="kvartalnaya-bukhgalterskaya-otchetnost/">
                    Квартальная бухгалтерская отчетность            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="finansovaya-otchetnost-po-msfo-individualnaya/">
                    Финансовая отчетность по МСФО (индивидуальная)            <div class="link-with-lines_arrow "></div>
                </a>
            </div>
        </section>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>