<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Infinity call-center: Звонок с сайта");
?>   <script src="infinity_click_to_call.js"></script>
<link rel="stylesheet" type="text/css" href="infinity_click_to_call.css" />


    <div style="max-width: 50em; margin: auto">

        <h2>Совместимость</h2>

        <p>
            На текущий момент сервис совместим со всеми браузерами, поддерживающими технологию WebRTC (Chrome, Firefox, Opera). Совместимость с Safari и Internet Explorer будет обеспечена после поддержки
            данными браузерами WebRTC.
        </p>

        <p>
            Последние версии браузеров, как правило, требуют для работы микрофона использование протоколов https и wss. Поэтому необходимо наличие SSL-сертификатов на сайте и на сервере телефонии.
        </p>


        <p>Необходимо указать IP-адрес или доменное имя сервера Infinity, 1234 - порт, предназначенный для приема звонков с сайта, 7777 - номер, с которого будут приходить звонки для маршрутизации средствами сценария IVR. В результате при клике на элементе будет выполнен звонок.</p>

        <p>Пример: 
            <input type="submit" value="Позвонить" onclick="InfinityCall({ host: '1.2.3.4', port: 1234, secure: true, from: '7777', timeout: 15000, onConnected: function () { alert('Call connected'); }, onFinished: function () { alert('Call finished'); } });" />
            <input type="submit" value="Отбой" onclick="InfinityDrop();" />
            <input type="submit" value="DTMF 1" onclick="InfinityDTMF('1');" />
            <input type="submit" value="Проверка" onclick="alert(InfinityIsSupported());" />
        </p>


        <h2>Подготовка сервера Infinity</h2>

        Информацию о настройке сервера телефонии Infinity для приема звонков с сайта можно получить у специалистов технической поддержки.

    </div>

    <script>
InfinityShowCallWidget({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001', dtmf: true });
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>