<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Электронная квитанция");
?><!-- Редирект на региональный сайт -->
<script type="text/javascript">

	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="nerungri" || region=="yakutiya" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="kamchatka") {
		var urlnew = "\/"+region+"/private_clients/receipts/"+location.search;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
	} else {
		window.location.href = "/dalsbyt/private_clients/receipts/"+location.search;
	}
</script>

<p>&nbsp;</p>
<p>Выберите регион:</p>
<ul> 
	<li><a href="/amursbyt/private_clients/receipts/" >Амурская область</a></li>
  <li><a href="/nerungri/private_clients/receipts/" >Нерюнгринский район РС(Я)</a></li>
  <li><a href="/yakutiya/private_clients/receipts/" >Республика Саха (Якутия)</a></li>
  <li><a href="/eaosbyt/private_clients/receipts/" >Еврейская АО</a></li>
  <li><a href="/khabsbyt/private_clients/receipts/" >Хабаровский край</a></li>
  <li><a href="/dalsbyt/private_clients/receipts/" >Приморский край</a></li>
  <li><a href="/sakhalin/private_clients/receipts/" >Сахалинская область</a></li>
  <li><a href="/kamchatka/private_clients/receipts/" >Камчатский край</a></li>
</ul>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>