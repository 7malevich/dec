<!DOCTYPE HTML >
<html>
<head>
<meta http-equiv="x-ua-compatible" content="IE=edge">
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="stylesheet" type="text/css" href="/design2016/css/reset.min.css" />
<link rel="stylesheet" type="text/css" href="/design2016/css/main.css?20190319" />
<link rel="stylesheet" type="text/css" href="/design2016/css/startpage.css?20190201">
<!--[if IE]><link href="/design2016/css/ie.css" rel="stylesheet" type="text/css" /> <![endif]-->

<!-- общие скрипты сайта -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="/js/jquery.cookie.min.js"></script>
<script src="/js/jquery.bgiframe.js"></script>
<script type="text/javascript" src="/js/device.min.js"></script>
<script type="text/javascript" src="/js/crossbrowser.js"></script>
<script type="text/javascript" src="/js/main.js?20191024"></script>

<!-- карта на стартовой -->
<script type="text/javascript" src="/js/start_map.js"></script>
<!-- Скрипт показа и выбора региона -->
<link rel="stylesheet" href="/common/css/ui-lightness/region_select.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="/design2016/css/region2.css" />
<script type="text/javascript" src="/js/region2.js"></script>
<!-- уведомления -->
<script type="text/javascript" src="/js/noty/packaged/jquery.noty.packaged.js"></script>
<!-- всплывающие меню -->
<link rel="stylesheet" type="text/css" href="/js/tooltipst/tooltipster.bundle.min.css" />
<link rel="stylesheet" type="text/css" href="/js/tooltipst/tooltipster-sideTip-noir2.min.css" />
<script type="text/javascript" src="/js/tooltipst/tooltipster.bundle.min.js"></script>

<!-- слайдер -->
	<link rel="stylesheet" type="text/css" href="/js/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/js/slick/slick-theme.css"/>
	<script type="text/javascript" src="/js/slick/slick.min.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-42884817-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!-- активация примочек -->
<script>
   $(document).ready(function() {
       $('.tooltip').tooltipster({
			theme: 'tooltipster-noir2',
			animation: 'grow',
			contentCloning: true,
			interactive:true,
			trigger: 'click' });
	$('.start_brright_rtt').slick({
		autoplay: true,
		autoplaySpeed: 7000,
		arrows: false,
	});
	$('.br_main_slider').slick({
		autoplay: true,
		autoplaySpeed: 4500,
		arrows: false,
		dots: true,
		fade: true,
		cssEase: 'linear',
		speed: 500,
		});
});
</script>
</head>

<body class="page-type"><?$APPLICATION->ShowPanel()?>

<div id="topreg"></div>

<header>
<a name="pagetop"></a>
<div style="width:100%; height:219px; background:white ">
	<div id="hdr" style="margin:0 auto; width:1000px; height:219px; background:#ffffff">
		<div id="hdrlvl1" style="width:1000px; height:25px; background:#e1e1e1">
			<div style="float:left; padding:4px 0 0 25px; width:155px; font-size:12px">Компания входит в группу</div>
			<img src="/images/design2016/rushydro_logo_w89.png" style="width:16px; height:16px; display:block; float:left; padding:4px 4px 0 0">
			<div style="float:left; padding:4px 0 0 0; width:169px; font-size:12px">
				<a href="http://www.rushydro.ru/company/structure/" target="_blank"><b>«РусГидро»</b></a></div>
			<div style="float:right; padding:2px 25px 0 0; width:291px">
				<form action="<?=SITE_DIR?>search" method="get" id="topSearchForm">
					<div style="float:left; background: url('/images/design2016/header_search_fld.gif') no-repeat; width:252px; height: 16px; padding: 3px 4px;">
						<input style="border: none; outline: none; background: transparent; width: 250px; height: 12px; font-size:12px; font-family: 'Roboto'; vertical-align:text-top" type="text" value="" name="q" id="topSearchField">
					</div>
					<div style="float:right"><input type="image" src="/images/design2016/header_search_btn.gif" alt="Искать" id="topSearchSubmit" style="display: block; padding: 0; width: 31px; height: 21px; cursor: pointer"></div>	
				</form>
			</div>
		</div>
		<div id="hdrlvl2" style="width:950px; height:27px; padding: 4px 25px 0 25px; background: url(/images/design2016/header_lvl2_bg.gif); font-size:12px;">
	
