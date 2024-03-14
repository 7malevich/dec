<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Частным клиентам");
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


<section class="block block_gray block_overflow-hidden">
    <div class="container">
        <div class="h2 color-blue h2-marginBot">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/chastnym-klientam/vk.php"
                ),
                false
            ); ?>
            Дистанционные сервисы
        </div>
        <div class="banners-slider swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper banners-block">
                <a href="#" class="swiper-slide swiper-slide-active" id="bx_565502798_643" style="width: 240.75px; margin-right: 60px;">
                    <div class="banners-block__item elements-row__quarter">
                        <div class="h5">
                            Мобильное приложение
                        </div>
                        <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/54d/k7v4wkvkkyxpopv9zimc2gdc91xcq2gl.png')">
                        </div>
                    </div>
                </a> <a href="#" class="swiper-slide swiper-slide-next" id="bx_565502798_644" style="width: 240.75px; margin-right: 60px;">
                    <div class="banners-block__item elements-row__quarter">
                        <div class="h5">
                            Интернет-приемная
                        </div>
                        <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/6bb/tm93vi25ekke6v75wsxd9hunou8yqbs8.png')">
                        </div>
                    </div>
                </a> <a href="#" class="swiper-slide" id="bx_565502798_645" style="width: 240.75px; margin-right: 60px;">
                    <div class="banners-block__item elements-row__quarter">
                        <div class="h5">
                            Личный кабинет
                        </div>
                        <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/bed/ty89kn3ptbdmvnavxnz9rdatvef7tys4.png')">
                        </div>
                    </div>
                </a> <a href="#" class="swiper-slide" id="bx_565502798_646" style="width: 240.75px; margin-right: 60px;">
                    <div class="banners-block__item elements-row__quarter">
                        <div class="h5">
                            Онлайн-заказ услуг
                        </div>
                        <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/447/xtuawm35avqornw2ewji1dwcfpnmyzwm.png')">
                        </div>
                    </div>
                </a>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <a class="button button_mt" href="/chastnym-klientam/distantsionnye-servisy/">
            <div class="button_inner">
                Все сервисы
                <div class="button_arrow">
                </div>
            </div>
        </a>
    </div>
</section>
<section class="block section-pb0">
    <div class="container">
        <h2 class="color-blue h2-marginBot">Передача показаний</h2>
        <div class="elements-row">
            <div class="elements-row__one-third elements-row--relative">
                <img src="/upload/medialibrary/7e2/ol69cw20lyd85sdpo2sfj8cnn0i3vnwd.png" class="elements-row__inner-absolute" alt="">
            </div>
            <div class="elements-row__two-thirds--ml">
                <div class="text-block">
                    <p class="p2">
                        Для точного расчета суммы к оплате и во избежание долга передавайте показания счетчика с 15 по 25 число ежемесячно любым удобным для Вас способом.
                    </p>
                </div>
                <a class="button button_mtb" href="/chastnym-klientam/peredacha-pokazaniy/">
                    <div class="button_inner">
                        Подробнее
                        <div class="button_arrow">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="block block_gray">
    <div class="container">
        <h2 class="color-blue h2-marginBot">Оплата</h2>
        <div class="elements-row element-row__fullscreen-1280">
            <div class="elements-row__one-third">
                <p class="p2">
                    Оплата потребленной за расчетный период электрической энергии (мощности) вносится не позднее 10-го числа месяца, следующего за расчетным периодом.
                </p>
            </div>
            <div class="elements-row__two-thirds--ml">
                <p>
                    Граждане, приобретающие электрическую энергию у гарантирующего поставщика, обязаны вносить в его адрес оплату стоимости потребленной за расчетный период электрической энергии (мощности) не позднее 10-го числа месяца, следующего за расчетным периодом (п. 66 Правил предоставления коммунальных услуг собственникам и пользователям помещений в многоквартирных домах и жилых домов).
                </p>
                <p>
                    При осуществлении платежа Потребитель обязан указать: ФИО, адрес проживания, номер лицевого счета, номер счетчика, месяц за который производится платеж, начальные и конечный показания приборов учета, общий расход электроэнергии.
                </p>
                <a class="button button_mt" href="/chastnym-klientam/oplata/">
                    <div class="button_inner">
                        Подробнее
                        <div class="button_arrow">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="block">
    <div class="container">
        <h2 class="color-blue h2-marginBot">Приборы учета</h2>
        <div class="elements-row element-row__fullscreen-1280">
            <div class="elements-row__one-third">
                <div class="content-block content-block_before content-block_blue content-block_big">
                    <div class="p3">
                        Как правильно снимать показания «умных» счетчиков
                    </div>
                    <a href="#" class="file-download">
                        <div class="t2">Скачать файл</div>
                    </a>
                </div>
            </div>
            <div class="elements-row__two-thirds--ml">
<<<<<<< HEAD
                <p>После 1 января 2022 года, гарантирующими поставщиками и сетевыми организациями должно быть обеспечено
                    безвозмездное предоставление минимального набора функций интеллектуальных систем учета электрической
                    энергии (мощности).</p>
                <p>При этом потребитель обязан допустить представителей гарантирующего поставщика или сетевой
                    организации в помещение для выполнения мероприятий для организации учета электрической энергии.</p>
                <a class="button button_mtb" href="/chastnym-klientam/pribory-uchyeta/">
=======
                <p>После 1 января 2022 года, гарантирующими поставщиками и сетевыми организациями должно быть обеспечено безвозмездное предоставление минимального набора функций интеллектуальных систем учета электрической энергии (мощности).</p>
                <p>При этом потребитель обязан допустить представителей гарантирующего поставщика или сетевой организации в помещение для выполнения мероприятий для организации учета электрической энергии.</p>
                <a class="button button_mtb" href="/chastnym-klientam/pribory-ucheta/">
>>>>>>> parent of 1982e6b (Договоры,  Все о расчетах)
                    <div class="button_inner">
                        Подробнее
                        <div class="button_arrow"></div>
                    </div>
                </a>
<<<<<<< HEAD
                <a class="link-with-lines border-top-bottom"
                   href="/chastnym-klientam/pribory-uchyeta/narusheniya-v-rabote-pribora-ucheta/">
                    Последствия выхода из строя либо отсутствия приборов учета
                    <div class="link-with-lines_arrow"></div>
                </a>
                <a class="link-with-lines border-top-bottom"
                   href="/chastnym-klientam/pribory-uchyeta/intellektualnye-pribory-ucheta/">
=======
                <a class="link-with-lines border-top-bottom" href="/chastnym-klientam/pribory-ucheta/narusheniya-v-rabote-pribora-ucheta/">
                    Последствия выхода из строя либо отсутствия приборов учета
                    <div class="link-with-lines_arrow"></div>
                </a>
                <a class="link-with-lines border-top-bottom" href="/chastnym-klientam/pribory-ucheta/intellektualnye-pribory-ucheta/">
>>>>>>> parent of 1982e6b (Договоры,  Все о расчетах)
                    Электросчетчики
                    <div class="link-with-lines_arrow"></div>
                </a>
            </div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
