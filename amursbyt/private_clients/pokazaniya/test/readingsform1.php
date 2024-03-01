<style>
  .formdiv { width:260px; margin:8px 5px; display: inline-block; text-align:left }
</style>

<img src="/images/design2016/icons/lampochka.svg" style="position:absolute;top:25px;left:25px;width: 48px;height: 48px">

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
<!-- <div id="neperedacha" style="display:none">
	<div style="margin-top:15px; color:#a61218">Показания счетчиков электрической энергии<br>в настоящее время не принимаются.</div>
</div> -->

	</div>
</form>


<!--
<div style="margin: 15px auto 25px auto; width:530px; text-align:left">
	<p>Уважаемые клиенты! Показания счетчиков электрической энергии принимаются в срок <u>с <span id="startdate"><?php echo $startday; ?></span> 
	по <span id="enddate"><?php echo $finalday; ?></span> число</u> каждого месяца.</p>
</div>

<div id="pokazaniya_gvs" style="display: none; height: auto; width: 488px; padding: 15px 20px 7px 20px; margin: 25px 0px 25px; background-color: #f8dae6;border: 1px solid #e7b7ca;text-align:left">
	<p style="font-size:16px; text-align:left"><b>Передавайте также показания:</b></p> 
	<ul><li><a href="gvs/">По горячему водоснабжению</a></li>
		<li><a href="teplo/">По отоплению</a></li>
		<li><a href="hvs/">По холодному водоснабжению</a></li></ul>
</div>



<a style="display:block; width:478px; padding:5px 25px; margin:25px auto; background-color:rgb(231,244,255); border:1px solid #75b6ee" href="../cabinet/">
	<p style="text-align:left">Рекомендуем передавать показания через мобильное приложение и «Личный кабинет». <u><b>Регистрируйтесь сейчас!</b></u></p>
</a>
<!-- <iframe width="530" height="298" src="https://www.youtube.com/embed/_tjbijQQz4M?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe> -->


<a href="instrukciya/" class="alert alert-info d-flex mt-4 p-3 justify-content-center align-items-center">
	<img src="/press_center/press_release/images/schetchik2.png" style="padding-right: 1rem;opacity: 0.3">
	<span>Как снимать и передавать показания "умных счётчиков"</span>
</a>


<div style="margin: 45px auto 0 auto; width:440px; text-align:left">
Читайте также:
<ul>
	<li><a href="instrukciya/" >Инструкция: Передача показаний на сайте www.dvec.ru</a></li>
	<li><a href="sposoby/" >Все способы передачи показаний </a></li>
</ul>
</div>


<script>
var filial; //выбранный в списке

function branchmanuallyselected(){
e = document.getElementById("branch");
  if (e.selectedIndex == 0) {
  filial = 'amursbyt';
	Cookies.set('dvec_pokazaniya_svet', filial, { expires: 3650 });
	  //window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/";
  }
  if (e.selectedIndex == 1) {
  filial = 'eaosbyt';
	Cookies.set('dvec_pokazaniya_svet', filial, { expires: 3650 });
	  //window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/";
  }
  if (e.selectedIndex == 2) {
  filial = 'kamchatka';
	Cookies.set('dvec_pokazaniya_svet', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/";
  }
  if (e.selectedIndex == 3) {
  filial = 'nerungri';
	Cookies.set('dvec_pokazaniya_svet', filial, { expires: 3650 });
	  window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/";
  }
  if (e.selectedIndex == 4) {
  filial = 'dalsbyt';
	Cookies.set('dvec_pokazaniya_svet', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/";
  }
  if (e.selectedIndex == 5) {
  filial = 'yakutiya';
	Cookies.set('dvec_pokazaniya_svet', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/";
  }
  if (e.selectedIndex == 6) {
  filial = 'khabsbyt';
	Cookies.set('dvec_pokazaniya_svet', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/";
  }
}

	document.addEventListener('DOMContentLoaded', function () {
		e = document.getElementById("branch");
		e.selectedIndex = 0;
		branchmanuallyselected();
	});

	document.getElementById("branch").addEventListener("change", branchmanuallyselected);

</script>