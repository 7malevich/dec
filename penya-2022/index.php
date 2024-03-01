<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПАО «ДЭК» спишет пеню в новогоднюю ночь!");
?><!-- Редирект на региональный сайт -->
<script type="text/javascript">
function gotoRegion(param) { //перейти в свой регион по куки или по кнопке
var regionsAvailable = ['amursbyt', 'nerungri', 'yakutiya', 'eaosbyt', 'khabsbyt', 'dalsbyt', 'sakhalin', 'kamchatka'];
var create_links;
if (typeof param == "undefined") {
	var region = Cookies.get('dvec_region2');
	if (typeof region == "undefined") {
		return;
	} else {
		param = region;
		create_links = true;
	}
} else {
	create_links = true;
}

if ((create_links) && (regionsAvailable.includes(param))) {
	Cookies.set('dvec_region2', param, { expires: 3650 });
	var myAddress;
	if (param == 'amursbyt') { myAddress = '/private_clients/news/news.php?ID=37247'; }
	if (param == 'yakutiya') { myAddress = '/private_clients/news/news.php?ID=38184'; }
	if (param == 'nerungri') { myAddress = '/private_clients/news/news.php?ID=37294'; }
	if (param == 'eaosbyt') { myAddress = '/private_clients/news/news.php?ID=36579'; }
	if (param == 'khabsbyt') { myAddress = '/private_clients/news/news.php?ID=36580'; }
	if (param == 'dalsbyt') { myAddress = '/private_clients/news/news.php?ID=36481'; }
	if (param == 'sakhalin') { myAddress = '/private_clients/news/news.php?ID=36556'; }
	if (param == 'kamchatka') { myAddress = '/private_clients/news/news.php?ID=29630'; }
	var urlnew = '/' + param + myAddress; //формируем новую ссылку
	window.location.href = urlnew;
	//console.log(urlnew);
}
}
gotoRegion();
</script>

<p>Выберите Ваш регион:</p>

<button class="btn btn-lg btn-outline-primary mb-2" onclick="gotoRegion('amursbyt');">
  Амурская область
</button>
<br>
<button class="btn btn-lg btn-outline-primary mb-2" onclick="gotoRegion('yakutiya');">
  Республика Саха (Якутия)
</button>
<br>
<button class="btn btn-lg btn-outline-primary mb-2" onclick="gotoRegion('nerungri');">
  Нерюнгринский район РС(Я)
</button>
<br>
<button class="btn btn-lg btn-outline-primary mb-2" onclick="gotoRegion('eaosbyt');">
  Еврейская АО
</button>
<br>
<button class="btn btn-lg btn-outline-primary mb-2" onclick="gotoRegion('khabsbyt');">
  Хабаровский край
</button>
<br>
<button class="btn btn-lg btn-outline-primary mb-2" onclick="gotoRegion('dalsbyt');">
  Приморский край
</button>
<br>
<button class="btn btn-lg btn-outline-primary mb-2" onclick="gotoRegion('sakhalin');">
  Сахалинская область
</button>
<br>
<button class="btn btn-lg btn-outline-primary mb-2" onclick="gotoRegion('kamchatka');">
  Камчатский край
</button><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>