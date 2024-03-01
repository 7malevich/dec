<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if (strlen($backurl)>0) LocalRedirect($backurl);
$APPLICATION->SetTitle("Авторизация");
?>
<p><font class="notetext">Вы зарегистрированы и успешно авторизовались.</font></p>
<TABLE class=text style="BORDER-RIGHT: #fc9c05 1px solid; BORDER-TOP: #fc9c05 1px solid; BORDER-LEFT: #fc9c05 1px solid; BORDER-BOTTOM: #fc9c05 1px solid" cellSpacing=0 cellPadding=10 width="80%">
<TR>
<TD bgColor=#fffbf4>Используйте административную панель в верхней части экрана для быстрого доступа к функциям управления структурой и информационным наполнением сайта. Набор кнопок верхней панели отличается для различных разделов сайта. Так отдельные наборы действий предусмотрены для управления статическим содержимым страниц, динамическими публикациями (новостями, каталогом, фотогалереей)  и т.п.</TD></TR></TABLE>
<p class="text"><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>