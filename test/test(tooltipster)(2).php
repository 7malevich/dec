<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Расчеты за тепловую энергию и горячее водоснабжение");
?><link rel="stylesheet" type="text/css" href="/js/tooltipst/tooltipster.bundle.min.css" />
<link rel="stylesheet" type="text/css" href="/js/tooltipst/tooltipster-sideTip-noir2.min.css" />
<script type="text/javascript" src="/js/tooltipst/tooltipster.bundle.min.js"></script>



<style>
	.spoiler-text { padding:0; margin:0 0 40px 0; background-color:#fff; border:none; }
	.sp-hdr { display:block; padding-top:8px; line-height:14px }
	.sp-hdr:hover { color:#fff }
</style>


<script>
   $(document).ready(function() {
       $('.tooltip').tooltipster({
			theme: 'tooltipster-noir2',
			contentCloning: true,
			interactive:true,
			trigger: 'click' })
});
</script>


<!-- всплывающие меню -->
<div class="tooltip_templates" style="display: none">
	<div id="tooltip_content2" style="margin: 15px 0 10px 7px; width:253px; height:115px">
		<div style="margin: 7px 0; height:50px"><a href="https://issa.dvec.ru/" target="_blank">
			<img src="/images/design2016/icons/elektrichestvo.svg" style="display:block; float:left; margin:0 12px 0 0; width:42px;">
			Открыть личный кабинет<br /> (электроэнергия)</a></div>
		<div style="margin: 7px 0; height:50px"><a href="https://lk.amur.dvec.ru/" target="_blank">
			<img src="/images/design2016/icons/eric.svg" style="display:block; float:left; margin:4px 12px 0 0; width:42px;">
			Открыть личный кабинет<br /> (Единые расчетно-информационные центры)</a></div>
    </div>
</div>

<div id="start_brright" style="height:242px">
	<div class="tooltip" data-tooltip-content="#tooltip_content2" style="cursor: pointer; padding: 0 0 15px 15px"><img src="/images/design2016/start_pages/brright_lk.gif" title="Откройте личный кабинет в вашем смартфоне - всего за несколько минут!" style="width:290px; height:110px"></div>
	<a href="private_clients/receipts/" style="display:block; padding: 0 0 17px 15px; border-bottom: 1px solid #ebebeb"><img src="/images/design2016/start_pages/brright_kvit.jpg" alt="Заявка на электронную квитанцию" title="Заявка на электронную квитанцию" style="width:290px; height:110px"></a>
</div>

	<h2 style="margin-top:10px">Свет и тепло объединились в квитанции от ПАО «ДЭК»</h2> 
	<p>Два крупнейших поставщика энергетических ресурсов – электроэнергии (ПАО «ДЭК»), тепла и горячей воды (АО «ДГК») – объединяют свои услуги. 
  Ресурсоснабжающими компаниями достигнута договоренность о включении своих коммунальных услуг в совмещенной квитанции.</p>
	<p>Расчет всех услуг, включенных в единый платежный документ, будет осуществляться сотрудниками <b>Дальневосточной энергетической компании.</b></p>


<div style="clear:both; margin:40px 0 25px 0; border-bottom:#bababa dashed 1px"><h2 style="line-height:125%">Выполняя функции по сбыту тепловой энергии, <br/>
	ПАО «ДЭК» оказывает следующие услуги:</h2></div>

<div style="display:inline-block; width:368px">
	<img style="display:inline-block; width:84px; margin:0 5px 0 0" src="img_payment1.svg" />
	<div style="display:inline-block; width:265px; vertical-align:10px">ведение лицевого счета клиента: расчет платы за горячее водоснабжение и теплоснабжение;</div>
</div>
<div style="display:inline-block; width:290px">
	<img style="display:inline-block; width:64px; margin:0 25px 0 0; vertical-align:10px" src="img_letter.svg" />
	<div style="display:inline-block; width:195px; vertical-align:20px">доставка единых платежных документов и уведомлений клиентам;</div>
</div>
<div style="display:inline-block; width:368px; margin-top:30px">
	<img style="display:inline-block; width:64px; margin:0 25px 0 0; vertical-align:1px" src="img_reception1.svg" />
	<div style="display:inline-block; width:265px">очное обслуживание клиентов, предоставление консультаций по начислениям;</div>
</div>
<div style="display:inline-block; width:290px">
	<img style="display:inline-block; width:64px; margin:0 25px 0 0; vertical-align:-4px" src="img_transaction2.svg" />
	<div style="display:inline-block; width:195px">прием заявлений на перерасчеты начисленных сумм;</div>
</div>
<div style="display:inline-block; width:368px; margin-top:35px">
	<img style="display:inline-block; width:64px; margin:0 25px 0 0; vertical-align:-5px" src="img_energy_time.svg" />
	<div style="display:inline-block; width:265px">прием заявлений от физических лиц для соглашений о реструктуризации задолженности;</div>
</div>
<div style="display:inline-block; width:290px">
	<img style="display:inline-block; width:64px; margin:0 25px 0 0; vertical-align:-5px" src="img_documents1.svg" />
	<div style="display:inline-block; width:195px">прием и выдача гражданам согласованного с АО «ДГК» пакета документов;</div>
</div>
<div style="display:inline-block; width:368px; margin-top:35px">
	<img style="display:inline-block; width:64px; margin:0 25px 0 0; vertical-align:-15px" src="img_meter1.svg" />
	<div style="display:inline-block; width:265px">прием показаний приборов учета <br/>от клиентов.</div>
</div>

<div style="clear:both; height:15px"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>