<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отделения и участки");
?><!-- <a href="/yakutiya/private_clients/news/news.php?ID=40216" class="alert alert-warning text-decoration-none mb-3 d-flex p-3 justify-content-left align-items-center" role="alert">
	<span style="padding-left:0.1rem; padding-right:1.2rem; opacity:0.4; font-size:2.5rem; line-height:2rem">⚠</span>
	<span class="alert-link">О режиме работы офисов Якутскэнергосбыта в майские праздники</span>
</a> -->

<div class="alert alert-info mb-4" role="alert">
Передать показания, оплатить счета и получать квитанции в электронном виде можно через <a href="../online/">онлайн-сервисы компании</a>. Получить консультацию можно по телефону контактного центра <a href="tel:88002347777">8 (800) 234-77-77</a>. Подать заявление и <b>получить все необходимые документы</b> можно на сайте компании в разделе <a href="../priemnaya/">"Интернет-приемная"</a>.
</div>

<table class="table table-sm table-hover"> 
  <tr>
    <th>Адрес пункта обслуживания</th>
    <th>Режим работы</th>
    <th>Телефон</th>
  </tr>
  <tr>
    <td><strong>г. Нерюнгри<br>
    ул. Карла Маркса, 25/2 (ЕРИЦ ДЭК)</strong><br>
		<button type="button" class="btn btn-primary text-nowrap my-2"  data-toggle="modal" data-target="#ModalZapis" onclick="step1('neru_eric')">
			Записаться на приём
		</button>
	</td>
    <td class="text-nowrap">
      пн-пт: 08:15-19:00<br />
      сб: 08:15-16:00<br />
      вс: выходной</td>
    <td>8 (800) 234-77-77</td>
  </tr>
  <tr>
    <td><strong>п. Чульман<br>
    ул. Советская, д. 44 А</strong></td>
    <td>
 вт-пт: 09:00-16:30<br />
перерыв:    13:00-14:00<br />
 сб:    09:00-16:00<br />
перерыв:    13:00-14:00</td>
    <td>7-60-30<br />
      7-07-39<br />
      7-12-36</td>
  </tr>
  <tr>
    <td><strong>п. Беркакит<br>
      ул. Мусы Джалиля, д. 7А (здание ТОЦ)<br>
    </strong></td>
    <td>
вт-пт: 10:00-17:30<br />
перерыв:    13:00-14:00<br />
сб:    09:00-15:00</td>
    <td>7-35-29</td>
  </tr>
  <tr>
    <td><strong>п. Серебряный Бор<br>
    дом 62, помещение 68 (здание администрации)</strong></td>
    <td>
вт-пт: 09:00-16:45<br />
перерыв:    13:00-14:00<br />
 сб:    09:00-15:30<br />
перерыв:    13:00-14:00</td>
    <td>7-85-17</td>
  </tr>
</table>

<p style="margin-top:3rem">Консультацию по любым вопросам, касающимся услуг, отраженных в квитанциях, клиенты компании могут получить не только в офисах, но также:</p>
<ul>
  <li>по телефонам, указанным на этой странице;</li>
  <li>в Едином контактном центре: <strong>8 (800) 234-77-77</strong>;</li>
  <li><a href="../priemnaya/">В Интернет-приёмной ПАО «ДЭК»</a>.</li>
</ul>

<!-- Modal Запись в офис -->
<div class="modal fade" id="ModalZapis" tabindex="-1" role="dialog" aria-labelledby="ModalZapisLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header pb-0 border-bottom-0">
        <div class="mt-1 ml-1">
          <p class="modal-title my-0" id="ModalZapisLabel">Запись на очный прием в Едином расчетно-информационном центре ДЭК по адресу:</p>
          <h1 id="myOffice" class="mt-1 mb-2">
          </h1>
          <span>Внимание! Предварительная запись осуществляется по принципу «одна запись - один лицевой счет»! При наличии вопросов по нескольким лицевым счетам необходимо записаться несколько раз.</span>
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" style="padding:3px 8px 1px 8px; margin:0 0 15px 25px">
          <span aria-hidden="true" style="font-size:1.5rem; line-height:1">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="card mt-6">
  <div class="card-body pb-2 pt-3 px-3">
	<form id="form1" action="javascript:void(0);">
		<div class="form-row">
			<div class="form-group col">
				<label for="clientFIO">Ваши фамилия, имя (отчество):<span class="text-danger">*</span></label>
				<input type="text" name="name" class="form-control" id="clientFIO" placeholder="Например, Иван Петров" required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="clientPhoneNumber">Контактный телефон:<span class="text-danger">*</span></label>
				<input type="tel" name="tel" class="form-control" id="clientPhoneNumber" placeholder="Номер телефона" required>
			</div>
			<div class="form-group col-md-6">
				<label for="clientEmail">Адрес эл.почты:</label>
				<input type="email" name="email" class="form-control" id="clientEmail" placeholder="adres@mail.ru">
				<div id="clientEmailInvalidFeedback" class="invalid-feedback w-100 hidden">Введите адрес эл.почты в верном формате или&nbsp;очистите это поле</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col" id="group1"></div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6" id="group2"></div>
			<div class="form-group col-md-6" id="group3"></div>
		</div>
		<div class="form-row">
			<div class="form-group col mb-3" id="group4"></div>
		</div>
	</form>
    <div id="msg" class="alert alert-success" role="alert" style="display:none; padding:2rem 1.75rem; clear:both; align-items:center">
		<img src="/srv/office_zapis/ticket.svg" style="width:4rem; height:auto; margin-right:1rem"> 
		<div>
			Вы записаны на приём! &nbsp;<u>Ждём Вас <span id="msg_datetime">xx.xx.xxxx к xx:xx</span></u>.
			<h2 class="mt-0 mb-0" id="msg_pincode">XXXX</h2>
		</div>
    </div>
    <div id="msg-noslots" class="alert alert-danger" role="alert" style="display:none; padding:2rem 1.75rem; clear:both; align-items:center">
		<img src="/srv/office_zapis/plug_no.svg" style="width:3rem; height:auto; margin-right:1rem">
		<div>
			Уважаемые клиенты, в настоящее время нет свободных талонов для предварительной записи. Приносим извинения.
		</div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>

<script src="/srv/office_zapis/script.js?2"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>