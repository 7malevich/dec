<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html>
<head><?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="stylesheet" type="text/css" href="/css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/region2.css">
	<link rel="stylesheet" type="text/css" href="/js/jquery.selectbox/jquery.selectbox.css">
	<!--[if IE]><link href="/css/ie.css" rel="stylesheet" type="text/css" /> <![endif]-->
	<script type="text/javascript" src="/js/crossbrowser.js"></script>
	<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery.selectbox/jquery.selectbox-0.6.1.min.js"></script>
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
</head>
<body class="page-start"><?$APPLICATION->ShowPanel();?>

<div class="wrap">
	<div class="header">
		<a class="logo" href="/amur-blag/"></a>
		<div class="main">
			<div class="topSection">
				<!--Навигация-->
				<div class="sectionBlock links">
					<div class="c left"></div><div class="c right"></div>
					<div style="padding: 7px 0 0; height: 28px;">
						<a href="/amur-blag/" class="icon-home"><img border="0" src="/images/newdesign/icon_small_home.gif"></a>
						<a href="/amur-blag/" class="gray home">Главная</a>
						<span class="l">|</span>
						<a href="/sitemap/" class="gray">Карта сайта</a> <span class="l">|</span>
						<a href="/company/contacts/" class="gray">Обратная связь</a>
					</div>
				</div>
				<!--Поиск с места-->
				<div class="sectionBlock search">
					<div class="c left"></div><div class="c right"></div>
					<form action="/amur-blag/search" method="get" id="topSearchForm">
						<div class="row"><!--Относительное позиционирование добавить-->
							<div class="input-bg">
								<input type="text" value="Поиск по сайту" name="q"
									   data-label="Поиск по сайту" id="topSearchField">
							</div>
							<div class="abs-wrap"><a class="submit" id="topSearchSubmit"></a></div>
						</div>
					</form>
				</div>
<!-- Выбор региона -->
				<div class="sectionBlock region">
					<div class="c left"></div><div class="c right"></div>
						<label for="regionSelect">Регион:</label>
																																																																													
																									 
<!--jquery-1.2.6-->
<script src="/common/js/jScrollPane-1.2.3.js"></script>
<script src="/common/js/jquery.mousewheel.min.js"></script>
<script src="/common/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/common/js/jquery-ui-1.7.2.custom.min.js"></script>
<script src="/common/js/jquery.bgiframe.min.js"></script>
<link rel="stylesheet" href="/common/css/ui-lightness/jquery-ui-1.7.2.custom.css" type="text/css" media="screen"></link> <link rel="stylesheet" href="/common/css/ui-lightness/region_select.css" type="text/css" media="screen"></link> <link rel="stylesheet" type="text/css" href="/common/css/jScrollPane.css"></link> 
<script type="text/javascript" src="/js/main.js"></script>
 
<!--[if lte IE 8]><img id="bxid_500291" src="/bitrix/images/fileman/htmledit2/style.gif"  /><![endif]-->
<!--[if lte IE 6]><img id="bxid_235576" src="/bitrix/images/fileman/htmledit2/style.gif"  /><![endif]-->
 
<div style="display: none;" id="select_region_dialog"> <img class="close-menu-button2" src="/common/css/ui-lightness/images/close.jpg" style="margin:40px 0 0 590px"  /> 
  <h1>Добро пожаловать на сайт ПАО &quot;ДЭК&quot;!</h1>
 
  <p class="regionch">Выберите в списке интересующий Вас регион.</p>
 <input type="hidden" id="regionDialogSelect" value="dalsbyt" /> 
  <div class="regionDropDown regionDropDown2" style="position: relative; left: 330px;"> <input type="text" id="regionValue2" readonly="" onclick="showRegionMenu()" /> <img class="dropbtn dropbtn2" src="/common/img/head/dropdown_button.png" onclick="showRegionMenu()"  /> </div>
 
  <p class="regioninf">В дальнейшем Вы всегда можете изменить выбранный регион в верхней части сайта. 
    <br />
   Во время следующего посещения регион будет выбран автоматически.</p>
 <img class="w_button_img" src="/common/img/head/w_button.gif"  /> </div>

