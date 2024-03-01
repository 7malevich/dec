var n = noty({
	layout: 'center',
	type: 'warning',
	text: '<img src=/images/design2016/article/note_lamp2.png style="display:block; float:left; background:#e47951; margin: 4px 20px 30px 0; padding:10px" /><p style="text-align:left; font:bold 16px/20px Roboto; color:black">Управляйте счетами за электрическую и тепловую энергию одним кликом – регистрируйтесь в личном кабинете клиента сейчас!</p><ul style="margin-top:10px"><li style="text-align:left;font-size:16px;margin-bottom:12px"><a href="https://issa.dvec.ru/" target="_blank">Открыть личный кабинет (электроэнергия)</a></li><li style="text-align:left;font-size:16px"><a href="http://dec.omni-us.ru/" target="_blank">Открыть личный кабинет (тепловая энергия, горячее водоснабжение)</a></li></ul>',
	buttons: [
		{addClass: 'btn btn-danger', text: 'Закрыть', onClick: function($noty) {
				$noty.close();
			}
		}
	]
});