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


function func1(xhttp) {

	var slots = 0; //далее проверка на случай, если все слоты пусты
	for (i = 0; i < xhttp.data.length; i++) {
		slots += xhttp.data[i].qFreeSlots;
	}
	if (slots == 0) { //если в списке услуг вооще нет свободных слотов - вывод сообщения
		document.getElementById("msg-noslots").style.display = 'flex';
		document.getElementById("form1").style.display = 'none';
		if (xhttp.msg) {
			loadDoc('queue/sendwarning.php?n=513', func_blank);
		} else {
			loadDoc('queue/sendwarning.php?n=508', func_blank);
		};
	} else { //если таки слоты есть, продолжаем  

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

function func4(xhttp) {
	console.log( 'запрос на запись в очередь. Ответ: ' + JSON.stringify(xhttp));
	if (xhttp.status == "ok") {
		console.log ('status:ok');

		var myButton = document.getElementById("myButton"); // удаление кнопки
		myButton.parentNode.removeChild(myButton);

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

function step2() {
	var selectList = document.getElementById("mySelect");
	var myvalue = "queue/2dayz.php?qid=" + selectList.value;
	loadDoc(myvalue, func2); 
}

function step3() {
	var qid = document.getElementById("mySelect");
	var did = document.getElementById("selectdate");
	var myvalue = "queue/3hours.php?did=" + did.value + "&qid=" + qid.value;
	loadDoc(myvalue, func3);
	console.log( 'initiating step 3' );
}

function step4() {
	var cid = document.getElementById("selecthour");
	var myButton = document.getElementById("myButton");
	if (cid.value) { //если выбран час
		if (!myButton) { //если кнопки нет, создать
			console.log( 'generating button:' );
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
	console.log( 'проверка наличия данных для записи' );
	var cid = document.getElementById("selecthour");
	var cle = document.getElementById("clientEmail");
	var clt = document.getElementById("clientPhoneNumber");
	var cln = document.getElementById("clientFIO");
	if (cid.value && clt.value && cln.value) {
		var myvalue = "queue/4register.php?cid=" + cid.value + "&cle=" + cle.value + "&clt=" + clt.value + "&cln=" + cln.value;
		console.log ( 'ready to send request: ' + myvalue);
		loadDoc(myvalue, func4);
	} else { console.log ( 'Не все поля заполнены!' ); }
}

function func_blank() {
	return null;
}

(function() {
	loadDoc('queue/1queues.php', func1);
})();