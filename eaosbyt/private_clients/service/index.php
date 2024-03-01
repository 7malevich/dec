<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Офисы, обслуживание");
?><div class="alert alert-info  mb-4" role="alert">
Передать показания, оплатить счета и получать квитанции в электронном виде можно через <a href="../online/">онлайн-сервисы компании</a>. Получить консультацию можно по телефону контактного центра <a href="tel:88002347777">8 (800) 234-77-77</a>. Подать заявление и <b>получить все необходимые документы</b> можно на сайте компании в разделе <a href="../priemnaya/">"Интернет-приемная"</a>.
</div>

<h2>Офисы по обслуживанию клиентов</h2>
<table class="table table-sm table-hover"> 
  <tbody>
    <tr>
      <th align="center">Адрес</th>
      <th align="center">Режим работы</th>
      <th>Телефон</th>
    </tr>
  <tr><td colspan="3" style="background:#008961; height:2px; padding:0"></td></tr>
  <tr>
    <td>
		<strong>г. Биробиджан,</strong>
		<br>пр. 60-летия СССР, д.22а
		<br><button type="button" class="btn btn-primary text-nowrap my-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1('bir_60l')">Записаться на приём</button>
	</td>
    <td>понедельник-пятница: 08:00-18:00<br />
      суббота: 09:00-17:00 <br />
      выходной день: воскресенье</td>
    <td style="white-space:nowrap">(42 622) 40-9-04</td>
  </tr>
  <tr>
    <td height="78"><strong>с. Ленинское,</strong><br>
      ул.Ленина, д. 1 <br /></td>
    <td><span class="lighter">понедельник-четверг: 08:00-17:00,<br>
      перерыв: 12:00-13:00 <br>
	  пятница: 08:00-12:00<br>
      выходные дни: суббота, воскресенье </span></td>
    <td>(42 663) 2-14-82<br /></td>
  </tr>
  <tr>
    <td><strong>п. Николаевка,</strong><br>
      ул.  Лазо, д.15 <br /></td>
    <td>вторник, четверг: 
      09:00-12:00</td>
    <td>(42 632) 2-13-99</td>
  </tr>
  <tr>
    <td><strong>г. Облучье,</strong><br>
      ул. Садовая, д. 1 <br /></td>
    <td><span class="lighter">понедельник-пятница:</span> 09:00-18:00 <br />
      перерыв: 13:00-14:00 <br />
      выходные дни: суббота, воскресенье</td>
    <td style="white-space:nowrap">(42 666) 4-25-64</td>
  </tr>
  <tr>
    <td><strong>п. Приамурский,</strong><br>
      ул. Островского, д.16</td>
    <td>вторник, четверг: 
      08:00-12:00<br /></td>
    <td>(42 632) 2-46-72</td>
  </tr>
  <tr>
    <td><strong>п. Смидович,</strong><br>
      ул. 30 лет Победы, д. 11</td>
    <td> вторник, пятница: 08:00-12:00<br />
      (Внимание: в данном офисе платежи не принимаются, оплатить счета за электроэнергию можно <a href="../payment/">картой онлайн, а также в платежных терминалах</a>)</td>
    <td>(42 632) 2-27-28</td>
  </tr>
    <tr>
      <td><strong>с. Амурзет,</strong><br>
        ул.  Крупской, д.24 </td>
      <td><span class="lighter">вторник, пятница: 09:00-11:00<br />
        перерыв: 12:00-13:00 <br />
        выходные дни: суббота, воскресенье </span></td>
      <td>(42 665) 22-0-10</td>
    </tr>
  </tbody>
</table>

<p style="margin-top:3rem"><span style="text-align: justify">В офисах по обслуживанию клиентов можно в самые короткие сроки получить квалифицированный ответ на любой вопрос, связанный с энергоснабжением, в том числе о порядке технологического присоединения к электрическим сетям предприятия, низкого качества электроэнергии и др. </span> Специалисты офисов оказывают населению следующие услуги: </p>
<ul>
  <li>Прием платежей за электрическую энергию; </li>
  <li>Оформление дубликатов счетов-квитанций на электроэнергию;</li>
  <li>Прием заявлений на перерасчет начислений за электроснабжение;</li>
  <li>Выдача справок  об отсутствии долга за электроэнергию;</li>
  <li>Консультации по вопросам энергоснабжения;</li>
  <li>Проверка документов и прием заявок на опломбирование электросчетчиков;</li>
  <li>Заключение договоров энергоснабжения с физическими лицами.</li>
</ul>
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

<script src="/srv/office_zapis/script.js?2"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>