<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Социальная ответственность");
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

    <div id="bx_1949384460_1106"><section class="block section-pt0">
            <div class="container">

                    <a class="link-with-lines border-top-bottom" href="korporativnoe-sotsialnoe-partnerstvo/">
                    Корпоративное социальное партнерство            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="blagotvoritelnost/">
                    Благотворительность            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="volonterskaya-deyatelnost/">
                    Волонтерская деятельность            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="obrazovatelnye-programmy/">
                    Образовательные программы            <div class="link-with-lines_arrow "></div>
                </a>
            </div>
        </section>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>