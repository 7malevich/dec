<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корпоративным клиентам");
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

<div>
    <section class="block block_overflow-hidden section-pt0">
        <div class="container">
            <div class="h2 color-blue h2-marginBot">Дистанционные сервисы</div>
            <div class="banners-slider swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper banners-block">
                    <a href="distantsionnye-servisy1/lichnyy-kabinet/" class="swiper-slide swiper-slide-active" id="bx_565502798_643" style="width: 240.75px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">
                                Интернет-приемная
                            </div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/6bb/tm93vi25ekke6v75wsxd9hunou8yqbs8.png')"></div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide swiper-slide-next" id="bx_565502798_644" style="width: 240.75px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">
                                Онлайн-заказ услуг
                            </div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/447/xtuawm35avqornw2ewji1dwcfpnmyzwm.png')"></div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide" id="bx_565502798_645" style="width: 240.75px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">
                                Заказать обратный звонок
                            </div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/446/kyqnguir2qhyf6opul9a72dke6lg83tf.png')"></div>
                        </div>
                    </a>
                    <a href="distantsionnye-servisy1/elektronnyy-dokumentooborot/" class="swiper-slide" id="bx_565502798_646" style="width: 240.75px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">
                                Электронный документооборот
                            </div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/medialibrary/32d/uxs4yak8x8fk4b6p8fugnq6wp38ptri2.png')"></div>
                        </div>
                    </a>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>
    <section class="block block_gray">
        <div class="container">
            <h2 class="color-blue h2-marginBot">Потенциальным клиентам</h2>
            <div class="elements-row element-row__fullscreen-1280">
                <div class="elements-row__one-third">
                    <a href="#" class="content-block content-block_before content-block_outer" style="display:block;">
                        <div class="p3 color-black">
                            Документы, необходимые для заключения договора
                        </div>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="mt-32 ml-a" style="display:block;">
                            <path d="M8.95668 30.9547L30.9556 8.95585M30.9556 8.95585L13.0618 8.93621M30.9556 8.95585L30.9752 26.8496" stroke="#F08400" stroke-width="4" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="elements-row__two-thirds--ml">
                    <p class="p2">Для получения информации о состоянии процесса заключения договора энергоснабжения (купли-продажи (поставки) электрической энергии), заявителю необходимо обратиться к специалисту ПАО «РЭСК» по телефонам, указанным в разделе «<a href="">Офисы обслуживания</a>».</p>
                    <a class="button button_mt" href="potentsialnym-klientam/">
                        <div class="button_inner">
                            Подробнее
                            <div class="button_arrow"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="block">
        <div class="container">
            <h2 class="color-blue h2-marginBot">Оплата</h2>
            <div class="elements-row element-row__fullscreen-1280">
                <div class="elements-row__one-third">
                    <p class="p2">
                        Размер задолженности по оплате электрической энергии можно узнать в <a href="">офисе обслуживания</a>.
                    </p>
                </div>
                <div class="elements-row__two-thirds--ml">
                    <p>Исполнители коммунальной услуги обязаны вносить в адрес гарантирующего поставщика оплату стоимости поставленной за расчетный период электрической энергии (мощности) до 15-го числа месяца, следующего за расчетным периодом, если соглашением с гарантирующим поставщиком не предусмотрен более поздний срок оплаты (п.81 Основных положений функционирования розничных рынков электрической энергии).</p>
                    <p>Покупатели, приобретающие электрическую энергию для ее поставки населению, обязаны оплачивать стоимость электрической энергии (мощности) в объеме потребления населения за расчетный период до 15-го числа месяца, следующего за расчетным периодом (п.81 Основных положений функционирования розничных рынков электрической энергии).</p>
                    <a class="button button_mt" href="oplata1/">
                        <div class="button_inner">
                            Подробнее
                            <div class="button_arrow"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


