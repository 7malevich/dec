<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Офисы, обслуживание");
?><!-- <div class="alert alert-danger text-decoration-none mb-3 d-flex p-3 justify-content-left align-items-center" role="alert">
	<span style="padding-left:0.1rem; padding-right:1.2rem; opacity:0.4; font-size:2.5rem; line-height:2rem">⚠</span>
	<span class="alert-link">
	</span>
</div> -->

<div class="alert alert-info mb-4" role="alert">
Передать показания, оплатить счета и получать квитанции в электронном виде можно через <a href="../online/">онлайн-сервисы компании</a>. Получить консультацию можно по телефону контактного центра <a href="tel:88002347777">8 (800) 234-77-77</a>. Подать заявление и <b>получить все необходимые документы</b> можно на сайте компании в разделе <a href="../priemnaya/">"Интернет-приемная"</a>.
</div>

<div class="card card-light mb-4 p-3 d-flex align-items-center" role="alert">
	<p>Уважаемые клиенты! Вход в офис (ЕРИЦ) по адресу: г. Владивосток, ул. Октябрьская, 8,  временно перемещен,  вход располагается с обратной стороны здания, на 1 этаже.</p>
	<p>Обращаем ваше внимание, что прием наличных платежей в офисе временно отсутствует!</p>
	<img src="2023_04_19_novy_vhod.png">
</div>
<div class="card card-light mb-5 p-3 align-items-center text-center" role="alert">
	<h3 class="mb-2">Уважаемые клиенты!<br>Открыта онлайн-запись в ЕРИЦ в г. Большой Камень:</h3><br>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalZapis" onclick="step1('bka_yzh')">Запись в офис</button>
</div> 


<h2 style="margin-top:35px">Отделения по обслуживанию частных клиентов</h2>
 <strong>Владивосток:</strong>
<table class="table table-hover">
<tbody>
<tr class="table-primary">
	<th>
		 Адрес
	</th>
	<th>
		 Режим работы
	</th>
	<th>
		 Телефон, e-mail
	</th>
</tr>
<tr>
	<td>
		 Единый расчетно-информационный центр (ЕРИЦ)<strong><br>
		 г.Владивосток, ул.Октябрьская,&nbsp;8</strong><br>
<button type="button" class="btn btn-primary text-nowrap mt-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1('des_vl_okt')">Запись в офис</button>
		<!-- <div class="text-warning">Уважаемые клиенты! Мы в процессе переезда. Вход в ЕРИЦ теперь располагается с обратной стороны здания. Касса временно недоступна, принимается безналичная оплата.</div> -->
	</td>
	<td>
		 пн-пт: 08-18<br>
		 сб: 09-17
	</td>
	<td rowspan="3">
 <strong>8 (800) 234-77-77</strong><br>
		 e-mail: <a href="mailto:abonent@vrkc.prim.dvec.ru">abonent@vrkc.prim.dvec.ru</a>
	</td>
</tr>
<tr>
  <td>
    Клиентский офис<br>
    <strong>г.Владивосток, ул.Фирсова, 4</strong>
  </td>
  <td class="text-nowrap">
    пн-пт: 09-18
  </td>
</tr>
<tr>
  <td>
    Клиентский офис<br>
	<strong>г.Владивосток, ул. Луговая, 18, офис 332 (ТЦ «Луговая»)</strong><br>
    </td>
  <td class="text-nowrap">
    пн-пт: 09-18
    </td>
</tr>
</tbody>
</table>

<div style="clear:both; height:15px">
</div>
<div class="spoiler folded mt-4 mb-0">
 <strong>Артемовский РКЦ:</strong>
