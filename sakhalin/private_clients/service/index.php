<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Офисы, обслуживание");
?><!-- <div class="alert alert-danger mb-4" role="alert">
Уважаемые клиенты! В связи с проведением ремонтных работ 28-29 апреля 2023 года очный прием в ЕРИЦ г.Южно-Сахалинск не осуществляется. 
	По всем вопросам обращаться в Единый контакт-центр по телефону 8-800-234-7777, а также <a href="../priemnaya/">через интернет-приемную</a>.
</div> -->

<div class="alert alert-info mb-4" role="alert">
Передать показания, оплатить счета и получать квитанции в электронном виде можно через <a href="../online/">онлайн-сервисы компании</a>. Получить консультацию можно по телефону контактного центра <a href="tel:88002347777">8 (800) 234-77-77</a>. Подать заявление и <b>получить все необходимые документы</b> можно на сайте компании в разделе <a href="../priemnaya/">"Интернет-приемная"</a>.
</div>

<div class="spoiler folded" id="jusakh"><h3 class="sp-hdr">Единый расчётно-информационный центр (ЕРИЦ) ДЭК в Южно-Сахалинске</h3></div>
<div class="spoiler-text">
<div class="card bg-light" style="margin-bottom:35px">
  <div class="card-body">
    <div class="wysiwyg" id="card0">
		<p>Адрес: Южно-Сахалинск, ул. имени Космонавта Поповича, 112. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQPhnkB" target="_blank">Открыть на карте</a></p>
		<p>Режим работы офиса: 
			<br>понедельник-пятница: 09:00-18:00
			<br>суббота: 09:00-15:00
			<br>без перерыва
		  </p>
		<p>Телефон контакт-центра:<br>
8-800-234-77-77 - вопросы по  начислению, оплате электроэнергии, для справок, прием показаний и обращений</p>
		<p>Адреса эл.почты: <br>
		  <a href="mailto:infoenergo@sakh.dvec.ru">infoenergo@sakh.dvec.ru</a> по вопросам начисления, оплаты за электроэнергию<br>
		  <a href="mailto:info@sakh.dvec.ru">info@sakh.dvec.ru</a> по  вопросам начисления, оплаты за услугу ТКО<br>
	    <a href="mailto:gup_so_othody@svtc.ru">gup_so_othody@svtc.ru</a> по вопросам качества  оказания услуг по вывозу ТКО </p>
      <button type="button" class="btn btn-primary text-nowrap mt-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1('jus_kos')">Записаться на приём</button>
    </div>
  </div>
</div>
</div>
<script>
	setTimeout(function(){
	$('#jusakh').trigger('click');
	}, 1500);
</script>


<div class="spoiler folded"><h3 class="sp-hdr">Анивский участок</h3></div>
<div class="spoiler-text">
  <p><strong>Адрес</strong>: г. Анива, ул. Ленина, д. 19. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQPxbCA" target="_blank">Открыть на карте</a><br>
    <strong>Режим работы</strong>: Понедельник-четверг с 08:30 до 16:50  ч., пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
    <strong>Контактные телефоны</strong>:<br>
    8 (424-41) 4-21-14, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
    8 (424-41) 4-15-16 – для справок<br>
    8 (42-42) 31-82-08 – вопросы по претензионно-исковой работе,  исполнительному производству<br>
  <strong>Электронная почта</strong>: <a href="mailto:Popov-OB@sakh.dvec.ru">Popov-OB@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Долинский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес:</strong> г. Долинск, ул. Комсомольская, д. 27, каб. 1, 2, 3. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQPxWoB" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы: </strong>понедельник-четверг с 08:30 до 16:50 ч., пятница – с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
<strong>Контактные телефоны:</strong> <br>
8 (424-42) 2-09-13, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
 8 (424-42) 2-09-04 – вопросы по  претензионно-исковой работе, исполнительному производству<br>
 <strong>Электронная почта:</strong> Azarnova-MV@sakh.dvec.ru</p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Корсаковский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес</strong>: г. Корсаков, ул. Портовая, д. 2, (дежурный  оператор «окно приема»). <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQPxlpC" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы</strong>: понедельник-четверг с 08:30 до 16:50  ч., пятница – с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  <strong>Контактные телефоны</strong>:<br>
  8 (424-35) 4-20-44, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  <strong>Электронная почта:</strong> <a href="mailto:mikhaesh-kn@sakh.dvec.ru">mikhaesh-kn@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Поронайский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес</strong>: г. Поронайск, ул. Гагарина, д. 47. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQTAvGC" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы</strong>: Понедельник-четверг с 08:30 до 16:50  ч., пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  <strong>Контактные телефоны</strong>:<br>
  8 (424-31) 5-50-46, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  8 (424-31) 5-50-42 – вопросы по претензионно-исковой работе,  исполнительному производству<br>
  <strong>Электронная почта</strong>: <a href="mailto:schepetilnikov-ov@sakh.dvec.ru">schepetilnikov-ov@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Макаровский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес</strong>: г. Макаров, ул. Ленина, д. 16 оф. 2. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQTA1LA" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы</strong>: Понедельник-четверг с 08:30 до 16:50  ч., пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  <strong>Контактные телефоны</strong>:<br>
  8 (424-43) 5-06-53, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  <strong>Электронная почта</strong>: <a href="mailto:Sidorov-EV@sakh.dvec.ru">Sidorov-EV@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Смирныховский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес</strong>: пгт Смирных, ул. Западная, д. 11,  помещение 1, литер А. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQTAxtC" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы</strong>: Понедельник-четверг с 08:30 до 16:50  ч., пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  <strong>Контактные телефоны</strong>:<br>
  8 (424-52) 4-22-77, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  <strong>Электронная почта:</strong> <a href="mailto:Tereschenko-IA@sakh.dvec.ru">Tereschenko-IA@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Единый расчетно-кассовый центр ПАО «ДЭК», г. Холмск</h3></div>
