<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Предварительная запись в ЕРИЦ");
?>
<p>Запись на очный прием в Едином расчетно-информационном центре по адресу ...</p>
<style>
	.style1 { /* width:64px; height:64px; */ background:orange; }
</style>

	<form id="form1">
		<div class="form-row">
			<div class="form-group col">
				<label for="clientFIO">Фамилия, имя, отчество:<span class="text-danger">*</span></label>
				<input type="text" name="name" class="form-control" id="clientFIO" placeholder="Укажите фамилию, имя, отчество"required >
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="clientPhoneNumber">Контактный телефон:<span class="text-danger">*</span></label>
				<input type="tel" name="tel" class="form-control" id="clientPhoneNumber" placeholder="Номер телефона" required>
			</div>
			<div class="form-group col-md-6">
				<label for="clientEmail">Адрес эл.почты:</label>
				<input type="email" name="email" class="form-control" id="clientEmail" placeholder="adres@mail.ru">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col" id="group1"></div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6" id="group2"></div>
			<div class="form-group col-md-6" id="group3"></div>
		</div>
	</form>
	<!-- <div id="demo1" style="margin:25px"></div>
	<div id="demo2" style="margin:25px"></div> -->




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

	var myParent = document.getElementById("group1");

	var selectList = document.createElement("select"); //Create and append select list
	selectList.id = "mySelect";
	selectList.className = "form-control";
	selectList.setAttribute("required", "");
	selectList.setAttribute("onchange", "step2();");

	var label = document.createElement("label");
	label.setAttribute('for', 'mySelect');
	label.innerHTML = 'Тема обращения:<span class="text-danger">*</span>';

	myParent.appendChild(label);
	myParent.appendChild(selectList);

//Create and append the options
		var option = document.createElement("option");
		option.value = "";
		option.text = "Выберите тему обращения:";
		option.setAttribute("disabled", "");
		option.setAttribute("selected", "");
		selectList.appendChild(option);
	for (var i in xhttp.data) { /*for (i = 0; i < xhttp.data.length; i++) { //другой вариант цикла */
	  if (xhttp.data[i].qFreeSlots > 0) {
		option = document.createElement("option");
		option.value = xhttp.data[i].qId;
		option.text = xhttp.data[i].qFullName;
		selectList.appendChild(option);
  		}
	}
	//step2();
}


function func2(xhttp) {

	var selectList = document.getElementById("selectdate");  // удаление селекта и лейбла, если есть
	if(typeof(selectList) != 'undefined' && selectList != null) {
		var e = selectList.parentNode;
		var child = e.lastElementChild;  
        while (child) { 
            e.removeChild(child); 
            child = e.lastElementChild; 
        } 
	}

		selectList = document.createElement("select");
		selectList.id = "selectdate";
		selectList.className = "form-control";
		selectList.setAttribute("required", "");
		selectList.setAttribute("onchange", "step3();");
		var label = document.createElement("label");
		label.setAttribute('for', 'selectdate');
		label.innerHTML = 'Дата визита:<span class="text-danger">*</span>';
		var myParent = document.getElementById("group2");
		myParent.appendChild(label);
		myParent.appendChild(selectList);

//Create and append the options
		var option = document.createElement("option");
		option.value = "";
		option.text = "Выберите дату визита:";
		option.setAttribute("disabled", "");
		option.setAttribute("selected", "");
		selectList.appendChild(option);
	for (var i in xhttp.data) {
		if (xhttp.data[i].calendarDayFreeSlots > 0) {
			option = document.createElement("option");
			option.value = xhttp.data[i].calendarDayId;
			option.text = xhttp.data[i].calendarDayDate;
			selectList.appendChild(option);
		}
	}
	//step3();

}

function func3(xhttp) {

	var selectList = document.getElementById("selecthour");  // удаление селекта и лейбла, если есть
	if(typeof(selectList) != 'undefined' && selectList != null) {
		var e = selectList.parentNode;
		var child = e.lastElementChild;  
        while (child) { 
            e.removeChild(child); 
            child = e.lastElementChild; 
        } 
	}

		selectList = document.createElement("select");
		selectList.id = "selecthour";
		selectList.className = "form-control";
		selectList.setAttribute("required", "");
		selectList.setAttribute("onchange", "step4();");
		var label = document.createElement("label");
		label.setAttribute('for', 'selecthour');
		label.innerHTML = 'Время визита:<span class="text-danger">*</span>';
		var myParent = document.getElementById("group3");
		myParent.appendChild(label);
		myParent.appendChild(selectList);

//Create and append the options
		var option = document.createElement("option");
		option.value = "";
		option.text = "Выберите время визита:";
		option.setAttribute("disabled", "");
		option.setAttribute("selected", "");
		selectList.appendChild(option);
	var arr = new Array(); //массив не повторяющихся часов записи
	for (var i in xhttp.data) {
		if (arr.indexOf(xhttp.data[i].calendarCellTime) == -1) { //если еще нет такого времени в массиве
			arr.push(xhttp.data[i].calendarCellTime); // добавить в массив
			// создать option в DOM
			option = document.createElement("option");
			option.value = xhttp.data[i].calendarCellId;
			option.text = xhttp.data[i].calendarCellTime;
			selectList.appendChild(option);
		}
	}
	step4();

}

function step2() {
	var selectList = document.getElementById("mySelect");
	var myvalue = "2dayz.php?qid=" + selectList.value;
	loadDoc(myvalue, func2); 
}

function step3() {
	var qid = document.getElementById("mySelect");
	var did = document.getElementById("selectdate");
	var myvalue = "3hours.php?did=" + did.value + "&qid=" + qid.value;
	loadDoc(myvalue, func3);
	console.log( 'initiating step 3' );
}

function step4() {
	console.log( 'step 4:' );
}

(function() {
	loadDoc('1queues.php', func1);
})();


</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>