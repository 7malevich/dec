<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список очередей");
?>
<style>
	.style1 { /* width:64px; height:64px; */ background:orange; }
</style>

<div style="width:800px; margin: 0 auto">

	<div id="demo1" style="margin:25px 0"></div>
	<div id="demo2" style="margin:25px 0"></div>
</div>

<button type="button" onclick="loadDoc('queues.php', func1)">Получить список очередей, <br>
для которых существует хотя бы одна запись в таблице предварительной записи
</button>


<script>
function loadDoc(url, cFunction) {
	let xhr = new XMLHttpRequest();
	xhr.open('GET', url);
	xhr.responseType = 'json';
	xhr.send();
	xhr.onload = function() {
		if (xhr.status >= 400) { // анализируем HTTP-статус ответа
		alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText); // Например, 404: Not Found
		} 
		cFunction(xhr.response);
	};
	xhr.onerror = function() {
	  alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText);
	};
}


function func1(xhttp) {
    document.getElementById("demo1").innerHTML += JSON.stringify(xhttp.data[1]); // Привет, мир!
}
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>