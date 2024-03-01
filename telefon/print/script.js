let myarr = new Array(); // сотрудники
let my_otd = new Array(); // структура

function loadDoc(url, cFunction, param1) {
	xhr = new XMLHttpRequest();
	xhr.open('GET', url);
	xhr.responseType = 'json';
	xhr.send();
	xhr.onload = function() {
		if (xhr.status >= 400) { // анализируем HTTP-статус ответа
			alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText); // Например, 404: Not Found
		} 
		//cFunction(xhr.response, param1);
		myarr = xhr.response.sotrudniki; //скидываем данные в глобальный массив
		my_otd = xhr.response.otdely;
		stroim();
		vkluchaem();
	};
	xhr.onerror = function() {
	  alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText);
	};
}

function funcX(xhttp, param1) {
	console.log ('запуск funcX');
}

function add_sotrud(mysotrud, mytable, insert_org) {
				mycard = document.createElement("div");
				mycard.className = "card bg-light mb-3 p-2";

				myrow = document.createElement("div"); //////// показать сотрудника
				myrow.className = "row align-items-center py-0 myline";
				
				mycell = document.createElement("div");
				mycell.className = "col-3 pr-2";
				mytext = document.createTextNode(mysotrud.dolzh);
				mycell.appendChild(mytext);
				myrow.appendChild(mycell);
				
				mycell = document.createElement("div");
				mycell.className = "col-2 pr-2";
				mycell.innerHTML = "<b>" + mysotrud.fio + "</b>";
				if (mysotrud.status !== "Работа") { // если не на работе
					mycell.innerHTML += '<br><span class="badge badge-warning">' + mysotrud.status + '</span>'
				}
				myrow.appendChild(mycell);
				
				mycell = document.createElement("div");
				mycell.className = "col-2 pr-2 text-center";
				if (mysotrud.tel_vn) { mycell.innerHTML = mysotrud.tel_vn + '<br>'; }
				if (mysotrud.tel_vsh) { mycell.innerHTML += mysotrud.tel_vsh + '<br>'; }
				if (mysotrud.tel_mob) { mycell.innerHTML += mysotrud.tel_mob; }
				myrow.appendChild(mycell);
				
				mycell = document.createElement("div");
				mycell.className = "col-2 pr-2 text-center";
				if (mysotrud.email) {
					mytext2 = mysotrud.email.split("@");
					mytext3 = mytext2[0] + "<wbr>@" + mytext2[1];
					my_link = 'mailto:' + mysotrud.email;
					my_a = document.createElement("a");
					my_a.setAttribute("href", my_link);
					my_a.innerHTML = mytext3;
					mycell.appendChild(my_a); 
				}
				if (mysotrud.lync) {  ////////////// контакт Lync
					mycell.innerHTML += '<br>';
					my_a = document.createElement("button"); 
					my_click = 'navigator.clipboard.writeText("' + mysotrud.lync + '")';
					my_a.setAttribute("onclick", my_click);
					my_a.setAttribute('title', 'скопировать адрес Lync');
					my_a.className = "btn btn-sm btn-light py-0";
					my_a.innerHTML = 'Lync';
					mycell.appendChild(my_a);
				}
				myrow.appendChild(mycell);
				
				mycell = document.createElement("div");
				mycell.className = "col-3";
				mycell.innerHTML = mysotrud.adr;
				if (mysotrud.kab) { mycell.innerHTML += '<br>каб.: ' + mysotrud.kab; }
				myrow.appendChild(mycell);
				
				mycard.appendChild(myrow);
				mytable.appendChild(mycard);
}

function stroim() { ////////////////////////////////////// строим структуру отделов
	let otd_maxlevel = 0;
	for (i = 0; i < my_otd.length; i++) { // определить макс.глубину в структуре
		if ( my_otd[i].level > otd_maxlevel ) {
			otd_maxlevel = my_otd[i].level;
		}
	}
for (j = 0; j <= otd_maxlevel; j++) { // создать объекты в DOM последовательно от верхних структур к нижним
	for (i = 0; i < my_otd.length; i++) {
	if (my_otd[i].level == j) {
		otd_content = document.createElement("div"); // контейнер для div сотрудников и внутренних отделов
		otd_content.id = 'org_' + String(my_otd[i].id) + '_content';
		//otd_content.className = 'mb-3';
		
		otd_sotrudniki = document.createElement("div"); ///// сотрудники отдела
		otd_sotrudniki.id = 'org_' + String(my_otd[i].id) + '_sotrudniki';
		otd_content.appendChild(otd_sotrudniki);
		
		otd_children = document.createElement("div"); //////// детские элементы
		otd_children.id = 'org_' + String(my_otd[i].id) + '_children';
		otd_content.appendChild(otd_children);
		
		//otd_blank = document.createElement("div"); // отступ
		//otd_blank.style.height = '25px';
		//otd_blank.className = 'mb-5';
		//otd_content.appendChild(otd_blank);
		
		otd_btn = document.createElement("div"); ////////// кнопка коллапса отдела
		otd_btn.id = 'org_' + String(my_otd[i].id) + '_btn';
		otd_btn.className = "card mt-3 mb-3 px-2 py-3 h4 org-btn";
		
		let myspace1 = '<span class="org-btn-space-gray">'; // название в кнопке
		for (let j = 0; j < my_otd[i].level; j++) { myspace1 += '■ '; }
		myspace1 += '</span>';
		const myspace2 = '<span class="org-btn-space-' + my_otd[i].level + '">■ </span> ';
		otd_btn.innerHTML = '<span class="align-text-bottom">' + myspace1 + myspace2 + my_otd[i].name + '</span>';
		
		let parent_id = 'org_' + String(my_otd[i].parent) + '_children';
		div_parent = document.getElementById(parent_id);
		div_parent.appendChild(otd_btn);
		div_parent.appendChild(otd_content);
	}
	}
}
}

function vkluchaem() { // добавляем сотрудников в структуру
	for (i = 0; i < myarr.length; i++) {
		let mystring = 'org_' + String(myarr[i].otd_str[myarr[i].otd_str.length-1]) + '_sotrudniki';
		let myotd =  document.getElementById(mystring);
		add_sotrud(myarr[i], myotd, 0);
	}
}

function func_blank() {
	return null;
}

(function() {
	Time0 = new Date();
	const my_filename = '../sotrud.json?' + Time0.toLocaleDateString();
	loadDoc(my_filename, funcX, 1);
})();