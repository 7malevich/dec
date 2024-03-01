<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакт-центр");
?><link rel="stylesheet" type="text/css" href="infinity_click_to_call.css" />
<script src="infinity_click_to_call.js"></script>
<style>
	.mycont {width:320px; display:flex; flex-direction: row; flex-wrap: wrap; justify-content:space-between}
	.mybutt {flex-grow:1; margin: 4px; min-width:90px; min-height:48px}
	.ox {border:1px solid #ccc}
</style>

<h2>Позвонить через Интернет</h2>
<p class="text-left">Ваше устройство должно иметь динамик и микрофон (ноутбук, планшет, смартфон).<br>
	Несовместимые браузеры: Safari, Internet&nbsp;Explorer, Edge.</p>

<div class="mycont">
	<input type="submit" class="btn btn-success mybutt" value="Позвонить" onclick="InfinityCall({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001', timeout: 15000, onFinished: function () { alert('Звонок завершен.'); } });">
<input type="submit" class="btn btn-danger mybutt" value="Завершить" onclick="InfinityDrop();">

<input type="submit" class="btn btn-light mybutt ox" value="1" onclick="InfinityDTMF('1');">
<input type="submit" class="btn btn-light mybutt ox" value="2" onclick="InfinityDTMF('2');">
<input type="submit" class="btn btn-light mybutt ox" value="3" onclick="InfinityDTMF('3');">

<input type="submit" class="btn btn-light mybutt ox" value="4" onclick="InfinityDTMF('4');">
<input type="submit" class="btn btn-light mybutt ox" value="5" onclick="InfinityDTMF('5');">
<input type="submit" class="btn btn-light mybutt ox" value="6" onclick="InfinityDTMF('6');">

<input type="submit" class="btn btn-light mybutt ox" value="7" onclick="InfinityDTMF('7');">
<input type="submit" class="btn btn-light mybutt ox" value="8" onclick="InfinityDTMF('8');">
<input type="submit" class="btn btn-light mybutt ox" value="9" onclick="InfinityDTMF('9');">

<input type="submit" class="btn btn-light mybutt ox" value="*" onclick="InfinityDTMF('*');">
<input type="submit" class="btn btn-light mybutt ox" value="0" onclick="InfinityDTMF('0');">
<input type="submit" class="btn btn-light mybutt ox" value="#" onclick="InfinityDTMF('#');">
</div>


<!-- <input type="submit" value="Проверка" onclick="alert(InfinityIsSupported());" /> --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>