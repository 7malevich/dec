<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Офисы, обслуживание");
?><link href="/design2019/css/offices_workload.css?7" type="text/css" rel="stylesheet">

<div class="alert alert-info mb-4" role="alert">
Передать показания, оплатить счета и получать квитанции в электронном виде можно через <a href="../online/">онлайн-сервисы компании</a>. Получить консультацию можно по телефону контактного центра <a href="tel:88002347777">8 (800) 234-77-77</a>. Подать заявление и <b>получить все необходимые документы</b> можно на сайте компании в разделе <a href="../priemnaya/">"Интернет-приемная"</a>.
</div>

<div class="container mb-4 pl-0 pr-0">
  <div class="card-deck">
    <div class="card">
      <div class="card-body d-flex flex-column justify-content-around">
        <h4 class="card-title text-center">Загруженность офисов в&nbsp;течение месяца:</h4>
<div>
  <span class="workload-d-1">1</span>
  <span class="workload-d-1">2</span>
  <span class="workload-d-1">3</span>
  <span class="workload-d-1">4</span>
  <span class="workload-d-1">5</span>
  <span class="workload-d-1">6</span>
  <span class="workload-d-1">7</span><br>
  <span class="workload-d-2">8</span>
  <span class="workload-d-2">9</span>
  <span class="workload-d-3">10</span>
  <span class="workload-d-3">11</span>
  <span class="workload-d-3">12</span>
  <span class="workload-d-3">13</span>
  <span class="workload-d-3">14</span><br>
  <span class="workload-d-3">15</span>
  <span class="workload-d-3">16</span>
  <span class="workload-d-3">17</span>
  <span class="workload-d-3">18</span>
  <span class="workload-d-3">19</span>
  <span class="workload-d-3">20</span>
  <span class="workload-d-3">21</span><br>
  <span class="workload-d-3">22</span>
  <span class="workload-d-3">23</span>
  <span class="workload-d-3">24</span>
  <span class="workload-d-3">25</span>
  <span class="workload-d-2">26</span>
  <span class="workload-d-2">27</span>
  <span class="workload-d-2">28</span><br>
  <span class="workload-d-1">29</span>
  <span class="workload-d-1">30</span>
  <span class="workload-d-1">31</span>
</div>
      </div>
    </div>

  	<div class="card">
    	<div class="card-body d-flex flex-column justify-content-around">
        	<h4 class="card-title text-center">В течение недели:</h4>
<div>
  <span class="workload-d-3">пн</span> 
  <span class="workload-d-2">вт</span>
  <span class="workload-d-1">ср</span>
  <span class="workload-d-2">чт</span>
  <span class="workload-d-3">пт</span>
  <span class="workload-d-2">сб</span>
  <span class="workload-d-4">вс</span>
</div>
        	<h4 class="card-title text-center mt-5">В течение дня:</h4>
<div class="card-text">
  <span class="workload-h-1">8</span>
  <span class="workload-h-1">9</span>
  <span class="workload-h-2">10</span>
  <span class="workload-h-3">11</span>
  <span class="workload-h-3">12</span>
  <span class="workload-h-3">13</span>
  <span class="workload-h-3">14</span>
  <span class="workload-h-3">15</span>
  <span class="workload-h-3">16</span>
  <span class="workload-h-2">17</span>
  <span class="workload-h-1">18</span>
</div>

    	</div>
  	</div>
  </div>
</div>

<div class="alert alert-info mb-5 p-3 d-flex flex-column flex-sm-row align-items-center" role="alert">
	<span class="text-sm-left mb-1 mb-sm-0 mr-sm-1">Как читать графику загруженности офисов:</span>
	<span class="workload-h-1 mb-sm-0 mr-sm-1">Минимальное время ожидания</span>
	<span class="workload-h-2 mb-sm-0 mr-sm-1">Среднее время ожидания</span>
	<span class="workload-h-3 mb-sm-0 mr-sm-1">Максимальное время ожидания</span>
	<span class="workload-h-4 mb-sm-0">Нерабочий день (час)</span>
</div>

