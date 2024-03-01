<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по платежному документу филиала ПАО&nbsp;«ДЭК» - «Хабаровскэнергосбыт»");
?><link href="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.css" rel="stylesheet">
<style>
	/*	.spanhover { position:relative; border: 2px solid #ff48009e; cursor:pointer }
	.spanhover:hover, .spanhover:active { background-color: #ff6c00; opacity:0.3 }  */
	.spanhover { position:relative; border: 2px solid #ff0060; opacity:0.5; border-radius:4px; cursor:pointer }
	.spanhover:hover, .spanhover:active { background-color: #ffc6d8 } 
	.spanhover-2 { position:relative; border: 2px solid #40f; opacity:0.5; border-radius:4px; cursor:pointer }
	.spanhover-2:hover, .spanhover-2:active { background-color: #ddc6ff }
	.popup { position: absolute; display: none; min-width:160px }
	.ui-tooltip { background-color: #fff3cd; padding: 1rem; font:inherit }
}
</style>


<h4 class="mb-2">Образец квитанции по электрической энергии:<br>
	<small>(наведите курсор / нажмите на блок, чтобы прочитать описание)</small></h4>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:769px; background-image: url('hes_kvit_2020.png'); background-color: white; background-position:center top; background-size:contain">
<div class="spanhover" style="left:184px; top:157px; width:188px; height:18px;" title="2. Номер лицевого счета потребителя"></div>
<div class="spanhover" style="left:313px; top:289px; width:84px; height:45px;" title="3. Сумма к оплате, начисленная за  текущий период"></div>
<div class="spanhover" style="left:395px; top:244px; width:65px; height:45px;" title="5. Сумма к оплате (итого) с учетом  переплаты или недоплаты"></div>
<div class="spanhover" style="left:74px; top:184px; width:595px; height:17px;" title="11. Информация о задолженности за  пени за просрочку платежа, по решению суда, по госпошлине по состоянию на  01.04.2020"></div>
<div class="spanhover" style="left:566px; top:182px; width:117px; height:45px;" title="6. Сумма к оплате в текущем периоде с  учетом рекомендуемого платежа, переплаты или недоплаты"></div>
<div class="spanhover" style="left:77px; top:137px; width:90px; height:45px;" title="4. Переплата / недоплата, сложившаяся  на момент выставления счета"></div>
<div class="spanhover" style="left:185px; top:172px; width:191px; height:15px;" title="2. Номер лицевого счета потребителя"></div>
<div class="spanhover" style="left:75px; top:284px; width:132px; height:17px;" title="1. Наименование исполнителя  коммунальных услуг по договору на энергоснабжение с филиалом ПАО «ДЭК»  «Хабаровскэнергосбыт»"></div>
<div class="spanhover" style="left:77px; top:314px; width:86px; height:30px;" title="7. Номер индивидуального прибора  учета потребителя"></div>
<div class="spanhover" style="left:211px; top:284px; width:121px; height:30px;" title="10. Информация о предыдущих и текущих  показаниях индивидуального прибора учета"></div>
<div class="spanhover" style="left:392px; top:254px; width:36px; height:52px;" title="8. Объем электроэнергии, определенный  в текущем периоде внутри жилого помещения"></div>
<div class="spanhover" style="left:75px; top:177px; width:527px; height:15px;" title="11. Информация о задолженности за  пени за просрочку платежа, по решению суда, по госпошлине по состоянию на  01.04.2020"></div>
<div class="spanhover" style="left:547px; top:175px; width:83px; height:64px;" title="9. Перерасчет (осуществляется при  корректировке показаний)"></div>
<div class="spanhover" style="left:628px; top:111px; width:56px; height:64px;" title="3. Сумма к оплате, начисленная за  текущий период"></div>
<div class="spanhover" style="left:628px; top:109px; width:56px; height:16px;" title="4. Переплата / недоплата, сложившаяся  на момент выставления счета"></div>
<div class="spanhover" style="left:628px; top:120px; width:56px; height:25px;" title="5. Сумма к оплате (итого) с учетом  переплаты или недоплаты"></div>
<div class="spanhover" style="left:628px; top:142px; width:56px; height:20px;" title="6. Сумма к оплате в текущем периоде с  учетом рекомендуемого платежа, переплаты или недоплаты"></div>
<div class="spanhover" style="left:76px; top:57px; width:352px; height:85px;" title="12. Справочная информация,  используемая при расчете размера платы за коммунальные услуги"></div>
</div>

<a href="hes_kvit_2020.pdf" target="_blank" class="card flex-row mt-4 p-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец квитанции<br>с разъяснением содержащейся в ней информации</span>
</a>

<p>&nbsp;</p>

<h4 class="mb-2">Образец Единого платёжного документа (ЕПД) по тепловой и электрической энергии:<br>
	<small>(наведите курсор / нажмите на блок, чтобы прочитать описание)</small></h4>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:1058px; background-image: url('hes_epd_2020.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div class="spanhover" style="left:222px; top:139px; width:390px; height:42px;" title="1. Сведения о собственнике/нанимателе, адрес доставки и  адрес помещения"></div>
	<div class="spanhover" style="left:517px; top:150px; width:57px; height:91px;" title="3. Последние показания и дата последних показаний,  непосредственно переданных потребителем"></div>
	<div class="spanhover" style="left:287px; top:59px; width:55px; height:91px;" title="2. При истечении срока поверки прибор учета подлежит  замене либо поверке"></div>
	<div class="spanhover" style="left:625px; top:-32px; width:69px; height:91px;" title="4. Показания на текущую дату и дата их снятия  заполняются потребителем. Заполненный бланк необходимо опустить в ящик для  передачи показаний, установленный в офисе ПАО «ДЭК» либо передать показания  другим доступным способом (по телефону, по SMS или через личный кабинет)"></div>
	<div class="spanhover" style="left:106px; top:31px; width:95px; height:61px;" title="5. Номер Вашего лицевого счета для услуг, оказываемых АО  «ДГК»"></div>
	<div class="spanhover" style="left:382px; top:-30px; width:79px; height:61px;" title="7. Размер задолженности/переплаты на начало расчетного  периода по всем услугам АО «ДГК»"></div>
	<div class="spanhover" style="left:516px; top:-91px; width:120px; height:61px;" title="9. Итоговая сумма к оплате по всем услугам АО «ДГК»"></div>
	<div class="spanhover" style="left:634px; top:-152px; width:60px; height:61px;" title="11. Итоговая сумма к оплате по пени АО «ДГК»"></div>
	<div class="spanhover-2" style="left:106px; top:-154px; width:95px; height:62px;" title="6. Номер Вашего лицевого счета для услуг, оказываемых  ПАО «ДЭК»"></div>
	<div class="spanhover-2" style="left:382px; top:-216px; width:79px; height:62px;" title="8. Размер задолженности/переплаты на начало расчетного  периода по всем услугам ПАО «ДЭК»"></div>
	<div class="spanhover-2" style="left:516px; top:-278px; width:120px; height:62px;" title="10. Итоговая сумма к оплате по всем услугам ПАО «ДЭК»"></div>
	<div class="spanhover-2" style="left:634px; top:-340px; width:60px; height:62px;" title="12. Итоговая сумма к оплате по пени ПАО «ДЭК»"></div>
	<div class="spanhover" style="left:245px; top:-270px; width:389px; height:50px;" title="13. Сведения об объекте недвижимости, площади жилого  помещения и о количестве проживающих"></div>
	<div class="spanhover" style="left:327px; top:-268px; width:155px; height:39px;" title="15. Линейный штрих-код - для быстрой оплаты в терминалах  Сбербанка и мобильном приложении Сбербанка"></div>
	<div class="spanhover" style="left:30px; top:-270px; width:70px; height:68px;" title="14. Двумерный штрих-код - для быстрой оплаты в терминалах  Сбербанка и мобильном приложении Сбербанка"></div>
	<div class="spanhover" style="left:262px; top:-291px; width:51px; height:55px;" title="16. Способ, с помощью которого определен объем  потребленной услуги за расчетный месяц / размер повышающего коэффициента,  применяемого при отсутствии индивидуального прибора учета в соответствии с ПП  РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в  счете ниже"></div>
	<div class="spanhover" style="left:530px; top:-345px; width:48px; height:68px;" title="17. Компенсация части расходов граждан на оплату  коммунальных услуг, возникающих в связи с ростом платы за данные услуги, в  порядке и на условиях, которые установлены федеральными законами, законами  субъектов Российской Федерации и нормативными правовыми актами органов местного  самоуправления, за счет средств соответствующих бюджетов"></div>
	<div class="spanhover" style="left:576px; top:-413px; width:51px; height:68px;" title="18. Итого к оплате за расчетный период по услугам АО  «ДГК» = Объем потребления услуги * Тариф + Компенсация + Перерасчеты + Размер  платы от применения повышающего Кф"></div>
	<div class="spanhover" style="left:297px; top:-380px; width:203px; height:38px;" title="15. Линейный штрих-код - для быстрой оплаты в терминалах  Сбербанка и мобильном приложении Сбербанка"></div>
	<div class="spanhover" style="left:32px; top:-382px; width:67px; height:67px;" title="14. Двумерный штрих-код - для быстрой оплаты в терминалах  Сбербанка и мобильном приложении Сбербанка"></div>
	<div class="spanhover" style="left:291px; top:-449px; width:53px; height:62px;" title="16. Способ, с помощью которого определен объем  потребленной услуги за расчетный месяц / размер повышающего коэффициента,  применяемого при отсутствии индивидуального прибора учета в соответствии с ПП  РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в  счете ниже"></div>
	<div class="spanhover" style="left:563px; top:-511px; width:53px; height:76px;" title="19. Итого к оплате за расчетный период по услугам = Объем  потребления услуги * Тариф + Компенсация + Перерасчеты"></div>
	<div class="spanhover" style="left:32px; top:-494px; width:371px; height:86px;" title="20. Сведения о показаниях общедомовых приборов учета и  объеме потреблении по ОДПУ"></div>
	<div class="spanhover" style="left:412px; top:-580px; width:281px; height:52px;" title="21. Сведения о перерасчетах, произведенных в расчетном  периоде"></div>
	<div class="spanhover" style="left:32px; top:-548px; width:651px; height:37px;" title="22. Контактные данные офиса компании и, обслуживающего  Ваш дом, агента, по которым можно передать показания счетчиков, получить  информацию по расчетам и задолженности и   решить другие вопросы, связанные с Вашим обслуживанием"></div>
</div>

<a href="hes_epd_2020.pdf" target="_blank" class="card flex-row p-4 mt-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец Единого платежного документа с разъяснением содержащейся в нём информации</span>
</a>


<p>&nbsp;</p>
<p><strong>Читайте также: </strong></p>
<ul>
	<li><a href="changing_client_information.php">Изменение регистрационной информации о клиенте<br>
    (Как исправить информацию о владельце, количестве комнат и проживающих)</a></li>
</ul>


<script defer src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js"></script>
<script defer src="gid.js?2"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>