let myarr = new Array(); // сотрудники
let my_otd = new Array(); // структура
const time0 = new Date(); // момент загрузки скрипта
let urlParams = new URLSearchParams(window.location.search);
		
(function() {
	raznoe();
	loadDoc();
})();

function loadDoc() {
	let myButton = document.getElementById("myButton");
	myButton.setAttribute("disabled", "");
	myButton.innerHTML = 'Подгрузка...';
	document.getElementById("myButtonX").addEventListener('click', function() { ochistka_poiska(); });
	
	let my_filename = 'sotrud.json?' + new Date().toLocaleDateString();
	xhr = new XMLHttpRequest();
	xhr.open('GET', my_filename);
	xhr.responseType = 'json';
	xhr.send();
	xhr.onload = function() {
		if (xhr.status >= 400) { alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText); } // Например, 404: Not Found
		myarr = xhr.response.sotrudniki; //скидываем данные в глобальный массив
		my_otd = xhr.response.otdely;
		//chistim('org_-1_children'); // очистить построенную структуру		
		stroim();
		vkluchaem();
		myButton.removeAttribute("disabled");
		myButton.innerHTML = 'Искать';
		document.getElementById('addr').focus();
		document.getElementById('addr').addEventListener('input', function() { 	ischem();check_spr(); });
		document.getElementById('myButton').addEventListener('click', function() { ischem();check_spr(); });
		console.log('справочник на '+ xhr.response.csv_modified);
		if (urlParams.has('poisk')) {
			document.getElementById('addr').value = urlParams.get('poisk');
			ischem(urlParams.get('poisk'));
		}
	};
	xhr.onerror = function() {
	  alert('Ошибка статус ' + xhr.status + ': ' + xhr.statusText);
	};
}

function check_spr() { // перезагрузка справочника после 7 утра, если страница была открыта вчера
	const val1 = document.getElementById('addr').value;
    delay(3000).then(() => {
		if (val1 == document.getElementById('addr').value) { // за 3сек инпут не изменился, ввод прекращен
			const time1 = new Date();
			if ( time0.getDate()!=time1.getDate() && time1.getHours()>=7 ) { // сменилась дата и время >= 7
				urlParams.set('poisk', document.getElementById('addr').value);
				window.location.search = urlParams.toString();
				console.log('перезагрузка страницы...');
			}
		}
	});
}

