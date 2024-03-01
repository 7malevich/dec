<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оплата");
?><div class="alert alert-info" role="alert" style="margin-bottom:25px">
	<b>Разъяснение по оплате пени</b><br>
 <br>
	 Обращаем внимание, если Вам начислена пеня, то оплачивать её необходимо отдельным платежом, в назначении которого указать, что это оплата пени. В противном случае оплаченная вами пеня будет зачислена на ваш лицевой счет как оплата текущего потребления коммунальной услуги, а пеня останется не погашенной.
</div>
<div class="alert alert-warning" role="alert" style="margin-bottom:25px">
	 Обратите внимание! Оплата выставленных счетов должна производиться ежемесячно <a onclick="return false" href="/PleaseEnableJavascript.html" data-toggle="modal" data-target="#Modal_zhk_st155">до&nbsp;10 числа месяца</a>, следующего за расчетным.
</div>
<div class="modal fade" id="Modal_zhk_st155" tabindex="-2" role="dialog">
	 <!-- модальное ст.155 ЖК РФ-->
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title my-2">Жилищный Кодекс Российской Федерации, Статья 155. Внесение платы за жилое помещение и коммунальные услуги:</h3>
			</div>
			<div class="modal-body">
				<p class="mb-0">
					1. Плата за жилое помещение и коммунальные услуги вносится ежемесячно до десятого числа месяца, следующего за истекшим месяцем, если иной срок не установлен договором управления многоквартирным домом либо решением общего собрания членов товарищества собственников жилья, жилищного кооператива или иного специализированного потребительского кооператива […]
				</p>
			</div>
			<div class="modal-footer">
 <button type="button" class="btn btn-primary" data-dismiss="modal">ОК</button>
			</div>
		</div>
	</div>
</div>
<p>
	В платежных документах уже проставлены расчетные суммы платежей за оплачиваемый период. Начисления производятся в соответствии с <a href="../tariffs/">действующими тарифами</a>. Съём показаний счетчиков и передачу в ПАО «ДЭК» клиенты могут <a href="../pokazaniya/sposoby/">выполнять самостоятельно</a>.
</p>
<p>
	 Необходимо помнить: нарушение сроков оплаты приводит <a href="../contractual_relations/debts_repayment/">к формированию задолженности</a>. ПАО «ДЭК» рекомендует потребителям своевременно и в полном объеме оплачивать потребленную электроэнергию, а также хранить оплаченные счета в течение 3-х лет.
</p>
<p>
	 Обращаем внимание: при совершении оплаты посредством кредитных и прочих организаций (банки, ФГУП «Почта России» и пр.) зачисление денежных средств на лицевой счет потребителя осуществляется в срок от 1 до 3 календарных дней.
</p>
<p>
	Для минимизации ошибок и экономии времени клиента при расчетах рекомендуется <a onclick="return false" href="/PleaseEnableJavascript.html" data-toggle="modal" data-target="#exampleModalCenter">использовать QR-код или штрих-код</a>, который размещен на платежном документе.
</p>
<div class="alert alert-success mb-4">
	ПАО «ДЭК» по-прежнему рекомендует клиентам по возможности воздержаться от визитов в офисы компании и решать все вопросы ЖКХ дистанционно, с помощью электронных сервисов. <b>Если же в вашем окружении есть пожилые родственники и знакомые, убедительно просим позаботиться об их безопасности – рассказать о современных технологиях и помочь в них разобраться.</b>
</div>
<p>
	Мы стараемся максимально облегчить клиентам процесс оплаты. На территории обслуживания Дальневосточной энергетической компании клиенты могут произвести оплату следующими способами:
