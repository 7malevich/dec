<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет корпоративных клиентов");
?><div class="spoiler folded" id="clickme"><h4 class="sp-hdr">Для клиентов на территории Амурской области, Еврейской АО, в Хабаровском и Приморском крае:</h4></div>
<div class="spoiler-text">
<style>
	.mycont {display:flex; flex:1 0; margin: 15px; padding: 20px 15px; border-radius:4px}
	.bordergray {border:1px solid #ccc; }
	.mybutt {flex: 0 0 10%; margin:-2px 18px 0 7px; min-width:48px; max-width:48px; min-height:48px; max-height:48px}
	.ox {border:1px solid #ccc}


@keyframes rotate {
	100% {
		transform: rotate(1turn);
	}
}

.rainbow {
	position: relative;
	z-index: 0;
		/* width: 400px;
		height: 300px;  */
	border-radius: 4px;
	overflow: hidden;
		/* padding: 2rem; */
}
.rainbow::before {
		content: '';
		position: absolute;
		z-index: -2;
		left: -50%;
		top: -50%;
		width: 200%;
		height: 200%;
		background-color: #399953;
		background-repeat: no-repeat;
		background-size: 50% 50%, 50% 50%;
		background-position: 0 0, 100% 0, 100% 100%, 0 100%;
		background-image: linear-gradient(#0066a6, #0066a6), linear-gradient(#e66a25, #e66a25), linear-gradient(#4ba4dc, #4ba4dc), linear-gradient(#0c5782, #0c5782);
		animation: rotate 24s linear infinite;
}
.rainbow::after {
		content: '';
		position: absolute;
		z-index: -1;
		left: 3px;
		top: 3px;
		width: calc(100% - 6px);
		height: calc(100% - 6px);
		background: white;
		border-radius: 4px;
}
</style>


<div class="card-deck mb-4" style="flex-direction: row-reverse; ">
	<a href="https://lp-issa.dvec.ru/" target="_blank" class="mycont rainbow align-items-center"> 
		<img src="/images/design2016/icons/lkk_dek.png" class="mybutt">
		Перейти к «Личному кабинету» для корпоративных клиентов
	</a>
	<a href="dopsogl.zip" target="_blank" class="mycont bordergray align-items-center"> 
		<img src="/images/design2016/icons/zip1.svg" class="mybutt">
		Скачать дополнительное соглашение к договору энергоснабжения
	</a>
</div>


<p>
	С 1 апреля 2021 г. исполнители коммунальных услуг (ИКУ) и корпоративные клиенты Дальневосточной энергетической компании могут получить широкий спектр услуг без посещения офисов компании.
</p>
<p>
	<b>Внимание! Услуга доступна для клиентов на территории Амурской области, Еврейской АО, в Хабаровском и Приморском крае.</b>
</p>
<p>
	В новом Личном кабинете на сайте компании клиентам доступны следующие услуги:
</p>

<ul>
	<li><b>Прием показаний</b> приборов учета и формирование отчета по переданным показаниям (в том числе - индивидуальных приборов учета для исполнителей коммунальных услуг) без необходимости подтверждения на бумажном носителе; </li>
	<li><b>Прием почасовых данных</b> в разрезе приборов учета при выборе 3-6 ценовой категории, которые предполагают почасовой расчет стоимости потребленной электрической энергии; </li>
	<li><b>Оплата счетов</b>;</li>
	<li><b>Информирование</b> о договоре энергоснабжения, начислениях, приборах учета, показаниях приборов учета, сроках поверки измерительных комплексов, о предстоящих ограничениях; контактных лицах Гарантирующего поставщика; </li>
	<li><b>Оформление документов</b> (без подписи) в формате PDF: акт сверки взаиморасчетов, акт приема-передачи электрической энергии (мощности), ведомость электропотребления, счет-фактура, приложение к акту приема-передачи электрической энергии (документы направляются на электронную почту клиента); </li>
	<li><b>Получение уведомлений</b>, связанных с исполнением договора энергоснабжения и иные информационные сообщения. </li>
	<li><b>Отправка сообщений</b> в отделение, обслуживающее договор энергоснабжения.</li>
</ul>

<p>
	Для регистрации в «Личном кабинете» клиентам необходимо подписать дополнительное соглашение к договору энергоснабжения и направить <a href="/organisations/service/">в адрес ПАО «ДЭК»</a>, либо связаться со специалистом компании, обслуживающим договор энергоснабжения.
</p>
<p>
	При регистрации в «Личном кабинете» клиенты принимают условия <a href="https://lp-issa.dvec.ru/#/privacy-policy" target="_blank">пользовательского соглашения</a>.
	Предлагаем также ознакомиться с <a href="https://lp-issa.dvec.ru/#/instruction" target="_blank">инструкцией пользователя</a>.
</p>

<script>
	setTimeout(function(){
	$('#clickme').trigger('click');
	}, 1200);
</script>
<div style="height:25px"></div>
<iframe width="100%" height="432" src="https://www.youtube.com/embed/kdvPIm9HAPE?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
<div style="height:25px"></div>
</div>

<div class="spoiler folded"><h4 class="sp-hdr">Для клиентов на территории обслуживания гарантирующего поставщика «Якутскэнерго»:</h4></div>
<div class="spoiler-text">
	<a href="https://lk.yakutskenergo.ru/lk/users/login" target="_blank" class="linkExt">Личный кабинет ПАО «Якутскэнерго»</a>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>