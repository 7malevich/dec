<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по Единому платежному документу филиала ПАО&nbsp;«ДЭК» - «Сахалинэнергосбыт»");
?><link href="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.css" rel="stylesheet">
<style>
	/*	.spanhover { position:relative; border: 2px solid #ff48009e; cursor:pointer }
	.spanhover:hover, .spanhover:active { background-color: #ff6c00; opacity:0.3 }  */
	.spanhover { position:relative; border: none; opacity:0.5; border-radius:4px; cursor:pointer }
	.spanhover:hover, .spanhover:active { background-color: #b6e5f7 } 
	.spanhover-2 { position:relative; border: none; opacity:0.5; border-radius:4px; cursor:pointer }
	.spanhover-2:hover, .spanhover-2:active { background-color: #ffedc3 }
	.spanhover-3 { position:relative; border: none; opacity:0.5; border-radius:4px; cursor:pointer }
	.spanhover-3:hover, .spanhover-2:active { background-color: #d0ffc3 }
	.popup { position: absolute; display: none; min-width:160px }
	.ui-tooltip { background-color: #fff3cd; padding: 1rem; font:inherit }
}
</style>

<p><strong>Сроки выставления</strong>:
  Доставка  платежного документа клиентам производится ежемесячно, в первой половине месяца,  следующего за расчетным (январская квитанция доставляется в феврале,  февральская – в марте и т.д.).</p>
<p><span style="margin-top:35px">В случае некорректных данных по площади помещения в квитанциях, обращайтесь 
<strong>в контакт-центр по номеру 8 (800) 234-77-77</strong>.</span></p>

<p class="mb-2">Наведите курсор / нажмите на блок, чтобы прочитать описание:</p>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:980px; background-image: url('ses_epd_2020b.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div class="spanhover" style="left:197px; top:20px; width:385px; height:40px;" title="1. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения."></div>
	<div class="spanhover" style="left:669px; top:-25px; width:70px; height:41px;" title="2. Период, за который осуществляется расчет."></div>
	<div class="spanhover-2" style="left:33px; top:21px; width:87px; height:40px;" title="3. Вид услуг, оказываемых ПАО «Сахалинэнерго»."></div>
	<div class="spanhover-3" style="left:34px; top:24px; width:86px; height:50px;" title="4. Вид услуг, оказываемых АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-2" style="left:121px; top:-69px; width:83px; height:41px;" title="5. Номер Вашего лицевого счета для услуг, оказываемых ПАО «Сахалинэнерго»."></div>
	<div class="spanhover-3" style="left:122px; top:-67px; width:88px; height:50px;" title="6. Номер Вашего лицевого счета для услуг, оказываемых АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-2" style="left:475px; top:-158px; width:82px; height:39px;" title="7. Итоговая сумма к оплате по услугам ПАО «Сахалинэнерго»."></div>
	<div class="spanhover-3" style="left:474px; top:-153px; width:81px; height:46px;" title="8. Итоговая сумма к оплате по услугам АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-2" style="left:620px; top:-245px; width:66px; height:41px;" title="9. Итоговая сумма к оплате по пени  ПАО «Сахалинэнерго»."></div>
	<div class="spanhover-3" style="left:620px; top:-241px; width:65px; height:48px;" title="10. Итоговая сумма к оплате по пени АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-2" style="left:262px; top:-217px; width:61px; height:74px;" title="11. При истечении срока поверки прибор учета подлежит замене либо поверке."></div>
	<div class="spanhover-2" style="left:326px; top:-292px; width:116px; height:74px;" title="12. Текущие показания и дата текущих показаний, принятых к расчету в расчетном периоде."></div>
	<div class="spanhover-2" style="left:445px; top:-366px; width:118px; height:74px;" title="13. Предыдущие показания и дата предыдущих показаний, принятых к расчету в предыдущем расчетном периоде."></div>
	<div class="spanhover-2" style="left:568px; top:-439px; width:108px; height:73px;" title="14. Общий расход потребленного коммунального ресурса в жилых и нежилых помещениях по соответствующей услуге."></div>
	<div class="spanhover" style="left:31px; top:-436px; width:234px; height:27px;" title="15. Сведения об объекте недвижимости, площади жилого помещения и о количестве проживающих."></div>
	<div class="spanhover-2" style="left:410px; top:-435px; width:249px; height:36px;" title="16. Линейный штрих-код – для быстрой оплаты услуг ПАО «Сахалинэнерго» в почтовых отделениях."></div>
	<div class="spanhover-2" style="left:672px; top:-471px; width:75px; height:79px;" title="17. QR-код – для быстрой оплаты услуг ПАО «Сахалинэнерго» в терминалах и мобильном приложении Сбербанка."></div>
	<div class="spanhover-2" style="left:235px; top:-514px; width:28px; height:99px;" title="19. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц/ размер повышающего коэффициента, применяемого при отсутствии индивидуального прибора учета в соответствии с ПП РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже."></div>
	<div class="spanhover-2" style="left:402px; top:-609px; width:52px; height:81px;" title="20. Размер превышения платы, рассчитанной с применением повышающего коэффициента над размером платы, рассчитанной без учета повышающего коэффициента."></div>
	<div class="spanhover-2" style="left:511px; top:-691px; width:51px; height:80px;" title="21. Итого начислено за расчетный месяц по соответствующим услугам с учетом повышающего коэффициента (в случае применения) и перерасчетов."></div>
	<div class="spanhover-2" style="left:563px; top:-771px; width:52px; height:81px;" title="22. Размер задолженности/переплаты на начало расчетного месяца по соответствующим услугам за минусом оплат, произведенных в расчетном месяце."></div>
	<div class="spanhover-2" style="left:615px; top:-852px; width:52px; height:81px;" title="23. Итого к оплате по соответствующим услугам=п. 21+п.22"></div>
	<div class="spanhover-2" style="left:34px; top:-835px; width:710px; height:52px;" title="24. Контактные данные пункта обслуживания, по которым можно передать показания счетчиков, получить информацию по расчетам и задолженности,  решить другие вопросы, связанные с Вашим обслуживанием по услугам ПАО «Сахалинэнерго». "></div>
	<div class="spanhover-3" style="left:661px; top:-705px; width:84px; height:87px;" title="18. QR-код – для быстрой оплаты услуг АО «Управление по обращению с отходами» в терминалах и мобильном приложении Сбербанка."></div>
	<div class="spanhover-3" style="left:496px; top:-767px; width:54px; height:72px;" title="25. Итого начислено за расчетный месяц по соответствующим услугам АО «Управление по обращению с отходами» и перерасчетов."></div>
	<div class="spanhover-3" style="left:552px; top:-840px; width:53px; height:73px;" title="26. Размер задолженности/переплаты на начало расчетного месяца по соответствующим услугам АО «Управление по обращению с отходами» за минусом оплат, произведенных в расчетном месяце."></div>
	<div class="spanhover-3" style="left:607px; top:-912px; width:54px; height:72px;" title="27. Итого к оплате по соответствующим услугам АО «Управление по обращению с отходами» =п.27+п.28"></div>
	<div class="spanhover-3" style="left:33px; top:-911px; width:712px; height:48px;" title="28. Контактные данные пункта обслуживания, по которым можно получить информацию по расчетам и задолженности,  решить другие вопросы, связанные с Вашим обслуживанием по услугам АО «Управление по обращению с отходами»."></div>
	<div class="spanhover" style="left:33px; top:-865px; width:355px; height:27px;" title="29. Сведения о перерасчетах, произведенных в расчетном периоде."></div>
</div>

<a href="ses_epd_2020b.pdf" target="_blank" class="card flex-row p-4 mt-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец Единого платежного документа <br>с разъяснением содержащейся в нём информации</span>
</a>

<p>Читайте также:</p>
  <ul>
    <li><a href="changing_client_information.php">Изменение регистрационной информации о клиенте<br />
    (как исправить информацию о владельце, количестве комнат и проживающих)</a></li>
    <li><a href="../eric/">Образец платежного документа для клиентов ЕРИЦ г. Холмск</a></li>
  </ul>

<script src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js" defer></script>
<script src="gid.js" defer></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>