<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("2023");
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
    <div id="bx_1949384460_1112">
        <section class="section-mt-2">
            <div class="container">
                <div class="spoiler " id="bx_3218110189_1113">
                    <div class="spoiler__title">
                        <div class="h5">
                            Материалы к ГОСА 2023 г.                </div>
                    </div>
                    <div class="spoiler__content" style="display: none;">
                        <div class="file-download-list">
                            <div class="text-block">
                            </div>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/mgosa2023.rar" class="file-download ">
                                <div class="h6">
                                    Материалы к ГОСА 2023 г. (25.04.2023 г.)                        </div>
                                <div class="c2">
                                    rar, 15.4 мб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/osgosa2023.doc" class="file-download ">
                                <div class="h6">
                                    Сообщение о созыве ГОСА 2023 г. (25.04.2023 г.)                        </div>
                                <div class="c2">
                                    doc, 44 кб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20230522_oig.pdf" class="file-download " target="_blank">
                                <div class="h6">
                                    Отчет об итогах голосования (22.05.2023 г.)                        </div>
                                <div class="c2">
                                    pdf, 595 кб                        </div>
                            </a>
                            <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/gosa20230522-_1_.rar" class="file-download ">
                                <div class="h6">
                                    Протокол ГОСА (22.05.2023 г.)                        </div>
                                <div class="c2">
                                    rar, 1.1 мб                        </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>