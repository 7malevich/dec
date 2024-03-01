<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><style>
	.text-white {color:#fff}
	.text-blue {color:rgb(20,90,152)}
	.text-orange {color:#f58a22}
	.border-orange {border-color:#f58a22}
	.border-round {border-radius:10px}
	.portfolio-wrapper { background:inherit !important; border-radius:10px }
	.bg-violet {background-color:rgb(42,43,92)}
	footer.footer .contact-details { margin:15px 0 }
	.shadowed {box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;}
	.content-row { margin-left:0;margin-right:0 }
</style>

<header style="background-image: url('/15/include/img/0-bg.jpg');">
        <div class="intro-content">
			<div class="brand-name"><br><br><br><br><br><br><br></div>
			<!-- <img src="/15/include/img/logo-vert-h500.png" class="img-responsive img-centered" alt=""> -->
			<div class="brand-name" style="font-family:'Roboto'; color:rgb(245,138,34)">
15 лет
			</div>
            <hr class="colored">
			<div class="brand-name-subtext" style="font-family:'Raleway';font-weight:600">
РАСШИРЯЕМ&nbsp;&nbsp;ГРАНИЦЫ
<BR>И НЕСЁМ СВЕТ И ТЕПЛО
			</div>
        </div>
        <div class="scroll-down">
            <a class="btn page-scroll" href="#territoriya"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
</header>





<section id="eric" style="background-color:rgb(20,89,154)">
	<div class="row text-center content-row">
		<h1 style="color:white;text-decoration:underline;margin-bottom:50px">Открытие ЕРИЦ</h1>
	</div>
	<div class="container wow fadeIn">
		<div class="row text-justify">
			<div class="col-sm-12 text-white">
				<p>ДЭК имеет большой опыт по сбыту электрической и тепловой энергии, организации ЕРИЦ, внедрению различных сервисов, обладает большим спектром возможностей по повышению качества услуг. За несколько лет компания открыла двенадцать Единых расчетно-информационных центров ПАО «ДЭК» в Комсомольске-на-Амуре, Вяземске и Амурске (Хабаровский  край),  Уссурийске,  Владивостоке, Находке, Артеме (Приморский  край),  Нерюнгри (Якутия), Холмске, Южно-Сахалинске (Сахалинская область), Петропавловске–Камчатском (Камчатский край), Благовещенске, Тынде (Амурская область).</p>
				<p>В ЕРИЦ частные и корпоративные клиенты в режиме «одного окна» смогут получить консультационную помощь по начислению платы за электроэнергию и тепло, оплатить услуги, а также решить любые вопросы, касающиеся энергоснабжения. </p>
				<p>Каждый новый офис демонстрирует передовые разработки и технологии в сфере обслуживания клиентов. В единых расчетно-информационных центрах представлены самые современные разработки российских специалистов, которые позволяют организовать комфортное и максимально удобное предоставление услуг клиентам. В первую очередь активная реализация проекта ЕРИЦ способствует исполнению указов Президента Российской Федерации в части выполнения государственных программ «Цифровая экономика» и «Доступная среда». </p>
				<p>В начале 2022 года в Якутске будет открыт второй на территории региона единый расчетно-информационный центр (ЕРИЦ).</p>
			</div>
		</div>
	</div>
	<div class="container text-center wow fadeIn" style="margin-top:50px">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"portfolio", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "portfolio",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"IBLOCK_ID" => "241",
		"IBLOCK_TYPE" => "in_studio_landing_15",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "VIDY_RABOT",
			1 => "FON",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"CACHE_FILTER" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"STRICT_SECTION_CHECK" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>

</div>
</section> 


<section id="charge" class="bg-dark bg-violet" style="padding-bottom:0">
	<div class="container wow fadeIn animated">
	<div class="row">
		<div class="col-md-6 text-center">
			<h1 style="text-decoration:underline; margin-bottom:20px">УСТАНОВКА ЭЗС</h1>
			<p>Параллельно с расширением сферы предоставляемых услуг в 2019 году ПАО «ДЭК» включилось в Программу развития электрозарядной инфраструктуры Группы РусГидро.</p>
			<p>На сегодняшний день действует сеть из 20 быстрых зарядных станций Группы РусГидро для электромобилей. Они расположены в Приморском крае: во Владивостоке, Уссурийске и Артеме, в Амурской области: в Благовещенске, в Хабаровском крае: в Хабаровске, Камчатском крае: в Петропавловске-Камчатском.</p>
			<p>Программа по развитию электротранспорта и соответствующей необходимой зарядной инфраструктуры на Дальнем Востоке рассчитана до 2022 года.</p>
		</div>
		<div class="col-md-6">
			<img src="include/img/4-2.jpg" class="img-responsive border-round" alt="">
		</div>
	</div>
</div>
<script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script> 
	<script src="/charge/stations.js?210326" type="text/javascript"></script>
<div id="map" style="width: 100%; height: 560px; margin:50px 0 0 0"></div>
</section><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>