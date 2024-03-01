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

<div id="uvedoml_hes" style="display:block; height:auto; width:530px; margin:0 auto">
	<a style="display:block; height:9.5rem; padding:10px 20px; margin:25px 0px; border:1px solid #ccc; background-image: url('/dalsbyt/private_clients/pokazaniya/images/farpost.svg'); background-position:center bottom" href="https://www.dvhab.ru/city/o/?utm_source=dvec_ru&utm_medium=dvec_ru&utm_campaign=dvec" target="_blank">
		Жители Хабаровска также могут передавать показания <br>на сайте DVHAB.RU
	</a>
</div>

<a style="display:block; width:478px; padding:5px 25px; margin:25px 0; background-color:rgb(231,244,255); border:1px solid #75b6ee" href="../../cabinet/">
	<p style="text-align:left">Рекомендуем передавать показания через мобильное приложение и «Личный кабинет». <u><b>Регистрируйтесь сейчас!</b></u></p>
</a>
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

	/* function branchautoselected(){


  teplofilial = 0; // показывать филиал в списке принимающих или нет
  startdate = <?php echo $startday; ?>;
  enddate = <?php echo $finalday; ?>;
	e = document.getElementById("branch"); //выбранный регион/филиал в списке

	if (Cookies.get('dvec_pokazaniya_teplo')) { //сначала попытка установить филиал из куки показаний
	filial = Cookies.get('dvec_pokazaniya_teplo');
	}
	
	if (!filial) { //если филиал еще не определен
	filial = Cookies.get("dvec_region2"); //регион пользователя в куки
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 }); // перезаписать куки показаний
}

	//если в форме нет филиала из куки:
	if (filial!="amursbyt" && filial!="amur-blag" && filial!="dalsbyt" && filial!="khabsbyt" && filial!="eaosbyt" && filial!="yakutiya" && filial!="sakhalin") { 
    filial = "amursbyt";
    e.selectedIndex = 0;
  }


  if (filial=="amursbyt" || filial=="amur-blag"|| filial=="yakutiya") {
    e.selectedIndex = 0;
	filial = "amursbyt";
    teplofilial = 1; //показывать филиал в списке
	startdate = 20;
	enddate = 25;
	starthour = startdate*24-24; // старт приема показаний по этому филиалу, в часах с начала месяца
	endhour = enddate*24+1;    // конец приема
	document.getElementById('pokazaniya_des').style.display = "none";
	document.getElementById('pokazaniya_lkk_holmsk').style.display = "none";
	document.getElementById('pokazaniya_lkk_omnius').style.display = "block";
  }
  if (filial=="dalsbyt") {
    e.selectedIndex = 1;
	filial = "dalsbyt";
    teplofilial = 1;
	startdate = 20;
	enddate = 25;
	starthour = startdate*24-24; // старт приема показаний по этому филиалу, в часах с начала месяца
	endhour = enddate*24;    // конец приема
	document.getElementById('pokazaniya_des').style.display = "block";
	document.getElementById('pokazaniya_lkk_holmsk').style.display = "none";
	document.getElementById('pokazaniya_lkk_omnius').style.display = "none";
  }
  if (filial=="khabsbyt") {
    e.selectedIndex = 2;
	filial = "khabsbyt";
    teplofilial = 1;
	startdate = 20;
	enddate = 25;
	starthour = startdate*24-24; // старт приема показаний по этому филиалу, в часах с начала месяца
	endhour = enddate*24;    // конец приема
	document.getElementById('pokazaniya_des').style.display = "none";
	document.getElementById('pokazaniya_lkk_holmsk').style.display = "none";
	document.getElementById('pokazaniya_lkk_omnius').style.display = "block";
  }
  if (filial=="sakhalin") {
    e.selectedIndex = 3;
	filial = "sakhalin";
    teplofilial = 1;
	startdate = 15;
	enddate = 25;
	starthour = startdate*24-24-1; // старт приема показаний по этому филиалу, в часах с начала месяца
	endhour = enddate*24;    // конец приема
	document.getElementById('pokazaniya_des').style.display = "none";
	document.getElementById('pokazaniya_lkk_holmsk').style.display = "block";
	document.getElementById('pokazaniya_lkk_omnius').style.display = "none";
  }
  if (filial=="eaosbyt") {
    e.selectedIndex = 4;
	filial = "eaosbyt";
    teplofilial = 1;
	startdate = 20;
	enddate = 25;
	starthour = startdate*24-24; // старт приема показаний по этому филиалу, в часах с начала месяца
	endhour = enddate*24;    // конец приема
	document.getElementById('pokazaniya_des').style.display = "none";
	document.getElementById('pokazaniya_lkk_holmsk').style.display = "none";
	document.getElementById('pokazaniya_lkk_omnius').style.display = "block";
  }

  document.getElementById('startdate').innerHTML = startdate;
  document.getElementById('enddate').innerHTML = enddate;

	if (<? echo $this_hour  ?> >= starthour && <? echo $this_hour ?> < endhour ) {
    document.getElementById('peredacha').style.display = "block";
    document.getElementById('neperedacha').style.display = "none";
  } else {
    document.getElementById('peredacha').style.display = "none";
    document.getElementById('neperedacha').style.display = "block";
  }

  if (teplofilial==0) {
    document.getElementById('peredacha').style.display = "none";
    document.getElementById('nettepla').style.display = "block";
    } else {
    document.getElementById('nettepla').style.display = "none";
  }
}
branchautoselected();
*/


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
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 7) {
  filial = 'sakhalin';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
  if (e.selectedIndex == 8) {
  filial = 'khabsbyt';
	Cookies.set('dvec_pokazaniya_teplo', filial, { expires: 3650 });
	  //window.location.href = "https://www.dvec.ru/"+filial+"/private_clients/pokazaniya/teplo/";
  }
}

	document.addEventListener('DOMContentLoaded', function () {
		e = document.getElementById("branch");
		e.selectedIndex = 8;
		branchmanuallyselected();
	});
document.getElementById("branch").addEventListener("change", branchmanuallyselected);

</script>