<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}
?>

<!-- Подвал -->
<footer class="footer">
    <div class="block_gray block_overflow-hidden">
        <div class="container">
            <div class="footer__row footer__row_first elements-row">
                <div class="elements-row__quarter">
                    <div class="footer__title">Мы в соцсетях
                    </div>
                    <div class="socila-links" id="bx_1512268744_UF_SOCIAL">
                        <a href="https://ok.ru/resk62" class="socila-links__item" target="_blank">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/socials/ok.png" alt="ok">
                        </a>
                        <a href="https://vk.com/paoresk" class="socila-links__item" target="_blank">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/socials/vk.png" alt="vk">
                        </a>
                        <a href="https://t.me/dvecru" class="socila-links__item" target="_blank">
                            <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/socials/telegram.png" alt="vk">
                        </a>
                    </div>
                </div>
                <div class="elements-row__quarter">
                    <div class="phone-block">
                        <div class="h5 phone-block__phone toggle">
                            <div class="toggle__name">
                                <a href="tel:88002347777" id="bx_1512268744_UF_PHONE">8 (800) 234-77-77										</a>
                            </div>
                            <div class="toggle__content">
                                <div class="toggle__item">
                                    <a href="tel:" id="bx_1512268744_UF_FAX">(ФАКС)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="phone-block__description">Единый контактный центр
                        </div>
                    </div>
                </div>
                <div class="elements-row__quarter">
                    <div class="h5 phone-block__phone">
                        <a href="tel:+74957850937" id="bx_1512268744_UF_HELPLINE">+7 495 785 09 37								</a>
                    </div>
                    <div class="phone-block__description">
                        Линия доверия
                        <a target="_blank" href="//rushydro.ru/form/">Правила &nbsp;работы
                        </a>
                    </div>
                </div>
                <div class="elements-row__quarter">
                    <div class="elements-row-footer_text" id="bx_1512268744_UF_ADDRESS">690091, г. Владивосток, ул. Тигровая, 19						</div>
                </div>
            </div>
            <div class="links-slider">
                <div class="swiper-wrapper">
                    <?php
                    $newsInfo = array();

                    $iblockId = 261;

                    $filter = array(
                        'IBLOCK_ID' => $iblockId,
                        'ACTIVE' => 'Y'
                    );

                    $select = array(
                        'ID',
                        'NAME',
                        'PREVIEW_PICTURE',
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
                            $imageSrc = CFile::GetPath($element['PREVIEW_PICTURE']);
                            ?>
                            <a href="<?= $element["PROPERTY_LINK_VALUE"] ?>" class="swiper-slide" >
                                <img src="<?= $imageSrc ?>" alt="<?= $element['NAME'] ?>">
                            </a>
                    <? } }?>

                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-row elements-row">
                <div class="copyright">© ПАО «РусГидро» 2006-2023</div>
                <div class="sitemap-link">
                    <a href="/sitemap/">Карта сайта</a>
                </div>
                <div class="prava">
                    <a href="//rushydro.ru/legal-notice/">Уведомление об ответственности и праве интеллектуальной собственности</a>
                </div>
                <div class="error-send">Сообщить об ошибке: ctrl+enter
                </div>
                <div class="create">
                    <a href="//rushydro.ru/design/">Разработка сайта</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-row elements-row" style="padding-top: 0;">
                <a href="https://old.resk.ru/priv" class="outerlink">Старая версия сайта
                </a>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    if (!window.BX)
        window.BX = {};
    if (!window.BX.message)
        window.BX.message = function(mess) {
            if (typeof mess === 'object') {
                for (let i in mess) {
                    BX.message[i] = mess[i];
                }
                return true;
            }
        }
        ;
</script>
<script type="text/javascript">
    (window.BX || top.BX).message({
        'JS_CORE_LOADING': 'Загрузка...',
        'JS_CORE_NO_DATA': '- Нет данных -',
        'JS_CORE_WINDOW_CLOSE': 'Закрыть',
        'JS_CORE_WINDOW_EXPAND': 'Развернуть',
        'JS_CORE_WINDOW_NARROW': 'Свернуть в окно',
        'JS_CORE_WINDOW_SAVE': 'Сохранить',
        'JS_CORE_WINDOW_CANCEL': 'Отменить',
        'JS_CORE_WINDOW_CONTINUE': 'Продолжить',
        'JS_CORE_H': 'ч',
        'JS_CORE_M': 'м',
        'JS_CORE_S': 'с',
        'JSADM_AI_HIDE_EXTRA': 'Скрыть лишние',
        'JSADM_AI_ALL_NOTIF': 'Показать все',
        'JSADM_AUTH_REQ': 'Требуется авторизация!',
        'JS_CORE_WINDOW_AUTH': 'Войти',
        'JS_CORE_IMAGE_FULL': 'Полный размер'
    });
