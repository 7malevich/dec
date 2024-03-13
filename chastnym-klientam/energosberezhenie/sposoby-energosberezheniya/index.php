<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Способы энергосбережения");
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
    <div class="container text-block">

        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "inc_chastnym_klientam_energosberezhenie_sposoby_energosberezheniya_text",
            array(
                "COMPONENT_TEMPLATE" => "inc_chastnym_klientam_energosberezheni_sposoby_energosberezheniyae_text",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "page_inc.php",
                "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_chastnym_klientam_energosberezhenie_sposoby_energosberezheniya_text/template.php"
            ),
            false);
        ?>

        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "inc_chastnym_klientam_energosberezhenie_sposoby_energosberezheniya_icon",
            array(
                "COMPONENT_TEMPLATE" => "inc_chastnym_klientam_energosberezhenie_sposoby_energosberezheniya_icon",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "page_inc.php",
                "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_chastnym_klientam_energosberezhenie_sposoby_energosberezheniya_icon/template.php"
            ),
            false);
        ?>

    </div>
</section>

<section class="section-mt-2">
    <div class="container">

        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "inc_chastnym_klientam_energosberezhenie_sposoby_energosberezheniya_spoiler",
            array(
                "COMPONENT_TEMPLATE" => "inc_chastnym_klientam_energosberezhenie_sposoby_energosberezheniya_spoiler",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "page_inc.php",
                "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_chastnym_klientam_energosberezhenie_sposoby_energosberezheniya_spoiler/template.php"
            ),
            false);
        ?>

    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
