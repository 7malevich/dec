<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Передача показаний");
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

    <section>
        <div class="block section-pt0">
            <div class="container text-block">

                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "inc_chastnym_klientam_peredacha_pokazaniy",
                    array(
                        "COMPONENT_TEMPLATE" => "inc_chastnym_klientam_peredacha_pokazaniy",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "page_inc.php",
                        "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_chastnym_klientam_peredacha_pokazaniy/template.php"
                    ),
                    false);
                ?>

            </div>
        </div>
    </section>

    <section>
        <div class="block section-pt0">
            <div class="container text-block">
                <h4 class="color-blue text--center">
                    Способы передачи показаний</h4>
            </div>
        </div>
    </section>

    <section>
        <div class="block section-pt0">
            <div class="container text-block">
                <div class="icon-link-wrapper">
                    <?php
                    $newsInfo = array();

                    $iblockId = 268;

                    $filter = array(
                        'IBLOCK_ID' => $iblockId,
                    );

                    $select = array(
                        'ID',
                        'NAME',
                        'PROPERTY_LINK',
                        'PROPERTY_ICON'
                    );

                    $result = \CIBlockElement::GetList(
                        array(),
                        $filter,
                        false,
                        false,
                        $select
                    );

                    if ($result) {
                        while ($element = $result->GetNext()) { ?>
                            <a href="<?= $element['PROPERTY_LINK_VALUE'] ?>" class="icon-link">
                                <img src="<?= CFile::GetPath($element['PROPERTY_ICON_VALUE']) ?>" alt="">
                                <div><?= $element['NAME'] ?></div>
                            </a>
                            <?
                        }
                    }

                    ?>

                </div>
            </div>
        </div>
    </section>

    <div>
        <section class="block section-pt0">
            <div class="container">

                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "inc_chastnym_klientam_peredacha_pokazaniy_text",
                    array(
                        "COMPONENT_TEMPLATE" => "inc_chastnym_klientam_peredacha_pokazaniy_text",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "page_inc.php",
                        "PATH" => "/local/templates/.default/components/bitrix/main.include/inc_chastnym_klientam_peredacha_pokazaniy_text/template.php"
                    ),
                    false);
                ?>

            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>