<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Выбор региона: Оплата");
?><!-- Редирект на региональный сайт -->
<script type="text/javascript">
function gotoRegion(param) { //перейти в свой регион по куки или по кнопке
	var myAddress = '/private_clients/payment/';
	var region = Cookies.get('dvec_region2');
	var regionsAvailable = ['amursbyt', 'nerungri', 'yakutiya', 'eaosbyt', 'khabsbyt', 'dalsbyt', 'sakhalin', 'kamchatka'];
	if (typeof param !== "undefined") {
		region = param;
		Cookies.set('dvec_region2', region, { expires: 3650 });
		}
	if ((typeof region !== "undefined") && (regionsAvailable.includes(region))) {
		var urlnew = '/' + region + myAddress + location.search; //формируем новую ссылку
		window.location.href = urlnew;
	} else { console.log('некорректное значение региона: ' + region) }
}
gotoRegion();
</script>

<p>Выберите регион:</p>

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