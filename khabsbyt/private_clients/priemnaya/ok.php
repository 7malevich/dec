<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обращение отправлено");
?><div style="padding:25px; margin:50px 0 50px 0; background-color:#deebf6; border:1px solid #96bfe2; position:relative">
  <div style="position:absolute; top:-25px; left:10px; width:50px; height:50px; background-color:#468fcc; box-shadow:0 2px 3px -1px rgba(0,0,0,0.1)">
  <img src="/images/design2016/article/note_lamp2.png" style="width:33px; height:33px; margin:8px" /></div>
	<p>Ваше обращение зарегистрировано на официальном сайте ПАО «ДЭК» (филиал «Хабаровскэнергосбыт») 
	под номером <mark><?php echo htmlspecialchars($_GET["RESULT_ID"]);?></mark> от <?php echo date('d.m.Y');?>.</p>
	<p>Ответ на обращение будет предоставлен в Ваш адрес в течение 30 дней с момента регистрации.</p>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>