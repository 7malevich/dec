<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Как снимать показания");
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


    <section id="bx_1949384460_1422">
        <div class="block section-pt0">
            <div class="container text-block">
                <!--<img width="100%" alt="snyat_pokazaniya12_1748h1232px.jpg" src="/upload/medialibrary/1ac/1987daag4mxvk7jtojui04f990l1w7rl/novyjproekt_1_.jpg" title="snyat_pokazaniya12_1748h1232px.jpg">-->

                <h2 class="color-blue h2-marginBot">1. Как правильно снять показания</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third elements-row--relative"></div>
                    <div class="elements-row__two-thirds--ml">
                        <p>Для расчётов используются только счётчики с классом точности от&nbsp;1 до&nbsp;2. Класс
                            точности указывается на переднем табло внутри окружности.</p>
                        <p>Нужно учитывать только целую часть, то есть цифры слева от красного окошка или до
                            запятой.</p>
                        <img src="/local/templates/.default/img/kak-snimat-pokazaniya-1.jpg" alt="">
                    </div>
                </div>

                <h2 class="color-blue h2-marginBot">2. Подсчёт показаний</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third elements-row--relative">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.0427 28.452V11.928H21.9627V28.452H26.0427Z" fill="#F08400"></path>
                            <path d="M21.2827 33.62C21.2827 34.3453 21.5547 34.9573 22.0987 35.456C22.6427 35.9546 23.2774 36.204 24.0027 36.204C24.7507 36.204 25.3854 35.9433 25.9067 35.422C26.4507 34.9006 26.7227 34.2773 26.7227 33.552C26.7227 32.8266 26.4507 32.2146 25.9067 31.716C25.3854 31.2173 24.7507 30.968 24.0027 30.968C23.2547 30.968 22.6087 31.2286 22.0647 31.75C21.5434 32.2713 21.2827 32.8946 21.2827 33.62Z"
                                  fill="#F08400"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24ZM44 24C44 35.0457 35.0457 44 24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C35.0457 4 44 12.9543 44 24Z"
                                  fill="#F08400"></path>
                        </svg>
                        <p class="color-orange">Снимать показания желательно в одно и то же число каждого месяца</p>
                    </div>
                    <div class="elements-row__two-thirds--ml">
                        <p>Принцип расчёта затрат электроэнергии:</p>
                        <p style="display: flex; align-items: center; justify-content: space-between; font-weight: 700; line-height: normal;">
                            <span class="color-blue">Показания<br>текущего<br>месяца</span>−<span
                                    style="color: #4D9FD9;">Показания<br>прошлого<br>месяца</span>=<span
                                    class="color-orange">Затраты энергии<br>за расчётный<br>месяц</span></p>
                        <p>Когда значения всех цифр на табло счётчика обнуляются. Это означает возврат счётного
                            механизма на очередной цикл работы. В этом случае для расчёта к показаниям счётчика
                            прибавляется 10&nbsp;000</p>
                        <p><b><span class="color-blue">0011,2 кВт*ч → </span><span class="color-orange">10&nbsp;0011,2 кВт*ч</span></b>
                        </p>
                    </div>
                </div>

                <h2 class="color-blue h2-marginBot">3. Замена счётчика</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third elements-row--relative"></div>
                    <div class="elements-row__two-thirds--ml">
                        <p><b>Необходимо вызвать контролёра ПАО&nbsp;«РЭСК»:</b></p>
                        <ul>
                            <li>перед заменой счётчика — чтобы зафиксировать показания старого прибора учёта;</li>
                            <li>после замены — чтобы опломбировать счётчик и принять его к учёту</li>
                        </ul>
                        <p>Если Вы оплачиваете счета за электроэнергию не в ПАО&nbsp;«РЭСК», а через УК или ТСЖ, то
                            вызвать нужно специалистов управляющей организации.</p>
                    </div>
                </div>

                <h2 class="color-blue h2-marginBot">4. Многотарифные счётчики</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third elements-row--relative"></div>
                    <div class="elements-row__two-thirds--ml">
                        <p>Если Вы рассчитываетесь с разбивкой тарифов на 2 или 3 тарифа, то передаются соответственно 2
                            или 3 показания, которые появляются на экране прибора учёта попеременно.</p>
                        <p>Если оплата электроэнергии производится по единому тарифу, то для передачи показаний счётчика
                            используется <b>суммарное значение потребления электроэнергии</b>.</p>
                    </div>
                </div>

                <h2 class="color-blue h2-marginBot">5. Непредоставление показаний</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third elements-row--relative">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.0427 28.452V11.928H21.9627V28.452H26.0427Z" fill="#F08400"></path>
                            <path d="M21.2827 33.62C21.2827 34.3453 21.5547 34.9573 22.0987 35.456C22.6427 35.9546 23.2774 36.204 24.0027 36.204C24.7507 36.204 25.3854 35.9433 25.9067 35.422C26.4507 34.9006 26.7227 34.2773 26.7227 33.552C26.7227 32.8266 26.4507 32.2146 25.9067 31.716C25.3854 31.2173 24.7507 30.968 24.0027 30.968C23.2547 30.968 22.6087 31.2286 22.0647 31.75C21.5434 32.2713 21.2827 32.8946 21.2827 33.62Z"
                                  fill="#F08400"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24ZM44 24C44 35.0457 35.0457 44 24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C35.0457 4 44 12.9543 44 24Z"
                                  fill="#F08400"></path>
                        </svg>
                        <p class="color-orange">Окончательный расчёт по переданным показаниям происходит 1 числа месяца,
                            следующего за расчётным</p>
                    </div>
                    <div class="elements-row__two-thirds--ml">
                        <p>В случае непредоставления показаний, объём потребленной электроэнергии будет определяться для
                            первых 3-х месяцев — исходя из рассчитанного среднемесячного объёма потребления,
                            определённого по показаниям за период не менее 6 месяцев, а если период работы прибора учёта
                            составил меньше 6 месяцев, то за фактический период работы, но не менее 3 месяцев. Для 4-го
                            и последующих расчётных периодов объём электроэнергии будет рассчитываться исходя из
                            нормативов.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>