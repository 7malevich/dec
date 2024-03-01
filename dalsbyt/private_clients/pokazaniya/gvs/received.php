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

<?php
// выводим форму заказа обратного звонка
if (($_COOKIE['dvec_meter_mpi_gvs']) and (intval($_COOKIE['dvec_meter_mpi_gvs']) < 91) and ($_COOKIE['dvec_pokazaniya_gvs'] == 'dalsbyt'))
require_once('dps_form.php');
?>

<p>Если Вы хотите передать показания еще по одному прибору учета, перейдите по ссылке:</p>
<div class="d-flex justify-content-center">
	<div class="card-group">
		<div class="card m-3 p-3" style="border:none; max-width:320px">
			<a href="../" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/lampochka.svg" style="width:48px;height:auto" /><br>Электричество</a>
		</div>
		<div class="card m-3 p-3" style="border:none; max-width:320px">
			<a href="./" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/kran_voda.svg" style="width:48px;height:auto" /><br>Горячее водоснабжение</a>
		</div>
		<div class="card m-3 p-3" style="border:none; max-width:320px">
			<a href="../teplo/" style="display:inline-block;text-align:center">
			<img src="/images/design2016/icons/radiator2.svg" style="width:48px;height:auto" /><br>Отопление</a>
		</div>
	</div>
</div>

<!-- <div class="card mt-3">
  <div class="card-body">
    <p>Обратите внимание: если у Вашего прибора учета подходит к концу межповерочный интервал, то в скором времени Вам будут приходить счета по среднему потреблению, а затем по нормативам.</p>
    <p>В таком случае заполните форму, и специалисты ДЭК перезвонят Вам и проконсультируют о том, как исправить эту проблему и избежать повышенных счетов.</p>
    <div class="text-center"><a href="/dalsbyt/private_clients/dps/zayavki/" class="btn btn-primary text-decoration-none">Заявка на поверку ПУ</a></div>
  </div>
</div> -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>