</div>
<div class="spoiler-text">
	<table class="table table-hover">
	<tbody>
	<tr class="table-primary">
		<th>
			 Адрес
		</th>
		<th>
			 Режим работы
		</th>
		<th>
			 Телефон, e-mail
		</th>
	</tr>
	<tr>
		<td>
			 Единый расчетно-информационный центр (ЕРИЦ)<strong><br>
			 г.Артем, ул.Интернациональная,&nbsp;84</strong>
		</td>
		<td class="text-nowrap">
			 пн-пт: 08-18<br>
			 сб: 09-17<br>
 <br>
			касса: пн-пт: 08:00-17:40
		</td>
		<td>
			 (42337) 9-10-91<br>
 <a href="mailto:sekretar@arkc.prim.dvec.ru">sekretar@arkc.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			Пункт обслуживания клиентов<br>
			<strong>п.Вольно-Надеждинское, ул.Пушкина,&nbsp;51</strong>
		</td>
		<td class="text-nowrap">
			 пн-пт: 08-17<br>
			 перерыв: 12-13
		</td>
		<td>
			 (42334) 2-00-81
		</td>
	</tr>
	<tr>
		<td>
			 Пункт обслуживания клиентов<br>
 <strong>п.Раздольное, ул.Лазо, 269</strong>
		</td>
		<td class="text-nowrap">
			 пн-пт: 08-17<br>
			 перерыв: 12-13
		</td>
		<td>
			 (42334) 3-31-66
		</td>
	</tr>
	<tr>
		<td>
			 Хасанский районный участок<br>
 <strong>пгт Славянка, ул.Свободная, д.3</strong>
		</td>
		<td>
			 пн-пт: 08-17<br>
			 перерыв: 12-13
		</td>
		<td>
			 (42331) 4-62-79<br>
 <a href="mailto:sekr@xasan.prim.dvec.ru">sekr@xasan.prim.dvec.ru</a>
		</td>
	</tr>
	</tbody>
	</table>
	<div style="height:25px">
	</div>
	 
</div>


<div class="spoiler folded mt-4 mb-0">
 <strong>Уссурийское отделение:</strong>
</div>
<div class="spoiler-text">
	<table class="table table-hover">
	<tbody>
	<tr class="table-primary">
		<th>
			 Адрес
		</th>
		<th>
			 Режим работы
		</th>
		<th>
			 Телефон, e-mail
		</th>
	</tr>
	<tr>
		<td>
			 Единый расчетно-информационный центр (ЕРИЦ)<br>
			 <strong>г.Уссурийск, ул.Суханова, 55а, стр.1 </strong>
		</td>
		<td class="text-nowrap">
			 пн-пт: 08-18<br>
			 сб: 08-17<br>
			 вс: выходной<br>
			<br>
			 касса 1:<br>
			 пн-пт: 08:00-17:00<br>
			 перерыв: 12:00-13:00<br>
			 инкассация: 15:10-15:40<br>
			 сб, вс: выходной<br>
			 <br>
			 касса 2:<br>
			 пн-пт: 09:00-18:00<br>
			 перерыв: 13:00-14:00<br>
			 инкассация: 15:40-16:10<br>
			 сб, вс: выходной
		</td>
		<td>
			 (4234) 32-06-23<br>
 <a href="mailto:uss-sekretar@ussur.prim.dvec.ru">uss-sekretar@ussur.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			 Клиентский офис Черниговского районного участка <br>
 <strong>с.Черниговка, ул.Буденного, 3</strong>
		</td>
		<td>
			 пн-чт: 8-17<br>
			 перерыв: 12-13<br>
			 пт: 08-12
		</td>
		<td>
			 (42351) 2-77-16<br>
 <a href="mailto:cher-nach@ussur.prim.dvec.ru">cher-nach@ussur.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			Клиентский офис Михайловского районного участка<br>
		  <strong>с.Михайловка, ул.Красноармейская, 24</strong>
		</td>
		<td>
			 пн-чт: 8-17<br>
			 перерыв: 12-13<br>
			 пт: 08-12
		</td>
		<td>
			 (42346) 2-48-63<br>
		  <a href="mailto:mih-nach@ussur.prim.dvec.ru">mih-nach@ussur.prim.dvec.ru</a>
		</td>
	</tr>
	<!-- <tr>
		<td>
			 Пункт обслуживания клиентов Михайловского районного участка<br>
 <strong>пгт Новошахтинский, ул.Ленинская, 16 </strong>
		</td>
		<td>
			 пн-чт: 8-17<br>
			 перерыв: 12-13<br>
			 пт: 08-17
		</td>
		<td>
			 (42346) 2-63-91<br>
 <a href="mailto:nov-oprsn2@ussur.prim.dvec.ru">nov-oprsn2@ussur.prim.dvec.ru</a>
		</td>
	</tr> -->
	<tr>
		<td>
			 Хорольский районный участок<br>
 <strong>с.Хороль, ул.Ленинская, 88</strong>
		</td>
		<td>
			 пн-чт: 08-17<br>
			 перерыв: 12-13<br>
			 пт: 08-12
		</td>
		<td>
			 (42347) 2-37-26<br>
 <a href="mailto:hor-nach@ussur.prim.dvec.ru">hor-nach@ussur.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			 Пункт обслуживания клиентов Хорольского районного участка<br>
 <strong>с.Камень-Рыболов, ул.Лазо 23 (2 этаж)</strong>
		</td>
		<td>
			вт, чт: 09-17<br>
			перерыв: 12-13</td>
		<td>
			 (42349) 9-94-94<br>
 <a href="mailto:krib-oprsn1@ussur.prim.dvec.ru">krib-oprsn1@ussur.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			Покровский районный участок<br>
			<strong>с.Покровка, Октябрьская, 23 </strong>
 <!-- <br><span class="text-danger">
 В связи с аварийной ситуацией и и отсутствием электроэнергии в многоквартирном доме, 13 октября 2023 года Покровский районный участок Уссурийского отделения филиала ПАО "ДЭК" ДЭС не будет вести прием клиентов в офисе, расположенном по адресу с. Покровка ул. Октябрьская д.23 до 14 часов
