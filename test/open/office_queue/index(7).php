<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Предварительная запись в ЕРИЦ");
?><p>Запись на очный прием в Едином расчетно-информационном центре по адресу ...</p>
<style>
	.style1 { /* width:64px; height:64px; */ background:orange; }
</style>

<div style="width:800px; margin: 0 auto">
	<form id="form1">
		<div class="form-group" id="group1"></div>
		<div class="form-group" id="group2"></div>
	</form>
	<div id="demo1" style="margin:25px"></div>
	<div id="demo2" style="margin:25px"></div>

</div>




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
	selectList.setAttribute("onchange", "step2();");

	var label = document.createElement("label");
	label.setAttribute('for', 'mySelect');
	label.innerHTML = "Выберите тему обращения:";

	myParent.appendChild(label);
	myParent.appendChild(selectList);

//Create and append the options
	for (var i in xhttp.data) { /*for (i = 0; i < xhttp.data.length; i++) { //другой вариант цикла */
	  if (xhttp.data[i].qFreeSlots > 0) {
		var option = document.createElement("option");
		option.value = xhttp.data[i].qId;
		option.text = xhttp.data[i].qFullName;
		selectList.appendChild(option);
  		}
	}
	step2();
}


function func2(xhttp) {




	var selectList = document.getElementById("selectdate");  // удаление селекта и лейбла
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
		selectList.setAttribute("onchange", "step3();");
		var label = document.createElement("label");
		label.setAttribute('for', 'selectdate');
		label.innerHTML = "Выберите дату визита:";
		var myParent = document.getElementById("group2");
		myParent.appendChild(label);
		myParent.appendChild(selectList);

//Create and append the options
	for (var i in xhttp.data) {
		var option = document.createElement("option");
		option.value = xhttp.data[i].calendarDayId;
		option.text = xhttp.data[i].calendarDayDate;
		selectList.appendChild(option);
	}
	step3();

}

function step2() {
	var selectList = document.getElementById("mySelect");
	var myvalue = "2dayz.php?qid=" + selectList.value;
	loadDoc(myvalue, func2); 
	//alert( myvalue );
}

function step3() {
	console.log( 'Ready for Step 3!' );
}

(function() {
	loadDoc('1queues.php', func1);
})();


</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>