</p>
 <!-- Модальное QR Сбер -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title my-2" id="exampleModalLongTitle">Пользуйтесь считывающим устройством!</h3>
			</div>
			<div class="modal-body">
				<p>
					Использование штрих-кода или QR-кода, которые<a href="../receipts/gid.php"> размещены на платежном документе</a>, не только избавляют абонента от необходимости ручного ввода данных, но и минимизируют ошибки. Современные системы мгновенно идентифицируют плательщика по коду, ему остается только проверить данные и, если нужно, скорректировать их.
				</p>
				<p class="mb-0">
					При оплате <strong>без</strong> использования штрих-кода клиенту необходимо самостоятельно вводить данные (номер лицевого счета, адрес, фамилию абонента), выбирать период оплаты и вводить сумму платежа.
				</p>
			</div>
			<div class="modal-footer">
 <button type="button" class="btn btn-primary" data-dismiss="modal">ОК</button>
			</div>
		</div>
	</div>
</div>
 <a id="epd" name="epd"></a>
<div class="spoiler folded">
	<h2 class="sp-hdr">Оплата Единых платежных документов (электроэнергия и прочие ЖКУ):<br>
 <small>(нажмите, чтобы раскрыть)</small></h2>
</div>
<div class="spoiler-text">
	<p>
		1. <a href="../cabinet/">В сервисе «Личный кабинет клиента Единого расчетно-информационного центра»</a> (на сайте и в мобильном приложении)
	</p>
	<p>
		2. <a href="https://online.sberbank.ru/" target="_blank">В «Сбербанк-онлайн»</a>
	</p>
	<p>
		3. <a href="https://pay.kvartplata.ru/pk/pay.action?srv=140931" target="_blank">В системе «Город» (без регистрации)</a> и мобильном приложении этой системы «Квартплата+»
	</p>
	<p>
		4. Через платежные терминалы и банкоматы, личные кабинеты на официальных сайтах и мобильные приложения, или в офисах кредитно-банковских учреждений:<br>
	</p>
	<ul class="ml-4">
		<li><a onclick="return false" href="/PleaseEnableJavascript.html" data-toggle="modal" data-target="#exampleModalCenter">Сбербанк России</a></li>
		<li>Азиатско-Тихоокеанский банк </li>
		<li>Россельхозбанк </li>
		<li>Дальневосточный Банк</li>
		<li>ВТБ </li>
		<li>Восточный банк</li>
		<li>ФК Открытие</li>
		<li>Почта банк</li>
		<li>Совкомбанк</li>
		<li>МТС-банк, отделение № 22 в г. Тында </li>
		<li>Роял Кредит Банк </li>
		<li>Солид Банк</li>
	</ul>
	<p>
		6. Оплачивать счета также всегда можно в <a href="../service/">клиентских офисах ДЭК</a>, отделениях <a href="https://www.pochta.ru/offices" target="_blank">Почты России</a>.
	</p>
	<p>
		Платежи всеми вышеперечисленными способами принимаются без комиссии. В иных случаях размер комиссии необходимо уточнять индивидуально при проведении оплаты.
	</p>
	<p>
		Реквизиты для оплаты банковскими переводами (безналичный расчет) указаны в квитанции.
	</p>
	<div style="height:40px">
	</div>
</div>
<div class="spoiler folded">
	<h2 class="sp-hdr">Оплата Единых платежных документов (электроэнергия, прочие ЖКУ и теплоэнергия - услуги АО «ДГК» в г.&nbsp;Благовещенск, с.&nbsp;Чигири и пгт&nbsp;Прогресс, п.&nbsp;Новорайчихинск)</h2>
