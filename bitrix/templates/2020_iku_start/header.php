<html class="no-js" lang="ru">

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge">
<?$APPLICATION->ShowHead()?>
<title>ДЭК – Исполнителям коммунальных услуг</title>

    <meta name="description" content="ДЭК - Исполнителям коммунальных услуг">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- head-js -->
    <script>
        (document.documentElement && document.documentElement.className && (function($html, $conn) {
            // js test
            $html.className = $html.className.replace('no-js', 'js');
            // webp support test
            var webp = new Image();
            webp.onload = webp.onerror = function() {
                $html.className += (webp.width == 1 && webp.height == 1 ? ' webp' : ' no-webp');
            };
            webp.src = 'data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=';
            // save-data header test
            $html.className += ($conn && $conn.saveData ? ' save-data' : ' no-save-data');
            // network information test: 'slow-2g', '2g', '3g', or '4g'
            $html.className += ($conn && $conn.effectiveType ? ' network-detected network-' + $conn.effectiveType : ' network-unknown');
        })(document.documentElement, navigator.connection || navigator.mozConnection || navigator.webkitConnection));

        function getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }

        const Visible = function bodyVisible() {
            var element = document.body;
            element.classList.remove("hidden");
            element.classList.add("visible");
        }

        const AccessOpen = function accessOpen() {
            var element = document.querySelector('.access');
            element.classList.add(getCookie('access'));
        }

        const FontSize = function fontSizeBtn() {
            if (getCookie('fontsize') == 'fontsize-large') {
                document.querySelector('.normal').classList.remove('active');
                document.querySelector('.big').classList.remove('active');
                document.querySelector('.large').classList.add('active');
            } else if (getCookie('fontsize') == 'fontsize-normal') {
                document.querySelector('.large').classList.remove('active');
                document.querySelector('.big').classList.remove('active');
                document.querySelector('.normal').classList.add('active');
            } else if (getCookie('fontsize') == 'fontsize-big') {
                document.querySelector('.normal').classList.remove('active');
                document.querySelector('.large').classList.remove('active');
                document.querySelector('.big').classList.add('active');
            }
        }

        const CookiesZ = function cookiesVisible() {
            var cookies = document.querySelector('.cookies');
            cookies.style.display = getCookie('cookies');
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', AccessOpen);
            document.addEventListener('DOMContentLoaded', FontSize);
            document.addEventListener('DOMContentLoaded', CookiesZ);
            document.addEventListener('DOMContentLoaded', Visible);

        } else {
            AccessOpen();
            FontSize();
            Visible();
            cookiesVisible();
        }
    </script>
	<script src="/design2019/js/vendor.min.js?20210413"></script>
	<script src="/design2019/js/app.min.js?20210413"></script>
	<script src="/design2019/js/js.cookie.min.js?20210414"></script>
	<script src="/design2019/js/dvec_head.js?20200728"></script>
	<script src="/design2019/js/dvec.js?20220322"></script>
    <!-- /head-js -->

    <!-- block-head -->
	<link href="/design2019/css/app.min.css?20210413" rel="stylesheet">
	<link href="/design2019/css/correction3.css?2304" rel="stylesheet">
    <!-- /block-head -->

    <!-- counters-head -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(87743237, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87743237" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <!-- /counters-head -->

    <!-- open-graph -->
    <meta property="og:locale" content="ru">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?$APPLICATION->ShowTitle()?>">
    <meta property="og:description" content="Дальневосточная энергетическая компания - Исполнителям коммунальных услуг">
    <meta property="og:image" content="/design2019/img/logo_dek_pole.png">
    <meta property="og:site_name" content="Дальневосточная энергетическая компания">

    <!-- <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="/design2019/img/og-image.jpg">
    <meta name="twitter:title" content="Энергосбыт &mdash; ">
    <meta name="twitter:description" content="Энергосбыт"> -->

    <!-- <meta property="fb:app_id" content="00000000000"> -->
    <!-- /open-graph -->

    <!-- <link rel="manifest" href="img/favicons/manifest.json"> -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#fff">

    <!-- <meta name="application-name" content="EnergySales"> -->

	<!-- <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="EnergySales">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png"> -->
	
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon"  type="image/svg+xml" href="/favicon.svg">
</head>

<body class="d-flex flex-column h-100 hidden">

    <div class="flex-shrink-0">
        <div class="container"><a name="pagetop"></a>
            <div class="access">
                <div class="access__col">
                    <div class="access__fontsize">
                        <span class="access__text">Размер шрифта:</span>
                        <div class="access__content">
                            <button class="btn access__link normal">a</button>
                            <button class="btn access__link big active">a</button>
                            <button class="btn access__link large">a</button>
                        </div>
                    </div>
                    <div class="access__colors">
                        <span class="access__text">Цвет сайта</span>
                        <div class="access__content">
                            <button class="btn access__link white active">ц</button>
                            <button class="btn access__link black">ц</button>
                            <button class="btn access__link blue">ц</button>
                        </div>
                    </div>
                    <div class="access__images">
                        <span class="access__text">Изображения</span>
                        <div class="access__switch">
                            <button class="btn acess__link">
                                <span class="access__switch-text">выкл.</span>
                                <span class="access__switch-text">вкл.</span>
                            </button>
                        </div>
                    </div>
                    <div class="access__settings">
                        <button class="btn access__text">Настройки</button>
                    </div>
                </div>
                <div class="access__option">
                    <h2 class="access__option-title">Настройки шрифта:</h2>
                    <div class="access__font-family">
                        <span class="access__option-text">Выберите шрифт:</span>
                        <button class="btn access__option-item font3 active">Open Sans</button>
                        <button class="btn access__option-item font1">Times New Roman</button>
                        <button class="btn access__option-item font2">Arial</button>
                    </div>
                    <div class="access__letter-spacing">
                        <span class="access__option-text">Интервал между буквами </span>
                        <span class="access__option-text light">(Кернинг):</span>
                        <button class="btn access__option-item spacing-small active">Стандартный</button>
                        <button class="btn access__option-item spacing-normal">Средний</button>
                        <button class="btn access__option-item spacing-big">Большой</button>
                    </div>
                    <h2 class="access__option-title">Выбор цветовой схемы:</h2>
                    <ul class="access__chose-color">
                        <li class="access__chose-item active">
                            <button class="btn access__color-item color1 active">
                                <span class="access__color-item__choise">—</span>Черным по белому
                            </button>
                        </li>
                        <li class="access__chose-item">
                            <button class="btn access__color-item color2">
                                <span class="access__color-item__choise">—</span>Белым по черному</button>
                        </li>
                        <li class="access__chose-item">
                            <button class="btn access__color-item color3">
                                <span class="access__color-item__choise">—</span>Темно-синим по голубому</button>
                        </li>
                        <li class="access__chose-item">
                            <button class="btn access__color-item color4">
                                <span class="access__color-item__choise">—</span>Коричневым по бежевому</button>
                        </li>
                        <li class="access__chose-item">
                            <button class="btn access__color-item color5">
                                <span class="access__color-item__choise">—</span>Зеленым по темно-коричневому</button>
                        </li>
                    </ul>
                    <div class="access__option-footer">
                        <button class="btn access__btn access__reset">Вернуть стандартные настройки</button>
                        <button class="btn access__btn access__exit">Закрыть панель</button>
                    </div>
                </div>
            </div>
            <header class="header">
                <div class="header-fixed-nav">
                    <div class="container">
						<div class="d-flex justify-content-between">
                            <a href="https://esc-rushydro.ru/" target="_blank" class="header-fixed-nav__link header-fixed-nav__link--svg-left align-top hide_mobile">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12.875V4h-.5A1.5 1.5 0 000 5.5v9A1.5 1.5 0 001.5 16h12a1.5 1.5 0 001.5-1.5V14H3.062C2.234 14 2 13.703 2 12.875z" fill="currentColor"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 1h-12A1.5 1.5 0 003 2.5v9A1.5 1.5 0 004.5 13h12a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0016.5 1zM16 11H5V4h11v7z" fill="currentColor"/>
</svg>
                                ЭСК РусГидро
                            </a>
                            <a href="/priemnaya/" class="header-fixed-nav__link header-fixed-nav__link--svg-left align-top">
								<svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.7557 0.5H1.24168C1.22068 0.5 1.19969 0.501006 1.17969 0.503006L1.87669 0.966995C1.91769 0.982995 1.95768 1.003 1.99568 1.028L8.49869 5.362L15.0017 1.028L15.7907 0.501999C15.7797 0.500999 15.7677 0.5 15.7557 0.5Z" fill="currentColor"/>
<path d="M13.15 4.53769L8.832 7.41469C8.732 7.48169 8.616 7.51669 8.5 7.51669C8.384 7.51669 8.268 7.48269 8.168 7.41469L6.776 6.4877C6.734 6.4717 6.693 6.45169 6.655 6.42569L0.5 2.32269V11.7637C0.5 12.1697 0.832996 12.4977 1.243 12.4977H15.757C16.167 12.4977 16.499 12.1697 16.499 11.7637V2.30469L13.15 4.53769Z" fill="currentColor"/>
</svg>
                                Интернет-приёмная
                            </a>
							<div class="header-fixed-nav__link header-fixed-nav__link--svg-left header-fixed-nav__link--vision access-open hide_mobile">
								<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 4C5.56 4 2.442 5.754.14 8.602a.628.628 0 000 .793C2.443 12.246 5.56 14 9 14c3.44 0 6.558-1.754 8.86-4.602a.628.628 0 000-.793C15.557 5.754 12.44 4 9 4zm.247 8.52c-2.283.135-4.168-1.619-4.025-3.75.118-1.757 1.646-3.181 3.531-3.29 2.283-.135 4.168 1.619 4.025 3.75-.122 1.753-1.65 3.178-3.531 3.29zm-.114-1.626c-1.23.072-2.247-.871-2.166-2.018.063-.947.888-1.712 1.904-1.774 1.23-.072 2.246.872 2.165 2.018-.066.95-.89 1.716-1.903 1.774z" fill="currentColor" />
</svg>
								Версия для слабовидящих
							</div>
							<a href="http://www.rushydro.ru/form/" target="_blank" class="header-fixed-nav__link align-top hide_mobile">
								Линия доверия
                            </a>
							<div class="d-inline-flex">
                                <div class="header-fixed-nav__links-share">
									<div class="header-fixed-nav__link header-fixed-nav__link--share">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M14.573 11.564a3.229 3.229 0 00-2.554 1.256l-4.954-2.762a3.223 3.223 0 00-.003-2.127l4.95-2.758a3.221 3.221 0 002.557 1.263 3.226 3.226 0 003.224-3.218 3.224 3.224 0 00-6.448 0c0 .374.064.733.184 1.065L6.582 7.042a3.21 3.21 0 00-2.557-1.264A3.226 3.226 0 00.8 8.996a3.227 3.227 0 005.789 1.951l4.95 2.762c-.12.337-.187.7-.187 1.073a3.224 3.224 0 006.448 0 3.227 3.227 0 00-3.228-3.218z" fill="#B3C6D7"/>
</svg>
                                    </div>
                                    <div class="header-fixed-nav__share-links">
                                        <div id="share_ok" class="footer-nav__social-link" title="Поделиться в Одноклассниках">
                                            <img src="/design2019/img/soc-ok.svg">
                                        </div>
                                        <div id="share_vk" class="footer-nav__social-link" title="Поделиться Вконтакте">
                                            <img src="/design2019/img/soc-vk.svg">
                                        </div>
                                        <div id="share_tg" class="footer-nav__social-link" title="Поделиться в Telegram">
                                            <img src="/design2019/img/soc-tg.svg" width="21" height="21">
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a onclick="return false" href="/PleaseEnableJavascript.html" class="header-fixed-nav__link header-fixed-nav__link--search" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.726 16.395L13.29 11.94a7.095 7.095 0 001.766-4.673C15.055 3.26 11.678 0 7.528 0 3.377 0 0 3.26 0 7.267c0 4.008 3.377 7.268 7.528 7.268a7.632 7.632 0 004.312-1.315l4.471 4.49c.187.187.438.29.708.29a.995.995 0 00.68-.265.926.926 0 00.027-1.34zM7.528 1.895c3.067 0 5.563 2.41 5.563 5.372 0 2.962-2.495 5.372-5.563 5.372-3.068 0-5.564-2.41-5.564-5.372 0-2.961 2.496-5.371 5.564-5.371z" fill="#165280"/>
</svg>
                                    </a>
                                    <div class="header-fixed-nav--search-input-wrap dropdown-menu header-nav__dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSearch">
                                        <form action="/search" method="get" id="topSearchForm">
                                            <button class="header-fixed-nav--search-input-button" type="submit">
												<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M17.726 16.395L13.29 11.94a7.095 7.095 0 001.766-4.673C15.055 3.26 11.678 0 7.528 0 3.377 0 0 3.26 0 7.267c0 4.008 3.377 7.268 7.528 7.268a7.632 7.632 0 004.312-1.315l4.471 4.49c.187.187.438.29.708.29a.995.995 0 00.68-.265.926.926 0 00.027-1.34zM7.528 1.895c3.067 0 5.563 2.41 5.563 5.372 0 2.962-2.495 5.372-5.563 5.372-3.068 0-5.564-2.41-5.564-5.372 0-2.961 2.496-5.371 5.564-5.371z" fill="#165280"/>
</svg>
                                            </button>
                                            <input class="form-control" type="text" value="" name="q" id="topSearchField" placeholder="Введите поисковый запрос">
                                        </form>
                                        <div class="input-hdr-close">
											<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 15l7-6.864m0 0L1 1m7 7.136L15 15M8 8.136L15 1" stroke="#165280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                        </div>
                                    </div>
                                </div>
                                <button class="hdr-menu-adaptiv" data-toggle="modal" data-target="#menu-adaptiv">
                                    <span class="header-nav__menu-ico">
                                        <span class="header-nav__menu-ico-row"></span>
                                        <span class="header-nav__menu-ico-row"></span>
                                        <span class="header-nav__menu-ico-row"></span>
                                    </span>
                                </button>
							</div>
						</div>
                    </div>
                </div>
<?$APPLICATION->ShowPanel()?>
                <div class="header-b">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="header-col header-col--2 header-col--logo">
                                    <div class="header-b__img-wrap">
                                        <a href="/">
                                            <span class="logo-big">
												<img class="logo-dek" src="/design2019/img/logo_dek_hrz.png" height="74">
                                            </span>
                                            <span class="logo-mobile">
												<img class="logo-dek" src="/design2019/img/logo_dek_hrz.png" height="36">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="header-col header-col--3 header-col--contacts">
                                    <div class="header-b__phones">
                                        <div class="dropdown">
                                            <div class="header-b__phones-phone" id="dropdownPhones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                8 (800) 234-77-77
                                                <img src="/design2019/svg/ico-phones-more.svg" width="14" height="8">
                                            </div>
                                            <div class="header-b__phones-phone dropdown-menu" aria-labelledby="dropdownPhones">
												<p class="dropdown-item">
                                                    <span class="header-b__phones-phone-link-department">
														Контакт-центр:</span>
													<a href="tel:88002347777" class="header-b__phones-phone-link">
														8 (800) 234-77-77
													</a>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="header-b__phones-mode">
                                            понедельник – пятница: с 9:00 до 19:00
                                        </p>
										<a href="/organisations/contact-center/" class="btn btn-outline-primary btn-sm" style="margin-top: 9px; border-width:1px">Единый контактный центр</a>
                                        <!-- <a onclick="return false" href="/PleaseEnableJavascript.html" class="header-b__phones-call">
                                            Заказать обратный звонок
                                        </a> -->
										<!-- <div>Текущее время: <span id="time_in_office"></span>
										</div> -->
                                    </div>
                                    <a href="/organisations/service/" class="header-b__card">
											<img src="/design2019/svg/ico-hdr-card-1.svg" width="44" height="30" style="float:left">
                                            <p class="header-b__card-text">Отделения и участки</p>
                                        </a>
                                    <a href="/organisations/online/" class="header-b__card">
											<img src="/design2019/svg/ico-hdr-card-2.svg" width="44" height="25" style="float:left">
                                            <p class="header-b__card-text">Услуги онлайн</p>
                                    </a>
                                    <a href="/organisations/cabinet/" class="header-b__card">
											<img src="/design2019/svg/ico-hdr-card-3.svg" width="44" height="26" style="float:left">
                                            <p class="header-b__card-text">Личный кабинет</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <nav class="header-nav header-nav--desktop">
                <div class="row no-gutters justify-content-between">
                    <div class="header-nav__left">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"2019_top",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "2019_top",
		"USE_EXT" => "N"
	)
);?>
                    </div>
                    <div class="header-nav__right">
