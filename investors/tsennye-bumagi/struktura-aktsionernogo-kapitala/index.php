<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Структура акционерного капитала");
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

    <div id="bx_1949384460_1184"><section class="block section-pt0">
            <div class="container">

                <a href="/upload/iblock/491/lbcvwkykjs8o8guzwnqqjjwdm6t53b1u/ak20231130.pdf" class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1185">
                    <div class="h6">
                        Структура акционерного капитала на 30.11.2023 г.            </div>
                    <div class="c2">
                        pdf, 215 кб            </div>
                </a>
            </div>
        </section>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>