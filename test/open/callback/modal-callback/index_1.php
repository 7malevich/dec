<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Modal Callback");
?><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCallback">
  Заказать обратный звонок
</button>

<!-- Modal -->
<div class="modal fade" id="ModalCallback" tabindex="-1" role="dialog" aria-labelledby="ModalCallbackTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" style="margin-bottom:0" id="ModalCallbackTitle">Закажите обратный звонок, и мы перезвоним в&nbsp;удобное Вам время:</h4>
		</div>
      <div class="modal-body">
<form>
          <div class="form-group">
            <label for="cb-phone" class="col-form-label">Ваш телефон:</label>
            <input type="text" class="form-control" id="cb-phone" placeholder="+7 (914) 123-45-67">
          </div>
          <div class="form-group">
            <label for="cb-fio" class="col-form-label">ФИО:</label>
            <input type="text" class="form-control" id="cb-fio">
          </div>
          <div class="form-group">
            <label for="cb-vremya" class="col-form-label">Удобное время для звонка:</label>
			 <br> С 08:00 до 19:00
          </div>
<div class="form-group">
            <label for="cb-tema" class="col-form-label">Тема обращения:</label>
      <select id="cb-tema" class="form-control">
        <option selected>Выберите...</option>
        <option>Адреса и телефоны отделений</option>
        <option>Внесение изменений в лицевой счет</option>
      </select>
	</div>
<div class="form-group">
            <label for="cb-email" class="col-form-label">Ваш адрес электронной почты:</label>
            <input type="text" class="form-control" id="cb-email" placeholder="adres@mail.ru">
<small class="form-text text-muted">ПАО «ДЭК» проинформирует Вас посредством электронной почты о времени совершенного звонка, 
в случае если до Вас дозвониться не удалось. Поле не является обязательным для заполнения. </small>
          </div>
        </form>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
		  <a href="#" class="btn btn-primary" style="color:white">Отправить</a>
      </div>
    </div>
  </div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>