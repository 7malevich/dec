<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-приёмная");
?><?$APPLICATION->IncludeComponent("bitrix:form.result.new", ".default", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"EDIT_URL" => "",	// Страница редактирования результата
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"LIST_URL" => "",	// Страница со списком результатов
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SUCCESS_URL" => "ok.php",	// Страница с сообщением об успешной отправке
		"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
		"VARIABLE_ALIASES" => array(
			"RESULT_ID" => "RESULT_ID",
			"WEB_FORM_ID" => "WEB_FORM_ID",
		),
		"WEB_FORM_ID" => "55",	// ID веб-формы
	),
	false
);?>

<div style="height:1px; clear:both"></div>
<div class="spoiler folded"><h3 class="sp-hdr">Порядок работы с обращениями граждан в ПАО «ДЭК»:</h3></div>
<div class="spoiler-text">
<p>Порядок работы с обращениями граждан в ПАО «ДЭК» основывается на следующие законодательные акты:</p>
<ul type="disc">
  <li>Жилищный Кодекс Российской Федерации.</li>
  <li>Гражданский Кодекс Российской Федерации.</li>
  <li>Федеральный закон от 02.05.2006 № 59-ФЗ «О порядке рассмотрения обращений граждан Российской       Федерации».</li>
  <li>Правила предоставления коммунальных услуг собственникам и пользователям помещений в многоквартирных домах и жилых домов, утвержденные постановлением Правительства Российской Федерации от 06.05.2011 № 354.</li>
  <li>Федеральный закон от 27.07.2006 № 152-ФЗ «О персональных данных».</li>
</ul>
<p>Указанные  законодательные акты не распространяют свое действие на:</p>
<ul type="disc">
  <li>обращения, являющиеся заявками частных клиентов на оказание услуг, связанных с энергосбытовой деятельностью ПАО «ДЭК» и дополнительными услугами, оказываемыми       Обществом;</li>
  <li>обращения, связанные с экономической безопасностью ПАО «ДЭК»;</li>
  <li>обращения, поступившие через социальные сети.</li>
</ul>
<p><strong>Обращением является</strong> устное или письменное,  а также направленное в форме электронного документа обращение (заявление,  жалоба, претензия и т.п.) клиента, поступившее:</p>
<ul>
  <li>в ходе очного посещения клиентского офиса ПАО «ДЭК»;<br>
  </li>
  <li>по официальному юридическому адресу ПАО «ДЭК»  (исполнительного аппарата управления, филиалов, отделений, участков, офисов), АО  «ЭСК РусГидро», ПАО «РусГидро»;<br>
  </li>
  <li>по факсимильной связи ПАО «ДЭК» (исполнительного аппарата управления,  филиалов, отделений, участков, офисов), АО «ЭСК РусГидро», ПАО «РусГидро»;<br>
  </li>
  <li>на официальный адрес электронной почты ПАО «ДЭК» (исполнительного  аппарата управления, филиалов, отделений, участков, офисов), АО «ЭСК РусГидро»,  ПАО «РусГидро»;<br>
  </li>
  <li>на электронную почту руководителей ПАО «ДЭК», структурных  подразделений Общества, АО «ЭСК РусГидро», ПАО «РусГидро»;<br>
  </li>
  <li>на «Линию доверия» ПАО «РусГидро»;<br>
  </li>
  <li>в ходе личного приема руководителей ПАО «ДЭК» (филиалов,  отделений, участков, офисов), АО «ЭСК РусГидро», ПАО «РусГидро»;<br>
  </li>
  <li>через систему заочного обслуживания клиентов ПАО  «ДЭК» посредством использования Интернет-сайта, Личного кабинета, мобильного  приложения, Виртуальной приемной.на интерактивные сервисы ПАО «ДЭК», АО «ЭСК  РусГидро», ПАО «РусГидро»;<br>
  </li>
  <li>иными способами доставки.</li>
