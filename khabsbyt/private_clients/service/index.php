<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Офисы, обслуживание");
?><div class="alert alert-info mb-4" role="alert">
Передать показания, оплатить счета и получать квитанции в электронном виде можно через <a href="../online/">онлайн-сервисы компании</a>. Получить консультацию можно по телефону контактного центра <a href="tel:88002347777">8 (800) 234-77-77</a>. Подать заявление и <b>получить все необходимые документы</b> можно на сайте компании в разделе <a href="../priemnaya/">"Интернет-приемная"</a>.
</div>

<h2 class="px-1 py-2 mt-4 mb-1">Хабаровский расчетно-контрольный центр</h2>
<table class="table table-sm table-hover"> 
  <tr class="table-primary">
		<th>
		Адрес</th>
        <th>
		Телефон</th>
		<th>
		Режим работы </th>
	</tr>
<tr>
	<td>
		<strong>Хабаровск, ул. Ленина 43а</strong>
		<br>Центр обслуживания клиентов
		<br><button type="button" class="btn btn-primary text-nowrap mt-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1('hab_len')">Записаться на приём</button>
	</td>
  <td style="white-space:nowrap">8 (800) 234-77-77<br>
    (4212) 75-98-00</td>
  <td>понедельник-пятница<br />
09:00-18:00<br />
суббота 09:00-16:00<br />
выходной: воскресенье</td>
</tr>
  <tr>
    <td><strong>Хабаровск, ул.Тихоокеанская 197</strong>
      <br>Офис обслуживания  №2 (Центр обслуживания клиентов)
      <br><button type="button" class="btn btn-primary text-nowrap mt-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1('hab_tih')">Записаться на приём</button>
    </td>
    <td><span style="white-space:nowrap">8 (800) 234-77-77<br>
      (4212) 75-98-00</span></td>
    <td>понедельник-пятница<br />
09:00-18:00<br />
суббота 09:00-16:00<br />
выходной: воскресенье</td>
  </tr>
  <tr>
    <td><strong>Хабаровск, 
      пр-д Трамвайный 5 </strong><br>
      Офис обслуживания  №3</td>
    <td><span style="white-space:nowrap">8 (800) 234-77-77<br>
      (4212) 75-98-00</span></td>
    <td>понедельник-пятница<br />
09:00-18:00<br />
суббота 09:00 - 16:00<br />
выходной: воскресенье</td>
  </tr>
<!--  <tr>
    <td><strong>Хабаровск, ул.&nbsp;Краснореченская 95</strong><br>
      Офис обслуживания  №3</td>
    <td><span style="white-space:nowrap">8 (800) 234-77-77<br>
      (4212) 75-98-00</span></td>
    <td>понедельник-пятница<br />
09:00-18:00<br />
суббота 09:00 - 16:00<br />
выходной: воскресенье</td>
    </tr> -->
  <tr>
    <td>
	  <strong>Хабаровск, ул.&nbsp;Санитарная 16</strong><br>
        Офис обслуживания  №4
		<!-- <br><span>закрыт в связи с проведением ремонтных работ на период с 18.09.2023г. по 10.11.2023г.</span> -->
	</td>
    <td><span style="white-space:nowrap">8 (800) 234-77-77<br>
      (4212) 75-98-00</span></td>
    <td>
	  вторник-пятница<br>
      09.00-18.00<br>
	  суббота 09:00-16:00<br>
      выходной: воскресенье, понедельник
	</td>
  </tr>
</table>

<h2 class="px-1 py-2 mt-5 mb-1">Вяземское отделение</h2>