<h2 class="pl-1 mb-2">Благовещенск:</h2>
<table class="table table-hover mb-4"> 
    <tr class="table-primary">
    <th>Адрес, телефон</th>
    <th>Режим работы</th>
    </tr>
    <tr>
      <td><p class="text-left my-3">Единый расчетно-информационный центр (ЕРИЦ)<br>
        <strong>г.Благовещенск, ул. Калинина, 142/4</strong><br>
        8 (800) 234-77-77<br>
        <a href="mailto:rkc-doc@amur.dvec.ru">rkc-doc@amur.dvec.ru</a><br>
<button type="button" class="btn btn-primary text-nowrap mt-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1('bla_kal')">Записаться на приём</button>
        </p>
      </td>
      <td> <p class="text-left">пн-пт: 08-19 <br>
        сб: 08-17 </p>
        <p class="text-left"> касса:<br>
        пн-пт: 08-18.30<br>
        сб: 09-16.30
        </p>
    </td>
    </tr>
  <tbody>
    <tr>
      <td><p class="text-left my-3">Единый расчетно-информационный центр (ЕРИЦ)<strong><br>
        г.Благовещенск, ул. 50 лет Октября, 65/1</strong>
          <br>
          8 (800) 234-77-77<br>
          <a href="mailto:rkc-doc@amur.dvec.ru">rkc-doc@amur.dvec.ru</a><br>
<button type="button" class="btn btn-primary text-nowrap mt-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1('bla_50l')">Записаться на приём</button>
        </p>
    </td>
      <td class="text-nowrap"> <p class="text-left">пн-пт: 08-19 <br>
        сб: 08-17 </p>
        <p class="text-left"> касса:<br>
          пн-пт: 08-18.30<br>
      сб: 09-16.30</p>
		</td>
    </tr>
  </tbody>
</table>

<h2 class="pl-1 mb-2">Белогорское отделение:</h2>
<table class="table table-sm table-hover mb-4"> 
<tr class="table-primary">
		<th>Адрес, телефон</th>
		<th> Режим работы </th>
  </tr>

  <tr>
    <td>
	  <p class="text-left my-3">Единый расчетно-информационный центр (ЕРИЦ)<br>
	  <strong>г. Белогорск, ул. Набережная, д.164</strong><br>
	  8 (800) 234-77-77, (416-41) 287-27<br>
    <a href="mailto:%64%6fc%40%62el.%61%6d%75r%2e%64v%65c%2e%72%75">doc@bel.amur.dvec.ru</a></p></td>
    <td>пн-пт: 08-18<br>
      сб: 09-15</td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>Октябрьский район, с. Екатеринославка, ул. Ленина, 59<br>
    </strong>8 (800) 234-77-77,    (416-52) 235-52; 228-22 <br>
      <a href="mailto:%6fr%6e@r%6f%6d%6ey.%61mur.%64%76e%63.%72%75">orn@romny.amur.dvec.ru</a></p></td>
    <td>пн-пт:    08-16<br>
      обед: 12-13 </td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>Ромненский р-н с. Ромны, ул. Советская, 100</strong><br>
      8 (800) 234-77-77, (416-45)    917-08 <br>
      <a href="mailto:%64%6fc@o%63%74.a%6d%75%72.d%76%65%63.r%75">doc@oct.amur.dvec.ru</a></p></td>
    <td>пн-пт:    08-16<br>
      обед: 12-13 </td>
  </tr>
</table>


<h2 class="pl-1 mb-2">Благовещенское отделение:</h2>
<table class="table table-sm table-hover mb-4"> 
<tr class="table-primary">
		<th>Адрес, телефон</th>
		<th> Режим работы </th>
  </tr>

  <tr>
    <td><p class="text-left my-3"><strong>Тамбовский район, с. Тамбовка, ул. 50 Октября, 21А<br>
    </strong>8 (800) 234-77-77, (416-38) 216-32 <br>
      <a href="mailto:doc@tam.amur.dvec.ru">doc@tam.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт: 08-17<br>
      обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>с. Ивановка, ул. Ленина, 152</strong><br>
      8 (800) 234-77-77, (416-49) 517-81, 517-75, 512-05 <br>
      <a href="mailto:doc@iva.amur.dvec.ru">doc@iva.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт: 08-17<br>
      обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>с. Константиновка, ул. Комсомольская, 44</strong><br>
      8 (800) 234-77-77, (416-39)&nbsp;918-91, 915-81 <br>
      <a href="mailto:doc@kon.amur.dvec.ru">doc@kon.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт: 08-17<br>
      обед: 12-13 </p></td>
  </tr>
