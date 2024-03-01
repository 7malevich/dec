var pokaz = $.cookie("pokazaniya");
	if (pokaz=="1") {}
	else {
		$.cookie("pokazaniya", 1, {expires : 3, path : '/'});

var n = noty({
	layout: 'center',
	type: 'warning',
	text: '<img src=/images/design2016/article/note_lamp2.png style="display:block; float:left; background:#e47951; margin: 0 10px 10px 0; padding:10px" /><span style="text-align:left; font-size:19px; line-height:23px; font-weight:bold; color:black">Уважаемые клиенты! Передача показаний по электрической энергии через мобильное приложение в настоящее время недоступна. Просим вас передавать показания через <a href="https://issa.dvec.ru/">Личный кабинет</a> или в автоматическом режиме по телефону 8-800-100-3-777.<br>О возобновлении работы мобильного приложения будет сообщено дополнительно.</span>',
	buttons: [
		{addClass: 'btn btn-primary', text: 'OK', onClick: function($noty) {

				// this = button element
				// $noty = $noty element
				$noty.close();
			}
		},
	]
});
}