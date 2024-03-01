<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оплата электроэнергии с помощью банковских карт");
?><?
$region = htmlspecialchars($_GET["region"]);

if ($region == '/amursbyt/')  
  header('Location: https://www.dvec.ru/amursbyt/private_clients/payment/');
if ($region == '/yakutiya/')  
  header('Location: https://www.dvec.ru/yakutiya/private_clients/payment/');
if ($region == '/eaosbyt/')  
  header('Location: https://www.dvec.ru/eaosbyt/private_clients/payment/');
if ($region == '/khabsbyt/')  
  header('Location: https://www.dvec.ru/khabsbyt/private_clients/payment/');
if ($region == '/dalsbyt/')  
  header('Location: https://www.dvec.ru/dalsbyt/private_clients/payment/');
if ($region == '/sakhalin/')  
  header('Location: https://www.dvec.ru/sakhalin/private_clients/payment/');
if ($region == '/kamchatka/')  
  header('Location: https://www.dvec.ru/kamchatka/private_clients/payment/');
?>

<!-- Редирект на региональный сайт -->
<script type="text/javascript">

	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="nerungri" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt") {
		var urlnew = "\/"+region+"/private_clients/payment/"+location.search;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		}
	if (region=="sakhalin" || region=="yakutiya" || region=="kamchatka") {
		var urlnew = "\/"+region+"/private_clients/payment/"+location.search;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		}
</script>

<p>Выберите регион:</p>
<ul> 
  <li><a href="/amursbyt/private_clients/payment/" >Амурская область</a></li>
  <li><a href="/yakutiya/private_clients/payment/" >Республика Саха (Якутия)</a></li>
  <li><a href="/nerungri/private_clients/payment/" >Нерюнгринский район РС(Я)</a></li>
  <li><a href="/eaosbyt/private_clients/payment/" >Еврейская АО</a></li>
  <li><a href="/khabsbyt/private_clients/payment/" >Хабаровский край</a></li>
  <li><a href="/dalsbyt/private_clients/payment/" >Приморский край</a></li>
  <li><a href="/sakhalin/private_clients/payment/" >Сахалинская область</a></li>
  <li><a href="/kamchatka/private_clients/payment/" >Камчатский край</a></li>
</ul>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>