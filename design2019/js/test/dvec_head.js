// Смена региона в сервисе Заявка на эл.квитанции ****************
function RegionChangeElKvit()
{
  e = document.getElementById('form_dropdown_filial');
  if (e.selectedIndex == 0) {
    ToRegion = "amursbyt";
  }
  if (e.selectedIndex == 1) {
    ToRegion = "yakutiya";
  }
  if (e.selectedIndex == 2) {
    ToRegion = "eaosbyt";
  }
  if (e.selectedIndex == 3) {
    ToRegion = "khabsbyt";
  }
  if (e.selectedIndex == 4) {
    ToRegion = "dalsbyt";
  }
  if (e.selectedIndex == 5) {
    ToRegion = "sakhalin";
  }
  if (e.selectedIndex == 6) {
    ToRegion = "kamchatka";
  }
  Cookies.set('dvec_region2', ToRegion, { expires: 3650 });
  setTimeout(function(){window.location.href = "https://www.dvec.ru/"+ToRegion+"/private_clients/receipts/";},100);
  return false;
}

// Смена региона в сервисе Интернет-приемная ****************
function RegionChangePriemnaya()
{
  e = document.getElementById('form_dropdown_filial');
  if (e.selectedIndex == 0) {
    ToRegion = "amursbyt";
  }
  if (e.selectedIndex == 1) {
    ToRegion = "yakutiya";
  }
  if (e.selectedIndex == 2) {
    ToRegion = "eaosbyt";
  }
  if (e.selectedIndex == 3) {
    ToRegion = "khabsbyt";
  }
  if (e.selectedIndex == 4) {
    ToRegion = "dalsbyt";
  }
  if (e.selectedIndex == 5) {
    ToRegion = "sakhalin";
  }
  if (e.selectedIndex == 6) {
    ToRegion = "kamchatka";
  }
  Cookies.set('dvec_region2', ToRegion, { expires: 3650 });
  setTimeout(function(){window.location.href = "https://www.dvec.ru/"+ToRegion+"/private_clients/priemnaya/";},100);
  return false;
}

// Редирект на региональный сайт по событию (нажатие кнопки etc) ************************************
function RegionChange(region)
{
	Cookies.set('dvec_region2', region, { expires: 1000 });
	console.log( 'выбран регион '+region );
	window.location.href = "https://www.dvec.ru/"+region+"/";
	return false;
}

// Редирект с внутренностей /private_clients/ на региональный сайт
// Если есть значение куки и она в списке дозволенных, обязательно переходим на региональный сайт
function dvec_cookie_redirect()
{
	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="yakutiya" || region=="kamchatka") {
		var urlnew = "\/"+region+location.pathname;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		} else 
		{
			Cookies.remove('dvec_region2');
		}
}

function dvec_cookie_redirect_strictly() // для стартовой страницы, обязательный переход с нее вовнутрь при отсутствии куки
{
	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="yakutiya" || region=="kamchatka") {
		var urlnew = "\/"+region+location.pathname;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		} else 
		{
			Cookies.remove('dvec_region2');
			RegionChange('dalsbyt');
		}
}