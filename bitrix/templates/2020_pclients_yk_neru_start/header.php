<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge">
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>

    <meta name="description" content="ДЭК – Частным клиентам (Нерюнгринский район РС(Я), Амурэнергосбыт)">
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
	<script src="/design2019/js/dvec_head.js?33"></script>
	<script src="/design2019/js/dvec.js?20220601"></script>
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
    <meta property="og:description" content="Дальневосточная энергетическая компания, филиал Амурэнергосбыт - Нерюнгри, частным клиентам">
    <meta property="og:image" content="/images/design2016/header_lvl3_logo_2019_dek_yes.png">
    <meta property="og:site_name" content="Дальневосточная энергетическая компания - Нерюнгринский район РС(Я) - частным клиентам">

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
  <div id="sticky_region_warning" data-region="nerungri" class="sticky-top hide_mobile hidden">
    <div class="alert alert-warning mb-0 pt-3 pb-3 text-center">
      Вы просматриваете сайт для региона: Нерюнгринский район РС(Я).
      <button id="sticky_region_warning_ok" class="btn btn-outline-secondary btn-sm ml-2" style="border-width: 1px;"><b>Понятно</b></button>
      <button id="sticky_region_warning_change" class="btn btn-outline-primary btn-sm ml-2" style="border-width: 1px;"><b>Сменить регион</b></button>
    </div>
  </div>
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
                            <a href="/nerungri/private_clients/priemnaya/" class="header-fixed-nav__link header-fixed-nav__link--svg-left align-top">
								<svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.7557 0.5H1.24168C1.22068 0.5 1.19969 0.501006 1.17969 0.503006L1.87669 0.966995C1.91769 0.982995 1.95768 1.003 1.99568 1.028L8.49869 5.362L15.0017 1.028L15.7907 0.501999C15.7797 0.500999 15.7677 0.5 15.7557 0.5Z" fill="currentColor"/>
<path d="M13.15 4.53769L8.832 7.41469C8.732 7.48169 8.616 7.51669 8.5 7.51669C8.384 7.51669 8.268 7.48269 8.168 7.41469L6.776 6.4877C6.734 6.4717 6.693 6.45169 6.655 6.42569L0.5 2.32269V11.7637C0.5 12.1697 0.832996 12.4977 1.243 12.4977H15.757C16.167 12.4977 16.499 12.1697 16.499 11.7637V2.30469L13.15 4.53769Z" fill="currentColor"/>
</svg>
                                Интернет-приёмная
                            </a>
                            <div class="dropdown hide_mobile">
                                <div class="header-city-hdr header-fixed-nav__link header-fixed-nav__link--svg-left" id="dropdown-city" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.033 0a6.526 6.526 0 00-6.52 6.519c0 4.46 5.834 11.01 6.083 11.286.233.26.64.26.873 0 .249-.276 6.083-6.825 6.083-11.286A6.526 6.526 0 009.032 0zm0 9.799a3.284 3.284 0 01-3.28-3.28 3.284 3.284 0 013.28-3.28 3.284 3.284 0 013.28 3.28 3.283 3.283 0 01-3.28 3.28z" fill="currentColor"/>
