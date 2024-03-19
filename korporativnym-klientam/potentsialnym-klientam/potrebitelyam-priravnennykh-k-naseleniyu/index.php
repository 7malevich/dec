<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Потребителям, приравненных к населению");
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

    <section class="block section-pt0 section-pb0">
        <div class="container">

            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1499">
                <a class="link-with-lines"
                    href="/korporativnym-klientam/distantsionnye-servisy1/podacha-zayavleniy-onlayn/">
                    Конструктор заявления на заключение договора <div class="link-with-lines_arrow"></div>
                </a>
            </div>
            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1500">
                <a class="link-with-lines"
                    href="/korporativnym-klientam/potentsialnym-klientam/perechen-dokumentov-dlya-zaklyucheniya-dogovora-i-vneseniya-izmeneniy/">
                    Перечень документов для подачи заявления на заключение договора <div class="link-with-lines_arrow">
                    </div>
                </a>
            </div>
        </div>

    </section>

    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "inc_korporativnym_klientam_potentsialnym_potrebitelyam_naseleniyu",
        array(
            "COMPONENT_TEMPLATE" => "inc_korporativnym_klientam_potentsialnym_potrebitelyam_naseleniyu",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "page_inc.php",
            "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_korporativnym_klientam_potentsialnym_potrebitelyam_naseleniyu/template.php"
        ),
        false
    ); ?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>