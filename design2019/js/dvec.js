function scrollToAnchor(aid){
	var aTag = $("a[name='"+ aid +"']");
	$('html,body').animate({scrollTop: (aTag.offset().top - 35)},'slow');
}

// загрузка документа ***************************************

$(function(){

	//спойлеры
	$('.spoiler-text').hide();
	$('.spoiler').click(function(){
		$(this).toggleClass("folded").toggleClass("unfolded").next().slideToggle();
	});

// кнопки "поделиться" в шапке ******************************

	$('#share_ok').click(function() { 
		window.open('https://connect.ok.ru/offer?url='+window.location.href+'&title='+document.title,'_blank');
		return false; 
	});
	$('#share_vk').click(function() { 
		window.open('https://vk.com/share.php?url='+window.location.href+'&title='+document.title,'_blank');
		return false; 
	});
	$('#share_tg').click(function() { 
		window.open('https://telegram.me/share/url?url='+window.location.href+'&text='+document.title,'_blank');
		return false; 
	});

// объява-предупреждение о текущем регионе, если пользователь не выбирал регион или выбранный регион не соответствует отображаемому **************************
	var region = Cookies.get('dvec_region2');
	var mysticky = document.getElementById("sticky_region_warning");
	//if (typeof(mysticky) != 'undefined' && mysticky != null) {
	if (document.body.contains(mysticky)) {
		var page_region = mysticky.getAttribute("data-region");
		if (region != page_region) {
			mysticky.classList.remove("hidden");
		}
	}

	$('#sticky_region_warning_ok').click(function() { //если "понятно" - установить куки региона страницы по атрибуту data-region, скрыть объяву
		var page_region = $( "#sticky_region_warning" ).data( "region" );
		//console.log('region: '+page_region);
		Cookies.set('dvec_region2', page_region, { expires: 3650 });
		$( "#sticky_region_warning" ).addClass( "hidden" );
		return false; 
	});

	$('#sticky_region_warning_change').click(function() { //открыть дропдаун выбора региона по клику в кнопку выбрать
		scrollToAnchor('pagetop');
		$('#dropdown-city').trigger('click');
		//$('.collapse-menu-btn').trigger('click'); //в моб.верстке
		return false;
	});

// счетчик квитанций и деревьев на стартовых страницах ********************************************************************
if (document.getElementById("kvitanciy")) { //работает, если на странице есть счетчик квитанций
  let kvitanciy = document.getElementById("kvitanciy");
  let mynumber = parseInt(kvitanciy.textContent);
  kvitanciy.textContent = mynumber.toLocaleString(); // добавить пробелы
  if (document.getElementById("kvitanciy_m")) { document.getElementById("kvitanciy_m").textContent = mynumber.toLocaleString(); }

  let dereviev = document.getElementById("dereviev");
  dereviev.textContent = parseInt(mynumber / 9600 * 12).toLocaleString();
  if (document.getElementById("dereviev_m")) { document.getElementById("dereviev_m").textContent = parseInt(mynumber / 9600 * 12).toLocaleString() }

  const padej_imenit = [01, 21, 31, 41, 51, 61, 71, 81, 91];  // ставим жителей/деревьев в ед.число именит./родит. падежа, если надо
  const padej_rodit = [02, 03, 04, 22, 23, 24, 32, 33, 34, 42, 43, 44, 52, 53, 54, 62, 63, 64, 72, 73, 74, 82, 83, 84, 92, 93, 94];

  let checkme = parseInt(mynumber.toString().slice(-2)); //последние 2 цифры в числе для определения ед./мн. и падежа
  let result = "жителей";
  if (padej_rodit.includes(checkme)) { result = "жителя" };
  document.getElementById("jitel").textContent = result;
  if (document.getElementById("jitel_m")) { document.getElementById("jitel_m").textContent = result }

  checkme = parseInt(dereviev.textContent.toString().slice(-2));
  result = "деревьев";
  if (padej_imenit.includes(checkme)) { result = "дерево" };
  if (padej_rodit.includes(checkme)) { result = "дерева" };
  document.getElementById("derevo").textContent = result;
  if (document.getElementById("derevo_m")) { document.getElementById("derevo_m").textContent = result }
}


});