function delay(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function ischem(my_search) {
	const Time1 = new Date();
	// чистим результаты пред.поиска
	document.getElementById("msg-no").style.display = 'none';
	mytable = document.createElement("div"); // готовим таблицу результатов
	mytable.className = "mt-3";
	mytable.id = "mytable";
	var myParent = document.getElementById('myresult');
	if (typeof(mytable) != 'undefined' && mytable != null) { // удаление таблицы, если есть
		var child = myParent.lastElementChild;  
		while (child) {
			myParent.removeChild(child); 
			child = myParent.lastElementChild; 
		}
	}

	if (!my_search) { my_search = document.getElementById("addr").value; }
	let myresult = 0;
	if (my_search.length > 1) {
		scrollToAnchor('scroll_here');
		my_search = convert2ru2(my_search); //конвертация лат.раскладки + ё->е + ниж.регистр
		//let adr_check;
		let isnum = /^\d+$/.test(my_search.charAt(0)); // если первый символ - цифра
		if (isnum) { // ищем внутренний телефон
			my_search = my_search.replaceAll('-', '');
			for (let i = 0; i < myarr.length; i++) {
				let adr_check = myarr[i].tel_vn.replaceAll('-', '');
				if (adr_check.includes(my_search)) {
					myresult++;
					add_sotrud(myarr[i], mytable, 1);
				}
			}
		} else { // или ищем ФИО
			for (let i = 0; i < myarr.length; i++) {
				let adr_check = myarr[i].fio.slice(0,my_search.length).toLowerCase().replaceAll('ё', 'е');
				if (adr_check == my_search) {
					myresult++;
					add_sotrud(myarr[i], mytable, 1);
				}
			}
		}
		if (myresult < 1) { //если не найдено
			document.getElementById("msg-no").style.display = 'flex';
		} else { //если найдено
			myParent.appendChild(mytable); // вставить результат в документ
	const Time2 = new Date();
	console.log('прошло мс: ' + (Time2-Time1) + '; найдено: ' + myresult);
		}
	}
}

function add_sotrud(mysotrud, mytable, insert_org) {
				mycard = document.createElement("div");
				mycard.className = "card bg-light mb-3 p-2";

	if (insert_org) { ///////////////////////////////////////// показать отдел
		myrow_org = document.createElement("div");
		myrow_org.className = "row no-gutters border-bottom pb-2 small";
		let my_string = '';
		for (let j = 0; j < mysotrud.otd_str.length; j++) {
			let str_arr = mysotrud.otd_str.slice(0, j+1);
			if ( j > 0 ) { my_string += ' <span class="text-secondary mx-1"> / </span> '; }
			my_string += ' <a href="javascript:otd_open([' + str_arr + '])" class="text-secondary">' + my_otd[mysotrud.otd_str[j]].name + ' </a>';
		}
		myrow_org.innerHTML = my_string;
		mycard.appendChild(myrow_org);
	}
				myrow = document.createElement("div"); //////// показать сотрудника
				myrow.className = "row align-items-center py-0 myline";
				
				let mycell = document.createElement("div");
				mycell.className = "col-3 pr-2";
				mytext = document.createTextNode(mysotrud.dolzh);
				mycell.appendChild(mytext);
				myrow.appendChild(mycell);
				
				mycell = document.createElement("div");
				mycell.className = "col-2 pr-2";
				mycell.innerHTML = '<b>' + mysotrud.fio + '</b>';
				let my_click = 'navigator.clipboard.writeText("'+mysotrud.fio+'")';
				mycell.setAttribute("onclick", my_click);
				mycell.style.cursor = 'copy';
				mycell.setAttribute('title', 'скопировать ФИО');
					
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
					mytext3 = mytext2[0] + "<br>@" + mytext2[1];
					my_link = 'mailto:' + mysotrud.email;
					my_a = document.createElement("a");
					my_a.setAttribute("href", my_link);
					my_a.setAttribute('title', 'эл.почта');
					my_a.innerHTML = mytext3;
					mycell.appendChild(my_a); 
				}
				if (mysotrud.lync) {  ////////////// контакт Lync
					mycell.innerHTML += '<br>';
					my_a = document.createElement("button"); 
					my_click = 'navigator.clipboard.writeText("' + mysotrud.lync + '")';
					my_a.setAttribute("onclick", my_click);
					my_a.setAttribute('title', 'скопировать адрес Lync');
					my_a.className = "btn btn-sm btn-light py-0 px-1";
					my_a.innerHTML = 'Lync';
					//my_a.style='opacity:80%';
					mycell.appendChild(my_a);
				}
				my_a = document.createElement("button"); ////// скопировать ссылку на сотрудника
				my_click = 'navigator.clipboard.writeText("'+window.location.origin+window.location.pathname+'?poisk='+mysotrud.fio.replaceAll(' ', '%20')+'")';
				my_a.setAttribute("onclick", my_click);
				my_a.setAttribute('title', 'скопировать ссылку на сотрудника');
				my_a.className = "btn btn-sm btn-light py-0 px-2";
				my_a.innerHTML = '&#8250;'; //'&#128279;';
				//my_a.style='opacity:80%';
				mycell.appendChild(my_a);
				
				myrow.appendChild(mycell);
				
				mycell = document.createElement("div");
				mycell.className = "col-3";
				mycell.innerHTML = mysotrud.adr;
				if (mysotrud.kab) { mycell.innerHTML += '<br>каб.: ' + mysotrud.kab; }
				myrow.appendChild(mycell);
				
				mycard.appendChild(myrow);
				mytable.appendChild(mycard);
}

function convert2ru2(my_text) {
	const letters = {"ё":"е","q":"й","w":"ц","e":"у","r":"к","t":"е","y":"н","u":"г","i":"ш","o":"щ","p":"з","[":"х","]":"ъ","a":"ф","s":"ы","d":"в","f":"а","g":"п","h":"р","j":"о","k":"л","l":"д",";":"ж","'":"э","z":"я","x":"ч","c":"с","v":"м","b":"и","n":"т","m":"ь",",":"б",".":"ю"};
	return my_text.toLowerCase().split('').map((k)=>(k in letters?letters[k]:k)).join('');
}