<!-- отображение региона -->
	<div onclick="showRegionMenu(1)" class="regionDropDown1" style="background:#fed053; padding-left:3px; float:left; width: 45px; cursor: pointer;">Регион: </div>
	<div onclick="showRegionMenu(1)" style="background:#fed053; padding-right:3px; float:left; cursor: pointer;">Сахалинская область
	<img src="/images/design2016/header_lvl2_region_btn.gif" style="vertical-align:-2px"/></div>
	
	<a class="tooltip" data-tooltip-content="#tooltip_content2" style="display:block; float:right; margin: 0 0 0 36px; padding:0; width:120px; cursor: pointer">
		<img src="/images/design2016/header_lvl2_cabinet.gif" style="display:block; float:left; vertical-align:-4px"/>Личный кабинет</a>
			
	<div style="float:right; margin: 0 0 0 54px; width:134px">
		<a href="/dalsbyt/private_clients/questions_answers/" style="padding:0"><img src="/images/design2016/header_lvl2_priemn.gif" style="display:block; float:left; vertical-align:-4px"/>Вопросы и ответы</a></div>

	<div style="float:right; width:262px">
				Контакт-центр: 8 (800) 775 3 777 </div>
	
<!-- скрытый выбор региона -->
				<div class="sectionBlock region" style="left:25px; top:27px; display: none; background:none; height:25px">
						<label for="regionSelect" style="font-family: 'Roboto'; font-size:12px; color:#000000; margin: 2px 0 0 0">Регион:</label>									 
 
<!--[if lte IE 8]><img id="bxid_500291" src="/bitrix/images/fileman/htmledit2/style.gif"  /><![endif]-->
<!--[if lte IE 6]><img id="bxid_235576" src="/bitrix/images/fileman/htmledit2/style.gif"  /><![endif]-->
 
<!-- блок смены региона --> 
<!--[if lt IE 9]>
<style>
.region_top_menu_name {left:50%; top:0px; padding: 0 0 0 190px; float: left; position:absolute; z-index:999;}
.region_top_menu_btn {left:50%; top:0px; padding: 0 0 0 247px; float: left; position:absolute; z-index:999;}
</style>
<![endif]-->

	<div class="regionDropDown regionDropDown1">
	<div class="region_top_menu_name" style="margin: 4px 0 0 70px; font-family: 'Roboto'; font-size:12px; font-weight:normal; color:#000000;">Общий</div>
	<input type="text" onclick="showRegionMenu(1)" readonly id="regionValue" style="margin: -30px 0 0 59px; background:none; cursor: pointer;"/>
	</div> 


	<div class="region_menu_temp" style="display: none; z-index: 1010;"> 
  <div class="region_menu_content"> 
    <div id="r_menu"> 	 
      <div class="region_item" region="amursbyt" dir_path="\"> 		<span> 		Амурская область		</span> 	</div>
      <div class="region_item" region="amur-blag" dir_path="\"> 		<span> 		&nbsp; - &nbsp;Благовещенск		</span> 	</div>
      <div class="region_item" region="eaosbyt" dir_path="\"> 		<span> 		Еврейская АО		</span> 	</div>
      <div class="region_item" region="khabsbyt" dir_path="\"> 		<span> 		Хабаровский край		</span> 	</div>
      <div class="region_item" region="dalsbyt" dir_path="\"> 		<span> 		Приморский край		</span> 	</div>
      <div class="region_item" region="sakhalin" dir_path="\"> 		<span> 		Сахалинская область		</span> 	</div>
      <div class="region_item" region="yakutiya" dir_path="\"> 		<span> 		Нерюнгринский район РС(Я)		</span> 	</div>
     </div>
   </div>
	</div>

				</div>
                <div class="clear"></div>
		</div>
		<div class="hdrlvl3" style="width:950px; height:95px; padding: 0 25px">
			<div style="float:left; width:405px; padding:9px 12px 0 0"><a href="/sakhalin/" class="gray"><img src="/images/design2016/header_lvl3_logo_2019_dek_ses.png" title="перейти на стартовую страницу" style="height:69px;width:auto"></a></div>
			<div style="float:right; width:154px; height:31px; margin: 10px 0 0 10px; background: url(/images/design2016/header_lvl3_oplata2.gif)"> <a href="/sakhalin/private_clients/payment/" class="bgblue" style="display:block; margin: 2px 2px 0 34px; font-size:16px">Оплата онлайн</a></div>
			<div style="float:right; width:194px; height:31px; margin: 10px 0 0 0; background: url(/images/design2016/header_lvl3_pokazanya2.gif)"> <a href="/pokazaniya/" class="bgblue" style="display:block; margin: 2px 2px 0 30px; font-size:16px">Передача показаний</a></div>
			<div style="float:right; width:307px; height:29px; margin: 6px 0 0 10px; background: url(/images/design2016/header_lvl3_kvit2.gif);"> <a href="/sakhalin/private_clients/receipts/" class="bgblue" style="display:block; margin: 2px 2px 0 30px; font-size:16px">Отказаться от бумажной квитанции</a></div>
			<div style="float:right; width:173px; height:28px; margin: 5px 0 0 0; background: url(/images/design2016/header_lvl3_vo.gif)"> <a href="/sakhalin/private_clients/questions_answers/" class="bgblue" style="display:block; margin: 3px 2px 0 28px; font-size:16px">Вопросы и ответы</a></div>
		</div>
		<div class="hdrlvl4">
			<div style="float:left; width:125px; height:30px; border-right: 1px solid #bfbfbf"><a href="/company/">О КОМПАНИИ</a></div>
			<div style="float:left; width:135px; height:30px; border-right: 1px solid #bfbfbf"><a href="/stockholder/">АКЦИОНЕРАМ <br />И ИНВЕСТОРАМ</a></div>
			<div style="float:left; width:90px;  height:30px; border-right: 1px solid #bfbfbf"><a href="/customs/">ЗАКУПКИ</a></div>
			<div style="float:left; width:125px; height:30px; border-right: 1px solid #bfbfbf"><a href="/sakhalin/private_clients/">ЧАСТНЫМ КЛИЕНТАМ</a></div>
			<div style="float:left; width:140px; height:30px; border-right: 1px solid #bfbfbf"><a href="/organisations/">КОРПОРАТИВНЫМ КЛИЕНТАМ</a></div>
			<div style="float:left; width:195px; height:30px; border-right: 1px solid #bfbfbf"><a href="/iku/">ИСПОЛНИТЕЛЯМ КОММУНАЛЬНЫХ УСЛУГ</a></div>
			<div style="float:left; width:172px; height:30px"><a href="/sakhalin/private_clients/eric/" style="color:#f11241">ЕДИНЫЙ РАСЧЕТНО-ИНФОРМАЦИОННЫЙ ЦЕНТР</a></div>
		</div>
	</div>
