<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><style>
	.text-white {color:#fff}
	.text-blue {color:rgb(20,90,152)}
	.text-orange {color:#f58a22}
	.border-orange {border-color:#f58a22}
	.border-round {border-radius:10px}
	.shadowed {box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;}
	.bg-violet {background-color:rgb(42,43,92)}
	.portfolio-wrapper { background:inherit !important; border-radius:10px }
	footer.footer .contact-details { margin:15px 0 }
	.content-row { margin-left:0;margin-right:0 }
	.testimonials .testimonials-carousel .owl-controls .owl-prev, .testimonials .testimonials-carousel .owl-controls .owl-next { width:60px; border-radius:30px !important }
	h1, h3 { font-weight:800 }
	.footer-nav__social-link { padding: 5px 2px; opacity:0.8 }
	.roboto { font-family:'Roboto'}
	.mt15px { margin-top:15px }
	.mt-50 { margin-top:50px }
	.mb-0 { margin-bottom:0 }
@media (max-width: 767.98px) {
	.portfolio-modal .modal-content h2 { font-size: 38px }
	h1 { font-size: 32px }
	h3 { font-size: 21px }
	.hide-mobile { display:none }
}
</style>

<header style="background-image: url('/15/include/img/0-bg5.jpg');">
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
            <a class="btn page-scroll" href="#history"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
</header>


<section class="testimonials" id="history">
<div class="container wow fadeIn">
	<!-- <h1 class="text-blue" style="text-decoration:underline; margin-bottom:50px">ИСТОРИЯ КОМПАНИИ</h1> -->
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div class="testimonials-carousel">
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2007:</h2>
					<hr class="border-orange mt15px">
					<h3>ДЭК начинает операционную деятельность, становится основным Гарантирующим поставщиком электроэнергии.</h3>
					<h3>ДЭК – преемник образованного в 1937 году районного управления «Дальэнерго».</h3>
					<div style="height:30px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2008:</h2>
					<hr class="border-orange mt15px">
					<h3>Компания переходит на новую форму работы с потребителями – пакетное выставление квитанций.</h3>
					<div style="height:70px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2009:</h2>
					<hr class="border-orange mt15px">
					<h3>ДЭК принимает функции сбыта электроэнергии на территории Шкотовского района, ЗАТО Большой Камень и Фокино – новыми абонентами энергокомпании становятся 35 тысяч физических лиц и 859 предприятий юга Приморья.</h3>
					<div style="height:30px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2010:</h2>
					<hr class="border-orange mt15px">
					<h3>Компания приступила к реализации программы энергосбережения - закон обязывает потребителей установить приборы учета электроэнергии.</h3>
					<h3>Увеличивается территория обслуживания – ДЭК принимает функцию сбыта в 10 населенных пунктах Ванинского района Хабаровского края.</h3>
					<div style="height:30px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2011:</h2>
					<hr class="border-orange mt15px">
					<h3>Компания запускает «Личный кабинет». Новая услуга позволила абонентам получать актуальную информацию о своем лицевом счете,  вводить показания приборов учета, самостоятельно заполнять и распечатывать квитанции на оплату.</h3>
					<h3>Открыто четыре новых офиса. </h3>
					<div style="height:30px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2012:</h2>
					<hr class="border-orange mt15px">
					<h3>ДЭК – первая энергетическая компания Дальнего Востока, запустившая новую услугу для потребителей – оплату электроэнергии через интернет.</h3>
					<div style="height:70px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2013:</h2>
					<hr class="border-orange mt15px">
					<h3>Утверждена Программа по повышению качества обслуживания клиентов.</h3>
					<h3>Инфраструктура очного обслуживания клиентов была пересмотрена в сторону повышения комфортной среды обслуживания в офисах и переходу на многоканальные сервисы.</h3>
					<div style="height:30px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2014:</h2>
					<hr class="border-orange mt15px">
					<h3>Компания получила 100% доли участия ООО «Энергокомфорт.Амур», расширив тем самым зону обслуживания.</h3>
					<h3>Абонентами ДЭКа стали 100 тысяч потребителей-физических лиц  Благовещенска и 2400 юридических. </h3>
					<div style="height:30px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2015:</h2>
					<hr class="border-orange mt15px">
					<h3>ПАО «ДЭК» получило статус гарантирующего поставщика электроэнергии в г. Арсеньеве, Дальнегорске,  Дальнереченске,  Лесозаводске  в  связи  с  лишением  данного  статуса  оптовых  перепродавцов  электроэнергии.</h3>
					<h3>На обслуживание перешло около 88 тысяч физических лиц. </h3>
					<div style="height:30px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2016:</h2>
					<hr class="border-orange mt15px">
					<h3>Открыто два новых современных офиса. </h3>
					<div style="height:70px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2017:</h2>
					<hr class="border-orange mt15px">
					<h3>Полномочия единоличного   исполнительного   органа   переданы АО «ЭСК РусГидро». Проведены   ребрендинг и смена фирменной символики ДЭК к бренд-буку ПАО «РусГидро».</h3>
					<h3>Появляется первая на Дальнем Востоке мультиквитанция, включающая в себя 8 услуг. </h3>
					<div style="height:30px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2018:</h2>
					<hr class="border-orange mt15px">
					<h3>Заключен договор расчета услуг теплоснабжения и ГВС с  генерирующей компанией - АО «ДГК».  Клиентам четырех регионов выставляется единый платежный документ, ДЭК производит обслуживание по принципу «единого окна».</h3>
					<h3>Присоединена территория Сахалинской области, создан филиал «Сахалинэнергосбыт».</h3>
					<div style="height:70px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2019:</h2>
					<hr class="border-orange mt15px">
					<h3>Утвержден Стандарт обслуживания, направленный на повышение уровня удовлетворенности клиентов, развитие интерактивных сервисов.</h3>
					<h3>К филиалу «Амурэнергосбыт» присоединен Нерюнгринский район Республики Саха (Якутия).</h3>
					<div style="height:70px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2020:</h2>
					<hr class="border-orange mt15px">
					<h3>Присоединена территория Камчатского края - создан филиал «Камчатскэнергосбыт».</h3>
					<div style="height:70px"></div>
				</div>
				<div class="item" style="text-align:center">
					<h2 class="text-orange roboto">2021:</h2>
					<hr class="border-orange mt15px">
					<h3>Дальневосточная энергетическая компания становится крупнейшей энергосбытовой компанией России, приняв  на себя энергосбытовые функции в зоне деятельности ПАО «Якутскэнерго».</h3>
					<div style="height:30px"></div>
				</div>
			</div>
		</div>
	</div>
	<div style="height:30px"></div>
</div>
</section>


<section id="territoriya" style="background-color:rgb(20,89,154)">
	<div class="row text-center content-row">
		<h1 style="color:white;text-decoration:underline; margin-bottom:50px">Расширение зоны обслуживания</h1>
		<div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".4s">
			<img src="include/img/1-a.png" class="img-responsive">
		</div>
		<div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.8s">
			<img src="include/img/1-b5.png" class="img-responsive">
		</div>
	</div>
<div class="container wow fadeIn">
	<div class="row text-justify" style="margin-top:35px">
		<div class="col-sm-12 text-white">
			<p>За 15 лет ПАО «ДЭК» расширило свое присутствие с четырех до семи регионов Дальнего Востока, увеличив количество обслуживаемых клиентов в два раза, 
а объем поставляемой энергии -  в 1,5. Количество оказываемых населению и предприятиям Дальнего Востока услуг возросло в десятки раз.  Сегодня компания ведет 
свою деятельность  на территории Приморского края, Хабаровского края, Амурской области, ЕАО, Сахалинской области, Камчатского края, Республики Саха (Якутия).</p>
			<p>В 2021 году с принятием сбытовых функций в Якутии, Дальневосточная энергетическая компания становится крупнейшей по территории обслуживания 
энергосбытовой компанией России. ДЭК обслуживает 3,4 млн лицевых счетов частных и 103 тыс. корпоративных клиентов, оказывая очные консультации в 155 офисах 
от Сахалина до Якутии, реализуя свыше 39 млрд кВт·ч ежегодно.</p>
		</div>
	</div>
</div>
</section> 


<section class="testimonials" id="services">
<div class="container wow fadeIn">
	<h1 class="text-blue mb-0" style="text-decoration:underline">РАЗВИТИЕ ИНТЕРАКТИВНЫХ СЕРВИСОВ</h1>
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<div class="testimonials-carousel">
				<div class="item" style="text-align:center">
					<img src="include/img/2-edo.jpg" class="border-round hide-mobile mt-50">
					<h3 class="text-orange">Электронный документооборот<br>для юридических лиц</h3>
					<hr class="border-orange">
					<p>Интернет-сервис позволяет оперативно заключать договоры, обмениваться счетами-фактурами, актами и прочей документацией, сверять взаиморасчеты и передавать корреспонденцию в цифровом виде. Его плюсы уже оценили потребители, которые дорожат собственным временем и предпочитают работу в онлайн-режиме. </p>
				</div>
				<div class="item" style="text-align:center">
					<img src="include/img/2-eic.jpg" class="border-round hide-mobile mt-50">
					<h3 class="text-orange">Единый контактный центр</h3>
					<hr class="border-orange">
					<p>В сентябре 2020 года открыт уникальный в сфере ЖКХ Единый контактный центр. Его задача – оказание консультационной помощи 3,4 миллионам клиентов компании, проживающих на всех территориях обслуживания. По единому номеру 8 800-234-77-77 клиенты могут получить любую консультацию по всем услугам, включенным в квитанцию, заказать обратный звонок, записаться на прием и многое другое. Современное оборудование центра и IP-телефония гарантируют высокое качество связи и обеспечивают большой объем принимаемых звонков – до 20 тысяч в день.</p>
				</div>
				<div class="item" style="text-align:center">
					<img src="include/img/2-lkfl.jpg" class="border-round hide-mobile mt-50">
					<h3 class="text-orange">Личный кабинет<br>корпоративного клиента и ИКУ</h3>
					<hr class="border-orange">
					<p>С 1 апреля 2021 г. исполнители коммунальных услуг и корпоративные клиенты Дальневосточной энергетической компании в Амурской области, Еврейской АО, Хабаровском и Приморском крае могут получить широкий спектр услуг без посещения офисов компании, достаточно иметь компьютер, подключенный к сети Интернет.</p>
				</div>
				<div class="item" style="text-align:center">
					<img src="include/img/2-elkvit.jpg" class="border-round hide-mobile mt-50">
					<h3 class="text-orange">Квитанции по электронной почте</h3>
					<hr class="border-orange">
					<p>Все больше клиентов ПАО «ДЭК» сегодня переходит на электронные квитанции. Они всегда под рукой в любой части мира, потому что приходят на e-mail, причем на 5-7 дней быстрее своего бумажного аналога. А еще это очень экологично: отказ от подобных бумажных носителей позволяет сохранять больше лесов.</p>
				</div>
				<div class="item" style="text-align:center">
					<img src="include/img/2-lkkk.jpg" class="border-round hide-mobile mt-50">
					<h3 class="text-orange">Личный кабинет и приложение<br>для физических лиц</h3>
					<hr class="border-orange">
					<p>Главное преимущество личного кабинета – многофункциональность. С его помощью можно передать показания, оплатить услуги, распечатать квитанцию, посмотреть историю начислений и платежей и многое другое.</p>
				</div>
				<div class="item" style="text-align:center">
					<img src="include/img/2-priemnaya.jpg" class="border-round hide-mobile mt-50">
					<h3 class="text-orange">Интернет-приемная</h3>
					<hr class="border-orange">
					<p>Ранее специалисты энергосбытовой компании обрабатывали ежемесячно от 500 до 1000 обращений через «Виртуальную приемную». В год самоизоляции эта цифра выросла в 2,5-3 раза. Ежемесячно более 2,5 тысяч клиентов получают консультации и необходимые справки через данный сервис.</p>
				</div>
				<div class="item" style="text-align:center">
					<img src="include/img/2-pokazaniya.jpg" class="border-round hide-mobile mt-50">
					<h3 class="text-orange">Передача показаний онлайн</h3>
					<hr class="border-orange">
					<p>Сегодня ДЭК предлагает клиентам более 10 дистанционных сервисов по передаче показаний, каждый может выбрать наиболее удобный способ.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<section id="eric" style="background-color:rgb(20,89,154)">
	<div class="row text-center content-row">
		<h1 style="color:white;text-decoration:underline;margin-bottom:50px">Открытие ЕДИНЫХ<br>РАСЧЁТНО-ИНФОРМАЦИОННЫХ ЦЕНТРОВ (ЕРИЦ)</h1>
	</div>
	<div class="container wow fadeIn">
		<div class="row text-justify">
			<div class="col-sm-12 text-white">
				<p>ДЭК имеет большой опыт по сбыту электрической и тепловой энергии, организации ЕРИЦ, внедрению различных сервисов, обладает большим спектром возможностей по повышению качества услуг. За несколько лет компания открыла четырнадцать уникальных  Единых расчетно-информационных центров ПАО «ДЭК», где частные и корпоративные клиенты в режиме «одного окна» могут получить консультационную помощь по начислению платы за электроэнергию и тепло, оплатить услуги, а также решить любые вопросы, касающиеся энергоснабжения.</p>
				<p>Каждый новый офис демонстрирует передовые разработки и технологии в сфере обслуживания клиентов. В единых расчетно-информационных центрах представлены самые современные разработки российских специалистов, которые позволяют организовать комфортное и максимально удобное предоставление услуг клиентам. В первую очередь активная реализация проекта ЕРИЦ способствует исполнению указов Президента Российской Федерации в части выполнения государственных программ «Цифровая экономика» и «Доступная среда».</p>
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
			<p style="font-size:1.2em">Параллельно с расширением сферы предоставляемых услуг в 2019 году ПАО «ДЭК» включилось в Программу развития электрозарядной инфраструктуры.</p>
			<p style="font-size:1.2em">На сегодняшний день действует сеть из 51 быстрых зарядных станций Группы РусГидро для электромобилей. Они расположены в 19 городах Приморского и Хабаровского краев, Камчатского края, Амурской и Сахалинской областей.</p>
			<p style="font-size:1.2em">Программа предусматривает развитие сети ЭЗС, чтобы обеспечить комфортное передвижение между городами ДФО на электромобилях. </p>
		</div>
		<div class="col-md-6">
			<img src="include/img/4-2.jpg" class="img-responsive border-round" alt="">
		</div>
	</div>
</div>
<div style="position:relative;overflow:hidden">
  <a href="https://yandex.ru/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс.Карты</a>
  <a href="https://yandex.ru/maps/?from=api-maps&ll=145.508141%2C52.610612&mode=usermaps&origin=jsapi_2_1_79&um=constructor%3Ac1a1491d33a659572000772c3f0794d48d6b022f672064fffcdb0265ce1cf144&utm_medium=mapframe&utm_source=maps&z=4.8" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс.Карты — транспорт, навигация, поиск мест</a>
  <iframe src="https://yandex.ru/map-widget/v1/-/CCU5eMx-GC" width="100%" height="510px" frameborder="0" allowfullscreen="true" style="position:relative"></iframe>
</div>
</section><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>