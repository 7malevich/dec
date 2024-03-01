<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Показания приняты!");
?>

<?php
require_once 'settings.php';
date_default_timezone_set('Asia/Vladivostok');
$return_link = 'http://www.dvec.ru';
$return_link_title = 'Вернуться на сайт ПАО &quot;ДЭК&quot;';
?>




<p>Спасибо! Ваши показания получены и будут переданы в дальнейшую обработку.</p>
<p>Если Вы хотите передать показания еще по одному прибору учета, перейдите по ссылке:</p>
<div class="d-flex justify-content-center">
	<div class="card-group">
		<div class="card m-3 p-3" style="border:none; max-width:320px">
			<a href="../" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/lampochka.svg" style="width:48px;height:auto" /><br>Электричество</a>
		</div>
		<div class="card m-3 p-3" style="border:none; max-width:320px">
			<a href="../gvs/" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/kran_voda.svg" style="width:48px;height:auto" /><br>Горячее водоснабжение</a>
		</div>
		<div class="card m-3 p-3" style="border:none; max-width:320px">
			<a href="../teplo/" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/radiator2.svg" style="width:48px;height:auto" /><br>Отопление</a>
		</div>
		<div class="card m-3 p-3" style="border:none; max-width:320px">
			<a href="./" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/kran_hvs.svg" style="width:48px;height:auto" /><br>Холодное водоснабжение</a>
		</div>
	</div>
</div>

<div class="card mt-3">
  <div class="card-body">
<p>Обратите внимание: если у Вашего прибора учета подходит к концу межповерочный интервал, то в скором времени Вам будут приходить счета по среднему потреблению, а затем по нормативам.</p>
<p>В таком случае заполните форму, и специалисты ДЭК перезвонят Вам и проконсультируют о том, как исправить эту проблему и избежать повышенных счетов:</p>
<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "dps_ok.php",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
		"WEB_FORM_ID" => "72"
	)
);?>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>