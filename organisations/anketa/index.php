<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Анкета: использование сервиса \"Личный&nbsp;кабинет\" корпоративных клиентов");
?><div class="alert alert-success pt-2 pb-3 mb-4">
	<p class="mb-0">Анкетирование завершено.</p>
</div>
<div style="margin-left:2rem; margin-top:2rem">
	<? /*$APPLICATION->IncludeComponent("bitrix:voting.form", "main_page1", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"VOTE_ID" => "71",	// Идентификатор опроса
		"VOTE_RESULT_TEMPLATE" => "anketa_ok.php?VOTE_ID=#VOTE_ID#",	// Страница для вывода диаграмм результатов опроса
	),
	false
); */ ?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>