<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Предварительная запись");
?><p>На очный прием в Едином расчетно-информационном центре по адресу ...</p>
<style>
	.style1 { /* width:64px; height:64px; */ background:orange; }
</style>

<div style="width:800px; margin: 0 auto">
	<form id="form1">

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

	var myParent = document.getElementById("form1");

	var selectList = document.createElement("select"); //Create and append select list
	selectList.id = "mySelect";
	selectList.className = "form-control";
	selectList.setAttribute("onchange", "step2();");

	var label = document.createElement("label");
	label.setAttribute('for', 'mySelect');
	label.innerHTML = "Выберите услугу:";

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
	let x='';
	for (var i in xhttp.data) {
		x += JSON.stringify(xhttp.data[i]) + "<br><br>";
	}
	document.getElementById("demo1").innerHTML = x;
}

function step2() {
	var selectList = document.getElementById("mySelect");
	var myvalue = "2dayz.php?qid=" + selectList.value;
	loadDoc(myvalue, func2); 
	//alert( myvalue );
}

(function() {
	loadDoc('1queues.php', func1);
})();


</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>