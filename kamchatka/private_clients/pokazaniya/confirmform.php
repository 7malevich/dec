<?php 
if ($meter['scales'] == 1) {
$shkala_msg1='Показания и расчетные начисления:';
}
if ($meter['scales'] == 2) {
$shkala_msg1='Показания и расчетные начисления по шкале день (t1):';
}
if ($meter['scales'] == 3) {
$shkala_msg1='Показания и расчетные начисления по шкале пик:';
}
?>



<table cellpadding="5" class="table-data2">
  <tr>
    <th colspan="2"><span id="reading1title" style="font-size: 12pt; padding-right: 50px;"><?php echo $shkala_msg1; ?></span></th>
  </tr>
  <tr>
    <td style="width: 1px; white-space: nowrap">Предыдущие показания</td>
    <td>
      <span><?php echo str_pad($meter['reading1'], $meter['capacity'], '0', STR_PAD_LEFT); ?></span>
    </td>
  </tr>
  <tr>
    <td style="width: 1px; white-space: nowrap">Текущие показания</td>
    <td>
      <span><?php echo $_POST['reading1']; ?></span>
    </td>      
  </tr>
  <tr style="font-weight: bold;">
	  <td style="width: 1px; white-space: nowrap"><span style="color:#154dae"><b>Будет начислено, кВтч</b></span></td>
	  <td><span style="color:#154dae"><b><?php echo $meter['reading1'] <= intval($_POST['reading1']) ? intval($_POST['reading1']) - $meter['reading1'] : intval('1' . str_repeat('0', $meter['capacity'])) - $meter['reading1'] + intval($_POST['reading1']); ?></b></span></td>
  </tr>
  


<?php if ($meter['scales'] == 3): ?>
    <tr>
      <th colspan="2"><span id="reading3title" style="font-size: 12pt; padding-right: 50px;">Показания и расчетные начисления по шкале полупик:</span></th>
    </tr>
    <tr>
      <td style="width: 1px; white-space: nowrap">Предыдущие показания</td>
      <td>
        <span><?php echo str_pad($meter['reading3'], $meter['capacity'], '0', STR_PAD_LEFT); ?></span>
      </td>
    </tr>
    <tr>
      <td style="width: 1px; white-space: nowrap">Текущие показания</td>
      <td>
        <span><?php echo $_POST['reading3']; ?></span>
      </td>      
    </tr>
    <tr>
    <td style="width: 1px; white-space: nowrap"><span style="color:#154dae"><b>Будет начислено, кВтч</b></span></td>
    <td><span style="color:#154dae"><b><?php echo $meter['reading3'] <= intval($_POST['reading3']) ? intval($_POST['reading3']) - $meter['reading3'] : intval('1' . str_repeat('0', $meter['capacity'])) - $meter['reading3'] + intval($_POST['reading3']); ?></b></span></td>
    </tr>

    <tr>
      <th colspan="2"><span id="reading2title" style="font-size: 12pt; padding-right: 50px;">Показания и расчетные начисления по шкале ночь:</span></th>
    </tr>
    <tr>
      <td style="width: 1px; white-space: nowrap">Предыдущие показания</td>
      <td>
        <span><?php echo str_pad($meter['reading2'], $meter['capacity'], '0', STR_PAD_LEFT); ?></span>
      </td>
    </tr>
    <tr>
      <td style="width: 1px; white-space: nowrap">Текущие показания</td>
      <td>
        <span><?php echo $_POST['reading2']; ?></span>
      </td>      
    </tr>
    <tr>
    <td style="width: 1px; white-space: nowrap"><span style="color:#154dae"><b>Будет начислено, кВтч</b></span></td>
    <td><span style="color:#154dae"><b><?php echo $meter['reading2'] <= intval($_POST['reading2']) ? intval($_POST['reading2']) - $meter['reading2'] : intval('1' . str_repeat('0', $meter['capacity'])) - $meter['reading2'] + intval($_POST['reading2']); ?></b></span></td>
    </tr>
    
  <?php endif; ?>



  <?php if ($meter['scales'] == 2): ?>
    <tr>
      <th colspan="2"><span id="reading2title" style="font-size: 12pt; padding-right: 50px;">Показания и расчетные начисления по шкале ночь (t2):</span></th>
    </tr>
    <tr>
      <td style="width: 1px; white-space: nowrap">Предыдущие показания</td>
      <td>
        <span><?php echo str_pad($meter['reading2'], $meter['capacity'], '0', STR_PAD_LEFT); ?></span>
      </td>
    </tr>
    <tr>
      <td style="width: 1px; white-space: nowrap">Текущие показания</td>
      <td>
        <span><?php echo $_POST['reading2']; ?></span>
      </td>      
    </tr>
    <tr>
		<td style="width: 1px; white-space: nowrap"><span style="color:#154dae"><b>Будет начислено, кВтч</b></span></td>
		<td><span style="color:#154dae"><b><?php echo $meter['reading2'] <= intval($_POST['reading2']) ? intval($_POST['reading2']) - $meter['reading2'] : intval('1' . str_repeat('0', $meter['capacity'])) - $meter['reading2'] + intval($_POST['reading2']); ?></b></span></td>
    </tr>
  <?php endif; ?>

 
 



</table>

<table>
  <tr>
    <td>
      <form style="margin: 0;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="sessionkey" id="sessionkey" type="hidden" value="<?php echo $_POST['sessionkey']; ?>" />
        <input type="hidden" name="step" value="3" />
        <input name="reading1" id="reading1" type="hidden" value="<?php echo $_POST['reading1']; ?>" />
        <input name="reading2" id="reading2" type="hidden" value="<?php echo $_POST['reading2']; ?>" />
        <input name="reading3" id="reading3" type="hidden" value="<?php echo $_POST['reading3']; ?>" />
        <input type="submit" value="Подтвердить" style="padding: 9px 12px;" />
      </form>
    </td>
    <td>
      <form style="margin: 0;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="sessionkey" id="sessionkey" type="hidden" value="<?php echo $_POST['sessionkey']; ?>" />
        <input type="hidden" name="step" value="1" />
        <input name="reading1" id="reading1" type="hidden" value="<?php echo $_POST['reading1']; ?>" />
        <input name="reading2" id="reading2" type="hidden" value="<?php echo $_POST['reading2']; ?>" />
        <input name="reading3" id="reading3" type="hidden" value="<?php echo $_POST['reading3']; ?>" />
        <input type="submit" value="Корректировать" style="padding: 9px 12px;" />
      </form>
    </td>
  </tr>
</table>


<div style="margin:10px; float:left">

</div>
<div style="margin:10px; float:left">


</div>