<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Алгоритм предъявления отрицательного ОДН");
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
            "inc_chastnym_klientam_vse_o_raschetakh_elektroenergiya_obshchedomovye_nuzhdy_algoritm_predyavleniya_otritsatelnogo_odn",
            array(
                "COMPONENT_TEMPLATE" => "inc_chastnym_klientam_vse_o_raschetakh_elektroenergiya_obshchedomovye_nuzhdy_algoritm_predyavleniya_otritsatelnogo_odn",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "page_inc.php",
                "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_chastnym_klientam_vse_o_raschetakh_elektroenergiya_obshchedomovye_nuzhdy_algoritm_predyavleniya_otritsatelnogo_odn/template.php"
            ),
            false);
        ?>

    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>