</span> -->
		</td>
		<td>
			 пн-чт: 08-17<br>
			 перерыв: 12-13<br>
			 пт: 08-12<br>
		</td>
		<td>
			 (42344) 5-77-13<br>
 <a href="mailto:pokr-nach@ussur.prim.dvec.ru">pokr-nach@ussur.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			 Пункт обслуживания клиентов Покровского районного участка<br>
 <strong>п.Пограничный, ул.Кирова,7</strong>
		</td>
		<td>
			 пн-пт: 08-17<br>
			 перерыв: 12-13<br>
		</td>
		<td>
			 (42345) 21-0-02 <br>
 <a href="mailto:pokr-nach@ussur.prim.dvec.ru">pokr-nach@ussur.prim.dvec.ru</a>
		</td>
	</tr>
	</tbody>
	</table>
	<div style="height:25px">
	</div>
	 
</div>
<div class="spoiler folded mt-4 mb-0">
 <strong>Большекаменское отделение:</strong>
</div>
<div class="spoiler-text">
	<table class="table table-hover">
	<tbody>
	<tr class="table-primary">
		<th>
			 Адрес
		</th>
		<th>
			 Режим работы
		</th>
		<th>
			 Телефон, e-mail
		</th>
	</tr>
	<tr>
		<td>
			Единый расчетно-информационный центр (ЕРИЦ)<br>
			<strong>г.Большой Камень, ул. Южная, 55</strong>
			<br>
<button type="button" class="btn btn-primary text-nowrap mt-3" data-toggle="modal" data-target="#ModalZapis" onclick="step1('bka_yzh')">Запись в офис</button>
		</td>
		<td>
			пн-пт: 08-17</td>
		<td>
			(42335) 4-00-97<br>
			<a href="mailto:bk_secr@bk.prim.dvec.ru">bk_secr@bk.prim.dvec.ru</a>
		</td>
	</tr>
	</tbody>
	</table>
	<div style="height:25px">
	</div>
	 
</div>
<div class="spoiler folded mt-4 mb-0">
 <strong>Находкинское отделение:</strong>
</div>
<div class="spoiler-text">
	<table class="table table-hover">
	<tbody>
	<tr class="table-primary">
		<th>
			 Адрес
		</th>
		<th>
			 Режим работы
		</th>
		<th>
			 Телефон, e-mail
		</th>
	</tr>
	<tr>
		<td>
			Единый расчётно-информационный центр<br>
			<strong>г.Находка, ул.Портовая, 3</strong>
			<br>
