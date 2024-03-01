<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Единый контактный центр ПАО&nbsp;«ДЭК»");
?><link rel="stylesheet" type="text/css" href="/design2019/js/infinity_click_to_call.css" />
<script src="/design2019/js/infinity_click_to_call.js"></script>
<style>
	.mycont {width:310px; display:flex; flex-direction: row; flex-wrap: wrap; justify-content:space-between}
	.mybutt {flex-grow:1; margin: 4px; min-width:88px; min-height:48px}
	.left0 { margin-left: 0 }
	.right0 { margin-right: 0 }
	.ox {border:1px solid #ccc}
	.card { margin-bottom:25px }
	.card-in-row { min-height:446px }
	.card-body { padding: 27px }
	.card-text { text-align: left }
	.but-soc { margin-bottom: 6px; margin-right: 6px; vertical-align:top }
	.ico-soc { margin-right: 10px }

@media (max-width: 991.98px) {
	.card-body { padding: 16px }
	.card-tel { padding: 16px 8px }
	.card { margin-bottom:32px; min-height:initial }
	.but-soc { padding: 10px 12px; margin-right: 4px;}
	.ico-soc { margin-right: 7px }
}
</style>

<div class="row">

<div class="col-sm-6">
<div class="card card-in-row">
  <div class="card-body card-tel">
	<h3 class="card-title">Позвонить через Интернет:</h3>
	  <h6 class="card-subtitle text-muted" style="margin-bottom:8px">Ваше устройство должно иметь динамик и микрофон (ноутбук, планшет, смартфон).<br>
		  <u>Несовместимые</u> браузеры: Safari, Internet&nbsp;Explorer, Edge.</h6>

<div class="mycont">
	<input type="submit" class="btn btn-success mybutt left0" value="Позвонить" onclick="InfinityCall({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '80000009004', timeout: 15000, onFinished: function () { alert('Звонок завершен.'); } });">
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
		<h3 class="card-title text-center" style="margin-bottom:28px">Единая телефонная линия для клиентов ПАО &laquo;ДЭК&raquo;:</h3>
		<h1 class="card-title text-center"><a href="tel:88002347777">8&nbsp;(800)&nbsp;234-77-77</a></h1>
		<p class="card-text text-left">Для соединения с  оператором звоните<br>
			с понедельника по пятницу с 9:00 до 19:00.
		</p>
		<p class="card-text text-left">
			В период приема показаний (с 20 по 25 число) - с понедельника по пятницу с 9:00 до 19:00, в субботу с 9:00 до 17:00.
		</p>
		<p class="card-text text-left">
			Звонок из любого региона бесплатный.
		</p>
	</div>
</div>
</div>

</div>

<div class="row">
	<div class="col-sm-6">
		<div class="card">
			<img src="br_3.jpg" class="card-img-top" alt="Единый контактный центр ДЭК">
			<div class="card-body">
				<p class="text-left">Единая телефонная линия компании действует с 2007 года. Работу контакт-центра выполняют квалифици&shy;рованные специалисты, прошедшие профес&shy;сиональную подготовку. 
	Днём на звонки отвечают операторы, ночью на линии действует режим голосового меню.</p>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Звоните также: контакт-центр для клиентов АО «ДРСК»</h4>
				<p class="text-left">В Дальневосточной распределитель&shy;ной сетевой компании Вы можете получить консультацию по вопросам технологического присоединения к электрическим сетям, замены при&shy;боров учета, качества электроэнер&shy;гии, получить информацию по аварийным отключениям, сообщить о незаконном подключении.</p>
				<p class="text-left">Телефон: <a href="tel:88001000397">8 (800) 1000-397</a>, звонок&nbsp;бесплатный.</p>
			</div>
		</div>
	</div>
</div>

<p>Сегодня по единому номеру 8 800 234‑77‑77 клиенты могут получить консультацию по всем услугам, включенным в квитанцию, передать показания приборов учета, заказать обратный звонок и многое другое. </p>
<p>Современное оборудование центра, IP-телефония и российское программное обеспечение с интеллектуальной системой распознавания речи гарантируют клиентам высокое качество связи и обеспечивают большую пропускную способность сервиса – не менее 1 000 звонков в минуту. Специалисты контактного центра проходят углубленное обучение и могут максимально развернуто проконсультировать клиента из любой точки ДФО. </p>
<div class="row">
	<div class="col-sm-4">
		<div class="card">
 <img src="/press_center/press_release/images/200908-ekc-1b.jpg" class="card-img-top" title="Единый контакт-центр ДЭК">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="card">
 <img src="/press_center/press_release/images/200908-ekc-2b.jpg" class="card-img-top" title="Единый контакт-центр ДЭК">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="card">
 <img src="/press_center/press_release/images/200908-ekc-3b.jpg" class="card-img-top" title="Единый контакт-центр ДЭК">
		</div>
	</div>
</div>
<p>
 <img src="/press_center/press_release/images/200908-ekc-big.jpg" title="Единый контакт-центр ДЭК">
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>