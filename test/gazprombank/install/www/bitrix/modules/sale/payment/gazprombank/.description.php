<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
include(GetLangFileName(dirname(__FILE__) . "/", "/.description.php"));

$psTitle = GetMessage("GAZPROMBANK.PGA_SHORT_NAME");
$psDescription = GetMessage("GAZPROMBANK.PGA_DESCRIPTION");

$arPSCorrespondence = array(
    "START_PAYMENT_URL" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_START_PAYMENT_URL"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_START_PAYMENT_URL_DESC"),
        "VALUE" => "https://dev.intervale.ru:30443/payment/start.wsm",
        "TYPE" => ""
    ),
    "SHOP_PCID" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_SHOP_PCID"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_SHOP_PCID_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "ACCOUNT_PCID" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_ACCOUNT_PCID"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_ACCOUNT_PCID_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "CERT_PATH" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_CERT_PATH"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_CERT_PATH_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "CURRENCY" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_CURRENCY"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_CURRENCY_DESC"),
        "VALUE" => "643",
        "TYPE" => ""
    ),
    "SUCCESS_URL" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_SUCCESS_URL"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_SUCCESS_URL_DESC"),
        "VALUE" => "http://yoursite.ru/personal/order/",
        "TYPE" => ""
    ),
    "DECLINE_URL" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_DECLINE_URL"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_DECLINE_URL_DESC"),
        "VALUE" => "http://yoursite.ru/personal/order/",
        "TYPE" => ""
    ),
    "LANG_CODE" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_LANG_CODE"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_LANG_CODE_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "PAGE_ID" => array(
        "NAME" => GetMessage("GAZPROMBANK.PGA_PAGE_ID"),
        "DESCR" => GetMessage("GAZPROMBANK.PGA_PAGE_ID_DESC"),
        "VALUE" => "",
        "TYPE" => ""
    ),
//    "ORDER_ID" => array(
//        "NAME" => GetMessage("GAZPROMBANK.PGA_ORDER_ID"),
//        "DESCR" => GetMessage("GAZPROMBANK.PGA_ORDER_ID_DESC"),
//        "VALUE" => "ID",
//        "TYPE" => "ORDER"
//    ),
);