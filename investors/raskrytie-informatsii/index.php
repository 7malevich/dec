<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Раскрытие информации");
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

    <div id="bx_1949384460_1132"><section class="block section-pt0">
            <div class="container">

                <a class="link-with-lines border-top-bottom" href="affilirovannye-litsa/">
                    Аффилированные лица            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="otchetnost/">
                    Отчетность            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="dokumenty/">
                    Документы            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="insayderskaya-informatsiya/">
                    Инсайдерская информация            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="sushchestvennye-fakty/">
                    Существенные факты            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="izveshcheniya-uvedomleniya-soobshcheniya/">
                    Извещения, уведомления, сообщения            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="inaya-informatsiya/">
                    Иная информация            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="raskrytie-informatsii-subektom-rynka-elektroenergii/">
                    Раскрытие информации субъектом рынка электроэнергии            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="raskrytie-informatsii-dzo/">
                    Раскрытие информации ДЗО            <div class="link-with-lines_arrow "></div>
                </a>
            </div>
        </section>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>