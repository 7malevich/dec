<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Порядок определения и применения цен");
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
    "inc_korporativnym_klientam_vse_raschetakh_poryadok_opredeleniya_tsen",
    array(
        "COMPONENT_TEMPLATE" => "inc_korporativnym_klientam_vse_raschetakh_poryadok_opredeleniya_tsen",
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "page_inc.php",
        "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_korporativnym_klientam_vse_raschetakh_poryadok_opredeleniya_tsen/template.php"
    ),
    false
); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>