<?require_once($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/header-nav__right.php");?>
                    </div>
                </div>
            </nav>

<!-- мобильное меню -->
<?require_once($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/menu-adaptiv.php");?>

            <main class="main">
                <div class="main-desktop">
                    <div class="row">
                        <div class="col-lg-3th">
                            <div class="row row-5th">
                                <div class="col-8">
                                    <div class="card-5th-wrap">
<!-- баннер -->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/br_organisations.php");?>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="tarify/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/calc-card.svg" -->
                                                <svg width="43" height="41" viewBox="0 0 43 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.08 15.422V2.278c0-.982-.784-1.778-1.748-1.778H2.358C1.394.5.611 1.296.611 2.278v36.444c0 .982.784 1.778 1.748 1.778h27.973c.965 0 1.748-.796 1.748-1.778v-7.81a9.454 9.454 0 01-4.37 1.543l-1.707.1-3.523-.944-1.19-2.222-1.04-1.333c-.114-.11-1.094-.232-1.203-.346v1.202h-5.268v-5.3h4.696c-.238-.85.86-2.741-.055-2.741-.146 0-2.074.052-2.074.04H13.78v-5.3h6.77c.503-.78 7.14-2.537 7.14-2.537v-1.018H4.982V4.944h22.727v8.934a9.474 9.474 0 014.37 1.544zm-18.3 16.19h5.267v5.3h-5.268v-5.3zm8.77.888h5.267v4.412H22.55V32.5zM5.009 15.611h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3z" fill="#fff" />
                                                    <path d="M20.271 15h-1.254v4.981h1.254V15z" fill="#fff" />
                                                    <path d="M42.218 37.467l-6.391-6.8a11.205 11.205 0 002.543-7.129c0-6.115-4.863-11.09-10.839-11.09-5.977 0-10.84 4.975-10.84 11.09s4.863 11.09 10.84 11.09c2.244 0 4.382-.691 6.21-2.007l6.439 6.852a1.39 1.39 0 001.998.04 1.475 1.475 0 00.04-2.046zM27.531 15.34c4.418 0 8.012 3.678 8.012 8.198 0 4.519-3.594 8.196-8.012 8.196-4.418 0-8.012-3.677-8.012-8.196 0-4.52 3.594-8.198 8.012-8.198z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/calc-card.svg" -->
                                            </span>
                                            <span class="card-link__text">Тарифы и нормативы</span>
                                        </a>
                                        <a href="raschety/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/payment-calc.svg" -->
                                                <svg width="46" height="38" viewBox="0 0 46 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M32.986 15.841H2.103A2.113 2.113 0 000 17.968v17.906C0 36.993.886 38 2.103 38h30.883a2.113 2.113 0 002.103-2.126V17.968c-.11-1.231-.996-2.127-2.103-2.127zm-.553 16.675H2.103v-14.1h30.219v14.1h.11z" fill="#fff" />
                                                    <path d="M45.826 18.192L37.746 1.18C37.303.174 36.086-.274 35.089.174l-24.573 11.75c-.665.336-1.107 1.008-1.107 1.68h3.1L36.306 2.187l1.217 2.686-18.153 8.73h10.626l9.52-4.59 4.538 9.625-6.863 3.358v2.686l7.749-3.694c.885-.56 1.328-1.79.885-2.797zM27.562 28.935a2.115 2.115 0 002.103-2.126 2.115 2.115 0 00-2.103-2.126 2.115 2.115 0 00-2.103 2.126c0 1.174.942 2.126 2.103 2.126z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/payment-calc.svg" -->
                                            </span>
                                            <span class="card-link__text">Расчеты и оплата</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="oformlenie/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/contract.svg" -->
                                                <svg width="53" height="39" viewBox="0 0 53 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M52.684 16.983L48.82 2.434c-4.188.757-6.764.97-6.764.97-4.572-.67-5.684-1.455-9.662-1.94a8.762 8.762 0 00-3.159.196C27.607.668 25.255-.166 22.437.622c-.04.013-4.113 1.307-9.897 3.607-1.356.026-4.649-.014-6.13-.478l-.913-.285-4.813 14.91 10.025 6.403a3.38 3.38 0 00.738 2.7 3.355 3.355 0 002.767 1.194c-.005.777.24 1.559.775 2.201a3.362 3.362 0 003.173 1.148 3.364 3.364 0 004.586 2.81c-.02.798.225 1.605.776 2.265a3.373 3.373 0 004.764.419l3.007-3.147.864.745a4.216 4.216 0 003.149 1.025 4.252 4.252 0 002.943-1.57 4.47 4.47 0 00.976-3.25c.185.024.371.05.56.05a4.252 4.252 0 003.318-1.586c.906-1.112 1.174-2.55.865-3.863a4.257 4.257 0 003.274-1.584c.99-1.214 1.22-2.817.763-4.222l4.677-3.131zm-6.936 6.122c-.41.503-.984.81-1.616.867a2.327 2.327 0 01-1.723-.563L34.982 17c-.03-.025-.066-.034-.1-.055l-.057-.05a.964.964 0 00-1.363.103.974.974 0 00.103 1.368l7.75 6.686c1.019.88 1.15 2.45.293 3.501a2.334 2.334 0 01-1.614.865 2.33 2.33 0 01-1.724-.563l-.482-.416c-.024-.022-.042-.049-.066-.07l-6.242-5.39a.966.966 0 00-1.364.104.975.975 0 00.103 1.368l.282.244c.013.013.02.03.033.042l5.995 5.173a2.53 2.53 0 01.226 3.428 2.34 2.34 0 01-1.616.866 2.268 2.268 0 01-1.721-.564l-.896-.772a3.397 3.397 0 00-.445-3.668 3.368 3.368 0 00-2.941-1.194 3.391 3.391 0 00-.682-3.009 3.373 3.373 0 00-4.763-.419l-.49.508a3.392 3.392 0 00-.623-1.14 3.363 3.363 0 00-3.811-.969 3.362 3.362 0 00-.699-1.457 3.374 3.374 0 00-4.765-.419l-1.44 1.593c-.117.099-.212.212-.312.322l-8.568-5.473 3.783-11.72c2.328.428 5.825.343 5.993.338l.172-.004.16-.064c5.8-2.312 9.886-3.611 9.895-3.614 1.434-.4 2.722-.238 3.803.142-.74.418-1.16.782-1.16.782l-8.696 7.76c3.755 3.78 6.763 1.94 6.763 1.94l9.663-3.88 12.208 10.503a2.53 2.53 0 01.181 3.378z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/contract.svg" -->
                                            </span>
                                            <span class="card-link__text">Оформление договора</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-5th-wrap">
                                        <a href="forms/" class="card-link card-link--big">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/write-mail.svg" -->
                                                <svg width="48" height="40" viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M23.297 25.346l3.764-.91-3.599-3.549-.923 3.68a.635.635 0 00.758.78zM47.56 3.013L44.872.329a1.114 1.114 0 00-1.58 0L41.427 2.19l4.268 4.261L47.56 4.59a1.113 1.113 0 00-.001-1.577zm-7.036 1.811a1.18 1.18 0 00-1.667 0L25.482 17.99a1.195 1.195 0 000 1.7l2.666 2.617c.46.46 1.207.46 1.667 0L43.191 9.14a1.197 1.197 0 000-1.698l-2.667-2.618zM9 20.88a1 1 0 000 2h8a1 1 0 100-2H9zm14-5a1 1 0 00-1-1H9a1 1 0 000 2h13a1 1 0 001-1zm6-6a1 1 0 00-1-1H9a1 1 0 000 2h19a1 1 0 001-1z" fill="#fff" />
                                                    <path d="M35.998 28.871H22s-.324.008-.5.008a1.5 1.5 0 00-1.5 1.5v5.357l-9.281-6.482a4.242 4.242 0 00-.719-.383H2.971V3.862h33.027v.036L36 3.88v-3H1.959C.928 1.181.309 1.886 0 2.994v26.77c0 1.008.722 2.115 1.855 2.115h7.359l10.934 7.545c1.352.877 2.742-.092 2.852-1.373l.006-6.172h13.923c1.443 0 1.959-.906 2.062-1.812l.004-11.182-2.996 2.996v6.99h-.001z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/write-mail.svg" -->
                                            </span>
                                            <span class="card-link__text">Формы договоров и соглашений</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-8">
                                    <div class="card-5th-wrap">
                                        <a href="zakony/" class="card-link card-link--big card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <svg width="30" height="40" viewBox="0 0 30 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.3556 9.02246H6.75439V11.0249H17.3556V9.02246Z" fill="white"/>
<path d="M22.1744 14.0347H6.75439V16.0371H22.1744V14.0347Z" fill="white"/>
<path d="M22.1744 19.0469H6.75439V21.0493H22.1744V19.0469Z" fill="white"/>
<path d="M12.5368 24.0596H6.75439V26.062H12.5368V24.0596Z" fill="white"/>
<path d="M20.2628 33.0818C21.8615 33.0818 23.1575 31.7353 23.1575 30.0743C23.1575 28.4134 21.8615 27.0669 20.2628 27.0669C18.6642 27.0669 17.3682 28.4134 17.3682 30.0743C17.3682 31.7353 18.6642 33.0818 20.2628 33.0818Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.08215 3.14716C2.9658 3.27812 2.89118 3.45796 2.89118 3.65007V36.5886C2.89118 36.6831 2.90857 36.7432 2.92453 36.7805C2.94111 36.8192 2.96473 36.8533 2.99675 36.8838C3.06729 36.9509 3.17544 36.9962 3.28348 36.9962H26.4868C26.7819 36.9962 26.9495 36.9043 27.0176 36.8444C27.0498 36.816 27.0678 36.7893 27.0797 36.7624C27.0915 36.736 27.1088 36.6832 27.1088 36.5886V7.63257L22.4599 3.0038H3.28348C3.28692 3.0038 3.28663 3.00299 3.28348 3.0038C3.2687 3.0076 3.18663 3.02956 3.08215 3.14716ZM0 3.65007C0 1.74262 1.45939 0 3.28348 0H23.0408C23.4135 0 23.7718 0.149593 24.041 0.417547L29.5546 5.9073C29.8391 6.19058 30 6.58225 30 6.99166V36.5886C30 37.6208 29.5877 38.5198 28.8851 39.1374C28.2066 39.7339 27.3403 40 26.4868 40H3.28348C1.68713 40 0 38.7319 0 36.5886V3.65007Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.1925 2.00496L27.9818 8.01982H24.6736C23.2952 8.01982 22.1925 7.23527 22.1925 5.92769V2.00496Z" fill="white"/>
</svg>

                                            </span>
                                            <span class="card-link__text">Законодательство</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/electric_market/uchet/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <svg width="44" height="49" viewBox="0 0 44 49" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.9767 25.4014C27.9338 25.3132 27.8436 25.2568 27.7429 25.2568H23.4496L26.4624 20.3838C26.5124 20.307 26.5159 20.2091 26.4703 20.1297C26.4248 20.0494 26.3381 20 26.2435 20H21.2469C21.1497 20 21.0595 20.0538 21.0157 20.1385L18.0274 27.6381C17.9871 27.7157 17.9915 27.8075 18.0388 27.8807C18.0861 27.9548 18.1684 27.9998 18.2586 27.9998H20.9071L18.8227 34.6533C18.7736 34.7671 18.8174 34.8977 18.926 34.9638C18.968 34.9876 19.0145 35 19.06 35C19.1336 35 19.2071 34.9691 19.2571 34.9109L27.9391 25.6688C28.0039 25.5938 28.0179 25.4897 27.9767 25.4014Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M30.5 11H31.5C32.328 11 33 11.671 33 12.5V14.5C33 15.329 32.328 16 31.5 16H30.5C29.672 16 29 15.329 29 14.5V12.5C29 11.671 29.672 11 30.5 11Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24.5 11H25.5C26.328 11 27 11.671 27 12.5V14.5C27 15.329 26.328 16 25.5 16H24.5C23.672 16 23 15.329 23 14.5V12.5C23 11.671 23.672 11 24.5 11Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 11H19.5C20.328 11 21 11.671 21 12.5V14.5C21 15.329 20.328 16 19.5 16H18.5C17.672 16 17 15.329 17 14.5V12.5C17 11.671 17.672 11 18.5 11Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 11H13.5C14.328 11 15 11.671 15 12.5V14.5C15 15.329 14.328 16 13.5 16H12.5C11.672 16 11 15.329 11 14.5V12.5C11 11.671 11.672 11 12.5 11Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C9.85 0 0 9.85 0 22C0 34.15 9.85 44 22 44C34.15 44 44 34.15 44 22C44 9.85 34.15 0 22 0ZM22 41C11.507 41 3 32.493 3 22C3 11.507 11.507 3 22 3C32.493 3 41 11.507 41 22C41 32.493 32.493 41 22 41Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.75 47H30.25C30.6647 47 31 47.298 31 47.6667V48.3333C31 48.702 30.6647 49 30.25 49H13.75C13.3353 49 13 48.702 13 48.3333V47.6667C13 47.298 13.3353 47 13.75 47Z" fill="white"/>
</svg>
                                            </span>
                                            <span class="card-link__text">Приборы учёта</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="posledstviya/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/dont-pay.svg" -->
                                                <svg width="41" height="43" viewBox="0 0 41 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.122 39.121L37.376 4.228c.834-.757 2.074-.75 2.768.016.695.766.582 2-.253 2.757L3.637 41.892c-.834.758-2.074.75-2.768-.016s-.581-2 .253-2.755z" fill="#fff" />
                                                    <path d="M6.568 29.715l2.789-2.685c-.064.002-.127.008-.191.008-3.4 0-6.166-2.147-6.166-4.787V11.614a1.5 1.5 0 10-3 0v10.638c0 3.527 2.777 6.509 6.568 7.463zm11.763-11.321V7.787c0-2.64 2.766-4.787 6.165-4.787 2.913 0 5.354 1.579 5.995 3.691l2.293-2.207C31.317 1.839 28.16 0 24.496 0c-5.054 0-9.165 3.493-9.165 7.787v13.495l3-2.888z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.831 31.519h-.5v-3c-1.65-2.828-4.483-4.934-4.666-6-.008-1.07 0-3 0-3h-2.454L29 21.645c0 .314-.002.619-.004.874-.183 1.066-3.016 3.172-4.666 6v3h-.5a1.5 1.5 0 000 3h1.5v6.5a1.5 1.5 0 003 0v-6.5h6v6.5a1.5 1.5 0 003 0v-6.5h1.5a1.5 1.5 0 000-3z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/dont-pay.svg" -->
                                            </span>
                                            <span class="card-link__text">Последствия неоплаты</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-5th-wrap">
                                        <a href="edo/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/email-receipt.svg" -->
                                                <svg width="44" height="34" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.5 24.906V2.5H40v-.385C39.691 1.007 39.072.302 38.041 0H1.959C.928.302.309 1.007 0 2.115v23.77C0 26.893.722 28 1.855 28h36.073c1.443 0 1.959-.906 2.062-1.812l.001-1.281H2.5v-.001z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 16h5a1 1 0 110 2h-5a1 1 0 110-2zm-4-5h9c0 .5.5.5 1 1a1 1 0 01-1 1h-9a1 1 0 010-2zm30-5H23a1 1 0 00-1 1v-.102l9.469 6.508c1.102.859 1.936.857 3.031 0l9.5-6.59V7a1 1 0 00-1-1z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M42 12.092V19H24v-6.855L22 11v9a1 1 0 001 1h20a1 1 0 001-1v-9.463l-2 1.555z" fill="#fff" />
                                                    <path d="M11.967 34c-1.29-.111-1.29-2.666 0-3h16.066c1.289.223 1.289 2.889 0 3H11.967z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/email-receipt.svg" -->
                            </span>
                            <span class="card-link__text">Электронный документооборот</span>
                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2th">
                            <div class="card-slider swiper-container js-card-slider">
                                <div class="swiper-wrapper">
<!-- важные объявления-->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/notice_organisations.php");?>
                                </div>
                                <div class="card-slider__controls">
                                    <div class="card-slider__nav">
                                        <div class="card-slider__btn--prev">
                                            <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn">
                                                <!-- "source/partials/svg/slide-nav-left.svg" -->
                                                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 17L1 9.136 9 1" />
                                                </svg>
                                                <!-- /"source/partials/svg/slide-nav-left.svg" -->
                                            </a>
                                        </div>
                                        <div class="card-slider__btn--next">
                                            <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn">
                                                <!-- "source/partials/svg/slide-nav-right.svg" -->
                                                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 17l8-7.864L1 1" />
                                                </svg>
                                                <!-- /"source/partials/svg/slide-nav-right.svg" -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination card-slider__pagination"></div>
                                </div>
                            </div>
							
							<div class="row">
								<div class="col-6" style="padding-right:3px">
                                    <div class="card-5th-wrap">
                                        <a href="rating/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <svg width="40" height="47" viewBox="0 0 40 47" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.3611 27.0019C20.1293 29.152 17.9995 32.8273 17.9995 37C17.9995 41.1727 20.1293 44.848 23.3611 46.9981C23.2955 46.9994 23.2299 47 23.1641 47C17.6412 47 13.1641 42.5228 13.1641 37C13.1641 31.4772 17.6412 27 23.1641 27C23.2299 27 23.2955 27.0006 23.3611 27.0019Z" fill="white"/>
<path d="M31.6632 33.5285H29.4172V36.7135H31.6641C32.1691 36.7135 32.5656 36.5691 32.866 36.2794C33.1665 35.9897 33.3253 35.6031 33.3253 35.1215C33.3253 34.638 33.1665 34.2523 32.866 33.9635C32.5647 33.6729 32.1539 33.5285 31.6632 33.5285Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M40 37C40 42.5228 35.5228 47 30 47C24.4772 47 20 42.5228 20 37C20 31.4772 24.4772 27 30 27C35.5228 27 40 31.4772 40 37ZM34.0843 37.3719C33.4833 37.9522 32.7236 38.241 31.7899 38.241H29.4013V39.094H32.9451C33.0079 39.094 33.0564 39.1102 33.1039 39.1568C33.1514 39.19 33.1658 39.2546 33.1658 39.3192V40.2359C33.1658 40.2995 33.1505 40.348 33.1039 40.3964C33.0716 40.4448 33.0088 40.461 32.9451 40.461H29.4013V41.8279C29.4013 41.8916 29.3842 41.941 29.3385 41.9894C29.2918 42.0369 29.2434 42.0522 29.1797 42.0522H28.0092C27.9464 42.0522 27.898 42.036 27.8495 41.9894C27.8029 41.9571 27.7885 41.8925 27.7885 41.8279V40.461H26.2207C26.1597 40.461 26.0951 40.4439 26.0619 40.365C26.0152 40.3318 26 40.2672 26 40.2036V39.286C26 39.2223 26.0161 39.1748 26.0619 39.1254C26.0951 39.077 26.1588 39.0617 26.2207 39.0617H27.7885V38.224H26.2207C26.1597 38.224 26.1103 38.2096 26.0619 38.1603C26.0152 38.1289 26 38.0643 26 37.9979V36.9386C26 36.875 26.0161 36.8265 26.0619 36.7781C26.0951 36.7297 26.1588 36.7135 26.2207 36.7135H27.7885V32.2251C27.7885 32.1606 27.8038 32.113 27.8495 32.0637C27.8809 32.0161 27.9455 32 28.0092 32H31.7899C32.7236 32 33.4986 32.2897 34.0843 32.8691C34.6691 33.4477 34.9696 34.2038 34.9696 35.1214C34.9696 36.039 34.6691 36.7933 34.0843 37.3719Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 15.9946V0L22.5214 3.9969V8.99071L19.5214 13.9884L22.5214 18V24.0169C17.0389 24.2943 12.4524 27.9682 10.8238 32.9765H0V23.5L3 20.5L0 15.9946ZM6.85403 27.9783C7.39452 27.9783 7.83318 27.5317 7.83318 26.9791V23.9814C7.83318 23.4289 7.39452 22.9822 6.85403 22.9822H5.87488C5.33341 22.9822 4.89573 23.4289 4.89573 23.9814V26.9791C4.89573 27.5317 5.33341 27.9783 5.87488 27.9783H6.85403ZM6.85403 19.9845C7.39452 19.9845 7.83318 19.5379 7.83318 18.9853V15.9876C7.83318 15.435 7.39452 14.9884 6.85403 14.9884H5.87488C5.33341 14.9884 4.89573 15.435 4.89573 15.9876V18.9853C4.89573 19.5379 5.33341 19.9845 5.87488 19.9845H6.85403ZM6.85403 11.9907C7.39452 11.9907 7.83318 11.5441 7.83318 10.9915V7.99381C7.83318 7.44124 7.39452 6.99458 6.85403 6.99458H5.87488C5.33341 6.99458 4.89573 7.44124 4.89573 7.99381V10.9915C4.89573 11.5441 5.33341 11.9907 5.87488 11.9907H6.85403ZM11.7498 27.9783C12.2903 27.9783 12.7289 27.5317 12.7289 26.9791V23.9814C12.7289 23.4289 12.2903 22.9822 11.7498 22.9822H10.7706C10.2291 22.9822 9.79147 23.4289 9.79147 23.9814V26.9791C9.79147 27.5317 10.2291 27.9783 10.7706 27.9783H11.7498ZM11.7498 19.9845C12.2903 19.9845 12.7289 19.5379 12.7289 18.9853V15.9876C12.7289 15.435 12.2903 14.9884 11.7498 14.9884H10.7706C10.2291 14.9884 9.79147 15.435 9.79147 15.9876V18.9853C9.79147 19.5379 10.2291 19.9845 10.7706 19.9845H11.7498ZM11.7498 11.9907C12.2903 11.9907 12.7289 11.5441 12.7289 10.9915V7.99381C12.7289 7.44124 12.2903 6.99458 11.7498 6.99458H10.7706C10.2291 6.99458 9.79147 7.44124 9.79147 7.99381V10.9915C9.79147 11.5441 10.2291 11.9907 10.7706 11.9907H11.7498ZM16.6455 19.9845C17.187 19.9845 17.6246 19.5379 17.6246 18.9853V15.9876C17.6246 15.435 17.187 14.9884 16.6455 14.9884H15.6664C15.1249 14.9884 14.6872 15.435 14.6872 15.9876V18.9853C14.6872 19.5379 15.1249 19.9845 15.6664 19.9845H16.6455ZM16.6455 11.9907C17.187 11.9907 17.6246 11.5441 17.6246 10.9915V7.99381C17.6246 7.44124 17.187 6.99458 16.6455 6.99458H15.6664C15.1249 6.99458 14.6872 7.44124 14.6872 7.99381V10.9915C14.6872 11.5441 15.1249 11.9907 15.6664 11.9907H16.6455Z" fill="white"/>
</svg>

                                            </span>
                                            <span class="card-link__text">Рейтинг / антирейтинг</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card-5th-wrap">
                                        <a href="voprosy/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <svg width="44" height="35" viewBox="0 0 44 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33.4583 13.749C27.6356 13.749 22.9166 18.468 22.9166 24.2907C22.9166 30.1134 27.6356 34.8324 33.4583 34.8324C39.281 34.8324 44 30.1134 44 24.2907C44 18.468 39.281 13.749 33.4583 13.749ZM34.8333 29.7907C34.8333 30.5497 34.2173 31.1657 33.4583 31.1657C32.6993 31.1657 32.0833 30.5497 32.0833 29.7907V23.374C32.0833 22.615 32.6993 21.999 33.4583 21.999C34.2173 21.999 34.8333 22.615 34.8333 23.374V29.7907ZM33.4583 20.1657C32.6993 20.1657 32.0833 19.5497 32.0833 18.7907C32.0833 18.0317 32.6993 17.4157 33.4583 17.4157C34.2173 17.4157 34.8333 18.0317 34.8333 18.7907C34.8333 19.5497 34.2173 20.1657 33.4583 20.1657Z" fill="white"/>
<path d="M10.0833 16.4991H6.41667C5.91067 16.4991 5.5 16.9089 5.5 17.4158C5.5 17.9227 5.91067 18.3325 6.41667 18.3325H10.0833C10.5893 18.3325 11 17.9227 11 17.4158C11 16.9089 10.5893 16.4991 10.0833 16.4991Z" fill="white"/>
<path d="M12.8333 11.9158H6.41667C5.91067 11.9158 5.5 12.3255 5.5 12.8324C5.5 13.3394 5.91067 13.7491 6.41667 13.7491H12.8333C13.3393 13.7491 13.75 13.3394 13.75 12.8324C13.75 12.3255 13.3393 11.9158 12.8333 11.9158Z" fill="white"/>
<path d="M12.8333 7.33252H6.41667C5.91067 7.33252 5.5 7.74227 5.5 8.24919C5.5 8.7561 5.91067 9.16585 6.41667 9.16585H12.8333C13.3393 9.16585 13.75 8.7561 13.75 8.24919C13.75 7.74227 13.3393 7.33252 12.8333 7.33252Z" fill="white"/>
<path d="M33 10.9991H35.75V0H21.0833C19.833 0 18.7018 0.50875 17.875 1.33008C17.0482 0.50875 15.917 0 14.6667 0H0V27.4927H12.8333C14.4137 27.4927 15.5861 28.1059 16.5 28.8328V28.8631C17.4928 29.9246 18.2572 29.9246 19.25 28.8631V28.8328V26.1241V10.9991V4.576C19.25 3.55392 20.0723 2.72342 21.0833 2.72342H33V10.9991ZM16.5 25.949C15.9748 25.2707 15.1507 24.7546 12.8333 24.7133H2.75V2.72342H14.6667C15.6778 2.72342 16.5 3.55483 16.5 4.576V25.949Z" fill="white"/>
</svg>

                                            </span>
                                            <span class="card-link__text">Типовые вопросы</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
							
                            <div class="card-news">
                                <h5 class="card-news__title">Новости компании</h5>
<?$arrFilter = Array(
"SECTION_ID" => Array(190),
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"2019_news_start", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
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
		"NEWS_COUNT" => "4",
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
		"COMPONENT_TEMPLATE" => "2019_news_start",
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

                                <a href="/press_center/news_dvec/" class="card-news__all">
                                    Все новости
                                    <!-- "source/partials/svg/arrow-right-ico.svg" -->
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 17l8-7.864L5 1" stroke="#165280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <!-- /"source/partials/svg/arrow-right-ico.svg" -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-mobile">
                    <div class="row">
                        <div class="col-12">
                            <a class="btn collapse-menu-btn collapsed" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
                                Исполнителям коммунальных услуг
                                <!-- "source/partials/svg/menu-arrow.svg" -->
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 13l7.864-8L17 13" />
                                </svg>
                                <!-- /"source/partials/svg/menu-arrow.svg" -->
                            </a>
                            <div class="collapse-menu-wrap">
                                <div class="collapse collapse-menu" id="collapseMenu">
                                    <div class="collapse-menu__card">
                                        <a href="/private_clients/" class="collapse-menu__link">
                                            Частным клиентам
                                        </a>
                                    </div>
                                    <div class="collapse-menu__card">
                                        <a href="/organisations/" class="collapse-menu__link">
                                            Корпоративным клиентам
                                        </a>
                                    </div>
									<div class="collapse-menu__card">
                                        <a href="/stockholder/" class="collapse-menu__link">
                                            Акционерам и инвесторам
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
<!-- баннер -->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/br_organisations.php");?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-slider swiper-container js-card-slider">
                                <div class="swiper-wrapper">
<!-- важные объявления-->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/notice_organisations.php");?>
                                </div>
                                <div class="card-slider__controls">
                                    <div class="card-slider__nav">
                                        <div class="card-slider__btn--prev">
                                            <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn">
                                                <!-- "source/partials/svg/slide-nav-left.svg" -->
                                                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 17L1 9.136 9 1" />
                                                </svg>
                                                <!-- /"source/partials/svg/slide-nav-left.svg" -->
                                            </a>
                                        </div>
                                        <div class="card-slider__btn--next">
                                            <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn">
                                                <!-- "source/partials/svg/slide-nav-right.svg" -->
                                                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 17l8-7.864L1 1" />
                                                </svg>
                                                <!-- /"source/partials/svg/slide-nav-right.svg" -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination card-slider__pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="card-contacts">
                                <p class="card-contacts__fio"></p>
                                <p class="card-contacts__position"></p>
                                <p class="card-contacts__phone">
                                    Телефон:
                                </p>
                                <p class="card-contacts__phone">
                                    Факс:                                    
                                </p>
                                <a href="" class="card-contacts__site-link"></a>
                            </div>
                        </div>
                    </div> -->

                    <div class="row row-cards">
					    <a href="rating/" class="card-link card-link--orange">
                            <span class="card-link__ico-wrap">
                                <svg width="40" height="47" viewBox="0 0 40 47" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.3611 27.0019C20.1293 29.152 17.9995 32.8273 17.9995 37C17.9995 41.1727 20.1293 44.848 23.3611 46.9981C23.2955 46.9994 23.2299 47 23.1641 47C17.6412 47 13.1641 42.5228 13.1641 37C13.1641 31.4772 17.6412 27 23.1641 27C23.2299 27 23.2955 27.0006 23.3611 27.0019Z" fill="white"/>
<path d="M31.6632 33.5285H29.4172V36.7135H31.6641C32.1691 36.7135 32.5656 36.5691 32.866 36.2794C33.1665 35.9897 33.3253 35.6031 33.3253 35.1215C33.3253 34.638 33.1665 34.2523 32.866 33.9635C32.5647 33.6729 32.1539 33.5285 31.6632 33.5285Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M40 37C40 42.5228 35.5228 47 30 47C24.4772 47 20 42.5228 20 37C20 31.4772 24.4772 27 30 27C35.5228 27 40 31.4772 40 37ZM34.0843 37.3719C33.4833 37.9522 32.7236 38.241 31.7899 38.241H29.4013V39.094H32.9451C33.0079 39.094 33.0564 39.1102 33.1039 39.1568C33.1514 39.19 33.1658 39.2546 33.1658 39.3192V40.2359C33.1658 40.2995 33.1505 40.348 33.1039 40.3964C33.0716 40.4448 33.0088 40.461 32.9451 40.461H29.4013V41.8279C29.4013 41.8916 29.3842 41.941 29.3385 41.9894C29.2918 42.0369 29.2434 42.0522 29.1797 42.0522H28.0092C27.9464 42.0522 27.898 42.036 27.8495 41.9894C27.8029 41.9571 27.7885 41.8925 27.7885 41.8279V40.461H26.2207C26.1597 40.461 26.0951 40.4439 26.0619 40.365C26.0152 40.3318 26 40.2672 26 40.2036V39.286C26 39.2223 26.0161 39.1748 26.0619 39.1254C26.0951 39.077 26.1588 39.0617 26.2207 39.0617H27.7885V38.224H26.2207C26.1597 38.224 26.1103 38.2096 26.0619 38.1603C26.0152 38.1289 26 38.0643 26 37.9979V36.9386C26 36.875 26.0161 36.8265 26.0619 36.7781C26.0951 36.7297 26.1588 36.7135 26.2207 36.7135H27.7885V32.2251C27.7885 32.1606 27.8038 32.113 27.8495 32.0637C27.8809 32.0161 27.9455 32 28.0092 32H31.7899C32.7236 32 33.4986 32.2897 34.0843 32.8691C34.6691 33.4477 34.9696 34.2038 34.9696 35.1214C34.9696 36.039 34.6691 36.7933 34.0843 37.3719Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 15.9946V0L22.5214 3.9969V8.99071L19.5214 13.9884L22.5214 18V24.0169C17.0389 24.2943 12.4524 27.9682 10.8238 32.9765H0V23.5L3 20.5L0 15.9946ZM6.85403 27.9783C7.39452 27.9783 7.83318 27.5317 7.83318 26.9791V23.9814C7.83318 23.4289 7.39452 22.9822 6.85403 22.9822H5.87488C5.33341 22.9822 4.89573 23.4289 4.89573 23.9814V26.9791C4.89573 27.5317 5.33341 27.9783 5.87488 27.9783H6.85403ZM6.85403 19.9845C7.39452 19.9845 7.83318 19.5379 7.83318 18.9853V15.9876C7.83318 15.435 7.39452 14.9884 6.85403 14.9884H5.87488C5.33341 14.9884 4.89573 15.435 4.89573 15.9876V18.9853C4.89573 19.5379 5.33341 19.9845 5.87488 19.9845H6.85403ZM6.85403 11.9907C7.39452 11.9907 7.83318 11.5441 7.83318 10.9915V7.99381C7.83318 7.44124 7.39452 6.99458 6.85403 6.99458H5.87488C5.33341 6.99458 4.89573 7.44124 4.89573 7.99381V10.9915C4.89573 11.5441 5.33341 11.9907 5.87488 11.9907H6.85403ZM11.7498 27.9783C12.2903 27.9783 12.7289 27.5317 12.7289 26.9791V23.9814C12.7289 23.4289 12.2903 22.9822 11.7498 22.9822H10.7706C10.2291 22.9822 9.79147 23.4289 9.79147 23.9814V26.9791C9.79147 27.5317 10.2291 27.9783 10.7706 27.9783H11.7498ZM11.7498 19.9845C12.2903 19.9845 12.7289 19.5379 12.7289 18.9853V15.9876C12.7289 15.435 12.2903 14.9884 11.7498 14.9884H10.7706C10.2291 14.9884 9.79147 15.435 9.79147 15.9876V18.9853C9.79147 19.5379 10.2291 19.9845 10.7706 19.9845H11.7498ZM11.7498 11.9907C12.2903 11.9907 12.7289 11.5441 12.7289 10.9915V7.99381C12.7289 7.44124 12.2903 6.99458 11.7498 6.99458H10.7706C10.2291 6.99458 9.79147 7.44124 9.79147 7.99381V10.9915C9.79147 11.5441 10.2291 11.9907 10.7706 11.9907H11.7498ZM16.6455 19.9845C17.187 19.9845 17.6246 19.5379 17.6246 18.9853V15.9876C17.6246 15.435 17.187 14.9884 16.6455 14.9884H15.6664C15.1249 14.9884 14.6872 15.435 14.6872 15.9876V18.9853C14.6872 19.5379 15.1249 19.9845 15.6664 19.9845H16.6455ZM16.6455 11.9907C17.187 11.9907 17.6246 11.5441 17.6246 10.9915V7.99381C17.6246 7.44124 17.187 6.99458 16.6455 6.99458H15.6664C15.1249 6.99458 14.6872 7.44124 14.6872 7.99381V10.9915C14.6872 11.5441 15.1249 11.9907 15.6664 11.9907H16.6455Z" fill="white"/>
</svg>

                            </span>
                            <span class="card-link__text">Рейтинг / антирейтинг</span>
                        </a>
                        <a href="voprosy/" class="card-link">
                            <span class="card-link__ico-wrap">
                                                <svg width="44" height="35" viewBox="0 0 44 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33.4583 13.749C27.6356 13.749 22.9166 18.468 22.9166 24.2907C22.9166 30.1134 27.6356 34.8324 33.4583 34.8324C39.281 34.8324 44 30.1134 44 24.2907C44 18.468 39.281 13.749 33.4583 13.749ZM34.8333 29.7907C34.8333 30.5497 34.2173 31.1657 33.4583 31.1657C32.6993 31.1657 32.0833 30.5497 32.0833 29.7907V23.374C32.0833 22.615 32.6993 21.999 33.4583 21.999C34.2173 21.999 34.8333 22.615 34.8333 23.374V29.7907ZM33.4583 20.1657C32.6993 20.1657 32.0833 19.5497 32.0833 18.7907C32.0833 18.0317 32.6993 17.4157 33.4583 17.4157C34.2173 17.4157 34.8333 18.0317 34.8333 18.7907C34.8333 19.5497 34.2173 20.1657 33.4583 20.1657Z" fill="white"/>
<path d="M10.0833 16.4991H6.41667C5.91067 16.4991 5.5 16.9089 5.5 17.4158C5.5 17.9227 5.91067 18.3325 6.41667 18.3325H10.0833C10.5893 18.3325 11 17.9227 11 17.4158C11 16.9089 10.5893 16.4991 10.0833 16.4991Z" fill="white"/>
<path d="M12.8333 11.9158H6.41667C5.91067 11.9158 5.5 12.3255 5.5 12.8324C5.5 13.3394 5.91067 13.7491 6.41667 13.7491H12.8333C13.3393 13.7491 13.75 13.3394 13.75 12.8324C13.75 12.3255 13.3393 11.9158 12.8333 11.9158Z" fill="white"/>
<path d="M12.8333 7.33252H6.41667C5.91067 7.33252 5.5 7.74227 5.5 8.24919C5.5 8.7561 5.91067 9.16585 6.41667 9.16585H12.8333C13.3393 9.16585 13.75 8.7561 13.75 8.24919C13.75 7.74227 13.3393 7.33252 12.8333 7.33252Z" fill="white"/>
<path d="M33 10.9991H35.75V0H21.0833C19.833 0 18.7018 0.50875 17.875 1.33008C17.0482 0.50875 15.917 0 14.6667 0H0V27.4927H12.8333C14.4137 27.4927 15.5861 28.1059 16.5 28.8328V28.8631C17.4928 29.9246 18.2572 29.9246 19.25 28.8631V28.8328V26.1241V10.9991V4.576C19.25 3.55392 20.0723 2.72342 21.0833 2.72342H33V10.9991ZM16.5 25.949C15.9748 25.2707 15.1507 24.7546 12.8333 24.7133H2.75V2.72342H14.6667C15.6778 2.72342 16.5 3.55483 16.5 4.576V25.949Z" fill="white"/>
</svg>

                            </span>
                            <span class="card-link__text">Типовые вопросы</span>
                        </a>
                        <a href="tarify/" class="card-link card-link--orange">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/calc-card.svg" -->
                                <svg width="43" height="41" viewBox="0 0 43 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.08 15.422V2.278c0-.982-.784-1.778-1.748-1.778H2.358C1.394.5.611 1.296.611 2.278v36.444c0 .982.784 1.778 1.748 1.778h27.973c.965 0 1.748-.796 1.748-1.778v-7.81a9.454 9.454 0 01-4.37 1.543l-1.707.1-3.523-.944-1.19-2.222-1.04-1.333c-.114-.11-1.094-.232-1.203-.346v1.202h-5.268v-5.3h4.696c-.238-.85.86-2.741-.055-2.741-.146 0-2.074.052-2.074.04H13.78v-5.3h6.77c.503-.78 7.14-2.537 7.14-2.537v-1.018H4.982V4.944h22.727v8.934a9.474 9.474 0 014.37 1.544zm-18.3 16.19h5.267v5.3h-5.268v-5.3zm8.77.888h5.267v4.412H22.55V32.5zM5.009 15.611h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3z" fill="#fff" />
                                    <path d="M20.271 15h-1.254v4.981h1.254V15z" fill="#fff" />
                                    <path d="M42.218 37.467l-6.391-6.8a11.205 11.205 0 002.543-7.129c0-6.115-4.863-11.09-10.839-11.09-5.977 0-10.84 4.975-10.84 11.09s4.863 11.09 10.84 11.09c2.244 0 4.382-.691 6.21-2.007l6.439 6.852a1.39 1.39 0 001.998.04 1.475 1.475 0 00.04-2.046zM27.531 15.34c4.418 0 8.012 3.678 8.012 8.198 0 4.519-3.594 8.196-8.012 8.196-4.418 0-8.012-3.677-8.012-8.196 0-4.52 3.594-8.198 8.012-8.198z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/calc-card.svg" -->
                            </span>
                            <span class="card-link__text">Тарифы и нормативы</span>
                        </a>
                        <a href="raschety/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/payment-calc.svg" -->
                                <svg width="46" height="38" viewBox="0 0 46 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M32.986 15.841H2.103A2.113 2.113 0 000 17.968v17.906C0 36.993.886 38 2.103 38h30.883a2.113 2.113 0 002.103-2.126V17.968c-.11-1.231-.996-2.127-2.103-2.127zm-.553 16.675H2.103v-14.1h30.219v14.1h.11z" fill="#fff" />
                                    <path d="M45.826 18.192L37.746 1.18C37.303.174 36.086-.274 35.089.174l-24.573 11.75c-.665.336-1.107 1.008-1.107 1.68h3.1L36.306 2.187l1.217 2.686-18.153 8.73h10.626l9.52-4.59 4.538 9.625-6.863 3.358v2.686l7.749-3.694c.885-.56 1.328-1.79.885-2.797zM27.562 28.935a2.115 2.115 0 002.103-2.126 2.115 2.115 0 00-2.103-2.126 2.115 2.115 0 00-2.103 2.126c0 1.174.942 2.126 2.103 2.126z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/payment-calc.svg" -->
                            </span>
                            <span class="card-link__text">Расчеты и оплата</span>
                        </a>
                        <a href="oformlenie/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/contract.svg" -->
                                <svg width="53" height="39" viewBox="0 0 53 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M52.684 16.983L48.82 2.434c-4.188.757-6.764.97-6.764.97-4.572-.67-5.684-1.455-9.662-1.94a8.762 8.762 0 00-3.159.196C27.607.668 25.255-.166 22.437.622c-.04.013-4.113 1.307-9.897 3.607-1.356.026-4.649-.014-6.13-.478l-.913-.285-4.813 14.91 10.025 6.403a3.38 3.38 0 00.738 2.7 3.355 3.355 0 002.767 1.194c-.005.777.24 1.559.775 2.201a3.362 3.362 0 003.173 1.148 3.364 3.364 0 004.586 2.81c-.02.798.225 1.605.776 2.265a3.373 3.373 0 004.764.419l3.007-3.147.864.745a4.216 4.216 0 003.149 1.025 4.252 4.252 0 002.943-1.57 4.47 4.47 0 00.976-3.25c.185.024.371.05.56.05a4.252 4.252 0 003.318-1.586c.906-1.112 1.174-2.55.865-3.863a4.257 4.257 0 003.274-1.584c.99-1.214 1.22-2.817.763-4.222l4.677-3.131zm-6.936 6.122c-.41.503-.984.81-1.616.867a2.327 2.327 0 01-1.723-.563L34.982 17c-.03-.025-.066-.034-.1-.055l-.057-.05a.964.964 0 00-1.363.103.974.974 0 00.103 1.368l7.75 6.686c1.019.88 1.15 2.45.293 3.501a2.334 2.334 0 01-1.614.865 2.33 2.33 0 01-1.724-.563l-.482-.416c-.024-.022-.042-.049-.066-.07l-6.242-5.39a.966.966 0 00-1.364.104.975.975 0 00.103 1.368l.282.244c.013.013.02.03.033.042l5.995 5.173a2.53 2.53 0 01.226 3.428 2.34 2.34 0 01-1.616.866 2.268 2.268 0 01-1.721-.564l-.896-.772a3.397 3.397 0 00-.445-3.668 3.368 3.368 0 00-2.941-1.194 3.391 3.391 0 00-.682-3.009 3.373 3.373 0 00-4.763-.419l-.49.508a3.392 3.392 0 00-.623-1.14 3.363 3.363 0 00-3.811-.969 3.362 3.362 0 00-.699-1.457 3.374 3.374 0 00-4.765-.419l-1.44 1.593c-.117.099-.212.212-.312.322l-8.568-5.473 3.783-11.72c2.328.428 5.825.343 5.993.338l.172-.004.16-.064c5.8-2.312 9.886-3.611 9.895-3.614 1.434-.4 2.722-.238 3.803.142-.74.418-1.16.782-1.16.782l-8.696 7.76c3.755 3.78 6.763 1.94 6.763 1.94l9.663-3.88 12.208 10.503a2.53 2.53 0 01.181 3.378z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/contract.svg" -->
                            </span>
                            <span class="card-link__text">Оформление договора</span>
                        </a>

                        <a href="forms/" class="card-link card-link--big">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/write-mail.svg" -->
                                <svg width="48" height="40" viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.297 25.346l3.764-.91-3.599-3.549-.923 3.68a.635.635 0 00.758.78zM47.56 3.013L44.872.329a1.114 1.114 0 00-1.58 0L41.427 2.19l4.268 4.261L47.56 4.59a1.113 1.113 0 00-.001-1.577zm-7.036 1.811a1.18 1.18 0 00-1.667 0L25.482 17.99a1.195 1.195 0 000 1.7l2.666 2.617c.46.46 1.207.46 1.667 0L43.191 9.14a1.197 1.197 0 000-1.698l-2.667-2.618zM9 20.88a1 1 0 000 2h8a1 1 0 100-2H9zm14-5a1 1 0 00-1-1H9a1 1 0 000 2h13a1 1 0 001-1zm6-6a1 1 0 00-1-1H9a1 1 0 000 2h19a1 1 0 001-1z" fill="#fff" />
                                    <path d="M35.998 28.871H22s-.324.008-.5.008a1.5 1.5 0 00-1.5 1.5v5.357l-9.281-6.482a4.242 4.242 0 00-.719-.383H2.971V3.862h33.027v.036L36 3.88v-3H1.959C.928 1.181.309 1.886 0 2.994v26.77c0 1.008.722 2.115 1.855 2.115h7.359l10.934 7.545c1.352.877 2.742-.092 2.852-1.373l.006-6.172h13.923c1.443 0 1.959-.906 2.062-1.812l.004-11.182-2.996 2.996v6.99h-.001z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/write-mail.svg" -->
                            </span>
                            <span class="card-link__text">Формы договоров и соглашений</span>
                        </a>
                        <a href="zakony/" class="card-link card-link--orange card-link--big">
                            <span class="card-link__ico-wrap">
                                <svg width="30" height="40" viewBox="0 0 30 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.3556 9.02246H6.75439V11.0249H17.3556V9.02246Z" fill="white"/>
<path d="M22.1744 14.0347H6.75439V16.0371H22.1744V14.0347Z" fill="white"/>
<path d="M22.1744 19.0469H6.75439V21.0493H22.1744V19.0469Z" fill="white"/>
<path d="M12.5368 24.0596H6.75439V26.062H12.5368V24.0596Z" fill="white"/>
<path d="M20.2628 33.0818C21.8615 33.0818 23.1575 31.7353 23.1575 30.0743C23.1575 28.4134 21.8615 27.0669 20.2628 27.0669C18.6642 27.0669 17.3682 28.4134 17.3682 30.0743C17.3682 31.7353 18.6642 33.0818 20.2628 33.0818Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.08215 3.14716C2.9658 3.27812 2.89118 3.45796 2.89118 3.65007V36.5886C2.89118 36.6831 2.90857 36.7432 2.92453 36.7805C2.94111 36.8192 2.96473 36.8533 2.99675 36.8838C3.06729 36.9509 3.17544 36.9962 3.28348 36.9962H26.4868C26.7819 36.9962 26.9495 36.9043 27.0176 36.8444C27.0498 36.816 27.0678 36.7893 27.0797 36.7624C27.0915 36.736 27.1088 36.6832 27.1088 36.5886V7.63257L22.4599 3.0038H3.28348C3.28692 3.0038 3.28663 3.00299 3.28348 3.0038C3.2687 3.0076 3.18663 3.02956 3.08215 3.14716ZM0 3.65007C0 1.74262 1.45939 0 3.28348 0H23.0408C23.4135 0 23.7718 0.149593 24.041 0.417547L29.5546 5.9073C29.8391 6.19058 30 6.58225 30 6.99166V36.5886C30 37.6208 29.5877 38.5198 28.8851 39.1374C28.2066 39.7339 27.3403 40 26.4868 40H3.28348C1.68713 40 0 38.7319 0 36.5886V3.65007Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.1925 2.00496L27.9818 8.01982H24.6736C23.2952 8.01982 22.1925 7.23527 22.1925 5.92769V2.00496Z" fill="white"/>
</svg>

                            </span>
                            <span class="card-link__text">Законодательство</span>
                        </a>

                        <a href="/electric_market/uchet/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <svg width="44" height="49" viewBox="0 0 44 49" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.9767 25.4014C27.9338 25.3132 27.8436 25.2568 27.7429 25.2568H23.4496L26.4624 20.3838C26.5124 20.307 26.5159 20.2091 26.4703 20.1297C26.4248 20.0494 26.3381 20 26.2435 20H21.2469C21.1497 20 21.0595 20.0538 21.0157 20.1385L18.0274 27.6381C17.9871 27.7157 17.9915 27.8075 18.0388 27.8807C18.0861 27.9548 18.1684 27.9998 18.2586 27.9998H20.9071L18.8227 34.6533C18.7736 34.7671 18.8174 34.8977 18.926 34.9638C18.968 34.9876 19.0145 35 19.06 35C19.1336 35 19.2071 34.9691 19.2571 34.9109L27.9391 25.6688C28.0039 25.5938 28.0179 25.4897 27.9767 25.4014Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M30.5 11H31.5C32.328 11 33 11.671 33 12.5V14.5C33 15.329 32.328 16 31.5 16H30.5C29.672 16 29 15.329 29 14.5V12.5C29 11.671 29.672 11 30.5 11Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M24.5 11H25.5C26.328 11 27 11.671 27 12.5V14.5C27 15.329 26.328 16 25.5 16H24.5C23.672 16 23 15.329 23 14.5V12.5C23 11.671 23.672 11 24.5 11Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 11H19.5C20.328 11 21 11.671 21 12.5V14.5C21 15.329 20.328 16 19.5 16H18.5C17.672 16 17 15.329 17 14.5V12.5C17 11.671 17.672 11 18.5 11Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 11H13.5C14.328 11 15 11.671 15 12.5V14.5C15 15.329 14.328 16 13.5 16H12.5C11.672 16 11 15.329 11 14.5V12.5C11 11.671 11.672 11 12.5 11Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C9.85 0 0 9.85 0 22C0 34.15 9.85 44 22 44C34.15 44 44 34.15 44 22C44 9.85 34.15 0 22 0ZM22 41C11.507 41 3 32.493 3 22C3 11.507 11.507 3 22 3C32.493 3 41 11.507 41 22C41 32.493 32.493 41 22 41Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.75 47H30.25C30.6647 47 31 47.298 31 47.6667V48.3333C31 48.702 30.6647 49 30.25 49H13.75C13.3353 49 13 48.702 13 48.3333V47.6667C13 47.298 13.3353 47 13.75 47Z" fill="white"/>
</svg>
                                            </span>
                                            <span class="card-link__text">Приборы учёта</span>
                        </a>
                        <a href="posledstviya/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/dont-pay.svg" -->
                                <svg width="41" height="43" viewBox="0 0 41 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.122 39.121L37.376 4.228c.834-.757 2.074-.75 2.768.016.695.766.582 2-.253 2.757L3.637 41.892c-.834.758-2.074.75-2.768-.016s-.581-2 .253-2.755z" fill="#fff" />
                                    <path d="M6.568 29.715l2.789-2.685c-.064.002-.127.008-.191.008-3.4 0-6.166-2.147-6.166-4.787V11.614a1.5 1.5 0 10-3 0v10.638c0 3.527 2.777 6.509 6.568 7.463zm11.763-11.321V7.787c0-2.64 2.766-4.787 6.165-4.787 2.913 0 5.354 1.579 5.995 3.691l2.293-2.207C31.317 1.839 28.16 0 24.496 0c-5.054 0-9.165 3.493-9.165 7.787v13.495l3-2.888z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.831 31.519h-.5v-3c-1.65-2.828-4.483-4.934-4.666-6-.008-1.07 0-3 0-3h-2.454L29 21.645c0 .314-.002.619-.004.874-.183 1.066-3.016 3.172-4.666 6v3h-.5a1.5 1.5 0 000 3h1.5v6.5a1.5 1.5 0 003 0v-6.5h6v6.5a1.5 1.5 0 003 0v-6.5h1.5a1.5 1.5 0 000-3z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/dont-pay.svg" -->
                            </span>
                            <span class="card-link__text">Последствия неоплаты</span>
                        </a>
                        <a href="edo/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/email-receipt.svg" -->
                                                <svg width="44" height="34" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.5 24.906V2.5H40v-.385C39.691 1.007 39.072.302 38.041 0H1.959C.928.302.309 1.007 0 2.115v23.77C0 26.893.722 28 1.855 28h36.073c1.443 0 1.959-.906 2.062-1.812l.001-1.281H2.5v-.001z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 16h5a1 1 0 110 2h-5a1 1 0 110-2zm-4-5h9c0 .5.5.5 1 1a1 1 0 01-1 1h-9a1 1 0 010-2zm30-5H23a1 1 0 00-1 1v-.102l9.469 6.508c1.102.859 1.936.857 3.031 0l9.5-6.59V7a1 1 0 00-1-1z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M42 12.092V19H24v-6.855L22 11v9a1 1 0 001 1h20a1 1 0 001-1v-9.463l-2 1.555z" fill="#fff" />
                                                    <path d="M11.967 34c-1.29-.111-1.29-2.666 0-3h16.066c1.289.223 1.289 2.889 0 3H11.967z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/email-receipt.svg" -->
                            </span>
                            <span class="card-link__text">Электронный документооборот</span>
                        </a>
                    </div>

                    <div class="row">
                        <div class="card-news">
                            <h5 class="card-news__title">Новости компании</h5>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"2019_news_start", 
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
		"COMPONENT_TEMPLATE" => "2019_news_start",
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
                            <a href="/press_center/news_dvec/" class="card-news__all">
                                Все новости
                                <!-- "source/partials/svg/arrow-right-ico.svg" -->
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 17l8-7.864L5 1" stroke="#165280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <!-- /"source/partials/svg/arrow-right-ico.svg" -->
                            </a>
                        </div>
                    </div>

                </div>
				<div style="display:none">