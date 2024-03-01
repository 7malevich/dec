<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("2020");
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

    <div id="bx_1949384460_1119">
        <section class="section-mt-2">
            <div class="container">
                <div class="spoiler " id="bx_3218110189_1120">
                    <div class="spoiler__title">
                        <div class="h5">
                            Протокол ГОСА от 25.05.2020 г.
                        </div>
                    </div>
                    <div class="spoiler__content" style="display: none;">
                        <div class="file-download-list">
                            <div class="text-block">
                            </div>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20200525.pdf"
                               class="file-download " target="_blank">
                                <div class="h6">
                                    Протокол ГОСА (25.05.2020 г.)
                                </div>
                                <div class="c2">
                                    pdf, 8.9 мб
                                </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20200525_sk_p1.pdf"
                               class="file-download " target="_blank">
                                <div class="h6">
                                    Приложение 1. Протокол об итогах голосования счетной комиссии (25.05.2020 г.)
                                </div>
                                <div class="c2">
                                    pdf, 2 мб
                                </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20200525_p2.pdf"
                               class="file-download " target="_blank">
                                <div class="h6">
                                    Приложение 2. Протокол об итогах голосования (25.05.2020 г.)
                                </div>
                                <div class="c2">
                                    pdf, 248 кб
                                </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20200525_oig.pdf"
                               class="file-download " target="_blank">
                                <div class="h6">
                                    Отчет об итогах голосования (25.05.2020 г.)
                                </div>
                                <div class="c2">
                                    pdf, 7.8 мб
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>