<div class="spoiler-text">
  <p><strong>Адрес:</strong> г. Холмск, площадь Ленина, д. 9. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQTEbXC" target="_blank">Открыть на карте</a><br>
    <strong>Режим работы: </strong>
  Понедельник-пятница с 09:00 до 18:00 ч., без обеда, суббота с 09:00 до 15:00 ч.<br>
  <strong>Контактный телефон:</strong>  8-800-234-77-77, 8 (424-33) 4-10-20 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  <strong>Адреса эл.почты: </strong><br>
  <a href="mailto:eric@kholmsk.sakh.dvec.ru">eric@kholmsk.sakh.dvec.ru</a>&nbsp;– по  вопросам начисления, оплаты за электроэнергию и жилищно-коммунальных услуг,  отраженных в квитанциях &nbsp;<br>
  <a href="mailto:pokazaniya@kholmsk.sakh.dvec.ru">pokazaniya@kholmsk.sakh.dvec.ru</a> -  для приема показаний приборов учета (вода, электроэнергия)<br>
  <u><a href="mailto:info@sakh.dvec.ru">info@sakh.dvec.ru</a></u>&nbsp;по  вопросам начисления, оплаты за услугу ТКО<br>
  <a href="mailto:gup_so_othody@svtc.ru">gup_so_othody@svtc.ru</a>&nbsp;по  вопросам качества оказания услуг по вывозу ТКО</p>
<p><a href="../eric/" class="btn btn-sm btn-primary">Перейти на страницу ЕРИЦ</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Невельский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес</strong>: г. Невельск, ул. Ленина, д. 52, 2 этаж. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQTE-kD" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы</strong>: Понедельник-четверг с 08:30 до 16:50  ч., пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  <strong>Контактные телефоны:</strong><br>
  8 (424-36) 6-02-69, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  8 (424-36) 6-00-41 – для справок<br>
  <strong>Электронная почта:</strong> <a href="mailto:Zhuchenko-IV@sakh.dvec.ru">Zhuchenko-IV@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Углегорский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес</strong>: г. Углегорск, ул. Лейтенанта Егорова д.2. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CTWuioR" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы</strong>: Понедельник-четверг с 08:30 до 16:50  ч., пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  <strong>Контактные телефоны</strong>:<br>
  8 (424-32) 4-42-72, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  <strong>Электронная почта</strong>: <a href="mailto:tolmachev-ov@sakh.dvec.ru">tolmachev-ov@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Томаринский участок</h3></div>
<div class="spoiler-text">
<p><strong>г. Томари</strong><br>
  Адрес: ул. Калинина, д. 60. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQTQ0OA" target="_blank">Открыть на карте</a><br>
  Режим работы: Понедельник-четверг с 08:30 до 16:50 ч.,  пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  Контактные телефоны: 8 (424-46) 2-62-92, 8-800-234-77-77  – консультации по любым вопросам, касающимся услуг, отраженных в квитанциях  <br>
  Электронная почта: <a href="mailto:Kiselev-SA@sakh.dvec.ru">Kiselev-SA@sakh.dvec.ru</a></p>
<p><strong>с. Красногорск</strong><br>
  Адрес: ул. К. Маркса, 31 <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CDQjvI3R" target="_blank">Открыть на карте</a><br>
  Режим работы: Понедельник-четверг с 08:30 до 16:50 ч.,  пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  Контактные телефоны: 8 (424-46) 3-19-30, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в квитанциях  <br>
  Электронная почта: <a href="mailto:Kiselev-SA@sakh.dvec.ru">Kiselev-SA@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded"><h3 class="sp-hdr">Тымовский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес</strong>: пгт Тымовское, ул. Пионерская, д. 5. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQTQsXA" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы</strong>: Понедельник-четверг с 08:30 до 16:50  ч., пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  <strong>Контактные телефоны</strong>:<br>
  8 (424-47) 2-16-93, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  <strong>Электронная почта:</strong> <a href="mailto:leontev-ie@sakh.dvec.ru">leontev-ie@sakh.dvec.ru</a></p>
</div>


<div class="spoiler folded">
  <h3 class="sp-hdr">Александровский участок</h3></div>
<div class="spoiler-text">
<p><strong>Адрес</strong>: г. Александровск-Сахалинский, ул. Советская,  д. 34 оф. 76. <a class="btn btn-sm btn-secondary text-decoration-none" href="https://yandex.ru/maps/-/CCUFQTQTpC" target="_blank">Открыть на карте</a><br>
  <strong>Режим работы</strong>: Понедельник-четверг с 08:30 до 16:50  ч., пятница с 08:30 до 16:15 ч. Перерыв на обед с 12:00 до 13:00 ч.<br>
  <strong>Контактные телефоны</strong>:<br>
  8 (424-34) 4-49-55, 8-800-234-77-77 –  консультации по любым вопросам, касающимся услуг, отраженных в  квитанциях<br>
  8 (424-34) 4-33-20 – для справок<br>
  <strong>Электронная почта</strong>: <a href="mailto:Nagumanova-GE@sakh.dvec.ru">Nagumanova-GE@sakh.dvec.ru</a></p>
  <p>&nbsp;</p>
</div>

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