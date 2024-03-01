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
	
	<form id="form1">
		
	</form>
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
}


(function() {
   loadDoc('queues.php', func1);
})();


</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>