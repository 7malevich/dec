<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Линия доверия Группы РусГидро");
?><p>
	<a href="http://www.rushydro.ru/form/" target="_blank">«Линия доверия»</a> организована с целью приема обращений заявителей, их рассмотрения, подготовки ответов и, при необходимости, принятия соответствующих мер по <a href="../counter_corruption/">противодействию мошенничеству и коррупции</a>, пресечению противоправных действий и совершенствованию деятельности Общества, включая, но не ограничиваясь следующими вопросами:
</p>
<ul>
	<li>получение/дача взятки работником Общества;</li>
	<li>злоупотребление работником Общества полномочиями;</li>
	<li>незаконное использование работником Общества должностного положения вопреки законным интересам Общества в целях получения выгоды;</li>
	<li>склонение работника Общества к совершению коррупционных правонарушений;</li>
	<li>возникновение/возможное возникновение у работников Общества конфликта интересов;</li>
	<li>несовершенство организации внутреннего контроля и управления рисками Общества;</li>
	<li>вопросы, связанные с понесением Обществом ущерба/упущенной выгоды.</li>
</ul>
<p><a href="pravila.pdf" target="_blank">Правила работы линии доверия</a></p>
<p><a href="http://www.rushydro.ru/form/" target="_blank">Подробнее - на сайте ПАО «РусГидро»</a></p>

<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "ok.php",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
		"WEB_FORM_ID" => "38"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>