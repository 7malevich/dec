<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Уведомления о введении ограничения режима потребления электрической энергии");
?><?php 
if(!empty($_SERVER['QUERY_STRING'])) {
  header('Location: https://www.dvec.ru/organisations/ogranicheniya/?'.$_SERVER['QUERY_STRING']); 
}
else {
  header('Location: https://www.dvec.ru/organisations/ogranicheniya/'); 
}
?>

<div class="alert alert-danger">
В случае невозможности перехода по ссылке для просмотра уведомления об ограничении, Вам необходимо <a href="/organisations/service/">связаться с сотрудником ПАО «ДЭК»</a> по работе с дебиторской задолженностью.
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>