<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рейтинг потребителей");
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

        <a class="link-with-lines border-top-bottom" href="pobediteli-konkursa-nadezhnyy-partner/">
            Победители конкурса «Надежный партнер» <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="zlostnye-neplatelshchiki/">
            Злостные неплательщики <div class="link-with-lines_arrow "></div>
        </a>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
