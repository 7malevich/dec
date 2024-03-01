<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакт-центр");
?><link rel="stylesheet" type="text/css" href="infinity_click_to_call.css" />
<script src="infinity_click_to_call.js"></script>
<style>
	.mycont {width:310px; display:flex; flex-direction: row; flex-wrap: wrap; justify-content:space-between}
	.mybutt {flex-grow:1; margin: 4px; min-width:88px; min-height:48px}
	.left0 { margin-left:0 }
	.right0 { margin-right:0 }
	.ox {border:1px solid #ccc}
	.card { margin-bottom:25px }
	.card-in-row { min-height:444px }
	.card-body { padding: 27px }
	.card-text { text-align: left }

@media (max-width: 991.98px) {
	.card-body { padding: 16px }
	.card-tel { padding: 16px 8px }
	.card { margin-bottom:32px; min-height:initial }
	.but-soc { padding: 9px 12px}
}
</style>

<div class="row">
  <div class="col-sm-6">

<div class="card card-in-row">
  <div class="card-body card-tel">
	<h3 class="card-title">Позвонить через Интернет:</h3>
	<h6 class="card-subtitle mb-2 text-muted">Ваше устройство должно иметь динамик и микрофон (ноутбук, планшет, смартфон).<br>
	Несовместимые браузеры: Safari, Internet&nbsp;Explorer, Edge.</h6>

<div class="mycont">
	<input type="submit" class="btn btn-success mybutt left0" value="Позвонить" onclick="InfinityCall({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001', timeout: 15000, onFinished: function () { alert('Звонок завершен.'); } });">
<input type="submit" class="btn btn-danger mybutt right0" value="Завершить" onclick="InfinityDrop();">

<input type="submit" class="btn btn-light mybutt ox left0" value="1" onclick="InfinityDTMF('1');">
<input type="submit" class="btn btn-light mybutt ox" value="2" onclick="InfinityDTMF('2');">
<input type="submit" class="btn btn-light mybutt ox right0" value="3" onclick="InfinityDTMF('3');">

<input type="submit" class="btn btn-light mybutt ox left0" value="4" onclick="InfinityDTMF('4');">
<input type="submit" class="btn btn-light mybutt ox" value="5" onclick="InfinityDTMF('5');">
<input type="submit" class="btn btn-light mybutt ox right0" value="6" onclick="InfinityDTMF('6');">

<input type="submit" class="btn btn-light mybutt ox left0" value="7" onclick="InfinityDTMF('7');">
<input type="submit" class="btn btn-light mybutt ox" value="8" onclick="InfinityDTMF('8');">
<input type="submit" class="btn btn-light mybutt ox right0" value="9" onclick="InfinityDTMF('9');">

<input type="submit" class="btn btn-light mybutt ox left0" value="*" onclick="InfinityDTMF('*');">
<input type="submit" class="btn btn-light mybutt ox" value="0" onclick="InfinityDTMF('0');">
<input type="submit" class="btn btn-light mybutt ox right0" value="#" onclick="InfinityDTMF('#');">
</div>

<!-- <input type="submit" value="Проверка" onclick="alert(InfinityIsSupported());" /> -->

	</div>
</div>


</div>
<div class="col-sm-6">

<div class="card card-in-row">
	<div class="card-body">
		<h3 class="card-title" style="margin-bottom:28px">Единая телефонная линия для клиентов ПАО &laquo;ДЭК&raquo;:</h3>
		<h1 class="card-title text-center"><a href="tel:88002347777">8&nbsp;(800)&nbsp;234-77-77</a></h1>
		<p class="card-text text-left">Для соединения с  оператором звоните:<br>
			с понедельника по пятницу с 08:00 до 19:00, в  субботу  - с 08.00 до 17.00.</p>
		<p class="card-text text-left">В период приема показаний  (с 20 по 25 число месяца): <br>
	с понедельника по пятницу: с 08.00 до 21.00, в субботу с 08.00 до 17.00 <br>
	Звонок из любого региона бесплатный.</p>
	</div>
</div>
</div>
</div>

<p style="margin-top:15px; margin-bottom:40px">Единая телефонная линия компании действует с 2007 года. Работу контакт-центра обеспечивают квалифицированные 
специалисты, прошедшие профес&shy;сиональную подготовку. 
	Днём на звонки потребителей отвечают операторы линии, ночью на линии действует режим голосового меню.</p>

<div class="card">
	<div class="card-body">
<h4 class="card-title">Помимо телефонной связи, обратиться к специалистам контакт-центра можно в социальных сетях:</h4>
		<p class="text-left">Чтобы начать диалог в чате, перейдите на страницу ДЭК в социальной сети и нажмите кнопку &laquo;Написать сообщение&raquo;:</p>
<a href="https://www.facebook.com/DVEC.RU" target="_blank" class="btn but-soc text-light" style="background-color: #1b6dd1; margin-right:4px">
	<img src="/design2019/svg/soc-fb-white.svg" style="margin-right:10px">Facebook</a>
		<a href="https://vk.com/dvecru" target="_blank" class="btn but-soc text-light" style="background-color: #4a76a8">
	<img src="/design2019/svg/soc-vk-white.svg" style="margin-right:10px">ВКонтакте</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
<h4 class="card-title">Обратите внимание: контакт-центр для клиентов АО «ДРСК»</h4>
<p class="text-left">В Дальневосточной распределительной сетевой компании Вы можете получить консультацию по вопросам технологического присоединения к электрическим сетям, 
	оперативной информации по аварийным отключениям, незаконных подключений, замены приборов учета, качества электроэнергии. </p>
		<p class="text-left">Телефон: <a href="tel:88001000397">8 (800) 1000-397</a>, звонок бесплатный.</p>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>