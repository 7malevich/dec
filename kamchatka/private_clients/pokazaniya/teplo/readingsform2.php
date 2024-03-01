<?php  
$targetdate = intval(date_count($meter['nextday'])); 
//echo 'meter... '.var_dump($meter);

//устанавливаем куки на 5 дней об окончании МПИ ПУ
setcookie('dvec_meter_mpi_teplo', $targetdate, time()+60*60*24*5, '/');
$target_mm = count_mm(intval(date_count($meter['nextday'])));
// $alarm = get_alarm($connect, $_POST['branch']);
$alarm = get_alarm($connect, $meter['branch']); 
?> 


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

<div style="width:480px; padding:5px 15px; margin:20px auto; background-color:#fbefe7; border:1px solid #e2b896;">
  <p style="font-size:14px;">В поле &quot;Текущие показания&quot; необходимо ввести все цифры, которые Вы видите на шкале прибора учета. <u>Разделитель вводить не нужно</u>. Например показания Вашего прибора учета <strong>00522,34100</strong>. Необходимо ввести <strong>0052234100</strong> и нажать &quot;Отправить&quot;.</p>  
</div>


<?php if (($meter['nextday'] =='') OR (is_null($meter['nextday'])) OR ($targetdate > 90)): ?>
<?php else: ?>
<div class="meter_mpi" style="padding:10px; margin:5px 0 0 0; background-color:#fbefe7; border:1px solid #e2b896; position:relative">
<p style="font-size:13px; line-height:15px; text-align:center">Внимание!</p> 
<p style="font-size:13px; line-height:5px; text-align:center">Уважаемый клиент!</p>

<?php if ($targetdate == -100000000000) {
// вывод предупреждения об мпи
$mpi_msg='Межповерочный интервал Вашего прибора учета истек.';
} else {
$mpi_msg='До окончания межповерочного интервала Вашего прибора учета осталось менее '.$target_mm;
}
?>
<p id="mpi_alarm" style="font-size:13px; text-align:center"><?php echo $mpi_msg; ?></p> 
</div>

<div class="meter_mpi" style="padding:10px; margin:5px 0 0 0; background-color:#fbefe7; border:1px solid #e2b896; position:relative">
<p id="dopusluga" style="font-size:13px; line-height:15px; text-align:left">
   <?php echo ($alarm['alarm1']); ?>
</p>
<p style="font-size:13px; line-height:15px; text-align:left">
  <?php echo ($alarm['alarm2']); ?>
</p>
</div>

<!-- <p style="font-size:13px; line-height:15px; text-align:left">
   При эксплуатации ПУ с истекшим сроком поверки начисление платы за отопление производится:</br>
   -в начальный период, не превышающий 3-х расчётных - исходя из среднесуточного потребления, </br>
   -далее – по нормативам потребления.
 </p> -->
<?php endif; ?>






  <table cellpadding="10" class="table-data2">
    <tr>
      <th>Предыдущие показания</th>
      <td>
	<!--	printf('%.3F',(float)$meter['reading']); -->
		<input readonly  style="min-width: 50px; background-color: #f5f5f5" value="<?php echo str_pad(substr(number_format($meter['reading'], 4, '.', ''),0,strlen(number_format($meter['reading'], 4, '.', ''))-(4-$meter['capacity2'])), $meter['capacity']+1, '0', STR_PAD_LEFT);  ?>" type="text" />
      </td>
    </tr>
    <tr>
      <th>Текущие показания <span style="color: #ff0000">*</span></th>
      <td>
        <input id="reading1" style="min-width: 50px" class="required"<?php echo $_POST && ((key_exists('reading1', $_POST) && ($_POST['reading1'] == ''))) ? ' style="background-color: #FAAFBE"' : ''; ?> value="<?php echo $_POST && key_exists('reading1', $_POST) ? $_POST['reading1'] : ''; ?>" name="reading1" id="reading1" type="text" />
      </td>      
    </tr>
	
    <tr>
      <td style="text-align: center; background:none" colspan="2"><input type="submit" value="Отправить" style="padding: 9px 12px;" /></td>
    </tr>
  </table>
</form>

<script type="text/javascript">
	//$(document).ready(function() {
document.addEventListener('DOMContentLoaded', function () {
    $("#reading1").mask('<?php echo str_repeat('9', $meter['capacity']) ?>',{placeholder:"*"});
  });
</script>