</div>
<div class="spoiler-text">
	<p>Перечень банковских платежных агентов, через которых можно осуществлять оплату без&nbsp;комиссии:</p>
	<div class="row row-cols-1 row-cols-md-2">
		<div class="col mb-4">
			<div class="card bg-light">
				<div class="card-body">
					<h4 class="card-title">Платежные агенты с оплатой без&nbsp;комиссии:</h4>
					<div class="py-3 border-top">
						<a href="https://www.vtb.ru/" target="_blank">Банк ВТБ</a>
					</div>
					<div class="py-3 border-top">
						<a href="https://www.tinkoff.ru/" target="_blank">Тинькофф Банк</a>
					</div>
					<div class="py-3 border-top">
						<a href="https://sovcombank.ru/" target="_blank">Совкомбанк</a>
					</div>
					<div class="py-3 border-top">
						<a href="https://alfabank.ru/" target="_blank">Альфа-Банк</a>
					</div>
					<div class="pt-3 border-top">
						<a href="https://www.open.ru/" target="_blank">Банк «Открытие»</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p>
		Дифференцированное взимание комиссии (комиссия только за тепло, без&nbsp;комиссии - за электроэнергию и прочие виды ЖКУ):
	</p>
	<div class="row row-cols-1 row-cols-md-2">
		<div class="col mb-4">
			<div class="card bg-light h-100">
				<div class="card-body">
					<h4 class="card-title">Сервисы ПАО «ДЭК»:</h4>
					<div class="py-4 border-top">
 <a href="/amursbyt/private_clients/cabinet/">Личный кабинет</a> клиента Единого расчётно-информационного центра на сайте ПАО «ДЭК»
					</div>
					<div class="py-4 border-top">
 <a href="/amursbyt/private_clients/cabinet/">Мобильное приложение</a> «Личный кабинет ДЭК ЕРИЦ (Амурская область)»
					</div>
					<div class="py-4 border-top">
 <a href="/amursbyt/private_clients/service/">Кассы в клиентских офисах</a> ПАО «ДЭК»
					</div>
				</div>
			</div>
		</div>
		<div class="col mb-4">
			<div class="card bg-light h-100">
				<div class="card-body">
					<h4 class="card-title">Банки:</h4>
					<div>
						<div class="py-3 border-top">
							«Азиатско-Тихоокеанский Банк» (АО)
						</div>
						<div class="py-3 border-top">
							АО «Дальневосточный банк»
						</div>
						<div class="py-3 border-top">
							АО «Почта Банк»
						</div>
						<div class="py-3 border-top">
							АО «Россельхозбанк»
						</div>
						<div class="py-3 border-top">
							АО «Роял Кредит банк»
						</div>
						<div class="pt-3 border-top">
							АО «Солид банк»
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col mb-4">
			<div class="card bg-light">
				<div class="card-body">
					<h4 class="card-title">Платежные агенты:</h4>
					<div class="py-3 border-top">
 <a href="https://kvartplata.ru/catalog/kommunalnye-uslugi-i-zhkkh/kvartplata-uk-tszh/140931" target="_blank">Система «Город»</a> (оплата на сайте и в мобильном приложении «Квартплата+»)
					</div>
					<div class="py-3 border-top">
 <a href="https://www.pochta.ru/offices" target="_blank">АО «Почта России»</a> (оплата в отделениях почты)
					</div>
					<div class="pt-3 border-top">
						 ООО «Платсервис» (платежные терминалы)
					</div>
				</div>
			</div>
		</div>
	</div>
	<p>
		В отделениях других банков размер комиссии необходимо уточнять индивидуально при проведении оплаты.
	</p>
	<p>
		Реквизиты для оплаты банковскими переводами (безналичный расчет) указаны в квитанции.
	</p>
	<div style="height:40px">
	</div>
</div>
<div class="spoiler folded">
	<h2 class="sp-hdr">Оплата капитального ремонта:</h2>
</div>
<div class="spoiler-text">
	<p>
		Оплата взносов на капитальный ремонт осуществляется по отдельному штрих-коду и реквизитам, размещенным в нижней части единого платежного документа ПАО «ДЭК».
	</p>
	<p>
		1. Через платежные терминалы, банкоматы, онлайн-банкинг (личные кабинеты на официальных сайтах и мобильные приложения) или в офисах следующих платежных агентов, без комиссии:
	</p>
	<ul class="ml-4">
		<li><a onclick="return false" href="/PleaseEnableJavascript.html" data-toggle="modal" data-target="#exampleModalCenter">Сбербанк России</a></li>
		<li>Азиатско-Тихоокеанский Банк</li>
		<li>Россельхозбанк </li>
		<li>Платсервис</li>
	</ul>
	<p>
		2. <a href="../service/">В клиентских офисах ПАО «ДЭК»</a>, без комиссии
	</p>
	<p>
		3. <a href="https://www.pochta.ru/offices" target="_blank">В отделениях Почты России</a>, комиссия 15 руб.
	</p>
	<p>
		4. В личном кабинете <a href="http://fkramur.ru/" target="_blank">на сайте Фонда капитального ремонта</a>, комиссия 1,5%, min 15 руб.
	</p>
