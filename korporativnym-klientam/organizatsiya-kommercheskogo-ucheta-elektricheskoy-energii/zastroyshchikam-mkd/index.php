<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Застройщикам МКД");
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
        <div class="container">

            <a href="/upload/iblock/018/th2nepd2y21dr2dp18rqnj6al195t68d/tto_mkd_isu.pdf"
                class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1523">
                <div class="h6">
                    Технические требования_оснащения МКД ИСУ </div>
                <div class="c2">
                    pdf, 514 кб </div>
            </a>
            <a href="/upload/iblock/4e0/l4u9np0z0je3ycc37gyt4b6x9eaulnf7/tto_mkd_isu1.pdf"
                class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1524">
                <div class="h6">
                    Приложение №1 Концептуальная схема исполнения требований Федерального закона от 27.12.2018 № 522 –
                    ФЗ </div>
                <div class="c2">
                    pdf, 935 кб </div>
            </a>
            <a href="/upload/iblock/ff6/37j2cqothohiq3759z9y2okz62cpr0je/tto_mkd_isu2.pdf"
                class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1525">
                <div class="h6">
                    Приложение №2 Требования к приборам на соответствие в ПП РФ №8 </div>
                <div class="c2">
                    pdf, 472 кб </div>
            </a>
            <a href="/upload/iblock/d9c/po5f3yxzh8942jj5u4wiestebysc11e4/tto_mkd_isu3.pdf"
                class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1526">
                <div class="h6">
                    Приложение №3 Требования (характеристики) к приемо-передающему устройству </div>
                <div class="c2">
                    pdf, 219 кб </div>
            </a>
            <a href="/upload/iblock/a25/nxnpi523hm11o4jr8b38kuxy9btlwqmo/tto_mkd_isu4.pdf"
                class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1527">
                <div class="h6">
                    Приложение №4 Требования (характеристики) к устройствам для сбора и передачи данных </div>
                <div class="c2">
                    pdf, 199 кб </div>
            </a>
            <a href="/upload/iblock/18c/nav3hua2v34hrjh3wnsw0onaeeq3b6hy/tto_mkd_isu5.pdf"
                class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1528">
                <div class="h6">
                    Приложение №5 Требования (характеристики) к маршрутизаторам каналов связи </div>
                <div class="c2">
                    pdf, 198 кб </div>
            </a>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>