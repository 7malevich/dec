// загрузка документа ***************************************

$(function(){

// объява-предупреждение о текущем регионе, если пользователь не выбирал регион или выбранный регион не соответствует отображаемому **************************
	var region = Cookies.get('dvec_gorod');
	var mysticky = document.getElementById("sticky_gorod_warning");
	//if (typeof(mysticky) != 'undefined' && mysticky != null) {
	if (document.body.contains(mysticky)) {
		var page_region = mysticky.getAttribute("data-region");
		if (region != page_region) {
			mysticky.classList.remove("hidden");
		}
	}

	$('#sticky_gorod_warning_ok').click(function() { //если "понятно" - установить куки региона страницы по атрибуту data-region, скрыть объяву
		var page_region = $( "#sticky_gorod_warning" ).data( "region" );
		//console.log('region: '+page_region);
		Cookies.set('dvec_gorod', page_region, { expires: 3650 });
		$( "#sticky_gorod_warning" ).addClass( "hidden" );
		return false; 
	});

	$('#sticky_gorod_warning_change').click(function() { //открыть дропдаун выбора региона по клику в кнопку выбрать
		scrollToAnchor('pagetop');
		$('#dropdown-city').trigger('click');
		//$('.collapse-menu-btn').trigger('click'); //в моб.верстке
		return false;
	});

});