function otd_open(o) {
	var clickme;
	for (let e of o) {
		clickme = document.getElementById('org_'+ e +'_btn');
		if ( !clickme.classList.contains('btn-myclicked') ) { clickme.click() }
	}
	var aTag = $("button[id='org_"+ o[o.length-1] +"_btn']");
	$('html,body').animate({scrollTop: (aTag.offset().top - 15)},'slow');
}

function stroim() { ////////////////////////////////////// строим структуру отделов
	let otd_maxlevel = 0;
	for (i = 0; i < my_otd.length; i++) { // определить макс.глубину в структуре
		if ( my_otd[i].level > otd_maxlevel ) {
			otd_maxlevel = my_otd[i].level;
		}
	}
for (j = 0; j <= otd_maxlevel; j++) { // создаем объекты в DOM последовательно от верхних структур к нижним
	for (i = 0; i < my_otd.length; i++) {
	if (my_otd[i].level == j) {
		otd_content = document.createElement("div"); // контейнер для div сотрудников и внутренних отделов
		otd_content.id = 'org_' + String(my_otd[i].id) + '_content';
		otd_content.className = 'collapse multi-collapse my-collapse';
		
		otd_sotrudniki = document.createElement("div"); ///// сотрудники отдела
		otd_sotrudniki.id = 'org_' + String(my_otd[i].id) + '_sotrudniki';
		otd_content.appendChild(otd_sotrudniki);
		
		otd_children = document.createElement("div"); //////// детские элементы
		otd_children.id = 'org_' + String(my_otd[i].id) + '_children';
		otd_content.appendChild(otd_children);
		
		otd_blank = document.createElement("div"); // отступ
		otd_blank.style.height = '25px';
		//otd_blank.className = 'mb-5';
		otd_content.appendChild(otd_blank);
		
		otd_btn = document.createElement("button"); ////////// кнопка коллапса отдела
		otd_btn.id = 'org_' + String(my_otd[i].id) + '_btn';
		otd_btn.className = "btn btn-light btn-lg btn-block text-left mb-3 org-btn";
		otd_btn.setAttribute('role', 'button');
		otd_btn.setAttribute('data-toggle', 'collapse');
		otd_btn.setAttribute('data-target', '#' + otd_content.id);
		otd_btn.addEventListener("click", bgChange);
		
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

function bgChange(e) {
	let mybutt;
	if ( e.target.nodeName == "SPAN" ) { // чтобы клики работали на div, а не на span
		mybutt = e.target.parentElement;
	} else {
		mybutt = e.target;
	}
	if ( mybutt.classList.contains('btn-light') ) {
		mybutt.classList.remove('btn-light');
		mybutt.classList.add('btn-myclicked');
	} else {
		mybutt.classList.remove('btn-myclicked');
		mybutt.classList.add('btn-light');
	}
}

function raznoe() {
	let my_div = document.createElement("div"); ////////  ↑ 🔎
	my_div.style = 'position:fixed;bottom:30px;right:5px';
	let my_butt = document.createElement("a");
	my_butt.className = 'btn btn-light px-3 pt-0';
	my_butt.style = 'cursor:pointer; opacity:0.8; font-size:2rem';
	my_butt.setAttribute('title', 'наверх');
	my_butt.innerHTML = '&#128269;';
	my_butt.addEventListener("click", function() { scrollToAnchor("scroll_here"); document.getElementById('addr').focus(); });
	my_div.appendChild(my_butt);
	document.body.appendChild(my_div);
}

function ochistka_poiska() { // очистить форму ввода и перевести фокус на нее
	if (document.getElementById('addr').value) { document.getElementById('addr').value = '' }
	ischem();
	document.getElementById('addr').focus();
}
/*function ochistka_poiska() { // очистка формы ввода и адр.строки перезагрузкой
				urlParams.delete('poisk');
				window.location.search = urlParams.toString();
				console.log('перезагрузка страницы...');
}*/

function chistim(my_id) { // удаление построенного справочника
	const myParent = document.getElementById(my_id);
		let child = myParent.lastElementChild;  
		while (child) {
			myParent.removeChild(child); 
			child = myParent.lastElementChild; 
		}
}