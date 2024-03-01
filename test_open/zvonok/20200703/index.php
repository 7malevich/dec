<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакт-центр: позвонить через Интернет");
?><link rel="stylesheet" type="text/css" href="infinity_click_to_call.css" />
<script src="infinity_click_to_call.js"></script>


    <div style="max-width: 50em; margin: auto">


        <p>
			Ваше устройство должно иметь динамик и микрофон (ноутбук, планшет, смартфон). <br>
Несовместимые браузеры: Safari, Internet Explorer, Firefox.
        </p>
		<a class="btn btn-primary" style="color:white" href="#" onclick="InfinityShowCallWidget({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001', dtmf: true });">Позвонить</a>

		<div style="height:3rem"></div>

        <h3>Невизуальный способ</h3>
        <p>Пример: 
            <input type="submit" value="Позвонить" onclick="InfinityCall({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001', timeout: 15000, onConnected: function () { alert('Call connected'); }, onFinished: function () { alert('Call finished'); } });" />
            <input type="submit" value="Отбой" onclick="InfinityDrop();" />
            <input type="submit" value="DTMF 1" onclick="InfinityDTMF('1');" />
            <input type="submit" value="Проверка" onclick="alert(InfinityIsSupported());" />
        </p>

    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>