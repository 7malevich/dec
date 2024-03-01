<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Брендбук");
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

    <div>
        <section class="block section-pt0">
            <div class="container">

                <a href="<?= DEFAULT_TEMPLATE_PATH ?>/img/logo_vect.zip" class="file-download border-top-bottom" id="bx_3218110189_988">
                    <div class="h6">
                        Логотип компании в векторном формате            </div>
                    <div class="c2">
                        zip, 39 кб            </div>
                </a>
                <a href="<?= DEFAULT_TEMPLATE_PATH ?>/img/logo_rastr.zip" class="file-download border-top-bottom" id="bx_3218110189_989">
                    <div class="h6">
                        Логотип компании в растровом формате            </div>
                    <div class="c2">
                        zip, 344 кб            </div>
                </a>
            </div>
        </section>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>