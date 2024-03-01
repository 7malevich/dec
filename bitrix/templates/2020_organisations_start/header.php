<html class="no-js" lang="ru">

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge">
<?$APPLICATION->ShowHead()?>
<title>ДЭК – Корпоративным клиентам</title>

    <meta name="description" content="ДЭК - Корпоративным клиентам">
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
    <meta property="og:description" content="Дальневосточная энергетическая компания - Корпоративным клиентам">
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

	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon"  type="image/svg+xml" href="/favicon.svg">

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
                                        <a href="/organisations/tariffs/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/calc-card.svg" -->
                                                <svg width="43" height="41" viewBox="0 0 43 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.08 15.422V2.278c0-.982-.784-1.778-1.748-1.778H2.358C1.394.5.611 1.296.611 2.278v36.444c0 .982.784 1.778 1.748 1.778h27.973c.965 0 1.748-.796 1.748-1.778v-7.81a9.454 9.454 0 01-4.37 1.543l-1.707.1-3.523-.944-1.19-2.222-1.04-1.333c-.114-.11-1.094-.232-1.203-.346v1.202h-5.268v-5.3h4.696c-.238-.85.86-2.741-.055-2.741-.146 0-2.074.052-2.074.04H13.78v-5.3h6.77c.503-.78 7.14-2.537 7.14-2.537v-1.018H4.982V4.944h22.727v8.934a9.474 9.474 0 014.37 1.544zm-18.3 16.19h5.267v5.3h-5.268v-5.3zm8.77.888h5.267v4.412H22.55V32.5zM5.009 15.611h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3z" fill="#fff" />
                                                    <path d="M20.271 15h-1.254v4.981h1.254V15z" fill="#fff" />
                                                    <path d="M42.218 37.467l-6.391-6.8a11.205 11.205 0 002.543-7.129c0-6.115-4.863-11.09-10.839-11.09-5.977 0-10.84 4.975-10.84 11.09s4.863 11.09 10.84 11.09c2.244 0 4.382-.691 6.21-2.007l6.439 6.852a1.39 1.39 0 001.998.04 1.475 1.475 0 00.04-2.046zM27.531 15.34c4.418 0 8.012 3.678 8.012 8.198 0 4.519-3.594 8.196-8.012 8.196-4.418 0-8.012-3.677-8.012-8.196 0-4.52 3.594-8.198 8.012-8.198z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/calc-card.svg" -->
                                            </span>
                                            <span class="card-link__text">Тарифы и цены</span>
                                        </a>
                                        <a href="/organisations/contractual_relations/repayment_terms_electric_power/" class="card-link">
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
                                        <a href="/organisations/contractual_relations/order_conclusion_contracts/" class="card-link">
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
                                        <a href="/organisations/contractual_relations/forms_contracts_agreements/" class="card-link card-link--big">
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
                                        <a href="/electric_market/disclosure/purc/" class="card-link card-link--big card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/evidense.svg" -->
                                                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M41.527 40.152l2.916-4.654-6.836.017 2.834 4.625a.633.633 0 001.086.012zm2.965-29.641l-7-.012-.006-2.885a1.114 1.114 0 011.115-1.12l4.768-.013a1.109 1.109 0 011.118 1.112l.005 2.918zm-1.189 1.972l-4.643.013a1.179 1.179 0 00-1.176 1.182l-.006 18.613a1.197 1.197 0 001.205 1.197l4.611.019a1.179 1.179 0 001.176-1.182l.036-18.645c0-.666-.537-1.2-1.203-1.197zM28.891 25.622a.294.294 0 00-.267-.164h-4.9l3.438-5.522a.276.276 0 00.01-.289.299.299 0 00-.26-.147h-5.705a.298.298 0 00-.264.157l-3.412 8.5a.27.27 0 00.013.274.297.297 0 00.251.135h3.023l-2.379 7.541a.281.281 0 00.118.353.325.325 0 00.153.041.298.298 0 00.225-.101l9.913-10.476a.277.277 0 00.043-.302zM31 10.5h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5z" fill="#fff" />
                                                    <path d="M34.557 37.183A18.92 18.92 0 0122.5 41.5c-10.493 0-19-8.507-19-19s8.507-19 19-19a18.92 18.92 0 0112.057 4.317V4.101A21.891 21.891 0 0022.5.5c-12.15 0-22 9.85-22 22s9.85 22 22 22c4.453 0 8.594-1.327 12.057-3.601v-3.716z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/evidense.svg" -->
                                            </span>
                                            <span class="card-link__text">Предельные уровни регулируемых цен</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/organisations/tech_site/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/online-services.svg" -->
                                                <svg width="42" height="34" viewBox="0 0 42 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M40.041 6H25.959c-1.031.302-1.65 1.007-1.959 2.115v23.77c0 1.008.722 2.115 1.855 2.115h14.073c1.443 0 1.959-.906 2.062-1.812L42 8.116c-.309-1.109-.928-1.814-1.959-2.116zM35 32h-4a1 1 0 110-2h4a1 1 0 110 2zm3.998-4.008H26.971V8.983h12.027v19.009z" fill="#fff" />
                                                    <path d="M21 21.992H2.971V2.983h34.027V3H40v-.885C39.691 1.007 39.072.302 38.041 0H1.959C.928.302.309 1.007 0 2.115v23.77C0 26.893.722 28 1.855 28H21v-6.008zM11.967 31c-1.29.334-1.29 2.889 0 3H21v-3h-9.033z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/online-services.svg" -->
                                            </span>
                                            <span class="card-link__text">Технологический сайт</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/organisations/contractual_relations/restrictions/" class="card-link">
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
                                        <a href="/organisations/ogranicheniya/" class="card-link card-link--big">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/products.svg" -->
                                                <svg width="51" height="42" viewBox="0 0 51 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M43.83 13.816l7.012-3.869L32.052 0l-6.63 3.66L18.788 0 0 9.947l7.012 3.869L0 17.684l7.737 4.096v10.273L25.42 42l17.684-9.947V21.78l7.737-4.096-7.012-3.868zM32.075 2.512l14.118 7.475-4.65 2.566-13.834-7.631 4.366-2.41zm9.467 12.567l4.651 2.565-14.118 7.475-4.365-2.408 13.832-7.632zM4.65 9.987l14.118-7.475 4.365 2.409L9.3 12.552 4.65 9.987zm4.65 5.092l13.834 7.632-4.364 2.408-14.12-7.475L9.3 15.08zm31.596 16.006L25.42 39.79V23.972l6.632 3.66 8.842-4.681v8.134z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/products.svg" -->
                                            </span>
                                            <span class="card-link__text">Уведомления об ограничениях</span>
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
                                        <a href="/organisations/edo/" class="card-link">
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
                                <div class="col-6">
                                    <div class="card-5th-wrap">
                                        <a href="/organisations/cabinet/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/service-order.svg" -->
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M26.84 11.402c-1.452 0-2.63 1.191-2.63 2.66v15.954l-1.758-1.53s-1.623-1.13-3.572-1.13c-1.048 0-2.19.327-3.223 1.33l8.552 9.309s1.683 1.997 5.779 1.997l.142-.001s.1.009.278.009c1.603 0 9.618-.636 9.592-13.305l-10.524-5.32v-7.312c-.002-1.47-1.182-2.66-2.636-2.66z" fill="#fff" />
                                                    <path d="M16.848 36.593a.985.985 0 01-.78.396H12.05a1.001 1.001 0 01-1.004-1c0-.552.449-1 1.004-1h3.317l-1.854-2.007H2.984v-30h22.12v4.14h3.013l.002-5.007C27.809 1.007 27.187.302 26.152 0H1.967C.932.302.31 1.007 0 2.114v34.76c0 1.008.726 2.114 1.863 2.114h17.199l-2.214-2.395z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.164 10.247c0 .552-.475 1-1.06 1h-7.92c-.586 0-1.062-.448-1.062-1s.475-1 1.061-1h7.92c.586 0 1.061.448 1.061 1zm0 5.999c0 .552-.475 1-1.06 1h-7.92c-.586 0-1.062-.448-1.062-1s.475-1 1.061-1h7.92c.586 0 1.061.448 1.061 1zm0 5.998c0 .553-.475 1-1.06 1h-7.92c-.586 0-1.062-.447-1.062-1 0-.553.475-1 1.061-1h7.92c.586 0 1.061.447 1.061 1z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/service-order.svg" -->
                                            </span>
                                            <span class="card-link__text">Личный кабинет</span>
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
                                Корпоративным клиентам
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
                                        <a href="/iku/" class="collapse-menu__link">
                                            Исполнителям коммунальных услуг
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
					    <a href="/organisations/edo/" class="card-link">
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
                        <a href="/organisations/cabinet/" class="card-link card-link--orange">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/service-order.svg" -->
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M26.84 11.402c-1.452 0-2.63 1.191-2.63 2.66v15.954l-1.758-1.53s-1.623-1.13-3.572-1.13c-1.048 0-2.19.327-3.223 1.33l8.552 9.309s1.683 1.997 5.779 1.997l.142-.001s.1.009.278.009c1.603 0 9.618-.636 9.592-13.305l-10.524-5.32v-7.312c-.002-1.47-1.182-2.66-2.636-2.66z" fill="#fff" />
                                                    <path d="M16.848 36.593a.985.985 0 01-.78.396H12.05a1.001 1.001 0 01-1.004-1c0-.552.449-1 1.004-1h3.317l-1.854-2.007H2.984v-30h22.12v4.14h3.013l.002-5.007C27.809 1.007 27.187.302 26.152 0H1.967C.932.302.31 1.007 0 2.114v34.76c0 1.008.726 2.114 1.863 2.114h17.199l-2.214-2.395z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.164 10.247c0 .552-.475 1-1.06 1h-7.92c-.586 0-1.062-.448-1.062-1s.475-1 1.061-1h7.92c.586 0 1.061.448 1.061 1zm0 5.999c0 .552-.475 1-1.06 1h-7.92c-.586 0-1.062-.448-1.062-1s.475-1 1.061-1h7.92c.586 0 1.061.448 1.061 1zm0 5.998c0 .553-.475 1-1.06 1h-7.92c-.586 0-1.062-.447-1.062-1 0-.553.475-1 1.061-1h7.92c.586 0 1.061.447 1.061 1z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/service-order.svg" -->
                            </span>
                            <span class="card-link__text">Личный кабинет</span>
                        </a>
                        <a href="/organisations/tariffs/" class="card-link card-link--orange">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/calc-card.svg" -->
                                <svg width="43" height="41" viewBox="0 0 43 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.08 15.422V2.278c0-.982-.784-1.778-1.748-1.778H2.358C1.394.5.611 1.296.611 2.278v36.444c0 .982.784 1.778 1.748 1.778h27.973c.965 0 1.748-.796 1.748-1.778v-7.81a9.454 9.454 0 01-4.37 1.543l-1.707.1-3.523-.944-1.19-2.222-1.04-1.333c-.114-.11-1.094-.232-1.203-.346v1.202h-5.268v-5.3h4.696c-.238-.85.86-2.741-.055-2.741-.146 0-2.074.052-2.074.04H13.78v-5.3h6.77c.503-.78 7.14-2.537 7.14-2.537v-1.018H4.982V4.944h22.727v8.934a9.474 9.474 0 014.37 1.544zm-18.3 16.19h5.267v5.3h-5.268v-5.3zm8.77.888h5.267v4.412H22.55V32.5zM5.009 15.611h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3z" fill="#fff" />
                                    <path d="M20.271 15h-1.254v4.981h1.254V15z" fill="#fff" />
                                    <path d="M42.218 37.467l-6.391-6.8a11.205 11.205 0 002.543-7.129c0-6.115-4.863-11.09-10.839-11.09-5.977 0-10.84 4.975-10.84 11.09s4.863 11.09 10.84 11.09c2.244 0 4.382-.691 6.21-2.007l6.439 6.852a1.39 1.39 0 001.998.04 1.475 1.475 0 00.04-2.046zM27.531 15.34c4.418 0 8.012 3.678 8.012 8.198 0 4.519-3.594 8.196-8.012 8.196-4.418 0-8.012-3.677-8.012-8.196 0-4.52 3.594-8.198 8.012-8.198z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/calc-card.svg" -->
                            </span>
                            <span class="card-link__text">Тарифы и цены</span>
                        </a>
                        <a href="/organisations/contractual_relations/repayment_terms_electric_power/" class="card-link">
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
                        <a href="/organisations/contractual_relations/order_conclusion_contracts/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/contract.svg" -->
                                <svg width="53" height="39" viewBox="0 0 53 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M52.684 16.983L48.82 2.434c-4.188.757-6.764.97-6.764.97-4.572-.67-5.684-1.455-9.662-1.94a8.762 8.762 0 00-3.159.196C27.607.668 25.255-.166 22.437.622c-.04.013-4.113 1.307-9.897 3.607-1.356.026-4.649-.014-6.13-.478l-.913-.285-4.813 14.91 10.025 6.403a3.38 3.38 0 00.738 2.7 3.355 3.355 0 002.767 1.194c-.005.777.24 1.559.775 2.201a3.362 3.362 0 003.173 1.148 3.364 3.364 0 004.586 2.81c-.02.798.225 1.605.776 2.265a3.373 3.373 0 004.764.419l3.007-3.147.864.745a4.216 4.216 0 003.149 1.025 4.252 4.252 0 002.943-1.57 4.47 4.47 0 00.976-3.25c.185.024.371.05.56.05a4.252 4.252 0 003.318-1.586c.906-1.112 1.174-2.55.865-3.863a4.257 4.257 0 003.274-1.584c.99-1.214 1.22-2.817.763-4.222l4.677-3.131zm-6.936 6.122c-.41.503-.984.81-1.616.867a2.327 2.327 0 01-1.723-.563L34.982 17c-.03-.025-.066-.034-.1-.055l-.057-.05a.964.964 0 00-1.363.103.974.974 0 00.103 1.368l7.75 6.686c1.019.88 1.15 2.45.293 3.501a2.334 2.334 0 01-1.614.865 2.33 2.33 0 01-1.724-.563l-.482-.416c-.024-.022-.042-.049-.066-.07l-6.242-5.39a.966.966 0 00-1.364.104.975.975 0 00.103 1.368l.282.244c.013.013.02.03.033.042l5.995 5.173a2.53 2.53 0 01.226 3.428 2.34 2.34 0 01-1.616.866 2.268 2.268 0 01-1.721-.564l-.896-.772a3.397 3.397 0 00-.445-3.668 3.368 3.368 0 00-2.941-1.194 3.391 3.391 0 00-.682-3.009 3.373 3.373 0 00-4.763-.419l-.49.508a3.392 3.392 0 00-.623-1.14 3.363 3.363 0 00-3.811-.969 3.362 3.362 0 00-.699-1.457 3.374 3.374 0 00-4.765-.419l-1.44 1.593c-.117.099-.212.212-.312.322l-8.568-5.473 3.783-11.72c2.328.428 5.825.343 5.993.338l.172-.004.16-.064c5.8-2.312 9.886-3.611 9.895-3.614 1.434-.4 2.722-.238 3.803.142-.74.418-1.16.782-1.16.782l-8.696 7.76c3.755 3.78 6.763 1.94 6.763 1.94l9.663-3.88 12.208 10.503a2.53 2.53 0 01.181 3.378z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/contract.svg" -->
                            </span>
                            <span class="card-link__text">Оформление договора</span>
                        </a>

                        <a href="/organisations/contractual_relations/forms_contracts_agreements/" class="card-link card-link--big">
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
                        <a href="/electric_market/disclosure/purc/" class="card-link card-link--orange card-link--big">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/evidense.svg" -->
                                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M41.527 40.152l2.916-4.654-6.836.017 2.834 4.625a.633.633 0 001.086.012zm2.965-29.641l-7-.012-.006-2.885a1.114 1.114 0 011.115-1.12l4.768-.013a1.109 1.109 0 011.118 1.112l.005 2.918zm-1.189 1.972l-4.643.013a1.179 1.179 0 00-1.176 1.182l-.006 18.613a1.197 1.197 0 001.205 1.197l4.611.019a1.179 1.179 0 001.176-1.182l.036-18.645c0-.666-.537-1.2-1.203-1.197zM28.891 25.622a.294.294 0 00-.267-.164h-4.9l3.438-5.522a.276.276 0 00.01-.289.299.299 0 00-.26-.147h-5.705a.298.298 0 00-.264.157l-3.412 8.5a.27.27 0 00.013.274.297.297 0 00.251.135h3.023l-2.379 7.541a.281.281 0 00.118.353.325.325 0 00.153.041.298.298 0 00.225-.101l9.913-10.476a.277.277 0 00.043-.302zM31 10.5h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5z" fill="#fff" />
                                    <path d="M34.557 37.183A18.92 18.92 0 0122.5 41.5c-10.493 0-19-8.507-19-19s8.507-19 19-19a18.92 18.92 0 0112.057 4.317V4.101A21.891 21.891 0 0022.5.5c-12.15 0-22 9.85-22 22s9.85 22 22 22c4.453 0 8.594-1.327 12.057-3.601v-3.716z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/evidense.svg" -->
                            </span>
                            <span class="card-link__text">Предельные уровни регулируемых цен</span>
                        </a>

                        <a href="/organisations/tech_site/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/online-services.svg" -->
                                                <svg width="42" height="34" viewBox="0 0 42 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M40.041 6H25.959c-1.031.302-1.65 1.007-1.959 2.115v23.77c0 1.008.722 2.115 1.855 2.115h14.073c1.443 0 1.959-.906 2.062-1.812L42 8.116c-.309-1.109-.928-1.814-1.959-2.116zM35 32h-4a1 1 0 110-2h4a1 1 0 110 2zm3.998-4.008H26.971V8.983h12.027v19.009z" fill="#fff" />
                                                    <path d="M21 21.992H2.971V2.983h34.027V3H40v-.885C39.691 1.007 39.072.302 38.041 0H1.959C.928.302.309 1.007 0 2.115v23.77C0 26.893.722 28 1.855 28H21v-6.008zM11.967 31c-1.29.334-1.29 2.889 0 3H21v-3h-9.033z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/online-services.svg" -->
                                            </span>
                                            <span class="card-link__text">Технологический сайт</span>
                        </a>
                        <a href="/organisations/contractual_relations/restrictions/" class="card-link">
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

                        <a href="/organisations/ogranicheniya/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/products.svg" -->
                                <svg width="51" height="42" viewBox="0 0 51 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M43.83 13.816l7.012-3.869L32.052 0l-6.63 3.66L18.788 0 0 9.947l7.012 3.869L0 17.684l7.737 4.096v10.273L25.42 42l17.684-9.947V21.78l7.737-4.096-7.012-3.868zM32.075 2.512l14.118 7.475-4.65 2.566-13.834-7.631 4.366-2.41zm9.467 12.567l4.651 2.565-14.118 7.475-4.365-2.408 13.832-7.632zM4.65 9.987l14.118-7.475 4.365 2.409L9.3 12.552 4.65 9.987zm4.65 5.092l13.834 7.632-4.364 2.408-14.12-7.475L9.3 15.08zm31.596 16.006L25.42 39.79V23.972l6.632 3.66 8.842-4.681v8.134z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/products.svg" -->
                            </span>
                            <span class="card-link__text">Уведомления об ограничениях</span>
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