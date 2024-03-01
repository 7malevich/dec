<script type="text/javascript">
  $(document).ready(function() {
	  
	
	<?php if ($test): ?>
      $(".datetime").remove();   
     // $("#reading1title").html('Показания:');  
<?php endif; ?>


    $('.instructions').css('width', '90%');
    $('.instructions').children('div').css('display', 'none').css('padding', '5px');
    $('.instructions').children('a').click(function() {
      //$('.instructions').children('div').css('display', 'none');
      $(this).parent().children('div').toggle();
    });
  });
</script>
<style>
  .formdiv { width:260px; margin:8px 5px; display: inline-block; text-align:left }
</style>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input name="step" id="step" type="hidden" value="1" />
		<div class="formdiv"><span style="color: #ff0000">*</span> Ваш регион:</div>
		<div class="formdiv">
			<select <?php echo $_POST && ((!key_exists('branch', $_POST) || ($_POST['branch'] == ''))) ? ' style="background-color: #FAAFBE"' : ''; ?> class="form-control required" style="width: 100%" name="branch" id="branch" onclick="branchmanuallyselected()">
          	<?php foreach ($branch_list as $branch): ?>
            	<option<?php echo $_POST && key_exists('branch', $_POST) && $_POST['branch'] == $branch['code'] ? ' selected' : ''; ?> value="<?php echo $branch['code']; ?>"><?php echo htmlspecialchars($branch['name']); ?></option>
          	<?php endforeach; ?>
        	</select>
		</div>

<div id="peredacha">
	<div class="formdiv"><span style="color: #ff0000">*</span> Укажите номер лицевого счета</div>
	<div class="formdiv">
		<input class="form-control required" <?php echo $_POST && ((!key_exists('account', $_POST) || ($_POST['account'] == ''))) ? ' style="background-color: #FAAFBE"' : ''; ?> value="<?php echo $_POST && key_exists('account', $_POST) ? $_POST['account'] : ''; ?>" name="account" id="account" type="text" />
	</div>
	<div class="formdiv"><span style="color: #ff0000">*</span> Укажите номер прибора учета</div>
	<div class="formdiv">
		<input class="form-control required" <?php echo $_POST && ((!key_exists('meter', $_POST) || ($_POST['meter'] == ''))) ? ' style="background-color: #FAAFBE"' : ''; ?> value="<?php echo $_POST && key_exists('meter', $_POST) ? $_POST['meter'] : ''; ?>" name="meter" id="meter" type="text" />
	</div>
	<div style="margin:10px 0 8px 15px; text-align:left">Внимание! Вводить номера лицевого счета и прибора учета нужно именно так, как они указаны в ваших квитанциях.</div>
	<div class="formdiv"></div>
	<div class="formdiv"><input class="btn btn-primary" type="submit" value="Отправить"></div>
</div>

<div id="neperedacha" style="margin-top:25px; color: #a61218; display:none">
	Показания счетчиков холодного водоснабжения<br/>в настоящее время не принимаются.
</div>
<div id="nettepla" style="margin-top:25px; color: #a61218; display:none">
	Показания счетчиков холодного водоснабжения<br/> по данному филиалу не принимаются.
</div>
</form>


<!--
<div class="datetime" style="margin: 30px auto 0 auto; width:530px; text-align:left">
	<p>Уважаемые клиенты! Показания приборов учета холодного водоснабжения принимаются в срок <u>с <span id="startdate"><?php echo $startday; ?></span> по <span id="enddate"><?php echo $finalday; ?></span> число</u> каждого месяца.</p>
</div>
-->


<div style="margin: 45px auto 0 auto; width:440px; text-align:left">
Читайте также:
<ul>
	<li><a href="../instrukciya/" >Инструкция: Передача показаний на сайте www.dvec.ru</a></li>
	<li><a href="../sposoby/">Все способы передачи показаний </a></li>
</ul>
</div>

<script>
var filial; //выбранный в списке

function branchmanuallyselected(){
e = document.getElementById("branch");
  if (e.selectedIndex == 0) {
  filial = 'amur-epd';
	Cookies.set('dvec_pokazaniya_hvs', filial, { expires: 3650 }); // перезаписать куки показаний
	  //window.location.href = "https://www.dvec.ru/amursbyt/private_clients/pokazaniya/hvs/";
  }
  if (e.selectedIndex == 1) {
  filial = 'eaosbyt';
	Cookies.set('dvec_pokazaniya_hvs', filial, { expires: 3650 }); // перезаписать куки показаний
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/hvs/";
  }
  if (e.selectedIndex == 2) {
  filial = 'nerungri';
	Cookies.set('dvec_pokazaniya_hvs', filial, { expires: 3650 }); // перезаписать куки показаний
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/hvs/";
  }
  if (e.selectedIndex == 3) {
  filial = 'dalsbyt';
	Cookies.set('dvec_pokazaniya_hvs', filial, { expires: 3650 }); // перезаписать куки показаний
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/hvs/";
  }
  if (e.selectedIndex == 4) {
  filial = 'sakhalin';
	Cookies.set('dvec_pokazaniya_hvs', filial, { expires: 3650 }); // перезаписать куки показаний
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/hvs/";
  }
}

	document.addEventListener('DOMContentLoaded', function () {
		e = document.getElementById("branch");
		e.selectedIndex = 0;
		branchmanuallyselected();
	});

document.getElementById("branch").addEventListener("change", branchmanuallyselected);

</script>