<button type="button" class="btn btn-primary text-nowrap mt-3" data-toggle="modal" data-target="#ModalZapis" onclick="step1('des_nhk_eric')">Запись в офис</button>
<br><span class="text-danger">По техническим причинам оплата в кассе не принимается. Произвести оплату (безналичный расчет) можно в окнах очного обслуживания.</span>
		</td>
		<td>
			 пн-пт: 08-18<br>
			 сб: 09-17
        <br>
        <br>
        касса: пн-пт 08-17<br>
        перерыв: 12-13<br>
        инкассация: 16:30-17</td>
		<td>
			8 (800) 234-77-77
        <br>
        <a href="mailto:sekretar@nakhodka.prim.dvec.ru">sekretar@nakhodka.prim.dvec.ru</a></td>
	</tr>
	<tr>
		<td>
			 Клиентский офис<br>
 <strong>г.Партизанск, ул.Гоголевская, 8</strong>
		</td>
		<td>
			 пн-пт: 09-18<br>
 <br>
			 касса: пн-пт: 09-18<br>
			 перерыв: 13-14<br>
			 инкассация: 16:30-17
		</td>
		<td>
			 (42363) 6-98-15<br>
			 (42363) 6-98-21<br>
 <a href="mailto:cop1@partizan.prim.dvec.ru">cop1@partizan.prim.dvec.ru</a><br>
 <a href="mailto:cop2@partizan.prim.dvec.ru">cop2@partizan.prim.dvec.ru</a><br>
 <a href="mailto:cop4@partizan.prim.dvec.ru">cop4@partizan.prim.dvec.ru</a>
		</td>
	</tr>
	</tbody>
	</table>
	<div style="height:25px">
	</div>
	 
</div>
<div class="spoiler folded mt-4 mb-0">
 <strong>Арсеньевское отделение:</strong>
</div>
<div class="spoiler-text">
	<table class="table table-hover">
	<tbody>
	<tr class="table-primary">
		<th>
			 Адрес
		</th>
		<th>
			 Режим работы
		</th>
		<th>
			 Телефон, e-mail
		</th>
	</tr>
	<tr>
		<td>
			 Клиентский офис<br>
 <strong>г.Арсеньев, ул.Октябрьская, 15/1</strong>
		</td>
		<td class="text-nowrap">
			пн-пт: 08-17<br>
		перерыв: 12-13</td>
		<td>
			(42361) 3-55-98 
              <br>
          <a href="mailto:secretar@arsen.prim.dvec.ru">secretar@arsen.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			 Чугуевский районный участок<br>
 <strong>с.Чугуевка, ул.Комсомольская, 6</strong>
		</td>
		<td>
			 пн, чт: 08-17<br>
			 перерыв: 12-13
		</td>
		<td>(42361) 3-55-98 <br>		  <a href="mailto:secretar@arsen.prim.dvec.ru">secretar@arsen.prim.dvec.ru</a></td>
	  </tr>
	</tbody>
	</table>
	<div style="height:25px">
	</div>
	 
</div>
<div class="spoiler folded mt-4 mb-0">
 <strong>Кавалеровское отделение:</strong>
</div>
<div class="spoiler-text">
	<table class="table table-hover">
	<tbody>
	<tr class="table-primary">
		<th>
			 Адрес
		</th>
		<th>
			 Режим работы
		</th>
		<th>
			 Телефон, e-mail
		</th>
	</tr>
	<tr>
		<td>
			 Клиентский офис<br>
 <strong>п.Кавалерово, ул.Арсеньева, 96</strong>
		</td>
		<td class="text-nowrap">
			 пн-чт: 08-17<br>
			 перерыв: 12-13<br>
			 пт: 08-12
		</td>
		<td>
			 (42375) 9-14-79<br>
			 (42375) 9-25-67<br>
			 (42375) 9-27-17 (ф)<br>
 <a href="mailto:sekr@kavaler.prim.dvec.ru">sekr@kavaler.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			 Ольгинский районный участок<br>
 <strong>п.Ольга, ул.Ленинская, 5</strong>
		</td>
		<td>
			 пн-чт: 08-17<br>
			 перерыв: 12-13<br>
			 пт: 08-12
		</td>
		<td>
			 (42376) 9-11-94 (ф)<br>
 <a href="mailto:olga@prim.dvec.ru">olga@prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			 Дальнегорский районный участок<br>
 <strong>г.Дальнегорск, пр-т 50 лет Октября, 119</strong></td>
		<td>
			 пн-чт: 08-17<br>
			 перерыв: 12-13<br>
			 пт: 08-12
		</td>
		<td>
			 (42373) 2-70-03<br>
			 (42373) 2-75-75<br>
 <a href="mailto:k_abon_d@kavaler.prim.dvec.ru">k_abon_d@kavaler.prim.dvec.ru</a>
		</td>
	</tr>
	</tbody>
	</table>
	<div style="height:25px">
	</div>
	 
