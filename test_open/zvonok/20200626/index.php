<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Infinity call-center: Звонок с сайта");
?><link rel="stylesheet" type="text/css" href="infinity_click_to_call.css" />
<script src="infinity_click_to_call.js"></script>


    <div style="max-width: 50em; margin: auto">

        <h2>Совместимость</h2>

        <p>
            На текущий момент сервис совместим со всеми браузерами, поддерживающими технологию WebRTC (Chrome, Firefox, Opera). Совместимость с Safari и Internet Explorer будет обеспечена после поддержки
            данными браузерами WebRTC.
        </p>

        <p>
            Последние версии браузеров, как правило, требуют для работы микрофона использование протоколов https и wss. Поэтому необходимо наличие SSL-сертификатов на сайте и на сервере телефонии.
        </p>

        <h2>Встраивание кнопки на сайт</h2>

        <p>Предусмотрено два способа встраивания кнопки "Позвонить" на сайт: визуальный и невизуальный.</p>

        <h3>Визуальный способ</h3>

        <ul>
            <li>Подключаем стили:<br /> &ltlink rel="stylesheet" type="text/css" href="infinity_click_to_call.css" /&gt </li>
            <li>Подключаем скрипт:<br /> &ltscript src="infinity_click_to_call.js"&gt&lt/script&gt </li>
            <li>Вызываем функцию инициализации:<br /> InfinityShowCallWidget({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001', dtmf: true }); </li>
        </ul>

        <p>Здесь webinf.dvec.ru - адрес или доменное имя сервера Infinity, 5002 - порт, предназначенный для приема звонков с сайта, 9001 - номер, с которого будут приходить звонки для маршрутизации средствами сценария IVR.</p>

        <p>В результате в правом верхнем углу сайта появляется зеленая кнопка "Позвонить". Размер, положение и внешний вид кнопки, а также панели набора DTMF можно изменить в файле стилей.</p>

        <h3>Невизуальный способ</h3>

        <ul>
            <li>Подключаем скрипт:<br /> &ltscript src="infinity_click_to_call.js"&gt&lt/script&gt </li>
            <li>Проверяем доступность WebRTC:<br /> InfinityIsSupported(); </li>
            <li>Вызываем функцию звонка при клике на любом элементе:<br /> InfinityCall({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001' }); </li>
            <li>Вызываем функцию отправки DTMF при клике на любом элементе:<br /> InfinityDTMF('1'); </li>
            <li>Вызываем функцию завершения звонка при клике на любом элементе:<br /> InfinityDrop(); </li>
        </ul>

        <p>Здесь webinf.dvec.ru - адрес или доменное имя сервера Infinity, 5002 - порт, предназначенный для приема звонков с сайта, 9001 - номер, с которого будут приходить звонки для маршрутизации средствами сценария IVR. В результате при клике на элементе будет выполнен звонок.</p>

        <p>Пример: 
            <input type="submit" value="Позвонить" onclick="InfinityCall({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001', timeout: 15000, onConnected: function () { alert('Call connected'); }, onFinished: function () { alert('Call finished'); } });" />
            <input type="submit" value="Отбой" onclick="InfinityDrop();" />
            <input type="submit" value="DTMF 1" onclick="InfinityDTMF('1');" />
            <input type="submit" value="Проверка" onclick="alert(InfinityIsSupported());" />
        </p>


        <h2>Подготовка сервера Infinity</h2>

        Информацию о настройке сервера телефонии Infinity для приема звонков с сайта можно получить у специалистов технической поддержки.

    </div>

    <script>
        InfinityShowCallWidget({ host: 'webinf.dvec.ru', port: 5002, secure: true, from: '9001', dtmf: true });
    </script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>