</div>
<div style="height:25px">
	<a id="faq" name="faq"></a>
</div>
<h2 style="color:#f27026">Вопросы и ответы:</h2>
<div class="spoiler folded">
	<h4 class="sp-hdr">Как платить по QR-коду через Сбербанк-Онлайн?</h4>
</div>
<div class="spoiler-text">
	<p>
		1. Откройте мобильное приложение Сбербанк-Онлайн (если нет, то скачайте из AppStore или GooglePlay).
	</p>
	<div class="m-4 text-center">
		<img alt="Откройте приложение Сбербанк-Онлайн" src="/private_clients/payment/sber_1.jpg">
	</div>
	<p>
		2. Перейти в раздел «<strong>Платежи»</strong>.
	</p>
	<p>
		3. Выберите <strong>«Оплата по QR или штрих-коду»</strong>
	</p>
	<div class="m-4 text-center">
		<img alt="Выберите Оплату по QR" src="/private_clients/payment/sber_2.jpg">
	</div>
	<p>
		или нажмите на пиктограмму в верхнем правом углу экрана.
	</p>
	<div class="m-4 text-center">
		<img alt="или нажмите на пиктограмму" src="/private_clients/payment/sber_3.jpg">
	</div>
	<p>
		4. Наведите камеру на QR или штрих-код Единого платежного документа (ЕПД).
	</p>
	<div class="m-4 text-center">
		<img alt="Наведите камеру на QR-код" src="/private_clients/payment/sber_4.jpg">
	</div>
	<p>
		5. Выберите карту списания и нажмите «Продолжить».
	</p>
	<div class="m-4 text-center">
		<img alt="Выберите карту списания" src="/private_clients/payment/sber_5.jpg">
	</div>
	<p>
		 6. Сверьте реквизиты получателя и убедитесь в правильности Ваших данных.
	</p>
	<div class="m-4 text-center">
		<img alt="Сверьте реквизиты получателя" src="/private_clients/payment/sber_6.jpg">
	</div>
	<p>
		7. Нажмите продолжить и далее Подтвердить. Придёт СМС с номера 900, с информацией о платеже.
	</p>
	<p>
		8. Сохраните чек оплаты (можно сделать скриншот или отправить по почте). А можно просто пропустить, чек оплаты всё равно потом будет храниться в истории операций Сбербанк-Онлайн.
	</p>
	<div class="m-4 text-center">
		<img alt="Сохранить или отправить чек" src="/private_clients/payment/sber_7.jpg">
	</div>
</div>
<div style="height:25px">
</div>
<p>
	См. также:
</p>
<ul>
  <li><a href="files/plat_subag_amur_202311.pdf" class="linkPDF" target="_blank">Перечень платежных субагентов ПАО «ДЭК» на территории Амурской области</a></li>
	<li><a href="../contractual_relations/order_charges/">Порядок начислений, оплаты и перерасчётов</a></li>
	<li><a href="../contractual_relations/exempts/">Льготникам</a></li>
	<li><a href="../contractual_relations/debts_repayment/">Погашение задолженности</a></li>
	<li><a href="../contractual_relations/restrictions/">Основания для введения ограничений</a></li>
</ul>

<div style="margin:50px 0 25px 0">
  <iframe width="100%" height="432" src="https://www.youtube.com/embed/w0Y6a9kPPIo?rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>