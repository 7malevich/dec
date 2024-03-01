<pre>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_COOKIE['dvec_meter_mpi']) { echo("куки: ".intval($_COOKIE['dvec_meter_mpi'])); }
else { echo("нет куки"); }
?>

<?php if ($_COOKIE['dvec_meter_mpi']): ?>
<?php if ((intval($_COOKIE['dvec_meter_mpi']) > 0) && (intval($_COOKIE['dvec_meter_mpi']) < 91)): ?>
  <p style="text-align:center">Уважаемый клиент!</p>
  <p>У Вашего прибора учета подходит к концу межповерочный интервал <span style="background-color:#f8bbb4">(дней осталось: <?php echo(htmlspecialchars($_COOKIE['dvec_meter_mpi']))?>)</span>, и в скором времени Вам будут приходить счета по среднему потреблению, а затем по нормативам.</p>
  <p>Закажите обратный звонок, и специалисты Сервисного центра «Хабаровскэнергосбыта» перезвонят Вам и проконсультируют о том, как избежать повышенных счетов:</p>
<?php endif; ?>

<?php if (intval($_COOKIE['dvec_meter_mpi']) <= 0): ?>
  <p style="text-align:center">Уважаемый клиент!</p>
  <p>У Вашего прибора учета <span style="background-color:#f8bbb4">истек межповерочный интервал</span>, и в дальнейшем Вам будут приходить счета по среднему потреблению, а затем по нормативам.</p>
  <p>Закажите обратный звонок, и специалисты Сервисного центра «Хабаровскэнергосбыта» перезвонят Вам и проконсультируют о том, как исправить эту проблему и избежать повышенных счетов:</p>
<?php endif; ?>
<?php endif; ?>

<?
if (($_COOKIE['dvec_meter_mpi']) and (intval($_COOKIE['dvec_meter_mpi']) < 91) and ($_COOKIE['dvec_pokazaniya_svet'] == 'khabsbyt')) { 	echo "куки есть"; }
  else { echo "куки нет"; }
?>


</pre>