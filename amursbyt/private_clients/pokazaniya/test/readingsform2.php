<?php  
$targetdate = intval(date_count($meter['nextday'])); 
//echo 'meter... '.var_dump($meter);

//устанавливаем куки на 5 дней об окончании МПИ ПУ
setcookie('dvec_meter_mpi', $targetdate, time()+60*60*24*5, '/');
?>
<?php $target_mm = count_mm(intval(date_count($meter['nextday']))); ?>
<?//php $alarm = get_alarm($connect, $_POST['branch']); ?> 
<?php $alarm = get_alarm($connect, $meter['branch']); ?> 


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input name="sessionkey" id="sessionkey" type="hidden" value="<?php echo $sessionkey; ?>" />
  <input name="step" id="step" type="hidden" value="2" />
  <table cellpadding="10" class="table-data2">
    <tr>
      <td>Филиал</td>
      <td><?php echo htmlspecialchars($meter['branchname']); ?></td>
    </tr>
    <tr>
      <td>Отделение</td>
      <td><?php echo htmlspecialchars($meter['divisionname']); ?></td>
    </tr>
    <tr>
      <td>Лицевой счет</td>
      <td><?php echo htmlspecialchars($meter['account']); ?></td>
    </tr>
    <tr>
      <td>Номер прибора учета</td>
      <td><?php echo htmlspecialchars($meter['meter']); ?></td>
    </tr>
  </table>



<?php // if (($meter['nextday'] =='') OR (is_null($meter['nextday'])) OR ($targetdate > 90)): ?>
<?php // else: ?>
<!-- <div class="meter_mpi" style="padding:10px; margin:5px 0 0 0; background-color:#fbefe7; border:1px solid #e2b896; position:relative">
<p style="font-size:13px; line-height:15px; text-align:center">Внимание!</p> 
<p style="font-size:13px; line-height:5px; text-align:center">Уважаемый клиент!</p> -->

<?php /* if ($targetdate == -100000000000) {
// вывод предупреждения об мпи
$mpi_msg='Межповерочный интервал Вашего прибора учета истек.';
} else {
$mpi_msg='До окончания межповерочного интервала Вашего прибора учета осталось менее '.$target_mm;
} */
?>
<!-- <p id="mpi_alarm" style="font-size:13px; text-align:center"><?php // echo $mpi_msg; ?></p> 
</div>

<div class="meter_mpi" style="padding:10px; margin:5px 0 0 0; background-color:#fbefe7; border:1px solid #e2b896; position:relative">
<p id="dopusluga" style="font-size:13px; line-height:15px; text-align:left"> 
   <?php //echo iconv('windows-1251', 'utf-8', $alarm['alarm1']); ?>
</p> 
<p style="font-size:13px; line-height:15px; text-align:left">
  <?php // echo iconv('windows-1251', 'utf-8', $alarm['alarm2']); ?>
</p>
<!-- <p style="font-size:13px; line-height:15px; text-align:left">
   При эксплуатации ПУ с истекшим сроком поверки начисление платы за электропотребление производится:</br>
   -в начальный период, не превышающий 3-х расчётных - исходя из среднесуточного потребления, </br>
   -далее – по нормативам потребления электроэнергии.
 </p> -->
<!-- </div> -->
<?php // endif; ?>



<?php 
if ($meter['scales'] == 1) {
$shkala_msg1='Показания:';
}
if ($meter['scales'] == 2) {
$shkala_msg1='Показания по первой шкале:';
$shkala_msg2='Показания по второй шкале:';
}
if ($meter['scales'] == 3) {
$shkala_msg1='Показания: пик';
$shkala_msg2='Показания: ночь';
$shkala_msg3='Показания: полупик';
}
?>

