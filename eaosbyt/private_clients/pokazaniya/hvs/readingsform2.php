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
  <p style="font-size:14px;">В поле &quot;Текущие показания&quot; необходимо ввести все цифры, которые Вы видите на шкале прибора учета. <u>Разделитель вводить не нужно</u>. Например показания Вашего прибора учета <strong>00522,341</strong>. Необходимо ввести <strong>00522341</strong> и нажать &quot;Отправить&quot;.</p>  
</div>

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