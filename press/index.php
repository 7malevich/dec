<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
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

    <div>
        <section class="block branches-news section-pt0 section-pt0">
            <div class="container">
                <div class="news__list">

                    <?php
                    $newsInfo = array();

                    $iblockId = 262;

                    $filter = array(
                        'IBLOCK_ID' => $iblockId,
                        'ACTIVE' => 'Y'
                    );

                    $select = array(
                        'ID',
                        'NAME',
                        'CODE',
                        'PREVIEW_PICTURE',
                        'PROPERTY_MONTH',
                        'PROPERTY_NUMBER',
                    );

                    $result = \CIBlockElement::GetList(
                        Array("ID" => "DESC"),
                        $filter,
                        false,
                        false,
                        $select
                    );

                    if ($result) {
                        while ($element = $result->GetNext()) {
                            $imageSrc = CFile::GetPath($element['PREVIEW_PICTURE']);
                            ?>
                            <a href="/press/news/<?= $element["CODE"] ?>/" class="news__item">
                                <? if ($imageSrc): ?>
                                    <div class="news__image news__image_medium"
                                         style="background-image:url('<?= $imageSrc ?>')"></div>
                                <? endif; ?>
                                <div class="news__info <?= (!$imageSrc) ? 'news__info_full' : ''; ?>">
                                    <div class="date">
                                        <div class="date__day">
                                            <?= $element["PROPERTY_NUMBER_VALUE"] ?>
                                        </div>
                                        <div class="date__month">
                                            <?= $element["PROPERTY_MONTH_VALUE"] ?>
                                        </div>
                                    </div>
                                    <div class="<?= (!$imageSrc) ? 'h5 news__title news__title_small' : 'h4 news__title news__title_medium'; ?>">
                                        <?= $element['NAME'] ?>
                                    </div>
                                </div>
                            </a>
                        <? }
                    } ?>

                    <div class="more-row more-row_mt-52">
                        <a href="/press/news/" class="more-link more-link_inter more-link_right more-link_arrow-right">
                            Все новости </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div>
        <section class="block block_gray block_overflow-hidden">
            <div class="container">
                <div class="h2 color-blue h2-marginBot">Мультимедиа</div>
                <div class="banners-slider swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper banners-block">
                        <a href="multimedia/fotobank/" class="swiper-slide swiper-slide-active"
                           style="width: 256.333px; margin-right: 60px;">
                            <div class="banners-block__item elements-row__quarter">
                                <div class="h5">
                                    Фотобанк
                                </div>
                                <div class="banners-block__ico"
                                     style="background-image:url('<?= DEFAULT_TEMPLATE_PATH ?>/img/ech9ydev82s9tdesbfuo0rx136137x8p.jpg')"></div>
                            </div>
                        </a>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span
                            class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>