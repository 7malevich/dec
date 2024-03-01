<div style="clear:both;width:100%; height:1px;background-color:#ff9103;margin:50px 0"></div>

<?php if ($_COOKIE['dvec_meter_mpi_gvs']): ?>
<?php if ((intval($_COOKIE['dvec_meter_mpi_gvs']) > 0) && (intval($_COOKIE['dvec_meter_mpi_gvs']) < 91)): ?>
	<p style="text-align:center">Уважаемый клиент!</p>
	<p>У Вашего прибора учета подходит к концу межповерочный интервал <span style="background-color:#f8bbb4">(дней осталось: <?php echo($_COOKIE['dvec_meter_mpi_gvs'])?>)</span>, и в скором времени Вам будут приходить счета по среднему потреблению, а затем по нормативам.</p>
	<p>Закажите обратный звонок, и специалисты ДЭК перезвонят Вам и проконсультируют о том, как избежать повышенных счетов:</p>
<?php endif; ?>

<?php if (intval($_COOKIE['dvec_meter_mpi_gvs']) <= 0): ?>
	<p style="text-align:center">Уважаемый клиент!</p>
	<p>У Вашего прибора учета <span style="background-color:#f8bbb4">истек межповерочный интервал</span>, и в дальнейшем Вам будут приходить счета по среднему потреблению, а затем по нормативам.</p>
	<p>Закажите обратный звонок, и специалисты ДЭК перезвонят Вам и проконсультируют о том, как исправить эту проблему и избежать повышенных счетов:</p>
<?php endif; ?>
<?php endif; ?>

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
		"WEB_FORM_ID" => "69"
	)
);?>

<div style="clear:both;width:100%; height:1px;background-color:#ff9103;margin:75px 0 50px 0"></div>