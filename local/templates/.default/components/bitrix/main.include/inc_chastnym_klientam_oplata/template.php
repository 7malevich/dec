<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<section>
    <div class="block section-pt0">
        <div class="container text-block">
            <p>На нашем сайте вы можете быстро и удобно оплатить счет за жилищно-коммунальные услуги следующими
                способами:</p>
        </div>
    </div>
</section>

<section>
    <div class="block section-pt0">
        <div class="container">
            <div class="tiles">
                <a class="tiles__item " href="lichnyy-kabinet/" style="background-image: url('/local/templates/.default/img/servises_lk.jpg')">
                    <div class="tiles__name">Личный кабинет</div>
                </a>
                <a class="tiles__item " href="mobilnoe-prilozhenie/" style="background-image: url('/local/templates/.default/img/servises_mobile_app.jpg')">
                    <div class="tiles__name">Мобильное приложение</div>
                </a>
                <a class="tiles__item " href="prilozheniya-partnerov/" style="background-image: url('/local/templates/.default/img/istockphoto_1470048338_2048x2048.jpg')">
                    <div class="tiles__name">Приложения партнеров</div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="block section-pt0">
    <div class="container">

        <a class="link-with-lines border-top-bottom" href="podtverzhdenie-i-vozvrat-platezha/">
            Подтверждение и возврат платежа <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="posledstviya-neoplaty/">
            Последствия неоплаты <div class="link-with-lines_arrow "></div>
        </a>
    </div>
</section>