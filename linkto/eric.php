<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-приёмная");
?>

<!-- Редирект на региональный сайт -->
<script type="text/javascript">

	var region = Cookies.get('dvec_region2');
	if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="yakutiya" || region=="kamchatka") {
		var urlnew = "\/"+region+"/private_clients/eric/"+location.search;
		urlnew=urlnew.replace(/\/+/gi, '\/');
		window.location.href = urlnew;
		}
</script>

<p>Выберите регион:</p>

<ul> 
	<li><a href="/amursbyt/private_clients/eric/" >Амурская область</a></li>
	<li><a href="/yakutiya/private_clients/eric/" >Нерюнгринский район РС(Я)</a></li>
	<li><a href="/eaosbyt/private_clients/eric/" >Еврейская АО</a></li>
	<li><a href="/khabsbyt/private_clients/eric/" >Хабаровский край</a></li>
	<li><a href="/dalsbyt/private_clients/eric/" >Приморский край</a></li>
	<li><a href="/sakhalin/private_clients/eric/" >Сахалинская область</a></li>
	<li><a href="/kamchatka/private_clients/eric/" >Камчатский край</a></li>

</ul><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>