<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акционерам и инвесторам");
?><p>
	 Уважаемые акционеры!
</p>
<p>
	 По всем вопросам Вас могут проконсультировать сотрудники Отдела корпоративных событий и взаимодействия с акционерами Управления корпоративных событий, взаимодействия с акционерами и управления активами ПАО «ДЭК»:
</p>
<p>
	 Место нахождения: 690091, г.&nbsp;Владивосток, ул. Тигровая, 19, каб.1/1<br>
	 Телефоны: (423) 241-12-51, 265-73-66, 265-74-43 <br>
	 Адреса электронной почты: <a href="mailto:keg@dvec.ru">keg@dvec.ru</a>; <a href="mailto:fond3@dvec.ru">fond3@dvec.ru</a>
</p>
<div style="clear:both; height:25px; width:20px">
</div>
<h3>Содержание раздела:</h3>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"tree-open2",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>