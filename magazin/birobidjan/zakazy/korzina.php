<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket",
	"bootstrap_v4a",
	Array(
		"ACTION_VARIABLE" => "basketAction",
		"ADDITIONAL_PICT_PROP_202" => "-",
		"ADDITIONAL_PICT_PROP_213" => "-",
		"ADDITIONAL_PICT_PROP_218" => "-",
		"ADDITIONAL_PICT_PROP_219" => "-",
		"ADDITIONAL_PICT_PROP_220" => "-",
		"ADDITIONAL_PICT_PROP_221" => "-",
		"ADDITIONAL_PICT_PROP_222" => "-",
		"ADDITIONAL_PICT_PROP_223" => "-",
		"ADDITIONAL_PICT_PROP_224" => "-",
		"ADDITIONAL_PICT_PROP_226" => "-",
		"ADDITIONAL_PICT_PROP_227" => "-",
		"ADDITIONAL_PICT_PROP_228" => "-",
		"ADDITIONAL_PICT_PROP_229" => "-",
		"ADDITIONAL_PICT_PROP_230" => "-",
		"ADDITIONAL_PICT_PROP_231" => "-",
		"ADDITIONAL_PICT_PROP_232" => "-",
		"ADDITIONAL_PICT_PROP_235" => "-",
		"ADDITIONAL_PICT_PROP_236" => "-",
		"ADDITIONAL_PICT_PROP_237" => "-",
		"ADDITIONAL_PICT_PROP_244" => "-",
		"ADDITIONAL_PICT_PROP_246" => "-",
		"ADDITIONAL_PICT_PROP_247" => "-",
		"ADDITIONAL_PICT_PROP_248" => "-",
		"ADDITIONAL_PICT_PROP_252" => "-",
		"ADDITIONAL_PICT_PROP_254" => "-",
		"AUTO_CALCULATION" => "Y",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"COLUMNS_LIST_EXT" => array("PREVIEW_PICTURE","DELETE","DELAY","SUM"),
		"COLUMNS_LIST_MOBILE" => array("PREVIEW_PICTURE","DELETE","DELAY","SUM"),
		"COMPATIBLE_MODE" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CORRECT_RATIO" => "Y",
		"DEFERRED_REFRESH" => "N",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"DISPLAY_MODE" => "compact",
		"EMPTY_BASKET_HINT_PATH" => "/magazin/birobidjan/",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_PLACE" => "BOTTOM",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"HIDE_COUPON" => "Y",
		"LABEL_PROP" => array("CML2_MANUFACTURER"),
		"LABEL_PROP_MOBILE" => array(),
		"LABEL_PROP_POSITION" => "middle-right",
		"OFFERS_PROPS" => "",
		"PATH_TO_ORDER" => "oformlenie.php",
		"PRICE_DISPLAY_MODE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
		"QUANTITY_FLOAT" => "N",
		"SET_TITLE" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FILTER" => "N",
		"SHOW_RESTORE" => "Y",
		"TEMPLATE_THEME" => "blue",
		"TOTAL_BLOCK_DISPLAY" => array("bottom"),
		"USE_DYNAMIC_SCROLL" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_GIFTS" => "N",
		"USE_PREPAYMENT" => "N",
		"USE_PRICE_ANIMATION" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>