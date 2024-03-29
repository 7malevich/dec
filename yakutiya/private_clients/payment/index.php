<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оплата");
?><!-- <div class="alert alert-warning mb-3 d-flex p-3 justify-content-left align-items-center" role="alert">
	<span style="padding-right: 1rem;opacity: 0.3;font-size:4rem;line-height:3.3rem">⚠</span>
	<span>Уважаемые клиенты! Уведомляем вас, что с 1 июля во всех офисах филиала ПАО «ДЭК» «Якутскэнергосбыт» временно прекращен прием платежей за услуги Фонда капитального ремонта (НКО ФКР МКД в РС(Я).
		Со способами онлайн оплаты вы можете ознакомиться на сайте Фонда <a href="https://fondkr.ru/" target="_blank">fondkr.ru</a> в разделе «Собственникам» / «Способы оплат». 
</span>
</div> -->

<div class="alert alert-info mb-4" role="alert"><b>Разъяснение по оплате пени</b><br><br>
  Обращаем внимание, если Вам начислена пеня, то оплачивать её необходимо отдельным платежом, в назначении которого указать, что это оплата пени. 
  В противном случае оплаченная вами пеня будет зачислена на ваш лицевой счет как оплата текущего потребления коммунальной  услуги, а пеня останется не погашенной.
</div>

<div class="alert alert-warning" role="alert" style="margin-bottom:25px">
  Обратите внимание! Оплата выставленных счетов должна производиться ежемесячно <a onclick="return false" href="/PleaseEnableJavascript.html" data-toggle="modal" data-target="#Modal_zhk_st155">до&nbsp;10 числа месяца</a>, следующего за расчетным.
</div>
<div class="modal fade" id="Modal_zhk_st155" tabindex="-2" role="dialog"> <!-- модальное ст.155 ЖК РФ-->
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title my-2">Жилищный Кодекс Российской Федерации, Статья 155. Внесение платы за жилое помещение и коммунальные услуги:</h3>
      </div>
      <div class="modal-body">
        <p class="mb-0">1. Плата за жилое помещение и коммунальные услуги вносится ежемесячно до десятого числа месяца, следующего за истекшим месяцем, если иной срок не установлен договором управления многоквартирным домом либо решением общего собрания членов товарищества собственников жилья, жилищного кооператива или иного специализированного потребительского кооператива […]</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">ОК</button>
      </div>
    </div>
  </div>
</div>

<p>В  платежных документах уже проставлены расчетные суммы платежей за оплачиваемый  период. Начисления производятся в соответствии с&nbsp;<a href="../tariffs/">действующими тарифами</a>. Съём показаний счетчиков и передачу в ПАО «ДЭК»  клиенты могут&nbsp;<a href="../pokazaniya/">выполнять самостоятельно</a>. </p>
<p> Необходимо помнить: нарушение сроков  оплаты приводит <a href="../contractual_relations/debts_repayment/">к формированию  задолженности</a>. ПАО «ДЭК» рекомендует потребителям своевременно и в  полном объеме оплачивать потребленную электроэнергию, а также хранить  оплаченные счета в течение 3-х лет.</p>
<p> Обращаем  внимание: при совершении оплаты посредством кредитных и прочих организаций  (банки, ФГУП «Почта России» и пр.) зачисление денежных средств на лицевой счет  потребителя осуществляется в срок от 1 до 3 календарных дней. </p>
<p>Для минимизации ошибок и экономии времени клиента при расчетах рекомендуется <a onclick="return false" href="/PleaseEnableJavascript.html" data-toggle="modal" data-target="#exampleModalCenter">использовать QR-код или штрих-код</a>, который размещен на платежном документе.</p>
<div class="alert alert-success mb-4">ПАО «ДЭК» по-прежнему рекомендует клиентам по возможности воздержаться от   визитов в офисы компании и решать все вопросы ЖКХ дистанционно, с помощью электронных сервисов. <b>Если же в вашем окружении есть пожилые родственники и знакомые, убедительно просим позаботиться об их безопасности – рассказать о современных технологиях и помочь в них разобраться.</b></div>
<h3>Мы стараемся максимально облегчить клиентам процесс оплаты. Клиенты могут произвести оплату <u>онлайн</u> следующими способами:</h3>
<p>1. <a href="../cabinet/">Через личный кабинет на сайте ПАО «ДЭК» </a> (комиссия не взимается)</p>
<p>3. В <a onclick="return false" href="/PleaseEnableJavascript.html" data-toggle="modal" data-target="#exampleModalCenter">Сбербанке России</a> и в <a href="https://online.sberbank.ru/" target="_blank">системе «Сбербанк-онлайн»</a> (комиссия 1%)<br>
</p>
<p>4. Через сервис «Телекард» и банкоматы ГПБ «Дальневосточный» (платежи, осуществленные  через данный сервис, облагаются комиссией с плательщика в момент совершения  платежа, согласно тарифов, установленных банком)</p>
<p>5. Через Интернет-банки: «Росбанк», «ВТБ»,       «Россельхозбанк» «Кукуруза (Евросеть)», «Золотая корона», «Все платежи», «Paystore», «e-Pos» и др. сервисы, подключенные к системе «CyberPlat».</p>
<p>6. Через мобильное приложение «Квартплата+».</p>
<p><em>Платежи, осуществленные  через  сервисы п.3-п.6, облагаются комиссией с плательщика в момент совершения  платежа, согласно тарифов, установленных банками.</em></p>
<p>7. В отделениях почтовой связи АО «Почта России». В момент совершения платежа взимается комиссионное вознаграждение с Плательщиков, согласно установленных тарифов. 
  <br>В случае непоступления денежных средств на лицевой счет плательщик может обратиться с заявлением на выплату возмещения:</p>
  <ul><li>через сайт АО «Почта России» <a href="https://www.pochta.ru/" target="_blank">www.pochta.ru</a></li>
    <li>в отделение почтовой связи с документом, удостоверяющим личность, и копией квитанции об оказании услуг АО «Почта России». </li>
  </ul>


<p><!-- Modal --></p>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Пользуйтесь считывающим устройством!</h3>
      </div>
      <div class="modal-body">
        <p>Использование штрих-кода или QR-кода, которые размещены на платежном документе, не только избавляют абонента от необходимости ручного ввода данных, 
          но и минимизируют ошибки. Современные системы мгновенно идентифицируют  плательщика по коду, ему остается только проверить данные и, 
          если нужно, скорректировать их. </p>
        <p>При оплате <strong>без</strong> использования штрих-кода клиенту необходимо самостоятельно вводить данные (номер лицевого счета, адрес, фамилию абонента), выбирать период оплаты и вводить сумму платежа. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">ОК</button>
      </div>
    </div>
  </div>
</div>

<div class="alert alert-info" role="alert" style="margin-top:35px;margin-bottom:35px"><strong>Напоминаем:</strong> при оплате электроэнергии необходимо указать   номер лицевого счета и точный адрес. Показания прибора учета, а также   сумма к оплате указываются в счете-квитанции, которая ежемесячно   направляется абоненту. 
</div>

<h3>Очные способы оплаты (пункты приёма платежей): </h3>
<ul>
  <li><a href="../service/">В офисах «Якутскэнергосбыта»</a></li>
</ul>

<div class="alert alert-danger" role="alert" style="margin-bottom:25px">Уважаемые клиенты! В соответствии с требованиями Федерального Закона от   07.08.2001 № 115-ФЗ «О противодействии легализации (отмыванию) доходов,   полученных преступным путем, и финансированию терроризма», при оплате в   кассу 15 000 (пятнадцати тысяч) рублей и более, клиенту необходимо   предъявить паспорт. 
</div>

<div class="alert alert-info" role="alert">
В случае возникновения вопросов по оплате электроэнергии следует обращаться в любой пункт приема платежей Якутскэнергосбыта или по телефону Контакт-центра 8-800-234-77-77.
</div>


<div style="height:25px"><a id="faq" name="faq"></a></div>
<h2>Вопросы и ответы:</h2>

<div class="spoiler folded">
  <h4 class="sp-hdr">Как платить по QR-коду через Сбербанк-Онлайн?</h4>
</div>
<div class="spoiler-text">
	<p>1. Откройте мобильное приложение Сбербанк-Онлайн (если нет, то скачайте из AppStore или GooglePlay).</p>
    	<div class="m-4 text-center"><img src="/private_clients/payment/sber_1.jpg" alt="Откройте приложение Сбербанк-Онлайн"></div>
	<p>2. Перейти в раздел «<strong>Платежи»</strong>.</p>
	<p>3. Выберите <strong>«Оплата по QR или штрих-коду»</strong></p>
    	<div class="m-4 text-center"><img src="/private_clients/payment/sber_2.jpg" alt="Выберите Оплату по QR"></div>
	<p>или нажмите на пиктограмму в  верхнем правом углу экрана.</p>
    	<div class="m-4 text-center"><img src="/private_clients/payment/sber_3.jpg" alt="или нажмите на пиктограмму"></div>
  <p>4. Наведите камеру на QR или  штрих-код Единого платежного документа (ЕПД).</p>
  	<div class="m-4 text-center"><img src="/private_clients/payment/sber_4.jpg" alt="Наведите камеру на QR-код"></div>
  <p>5. Выберите карту списания и  нажмите «Продолжить».</p>
  	<div class="m-4 text-center"><img src="/private_clients/payment/sber_5.jpg" alt="Выберите карту списания"></div>
  <p> 6. Сверьте реквизиты получателя и убедитесь в правильности Ваших данных.</p>
  	<div class="m-4 text-center"><img src="/private_clients/payment/sber_6.jpg" alt="Сверьте реквизиты получателя"></div>
  <p>7. Нажмите продолжить и далее  Подтвердить. Придёт СМС с номера 900, с информацией о платеже.</p>
  <p>8. Сохраните чек оплаты (можно  сделать скриншот или отправить по почте). А можно просто пропустить, чек оплаты  всё равно потом будет храниться в истории операций Сбербанк-Онлайн.</p>
  	<div class="m-4 text-center"><img src="/private_clients/payment/sber_7.jpg" alt="Сохранить или отправить чек"></div>
</div>

<div style="height:15px"></div>
<p>См. также:</p>
<ul>
  <li><a href="files/plat_subag_yakutiya_202311.pdf" class="linkPDF" target="_blank">Перечень платежных субагентов ПАО «ДЭК» на территории Республики Саха (Якутия)</a></li>
</ul>

<div style="margin:50px 0 25px 0">
  <iframe width="100%" height="432" src="https://www.youtube.com/embed/w0Y6a9kPPIo?rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>