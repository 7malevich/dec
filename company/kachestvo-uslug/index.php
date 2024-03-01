<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Качество услуг");
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

    <section id="bx_1949384460_1110">
        <div class="block section-pt0">
            <div class="container">

                <a class="link-with-lines border-top-bottom"
                   href="standart-kachestva-obsluzhivaniya-klientov/">
                    Стандарт качества обслуживания клиентов
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom"
                   href="programma-povysheniya-kachestva-obsluzhivaniya-klientov/">
                    Программа повышения качества обслуживания клиентов
                    <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="statisticheskie-parametry-pokazateley-kachestva-obsluzhivaniya-klientov/">
                    Статистические параметры показателей качества обслуживания клиентов
                    <div class="link-with-lines_arrow "></div>
                </a>

            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>