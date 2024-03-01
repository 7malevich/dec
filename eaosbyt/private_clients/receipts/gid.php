<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по единому платежному документу филиала ПАО&nbsp;«ДЭК» - «Энергосбыт ЕАО»");
?><link href="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.css" rel="stylesheet">
<style>
	/*	.spanhover { position:relative; border: 2px solid #ff48009e; cursor:pointer }
	.spanhover:hover, .spanhover:active { background-color: #ff6c00; opacity:0.3 }  */
	.spanhover { position:relative; border: none; opacity:0.5; border-radius:4px; cursor:pointer }
	.spanhover:hover, .spanhover:active { background-color: #b6e5f7 } 
	.spanhover-2 { position:relative; border: none; opacity:0.5; border-radius:4px; cursor:pointer }
	.spanhover-2:hover, .spanhover-2:active { background-color: #ffc6d8 }
	.spanhover-3 { position:relative; border: none; opacity:0.5; border-radius:4px; cursor:pointer }
	.spanhover-3:hover, .spanhover-2:active { background-color: #ffedc3 }
	.popup { position: absolute; display: none; min-width:160px }
	.ui-tooltip { background-color: #fff3cd; padding: 1rem; font:inherit }
}
</style>

<p class="mb-2">Наведите курсор / нажмите на блок, чтобы прочитать описание:</p>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:1111px; background-image: url('eao_epd_2020.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div class="spanhover" style="left:240px; top:162px; width:432px; height:35px;" title="1. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения."></div>
	<div class="spanhover" style="left:300px; top:182px; width:56px; height:106px;" title="2. При истечении срока поверки прибор учета подлежит замене либо поверке."></div>
	<div class="spanhover" style="left:553px; top:76px; width:117px; height:105px;" title="3. Последние показания и дата последних показаний непосредственно переданных частным клиентом."></div>
	<div class="spanhover" style="left:674px; top:-29px; width:69px; height:105px;" title="4. Показания на текущую дату и дата их снятия заполняются частным клиентом. Заполненный бланк необходимо опустить в ящик для передачи показаний, установленный в офисе ПАО «ДЭК» либо передать показания другим доступным способом (по телефону, по SMS или через личный кабинет)."></div>
	<div class="spanhover-2" style="left:103px; top:38px; width:96px; height:47px;" title="5. Номер Вашего лицевого счета для услуг, оказываемых АО «ДГК»."></div>
	<div class="spanhover-3" style="left:101px; top:45px; width:98px; height:68px;" title="6. Номер Вашего лицевого счета для услуг, оказываемых ПАО «ДЭК»."></div>
	<div class="spanhover-2" style="left:405px; top:-78px; width:82px; height:48px;" title="7. Размер задолженности/переплаты на начало расчетного периода по всем услугам АО «ДГК»."></div>
	<div class="spanhover-3" style="left:405px; top:-71px; width:81px; height:67px;" title="8. Размер задолженности/переплаты на начало расчетного периода по всем услугам ПАО «ДЭК»."></div>
	<div class="spanhover-2" style="left:553px; top:-194px; width:47px; height:49px;" title="9. Итоговая сумма к оплате по всем услугам АО «ДГК»."></div>
	<div class="spanhover-3" style="left:554px; top:-188px; width:45px; height:67px;" title="10. Итоговая сумма к оплате по всем услугам ПАО «ДЭК»."></div>
	<div class="spanhover-2" style="left:684px; top:-309px; width:59px; height:48px;" title="11. Итоговая сумма к оплате по пени АО «ДГК»."></div>
	<div class="spanhover-3" style="left:684px; top:-302px; width:60px; height:67px;" title="12. Итоговая сумма к оплате по пени ПАО «ДЭК»."></div>
	<div class="spanhover" style="left:250px; top:-259px; width:428px; height:31px;" title="1. Сведения о собственнике/нанимателе, адрес доставки и адрес помещения."></div>
	<div class="spanhover" style="left:30px; top:-255px; width:648px; height:44px;" title="13. Сведения об объекте недвижимости, площади жилого помещения и о количестве проживающих."></div>
	<div class="spanhover-2" style="left:31px; top:-209px; width:70px; height:71px;" title="14. Двумерный штрих-код - для быстрой оплаты в терминалах Сбербанка и мобильном приложении Сбербанка."></div>
	<div class="spanhover-2" style="left:339px; top:-320px; width:144px; height:36px;" title="15. Линейный штрих-код - для быстрой оплаты в терминалах Сбербанка и мобильном приложении Сбербанка."></div>
	<div class="spanhover-2" style="left:274px; top:-315px; width:52px; height:108px;" title="16. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц/ размер повышающего коэффициента, применяемого при отсутствии индивидуального прибора учета в соответствии с ПП РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже."></div>
	<div class="spanhover-2" style="left:455px; top:-425px; width:56px; height:126px;" title="17. Размер превышения платы, рассчитанной с применением повышающего коэффициента над размером платы, рассчитанной без учета повышающего коэффициента."></div>
	<div class="spanhover-2" style="left:621px; top:-549px; width:52px; height:123px;" title="18. Итого к оплате за расчетный период по услугам АО «ДГК» = Объем потребления услуги * Тариф + Компенсация + Перерасчеты + Размер платы от применения повышающего Кф."></div>
	<div class="spanhover-2" style="left:30px; top:-544px; width:713px; height:27px;" title="16. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц/ размер повышающего коэффициента, применяемого при отсутствии индивидуального прибора учета в соответствии с ПП РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже."></div>
	<div class="spanhover-3" style="left:30px; top:-499px; width:72px; height:68px;" title="14. Двумерный штрих-код - для быстрой оплаты в терминалах Сбербанка и мобильном приложении Сбербанка."></div>
	<div class="spanhover-3" style="left:311px; top:-607px; width:170px; height:34px;" title="15. Линейный штрих-код - для быстрой оплаты в терминалах Сбербанка и мобильном приложении Сбербанка."></div>
	<div class="spanhover-3" style="left:307px; top:-602px; width:51px; height:63px;" title="16. Способ, с помощью которого определен объем потребленной услуги за расчетный месяц/ размер повышающего коэффициента, применяемого при отсутствии индивидуального прибора учета в соответствии с ПП РФ №354. Способ расчета указан в виде цифрового кода. Расшифровка кода указана в счете ниже."></div>
	<div class="spanhover-3" style="left:493px; top:-665px; width:55px; height:77px;" title="17. Размер превышения платы, рассчитанной с применением повышающего коэффициента над размером платы, рассчитанной без учета повышающего коэффициента."></div>
	<div class="spanhover-3" style="left:604px; top:-742px; width:57px; height:80px;" title="19. Итого к оплате за расчетный период по услугам ПАО «ДЭК» = Объем потребления услуги * Тариф + Компенсация + Перерасчеты."></div>
	<div class="spanhover" style="left:30px; top:-719px; width:394px; height:57px;" title="20. Сведения о показаниях общедомовых приборов учета и объеме потреблении ресурсов на содержание общего имущества."></div>
	<div class="spanhover" style="left:439px; top:-776px; width:304px; height:41px;" title="21. Сведения о перерасчетах, произведенных в расчетном периоде."></div>
	<div class="spanhover" style="left:30px; top:-757px; width:712px; height:42px;" title="22. Контактные данные офиса компании и, обслуживающего Ваш дом, агента, по которым можно передать показания счетчиков, получить информацию по расчетам и задолженности и решить другие вопросы, связанные с Вашим обслуживанием."></div>
</div>

<a href="eao_epd_2020.pdf" target="_blank" class="card flex-row p-4 mt-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец Единого платежного документа с разъяснением содержащейся в нём информации</span>
</a>

<script src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js" defer></script>
<script src="gid.js?2" defer></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>