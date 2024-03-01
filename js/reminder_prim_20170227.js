var region = $.cookie("dvec_region2");
if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt") {

var pokaz = $.cookie("reminder_prim_20170227");
	if (pokaz=="1") {}
	else {
		$.cookie("reminder_prim_20170227", 1, {expires : 30, path : '/'});

var n = noty({
	layout: 'center',
	type: 'warning',
	text: '<img src=/images/design2016/article/note_lamp2.png style="display:block; float:left; background:#e47951; margin: 0 10px 6px 0; padding:10px" /><p style="text-align:left; font-size:17px; line-height:20px; color:black">Уважаемые потребители ПАО «ДЭК» во Владивостоке! На телефонной линии по номерам 8-800-333-0-444 и по номеру 245-78-80 Владивостокского РКЦ технические неполадки устранены. Будем рады ответить на все ваши вопросы. Приносим свои извинения за доставленные неудобства.</p>',
	closeWith: 'click',
	buttons: [
		{addClass: 'btn btn-danger', text: 'OK', onClick: function($noty) {
				$noty.close();
			}
		}
	]
});
}
}