</ul>
<p><strong>Клиент имеет право: </strong></p>
<ul>
  <li>обратиться лично, а также направить  индивидуальное либо коллективное обращение;</li>
  <li>представлять дополнительные документы  и материалы либо обращаться с просьбой об их истребовании, в том числе в  электронной форме.</li>
  <li>знакомиться с документами и  материалами, касающимися рассмотрения обращения, если это не затрагивает права,  свободы и законные интересы других лиц и если в указанных документах и  материалах не содержатся сведения, составляющие государственную или иную  охраняемую Федеральным законом тайну;</li>
  <li>получать письменный ответ по существу  поставленных в обращении вопросов;</li>
  <li>обращаться с жалобой на принятое по  обращению решение или на действие (бездействие) должностных лиц ПАО «ДЭК»;</li>
  <li>обращаться с заявлением о прекращении  рассмотрения обращения.</li>
  <li>сообщать  информацию, касающуюся:
    <ul>
      <li>взаимоотношений ПАО «ДЭК» и клиентов Общества;<br>
        </li>
      <li>повреждений (хищений) оборудования, приборов учета и иных материальных ценностей ПАО «ДЭК»;<br>
        </li>
      <li>незаконного осуществления монтажных и ремонтных работ измерительных комплексов  электроэнергии;<br>
        </li>
      <li>несанкционированное  подключение к электрическим и тепловым сетям;<br>
        </li>
      <li>качества предоставляемых  коммунальных услуг;<br>
        </li>
      <li>неправомерного поведения персонала ПАО «ДЭК» и др.</li>
    </ul>
  </li>
  <li>получать разъяснения по вопросам энергоснабжения:
    <ul>
      <li>заключению договоров энергоснабжения;<br>
      </li>
      <li>нормативам потребления коммунальных услуг, произведенным расчетам за потребленные услуги,  перерасчетам;<br>
      </li>
      <li>реструктуризации задолженности;<br>
      </li>
      <li>организации расчетного учета потребленной  услуги (установке, замене, поверке   приборов учета);<br>
        </li>
      <li>съему показаний индивидуальных приборов учета  и др.</li>
    </ul>
  </li>
</ul>
<p><strong>Порядок рассмотрения письменных обращений,  поступивших в адрес ПАО «ДЭК»</strong></p>
<p>  Письменные обращения клиентов, поступившие в  ПАО «ДЭК», посредством почтовой корреспонденции, телеграфом, факсом, по  официальному адресу электронной почты, указанному на официальных бланках ПАО  «ДЭК»/филиалов/отделений/РКЦ, на Интернет-сайт ПАО «ДЭК», через сервис «Личный  кабинет», оставленные в качестве записи в Книге отзывов и предложений при  посещении клиентского офиса/ЕРИЦ, а также в ходе очного посещения клиентских  офисов подлежат рассмотрению в срок, не превышающий 30 дней с момента  поступления. </p>
<p>В случае, если в содержании обращения  содержится жалоба/претензия на предоставление услуги ненадлежащего качества  ответственный исполнитель в течение 3 рабочих дней со дня получения обращения направляет  клиенту ответ за подписью руководителя структурного подразделения, содержащий  информацию о ее удовлетворении и принятых со стороны ПАО «ДЭК» мерах (направлении  запроса в сетевую организацию и т.п.), либо об отказе в удовлетворении с  указанием причин отказа.</p>
<p> Если вопрос, заданный клиентом в письменном  обращении,  не относится к сфере  предоставления услуг ПАО «ДЭК»,  клиент  информируется о невозможности предоставления ответа по существу по причине  того, что вопрос не относится к сфере деятельности ПАО «ДЭК».</p>
<p><strong>Рассмотрению не подлежат обращения в случае  если:</strong></p>
<ul>
  <li>текст обращения содержит нецензурные либо  оскорбительные выражения, угрозы жизни, здоровью и имуществу сотрудников ПАО  «ДЭК», а также членам их семей;</li>
  <li>текст обращения не поддается прочтению;</li>
  <li>в обращении отсутствуют контактные данные  клиента (ФИО, адрес).</li>
