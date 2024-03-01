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
	Показания счетчиков тепловой энергии<br/>в настоящее время не принимаются.
</div>

<div id="nettepla" style="margin-top:25px; color: #a61218; display:none">
	Показания счетчиков тепловой энергии<br/> по данному филиалу не принимаются.
</div>
</form>


<!--
<div class="datetime" style="margin: 30px auto 0 auto; width:530px; text-align:left">
	<p>Уважаемые клиенты! Показания приборов учета тепловой энергии принимаются в срок <u>с <span id="startdate"><?php echo $startday; ?></span> по <span id="enddate"><?php echo $finalday; ?></span> число</u> каждого месяца.</p>
</div>

<a style="display:block; width:478px; padding:5px 25px; margin:25px 0; background-color:rgb(231,244,255); border:1px solid #75b6ee" href="../../cabinet/">
	<p style="text-align:left">Рекомендуем передавать показания через «Личный кабинет». <u><b>Регистрируйтесь сейчас!</b></u></p>
</a>
-->


<div style="margin: 45px auto 0 auto; width:440px; text-align:left">
Читайте также:
<ul>
	<li><a href="../instrukciya/" >Инструкция: Передача показаний на сайте www.dvec.ru</a></li>
	<li><a href="../instrukciya/">Все способы передачи показаний </a></li>
</ul>
</div>

<script>
var filial; //выбранный в списке

function branchmanuallyselected(){
e = document.getElementById("branch");
  if (e.selectedIndex == 0) {
  filial = 'amursbyt';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 1) {
  filial = 'amur-epd';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/amursbyt/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 2) {
  filial = 'eaosbyt';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 3) {
  filial = 'kamchatka';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 4) {
  filial = 'nerungri';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 5) {
  filial = 'dalsbyt';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 6) {
  filial = 'yakutiya';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	  //window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 7) {
  filial = 'sakhalin';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 8) {
  filial = 'khabsbyt';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
}

	document.addEventListener('DOMContentLoaded', function () {
		e = document.getElementById("branch");
		e.selectedIndex = 6;
		branchmanuallyselected();
	});
document.getElementById("branch").addEventListener("change", branchmanuallyselected);

</script>