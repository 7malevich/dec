function scrollToAnchor(aid){
	var aTag = $("a[name='"+ aid +"']");
	$('html,body').animate({scrollTop: (aTag.offset().top - 35)},'slow');
}
// также есть чистый JS: document.getElementById('title1').scrollIntoView({block: 'start', behavior: 'smooth'});



// для спойлеров - вариант 2
/* $(document).ready(function(){
 $('.spoiler').click(function(){
  $(this).next('.spoiler-text').toggle('normal');
  return false;
 });
}); */

function time_in_office(this_div, hour, minute) // часы - "сейчас в офисе"
{
	if (hour < 0) {hour = 23};
	if (hour > 23) {hour = 0};
	h = hour;
	m = minute;
	if (hour < 10) {h = "0" + hour};
	if (minute < 10) {m = "0" + minute};
	document.getElementById(this_div).innerHTML=h + ':' + m;
	minute = minute + 1;
	if (minute > 59) {minute = 0; hour = hour + 1};
	var t = setTimeout(function(){ time_in_office(this_div, hour, minute)}, 60000); // ошибка too much recursion вылечена обертыванием
}


// загрузка документа ***************************************

$(function(){

	//спойлеры
	$('.spoiler-text').hide();
	$('.spoiler').click(function(){
		$(this).toggleClass("folded").toggleClass("unfolded").next().slideToggle();
	});

// кнопка "Версия для слабовидящих" - автовключение *************************
/*	var ust = localStorage.getItem('zrenie');
	if (ust) {
		document.documentElement.classList.add('zrenie-1');
		console.log( 'ВКЛ версия для слабовидящих' );
	}

$('.header-fixed-nav__link--vision').click(function() { 
	var ust = localStorage.getItem('zrenie');
	if (ust) {
		localStorage.removeItem('zrenie');
		document.documentElement.classList.remove('zrenie-1');
	} else {
		localStorage.setItem('zrenie', 1);
		document.documentElement.classList.add('zrenie-1');
	}
	return false; 
});
*/
// кнопки "поделиться" в шапке ******************************

	$('#share_fb').click(function() { 
		//window.confirm(window.location.href);
		window.open('https://www.facebook.com/sharer/sharer.php?u='+window.location.href,'_blank');
		return false; 
	});
	$('#share_ok').click(function() { 
		window.open('https://connect.ok.ru/offer?url='+window.location.href+'&title='+document.title,'_blank');
		return false; 
	});
	$('#share_twitter').click(function() { 
		window.open('https://twitter.com/intent/tweet?text='+document.title+'&url='+window.location.href,'_blank');
		return false; 
	});
	$('#share_vk').click(function() { 
		window.open('https://vk.com/share.php?url='+window.location.href+'&title='+document.title,'_blank');
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

});