</ul>
<p>В случае,  если  ответ по существу поставленного в  обращении вопроса не может быть дан без разглашения сведений, составляющих  коммерческую тайну Общества, либо в обращении содержится вопрос, на который клиенту  многократно давались письменные ответы по существу в связи с ранее  направляемыми обращениями, и при этом в обращении не приводятся новые доводы  или обстоятельства ответственным исполнителем в течение трех рабочих дней  формируется официальный ответ клиенту со ссылкой на указанные обстоятельства.</p>
</div>

<div class="spoiler folded"><h3 class="sp-hdr">Как подать документы и получить услуги в Интернет-приёмной:</h3></div>
<div class="spoiler-text">
<p>
 <b>Для получения справки об отсутствии задолженности за электрическую и тепловую энергию: </b>
</p>
<p>
	 1. Написать заявление (с указанием номера телефона для связи).
</p>
<p>
	 2. Прикрепить следующие документы:
</p>
<ul type="disc">
	<li>Документ, удостоверяющий личность (паспорт). </li>
	<li>Документ, подтверждающий право собственности. </li>
	<li>Фото прибора учета на текущую дату.</li>
</ul>
<p>
	 &nbsp;
</p>
<p>
 <b>Для произведения перерасчета по предоставляемым услугам при временном отсутствии: </b>
</p>
<p>
	 1. Написать заявление (с указанием номера телефона для связи).
</p>
<p>
	 2. Прикрепить следующие документы:
</p>
<ul type="disc">
	<li>Документ, удостоверяющий личность (паспорт). </li>
	<li>Документы, подтверждающие отсутствие. </li>
	<li>Справку о составе семьи.</li>
	<li>Акт об отсутствии технической возможности установки прибора учета (ГВС, тепловой энергии).</li>
</ul>
<p>
	 &nbsp;
</p>
<p>
 <b>Для внесения изменений в лицевой счет (количество комнат, изменение состава семьи, площади): </b>
</p>
<p>
	 1. Написать заявление (с указанием номера телефона для связи).
</p>
<p>
	 2. Прикрепить следующие документы:
</p>
<ul type="disc">
	<li>Документ, удостоверяющий личность (паспорт). </li>
	<li>Документ, подтверждающий право собственности или договор социального найма. </li>
	<li>Справку о составе семьи.</li>
</ul>
<p>
	&nbsp;
</p>
<p>
 <b>Сменить собственника, в случае приобретения собственности, оформления договора найма: </b>
</p>
<p>
	 1. Написать заявление (с указанием номера телефона для связи).
</p>
<p>
	 2. Прикрепить следующие документы:
</p>
<ul type="disc">
	<li>Документ, удостоверяющий личность (паспорт).</li>
</ul>
<ul type="disc">
	<li>Документ, подтверждающий право собственности, найма </li>
	<li>Справка с места жительства о составе семьи и занимаемой площади.</li>
	<li>Справку о составе семьи.</li>
</ul>
<p>
	&nbsp;
</p>
<p>
 <b>Заключить соглашения о реструктуризации долга по предоставляемым услугам: </b>
</p>
<p>
	 1. Написать заявление (с указанием номера телефона для связи).
</p>
<p>
	 2. Прикрепить следующие документы:
</p>
<ul type="disc">
	<li>Документ, удостоверяющий личность (паспорт). </li>
	<li>Документ, подтверждающий право собственности. </li>
	<li>Иные документы подтверждающие оплату, в случае имеющихся судебных решений.</li>
</ul>
<p>
	&nbsp;
</p>
<p>
 <b>Перенести оплаты, если заплатили на чужой счет: </b>
</p>
<p>
	 1. Написать заявление (с указанием номера телефона для связи).
</p>
<p>
	 2. Прикрепить следующие документы:
</p>
<ul type="disc">
	<li>Документ, удостоверяющий личность. </li>
	<li>Документ, подтверждающий право собственности. </li>
	<li>Кассовый чек, подтверждающий оплату.</li>
</ul>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>