<table class="table table-sm table-hover"> 
	  <tr class="table-primary">
	    <th> Адрес </th>
	    <th> Телефон </th>
	    <th> Режим работы </th>
      </tr>
	  <tr>
		<td><a href="../eric/vyazemskiy/"><strong>г.Вяземский, ул.Коммунистическая 10а</strong><br>
	    Единый расчетно-информационный центр</a></td>
	    <td>(42153) <br />
        3-19-67, <br>
        3-61-01</td>
	    <td class="text-nowrap">
	      понедельник-пятница: 
	      08:30-18:00<br>
	      суббота 09:00-16:00<br>
	      выходной: воскресенье</td>
      </tr>
	  <tr>
	    <td><strong>г.Бикин, ул.Бонивура 96</strong><br>
        Офис обслуживания потребителей                             (Бикинский участок)</td>
	    <td>(42155) <br />
        2-16-09, <br>
        2-17-75</td>
	    <td>
	      вторник-суббота: 
	      08:30-17:30<br>
	      перерыв: 12:30-13:30<br>
        выходной: воскресенье, понедельник<br>        </td>
      </tr>
	  <tr>
	    <td><strong>п.Переяславка, ул.Постышева 9 (2 этаж)</strong><br>
        Офис обслуживания потребителей                            (Переяславский участок)</td>
	    <td>(42154) <br />
        21-0-89, <br>
        21-7-60, <br>
        21-9-54</td>
	    <td>
	      понедельник-суббота: 
	      08:30-17:30<br>
	      перерыв: 12:30-13:30<br>
        выходной: воскресенье</td>
      </tr>
</table>

<h2 class="px-1 py-2 mt-5 mb-1">Комсомольское-на-Амуре отделение</h2>

<table class="table table-sm table-hover"> 
    <tr class="table-primary">
	    <th> Адрес </th>
	    <th> Телефон</th>
	    <th> Режим работы </th>
      </tr>
	  <tr>
		<td><a href="../eric/kna/"><strong>г.Комсомольск-на-Амуре, пр-кт Мира 33</strong></a><br>
			ЕРИЦ (единый расчетно-информационный центр)
			<br><button type="button" class="btn btn-primary text-nowrap mt-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1('kms_mir')">Записаться на приём</button>
		</td>
	    <td>(4217) <br>
52-30-00</td>
	    <td rowspan="2">понедельник-пятница<br />
09:00-18:00<br />
суббота 09:00-16:00<br />
выходной: воскресенье</td>
      </tr>
	  <tr>
	    <td><strong>г.Комсомольск-на-Амуре, ул. Котовского, 18</strong><br>
        Офис обслуживания потребителей (Комсомольский участок)</td>
	    <td>(4217) <br>
        52-30-00</td>
      </tr>
	  <tr>
	    <td><strong>п.Солнечный,    ул.Строителей 9</strong><br>
        Офис обслуживания потребителей (Солнечный  участок)</td>
	    <td>(42146)    
          <br>
        2-20-78</td>
	    <td>вторник-суббота<br />
	      09:00-17:00<br />
	      перерыв: 12:30-13:30<br />
	      выходной: воскресенье, понедельник</td>
      </tr>
	  <tr>
	    <td><strong>п.Березовый, ул.Пионерская 35</strong><br>
        Пункт приема потребителей (Солнечный  участок)</td>
	    <td>(42146)    
          <br>
        5-55-66</td>
	    <td>пятница: 08:30-12:30</td>
      </tr>
	  <tr>
	    <td><strong>п.Горин,    ул.Комсомольская 2</strong><br>
        Пункт приема потребителей (Солнечный  участок)</td>
	    <td>(42146)    
          <br>
        6-27-03</td>
	    <td>по предварительной договоренности <br>
        по указанному    номеру телефона</td>
      </tr>
</table>

<h2 class="px-1 py-2 mt-5 mb-1">Амурское отделение</h2>

<table class="table table-sm table-hover"> 
    <tr class="table-primary">
	    <th> Адрес </th>
	    <th> Телефон </th>
	    <th> Режим работы </th>
      </tr>
	  <tr>
	    <td><a href="../eric/amursk/"><strong>г.Амурск, пр-т Строителей 26</strong><br>
        Единый расчетно-информационный центр</a></td>
	    <td>(42142)    <br />
        2-07-35</td>
	    <td>понедельник-пятница<br />
	      09:00-18:00<br />
	      суббота 09:00-16:00<br>
	      выходной: воскресенье</td>
      </tr>
	  <!-- <tr>
	    <td><strong>г.Амурск,    ул.Лесная 12а</strong><br>
        Офис обслуживания     потребителей</td>
	    <td>(42142) <br>
        2-07-35</td>
	    <td>вторник-суббота<br />
	      09:00-17:00<br />
	      перерыв: 12:30-13:30<br />
	      выходной: воскресенье, понедельник</td>
      </tr> -->
	  <tr>
	    <td><strong>с.Троицкое, ул.Лазо 10</strong><br>
        Офис обслуживания    потребителей (Нанайский  участок)</td>
	    <td>(42156) <br />
        4-17-65, <br>
        4-19-55</td>
	    <td>вторник-суббота<br />
	      09:00-17:00<br />
	      перерыв: 12:30-13:30<br />
	      выходной: воскресенье, понедельник</td>
      </tr>
