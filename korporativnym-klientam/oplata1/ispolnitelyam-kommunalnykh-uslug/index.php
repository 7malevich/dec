<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Исполнителям коммунальных услуг");
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

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "inc_ispolnitelyam_kommunalnykh_uslug",
    array(
        "COMPONENT_TEMPLATE" => "inc_ispolnitelyam_kommunalnykh_uslug",
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "page_inc.php",
        "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_ispolnitelyam_kommunalnykh_uslug/template.php"
    ),
    false
); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>