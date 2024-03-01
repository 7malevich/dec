<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge">
<?$APPLICATION->ShowHead()?>
<title>ДЭК – Акционерам и инвесторам</title>

    <meta name="description" content="ДЭК - Акционерам и инвесторам">
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
    <meta property="og:description" content="Дальневосточная энергетическая компания - акционерам и инвесторам">
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
                                                    <a href="tel:84232406845" class="header-b__phones-phone-link">
                                                        <span class="header-b__phones-phone-link-department">
														Приемная:</span>
                                                        8 (423) 240-68-45
                                                    </a>
                                                </p>
                                                <p class="dropdown-item">
                                                    <a href="tel:84232406855" class="header-b__phones-phone-link">
                                                        <span class="header-b__phones-phone-link-department">Факс:</span>
                                                        8 (423) 240-68-55
                                                    </a>
                                                </p>
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
                                        <!-- <a onclick="return false" href="/PleaseEnableJavascript.html" class="header-b__phones-call">
                                            Заказать обратный звонок
                                        </a> -->
										<!-- <div>Текущее время: <span id="time_in_office"></span>
										</div> -->
                                    </div>
                                    <a href="/private_clients/service/" class="header-b__card">
											<img src="/design2019/svg/ico-hdr-card-1.svg" width="44" height="30" style="float:left">
                                            <p class="header-b__card-text">Отделения и участки</p>
                                        </a>
									<a href="/private_clients/online/" class="header-b__card">
											<img src="/design2019/svg/ico-hdr-card-2.svg" width="44" height="25" style="float:left">
                                            <p class="header-b__card-text">Услуги онлайн</p>
                                    </a>
                                    <a href="/private_clients/cabinet/" class="header-b__card">
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
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/br_common.php");?>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/stockholder/meetings/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/sobranie-a.svg" -->
                                                <svg width="46" height="36" viewBox="0 0 46 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.708 22.197a12.59 12.59 0 012.897 2.75h3.615a15.637 15.637 0 00-7.708-6.767c2.547-1.818 4.212-4.79 4.212-8.156C25.724 4.488 21.236 0 15.699 0h-.161C10 0 5.514 4.488 5.514 10.024c0 3.365 1.664 6.338 4.21 8.156C4.033 20.486 0 26.067 0 32.577a1.504 1.504 0 103.008 0c0-4.314 2.193-8.126 5.523-10.38.036.014.088-.092.125-.076a12.49 12.49 0 016.046-2.148c.125-.009.746-.04.932-.04.186 0 .807.031.932.04 2.178.176 4.254.92 6.047 2.148.034-.015.058.09.095.076zm-7.09-5.16c-3.832-.042-6.938-3.17-6.938-7.012 0-3.842 3.106-6.97 6.939-7.013 3.832.042 6.938 3.17 6.938 7.012 0 3.843-3.106 6.97-6.938 7.013zm18.492-1.97a2.749 2.749 0 00-2.717-2.382 2.76 2.76 0 00-2.755 2.763 2.76 2.76 0 002.755 2.763c.632 0 1.208-.223 1.673-.582 4.115 2.018 6.8 6.256 6.8 10.961v5.058h2.755V28.59c0-5.831-3.367-11.079-8.511-13.523z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.124 27.71h22.04A1.84 1.84 0 0146 29.552v4.606A1.84 1.84 0 0144.163 36H18.451a1.84 1.84 0 01-1.837-1.842l2.755-4.606c.66-1.18 1.741-1.842 2.755-1.842z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/sobranie-a.svg" -->
                                            </span>
                                            <span class="card-link__text">Собрания акционеров</span>
                                        </a>
                                        <a href="/stockholder/joint_stock_structure/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/upr-capitalom.svg" -->
                                                <svg width="46" height="47" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M45.274 22.888c-3.43-3.94-8.17-2.094-10.23-.538l-4.067 3.27c-.007-.188-.01-.376-.03-.572l-.13-1.202H15.328c-.488-.044-2.163-.08-3.715 1.29l-6.748 6.748-.158-.154c-.457-.445-1.165-.467-1.583-.05L.293 34.522c-.417.416-.385 1.113.072 1.558l10.748 10.462c.457.444 1.165.468 1.583.05l2.832-2.842c.417-.418.385-1.116-.072-1.559l-.516-.502 1.748-1.699h12.92l.2-.014c1.6-.24 2.508-1.23 2.546-1.277l8.392-8.95L46 23.722l-.726-.833zm-6.49 5.02l-8.394 8.954a1.886 1.886 0 01-.896.437H15.62l-2.61 2.511-6.215-6.05 6.662-6.663c.748-.659 1.594-.575 1.605-.575l13.197.014c-.346 2.46-2.657 3.372-3.33 3.588h-4.29a1.346 1.346 0 000 2.69h4.485l.342-.043c1.094-.287 2.652-1.05 3.836-2.379.061-.035.122-.07.179-.116l7.212-5.802c.36-.266 3.281-2.319 5.75-.556l-3.659 3.99zM25.853 9.82h-2.246v3.184h2.247c.505 0 .902-.144 1.202-.434.3-.29.46-.676.46-1.158 0-.483-.16-.869-.46-1.158-.301-.29-.712-.435-1.203-.435z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.037 5.147c1.432-2.011 2.468-3.276 2.468-3.276-3.483.671-5.382-.897-5.382-.897-3.962-2.192-6.278 0-6.278 0l3.153 3.942c-5.792 1.572-9.571 8.252-10.545 16.687-.018.15-.026.287-.04.43a7.777 7.777 0 013.567-.893c.176 0 .328.007.452.015h16.804l1.122-.902.033-.026.032-.025c.48-.363 1.802-1.258 3.622-1.838-1.902-6.603-4.602-11.575-9.008-13.217zm.237 8.516c-.6.58-1.36.869-2.294.869h-2.39v.853h3.544c.063 0 .111.016.159.063.047.033.062.097.062.162v.917a.21.21 0 01-.062.16c-.032.049-.095.065-.159.065H23.59v1.367a.217.217 0 01-.063.161.202.202 0 01-.158.063H22.2a.21.21 0 01-.16-.063c-.047-.032-.061-.097-.061-.161v-1.367H20.41c-.061 0-.126-.017-.16-.096-.046-.033-.061-.098-.061-.162v-.917c0-.064.016-.111.062-.16.033-.05.097-.065.159-.065h1.568v-.837H20.41a.203.203 0 01-.16-.064c-.046-.031-.061-.096-.061-.162v-1.06c0-.063.016-.112.062-.16.033-.049.097-.065.159-.065h1.568V8.516c0-.065.015-.112.06-.162.032-.047.096-.063.16-.063h3.78c.935 0 1.71.29 2.295.869.585.578.886 1.335.886 2.252 0 .918-.3 1.672-.886 2.25z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/upr-capitalom.svg" -->
                                            </span>
                                            <span class="card-link__text">Акционерный капитал</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/stockholder/financial_statements/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/vnutr-doc.svg" -->
                                                <svg width="39" height="42" viewBox="0 0 39 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.773 17.182c-6.854 0-12.41 5.555-12.41 12.409 0 6.854 5.556 12.41 12.41 12.41 6.853 0 12.409-5.556 12.409-12.41s-5.556-12.41-12.41-12.41zm6.797 9.543l-7.636 8.59a1.426 1.426 0 01-1.029.48h-.042c-.378 0-.743-.15-1.012-.419l-4.773-4.772a1.431 1.431 0 112.025-2.025l3.698 3.699 6.628-7.456a1.433 1.433 0 012.14 1.902z" fill="#fff" />
                                                    <path d="M10.014 33.401H2.835V12h6.291c.985-.288 1.575-.961 1.87-2.019V2.848h12.865v10.639a16.39 16.39 0 011.91-.122c.322 0 .636.03.953.047l.003-11.393C26.432.96 25.841.289 24.857 0H10.523v.004c-.364.004-.779.198-1.023.443L.239 11.007c-.151.15-.203.352-.212.553H.014v.144L0 34.254c0 .962.69 2.019 1.77 2.019h9.226a16.14 16.14 0 01-.982-2.872z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.455 14.816V.954A.954.954 0 0031.5 0h-.955a.954.954 0 00-.954.955v12.88c.993.24 1.95.566 2.864.98zm5.727 4.329V.955A.954.954 0 0037.227 0h-.954a.954.954 0 00-.955.955v15.533a16.37 16.37 0 012.864 2.657z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/vnutr-doc.svg" -->
                                            </span>
                                            <span class="card-link__text">Финансовая отчетность</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-5th-wrap">
                                        <a href="/stockholder/disclosure_documents/affiliated_persons/" class="card-link card-link--big card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/list-affelirov-person.svg" -->
                                                <svg width="39" height="33" viewBox="0 0 39 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 33c-.384 0-.768-.146-1.061-.439l-3-3A1.5 1.5 0 112.56 27.44l1.939 1.939 4.939-4.939a1.5 1.5 0 112.121 2.121l-6 6A1.487 1.487 0 014.5 33z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 28.5h22a1 1 0 011 1v1a1 1 0 01-1 1h-22a1 1 0 01-1-1v-1a1 1 0 011-1z" fill="#fff" />
                                                    <path d="M4.5 21c-.384 0-.768-.146-1.061-.439l-3-3A1.5 1.5 0 112.56 15.44l1.939 1.939 4.939-4.939a1.5 1.5 0 112.121 2.121l-6 6A1.487 1.487 0 014.5 21z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 16.5h22a1 1 0 011 1v1a1 1 0 01-1 1h-22a1 1 0 01-1-1v-1a1 1 0 011-1z" fill="#fff" />
                                                    <path d="M4.5 9c-.384 0-.768-.146-1.061-.439l-3-3A1.5 1.5 0 112.56 3.44l1.939 1.939L9.438.44a1.5 1.5 0 112.121 2.121l-6 6A1.487 1.487 0 014.5 9z" fill="#fff" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 4.5h22a1 1 0 011 1v1a1 1 0 01-1 1h-22a1 1 0 01-1-1v-1a1 1 0 011-1z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/list-affelirov-person.svg" -->
                                            </span>
                                            <span class="card-link__text">Список аффилированных лиц</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-8">
                                    <div class="card-5th-wrap">
                                        <a href="/stockholder/disclosure_documents/" class="card-link card-link--big">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/rask-info-ot.svg" -->
                                                <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M37.706 36.738l-10.55-10.512a10.913 10.913 0 001.945-6.23c0-6.076-4.945-11.001-11.044-11.001-6.1 0-11.044 4.925-11.044 11 0 6.077 4.943 11.002 11.042 11.002 2.326 0 4.48-.72 6.26-1.941l10.551 10.51a1.006 1.006 0 001.42 0l1.42-1.414a.998.998 0 000-1.414zM14.054 23.505c0 .828-.674 1.5-1.506 1.5a1.504 1.504 0 01-1.506-1.5v-2c0-.829.675-1.501 1.506-1.501.832 0 1.507.672 1.507 1.5v2.001zm5.02 0c0 .828-.674 1.5-1.505 1.5a1.504 1.504 0 01-1.506-1.5v-5.002c0-.828.674-1.5 1.506-1.5.83 0 1.506.672 1.506 1.5v5.002zm5.02 0c0 .828-.674 1.5-1.505 1.5a1.504 1.504 0 01-1.506-1.5v-8.002c0-.829.674-1.5 1.506-1.5.831 0 1.506.671 1.506 1.5v8.002z" fill="#fff" />
                                                    <path d="M26.819 37.003H3.029V3.016h26.08v1.896c.036 1.751.095 2.077 1.754 2.105h2.251v20.22l3.027 2.75V7.777l.02-2.01-.02-.205a1.064 1.064 0 00-.33-.65L30.627.347c-.174-.173-.358-.295-.585-.329L29.743 0 2.194.018C1.04.352.345 1.134 0 2.364L.012 37.99C.127 38.995.702 40 2.32 40h26.726l-2.227-2.997z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/rask-info-ot.svg" -->
                                            </span>
                                            <span class="card-link__text">Раскрытие информации и отчетность</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/company/control/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/upr-company.svg" -->
                                                <svg width="46" height="42" viewBox="0 0 46 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.048 4.8h5.885c1.08 0 1.957-.86 1.957-1.917v-.967C27.89.858 27.014 0 25.933 0h-5.885c-1.08 0-1.957.858-1.957 1.916v.967c0 1.059.877 1.916 1.957 1.916zm5.653 1.89h-5.236a.577.577 0 00-.581.572l-4.548 23.964c0 .315.236.775.582 1.142l6.584 9.429c.242.222.581.315.581 0 0 .315.34.222.583 0l6.584-9.429c.345-.368.581-.827.581-1.142L26.282 7.262a.577.577 0 00-.58-.572zM11.255 8.144c.503 0 .988-.254 1.26-.697l2.936-4.79a1.42 1.42 0 00-.503-1.973 1.487 1.487 0 00-2.014.493L10.64 4.918 2.013 1.541c-.754-.295-1.608.063-1.908.8a1.427 1.427 0 00.817 1.868l9.787 3.833c.178.069.362.102.545.102zm34.64-5.804a1.477 1.477 0 00-1.908-.8l-8.626 3.378-2.293-3.741a1.485 1.485 0 00-2.014-.493 1.42 1.42 0 00-.504 1.972l2.936 4.79c.272.444.755.698 1.26.698.181 0 .365-.033.544-.102l9.787-3.833a1.429 1.429 0 00.818-1.868z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/upr-company.svg" -->
                                            </span>
                                            <span class="card-link__text">Управление</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/company/control/committee_of_directors/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/sovet-director.svg" -->
                                                <svg width="52" height="36" viewBox="0 0 52 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M32.108 18.99c2.666-1.9 4.409-5.004 4.409-8.52C36.517 4.688 31.819 0 26.023 0h-.169C20.058 0 15.36 4.688 15.36 10.47c0 3.516 1.743 6.62 4.409 8.52-5.961 2.41-10.182 8.238-10.182 15.04 0 .867.704 1.571 1.575 1.571.87 0 1.574-.703 1.574-1.571 0-4.507 2.296-8.488 5.781-10.844.039.016.093-.095.13-.079a13.095 13.095 0 016.33-2.243c.131-.01.781-.04.976-.042.195.001.846.033.976.042 2.28.184 4.453.962 6.33 2.243.038-.016.062.095.1.08 3.486 2.354 5.782 6.336 5.782 10.843 0 .867.703 1.571 1.574 1.571.871 0 1.575-.703 1.575-1.571 0-6.8-4.222-12.63-10.182-15.039zm-13.434-8.52c0-4.013 3.251-7.28 7.264-7.325 4.012.045 7.264 3.312 7.264 7.325 0 4.014-3.252 7.28-7.264 7.325-4.012-.044-7.264-3.31-7.264-7.325z" fill="#fff" />
                                                    <path d="M51.99 30.516c-.013-5.133-3.115-9.53-7.496-11.349 1.963-1.437 3.176-3.788 3.246-6.447.13-4.887-4.832-8.646-9.101-8.646-.2 0-.397.015-.593.03.245.54.604 1.42.863 2.178.097.303.193.606.27.918 2.88.119 5.19 2.552 5.19 5.535 0 3.059-2.427 5.547-5.41 5.547-.465 0-.915-.067-1.347-.181 1.068.8 2.054 1.704 2.934 2.704 4.574.78 8.074 4.852 8.074 9.759 0 .09.03.168.05.252a1.67 1.67 0 003.33-.193c0-.038-.008-.072-.01-.107zm-51.98 0c.013-5.133 3.115-9.53 7.496-11.349C5.543 17.73 4.33 15.379 4.26 12.72c-.13-4.887 4.832-8.646 9.101-8.646.2 0 .397.015.593.03a27.08 27.08 0 00-.863 2.178c-.097.303-.193.606-.27.918-2.88.119-5.19 2.552-5.19 5.535 0 3.059 2.427 5.547 5.41 5.547.465 0 .915-.067 1.347-.181a19.454 19.454 0 00-2.934 2.704c-4.573.78-8.074 4.852-8.074 9.759 0 .09-.03.168-.05.252A1.67 1.67 0 010 30.623c0-.038.008-.072.01-.107z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/sovet-director.svg" -->
                                            </span>
                                            <span class="card-link__text">Совет директоров</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-5th-wrap">
                                        <a href="/stockholder/trading/" class="card-link card-link--big card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/bumagi.svg" -->
                                                <svg width="46" height="37" viewBox="0 0 46 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.84 18.4h1.84a1.84 1.84 0 011.84 1.84v14.72a1.84 1.84 0 01-1.84 1.84H1.84A1.84 1.84 0 010 34.96V20.24a1.84 1.84 0 011.84-1.84zm8.28-10.12h1.84a1.84 1.84 0 011.84 1.84v24.84a1.84 1.84 0 01-1.84 1.84h-1.84a1.84 1.84 0 01-1.84-1.84V10.12a1.84 1.84 0 011.84-1.84zm17.45 4.6h7.42c1.186-.102 1.186-2.555 0-2.76h-7.42c-1.186.307-1.186 2.658 0 2.76zm16.628 1.84H18.362c-.948.278-1.518.926-1.802 1.946v18.188c0 .927.664 1.946 1.707 1.946h25.827c1.327 0 1.802-.834 1.897-1.667L46 16.667c-.285-1.02-.855-1.67-1.803-1.947zm-.96 2.744V23H19.293v-5.536h23.945zM19.293 34.033V24.84h9.312a1.365 1.365 0 00-.085.46c0 .762.618 1.38 1.38 1.38h2.76a1.38 1.38 0 001.38-1.38 1.35 1.35 0 00-.085-.46h9.283v9.192H19.293zM22.08 1.84A1.84 1.84 0 0020.24 0H18.4a1.84 1.84 0 00-1.84 1.84v10.12h5.52V1.84z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/bumagi.svg" -->
                                            </span>
                                            <span class="card-link__text">Компания на рынке ценных бумаг</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2th">
                            <div class="card-slider swiper-container js-card-slider">
                                <div class="swiper-wrapper">
