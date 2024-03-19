<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Архив");
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

            <a class="link-with-lines border-top-bottom" href="fakticheskie-znacheniya-nereguliruemykh-tsen/">
                Фактические значения нерегулируемых цен <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="netsenovye-parametry-220/">
                Неценовые параметры <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="reguliruemye-tseny-i-tarify/">
                Регулируемые цены и тарифы <div class="link-with-lines_arrow "></div>
            </a>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>