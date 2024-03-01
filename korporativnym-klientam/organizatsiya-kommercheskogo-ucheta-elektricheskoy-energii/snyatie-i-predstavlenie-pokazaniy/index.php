<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Снятие и представление показаний");
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
    <section class="block section-pt0">
        <div class="container text-block">
            <p>1.&nbsp;<strong>Время и дата снятия показаний</strong></p>

            <p>Съем показаний приборов учета электроэнергии производится по состоянию на 00 часов 00 минут 1-го дня месяца, следующего за расчетным периодом, а также дня, следующего за датой расторжения (заключения) договора энергоснабжения (купли-продажи (поставки) электрической энергии (мощности)), договора оказания услуг по передаче электрической энергии.</p>
        </div>
    </section>
    <section class="block section-pt0">
        <div class="container text-block">
            <p>2.&nbsp;<strong>Время и дата сообщения снятых показаний</strong></p>

            <p>Показания приборов учета электроэнергии сообщаются Сетевой организации и Гарантирующему поставщику до окончания 1-го дня месяца, следующего за расчетным периодом, а также дня, следующего за датой расторжения (заключения) договора энергоснабжения (купли-продажи (поставки) электрической энергии (мощности)), договора оказания услуг по передаче электрической энергии, а также в письменной форме в виде акта снятия показаний расчетных приборов учета в течение 3 рабочих дней.</p>

            <p>Формы документов:</p>
        </div>
    </section>
    <section class="block section-pt0">
        <div class="container">

            <a href="" class="file-download border-top-bottom" id="bx_3218110189_871">
                <div class="h6">
                    Форма акта снятия показаний приборов учета в целом за расчетный период            </div>
                <div class="c2">
                    , 0 кб            </div>
            </a>
            <a href="" class="file-download border-top-bottom" id="bx_3218110189_872">
                <div class="h6">
                    Форма акта снятия показаний приборов учета с детализацией по зонам суток            </div>
                <div class="c2">
                    , 0 кб            </div>
            </a>
            <a href="" class="file-download border-top-bottom" id="bx_3218110189_873">
                <div class="h6">
                    Форма акта фиксации данных интервального учета (часовые значения расхода электрической энергии)            </div>
                <div class="c2">
                    , 0 кб            </div>
            </a>
            <a href="" class="file-download border-top-bottom" id="bx_3218110189_874">
                <div class="h6">
                    Форма акта фиксации данных интервального учета (график активной мощности, усредненный на интервале 30 мин.)            </div>
                <div class="c2">
                    , 0 кб            </div>
            </a>
        </div>
    </section>
    <section class="block section-pt0">
        <div class="container text-block">
            <p><strong>3. Способы передачи показаний</strong></p>

            <p>В рабочее время: по телефонам, факсам, электронной почте, указанным в таблице «График обслуживания потребителей (покупателей), адреса и телефоны», или в ближайшем подразделении ПАО «РЭСК», по форме согласованной в договоре энергоснабжения (купли-продажи (поставки) электрической энергии (мощности)).</p>

            <p>Кроме того, показания электросчетчика можно передать, воспользовавшись интернет-сервисом&nbsp;<a target="_blank" rel="noopener" class="outerlink" href="https://www.resk.ru/private/cabinet"><span>«Личный кабинет»</span><i></i></a>&nbsp;на сайте компании ПАО «РЭСК». Подробная инструкция по работе в Личном кабинете размещена на сайте компании.</p>

            <p>При передаче показаний приборов учета необходимо указывать реквизиты договора, дату, номер прибора учета, начальные и конечные показания, расход.</p>
        </div>
    </section>
    <section class="block section-pt0">
        <div class="container">

            <a href="" class="file-download border-top-bottom" id="bx_651765591_878">
                <div class="h6">
                    Форма акта снятия показаний приборов учета в целом за расчетный период            </div>
                <div class="c2">
                    , 0 кб            </div>
            </a>
            <a href="" class="file-download border-top-bottom" id="bx_651765591_879">
                <div class="h6">
                    Форма акта снятия показаний приборов учета с детализацией по зонам суток            </div>
                <div class="c2">
                    , 0 кб            </div>
            </a>
            <a href="" class="file-download border-top-bottom" id="bx_651765591_880">
                <div class="h6">
                    Форма акта фиксации данных интервального учета (часовые значения расхода электрической энергии)            </div>
                <div class="c2">
                    , 0 кб            </div>
            </a>
            <a href="" class="file-download border-top-bottom" id="bx_651765591_881">
                <div class="h6">
                    Форма акта фиксации данных интервального учета (график активной мощности, усредненный на интервале 30 мин.)            </div>
                <div class="c2">
                    , 0 кб            </div>
            </a>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>