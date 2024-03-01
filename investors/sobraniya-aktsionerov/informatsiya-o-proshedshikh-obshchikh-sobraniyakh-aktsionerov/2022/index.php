<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("2022");
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

    <div id="bx_1949384460_1114">
        <section class="section-mt-2">
            <div class="container">
                <div class="spoiler " id="bx_3218110189_1115">
                    <div class="spoiler__title">
                        <div class="h5">
                            Материалы к ГОСА 2022 г.                </div>
                    </div>
                    <div class="spoiler__content" style="display: none;">
                        <div class="file-download-list">
                            <div class="text-block">
                            </div>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/mgosa2022.zip" class="file-download ">
                                <div class="h6">
                                    Материалы к ГОСА 2022 г. (04.05.2022 г.)                        </div>
                                <div class="c2">
                                    zip, 3.2 мб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/rbsu2021.pdf" class="file-download " target="_blank">
                                <div class="h6">
                                    Аудиторское заключение по РСБУ за 2021 г. (04.05.2022 г.)                        </div>
                                <div class="c2">
                                    pdf, 13.3 мб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/go2021.rar" class="file-download ">
                                <div class="h6">
                                    Годовой отчет за 2021 г. (04.05.2022 г.)                        </div>
                                <div class="c2">
                                    rar, 16.4 мб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/osgosa2022.pdf" class="file-download " target="_blank">
                                <div class="h6">
                                    Сообщение о созыве ГОСА 2022 г. (04.05.2022 г.)                        </div>
                                <div class="c2">
                                    pdf, 327 кб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/opvvk2022.pdf" class="file-download " target="_blank">
                                <div class="h6">
                                    Сообщение о праве вынести вопросы и кандидатов на ГОСА (21.04.2022 г.)                        </div>
                                <div class="c2">
                                    pdf, 271 кб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20220530_oig.pdf" class="file-download " target="_blank">
                                <div class="h6">
                                    Отчет об итогах голосования (30.05.2022 г.)                        </div>
                                <div class="c2">
                                    pdf, 621 кб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20220530.rar" class="file-download ">
                                <div class="h6">
                                    Протокол ГОСА (30.05.2022 г.)                        </div>
                                <div class="c2">
                                    rar, 9 мб                        </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>