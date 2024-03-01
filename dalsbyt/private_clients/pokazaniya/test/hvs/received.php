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
			<a href="../teplo/" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/radiator2.svg" style="width:48px;height:auto" /><br>Отопление</a>
		</div>
		<div class="card m-3 p-3" style="border:none; max-width:320px">
			<a href="./" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/kran_hvs.svg" style="width:48px;height:auto" /><br>Холодное водоснабжение</a>
		</div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>