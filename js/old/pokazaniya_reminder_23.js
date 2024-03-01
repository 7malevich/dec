var today = new Date();
var dd = today.getDate();
if ((dd>=23) && (dd<=25)) {

var region = $.cookie("dvec_region2");
if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt") {

var pokaz = $.cookie("pokazaniya");
	if (pokaz=="1") {}
	else {
		$.cookie("pokazaniya", 1, {expires : 1, path : '/'});

var n = noty({
	layout: 'center',
	type: 'warning',
	text: '<img src=/images/design2016/article/note_lamp2.png style="display:block; float:left; background:#e47951; margin: 0 10px 10px 0; padding:10px" /><span style="text-align:left; font-size:19px; line-height:23px; font-weight:bold; color:black">Пришло время сообщить показания своего счетчика! <br />Это займет всего пару минут.</span>',
	buttons: [
		{addClass: 'btn btn-primary', text: 'Передать!', onClick: function($noty) {

				// this = button element
				// $noty = $noty element
				$noty.close();
				window.location.href = '/bitrix/redirect.php?event1=pokazaniya&event2=reminder&event3=&goto=http%3A//www.dvec.ru/pokazaniya';
			}
		},
		{addClass: 'btn btn-danger', text: 'Закрыть', onClick: function($noty) {
				$noty.close();

			}
		}
	]
});
}
}
}