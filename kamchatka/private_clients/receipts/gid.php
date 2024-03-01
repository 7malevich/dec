<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гид по платежному документу филиала ПАО&nbsp;«ДЭК» - «Камчатскэнергосбыт»");
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

<p>
	<strong>Сроки выставления: </strong> Доставка платежного документа клиентам производится ежемесячно, в первой половине месяца, следующего за расчетным (январская квитанция доставляется в феврале, февральская – в марте и т.д.).
</p>

<p class="mb-2">Наведите курсор / нажмите на блок, чтобы прочитать описание:</p>

<div style="box-shadow: 0 0 10px rgba(0,0,0,0.3); width:767px;height:1080px; background-image: url('files/epd_kes_202106.png'); background-color: #14629f; background-position:center top; background-size:contain">
	<div class="spanhover" style="left:162px; top:47px; width:297px; height:36px;" title="2. Данные плательщика."></div>
	<div class="spanhover" style="left:162px; top:78px; width:274px; height:15px;" title="1. Наименование исполнителя коммунальных услуг."></div>
	<div class="spanhover" style="left:584px; top:45px; width:168px; height:22px;" title="3. Номер лицевого счета."></div>
	<div class="spanhover" style="left:561px; top:52px; width:186px; height:35px;" title="19. Итоговая сумма к оплате или сведения о переплате."></div>
	<div class="spanhover" style="left:19px; top:51px; width:95px; height:65px;" title="14. Вид платежа: услуги – отопление, горячее водоснабжение, электроснабжение, пени."></div>
	<div class="spanhover" style="left:112px; top:-14px; width:115px; height:65px;" title="15. Долг/переплата на начало расчётного месяца."></div>
	<div class="spanhover" style="left:225px; top:-79px; width:204px; height:65px;" title="16. Общая стоимость коммунальных услуг, потреблённых в расчётном месяце."></div>
	<div class="spanhover" style="left:427px; top:-144px; width:66px; height:65px;" title="17. Сумма оплаты, поступившая на лицевой счёт потребителя до 20 числа расчетного  месяца. Платежи, произведенные позже, будут учтены в следующем расчетном  периоде."></div>
	<div class="spanhover" style="left:491px; top:-209px; width:136px; height:65px;" title="18. Общая сумма льготного возмещения."></div>
	<div class="spanhover" style="left:625px; top:-274px; width:122px; height:65px;" title="20. Итоговая сумма к оплате за коммунальные услуги и пени."></div>
	<div class="spanhover" style="left:19px; top:-207px; width:288px; height:15px;" title="1. Наименование исполнителя коммунальных услуг."></div>
	<div class="spanhover" style="left:584px; top:-210px; width:162px; height:22px;" title="3. Номер лицевого счета."></div>
	<div class="spanhover" style="left:19px; top:-198px; width:419px; height:36px;" title="2. Данные плательщика."></div>
	<div class="spanhover" style="left:560px; top:-234px; width:187px; height:36px;" title="19. Итоговая сумма к оплате или сведения о переплате."></div>
	<div class="spanhover" style="left:20px; top:-145px; width:210px; height:100px;" title="4. Структура платежа: вид коммунального ресурса, за который производится  начисление платы –электроэнергия, отопление, горячее водоснабжение, в том  числе: теплоноситель вода и тепловая энергия для ГВС."></div>
	<div class="spanhover" style="left:228px; top:-245px; width:79px; height:100px;" title="5. Способ расчета: расчет потребленных коммунальных ресурсов за расчетный месяц - по показаниям индивидуальных приборов учета, по среднему, по нормативу."></div>
	<div class="spanhover" style="left:305px; top:-345px; width:43px; height:100px;" title="6. Единицы измерения: кВт*ч – электроэнергия, Гкал – отопление, тепловая энергия  для ГВС, куб.м – горячее водоснабжение, теплоноситель вода."></div>
	<div class="spanhover" style="left:346px; top:-445px; width:171px; height:100px;" title="7. «Индивид. потребл.» –  объем коммунальной услуги, определенный в соответствии с показаниями прибора  учета, либо по нормативу, либо по среднему – в соответствии с Постановлением  Правительства РФ от 06.05.2011 No 354."></div>
	<div class="spanhover" style="left:515px; top:-545px; width:63px; height:100px;" title="8. Тариф на 1 кВтч по электроэнергии, 1 Гкал по  отоплению и за горячее водоснабжение (1 куб. метр, 1 Гкал) в расчётном месяце."></div>
	<div class="spanhover" style="left:576px; top:-645px; width:171px; height:100px;" title="9. Стоимость коммунальных услуг по электроэнергии, отоплению и горячему  водоснабжению, потреблённых в расчётном месяце в жилом помещении и на  общедомовые нужды."></div>
	<div class="spanhover" style="left:18px; top:-591px; width:675px; height:27px;" title="10. Показания индивидуальных приборов учета: вид коммунального ресурса, No  прибора учета, текущие показания, предыдущие показания, срок поверки."></div>
	<div class="spanhover" style="left:18px; top:-593px; width:724px; height:117px;" title="13. Информация о способах оплаты платежных документов, график работы участков  филиала ПАО «ДЭК» «Камчатскэнергосбыт»."></div>
	<div class="spanhover" style="left:18px; top:-592px; width:391px; height:137px;" title="11. Справочная информация по общедомовому прибору учета (ОДПУ). «Для  распределения» – суммарный расход электрической и тепловой энергии, потребленный гражданами в соответствии с показаниями счетчиков, по средним или нормативным значениям."></div>
	<div class="spanhover" style="left:419px; top:-729px; width:328px; height:132px;" title="12. Сведения о перерасчетах. «Коды перерасчетов» – информация об основании перерасчета за расчетный период (код)."></div>
	<div class="spanhover" style="left:18px; top:-726px; width:516px; height:39px;" title="22. Показания общедомового прибора учёта (ОДПУ)."></div>
	<div class="spanhover" style="left:20px; top:-728px; width:727px; height:81px;" title="21. Уведомление об ограничении (приостановлении) электроснабжения."></div>
</div>

<a href="files/epd_kes_202106.pdf" target="_blank" class="card flex-row p-4 mt-4 mb-4">
  <img src="/images/design2016/icons/pdf.svg" width="64" style="padding-right: 1.25rem;opacity: 0.6">
  <span>Скачать образец  платежного документа <br>
с разъяснением содержащейся в нём информации</span>
</a>

<p>Читайте также:</p>
<ul>
	<li><a href="changing_client_information.php">Изменение регистрационной информации о клиенте<br>
	 (как исправить информацию о владельце, количестве комнат и проживающих)</a></li>
</ul>


<script defer src="/design2019/js/jquery-ui/custom-tooltip/jquery-ui.min.js"></script>
<script defer src="gid.js?2"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>