<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
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

    <section id="bx_1949384460_38">
        <div class="block section-pt0">

            <div class="container text-block text-block_text-margin">
                <h3>Главный офис компании</h3>
                <div class="contacts-list">
                    <div class="contacts-list__elem contacts-list__elem_name">

                        <div class="h5">
                            Почтовый адрес
                        </div>
                    </div>
                    <div class="contacts-list__elem contacts-list__elem_value">
                        390005, г. Рязань, ул. Дзержинского, д. 21А
                    </div>
                    <div class="contacts-list__elem contacts-list__elem_name">
                        <div class="h5">
                            Телефоны
                        </div>
                    </div>
                    <div class="contacts-list__elem contacts-list__elem_value">
                        8-800-775-62-62, +7(4912) 93-39-80 (ФАКС)
                    </div>
                    <div class="contacts-list__elem contacts-list__elem_name">
                        <div class="h5">
                            Электронная почта
                        </div>
                    </div>
                    <div class="contacts-list__elem contacts-list__elem_value">
                        <a href="mailto:resk@resk.ru">resk@resk.ru</a>
                    </div>
                    <div class="contacts-list__elem contacts-list__elem_name">
                        <div class="h5">
                            Внешний сайт
                        </div>
                    </div>
                    <div class="contacts-list__elem contacts-list__elem_value">
                        <a target="_blank" rel="noopener" class="outerlink" href="https://resk.ru/"><span>resk.ru</span><i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bx_1949384460_1109">
        <div class="block section-pt0">
            <div class="container text-block">
                <h3>Реквизиты компании</h3>
                <p><strong>Публичное акционерное общество&nbsp;«Рязанская энергетическая сбытовая компания»&nbsp;</strong><strong>(ПАО «РЭСК»)</strong><br>
                    <br>
                    <strong>ИНН</strong>&nbsp;6229049014<br>
                    <strong>КПП</strong>&nbsp;623401001<br>
                    <strong>ОГРН</strong>&nbsp;1056204000049<br>
                    <strong>р/с</strong>&nbsp;40702810253000162251 в&nbsp;<strong>Рязанском отделении N 8606 ПАО Сбербанк г. Рязань</strong><br>
                    БИК 046126614<br>
                    <strong>к/с</strong>&nbsp; 30101810500000000614 в ГРКЦ ГУ Банка России по Рязанской области<br>
                    &nbsp;<br>
                    <strong>ОКПО</strong>&nbsp;75801108<br>
                    <strong>ОКВЭД</strong>&nbsp;35.14<br>
                    <strong>ОКУД</strong>&nbsp;0608003<br>
                    <strong>ОКОПФ\ОКФС</strong>&nbsp;47\31<br>
                    <strong>ОКЕИ</strong>&nbsp;384</p>

            </div>
        </div></section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>