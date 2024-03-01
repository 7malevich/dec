<?php
Bitrix\Main\Loader::includeModule('sale');
 use \Bitrix\Main\Loader;
 use Bitrix\Sale;

 Loader::includeModule('catalog');
 Loader::includeModule('sale');
 
define("DEFAULT_TEMPLATE_PATH", "/local/templates/.default");

if (\Bitrix\Main\Config\Option::get('main', 'update_devsrv') === 'Y') {
    $APPLICATION->SetPageProperty('robots', 'noindex');
}

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


