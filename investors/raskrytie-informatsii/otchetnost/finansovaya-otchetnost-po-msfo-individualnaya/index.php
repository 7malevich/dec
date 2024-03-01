<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Финансовая отчетность по МСФО (индивидуальная)");
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
    <div id="bx_1949384460_1162">
        <section class="block section-pt0">
            <div class="container">

                <a href="/upload/iblock/346/f1aiafsfcxp92960mgnb9yrxiblh6apl/mfso2023_1.pdf"
                   class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1163">
                    <div class="h6">
                        За 6 месяцев 2023 г.
                    </div>
                    <div class="c2">
                        pdf, 3.3 мб
                    </div>
                </a>
                <a href="/upload/iblock/4d1/a5vc8uxbwrh8s4h3dee8z7mgga6mzr19/msfo2022.pdf"
                   class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1164">
                    <div class="h6">
                        2022 г.
                    </div>
                    <div class="c2">
                        pdf, 6.2 мб
                    </div>
                </a>
                <a href="/upload/iblock/f05/pa9qledo1cbl4t25qeiqeohhq1vxjbt3/msfo2022_1.pdf"
                   class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1165">
                    <div class="h6">
                        За 6 месяцев 2022 г.
                    </div>
                    <div class="c2">
                        pdf, 3.6 мб
                    </div>
                </a>
                <a href="/upload/iblock/052/00nvpz9k4a463h2615d0folbu9di0rmf/msfo2021.pdf"
                   class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1166">
                    <div class="h6">
                        2021 г.
                    </div>
                    <div class="c2">
                        pdf, 14.4 мб
                    </div>
                </a>
            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>