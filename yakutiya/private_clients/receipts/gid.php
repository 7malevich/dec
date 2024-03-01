<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по платёжному документу филиала ПАО&nbsp;«ДЭК» - «Якутскэнергосбыт»");
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

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:779px;height:868px; background-image: url('yes_pd_2023.png'); background-color: #14629f; background-position:center top; background-size:contain">
  <div style="left:266px; top:8px; width:143px; height:21px;" title="1. Расчетный период, за который был сформирован платежный документ." class="spanhover-4"></div>
	<div style="left:141px; top:7px; width:249px; height:17px;" title="2. Адрес доставки и адрес помещения." class="spanhover-2"></div>
	<div class="spanhover-4" style="left:141px; top:6px; width:501px; height:18px;" title="3. Номер лицевого счета."></div>
	<div style="left:22px; top:-29px; width:119px; height:119px;" title="4. Двумерный штрих код (QR-код) для быстрой оплаты на сайте ПАО “ДЭК”." class="spanhover-1"></div>
	<div style="left:141px; top:-100px; width:502px; height:49px;" title="5. Сведения об объекте недвижимости, адресе и площади жилого помещения." class="spanhover-4"></div>
	<div style="left:140px; top:-100px; width:503px; height:24px;" title="6. Информация о дате последней поступившей оплаты, задолженности за предыдущий период." class="spanhover-1"></div>
	<div class="spanhover-3" style="left:140px; top:-100px; width:503px; height:31px;" title="7. Реквизиты получателя платежа."></div>
	<div style="left:643px; top:-251px; width:118px; height:118px;" title="8. Двумерный штрих код (QR-код) для быстрой оплаты через мобильное приложение банка." class="spanhover-1"></div>
	<div class="spanhover-1" style="left:22px; top:-192px; width:740px; height:108px;" title="9. Информация по видам услуг, объемам, тарифам, суммам начислений в расчетном периоде."></div>
	<div class="spanhover-2" style="left:22px; top:-166px; width:458px; height:82px;" title="10. Сведения по показаниям индивидуального прибора учёта коммунального ресурса. В том числе по снятым контрольным показаниям, переданным от клиента, принятым через контакт-центр и другими способами."></div>
	<div style="left:21px; top:-105px; width:742px; height:196px;" title="11. Информация о задолженности и начислениям по взносам за капитальный ремонт." class="spanhover-3"></div>
	<div style="left:583px; top:9px; width:143px; height:23px;" title="12. Справочная информация с номером лицевого счета, используемая для передачи показаний по телефону контакт-центра." class="spanhover-4"></div>
</div>

<a href="yes_pd_2023.pdf?3" target="_blank" class="card bg-light flex-row mt-4 p-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.7">
  <span>
    Скачать образец Платежного документа <br> с разъяснением содержащейся в нем информации
  </span>
</a>


<p class="mt-5"><strong>Читайте также: </strong></p>
<ul>
  <li><a href="/yakutiya/private_clients/service/docs/">Изменение регистрационной информации о клиенте<br>
    (Как исправить информацию о владельце, количестве комнат и проживающих)</a></li>
</ul>


<script src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js" defer></script>
<script src="gid.js?2" defer></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>