<!-- важные объявления-->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/notice_stockholder.php");?>
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
                            <div class="card-contacts">
                                <p class="card-contacts__fio" style="font-size:1.2rem">Управление корпоративной работы и имущественных отношений</p>
                                <!-- <p class="card-contacts__position">Руководитель группы договорной и корпоративной работы юридического управления</p> -->
                                <p class="card-contacts__phone mb-2" style="font-size:1rem">
                                    Телефоны:<br>
                                    <a href="tel:84232411251" class="card-contacts__phone-link" style="font-size:1rem">(423) 241-12-51</a>, 
									<a href="tel:84232657366" class="card-contacts__phone-link" style="font-size:1rem">265-73-66</a>
                                </p>
								<p class="mb-0" style="font-size:1rem">E-mail:<br>
                                <a href="mailto:keg@dvec.ru" class="card-contacts__site-link" style="font-size:1rem">keg@dvec.ru</a>, 
								<a href="mailto:pvv@dvec.ru" class="card-contacts__site-link" style="font-size:1rem">pvv@dvec.ru</a></p>
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
                                    <img src="/design2019/svg/arrow-right-ico.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-mobile">
                    <div class="row">
                        <div class="col-12">
                            <a class="btn collapse-menu-btn collapsed" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
                                Акционерам и инвесторам
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
                                        <a href="/iku/" class="collapse-menu__link">
                                            Исполнителям коммунальных услуг
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
<!-- баннер -->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/br_common.php");?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-slider swiper-container js-card-slider">
                                <div class="swiper-wrapper">
