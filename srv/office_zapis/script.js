/* запись в офис через электронную очередь */
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

function step1(office) {
	if (!document.getElementById("form1").dataset.zapisan) { // если не было уже записи
	    clearThis('mySelect'); // подтереть селекты
	    clearThis('selectdate');
	    clearThis('selecthour');
	    clearThis('myButton');
		loadDoc("/srv/office_zapis/0offices.php?oid=" + office, func0); 
		loadDoc('/srv/office_zapis/1queues.php?oid=' + office, func1);
	}
}

function func0(xhttp) { // вписать адрес выбранного офиса
	let myo = document.getElementById("myOffice");
	myo.dataset.office = xhttp.alias;
	myo.innerHTML = xhttp.address;
}

function func1(xhttp) { // создать селект с очередями

	var slots = 0; //далее проверка на случай, если все слоты пусты
	if(typeof(xhttp.data) != 'undefined') {
		for (i = 0; i < xhttp.data.length; i++) {
			slots += xhttp.data[i].qFreeSlots;
		}
		} else {
			slots = -1;
		}
	if (xhttp.msg_err) {
		alert('ошибка: '.xhttp.msg_err);
	}; 
	if (slots < 1) { //если в списке услуг вообще нет свободных слотов или не получен ответ от сервера
		document.getElementById("msg-noslots").style.display = 'flex';
		document.getElementById("form1").style.display = 'none';
		if (slots == 0) {
			alert('ошибка: нет свободных окон для записи!');
		}
		if (slots < 0) {
			alert('ошибка: нет данных от сервера');
		}
	} else { //если таки слоты есть, продолжаем  
		document.getElementById("msg-noslots").style.display = 'none';
		document.getElementById("form1").style.display = 'block';
		
		clearThis('mySelect'); // удаление селекта и лейбла, если есть
		var selectList = document.createElement("select"); // Создать селект с очередями
		selectList.id = "mySelect";
		selectList.className = "form-control";
		selectList.setAttribute("required", "");
		let myStep = "step2('" + document.getElementById("myOffice").dataset.office + "');";
		selectList.setAttribute("onchange", myStep);

		var label = document.createElement("label");
		label.setAttribute('for', 'mySelect');
		label.innerHTML = 'Тема обращения:<span class="text-danger">*</span>';

		var myParent = document.getElementById("group1");
		myParent.appendChild(label);
		myParent.appendChild(selectList);

		//Create and append the options
		var option = document.createElement("option");
		option.value = "";
		option.text = "Выберите тему обращения:";
		option.setAttribute("disabled", "");
		option.setAttribute("selected", "");
		selectList.appendChild(option);
		for (i = 0; i < xhttp.data.length; i++) { /* for (var i in xhttp.data) { //этот вариант цикла стал давать +1 лишнее undefined */
			if (xhttp.data[i].qFreeSlots > 0) {
				option = document.createElement("option");
				option.value = xhttp.data[i].qId;
				option.text = xhttp.data[i].qFullName;
				selectList.appendChild(option);
			} 
		}
	//step2();
	}
}

function step2() {
	let myOffice = document.getElementById("myOffice").dataset.office;
	let myQueue = document.getElementById("mySelect").value;
	loadDoc("/srv/office_zapis/2dayz.php?oid=" + myOffice + "&qid=" + myQueue, func2); 
}

function func2(xhttp) {

	if(typeof(xhttp.data) == 'undefined') {
		alert('ошибка: нет данных от сервера');
	}

	clearThis('selectdate'); // удаление селекта и лейбла, если есть

		selectList = document.createElement("select"); // создать селект с датами
		selectList.id = "selectdate";
		selectList.className = "form-control";
		selectList.setAttribute("required", "");
		let myStep = "step3('" + document.getElementById("myOffice").dataset.office + "');";
		selectList.setAttribute("onchange", myStep);
		
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
		

	var weekdays = ['в воскресенье, ','в понедельник, ','во вторник, ','в среду, ','в четверг, ','в пятницу, ','в субботу, '];
	var months = [' января ',' февраля ',' марта ',' апреля ',' мая ',' июня ',' июля ',' августа ',' сентября ',' октября ',' ноября ',' декабря '];

	for (i = 0; i < xhttp.data.length; i++) {
		if (xhttp.data[i].calendarDayFreeSlots > 0) {
			option = document.createElement("option");
			option.value = xhttp.data[i].calendarDayId;
			//option.text = xhttp.data[i].calendarDayDate; 
			// вместо обычной строки хх.хх.хххх подставляем дни недели и месяцы:			
			var notnow = new Date(xhttp.data[i].calendarDayDate.split('.')[2], xhttp.data[i].calendarDayDate.split('.')[1]-1, xhttp.data[i].calendarDayDate.split('.')[0], 0, 0, 0, 0);
			var day = weekdays[ notnow.getDay() ];
			var month = months[ notnow.getMonth() ];

			option.text = day + xhttp.data[i].calendarDayDate.split('.')[0] + month + xhttp.data[i].calendarDayDate.split('.')[2];
			selectList.appendChild(option);
		}
	}
	//step3();

}

