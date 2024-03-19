<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
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

<section id="bx_1949384460_1746">
    <section class="block section-pt0">
        <div class="container text-block">
            <p>Личный кабинет клиента ПАО &laquo;Красноярскэнергосбыт&raquo; &ndash; это отличная возможность экономить время для оплаты счетов и передачи показаний приборов учета в любой точке мира. Интуитивно понятный интерфейс приложения позволит в пару кликов совершить нужные действия:</p>

        </div>
        </div>
    </section></section><section id="bx_1949384460_1747">
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
                    <img src="/local/templates/main/img/icons/rss.svg" alt="">
                    <div>оформить подписку на электронный счет</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/info.svg" alt="">
                    <div>узнать тарифы на услуги и адрес ближайшего офиса</div>
                </div>
                <div class="icon-link">
                    <img src="/local/templates/main/img/icons/Union.svg" alt="">
                    <div>получить онлайн консультацию или связаться со специалистом по видеосвязи</div>
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
    </section></section><section id="bx_1949384460_1748">
    <section class="block section-pt0">
        <div class="container text-block">


            <p>Получить единый пароль и логин для регистрации в личном кабинете клиента можно как на сайте, так и в мобильном приложении.</p>

            <p>Для личного кабинета клиента действует единый логин и пароль вне зависимости от способа входа: через сайт или мобильное приложение.</p>

            <p>Если вы забыли пароль, нажмите кнопку &laquo;Забыли пароль?&raquo; и следуйте инструкциям.</p>

            <p>Если вы хотите зарегистрироваться, нажмите кнопку &laquo;Зарегистрироваться&raquo; и следуйте инструкциям.</p>
            <div class="center-button mb--32">
                <a href="https://krsk-sbit.ru/login" class="button">Перейти в личный кабинет</a>
            </div>
    </section></section><section id="bx_1949384460_1749">
    <section class="block section-pt0">
        <div class="container">
            <div class="text-block">
                <h4 class="color-blue text--center">Инструкция по работе в личном кабинете</h4>
            </div>
            <div class="spoiler" id="">
                <div class="spoiler__title spoiler-with-slider">
                    <div class="h5">Регистрация в личном кабинете</div>
                </div>
                <div class="spoiler__content">
                    <div class="text-block">

                        <!-- Инструкция -->
                        <div class="instruction">
                            <div class="photogallery-slider">
                                <div class="photogallery-slider__list">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="instruction-slide">
                                                <div class="instruction-text">
                                                    <p>Зайдите на сайт компании <a rel="noopener" class="outerlink"  href="http://krsk-sbit.ru"
                                                                                   target="_blank">http://krsk-sbit.ru</a><br>
                                                        Выберите пиктограмму «Личный кабинет» в правом верхнем углу.</p>
                                                </div>
                                                <div class="instruction-img"
                                                     style="background-image: url('/local/templates/main/img/instruction/1.png?ver=1.2')"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="instruction-slide">
                                                <div class="instruction-text">
                                                    <p>После нажатия откроется окно для авторизации. Если вы уже зарегистрированы, то вводите свои
                                                        регистрационные данные (почту или номер телефона) и пароль. Если вы не проходили регистрацию
                                                        ранее, необходимо нажать «Зарегистрироваться».</p>
                                                </div>
                                                <div class="instruction-img"
                                                     style="background-image: url('/local/templates/main/img/instruction/2.png?ver=1.1')"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="instruction-slide">
                                                <div class="instruction-text">
                                                    <p>Откроется форма регистрации, которую нужно будет заполнить (ФИО, номер лицевого счета, адрес электронной почты, номер телефона, пароль).</p>
                                                </div>
                                                <div class="instruction-img"
                                                     style="background-image: url('/local/templates/main/img/instruction/3.png')"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="instruction-slide">
                                                <div class="instruction-text">
                                                    <p>Также необходимо выбрать способ активации учетной записи и нажать кнопку «Далее». Выберите удобный для себя способ активации учетной записи: с помощью СМС или e-mail. Обязательно дождитесь кода активации и введите его в соответствующее поле.</p>
                                                </div>
                                                <div class="instruction-img"
                                                     style="background-image: url('/local/templates/main/img/instruction/4.png')"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="instruction-slide">
                                                <div class="instruction-text">
                                                    <p>В случае, если вы выбрали активацию по номеру телефона, на ваш номер придет код для активации по смс или в мессенджер Viber. Его нужно будет ввести в соответствующее поле для подтверждения регистрации.</p>
                                                </div>
                                                <div class="instruction-img"
                                                     style="background-image: url('/local/templates/main/img/instruction/5.png')"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="instruction-slide">
                                                <div class="instruction-text">
                                                    <p>После ввода кода подтверждения или подтверждения регистрации в почте, вы сможете перейти в личный кабинет. Для входа в личный кабинет нужно будет ввести адрес электронной почты, на который вы зарегистрировались, либо номер телефона, а также пароль.</p>
                                                </div>
                                                <div class="instruction-img"
                                                     style="background-image: url('/local/templates/main/img/instruction/6.png')"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="instruction-slide">
                                                <div class="instruction-text">
                                                    <p>Далее, на странице личного кабинета можно <b>подключить лицевой счет</b>, указав номер лицевого счета 12 знаков, фамилию, как указано в платежно документе.</p>
                                                    <p><i>Для тех, у кого только кап.ремонт, необходимо в поле «Фамилия» писать два слова «Собственник помещения».</i> Подключая несколько счетов, вы можете, для удобства, присвоить им уникальные имена.</p>
                                                    <p>Также на этой странице  можно изменить учетные данные (номер телефона, адрес электронной почты), сменить пароль, подключить, переименовать  лицевой счет.</p>
                                                </div>
                                                <div class="instruction-img"
                                                     style="background-image: url('/local/templates/main/img/instruction/7.png')"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="instruction-slide">
                                                <div class="instruction-text">
                                                    <p>Регистрация завершена, теперь можно пользоваться функциями личного кабинета!</p>
                                                </div>
                                                <div class="instruction-img"
                                                     style="background-image: url('/local/templates/main/img/instruction/8.png')"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="photogallery-slider__nav">
                                        <div class="swiper-button swiper-button_prev-gallery">
                                            <div class="swiper-button_arrow"></div>
                                        </div>
                                        <div class="swiper-pagination-nav"></div>
                                        <div class="swiper-button swiper-button_next-gallery">
                                            <div class="swiper-button_arrow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="spoiler" id="">
                <div class="spoiler__title">
                    <div class="h5">Передача показаний</div>
                </div>
                <div class="spoiler__content">
                    <div class="text-block"></div>
                </div>
            </div>
            <div class="spoiler" id="">
                <div class="spoiler__title">
                    <div class="h5">Начисления и оплата</div>
                </div>
                <div class="spoiler__content">
                    <div class="text-block"></div>
                </div>
            </div>
            <div class="spoiler" id="">
                <div class="spoiler__title">
                    <div class="h5">Мультисчет</div>
                </div>
                <div class="spoiler__content">
                    <div class="text-block"></div>
                </div>
            </div>
            <div class="spoiler" id="">
                <div class="spoiler__title">
                    <div class="h5">Как удалить лицевой счет в личном кабинете</div>
                </div>
                <div class="spoiler__content">
                    <div class="text-block"></div>
                </div>
            </div>
        </div>
    </section>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
