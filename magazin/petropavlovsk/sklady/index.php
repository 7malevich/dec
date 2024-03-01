<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пункты выдачи");
?>
<div class="alert alert-info mb-4 py-3">
  При заказе на сумму <u>менее 3000 руб.</u> воспользуйтесь услугами транспортной компании (СДЭК). Заказ может быть доставлен в <a href="https://www.cdek.ru/ru/offices/petropavlovsk-kamchatsky" target="_blank">пункты самовывоза СДЭК</a> либо курьером на Ваш адрес.
</div>
<div class="alert alert-info mb-4 py-3">
  При заказе на сумму <u>более 3000 руб.</u> доставка производится за счет ПАО «ДЭК» в офис ЕРИЦ филиала ДЭК Камчатскэнергосбыт (Петропавловск-Камчатский, пр. Карла Маркса, 5). 
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.store.detail", 
	"bootstrap_v4", 
	array(
		"CACHE_TIME" => "360000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"MAP_TYPE" => "0",
		"SET_TITLE" => "Y",
		"STORE" => 161,
		"COMPONENT_TEMPLATE" => "bootstrap_v4"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>