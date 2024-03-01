// Редирект на региональный сайт по событию (нажатие кнопки etc) ************************************

function RegionChangeMag(region)
{
	Cookies.set('dvec_gorod', region, { expires: 3650 });
	//console.log( 'выбран город: '+region );
	var arrayOfDirs = location.pathname.split('/');
	var regionsAvailable = ['blagoveschensk', 'khabarovsk'];
	if (regionsAvailable.includes(arrayOfDirs[2])) { //если вторая директория входит в число регионов
		arrayOfDirs[1] = region; //подменяем дир региона
		var urlnew = "\/"+arrayOfDirs.join('/')+location.search; //формируем новую ссылку
		urlnew=urlnew.replace(/\/+/gi, '\/');
		//urlnew="https://www.dvec.ru"+urlnew;

		let xhr = new XMLHttpRequest();
		xhr.open('GET', 'https://www.dvec.ru'+urlnew);
		xhr.send();
		xhr.onload = function() {
			if (xhr.status >= 400) {
				window.location.href = "https://www.dvec.ru/magazin/"+region+"/" 
			} else {
				window.location.href = urlnew;
			};
		};
	} else {
		window.location.href = "https://www.dvec.ru/magazin/"+region+"/";
	};
}

function RegionChange(region)
{
	Cookies.set('dvec_region2', region, { expires: 3650 });
	//console.log( 'выбран регион: '+region );
	var arrayOfDirs = location.pathname.split('/');
	var regionsAvailable = ['amursbyt', 'nerungri', 'yakutiya', 'eaosbyt', 'khabsbyt', 'dalsbyt', 'sakhalin', 'kamchatka'];
	if (regionsAvailable.includes(arrayOfDirs[1])) { //если первая директория входит в число регионов
		arrayOfDirs[1] = region; //подменяем дир региона
		var urlnew = "\/"+arrayOfDirs.join('/')+location.search; //формируем новую ссылку
		urlnew=urlnew.replace(/\/+/gi, '\/');
		//urlnew="https://www.dvec.ru"+urlnew;

		let xhr = new XMLHttpRequest();
		xhr.open('GET', 'https://www.dvec.ru'+urlnew);
		xhr.send();
		xhr.onload = function() {
			if (xhr.status >= 400) {
				window.location.href = "https://www.dvec.ru/"+region+"/" 
			} else {
				window.location.href = urlnew;
			};
		};
	} else {
		window.location.href = "https://www.dvec.ru/"+region+"/";
	};
}

// Смена региона в сервисе Заявка на эл.квитанции ****************
function RegionChangeElKvit()
{
  e = document.getElementById('form_dropdown_filial');
  if (e.selectedIndex == 0) {
    ToRegion = "amursbyt";
  }
  if (e.selectedIndex == 1) {
    ToRegion = "nerungri";
  }
  if (e.selectedIndex == 2) {
    ToRegion = "yakutiya";
  }
  if (e.selectedIndex == 3) {
    ToRegion = "eaosbyt";
  }
  if (e.selectedIndex == 4) {
    ToRegion = "khabsbyt";
  }
  if (e.selectedIndex == 5) {
    ToRegion = "dalsbyt";
  }
  if (e.selectedIndex == 6) {
    ToRegion = "sakhalin";
  }
  if (e.selectedIndex == 7) {
    ToRegion = "kamchatka";
  }
  Cookies.set('dvec_region2', ToRegion, { expires: 3650 });
  setTimeout(function(){window.location.href = "https://www.dvec.ru/"+ToRegion+"/private_clients/receipts/podpiska.php";},100);
  return false;
}

// Смена региона в подписке повторных квит выиграй 1000 ****************
/* function RegionChangeElKvitPovtor()
{
  e = document.getElementById('form_dropdown_filial');
  if (e.selectedIndex == 0) {
    ToRegion = "amursbyt";
  }
  if (e.selectedIndex == 1) {
    ToRegion = "eaosbyt";
  }
  if (e.selectedIndex == 2) {
    ToRegion = "khabsbyt";
  }
  if (e.selectedIndex == 3) {
    ToRegion = "dalsbyt";
  }
  Cookies.set('dvec_region2', ToRegion, { expires: 3650 });
  setTimeout(function(){window.location.href = "https://www.dvec.ru/"+ToRegion+"/private_clients/receipts/1000/forma-dlya-elektronnyh.php";},100);
  return false;
} */

// Смена региона в сервисе Интернет-приемная ****************
function RegionChangePriemnaya()
{
  e = document.getElementById('form_dropdown_filial');
  if (e.selectedIndex == 0) {
    ToRegion = "amursbyt";
  }
  if (e.selectedIndex == 1) {
    ToRegion = "nerungri";
  }
  if (e.selectedIndex == 2) {
    ToRegion = "yakutiya";
  }
  if (e.selectedIndex == 3) {
    ToRegion = "eaosbyt";
  }
  if (e.selectedIndex == 4) {
    ToRegion = "khabsbyt";
  }
  if (e.selectedIndex == 5) {
    ToRegion = "dalsbyt";
  }
  if (e.selectedIndex == 6) {
    ToRegion = "sakhalin";
  }
  if (e.selectedIndex == 7) {
    ToRegion = "kamchatka";
  }
  Cookies.set('dvec_region2', ToRegion, { expires: 3650 });
  setTimeout(function(){window.location.href = "https://www.dvec.ru/"+ToRegion+"/private_clients/priemnaya/";},100);
  return false;
}

// Редирект с внутренностей /private_clients/ на региональный сайт
// Если есть значение куки и она в списке дозволенных, обязательно переходим на региональный сайт
function dvec_cookie_redirect()
{
	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="nerungri" || region=="yakutiya" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="kamchatka") {
		var urlnew = "\/"+region+location.pathname;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		} /*else 
		{
			Cookies.remove('dvec_region2');
		}*/
}

function dvec_cookie_redirect_strictly() // для стартовой страницы, обязательный переход с нее вовнутрь при отсутствии куки
{
	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="nerungri" || region=="yakutiya" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="kamchatka") {
		var urlnew = "\/"+region+location.pathname;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		} else {
		//Cookies.remove('dvec_region2');
		//RegionChange('dalsbyt');
		var urlnew = "https://www.dvec.ru/dalsbyt/";
		}
		window.location.replace(urlnew); //переход без сохранения текущей страницы в истории браузера
}