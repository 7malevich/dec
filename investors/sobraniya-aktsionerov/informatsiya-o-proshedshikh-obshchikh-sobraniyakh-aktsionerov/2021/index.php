<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("2021");
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

    <div id="bx_1949384460_1116">
        <section class="section-mt-2">
            <div class="container">
                <div class="spoiler " id="bx_3218110189_1117">
                    <div class="spoiler__title">
                        <div class="h5">
                            Протокол ГОСА от 24.05.2021 г.
                        </div>
                    </div>
                    <div class="spoiler__content" style="display: none;">
                        <div class="file-download-list">
                            <div class="text-block">
                            </div>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20210524.rar"
                               class="file-download ">
                                <div class="h6">
                                    Протокол ГОСА (24.05.2021 г.)
                                </div>
                                <div class="c2">
                                    rar, 4.5 мб
                                </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20210524_oig.pdf"
                               class="file-download " target="_blank">
                                <div class="h6">
                                    Отчет об итогах голосования (24.05.2021 г.)
                                </div>
                                <div class="c2">
                                    pdf, 10.6 мб
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="spoiler " id="bx_3218110189_1118">
                    <div class="spoiler__title">
                        <div class="h5">
                            Материалы к ГОСА 2021 г.
                        </div>
                    </div>
                    <div class="spoiler__content" style="display: none;">
                        <div class="file-download-list">
                            <div class="text-block">
                            </div>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/sos_gosa_2021.pdf"
                               class="file-download " target="_blank">
                                <div class="h6">
                                    Сообщение о созыве ГОСА (27.04.2021 г.)
                                </div>
                                <div class="c2">
                                    pdf, 191 кб
                                </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/go_2020.rar"
                               class="file-download ">
                                <div class="h6">
                                    Годовой отчет за 2020 г. (27.04.2021 г.)
                                </div>
                                <div class="c2">
                                    rar, 14.6 мб
                                </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/az_rsbu_2020.pdf"
                               class="file-download " target="_blank">
                                <div class="h6">
                                    АЗ+РСБУ за 2020 г. (27.04.2021 г.)
                                </div>
                                <div class="c2">
                                    pdf, 12.2 мб
                                </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/m_gosa_2021.pdf"
                               class="file-download " target="_blank">
                                <div class="h6">
                                    Материалы к ГОСА (27.04.2021 г.)
                                </div>
                                <div class="c2">
                                    pdf, 1.2 мб
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>