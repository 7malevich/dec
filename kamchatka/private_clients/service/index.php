<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Офисы, обслуживание");
?><!-- <div class="alert alert-danger mb-4 alert-link" role="alert">
В связи с проведением ремонтных  работ 22.07.2023 ЕРИЦ филиала ПАО "ДЭК" "Камчатскэнергосбыт" будет закрыт для посещения. Приносим извинения за доставленные неудобства.
</div> -->

<link href="/design2019/css/offices_workload.css?7" type="text/css" rel="stylesheet">

<div class="alert alert-info mb-4" role="alert">
Передать показания, оплатить счета и получать квитанции в электронном виде можно через <a href="../online/">онлайн-сервисы компании</a>. Получить консультацию можно по телефону контактного центра <a href="tel:88002347777">8 (800) 234-77-77</a>. Подать заявление и <b>получить все необходимые документы</b> можно на сайте компании в разделе <a href="../priemnaya/">"Интернет-приемная"</a>.
</div>

<a href="/kamchatka/private_clients/news/news.php?ID=49118" class="alert alert-success mb-4 py-3 d-flex px-3 py-1 justify-content-left align-items-center" role="alert" style="text-decoration:none">
	<img src="/images/design2016/icons/minivan_2.png" width="77" height="57" style="padding-right: 1.25rem;opacity: 0.66">
	<span class=" alert-link" style="margin-top:-2px">В ноябре выездная касса Камчатскэнергосбыта работает в Вилючинске и в четырех поселках Елизовского района</span>
</a>

<div class="alert alert-info mb-5 p-3 d-flex flex-column flex-sm-row align-items-center" role="alert">
	<span class="text-sm-left mb-1 mb-sm-0 mr-sm-1">Как читать графику загруженности офисов:</span>
	<span class="workload-h-1 mb-sm-0 mr-sm-1">Минимальное время ожидания</span>
	<span class="workload-h-2 mb-sm-0 mr-sm-1">Среднее время ожидания</span>
	<span class="workload-h-3 mb-sm-0 mr-sm-1">Максимальное время ожидания</span>
	<span class="workload-h-4 mb-sm-0">Нерабочий день (час)</span>
</div>

<h3 class="btn-primary pl-3 pb-1">Петропавловск-Камчатский:</h3>
<table class="table table-hover"> 
    <tr>
    <th>Адрес, телефон</th>
    <th>Режим работы</th>
    </tr>
    <tr>
      <td><p class="text-left"><strong>ул. Карла Маркса, 5</strong><br>
        Единый расчетно-информационный центр</p>
        <p class="text-left">8 (800) 234-77-77</p>
        <button type="button" class="btn btn-primary text-nowrap" data-toggle="modal" data-target="#ModalZapis" onclick="step1('pet_mrx')">Записаться на приём</button>
		  <!-- <button type="button" class="btn btn-warning" disabled> Запись в офис не работает 16.11.2023 по техническим причинам.</button> -->
      </td>
      <td>понедельник-пятница 9:00-18:00<br>
        суббота 10:00-16:00<br>
  <br>
        Кассы:<br>
        понедельник-пятница 9:00-17:30<br>
      суббота 10:00-15:30
    <div>
        <span class="workload-d-3">пн</span> 
        <span class="workload-d-2">вт</span>
        <span class="workload-d-3">ср</span>
        <span class="workload-d-3">чт</span>
        <span class="workload-d-2">пт</span>
        <span class="workload-d-2">сб</span>
        <span class="workload-d-4">вс</span>
    </div>
    <div>
        <span class="workload-h-1">9</span>
        <span class="workload-h-2">10</span>
        <span class="workload-h-2">11</span>
        <span class="workload-h-3">12</span>
        <span class="workload-h-3">13</span>
        <span class="workload-h-3">14</span>
        <span class="workload-h-3">15</span>
        <span class="workload-h-2">16</span>
        <span class="workload-h-1">17</span>
        <span class="workload-h-1">18</span>
        <span class="workload-h-4">19</span>
    </div>
      </td>
    </tr>
    <tr>
      <td><p class="text-left"><strong>ул. Ленинградская, 104 (ТЦ «Посейдон»)</strong><br>
      Касса</p>
      <p class="text-left">8 (800) 234-77-77</p></td>
      <td>Понедельник, вторник, четверг, пятница  10:00-18:30, обед 14.00-15.00<br>Среда 10:00-14:00 </td>
    </tr>
    <tr>
      <td><p class="text-left"><strong>ул. Океанская, д.52</strong><br>
      Абонентский участок</p>
      <p class="text-left">8 (800) 234-77-77</p></td>
      <td>Понедельник, среда, пятница 09:00-18:00 
        <br>
        перерыв 13:00-14:00
        <br>
      Вторник 09:00-13:00 <br>
