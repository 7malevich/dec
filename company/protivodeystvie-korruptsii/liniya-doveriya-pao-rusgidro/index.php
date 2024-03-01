<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Линия доверия ПАО «РусГидро» ");
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

    <section id="bx_1949384460_1102">
        <div class="block section-pt0">
            <div class="container text-block">
                <p>«Линия доверия» организованна с целью приема обращений заявителей, их рассмотрения, подготовки
                    ответов и, при необходимости, принятия соответствующих мер по противодействию мошенничеству и
                    коррупции, пресечению противоправных действий и совершенствованию деятельности Общества, включая, но
                    не ограничиваясь следующими вопросами:</p>

                <ul>
                    <li>получение/дача взятки работником Общества;</li>
                    <li>злоупотребление работником Общества полномочиями;</li>
                    <li>незаконное использование работником Общества должностного положения вопреки законным интересам
                        Общества в целях получения выгоды;
                    </li>
                    <li>склонение работника Общества к совершению коррупционных правонарушений;</li>
                    <li>возникновение/возможное возникновение у работников Общества конфликта интересов;</li>
                    <li>несовершенство организации внутреннего контроля и управления рисками Общества;</li>
                    <li>вопросы, связанные с понесением Обществом ущерба/упущенной выгоды.</li>
                </ul>

            </div>
        </div>
    </section>

    <div id="bx_1949384460_1103"><section class="block section-pt0">
            <div class="container">

                <a href="<?= DEFAULT_TEMPLATE_PATH ?>/docs/prld_2019.pdf" class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1104">
                    <div class="h6">
                        Правила работы Линии доверия Группы РусГидро            </div>
                    <div class="c2">
                        pdf, 380 кб            </div>
                </a>
            </div>
        </section>
    </div>

    <div id="bx_1949384460_1105"><section class="block section-pt0">
            <div class="container">

                <a class="link-with-lines border-top-bottom" href="https://rushydro.ru/form/" target="_blank">
                    Подробнее на сайте ПАО «РусГидро»            <div class="link-with-lines_arrow outer-link"></div>
                </a>
            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>