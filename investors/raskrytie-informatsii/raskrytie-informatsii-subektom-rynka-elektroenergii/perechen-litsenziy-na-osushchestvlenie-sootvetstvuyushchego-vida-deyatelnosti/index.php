<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Перечень лицензий на осуществление соответствующего вида деятельности");
?>

<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "PATH" => "",
    "SITE_ID" => "ru",
    "START_FROM" => "0",
),
    false
); ?>

    <div class="container">
        <h1 class="h1-marginBot h1-relative"><?= $APPLICATION->showTitle() ?></h1>
    </div>

    <section id="bx_1949384460_1326">
        <section class="block section-pt0">
            <div class="container text-block">
                <p><strong>Эксплуатация взрывопожароопасных и химически опасных производственных объектов I, II, и III
                        классов опасности</strong></p>

                <p><strong>серия, номер и дата выдачи лицензии:</strong>&nbsp;ВХ-03 006148 от 10.07.2015,</p>

                <p><strong>дата переоформления лицензии:</strong>&nbsp;29.02.2016,</p>

                <p><strong>срок действия лицензии:</strong>&nbsp;бессрочно,</p>

                <p><strong>наименование лицензируемого вида деятельности:</strong>&nbsp;Эксплуатация взрывопожароопасных
                    и химически опасных производственных объектов I, II и III классов опасности,</p>

                <p><strong>наименование лицензирующего органа:</strong>&nbsp;Приокское управление Федеральной службы по
                    экологическому, технологическому и атомному надзору.</p>

            </div>
        </section>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>