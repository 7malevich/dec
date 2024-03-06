<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Действующие акции");
?>
<? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "breadcrumbs",
    array(
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

        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => DEFAULT_TEMPLATE_PATH . "/components/bitrix/main.include/inc_chastnym_klientam/aktsii/deystvuyushchie-aktsii.php"
            ),
            false);
        ?>

    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
