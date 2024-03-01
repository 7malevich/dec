<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сервис «Личный кабинет»");
?><!-- Редирект на региональный сайт -->
<script type="text/javascript">

	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="nerungri" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="yakutiya" || region=="kamchatka") {
		var urlnew = "\/"+region+"/private_clients/cabinet/"+window.location.search;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		}
</script>

<p>&nbsp;</p>
<p>Выберите регион:</p>

<ul> 
	<li><a href="/amursbyt/private_clients/cabinet/" >Амурская область</a></li>
  <li><a href="/yakutiya/private_clients/cabinet/" >Республика Саха (Якутия)</a></li>
  <li><a href="/nerungri/private_clients/cabinet/" >Нерюнгринский район РС(Я)</a></li>
  <li><a href="/eaosbyt/private_clients/cabinet/" >Еврейская АО</a></li>
  <li><a href="/khabsbyt/private_clients/cabinet/" >Хабаровский край</a></li>
  <li><a href="/dalsbyt/private_clients/cabinet/" >Приморский край</a></li>
  <li><a href="/sakhalin/private_clients/cabinet/" >Сахалинская область</a></li>
  <li><a href="/kamchatka/private_clients/cabinet/" >Камчатский край</a></li>
</ul>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>