</table>

<h2 class="pl-1 mb-2">Зейское отделение:</h2>
<table class="table table-sm table-hover mb-4"> 
  <tr class="table-primary">
		<th>
		Адрес </th>
		<th> Режим работы </th>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>г. Зея, ул. Набережная, 35/5</strong><br>
      8 (800) 234-77-77, (416-58)&nbsp;338-18, 338-17,<br>
8-914-045-1190 <br>
doc@zeya.amur.dvec.ru </p></td>
    <td><p class="text-left my-3">пн-чт: 08-17, <br>
      пт: 08-12 <br>
      обед: 12-13<br>
      <br>
      касса:<br>
      пн-чт: 09-16:00,    пт: 08-10:45<br>
    обед: 11.45 -13</p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>п. Магдагачи, Ленина, 25а</strong><br>
      8 (800) 234-77-77, (416-53)&nbsp;979-97, 8&nbsp;(914)&nbsp;592-5064<br>
doc@mag.amur.dvec.ru </p></td>
    <td><p class="text-left">пн-пт: 08-17; <br>
      обед: 12-13<br>
    касса: 09-15:30 </p></td>
  </tr>
</table>

<h2 class="pl-1 mb-2">Райчихинское отделение:</h2>
<table class="table table-sm table-hover mb-4"> 
  <tr class="table-primary">
		<th>
		Адрес </th>
		<th> Режим работы </th>
  </tr>

  <tr>
    <td><p class="text-left my-3"><a href="../eric/">Единый    расчетно-информационный центр (ЕРИЦ)</a><strong><br>
      г. Райчихинск, ул. Пономаренко, 99</strong><br>
      8 (800) 234-77-77, (416-47)&nbsp;217-00,&nbsp;217-16, 8&nbsp;(914)&nbsp;611-1321<br>
      <a href="mailto:doc@rai.amur.dvec.ru">doc@rai.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт:    08-17<br>
    обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>Бурейский р-н, п. Новобурейский, ул. Луговая, 59</strong><br>
      8 (800) 234-77-77, (416-34)&nbsp;2-01-16,&nbsp;2-01-18, 8&nbsp;(914)&nbsp;041-0649 <br>
      <a href="mailto:doc@burea.amur.dvec.ru">doc@burea.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт:    08-17<br>
    обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>Архаринский р-н, п. Архара, ул. Первомайская, 98</strong><br>
      8 (800) 234-77-77, (416-48) 2-14-89, 2-23-72, 8&nbsp;(914)&nbsp;041-1219<br>
      <a href="mailto:doc@arh.amur.dvec.ru">doc@arh.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт:    08-17<br>
    обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>п. Прогресс, ул. Заводская, 56А</strong><br>
      8 (800) 234-77-77, (416-47)&nbsp;217-29, 8&nbsp;(914)&nbsp;583-6963<br>
      <a href="mailto:doc@pro.amur.dvec.ru">doc@pro.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт:    08-17<br>
    обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>г. Завитинск, ул. Красноармейская, 46</strong><br>
      8 (800) 234-77-77, (416-36)&nbsp;227-66, 8&nbsp;(914)&nbsp;388-9347<br>
      <a href="mailto:doc@zav.amur.dvec.ru">doc@zav.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт:    08-17<br>
    обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>Михайловский район, с. Поярково, ул. Ленина, 91<br>
    </strong>8 (800) 234-77-77, (416-37)&nbsp;422-57, 8&nbsp;(914)&nbsp;045-1526<br>
      <a href="mailto:doc@mih.amur.dvec.ru">doc@mih.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт:    08-17<br>
    обед: 12-13</p></td>
  </tr>
