<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест сервиса Заказать звонок");
?><div class="alert alert-info">
Тестовая страница с подключенными скриптами сервиса "Заказать звонок"
</div>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<!-- Проверка телефона по маске (formPhoneMask: true / false)  -->
<script src="js/jquery.mask.min.js"></script>

<!-- Подключение "Звонок с сайта" -->
<script src="js/infinity.click.to.call.js"></script>
<!-- Подключение основного скрипта -->
<script src="js/script.js?"></script>



<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript">
$(function(){
	$('body').itOnlineCons({
		modPath: ''
	});
})
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>