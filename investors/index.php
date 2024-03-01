<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акционерам и инвесторам");
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

    <section>
        <div class="block section-pb0 section-pt0">
            <div class="top-page-img top-page-img--company" style="background-image: url('<?= DEFAULT_TEMPLATE_PATH ?>/img/3oaje0ob8y5cn63rfdq0fk8mpr38xwua.jpg');">
            </div>
        </div>
    </section>

    <section>
        <div class="block block_gray">
            <div class="container">
                <h2 class="color-blue h2-marginBot">Собрания акционеров</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third">
                        <img class="" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/xku2e1au9ekbi2g30p2n3ypi5zeyw8bg.png" alt="">
                    </div>
                    <div class="elements-row__two-thirds--ml">
                        <div class="text-block">
                            <p class="p2">
                                К компетенции Общего собрания акционеров относятся следующие вопросы
                            </p>
                            <p>
                            </p><ul>
                                <li>внесение изменений и дополнений в Устав или утверждение Устава в новой редакции;</li>
                                <li>реорганизация Общества;</li>
                                <li>ликвидация Общества, назначение ликвидационной комиссии и утверждение промежуточного и окончательного ликвидационных балансов</li>
                            </ul>
                            <p></p>
                        </div>
                        <a class="button button_mtb" href="informatsiya-dlya-aktsionerov/">
                            <div class="button_inner">
                                Подробнее
                                <div class="button_arrow"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <h2 class="color-blue h2-marginBot">Информация для акционеров</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third">
                        <img class="" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/vvzgx208byupwfvzvc9eoh7qzss0kw0w.jpg" alt="">
                    </div>
                    <div class="elements-row__two-thirds--ml">
                        <div class="text-block">
                            <p class="p2">ПАО «РЭСК» предоставляет акционерам доступ к документам, предусмотренным пунктом 1 статьи 89 Федерального закона «Об акционерных обществах» и иными правовыми актами Российской Федерации.</p>
                        </div>
                        <a class="button button_mtb" href="informatsiya-dlya-aktsionerov/">
                            <div class="button_inner">
                                Подробнее
                                <div class="button_arrow"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block block_gray section-pb0">
            <div class="container">
                <h2 class="h2 h2-marginBot color-blue">Ценные бумаги</h2>
                <div class="elements-row">
                    <div class="elements-row__one-third elements-row--relative">
                        <div class="elements-row__inner-absolute">
                            <h5 class="h5">Акционерный капитал</h5>
                            <div class="t2 t2_marginBot color-gray--dip">
                                на 31.07.2023
                            </div>
                            <div class="diagramm__wrap">
                                <div class="diagramm diagramm_center">
                                    <div class="diagramm__image share-capital">
                                        <canvas class="myCanvas" data-values="94.44, 4.93, 0.61" width="240" height="240"></canvas>
                                        <div class="diagramm__values"><div class="diagramm__value">94.46%</div><div class="diagramm__value">4.93%</div><div class="diagramm__value">0.61%</div></div>
                                    </div>
                                    <div class="diagramm__legend">
                                        <div class="diagramm__item">
 <span>
					Номинальные держатели </span>
                                        </div>
                                        <div class="diagramm__item">
 <span>
					Физические лица </span>
                                        </div>
                                        <div class="diagramm__item">
 <span>
					Юридические лица» </span>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>

                    <div class="elements-row__two-thirds--ml-auto">
                        <div class="text-block">
                            <p class="p2">
                                Информация о выпущенных акциях и их распределении
                            </p>
                        </div>
                        <a class="button button_mtb" href="tsennye-bumagi/">
                            <div class="button_inner">
                                Подробнее
                                <div class="button_arrow"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bx_1949384460_761">
        <section class="block block_gray block-1280-hidde"></section>
        <section class="block block_gray block-1280-hidde"></section>
        <section class="block block_gray block-1280-hidde"></section>
        <section class="block block_gray block-1280-hidde"></section>
        <section class="block block_gray block-1280-hidde"></section>
        <section class="block block_gray block-1280-hidde"></section>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>