</table>

<h2 class="pl-1 mb-2">Свободненское отделение:</h2>
<table class="table table-sm table-hover mb-4"> 
  <tr class="table-primary">
		<th>Адрес, телефон</th>
		<th> Режим работы </th>
  </tr>

  <tr>
    <td><p class="text-left my-3"><strong>г. Свободный, ул. Шатковская, 84</strong><br>
      8 (800) 234-77-77, (416-43)&nbsp;360-39 <br>
    <a href="mailto:doc@svob.amur.dvec.ru">doc@svob.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт: 08-17<br>
    обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>ЗАТО Циолковский, ул. Победы, 26<br>
    </strong>8 (800) 234-77-77, (416-43)&nbsp;915-46<br>
      <a href="mailto:doc@svob.amur.dvec.ru">doc@svob.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт: 08-17<br>
    обед: 12-13 </p></td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>г. Шимановск, ул. Октябрьская, 19</strong><br>
      8 (800) 234-77-77, (416-51)&nbsp;222-69<br>
      <a href="mailto:doc@svob.amur.dvec.ru">doc@svob.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт: 08-17<br>
    обед: 12-13</p></td>
  </tr>
  <tr>
    <td>
    	<p class="text-left my-3"><strong>пгт Серышево, ул. Горького, 5</strong><br>
		Единый расчетно-информационный центр (ЕРИЦ)<br>
    	  8 (800) 234-77-77; (41642) 2-19-34; 2-31-17; 2-39-38<br>
    <a href="mailto:doc@svob.amur.dvec.ru">doc@svob.amur.dvec.ru</a></p></td>
    <td>
    	<p class="text-left">пн-пт: 08-17<br>
		обед: 12-13</p>
    </td>
  </tr>
  <tr>
    <td>
    	<p class="text-left my-3"><strong>с. Новокиевский Увал, ул.Советская, 68</strong><br>
    	  8 (800) 234-77-77, (416-44)&nbsp;213-45<br>
    <a href="mailto:doc@svob.amur.dvec.ru">doc@svob.amur.dvec.ru</a></p></td>
    <td>
    	<p class="text-left">пн-пт: 08-17<br>
		обед: 12-13</p>
    </td>
  </tr>
</table>

<h2 class="pl-1 mb-2">Тындинское отделение:</h2>
<table class="table table-sm table-hover mb-4"> 
      <tr class="table-primary">
		<th>
		Адрес, телефон</th>
		<th> Режим работы </th>
	</tr>

  <tr>
    <td><p class="text-left my-3">Единый расчетно-информационный центр (ЕРИЦ)<br>
      <strong>г. Тында, ул. Мохортова, 12а</strong><br>
      8 (800) 234-77-77, (416-56)&nbsp;415-56,&nbsp;497-61, 8&nbsp;(914)&nbsp;592-1623<br>
    <a href="mailto:%64o%63@t%79%6e%64%61%2e%61%6du%72%2edv%65%63%2e%72%75">doc@tynda.amur.dvec.ru</a></p></td>
    <td>
	  <p class="text-left"> <br>
        пн-пт: 08.15-18<br>
        сб: 09-15 </p>
	</td>
  </tr>
  <tr>
    <td><p class="text-left my-3"><strong>г. Сковородино, ул. Сурнина, 1а</strong><br>
      8&nbsp;(800)&nbsp;234-77-77, (416-54)&nbsp;20-701, 20-705, 20-702, 8&nbsp;(914)&nbsp;566-4928, 8&nbsp;(914)&nbsp;041-1639, 8&nbsp;(914)&nbsp;392-0474, 8&nbsp;(914)&nbsp;041-8287<br>
      <a href="mailto:doc@tynda.amur.dvec.ru">doc@tynda.amur.dvec.ru</a></p></td>
    <td><p class="text-left">пн-пт:    08-17<br>
    обед: 12-13</p></td>
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

<script src="/srv/office_zapis/script.js?2"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>