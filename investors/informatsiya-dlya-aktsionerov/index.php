<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Информация для акционеров");
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
        <div class="block section-pt0">
            <div class="container">

                <a class="link-with-lines border-top-bottom"
                   href="o-predostavlenii-informatsii-aktsioneram/">
                    О предоставлении информации акционерам
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom"
                   href="struktura-ustavnogo-kapitala/">
                    Структура уставного капитала
                    <div class="link-with-lines_arrow "></div>
                </a>


            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>