var region = $.cookie("dvec_region2");
if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt") {

var pokaz = $.cookie("anketa");
	if (pokaz=="1") {}
	else {
		$.cookie("anketa", 1, {expires : 7, path : '/'});

var n = noty({
	layout: 'center',
	type: 'warning',
	text: '<img src=/images/design2016/article/note_lamp2.png style="display:block; float:left; background:#e47951; margin: 4px 20px 20px 0; padding:10px" /><p style="text-align:left; font-size:19px; line-height:23px; font-weight:bold; color:black">Здравствуйте! Примите участие в оценке качества нашей работы! Это займет всего несколько минут.</p>',
	buttons: [
		{addClass: 'btn btn-primary', text: 'Принять!', onClick: function($noty) {

				// this = button element
				// $noty = $noty element
				$noty.close();
				window.location.href = '/bitrix/redirect.php?event1=anketa&event2=reminder&event3=&goto=http%3A//www.dvec.ru/private_clients/anketa/';
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