</svg>
                                    Регион: Нерюнгринский район РС(Я)
                                </div>
                                <div class="header-cities dropdown-menu" aria-labelledby="dropdown-city">
                                    <p class="dropdown-item">
										<a onclick="RegionChange('amursbyt');return false;" href="/private_clients/" class="header-city-link">
											Амурская область
										</a>
                                    </p>
									<p class="dropdown-item">
										<a onclick="RegionChange('nerungri');return false;" href="/private_clients/" class="header-city-link">
											Нерюнгринский район РС(Я)
										</a>
                                    </p>
									<p class="dropdown-item">
										<a onclick="RegionChange('yakutiya');return false;" href="/private_clients/" class="header-city-link">
											Республика Саха (Якутия)
										</a>
                                    </p>
                                    <p class="dropdown-item">
										<a onclick="RegionChange('eaosbyt');return false;" href="/private_clients/" class="header-city-link">
											Еврейская АО
										</a>
                                    </p>
									<p class="dropdown-item">
										<a onclick="RegionChange('khabsbyt');return false;" href="/private_clients/" class="header-city-link">
											Хабаровский край
										</a>
                                    </p>
									<p class="dropdown-item">
										<a onclick="RegionChange('dalsbyt');return false;" href="/private_clients/" class="header-city-link">
											Приморский край
										</a>
                                    </p>
									<p class="dropdown-item">
										<a onclick="RegionChange('sakhalin');return false;" href="/private_clients/" class="header-city-link">
											Сахалинская область
										</a>
                                    </p>
									<p class="dropdown-item">
										<a onclick="RegionChange('kamchatka');return false;" href="/private_clients/" class="header-city-link">
											Камчатский край
										</a>
                                    </p>
                                </div>
                            </div>
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
                                        <form action="/nerungri/search" method="get" id="topSearchForm">
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
                                        <a href="/nerungri/">
                                            <span class="logo-big">
												<img class="logo-dek" src="/images/design2016/header_lvl3_logo_2019_dek_yes.png">
                                            </span>
                                            <span class="logo-mobile">
												<img class="logo-dek" src="/images/design2016/header_lvl3_logo_2019_dek_yes.png">
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
                                                    <a href="tel:84114776030" class="header-b__phones-phone-link">
                                                        <span class="header-b__phones-phone-link-department">
														пгт Чульман:</span>
                                                        8 (41147) 7-60-30
                                                    </a>
                                                </p>
												<p class="dropdown-item">
                                                    <a href="tel:84114773529" class="header-b__phones-phone-link">
                                                        <span class="header-b__phones-phone-link-department">
														пгт Беркакит:</span>
                                                        8 (41147) 7-35-29
                                                    </a>
                                                </p>
												<p class="dropdown-item">
                                                    <a href="tel:84114778517" class="header-b__phones-phone-link">
                                                        <span class="header-b__phones-phone-link-department">
														пгт Серебряный бор:</span>
                                                        8 (41147) 7-85-17
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
										<a href="/nerungri/private_clients/contact-center/" class="btn btn-outline-primary btn-sm" style="margin-top: 9px; border-width:1px">Единый контактный центр</a>
                                        <!-- <a onclick="return false" href="/PleaseEnableJavascript.html" class="header-b__phones-call">
                                            Заказать обратный звонок
                                        </a> -->
										<!-- <div>Текущее время: <span id="time_in_office"></span>
										</div> -->
                                    </div>
                                    <a href="/nerungri/private_clients/service/" class="header-b__card">
											<img src="/design2019/svg/ico-hdr-card-1.svg" width="44" height="30" style="float:left">
                                            <p class="header-b__card-text">Отделения и участки</p>
                                        </a>
                                    <a href="/nerungri/private_clients/online/" class="header-b__card">
											<img src="/design2019/svg/ico-hdr-card-2.svg" width="44" height="25" style="float:left">
                                            <p class="header-b__card-text">Услуги онлайн</p>
                                    </a>
                                    <a href="/nerungri/private_clients/cabinet/" class="header-b__card">
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
						<a href="/nerungri/private_clients" class="header-nav__item is-active">Частным клиентам</a>
						<a href="/organisations" class="header-nav__item">Корпоративным клиентам</a>
						<a href="/iku" class="header-nav__item">Исполнителям коммунальных&nbsp;услуг</a>
						<a href="/stockholder" class="header-nav__item">Акционерам и&nbsp;инвесторам</a>
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
                    <div class="row mb-4">
                        <div class="col-lg-3th">
                            <div class="row row-5th">
                                <div class="col-8">
                                    <div>
<!-- баннер -->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/br_pclients_yk_neru.php");?>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
										<a href="/nerungri/private_clients/service/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/new-client.svg">
                                            </span>
                                            <span class="card-link__text">Запись в&nbsp;офис</span>
                                        </a>
                                        <a href="/nerungri/private_clients/pokazaniya" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/pass-testimony.svg">
                                            </span>
                                            <span class="card-link__text">Передать показания</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/contractual_relations/debts_repayment/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/dont-pay.svg">
                                            </span>
                                            <span class="card-link__text">Не платите?</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/payment/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/variant-payment.svg">
                                            </span>
                                            <span class="card-link__text">Способы оплаты</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/dps/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/products.svg">
                                            </span>
                                            <span class="card-link__text">Платные услуги</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/electricity_meters/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/material.svg">
                                            </span>
                                            <span class="card-link__text">Приборы учета</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/tariffs/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/normativ.svg">
                                            </span>
                                            <span class="card-link__text">Тарифы, нормативы</span>
                                        </a>
                                    </div>
                                </div>
								<div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/contractual_relations/order_charges/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/polezno-znat.svg">
                                            </span>
                                            <span class="card-link__text">Порядок начислений</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-5th">
                                <div class="col-8">
                                    <div class="card-5th-wrap">
										<a href="/nerungri/private_clients/priemnaya/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/consult.svg">
                                            </span>
                                            <span class="card-link__text">Интернет-приёмная</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/receipts/gid.php" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/one-receipt.svg">
                                            </span>
                                            <span class="card-link__text">Платежный документ</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2th">
                            <div class="card-slider swiper-container js-card-slider">
                                <div class="swiper-wrapper">
<!-- важные объявления-->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/notice_pclients_yk_neru.php");?>
								</div>
                                <div class="card-slider__controls">
                                    <div class="card-slider__nav">
                                        <div class="card-slider__btn--prev">
                                            <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn" title="card-slider-nav-left">
                                                <!-- "source/partials/svg/slide-nav-left.svg" -->
                                                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 17L1 9.136 9 1" />
                                                </svg>
                                                <!-- /"source/partials/svg/slide-nav-left.svg" -->
                                            </a>
                                        </div>
                                        <div class="card-slider__btn--next">
                                            <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn" title="card-slider-nav-right">
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
                                <div class="col-6">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/cabinet/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/service-order.svg">
                                            </span>
                                            <span class="card-link__text">Личный кабинет</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card-5th-wrap">
                                        <a href="/nerungri/private_clients/receipts/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <img src="/design2019/svg/svg-card/email-receipt.svg">
                                            </span>
                                            <span class="card-link__text">Электронная квитанция</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

							<div class="row">
                                <div class="col-12">
                                    <div class="card-5th-wrap pb-0">
                                        <a href="/nerungri/private_clients/receipts/" class="card-link" style="background-image: url('/design2019/img/upload/elkvit_sch_6.png'); background-position:right top">