function step3() {
	let myOffice = document.getElementById("myOffice").dataset.office;
	let myQueue = document.getElementById("mySelect").value;
	let myDay = document.getElementById("selectdate").value;
	loadDoc("/srv/office_zapis/3hours.php?oid=" + myOffice + "&qid=" + myQueue + "&did=" + myDay, func3);
	//console.log( 'initiating step 3' );
}

function func3(xhttp) {

	if(typeof(xhttp.data) == 'undefined') {
		alert('ошибка: нет данных от сервера');
	}

	clearThis('selecthour'); // удаление селекта и лейбла, если есть

		selectList = document.createElement("select"); // создать селект со слотами
		selectList.id = "selecthour";
		selectList.className = "form-control";
		selectList.setAttribute("required", "");
		let myStep = "step4('" + document.getElementById("myOffice").dataset.office + "');";
		selectList.setAttribute("onchange", myStep);
		
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
	for (i = 0; i < xhttp.data.length; i++) {
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

function step4() {
	var cid = document.getElementById("selecthour");
	var myButton = document.getElementById("myButton");
	if (cid.value) { //если выбран час
		if (!myButton) { //если кнопки нет, создать
			//console.log( 'generating button:' );
			var myParent = document.getElementById("group4");
			var myButton = document.createElement("button");
			myButton.id = "myButton";
			myButton.className = "btn btn-primary";
			myButton.setAttribute("type", "submit");
			myButton.innerHTML = 'Записаться';
			myButton.setAttribute("onclick", "step5();");
			myParent.appendChild(myButton);
		}
	}

}

function step5() {
	//console.log( 'проверка наличия данных для записи' );
	let myOffice = document.getElementById("myOffice").dataset.office;
	let mySlot = document.getElementById("selecthour").value;
	var cle = document.getElementById("clientEmail");
	var clt = document.getElementById("clientPhoneNumber").value;
	var cln = document.getElementById("clientFIO").value;
	
	//////////////////// проверка email
	var checkedmail = true;
	const mymail = cle.value;
	if (mymail != '') {
		checkedmail = (/[^@\s]+@[^@\s]+\.[^@\s]+/.test(mymail));
	} else { checkedmail = true; }
	if ( checkedmail == false ) { 
		if ( !cle.classList.contains("is-invalid") ) { cle.classList.add("is-invalid") }
		if ( document.getElementById("clientEmailInvalidFeedback").classList.contains("hidden") ) { document.getElementById("clientEmailInvalidFeedback").classList.remove("hidden") }
	} else { 
		cle.classList.remove("is-invalid");
		document.getElementById("clientEmailInvalidFeedback").classList.add("hidden");
	}
	////////////////////
	
	if (mySlot && clt && cln && checkedmail) {
		var myvalue = "/srv/office_zapis/4register.php?oid=" + myOffice + "&cid=" + mySlot + "&cle=" + cle.value + "&clt=" + clt + "&cln=" + cln;
		//console.log ( 'ready to send request: ' + myvalue);
		loadDoc(myvalue, func4);
	} else { console.log ( 'Не все поля заполнены корректно!' ); }
}

function func4(xhttp) {

	if(typeof(xhttp.data) == 'undefined') {
		alert('ошибка: нет данных от сервера');
	}

	//console.log( 'запрос на запись в очередь. Ответ: ' + JSON.stringify(xhttp));
	if (xhttp.status == "ok") {
		var myButton = document.getElementById("myButton"); // удаление кнопки
		myButton.parentNode.removeChild(myButton);
		document.getElementById("form1").dataset.zapisan = "da"; // признак успешной записи в форме
		document.getElementById("clientFIO").setAttribute("disabled", ""); //замораживание формы
		document.getElementById("clientPhoneNumber").setAttribute("disabled", "");
		document.getElementById("clientEmail").setAttribute("disabled", "");
		document.getElementById("mySelect").setAttribute("disabled", "");
		document.getElementById("selectdate").setAttribute("disabled", "");
		document.getElementById("selecthour").setAttribute("disabled", "");

		var selectdate = document.getElementById("selectdate")
		var selecthour = document.getElementById("selecthour")
		document.getElementById("msg_datetime").innerHTML = selectdate.options[selectdate.selectedIndex].text + ', к ' + selecthour.options[selecthour.selectedIndex].text;
		document.getElementById("msg_pincode").innerHTML = xhttp.data.pinCode;
		document.getElementById("msg").style.display = 'flex';
	} else {
		alert('Извините, данное время визита уже занято.');
	}
}


function clearThis(what) {
	let clearMe = document.getElementById(what);  // удаление селекта и лейбла, если есть
	if(typeof(clearMe) != 'undefined' && clearMe != null) {
		let e = clearMe.parentNode;
		let child = e.lastElementChild;  
        while (child) { 
            e.removeChild(child); 
            child = e.lastElementChild; 
        } 
	}
	return null;
}

function func_blank() {
	return null;
}

(function() {
	$('#clientPhoneNumber').inputmask({"mask": "+7 (999) 999-99-99","clearIncomplete": true});
	$('#clientEmail').inputmask("email");
})();