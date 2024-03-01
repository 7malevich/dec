<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?><? $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "breadcrumbs",
    array(
        "PATH" => "",
        "SITE_ID" => "ru",
        "START_FROM" => "0"
    )
); ?><? $APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "news_detail",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "NAME",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "news_detail",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
        "ELEMENT_ID" => "",
        "FIELD_CODE" => array(0 => "ID", 1 => "CODE", 2 => "XML_ID", 3 => "NAME", 4 => "TAGS", 5 => "SORT", 6 => "PREVIEW_TEXT", 7 => "PREVIEW_PICTURE", 8 => "DETAIL_TEXT", 9 => "DETAIL_PICTURE", 10 => "",),
        "IBLOCK_ID" => "262",
        "IBLOCK_TYPE" => "Main",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array(0 => "MONTH", 1 => "LINK", 2 => "NUMBER", 3 => "",),
        "SET_BROWSER_TITLE" => "Y",
        "SET_CANONICAL_URL" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N"
    )
); ?>
    <section class="block_margin-remove"></section>
    <section class="block element-slider">
        <div class="container container_relative">
            <h2 class="color-blue h2-marginBot">Другие Новости</h2>
            <div class="relative">
                <div class="element-slider__container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper element-slider__swiper-wrapper">
                        <?php
                        $newsInfo = array();

                        $iblockId = 262;

                        $filter = array(
                            'IBLOCK_ID' => $iblockId,
                            'ACTIVE' => 'Y',
                            '!CODE' => $_REQUEST["ELEMENT_CODE"]
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
                            array("ID" => "DESC"),
                            $filter,
                            false,
                            false,
                            $select
                        );

                        if ($result) {
                        while ($element = $result->GetNext()) {
                            $imageSrc = CFile::GetPath($element['PREVIEW_PICTURE']);
                            ?>
                            <? if ($imageSrc): ?>

                                <a href="/press/news/<?= $element["CODE"] ?>/"
                                   class="swiper-slide element-slide swiper-slide-active"
                                   style="width: 413px; margin-right: 24px;">
                                    <div class="element-slider__ico"
                                         style="background-image:url('<?= $imageSrc ?>')"></div>
                                    <div class="c3 color-orange">
                                        <?= $element["PROPERTIES"]["NUMBER"]["VALUE"] ?> <?= $element["PROPERTIES"]["MONTH"]["VALUE"] ?> <?= $element["PROPERTIES"]["YEAR"]["VALUE"] ?>
                                    </div>
                                    <div class="h5 element-slider__title">
                                        <?= $element["NAME"] ?>
                                    </div>
                                </a>
                            <? endif; ?>
                        <? } } ?>

                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper-button swiper-button_next swiper-button-disabled" tabindex="-1" role="button"
                     aria-label="Next slide" aria-disabled="true">
                    <div class="swiper-button_arrow">
                    </div>
                </div>
                <div class="swiper-button swiper-button_prev swiper-button-disabled" tabindex="-1" role="button"
                     aria-label="Previous slide" aria-disabled="true">
                    <div class="swiper-button_arrow">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block_margin-remove"></section>
    <div>
        <section class="block">
            <div class="container">
                <div class="elements-form-subscribe">
                    <div class="elements-form-subscribe__title">
                        <h5 class="h5">Подпишись<br>
                            на новостную рассылку</h5>
                    </div>
                    <div class="elements-form-subscribe__form">
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.feedback", "subscribe_news_form", array(
                            "EMAIL_TO" => "pressa8@dvec.ru",
                            "EVENT_MESSAGE_ID" => "",
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "REQUIRED_FIELDS" => "",
                            "USE_CAPTCHA" => "Y",
                        ),
                            false
                        );
                        ?>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $(document).ready(function () {
            $(document).on('submit', '#form-feedback', function (event) {
                event.preventDefault();

                var email = $("#email").val();
                var category = $(".selected.sel").text();

                $.ajax({
                    url: "/ajax/forms/subscribe_for_news.php",
                    type: "POST",
                    data: {
                        CATEGORY: category,
                        EMAIL: email,
                    },
                    success: function (response) {
                        console.log(response);
                        // $(".elements-form-subscribe__form").html(response);
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        alert('Ошибка!');
                    }
                });
            });
        });


    </script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>