<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ценные бумаги");
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
    <div id="bx_1949384460_1183">
        <section class="block section-pt0">
            <div class="container">

                <a class="link-with-lines border-top-bottom" href="struktura-aktsionernogo-kapitala/">
                    Структура акционерного капитала
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="kompaniya-na-rynke-tsennykh-bumag/">
                    Компания на рынке ценных бумаг
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="dividendy/">
                    Дивиденды
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="otchety-emitenta/">
                    Отчеты эмитента
                    <div class="link-with-lines_arrow "></div>
                </a>
            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>