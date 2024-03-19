<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Часы пиковой нагрузки");
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

    <section class="section-mt-2">
        <div class="container">
            <div class="spoiler" id="bx_3218110189_898">
                <div class="spoiler__title">
                    <div class="h5">2023</div>
                </div>
                <div class="spoiler__content">
                    <div class="file-download-list">
                        <div class="text-block">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>