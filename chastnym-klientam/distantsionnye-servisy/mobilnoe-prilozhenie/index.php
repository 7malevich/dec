<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Мобильное приложение");
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

<section id="bx_1949384460_1399">
    <section class="block section-pt0">
        <div class="container text-block">
            <p>Мобильное приложение личного кабинета ПАО &laquo;РЭСК&raquo; &ndash; это отличная возможность экономить
                время для оплаты счетов и передачи показаний приборов учета в любой точке мира.</p>

            <p>Интуитивно понятный интерфейс приложения&nbsp;позволит в пару кликов совершить нужные действия:</p>

        </div>
    </section>
</section>
<section id="bx_1949384460_1400">
    <section class="block section-pt0">
        <div class="container text-block">
            <div class="icon-link-wrapper">
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/wallet.svg" alt="">
                    <div>оплатить счета</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/counter.svg" alt="">
                    <div>передать показания</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/bill.svg" alt="">
                    <div>посмотреть счета и платежи</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/info.svg" alt="">
                    <div>узнать тарифы на услуги и адрес ближайшего офиса</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/pen.svg" alt="">
                    <div>написать обращение или оставить заявку</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/bills.svg" alt="">
                    <div>управлять несколькими лицевыми счетами</div>
                </div>

            </div>
        </div>
    </section>
</section>
<section id="bx_1949384460_1401">
    <section class="block section-pt0">
        <div class="container text-block">
            <p>
                Приложение является бесплатным и доступно для устройств, работающих на базе операционных систем Android.
            </p>
            <ol>
                <li>
                    <p>
                        скачать приложение можно по <a target="_blank" rel="noopener" class="outerlink"
                                                       href="https://disk.yandex.ru/d/T4CQq916vGA1KQ"><u>ссылке</u></a>&nbsp;
                    </p>
                </li>
                <li>
                    <p>
                        по QR-коду
                    </p>
                </li>
            </ol>
            <p>
                <img width="256" alt="mobile_resk.png"
                     src="/upload/medialibrary/05a/4fntubzwtvc31wwc8ruj8vb2yqujd0j0/mobile_resk.png" height="256"
                     title="mobile_resk.png" align="left">Шаг 1. Наведите камеру телефона на QR-код или скачайте
                приложение по <a target="_blank" rel="noopener" class="outerlink"
                                 href="https://disk.yandex.ru/d/T4CQq916vGA1KQ"><u>ссылке</u></a>. <br>
                Шаг 2. Скачайте файл для установки в формате apk. При необходимости подтвердите загрузку. <br>
                Шаг 3. Откройте файл и при необходимости разрешите браузеру устанавливать приложения. <br>
                Шаг 4. Готово! После установки откройте приложение и начните им пользоваться.
            </p>
            <p>
                Важно! При установке появится сообщение о небезопасном источнике. Не переживайте, это стандартное
                уведомление. Приложение надёжное и безопасное.
            </p>
            <p>
                Получить единый пароль и логин для регистрации в личном кабинете клиента можно как на сайте, так и в
                мобильном приложении.
            </p>
            <p>
                Для личного кабинета клиента действует единый логин и пароль вне зависимости от способа входа: через
                сайт или мобильное приложение.
            </p>
        </div>
    </section>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
