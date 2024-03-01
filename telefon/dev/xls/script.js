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
		document.getElementById('my_hdr').innerText = 'Телефонный справочник на ' + xhr.response.csv_modified;
		stroim(); // построить оргструктуру
		vkluchaem(); // добавить сотрудников
		exportiruem(); // содать кнопку экспорта
	};
	xhr.onerror = function() {
	  alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText);
	};
}

function funcX(xhttp, param1) {
	console.log ('запуск funcX');
}

function add_sotrud(mysotrud, mytable, insert_org) {
				myrow = document.createElement("tr"); //////// показать сотрудника
				
				mycell = document.createElement("td");
				mytext = document.createTextNode(mysotrud.dolzh);
				mycell.appendChild(mytext);
				myrow.appendChild(mycell);
				
				mycell = document.createElement("td");
				mycell.innerHTML = "<b>" + mysotrud.fio + "</b>";
				myrow.appendChild(mycell);
				
				mycell = document.createElement("td");
				mycell.className = "text-center";
				if (mysotrud.status !== "Работа") { // если не на работе
					mycell.innerHTML = mysotrud.status;
				}
				myrow.appendChild(mycell);
				
				mycell = document.createElement("td");
				mycell.className = "text-center";
				if (mysotrud.tel_vn) { mycell.innerHTML = "[" + mysotrud.tel_vn + "]"}
				myrow.appendChild(mycell);
				
				mycell = document.createElement("td");
				mycell.className = "text-center";
				mycell.innerHTML += mysotrud.tel_vsh;
				if (mysotrud.tel_mob) { 
					if (mysotrud.tel_vsh) { mycell.innerHTML += ', <wbr>' }
					mycell.innerHTML += mysotrud.tel_mob;
					}
				myrow.appendChild(mycell);
				
				mycell = document.createElement("td");
				mycell.className = "text-center";
				if (mysotrud.email) {
					mytext2 = mysotrud.email.split("@");
					mytext3 = mytext2[0] + "<wbr>@" + mytext2[1];
					my_link = 'mailto:' + mysotrud.email;
					my_a = document.createElement("a");
					my_a.setAttribute("href", my_link);
					my_a.innerHTML = mytext3;
					mycell.appendChild(my_a); 
				}
				/*if (mysotrud.lync) {  ////////////// контакт Lync
					mycell.innerHTML += '<br>';
					my_a = document.createElement("button"); 
					my_click = 'navigator.clipboard.writeText("' + mysotrud.lync + '")';
					my_a.setAttribute("onclick", my_click);
					my_a.setAttribute('title', 'скопировать адрес Lync');
					my_a.className = "btn btn-sm btn-light py-0";
					my_a.innerHTML = 'Lync';
					mycell.appendChild(my_a);
				}*/
				myrow.appendChild(mycell);
				
				mycell = document.createElement("td");
				mycell.innerHTML = mysotrud.adr;
				myrow.appendChild(mycell);
				
				mycell = document.createElement("td");
				mycell.className = "text-center";
				if (mysotrud.kab) { mycell.innerHTML = "(" + mysotrud.kab + ")" }
				myrow.appendChild(mycell);
				
				mytable.before(myrow);
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
		otd_content = document.createElement("code"); // контейнер для div сотрудников и внутренних отделов
		otd_content.id = 'org_' + String(my_otd[i].id) + '_content';
		otd_content.className = "d-none";
		
		otd_sotrudniki = document.createElement("code"); ///// сотрудники отдела
		otd_sotrudniki.id = 'org_' + String(my_otd[i].id) + '_sotrudniki';
		otd_sotrudniki.className = "d-none";
		
		otd_children = document.createElement("code"); //////// детские элементы
		otd_children.id = 'org_' + String(my_otd[i].id) + '_children';
		otd_children.className = "d-none";
		
		//otd_blank = document.createElement("div"); // отступ
		//otd_blank.style.height = '25px';
		//otd_blank.className = 'mb-5';
		//otd_content.appendChild(otd_blank);
		
		otd_btn = document.createElement("tr"); ////////// кнопка коллапса отдела
		otd_btn.id = 'org_' + String(my_otd[i].id) + '_btn';
		otd_btn.className = 'bg-light';
		otd_btn.style.backgroundColor = '#e8e9ea';
		
		let myspace1 = '<span class="org-btn-space-gray">'; // название в кнопке
		for (let j = 0; j < my_otd[i].level; j++) { myspace1 += '■ '; }
		myspace1 += '</span>';
		const myspace2 = '<span class="org-btn-space-' + my_otd[i].level + '">■ </span> ';
		otd_btn.innerHTML = '<td colspan="8" class="align-text-bottom">' + myspace1 + myspace2 + my_otd[i].name + '</td>';
		
		let parent_id = 'org_' + String(my_otd[i].parent) + '_children';
		div_parent = document.getElementById(parent_id);
		div_parent.before(otd_btn);
		div_parent.before(otd_content);
		div_parent.before(otd_sotrudniki);
		div_parent.before(otd_children);
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

function exportiruem() { // создаем кнопку экспорта в xls
	let my_btn = document.createElement('button');
	my_btn.id = 'my_btn_xls';
	my_btn.className = 'btn btn-primary align-baseline';
	my_btn.setAttribute('onclick', 'exportTableToExcel(\'tblData\', \'Тел.справочник ДЭК\')');
	my_btn.innerText = 'Сохранить в XLS';
	document.getElementById('my_btn_export').appendChild(my_btn);
}

function exportTableToExcel(tableID, filename = ''){ // сохранить как XLS

	const element = document.getElementById("my_btn_export");
	while (element.firstChild) {
		element.removeChild(element.firstChild); // сначала удалить кнопку
	}

    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
	exportiruem(); // создать кнопку заново
	let my_btn = document.getElementById("my_btn_xls");
	my_btn.innerText = 'Файл сохранен!';
	my_btn.setAttribute('disabled', 'true');
}

function func_blank() {
	return null;
}

(function() {
	Time0 = new Date();
	const my_filename = '../sotrud.json?' + Time0.toLocaleDateString();
	loadDoc(my_filename, funcX, 1);
})();