<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Баннеры в эл.почте: загрузки и&nbsp;клики");
?>
<link href="styles.css?3" type="text/css" rel="stylesheet">

<div class="backoffice_controls d-flex flex-row justify-content-between mb-2">
	<div class="spanhover" style="left:0; top:0" title="1. Номер Вашего лицевого счета. Используется для оплаты услуг и передачи показаний по телефону контакт-центра.">
	<button class="btn btn-outline-primary mr-1" type="submit" onclick="lookMonthPrev();return false;">Прошлый месяц</button>
</div>
	<button class="btn btn-outline-primary mr-1" type="submit" onclick="lookMonthThis();return false;">Текущий месяц</button>
	<div class="dropdown">
		<button class="btn btn-outline-primary mr-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Выбрать диапазон</button>
		<div class="dropdown-menu p-3">
			<span class="m-2">Статистика с даты:</span><br>
			<input id="date1" type="date" value="<? echo (date_create('-1 months')->format('Y-m-d')); ?>" class="m-2"><br>
			<span class="m-2">по дату:</span><br>
			<input id="date2" type="date" value="<? echo (date_create('')->format('Y-m-d')); ?>" class="m-2"><br>
			<button class="btn btn-sm btn-primary m-2" type="submit" onclick="lookStats();return false;">OK</button>
		</div>
	</div>
	<button class="btn btn-secondary ml-auto" onclick="window.print();return false;">На печать</button>
</div>
<div class="backoffice_controls d-flex flex-row mb-4">
	<button class="btn btn-outline-primary mr-1" type="submit" onclick="lookDayPrev();return false;">Вчера</button>
	<button id="getToday" class="btn btn-outline-primary mr-1" type="submit" onclick="lookDayThis();return false;">Сегодня</button>
</div>

<h3 id="label_period">Сегодня:</h3>
<div id="main_table">
</div>

<script>
function convertYMDtolocale(type, date) {
	const [year, month, day] = date.split('-');
	date = new Date(+year, month - 1, +day);
	let options = { year: 'numeric', month: 'long', day: 'numeric' };
	if (type == 'month_year') { options = { month: 'long', year: 'numeric' }; };
	date = date.toLocaleString('ru-RU', options);
	return date[0].toUpperCase() + date.slice(1);
}

function loadDoc(url, cFunction, param1) {
	let xhr = new XMLHttpRequest();
	xhr.open('GET', url);
	xhr.responseType = 'text';
	xhr.send();
	xhr.onload = function() {
		if (xhr.status >= 400) { // анализируем HTTP-статус ответа
		alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText); // Например, 404: Not Found
		} 
		//console.log('xhr.response: '+xhr.response);
		cFunction(xhr.response, param1);
	};
	xhr.onerror = function() {
	  alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText);
	};
}

function func1(xhttp, param1) {
	document.getElementById("main_table").innerHTML = xhttp;
	let mynumbers = document.getElementsByClassName("formatme"); // представить числа в региональном стандарте
	for (let i = 0; i < mynumbers.length; i++) {
		let mynumber = parseFloat(mynumbers[i].textContent);
		mynumbers[i].textContent = mynumber.toLocaleString(); // добавить пробелы
	}
}

function lookMonthPrev() {
	var date1 = "<? echo (date_create('first day of last month')->format('Y-m-d')); ?>";
	var date2 = "<? echo (date_create('last day of last month')->format('Y-m-d')); ?>";
	var url = 'stats_table.php?date1=' + date1 + '&date2=' + date2;
	document.getElementById("label_period").innerHTML = convertYMDtolocale('month_year', date1) + ':';
	document.getElementById("main_table").innerHTML = '';
	loadDoc(url, func1, 1);
}

function lookMonthThis() {
	var date1 = "<? echo (date_create('first day of this month')->format('Y-m-d')); ?>";
	var date2 = "<? echo (date_create()->format('Y-m-d')); ?>";
	var url = 'stats_table.php?date1=' + date1 + '&date2=' + date2;
	document.getElementById("label_period").innerHTML = convertYMDtolocale('month_year', date1) + ' (по состоянию на <? echo (date_create()->format('d.m.Y H:i')); ?>):';
	document.getElementById("main_table").innerHTML = '';
	loadDoc(url, func1, 1);
}

function lookDayPrev() {
	var date1 = "<? echo (date_create('yesterday')->format('Y-m-d')); ?>";
	var date2 = "<? echo (date_create('today')->format('Y-m-d')); ?>";
	var url = 'stats_table.php?date1=' + date1 + '&date2=' + date2;
	document.getElementById("label_period").innerHTML = 'Вчера, '+ convertYMDtolocale('any', date1) + ':';
	document.getElementById("main_table").innerHTML = '';
	loadDoc(url, func1, 1);
}

function lookDayThis() {
	var date1 = "<? echo (date_create('today')->format('Y-m-d')); ?>";
	var date2 = "<? echo (date_create()->format('Y-m-d')); ?>";
	var url = 'stats_table.php?date1=' + date1 + '&date2=' + date2;
	document.getElementById("label_period").innerHTML = 'Сегодня, '+ convertYMDtolocale('any', date1) + ' (по состоянию на <? echo (date_create()->format('H:i')); ?>):';
	document.getElementById("main_table").innerHTML = '';
	loadDoc(url, func1, 1);
}

function lookStats() {
	var date1 = document.getElementById("date1").value;
	var date2 = document.getElementById("date2").value;
	var url = 'stats_table.php?date1=' + date1 + '&date2=' + date2;
	document.getElementById("label_period").innerHTML = 'С '+ convertYMDtolocale('any', date1) + ' по ' + convertYMDtolocale('any', date2) +':';
	document.getElementById("main_table").innerHTML = '';
	loadDoc(url, func1, 1);
}

(function() {
lookStats();
})();

</script>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>