<table cellpadding="10" class="table-data2">
    <tr>
      <th colspan="2"><span id="reading1title" style="font-size: 12pt"><?php echo $shkala_msg1; ?></span></th>
    </tr>
    <tr>
      <td>Предыдущие показания</td>
      <td>
        <input readonly onclick="$('#reading1').val($(this).val())" style="cursor: pointer; min-width: 50px; background-color: #f5f5f5" value="<?php echo str_pad($meter['reading1'], $meter['capacity'], '0', STR_PAD_LEFT); ?>" type="text" />
      </td>
    </tr>
    <tr>
      <td>Текущие показания <span style="color: #ff0000">*</span></td>
      <td>
        <input id="reading1" style="min-width: 50px" class="required"<?php echo $_POST && ((key_exists('reading1', $_POST) && ($_POST['reading1'] == ''))) ? ' style="background-color: #FAAFBE"' : ''; ?> value="<?php echo $_POST && key_exists('reading1', $_POST) ? $_POST['reading1'] : ''; ?>" name="reading1" id="reading1" type="text" />
      </td> 
    </tr>

    
<?php if ($meter['scales'] == 3): ?>
   <tr class="reading3row">
      <th colspan="2"><span id="reading3title" style="font-size: 12pt"><?php echo $shkala_msg3; ?></span></th>
    </tr>
    <tr class="reading3row">
      <td>Предыдущие показания</td>
      <td>
        <input readonly onclick="$('#reading3').val($(this).val())" style="cursor: pointer; min-width: 50px; background-color: #f5f5f5" value="<?php echo str_pad($meter['reading3'], $meter['capacity'], '0', STR_PAD_LEFT); ?>" type="text" />
      </td>
    </tr>
    <tr class="reading3row">
      <td>Текущие показания <span style="color: #ff0000">*</span></td>
      <td>
        <input id="reading3" style="min-width: 50px" class="required"<?php echo $_POST && ((key_exists('reading3', $_POST) && ($_POST['reading3'] == ''))) ? ' style="background-color: #FAAFBE"' : ''; ?> value="<?php echo $_POST && key_exists('reading3', $_POST) ? $_POST['reading3'] : ''; ?>" name="reading3" id="reading3" type="text" />
      </td>
    </tr>
<?php endif; ?>


<?php if ($meter['scales'] > 1): ?>
    <tr class="reading2row">
      <th colspan="2"><span id="reading2title" style="font-size: 12pt"><?php echo $shkala_msg2; ?></span></th>
    </tr>
    <tr class="reading2row">
      <td>Предыдущие показания</td>
      <td>
        <input readonly onclick="$('#reading2').val($(this).val())" style="cursor: pointer; min-width: 50px; background-color: #f5f5f5" value="<?php echo str_pad($meter['reading2'], $meter['capacity'], '0', STR_PAD_LEFT); ?>" type="text" />
      </td>
    </tr>
    <tr class="reading2row">
      <td>Текущие показания <span style="color: #ff0000">*</span></td>
      <td>
        <input id="reading2" style="min-width: 50px" class="required"<?php echo $_POST && ((key_exists('reading2', $_POST) && ($_POST['reading2'] == ''))) ? ' style="background-color: #FAAFBE"' : ''; ?> value="<?php echo $_POST && key_exists('reading2', $_POST) ? $_POST['reading2'] : ''; ?>" name="reading2" id="reading2" type="text" />
      </td>
    </tr>
<?php endif; ?>

    <tr>
    <td style="text-align: center; background:none" colspan="2"><input type="submit" value="Отправить" style="padding: 9px 12px;" /></td>
    </tr>
  </table>
</form>


<script type="text/javascript">
	//$(document).ready(function() {
document.addEventListener('DOMContentLoaded', function () {
    $("#reading1").mask('<?php echo str_repeat('9', $meter['capacity']) ?>',{placeholder:"*"});
    $("#reading2").mask('<?php echo str_repeat('9', $meter['capacity']) ?>',{placeholder:"*"});
    $("#reading3").mask('<?php echo str_repeat('9', $meter['capacity']) ?>',{placeholder:"*"});
  });
</script>