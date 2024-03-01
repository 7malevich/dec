let myarr = new Array();

function loadDoc(url, cFunction, param1) {
	var myButton = document.getElementById("myButton");
	myButton.setAttribute("disabled", "");
	myButton.innerHTML = 'Подгрузка...';

	xhr = new XMLHttpRequest();
	xhr.open('GET', url);
	xhr.responseType = 'json';
	xhr.send();
	xhr.onload = function() {
		if (xhr.status >= 400) { // анализируем HTTP-статус ответа
		alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText); // Например, 404: Not Found
		} 
		myButton.removeAttribute("disabled");
		myButton.innerHTML = 'Искать';
		//cFunction(xhr.response, param1);
		myarr = xhr.response.data; //скидываем данные в глобальный массив
		document.getElementById('addr').addEventListener('input', function() { ischem(); });
		document.getElementById('myButton').addEventListener('click', function() { ischem(); });
		ischem();
	};
	xhr.onerror = function() {
	  alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText);
	};
}

function funcX(xhttp, param1) {
	console.log ('запуск funcX');

}

function ischem() {
Time1 = new Date();
	// чистим результаты пред.поиска
	document.getElementById("msg-no").style.display = 'none';

	//готовим таблицу результатов
	mytable = document.createElement("table");
	mytable.id = "mytable";
	mytable.className = "table table-sm table-hover";
	//mytable.innerHTML = '<tr class="table-data2"><th>Название УК</th><th>Адрес МКД</th><th>Начисления за отопление</th><th>Начисления за подогрев воды</th></tr>';
	var myParent = document.getElementById('myresult');
	if(typeof(mytable) != 'undefined' && mytable != null) { //удаление таблицы, если есть
		var child = myParent.lastElementChild;  
		while (child) {
			myParent.removeChild(child); 
			child = myParent.lastElementChild; 
		}
	}

	let myadr = document.getElementById("addr").value.toLowerCase();
	let myresult = 0;
	let myrow;
	let mycell;
	let mytext;
	if (myadr.length > 3) {
		scrollToAnchor('scroll_here');
		for (i = 0; i < myarr.length; i++) {
			var adr_check = myarr[i].adres.toLowerCase();
			if (adr_check.includes(myadr)) {
				//mytable.innerHTML += '<tr><td>'+myarr[i].uk+'</td><td>'+myarr[i].adr+'</td><td class="text-center">'+myarr[i].otopl+'</td><td class="text-center">'+myarr[i].podogr+'</td></tr>';
				myresult++;
				myrow = mytable.insertRow();
				mycell = myrow.insertCell();
				mytext = document.createTextNode(myarr[i].adres);
				mycell.appendChild(mytext);
				//mycell.innerHTML = myarr[i].adres;
				mycell = myrow.insertCell();
				mytext = document.createTextNode(myarr[i].otopl);
				mycell.appendChild(mytext);
				//mycell.innerHTML = myarr[i].otopl;
				mycell = myrow.insertCell();
				mytext = document.createTextNode(myarr[i].podogr);
				mycell.appendChild(mytext);
				//mycell.innerHTML = myarr[i].podogr;
				mycell = myrow.insertCell();
				mytext = document.createTextNode(myarr[i].uk);
				mycell.appendChild(mytext);
				//mycell.innerHTML = myarr[i].uk;
			}
		}
		if (myresult < 1) { //если не найдено
			document.getElementById("msg-no").style.display = 'flex';
		} else { //если найдено
			let thead = mytable.createTHead(); //создать шапку таблицы
			let row = thead.insertRow();
			let th1 = document.createElement("th");
				th1.innerHTML = 'Адрес';
			let th4 = document.createElement("th");
				th4.innerHTML = 'Начисления за&nbsp;отопление';
			let th5 = document.createElement("th");
				th5.innerHTML = 'Начисления&nbsp;за подогрев воды';
			let th6 = document.createElement("th");
				th6.innerHTML = 'Управляющая компания';
			row.appendChild(th1);
			row.appendChild(th4);
			row.appendChild(th5);
			row.appendChild(th6);
			myParent.appendChild(mytable);
Time2 = new Date();
console.log('прошло мс: '+(Time2-Time1));
document.getElementById("mytime").innerHTML = ' ('+(Time2-Time1)+'мс)';
		}
	}
}

function func_blank() {
	return null;
}

(function() {
	loadDoc('spisok.json?5', funcX, 1);
})();