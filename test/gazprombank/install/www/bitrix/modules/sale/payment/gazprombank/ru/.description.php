<?php

global $MESS;

$MESS['GAZPROMBANK.PGA_SHORT_NAME'] = 'Gazprombank';
$MESS['GAZPROMBANK.PGA_DESCRIPTION'] = 'Модуль, позволяющий проводить платежи по картам Visa и MasterCard';

$MESS["GAZPROMBANK.PGA_START_PAYMENT_URL"] = "Адрес запроса";
$MESS["GAZPROMBANK.PGA_START_PAYMENT_URL_DESC"] = "для инициации платежа";

$MESS["GAZPROMBANK.PGA_SHOP_PCID"] = "PCID Магазина";
$MESS["GAZPROMBANK.PGA_SHOP_PCID_DESC"] = "";

$MESS["GAZPROMBANK.PGA_ACCOUNT_PCID"] = "Account PCID";
$MESS["GAZPROMBANK.PGA_ACCOUNT_PCID_DESC"] = "";

$MESS["GAZPROMBANK.PGA_CERT_PATH"] = "Путь к сертификату";
$MESS["GAZPROMBANK.PGA_CERT_PATH_DESC"] = "Укажите путь до сертификата от корня сайта.<br/> Например: \"/path/to/cert/certificate_file.crt\"";

$MESS["GAZPROMBANK.PGA_CURRENCY"] = "Код валюты";
$MESS["GAZPROMBANK.PGA_CURRENCY_DESC"] = "Сurrency (Рубль = 643)";

$MESS["GAZPROMBANK.PGA_DECLINE_URL"] = "Адрес при ошибке оплаты";
$MESS["GAZPROMBANK.PGA_DECLINE_URL_DESC"] = "URL (на веб-сайте продавца) для перенаправления плательщика при неуспешном платеже";

$MESS["GAZPROMBANK.PGA_SUCCESS_URL"] = "Адрес при успешной оплате";
$MESS["GAZPROMBANK.PGA_SUCCESS_URL_DESC"] = "URL (на веб-сайте продавца) для перенаправления плательщика при успешном платеже";

$MESS["GAZPROMBANK.PGA_ORDER_ID"] = "Номер заказа";
$MESS["GAZPROMBANK.PGA_ORDER_ID_DESC"] = "Номер заказа в вашем Интернет-магазине";

/* ================================ */

$MESS["GAZPROMBANK.PGA_CB_URL"] = "Адрес для уведомлений об оплате";
$MESS["GAZPROMBANK.PGA_CB_URL_DESC"] = "URL скрипта (на веб-сайте продавца) обрабатывающего оповещения о результате платежа";


$MESS["GAZPROMBANK.PGA_LANG_CODE"] = "Язык диалога с пользователем";
$MESS["GAZPROMBANK.PGA_LANG_CODE_DESC"] = "Двухсимвольный код в соответствии со стандартом ISO 639.";

$MESS["GAZPROMBANK.PGA_PAGE_ID"] = "Идентификатор платежной страницы";
$MESS["GAZPROMBANK.PGA_PAGE_ID_DESC"] = "Строка длиной 32 символа. Если параметр не указан, используется платежная страница по умолчанию.";