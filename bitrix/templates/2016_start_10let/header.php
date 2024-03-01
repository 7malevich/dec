<!DOCTYPE html >

<html>
<head>

<!-- Use Internet Explorer Edge mode -->
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
<!-- попап -->
<link rel="stylesheet" href="/js/magnific-popup.css">
<script src="/js/magnific-popup.js"></script>
</head>

<body class="page-type" style="background:#ffffff"><?$APPLICATION->ShowPanel()?>

<div id="topreg"></div>
<div id="br_main" style="margin:0 auto; height:450px; background: url(/images/design2016/br_main_prim_1b.jpg) no-repeat scroll center 43px #ffffff;">
<header>
<div style="width:100%; height:218px; background:#ffffff ">
	<div id="hdr" style="height:218px">
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
<div onclick="showRegionMenu(1)" class="regionDropDown1" style="float:left; width: 45px; cursor: pointer;">Регион: </div>
<div onclick="showRegionMenu(1)" style="float:left; cursor: pointer;">Общий 
<img src="/images/design2016/header_lvl2_region_btn.gif" style="vertical-align:-2px"/></div>

			<div style="float:right; margin: 0 0 0 36px; width:120px">
				<a href="/private_clients/cabinet/" style="padding:0"><img src="/images/design2016/header_lvl2_cabinet.gif" style="display:block; float:left; vertical-align:-4px"/>Личный кабинет</a></div>
			
			<!-- <div style="float:right; margin: 0 0 0 54px; width:134px">
				<a href="/private_clients/questions_answers/" style="padding:0"><img src="/images/design2016/header_lvl2_priemn.gif" style="display:block; float:left; vertical-align:-4px"/>Вопросы и ответы</a></div> -->
			
			<div style="float:right; width:262px; margin-right:180px">
				<a href="/private_clients/service/uniform_information_centre/">Информационный центр: 8 (800) 100 3 777</a></div>

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
			<div style="float:left; width:405px; padding:9px 12px 0 0"><a href="/" class="gray"><img src="/images/design2016/header_lvl3_logo_2019_dek.png" title="перейти на стартовую страницу" style="height:69px;width:auto;margin-top:5px"></a></div>
			<div style="float:right; width:154px; height:31px; margin: 10px 0 0 10px; background: url(/images/design2016/header_lvl3_oplata2.gif)"> <a href="/private_clients/payment/cards_online/" class="bgblue" style="display:block; margin: 2px 2px 0 34px; font-size:16px">Оплата онлайн</a></div>
			<div style="float:right; width:194px; height:31px; margin: 10px 0 0 0; background: url(/images/design2016/header_lvl3_pokazanya2.gif)"> <a href="/pokazaniya/" class="bgblue" style="display:block; margin: 2px 2px 0 30px; font-size:16px">Передача показаний</a></div>
			<div style="float:right; width:307px; height:29px; margin: 6px 0 0 10px; background: url(/images/design2016/header_lvl3_kvit2.gif);"> <a href="/private_clients/receipts/" class="bgblue" style="display:block; margin: 2px 2px 0 30px; font-size:16px">Отказаться от бумажной квитанции</a></div>
			<div style="float:right; width:173px; height:28px; margin: 5px 0 0 0; background: url(/images/design2016/header_lvl3_vo.gif)"> <a href="/private_clients/questions_answers/" class="bgblue" style="display:block; margin: 3px 2px 0 28px; font-size:16px">Вопросы и ответы</a></div>
		</div>
		<div class="hdrlvl4">
			<div style="float:left; width:125px; height:30px; border-right: 1px solid #bfbfbf"><a href="/company/">О КОМПАНИИ</a></div>
			<div style="float:left; width:141px; height:30px; border-right: 1px solid #bfbfbf"><a href="/stockholder/">АКЦИОНЕРАМ <br />И ИНВЕСТОРАМ</a></div>
			<div style="float:left; width:95px; height:30px; border-right: 1px solid #bfbfbf"><a href="/customs/">ЗАКУПКИ</a></div>
			<div style="float:left; width:131px; height:30px; border-right: 1px solid #bfbfbf"><a href="/private_clients/">ЧАСТНЫМ КЛИЕНТАМ</a></div>
			<div style="float:left; width:145px; height:30px; border-right: 1px solid #bfbfbf"><a href="/organisations/">КОРПОРАТИВНЫМ КЛИЕНТАМ</a></div>
			<div style="float:left; width:201px; height:30px; border-right: 1px solid #bfbfbf"><a href="/iku/">ИСПОЛНИТЕЛЯМ КОММУНАЛЬНЫХ УСЛУГ</a></div>
			<div style="float:left; width:131px; height:30px"><a href="/press_center/">ПРЕСС-ЦЕНТР</a></div>
		</div>
	
		<img src="nam10let.png" style="float:right; margin:75px 356px 0 0" />
	</div>
</div>
</header>
</div>


<!-- основной контент -->

