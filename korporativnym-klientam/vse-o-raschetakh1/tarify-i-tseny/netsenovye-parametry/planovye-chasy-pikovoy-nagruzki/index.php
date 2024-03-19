<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Плановые часы пиковой нагрузки");
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
            <div class="spoiler" id="bx_3218110189_905">
                <div class="spoiler__title">
                    <div class="h5">
                        2023 </div>
                </div>
                <div class="spoiler__content" style="display: none;">
                    <div class="file-download-list">
                        <div class="text-block">
                        </div>
                        <a href="/upload/iblock/6da/27ahfm7z0rol2oxxlhx7dg7kts5y7ls6/pcpn2023.docx"
                            class="file-download ">
                            <div class="h6">
                                Плановые часы пиковой нагрузки </div>
                            <div class="c2">
                                docx, 102 кб </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>