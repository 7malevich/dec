<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оплата");
?><!-- Редирект на региональный сайт -->
<script type="text/javascript">
	//dvec_cookie_redirect();
</script>

<?
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
?>

<p>&nbsp;</p>
<p>Выберите регион:</p>

<ul> 
  <li><a href="<?='/amursbyt'.$dir?>" >Амурская область</a></li>
  <li><a href="<?='/yakutiya'.$dir?>" >Нерюнгринский район РС(Я)</a></li>
  <li><a href="<?='/eaosbyt'.$dir?>" >Еврейская АО</a></li>
  <li><a href="<?='/khabsbyt'.$dir?>" >Хабаровский край</a></li>
  <li><a href="<?='/dalsbyt'.$dir?>" >Приморский край</a></li>
  <li><a href="<?='/sakhalin'.$dir?>" >Сахалинская область</a></li>
  <li><a href="<?='/kamchatka'.$dir?>" >Камчатский край</a></li>
</ul><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>