<div class="d-flex flex-sm-row align-items-center justify-content-between text-white pt-1">
  <div class="text-center">
    <div style="background-color:#f96722e6;border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);" class="pt-1 pb-2 pl-3 pr-3 text-center">
      <span id="kvitanciy" style="font-size:2.5rem; font-weight:bold;line-height: 1.4;"><? echo htmlspecialchars(file_get_contents($_SERVER["DOCUMENT_ROOT"]."/srv/elkvit/"."45.txt")); ?></span>
      <br>
      <span id="jitel">жителей</span><br><span>Нерюнгринского&nbsp;района</span>
    </div>
    <div class="mt-2">
      отказались<br>от бумажных квитанций
    </div>
  </div>
  <div class="text-center">
    <div style="background-color:#f96722e6;border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);" class="pt-1 pb-2 pl-3 pr-3 text-center">
      <span id="dereviev" style="font-size:2.5rem; font-weight:bold;line-height: 1.4;">16</span>
      <br>
      <span id="derevo">деревьев</span><br><span>в&nbsp;год</span>
    </div>
    <div class="mt-2">
они спасают<br>от вырубки
    </div>
  </div>
</div>
</a>
                                    </div>
                                </div>
                            </div>
							
                            <div class="card-news">
                                <h5 class="card-news__title">Новости компании</h5>
