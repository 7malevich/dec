<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги онлайн");
?><!-- Редирект на региональный сайт -->
<script type="text/javascript">

	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="nerungri" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="yakutiya" || region=="kamchatka") {
		var urlnew = "\/"+region+"/private_clients/online/"+location.search;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		}
</script>

<p>&nbsp;</p>
<p>Выберите регион:</p>

<ul> 
	<li><a href="/amursbyt/private_clients/online/" >Амурская область</a></li>
  <li><a href="/yakutiya/private_clients/online/" >Республика Саха (Якутия)</a></li>
  <li><a href="/nerungri/private_clients/online/" >Нерюнгринский район РС(Я)</a></li>
  <li><a href="/eaosbyt/private_clients/online/" >Еврейская АО</a></li>
  <li><a href="/khabsbyt/private_clients/online/" >Хабаровский край</a></li>
  <li><a href="/dalsbyt/private_clients/online/" >Приморский край</a></li>
  <li><a href="/sakhalin/private_clients/online/" >Сахалинская область</a></li>
  <li><a href="/kamchatka/private_clients/online/" >Камчатский край</a></li>
</ul>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>