</script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/core.js"></script>
<script>
    BX.setJSList(['/bitrix/js/main/core/core_ajax.js', '/bitrix/js/main/core/core_promise.js', '/bitrix/js/main/polyfill/promise/js/promise.js', '/bitrix/js/main/loadext/loadext.js', '/bitrix/js/main/loadext/extension.js', '/bitrix/js/main/polyfill/promise/js/promise.js', '/bitrix/js/main/polyfill/find/js/find.js', '/bitrix/js/main/polyfill/includes/js/includes.js', '/bitrix/js/main/polyfill/matches/js/matches.js', '/bitrix/js/ui/polyfill/closest/js/closest.js', '/bitrix/js/main/polyfill/fill/main.polyfill.fill.js', '/bitrix/js/main/polyfill/find/js/find.js', '/bitrix/js/main/polyfill/matches/js/matches.js', '/bitrix/js/main/polyfill/core/dist/polyfill.bundle.js', '/bitrix/js/main/core/core.js', '/bitrix/js/main/polyfill/intersectionobserver/js/intersectionobserver.js', '/bitrix/js/main/lazyload/dist/lazyload.bundle.js', '/bitrix/js/main/polyfill/core/dist/polyfill.bundle.js', '/bitrix/js/main/parambag/dist/parambag.bundle.js']);
</script>
<script type="text/javascript">
    (window.BX || top.BX).message({
        'JS_CORE_LOADING': 'Загрузка...',
        'JS_CORE_NO_DATA': '- Нет данных -',
        'JS_CORE_WINDOW_CLOSE': 'Закрыть',
        'JS_CORE_WINDOW_EXPAND': 'Развернуть',
        'JS_CORE_WINDOW_NARROW': 'Свернуть в окно',
        'JS_CORE_WINDOW_SAVE': 'Сохранить',
        'JS_CORE_WINDOW_CANCEL': 'Отменить',
        'JS_CORE_WINDOW_CONTINUE': 'Продолжить',
        'JS_CORE_H': 'ч',
        'JS_CORE_M': 'м',
        'JS_CORE_S': 'с',
        'JSADM_AI_HIDE_EXTRA': 'Скрыть лишние',
        'JSADM_AI_ALL_NOTIF': 'Показать все',
        'JSADM_AUTH_REQ': 'Требуется авторизация!',
        'JS_CORE_WINDOW_AUTH': 'Войти',
        'JS_CORE_IMAGE_FULL': 'Полный размер'
    });
</script>
<script type="text/javascript">
    (window.BX || top.BX).message({
        'LANGUAGE_ID': 'ru',
        'FORMAT_DATE': 'DD.MM.YYYY',
        'FORMAT_DATETIME': 'DD.MM.YYYY HH:MI:SS',
        'COOKIE_PREFIX': 'BITRIX_SM',
        'SERVER_TZ_OFFSET': '10800',
        'UTF_MODE': 'Y',
        'SITE_ID': 's1',
        'SITE_DIR': '/',
        'USER_ID': '',
        'SERVER_TIME': '1701958558',
        'USER_TZ_OFFSET': '0',
        'USER_TZ_AUTO': 'Y',
        'bitrix_sessid': '6d741f28f489860a4d1018c84b4544f6'
    });
</script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/pageobject.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/core_window.js"></script>
<script type="text/javascript">
    BX.setCSSList(['/css/jquery-ui.min.css',
        '/css/jquery.formstyler.css',
        '/css/jquery.formstyler.theme.css',
        '/local/templates/main/assets/css/jquery.datepicker.min.css',
        '/local/templates/main/assets/css/jquery.photoswipe.min.css',
        '/local/templates/main/assets/css/jquery.photoswipe.default-skin.min.css',
        '/local/templates/main/assets/css/simplebar.min.css', '' +
        '/local/templates/main/assets/css/swiper-bundle.min.css',
        '/local/templates/main/assets/css/owl.carousel.min.css',
        '/local/templates/main/assets/css/owl.theme.default.min.css',
        '/local/templates/main/css/fonts.css',
        '/local/templates/main/css/style.css',
        '/local/templates/main/css/resize.css',
        '/local/templates/main/css/new.css']);
</script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/jquery.formstyler.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/jquery.datepicker.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/jquery.photoswipe.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/js_jquery.cookie.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/simplebar.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/swiper.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/lodash.min.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/script.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/injectedScript.bundle.js"></script>
<script type="text/javascript" src="<?= DEFAULT_TEMPLATE_PATH ?>/js/inpage.js"></script>
<script type="text/javascript">
    var _ba = _ba || [];
    _ba.push(["aid", "561c356e24b2713c8ced5c56d63131d4"]);
    _ba.push(["host", "resk.smhost.ru"]);
    (function() {
            var ba = document.createElement("script");
            ba.type = "text/javascript";
            ba.async = true;
            ba.src = (document.location.protocol == "https:" ? "https://" : "http://") + "bitrix.info/ba.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ba, s);
        }
    )();
</script>
</body>
</html>
