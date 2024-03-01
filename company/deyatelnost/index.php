<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Деятельность");
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

    <div id="bx_1949384460_991">
        <section class="block section-pt0">
            <div class="container">

                <a class="link-with-lines border-top-bottom" href="sbyt-elektricheskoy-energii-moshchnosti/">
                    Сбыт электрической энергии (мощности)
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="dopolnitelnye-uslugi/">
                    Дополнительные услуги
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="prodazha-neprofilnykh-aktivov/">
                    Продажа непрофильных активов
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="investitsii/">
                    Инвестиции
                    <div class="link-with-lines_arrow "></div>
                </a>
            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>