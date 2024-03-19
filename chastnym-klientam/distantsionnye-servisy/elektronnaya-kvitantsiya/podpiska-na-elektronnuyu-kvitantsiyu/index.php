<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Подписка на электронную квитанцию");
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

<div class="container">
    <h2>ФОРМА</h2>
    <br><br>
</div>



<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "inc_chastnym_klientam_distantsionnye_servisy_videokonsultant_elektronnaya_kvitantsiya_podpiska_na_elektronnuyu_kvitantsiyu",
    array(
        "COMPONENT_TEMPLATE" => "inc_chastnym_klientam_distantsionnye_servisy_videokonsultant_elektronnaya_kvitantsiya_podpiska_na_elektronnuyu_kvitantsiyu",
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "page_inc.php",
        "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_chastnym_klientam_distantsionnye_servisy_videokonsultant_elektronnaya_kvitantsiya_podpiska_na_elektronnuyu_kvitantsiyu/template.php"
    ),
    false);
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