<!-- блок смены региона --> 
<!--[if lt IE 9]>
<style>
.region_top_menu_name {left:50%; top:0px; padding: 0 0 0 190px; float: left; position:absolute; z-index:999;}
.region_top_menu_btn {left:50%; top:0px; padding: 0 0 0 247px; float: left; position:absolute; z-index:999;}
</style>
<![endif]-->

<div class="regionDropDown regionDropDown1"><input type="text" onclick="showRegionMenu(1)" readonly="" id="regionValue" /></div>
<div class="region_top_menu_name">Благовещенск</div>
<img class="region_top_menu_btn" src="/common/img/head/dropdown_button1.png" onclick="showRegionMenu(1)" />

<div class="region_menu_temp" style="display: none; z-index: 1010;"> 
  <div class="region_menu_content"> 
    <div id="r_menu"> 	 
      <div class="region_item" region="amursbyt" dir_path="\"> 		<span> 		Амурская область		</span> 	</div>
      <div class="region_item" region="amur-blag" dir_path="\"> 		<span> 		&nbsp; - &nbsp;Благовещенск		</span> 	</div>
      <div class="region_item" region="eaosbyt" dir_path="\"> 		<span> 		Еврейская АО		</span> 	</div>
      <div class="region_item" region="khabsbyt" dir_path="\"> 		<span> 		Хабаровский край		</span> 	</div>
      <div class="region_item" region="dalsbyt" dir_path="\"> 		<span> 		Приморский край		</span> 	</div>
     </div>
   </div>
 </div>

<!-- Скрипт показа и выбора региона -->
<script type="text/javascript" src="/js/region2.js"></script>
				</div>
                               <div class="clear"></div>
			</div>
<!-- Лого и меню -->
			<div class="topNav">
				<a class="logoText" href="/amur-blag/"></a>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "main",
					Array(
						"ROOT_MENU_TYPE" => "main",
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "main",
						"USE_EXT" => "N",
						"ALLOW_MULTI_SELECT" => "Y",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "N",
						"MENU_CACHE_GET_VARS" => array()
					)
				);?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

<!--Главный баннер-->
<img class="bannerStart" width="903" height="285"
			 src="/images/newdesign/br_main_amur-blag_summer_20160310.jpg">
<!--Главные иконки-->
	<ul class="centerMenu">
		<li><a href="/amur-blag/private_clients/cabinet/">
				<img border="0" src="/images/newdesign/icon_cabinet.png" width="48" height="62">
			</a>
			<a href="/amur-blag/private_clients/cabinet/" class="label cabinet"></a>
		</li>
		<li><a href="/amur-blag/private_clients/contractual_relations/order_conclusion_contracts/">
				<img border="0" src="/images/newdesign/icon_connect.png" width="69" height="56">
			</a>
			<a href="/amur-blag/private_clients/contractual_relations/order_conclusion_contracts/" class="label connect"></a>
		</li>
		<li><a href="/amur-blag/private_clients/payment/">
				<img border="0" src="/images/newdesign/icon_payment.png" width="50" height="58">
			</a>
			<a href="/amur-blag/private_clients/payment/" class="label payment"></a>
		</li>
		<li><a href="/amur-blag/private_clients/service/offices/">
				<img border="0" src="/images/newdesign/icon_services.png" width="72" height="60">
			</a>
			<a href="/amur-blag/private_clients/service/offices/" class="label services"></a>
		</li>
		<li><a href="/amur-blag/private_clients/tariffs/">
				<img border="0" src="/images/newdesign/icon_tariffs.png" width="45" height="58">
			</a>
			<a href="/amur-blag/private_clients/tariffs/" class="label tariffs"></a>
		</li>
		<li><a href="/amur-blag/private_clients/questions_answers/">
				<img border="0" src="/images/newdesign/icon_faq.png" width="45" height="62">
			</a>
			<a href="/amur-blag/private_clients/questions_answers/" class="label faq"></a>
		</li>
		<!--<li><a href="<?=SITE_DIR?>private_clients/">
				<img border="0" src="/images/newdesign/icon_cabinet.png" width="48" height="62">
			</a>
			<a href="<?=SITE_DIR?>private_clients/" class="label cabinet"></a>
		</li>-->
	</ul>

	<div class="content startContent">
	