Четверг 10:00-19:00, перерыв 14:00-15:00 <br>
      <br>
Касса:<br>Понедельник, среда, пятница 09:00-17:30<br>
перерыв 13:00-14:00 
<br>
Вторник 09:00-12:30<br>
Четверг 10:00-18:30, перерыв 14:00-15:00</td>
    </tr>
</table>

<h3 class="btn-primary pl-3 pb-1">пос. Озерновский:</h3>
<table class="table table-hover mb-4"> 
    <tr>
    <th>Адрес, телефон</th>
    <th>Режим работы кассы</th>
    </tr>
	<tr>
		<td>
		  <strong>ул. Октябрьская, 36</strong>
			<br>Касса
	  </td>
		<td>
			Вторник, четверг 8:00-14:00
			<br>Обеденный перерыв 12:00-13:00
	  </td>
	</tr>
  </table>

<h3 class="btn-primary pl-3 pb-1">Елизовский район:</h3>
<table class="table table-hover"> 
    <tr>
    <th>Адрес, телефон</th>
    <th>Режим работы</th>
    </tr>
	<tr>
		<td><p class="text-left"><strong>г. Елизово, ул. Вилюйская, д. 8</strong><br>
		  Абонентский участок<br>
		  Касса </p>
		  <p>(41531) 
6-11-02</p></td>
		<td>Понедельник-четверг  08:30-17:30<br>
Пятница 08.30-17:00</td>
	</tr>
</table>


<h3 class="btn-primary pl-3 pb-1">Мильковский район:</h3>
<table class="table table-hover"> 
    <tr>
    <th>Адрес, телефон</th>
    <th>Режим работы</th>
    </tr>
  <tr>
    <td> <p class="text-left"><strong>с. Мильково, ул. Советская, 64а</strong><br>
      Абонентский участок</p>
      <p> (41533) 
        2-10-20, 
      2-27-57</p></td>
    <td>Понедельник-четверг 08:30-17:30<br>
      перерыв 13:00-14:00<br>
      пятница  8:30-12:30 <br>
      <br>
      Касса:<br>
      понедельник-четверг 09:00-16:30<br>
      перерыв 13:00-14:00 <br>
      Пятница 09:00-12:00</td>
  </tr>
</table>


<h3 class="btn-primary pl-3 pb-1">Усть-Большерецкий район:</h3>
<table class="table table-hover"> 
    <tr>
    <th>Адрес, телефон</th>
    <th>Режим работы</th>
    </tr>
  <tr>
    <td><p class="text-left"><strong>с.Усть-Большерецк, ул. Бочкарева, 10</strong><br>
      Абонентский участок</p>
      <p>(41532) 
2-10-47</p></td>
    <td>Понедельник-пятница 08:30-17:30<br>
перерыв 12:30-13:30<br>
<br>
Касса:<br>
Понедельник-четверг 08:30-17:30<br>
перерыв 12:30-13:30<br>
перерыв 15:00-15:30 <br>
Пятница 08.30-12:00</td>
  </tr>
</table>


<h3 class="btn-primary pl-3 pb-1">г. Вилючинск:</h3>
<table class="table table-hover"> 
    <tr>
    <th>Адрес, телефон</th>
    <th>Режим работы</th>
    </tr>
  <tr>
    <td><p class="text-left"><strong>г. Вилючинск, ул.&nbsp;Победы, 9 </strong><br>
      Абонентский участок</p>
      <p>(41535) 
3-10-15</p></td>
    <td>Понедельник-четверг 09:00-18:00<br>
перерыв 13:00-14:00<br>
Пятница 09:00-13:00<br>
<br>
Оплата коммунальных платежей через терминалы  эквайринга (безналичный расчет)</td>
  </tr>
</table>


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

<script src="/srv/office_zapis/script.js?2"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>