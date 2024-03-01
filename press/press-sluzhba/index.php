<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пресс-служба");
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

    <div ><section class="block section-pt0 ">
            <div class="container">
                <div class="projects projects-mt0">
                    <div class="projects_item projects_item--managment">
                        <div class="projects_ico">
                            <img src="" alt="">
                        </div>
                        <div class="projects_info">
                            <h4 class="color-blue">
                            </h4>
                            <p class="c3 color-gray--dip">
                                Пресс-секретарь ПАО "РЭСК"					</p>
                            <div class="text-block text-block_text-margin t1 text-block_marginBot">
                                <p class="t2">Контакты:
                                </p><p>
                                    <strong>Тел.:</strong>&nbsp;8 (4912) 93-39-01
                                </p>
                                <p>
                                    <strong>E-mail:&nbsp;</strong><a href="mailto:press@resk.ru">press@resk.ru</a>
                                </p>					</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>