<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Запись в офис онлайн: расписание (ЕРИЦ Нерюнгри)");
?><link href="/srv/office_zapis/styles.css?2" type="text/css" rel="stylesheet">

<div class="backoffice_controls d-flex flex-row justify-content-between mb-4">
		<button class="btn btn-outline-primary mr-1" type="submit" onclick="lookToday();return false;">Сегодня</button>
		<button class="btn btn-outline-primary mr-1" type="submit" onclick="lookWeekAhead();return false;">Неделя вперёд</button>
		<div class="dropdown">
			<button class="btn btn-outline-primary mr-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Статистика</button>
			<div class="dropdown-menu p-3">
				<span class="m-2">Статистика с даты:</span><br>
				<input id="date1" type="date" value="<? echo (date_create('-1 months')->format('Y-m-d')); ?>" class="m-2"><br>
				<span class="m-2">по дату:</span><br>
				<input id="date2" type="date" value="<? echo (date_create('-1 days')->format('Y-m-d')); ?>" class="m-2"><br>
				<button class="btn btn-sm btn-primary m-2" type="submit" onclick="lookStats();return false;">OK</button>
			</div>
		</div>
	<button class="btn btn-secondary ml-auto" onclick="window.print();return false;">На печать</button>
</div>


<h3 id="label_period">Сегодня:</h3>
<div id="main_table">
</div>


<!-- Modal -->
<div class="modal fade" id="ModalDel" tabindex="-1" role="dialog" aria-labelledby="ModalDelTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        Удалить?
      </div>
      <div class="modal-body text-center">
		<div id="m_zapis"><span id="m_li" class="hidden"></span><span id="m_da" class="mr-3"></span><span id="m_vr" class="mr-3"></span><span id="m_fio"></span></div>
		<div id="m_res" class="text-danger"></div> 
      </div>
      <div class="modal-footer justify-content-center">
<button id="m_del" type="button" class="btn btn-danger" aria-label="Удалить" onclick="DeleteZapis2();">Удалить</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Закрыть" style="color:white">Нет</button>
      </div>
    </div>
  </div>
</div>
<!-- -->

<script>
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
}

function lookToday() {
	var date1 = "<? echo (date_create('now')->format('Y-m-d')); ?>";
	var date2 = "<? echo (date_create('now')->format('Y-m-d')); ?>";
	var url = '/srv/office_zapis/local_timetable.php?date1=' + date1 + '&date2=' + date2 + '&qid=neru_eric';
	document.getElementById("label_period").innerHTML = 'Сегодня:';
	document.getElementById("main_table").innerHTML = '';
	loadDoc(url, func1, 1);
}

function lookWeekAhead() {
	var date1 = "<? echo (date_create('+1 days')->format('Y-m-d')); ?>";
	var date2 = "<? echo (date_create('+7 days')->format('Y-m-d')); ?>";
	var url = '/srv/office_zapis/local_timetable.php?date1=' + date1 + '&date2=' + date2 + '&qid=neru_eric';
	document.getElementById("label_period").innerHTML = 'Неделя вперёд:'
	document.getElementById("main_table").innerHTML = '';
	loadDoc(url, func1, 1);
}

function lookStats() {
	var date1 = document.getElementById("date1").value;
	var date2 = document.getElementById("date2").value;
	var url = '/srv/office_zapis/local_stats.php?date1=' + date1 + '&date2=' + date2 + '&qid=neru_eric';
	document.getElementById("label_period").innerHTML = 'Статистика:'
	document.getElementById("main_table").innerHTML = '';
	loadDoc(url, func1, 1);
}

function DeleteZapis1(lineid,da,vr,fio) {
	document.getElementById("m_li").innerHTML = lineid;
	document.getElementById("m_da").innerHTML = da;
	document.getElementById("m_vr").innerHTML = vr;
	document.getElementById("m_fio").innerHTML = fio;
	$('#ModalDel').modal();
}

function DeleteZapis2() {
	document.getElementById("m_del").setAttribute("disabled", "");
	lineid = document.getElementById("m_li").innerHTML;
	var url = '/srv/office_zapis/local_delete.php?line=' + lineid + '&qid=neru_eric';
	loadDoc(url, DeleteZapis3, 1);
}

async function DeleteZapis3(xhttp) {
	document.getElementById("m_res").innerHTML = xhttp;
	document.getElementById("m_zapis").classList.add('hidden');
	await sleep(1000);
	$('#ModalDel').modal('hide');
	document.getElementById("m_li").innerHTML = '';
	document.getElementById("m_da").innerHTML = '';
	document.getElementById("m_vr").innerHTML = '';
	document.getElementById("m_fio").innerHTML = '';
	document.getElementById("m_res").innerHTML = '';
	document.getElementById("m_zapis").classList.remove('hidden');
	document.getElementById("m_del").removeAttribute("disabled", "");
	if ( document.getElementById("label_period").innerHTML == 'Неделя вперёд:' ) { // обновление страницы
		lookWeekAhead();
	} else {
		lookToday();
	}
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

(function() {
	lookToday();
})();

</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>