<?$arrFilter = Array(
"SECTION_ID" => Array(564,190),
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
		"DETAIL_URL" => "/nerungri/private_clients/news/news.php?ID=#ELEMENT_ID#",
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
		"NEWS_COUNT" => "3",
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
		"SEARCH_PAGE" => "/nerungri/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>

                                <a href="/nerungri/private_clients/news/" class="card-news__all">
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
                    <!-- регион (мобильное) -->
					<div class="row">
                        <div class="col-12">
                            <a class="btn collapse-menu-btn collapsed" data-toggle="collapse" href="#collapseMenuRegion" role="button" aria-expanded="false" aria-controls="collapseMenuRegion">
                                Регион: Нерюнгринский район
                                <!-- "source/partials/svg/menu-arrow.svg" -->
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 13l7.864-8L17 13" />
                                </svg>
                                <!-- /"source/partials/svg/menu-arrow.svg" -->
                            </a>
                            <div class="collapse-menu-wrap">
                                <div class="collapse collapse-menu" id="collapseMenuRegion">
                                    <div class="collapse-menu__card">
                                        <a onclick="RegionChange('amursbyt');return false;" href="/private_clients/" class="collapse-menu__link">
                                            Амурская область
                                        </a>
                                    </div>
									<div class="collapse-menu__card">
                                        <a onclick="RegionChange('nerungri');return false;" href="/private_clients/" class="collapse-menu__link">
                                            Нерюнгринский район РС(Я)
                                        </a>
                                    </div>
									<div class="collapse-menu__card">
                                        <a onclick="RegionChange('yakutiya');return false;" href="/private_clients/" class="collapse-menu__link">
                                            Республика Саха (Якутия)
                                        </a>
                                    </div>
									<div class="collapse-menu__card">
                                        <a onclick="RegionChange('eaosbyt');return false;" href="/private_clients/" class="collapse-menu__link">
                                            Еврейская АО
                                        </a>
                                    </div>
									<div class="collapse-menu__card">
                                        <a onclick="RegionChange('khabsbyt');return false;" href="/private_clients/" class="collapse-menu__link">
                                            Хабаровский край
                                        </a>
                                    </div>
									<div class="collapse-menu__card">
                                        <a onclick="RegionChange('dalsbyt');return false;" href="/private_clients/" class="collapse-menu__link">
                                            Приморский край
                                        </a>
                                    </div>
									<div class="collapse-menu__card">
                                        <a onclick="RegionChange('sakhalin');return false;" href="/private_clients/" class="collapse-menu__link">
                                            Сахалинская область
                                        </a>
                                    </div>
									<div class="collapse-menu__card">
                                        <a onclick="RegionChange('kamchatka');return false;" href="/private_clients/" class="collapse-menu__link">
                                            Камчатский край
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- конец выбора региона -->
                    <div class="row">
                        <div class="col-12">
<!-- баннер -->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/br_pclients_yk_neru.php");?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-slider swiper-container js-card-slider">
                                <div class="swiper-wrapper">
<!-- важные объявления-->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/notice_pclients_yk_neru.php");?>
								</div>
                                <div class="card-slider__controls">
                                    <div class="card-slider__nav">
                                        <div class="card-slider__btn--prev">
                                            <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn" title="card-slider-nav-left">
                                                <!-- "source/partials/svg/slide-nav-left.svg" -->
                                                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 17L1 9.136 9 1" />
                                                </svg>
                                                <!-- /"source/partials/svg/slide-nav-left.svg" -->
                                            </a>
                                        </div>
                                        <div class="card-slider__btn--next">
                                            <a honclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn" title="card-slider-nav-right">
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
                    <div class="row row-cards">
                        <a href="/nerungri/private_clients/service/" class="card-link card-link--orange">
                            <span class="card-link__ico-wrap">
                                                <!-- "source/partials/svg/new-client.svg" -->
                                                <svg width="38" height="45" viewBox="0 0 38 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 24.5c-5.523 0-10 4.477-10 10s4.477 10 10 10 10-4.477 10-10-4.477-10-10-10zm5 11h-4v4a1 1 0 11-2 0v-4h-4a1 1 0 110-2h4v-4a1 1 0 112 0v4h4a1 1 0 110 2z" fill="#fff" />
                                                    <path d="M26.033 21.628a15.47 15.47 0 00-4.727-2.997c2.535-1.813 4.193-4.775 4.193-8.131 0-5.523-4.477-10-10-10s-10 4.477-10 10c0 3.358 1.661 6.323 4.201 8.137C4.021 20.938 0 26.504 0 33a1.5 1.5 0 103 0c0-6.893 5.607-12.5 12.5-12.5 2.537 0 4.976.773 7.039 2.185a12.709 12.709 0 013.591-.922c-.036-.043-.055-.096-.097-.135zM15.5 17.5c-3.86 0-7-3.14-7-7s3.14-7 7-7c3.859 0 7 3.14 7 7s-3.141 7-7 7z" fill="#fff" />
                                                </svg>
                                            </span>
                            <span class="card-link__text">Запись в&nbsp;офис</span>
                        </a>
                        <a href="/nerungri/private_clients/pokazaniya" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <svg width="58" height="24" viewBox="0 0 58 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36 0H22a2 2 0 00-2 2v20a2 2 0 002 2h14a2 2 0 002-2V2a2 2 0 00-2-2zm0 22H22V2h14v20zM16 0H2a2 2 0 00-2 2v20a2 2 0 002 2h14a2 2 0 002-2V2a2 2 0 00-2-2zm0 22H2V2h14v20z" fill="#fff" />
                                    <path d="M26.844 17.668h1.984L33.32 7.543v-1.28h-7.898v1.616h5.937l-4.515 9.79zm-14.812-.779c.776-.596 1.164-1.443 1.164-2.543 0-.755-.229-1.359-.688-1.816-.458-.454-1.146-.739-2.062-.854v-.062c.766-.166 1.36-.49 1.781-.973.422-.481.633-1.084.633-1.81 0-.87-.323-1.552-.969-2.047-.646-.495-1.544-.742-2.695-.742-1.385 0-2.602.385-3.648 1.156l.898 1.281c.547-.354 1.021-.592 1.422-.715a4.273 4.273 0 011.25-.184c.62 0 1.088.133 1.406.398.318.265.477.643.477 1.133 0 1.26-.91 1.891-2.734 1.891H7.26v1.492h.992c1.037 0 1.797.145 2.281.43.484.287.727.734.727 1.344 0 .688-.219 1.195-.656 1.523-.437.328-1.099.492-1.984.492a6.63 6.63 0 01-1.562-.195 7.212 7.212 0 01-1.539-.555v1.633c.87.412 1.938.617 3.203.617 1.431 0 2.535-.299 3.311-.894zM56 0H42a2 2 0 00-2 2v20a2 2 0 002 2h14a2 2 0 002-2V2a2 2 0 00-2-2zm-3.98 20.547c-.762.686-1.848 1.027-3.254 1.027-1.275 0-2.277-.205-3.008-.617v-1.664c.422.24.906.426 1.453.555a6.562 6.562 0 001.523.195c.828 0 1.459-.184 1.891-.555.434-.369.648-.91.648-1.625 0-1.363-.869-2.047-2.609-2.047-.244 0-.547.025-.906.074-.359.051-.674.105-.945.168l-.82-.484.438-5.578h5.938v1.633h-4.32l-.258 2.828.668-.109c.264-.041.586-.062.965-.062 1.152 0 2.062.305 2.734.914.672.609 1.008 1.441 1.008 2.492-.002 1.218-.383 2.171-1.146 2.855zm.312-15.043c-.637.964-1.613 1.445-2.926 1.445-1.27 0-2.234-.497-2.891-1.492-.545-.826-.851-1.992-.942-3.458h1.843c.054 1.08.202 1.893.455 2.418.32.667.832 1 1.535 1s1.219-.338 1.543-1.016c.256-.532.408-1.339.462-2.403h1.839c-.088 1.519-.385 2.702-.918 3.506z" fill="#fff" />
                                </svg>
                                            </span>
                                            <span class="card-link__text">Передать показания</span>
                        </a>
							
							
                        <a href="/nerungri/private_clients/cabinet/" class="card-link">
                                            <span class="card-link__ico-wrap">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.84 11.402c-1.452 0-2.63 1.191-2.63 2.66v15.954l-1.758-1.53s-1.623-1.13-3.572-1.13c-1.048 0-2.19.327-3.223 1.33l8.552 9.309s1.683 1.997 5.779 1.997l.142-.001s.1.009.278.009c1.603 0 9.618-.636 9.592-13.305l-10.524-5.32v-7.312c-.002-1.47-1.182-2.66-2.636-2.66z" fill="#fff" />
                                    <path d="M16.848 36.593a.985.985 0 01-.78.396H12.05a1.001 1.001 0 01-1.004-1c0-.552.449-1 1.004-1h3.317l-1.854-2.007H2.984v-30h22.12v4.14h3.013l.002-5.007C27.809 1.007 27.187.302 26.152 0H1.967C.932.302.31 1.007 0 2.114v34.76c0 1.008.726 2.114 1.863 2.114h17.199l-2.214-2.395z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.164 10.247c0 .552-.475 1-1.06 1h-7.92c-.586 0-1.062-.448-1.062-1s.475-1 1.061-1h7.92c.586 0 1.061.448 1.061 1zm0 5.999c0 .552-.475 1-1.06 1h-7.92c-.586 0-1.062-.448-1.062-1s.475-1 1.061-1h7.92c.586 0 1.061.448 1.061 1zm0 5.998c0 .553-.475 1-1.06 1h-7.92c-.586 0-1.062-.447-1.062-1 0-.553.475-1 1.061-1h7.92c.586 0 1.061.447 1.061 1z" fill="#fff" />
                                </svg>
                                            </span>
                                            <span class="card-link__text">Личный кабинет</span>
                        </a>
                        <a href="/nerungri/private_clients/receipts/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <svg width="44" height="34" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 24.906V2.5H40v-.385C39.691 1.007 39.072.302 38.041 0H1.959C.928.302.309 1.007 0 2.115v23.77C0 26.893.722 28 1.855 28h36.073c1.443 0 1.959-.906 2.062-1.812l.001-1.281H2.5v-.001z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 16h5a1 1 0 110 2h-5a1 1 0 110-2zm-4-5h9c0 .5.5.5 1 1a1 1 0 01-1 1h-9a1 1 0 010-2zm30-5H23a1 1 0 00-1 1v-.102l9.469 6.508c1.102.859 1.936.857 3.031 0l9.5-6.59V7a1 1 0 00-1-1z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M42 12.092V19H24v-6.855L22 11v9a1 1 0 001 1h20a1 1 0 001-1v-9.463l-2 1.555z" fill="#fff" />
                                    <path d="M11.967 34c-1.29-.111-1.29-2.666 0-3h16.066c1.289.223 1.289 2.889 0 3H11.967z" fill="#fff" />
                                </svg>
                                            </span>
                                            <span class="card-link__text">Электронная квитанция</span>
                        </a>


						<a href="/nerungri/private_clients/priemnaya/" class="card-link card-link--orange">
                                            <span class="card-link__ico-wrap">
                                                <svg width="46" height="38" viewBox="0 0 46 38" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M44 0H18C16.896 0 16 0.896 16 2V8H19V3H43V19H31V22H34L40 28V22H44C45.104 22 46 21.104 46 20V2C46 0.896 45.104 0 44 0Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M26 11H2C0.896 11 0 11.896 0 13V30C0 31.104 0.896 32 2 32H7V38L13 32H26C27.104 32 28 31.104 28 30V13C28 11.896 27.104 11 26 11ZM7 24C5.896 24 5 23.104 5 22C5 20.896 5.896 20 7 20C8.104 20 9 20.896 9 22C9 23.104 8.104 24 7 24ZM14 24C12.896 24 12 23.104 12 22C12 20.896 12.896 20 14 20C15.104 20 16 20.896 16 22C16 23.104 15.104 24 14 24ZM21 24C19.896 24 19 23.104 19 22C19 20.896 19.896 20 21 20C22.104 20 23 20.896 23 22C23 23.104 22.104 24 21 24Z" fill="white"/>
</svg>
                                            </span>
                                            <span class="card-link__text">Интернет-приёмная</span>
                        </a>
                        <a href="/nerungri/private_clients/dps/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <!-- "source/partials/svg/products.svg" -->
                                <svg width="51" height="42" viewBox="0 0 51 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M43.83 13.816l7.012-3.869L32.052 0l-6.63 3.66L18.788 0 0 9.947l7.012 3.869L0 17.684l7.737 4.096v10.273L25.42 42l17.684-9.947V21.78l7.737-4.096-7.012-3.868zM32.075 2.512l14.118 7.475-4.65 2.566-13.834-7.631 4.366-2.41zm9.467 12.567l4.651 2.565-14.118 7.475-4.365-2.408 13.832-7.632zM4.65 9.987l14.118-7.475 4.365 2.409L9.3 12.552 4.65 9.987zm4.65 5.092l13.834 7.632-4.364 2.408-14.12-7.475L9.3 15.08zm31.596 16.006L25.42 39.79V23.972l6.632 3.66 8.842-4.681v8.134z" fill="#fff" />
                                </svg>
                                <!-- /"source/partials/svg/products.svg" -->
                            </span>
                            <span class="card-link__text">Платные услуги</span>
                        </a>


						<a href="/nerungri/private_clients/receipts/" class="card-link card-link--big px-3" style="margin: 0 8px 20px; height: 166px; background-image: url('/design2019/img/upload/elkvit_sch_6.png'); background-position:right center">
<div class="d-flex flex-sm-row align-items-center justify-content-between text-white pt-1">
  <div class="text-center">
    <div style="background-color:#f96722e6;border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);" class="pt-1 pb-2 pl-2 pr-2 text-center">
      <span id="kvitanciy_m" style="font-size:2rem; font-weight:bold;line-height: 1.4;"><? echo htmlspecialchars(file_get_contents($_SERVER["DOCUMENT_ROOT"]."/srv/elkvit/"."45.txt")); ?></span>
      <br>
		<span style="font-size:0.75rem"><span id="jitel_m">жителей</span> Нерюнгринского&nbsp;р-на</span>
    </div>
    <div class="mt-2">
      уже отказались<br>от бумажных квитанций
    </div>
  </div>
  <div class="text-center">
    <div style="background-color:#f96722e6;border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);" class="pt-1 pb-2 pl-2 pr-2 text-center">
      <span id="dereviev_m" style="font-size:2rem; font-weight:bold;line-height: 1.4;">16</span>
      <br>
      <span id="derevo_m">деревьев</span> <span>в год</span>
    </div>
    <div class="mt-2">
они спасают<br>от вырубки
    </div>
  </div>
</div>
</a>


						<a href="/nerungri/private_clients/receipts/gid.php" class="card-link">
                            <span class="card-link__ico-wrap">
                                <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M42.4453 28.062C42.3843 27.939 42.2593 27.859 42.1173 27.859H36.1033L40.3243 21.037C40.3923 20.93 40.3983 20.792 40.3363 20.682C40.2723 20.569 40.1493 20.5 40.0183 20.5H33.0183C32.8823 20.5 32.7563 20.575 32.6943 20.694L28.5083 31.193C28.4513 31.302 28.4583 31.43 28.5243 31.533C28.5903 31.637 28.7063 31.7 28.8333 31.7H32.5433L29.6233 41.014C29.5543 41.174 29.6153 41.356 29.7673 41.449C29.8283 41.483 29.8923 41.5 29.9563 41.5C30.0593 41.5 30.1613 41.456 30.2313 41.375L42.3933 28.437C42.4833 28.331 42.5023 28.186 42.4453 28.062Z" fill="white"/>
<path d="M9.1629 2.12509C8.9039 1.74709 8.38791 1.49609 7.99991 1.49609C7.61191 1.49609 7.0949 1.74709 6.83591 2.12509C5.80291 3.76009 0.503906 11.6851 0.503906 15.2081C0.503906 19.2331 3.86391 22.5041 7.99891 22.5041C12.1339 22.5041 15.4939 19.2331 15.4939 15.2081C15.4949 11.6861 10.1969 3.63509 9.1629 2.12509ZM8.77491 6.52809C6.70691 9.29509 5.41491 13.8241 5.15591 15.0821C4.76791 16.3401 2.95891 15.7121 3.21791 14.5791C3.60591 11.5601 5.02691 8.66709 6.96591 5.89909C7.35391 5.01809 9.16291 5.14409 8.77491 6.52809Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.31407 25.691C2.96207 25.144 1.74407 24.343 0.726074 23.345C2.11007 33.04 10.4231 40.5 20.5001 40.5C22.3601 40.5 24.1531 40.227 25.8611 39.752L26.9421 36.229C24.9541 37.043 22.7811 37.5 20.5001 37.5C12.9231 37.5 6.50907 32.54 4.31407 25.691Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5001 0.5C18.0631 0.5 15.7391 0.957999 13.5791 1.755C14.0771 2.59 14.5881 3.475 15.0971 4.391C16.7961 3.821 18.6091 3.499 20.5001 3.499C28.5091 3.499 35.2051 9.044 37.0071 16.499H40.0991C38.2451 7.371 30.1761 0.5 20.5001 0.5Z" fill="white"/>
</svg>
                            </span>
                            <span class="card-link__text">Платёжный документ</span>
                        </a>
                        <a href="/nerungri/private_clients/payment/" class="card-link card-link--orange">
                            <span class="card-link__ico-wrap">
                                <svg width="45" height="39" viewBox="0 0 45 39" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 26.5C16.5 22.449 18.018 18.76 20.5 15.941V3.483H24.498V12.659C25.442 12.112 26.443 11.656 27.497 11.309L27.5 2.615C27.191 1.507 26.572 0.802 25.541 0.5H2.459C1.428 0.802 0.809 1.507 0.5 2.615V36.385C0.5 37.393 1.222 38.5 2.355 38.5H21.941C18.612 35.568 16.5 31.285 16.5 26.5ZM13.5 35.492H3.471V3.483H13.5V35.492Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M32.5 14.5C25.873 14.5 20.5 19.873 20.5 26.5C20.5 33.127 25.873 38.5 32.5 38.5C39.127 38.5 44.5 33.127 44.5 26.5C44.5 19.873 39.127 14.5 32.5 14.5ZM37.314 27.372C36.511 28.125 35.495 28.5 34.246 28.5H31.488V29.482H35.229C35.313 29.482 35.378 29.503 35.441 29.565C35.503 29.607 35.524 29.692 35.524 29.774V31.216C35.524 31.298 35.503 31.361 35.441 31.424C35.398 31.486 35.313 31.507 35.229 31.507H31.488V33.158C31.488 33.241 31.465 33.304 31.403 33.366C31.34 33.428 31.276 33.449 31.191 33.449H29.814C29.73 33.449 29.664 33.428 29.601 33.366C29.539 33.325 29.517 33.241 29.517 33.158V31.507H27.795C27.712 31.507 27.627 31.486 27.582 31.382C27.52 31.339 27.499 31.255 27.499 31.172V29.793C27.499 29.708 27.52 29.647 27.582 29.584C27.627 29.522 27.712 29.501 27.795 29.501H29.517V28.478H27.795C27.712 28.478 27.646 28.458 27.582 28.394C27.52 28.353 27.499 28.269 27.499 28.184V26.806C27.499 26.723 27.52 26.661 27.581 26.597C27.626 26.534 27.711 26.513 27.794 26.513H29.517V20.808C29.517 20.724 29.538 20.662 29.599 20.599C29.642 20.538 29.728 20.516 29.812 20.516H34.246C35.495 20.516 36.532 20.83 37.314 21.583C38.097 22.334 38.5 23.253 38.5 24.445C38.5 25.637 38.098 26.619 37.314 27.372Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M34.0768 22.502H31.5078V26.515H34.0768C34.7528 26.515 35.2828 26.327 35.6828 25.952C36.0848 25.575 36.2968 25.073 36.2968 24.446C36.2968 23.819 36.0848 23.381 35.6828 23.006C35.2828 22.628 34.7318 22.502 34.0768 22.502Z" fill="white"/>
</svg>
                            </span>
                            <span class="card-link__text">Способы оплаты</span>
                        </a>


						<a href="/nerungri/private_clients/electricity_meters/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <svg width="44" height="49" viewBox="0 0 44 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.977 25.401a.259.259 0 00-.234-.144H23.45l3.012-4.873a.243.243 0 00.008-.254.26.26 0 00-.226-.13h-4.997a.26.26 0 00-.231.139l-2.989 7.5a.24.24 0 00.012.242.26.26 0 00.22.119h2.648l-2.084 6.653a.248.248 0 00.103.31.273.273 0 00.134.037.26.26 0 00.197-.09l8.682-9.241a.248.248 0 00.038-.268z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M30.5 11h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5zm-6 0h1a1.5 1.5 0 011.5 1.5v2a1.5 1.5 0 01-1.5 1.5h-1a1.5 1.5 0 01-1.5-1.5v-2a1.5 1.5 0 011.5-1.5z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C9.85 0 0 9.85 0 22s9.85 22 22 22 22-9.85 22-22S34.15 0 22 0zm0 41C11.507 41 3 32.493 3 22S11.507 3 22 3s19 8.507 19 19-8.507 19-19 19zm-8.25 6h16.5c.415 0 .75.298.75.667v.666c0 .369-.335.667-.75.667h-16.5c-.415 0-.75-.298-.75-.667v-.666c0-.369.335-.667.75-.667z" fill="#fff" />
                                </svg>
                            </span>
                            <span class="card-link__text">Приборы учёта</span>
                        </a>
                        <a href="/nerungri/private_clients/tariffs/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <svg width="43" height="41" viewBox="0 0 43 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.08 15.422V2.278c0-.982-.784-1.778-1.748-1.778H2.358C1.394.5.611 1.296.611 2.278v36.444c0 .982.784 1.778 1.748 1.778h27.973c.965 0 1.748-.796 1.748-1.778v-7.81a9.454 9.454 0 01-4.37 1.543l-1.707.1-3.523-.944-1.19-2.222-1.04-1.333c-.114-.11-1.094-.232-1.203-.346v1.202h-5.268v-5.3h4.696c-.238-.85.86-2.741-.055-2.741-.146 0-2.074.052-2.074.04H13.78v-5.3h6.77c.503-.78 7.14-2.537 7.14-2.537v-1.018H4.982V4.944h22.727v8.934a9.474 9.474 0 014.37 1.544zm-18.3 16.19h5.267v5.3h-5.268v-5.3zm8.77.888h5.267v4.412H22.55V32.5zM5.009 15.611h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3zm0 8h5.267v5.3H5.01v-5.3z" fill="#fff" />
                                    <path d="M20.271 15h-1.254v4.981h1.254V15z" fill="#fff" />
                                    <path d="M42.218 37.467l-6.391-6.8a11.205 11.205 0 002.543-7.129c0-6.115-4.863-11.09-10.839-11.09-5.977 0-10.84 4.975-10.84 11.09s4.863 11.09 10.84 11.09c2.244 0 4.382-.691 6.21-2.007l6.439 6.852a1.39 1.39 0 001.998.04 1.475 1.475 0 00.04-2.046zM27.531 15.34c4.418 0 8.012 3.678 8.012 8.198 0 4.519-3.594 8.196-8.012 8.196-4.418 0-8.012-3.677-8.012-8.196 0-4.52 3.594-8.198 8.012-8.198z" fill="#fff" />
                                </svg>
                            </span>
                            <span class="card-link__text">Тарифы, нормативы</span>
                        </a>
						
						
						<a href="/nerungri/private_clients/contractual_relations/order_charges/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <svg width="44" height="35" viewBox="0 0 44 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33.4583 13.749C27.6356 13.749 22.9166 18.468 22.9166 24.2907C22.9166 30.1134 27.6356 34.8324 33.4583 34.8324C39.281 34.8324 44 30.1134 44 24.2907C44 18.468 39.281 13.749 33.4583 13.749ZM34.8333 29.7907C34.8333 30.5497 34.2173 31.1657 33.4583 31.1657C32.6993 31.1657 32.0833 30.5497 32.0833 29.7907V23.374C32.0833 22.615 32.6993 21.999 33.4583 21.999C34.2173 21.999 34.8333 22.615 34.8333 23.374V29.7907ZM33.4583 20.1657C32.6993 20.1657 32.0833 19.5497 32.0833 18.7907C32.0833 18.0317 32.6993 17.4157 33.4583 17.4157C34.2173 17.4157 34.8333 18.0317 34.8333 18.7907C34.8333 19.5497 34.2173 20.1657 33.4583 20.1657Z" fill="white"/>
<path d="M10.0833 16.4991H6.41667C5.91067 16.4991 5.5 16.9089 5.5 17.4158C5.5 17.9227 5.91067 18.3325 6.41667 18.3325H10.0833C10.5893 18.3325 11 17.9227 11 17.4158C11 16.9089 10.5893 16.4991 10.0833 16.4991Z" fill="white"/>
<path d="M12.8333 11.9158H6.41667C5.91067 11.9158 5.5 12.3255 5.5 12.8324C5.5 13.3394 5.91067 13.7491 6.41667 13.7491H12.8333C13.3393 13.7491 13.75 13.3394 13.75 12.8324C13.75 12.3255 13.3393 11.9158 12.8333 11.9158Z" fill="white"/>
<path d="M12.8333 7.33252H6.41667C5.91067 7.33252 5.5 7.74227 5.5 8.24919C5.5 8.7561 5.91067 9.16585 6.41667 9.16585H12.8333C13.3393 9.16585 13.75 8.7561 13.75 8.24919C13.75 7.74227 13.3393 7.33252 12.8333 7.33252Z" fill="white"/>
<path d="M33 10.9991H35.75V0H21.0833C19.833 0 18.7018 0.50875 17.875 1.33008C17.0482 0.50875 15.917 0 14.6667 0H0V27.4927H12.8333C14.4137 27.4927 15.5861 28.1059 16.5 28.8328V28.8631C17.4928 29.9246 18.2572 29.9246 19.25 28.8631V28.8328V26.1241V10.9991V4.576C19.25 3.55392 20.0723 2.72342 21.0833 2.72342H33V10.9991ZM16.5 25.949C15.9748 25.2707 15.1507 24.7546 12.8333 24.7133H2.75V2.72342H14.6667C15.6778 2.72342 16.5 3.55483 16.5 4.576V25.949Z" fill="white"/>
</svg>
                            </span>
                            <span class="card-link__text">Порядок начислений</span>
                        </a>
                        <a href="/nerungri/private_clients/contractual_relations/debts_repayment/" class="card-link">
                            <span class="card-link__ico-wrap">
                                <svg width="41" height="43" viewBox="0 0 41 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.122 39.121L37.376 4.228c.834-.757 2.074-.75 2.768.016.695.766.582 2-.253 2.757L3.637 41.892c-.834.758-2.074.75-2.768-.016s-.581-2 .253-2.755z" fill="#fff" />
                                    <path d="M6.568 29.715l2.789-2.685c-.064.002-.127.008-.191.008-3.4 0-6.166-2.147-6.166-4.787V11.614a1.5 1.5 0 10-3 0v10.638c0 3.527 2.777 6.509 6.568 7.463zm11.763-11.321V7.787c0-2.64 2.766-4.787 6.165-4.787 2.913 0 5.354 1.579 5.995 3.691l2.293-2.207C31.317 1.839 28.16 0 24.496 0c-5.054 0-9.165 3.493-9.165 7.787v13.495l3-2.888z" fill="#fff" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.831 31.519h-.5v-3c-1.65-2.828-4.483-4.934-4.666-6-.008-1.07 0-3 0-3h-2.454L29 21.645c0 .314-.002.619-.004.874-.183 1.066-3.016 3.172-4.666 6v3h-.5a1.5 1.5 0 000 3h1.5v6.5a1.5 1.5 0 003 0v-6.5h6v6.5a1.5 1.5 0 003 0v-6.5h1.5a1.5 1.5 0 000-3z" fill="#fff" />
                                </svg>
                            </span>
                            <span class="card-link__text">Не платите?</span>
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
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/nerungri/private_clients/news/news.php?ID=#ELEMENT_ID#",
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
		"SEARCH_PAGE" => "/nerungri/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
                            <a href="/nerungri/private_clients/news/" class="card-news__all">
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