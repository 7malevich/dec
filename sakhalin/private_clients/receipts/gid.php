<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по Единому платежному документу филиала ПАО&nbsp;«ДЭК» - «Сахалинэнергосбыт»");
?><link href="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.css" rel="stylesheet">
<style>
	.spanhover-1 { position:relative; cursor:pointer; border:1px solid #f06e2a; /*border-radius:4px;*/ background-color: #f06e2a38; opacity:0.4 }
	.spanhover-1:hover, .spanhover-1:active { background-color: #f06e2a6b }
	.spanhover-2 { position:relative; cursor:pointer; border:1px solid #0a73bd; background-color:#d9efff; opacity:0.3; }
	.spanhover-2:hover, .spanhover-2:active { background-color: #60bdff }
	.spanhover-3 { position:relative; cursor:pointer; border:1px solid #008221; background-color:#81e39957; opacity:0.4; }
	.spanhover-3:hover, .spanhover-3:active { background-color: #81e399 } 
	.spanhover-4 { position:relative; cursor:pointer; border:1px solid #e39f01e0; background-color:#ffb20045; opacity:0.5 }
	.spanhover-4:hover, .spanhover-4:active { background-color: #ffb2009e }
	.popup { position: absolute; display: none; min-width:160px }
	.ui-tooltip { background-color: #fff3cd; padding: 1rem; font:inherit }
}
</style>

<p><strong>Сроки выставления</strong>:
  Доставка  платежного документа клиентам производится ежемесячно, в первой половине месяца,  следующего за расчетным (январская квитанция доставляется в феврале,  февральская – в марте и т.д.).</p>
<p>В случае некорректных данных по площади помещения в квитанциях, обращайтесь 
<strong>в контакт-центр по номеру 8 (800) 234-77-77</strong>.</p>

<p class="mb-3">Наведите курсор / нажмите на блок, чтобы прочитать описание:</p>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:780px;height:993px; background-image: url('ses_epd_202306.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div class="spanhover-1" style="left:145px; top:20px; width:396px; height:39px;" title="1. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения"></div>
	<div class="spanhover-1" style="left:687px; top:-19px; width:50px; height:39px;" title="2. Период, за который осуществляется расчет."></div>
	<div class="spanhover-2" style="left:25px; top:24px; width:89px; height:41px;" title="3. Вид услуг, оказываемых ПАО «Сахалинэнерго»."></div>
	<div class="spanhover-3" style="left:25px; top:28px; width:89px; height:41px;" title="4. Вид услуг, оказываемых АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-4" style="left:25px; top:31px; width:89px; height:52px;" title="5. Вид услуг, оказываемых НО «Фонд капитального ремонта многоквартирных домов Сахалинской области»."></div>
	<div class="spanhover-2" style="left:117px; top:-110px; width:59px; height:41px;" title="6. Номер Вашего лицевого счета для услуг, оказываемых ПАО «Сахалинэнерго»."></div>
	<div class="spanhover-3" style="left:117px; top:-106px; width:59px; height:41px;" title="7. Номер Вашего лицевого счета для услуг, оказываемых АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-4" style="left:117px; top:-103px; width:59px; height:52px;" title="8 Номер Вашего лицевого счета для услуг, оказываемых НО «Фонд капитального ремонта многоквартирных домов Сахалинской области»."></div>
	<div class="spanhover-2" style="left:445px; top:-244px; width:70px; height:41px;" title="9. Итоговая сумма к оплате по услугам ПАО «Сахалинэнерго» с учетом пени."></div>
	<div class="spanhover-3" style="left:445px; top:-240px; width:70px; height:41px;" title="10. Итоговая сумма к оплате по услугам АО «Управление по обращению с отходами» с учетом пени."></div>
	<div class="spanhover-4" style="left:445px; top:-237px; width:70px; height:51px;" title="11. Итоговая сумма к оплате по услугам НО «Фонд капитального ремонта многоквартирных домов Сахалинской области» с учетом пени."></div>
	<div class="spanhover-2" style="left:637px; top:-377px; width:51px; height:41px;" title="12. Итоговая сумма к оплате по пени ПАО «Сахалинэнерго»."></div>
	<div class="spanhover-3" style="left:637px; top:-373px; width:51px; height:41px;" title="13. Итоговая сумма к оплате по пени АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-4" style="left:637px; top:-370px; width:51px; height:52px;" title="14. Итоговая сумма к оплате по пени НО «Фонд капитального ремонта многоквартирных домов Сахалинской области»."></div>
	<div class="spanhover-2" style="left:276px; top:-352px; width:55px; height:55px;" title="15. При истечении срока поверки прибор учета подлежит замене либо поверке."></div>
	<div class="spanhover-2" style="left:335px; top:-407px; width:118px; height:55px;" title="16. Текущие показания и дата текущих показаний, принятых к расчету в расчетном периоде."></div>
	<div class="spanhover-2" style="left:456px; top:-462px; width:118px; height:55px;" title="17. Предыдущие показания и дата предыдущих показаний, принятых к расчету в предыдущем расчетном периоде."></div>
	<div class="spanhover-2" style="left:578px; top:-517px; width:111px; height:55px;" title="18. Общий расход потребленного коммунального ресурса в жилом помещении по соответствующей услуге."></div>
	<div class="spanhover-1" style="left:22px; top:-514px; width:719px; height:26px;" title="19. Сведения об объекте недвижимости, площади жилого помещения и о количестве проживающих."></div>
	<div class="spanhover-2" style="left:679px; top:-513px; width:79px; height:78px;" title="20. QR-код – для быстрой оплаты услуг ПАО «Сахалинэнерго» в терминалах и мобильном приложении Сбербанка."></div>
	<div class="spanhover-2" style="left:231px; top:-563px; width:26px; height:50px;" title="21. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже."></div>
	<div class="spanhover-2" style="left:404px; top:-613px; width:52px; height:68px;" title="22. Размер превышения платы, рассчитанной с применением повышающего коэффициента над размером платы, рассчитанной без учета повышающего коэффициента."></div>
	<div class="spanhover-2" style="left:515px; top:-681px; width:51px; height:68px;" title="23. Итого начислено за расчетный месяц по соответствующим услугам с учетом повышающего коэффициента (в случае применения) и перерасчетов."></div>
	<div class="spanhover-2" style="left:570px; top:-749px; width:52px; height:68px;" title="24. Размер задолженности/переплаты на начало расчетного месяца по соответствующим услугам за минусом оплат, произведенных в расчетном месяце."></div>
	<div class="spanhover-2" style="left:625px; top:-817px; width:52px; height:68px;" title="25. Итого к оплате по соответствующим услугам."></div>
	<div class="spanhover-2" style="left:22px; top:-797px; width:738px; height:24px;" title="26. Контактные данные пункта обслуживания, по которым можно передать показания счетчиков, получить информацию по расчетам и задолженности, решить другие вопросы, связанные с Вашим обслуживанием по услугам ПАО «Сахалинэнерго»."></div>
	<div class="spanhover-3" style="left:24px; top:-762px; width:90px; height:91px;" title="27. QR-код – для быстрой оплаты услуг АО «Управление по обращению с отходами» в терминалах и мобильном приложении Сбербанка."></div>
	<div class="spanhover-3" style="left:592px; top:-816px; width:56px; height:90px;" title="28. Итого начислено за расчетный месяц по соответствующим услугам АО «Управление по обращению с отходами» и перерасчетов."></div>
	<div class="spanhover-3" style="left:651px; top:-906px; width:52px; height:90px;" title="29. Размер задолженности/переплаты на начало расчетного месяца по соответствующим услугам АО «Управление по обращению с отходами» за минусом оплат, произведенных в расчетном месяце."></div>
	<div class="spanhover-3" style="left:707px; top:-996px; width:51px; height:90px;" title="30. Итого к оплате по соответствующим услугам АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-3" style="left:23px; top:-991px; width:738px; height:54px;" title="31. Контактные данные пункта обслуживания, по которым можно получить информацию по расчетам и задолженности, решить другие вопросы, связанные с Вашим обслуживанием по услугам АО «Управление по обращению с отходами»."></div>
	<div class="spanhover-4" style="left:250px; top:-944px; width:39px; height:75px;" title="32. Итого начислено за расчетный месяц по соответствующим услугам НО «Фонд капитального ремонта многоквартирных домов Сахалинской области»."></div>
	<div class="spanhover-4" style="left:446px; top:-1019px; width:52px; height:75px;" title="33. Размер задолженности/переплаты на начало расчетного месяца по соответствующим услугам НО «Фонд капитального ремонта многоквартирных домов Сахалинской области»."></div>
	<div class="spanhover-4" style="left:612px; top:-1094px; width:52px; height:75px;" title="34. Итого к оплате по соответствующим услугам."></div>
	<div class="spanhover-4" style="left:668px; top:-1197px; width:91px; height:93px;" title="35. QR-код – для быстрой оплаты услуг НО «Фонд капитального ремонта многоквартирных домов Сахалинской области» в терминалах и мобильном приложении Сбербанка."></div>
	<div class="spanhover-4" style="left:23px; top:-1159px; width:737px; height:45px;" title="36. Контактные данные пункта обслуживания, по которым можно получить информацию по расчетам и задолженности, решить другие вопросы, связанные с Вашим обслуживанием по услугам НО «Фонд капитального ремонта многоквартирных домов Сахалинской области»."></div>
</div>

<a href="ses_epd_202306.pdf" target="_blank" class="card flex-row p-4 mt-4 mb-4 text-decoration-none">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.8">
  <span class="alert-link">Скачать образец Единого платежного документа <br>с разъяснением содержащейся в нём информации</span>
</a>

<p>Читайте также:</p>
  <ul>
    <li><a href="changing_client_information.php">Изменение регистрационной информации о клиенте<br />
    (как исправить информацию о владельце, количестве комнат и проживающих)</a></li>
    <li><a href="../eric/">Образец платежного документа для клиентов ЕРИЦ г. Холмск</a></li>
  </ul>

<script src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js" defer></script>
<script src="gid.js?3" defer></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>