</div>
<div class="spoiler folded mt-4 mb-0">
 <strong>Дальнереченское отделение:</strong>
</div>
<div class="spoiler-text">
	<table class="table table-hover">
	<tbody>
	<tr class="table-primary">
		<th>
			 Адрес
		</th>
		<th>
			 Режим работы
		</th>
		<th>
			 Телефон, e-mail
		</th>
	</tr>
	<tr>
		<td>
			 Клиентский офис<br>
 <strong>г.Дальнереченск, ул. Героев Даманского, д. 4А</strong>
		</td>
		<td class="text-nowrap">
			 пн-пт: 08-17<br>
	    перерыв: 12-13</td>
		<td>
			 (42356) 3-30-00<br>
			 (42356) 3-21-91
		</td>
	</tr>
	<tr>
		<td>

			 Пожарский районный участок<br>
 <strong>пгт Лучегорск, ул.Микрорайон 1-й, 24г</strong>
		</td>
		<td>
			 пн-пт: 08-17<br>
			 перерыв: 12-13<br>
		</td>
		<td>
			 (42357) 3-76-47<br>
			 (42357) 3-92-60<br>
 <a href="mailto:ps2@dalner.prim.dvec.ru">ps2@dalner.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			 Пункт обслуживания клиентов<br>
			<strong>с.Рощино, ул.Энергетиков, 2</strong>
		</td>
		<td>
			 пн-чт: 08-17<br>
			 перерыв: 12-13<br>
			 пт: 08-12
		</td>
		<td>
			 (42359) 2-38-87<br>
 <a href="mailto:ps2@dalner.prim.dvec.ru">ps2@dalner.prim.dvec.ru</a>
		</td>
	</tr>
	</tbody>
	</table>
	<div style="height:25px">
	</div>
	 
</div>
<div class="spoiler folded mt-4 mb-0">
 <strong>Лесозаводское отделение:</strong>
</div>
<div class="spoiler-text">
	<table class="table table-hover">
	<tbody>
	<tr class="table-primary">
		<th>
			 Адрес
		</th>
		<th>
			 Режим работы
		</th>
		<th>
			 Телефон, e-mail
		</th>
	</tr>
	<tr>
		<td>
			 Пункт обслуживания клиентов<br>
 <strong>г.Лесозаводск, ул.Калининская, 2А</strong>
		</td>
		<td>
			 пн-пт: 08-17<br>
	    перерыв: 12-13</td>
		<td>
			 (42355) 21-1-06
		</td>
	</tr>
	<tr>
		<td>
			 Кировский районный участок<br>
			<strong>пгт Кировский, ул.Ленинская, 28а</strong>
		</td>
		<td>
			 пн-пт: 08-17<br>
			 перерыв: 12-13
		</td>
		<td>
			 (42354) 2-21-61<br>
 <a href="mailto:kirov8@lesozav.prim.dvec.ru">kirov8@lesozav.prim.dvec.ru</a>
		</td>
	</tr>
	<tr>
		<td>
			 Спасский районный участок<br>
 <strong>г.Спасск-Дальний, ул.Борисова, 22</strong>
		</td>
		<td>
			 пн-пт: 08-17<br>
			 перерыв: 12-13
		</td>
		<td>
			 (42352) 2-12-42<br>
			 (42352) 2-36-66<br>
 <a href="mailto:psl2@lesozav.prim.dvec.ru">psl2@lesozav.prim.dvec.ru</a>
		</td>
	</tr>
	</tbody>

  </table>
	<div style="height:25px">
	</div>
	 
</div>
<p style="margin-top:3rem">
	 Консультацию по любым вопросам, касающимся услуг, отраженных в квитанциях, клиенты компании могут получить не только в офисах, но также:
</p>
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