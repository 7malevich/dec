<table cellpadding="5" class="table-data2" style="width:400px">
  <tr>
   
  </tr>
  <tr>
    <td style="width: 1px; white-space: nowrap">Предыдущие показания</td>
    <td>
      <span><?php //echo str_pad($meter['reading'], $meter['capacity']+1, '0', STR_PAD_LEFT); ?></span>
	 
	  
	 
	 
	  <span><?php echo str_pad(substr(number_format($meter['reading'], 4, '.', ''),0,strlen(number_format($meter['reading'], 4, '.', ''))-(4-$meter['capacity2'])), $meter['capacity']+1, '0', STR_PAD_LEFT); ?></span>
	  
	  
    </td>
  </tr>
  <tr>
    <td style="width: 1px; white-space: nowrap">Текущие показания</td>
    <td>
      <span><?php //echo $_POST['reading1']; ?></span>
	  <span><?php echo substr_replace($_POST['reading1'], '.', $meter['capacity1'], 0); ?></span>
	  
	  
	  
    </td>      
  </tr>
  <tr style="font-weight: bold;">
	  <td style="width: 1px; white-space: nowrap"><span style="color:#ae155b">Будет начислено, м&sup3;</span></td>
	  <td><span style="color:#ae155b"><b><?php echo $meter['reading'] <= floatval(substr_replace($_POST['reading1'], '.', $meter['capacity1'], 0)) ? round(floatval(substr_replace($_POST['reading1'], '.', $meter['capacity1'], 0)) - $meter['reading'],$meter['capacity2']) : intval('1' . str_repeat('0', $meter['capacity1'])) - $meter['reading'] + floatval(substr_replace($_POST['reading1'], '.', $meter['capacity1'], 0)); ?></b></span></td>
  </tr>
</table>
<br>                               
<table>
  <tr>
    <td>
      <form style="margin: 0;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="sessionkey" id="sessionkey" type="hidden" value="<?php echo $_POST['sessionkey']; ?>" />
		<input type="hidden" name="step" value="3" />
        <input name="reading1" id="reading1" type="hidden" value="<?php echo $_POST['reading1']; ?>" />
        <input name="capacity1" id="capacity1" type="hidden" value="<?php echo $meter['capacity1']; ?>" />
        <input type="hidden" name="mpi" value="<? echo $_POST['mpi']; ?>" />
        <input type="submit" value="Подтвердить" style="padding: 9px 12px;" />
      </form>
    </td>
    <td>
      <form style="margin: 0;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="sessionkey" id="sessionkey" type="hidden" value="<?php echo $_POST['sessionkey']; ?>" />
        <input type="hidden" name="step" value="1" />
        <input name="reading1" id="reading1" type="hidden" value="<?php echo $_POST['reading1']; ?>" />
         <input name="capacity1" id="capacity1" type="hidden" value="<?php echo $meter['capacity1']; ?>" />
		 <input type="hidden" name="mpi" value="<? echo $_POST['mpi']; ?>" />
        <input type="submit" value="Корректировать" style="padding: 9px 12px;" />
      </form>
    </td>
  </tr>
</table>