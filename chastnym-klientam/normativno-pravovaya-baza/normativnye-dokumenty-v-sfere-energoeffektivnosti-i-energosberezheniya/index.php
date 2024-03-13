<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Постановления Правительства РФ и иные государственные нормативные документы");
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

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => DEFAULT_TEMPLATE_PATH . "/components/bitrix/main.include/inc_chastnym_klientam/normativno-pravovaya-baza/normativnye-dokumenty-v-sfere-energoeffektivnosti-i-energosberezheniya.php"
    ),
    false);
?>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "inc_chastnym_klientam_normativno_pravovaya_baza_normativnye_dokumenty_v_sfere",
    array(
        "COMPONENT_TEMPLATE" => "inc_chastnym_klientam_normativno_pravovaya_baza_normativnye_dokumenty_v_sfere",
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "page_inc.php",
        "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_chastnym_klientam_normativno_pravovaya_baza_normativnye_dokumenty_v_sfere/template.php"
    ),
    false);
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
