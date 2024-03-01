<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по платёжному документу филиала ПАО&nbsp;«ДЭК» - «Якутскэнергосбыт» в&nbsp;Нерюнгринском районе РС(Я)");
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

<h4 class="mb-2">Образец Единого платёжного документа за электроэнергию и другие коммунальные услуги:<br>
	<small>(наведите курсор / нажмите на блок, чтобы прочитать описание)</small></h4>

<div class="alert alert-info pt-3 pb-3">
  Объединенный платежный документ состоит из 2-х частей. В верхней части располагается единый платежный документ ПАО «ДЭК» с начислениями 
за электроэнергию и другие ЖКУ.
<br>В нижней части – платежный документ НО «ФКР МКД в РС(Я)» (капитальный ремонт). 
<br>Таким образом, для оплаты необходимо провести 2 транзакции: платеж за электроэнергию и другие ЖКУ и платеж за капитальный ремонт.
</div>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:1005px; background-image: url('kvit_neru_epd.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div class="spanhover" style="left:618px; top:23px; width:134px; height:38px;" title="1. Номер Вашего лицевого счета в ПАО «ДЭК». Используется для оплаты услeг и передачи показаний по телефону контакт-центра."></div>
	<div class="spanhover" style="left:456px; top:21px; width:263px; height:71px;" title="2. Реквизиты получателя платежа (ПАО «ДЭК»)."></div>
	<div class="spanhover" style="left:17px; top:-50px; width:292px; height:166px;" title="3. Сведения об исполнителях коммунальных услуг, которые отображены в платежном документе."></div>
	<div class="spanhover" style="left:320px; top:-208px; width:128px; height:128px;" title="4. Двумерный штрихкод (QR-код) для быстрой оплаты в терминалах и мобильных приложениях."></div>
	<div class="spanhover" style="left:457px; top:-266px; width:291px; height:49px;" title="5. Контакты Управления государственного строительного и жилищного надзора Республики Саха (Якутия)."></div>
	<div class="spanhover" style="left:17px; top:-223px; width:205px; height:16px;" title="6. Период, за который выставлена квитанция."></div>
	<div class="spanhover" style="left:17px; top:-222px; width:655px; height:34px;" title="7. Сведения об объекте недвижимости, адресе и площади жилого помещения, собственнике/нанимателе, количестве проживающих."></div>
	<div class="spanhover" style="left:17px; top:-221px; width:733px; height:353px;" title="8. Информация по видам услуг, объемам, тарифам, суммам начислений в расчетном периоде."></div>
	<div class="spanhover" style="left:17px; top:-204px; width:732px; height:56px;" title="9. Перерасчеты и оплаты, произведенные в текущем месяце."></div>
	<div class="spanhover" style="left:456px; top:-176px; width:293px; height:20px;" title="10. Итоговая сумма к оплате за расчетный период = Начисления в текущем периоде + Оплаты, произведенные в текущем месяце + Перерасчеты + Пени."></div>
	<div class="spanhover" style="left:456px; top:-178px; width:293px; height:20px;" title="11. Сумма начисленных пеней за неполную или несвоевременную оплату."></div>

	<div class="spanhover-2" style="left:17px; top:-167px; width:312px; height:16px;" title="6. Капремонт: Период, за который выставлена квитанция."></div>
	<div class="spanhover-2" style="left:383px; top:-167px; width:74px; height:66px;" title="14. Капремонт: Номер Вашего лицевого счета для оплаты взносов за капитальный ремонт."></div>
	<div class="spanhover-2" style="left:529px; top:-233px; width:74px; height:66px;" title="15. Капремонт: Сумма начислений в расчетном периоде."></div>
	<div class="spanhover-2" style="left:674px; top:-299px; width:75px; height:66px;" title="16. Капремонт: Итоговая сумма к оплате за расчетный период с учетом переплаты/ задолженности и оплаты в текущем месяце."></div>
	<div class="spanhover-2" style="left:18px; top:-293px; width:221px; height:111px;" title="12. Объем потребления коммунальных ресурсов в расчетном периоде, используемых на содержание общего имущества в многоквартирном доме, рассчитанных исходя из показаний общедомовых приборов учета."></div>
	<div class="spanhover-2" style="left:242px; top:-404px; width:507px; height:94px;" title="13. Способы оплаты и передачи показаний приборов учета."></div>

</div>

<a href="kvit_neru_epd.pdf" target="_blank" class="card flex-row p-4 mt-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец Единого платежного документа за электроэнергию и другие услуги с разъяснением содержащейся в нём информации</span>
</a>

<p>&nbsp;</p>

<h4 class="mb-2">Образец платёжного документа за тепловую энергию:<br>
	<small>(наведите курсор / нажмите на блок, чтобы прочитать описание)</small></h4>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:722px; background-image: url('kvit_neru_teplo.png'); background-color: white; background-position:center top; background-size:contain">
<div class="spanhover" style="left:597px; top:22px; width:166px; height:36px;" title="1. Номер Вашего лицевого счета. Используется для оплаты услуг и передачи показаний по телефону контакт-центра."></div>
<div class="spanhover" style="left:250px; top:20px; width:452px; height:37px;" title="2. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения."></div>
<div class="spanhover" style="left:151px; top:37px; width:198px; height:64px;" title="3. Информация об установленных индивидуальных приборах учета, сроках их госповерки. При истечении срока поверки прибор учета подлежит замене либо поверке."></div>
<div class="spanhover" style="left:584px; top:-27px; width:167px; height:64px;" title="4. Последние показания и дата последних показаний, непосредственно переданных частным клиентом."></div>
<div class="spanhover" style="left:189px; top:-14px; width:208px; height:100px;" title="5. Реквизиты получателя платежа (АО «ДГК»)."></div>
<div class="spanhover" style="left:395px; top:-114px; width:89px; height:100px;" title="6. Размер задолженности/переплаты на начало расчетного периода."></div>
<div class="spanhover" style="left:482px; top:-214px; width:67px; height:100px;" title="7. Начислено в расчетном периоде."></div>
<div class="spanhover" style="left:547px; top:-314px; width:56px; height:100px;" title="8. Итоговая сумма к оплате с учетом поступивших в текущем месяце оплат."></div>
<div class="spanhover" style="left:601px; top:-414px; width:67px; height:100px;" title="9. Итоговая сумма к оплате пеней."></div>
<div class="spanhover" style="left:11px; top:-413px; width:684px; height:27px;" title="10. Сведения об объекте недвижимости, площади жилого помещения и количестве проживающих."></div>
<div class="spanhover" style="left:11px; top:-403px; width:205px; height:23px;" title="11. Период, за который выставлена квитанция."></div>
<div class="spanhover" style="left:328px; top:-433px; width:149px; height:39px;" title="12. Линейный штрихкод для быстрой оплаты в терминалах и мобильных приложениях."></div>
<div class="spanhover" style="left:11px; top:-434px; width:78px; height:78px;" title="13. Двумерный штрихкод (QR-код) для быстрой оплаты в терминалах и мобильных приложениях."></div>
<div class="spanhover" style="left:260px; top:-512px; width:58px; height:94px;" title="14. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц/размер повышающего коэффициента, применяемого при отсутствии индивидуального прибора учета в соответствии с ПП РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже."></div>
<div class="spanhover" style="left:563px; top:-606px; width:58px; height:109px;" title="15. Итоговая сумма к оплате за расчетный период по услугам = Объем потребления услуги * Тариф + Размер платы от применения повышающего коэффициента + Перерасчеты."></div>
<div class="spanhover" style="left:11px; top:-575px; width:401px; height:77px;" title="16. Сведения о показаниях общедомовых приборов учета и объеме потребления ресурсов на содержание общего имущества."></div>
<div class="spanhover" style="left:422px; top:-652px; width:312px; height:29px;" title="17. Сведения о перерасчетах, произведенных в расчетном периоде."></div>
<div class="spanhover" style="left:11px; top:-606px; width:723px; height:35px;" title="18. Контактные данные компании, с помощью которых можно передать показания счетчиков, получить информацию по расчетам и задолженности и решить другие вопросы, связанные с Вашим обслуживанием."></div>
<div class="spanhover" style="left:11px; top:-592px; width:60px; height:60px;" title="19. QR-код для быстрой установки мобильного приложения «ДЭК Теплосбыт» на Ваш смартфон или планшет."></div>
<div class="spanhover" style="left:690px; top:-652px; width:60px; height:60px;" title="19. QR-код для быстрой установки мобильного приложения «ДЭК Теплосбыт» на Ваш смартфон или планшет."></div>
</div>

<a href="kvit_neru_teplo.pdf" target="_blank" class="card flex-row mt-4 p-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец  платежного документа за тепловую энергию<br>с разъяснением содержащейся в нем информации</span>
</a>


<script defer src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js"></script>
<script defer src="gid.js?2"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>