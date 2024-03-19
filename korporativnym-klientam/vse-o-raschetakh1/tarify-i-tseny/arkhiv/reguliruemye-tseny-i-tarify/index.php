<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регулируемые цены и тарифы");
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

            <a class="link-with-lines border-top-bottom" href="2022/">
                2022 <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="2021/">
                2021 <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="2020/">
                2020 <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="2019/">
                2019 <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="2018/">
                2018 <div class="link-with-lines_arrow "></div>
            </a>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>