</table>

<h2 class="px-1 py-2 mt-5 mb-1">Николаевское-на-Амуре отделение</h2>

<table class="table table-sm table-hover"> 
	  <tr class="table-primary">
	    <th> Адрес</th>
	    <th> Телефон </th>
	    <th> Режим работы </th>
      </tr>
	  <tr>
	    <td>
		  <strong>г.Николаевск-на-Амуре, ул.Кантера 29</strong><br>        
          Офис обслуживания потребителей
		</td>
	    <td>
		  (42135)<br>
          2-42-12, <br>
          2-33-70
		</td>
	    <td>
	      вторник-суббота: 09:00–18:00<br>
		  перерыв: 13:00–14:00<br>
          выходной: воскресенье, понедельник
		</td>
      </tr>
</table>

<h2 class="px-1 py-2 mt-5 mb-1">Совгаванское отделение</h2>

<table class="table table-sm table-hover"> 
  <tr class="table-primary">
	    <th> Адрес </th>
	    <th> Телефон </th>
	    <th> Режим работы </th>
    </tr>
    <tr>
      <td><strong>г.Советская Гавань, ул. Комсомольская&nbsp;31а</strong><br>
      Офис обслуживания потребителей</td>
      <td>(42138) <br />
        4-71-37, <br>
      4-70-68</td>
      <td>вторник-суббота<br />
        09:00-17:00<br />
        перерыв: 13:00-14:00<br />
        выходной: воскресенье, понедельник<br /></td>
    </tr>
    <tr>
      <td><strong>г.Советская Гавань, ул. Пионерская, 17 </strong></td>
      <td>&nbsp;</td>
      <td>понедельник-пятница <br>
      09:00-17:00<br>
      перерыв: 13:00-14:00</td>
    </tr>
    <tr>
      <td><strong>п. Ванино, ул. 5ая Линия&nbsp;1</strong><br>
      Офис обслуживания потребителей (Ванинский  участок)</td>
      <td>(42137) <br />
        7-22-04, <br>
        7-65-76, <br>
      7-08-79</td>
      <td>вторник: 09:00-18:00<br />
        среда-суббота<br />
        09:00-17:00<br />
        перерыв: 13:00-14:00<br />
        выходной: воскресенье, понедельник</td>
    </tr>
</table>

<h2 class="px-1 py-2 mt-5 mb-1">Ургальское отделение</h2>

<table class="table table-sm table-hover"> 
  <tr class="table-primary">
	    <th> Адрес </th>
	    <th> Телефон </th>
	    <th>Режим работы</th>
    </tr>
    <tr>
      <td><strong>п.Чегдомын, ул.Центральная 44</strong><br>
      Офис обслуживания потребителей</td>
      <td>(42149) 5-26-60</td>
      <td>вторник-суббота 09:00-17:00<br>
        перерыв: 13:00-14:00<br>
      выходной: воскресенье, понедельник</td>
    </tr>
    <tr>
      <td><strong>рп.Новый Ургал, ул.Артема 6</strong><br>
      Пункт приема потребителей</td>
      <td>+7 909 804-53-51</td>
      <td>вторник-суббота 09:00-10:00<br>
      выходной: воскресенье, понедельник</td>
    </tr>
</table>

<p class="mt-5">Консультацию по любым вопросам, касающимся услуг, отраженных в квитанциях, клиенты компании могут получить не только в офисах, но также:</p>
<ul>
  <li>по телефонам, указанным на этой странице;</li>
  <li>в Едином контактном центре: <strong>8 (800) 234-77-77</strong>;</li>
  <li><a href="../priemnaya/">В Интернет-приёмной ПАО «ДЭК»</a>;</li>
  <li>для жителей Хабаровска открыта дополнительная телефонная линия: <b>75-98-00</b>.</li>
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

<script src="/srv/office_zapis/script.js?2"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>