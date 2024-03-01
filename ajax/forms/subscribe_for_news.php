<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");


$SITE_ID = 'ru'; //Индетификатор сайта
$EVEN_TYPE = 'SUBSCRIBE_TO_NEWS';

$category = $_POST["CATEGORY"];
$email = $_POST["EMAIL"];

$arFields = array(
    "CATEGORY" => $category,
    "USER_EMAIL" => $email,
);

if (CEvent::Send($EVEN_TYPE, $SITE_ID, $arFields)) {
    return $APPLICATION->IncludeComponent(
        "bitrix:main.feedback", "subscribe_news_form", array(
        "EMAIL_TO" => "pressa8@dvec.ru",
        "EVENT_MESSAGE_ID" => "",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "REQUIRED_FIELDS" => "",
        "USE_CAPTCHA" => "Y",
    ),
        false
    );
}
