<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по платежному документу филиала ПАО&nbsp;«ДЭК» - «Амурэнергосбыт»");
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

<h4 class="mb-2">Образец Единого платёжного документа за электроэнергию и другие коммунальные услуги (ТКО, капремонт):<br>
	<small>(наведите курсор / нажмите на блок, чтобы прочитать описание)</small></h4>

<div class="alert alert-info pt-3 pb-3">
  Объединенный платёжный  документ состоит  из 2-х частей. 
  <br>В верхней части располагается единый платёжный документ ПАО  «ДЭК» с начислениями за электроэнергию и другие ЖКУ. 
  <br>В нижней части – платёжный  документ НО «Фонд капитального ремонта многоквартирных домов Амурской области».  
  <br>Оплата  каждого вида платежа производится по отдельному штрих-коду и реквизитам,  размещённым в квитанции.
</div>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:1058px; background-image: url('kvit_epd.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div class="spanhover" style="left:24px; top:21px; width:685px; height:31px;" title="1. Номер Вашего лицевого счета. Используется для оплаты услуг и передачи показаний по телефону контакт-центра."></div>
	<div class="spanhover" style="left:24px; top:22px; width:480px; height:40px;" title="2. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения."></div>
	<div class="spanhover" style="left:57px; top:27px; width:179px; height:22px;" title="1. Номер Вашего лицевого счета. Используется для оплаты услуг и передачи показаний по телефону контакт-центра."></div>
	<div class="spanhover" style="left:29px; top:32px; width:205px; height:43px;" title="3. Линейный штрихкод для быстрой оплаты в терминалах и мобильных приложениях."></div>
	<div class="spanhover" style="left:235px; top:-15px; width:228px; height:52px;" title="4. Реквизиты получателя платежа (ПАО «ДЭК»)."></div>
	<div class="spanhover" style="left:619px; top:-92px; width:87px; height:89px;" title="5. Двумерный штрихкод (QR-код) для быстрой оплаты в терминалах и мобильных приложениях."></div>
	<div class="spanhover" style="left:45px; top:-69px; width:89px; height:20px;" title="1. Номер Вашего лицевого счета. Используется для оплаты услуг и передачи показаний по телефону контакт-центра."></div>
	<div class="spanhover" style="left:27px; top:-71px; width:679px; height:16px;" title="6. Сведения об объекте недвижимости, площади жилого помещения и количестве проживающих."></div>
	<div class="spanhover" style="left:285px; top:-55px; width:49px; height:279px;" title="7. Начислено в расчетном периоде."></div>
	<div class="spanhover" style="left:332px; top:-334px; width:50px; height:279px;" title="8. Перерасчеты, произведенные в расчетном периоде."></div>
	<div class="spanhover" style="left:380px; top:-613px; width:46px; height:279px;" title="9. Размер превышения платы, рассчитанной с применением повышающего коэффициента над размером платы, рассчитанной без учета повышающего коэффициента. Повышающий коэффициент применяется при отсутствии индивидуального прибора учета в случаях, указанных в ПП РФ № 354."></div>
	<div class="spanhover" style="left:424px; top:-892px; width:48px; height:279px;" title="10. Итоговая сумма начислений за расчетный период."></div>
	<div class="spanhover" style="left:27px; top:-873px; width:394px; height:137px;" title="11. Сводная информация по поставщикам: размер задолженности/переплаты на начало расчетного периода, сумма начисленных пеней, начисления за расчетный период, сумма и дата предыдущей оплаты, итоговая сумма к оплате с учетом задолженности/переплаты и перерасчетов."></div>
	<div class="spanhover" style="left:419px; top:-1010px; width:287px; height:145px;" title="12. Сведения об индивидуальных и общедомовых приборах учета: номер счетчика, текущие и предыдущие показания, объем потребления."></div>
	<div class="spanhover" style="left:27px; top:-998px; width:679px; height:98px;" title="13. Раскрытие информации по кодам поставщиков и ресурсоснабжающих организаций."></div>
	<div class="spanhover-2" style="left:97px; top:-955px; width:92px; height:44px;" title="14. Капремонт: Номер Вашего лицевого счета."></div>
	<div class="spanhover-2" style="left:68px; top:-957px; width:135px; height:33px;" title="15. Капремонт: Линейный штрихкод для быстрой оплаты в терминалах и мобильных приложениях."></div>
	<div class="spanhover-2" style="left:626px; top:-1032px; width:75px; height:75px;" title="16. Капремонт: Двумерный штрихкод (QR-код) для быстрой оплаты в терминалах и мобильных приложениях."></div>
	<div class="spanhover-2" style="left:521px; top:-1020px; width:194px; height:43px;" title="17. Капремонт: Сведения о произведенных перерасчетах."></div>
	<div class="spanhover-2" style="left:35px; top:-1063px; width:478px; height:93px;" title="18. Капремонт: Блоки, содержащие информацию о задолженности/переплате на начало расчетного периода, суммах начислений с учетом перерасчетов, итоговая сумма к оплате с учетом пеней."></div>
	<div class="spanhover-2" style="left:521px; top:-1099px; width:194px; height:36px;" title="19. Капремонт: Сведения о льготах."></div>
	<div class="spanhover-2" style="left:27px; top:-1319px; width:358px; height:37px;" title="6. Капремонт: Сведения об объекте недвижимости, площади жилого помещения и количестве проживающих."></div>
</div>

<a href="kvit_epd.pdf" target="_blank" class="card flex-row p-4 mt-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец Единого платежного документа за электроэнергию и другие услуги с разъяснением содержащейся в нём информации</span>
</a>

<p>&nbsp;</p>

<h4 class="mb-2">Образец платёжного документа за тепловую энергию:<br>
	<small>(наведите курсор / нажмите на блок, чтобы прочитать описание)</small></h4>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:554px; background-image: url('kvit_blag_teplo.png'); background-color: white; background-position:center top; background-size:contain">
<div class="spanhover" style="left:23px; top:31px; width:719px; height:34px;" title="1. Номер Вашего лицевого счета. Используется для оплаты услуг и передачи показаний по телефону контакт-центра."></div>
<div class="spanhover" style="left:206px; top:29px; width:475px; height:36px;" title="2. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения."></div>
<div class="spanhover" style="left:160px; top:45px; width:192px; height:48px;" title="3. Информация об установленных индивидуальных приборах учета, сроках их госповерки. При истечении срока поверки прибор учета подлежит замене либо поверке."></div>
<div class="spanhover" style="left:578px; top:-3px; width:162px; height:48px;" title="4. Последние показания и дата последних показаний, непосредственно переданных частным клиентом."></div>
<div class="spanhover" style="left:197px; top:10px; width:200px; height:96px;" title="5. Реквизиты получателя платежа (АО «ДГК»)."></div>
<div class="spanhover" style="left:395px; top:-86px; width:86px; height:96px;" title="6. Размер задолженности/переплаты на начало расчетного периода."></div>
<div class="spanhover" style="left:479px; top:-182px; width:65px; height:96px;" title="7. Начислено в расчетном периоде."></div>
<div class="spanhover" style="left:542px; top:-278px; width:54px; height:96px;" title="8. Итоговая сумма к оплате с учетом поступивших в текущем месяце оплат."></div>
<div class="spanhover" style="left:675px; top:-374px; width:64px; height:96px;" title="9. Итоговая сумма к оплате пеней."></div>
<div class="spanhover" style="left:25px; top:-373px; width:658px; height:27px;" title="10. Сведения об объекте недвижимости, площади жилого помещения и количестве проживающих."></div>
<div class="spanhover" style="left:25px; top:-367px; width:176px; height:28px;" title="11. Период, за который выставлена квитанция."></div>
<div class="spanhover" style="left:270px; top:-400px; width:143px; height:37px;" title="12. Линейный штрихкод для быстрой оплаты в терминалах и мобильных приложениях."></div>
<div class="spanhover" style="left:25px; top:-401px; width:76px; height:77px;" title="13. Двумерный штрихкод (QR-код) для быстрой оплаты в терминалах и мобильных приложениях."></div>
<div class="spanhover" style="left:266px; top:-476px; width:55px; height:90px;" title="14. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже."></div>
<div class="spanhover" style="left:501px; top:-566px; width:55px; height:105px;" title="15. Итоговая сумма к оплате за расчетный период по услугам = Объем потребления услуги * Тариф + Перерасчеты."></div>
<div class="spanhover" style="left:25px; top:-539px; width:302px; height:29px;" title="16. Сведения о перерасчетах, произведенных в расчетном периоде."></div>
<div class="spanhover" style="left:25px; top:-541px; width:703px; height:33px;" title="17. Контактные данные компании, с помощью которых можно передать показания счетчиков, получить информацию по расчетам и задолженности и решить другие вопросы, связанные с Вашим обслуживанием."></div>
</div>

<a href="kvit_blag_teplo.pdf" target="_blank" class="card flex-row mt-4 p-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец  платежного документа за тепловую энергию<br>с разъяснением содержащейся в нем информации</span>
</a>


<p>&nbsp;</p>
<p><strong>Читайте также: </strong></p>
<ul>
	<li><a href="../heat/">Расчеты за тепловую энергию и горячее водоснабжение</a></li>
	<li><a href="../tko/">Расчеты за услугу по обращению с ТКО</a></li>
</ul>


<script defer src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js"></script>
<script defer src="gid.js?2"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>