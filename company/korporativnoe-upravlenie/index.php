<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корпоративное управление");
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

    <div id="bx_1949384460_1059"><section class="block section-pt0">
            <div class="container">

                <a class="link-with-lines border-top-bottom" href="obshchee-sobranie-aktsionerov/">
                    Общее собрание акционеров            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="sovet-direktorov/">
                    Совет директоров            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="upravlyayushchaya-organizatsiya/">
                    Управляющая организация            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="ispolnitelnyy-direktor/">
                    Исполнительный директор            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="svedeniya-ob-auditore-i-registratore/">
                    Сведения об аудиторе и регистраторе            <div class="link-with-lines_arrow "></div>
                </a>

                <a class="link-with-lines border-top-bottom" href="revizionnaya-komissiya/">
                    Ревизионная комиссия            <div class="link-with-lines_arrow "></div>
                </a>
            </div>
        </section>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>