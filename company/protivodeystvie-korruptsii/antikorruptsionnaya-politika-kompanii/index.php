<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Антикоррупционная политика компании");
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

    <div id="bx_1949384460_1099"><section class="block section-pt0">
            <div class="container">

                <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/anticorrupt2022.pdf" class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1100">
                    <div class="h6">
                        Антикоррупционная политика ПАО «РЭСК»            </div>
                    <div class="c2">
                        pdf, 534 кб            </div>
                </a>
            </div>
        </section>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>