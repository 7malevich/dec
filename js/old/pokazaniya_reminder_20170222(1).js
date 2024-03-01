var region = $.cookie("dvec_region2");
if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt") {

var pokaz = $.cookie("pokazaniya_20170222");
	if (pokaz=="1") {}
	else {
		$.cookie("pokazaniya_20170222", 1, {expires : 1, path : '/'});

var n = noty({
	layout: 'center',
	type: 'warning',
	text: '<img src=/images/design2016/article/note_lamp2.png style="display:block; float:left; background:#e47951; margin: 0 15px 10px 0; padding:10px" /><p style="text-align:left; font-size:19px; line-height:23px; font-weight:bold; color:black; margin:5px 0 12px 0">Уважаемые потребители <br>ПАО «ДЭК» во Владивостоке!</p><p style="text-align:left; font-size:16px; line-height:18px; margin-bottom:10px; color:black">По техническим причинам  передача  показаний приборов учёта по телефону горячей линии 8-800-333-0-444 и по номеру 245-78-80 временно недоступна. Вы можете воспользоваться услугой передачи показаний с помощью других наших сервисов:<br>- SMS-сообщением;<br>- на сайте ПАО «ДЭК»;<br>- в офисах компании;<br>- через старшего по дому.</p><p style="text-align:left; font-size:16px; color:black">Приносим свои извинения за неудобства.</p>',
	buttons: [
		{addClass: 'btn btn-primary', text: 'Передать показания онлайн', onClick: function($noty) {

				// this = button element
				// $noty = $noty element
				$noty.close();
				window.location.href = '/bitrix/redirect.php?event1=pokazaniya&event2=reminder_20170222&event3=&goto=http%3A//www.dvec.ru/pokazaniya';
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