</div>
</header>

<!-- Центральный баннер -->
<div id="br_main" style="margin:0 auto; height:400px; background:linear-gradient(to right, rgba(219,229,240,1) 0%, rgba(174,193,214,1) 50%, rgba(219,229,240,1) 100%)">
<div class="br_main_slider" style="width:1000px; height:400px; margin:0 auto; background-color:#fff">
	<!-- <a href="/press_center/news_dvec/index.php?ID=17908" style="display:block; width:1000px; height:400px; background:url(/images/design2016/br_main_2019_spis_peni.jpg) no-repeat scroll center center #ffffff;">
		<div style="position:absolute; bottom:20px; right:15px; background:rgba(13,79,156,.8); padding:20px;"><span style="color:white; font-size:22px">
			Ознакомиться с условиями акции &gt;&gt;&gt;</span></div>
	</a> -->
	<!-- <a href="/pokazaniya/" style="display:block; width:1000px; height:400px; background:url(/images/design2016/br_main_tel.jpg) no-repeat scroll center center #ffffff;">
		<div style="position:absolute; bottom:20px; right:15px; width:305px; background:rgba(13,79,156,.8); padding:20px"><span style="color:white; font-size:22px">
		Успейте передать показания<br>с 15 по 25 число!</span></div></a> -->
	<a href="/sakhalin/private_clients/anketa/" style="display:block; width:1000px; height:400px; background:url(/images/design2016/br_main_anketa2.jpg) no-repeat scroll center center #ffffff;">
		<div style="position:absolute; bottom:20px; right:15px; background:rgba(13,79,156,.8); padding:20px;width:311px"><span style="color:white; font-size:22px">
			Опрос: передача показаний. Нам важно ваше мнение!</span></div></a>
	<a href="/sakhalin/private_clients/readings_reports/" style="display:block; width:1000px; height:400px; background:url(/images/design2016/br_main_tel.jpg) no-repeat scroll center center #ffffff;">
		<div style="position:absolute; bottom:20px; right:15px; width:400px; background:rgba(13,79,156,.8); padding:20px"><span style="color:white; font-size:22px">
		Как передать показания по телефону: робот принимает звонки круглосуточно</span></div></a>