<!-- важные объявления-->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/notice_stockholder.php");?>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card-contacts">
                                <p class="card-contacts__fio">Управление корпоративных событий, взаимодействия с акционерами и управления активами</p>
                                <!-- <p class="card-contacts__position">Руководитель группы договорной и корпоративной работы юридического управления</p> -->
                                <p class="card-contacts__phone">
                                    Телефоны:
                                    <a href="tel:84232411251" class="card-contacts__phone-link">(423) 241-12-51</a>, 
									<a href="tel:84232657366" class="card-contacts__phone-link">265-73-66</a>
                                </p>
                                <a href="mailto:keg@dvec.ru" class="card-contacts__site-link">keg@dvec.ru</a>, 
								<a href="mailto:pvv@dvec.ru" class="card-contacts__site-link">pvv@dvec.ru</a>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cards">
                        <a href="/stockholder/meetings/" class="card-link card-link--orange">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/sobranie-a.svg" -->
                                <svg width="46" height="36" viewBox="0 0 46 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.708 22.197a12.59 12.59 0 012.897 2.75h3.615a15.637 15.637 0 00-7.708-6.767c2.547-1.818 4.212-4.79 4.212-8.156C25.724 4.488 21.236 0 15.699 0h-.161C10 0 5.514 4.488 5.514 10.024c0 3.365 1.664 6.338 4.21 8.156C4.033 20.486 0 26.067 0 32.577a1.504 1.504 0 103.008 0c0-4.314 2.193-8.126 5.523-10.38.036.014.088-.092.125-.076a12.49 12.49 0 016.046-2.148c.125-.009.746-.04.932-.04.186 0 .807.031.932.04 2.178.176 4.254.92 6.047 2.148.034-.015.058.09.095.076zm-7.09-5.16c-3.832-.042-6.938-3.17-6.938-7.012 0-3.842 3.106-6.97 6.939-7.013 3.832.042 6.938 3.17 6.938 7.012 0 3.843-3.106 6.97-6.938 7.013zm18.492-1.97a2.749 2.749 0 00-2.717-2.382 2.76 2.76 0 00-2.755 2.763 2.76 2.76 0 002.755 2.763c.632 0 1.208-.223 1.673-.582 4.115 2.018 6.8 6.256 6.8 10.961v5.058h2.755V28.59c0-5.831-3.367-11.079-8.511-13.523z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.124 27.71h22.04A1.84 1.84 0 0146 29.552v4.606A1.84 1.84 0 0144.163 36H18.451a1.84 1.84 0 01-1.837-1.842l2.755-4.606c.66-1.18 1.741-1.842 2.755-1.842z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/sobranie-a.svg" -->
                            </span>
                            <span class="card-link__text">Собрания акционеров</span>
                        </a>
                        <a href="/stockholder/joint_stock_structure/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/upr-capitalom.svg" -->
                                <svg width="46" height="47" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M45.274 22.888c-3.43-3.94-8.17-2.094-10.23-.538l-4.067 3.27c-.007-.188-.01-.376-.03-.572l-.13-1.202H15.328c-.488-.044-2.163-.08-3.715 1.29l-6.748 6.748-.158-.154c-.457-.445-1.165-.467-1.583-.05L.293 34.522c-.417.416-.385 1.113.072 1.558l10.748 10.462c.457.444 1.165.468 1.583.05l2.832-2.842c.417-.418.385-1.116-.072-1.559l-.516-.502 1.748-1.699h12.92l.2-.014c1.6-.24 2.508-1.23 2.546-1.277l8.392-8.95L46 23.722l-.726-.833zm-6.49 5.02l-8.394 8.954a1.886 1.886 0 01-.896.437H15.62l-2.61 2.511-6.215-6.05 6.662-6.663c.748-.659 1.594-.575 1.605-.575l13.197.014c-.346 2.46-2.657 3.372-3.33 3.588h-4.29a1.346 1.346 0 000 2.69h4.485l.342-.043c1.094-.287 2.652-1.05 3.836-2.379.061-.035.122-.07.179-.116l7.212-5.802c.36-.266 3.281-2.319 5.75-.556l-3.659 3.99zM25.853 9.82h-2.246v3.184h2.247c.505 0 .902-.144 1.202-.434.3-.29.46-.676.46-1.158 0-.483-.16-.869-.46-1.158-.301-.29-.712-.435-1.203-.435z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.037 5.147c1.432-2.011 2.468-3.276 2.468-3.276-3.483.671-5.382-.897-5.382-.897-3.962-2.192-6.278 0-6.278 0l3.153 3.942c-5.792 1.572-9.571 8.252-10.545 16.687-.018.15-.026.287-.04.43a7.777 7.777 0 013.567-.893c.176 0 .328.007.452.015h16.804l1.122-.902.033-.026.032-.025c.48-.363 1.802-1.258 3.622-1.838-1.902-6.603-4.602-11.575-9.008-13.217zm.237 8.516c-.6.58-1.36.869-2.294.869h-2.39v.853h3.544c.063 0 .111.016.159.063.047.033.062.097.062.162v.917a.21.21 0 01-.062.16c-.032.049-.095.065-.159.065H23.59v1.367a.217.217 0 01-.063.161.202.202 0 01-.158.063H22.2a.21.21 0 01-.16-.063c-.047-.032-.061-.097-.061-.161v-1.367H20.41c-.061 0-.126-.017-.16-.096-.046-.033-.061-.098-.061-.162v-.917c0-.064.016-.111.062-.16.033-.05.097-.065.159-.065h1.568v-.837H20.41a.203.203 0 01-.16-.064c-.046-.031-.061-.096-.061-.162v-1.06c0-.063.016-.112.062-.16.033-.049.097-.065.159-.065h1.568V8.516c0-.065.015-.112.06-.162.032-.047.096-.063.16-.063h3.78c.935 0 1.71.29 2.295.869.585.578.886 1.335.886 2.252 0 .918-.3 1.672-.886 2.25z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/upr-capitalom.svg" -->
                            </span>
                            <span class="card-link__text">Акционерный капитал</span>
                        </a>
                        <a href="/stockholder/financial_statements/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/vnutr-doc.svg" -->
                                <svg width="39" height="42" viewBox="0 0 39 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.773 17.182c-6.854 0-12.41 5.555-12.41 12.409 0 6.854 5.556 12.41 12.41 12.41 6.853 0 12.409-5.556 12.409-12.41s-5.556-12.41-12.41-12.41zm6.797 9.543l-7.636 8.59a1.426 1.426 0 01-1.029.48h-.042c-.378 0-.743-.15-1.012-.419l-4.773-4.772a1.431 1.431 0 112.025-2.025l3.698 3.699 6.628-7.456a1.433 1.433 0 012.14 1.902z" fill="#fff" />
                                    <path d="M10.014 33.401H2.835V12h6.291c.985-.288 1.575-.961 1.87-2.019V2.848h12.865v10.639a16.39 16.39 0 011.91-.122c.322 0 .636.03.953.047l.003-11.393C26.432.96 25.841.289 24.857 0H10.523v.004c-.364.004-.779.198-1.023.443L.239 11.007c-.151.15-.203.352-.212.553H.014v.144L0 34.254c0 .962.69 2.019 1.77 2.019h9.226a16.14 16.14 0 01-.982-2.872z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.455 14.816V.954A.954.954 0 0031.5 0h-.955a.954.954 0 00-.954.955v12.88c.993.24 1.95.566 2.864.98zm5.727 4.329V.955A.954.954 0 0037.227 0h-.954a.954.954 0 00-.955.955v15.533a16.37 16.37 0 012.864 2.657z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/vnutr-doc.svg" -->
                            </span>
                            <span class="card-link__text">Финансовая отчетность</span>
                        </a>
                        <a href="/stockholder/disclosure_documents/affiliated_persons/" class="card-link card-link--big card-link--orange">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/list-affelirov-person.svg" -->
                                <svg width="39" height="33" viewBox="0 0 39 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 33c-.384 0-.768-.146-1.061-.439l-3-3A1.5 1.5 0 112.56 27.44l1.939 1.939 4.939-4.939a1.5 1.5 0 112.121 2.121l-6 6A1.487 1.487 0 014.5 33z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 28.5h22a1 1 0 011 1v1a1 1 0 01-1 1h-22a1 1 0 01-1-1v-1a1 1 0 011-1z" fill="#fff" />
                                    <path d="M4.5 21c-.384 0-.768-.146-1.061-.439l-3-3A1.5 1.5 0 112.56 15.44l1.939 1.939 4.939-4.939a1.5 1.5 0 112.121 2.121l-6 6A1.487 1.487 0 014.5 21z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 16.5h22a1 1 0 011 1v1a1 1 0 01-1 1h-22a1 1 0 01-1-1v-1a1 1 0 011-1z" fill="#fff" />
                                    <path d="M4.5 9c-.384 0-.768-.146-1.061-.439l-3-3A1.5 1.5 0 112.56 3.44l1.939 1.939L9.438.44a1.5 1.5 0 112.121 2.121l-6 6A1.487 1.487 0 014.5 9z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 4.5h22a1 1 0 011 1v1a1 1 0 01-1 1h-22a1 1 0 01-1-1v-1a1 1 0 011-1z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/list-affelirov-person.svg" -->
                            </span>
                            <span class="card-link__text">Список аффилированных лиц</span>
                        </a>
                        <a href="/stockholder/disclosure_documents/" class="card-link card-link--big">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/rask-info-ot.svg" -->
                                <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M37.706 36.738l-10.55-10.512a10.913 10.913 0 001.945-6.23c0-6.076-4.945-11.001-11.044-11.001-6.1 0-11.044 4.925-11.044 11 0 6.077 4.943 11.002 11.042 11.002 2.326 0 4.48-.72 6.26-1.941l10.551 10.51a1.006 1.006 0 001.42 0l1.42-1.414a.998.998 0 000-1.414zM14.054 23.505c0 .828-.674 1.5-1.506 1.5a1.504 1.504 0 01-1.506-1.5v-2c0-.829.675-1.501 1.506-1.501.832 0 1.507.672 1.507 1.5v2.001zm5.02 0c0 .828-.674 1.5-1.505 1.5a1.504 1.504 0 01-1.506-1.5v-5.002c0-.828.674-1.5 1.506-1.5.83 0 1.506.672 1.506 1.5v5.002zm5.02 0c0 .828-.674 1.5-1.505 1.5a1.504 1.504 0 01-1.506-1.5v-8.002c0-.829.674-1.5 1.506-1.5.831 0 1.506.671 1.506 1.5v8.002z" fill="#fff" />
                                    <path d="M26.819 37.003H3.029V3.016h26.08v1.896c.036 1.751.095 2.077 1.754 2.105h2.251v20.22l3.027 2.75V7.777l.02-2.01-.02-.205a1.064 1.064 0 00-.33-.65L30.627.347c-.174-.173-.358-.295-.585-.329L29.743 0 2.194.018C1.04.352.345 1.134 0 2.364L.012 37.99C.127 38.995.702 40 2.32 40h26.726l-2.227-2.997z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/rask-info-ot.svg" -->
                            </span>
                            <span class="card-link__text">Раскрытие информации и отчетность</span>
                        </a>
                        <a href="/company/control/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/upr-company.svg" -->
                                                <svg width="46" height="42" viewBox="0 0 46 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.048 4.8h5.885c1.08 0 1.957-.86 1.957-1.917v-.967C27.89.858 27.014 0 25.933 0h-5.885c-1.08 0-1.957.858-1.957 1.916v.967c0 1.059.877 1.916 1.957 1.916zm5.653 1.89h-5.236a.577.577 0 00-.581.572l-4.548 23.964c0 .315.236.775.582 1.142l6.584 9.429c.242.222.581.315.581 0 0 .315.34.222.583 0l6.584-9.429c.345-.368.581-.827.581-1.142L26.282 7.262a.577.577 0 00-.58-.572zM11.255 8.144c.503 0 .988-.254 1.26-.697l2.936-4.79a1.42 1.42 0 00-.503-1.973 1.487 1.487 0 00-2.014.493L10.64 4.918 2.013 1.541c-.754-.295-1.608.063-1.908.8a1.427 1.427 0 00.817 1.868l9.787 3.833c.178.069.362.102.545.102zm34.64-5.804a1.477 1.477 0 00-1.908-.8l-8.626 3.378-2.293-3.741a1.485 1.485 0 00-2.014-.493 1.42 1.42 0 00-.504 1.972l2.936 4.79c.272.444.755.698 1.26.698.181 0 .365-.033.544-.102l9.787-3.833a1.429 1.429 0 00.818-1.868z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/upr-company.svg" -->
                                            </span>
                                            <span class="card-link__text">Управление</span>
                                        </a>
                        <a href="/company/control/committee_of_directors/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/sovet-director.svg" -->
                                                <svg width="52" height="36" viewBox="0 0 52 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M32.108 18.99c2.666-1.9 4.409-5.004 4.409-8.52C36.517 4.688 31.819 0 26.023 0h-.169C20.058 0 15.36 4.688 15.36 10.47c0 3.516 1.743 6.62 4.409 8.52-5.961 2.41-10.182 8.238-10.182 15.04 0 .867.704 1.571 1.575 1.571.87 0 1.574-.703 1.574-1.571 0-4.507 2.296-8.488 5.781-10.844.039.016.093-.095.13-.079a13.095 13.095 0 016.33-2.243c.131-.01.781-.04.976-.042.195.001.846.033.976.042 2.28.184 4.453.962 6.33 2.243.038-.016.062.095.1.08 3.486 2.354 5.782 6.336 5.782 10.843 0 .867.703 1.571 1.574 1.571.871 0 1.575-.703 1.575-1.571 0-6.8-4.222-12.63-10.182-15.039zm-13.434-8.52c0-4.013 3.251-7.28 7.264-7.325 4.012.045 7.264 3.312 7.264 7.325 0 4.014-3.252 7.28-7.264 7.325-4.012-.044-7.264-3.31-7.264-7.325z" fill="#fff" />
                                                    <path d="M51.99 30.516c-.013-5.133-3.115-9.53-7.496-11.349 1.963-1.437 3.176-3.788 3.246-6.447.13-4.887-4.832-8.646-9.101-8.646-.2 0-.397.015-.593.03.245.54.604 1.42.863 2.178.097.303.193.606.27.918 2.88.119 5.19 2.552 5.19 5.535 0 3.059-2.427 5.547-5.41 5.547-.465 0-.915-.067-1.347-.181 1.068.8 2.054 1.704 2.934 2.704 4.574.78 8.074 4.852 8.074 9.759 0 .09.03.168.05.252a1.67 1.67 0 003.33-.193c0-.038-.008-.072-.01-.107zm-51.98 0c.013-5.133 3.115-9.53 7.496-11.349C5.543 17.73 4.33 15.379 4.26 12.72c-.13-4.887 4.832-8.646 9.101-8.646.2 0 .397.015.593.03a27.08 27.08 0 00-.863 2.178c-.097.303-.193.606-.27.918-2.88.119-5.19 2.552-5.19 5.535 0 3.059 2.427 5.547 5.41 5.547.465 0 .915-.067 1.347-.181a19.454 19.454 0 00-2.934 2.704c-4.573.78-8.074 4.852-8.074 9.759 0 .09-.03.168-.05.252A1.67 1.67 0 010 30.623c0-.038.008-.072.01-.107z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/sovet-director.svg" -->
                                            </span>
                                            <span class="card-link__text">Совет директоров</span>
                                        </a>
                        <a href="/stockholder/trading/" class="card-link card-link--big card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/bumagi.svg" -->
                                                <svg width="46" height="37" viewBox="0 0 46 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.84 18.4h1.84a1.84 1.84 0 011.84 1.84v14.72a1.84 1.84 0 01-1.84 1.84H1.84A1.84 1.84 0 010 34.96V20.24a1.84 1.84 0 011.84-1.84zm8.28-10.12h1.84a1.84 1.84 0 011.84 1.84v24.84a1.84 1.84 0 01-1.84 1.84h-1.84a1.84 1.84 0 01-1.84-1.84V10.12a1.84 1.84 0 011.84-1.84zm17.45 4.6h7.42c1.186-.102 1.186-2.555 0-2.76h-7.42c-1.186.307-1.186 2.658 0 2.76zm16.628 1.84H18.362c-.948.278-1.518.926-1.802 1.946v18.188c0 .927.664 1.946 1.707 1.946h25.827c1.327 0 1.802-.834 1.897-1.667L46 16.667c-.285-1.02-.855-1.67-1.803-1.947zm-.96 2.744V23H19.293v-5.536h23.945zM19.293 34.033V24.84h9.312a1.365 1.365 0 00-.085.46c0 .762.618 1.38 1.38 1.38h2.76a1.38 1.38 0 001.38-1.38 1.35 1.35 0 00-.085-.46h9.283v9.192H19.293zM22.08 1.84A1.84 1.84 0 0020.24 0H18.4a1.84 1.84 0 00-1.84 1.84v10.12h5.52V1.84z" fill="#fff" />
                                                </svg>
                                                <!-- /"source/partials/svg/bumagi.svg" -->
                                            </span>
                                            <span class="card-link__text">Компания на рынке ценных бумаг</span>
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