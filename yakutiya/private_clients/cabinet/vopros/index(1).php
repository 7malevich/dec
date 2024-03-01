<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет: Задать вопрос");
?>  <div class="card bg-light">
    <div class="card-body d-flex flex-column justify-content-around">
		<p class="card-text text-left mb-2 text-danger">
Уважаемые клиенты! В связи с переводом Личного кабинета на новое программное обеспечение возможно некорректное отражение данных.
		</p>
		<p class="card-text text-left mb-2">
Просьба отнестись с пониманием к возникшим техническим сложностям. 
		</p>
		<p class="card-text text-left mb-2">
			По вопросам некорректного отражения данных Вы можете написать нам через специальную форму на сайте:
		</p>
    </div>
  </div>

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
		"WEB_FORM_ID" => "67"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>