<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по квитанции, платежному документу филиала ПАО «ДЭК» - «Дальэнергосбыт»");
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

<p>Наведите курсор / нажмите на блок, чтобы прочитать описание.</p>

<h4 class="mb-2">Образец единого платежного документа (ЕПД) <mark>по тепловой и электрической</mark> энергии:</h4>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:779px;height:1067px; background-image: url('des_epd_2023.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div style="left:21px; top:21px; width:737px; height:24px;" title="1. Справочная информация с цифровым кодом, используемая для передачи показаний по телефону контакт-центра." class="spanhover-4"></div>
	<div class="spanhover-1" style="left:147px; top:56px; width:417px; height:60px;" title="2. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения."></div>
	<div class="spanhover-4" style="left:563px; top:-4px; width:67px; height:18px;" title="3. Номер Вашего лицевого счета для услуг оказываемых ПАО «ДЭК» и АО «ДГК»."></div>
	<div class="spanhover-4" style="left:405px; top:-41px; width:100px; height:20px;" title="4. Период, за который выставлена квитанция."></div>
	<div class="spanhover-4" style="left:582px; top:-60px; width:59px; height:19px;" title="5. Срок оплаты квитанции."></div>
	<div class="spanhover-2" style="left:506px; top:62px; width:49px; height:30px;" title="6. Итоговая сумма к оплате по услугам ПАО «ДЭК»."></div>
	<div class="spanhover-3" style="left:506px; top:77px; width:50px; height:30px;" title="7. Итоговая сумма к оплате по услугам АО «ДГК»."></div>
	<div class="spanhover-2" style="left:598px; top:2px; width:50px; height:30px;" title="8. Сумма к оплате по услугам ПАО «ДЭК» в текущем периоде с учетом рекомендуемого платежа, переплаты или недоплаты."></div>
	<div class="spanhover-3" style="left:598px; top:17px; width:50px; height:30px;" title="9. Сумма к оплате по услугам АО «ДГК» в текущем периоде с учетом рекомендуемого платежа, переплаты или недоплаты."></div>
	<div class="spanhover-2" style="left:18px; top:-137px; width:111px; height:140px;" title="10. Двумерный штрих-код - для быстрой оплаты в терминалах Сбербанка и мобильном приложении Сбербанка."></div>
	<div class="spanhover-3" style="left:651px; top:-277px; width:111px; height:140px;" title="10. Двумерный штрих-код - для быстрой оплаты в терминалах Сбербанка и мобильном приложении Сбербанка."></div>
	<div class="spanhover-1" style="left:20px; top:-256px; width:712px; height:47px;" title="11. Сведения об объекте недвижимости, площади жилого помещения и о количестве проживающих."></div>
	<div style="left:303px; top:-225px; width:30px; height:149px;" title="12. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц / размер повышающего коэффициента, применяемого при отсутствии индивидуального прибора учета в соответствии с ПП РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже." class="spanhover-4"></div>
	<div style="left:492px; top:-329px; width:49px; height:24px;" title="13. Итого к оплате за расчетный период по услугам ПАО «ДЭК» = Объем потребления услуги * Тариф + Компенсация + Перерасчеты." class="spanhover-2"></div>
	<div class="spanhover-3" style="left:492px; top:-326px; width:50px; height:77px;" title="14. Итого к оплате за расчетный период по услугам АО «ДГК» = Объем потребления услуги * Тариф + Компенсация + Перерасчеты + Размер платы от применения повышающего КФ."></div>
	<div style="left:58px; top:-223px; width:74px; height:12px;" title="15. Размер задолженности/переплаты на начало расчетного периода по услугам ПАО «ДЭК»." class="spanhover-2"></div>
	<div style="left:58px; top:-221px; width:74px; height:11px;" title="16. Размер задолженности/переплаты на начало расчетного периода по услугам АО «ДГК»." class="spanhover-3"></div>
	<div style="left:309px; top:-170px; width:68px; height:46px;" title="17. При истечении срока поверки прибор учета подлежит замене либо поверке." class="spanhover-1"></div>
	<div style="left:484px; top:-216px; width:70px; height:45px;" title="18. Последние показания, непосредственно переданные потребителем." class="spanhover-1"></div>
	<div style="left:681px; top:-545px; width:52px; height:105px;" title="19. Сведения о перерасчетах, произведенных в расчетном периоде." class="spanhover-1"></div>
	<div style="left:484px; top:-303px; width:70px; height:87px;" title="20. Сведения о показаниях общедомовых приборов учета и объеме потреблении по ОДПУ." class="spanhover-1"></div>
	<div style="left:558px; top:-581px; width:202px; height:77px;" title="21. Информация о пене, госпошлине." class="spanhover-4"></div>
	<div style="left:18px; top:-361px; width:742px; height:50px;" title="22. Контактные данные офиса компании и обслуживающего Ваш дом агента, по которым можно передать показания счетчиков, получить информацию по расчетам и задолженности и  решить другие вопросы, связанные с Вашим обслуживанием." class="spanhover-4"></div>
	<div style="left:19px; top:-310px; width:74px; height:92px;" title="23. QR-код для установки мобильного приложения ПАО «ДЭК» (IOS)." class="spanhover-4"></div>
	<div style="left:686px; top:-402px; width:74px; height:92px;" title="24. QR-код для установки мобильного приложения ПАО «ДЭК» (Android)." class="spanhover-4"></div>
</div>

<a href="des_epd_2023.pdf?2" target="_blank" class="card bg-light flex-row mt-4 p-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.7">
  <span>
    Скачать образец Единого платежного документа <br> с разъяснением содержащейся в нем информации
  </span>
</a>

<p>&nbsp;</p>

<h4 class="mb-2">Образец  платежного документа по <mark>электрической</mark> энергии:<br>
	<small>(наведите курсор / нажмите на блок, чтобы прочитать описание)</small></h4>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:779px;height:888px; background-image: url('des_ee_2023.png'); background-color: white; background-position:center top; background-size:contain">
<div style="left:22px; top:21px; width:735px; height:24px;" title="1. Справочная информация с цифровым кодом, используемая для передачи показаний по телефону контакт-центра." class="spanhover-4"></div>
<div class="spanhover-1" style="left:18px; top:47px; width:411px; height:56px;" title="2. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения."></div>
<div style="left:430px; top:-12px; width:60px; height:22px;" title="3. Номер Вашего лицевого счета для услуг оказываемых ПАО «ДЭК»." class="spanhover-4"></div>
<div style="left:366px; top:-53px; width:101px; height:18px;" title="4. Период, за который выставлена квитанция." class="spanhover-4"></div>
<div style="left:614px; top:-71px; width:147px; height:17px;" title="5. Срок оплаты квитанции." class="spanhover-4"></div>
<div style="left:482px; top:49px; width:75px; height:26px;" title="6. Итоговая сумма к оплате по услугам ПАО «ДЭК»." class="spanhover-2"></div>
<div style="left:577px; top:23px; width:73px; height:26px;" title="7. Сумма к оплате по услугам ПАО «ДЭК» в текущем периоде с учетом рекомендуемого платежа." class="spanhover-2"></div>
<div class="spanhover-1" style="left:20px; top:48px; width:496px; height:63px;" title="8. Сведения об объекте недвижимости, площади жилого помещения и о количестве проживающих."></div>
<div style="left:650px; top:-185px; width:111px; height:111px;" title="9. Двумерный штрих-код - для быстрой оплаты в терминалах Сбербанка и мобильном приложении Сбербанка." class="spanhover-2"></div>
<div style="left:303px; top:-33px; width:30px; height:69px;" title="10. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц / размер повышающего коэффициента, применяемого при отсутствии индивидуального прибора учета в соответствии с ПП РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже." class="spanhover-2"></div>
<div style="left:492px; top:-102px; width:48px; height:69px;" title="11. Итого к оплате за расчетный период по услугам ПАО «ДЭК» = Объем потребления услуги * Тариф + Компенсация + Перерасчеты." class="spanhover-2"></div>
<div style="left:681px; top:-171px; width:52px; height:69px;" title="12. Сведения о перерасчетах, произведенных в расчетном периоде." class="spanhover-2"></div>
<div style="left:57px; top:-120px; width:75px; height:63px;" title="13. Размер задолженности/переплаты на начало расчетного периода по услугам ПАО «ДЭК»." class="spanhover-4"></div>
<div style="left:558px; top:-183px; width:200px; height:62px;" title="14. Информация о пене, госпошлине." class="spanhover-4"></div>
<div style="left:299px; top:-131px; width:88px; height:27px;" title="15. При истечении срока поверки прибор учета подлежит замене либо поверке." class="spanhover-1"></div>
<div style="left:484px; top:-158px; width:71px; height:27px;" title="16. Последние показания, непосредственно переданные потребителем." class="spanhover-1"></div>
<div style="left:484px; top:-139px; width:71px; height:33px;" title="17. Сведения о показаниях общедомовых приборов учета и объеме потреблении по ОДПУ." class="spanhover-1"></div>
<div style="left:20px; top:-108px; width:739px; height:39px;" title="18. Контактные данные офиса компании и обслуживающего Ваш дом агента, по которым можно передать показания счетчиков, получить информацию по расчетам и задолженности и решить другие вопросы, связанные с Вашим обслуживанием." class="spanhover-4"></div>
<div style="left:20px; top:-40px; width:72px; height:91px;" title="19. QR-коды для установки мобильного приложения ПАО «ДЭК»." class="spanhover-4"></div>
<div style="left:687px; top:-131px; width:72px; height:91px;" title="19. QR-коды для установки мобильного приложения ПАО «ДЭК»." class="spanhover-4"></div>
</div>

<a href="des_ee_2023.pdf?2" target="_blank" class="card bg-light flex-row mt-4 p-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.7">
  <span>
    Скачать образец  платежного документа <br> с разъяснением содержащейся в нем информации
  </span>
</a>


<p><a id="dalnegorsk">&nbsp;</a></p>

<h4 class="mb-2">Образец единого платежного документа (ЕПД) <mark>в Дальнегорском городском округе</mark>:<br>
	<small>(наведите курсор / нажмите на блок, чтобы прочитать описание)</small></h4>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:900px; background-image: url('des_epd_dalnegorsk_2022.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div class="spanhover-1" style="left:626px; top:13px; width:107px; height:26px;" title="1. Номер Вашего лицевого счета в ПАО «ДЭК». Используется для оплаты услуг и передачи показаний по телефону контакт-центра"></div>
	<div class="spanhover-1" style="left:460px; top:17px; width:295px; height:125px;" title="2. Реквизиты получателя платежа (ПАО «ДЭК»)"></div>
	<div class="spanhover-1" style="left:460px; top:29px; width:295px; height:165px;" title="3. Сведения о поставщике услуг, которые отражены в платежном документе"></div>
	<div class="spanhover-1" style="left:319px; top:-265px; width:130px; height:130px;" title="4. Двухмерный штрих-код (QR-код) для быстрой оплаты в терминалах и мобильных приложениях"></div>
	<div class="spanhover-1" style="left:11px; top:-403px; width:296px; height:302px;" title="5. Сведения об исполнителях коммунальных услуг, которые отображены в платежном документе"></div>
	<div class="spanhover-1" style="left:11px; top:-400px; width:213px; height:19px;" title="6. Период, за который выставлена квитанция"></div>
	<div class="spanhover-1" style="left:456px; top:-402px; width:224px; height:22px;" title="7. Сведения об объекте недвижимости, адресе и площади жилого помещения, собственнике/нанимателе, количестве проживающих"></div>
	<div class="spanhover-1" style="left:10px; top:-389px; width:747px; height:178px;" title="8. Информация по видам услуг, объемам, тарифам, суммам начислений в расчетном периоде"></div>
	<div class="spanhover-1" style="left:10px; top:-378px; width:747px; height:139px;" title="9. Сводная информация по поставщикам: размер задолженности/переплаты на начало расчетного периода, сумма начисленных пеней, начисления за расчетный период, сумма и дата предыдущей оплаты, итоговая сумма к оплате с учетом задолженности/переплаты и перерасчетов"></div>
	<div class="spanhover-1" style="left:559px; top:-380px; width:198px; height:21px;" title="10. Итоговая сумма к оплате за расчетный период = Начисления в текущем периоде + Оплаты, произведенные в текущем месяце + Перерасчеты + Пени"></div>
	<div class="spanhover-1" style="left:11px; top:-340px; width:68px; height:91px;" title="11. QR-код для установки мобильного приложения ПАО «ДЭК»"></div>
	<div class="spanhover-1" style="left:670px; top:-430px; width:75px; height:99px;" title="11. QR-код для установки мобильного приложения ПАО «ДЭК»"></div>
</div>

<a href="des_epd_dalnegorsk_2022.pdf" target="_blank" class="card bg-light flex-row mt-4 p-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.7">
  <span>
    Скачать образец Единого платежного документа в Дальнегорском городском округе с разъяснением содержащейся в нем информации
  </span>
</a>

<p>&nbsp;</p>

<p><strong>Читайте также: </strong></p>
<ul>
  <li><a href="changing_client_information.php">Изменение регистрационной информации о клиенте<br>
    (Как исправить информацию о владельце, количестве комнат и проживающих)</a></li>
</ul>


<script src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js" defer></script>
<script src="gid.js?2" defer></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>