</div>
</div>


<div class="wrap">
	<div style="padding:0 0 10px 0">
<!-- блок слева: меню и баннеры 
<aside>
</aside> -->
<!-- основной контент -->
<article>
<div id="start_newslist" style="height:388px; background:none; border-bottom: 1px solid #ebebeb">
	<a class="linkblack" href="private_clients/dps/" style="display:block; margin:-5px 0 15px 0;height: 110px;">
		<img src="/images/design2016/icons/money.svg" style="float:left;width:64px;margin: 1px 25px 20px 0;">
		<h1 style="margin-bottom: 10px; font:400 20px/23px 'Roboto Slab'; text-transform:none">Расходы на электроэнергию растут<br>при ненадлежащем состоянии прибора учета</h1>
		<p style="font: 400 16px/23px Roboto;text-align:justify;margin-bottom:10px;">Уважаемые клиенты! Напоминаем Вам о необходимости замены прибора учета при истечении его межповерочного интервала &gt;&gt;&gt;</p>
	</a>
	<div style="padding:0 0 20px 0">
	<a href="/press_center/news_dvec/" style="font: 400 20px/20px 'Roboto Slab'">ВСЕ НОВОСТИ</a>
	</div>
<?$arrFilter = Array(
"SECTION_ID" => Array(561,190),
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"design2016_newslist", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/press_center/news_dvec/?ID=#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DATE_ACTIVE_FROM",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "34",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "300",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "DATE_ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "design2016_newslist",
		"TEMPLATE_THEME" => "blue",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
</div>

<div id="start_brright" style="height:390px; border-bottom: 1px solid #ebebeb">
	<div class="tooltip" data-tooltip-content="#tooltip_content2" style="cursor: pointer; height:110px; padding: 0 0 20px 15px"><img src="/images/design2016/start_pages/brright_lk.gif" alt="Откройте личный кабинет в вашем смартфоне - всего за несколько минут!" style="width:290px; height:110px"></div>
	<!-- <a href="/press_center/news_dvec/index.php?ID=17908" style="display:block; padding: 0 0 17px 15px"><img src="/images/design2016/start_pages/brright_2019penya2.jpg" title="Акция по списанию пени. Ознакомиться с условиями акции" style="width:290px; height:110px"></a>
-->
	<a href="/organisations/edo/" style="display:block; padding: 0 0 17px 15px"><img src="/images/design2016/br_edo.jpg" alt="Электронный документооборот для корпоративных клиентов"></a>
	<div class="start_brright_rtt" style="height:130px">
		<a href="https://forumvostok.ru/" target="_blank" style="display:block; padding: 0 0 17px 15px"><img src="/images/design2016/start_pages/brright_vef_2019.png" alt="Восточный экономический форум 2019" style="outline:1px solid #b8dde5; outline-offset:-1px"></a>
		<a href="https://rusenergyweek.com/" target="_blank" style="display:block; padding: 0 0 17px 15px"><img src="/images/design2016/start_pages/brright_ren_2019.png" alt="РОССИЙСКАЯ ЭНЕРГЕТИЧЕСКАЯ НЕДЕЛЯ 2019"></a>
		<a href="https://вместеярче.рф/" target="_blank" style="display:block; padding: 0 0 17px 15px"><img src="/images/design2016/start_pages/brright_vmyarche_2019.png" alt="Всероссийский фестиваль энергосбережения и экологии Вместеярче"></a>
		<a href="http://rushydro15.ru/" target="_blank" style="display:block; padding: 0 0 17px 15px"><img src="/images/design2016/br_rh15.jpg" alt="РусГидро - 15 лет!"></a>
		<a href="http://www.photocontest.rushydro.ru/" target="_blank" style="display:block; padding: 0 0 17px 15px"><img src="/images/design2016/br_rhydro_photo_290x110.png" alt="Всероссийский фотоконкурс РусГидро"></a>
		<a href="private_clients/questions_answers/" style="display:block; padding: 0 0 17px 15px"><img src="/images/design2016/start_pages/brright_obraschenie.png" alt="Направить обращение" title="Направить обращение" style="width:290px; height:110px"></a>
	</div>
</div>


		<div class="colright" style="margin:25px 139px 0 0">
			<div class="article"><h1><?=$APPLICATION->ShowTitle()?></h1>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
	"START_FROM" => "0",
	"PATH" => "",
	"SITE_ID" => "r2"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
			<div style="height:15px"></div>
			