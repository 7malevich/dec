<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интервалы тарифных зон суток");
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
            <div class="spoiler open" id="bx_3218110189_903">
                <div class="spoiler__title">
                    <div class="h5">
                        2023 </div>
                </div>
                <div class="spoiler__content" style="display: none;">
                    <div class="file-download-list">
                        <div class="text-block">
                        </div>
                        <a href="/upload/iblock/7ad/u8rqaq5k2ot0mlyd406ogwl8mn3xlinh/itzs2023yur.docx"
                            class="file-download ">
                            <div class="h6">
                                Интервалы тарифных зон суток для энергозон (ОЭС) России по месяцам 2020 года&nbsp;для
                                потребителей (за исключением населения и (или) приравненных к нему категорий)&nbsp;
                            </div>
                            <div class="c2">
                                docx, 102 кб </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>