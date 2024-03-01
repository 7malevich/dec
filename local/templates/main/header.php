<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
global $APPLICATION;
global $USER;

if ($USER->IsAdmin()) {
    $APPLICATION->ShowHeadStrings();
}

use Bitrix\Main\Page\Asset;

$APPLICATION->ShowPanel();
?>
<!DOCTYPE html>
<html>
<head>
    <? $APPLICATION->ShowHead(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <meta name="author" content="www.softmajor.ru">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <?php

    // Вставка скрипта для определения окружения
    $APPLICATION->AddHeadScript("<script type=\"text/javascript\" data-skip-moving=\"true\">
    (function(w, d, n) {
        var cl = \"bx-core\";
        var ht = d.documentElement;
        var htc = ht ? ht.className : undefined;
        if (htc === undefined || htc.indexOf(cl) !== -1) {
            return;
        }
        var ua = n.userAgent;
        if (/(iPad;)|(iPhone;)/i.test(ua)) {
            cl += \" bx-ios\";
        } else if (/Windows/i.test(ua)) {
            cl += ' bx-win';
        } else if (/Macintosh/i.test(ua)) {
            cl += \" bx-mac\";
        } else if (/Linux/i.test(ua) && !/Android/i.test(ua)) {
            cl += \" bx-linux\";
        } else if (/Android/i.test(ua)) {
            cl += \" bx-android\";
        }
        cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? \" bx-touch\" : \" bx-no-touch\");
        cl += w.devicePixelRatio && w.devicePixelRatio >= 2 ? \" bx-retina\" : \" bx-no-retina\";
        var ieVersion = -1;
        if (/AppleWebKit/.test(ua)) {
            cl += \" bx-chrome\";
        } else if (/Opera/.test(ua)) {
            cl += \" bx-opera\";
        } else if (/Firefox/.test(ua)) {
            cl += \" bx-firefox\";
        }
        ht.className = htc ? htc + \" \" + cl : cl;
    })(window, document, navigator);
</script>");

    // Подключение стилей страницы

    $APPLICATION->SetAdditionalCSS(DEFAULT_TEMPLATE_PATH . "/css/ui.design-tokens.css");
    $APPLICATION->SetAdditionalCSS(DEFAULT_TEMPLATE_PATH . "/css/style.css");
    $APPLICATION->SetAdditionalCSS(DEFAULT_TEMPLATE_PATH . "/css/popup.css", true);

    // Установка иконки сайта
    $APPLICATION->SetPageProperty("favicon", DEFAULT_TEMPLATE_PATH . "/img/favicon.ico");

    // Дополнительные мета-теги
    $APPLICATION->SetPageProperty("author", "www.softmajor.ru");
    $APPLICATION->SetPageProperty("X-UA-Compatible", "IE=edge");
    $APPLICATION->SetPageProperty("viewport", "width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0");

    // Установка заголовка страницы
    $APPLICATION->SetTitle("Миссия и стратегия");
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="fixed-menu">
<!-- Шапка -->
<div class="header__top">
    <div class="header-item no_pda-1060 header-sites-link">
        <a href="//rushydro.ru" class="header-link" target="_blank">
            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/hydro.svg" alt="Все сайты"
                 class="header__ico header__ico_margin-right">ПАО РусГидро

        </a>
    </div>
    <div class="header-item no_pda-1060 header-item_border-left header-trust-link">
        <a href="https://rushydro.ru/form/" class="header-link" target="_blank">Линия доверия</a>
    </div>
    <div class="header-item header-item_left-auto header-item_left-0-1060 header-calendar-link">
        <div data-id="#popupCalendar" class="header-link show-hover-block">
            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 0L13 1.73205L17.3301 4.23205L18.3301 2.5L14 0Z" fill="#2C3148"/>
                <path d="M1 4.23205L2.38419e-07 2.5L4.33013 3.27826e-07L5.33013 1.73205L1 4.23205Z" fill="#2C3148"/>
                <path d="M8.1 6.5V11.5296L12.6129 14.0367L13.4871 12.4633L9.9 10.4704V6.5H8.1Z" fill="#2C3148"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M9 2C4.02944 2 0 6.02943 0 11C0 13.0061 0.656355 14.8589 1.76603 16.3554L9.32217e-05 18.1213L1.41431 19.5355L3.12859 17.8212C4.70466 19.1791 6.75646 20 9 20C11.2526 20 13.3119 19.1724 14.8905 17.8047L16.6213 19.5355L18.0355 18.1213L16.2491 16.3349C17.3496 14.842 18 12.997 18 11C18 6.02943 13.9706 2 9 2ZM1.8 11C1.8 7.02354 5.02355 3.79999 9 3.79999C12.9764 3.79999 16.2 7.02354 16.2 11C16.2 14.9764 12.9764 18.2 9 18.2C5.02355 18.2 1.8 14.9764 1.8 11Z"
                      fill="#2C3148"/>
            </svg>
            <!-- График работы (hover) -->
            <div class="hover-block">
                <div class="hover-block-inner">
                    <p>Контактный центр: <br>понедельник-пятница с 9:00 до 19:00</p>
                    <br>
                    <p>С 20 по 25 число: <br>дополнительно в субботу с 9:00 до 17:00</p>
                    <br>
                    <!--  <ul>
                          <li>по будним дням: 8.00-21.00,</li>
                          <li>в выходные дни: 8.00-17.00.</li>
                      </ul>-->
                </div>
            </div>
            <!-- /График работы (hover) -->
        </div>
    </div>
    <div class="header-item header-item_border-left">
        <a href="tel:88002347777" class="header-link">8(800)234-77-77</a>
    </div>
    <div class="header-item header-item_border-left header-geo-link">
        <?php
        $APPLICATION->IncludeComponent(
            "intec.regionality:regions.select",
            "multiregion",
            array(
                "COMPONENT_TEMPLATE" => "multiregion"
            ),
            false
        );
        ?>

    </div>

    <div class="header-item  header-item_left-auto impaired">
        <? $APPLICATION->IncludeComponent("vision:vision.special", "slab_vid", array(),
            false
        ); ?>
    </div>
    <div class="header-item header-item_border-left">
        <div class="header-search-ico">
            <svg class="header__ico header__ico_desctop" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M11.3889 5C14.919 5 17.7778 7.85882 17.7778 11.3889C17.7778 14.919 14.919 17.7778 11.3889 17.7778C7.85882 17.7778 5 14.919 5 11.3889C5 7.85882 7.85882 5 11.3889 5Z"
                      stroke="#F08400" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M15.6104 15.6112L19.8326 19.8334" stroke="#F08400" stroke-width="2" stroke-miterlimit="10"
                      stroke-linejoin="round"/>
            </svg>
            <svg class="header__ico header__ico_pda" width="32" height="32" viewBox="0 0 32 32" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M24.5862 14.7931C24.5862 9.38263 20.2036 5 14.7931 5V7C19.099 7 22.5862 10.4872 22.5862 14.7931H24.5862ZM14.7931 5C9.38263 5 5 9.38263 5 14.7931H7C7 10.4872 10.4872 7 14.7931 7V5ZM5 14.7931C5 20.2036 9.38263 24.5862 14.7931 24.5862V22.5862C10.4872 22.5862 7 19.099 7 14.7931H5ZM14.7931 24.5862C20.2036 24.5862 24.5862 20.2036 24.5862 14.7931H22.5862C22.5862 19.099 19.099 22.5862 14.7931 22.5862V24.5862ZM19.7757 21.1899L25.2929 26.7071L26.7071 25.2929L21.1899 19.7757L19.7757 21.1899Z"
                      fill="#F08400"/>
            </svg>
            <div class="header-search__form-wrapper">
                <form class="header-search__form" action="/search/">
                    <input type="text" name="q" autocomplete="off" placeholder="Поиск">
                    <button type="submit">
                        <svg class="header-search__form-ico" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.3889 5C14.919 5 17.7778 7.85882 17.7778 11.3889C17.7778 14.919 14.919 17.7778 11.3889 17.7778C7.85882 17.7778 5 14.919 5 11.3889C5 7.85882 7.85882 5 11.3889 5Z"
                                  stroke="#F08400" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M15.6104 15.6112L19.8326 19.8334" stroke="#F08400" stroke-width="2"
                                  stroke-miterlimit="10" stroke-linejoin="round"/>
                        </svg>
                        <svg class="header-search__form-ico--pda" width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.5862 14.7931C24.5862 9.38263 20.2036 5 14.7931 5V7C19.099 7 22.5862 10.4872 22.5862 14.7931H24.5862ZM14.7931 5C9.38263 5 5 9.38263 5 14.7931H7C7 10.4872 10.4872 7 14.7931 7V5ZM5 14.7931C5 20.2036 9.38263 24.5862 14.7931 24.5862V22.5862C10.4872 22.5862 7 19.099 7 14.7931H5ZM14.7931 24.5862C20.2036 24.5862 24.5862 20.2036 24.5862 14.7931H22.5862C22.5862 19.099 19.099 22.5862 14.7931 22.5862V24.5862ZM19.7757 21.1899L25.2929 26.7071L26.7071 25.2929L21.1899 19.7757L19.7757 21.1899Z"
                                  fill="#F08400"/>
                        </svg>
                    </button>
                    <div class="header-search__form-close"></div>
                    <div class="header-search__list">
                        <div class="header-search__list-inner"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<header class="header header_white">
    <div class="header-item">
        <div class="logo logo_in-head">
            <a href="/">
                <img style="width: 100px" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/logo_dek_horiz.png"
                     alt="© ПАО «РусГидро» 2006-2023">
            </a>
        </div>
    </div>
    <div class="header-item header-item_border-left header-item_menu-wrapper">
        <div class="header-menu">
            <ul class="header-menu__list" data-section="Перейти в раздел">
                <?php

                function getSections($parentSectionId = null)
                {
                    $iblockId = 259;

                    $arFilter = array('IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y');

                    if ($parentSectionId !== null) {
                        $arFilter['SECTION_ID'] = $parentSectionId;
                    } else {
                        $arFilter['DEPTH_LEVEL'] = 1; // Устанавливаем глубину раздела на первый уровень
                    }

                    $arSelect = array('ID', 'NAME', 'CODE', 'SECTION_ID');

                    $dbSections = \CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
                    $sections = array();

                    while ($section = $dbSections->GetNext()) {
                        $sections[] = $section;
                    }

                    return $sections;
                }

                function renderMenu($sections, $parentCodes = array())
                {
                    if (empty($sections)) {
                        return;
                    }
                    ?>

                    <ul class="header-menu__sub-menu">
                        <? foreach ($sections as $section): ?>
                            <?
                            $codes = array_merge($parentCodes, array($section['CODE']));
                            $url = '/' . implode('/', $codes) . '/';
                            $hasSubsections = !empty(getSections($section['ID']));
                            ?>
                            <li class="header-menu__sub-item <?= ($hasSubsections) ? 'have-sub' : ''; ?>">
                                <a href="<?= $url ?>" class="header-menu__sub-link"><?= $section['NAME'] ?></a>
                                <? renderMenu(getSections($section['ID']), $codes); ?>
                            </li>
                        <? endforeach; ?>
                    </ul>

                    <?
                }

                foreach (getSections() as $section): ?>
                    <?
                    $url = '/' . $section['CODE'] . '/';
                    $hasSubsections = !empty(getSections($section['ID']));
                    ?>

                    <li class="header-menu__item <?= ($hasSubsections) ? 'have-sub' : ''; ?>">
                        <a href="<?= $url ?>"
                           class="header-link <?= ($hasSubsections) ? 'have-sub' : ''; ?>"><?= $section['NAME'] ?></a>
                        <? renderMenu(getSections($section['ID']), array($section['CODE'])); ?>
                    </li>
                <? endforeach; ?>


            </ul>
        </div>
    </div>
    <div class="header-item header-item--burger">
        <div class="mop">
            <div class="mop__line"></div>
            <div class="mop__line"></div>
            <div class="mop__line"></div>
        </div>
    </div>
    <div class="header-item header-item_left-auto header__link-list">
        <?php
        $newsInfo = array();

        $iblockId = 260;

        $filter = array(
            'IBLOCK_ID' => $iblockId,
            'ACTIVE' => 'Y'
        );

        $select = array(
            'ID',
            'NAME',
            'PROPERTY_LINK',
        );

        $result = \CIBlockElement::GetList(
            array(),
            $filter,
            false,
            false,
            $select
        );

        if ($result) {
            while ($element = $result->GetNext()) {
                ?>
                <a href="<?= $element["PROPERTY_LINK_VALUE"] ?>"
                   class="<?= ($element['ID'] == 49337) ? 'lk-link' : ''; ?>">
                    <?= $element['NAME'] ?>
                </a>
            <? }
        } ?>

    </div>
</header>
<!-- /Шапка -->
<!-- График работы (попап) -->
<div class="popup-success" id="popupCalendar">
    <div class="popup-success__block">
        <div class="popup-success__block-close"></div>
        <p>Контактный центр: Пн-Пт: 8.00– 17.00</p>
        <br>
        <p>С 21 по 25 работает ежедневно (за исключением государственных праздников):</p>
        <br>
        <ul>
            <li>по будним дням: 8.00-21.00,</li>
            <li>в выходные дни: 8.00-17.00.</li>
        </ul>
    </div>
</div>
<!-- /График работы (попап) -->
<!-- Мобильное меню -->
<div class="mobile-menu">
    <div class="header header_white">
        <div class="container">
            <div class="header__inner">
                <div class="logo logo_in-head">
                    <a href="/">
                        <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/logo.png" alt="© ПАО «РусГидро» 2006-2023">
                    </a>
                </div>
                <div class="mobile-menu-close"></div>
            </div>
        </div>
    </div>
    <div class="mobile-menu__inner">
        <div class="container mobile-menu__list"></div>
        <div class="container mobile-menu__links">
            <a class="mobile-menu__links-item" href="https://rushydro.ru/form/">Линия доверия</a>
            <a href="//rushydro.ru" class="mobile-menu__links-item">
                <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/hydro.svg" alt="ПАО РусГидро">ПАО РусГидро
            </a>
            <a href="" class="mobile-menu__links-item">Запись в офис</a>
            <a href="" class="mobile-menu__links-item">Заказ услуг</a>
            <a href="" class="mobile-menu__links-item">Написать обращение</a>
            <a href="" class="mobile-menu__links-item">Личный кабинет</a>
        </div>
    </div>
    <div class="mobile-menu__sub">
        <div class="mobile-menu__back">
            <div class="mobile-menu__back-button"></div>
        </div>
        <div class="mobile-menu__level mobile-menu__level-two"></div>
        <div class="mobile-menu__level mobile-menu__level-three"></div>
    </div>
</div>
