<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопросы и ответы");
?><!-- Редирект на региональный сайт -->
<script type="text/javascript">
	dvec_cookie_redirect();
</script>

<?
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
?>

<p>&nbsp;</p>
<p>Выберите регион:</p>
 
<ul> 
  <li><a href="<?='/amursbyt'.$dir?>" >Амурская область</a></li>
  <ul>  
    <li><a href="<?='/amur-blag'.$dir?>" >Благовещенск</a></li>
  </ul>
  <li><a href="<?='/eaosbyt'.$dir?>" >Еврейская АО</a></li>
  <li><a href="<?='/khabsbyt'.$dir?>" >Хабаровский край</a></li>
  <li><a href="<?='/dalsbyt'.$dir?>" >Приморский край</a></li>
</ul>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>