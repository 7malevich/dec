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
                <p>
                    Для точного расчета суммы к оплате&nbsp;и во избежание возникновения долга передавайте показания
                    счётчика с 15&nbsp;по 25 число ежемесячно любым удобным для Вас способом.
                </p>
                <p align="justify">
                    Если показания не переданы или переданы позже 25 числа текущего месяца, плата за коммунальную услугу
                    определяется расчетными способами. В таком случае начисления могут существенно отличаться от
                    реальных объемов потребления в жилом помещении и зачастую – в большую сторону.
                </p>
                <p align="justify">
                    Если прибор учета электрической энергии подключен к <a
                            href="/chastnym-klientam/peredacha-pokazaniy/intellektualnye-pribory-ucheta/" target="_blank">интеллектуальной
                        системе учета</a>, то к расчетам принимаются показания, снятые в автоматическом режиме.&nbsp;

                    Необходимость в самостоятельной передаче показаний прибора учета отсутствует!
                </p>
                <p>
                    <br>
                </p>
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

                <a class="link-with-lines border-top-bottom" href="kak-snimat-pokazaniya/">
                    Как снимать показания
                    <div class="link-with-lines_arrow "></div>
                </a>
            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>