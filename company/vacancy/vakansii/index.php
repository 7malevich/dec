<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
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

    <section id="bx_1949384460_687">
        <section class="block section-pt0">
            <div class="container">
                <p>В настоящее время вакансий нет. </p>
            </div>
        </section>
    </section>

    <div id="bx_1949384460_36">
        <section class="block">
            <div class="container">
                <div class="text-block">
                    <div class="news__item vacancy" id="bx_3218110189_724">
                        <div class="spoiler ">
                            <div class="spoiler__title h4">Тестовая вакансия</div>
                            <div class="spoiler__content text-block" style="display: none;">

                                <h5>Наименование подразделения</h5>
                                <div class="spoiler-sub">Тестовое место работы</div>
                                <h5>Место работы (фактический адрес)</h5>
                                <div class="spoiler-sub">Тествовое подразделение</div>
                                <h5>Должность / профессия (с указанием категории, разряда)</h5>
                                <div class="spoiler-sub">Тестовая дожность</div>
                            </div>
                        </div>
                    </div>
                    <!-- <a class="button button_mt" href="https://hydroschool.ru/company/vacancy/" target="_blank">
                        <div class="button_inner">
                            Посмотреть другие вакасии
                            <div class="button_arrow"></div>
                        </div>
                    </a> -->
                </div>
            </div></section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>