<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Дальневосточная энергетическая компания, ДЭК");
$APPLICATION->SetPageProperty("keywords", "Дальневосточная энергетическая компания, ДЭК");
$APPLICATION->SetPageProperty("description", "Дальневосточная энергетическая компания - выберите свой регион");
$APPLICATION->SetTitle("ПАО «Дальневосточная энергетическая компания»");

?>



<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"glavnaya_slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "263",
		"IBLOCK_TYPE" => "Main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "OPICANIE",
			1 => "STYLE_CODE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "glavnaya_slider",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
    <section class="block block_overflow-hidden">
        <div class="container">
            <div class="three-banners-slider swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper banners-block">
                    <a href="" class="swiper-slide swiper-slide-active" id="bx_651765591_1042" style="width: 341px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">Личный кабинет</div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/iblock/642/x8i7v5iaakn10u1lb50ox7r49anhmrak/servises_lk.jpg')"></div>
                        </div>
                    </a>
                    <a href="/chastnym-klientam/peredacha-pokazaniy/" class="swiper-slide swiper-slide-next" id="bx_651765591_1043" style="width: 341px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">Передача показаний</div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/iblock/997/2hfimxgzuwe3yqdj6siurcymb72c4h8p/pokazaniya.jpg')"></div>
                        </div>
                    </a>
                    <a href="" class="swiper-slide" id="bx_651765591_1044" style="width: 341px; margin-right: 60px;">
                        <div class="banners-block__item elements-row__quarter">
                            <div class="h5">Интернет – приемная</div>
                            <div class="banners-block__ico" style="background-image:url('https://resk.smhost.ru/upload/iblock/f2a/smxnq3wtxzkwppe3lm4hgxliruizog11/servises_internet_priem.jpg')"></div>
                        </div>
                    </a>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "262",
		"IBLOCK_TYPE" => "Main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "YEAR",
			1 => "MONTH",
			2 => "OPICANIE",
			3 => "STYLE_CODE",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
    <section class="block section-pt0">
        <div class="container">
            <div class="two-different-banners flex">
                <a href="#" class="two-different-banners__item two-different-banners__item--big">
                    <img src="/local/templates/main/img/banner1.png" alt="">
                </a>
                <a href="#" class="two-different-banners__item two-different-banners__item--small">
                    <img src="/local/templates/main/img/banner2.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="block">
        <div class="container">
            <h2 class="h2 color-blue h2-marginBot">Ещё больше информации</h2>
            <div class="link-with-lines--horizontal-list link-with-lines--horizontal-list__four">
                <a class="link-with-lines" href="/company/deyatelnost/">
                    Деятельность                <div class="link-with-lines_arrow"></div>
                </a>
                <a class="link-with-lines" href="/company/reytingi-i-nagrady/">
                    Рейтинги и награды                <div class="link-with-lines_arrow"></div>
                </a>
                <a class="link-with-lines" href="/investors/informatsiya-dlya-aktsionerov/">
                    Информация для акционеров                <div class="link-with-lines_arrow"></div>
                </a>
                <a class="link-with-lines" href="/investors/raskrytie-informatsii/">
                    Раскрытие информации                <div class="link-with-lines_arrow"></div>
                </a>
            </div>
        </div>
    </section>

   <style>
       .three-banners-slider .banners-block__item {
           height: 216px;
           padding-bottom: 184px;
       }
       .banners-block__ico {
           position: absolute;
           left: 0;
           bottom: 0;
           width: 100%;
           height: 142px;
           background: center center / 100% no-repeat;
       }
        .jq-checkbox,
        .jq-radio {
            position: relative;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .jq-checkbox input,
        .jq-radio input {
            position: absolute;
            z-index: -1;
            margin: 0;
            padding: 0;
            opacity: 0;
        }
        .jq-file {
            position: relative;
            display: inline-block;
            overflow: hidden;
        }
        .jq-file input {
            position: absolute;
            top: 0;
            right: 0;
            height: auto;
            margin: 0;
            padding: 0;
            opacity: 0;
            font-size: 100px;
            line-height: 1em;
        }
        .jq-file__name {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .jq-selectbox,
        .jq-select-multiple {
            position: relative;
            display: inline-block;
        }
        .jq-selectbox select,
        .jq-select-multiple select {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            opacity: 0;
        }
        .jq-selectbox li,
        .jq-select-multiple li {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
        }
        .jq-selectbox {
            z-index: 10;
        }
        .jq-selectbox__select {
            position: relative;
        }
        .jq-selectbox__select-text {
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .jq-selectbox__dropdown {
            position: absolute;
        }
        .jq-selectbox__search input {
            -webkit-appearance: textfield;
        }
        .jq-selectbox__search input::-webkit-search-cancel-button,
        .jq-selectbox__search input::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        .jq-selectbox__dropdown ul {
            position: relative;
            overflow: auto;
            overflow-x: hidden;
            list-style: none;
            -webkit-overflow-scrolling: touch;
        }
        .jq-select-multiple ul {
            position: relative;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch;
        }
        .jq-number {
            display: inline-block;
        }
        .jq-number__field input {
            -moz-appearance: textfield;
            text-align: left; /* Ð´Ð»Ñ Opera Presto */
        }
        .jq-number__field input::-webkit-inner-spin-button,
        .jq-number__field input::-webkit-outer-spin-button {
            margin: 0; /* Ð² ÐºÐ°ÐºÐ¸Ñ…-Ñ‚Ð¾ Ð±Ñ€Ð°ÑƒÐ·ÐµÑ€Ð°Ñ… Ð¿Ñ€Ð¸ÑÑƒÑ‚ÑÑ‚Ð²ÑƒÐµÑ‚ Ð¾Ñ‚ÑÑ‚ÑƒÐ¿ */
            -webkit-appearance: none;
        }
        /* End */


        /* Start:/local/templates/main/assets/css/jquery.formstyler.theme.css?169641449211191*/
        .jq-checkbox,
        .jq-radio {
            vertical-align: -4px;
            width: 16px;
            height: 16px;
            margin: 0 4px 0 0;
            border: 1px solid #C3C3C3;
            background: linear-gradient(#FFF, #E6E6E6);
            box-shadow: 0 1px 1px rgba(0,0,0,.05), inset -1px -1px #FFF, inset 1px -1px #FFF;
            cursor: pointer;
        }
        .jq-checkbox.focused,
        .jq-radio.focused {
            border: 1px solid #08C;
        }
        .jq-checkbox.disabled,
        .jq-radio.disabled {
            opacity: .55;
        }
        .jq-checkbox {
            border-radius: 3px;
        }
        .jq-checkbox.checked .jq-checkbox__div {
            width: 8px;
            height: 4px;
            margin: 3px 0 0 3px;
            border-bottom: 2px solid #666;
            border-left: 2px solid #666;
            -webkit-transform: rotate(-50deg);
            transform: rotate(-50deg);
        }
        .jq-radio {
            border-radius: 50%;
        }
        .jq-radio.checked .jq-radio__div {
            width: 10px;
            height: 10px;
            margin: 3px 0 0 3px;
            border-radius: 50%;
            background: #777;
            box-shadow: inset 1px 1px 1px rgba(0,0,0,.7);
        }
        .jq-file {
            width: 270px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
        }
        .jq-file input {
            cursor: pointer;
        }
        .jq-file__name {
            box-sizing: border-box;
            width: 100%;
            height: 34px;
            padding: 0 80px 0 10px;
            border: 1px solid #CCC;
            border-bottom-color: #B3B3B3;
            border-radius: 4px;
            background: #FFF;
            box-shadow: inset 1px 1px #F1F1F1;
            font: 14px/32px Arial, sans-serif;
            color: #333;
        }
        .jq-file__browse {
            position: absolute;
            top: 1px;
            right: 1px;
            padding: 0 10px;
            border-left: 1px solid #CCC;
            border-radius: 0 4px 4px 0;
            background: linear-gradient(#FFF, #E6E6E6);
            box-shadow: inset 1px -1px #F1F1F1, inset -1px 0 #F1F1F1, 0 1px 2px rgba(0,0,0,.1);
            font: 14px/32px Arial, sans-serif;
            color: #333;
            text-shadow: 1px 1px #FFF;
        }
        .jq-file:hover .jq-file__browse {
            background: linear-gradient(#F6F6F6, #E6E6E6);
        }
        .jq-file:active .jq-file__browse {
            background: #F5F5F5;
            box-shadow: inset 1px 1px 3px #DDD;
        }
        .jq-file.focused .jq-file__name {
            border: 1px solid #5794BF;
        }
        .jq-file.disabled,
        .jq-file.disabled .jq-file__name,
        .jq-file.disabled .jq-file__browse {
            border-color: #CCC;
            background: #F5F5F5;
            box-shadow: none;
            color: #888;
        }
        .jq-number {
            position: relative;
            vertical-align: middle;
            padding: 0 36px 0 0;
        }
        .jq-number__field {
            width: 100px;
            border: 1px solid #CCC;
            border-bottom-color: #B3B3B3;
            border-radius: 4px;
            box-shadow: inset 1px 1px #F1F1F1, 0 1px 2px rgba(0,0,0,.1);
        }
        .jq-number__field:hover {
            border-color: #B3B3B3;
        }
        .jq-number__field input {
            box-sizing: border-box;
            width: 100%;
            padding: 8px 9px;
            border: none;
            outline: none;
            background: none;
            font: 14px Arial, sans-serif;
            color: #333;
        }
        .jq-number__spin {
            position: absolute;
            top: 0;
            right: 0;
            width: 32px;
            height: 14px;
            border: 1px solid #CCC;
            border-bottom-color: #B3B3B3;
            border-radius: 4px;
            background: linear-gradient(#FFF, #E6E6E6);
            box-shadow: 0 1px 2px rgba(0,0,0,.1);
            box-shadow: inset 1px -1px #F1F1F1, inset -1px 0 #F1F1F1, 0 1px 2px rgba(0,0,0,.1);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            text-shadow: 1px 1px #FFF;
            cursor: pointer;
        }
        .jq-number__spin.minus {
            top: auto;
            bottom: 0;
        }
        .jq-number__spin:hover {
            background: linear-gradient(#F6F6F6, #E6E6E6);
        }
        .jq-number__spin:active {
            background: #F5F5F5;
            box-shadow: inset 1px 1px 3px #DDD;
        }
        .jq-number__spin:after {
            content: '';
            position: absolute;
            top: 4px;
            left: 11px;
            width: 0;
            height: 0;
            border-right: 5px solid transparent;
            border-bottom: 5px solid #999;
            border-left: 5px solid transparent;
        }
        .jq-number__spin.minus:after {
            top: 5px;
            border-top: 5px solid #999;
            border-right: 5px solid transparent;
            border-bottom: none;
            border-left: 5px solid transparent;
        }
        .jq-number__spin.minus:hover:after {
            border-top-color: #000;
        }
        .jq-number__spin.plus:hover:after {
            border-bottom-color: #000;
        }
        .jq-number.focused .jq-number__field {
            border: 1px solid #5794BF;
        }
        .jq-number.disabled .jq-number__field,
        .jq-number.disabled .jq-number__spin {
            border-color: #CCC;
            background: #F5F5F5;
            box-shadow: none;
            color: #888;
        }
        .jq-number.disabled .jq-number__spin:after {
            border-bottom-color: #AAA;
        }
        .jq-number.disabled .jq-number__spin.minus:after {
            border-top-color: #AAA;
        }
        .jq-selectbox {
            vertical-align: middle;
            cursor: pointer;
        }
        .jq-selectbox__select {
            height: 32px;
            padding: 0 45px 0 10px;
            border: 1px solid #CCC;
            border-bottom-color: #B3B3B3;
            border-radius: 4px;
            background: linear-gradient(#FFF, #E6E6E6);
            box-shadow: inset 1px -1px #F1F1F1, inset -1px 0 #F1F1F1, 0 1px 2px rgba(0,0,0,.1);
            font: 14px/32px Arial, sans-serif;
            color: #333;
            text-shadow: 1px 1px #FFF;
        }
        .jq-selectbox__select:hover {
            background: linear-gradient(#F6F6F6, #E6E6E6);
        }
        .jq-selectbox__select:active {
            background: #F5F5F5;
            box-shadow: inset 1px 1px 3px #DDD;
        }
        .jq-selectbox.focused .jq-selectbox__select {
            border: 1px solid #5794BF;
        }
        .jq-selectbox.disabled .jq-selectbox__select {
            border-color: #CCC;
            background: #F5F5F5;
            box-shadow: none;
            color: #888;
        }
        .jq-selectbox__select-text {
            display: block;
            width: 100%;
        }
        .jq-selectbox .placeholder {
            color: #888;
        }
        .jq-selectbox__trigger {
            position: absolute;
            top: 0;
            right: 0;
            width: 34px;
            height: 100%;
            border-left: 1px solid #CCC;
        }
        .jq-selectbox__trigger-arrow {
            position: absolute;
            top: 14px;
            right: 12px;
            width: 0;
            height: 0;
            border-top: 5px solid #999;
            border-right: 5px solid transparent;
            border-left: 5px solid transparent;
        }
        .jq-selectbox:hover .jq-selectbox__trigger-arrow {
            border-top-color: #000;
        }
        .jq-selectbox.disabled .jq-selectbox__trigger-arrow {
            border-top-color: #AAA;
        }
        .jq-selectbox__dropdown {
            box-sizing: border-box;
            width: 100%;
            margin: 2px 0 0;
            padding: 0;
            border: 1px solid #CCC;
            border-radius: 4px;
            background: #FFF;
            box-shadow: 0 2px 10px rgba(0,0,0,.2);
            font: 14px/18px Arial, sans-serif;
        }
        .jq-selectbox__search {
            margin: 5px;
        }
        .jq-selectbox__search input {
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding: 5px 27px 6px 8px;
            border: 1px solid #CCC;
            border-radius: 3px;
            outline: none;
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAMCAYAAABiDJ37AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAO1JREFUeNqU078LAXEYx/FzYfNzk5TJaFNKYjFYSQZ/hvwBsvg1UCY2xT9gM8hukQGThWRjkcFw3pdnujhfT736Xn2fPvfc3fd07V0OFDDFAnM0ENYsZRiGLSc9OpqIYIA9fMhhjCrW2h9VlMlcH/aymMGtOqEugX08PwQucUZKdTozMIqdTc9WepQD7wjY9ARx+ydwhfyXfS+S0qMcOEQJGcueB3VccFINdMgal6NzkmPjRwJXxDBB7/2RDdtAp6wb+dpphHDASG5QQ0V6u2aoSqBZD/lDrNWRJynLK2qpBn4rc6K2XB9/Nb8EGABtf1thzY6X2AAAAABJRU5ErkJggg==') no-repeat 100% 50%;
            box-shadow: inset 1px 1px #F1F1F1;
            color: #333;
        }
        .jq-selectbox__not-found {
            margin: 5px;
            padding: 5px 8px 6px;
            background: #F0F0F0;
            font-size: 13px;
        }
        .jq-selectbox ul {
            margin: 0;
            padding: 0;
        }
        .jq-selectbox li {
            min-height: 18px;
            padding: 5px 10px 6px;
            color: #231F20;
        }
        .jq-selectbox li.selected {
            background-color: #A3ABB1;
            color: #FFF;
        }
        .jq-selectbox li:hover {
            background-color: #08C;
            color: #FFF;
        }
        .jq-selectbox li.disabled {
            color: #AAA;
        }
        .jq-selectbox li.disabled:hover {
            background: none;
        }
        .jq-selectbox li.optgroup {
            font-weight: bold;
        }
        .jq-selectbox li.optgroup:hover {
            background: none;
            color: #231F20;
            cursor: default;
        }
        .jq-selectbox li.option {
            padding-left: 25px;
        }
        .jq-select-multiple {
            box-sizing: border-box;
            padding: 1px;
            border: 1px solid #CCC;
            border-bottom-color: #B3B3B3;
            border-radius: 4px;
            background: #FFF;
            box-shadow: inset 1px 1px #F1F1F1, 0 1px 2px rgba(0,0,0,.1);
            font: 14px/18px Arial, sans-serif;
            color: #333;
            cursor: default;
        }
        .jq-select-multiple.focused {
            border: 1px solid #5794BF;
        }
        .jq-select-multiple.disabled {
            border-color: #CCC;
            background: #F5F5F5;
            box-shadow: none;
            color: #888;
        }
        .jq-select-multiple ul {
            margin: 0;
            padding: 0;
        }
        .jq-select-multiple li {
            padding: 3px 9px 4px;
            list-style: none;
        }
        .jq-select-multiple li:first-child {
            border-radius: 3px 3px 0 0;
        }
        .jq-select-multiple li:last-child {
            border-radius: 0 0 3px 3px;
        }
        .jq-select-multiple li.selected {
            background: #08C;
            color: #FFF;
        }
        .jq-select-multiple li.disabled {
            color: #AAA;
        }
        .jq-select-multiple li.optgroup {
            font-weight: bold;
        }
        .jq-select-multiple li.option {
            padding-left: 25px;
        }
        .jq-select-multiple.disabled li.selected,
        .jq-select-multiple li.selected.disabled {
            background: #CCC;
            color: #FFF;
        }
        input[type='email'].styler,
        input[type='password'].styler,
        input[type='search'].styler,
        input[type='tel'].styler,
        input[type='text'].styler,
        input[type='url'].styler,
        textarea.styler {
            padding: 8px 9px;
            border: 1px solid #CCC;
            border-bottom-color: #B3B3B3;
            border-radius: 4px;
            box-shadow: inset 1px 1px #F1F1F1, 0 1px 2px rgba(0,0,0,.1);
            font: 14px Arial, sans-serif;
            color: #333;
        }
        input[type='search'].styler {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        textarea.styler {
            overflow: auto;
        }
        input[type='email'].styler:hover,
        input[type='password'].styler:hover,
        input[type='search'].styler:hover,
        input[type='tel'].styler:hover,
        input[type='text'].styler:hover,
        input[type='url'].styler:hover,
        textarea.styler:hover {
            border-color: #B3B3B3;
        }
        input[type='email'].styler:hover:focus,
        input[type='password'].styler:hover:focus,
        input[type='search'].styler:hover:focus,
        input[type='tel'].styler:hover:focus,
        input[type='text'].styler:hover:focus,
        input[type='url'].styler:hover:focus,
        textarea.styler:hover:focus {
            border-color: #CCC;
            border-top-color: #B3B3B3;
            outline: none;
            box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
        }
        button.styler,
        input[type='button'].styler,
        input[type='submit'].styler,
        input[type='reset'].styler {
            overflow: visible;
            padding: 8px 11px;
            border: 1px solid #CCC;
            border-bottom-color: #B3B3B3;
            border-radius: 4px;
            outline: none;
            background: linear-gradient(#FFF, #E6E6E6);
            box-shadow: inset 1px -1px #F1F1F1, inset -1px 0 #F1F1F1, 0 1px 2px rgba(0,0,0,.1);
            font: 14px Arial, sans-serif;
            color: #333;
            text-shadow: 1px 1px #FFF;
            cursor: pointer;
        }
        button.styler.styler::-moz-focus-inner,
        input[type='button'].styler.styler::-moz-focus-inner,
        input[type='submit'].styler.styler::-moz-focus-inner,
        input[type='reset'].styler.styler::-moz-focus-inner {
            padding: 0;
            border: 0;
        }
        button.styler:not([disabled]):hover,
        input[type='button'].styler:not([disabled]):hover,
        input[type='submit'].styler:not([disabled]):hover,
        input[type='reset'].styler:not([disabled]):hover,
        input[type='reset'].styler:hover {
            background: linear-gradient(#F6F6F6, #E6E6E6);
        }
        button.styler:active,
        input[type='button'].styler:active,
        input[type='submit'].styler:active,
        input[type='reset'].styler:active {
            background: #F5F5F5;
            box-shadow: inset 1px 1px 3px #DDD;
        }
        button.styler[disabled],
        input[type='button'].styler[disabled],
        input[type='submit'].styler[disabled] {
            border-color: #CCC;
            background: #F5F5F5;
            box-shadow: none;
            color: #888;
        }
        /* End */


        /* Start:/local/templates/main/assets/css/jquery.datepicker.min.css?169641449212257*/
        .datepicker--cells{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.datepicker--cell{border-radius:4px;box-sizing:border-box;cursor:pointer;display:-webkit-flex;display:-ms-flexbox;display:flex;position:relative;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;height:32px;z-index:1}.datepicker--cell.-focus-{background:#f0f0f0}.datepicker--cell.-current-{color:#4EB5E6}.datepicker--cell.-current-.-focus-{color:#4a4a4a}.datepicker--cell.-current-.-in-range-{color:#4EB5E6}.datepicker--cell.-in-range-{background:rgba(92,196,239,.1);color:#4a4a4a;border-radius:0}.datepicker--cell.-in-range-.-focus-{background-color:rgba(92,196,239,.2)}.datepicker--cell.-disabled-{cursor:default;color:#aeaeae}.datepicker--cell.-disabled-.-focus-{color:#aeaeae}.datepicker--cell.-disabled-.-in-range-{color:#a1a1a1}.datepicker--cell.-disabled-.-current-.-focus-{color:#aeaeae}.datepicker--cell.-range-from-{border:1px solid rgba(92,196,239,.5);background-color:rgba(92,196,239,.1);border-radius:4px 0 0 4px}.datepicker--cell.-range-to-{border:1px solid rgba(92,196,239,.5);background-color:rgba(92,196,239,.1);border-radius:0 4px 4px 0}.datepicker--cell.-selected-,.datepicker--cell.-selected-.-current-{color:#fff;background:#5cc4ef}.datepicker--cell.-range-from-.-range-to-{border-radius:4px}.datepicker--cell.-selected-{border:none}.datepicker--cell.-selected-.-focus-{background:#45bced}.datepicker--cell:empty{cursor:default}.datepicker--days-names{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:8px 0 3px}.datepicker--day-name{color:#FF9A19;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-flex:1;-ms-flex:1;flex:1;text-align:center;text-transform:uppercase;font-size:.8em}.-only-timepicker- .datepicker--content,.datepicker--body,.datepicker-inline .datepicker--pointer{display:none}.datepicker--cell-day{width:14.28571%}.datepicker--cells-months{height:170px}.datepicker--cell-month{width:33.33%;height:25%}.datepicker--cells-years,.datepicker--years{height:170px}.datepicker--cell-year{width:25%;height:33.33%}.datepickers-container{position:absolute;left:0;top:0}@media print{.datepickers-container{display:none}}.datepicker{background:#fff;border:1px solid #dbdbdb;box-shadow:0 4px 12px rgba(0,0,0,.15);border-radius:4px;box-sizing:content-box;font-family:Tahoma,sans-serif;font-size:14px;color:#4a4a4a;width:250px;position:absolute;left:-100000px;opacity:0;transition:opacity .3s ease,left 0s .3s,-webkit-transform .3s ease;transition:opacity .3s ease,transform .3s ease,left 0s .3s;transition:opacity .3s ease,transform .3s ease,left 0s .3s,-webkit-transform .3s ease;z-index:100}.datepicker.-from-top-{-webkit-transform:translateY(-8px);transform:translateY(-8px)}.datepicker.-from-right-{-webkit-transform:translateX(8px);transform:translateX(8px)}.datepicker.-from-bottom-{-webkit-transform:translateY(8px);transform:translateY(8px)}.datepicker.-from-left-{-webkit-transform:translateX(-8px);transform:translateX(-8px)}.datepicker.active{opacity:1;-webkit-transform:translate(0);transform:translate(0);transition:opacity .3s ease,left 0s 0s,-webkit-transform .3s ease;transition:opacity .3s ease,transform .3s ease,left 0s 0s;transition:opacity .3s ease,transform .3s ease,left 0s 0s,-webkit-transform .3s ease}.datepicker-inline .datepicker{border-color:#d7d7d7;box-shadow:none;position:static;left:auto;right:auto;opacity:1;-webkit-transform:none;transform:none}.datepicker--content{box-sizing:content-box;padding:4px}.datepicker--pointer{position:absolute;background:#fff;border-top:1px solid #dbdbdb;border-right:1px solid #dbdbdb;width:10px;height:10px;z-index:-1}.datepicker--nav-action:hover,.datepicker--nav-title:hover{background:#f0f0f0}.-top-center- .datepicker--pointer,.-top-left- .datepicker--pointer,.-top-right- .datepicker--pointer{top:calc(100% - 4px);-webkit-transform:rotate(135deg);transform:rotate(135deg)}.-right-bottom- .datepicker--pointer,.-right-center- .datepicker--pointer,.-right-top- .datepicker--pointer{right:calc(100% - 4px);-webkit-transform:rotate(225deg);transform:rotate(225deg)}.-bottom-center- .datepicker--pointer,.-bottom-left- .datepicker--pointer,.-bottom-right- .datepicker--pointer{bottom:calc(100% - 4px);-webkit-transform:rotate(315deg);transform:rotate(315deg)}.-left-bottom- .datepicker--pointer,.-left-center- .datepicker--pointer,.-left-top- .datepicker--pointer{left:calc(100% - 4px);-webkit-transform:rotate(45deg);transform:rotate(45deg)}.-bottom-left- .datepicker--pointer,.-top-left- .datepicker--pointer{left:10px}.-bottom-right- .datepicker--pointer,.-top-right- .datepicker--pointer{right:10px}.-bottom-center- .datepicker--pointer,.-top-center- .datepicker--pointer{left:calc(50% - 10px / 2)}.-left-top- .datepicker--pointer,.-right-top- .datepicker--pointer{top:10px}.-left-bottom- .datepicker--pointer,.-right-bottom- .datepicker--pointer{bottom:10px}.-left-center- .datepicker--pointer,.-right-center- .datepicker--pointer{top:calc(50% - 10px / 2)}.datepicker--body.active{display:block}.datepicker--nav{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;border-bottom:1px solid #efefef;min-height:32px;padding:4px}.-only-timepicker- .datepicker--nav{display:none}.datepicker--nav-action,.datepicker--nav-title{display:-webkit-flex;display:-ms-flexbox;display:flex;cursor:pointer;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.datepicker--nav-action{width:32px;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.datepicker--nav-action.-disabled-{visibility:hidden}.datepicker--nav-action svg{width:32px;height:32px}.datepicker--nav-action path{fill:none;stroke:#9c9c9c;stroke-width:2px}.datepicker--nav-title{border-radius:4px;padding:0 8px}.datepicker--buttons,.datepicker--time{border-top:1px solid #efefef;padding:4px}.datepicker--nav-title i{font-style:normal;color:#9c9c9c;margin-left:5px}.datepicker--nav-title.-disabled-{cursor:default;background:0 0}.datepicker--buttons{display:-webkit-flex;display:-ms-flexbox;display:flex}.datepicker--button{color:#4EB5E6;cursor:pointer;border-radius:4px;-webkit-flex:1;-ms-flex:1;flex:1;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;height:32px}.datepicker--button:hover{color:#4a4a4a;background:#f0f0f0}.datepicker--time{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center;position:relative}.datepicker--time.-am-pm- .datepicker--time-sliders{-webkit-flex:0 1 138px;-ms-flex:0 1 138px;flex:0 1 138px;max-width:138px}.-only-timepicker- .datepicker--time{border-top:none}.datepicker--time-sliders{-webkit-flex:0 1 153px;-ms-flex:0 1 153px;flex:0 1 153px;margin-right:10px;max-width:153px}.datepicker--time-label{display:none;font-size:12px}.datepicker--time-current{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-flex:1;-ms-flex:1;flex:1;font-size:14px;text-align:center;margin:0 0 0 10px}.datepicker--time-current-colon{margin:0 2px 3px;line-height:1}.datepicker--time-current-hours,.datepicker--time-current-minutes{line-height:1;font-size:19px;font-family:"Century Gothic",CenturyGothic,AppleGothic,sans-serif;position:relative;z-index:1}.datepicker--time-current-hours:after,.datepicker--time-current-minutes:after{content:'';background:#f0f0f0;border-radius:4px;position:absolute;left:-2px;top:-3px;right:-2px;bottom:-2px;z-index:-1;opacity:0}.datepicker--time-current-hours.-focus-:after,.datepicker--time-current-minutes.-focus-:after{opacity:1}.datepicker--time-current-ampm{text-transform:uppercase;-webkit-align-self:flex-end;-ms-flex-item-align:end;align-self:flex-end;color:#9c9c9c;margin-left:6px;font-size:11px;margin-bottom:1px}.datepicker--time-row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-size:11px;height:17px;background:linear-gradient(to right,#dedede,#dedede) left 50%/100% 1px no-repeat}.datepicker--time-row:first-child{margin-bottom:4px}.datepicker--time-row input[type=range]{background:0 0;cursor:pointer;-webkit-flex:1;-ms-flex:1;flex:1;height:100%;padding:0;margin:0;-webkit-appearance:none}.datepicker--time-row input[type=range]::-ms-tooltip{display:none}.datepicker--time-row input[type=range]:hover::-webkit-slider-thumb{border-color:#b8b8b8}.datepicker--time-row input[type=range]:hover::-moz-range-thumb{border-color:#b8b8b8}.datepicker--time-row input[type=range]:hover::-ms-thumb{border-color:#b8b8b8}.datepicker--time-row input[type=range]:focus{outline:0}.datepicker--time-row input[type=range]:focus::-webkit-slider-thumb{background:#5cc4ef;border-color:#5cc4ef}.datepicker--time-row input[type=range]:focus::-moz-range-thumb{background:#5cc4ef;border-color:#5cc4ef}.datepicker--time-row input[type=range]:focus::-ms-thumb{background:#5cc4ef;border-color:#5cc4ef}.datepicker--time-row input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;box-sizing:border-box;height:12px;width:12px;border-radius:3px;border:1px solid #dedede;background:#fff;cursor:pointer;transition:background .2s;margin-top:-6px}.datepicker--time-row input[type=range]::-moz-range-thumb{box-sizing:border-box;height:12px;width:12px;border-radius:3px;border:1px solid #dedede;background:#fff;cursor:pointer;transition:background .2s}.datepicker--time-row input[type=range]::-ms-thumb{box-sizing:border-box;height:12px;width:12px;border-radius:3px;border:1px solid #dedede;background:#fff;cursor:pointer;transition:background .2s}.datepicker--time-row input[type=range]::-webkit-slider-runnable-track{border:none;height:1px;cursor:pointer;color:transparent;background:0 0}.datepicker--time-row input[type=range]::-moz-range-track{border:none;height:1px;cursor:pointer;color:transparent;background:0 0}.datepicker--time-row input[type=range]::-ms-track{border:none;height:1px;cursor:pointer;color:transparent;background:0 0}.datepicker--time-row input[type=range]::-ms-fill-lower{background:0 0}.datepicker--time-row input[type=range]::-ms-fill-upper{background:0 0}.datepicker--time-row span{padding:0 12px}.datepicker--time-icon{color:#9c9c9c;border:1px solid;border-radius:50%;font-size:16px;position:relative;margin:0 5px -1px 0;width:1em;height:1em}.datepicker--time-icon:after,.datepicker--time-icon:before{content:'';background:currentColor;position:absolute}.datepicker--time-icon:after{height:.4em;width:1px;left:calc(50% - 1px);top:calc(50% + 1px);-webkit-transform:translateY(-100%);transform:translateY(-100%)}.datepicker--time-icon:before{width:.4em;height:1px;top:calc(50% + 1px);left:calc(50% - 1px)}.datepicker--cell-day.-other-month-,.datepicker--cell-year.-other-decade-{color:#dedede}.datepicker--cell-day.-other-month-:hover,.datepicker--cell-year.-other-decade-:hover{color:#c5c5c5}.-disabled-.-focus-.datepicker--cell-day.-other-month-,.-disabled-.-focus-.datepicker--cell-year.-other-decade-{color:#dedede}.-selected-.datepicker--cell-day.-other-month-,.-selected-.datepicker--cell-year.-other-decade-{color:#fff;background:#a2ddf6}.-selected-.-focus-.datepicker--cell-day.-other-month-,.-selected-.-focus-.datepicker--cell-year.-other-decade-{background:#8ad5f4}.-in-range-.datepicker--cell-day.-other-month-,.-in-range-.datepicker--cell-year.-other-decade-{background-color:rgba(92,196,239,.1);color:#ccc}.-in-range-.-focus-.datepicker--cell-day.-other-month-,.-in-range-.-focus-.datepicker--cell-year.-other-decade-{background-color:rgba(92,196,239,.2)}.datepicker--cell-day.-other-month-:empty,.datepicker--cell-year.-other-decade-:empty{background:0 0;border:none}
        /* End */


        /* Start:/local/templates/main/assets/css/jquery.photoswipe.min.css?16964144922499*/
        /*! PhotoSwipe main CSS by Dmitry Semenov | photoswipe.com | MIT license */.pswp{display:none;position:absolute;width:100%;height:100%;left:0;top:0;overflow:hidden;-ms-touch-action:none;touch-action:none;z-index:1500;-webkit-text-size-adjust:100%;-webkit-backface-visibility:hidden;outline:0}.pswp *{-webkit-box-sizing:border-box;box-sizing:border-box}.pswp img{max-width:none}.pswp--animate_opacity{opacity:.001;will-change:opacity;-webkit-transition:opacity 333ms cubic-bezier(.4,0,.22,1);transition:opacity 333ms cubic-bezier(.4,0,.22,1)}.pswp--open{display:block}.pswp--zoom-allowed .pswp__img{cursor:-webkit-zoom-in;cursor:-moz-zoom-in;cursor:zoom-in}.pswp--zoomed-in .pswp__img{cursor:-webkit-grab;cursor:-moz-grab;cursor:grab}.pswp--dragging .pswp__img{cursor:-webkit-grabbing;cursor:-moz-grabbing;cursor:grabbing}.pswp__bg{position:absolute;left:0;top:0;width:100%;height:100%;background:#000;opacity:0;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-backface-visibility:hidden;will-change:opacity}.pswp__scroll-wrap{position:absolute;left:0;top:0;width:100%;height:100%;overflow:hidden}.pswp__container,.pswp__zoom-wrap{-ms-touch-action:none;touch-action:none;position:absolute;left:0;right:0;top:0;bottom:0}.pswp__container,.pswp__img{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none}.pswp__zoom-wrap{position:absolute;width:100%;-webkit-transform-origin:left top;-ms-transform-origin:left top;transform-origin:left top;-webkit-transition:-webkit-transform 333ms cubic-bezier(.4,0,.22,1);transition:transform 333ms cubic-bezier(.4,0,.22,1)}.pswp__bg{will-change:opacity;-webkit-transition:opacity 333ms cubic-bezier(.4,0,.22,1);transition:opacity 333ms cubic-bezier(.4,0,.22,1)}.pswp--animated-in .pswp__bg,.pswp--animated-in .pswp__zoom-wrap{-webkit-transition:none;transition:none}.pswp__container,.pswp__zoom-wrap{-webkit-backface-visibility:hidden}.pswp__item{position:absolute;left:0;right:0;top:0;bottom:0;overflow:hidden}.pswp__img{position:absolute;width:auto;height:auto;top:0;left:0}.pswp__img--placeholder{-webkit-backface-visibility:hidden}.pswp__img--placeholder--blank{background:#222}.pswp--ie .pswp__img{width:100%!important;height:auto!important;left:0;top:0}.pswp__error-msg{position:absolute;left:0;top:50%;width:100%;text-align:center;font-size:14px;line-height:16px;margin-top:-8px;color:#ccc}.pswp__error-msg a{color:#ccc;text-decoration:underline}
        /* End */


        /* Start:/local/templates/main/assets/css/jquery.photoswipe.default-skin.min.css?16964144927907*/
        /*! PhotoSwipe Default UI CSS by Dmitry Semenov | photoswipe.com | MIT license */.pswp__button{width:44px;height:44px;position:relative;background:0 0;cursor:pointer;overflow:visible;-webkit-appearance:none;display:block;border:0;padding:0;margin:0;float:right;opacity:.75;-webkit-transition:opacity .2s;transition:opacity .2s;-webkit-box-shadow:none;box-shadow:none}.pswp__button:focus,.pswp__button:hover{opacity:1}.pswp__button:active{outline:0;opacity:.9}.pswp__button::-moz-focus-inner{padding:0;border:0}.pswp__ui--over-close .pswp__button--close{opacity:1}.pswp__button,.pswp__button--arrow--left:before,.pswp__button--arrow--right:before{background:url(/local/templates/main/assets/css/../../img/default-skin.png) 0 0 no-repeat;background-size:264px 88px;width:44px;height:44px}@media (-webkit-min-device-pixel-ratio:1.1),(-webkit-min-device-pixel-ratio:1.09375),(min-resolution:105dpi),(min-resolution:1.1dppx){.pswp--svg .pswp__button,.pswp--svg .pswp__button--arrow--left:before,.pswp--svg .pswp__button--arrow--right:before{background-image:url(/local/templates/main/assets/css/../../img/default-skin.svg)}.pswp--svg .pswp__button--arrow--left,.pswp--svg .pswp__button--arrow--right{background:0 0}}.pswp__button--close{background-position:0 -44px}.pswp__button--share{background-position:-44px -44px}.pswp__button--fs{display:none}.pswp--supports-fs .pswp__button--fs{display:block}.pswp--fs .pswp__button--fs{background-position:-44px 0}.pswp__button--zoom{display:none;background-position:-88px 0}.pswp--zoom-allowed .pswp__button--zoom{display:block}.pswp--zoomed-in .pswp__button--zoom{background-position:-132px 0}.pswp--touch .pswp__button--arrow--left,.pswp--touch .pswp__button--arrow--right{visibility:hidden}.pswp__button--arrow--left,.pswp__button--arrow--right{background:0 0;top:50%;margin-top:-50px;width:70px;height:100px;position:absolute}.pswp__button--arrow--left{left:0}.pswp__button--arrow--right{right:0}.pswp__button--arrow--left:before,.pswp__button--arrow--right:before{content:'';top:35px;background-color:rgba(0,0,0,.3);height:30px;width:32px;position:absolute}.pswp__button--arrow--left:before{left:6px;background-position:-138px -44px}.pswp__button--arrow--right:before{right:6px;background-position:-94px -44px}.pswp__counter,.pswp__share-modal{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.pswp__share-modal{display:block;background:rgba(0,0,0,.5);width:100%;height:100%;top:0;left:0;padding:10px;position:absolute;z-index:1600;opacity:0;-webkit-transition:opacity .25s ease-out;transition:opacity .25s ease-out;-webkit-backface-visibility:hidden;will-change:opacity}.pswp__share-modal--hidden{display:none}.pswp__share-tooltip{z-index:1620;position:absolute;background:#fff;top:56px;border-radius:2px;display:block;width:auto;right:44px;-webkit-box-shadow:0 2px 5px rgba(0,0,0,.25);box-shadow:0 2px 5px rgba(0,0,0,.25);-webkit-transform:translateY(6px);-ms-transform:translateY(6px);transform:translateY(6px);-webkit-transition:-webkit-transform .25s;transition:transform .25s;-webkit-backface-visibility:hidden;will-change:transform}.pswp__share-tooltip a{display:block;padding:8px 12px;color:#000;text-decoration:none;font-size:14px;line-height:18px}.pswp__share-tooltip a:hover{text-decoration:none;color:#000}.pswp__share-tooltip a:first-child{border-radius:2px 2px 0 0}.pswp__share-tooltip a:last-child{border-radius:0 0 2px 2px}.pswp__share-modal--fade-in{opacity:1}.pswp__share-modal--fade-in .pswp__share-tooltip{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}.pswp--touch .pswp__share-tooltip a{padding:16px 12px}a.pswp__share--facebook:before{content:'';display:block;width:0;height:0;position:absolute;top:-12px;right:15px;border:6px solid transparent;border-bottom-color:#fff;-webkit-pointer-events:none;-moz-pointer-events:none;pointer-events:none}a.pswp__share--facebook:hover{background:#3e5c9a;color:#fff}a.pswp__share--facebook:hover:before{border-bottom-color:#3e5c9a}a.pswp__share--twitter:hover{background:#55acee;color:#fff}a.pswp__share--pinterest:hover{background:#ccc;color:#ce272d}a.pswp__share--download:hover{background:#ddd}.pswp__counter{position:absolute;left:0;top:0;height:44px;font-size:13px;line-height:44px;color:#fff;opacity:.75;padding:0 10px}.pswp__caption{position:absolute;left:0;bottom:0;width:100%;min-height:44px}.pswp__caption small{font-size:11px;color:#bbb}.pswp__caption__center{text-align:left;max-width:420px;margin:0 auto;font-size:13px;padding:10px;line-height:20px;color:#ccc}.pswp__caption--empty{display:none}.pswp__caption--fake{visibility:hidden}.pswp__preloader{width:44px;height:44px;position:absolute;top:0;left:50%;margin-left:-22px;opacity:0;-webkit-transition:opacity .25s ease-out;transition:opacity .25s ease-out;will-change:opacity;direction:ltr}.pswp__preloader__icn{width:20px;height:20px;margin:12px}.pswp__preloader--active{opacity:1}.pswp__preloader--active .pswp__preloader__icn{background:url(/local/templates/main/assets/css/preloader.gif) 0 0 no-repeat}.pswp--css_animation .pswp__preloader--active{opacity:1}.pswp--css_animation .pswp__preloader--active .pswp__preloader__icn{-webkit-animation:clockwise .5s linear infinite;animation:clockwise .5s linear infinite}.pswp--css_animation .pswp__preloader--active .pswp__preloader__donut{-webkit-animation:donut-rotate 1s cubic-bezier(.4,0,.22,1) infinite;animation:donut-rotate 1s cubic-bezier(.4,0,.22,1) infinite}.pswp--css_animation .pswp__preloader__icn{background:0 0;opacity:.75;width:14px;height:14px;position:absolute;left:15px;top:15px;margin:0}.pswp--css_animation .pswp__preloader__cut{position:relative;width:7px;height:14px;overflow:hidden}.pswp--css_animation .pswp__preloader__donut{-webkit-box-sizing:border-box;box-sizing:border-box;width:14px;height:14px;border:2px solid #fff;border-radius:50%;border-left-color:transparent;border-bottom-color:transparent;position:absolute;top:0;left:0;background:0 0;margin:0}@media screen and (max-width:1024px){.pswp__preloader{position:relative;left:auto;top:auto;margin:0;float:right}}@-webkit-keyframes clockwise{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes clockwise{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes donut-rotate{0%{-webkit-transform:rotate(0);transform:rotate(0)}50%{-webkit-transform:rotate(-140deg);transform:rotate(-140deg)}100%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes donut-rotate{0%{-webkit-transform:rotate(0);transform:rotate(0)}50%{-webkit-transform:rotate(-140deg);transform:rotate(-140deg)}100%{-webkit-transform:rotate(0);transform:rotate(0)}}.pswp__ui{-webkit-font-smoothing:auto;visibility:visible;opacity:1;z-index:1550}.pswp__top-bar{position:absolute;left:0;top:0;height:44px;width:100%}.pswp--has_mouse .pswp__button--arrow--left,.pswp--has_mouse .pswp__button--arrow--right,.pswp__caption,.pswp__top-bar{-webkit-backface-visibility:hidden;will-change:opacity;-webkit-transition:opacity 333ms cubic-bezier(.4,0,.22,1);transition:opacity 333ms cubic-bezier(.4,0,.22,1)}.pswp--has_mouse .pswp__button--arrow--left,.pswp--has_mouse .pswp__button--arrow--right{visibility:visible}.pswp__caption,.pswp__top-bar{background-color:rgba(0,0,0,.5)}.pswp__ui--fit .pswp__caption,.pswp__ui--fit .pswp__top-bar{background-color:rgba(0,0,0,.3)}.pswp__ui--idle .pswp__top-bar{opacity:0}.pswp__ui--idle .pswp__button--arrow--left,.pswp__ui--idle .pswp__button--arrow--right{opacity:0}.pswp__ui--hidden .pswp__button--arrow--left,.pswp__ui--hidden .pswp__button--arrow--right,.pswp__ui--hidden .pswp__caption,.pswp__ui--hidden .pswp__top-bar{opacity:.001}.pswp__ui--one-slide .pswp__button--arrow--left,.pswp__ui--one-slide .pswp__button--arrow--right,.pswp__ui--one-slide .pswp__counter{display:none}.pswp__element--disabled{display:none!important}.pswp--minimal--dark .pswp__top-bar{background:0 0}
        /* End */


        /* Start:/local/templates/main/assets/css/simplebar.min.css?16964144922937*/
        [data-simplebar]{position:relative;flex-direction:column;flex-wrap:wrap;justify-content:flex-start;align-content:flex-start;align-items:flex-start}.simplebar-wrapper{overflow:hidden;width:inherit;height:inherit;max-width:inherit;max-height:inherit}.simplebar-mask{direction:inherit;position:absolute;overflow:hidden;padding:0;margin:0;left:0;top:0;bottom:0;right:0;width:auto!important;height:auto!important;z-index:0}.simplebar-offset{direction:inherit!important;box-sizing:inherit!important;resize:none!important;position:absolute;top:0;left:0;bottom:0;right:0;padding:0;margin:0;-webkit-overflow-scrolling:touch}.simplebar-content-wrapper{direction:inherit;box-sizing:border-box!important;position:relative;display:block;height:100%;width:auto;max-width:100%;max-height:100%;scrollbar-width:none;-ms-overflow-style:none}.simplebar-content-wrapper::-webkit-scrollbar,.simplebar-hide-scrollbar::-webkit-scrollbar{width:0;height:0}.simplebar-content:after,.simplebar-content:before{content:' ';display:table}.simplebar-placeholder{max-height:100%;max-width:100%;width:100%;pointer-events:none}.simplebar-height-auto-observer-wrapper{box-sizing:inherit!important;height:100%;width:100%;max-width:1px;position:relative;float:left;max-height:1px;overflow:hidden;z-index:-1;padding:0;margin:0;pointer-events:none;flex-grow:inherit;flex-shrink:0;flex-basis:0}.simplebar-height-auto-observer{box-sizing:inherit;display:block;opacity:0;position:absolute;top:0;left:0;height:1000%;width:1000%;min-height:1px;min-width:1px;overflow:hidden;pointer-events:none;z-index:-1}.simplebar-track{z-index:1;position:absolute;right:0;bottom:0;pointer-events:none;overflow:hidden}[data-simplebar].simplebar-dragging .simplebar-content{pointer-events:none;user-select:none;-webkit-user-select:none}[data-simplebar].simplebar-dragging .simplebar-track{pointer-events:all}.simplebar-scrollbar{position:absolute;left:0;right:0;min-height:10px}.simplebar-scrollbar:before{position:absolute;content:'';background:#000;border-radius:7px;left:2px;right:2px;opacity:0;transition:opacity .2s linear}.simplebar-scrollbar.simplebar-visible:before{opacity:.5;transition:opacity 0s linear}.simplebar-track.simplebar-vertical{top:0;width:11px}.simplebar-track.simplebar-vertical .simplebar-scrollbar:before{top:2px;bottom:2px}.simplebar-track.simplebar-horizontal{left:0;height:11px}.simplebar-track.simplebar-horizontal .simplebar-scrollbar:before{height:100%;left:2px;right:2px}.simplebar-track.simplebar-horizontal .simplebar-scrollbar{right:auto;left:0;top:2px;height:7px;min-height:0;min-width:10px;width:auto}[data-simplebar-direction=rtl] .simplebar-track.simplebar-vertical{right:auto;left:0}.hs-dummy-scrollbar-size{direction:rtl;position:fixed;opacity:0;visibility:hidden;height:500px;width:500px;overflow-y:hidden;overflow-x:scroll}.simplebar-hide-scrollbar{position:fixed;left:0;visibility:hidden;overflow-y:scroll;scrollbar-width:none;-ms-overflow-style:none}

        /* End */


        /* Start:/local/templates/main/assets/css/swiper-bundle.min.css?169641449213934*/
        /**
 * Swiper 6.8.4
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2021 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: August 23, 2021
 */

        @font-face{font-family:swiper-icons;src:url('data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA') format('woff');font-weight:400;font-style:normal}:root{--swiper-theme-color:#007aff}.swiper-container{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-container-vertical>.swiper-wrapper{flex-direction:column}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:flex;transition-property:transform;box-sizing:content-box}.swiper-container-android .swiper-slide,.swiper-wrapper{transform:translate3d(0px,0,0)}.swiper-container-multirow>.swiper-wrapper{flex-wrap:wrap}.swiper-container-multirow-column>.swiper-wrapper{flex-wrap:wrap;flex-direction:column}.swiper-container-free-mode>.swiper-wrapper{transition-timing-function:ease-out;margin:0 auto}.swiper-container-pointer-events{touch-action:pan-y}.swiper-container-pointer-events.swiper-container-vertical{touch-action:pan-x}.swiper-slide{flex-shrink:0;width:100%;height:100%;position:relative;transition-property:transform}.swiper-slide-invisible-blank{visibility:hidden}.swiper-container-autoheight,.swiper-container-autoheight .swiper-slide{height:auto}.swiper-container-autoheight .swiper-wrapper{align-items:flex-start;transition-property:transform,height}.swiper-container-3d{perspective:1200px}.swiper-container-3d .swiper-cube-shadow,.swiper-container-3d .swiper-slide,.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top,.swiper-container-3d .swiper-wrapper{transform-style:preserve-3d}.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top{position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:none;z-index:10}.swiper-container-3d .swiper-slide-shadow-left{background-image:linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-right{background-image:linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-top{background-image:linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-bottom{background-image:linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-css-mode>.swiper-wrapper{overflow:auto;scrollbar-width:none;-ms-overflow-style:none}.swiper-container-css-mode>.swiper-wrapper::-webkit-scrollbar{display:none}.swiper-container-css-mode>.swiper-wrapper>.swiper-slide{scroll-snap-align:start start}.swiper-container-horizontal.swiper-container-css-mode>.swiper-wrapper{scroll-snap-type:x mandatory}.swiper-container-vertical.swiper-container-css-mode>.swiper-wrapper{scroll-snap-type:y mandatory}:root{--swiper-navigation-size:44px}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;width:calc(var(--swiper-navigation-size)/ 44 * 27);height:var(--swiper-navigation-size);margin-top:calc(0px - (var(--swiper-navigation-size)/ 2));z-index:10;cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--swiper-navigation-color,var(--swiper-theme-color))}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{opacity:.35;cursor:auto;pointer-events:none}.swiper-button-next:after,.swiper-button-prev:after{font-family:swiper-icons;font-size:var(--swiper-navigation-size);text-transform:none!important;letter-spacing:0;text-transform:none;font-variant:initial;line-height:1}.swiper-button-prev,.swiper-container-rtl .swiper-button-next{left:10px;right:auto}.swiper-button-prev:after,.swiper-container-rtl .swiper-button-next:after{content:'prev'}.swiper-button-next,.swiper-container-rtl .swiper-button-prev{right:10px;left:auto}.swiper-button-next:after,.swiper-container-rtl .swiper-button-prev:after{content:'next'}.swiper-button-next.swiper-button-white,.swiper-button-prev.swiper-button-white{--swiper-navigation-color:#ffffff}.swiper-button-next.swiper-button-black,.swiper-button-prev.swiper-button-black{--swiper-navigation-color:#000000}.swiper-button-lock{display:none}.swiper-pagination{position:absolute;text-align:center;transition:.3s opacity;transform:translate3d(0,0,0);z-index:10}.swiper-pagination.swiper-pagination-hidden{opacity:0}.swiper-container-horizontal>.swiper-pagination-bullets,.swiper-pagination-custom,.swiper-pagination-fraction{bottom:10px;left:0;width:100%}.swiper-pagination-bullets-dynamic{overflow:hidden;font-size:0}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{transform:scale(.33);position:relative}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active{transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main{transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev{transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev{transform:scale(.33)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next{transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next{transform:scale(.33)}.swiper-pagination-bullet{width:8px;height:8px;display:inline-block;border-radius:50%;background:#000;opacity:.2}button.swiper-pagination-bullet{border:none;margin:0;padding:0;box-shadow:none;-webkit-appearance:none;appearance:none}.swiper-pagination-clickable .swiper-pagination-bullet{cursor:pointer}.swiper-pagination-bullet:only-child{display:none!important}.swiper-pagination-bullet-active{opacity:1;background:var(--swiper-pagination-color,var(--swiper-theme-color))}.swiper-container-vertical>.swiper-pagination-bullets{right:10px;top:50%;transform:translate3d(0px,-50%,0)}.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet{margin:6px 0;display:block}.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{top:50%;transform:translateY(-50%);width:8px}.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{display:inline-block;transition:.2s transform,.2s top}.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet{margin:0 4px}.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{left:50%;transform:translateX(-50%);white-space:nowrap}.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{transition:.2s transform,.2s left}.swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{transition:.2s transform,.2s right}.swiper-pagination-progressbar{background:rgba(0,0,0,.25);position:absolute}.swiper-pagination-progressbar .swiper-pagination-progressbar-fill{background:var(--swiper-pagination-color,var(--swiper-theme-color));position:absolute;left:0;top:0;width:100%;height:100%;transform:scale(0);transform-origin:left top}.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill{transform-origin:right top}.swiper-container-horizontal>.swiper-pagination-progressbar,.swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite{width:100%;height:4px;left:0;top:0}.swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,.swiper-container-vertical>.swiper-pagination-progressbar{width:4px;height:100%;left:0;top:0}.swiper-pagination-white{--swiper-pagination-color:#ffffff}.swiper-pagination-black{--swiper-pagination-color:#000000}.swiper-pagination-lock{display:none}.swiper-scrollbar{border-radius:10px;position:relative;-ms-touch-action:none;background:rgba(0,0,0,.1)}.swiper-container-horizontal>.swiper-scrollbar{position:absolute;left:1%;bottom:3px;z-index:50;height:5px;width:98%}.swiper-container-vertical>.swiper-scrollbar{position:absolute;right:3px;top:1%;z-index:50;width:5px;height:98%}.swiper-scrollbar-drag{height:100%;width:100%;position:relative;background:rgba(0,0,0,.5);border-radius:10px;left:0;top:0}.swiper-scrollbar-cursor-drag{cursor:move}.swiper-scrollbar-lock{display:none}.swiper-zoom-container{width:100%;height:100%;display:flex;justify-content:center;align-items:center;text-align:center}.swiper-zoom-container>canvas,.swiper-zoom-container>img,.swiper-zoom-container>svg{max-width:100%;max-height:100%;object-fit:contain}.swiper-slide-zoomed{cursor:move}.swiper-lazy-preloader{width:42px;height:42px;position:absolute;left:50%;top:50%;margin-left:-21px;margin-top:-21px;z-index:10;transform-origin:50%;animation:swiper-preloader-spin 1s infinite linear;box-sizing:border-box;border:4px solid var(--swiper-preloader-color,var(--swiper-theme-color));border-radius:50%;border-top-color:transparent}.swiper-lazy-preloader-white{--swiper-preloader-color:#fff}.swiper-lazy-preloader-black{--swiper-preloader-color:#000}@keyframes swiper-preloader-spin{100%{transform:rotate(360deg)}}.swiper-container .swiper-notification{position:absolute;left:0;top:0;pointer-events:none;opacity:0;z-index:-1000}.swiper-container-fade.swiper-container-free-mode .swiper-slide{transition-timing-function:ease-out}.swiper-container-fade .swiper-slide{pointer-events:none;transition-property:opacity}.swiper-container-fade .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-fade .swiper-slide-active,.swiper-container-fade .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube{overflow:visible}.swiper-container-cube .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1;visibility:hidden;transform-origin:0 0;width:100%;height:100%}.swiper-container-cube .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-cube.swiper-container-rtl .swiper-slide{transform-origin:100% 0}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-next,.swiper-container-cube .swiper-slide-next+.swiper-slide,.swiper-container-cube .swiper-slide-prev{pointer-events:auto;visibility:visible}.swiper-container-cube .swiper-slide-shadow-bottom,.swiper-container-cube .swiper-slide-shadow-left,.swiper-container-cube .swiper-slide-shadow-right,.swiper-container-cube .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}.swiper-container-cube .swiper-cube-shadow{position:absolute;left:0;bottom:0px;width:100%;height:100%;opacity:.6;z-index:0}.swiper-container-cube .swiper-cube-shadow:before{content:'';background:#000;position:absolute;left:0;top:0;bottom:0;right:0;filter:blur(50px)}.swiper-container-flip{overflow:visible}.swiper-container-flip .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1}.swiper-container-flip .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-flip .swiper-slide-active,.swiper-container-flip .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-flip .swiper-slide-shadow-bottom,.swiper-container-flip .swiper-slide-shadow-left,.swiper-container-flip .swiper-slide-shadow-right,.swiper-container-flip .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}
        /* End */


        /* Start:/local/templates/main/assets/css/owl.carousel.min.css?16964144923351*/
        /**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
        .owl-carousel,.owl-carousel .owl-item{-webkit-tap-highlight-color:transparent;position:relative}.owl-carousel{display:none;width:100%;z-index:1}.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y;touch-action:manipulation;-moz-backface-visibility:hidden}.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-item,.owl-carousel .owl-wrapper{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0)}.owl-carousel .owl-item{min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-touch-callout:none}.owl-carousel .owl-item img{display:block;width:100%}.owl-carousel .owl-dots.disabled,.owl-carousel .owl-nav.disabled{display:none}.no-js .owl-carousel,.owl-carousel.owl-loaded{display:block}.owl-carousel .owl-dot,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-nav .owl-prev{cursor:pointer;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel .owl-nav button.owl-next,.owl-carousel .owl-nav button.owl-prev,.owl-carousel button.owl-dot{background:0 0;color:inherit;border:none;padding:0!important;font:inherit}.owl-carousel.owl-loading{opacity:0;display:block}.owl-carousel.owl-hidden{opacity:0}.owl-carousel.owl-refresh .owl-item{visibility:hidden}.owl-carousel.owl-drag .owl-item{-ms-touch-action:pan-y;touch-action:pan-y;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-grab{cursor:move;cursor:grab}.owl-carousel.owl-rtl{direction:rtl}.owl-carousel.owl-rtl .owl-item{float:right}.owl-carousel .animated{animation-duration:1s;animation-fill-mode:both}.owl-carousel .owl-animated-in{z-index:0}.owl-carousel .owl-animated-out{z-index:1}.owl-carousel .fadeOut{animation-name:fadeOut}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.owl-height{transition:height .5s ease-in-out}.owl-carousel .owl-item .owl-lazy{opacity:0;transition:opacity .4s ease}.owl-carousel .owl-item .owl-lazy:not([src]),.owl-carousel .owl-item .owl-lazy[src^=""]{max-height:0}.owl-carousel .owl-item img.owl-lazy{transform-style:preserve-3d}.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000}.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url(/local/templates/main/assets/css/owl.video.play.png) no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;transition:transform .1s ease}.owl-carousel .owl-video-play-icon:hover{-ms-transform:scale(1.3,1.3);transform:scale(1.3,1.3)}.owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn{display:none}.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;background-size:contain;transition:opacity .4s ease}.owl-carousel .owl-video-frame{position:relative;z-index:1;height:100%;width:100%}
        /* End */


        /* Start:/local/templates/main/assets/css/owl.theme.default.min.css?16964144921013*/
        /**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
        .owl-theme .owl-dots,.owl-theme .owl-nav{text-align:center;-webkit-tap-highlight-color:transparent}.owl-theme .owl-nav{margin-top:10px}.owl-theme .owl-nav [class*=owl-]{color:#FFF;font-size:14px;margin:5px;padding:4px 7px;background:#D6D6D6;display:inline-block;cursor:pointer;border-radius:3px}.owl-theme .owl-nav [class*=owl-]:hover{background:#869791;color:#FFF;text-decoration:none}.owl-theme .owl-nav .disabled{opacity:.5;cursor:default}.owl-theme .owl-nav.disabled+.owl-dots{margin-top:10px}.owl-theme .owl-dots .owl-dot{display:inline-block;zoom:1}.owl-theme .owl-dots .owl-dot span{width:10px;height:10px;margin:5px 7px;background:#D6D6D6;display:block;-webkit-backface-visibility:visible;transition:opacity .2s ease;border-radius:30px}.owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#869791}
        /* End */


        /* Start:/local/templates/main/css/fonts.css?16964144924255*/
        /*Inter*/
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/inter-300.ttf');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/inter-400.ttf');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 0;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/inter-500.ttf');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/inter-600.ttf');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/inter-700.ttf');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/inter-800.ttf');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/inter-900.ttf');
        }
        /*Avenir Next Cyr*/
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 100;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-Thin.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 200;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-UltraLight.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 300;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-Light.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-Regular.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 450;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-Medium.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 600;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-Demi.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 750;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-Bold.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 800;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-Heavy.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: italic;
            font-weight: 100;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-ThinItalic.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: italic;
            font-weight: 200;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-UltraLightIt.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: italic;
            font-weight: 300;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-LightItalic.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: italic;
            font-weight: 400;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-Italic.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: italic;
            font-weight: 500;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-MediumItalic.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: italic;
            font-weight: 600;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-DemiItalic.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: italic;
            font-weight: 750;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-BoldItalic.ttf');
        }
        @font-face {
            font-family: 'Avenir Next Cyr';
            font-style: italic;
            font-weight: 800;
            font-display: fallback;
            src: url('/local/templates/main/css/../fonts/AvenirNextCyr-HeavyItalic.ttf');
        }
        @font-face {
            font-family: 'AvantGardeGothic';
            font-display: swap;
            src: url('/local/templates/main/css/../fonts/AvantGardeGothicC-Demi.otf');
        }
        /* End */


        /* Start:/local/templates/main/css/style.css?1702014353180679*/
        .ppix {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99999999;
            opacity: .5;
            pointer-events: none;
        }
        /* ------------------ */
        * {
            padding: 0;
            margin: 0;
            border: 0;

        }

        *,
        :after,
        :before {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        :active,
        :focus {
            outline: 0;
        }
        a:active,
        a:focus {
            outline: 0;
        }
        aside,
        footer,
        header,
        nav {
            display: block;
        }
        body,
        html {
            height: 100%;
            width: 100%;
            line-height: 132%;
            font-size: 20px;
            -ms-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: 'Avenir Next Cyr', sans-serif;
        }
        body {
            color: #2C3148;
            background: #fff;
        }
        body.fixed-menu {
            padding-top: 164px;
        }
        body.fixed-menu.sticky-menu {
            padding-top: 0;
        }
        body.sticky-menu {
            height: auto;
        }
        body.body-overflow-hidden {
            overflow: hidden;
            padding-right: 17px;
        }
        button,
        input,
        textarea {
            font-family: inherit;
        }
        input::-ms-clear {
            display: none;
        }
        button {
            cursor: pointer;
        }
        button::-moz-focus-inner {
            padding: 0;
            border: 0;
        }
        a,
        a:visited {
            text-decoration: none;
        }
        img {
            vertical-align: top;
            max-width: 100%;
        }
        h2,.h2,
        h3,.h3,
        h4,.h4,
        h5,.h5,
        h6 {
            font-weight: 750;
            text-transform: uppercase;
        }

        h1, .h1 {
            font-weight: 750;
            font-size: 78px;
            line-height: 88px;
            color: #005D9F;
        }
        h2, .h2 {
            font-size: 48px;
            line-height: 56px;
        }
        h3, .h3 {
            font-size: 40px;
            line-height: 48px;
        }
        h4, .h4 {
            font-size: 32px;
            line-height: 40px;
        }
        h5, .h5 {
            font-size: 24px;
            line-height: 32px;
        }
        h6, .h6 {
            font-size: 20px;
            line-height: 32px;
        }
        form .button {
            z-index: 1;
        }
        .p-Inter {
            font-family: 'Inter';
            font-weight: 500;
            font-size: 26px;
            line-height: 36px;
        }
        .t1 {
            font-size: 20px;
            font-weight: 400;
            line-height: 32px;
        }
        .t1 + .t1 {
            margin-top: 16px;
        }
        .t1-mb40 {
            margin-bottom: 40px;
        }
        .t1-mt32 {
            margin-top: 32px;
        }
        .t2 {
            font-size: 20px;
            font-weight: 600;
            line-height: 32px;
        }
        .t2_marginTop {
            margin-top: 24px;
        }
        .t3 {
            font-weight: 300;
            font-size: 18px;
            line-height: 24px;
        }
        .p1 {
            font-weight: 750;
            font-size: 64px;
            line-height: 80px;
        }
        .p1_margin_top {
            margin-top: 56px;
        }
        .p2 {
            font-weight: 450;
            font-size: 26px;
            line-height: 40px;
        }
        .p3 {
            font-size: 28px;
            font-weight: 600;
            line-height: 40px;
            text-transform: uppercase;
        }
        .c1 {
            font-style: italic;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
        }
        .c1-mt16 {
            display: block;
            margin-top: 16px;
        }
        .c3 {
            font-weight: 750;
            font-size: 18px;
            line-height: 24px;
            text-transform: uppercase;
        }
        a:not([class]) {
            position: relative;
            color: #005D9F;
            /* transition:
        color 0.2s ease 0s; */
            text-decoration: underline;
            text-underline-offset: 4px;
        }
        a[href*="tel"]:not([class]) {
            text-decoration: none;
        }
        /* a:not([class])::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: #005D9F;
    opacity: 1;
    transition: opacity 0.2s ease 0s;
} */
        a:not([class]):hover {
            color: #2C3148;
            text-decoration: none;
        }
        /* a:not([class]):hover:before {
    opacity: 0;
} */
        /* td a:not([class])::before {
    display: none;
} */
        td a:not([class]) {
            border-bottom: 1px solid #005D9F;
            transition: .2s;
            text-decoration: none;
        }
        td a.org-name-without-link {
            transition: .2s;
            text-decoration: none;
            color: #005D9F;
        }
        td a:not([class]):hover {
            border-color: transparent;
        }
        .color-white {
            color: #FFFFFF;
        }
        .color-blue {
            color: #005D9F;
        }
        .color-gray {
            color: #ABADB6;
        }
        .color-gray--dip {
            color: #787F91;
        }
        .h1-marginBot {
            margin-bottom: 64px;
        }
        .h2-marginBot {
            margin-bottom: 52px;
        }
        .h3-marginBot {
            margin-bottom: 52px;
        }
        .h4-marginBot {
            margin-bottom: 52px;
        }
        .h5-marginBot {
            margin-bottom: 52px;
        }
        .h6-marginBot {
            margin-bottom: 32px;
        }
        .h1-relative {
            position: relative;
            z-index: 1;
        }
        .h5_orange-border {
            padding-bottom: 30px;
            margin-bottom: 26px;
            border-bottom: 2px solid #F08400;
        }
        .h2-noPDA {
            display: block;
        }
        .h2-noPC {
            display: none;
        }
        .mobile-on {
            display: none;
        }
        .mobile-off {
            display: block;
        }

        /*Ð¢ÐµÐºÑÑ‚Ð¾Ð²Ñ‹Ð¹ Ð±Ð»Ð¾Ðº*/
        .text-block {
            line-height: 160%;
        }
        .text-block h1,
        .text-block .h1,
        .text-block h2,
        .text-block .h2,
        .text-block h3,
        .text-block .h3,
        .text-block h4,
        .text-block .h4,
        .text-block h5,
        .text-block .h5 {
            margin: 80px 0 52px;
        }
        /* h1 */
        .text-block h1 + h1, .text-block h1 + h2, .text-block h1 + h3, .text-block h1 + h4, .text-block h1 + h5, .text-block h1 + h6,
        .text-block .h1 + h1, .text-block .h1 + h2, .text-block .h1 + h3, .text-block .h1 + h4, .text-block .h1 + h5, .text-block .h1 + h6,
        .text-block h1 + .h1, .text-block h1 + .h2, .text-block h1 + .h3, .text-block h1 + .h4, .text-block h1 + .h5, .text-block h1 + .h6,
        .text-block .h1 + .h1, .text-block .h1 + .h2, .text-block .h1 + .h3, .text-block .h1 + .h4, .text-block .h1 + .h5, .text-block .h1 + .h6,
            /* h2 */
        .text-block h2 + h1, .text-block h2 + h2, .text-block h2 + h3, .text-block h2 + h4, .text-block h2 + h5, .text-block h2 + h6,
        .text-block .h2 + h1, .text-block .h2 + h2, .text-block .h2 + h3, .text-block .h2 + h4, .text-block .h2 + h5, .text-block .h2 + h6,
        .text-block h2 + .h1, .text-block h2 + .h2, .text-block h2 + .h3, .text-block h2 + .h4, .text-block h2 + .h5, .text-block h2 + .h6,
        .text-block .h2 + .h1, .text-block .h2 + .h2, .text-block .h2 + .h3, .text-block .h2 + .h4, .text-block .h2 + .h5, .text-block .h2 + .h6,
            /* h3 */
        .text-block h3 + h1, .text-block h3 + h2, .text-block h3 + h3, .text-block h3 + h4, .text-block h3 + h5, .text-block h3 + h6,
        .text-block h3 + .h1, .text-block h3 + .h2, .text-block h3 + .h3, .text-block h3 + .h4, .text-block h3 + .h5, .text-block h3 + .h6,
        .text-block .h3 + h1, .text-block .h3 + h2, .text-block .h3 + h3, .text-block .h3 + h4, .text-block .h3 + h5, .text-block .h3 + h6,
        .text-block .h3 + .h1, .text-block .h3 + .h2, .text-block .h3 + .h3, .text-block .h3 + .h4, .text-block .h3 + .h5, .text-block .h3 + .h6,
            /* h4 */
        .text-block h4 + h1, .text-block h4 + h2, .text-block h4 + h3, .text-block h4 + h4, .text-block h4 + h5, .text-block h4 + h6,
        .text-block h4 + .h1, .text-block h4 + .h2, .text-block h4 + .h3, .text-block h4 + .h4, .text-block h4 + .h5, .text-block h4 + .h6,
        .text-block .h4 + h1, .text-block .h4 + h2, .text-block .h4 + h3, .text-block .h4 + h4, .text-block .h4 + h5, .text-block .h4 + h6,
        .text-block .h4 + .h1, .text-block .h4 + .h2, .text-block .h4 + .h3, .text-block .h4 + .h4, .text-block .h4 + .h5, .text-block .h4 + .h6,
            /* h5 */
        .text-block h5 + h1, .text-block h5 + h2, .text-block h5 + h3, .text-block h5 + h4, .text-block h5 + h5, .text-block h5 + h6,
        .text-block h5 + .h1, .text-block h5 + .h2, .text-block h5 + .h3, .text-block h5 + .h4, .text-block h5 + .h5, .text-block h5 + .h6,
        .text-block .h5 + h1, .text-block .h5 + h2, .text-block .h5 + h3, .text-block .h5 + h4, .text-block .h5 + h5, .text-block .h5 + h6,
        .text-block .h5 + .h1, .text-block .h5 + .h2, .text-block .h5 + .h3, .text-block .h5 + .h4, .text-block .h5 + .h5, .text-block .h5 + .h6,
            /* h6 */
        .text-block h6 + h1, .text-block h6 + h2, .text-block h6 + h3, .text-block h6 + h4, .text-block h6 + h5, .text-block h6 + h6,
        .text-block h6 + .h1, .text-block h6 + .h2, .text-block h6 + .h3, .text-block h6 + .h4, .text-block h6 + .h5, .text-block h6 + .h6,
        .text-block .h6 + h1, .text-block .h6 + h2, .text-block .h6 + h3, .text-block .h6 + h4, .text-block .h6 + h5, .text-block .h6 + h6,
        .text-block .h6 + .h1, .text-block .h6 + .h2, .text-block .h6 + .h3, .text-block .h6 + .h4, .text-block .h6 + .h5, .text-block .h6 + .h6 {
            margin-top: 0;
        }
        .text-block > h1:first-child, .text-block > .h1:first-child,
        .text-block > h2:first-child, .text-block > .h2:first-child,
        .text-block > h3:first-child, .text-block > .h3:first-child,
        .text-block > h4:first-child, .text-block > .h4:first-child,
        .text-block > h5:first-child, .text-block > .h5:first-child,
        .text-block > h6:first-child, .text-block > .h6:first-child {
            margin-top: 0;
        }
        .text-block_marginBot {
            margin-bottom: 40px;
        }
        .text-block p {
            margin-bottom: 16px;
        }
        .text-block .p2 {
            margin-bottom: 24px;
        }
        .text-block p:last-child {
            margin-bottom: 0;
        }

        /*Ð¡Ð¿Ð¸ÑÐºÐ¸*/
        ol,
        ul {
            list-style: none;
            counter-reset: point;
            line-height: 160%;
        }
        ol li {
            position: relative;
            margin-bottom: 16px;
            padding-left: 42px;
        }
        ol li::before {
            content: counter(point) ".";
            counter-increment: point 1;
            position: absolute;
            left: 0;
            top: 0;
            color: #005D9F;
            font-weight: 600;
        }
        ol ol {
            counter-reset: point2;
            margin: 16px 0 0;
        }
        ol > ol {
            margin-left: 42px;
        }
        ol ol ol {
            counter-reset: point3;
        }
        ol ol li {
            padding-left: 60px;
        }
        ol ol ol li {
            padding-left: 60px;
        }
        ol ol li::before {
            content: counter(point) "." counter(point2) ".";
            counter-increment: point2 1;
        }
        ol ol ol li:nth-child(1)::before {
            content: "Ð°)";
        }
        ol ol ol li:nth-child(2)::before {
            content: "Ð±)";
        }
        ol ol ol li:nth-child(3)::before {
            content: "Ð²)";
        }
        ol ol ol li:nth-child(4)::before {
            content: "Ð³)";
        }
        ol ol ol li:nth-child(5)::before {
            content: "Ð´)";
        }
        ol ol ol li:nth-child(6)::before {
            content: "Ðµ)";
        }
        ol ol ol li:nth-child(7)::before {
            content: "Ñ‘)";
        }
        ol ol ol li:nth-child(8)::before {
            content: "Ð¶)";
        }
        ol ol ol li:nth-child(9)::before {
            content: "Ð·)";
        }
        ol ol ol li:nth-child(10)::before {
            content: "Ð¸)";
        }
        ol ol ol li:nth-child(11)::before {
            content: "Ðº)";
        }
        ol ol ol li:nth-child(12)::before {
            content: "Ð»)";
        }
        ol ol ol li:nth-child(13)::before {
            content: "Ð¼)";
        }
        ol ol ol li:nth-child(14)::before {
            content: "Ð½)";
        }
        ol ol ol li:nth-child(15)::before {
            content: "Ð¾)";
        }
        ol ol ol li:nth-child(16)::before {
            content: "Ð¿)";
        }
        ol ol ol li:nth-child(17)::before {
            content: "Ñ€)";
        }
        ol ol ol li:nth-child(18)::before {
            content: "Ñ)";
        }
        ol ol ol li:nth-child(19)::before {
            content: "Ñ‚)";
        }
        ol ol ol li:nth-child(20)::before {
            content: "Ñƒ)";
        }
        ol ol ol li:nth-child(21)::before {
            content: "Ñ„)";
        }
        ol ol ol li:nth-child(22)::before {
            content: "Ñ…)";
        }
        ol ol ol li:nth-child(23)::before {
            content: "Ñ†)";
        }
        ol ol ol li:nth-child(24)::before {
            content: "Ñ‡)";
        }
        ol ol ol li:nth-child(25)::before {
            content: "Ñˆ)";
        }
        ol ol ol li:nth-child(26)::before {
            content: "Ñ‰)";
        }
        ol ol ol li:nth-child(27)::before {
            content: "Ñ‹)";
        }
        ol ol ol li:nth-child(28)::before {
            content: "Ñ)";
        }
        ol ol ol li:nth-child(29)::before {
            content: "ÑŽ)";
        }
        ol ol ol li:nth-child(30)::before {
            content: "Ñ)";
        }
        .scroll-info ol li {
            margin-bottom: 24px;
            padding-left: 64px;
        }
        .scroll-info ol li:last-child {
            margin-bottom: 0;
        }
        .text-block ul li {
            position: relative;
            padding-left: 40px;
            margin-bottom: 16px;
        }
        .text-block ul li::before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            position: absolute;
            top: 12px;
            left: 12px;
            background: #005D9F;
        }
        .text-block ul ul {
            margin-top: 16px;
            margin-left: -12px;
        }
        .text-block ul > ul {
            margin-left: 30px;
        }
        .text-block ul ul li::before {
            background: #787F91;
        }
        .text-block ul ul ul li::before {
            background: #ABADB6;
        }

        .text-block ul.ul2 li::before {
            width: 17px;
            height: 9px;
            top: 9px;
            left: 9px;
            background: none;
            border-bottom: 2px solid #005D9F;
            border-left: 2px solid #005D9F;
            transform: rotate(-45deg);
        }
        .text-block ul.ul2 ul li::before {
            width: 8px;
            height: 8px;
            top: 12px;
            left: 12px;
            background: #005D9F;
            border: none;
            transform: none;
        }
        .text-block ul.ul2 ul ul li::before {
            background: #787F91;
        }
        .text-block ul.ul2 ul ul ul li::before {
            background: #ABADB6;
        }
        .container {
            margin: 0 auto;
            width: calc(100% - 252px);
            max-width: 1428px;
        }
        .container_relative {
            position: relative;
        }
        .container_height {
            height: 100%;
        }
        .block {
            width: 100%;
            padding: 32px 0 32px;
        }
        .block2 {
            width: 100%;
            padding: 52px 0;
        }
        .block-top {
            width: 100%;
            padding: 0 0 88px;
        }
        .block_line {
            position: relative;
            padding-top: 52px;
        }
        .block_line::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 252px);
            max-width: 1428px;
            height: 3px;
            background: #d5e2f7;
            opacity: 0.5;
        }
        .block_line-top::before {
            top: 0;
        }
        .block_gray {
            background: #EBF3FF;
        }
        .block_blue {
            background: #005D9F;
            color: #fff;
        }
        .block_blue .h1 {
            color: #fff;
        }
        .block_overflow-hidden {
            overflow: hidden;
        }
        .block_margin-remove {
            margin: -44px 0;
        }
        .block_relative {
            position: relative;
            z-index: 1;
        }
        /* ------------------ */

        /*header*/
        .header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            padding: 24px 28px;
            width: 100%;
            position: relative;
            top: 72px;
            left: 0;
            z-index: 100;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        body.fixed-menu .header {
            position: fixed;
        }
        body.sticky-menu .header {
            position: sticky;
        }
        .header_white {
            background: #fff;
            color: #005D9F;
        }
        .header-item_border-left {
            padding-left: 56px;
            position: relative;
        }
        .header-item_border-left::before {
            content: '';
            display: block;
            width: 2px;
            height: 40px;
            position: absolute;
            top: 50%;
            left: 28px;
            transform: translate(0,-50%);
            background: #D5E2F7;
        }
        .header-item_left-auto {
            margin-left: auto;
        }
        .header-item_small {
            margin-left: 28px;
            min-width: 20px;
        }
        .logo .logo_in-head {
            width: 149px;
        }
        /* .logo a::before {
    display: none;
} */
        .logo a {
            text-decoration: none;
        }
        .logo img {
            width: 100%;
        }
        .header-link {
            color: inherit;
            font-weight: 600;
            font-size: 14px;
            line-height: 20px;
            text-transform: uppercase;
            transition: .2s;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            position: relative;
        }
        .header-link:hover {
            color: #F08400;
        }
        .header-link::before {
            content: '';
            display: block;
            width: 0px;
            height: 4px;
            position: absolute;
            bottom: -6px;
            left: 50%;
            transform: translate(-50%,0);
            background: #F08400;
            transition: .2s;
        }
        .header-link_selected {
            color: #2C3148;
        }
        .header-link_selected::before {
            width: 100%;
        }
        .header-link_right-0 {
            margin-right: 0;
        }
        .js-open-menu-sites {
            cursor: pointer;
        }
        .header__ico {
            width: 24px;
            height: 24px;
            cursor: pointer;
        }
        .header__ico_margin-right {
            margin-right: 5px;
        }
        .header-search-ico {
            position: relative;
            height: 24px;
            width: 24px;
        }
        .header-search-ico .header__ico {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .header-search-ico .header__ico path {
            transition: .2s;
        }
        .header-search-ico .header__ico:hover path {
            stroke: #2C3148;
        }

        /* Ð¡Ñ‚Ñ€Ð¾ÐºÐ° Ð¿Ð¾Ð¸ÑÐºÐ° Ð² ÑˆÐ°Ð¿ÐºÐµ */
        .header-search__form-wrapper {
            position: absolute;
            right: 0;
            top: -8px;
            /* top: 50%; */
            /* transform: translateY(-50%); */
            width: 362px;
            height: 259px;
            overflow: hidden;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease 0.6s;
        }
        .header-search__form-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background: #ffffff;
        }
        .header-search__form-wrapper--show {
            opacity: 1;
            pointer-events: all;
            transition: opacity 0.3s ease 0s;
        }
        .header-search__form {
            position: absolute;
            right: 0;
            top: 0;
            /* top: 50%; */
            /* transform: translate(100%, -50%); */
            transform: translateX(100%);
            display: flex;
            align-items: center;
            width: 100%;
            height: 40px;
            background: #ffffff;
            transition: transform 0.2s ease 0.3s;
        }
        .header-search__form-wrapper--show .header-search__form {
            /* transform: translate(0, -50%); */
            transform: translateX(0);
            transition: transform 0.2s ease 0.3s;
        }
        .header-search__form input {
            width: 100%;
            height: 30px;
            padding: 0 40px;
            background: none;
            border-bottom: 1px solid #2C3148;
        }
        .header-search__form button {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            background: none;
        }
        .header-search__form-ico {
            display: block;
        }
        .header-search__form-ico--pda {
            display: none;
        }
        .header-search__form button svg path {
            transition:
                fill 0.2s ease 0s,
                stroke 0.2s ease 0s;
        }
        .header-search__form button:hover .header-search__form-ico path {
            stroke: #2C3148;
        }
        .header-search__form-close {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            opacity: 1;
            cursor: pointer;
        }
        .header-search__form-close::before,
        .header-search__form-close::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 16px;
            height: 2px;
            background: #2C3148;
            transition:
                background 0.2s ease 0s,
                transform 0.2s ease 0s;
        }
        .header-search__form-wrapper--show .header-search__form-close::before,
        .header-search__form-wrapper--show .header-search__form-close::after {
            transition:
                background 0.2s ease 0s,
                transform 0.2s ease 0.6s;
        }
        .header-search__form-wrapper--show .header-search__form-close::before {
            transform: translate(-50%, -50%) rotateZ(45deg);
        }
        .header-search__form-wrapper--show .header-search__form-close::after {
            transform: translate(-50%, -50%) rotateZ(-45deg);
        }
        .header-search__form-close:hover::before,
        .header-search__form-close:hover::after {
            background: #F08400;
        }
        .header-search__list {
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            display: none;
            width: calc(100% - 10px);
            height: 208px;
            padding: 8px 24px 8px 16px;
            background: #ffffff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header-search__list-inner {
            height: 100%;
        }
        .header-search__list-inner ul li {
            font-size: 16px;
            font-weight: 400;
            line-height: 140%;
        }
        .header-search__list-inner ul li + li {
            margin-top: 24px;
        }
        .header-search__list-inner ul li a {
            color: #2C3148;
            transition: color 0.2s ease 0s;
            text-decoration: none;
        }
        /* .header-search__list-inner ul li a::before {
    display: none;
} */
        .header-search__list-inner ul li:hover a {
            color: #005D9F;
        }
        .header-search__list .simplebar-track.simplebar-vertical {
            right: -14px;
        }

        /*ÐœÐµÐ½ÑŽ Ð² ÑˆÐ°Ð¿ÐºÐµ*/
        .header-menu__list {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .header-menu__item {
            margin-right: 28px;
            display: block;
            position: relative;
        }

        /*ÐœÐµÐ½ÑŽ Ð²Ñ‚Ð¾Ñ€Ð¾Ð³Ð¾ ÑƒÑ€Ð¾Ð²Ð½Ñ*/
        .header-menu__sub-menu {
            position: absolute;
            top: calc(100% + 36px);
            left: -32px;
            z-index: 1;
            padding: 32px;
            background: #fff;
            box-shadow: 0px 2px 8px rgba(33, 35, 46, 0.08);
            width: 360px;
            list-style: none;
            transition: .2s;
            opacity: 0;
            pointer-events: none;
            transform: translate(0,36px);
        }
        .header-menu__sub-menu::before {
            content: '';
            display: block;
            width: 100%;
            height: 36px;
            position: absolute;
            top: -36px;
            left: 0;
        }
        .header-menu__item.active .header-menu__sub-menu {
            opacity: 1;
            pointer-events: all;
            transform: translate(0,0px);
        }
        .header-menu__sub-item {
            padding-bottom: 16px;
            display: block;
        }
        .header-menu__sub-item:last-child {
            margin-bottom: 0;
        }
        .header-menu__sub-item ul {
            display: none;
        }
        .header-menu__sub-link {
            font-weight: 450;
            font-size: 14px;
            line-height: 20px;
            text-transform: uppercase;
            color: #2C3148;
            transition: .2s;
            display: block;
        }
        .header-menu__sub-link:hover {
            color:#005D9F;
        }

        /* ÐœÐµÐ½ÑŽ 3Ð³Ð¾ ÑƒÑ€Ð¾Ð²Ð½Ñ */
        .header .header-menu__sub-item {
            position: relative;
        }
        .header .header-menu__sub-item ul {
            display: block;
        }
        .header .header-menu__sub-item .header-menu__sub-menu {
            top: -32px;
            left: calc(100% + 32px);
            opacity: 0 !important;
            transform: translate(0,36px) !important;
            pointer-events: none !important;
        }
        .header .header-menu__sub-item .header-menu__sub-menu::before {
            top:36px;
            left: -32px;
            width: 32px;
            height: 100%;
        }
        .header .header-menu__sub-item.active .header-menu__sub-menu {
            opacity: 1 !important;
            transform: translate(0,0) !important;
            pointer-events: all !important;
        }

        /* === */
        .header-menu .header-menu__sub-item.have-sub {
            position: relative;
            padding-right: 16px;
        }
        .header-menu .header-menu__sub-item.have-sub::after {
            content: '';
            position: absolute;
            top: 10px;
            right: 0;
            transform: translateY(-50%) rotateZ(-45deg);
            width: 8px;
            height: 8px;
            border: 2px solid #F08400;
            border-top: none;
            border-left: none;
        }

        /* ÐœÐµÐ½ÑŽ "Ð’ÑÐµ ÑÐ°Ð¹Ñ‚Ñ‹" */
        .header__sites {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: translateY(-100%);
            z-index: 510;
            width: 100%;
            height: 100%;
            background: #FFFFFF;
            opacity: 0;
            transition:
                opacity 0.2s ease 0.2s,
                transform 0.2s ease 0.2s;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .header__sites-inner > .container {
            padding-bottom: 88px;
        }
        .header__sites-active {
            transform: translateY(0);
            opacity: 1;
            transition:
                opacity 0.2s ease 0s,
                transform 0.2s ease 0s;
        }
        .header__sites .header {
            position: relative !important;
            padding-right: 0;
            padding-left: 0;
        }
        .header__inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header__sites-close {
            position: relative;
            width: 32px;
            height: 32px;
            cursor: pointer;
        }
        .header__sites-close::before,
        .header__sites-close::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 2px;
            background: #005D9F;
            transition: .2s;
            transition: all 0.2s ease 0s;
        }
        .header__sites-close:hover::before,
        .header__sites-close:hover::after {
            background: #F08400;
        }
        .header__sites-active .header__sites-close::before,
        .header__sites-active .header__sites-close::after {
            transition:
                background 0.2s ease 0s,
                transform 0.2s ease 0.3s;
        }
        .header__sites-active .header__sites-close::before {
            transform: translate(-50%, -50%) rotateZ(45deg);
        }
        .header__sites-active .header__sites-close::after {
            transform: translate(-50%, -50%) rotateZ(-45deg);
        }
        .header__sites-wrapper {
            display: flex;
            width: 100%;
            border-top: 2px solid #D5E2F7;
        }
        .header__sites-wrapper--pc {
            display: flex;
        }
        .header__sites-wrapper--pda {
            display: none;
        }
        .header__sites h4 {
            margin: 72px 0 24px 0;
        }
        .header__sites-list {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            width: calc(33.33333%);
            padding-top: 36px;
            padding-left: 36px;
        }
        .header__sites-list:first-child {
            padding-left: 0;
        }
        .header__sites-item {
            /* width: calc(33.33333%); */
            margin-bottom: 12px;
        }
        .header__sites-item a {
            display: inline-block;
            padding: 4px 0;
            color: #2C3148;
            font-size: 16px;
            line-height: 24px;
            transition: .2s;
            text-transform: uppercase;
            text-decoration: none;
        }
        .header__sites-item a:hover {
            color: #005D9F;
        }
        /* .header__sites-item a::before {
    display: none;
} */
        .header__sites-item a:not([href]) {
            cursor: default;
            color: #2C3148 !important;
        }

        /* ÐœÐ¾Ð±Ð¸Ð»ÑŒÐ½Ð¾Ðµ Ð¼ÐµÐ½ÑŽ */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: translateY(-100%);
            z-index: 500;
            display: none;
            width: 100%;
            height: 100%;
            background: #ffffff;
            transition:
                transform 0.4s ease 0.2s;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .mobile-menu-active {
            transform: translateY(0);
            transition:
                transform 0.4s ease 0s;
        }
        .mobile-menu .header {
            position: relative !important;
            padding-right: 0;
            padding-left: 0;
            top: 0;
        }
        .mobile-menu-close {
            position: relative;
            width: 32px;
            height: 32px;
            cursor: pointer;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
            -webkit-tap-highlight-color: transparent;
        }
        .mobile-menu-close::before,
        .mobile-menu-close::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 22px;
            height: 2px;
            background: #005D9F;
            transition:
                background 0.2s ease 0s,
                transform 0.2s ease 0s;
        }
        .mobile-menu-close:hover::before,
        .mobile-menu-close:hover::after {
            background: #F08400;
        }
        .mobile-menu-active .mobile-menu-close::before,
        .mobile-menu-active .mobile-menu-close::after {
            transition:
                background 0.2s ease 0s,
                transform 0.2s ease 0.4s;
        }
        .mobile-menu-active .mobile-menu-close::before {
            transform: translate(-50%, -50%) rotateZ(45deg);
        }
        .mobile-menu-active .mobile-menu-close::after {
            transform: translate(-50%, -50%) rotateZ(-45deg);
        }
        .mobile-menu__inner {
            position: relative;
            height: calc(100% - 116px);
        }
        .mobile-menu__links {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            margin-bottom: 40px;
        }
        .mobile-menu__inner .header-menu__list {
            display: block;
            width: 100%;
            margin-top: 24px;
        }
        .mobile-menu__inner .header-menu__item  {
            margin-right: 0;
        }
        .mobile-menu__inner .header-menu__item-notimportant  {
            display: block;
        }
        .mobile-menu__inner .header-link {
            position: relative;
            padding: 20px 0;
            border-bottom: 1px solid #D5E2F7;
            font-size: 16px;
        }
        .mobile-menu__inner .header-link::before {
            display: none;
        }
        .mobile-menu__inner .header-link.have-sub::after {
            content: '';
            position: absolute;
            top: 50%;
            right: 11px;
            transform: rotateZ(-45deg) translateY(-50%);
            width: 12px;
            height: 12px;
            border: 2px solid #F08400;
            border-top: none;
            border-left: none;
        }
        .mobile-menu__inner .header-menu__sub-menu {
            display: none;
        }
        .mobile-menu__sub {
            position: absolute;
            top: 92px;
            left: 0;
            transform: translateX(100%);
            display: flex;
            width: 100%;
            height: calc(100% - 92px);
            background: #ffffff;
            transition: transform 0.4s ease 0s;
        }
        .mobile-menu__sub-show {
            transform: translateX(0);
        }
        .mobile-menu__back {
            width: 128px;
            height: 100%;
            background: #EBF3FF;
            cursor: pointer;
        }
        .mobile-menu__back-button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 32px;
            height: 32px;
            margin: 40px auto 0 auto;

        }
        .mobile-menu__back-button::before {
            content: '';
            transform: rotateZ(45deg) translate(2.5px, -2.5px);
            width: 12px;
            height: 12px;
            border: 2px solid #005D9F;
            border-top: none;
            border-right: none;
        }
        .mobile-menu__level {
            width: calc(100% - 128px);
            height: 100%;
            padding: 40px;
            padding-top: 32px;
            background: #ffffff;
            overflow-x: hidden;
            overflow-y: auto;
            box-shadow: 0 0 5px 0px rgb(0 0 0 / 15%);
        }
        .mobile-menu__level-three {
            position: absolute;
            top: 0;
            right: 0;
            transform: translateX(100%);
            transition: transform 0.4s ease 0s;
        }
        .mobile-menu__level-three--show {
            transform: translateX(0);
        }
        .mobile-menu__sub .header-menu__sub-menu {
            position: static;
            transform: translate(0, 0);
            width: 100%;
            padding: 0;
            background: none;
            box-shadow: none;
            pointer-events: all;
            opacity: 1;
        }
        .mobile-menu__sub .header-menu__sub-menu::before {
            display: none;
        }
        .mobile-menu__sub .header-menu__sub-item {
            margin-bottom: 0;
        }
        .mobile-menu__sub .header-menu__sub-link {
            position: relative;
            display: block;
            padding: 16px 0;
            border-bottom: 1px solid #D5E2F7;
            font-size: 16px;
            text-transform: none;
        }
        .mobile-menu__sub .header-menu__sub-link.have-sub {
            padding-right: 36px;
        }
        .mobile-menu__sub .header-menu__sub-link.have-sub::after {
            content: '';
            position: absolute;
            top: 50%;
            right: 11px;
            transform: rotateZ(-45deg) translateY(-50%);
            width: 12px;
            height: 12px;
            border: 2px solid #ABADB6;
            border-top: none;
            border-left: none;
        }
        .mobile-menu__sub .header-menu__sub-item span {
            display: block;
            padding: 16px 0;
            border-bottom: 1px solid #D5E2F7;
            color: #ABADB6;
            font-size: 16px;
            font-weight: 700;
            line-height: 20px;
            text-transform: uppercase;
        }
        .mobile-menu__links-item {
            position: relative;
            padding-right: 16px;
            font-size: 14px;
            font-weight: 600;
            line-height: 20px;
            color: #005D9F;
            text-transform: uppercase;
            white-space: nowrap;
            margin-top: 8px;
            margin-right: 0;
            display: inline-block;
            min-width: calc(100% / 3 - 4px);
        }
        .mobile-menu__links-item::before {
            /* content: '';
    position: absolute;
    top: 50%;
    right: 30px;
    transform: translateY(-50%);
    width: 2px;
    height: 40px;
    background: #D5E2F7; */
        }
        .mobile-menu__links-item.js-open-menu-sites {
            position: relative;
            padding-left: 28px;
        }
        .mobile-menu__links-item.js-open-menu-sites img {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }
        .mobile-menu__links-item:last-child {
            padding-right: 0;
        }
        .mobile-menu__links-item:last-child::before {
            display: none;
        }

        /* Ð¡Ð»Ð°Ð¹Ð´ÐµÑ€ Ð²Ð²ÐµÑ€Ñ…Ñƒ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñ‹ */
        .top-page-slider {
            width: 100%;
            height: 630px;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }
        .top-page-banner {
            width: 100%;
            height: 100%;
            background: center top / cover;
            padding: 32px;
            position: relative;
            color: #fff;
        }
        .top-page-banner__signature {
            position: absolute;
            text-align: center;
            left: 30px;
            bottom: 32px;
            width: calc(100% - 64px);
            font-style: italic;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #fff;
        }

        .top-page-banner__signature_left {
            text-align: left;
            bottom: 32px;
            width: 655px;
        }
        .top-page-banner__img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease 0s;
        }
        .top-page-banner__img.active {
            opacity: 1;
        }
        .top-page-banner__text {
            width: 800px;
            color: #fff;
        }
        .top-page-banner__text_right {
            position: absolute;
            top: 107px;
            right: 134px;
        }
        .top-page-banner__heading {
            font-weight: 750;
            font-size: 144px;
            line-height: 152px;
            background: rgba(0, 74, 159, 0.2);
            margin-bottom: 16px;
            display: inline-block;
            padding: 0 8px;
        }
        .top-page-banner__description {
            margin-left: 184px;
        }
        .top-page-banner__description span {
            display: inline-block;
            background: rgba(0, 74, 159, 0.2);
            padding: 0 8px;
        }
        @supports (backdrop-filter: blur()) {
            .top-page-banner__heading {
                backdrop-filter: blur(40px);
                background: none;
            }
            .top-page-banner__description {
                /*backdrop-filter: blur(40px);*/
            }
            .top-page-banner__description span {
                background: none;
                backdrop-filter: blur(40px);
            }
        }
        .top-page-banner__link {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .top-page-banner__link img {
            position: absolute;
            right: 32px;
            bottom: 32px;
        }

        .top-page-bigImg {
            position: relative;
            width: 100%;
            height: 630px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .top-page-bigImg__text {
            position: absolute;
            top: 200px;
            max-width: 660px;
            color: #fff;
        }
        .top-page-bigImg__descripion span {
            display: inline-block;
            background: rgba(0, 74, 159, 0.2);
            padding: 0 8px;
        }
        @supports (backdrop-filter: blur()) {
            .top-page-bigImg__descripion span {
                background: none;
                backdrop-filter: blur(40px);
            }
        }
        .top-page-bigImg__descripion + .top-page-bigImg__descripion {
            margin-top: 28px;
        }
        .top-page-bigImg__descripion br {
            display: none;
        }

        .swiper-pagination_in-slider {
            bottom: 26px !important;
        }
        .swiper-pagination-bullet {
            position: relative;
            width: 16px;
            height: 16px;
            margin: 0 10px !important;
            background: #fff;
            transition: .2s;
            opacity: 1;
        }
        .swiper-pagination-bullet:hover {
            background: #F08400 !important;
        }
        .swiper-pagination_dots-gray .swiper-pagination-bullet {
            background: #ABADB6;
        }

        .swiper-pagination-bullet:first-child::before,
        .swiper-pagination-bullet:last-child::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #fff;
            transition: .2s;
        }
        .swiper-pagination-bullet:first-child::before {
            transform: translate(-36px, -50%) scale(0);
        }
        .swiper-pagination-bullet:last-child::before {
            transform: translate(28px, -50%) scale(0);
        }
        .swiper-pagination-bullet:first-child.swiper-pagination-bullet_before::before {
            transform: translate(-36px, -50%) scale(1);
        }
        .swiper-pagination-bullet:last-child.swiper-pagination-bullet_before::before {
            transform: translate(28px, -50%) scale(1);
        }
        .swiper-pagination_dots-gray .swiper-pagination-bullet:first-child::before,
        .swiper-pagination_dots-gray .swiper-pagination-bullet:last-child::before {
            background: #ABADB6;
        }
        .swiper-pagination_dots-square .swiper-pagination-bullet:first-child::before,
        .swiper-pagination_dots-square .swiper-pagination-bullet:last-child::before {
            border-radius: 0;
        }
        .swiper-pagination-bullet:first-child:hover::before,
        .swiper-pagination-bullet:last-child:hover::before {
            background: #F08400;
        }

        .swiper-pagination-bullet-active {
            background: #F08400 !important;
        }
        .swiper-pagination_after-elements {
            position: relative;
            margin-top: 50px;
            height: 18px;
            line-height: 0;
            margin-bottom: -12px;
        }
        .swiper-pagination_dots-square .swiper-pagination-bullet {
            border-radius: 0;
        }

        /*Ð¡Ð»Ð°Ð¹Ð´ÐµÑ€ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ð¾Ð²*/
        .element-slider {
            position: relative;
        }
        .element-slider__container {
            position: relative;
            overflow: hidden;
        }
        .sustainable-news {
            position: relative;
            overflow: hidden;
        }
        .element-slider .swiper-slide {
            display: block;
        }
        .element-slider__ico {
            width: 100%;
            height: 408px;
            background: center center / cover;
        }
        .element-slider__ico[style="background-image:url('/local/templates/main/css/)"] {
            background: url('../img/logomask.svg') center center / 50% no-repeat !important;
        }
        .element-slider__title {
            margin-top: 16px;
            color: #2C3148;
            transition: .2s;
        }
        .element-slide:hover .element-slider__title {
            color: #005D9F;
        }
        .swiper-button {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 172px;
            width: 56px;
            height: 56px;
            border: 3px solid #F08400;
            cursor: pointer;
            transition: .2s;
        }
        .swiper-button:hover {
            border-color: #005D9F;
        }
        .swiper-button-disabled {
            opacity: 0;
            pointer-events: none;
        }
        .swiper-button_arrow {
            position: relative;
            width: 20px;
            height: 3px;
            background: #F08400;
            transition: .2s;
        }
        .swiper-button:hover .swiper-button_arrow {
            background: #005D9F;
        }
        .swiper-button_arrow::before {
            content: '';
            position: absolute;
            top: 50%;
            right: 1px;
            transform: translateY(-48%) rotateZ(-45deg);
            width: 12px;
            height: 12px;
            border: 3px solid #F08400;
            border-top: none;
            border-left: none;
            transition: .2s;
        }
        .swiper-button:hover .swiper-button_arrow::before {
            border-color: #005D9F;
        }
        /* .swiper-button::before {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background: url(/local/templates/main/css/../img/swiper-arrow.svg) center center no-repeat;
} */
        .swiper-button_prev {
            left: -75px;
            transform: rotate(180deg);
        }
        .swiper-button_rating-prev {
            left: -75px;
            transform: rotate(180deg);
        }
        .swiper-button_prev--sustainable-news {
            left: -75px;
            transform: rotate(180deg);
        }
        .swiper-button_prev-gallery {
            left: -75px;
            transform: rotate(180deg);
        }
        .swiper-button_next {
            right: -75px;
        }
        .swiper-button_rating-next {
            right: -75px;
        }
        .swiper-button_next--sustainable-news {
            right: -75px;
        }
        .swiper-button_next-gallery {
            right: -75px;
        }

        /*Ð¢Ð°Ð±Ñ‹*/
        .tabs__list-wrapper {
            width: 100%;
        }
        .tabs__list {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            margin: 0;
        }
        .tabs__list .swiper-slide {
            width: auto;
            margin-right: 40px;
        }
        .tabs__list .swiper-slide:last-child {
            margin-right: 0;
        }
        .tabs__title {
            /* margin-left: 40px; */
            font-weight: 750;
            font-size: 18px;
            line-height: 24px;
            color: #005D9F;
            text-transform: uppercase;
            cursor: pointer;
            transition: .2s;
            padding-bottom: 12px;
            position: relative;
            display:block;
        }
        .tabs__title::after {
            content: '';
            display: block;
            width: 0%;
            height: 4px;
            position: absolute;
            bottom: 1px;
            left: 50%;
            transform: translate(-50%,0);
            background: #F08400;
            transition: .2s;
        }
        /* .tabs__title:first-child {
    margin-left: 0;
} */
        .tabs__title:hover {
            color: #F08400;
        }
        .tabs__title_selected {
            color: #2C3148;
            pointer-events: none;
        }
        .tabs__title_selected::after {
            width: 100%;
        }
        .tabs__block {
            display: none;
        }
        .tabs__block_selected {
            display: block;
        }
        .tabs__list--full {
            width: 100%;
            justify-content: center;
        }
        .tabs__list--full .tabs__title {
            text-align: center;
            max-width: calc(50% - 16px);
        }
        .tabs__list--full .tabs__title + .tabs__title {
            margin-left: 32px;
        }

        /*Ð”Ð°Ñ‚Ð°*/
        .date {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            color: #F08400;
            font-weight: 750;
        }
        .date__day {
            font-size: 48px;
            line-height: 56px;
            margin-right: 5px;
        }
        .date__month {
            font-size: 18px;
            line-height: 24px;
            text-transform: uppercase;
        }

        /*ÐÐ¾Ð²Ð¾ÑÑ‚Ð¸*/
        .block_gray .news {
            /* margin: -3% 0px; */
            /* margin: -40px 0; */
        }
        .news_top {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: space-between;
            padding-bottom: 36px;
            border-bottom: 3px solid #D5E2F7;
        }
        .news__item {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 20px 0 21px;
            border-bottom: 3px solid #D5E2F7;
        }
        .news__image {
            width: calc(50% - 30px);
            line-height: 0;
            background: center center / cover;
        }
        .news__image[style="background-image:url('/local/templates/main/css/)"] {
            position: relative;
            background: #EBF3FF;
        }
        .news__image[style="background-image:url(')"]::before {
            content: '';
            display: block;
            width: 240px;
            height: 240px;
            max-width: 60%;
            max-height: 60%;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 0;
            transform: translate(-50%, -50%);
            background: url('/local/templates/main/css/../img/logomask.svg') center center / contain no-repeat;
        }
        .news__image_big {
            height: 500px;
        }
        .news__image_medium {
            height: 308px;
        }
        .news__image img {
            width: 100%;
        }
        .news__info {
            margin-left: auto;
            width: calc(50% - 30px);
        }
        .news__info_full {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
        }
        .news__title {
            color: #2C3148;
            transition: .2s;
        }
        .news__item:hover .news__title {
            color: #005D9F;
        }
        .news__title_big {
            margin-top: 40px;
        }
        .news__title_medium {
            margin-top: 36px;
        }
        .news__title_small {
            width: 81.5%;
            margin-left: auto;
        }
        .branches-news.section-pt0 {
            padding: 40px 0 20px;
        }

        /* ÐŸÐ°Ð³Ð¸Ð½Ð°Ñ†Ð¸Ñ */
        .pagination {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
        }
        .pagination__arrow {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 56px;
            height: 56px;
        }
        .pagination__arrow path {
            transition: fill 0.2s ease 0s;
        }
        .pagination__arrow:hover path {
            fill: #005D9F;
        }
        .pagination__arrow-disabled path {
            fill: #ABADB6;
        }
        .pagination__arrow-prev {
            margin-right: 20px;
        }
        .pagination__arrow-next {
            margin-left: 20px;
        }
        .pagination__item {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 56px;
            height: 56px;
            margin: 0 4px;
            color: #005D9F;
            font-size: 18px;
            font-weight: 650;
            line-height: 24px;
            transition: color 0.2s ease 0s;
        }
        .pagination__item:hover {
            color: #F08400;
        }
        span.pagination__item {
            border: 3px solid #F08400;
            color: #2C3148;
            pointer-events: none;
        }
        .pagination__dots {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 56px;
            height: 56px;
            margin: 0 4px;
            color: #005D9F;
            font-weight: 650;
            font-size: 18px;
            line-height: 24px;
            transition: color 0.2s ease 0s;
        }
        .pagination__dots:hover {
            color: #F08400;
        }

        /*ÐšÐ½Ð¾Ð¿ÐºÐ° 'Ð²ÑÐµ'*/
        .more-row {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .more-row_mt-52 {
            margin-top: 24px;
        }
        .more-link {
            font-weight: 750;
            font-size: 24px;
            line-height: 36px;
            color: #005D9F;
            text-transform: uppercase;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            transition: .2s;
        }
        .more-link:hover {
            color: #F08400;
        }
        .more-link_inter {
            /* font-family: 'Inter'; */
            /* font-weight: 800; */
        }
        .more-link_right {
            margin-left: auto;
        }
        .more-link_arrow-right::after {
            content: '';
            display: block;
            width: 32px;
            height: 32px;
            position: relative;
            background: url('/local/templates/main/css/../img/swiper-arrow.svg') center center / contain no-repeat;
            margin-left: 20px;
        }

        /*Ð¡Ñ‚Ñ€Ð¾Ðº ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ð¾Ð²*/
        .elements-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            width: calc(100% + 60px);
        }
        .elements-row--trans-top-256 {
            transform: translateY(-256px);
        }
        .elements-row--mt40 {
            margin-top: 40px;
        }
        .elements-row--mb40 {
            margin-bottom: 40px;
        }
        .elements-row--pos-bottom {
            position: absolute;
            bottom: 0;
        }
        .elements-row__quarter {
            width: calc(25% - 60px);
            margin-right: 60px;
        }
        .elements-row__one-third {
            width: calc(33.33333% - 60px);
            margin-right: 60px;
        }
        .elements-row__one-third h2,
        .elements-row__one-third .h2 {
            word-break: break-word;
        }
        .elements-row__half {
            width: calc(50% - 60px);
            margin-right: 60px;
        }
        .elements-row__half--pl {
            padding-left: 60px;
        }
        .elements-row__two-thirds {
            width: calc(66.66666% - 60px);
            margin-right: 60px;
        }
        .elements-row__two-thirds--ml {
            width: calc(66.66666% - 184px);
            margin-right: 60px;
            margin-left: 124px;
        }
        .elements-row__two-thirds--ml-auto {
            width: calc(66.66666% - 184px);
            margin-right: 60px;
            margin-left: auto;
        }
        .elements-row__two-thirds--mr {
            width: calc(66.66666% - 124px);
            margin-right: 60px;
            margin-left: 124px;
        }

        .elements-row--big-img .elements-row__one-third {
            width: calc(33.33333% + 60px);
            margin-right: 0;
        }
        .elements-row--big-img .elements-row__two-thirds {
            width: calc(66.66666% - 180px);
            margin-left: 60px;
        }
        .elements-row--big-img .elements-row__two-thirds--ml {
            width: calc(66.66666% - 180px);
            margin-left: 60px;
        }
        .elements-row--big-img .elements-row__two-thirds--ml-auto {
            width: calc(66.66666% - 180px);
        }
        .strategy__info.elements-row__two-thirds--ml-auto {
            width: calc(66.66666% - 60px);
        }

        .elements-row__numbers {
            margin-bottom: -44px;
        }
        .elements-row__numbers--mt32 {
            margin-top: 32px;
        }
        .elements-row__numbers .elements-row__half {
            margin-bottom: 40px;
        }
        .elements-row__numbers .elements-row__half .big-number__content {
            font-size: 120px;
        }

        .elements-row__big-numbers .big-number__descript {
            width: 100%;
            margin-left: 0;
            text-transform: none;
        }
        .elements-row__big-numbers .big-number__percent {
            margin: 56px 0 0 16px;
            color: #005D9F;
            font-size: 40px;
            font-weight: 650;
            line-height: 48px;
        }

        /*Ð‘Ð°Ð½Ð½ÐµÑ€Ñ‹*/
        .banners-slider {
            overflow: hidden;
        }
        .three-banners-slider {
            overflow: hidden;
        }
        .banners-block__item {
            position: relative;
            width: 100%;
            padding-bottom: 166px;
            height: 262px;
            margin-bottom: 0 !important;
        }
        .three-banners-slider .banners-block__item {
            height: 216px;
            padding-bottom: 184px;
        }
        .banners-block__item::before {
            content: '';
            display: block;
            width: 3px;
            height: 100%;
            position: absolute;
            top: 0px;
            right: -31px;
            background: #D5E2F7;
            pointer-events: none;
        }
        .banners-slider .swiper-slide:last-child .banners-block__item::before {
            display: none;
        }
        .three-banners-slider .swiper-slide:last-child .banners-block__item::before {
            display: none;
        }
        .banners-block__ico {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 142px;
            background: center center / 100% no-repeat;
        }
        .three-banners-slider .banners-block__ico {
            height: 164px;
        }
        .banners-block__item .h5 {
            color: #2C3148;
            transition: .2s;
        }
        .banners-block__item:hover .h5 {
            color: #005D9F;
        }

        .three-banners-slider--narrow .banners-block__item {
            height: 230px;
            padding-bottom: 200px;
        }
        .three-banners-slider--narrow .banners-block__ico {
            height: 142px;
        }

        /*ÐšÐ¾Ñ‚Ð¸Ñ€Ð¾Ð²ÐºÐ¸*/
        .kotirovki {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            padding: 52px 0 28px;
        }
        .kotirovki__wrapper {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .kotirovki__wrapper .kotirovki__item:first-child {
            width: 50%;
        }
        .kotirovki__wrapper .kotirovki__item:last-child {
            width: calc(50% - 60px) !important;
        }
        .kotirovki__value {
            display: flex;
            /* flex-wrap: wrap; */
            align-items: flex-start;
            justify-content: flex-start;
        }
        .kotirovki__now {
            margin-right: 12px;
        }
        .kotirovki__change {
            font-style: italic;
            font-size: 16px;
            line-height: 24px;
            margin-left: 16px;
        }

        .kotirovki__change.positive {
            color: #06C130;
        }
        .kotirovki__change.negative {
            color: #E71C00;
        }

        /*Ð‘Ð»Ð¾Ðº Ñ Ñ‚ÐµÐ»ÐµÑ„Ð¾Ð½Ð°Ð¼Ð¸*/
        .phone-block__phone {
            position: relative;
        }
        .phone-block__phone a {
            color: #2C3148;
            transition: .2s;
            text-decoration: none;
        }
        /* .phone-block__phone a::before {
    display: none;
} */
        .phone-block__phone a:hover {
            color: #005D9F;
        }
        .phone-block__description {
            font-size: 16px;
            line-height: 22px;
            margin-top: 4px;
            color: rgba(44, 49, 72, 0.6);
        }
        .phone-block .toggle__name {
            position: relative;
            width: max-content;
            max-width: 100%;
        }
        .phone-block .toggle__arrow {
            position: absolute;
            top: 6px;
            /* left: 215px; */
            left: 100%;
        }

        /*ÐŸÐ¾Ð´Ð²Ð°Ð»*/
        .footer__row {
            align-items: flex-start;
            position: relative;
        }
        .footer__row::before {
            content: '';
            display: block;
            width: calc(100% - 60px);
            height: 3px;
            position: absolute;
            bottom: 0px;
            left: 0px;
            background: #D5E2F7;
        }
        .footer__row_first {
            padding: 32px 0 24px;
        }
        .footer__row_second {
            padding: 20px 0 24px;
        }
        .logo_in-footer {
            width: 194px;
            max-width: 100%;
        }
        /* .footer a:not(class) {
    color: #00499F;
    text-decoration-line: underline;
}
.footer a:not(class):hover {
    text-decoration-line: none;
} */
        .footer__row_second .h5 {
            margin-top: 4px;
        }
        .footer__title {
            font-size: 14px;
            line-height: 20px;
            text-transform: uppercase;
            margin-bottom: 4px;
        }
        .socila-links {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .footer .socila-links {
            transform: translateX(-8px);
        }
        .socila-links__item {
            display: block;
            width: 40px;
            height: 40px;
            margin-right: 16px;
        }
        .socila-links__item img {
            width: 100%;
        }

        /*ÐŸÐ¾Ð´Ð¿Ð¸ÑÐºÐ° Ð½Ð° Ð½Ð¾Ð²Ð¾ÑÑ‚Ð¸*/
        .subscribe-form {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            padding-bottom: 6px;
            border-bottom: 1px solid #2C3148;
        }
        .subscribe-form__input {
            font-weight: 300;
            font-size: 24px;
            line-height: 32px;
            font-family: 'Avenir Next Cyr', sans-serif;
            color: #2C3148;
            background: none;
            border: none;
            width: calc(100% - 32px);
        }
        .subscribe-form__input::placeholder {
            color: #787F91;
            opacity: 1;
        }
        .subscribe-form__submit {
            background: none;
            border: none;
            width: 27px;
            height: 24px;
            margin-left: auto;
        }

        /*Ð¡Ð»Ð°Ð¹Ð´ÐµÑ€ ÑÑÑ‹Ð»Ð¾Ðº Ð²Ð½Ð¸Ð·Ñƒ*/
        .links-slider {
            padding: 20px 0 32px;
            overflow: hidden;
        }
        .links-slider .swiper-wrapper {
            align-items: center;
        }
        .links-slider .swiper-slide {
            width: auto;
        }
        .links-slider img {
            height: auto;
            max-width: 100%;
            filter: grayscale(1);
            transition: filter 0.2s ease 0s;
        }
        .links-slider img:hover {
            filter: grayscale(0);
        }
        .footer__bottom {
            font-size: 14px;
            line-height: 20px;
        }
        .footer__bottom-row {
            width: 100%;
            padding: 16px 0;
        }
        .copyright {
            opacity: 0.5;
            font-family: 'AvantGardeGothic';
            font-weight: 100;
        }
        .sitemap-link {
            margin-left: 50px;
        }
        .prava {
            margin-left: 28px;
        }
        .error-send {
            margin: 0 auto;
            padding: 0 28px;
        }
        .create {
            /* margin-left: auto; */
        }

        /*Ð£Ñ€Ð¾Ð²Ð½Ð¸ Ð²Ð¾Ð´Ñ‹*/
        .weaves-element {
            position: relative;
        }
        .weaves-element::before {
            content: '';
            display: block;
            width: 100%;
            height: 32px;
            position: absolute;
            bottom: -38px;
            left: -5%;
            background: url('/local/templates/main/css/../img/waves.svg') center center no-repeat;
            pointer-events: none;
        }
        .ges-levels__top {
            margin: 80px 0 52px;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .ges-levels__ges {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            width: 100%;
        }
        .ges-levels__ico {
            position: relative;
            width: calc(100% - 78px - 880px);
            margin-right: auto;
            line-height: 0;
            overflow: hidden;
        }
        .ges-levels__ico_hidden {
            opacity: 0;
        }
        .ges-levels__ico img {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
        }
        .ges-levels__info {
            width: 880px;
            max-width: 100%;
        }
        .ges-levels__grafik {
            width: 100%;
        }
        .ges-levels__description {
            margin-top: 48px;
            font-style: italic;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            opacity: 0.8;
        }
        .ges-levels__levels {
            fill: #fff;
            font-weight: 300;
            font-size: 19px;
            line-height: 24px;
            font-family: 'Inter', sans-serif;
        }
        .ges-levels__levels_name {
            font-weight: 700;
        }
        .ges-levels__button {
            width: auto !important;
            background: #FFFFFF;
            height: 56px;
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 32px;
            color: #005d9f;
            font-weight: 600;
        }
        .day-0 {
            r: 6 !important;
        }

        /*Ð¡ÐµÐ»ÐµÐºÑ‚Ñ‹*/
        .select-with-name {
            position: relative;
        }
        .select-with-name--disabled {
            pointer-events: none;
        }
        .select-with-name__select {
            margin-right: 16px;
            z-index: 1;
        }
        .select-with-name__name {
            position: absolute;
            left: 16px;
            top: 8px;
            color: #ABADB6;
            z-index: 11;
            font-weight: 450;
            font-size: 12px;
            line-height: 16px;
        }
        .select-with-name__select .jq-selectbox__select {
            width: 312px;
            height: 56px;
            padding: 24px 56px 8px 16px;
            border: none !important;
            border-bottom: 1px solid transparent !important;
            border-radius: 0;
            background: #EBF3FF;
            box-shadow: none;
            font-family: 'Avenir Next Cyr', sans-serif;
            font-weight: 450;
            font-size: 16px;
            line-height: 24px;
            color: #2C3148;
            text-shadow: none;
            transition:
                border-color 0.2s ease 0s,
                background 0.2s ease 0s;
        }
        .select-with-name--disabled .jq-selectbox__select {
            background: rgba(235, 243, 255, 0.5);
        }
        .select-with-name__select:hover .jq-selectbox__select {
            border-color: #ABADB6 !important;
        }
        .jq-selectbox__select-text {
            width: 100% !important;
            transition: color 0.2s ease 0s;
        }
        .select-with-name--disabled .jq-selectbox__select-text {
            color: #ABADB6;
        }
        .select-with-name__select .jq-selectbox__trigger {
            width: 52px;
            border: none;
        }
        .select-with-name__select .jq-selectbox__trigger-arrow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            width: 12px;
            height: 12px;
            border: none;
            border-right: 3px solid #F08400;
            border-bottom: 3px solid #F08400;
            margin-top: -3px;
            transition:
                transform 0.2s ease 0s,
                border-color 0.2s ease 0s;
        }
        .select-with-name--disabled .jq-selectbox__trigger-arrow {
            border-color: #ABADB6;
        }
        .select-with-name__select.opened .jq-selectbox__trigger-arrow {
            transform: translate(-50%, -50%) rotate(-135deg);
            margin-top: 3px;
        }
        .select-with-name__select.opened .jq-selectbox__select {
            border-color: #005D9F !important;
        }
        .select-with-name__select .jq-selectbox__dropdown {
            margin: 4px 0 0;
            border: none;
            border-radius: 0;
            background: #fff;
            box-shadow: none;
            font-family: 'Avenir Next Cyr', sans-serif;
            font-weight: 450;
            font-size: 16px;
            line-height: 24px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%;
        }
        .select-with-name__select li.sel{
            background-color: #fff;
            color: #005D9F;
            padding-right: 56px;
            position: relative;
        }
        .select-with-name__select li.sel::before{
            content: '';
            display: block;
            width: 17px;
            height: 9px;
            position: absolute;
            top: 13px;
            right: 20px;
            border-bottom: 2px solid #005D9F;
            border-left: 2px solid #005D9F;
            transform: rotate(-45deg);
        }
        .select-with-name__select li:hover,
        .select-with-name__select li.selected {
            background-color: #fff;
            color: #005D9F;
        }
        .select-with-name__select li {
            min-height: 22px;
            padding: 7px 16px 8px;
            color: #2C3148;
            white-space: unset;
        }
        .select-with-name select {
            pointer-events: none;
        }

        /* Ð¡ÐµÐ»ÐµÐºÑ‚ Ð±ÐµÐ· Ð¿Ð¾Ð´Ð¿Ð¸ÑÐ¸ */
        .select-without-name {
            position: relative;
            z-index: 10;
        }
        .select-without-name__select {
            margin-right: 16px;
            z-index: 1;
        }
        .select-without-name__select .jq-selectbox__select {
            width: 312px;
            height: 56px;
            padding: 16px 56px 16px 16px;
            border: none !important;
            border-bottom: 1px solid transparent !important;
            border-radius: 0;
            background: #EBF3FF;
            box-shadow: none;
            font-family: 'Avenir Next Cyr', sans-serif;
            font-weight: 450;
            font-size: 16px;
            line-height: 24px;
            color: #2C3148;
            text-shadow: none;
            transition: border 0.2s ease 0s;
        }
        .select-without-name__select:hover .jq-selectbox__select {
            border-color: #ABADB6 !important;
        }
        .select-without-name__select.opened .jq-selectbox__select {
            border-color: #005D9F !important;
        }
        .select-without-name__select.w100 .jq-selectbox__select,
        .select-without-name__select.w100 .jq-selectbox {
            width: 100%;
        }
        .jq-selectbox__select-text {
            width: 100% !important;
        }
        .select-without-name__select .jq-selectbox__trigger {
            width: 52px;
            border: none;
        }
        .select-without-name__select .jq-selectbox__trigger-arrow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            width: 12px;
            height: 12px;
            border: none;
            border-right: 3px solid #F08400;
            border-bottom: 3px solid #F08400;
            margin-top: -3px;
            transition: transform 0.2s ease 0s;
        }
        .select-without-name__select.opened .jq-selectbox__trigger-arrow {
            transform: translate(-50%, -50%) rotate(-135deg);
            margin-top: 3px;
        }
        .select-without-name__select .jq-selectbox__dropdown {
            margin: 4px 0 0;
            border: none;
            border-radius: 0;
            background: #EBF3FF;
            box-shadow: none;
            font-family: 'Avenir Next Cyr', sans-serif;
            font-weight: 450;
            font-size: 16px;
            line-height: 24px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .select-without-name__select li.sel{
            background-color: #EBF3FF;
            color: #2C3148;
        }
        .select-without-name__select li:hover,
        .select-without-name__select li.selected {
            background-color: #F08400;
            color: #FFF;
        }
        .select-without-name__select li {
            min-height: 22px;
            padding: 7px 16px 8px;
            color: #2C3148;
        }
        .select-without-name select {
            pointer-events: none;
        }

        /* Ð¡ÐµÐ»ÐµÐºÑ‚ Ñ Ð±ÐµÐ»Ñ‹Ð¼ Ñ„Ð¾Ð½Ð¾Ð¼ */
        .select-white-bg .jq-selectbox__select {
            background: #FFFFFF;
        }
        .select-white-bg .jq-selectbox__dropdown {
            background: #FFFFFF;
        }
        .select-white-bg li.sel{
            background-color: #FFFFFF;
        }
        .select-white-bg li:hover,
        .select-white-bg li.selected {
            background-color: #F08400;
            color: #FFF;
        }

        /* Ð¡ÐµÐ»ÐµÐºÑ‚ Ñ Ð¸ÐºÐ¾Ð½ÐºÐ¾Ð¹ */
        .select-with-ico .jq-selectbox__dropdown {
            width: auto !important;
        }
        .select-with-ico .jq-selectbox li {
            white-space: unset;
        }
        .execution .jq-selectbox li {
            white-space: unset !important;
        }
        .integration .jq-selectbox li {
            white-space: unset !important;
        }
        .select-with-ico .option-ico {
            position: relative;
            padding-left: 48px !important;
        }
        .select-with-ico .option-ico::after {
            content: '';
            position: absolute;
            top: 11px;
            left: 20px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
        }

        .select-with-ico .option-ico_gesGaes::after {
            width: 8px;
            background: #00AEEF;
            border-radius: 8px 0 0 8px;
        }
        .select-with-ico .option-ico_gesGaes::before {
            content: '';
            position: absolute;
            top: 11px !important;
            left: 28px;
            width: 8px !important;
            height: 16px !important;
            background: #582E91 !important;
            border-radius: 0 8px 8px 0;
            border: none !important;
            transform: rotateZ(0) !important;
        }

        .select-with-ico .jq-selectbox__select-text.option-ico {
            padding-left: 32px !important;
        }
        .select-with-ico .jq-selectbox__select-text.option-ico::after {
            content: '';
            position: absolute;
            top: 4px;
            left: 4px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
        }

        .select-with-ico .jq-selectbox__select-text.option-ico_gesGaes::after {
            width: 8px;
            border-radius: 8px 0 0 8px;
        }
        .select-with-ico .jq-selectbox__select-text.option-ico::before {
            content: '';
            position: absolute;
            top: 4px !important;
            left: 12px;
            width: 8px;
            height: 16px;
            border-radius: 0 8px 8px 0;
        }

        /* ÐŸÐµÑ€ÐµÐºÐ»ÑŽÑ‡Ð°Ñ‚ÐµÐ»ÑŒ */
        .switch {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .switch__title {
            margin-right: 8px;
            font-size: 16px;
            line-height: 24px;
        }
        .switch__button {
            display: flex;
            align-items: center;
        }
        .switch__button-item {
            padding: 10px 24px;
            border: 2px solid #EBF3FF;
            background: #EBF3FF;
            color: #005D9F;
            font-size: 16px;
            font-weight: 700;
            line-height: 32px;
            transition: .2s;
            cursor: pointer;
            text-transform: uppercase;
            text-align: center;
        }
        .switch__button-item:hover {
            background: #005D9F;
            color: #ffffff;
        }
        .switch__button-item--active {
            background: #005D9F;
            color: #ffffff;
            pointer-events: none;
        }

        /* Ð˜Ð½Ð¿ÑƒÑ‚ */
        .input__wrapper {
            position: relative;
            width: 312px;
            height: 56px;
        }
        .input,
        #help_form .input[name="error_desc"] {
            position: relative;
            width: 100%;
            height: 100%;
            padding: 24px 16px 8px;
            background: #EBF3FF;
            border: none !important;
            border-bottom: 1px solid transparent !important;
            color: #2C3148;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            transition: border 0.2s ease 0s;
        }
        .input__wrapper-white .input {
            background: #FFFFFF;
        }
        .input:hover {
            border-color: #ABADB6 !important;
        }
        .input:focus,
        .input:active {
            border-color: #005D9F !important;
        }
        .input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px transparent inset !important;
            -webkit-text-fill-color: #2C3148;
        }
        .input__label {
            position: absolute;
            top: 50%;
            left: 16px;
            transform: translateY(-50%);
            color: #ABADB6;
            font-size: 16px;
            font-weight: 500;
            line-height: 110%;
            pointer-events: none;
            transition: .2s;
        }
        .input__wrapper .input:focus ~ .input__label,
        .input__wrapper .textarea:focus ~ .input__label,
        .input__wrapper.full .input__label {
            font-size: 12px;
            transform: translateY(-20px);
        }
        .input__label span {
            color: #E71C00;
        }

        /*Ð”Ð½ÐµÐ¹ Ð²Ð¾Ð´Ñ‹*/
        .water-day {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            margin-left: auto;
        }
        .water-day__title {
            font-size: 16px;
            line-height: 24px;
            margin-right: 8px;
        }
        .water-day__trigger-wrap {
            display: flex;
            flex-wrap: nowrap;
            align-items: flex-start;
            justify-content: flex-start;
            background: rgba(255, 255, 255, 0.2);
        }
        .water-day__trigger {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 70px;
            height: 52px;
            color: #fff;
            transition: .2s;
            font-family: 'Inter';
            font-weight: 600;
            font-size: 16px;
            line-height: 32px;
            cursor: pointer;
        }
        .water-day__trigger_selected {
            background: #fff;
            color: #005D9F;
        }
        .water-day-text {
            fill: #fff;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-size: 18px;
            line-height: 24px;
            letter-spacing: -0.03em;
            opacity: 0.5;
        }
        .water-day-text_last {
            opacity: 1;
            font-weight: 700;
        }
        .water-day-text.d30 {
            font-size: 12px;
            line-height: 0px ;
            transform: translate(2.2%,-5%);
        }
        .last-day-info__rect {
            fill: #F08400;
        }
        .last-day-info__text {
            fill: #fff;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 39px;
            letter-spacing: -0.03em;
            text-transform: uppercase;
        }
        .ges-levels__data {
            display: none;
        }

        .toggle {
            position: relative;
        }
        .toggle__arrow {
            display: inline-block;
            width: 18px;
            height: 18px;
            margin-left: 4px;
            position: relative;
            cursor: pointer;
        }
        .toggle__arrow::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-75%) rotate(45deg);
            width: 8px;
            height: 8px;
            border-right: 3px solid #F08400;
            border-bottom: 3px solid #F08400;
            transition: .2s;
        }
        .toggle.open .toggle__arrow::before {
            transform: translate(-50%,-25%) rotate(-135deg);
        }
        .toggle__content {
            display: none;
            position: absolute;
            top: calc(100% + 10px);
            left: -32px;
            z-index: 2;
            padding: 32px;
            background: #fff;
            box-shadow: 0px 2px 8px rgba(33, 35, 46, 0.08);
        }
        .toggle__item {
            width: max-content;
            margin-bottom: 16px;
        }
        .toggle__item:last-child {
            margin-bottom: 0;
        }

        .water_ch {
            position: relative;
            padding-left: 22px;
        }
        .water_ch::before {
            content: '';
            display: block;
            width: 14px;
            height: 14px;
            position: absolute;
            top: 5px;
            left: 5px;
            background: url('/local/templates/main/css/../img/subscribe-form-arrow.svg') center center / cover no-repeat;
            transform: rotate(-90deg);
        }
        .lower.water_ch::before {
            transform: rotate(90deg);
        }
        .water_ch span {
            opacity: .8;
        }

        /* Ð¥Ð»ÐµÐ±Ð½Ñ‹Ðµ ÐºÑ€Ð¾ÑˆÐºÐ¸ */
        .breadcrumbs {
            position: relative;
            z-index: 1;
            width: 100%;
            margin: 32px 0;
        }
        .breadcrumbs__item {
            position: relative;
            font-size: 16px;
            line-height: 24px;
            color: #ABADB6;
            transition: .2s;
        }
        .breadcrumbs__item:hover {
            color: #2C3148;
        }
        /* .breadcrumbs__item:last-child {
    color: #2C3148;
} */
        .breadcrumbs__item + .breadcrumbs__item {
            margin-left: 29px;
        }
        .breadcrumbs__item + .breadcrumbs__item::before {
            content: '';
            position: absolute;
            top: 5px;
            left: -16px;
            width: 2px;
            height: 12px;
            background: #ABADB6;
        }

        /* ÐšÐ½Ð¾Ð¿ÐºÐ° */
        .button {
            position: relative;
            z-index: 10;
            display: inline-block;
            padding: 32px 36px;
            border: 3px solid #F08400;
            background: none;
            color: #F08400;
            font-family: 'Inter';
            font-size: 23px;
            line-height: 24px;
            font-weight: 650;
            cursor: pointer;
            transition: .2s;
        }
        .button:hover {
            border-color: #005D9F;
            color: #005D9F;
        }
        .button_min {
            height: 56px;
            padding: 12px 24px;
            font-family: 'Avenir Next Cyr';
            font-size: 16px;
            line-height: 24px;
        }
        .button_mt {
            margin-top: 52px;
        }
        .button_mtb {
            margin: 52px 0 56px;
        }
        .button_inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .button_arrow {
            position: relative;
            width: 24px;
            height: 4px;
            margin-left: 22px;
            background: #F08400;
            transition: .2s;
        }
        .button:hover .button_arrow {
            background: #005D9F;
        }
        .button_arrow::before {
            content: '';
            position: absolute;
            top: -5px;
            right: 1px;
            transform: rotateZ(-45deg);
            width: 14px;
            height: 14px;
            border: 4px solid #F08400;
            border-top: none;
            border-left: none;
            transition: .2s;
        }
        .button:hover .button_arrow::before {
            border-color: #005D9F;
        }

        .button_orange {
            background: #F08400;
            color: #ffffff;
        }
        .button_orange:hover {
            background: #ffffff;
            border-color: #ffffff;
            color: #005D9F;
        }
        .button_orange .button_arrow {
            background: #ffffff;
        }
        .button_orange:hover .button_arrow {
            background: #005D9F;
        }
        .button_orange .button_arrow::before {
            border-color: #ffffff;
        }
        .button_orange:hover .button_arrow::before {
            border-color: #005D9F;
        }

        /* Ð¡ÑÑ‹Ð»ÐºÐ¸ */
        .link-with-lines {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 0;
            font-size: 20px;
            font-weight: 750;
            line-height: 32px;
            color: #2C3148;
            transition: .2s;
            text-transform: uppercase;
        }
        .link-with-lines:hover {
            color: #F08400;
        }
        .link-with-lines_arrow {
            position: relative;
            width: 24px;
            height: 20px;
            margin-left: 20px;
            /* background: #F08400; */
            background: url(/local/templates/main/css/../img/swiper-arrow.svg) center center / contain no-repeat;
            transition: .2s;
            flex-shrink: 0;
        }
        /* .link-with-lines_arrow::before {
    content: '';
    position: absolute;
    top: 50%;
    right: 1px;
    transform: translateY(-45%) rotateZ(-45deg);
    width: 12px;
    height: 12px;
    border: 3px solid #F08400;
    border-top: none;
    border-left: none;
    transition: .2s;
} */

        /* Ð‘Ð¾Ñ€Ð´ÐµÑ€Ñ‹ ÑÐ²ÐµÑ€Ñ…Ñƒ Ð¸ ÑÐ½Ð¸Ð·Ñƒ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ð° */
        .border-top-bottom {
            border-top: 3px solid rgba(213, 226, 247, 0.5);
        }
        .border-top-bottom:last-child {
            border-bottom: 3px solid rgba(213, 226, 247, 0.5);
        }
        .border-top-bottom--last {
            border-bottom: none !important;
        }

        /* Ð¤Ð°Ð¹Ð» Ð² Ð±Ð»Ð¾ÐºÐµ */
        .content-block_file {
            position: relative;
            display: block;
            margin-top: 32px;
            padding-left: 56px;
            color: #2C3148;
            font-size: 20px;
            font-weight: 600;
            line-height: 32px;
            transition: color 0.2s ease 0s;
        }
        .content-block_file::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 0px;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: #F08400 url('/local/templates/main/css/../img/download.svg') center center no-repeat;
        }
        .content-block_file:hover {
            color: #005D9F;
        }

        /* Ð¡Ð¿Ð¸ÑÐ¾Ðº Ð°ÑƒÐºÑ†Ð¸Ð¾Ð½Ð¾Ð² */
        .auction-list__item {
            position: relative;
            display: flex;
            align-items: flex-start;
            padding: 32px 0;
        }
        .auction-list__item-date {
            position: relative;
            margin-right: 72px;
            padding-left: 32px;
        }
        .auction-list__item-date::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 12px;
            height: 12px;
            background: #F08400;
            border-radius: 50%;
        }
        .auction-list__item-info {
            transition: color 0.2s ease 0s;
        }
        .auction-list__item:hover .auction-list__item-info {
            color: #005D9F;
        }
        .auction-list__item-link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .price-audit__list .elements-row {
            padding: 32px 0;
        }
        .price-audit__list .elements-row:first-child {
            padding-top: 8px;
        }
        .price-audit__list .elements-row + .elements-row {
            border-top: 2px solid #D5E2F7;
        }
        .price-audit__list .file-download-list {
            margin-top: 0 !important;
        }

        /* Ð‘Ð›Ð¾Ðº Ñ 2Ð¼Ñ ÑÑÑ‹Ð»ÐºÐ°Ð¼Ð¸ Ñ ÐºÐ°Ñ€Ñ‚Ð¸Ð½ÐºÐ°Ð¼Ð¸ */
        .two-blockLinks {
            position: relative;
            display: flex;
            flex-wrap: wrap;
        }
        .two-blockLinks::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 100%;
            background: #D5E2F7;
        }
        .two-blockLinks__item {
            position: relative;
            width: calc(50% - 94px);
        }
        .two-blockLinks__item:first-child {
            margin-right: 188px;
        }
        .two-blockLinks__img {
            width: 100%;
            height: 280px;
            margin-bottom: 16px;
        }
        .two-blockLinks__item .h5 {
            color: #2C3148;
            transition: color 0.2s ease 0s;
        }
        .two-blockLinks__item:hover .h5 {
            color: #005D9F;
        }

        /* Ð‘Ð°Ð½Ð½ÐµÑ€ ÑÐ²ÐµÑ€Ñ…Ñƒ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñ‹ */
        .top-page-img {
            position: relative;
            width: 100%;
            height: 540px;
            padding: 32px 0;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .top-page-img--company {
            background-position: 80% 73% !important;
            background-size: 2400px !important;
        }
        .top-page-img--sustainable {
            background-position: 46% center !important;
        }
        .top-page-img .content-block {
            position: absolute;
            top: 100%;
            left: 0;
            transform: translateY(-136px);
            width: calc(33.33333% - 60px);
        }

        /* Ð‘Ð»Ð¾Ðº Ð´Ð»Ñ Ñ€Ð°Ð·Ð½Ð¾Ð³Ð¾ ÐºÐ¾Ð½Ñ‚ÐµÐ½Ñ‚Ð° */
        .content-block {
            position: relative;
            width: 100%;
            padding: 40px;
            background: #fff;
        }
        .content-block_before {
            padding: 68px 40px 40px;
        }
        .content-block_blue {
            background: #EBF3FF;
        }
        .content-block_before::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 40px;
            width: 55px;
            height: 4px;
            background: #F08400;
        }
        .content-block_big {
            width: 472px;
        }
        /* .content-block a::before {
    display: none;
} */
        .content-block a {
            text-decoration: none;
        }

        .content-block--link-ico {
            width: 40px;
            height: 40px;
            margin-top: 80px;
            margin-left: auto;
            background: url('/local/templates/main/css/../img/diagonal-arrow.png') center center / contain no-repeat;
        }
        .content-block--link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* ÐŸÐ¾Ð´Ð¿Ð¸ÑÑŒ Ð´Ð»Ñ Ñ„Ð¾Ñ‚Ð¾ */
        .photo-caption {
            font-family: 'Inter';
            font-size: 16px;
            line-height: 24px;
            color: #787F91;
        }

        /* Ð‘Ð»Ð¾Ðº Ñ ÐºÐ°Ñ€Ñ‚Ð¸Ð½ÐºÐ°Ð¼Ð¸ */
        .bloks-with-img {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .bloks-with-img__item {
            position: relative;
        }
        .bloks-with-img__item .h5 {
            transition: .2s;
        }
        .bloks-with-img__item:hover .h5 {
            color: #005D9F;
        }
        .bloks-with-img__item a {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
            width: 100%;
            height: 100%;
            text-decoration: none;
        }
        /* .bloks-with-img__item a::before {
    display: none;
} */
        .bloks-with-img__img {
            width: 100%;
            margin-top: 24px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bloks-with-img__wrapper {
            width: calc(66.66666% - 144px);
        }
        .bloks-with-img__row {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .bloks-with-img__row + .bloks-with-img__row {
            margin-top: 52px;
        }
        .bloks-with-img__big {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: calc(33.33333% + 84px);
            margin-right: 60px;
        }
        .bloks-with-img__small {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: calc(50% - 30px);
            margin-right: 60px;
        }
        .bloks-with-img__small:nth-child(2n) {
            margin-right: 0;
        }
        .bloks-with-img__big .bloks-with-img__img {
            width: 100%;
            height: calc(100% - 56px);
        }
        .bloks-with-img__small .bloks-with-img__img {
            height: 240px;
        }

        /* Ð¤Ð¾Ñ€Ð¼Ð° Ð¿Ð¾Ð´Ð¿Ð¸ÑÐºÐ¸ Ð½Ð° Ð½Ð¾Ð²Ð¾ÑÑ‚Ð¸ */
        .elements-form-subscribe {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 56px 0;
            background: url('/local/templates/main/css/../img/page-news/form/bg.png') left center / contain no-repeat, #EBF3FF;
        }
        .elements-form-subscribe__title {
            width: calc(33.33333% - 104px);
            margin-left: 64px;
        }
        .elements-form-subscribe__form {
            width: calc(66.66666% - 83px);
            margin-right: 64px;
            margin-left: 60px;
        }
        .elements-form-subscribe form {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .elements-form-subscribe .input__wrapper,
        .select-without-name {
            width: calc(((100% - 160px) - 8px) / 2);
            margin-right: 4px;
        }
        .elements-form-subscribe .select-without-name__select {
            width: 100%;
        }
        .elements-form-subscribe .select-without-name__select .jq-selectbox__select {
            width: 100%;
        }
        .elements-form-subscribe .c1 {
            margin-top: 16px;
        }

        /* Ð‘Ð¾Ð»ÑŒÑˆÐ¸Ðµ ÑÐ¸Ð½Ð¸Ðµ Ñ†Ð¸Ñ„Ñ€Ñ‹ */
        .big-number__blue {
            color: #005D9F;
        }
        .big-number__content {
            position: relative;
            display: flex;
            align-items: center;
            font-size: 126px;
            font-weight: 750;
            line-height: 134px;
        }
        .big-number__sub {
            margin-left: 24px;
            font-size: 56px;
            font-weight: 700;
            line-height: 134px;
        }
        .big-number__arrow {
            flex-shrink: 0;
            width: 25px;
            height: 31px;
            margin: 0 0 60px 40px;
            background: url('/local/templates/main/css/../img/big-number-arrow.svg') center center / contain no-repeat;
        }
        .big-number__arrow-down {
            transform: rotateZ(180deg);
        }
        .big-number .t2 {
            margin-top: 24px;
        }
        .content-block + .big-number {
            margin-top: 140px;
        }

        /* Ð¡Ñ€ÐµÐ´Ð½Ð¸Ðµ Ð¾Ñ€Ð°Ð½Ð¶ÐµÐ²Ñ‹Ðµ Ñ†Ð¸Ñ„Ñ€Ñ‹ */
        .middle-number--mb {
            margin-bottom: 54px;
        }
        .middle-number__orange {
            color: #F08400;
        }
        .middle-number__content {
            position: relative;
            /* display: inline-block; */
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            font-size: 72px;
            font-weight: 750;
            line-height: 88px;
            letter-spacing: -0.015em;
            font-family: 'Inter';
        }
        .middle-number__sub {
            /* position: absolute; */
            /* top: 50%; */
            /* left: calc(100% + 8px); */
            /* transform: translateY(-50%); */
            margin-left: 8px;
            font-size: 28px;
            font-weight: 700;
            line-height: 140%;
            letter-spacing: -0.03em;
        }
        .middle-number__sub-ml16 {
            /* left: calc(100% + 16px); */
            margin-left: 16px;
        }
        .middle-number__arrow {
            /* position: absolute; */
            /* top: 17px; */
            /* left: calc(100% + 60px); */
            width: 20px;
            height: 24px;
            margin: 0 0 40px 24px;
            background: url('/local/templates/main/css/../img/middle-number-arrow.svg') center center / contain no-repeat;
        }
        /* .middle-number__arrow::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-54%) rotateZ(45deg);
    width: 15px;
    height: 15px;
    border: 5px solid #06C130;
    border-right: none;
    border-bottom: none;
} */
        .middle-number__arrow-up {
            transform: rotateZ(180deg);
        }
        .middle-number .t2 {
            margin-top: 22px;
            font-weight: 600;
        }

        /* Ð‘Ð»Ð¾Ðº "ÐžÑÐ½Ð¾Ð²Ð½Ñ‹Ðµ ÑÐ¾Ð±Ñ‹Ñ‚Ð¸Ñ" */
        .main-events__wrapper {
            position: relative;
            transition: height 0.2s ease 0s;
            z-index: 1;
            opacity: 0;
            transition: opacity 0.2s ease 0s;
        }
        .main-events-year {
            position: relative;
            width: calc(100% - 188px);
            margin: 0 auto;
            padding-left: 76px;
            overflow: hidden;
            height: 174px;
        }
        .main-events-year::before {
            content: '';
            position: absolute;
            top: 51px;
            left: -76px;
            width: calc(100% + 76px);
            height: 2px;
            background: #D5E2F7;
        }
        .main-events-year .owl-stage-outer {
            overflow: visible;
            top: 28px;
            z-index: 1;
        }
        .main-events-year .owl-stage-outer .owl-stage {
            display: flex;
        }
        .main-events-year .owl-item:last-child {
            opacity: 0;
            pointer-events: none;
        }
        .main-events-year__item {
            position: relative;
            height: 48px;
            transition: width 0.5s ease 0s;
        }
        .main-events-year__item-active {
            pointer-events: none !important;
        }
        .main-events-year__item-dot {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background: #005D9F;
            border-radius: 50%;
            transition: background 0.3s ease 0s;
            cursor: pointer;
        }
        .main-events-year__item-dot:hover {
            background: #F08400;
        }
        .main-events-year__item-active .main-events-year__item-dot {
            background: #F08400;
            transition: background 0.3s ease 0.4s;
        }
        .main-events-year__item-dot::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 24px;
            height: 24px;
            background: #005D9F;
            opacity: 0.1;
            border-radius: 50%;
            transition:
                opacity 0.3s ease 0s,
                background 0.3s ease 0s;
        }
        .main-events-year__item-dot:hover::before {
            background: #F08400;
            opacity: 0.5;
        }
        .main-events-year__item-active .main-events-year__item-dot::before {
            background: #F08400;
            opacity: 0.5;
            transition:
                opacity 0.3s ease 0.4s,
                background 0.3s ease 0.4s
        }
        .main-events-year__item .main-events-year__item-dot::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            width: 48px;
            height: 48px;
            background: #F08400;
            opacity: 0.1;
            border-radius: 50%;
            transition: transform 0.3s ease 0s;
        }
        .main-events-year__item-active .main-events-year__item-dot::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1);
            width: 48px;
            height: 48px;
            background: #F08400;
            opacity: 0.1;
            border-radius: 50%;
            transition: transform 0.3s ease 0.4s;
        }
        .main-events-year__item-text {
            position: absolute;
            bottom: calc(100% + 4px);
            left: 0;
            transform: scale(1);
            color: #005D9F;
            font-size: 20px;
            font-weight: 650;
            line-height: 32px;
            transition:
                bottom 0.3s ease 0s,
                transform 0.3s ease 0s;
        }
        .main-events-year__item-active .main-events-year__item-text {
            bottom: calc(100% - 40px);
            transform: scale(0);
            transition:
                bottom 0.3s ease 0s,
                transform 0.3s ease 0s;
        }
        .main-events-year__item-text--big {
            top: calc(100% - 68px);
            transform: translateX(-35%) scale(0);
            color: #F08400;
            font-size: 78px;
            font-weight: 650;
            line-height: 88px;
            transition:
                top 0.3s ease 0s,
                transform 0.3s ease 0s;
        }
        .main-events-year__item-active .main-events-year__item-text--big {
            top: calc(100% + 16px);
            transform: translate(-20%, 70%) scale(1);
            transition:
                top 0.3s ease 0.4s,
                transform 0.3s ease 0.4s;
        }

        .main-events-year__nav {
            position: absolute;
            top: 28px;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .main-events-year__nav > div {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 48px;
            height: 48px;
            border: 2px solid #D5E2F7;
            border-radius: 50%;
            cursor: pointer;
            transition: border-color 0.2s ease 0s;
        }
        .main-events-year__nav > div:hover {
            border-color: #005D9F;
        }
        .main-events-year__nav > div img {
            opacity: 1;
            transition: opacity 0.2s ease 0s;
        }
        .main-events-year__nav-prev {
            transform: rotate(180deg);
        }
        .main-events-year__nav-disabled {
            pointer-events: none;
        }
        .main-events-year__nav-disabled img {
            opacity: 0.5 !important;
        }

        .main-events__wrapper-sticks {
            position: absolute;
            top: 28px;
            left: 50%;
            z-index: 2;
            transform: translateX(-50%);
            width: calc(100% - 188px);
            height: 48px;
            pointer-events: none;
        }
        .main-events__wrapper-sticks > div {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            width: 48px;
            height: 48px;
            pointer-events: all;
            cursor: pointer;
        }
        .main-events__wrapper-sticks > div::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 2px;
            height: 48px;
            background: #D5E2F7;
        }
        .main-events__wrapper-start {
            left: -24px;
        }
        .main-events__wrapper-end {
            right: -24px;
        }

        .main-events-items--wrapper {
            margin-top: 40px;
            position: relative;
            overflow: hidden;
        }
        .main-events-items {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
        }
        .main-events-items .owl-stage-outer .owl-stage {
            display: flex;
            cursor: grab;
        }
        .main-events-items.owl-grab .owl-stage-outer .owl-stage {
            cursor: grabbing;
        }
        .main-events-items .owl-nav.disabled {
            display: none;
        }
        .main-events-items--show {
            opacity: 1;
            position: relative;
            pointer-events: all;
        }
        .main-events-items__item {
            display: flex;
            width: auto !important;
            padding-top: 24px;
            border-top: 2px solid #D5E2F7;
        }
        .main-events-items__item-img {
            width: 372px;
            height: 207px;
            margin-right: 32px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .main-events-items__item-text {
            width: 372px;
        }
        .main-events-year__select {
            opacity: 0;
            position: absolute;
            pointer-events: none;
        }

        /* ÐšÐ°Ñ€Ñ‚Ð° Ð³ÐµÐ¾Ð³Ñ€Ð°Ñ„Ð¸Ð¸ Ð¿Ñ€Ð¸ÑÑƒÑ‚ÑÑ‚Ð²Ð¸Ñ */
        .geography__wrapper {
            position: relative;
            z-index: 1;
        }
        .geography-map {
            /* position: relative; */
            width: 100%;
            height: 30vw;
            /* margin: 32px 0 -60px 0; */
        }
        .geography__placemark {
            position: relative;
            transform: translate(-30px, -30px);
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        .geography__placemark-big {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            transform: translate(-50%, -50%) scale(0);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            opacity: 0.3;
            transition: transform 0.3s ease 0s;
        }
        .geography__placemark.hover .geography__placemark-big {
            transform: translate(-50%, -50%) scale(1);
        }
        .geography__placemark-mid {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            transform: translate(-50%, -50%);
            width: 24px;
            height: 24px;
            border-radius: 50%;
        }
        .geography__placemark-min {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #FFFFFF;
            opacity: 0;
            transition: opacity 0.3s ease 0s;
        }
        .geography__placemark.hover .geography__placemark-min {
            opacity: 1;
        }
        .geography__placemark-name {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(24px, -50%);
            z-index: 2;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap;
        }
        .object-hint {
            position: relative;
            z-index: 10;
            width: 312px;
            padding: 16px;
            background: #ffffff;
            box-shadow: 0px 8px 20px rgb(0 0 0 / 25%);
        }
        .object-hint__arrow {
            position: absolute;
            top: 20px;
            right: -8px;
            transform: rotateZ(45deg);
            width: 16px;
            height: 16px;
            background: #FFFFFF;
        }
        .left .object-hint__arrow {
            right: 0;
            left: -8px;
            transform: rotateZ(225deg);
        }
        .object-hint__img {
            width: 100%;
            margin-bottom: 16px;
        }
        .object-hint__type {
            color: #787F91;
            font-size: 16px;
            font-weight: 450;
            line-height: 24px;
        }
        .object-hint__name {
            margin-top: 8px;
        }
        .object-hint__power {
            margin-top: 8px;
            font-size: 16px;
            line-height: 24px;
        }
        .object-hint__power span {
            font-weight: 700;
        }
        .object-hint .close {
            position: absolute;
            top: 4px;
            right: 7px;
            display: block;
            width: 13px;
            height: 13px;
        }
        .object-hint .close::before,
        .object-hint .close::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 16px;
            height: 2px;
            background: #005D9F;
            transition: 0.2s;
        }
        .object-hint .close::before {
            transform: translate(-50%, -50%) rotateZ(45deg);
        }
        .object-hint .close::after {
            transform: translate(-50%, -50%) rotateZ(-45deg);
        }
        .object-hint .close:hover::before,
        .object-hint .close:hover::after {
            background: #F08400;
        }
        .popover-inner ymaps {
            width: 288px !important;
            overflow: visible !important;
        }
        .popover-inner .object-hint__img {
            width: 96%;
        }
        .map-select .select-with-name__select {
            margin-right: 32px;
        }
        .map-switch {
            margin-left: auto;
        }

        .button-page-map {
            position: absolute;
            right: 40px;
            bottom: 50px;
            z-index: 10;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #ffffff;
            box-shadow: 0px 0px 10px rgb(0 0 0 / 15%);
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.2s ease 0s;
        }
        .button-page-map--show {
            opacity: 1;
        }
        .button-page-map a {
            width: 24px;
            height: 24px;
            margin: 3px 0 0 1px;
            background: url('/local/templates/main/css/../img/full-earth.svg') center center / contain no-repeat;
            text-decoration: none;
        }
        /* .button-page-map a::before {
    display: none;
} */
        .button-page-map img {
            transform: scale(1);
            transition: transform 0.2s ease 0s;
        }
        .button-page-map:hover img {
            transform: scale(1.2);
        }
        .geography-map--full {
            height: 700px;
        }
        .my-placemark-layout::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            width: 60px;
            height: 60px;
            background: #582E91;
            opacity: 0.2;
            transition: transform 0.2s ease 0s;
        }
        .my-placemark-layout:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }

        /* Ð¢Ð°Ð±Ð»Ð¸Ñ†Ð° Ð³ÐµÐ¾Ð³Ñ€Ð°Ñ„Ð¸Ð¸ Ð¿Ñ€Ð¸ÑÑƒÑ‚ÑÑ‚Ð²Ð¸Ñ */
        .geography-table {
            display: none;
            margin-top: 54px;
        }
        .geography-table__inner {
            border: 2px solid #D5E2F7;
        }
        .geography-table__type-spoiler {
            position: relative;
            display: flex;
            min-height: 64px;
            border-bottom: 2px solid #D5E2F7;
            background: #EBF3FF;
            cursor: pointer;
        }
        .geography-table__type:last-child .geography-table__type-spoiler {
            margin-bottom: -2px;
        }
        .geography-table__type-spoiler::after {
            content: '';
            position: absolute;
            top: 50%;
            right: 22px;
            transform: translateY(-50%) rotateZ(-135deg);
            width: 16px;
            height: 16px;
            border: 5px solid #F08400;
            border-right: none;
            border-bottom: none;
            transition: transform 0.2s ease 0s;
        }
        .geography-table__type-spoiler--active::after {
            transform: translateY(-50%) rotateZ(-315deg);
        }
        .geography-table__type-color {
            position: relative;
            width: 64px;
        }
        .geography-table__type-color::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 24px;
            height: 24px;
            border-radius: 50%;
        }

        .geography-table__type-color--gesGaes::before {
            width: 12px;
            background: #00AEEF;
            border-radius: 12px 0 0 12px;
        }
        .geography-table__type-color--gesGaes::after {
            content: '';
            position: absolute;
            top: 50%;
            left: calc(50% + 12px);
            transform: translate(-50%, -50%);
            width: 12px;
            height: 24px;
            background: #582E91;
            border-radius: 0 12px 12px 0;
        }


        .geography-table__type-name {
            display: flex;
            align-items: center;
            width: calc(100% - 378px);
            padding: 10px 16px;
            border: 2px solid #D5E2F7;
            border-top: none;
            border-bottom: none;
            font-size: 20px;
            font-weight: 750;
            line-height: 160%;
        }
        .geography-table__type-power,
        .geography-table__type-date {
            position: relative;
            display: flex;
            align-items: center;
            width: 105px;
            padding: 0 16px;
            color: #787F91;
            font-size: 0;
            line-height: 130%;
            transition: font-size 0.2s ease 0s;
        }
        .geography-table__type-spoiler--active .geography-table__type-power,
        .geography-table__type-spoiler--active .geography-table__type-date {
            font-size: 16px;
        }
        .geography-table__type-power {
            justify-content: flex-end;
        }
        .geography-table__type-date {
            width: 179px;
            border-left: 2px solid #d5e2f7;
        }
        .geography-table__type-block {
            display: none;
        }
        .geography-table__item {
            display: flex;
            min-height: 64px;
            background: #FFFFFF;
            border-bottom: 2px solid #D5E2F7;
        }
        .geography-table__type:last-child .geography-table__item:last-child {
            margin-bottom: -2px;
        }
        .geography-table__item-number {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 64px;
            font-size: 20px;
            line-height: 160%;
        }
        .geography-table__item-name {
            display: flex;
            align-items: center;
            width: calc(100% - 378px);
            padding: 10px 16px;
            border: 2px solid #D5E2F7;
            border-top: none;
            border-bottom: none;
            color: #2C3148;
            font-size: 20px;
            font-weight: 750;
            line-height: 160%;
        }
        .geography-table__item-name a {
            color: #005D9F;
            text-decoration: underline;
            text-underline-offset: 4px;
            transition: none;
        }
        .geography-table__item-name a:hover {
            color: #2C3148;
            text-decoration: none;
        }
        .geography-table__item-name a span {
            transition: none;
        }
        .geography-table__item-name a i {
            display: none;
        }
        .geography-table__item-power,
        .geography-table__item-date {
            display: flex;
            align-items: center;
            width: 105px;
            padding: 0 16px;
            font-size: 16px;
            font-weight: 700;
            line-height: 130%;
        }
        .geography-table__item-power {
            justify-content: flex-end;
        }
        .geography-table__item-date {
            width: 179px;
            border-left: 2px solid #d5e2f7;
        }

        /* Ð˜Ð½Ñ„Ð¾Ñ€Ð¼ÐµÑ€ */
        .informer {
            position: absolute;
            left: 40px;
            bottom: 50px;
            /* transform: translateX(-656px); */
            z-index: 10;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.2s ease 0s;
        }
        .informer-show {
            opacity: 1;
        }
        .informer img {
            transform: scale(1);
            transition: transform 0.2s ease 0s;
        }
        .informer:hover img {
            transform: scale(1.2);
        }
        .informer__inner {
            position: absolute;
            bottom: calc(100% + 24px);
            left: 0;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            width: 824px;
            height: 310px;
            padding: 32px 40px;
            background: #FFFFFF;
            list-style: none;
            opacity: 0;
            transition: opacity 0.2s ease 0s;
            cursor: default;
            pointer-events: none;
        }
        .informer__inner::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 20px;
            border: 10px solid transparent;
            border-top: 16px solid #FFFFFF;
        }
        .informer-pc:hover .informer__inner {
            opacity: 1;
            pointer-events: all;
        }
        .informer__inner .informer__inner-item {
            position: relative;
            width: 248px;
            margin: 10px 0;
            padding-left: 40px;
            font-size: 16px;
            line-height: 24px;
        }
        .informer__inner .informer__inner-item:last-child {
            margin-bottom: 0;
        }
        .informer__inner .informer__inner-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
        }
        .informer__inner .informer__inner-item--hatching::before {
            background: url('/local/templates/main/css/../img/page-company/map/hatching.png') center center / contain no-repeat;
        }

        .informer__inner .informer__inner-item--gesGaes::before {
            width: 12px;
            background: #00AEEF;
            border-radius: 12px 0 0 12px;
        }
        .informer__inner .informer__inner-item--gesGaes::after {
            content: '';
            position: absolute;
            top: 0;
            left: 12px;
            width: 12px;
            height: 24px;
            background: #582E91;
            border-radius: 0 12px 12px 0;
        }

        /* ÐšÐ½Ð¾Ð¿ÐºÐ° Ð²Ð¾Ð·Ð²Ñ€Ð°Ñ‚Ð° ÐºÐ°Ñ€Ñ‚Ñ‹ Ðº Ð´ÐµÑ„Ð¾Ð»Ñ‚Ð½Ð¾Ð¼Ñƒ Ð¿Ð¾Ð»Ð¾Ð¶ÐµÐ½Ð¸ÑŽ */
        .button-center-map {
            position: absolute;
            left: 40px;
            top: 40px;
            z-index: 10;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.2s ease 0s;
        }
        .button-center-map img {
            transform: scale(1);
            transition: transform 0.2s ease 0s;
        }
        .button-center-map:hover img {
            transform: scale(1.2);
        }
        .button-center-map--show {
            opacity: 1;
        }

        .map-filters {
            display: flex;
        }

        /* Ð’Ð¸Ð´ÐµÐ¾ */
        .video {
            position: relative;
            width: 100%;
            margin: 40px 0 52px 0;
        }
        /* .video__overlay::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(44, 49, 72, 0.2);
} */
        .video video {
            width: 100%;
        }
        .video__button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 88px;
            height: 88px;
            border-radius: 50%;
            border: 1px solid #00499F;
            background: #ffffff;
            cursor: pointer;
        }
        .video__button svg,
        .video__button img {
            content: '';
            position: absolute;
            top: 50%;
            left: 53%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
        }

        /*Ð‘Ð»Ð¾Ðº Ñ Ñ„Ð¾Ð½Ð¾Ð²Ñ‹Ð¼ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸ÐµÐ¼ Ð½Ð° Ð²ÑÑŽ ÑˆÐ¸Ñ€Ð¸Ð½Ñƒ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñ‹*/
        .block_image {
            padding: 0;
            margin-top: 88px;
            background: center center / cover no-repeat;
            color: #fff;
            position: relative;
        }
        .block_image--nadoznoeObespeceniye {
            /*background: left bottom / 2067px;*/
        }
        .block_image::before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
            top: 0px;
            left: 0px;
            background: #005D9F;
            opacity: 0.2;
        }
        .block__info-on-image {
            padding: 194px 0;
            min-height: 710px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            position: relative;
            z-index: 1;
        }
        .block__info-on-image div {
            width: 100%;
        }
        .block__info-on-image_small {
            width: calc(75% - 16px);
        }
        .block__info-on-image .c3 {
            align-self: flex-end;
        }
        .block__info-on-image .p1 {
            align-self: flex-start;
        }

        /*Ð‘ÐºÐ¾Ð»Ðº ÑÐ¾ ÑÐºÑ€Ð¾Ð»Ð»Ð¾Ð¼ ÐºÐ¾Ð½Ñ‚ÐµÐ½Ñ‚Ð° Ð¸ Ð·Ð°Ð³Ð¾Ð»Ð¾Ð²ÐºÐ¾Ð¼ Ñ Ñ„Ð¾Ð½Ð¾Ð¼ ÑÐ»ÐµÐ²Ð°*/
        .scroll-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin-top: 64px;
        }
        .scroll-info__graf {
            width: calc(33.33333% - 40px);
            padding: 60px;
            background: #005D9F url(/local/templates/main/css/../img/page-mission/celevoe/1.svg) top right / cover;
        }
        .scroll-info__content {
            width: calc(66.666666% + 40px);
            padding: 60px;
            background: #fff;
        }
        .scroll-info__scroll {
            padding-right: 60px;
            max-height: 576px;
            overflow: auto;
        }
        .color-orange {
            color: #F08400;
        }

        /*Ð¡ÐºÑ€Ð¾Ð»Ð»*/
        .simplebar-track.simplebar-vertical {
            top: 0;
            width: 4px;
            background: #D5E2F7;
        }
        .simplebar-vertical .simplebar-scrollbar::before {
            top: 0 !important;
            bottom: 0 !important;
        }
        .simplebar-scrollbar::before {
            background: #005D9F;
            border-radius: 0;
            left: 0px;
            right: 0px;
            opacity: 1 !important;
        }

        /*ÐšÐ¾Ñ€Ð¿Ð¾Ñ€Ð°Ñ‚Ð¸Ð²Ð½Ñ‹Ð¹ ÑÐ»Ð°Ð¹Ð´ÐµÑ€*/
        .korporat-slider {
            position: relative;
            overflow: hidden;
        }
        .korporat-slider .swiper-wrapper {
            counter-reset: slide;
        }
        .korporat-slider__item {
            padding-top: 48px;
            padding-bottom: 11px;
            width: 620px;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .korporat-slider__info {
            width: 312px;
        }
        .korporat-slider__info .h5 {
            margin-bottom: 24px;
        }
        .korporat-slider__image {
            margin-left: auto;
            width: 247px;
            height: 295px;
            position: relative;
            background: #EBF3FF;
        }
        .korporat-slider__image::after {
            content: '';
            display: block;
            width: 120px;
            height: 120px;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 0;
            transform: translate(-50%, -50%);
            background: url(/local/templates/main/css/../img/logomask.svg) center center / cover no-repeat;
        }
        .korporat-slider__image img {
            position: relative;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
        }
        .korporat-slider__image::before {
            /* content: counter(slide) "."; */
            counter-increment: slide 1;
            position: absolute;
            left: -60px;
            top: -48px;
            z-index: 2;
            border: 2px solid #ABADB6;
            border-radius: 100px;
            color: #ABADB6;
            width: 93px;
            height: 93px;
            font-weight: 750;
            font-size: 24px;
            line-height: 32px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }
        .korporat-slider ~ .swiper-button {
            top: 50%;
        }
        .korporat-slider ~ .swiper-button_next {
            transform: translateX(12px);
        }
        .korporat-slider ~ .swiper-button_prev {
            transform: rotate(180deg) translateX(-12px);
        }

        /*ESG*/
        .esg-item {
            position: relative;
        }
        .esg-item::before {
            content: '';
            display: block;
            width: 2px;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 64px;
            background: #D5E2F7;
        }
        .esg-item__char {
            position: absolute;
            left: 0;
            top: 0;
            font-weight: 750;
            font-size: 72px;
            line-height: 88px;
            color: #F08400;
        }
        .esg-item__info {
            padding-left: 106px;
        }
        .esg-item__info .h5 {
            margin-bottom: 24px;
        }
        .spoiler {
            border-top: 2px solid #D5E2F7;
            border-bottom: 2px solid #D5E2F7;
            position: relative;
            margin-bottom: -2px
        }
        .spoiler::before {
            content: '';
            display: block;
            width: 18px;
            height: 18px;
            position: absolute;
            top: 37px;
            right: 7px;
            border-right: 5px solid #F08400;
            border-bottom: 5px solid #F08400;
            transform: rotate(45deg);
            transition: .2s;
            pointer-events: none;
        }
        .spoiler-sub {}

        .no-spoiler::before {
            display: none;
        }
        .spoiler.open::before {
            transform: translate(0,7px) rotate(-135deg);
        }
        .spoiler + .spoiler {
            border-top: none;
        }
        .spoiler__title {
            cursor: pointer;
            padding: 32px 65px 32px 0;
        }
        .no-spoiler .spoiler__title  {
            cursor: default;
        }
        .spoiler__content {
            margin-top: -8px;
            display: none;
            padding-right: 65px;
            padding-bottom: 32px;
        }
        .spoiler__content > *:last-child {
            margin-bottom: 0;
        }

        /*CÑ‚Ñ€ÑƒÐºÑ‚ÑƒÑ€Ð° Ð³Ñ€ÑƒÐ¿Ð¿Ñ‹*/
        /*ÐŸÐ¾Ð¸ÑÐº Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ðµ*/
        .search-on-page {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            background: #EBF3FF;
            padding: 16px;
            position: relative;
        }
        .search-on-page__input {
            width: calc(100% - 80px);
            font-family: 'Avenir Next Cyr';
            font-style: normal;
            font-weight: 450;
            font-size: 16px;
            line-height: 24px;
            background: none;
            outline: none;
        }
        .search-on-page__input::placeholder {
            opacity: 1;
            color: #ABADB6;
        }
        .search-on-page__button {
            margin-left: auto;
            background: none;
            border: none;
            width: 24px;
            height: 24px;
        }
        /*Ð¢Ð°Ð±Ð»Ð¸Ñ†Ñ‹*/
        .container table {
            line-height: 160%;
            border-collapse: collapse;
            width: 100%;
        }
        .container table td,
        .container table th {
            border: 2px solid #D5E2F7;
            vertical-align: top;
        }
        table.clear-table td,
        table.clear-table th {
            border: none;
        }
        .container table th {
            padding: 16px;
            color: #787F91;
            font-weight: 600;
            text-align: left;
        }
        .container table.small-td-table th {
            padding: 8px;
        }
        .container table td {
            padding: 32px 16px;
        }
        .container table.small-td-table td {
            padding: 8px;
        }
        .odd table tbody tr:nth-child(odd),
        table.odd tbody tr:nth-child(odd),
        table.coolTable tbody tr:nth-child(odd){
            background: #EBF3FF;
        }
        .odd table tbody tr:nth-child(odd),
        table.odd tbody tr:nth-child(odd),
        table.coolTable tbody tr:nth-child(odd){
            background: #EBF3FF;
        }
        .tbody_odd table tbody:first-child ~ tbody:nth-child(odd) tr,
        table.tbody_odd tbody:first-child ~ tbody:nth-child(odd) tr {
            background: #EBF3FF;
        }
        .tbody_odd table thead ~ tbody:nth-child(2n) tr,
        table.tbody_odd thead ~ tbody:nth-child(2n) tr {
            background: #EBF3FF;
        }
        .structur-table {
            width: 100%;
        }
        .container table a:not([href^="mailto:"])::before {
            display: none;
        }
        table.blue-head th {
            background: #EBF3FF;
        }
        /*
.container table a[href^="mailto:"] */
        .container table a[href^="tel:"] {
            color: inherit;
            white-space: nowrap;
            display: block;
        }
        /*.container table a[href^="tel:"] + a[href^="mailto:"],
.container table a[href^="mailto:"] + a[href^="mailto:"] */
        .container table a[href^="tel:"] + a[href^="tel:"],
        .container table a[href^="mailto:"] + a[href^="tel:"] {
            margin-top: 16px;
        }
        .structur-table b {
            font-weight: 600;
            cursor: text;
        }
        .structur-table a[href=""] {
            pointer-events: none;
        }
        .structur-table a[href=""]:hover {
            color: #005D9F;
        }
        .structur-table.tbody_odd td:first-child {
            width: 528px;
        }
        .hidden-info {
            display: none;
        }
        .more-link_center {
            margin: 0 auto;
        }
        .more-link_arrow-left_to-bottom::before {
            content: '';
            display: block;
            width: 24px;
            height: 24px;
            position: relative;
            top: 8px;
            background: url('/local/templates/main/css/../img/more-down.svg') center center / contain no-repeat;
            margin-right: 16px;
        }
        .section-pb0 {
            padding-bottom: 1px;
        }
        .section-pt0 {
            padding-top: 1px;
        }
        .section-mt-2 {
            margin-top: -2px;
        }
        .hidden-element,
        .search-elem-zag.hidden {
            display: none;
        }

        /*Ð‘Ð°Ð½Ð½ÐµÑ€*/
        .banner {
            padding: 56px 64px;
            display: block;
            background: linear-gradient(90.5deg, #00499F -0.67%, rgba(0, 73, 159, 0.7) 101.7%);
            color: #fff;
            position: relative;
        }
        .banner::before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            background: none;
            pointer-events: none;
        }
        .banner_marginTop {
            margin-top: 64px;
        }
        .banner__content {
            max-width: 58.33333%;
            position: relative;
            z-index: 1;
        }
        .banner__zag {
            text-transform: unset;
            font-weight: 600;
        }
        .more-link_banner {
            font-size: 18px;
            line-height: 24px;
            color: #fff;
            margin-top: 36px;
        }
        .more-link_banner.more-link_arrow-right::after {
            top: -4px;
        }
        .banner_fon-logo::before {
            background: url('/local/templates/main/css/../img/banner-logo.png') calc(100% + 140px) calc(50% + 60px) / 500px no-repeat;
        }
        .tabs__list_line {
            flex-wrap: nowrap;
        }
        .tabs__list_line .swiper-slide {
            flex-shrink: 1;
        }
        .h2-block {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        .h2-block .c3 {
            color: #787F91;
        }
        .big-number__row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
        }
        .big-number__descript {
            font-size: 26px;
            line-height: 40px;
            text-transform: uppercase;
            color: #005D9F;
            font-weight: 600;
        }
        .big-number__row .big-number__descript {
            margin-left: 24px;
        }

        .banner--mini {
            padding: 16px 24px;
        }
        .banner--mini::before {
            background-size: 300px;
        }
        .banner--mini .banner__content {
            max-width: none;
        }
        .banner--mini .more-link_banner {
            margin-top: 16px;
            font-size: 16px;
        }

        /*Ð ÐµÐ¹Ñ‚Ð¸Ð½Ð³Ð¸ Ð¸ Ð½Ð°Ð³Ñ€Ð°Ð´Ñ‹*/
        .rating-slider-container {
            position: relative;
            width: 100%;
        }
        .rating-slider {
            overflow: hidden;
            width: 100%;
        }
        .rating-slider__logo {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 160px;
            margin-bottom: 24px;
            overflow: hidden;
        }
        .rating-slider__logo img {
            max-width: 100%;
            max-height: 100%;
        }
        .rating-slider-container .swiper-button {
            top: 152px;
        }
        .rating-slider__item {
            padding-bottom: 64px;
        }
        .element-slider__pre-title {
            color: #F08400;
            text-transform: uppercase;
            margin-top: 16px;
        }
        .pda-on {
            display: none;
        }

        /*Ð§Ð°ÑÑ‚Ð¸ Ñ‚ÐµÐºÑÑ‚Ð¾Ð²Ð¾Ð¹*/
        .content-block_ink {
            font-size: 28px;
            font-weight: 600;
            line-height: 40px;
            text-transform: uppercase;
            margin: 40px 0;
        }
        .file-download {
            color: #2C3148;
            transition: .2s;
            padding-left: 64px;
            position: relative;
            padding-top: 4px;
            padding-bottom: 4px;
            display: block;
            text-transform: uppercase;
        }
        .file-download::before {
            content: '';
            display: block !important;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 0px;
            left: 0px;
            background: #F08400 url('/local/templates/main/css/../img/download.svg') center center no-repeat;
        }
        .file-download.border-top-bottom {
            padding: 38px 0 32px 64px;
        }
        .file-download.border-top-bottom::before {
            top: 40px;
        }
        .file-download[disabled] {
            color: #ABADB6;
            pointer-events: none;
        }
        .file-download[disabled]::before {
            background-color: #ABADB6;
        }
        .file-download:hover {
            color: #005D9F;
        }
        .content-block .file-download {
            color: #005D9F;
        }
        .content-block .file-download:hover {
            color: #F08400;
        }
        .content-block.content-block_blue .file-download {
            color: #2C3148;
        }
        .content-block.content-block_blue .file-download:hover {
            color: #005D9F;
        }
        .content-block .file-download {
            margin-top: 40px;
            padding-top: 4px;
            padding-left: 56px;
        }
        .file-download .h6 {
            line-height: 1;
        }
        .file-download .t2 {
            text-transform: initial;
        }
        .file-download .c2 {
            color: #787F91;
        }
        .text-block_text-margin p,
        .text-block_text-margin ol,
        .text-block_text-margin ul,
        .text-block_text-margin a.file-download {
            margin-bottom: 32px;
        }
        .text-block_text-margin ol ol,
        .text-block_text-margin ul ul {
            margin-bottom: 0px;
        }
        .content-block_blue-border {
            border: 4px solid #D5E2F7;
        }
        .blockquote {
            padding: 16px 0 16px 44px;
            border-left: 4px solid #F08400;
            margin: 40px 0;
        }
        .blockquote2 {
            padding: 104px 40px 40px;
            margin: 40px 0;
            background: #EBF3FF;
            position: relative;
        }
        .blockquote2::before {
            content: '';
            display: block;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 40px;
            left: 40px;
            background: url('/local/templates/main/css/../img/quote.svg') center center / cover no-repeat;
        }
        .blockquote2 .p2 {
            margin-bottom: 0;
        }
        .direct-speech {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: flex-start;
            margin-top: 40px;
        }
        .direct-speech__image {
            width: 120px;
            overflow: hidden;
            max-height: 136px;
            margin-right: 24px;
            flex-shrink: 0;
        }
        .direct-speech__text {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: flex-start;
            width: calc(100% - 144px);
        }
        .direct-speech__text * {
            width: 100%;
        }
        .direct-speech__name {
            margin-bottom: 8px;
        }
        .direct-speech__position {
            font-style: italic;
            color: #787F91;
        }
        .text-block img[align="left"] {
            margin: 0 32px 32px 0;
        }
        .text-block img[align="right"] {
            margin: 0 0 32px 32px;
        }
        p + img,
        ol + img,
        ul + img,
        table + img {
            margin-bottom: 32px;
        }
        .scroll-table {
            overflow: auto;
        }
        .simplebar-placeholder_border {
            border-right: 2px solid #d5e2f7;
            border-left: 2px solid #d5e2f7;
            position: relative;
            z-index: 1;
        }
        .director-slider__container {
            overflow: hidden;
        }
        .director-slider__swiper-wrapper {
            width: calc(100% + 60px);
        }
        .director-list {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            width: calc(100% + 60px);
        }
        .director-item {
            width: calc(25% - 60px);
            color: #2C3148;
            display: block;
        }
        .director-list .director-item {
            margin-right: 60px;
            margin-bottom: 40px;
        }
        .director-item__ico {
            width: 248px;
            height: 288px;
            overflow: hidden;
            background: #EBF3FF;
            position: relative;
            margin-bottom: 24px;
        }
        .director-item__ico::before {
            content: '';
            display: block;
            width: 120px;
            height: 120px;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 0;
            transform: translate(-50%, -50%);
            background: url('/local/templates/main/css/../img/logomask.svg') center center / cover no-repeat;
        }
        .director-item__ico img {
            width: 100%;
            position: relative;
            z-index: 1;
        }
        .director-item .t3 {
            margin-top: 24px;
        }
        .director-slider__container ~ .swiper-button {
            top: 114px;
        }
        a.back-link {
            position: relative;
            padding-left: 36px;
            margin-bottom: 48px;
            display: block;
            font-weight: 750;
            font-size: 18px;
            line-height: 28px;
            text-transform: uppercase;
            transition: .2s;
            color: #005D9F;
        }
        a.back-link:hover {
            color: #F08400;
        }
        .back-link::before {
            content: '';
            display: block;
            width: 24px;
            height: 24px;
            position: absolute;
            top: 2px;
            left: 0px;
            background: url('/local/templates/main/css/../img/back-arrow.svg') center center / cover no-repeat;
        }
        .back-link:hover {
            color: #2C3148;
        }

        .c3_marginBot {
            margin-bottom: 32px;
        }
        .preson-params__element {
            margin-bottom: 16px;
        }
        .preson-params__element .t1 {
            margin-bottom: 8px;
        }
        .person-one-image {
            overflow: hidden;
            width: 100%;
            height: auto;
            min-height: 437px;
            background: #EBF3FF;
            position: relative;
            z-index: 1;
        }
        .person-one-image img {
            max-width: 100%;
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%, 0%);
        }
        .person-one-image::before {
            content: '';
            display: block;
            width: 150px;
            height: 150px;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 0;
            transform: translate(-50%, -50%);
            background: url('/local/templates/main/css/../img/logomask.svg') center center / cover no-repeat;
        }
        .person-one-image-has {
            background: none;
        }
        .person-one-image-has img {
            left: 0%;
            transform: none;
        }
        .person-one-image-has::before {
            display: none;
        }
        .director-slider__container_nagrada .director-item__ico {
            height: 394px;
        }
        .director-slider__container_nagrada ~ .swiper-button {
            top: 163px;
        }
        .first-td-nowrap td:first-child {
            white-space: nowrap;
        }
        .committee {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: -40px;
        }
        .committee__item {
            width: calc(50% - 20px);
            background: #EBF3FF;
            padding: 40px;
            transition: .2s;
            margin-bottom: 40px;
            display: block;
            color: #2C3148;
        }
        .committee__item:hover {
            background: #fff;
            box-shadow: inset 0 0 0 1px #D5E2F7, 0px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .committee__hr {
            margin: 40px 0 32px;
            border: 1px solid #D5E2F7;
        }
        .committee__person {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            align-self: flex-start;
        }
        .committee__ico {
            width: 148px;
            height: 172px;
            border: 1px solid #D5E2F7;
            position: relative;
            background: #fff;
        }
        .committee__ico::before {
            content: '';
            display: block;
            width: 62px;
            height: 62px;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 0;
            transform: translate(-50%, -50%);
            background: url('/local/templates/main/css/../img/logomask.svg') center center / cover no-repeat;
        }
        .committee__ico img {
            position: relative;
            z-index: 1;
        }
        .committee__info {
            margin-left: auto;
            width: calc(100% - 148px - 32px);
        }
        .committee__info .h6 + .t3 {
            margin-top: 16px;
        }
        .committee__item .h5 {
            transition: .2s;
        }
        .committee__item:hover .h5 {
            color: #005D9F;
        }
        .p2_marginBot {
            margin-bottom: 32px;
        }
        .five-columns {
            width: calc(41.6666% - 30px);
        }
        .five-columns {
            width: calc(41.6666% - 30px);
        }
        .elements-row__half--ml {
            margin-left: auto;
            /* margin-right: 0; */
        }
        .form__row {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 24px;
            width: 100%;
        }
        .form__row--align-center {
            align-items: center;
            flex-wrap: nowrap;
        }
        .form__row--justify-right {
            justify-content: flex-end;
            flex-wrap: nowrap;
        }
        .form__row:last-child {
            margin-bottom: 0;
        }
        .form__row .input__wrapper {
            width: calc(50% - 21px);
        }
        .form__row .input__wrapper-full {
            width: 100%;
        }
        .input__wrapper-full .select-with-name__select {
            width: 100%;
            margin-right: 0;
        }
        .input__wrapper-full .select-with-name__select .jq-selectbox__select {
            width: 100%;
        }
        .form__row .textarea__wrapper {
            width: 100%;
            height: auto;
            position: relative;
        }
        .form__row .textarea__wrapper textarea {
            height: 152px;
        }
        .textarea__wrapper .input__label {
            top: 28px;
        }
        .form__error {
            color: #E71C00;
        }

        /*Ð—Ð°Ð³Ñ€ÑƒÐ·ÐºÐ° Ñ„Ð°Ð¹Ð»Ð°*/
        /* .file-upload {

} */
        .before-ico {
            padding-left: 44px;
            position: relative;
        }
        .before-ico::before {
            content: '';
            display: block;
            width: 32px;
            height: 32px;
            position: absolute;
            top: 0px;
            left: 0px;
            background: center center / cover no-repeat;
        }
        .file-upload input {
            display: none;
        }
        .file-upload__load {
            cursor: pointer;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
        }
        .file-upload__load::before {
            background-image: url('/local/templates/main/css/../img/attach.svg');
        }
        .file-upload__name {
            color: #005D9F;
            transition: .2s;
        }
        .file-upload__name:hover {
            color: #F08400;
        }
        .file-upload__list {
            margin-top: 24px;
        }
        .file-upload__list:empty {
            display: none;
        }
        .file-upload__item {
            display: block;
            position: relative;
            padding-left: 44px;
            margin-bottom: 20px;
        }
        .file-upload__item::before {
            background-image: url('/local/templates/main/css/../img/file.svg');
        }
        .file-upload__file-name {
            position: relative;
            padding-right: 44px;
        }
        .file-upload__file-info {
            margin-top: 4px;
            text-transform: uppercase;
        }
        .file-remove {
            position: absolute;
            top: 0;
            right: 0;
            width: 32px;
            height: 32px;
            cursor: pointer;
        }
        .file-remove::before,
        .file-remove::after {
            content: '';
            display: block;
            width: 16px;
            height: 2px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            background: #787F91;
            transition: .2s;
        }
        .file-remove::after {
            transform: translate(-50%, -50%) rotate(-45deg);
        }
        .file-remove:hover::before,
        .file-remove:hover::after {
            background: #F08400;
        }
        .file-upload__error {
            color: #E71C00;
            font-weight: 450;
            font-size: 12px;
            line-height: 16px;
            width: 100%;
            margin-top: 8px;
        }
        .file-upload__error:empty {
            display: none;
        }
        .file-upload__descript {
            font-style: italic;
            margin-top: 8px;
            width: 100%;
        }
        .soglas-text {
            margin-right: 40px;
        }
        label.error {
            display: block;
            color: #E71C00;
            font-weight: 450;
            font-size: 12px;
            line-height: 16px;
            width: 100%;
            margin-top: 4px;
            padding-left: 16px;
            margin-bottom: 24px;
        }
        input.error ~ .input__label,
        textarea.error ~ .input__label {
            color: #E71C00;
        }
        .after-table {
            margin-top: 16px;
        }
        .color-black {
            color: #000;
        }
        img.unset-width-img,
        .elements-row__one-third img.unset-width-img {
            width: auto !important;
        }
        .mb-img {
            margin-bottom: 24px;
        }
        .mb-24 {
            margin-bottom: 24px;
        }
        .rating {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-around;
        }
        .rating__item {
            display: block;
            width: calc(50% - 32px);
            margin-bottom: 50px;
            color: #005D9F;
        }
        .rating__logo {
            width: 100%;
            height: 161px;
            border: 1px solid #D5E2F7;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .rating__item .rating__logo img {
            width: auto !important;
            max-width: 100%;
            max-height: 100%;
            flex-shrink: 0;
        }
        .rating__bottom {
            display: flex;
            flex-wrap: nowrap;
            align-items: flex-start;
            justify-content: space-between;
            margin-top: 16px;
        }
        .rating__val {
            color: #2C3148;
        }
        .page-select {
            margin-bottom: 40px;
            position: relative;
            z-index: 1 !important;
        }
        .select-with-name__select--no-name .jq-selectbox__select {
            padding: 16px 56px 16px 16px;
        }
        .select-with-name__select--no-name .opened .jq-selectbox__trigger-arrow {
            transform: translate(-50%, -50%) rotate(-135deg);
            margin-top: 3px;
        }
        .elements-form-subscribe__form--mla {
            margin-left: auto;
            width: calc(50% - 60px - 94px);
        }

        .mb_40 {
            margin-bottom: 40px;
        }
        .mt_40 {
            margin-top: 40px;
        }
        .mt_0 {
            margin-top: 0 !important;
        }
        .ml-a {
            margin-left: auto;
        }



        /*11-08-2022*/
        .photogallery-slider {
            position: relative;
            width: 100%;
            max-width: 932px;
            margin: 32px auto;
            overflow: hidden;
        }
        .photogallery-slider__item {
            flex-shrink: 0;
            width: 100%;
            height: 448px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            cursor: pointer;
        }
        .photogallery-slider__item-descr {
            color: #2C3148;
            font-weight: 700;
            width: 100%;
            text-align: center;
        }
        /* .photogallery-slider__item img {
    width: 100%;
} */
        .photogallery-slider__nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 16px;
        }
        .photogallery-slider__nav .swiper-button {
            position: static;
            display: flex;
        }
        .photogallery-slider__nav .swiper-button-disabled {
            opacity: 1;
            border-color: #ABADB6;
        }
        .photogallery-slider__nav .swiper-button-disabled .swiper-button_arrow {
            background: #ABADB6;
        }
        .photogallery-slider__nav .swiper-button-disabled .swiper-button_arrow::before {
            border-color: #ABADB6;
        }
        .photogallery-slider .swiper-pagination-nav {
            position: static;
            width: auto;
            font-size: 20px;
            font-weight: 600;
            line-height: 32px;
        }
        .photogallery-slider .swiper-pagination-nav .swiper-pagination-total {
            color: #ABADB6;
        }
        .photogallery-slider .swiper-slide img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
            cursor: pointer;
        }
        .photogallery-popup {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            background: rgba(44, 49, 72, 0.75);
            backdrop-filter: blur(20px);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease 0.2s;
        }
        .photogallery-popup--show {
            opacity: 1;
            pointer-events: all;
            transition: opacity 0.2s ease 0.3s;
        }
        .pswp__button--share,
        .pswp__button--fs {
            display: none !important;
        }
        .pswp__ui--fit .pswp__caption,
        .pswp__ui--fit .pswp__top-bar {
            opacity: 1;
            background: none !important;
        }
        .pswp__zoom-wrap {
            position: absolute;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;

        }
        .pswp__img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: auto !important;
            height: auto !important;
            max-width: calc(100vw - 252px) !important;
            max-height: calc(100vh - 280px);
            pointer-events: none;
        }
        .pswp__counter {
            height: auto;
            position: fixed;
            top: auto;
            left: 50%;
            bottom: 84px;
            transform: translate(-50%,0);
            padding: 0;
            font-weight: 600;
            font-size: 20px;
            line-height: 32px;
            opacity: 1;
        }
        .pswp__caption__center {
            height: auto;
            position: fixed;
            top: calc((84px));
            left: calc((100vw - 1300px) / 2);
            padding: 0;
            font-weight: 750;
            font-size: 20px;
            line-height: 32px;
            opacity: 1;
            color: #fff;
            max-width: 1300px;
            width: 100%;
            text-transform: uppercase;
            text-align: center;
        }

        .pswp__button--arrow--left,
        .pswp__button--arrow--right {
            width: 126px;
            opacity: 1;
        }

        .pswp__button::before {
            background: url(/local/templates/main/css/../img/gallery-arrow.svg) center center / contain no-repeat;
            width: 56px;
            height: 56px;
            top: 24px;
        }
        .pswp__button:hover::before {
            background-image: url(/local/templates/main/css/../img/gallery-arrow-blue.svg);
        }
        .pswp__button--arrow--left::before {
            left: 50px;
            transform: rotate(180deg);
        }
        .pswp__button--arrow--right::before {
            right: 50px;
        }

        .photogallery-popup__close,
        .pswp__button--close {
            position: fixed;
            top: 22px;
            right: 22px;
            width: 32px;
            height: 32px;
            cursor: pointer;
            opacity: 1;
        }
        .photogallery-popup__close::before,
        .photogallery-popup__close::after,
        .pswp__button--close::before,
        .pswp__button--close::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 24px;
            height: 2px;
            background: #ffffff;
            transition:
                transform 0.2s ease 0s,
                background 0.2s ease 0s;
        }
        .photogallery-popup__close:hover::before,
        .photogallery-popup__close:hover::after,
        .pswp__button--close:hover::before,
        .pswp__button--close:hover::after {
            background: #F08400;
        }
        .photogallery-popup--show .photogallery-popup__close::before,
        .photogallery-popup--show .photogallery-popup__close::after,
        .pswp--open .pswp__button--close::before,
        .pswp--open .pswp__button--close::after {
            transition:
                transform 0.2s ease 0.5s,
                background 0.2s ease 0s;
        }
        .photogallery-popup--show .photogallery-popup__close::before,
        .pswp--open .pswp__button--close::before {
            transform: translate(-50%, -50%) rotateZ(45deg);
        }
        .photogallery-popup--show .photogallery-popup__close::after,
        .pswp--open .pswp__button--close::after  {
            transform: translate(-50%, -50%) rotateZ(-45deg);
        }
        .photogallery-popup__list {
            width: calc(100% - 256px);
            height: calc(100% - 200px);
            margin: 100px 128px;
            overflow: hidden;
        }
        .photogallery-popup__item {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
        }
        .photogallery-popup__item img {
            max-width: 100%;
            max-height: 100%;
        }
        .photogallery-popup__video {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .photogallery-popup__video video {
            height: 100%;
        }
        .photogallery-popup__list .swiper-button_next {
            top: 50%;
            right: 52px;
            transform: translateY(-50%);
        }
        .photogallery-popup__list .swiper-button_prev {
            top: 50%;
            left: 52px;
            transform: translateY(-50%) rotateZ(180deg);
        }
        .photogallery-popup__nav {
            position: absolute;
            /* bottom: 44px; */
            /* display: flex;
    justify-content: space-between;
    align-items: center; */
            top: 50%;
            left: 12px;
            transform: translate(0,-50%);
            z-index: 1;
            width: calc(100% - 24px);
            height: 32px;
            visibility: hidden;
        }
        .photogallery-popup__nav .swiper-button {
            visibility: visible;
        }
        .photogallery-popup__nav .swiper-pagination {
            top: calc(50vh - 64px);
            right: 0;
            left: auto;
            width: 100%;
            /*width: auto;*/
            color: #ffffff;
            font-size: 20px;
            font-weight: 600;
            line-height: 32px;
            visibility: visible;
        }
        .photogallery-popup__nav .swiper-pagination .swiper-pagination-total {
            color: #ABADB6;
        }
        .photogallery-popup__name {
            position: absolute;
            top: 0;
            left: 0;
            color: #ffffff;
            font-size: 20px;
            font-weight: 750;
            line-height: 32px;
        }
        .pswp__button--zoom {
            display: none !important;
        }
        .pswp__button--close {
            background: none;
        }



        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .narrow-form-wrapper {
            max-width: 600px;
        }
        .checbox__wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .checbox__wrapper .jq-checkbox {
            margin: 1px 8px 0 0;
        }
        .w100 {
            width: 100% !important;
        }
        .jq-checkbox,
        .jq-radio {
            width: 24px;
            height: 24px;
            background: rgba(44, 49, 72, 0.05);
            border: 1px solid #787F91;
            border-radius: 0;
            box-shadow: none;
            overflow: visible;
            transition: 0;
        }
        .jq-radio {
            border-radius: 50%;
        }
        .jq-checkbox__div,
        .jq-checkbox.checked .jq-checkbox__div {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            width: 14px;
            height: 7px;
            border-left: 2px solid;
            border-bottom: 2px solid;
            border-color: #F08400;
            margin: -2px 0 0 0;
            opacity: 0;
        }
        .jq-radio__div,
        .jq-radio.checked .jq-radio__div {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 14px;
            height: 14px;
            margin: 0;
            box-shadow: none;
            border-radius: 50%;
            background: #F08400;
            opacity: 0;
        }
        .jq-checkbox:hover,
        .jq-radio:hover  {
            border-color: #F08400;
        }
        .jq-checkbox:hover .jq-checkbox__div,
        .jq-radio:hover .jq-radio__div {
            opacity: 1;
            border-color: #F08400;
        }

        .jq-checkbox.checked {
            background: #F08400;
            border-color: #F08400;
        }

        .jq-radio.checked {
            border-color: #F08400 !important;
        }
        .jq-checkbox.checked .jq-checkbox__div,
        .jq-radio.checked .jq-radio__div {
            opacity: 1;
            border-color: #fff;
        }

        .jq-checkbox.disabled,
        .jq-radio.checked {
            background: #f4f4f6;
            opacity: 1;
            border-color: #F08400;
            border: 1px solid #cbccd3;
            pointer-events: none;
        }
        .jq-checkbox.disabled.checked .jq-checkbox__div,
        .jq-radio.disabled.checked .jq-radio__div {
            border-color: #cbccd3;
        }
        .jq-checkbox label.error,
        .jq-radio label.error {
            font-size: 0;
            display: none;
            position: absolute;
            top: -1px;
            left: -1px;
            width: calc(100% + 2px);
            height: calc(100% + 2px);
            border: 1px solid #E71C00;
            margin: 0;
        }
        .jq-radio label.error {
            border-radius: 50%;
        }
        .jq-checkbox:not(.checked) label.error,
        .jq-radio:not(.checked) label.error {
            display: block;
        }
        .jq-checkbox:not(.checked) label.error ~ .jq-checkbox__div,
        .jq-radio:not(.checked) label.error ~ .jq-radio__div {
            border-color: #E71C00;
        }
        .checbox__label {
            width: calc(100% - 32px);
        }


        .capcha .capcha__input-wrapper {
            width: calc(100% - 275px);
            min-width: 220px;
        }
        .capcha__image {
            height: 54px;
        }
        .h5_marginBot {
            margin-bottom: 32px;
        }
        .half {
            width: calc(50% - 20px);
        }
        .color-red {
            color: #E71C00;
        }
        .form__row_table-row {
            display: block;
            width: calc(100vw - 252px);
            max-width: 1428px;
        }
        .big-label-textarea {
            padding-top: 32px;
        }

        .bloks-with-img_thin .bloks-with-img__big {
            width: 100%;
            margin-right: 0;
            margin-bottom: 52px;
        }
        .bloks-with-img_thin .bloks-with-img__small {
            justify-content: flex-start;
        }
        .bloks-with-img_thin .bloks-with-img__img {
            margin-bottom: 24px;
        }
        .bloks-with-img_thin .bloks-with-img__big .bloks-with-img__img {
            height: 520px !important;
        }
        .bloks-with-img_thin .bloks-with-img__wrapper {
            width: 100%
        }
        .rowspan-center td[rowspan] {
            vertical-align: middle;
        }
        .top-block_gray {
            position: relative;
            transform: translateY(-842px);
            padding: 842px 0 88px 0;
            margin-bottom: -842px;
            box-shadow: 0 -100px 0 0 #EBF3FF;
        }
        .register-contact {
            padding: 24px;
            background: #fff;
            margin-bottom: 12px;
        }
        .register-contact__inner {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
        }
        .register-contact__icons {
            width: 72px;
            height: 72px;
        }
        .register-contact__inform {
            width: calc(100% - 96px);
            margin-left: auto;
        }
        /* .register-contact__inform a::before {
    display: none;
} */
        .register-contact__inform a {
            text-decoration: none;
        }
        .register-contact__inform a:hover {
            color: #F08400;
        }
        .register-contact__inform a[href^="tel"],
        .register-contact__inform a[href^="tel"]:hover {
            color: #2C3148;
        }
        .link-with-lines--horizontal-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            width: calc(100% + 60px);
        }
        .link-with-lines--horizontal-list .link-with-lines {
            width: calc(33.33% - 60px);
            margin-right: 60px;
            display: block;
            position: relative;
            padding-bottom: 56px;
        }
        .link-with-lines--horizontal-list__four .link-with-lines {
            width: calc(25% - 60px);
        }
        .link-with-lines--horizontal-list .link-with-lines_arrow {
            position: absolute;
            left: 0;
            bottom: 7px;
            margin-left: 0;
        }
        .link-with-lines--horizontal-list .link-with-lines::before {
            content: '';
            position: absolute;
            right: -30px;
            top: 0;
            width: 3px;
            height: 100%;
            background: #D5E2F7;
        }
        .link-with-lines--horizontal-list__four .link-with-lines:nth-child(3n):before {
            display: block;
        }
        .link-with-lines--horizontal-list__four .link-with-lines:nth-child(4n):before {
            display: none;
        }
        .t2_marginBot {
            margin-bottom: 40px;
        }
        h6,.h6 {
            font-weight: 750;
        }
        .p2_marginBot-52 {
            margin-bottom: 52px;
        }
        .file-download_archiv {
            background-color: #EBF3FF;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
            padding: 28px 24px 28px 80px;
        }
        .file-download_archiv::before {
            top: 24px;
            left: 24px;
        }
        .file-download_white::before {
            background-color:#FFF;
            background-image:url('/local/templates/main/css/../img/download-white.svg');
        }
        .file-download_marginBot {
            margin-bottom: 40px;
        }
        .spoiler__content .file-download-list {
            margin-top: 16px;
        }
        .file-download-list .file-download {
            margin-bottom: 32px;
        }
        .file-download-list .file-download:last-child {
            margin-bottom: 0;
        }
        .banner-zag-link {
            text-transform: uppercase;
            font-weight: 750;
            max-width: 600px;
        }
        .banner-zag-link svg {
            margin: 10px 0px -10px 0px;
        }
        .tabs__list  {
            overflow: auto;
        }
        .tabs__list .simplebar-content {
            display: flex;
            flex-wrap: nowrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .projects {
            border-top: 3px solid #D5E2F7;
            margin-top: 56px;
        }
        .projects_item {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            margin-top: 40px;
            padding-bottom: 40px;
            border-bottom: 3px solid #D5E2F7;
            color: #2C3148;
        }
        .projects_item.hidden-flex {
            display: none;
        }
        .projects_item h4 {
            transition: .2s;
        }
        .projects_item:hover h4 {
            color: #005D9F;
        }
        .projects_ico {
            width: calc(25% - 45px);
            height: 293px;
            background: center top / cover;
        }
        .projects_info {
            width: calc(75% + 45px - 60px);
        }
        .projects_info .t3 {
            margin-top: 24px;
        }
        .h4_marginBot {
            margin-bottom: 40px;
        }
        .serevnovanie-prev {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .serevnovanie-prev__item {
            width: calc(50% - 16px);
            flex-shrink: 0;
        }
        .link-with-lines_date {
            align-items: flex-start;
        }
        .link-with-lines_date .date {
            flex-wrap: nowrap;
            margin-right: 32px;
        }
        .helper-icon {
            display: inline-flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 2px solid #D5E2F7;
            background: #fff;
            color: #005D9F;
            transition: .2s;
            line-height: 0;
            cursor: pointer;
        }
        .helper-icon:hover {
            border-color: #005D9F;
            background: #005D9F;
            color: #fff;
        }
        .helper-icon_to-input {
            position: absolute;
            top: 12px;
            right: -48px;
            background: #F08400;
            color: #fff;
            border: none;
            font-weight: 600;
        }
        .helper-box {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            z-index: 3;
            background: #fff;
            padding: 16px;
            border: 2px solid #D5E2F7;
        }
        .relative {
            position: relative;
        }


        /*Ð¡Ð¾Ð±Ñ‹Ñ‚Ð¸Ñ*/
        .events__item {
            position: relative;
            z-index: 1;
            padding: 32px 0;
            border-top: 3px solid #D5E2F7;
            border-bottom: 3px solid #D5E2F7;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: -3px;
        }
        .events__info {
            padding-top: 10px;
            width: 83%;
            position: relative;
            z-index: 2;
            pointer-events: none;
        }
        .events__info sup {
            pointer-events: all;
        }
        /* .events__info sup a::before {
    display: none;
} */
        .events__info sup a {
            text-decoration: none;
        }
        .events-title {
            color: #2C3148;
        }
        .h4_margin {
            margin: 52px 0 40px;
        }
        .events__link-list {
            margin-top: 26px;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            font-weight: 600;
            pointer-events: all;
        }
        .events__link-list a {
            margin: 0 40px 20px 0;
            line-height: 160%;
            color: #005D9F;
            position: relative;
        }
        .events__link-list a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: #005D9F;
            opacity: 1;
            transition: opacity 0.2s ease 0s;
        }
        .events__link-list a:hover {
            color: #2C3148;
        }
        .events__link-list a:hover::before {
            opacity: 0;
        }
        .events__link-list a:last-child {
            margin-right: 0px;
        }
        .events__item-link {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
        }
        .pagination_left {
            justify-content: flex-start;
        }
        .spoiler__title.h5, .spoiler__title.h4 {
            margin: 0 !important;
        }
        .news_top .select-with-name__select {
            margin-right: 0;
        }
        .mb-40 {
            margin-bottom: 40px;
        }

        /*ÐÐ¾Ð²Ð¾ÑÑ‚Ð¸*/
        .block-with-column {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .clear {
            width: 100%;
            clear: both;
        }
        .small-column {
            width: calc((100% + 60px) / 12 * 2 - 60px);
        }
        .big-column {
            width: calc((100% + 60px) / 12 * 8 - 60px);
        }
        .big-column_marginLeft {
            margin-left: 60px;
        }

        .gray-solical__item {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 64px;
            height: 64px;
            border: 3px solid #EBF3FF;
            margin-bottom: 8px;
            transition: .2s;
        }
        .gray-solical__item path {
            transition: .2s;
        }
        .gray-solical__item:hover {
            border-color: #F08400
        }
        .gray-solical__item:hover path {
            fill: #F08400
        }
        .full-ico {
            width: 100%;
            display: block;
            line-height: 1;
        }

        .keywords {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 24px 0 12px;
            border-top: 3px solid #D5E2F7;
            border-bottom: 3px solid #D5E2F7;
        }
        .keywords__item {
            margin-right: 24px;
            color: #005D9F;
            transition: .2s;
            margin-bottom: 12px;
        }
        .keywords__item:nth-child(2) {
            margin-left: 24px;
        }
        .keywords__item:last-child {
            margin-right: 0;
        }
        .keywords__item:hover {
            color: #F08400;
        }

        /*ÐœÐµÐ´Ð¸Ð°Ð³Ð°Ð»ÐµÑ€Ñ€Ñ€ÐµÑ*/
        .complex-filter {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            margin: 32px 0 40px;
        }

        .complex-filter__sort {
            margin-left: auto;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: flex-start;
            height: 56px;
            color: #2C3148;
            transition: .2s;
            font-weight: 400;
        }
        .complex-filter__sort:hover {
            color: #F08400;
        }
        .complex-filter__sort-ico {
            width: 24px;
            height: 24px;
            padding: 4px 2px;
            margin-left: 12px;
        }
        .complex-filter__sort-ioc-row {
            width: 20px;
            height: 3px;
            background: #F08400;
            margin-bottom: 4px;
            transition: .2s;
        }
        .complex-filter__sort-ioc-row:nth-child(1) {
            width: 7px;
        }
        .complex-filter__sort-ioc-row:nth-child(2) {
            width: 14px;
        }
        .complex-filter__sort.up .complex-filter__sort-ioc-row:nth-child(1) {
            width: 20px;
        }
        .complex-filter__sort.up .complex-filter__sort-ioc-row:nth-child(3) {
            width: 7px;
        }

        .complex-filter .select-with-name__select {
            margin-right: 24px;
            margin-bottom: 0;
        }
        .tabs__list_nowrap {
            white-space: nowrap;
        }
        .select-with-name__select .jq-selectbox {
            width: 100%;
        }

        .multimedia {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
        }
        .multimedia-pt40 {
            padding-top: 40px;
        }
        .multimedia_item {
            width: calc(50% - 30px);
            margin-bottom: 52px;
            position: relative;
        }
        .multimedia__prev {
            width: 100% ;
            height: 384px;
            margin-bottom: 16px;
            position: relative;
            display: block;
            background: center center / cover;
        }
        .multimedia__prev video {
            height: 100%;
            width: 100%;
        }
        .multimedia__info {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            margin-bottom: 16px;
        }
        .multimedia__views {
            margin-left: auto;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: flex-start;
        }
        .multimedia__views::after {
            content: '';
            display: block;
            width: 32px;
            height: 32px;
            margin-left: 8px;
            background: url('/local/templates/main/css/../img/eye.svg') center center no-repeat;
        }
        .multimedia__source {
            width: 100%;
            margin-top: 8px;
            transform: translateY(-1px);
        }
        .multimedia__source .outerlink span {
            border-bottom: none;
            font-weight: 700;
        }
        .video__time {
            position: absolute;
            right: 8px;
            bottom: 8px;
            padding: 2px 8px;
            background: #2C3148;
            border-radius: 5px;
            color: #fff;
        }
        .video__button[style="display: none;"] ~ .video__time {
            display: none;
        }
        .banner_fon-youtube::before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            background: url('/local/templates/main/css/../img/youtube-banner.png') calc(100% - 37px) -94px no-repeat;
            pointer-events: none;
        }

        .multimedia__count {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 88px;
            height: 88px;
            background: #F08400;
            color: #fff;
            font-weight: 300;
            font-size: 18px;
            line-height: 24px;
            transition: .2s;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .multimedia_item:hover .multimedia__count {
            background: #005D9F;
        }
        .multimedia__count .h4 {
            width: 100%;
            text-align: center;
            align-self: flex-end;
        }
        .multimedia__count .t3 {
            text-transform: uppercase;
            align-self: flex-start;
        }
        .max-link {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        .page-select--what-filial-width {
            width: 437px;
        }
        .page-select--what-filial-width .jq-selectbox__select {
            width: 100%;
        }
        .max-w-1180 {
            max-width: 1180px;
        }
        .mt-32 {
            margin-top: 32px;
        }
        .uppercase {
            text-transform: uppercase;
        }

        .material {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 32px;
        }
        .material:last-child {
            margin-bottom: 0;
        }
        .material__ico {
            width: 188px;
            height: 173px;
            border: 2px solid #D5E2F7;
            background: center center / cover no-repeat;
            position: relative;
        }
        .material__info {
            margin-left: auto;
            width: calc(100% - 188px - 32px);
        }
        .mater-al-wide-ico-list .material__ico {
            width: 308px;
        }
        .mater-al-wide-ico-list .material__info {
            margin-left: auto;
            width: calc(100% - 308px - 32px);
        }
        .material__ico_no-size {
            background-size: unset;
        }
        .material__ico_no-border {
            border: none;
        }
        .material__info .h6 {
            margin-bottom: 8px;
        }
        .material__info .c2 {
            margin-bottom: 24px;
        }
        .material__info .file-download {
            text-transform: none;
            padding-left: 56px;
        }
        .file-download .color-blue {
            transition: .2s;
        }
        .file-download:hover .color-blue {
            color: #F08400;
        }
        .spoiler__content_pr0 {
            padding-right: 0;
        }
        .h5-material-margin {
            margin: 52px 0 40px;
        }
        .h5-material-margin--mt0 {
            margin-top: 0 !important;
        }
        .material__ico video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .multimedia__magnifier {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(44, 49, 72, 0.2);
            opacity: 0;
            transition: .2s;
        }
        .multimedia__magnifier::before {
            content: '';
            display: block;
            width: 48px;
            height: 48px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: url('/local/templates/main/css/../img/magnifier.svg') center center / cover no-repeat;
        }
        .multimedia_item:hover .multimedia__magnifier {
            opacity: 1;
        }

        .multimedia_three__title {
            margin-bottom: 16px;
            display: block;
            text-transform: uppercase;
            color: #2C3148;
            transition: .2s;
        }

        .multimedia_three__title:hover {
            color: #005D9F;
        }
        .img-popup-wrapper {
            position: relative;
        }
        .img-popup-wrapper img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
        }
        .pswp {
            backdrop-filter: blur(40px);
        }
        .pswp__bg {
            background: rgba(44, 49, 72, 0.75);
        }
        .pswp__preloader {
            display: none;
        }
        .text-block_text-margin.t3 p,
        .text-block_text-margin.t3 ol,
        .text-block_text-margin.t3 ul {
            margin-bottom: 20px;
        }
        .text-block_text-margin.t3 p:last-child {
            margin-bottom: 0;
        }
        .projects_item--izadnie {
            align-items: flex-start;
        }
        .projects_item--izadnie .projects_ico {
            border: 3px solid #D5E2F7;
            height: auto !important;
            width: calc((100% + 60px) / 12 * 2 - 60px);
        }
        .projects_item--izadnie .projects_ico img {
            width: 100%;
        }
        .projects_item--izadnie .projects_info {
            width: calc((100% + 60px) / 12 * 10 - 60px);
        }
        .projects-mt0 {
            margin-top: 0;
        }
        .element-slide .c3 {
            margin-top: 16px;
        }
        .projects_info .c3 {
            margin: 32px 0;
        }
        .projects_item--managment {
            align-items: flex-start;
        }
        .projects_item--managment .projects_ico {
            height: auto;
        }
        .section_top {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 52px;
        }
        .display-flex-700 {
            display: none;
        }
        .photo-slider__container {
            overflow: hidden;
        }
        .photo-slide {
            width: calc(50% - 30px);
        }
        .photo-slide .element-slider__ico {
            position: relative;
            height: 384px;
        }
        .photo-slide .swiper-button {
            top: 158px;
        }
        .more-link.display-flex-700 {
            margin-top: 32px;
            margin-left: auto;
        }
        .flex {
            display: flex;
        }
        .element-slider .h1 {
            word-break: break-word;
        }
        .block-whith-image {
            position: relative;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .block-whith-image::before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
            top: 0px;
            left: 0px;
            background: #005D9F;
            opacity: 0.2;
        }
        .block-whith-image--inner {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            min-height: 708px;
            padding: 87px 0;
            color: #ffffff;
        }
        .block-whith-image--inner .p1 {
            max-width: 100%;
            word-wrap: break-word;
        }
        .top-page-banner__text_left {
            max-width: 100%;
        }

        .ges_gray .ges-levels__top {
            margin-top: 0;
        }
        .ges_gray .jq-selectbox__select {
            background: #fff;
        }
        .ges_gray .water-day__trigger-wrap {
            background: rgba(0, 93, 159, 0.2);
        }
        .ges_gray .water-day__trigger {
            color: #005D9F;
        }
        .ges_gray .water-day__trigger_selected {
            background: #005D9F;
            color: #fff;
        }
        .ges_gray .ges-levels__levels,
        .ges_gray .water-day-text {
            fill: #2C3148;
        }
        .footer {
            position: relative;
            z-index: 1;
            margin-top: 24px;
        }
        .info-group {
            pointer-events: none;
        }
        .input__wrapper_datepicker {
            width: 328px;
        }
        .input__wrapper_datepicker .input {
            background: url(/local/templates/main/css/../img/calendar.svg) calc(100% - 8px) center no-repeat;
            background-color: #EBF3FF;
        }
        .ges_gray .input__wrapper_datepicker .input {
            background-color: #fff;
        }
        .select-with-name__name {
            pointer-events: none;
        }
        .datepicker--pointer {
            display: none;
        }
        .datepicker {
            background: #fff;
            border: none;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 0;
            font-family: 'Avenir Next Cyr', sans-serif;
            font-weight: 750;
            font-size: 16px;
            color: #005D9F;
            width: 328px;
            margin-top: -8px;
            padding: 24px;
            box-sizing: border-box;
        }
        .datepicker-inline .datepicker {
            margin-top: 4px;
        }
        .datepicker--nav {
            padding: 0 0 16px;
            border: none;
        }
        .datepicker--nav-title {
            background: none !important;
        }
        .datepicker--nav-title i {
            margin-left: 3px;
            color: inherit;
        }
        .datepicker--nav-action {
            width: 40px;
            height: 40px;
            background: none !important;
        }
        .datepicker--nav-action[data-action="next"] {
            transform: rotate(180deg);
        }
        .datepicker--nav-action path {
            stroke: #F08400;
            stroke-width: 3;
            transition: .2s;
        }
        .datepicker--nav-action:hover path {
            stroke: #005D9F;
        }
        .datepicker--content {
            padding: 0;
        }
        .datepicker--days-names {
            margin: 0;
        }
        .datepicker--day-name {
            height: 40px;
            font-size: inherit;
            color: #ABADB6;
        }
        .datepicker--cell-day {
            width: calc(100% / 7);
            height: 40px;
            border-radius: 0;
        }
        .datepicker--cell-day.-other-month-, .datepicker--cell-year.-other-decade- {
            color: rgba(171, 173, 182, 0.5);
        }
        .datepicker--cell.-current- {
            color: #2C3148;
            box-shadow: inset 0 0 0 2px #F08400;
        }
        .datepicker--cell.-focus- {
            background: #EBF3FF;
        }
        .datepicker--cell.-disabled- {
            pointer-events: none;
        }
        .datepicker--cell.-selected-,
        .datepicker--cell.-selected-.-current-,
        .datepicker--cell.-selected-.-focus- {
            color: #fff;
            background: #005D9F;
        }

        .prioritets {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
            width: 100%;
        }
        .prioritets__item {
            width: 25%;
            padding-right: 60px;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }
        .prioritets__ico {
            width: 64px;
            height: 64px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }
        .prioritets__ico img {
            max-width: 100%;
            max-height: 100%;
        }
        .prioritets__info {
            width: calc(100% - 64px - 32px);
        }
        .prioritets__info .t2 {
            margin-bottom: 4px;
        }
        .shema--desctop {
            display: block;
            width: 100%;
        }
        .shema--pda,
        .shema--mobile {
            display: none;
            width: 100%;
        }
        .simplebar-track.simplebar-horizontal {
            top: 0;
            transition: top .4s linear;
        }
        .scroll-table[data-class*="clear-table"] .simplebar-placeholder_border {
            border: none;
        }
        #send-form {
            transform: translate(0,-180px);
        }
        .contacts-list {
            width: 100%;
            display: flex;
            border: 2px solid #D5E2F7;
            border-bottom: none;
            flex-wrap: wrap;
        }
        .contacts-list__elem {
            border-bottom: 2px solid #D5E2F7;
            padding: 32px 16px;
        }
        .contacts-list__elem .h5 {
            margin: 0;
        }
        .contacts-list__elem_name {
            width: 320px;
        }
        .contacts-list__elem_value {
            width: calc(100% - 320px);
        }
        .contacts-list__elem:nth-child(2n - 1) + .contacts-list__elem {
            border-left: 2px solid #D5E2F7;
        }
        hr:not(class) {
            margin: 32px 0;
            border: 1px solid #D5E2F7;
        }

        .tabs__list .simplebar-track.simplebar-horizontal {
            top: auto;
            bottom: 24px;
        }

        .no-select {
            pointer-events: none;
        }
        .no-select .jq-selectbox__trigger {
            display: none;
        }

        .first-blue td:first-child {
            color: #005D9F;
            font-weight: 600;
        }
        .block_gray .jq-selectbox__select {
            background: #fff;
        }

        .outerlink {
            position: relative;
            margin-right: 4px;
        }
        .outerlink span {
            color: #005D9F;
            /* border-bottom: 1px solid #005D9F; */
            transition: .2s;
        }
        .outerlink:hover span {
            color: #2C3148;
            border-color: transparent;
        }
        .outerlink i {
            position: relative;
            display: inline-block;
            margin: 4px 0 -6px 3px;
            width: 24px;
            height: 24px;
            background: url(/local/templates/main/css/../img/outerlink.svg) center center / contain no-repeat;
        }
        .reset-button {
            position: relative;
            width: 24px;
            height: 24px;
            margin-left: auto;
            cursor: pointer;
        }
        .reset-button::before,
        .reset-button::after {
            content: '';
            display: block;
            width: 20px;
            height: 2px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            background: #ABADB6;
            transition: .2s;
        }
        .reset-button::after {
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        .news-filter .select-with-name__select{
            margin-left: 32px;
        }

        .context {
            position: absolute;
            left: 0;
            top: 100%;
            z-index: 1;
            background: #fff;
            padding: 7px 0;
            border: 2px solid #D5E2F7;
        }
        .context:empty {
            display: none;
        }
        .context-elem {
            cursor: pointer;
            padding: 7px 14px;
            transition: .2s;
        }
        .context-elem:hover {
            background: #EBF3FF;
        }
        .outer-link.link-with-lines_arrow{
            transform: rotate(-45deg);
        }

        .AvantGardeGothic {
            font-family: 'AvantGardeGothic';
        }
        .header-item.AvantGardeGothic .header-link {
            font-weight: 100;
            font-size: 13px;
        }
        .no-pointer {
            pointer-events: none;
        }

        .developers .t1 {
            margin-bottom: 24px;
        }
        .diagramm__wrap {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .diagramm_center {
            margin: 48px auto 48px;
        }
        .diagramm canvas {
            transform: rotate(-90deg);
        }
        .diagramm__legend {
            margin-top: 40px;
            font-size: 16px;
            line-height: 24px;
            width: 100%;
        }
        .diagramm__item {
            margin-bottom: 8px;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: flex-start;
        }
        .diagramm__item::before {
            content: '';
            display: block;
            width: 12px;
            height: 12px;
            margin-right: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }
        .diagramm__item:nth-child(1):before {
            background: #005D9F;
        }
        .diagramm__item:nth-child(2):before {
            background: #F08400;
        }
        .diagramm__item:nth-child(3):before {
            background: #A8BF26;
        }
        .diagramm__item:nth-child(4):before {
            background: #E92841;
        }
        .diagramm__item b {
            font-weight: 600;
        }
        .diagramm__image {
            display: inline-block;
            position: relative;
            margin-left: 128px;
        }

        .diagramm__value {
            position: absolute;
            font-weight: 750;
            font-size: 22px;
            line-height: 28px;
            color: #005D9F;
        }
        .diagramm__value::before,
        .diagramm__value::after {
            content: '';
            display: block;
            width: 100%;
            height: 1px;
            position: absolute;
            bottom: -4px;
            left: 0px;
        }


        .diagramm__value:nth-child(1) {
            color: #005D9F;
            top: 84%;
            left: 90%;
        }
        .diagramm__value:nth-child(1)::before {
            background: #005D9F;
            width: 105%;
        }
        .diagramm__value:nth-child(1)::after {
            background: #005D9F;
            width: 56px;
            left: auto;
            right: 100%;
            transform: rotate(45deg);
            transform-origin: bottom right;
        }
        .diagramm-aukcioner .diagramm__value:nth-child(1) {
            top: -6%;
        }
        .diagramm-aukcioner .diagramm__value:nth-child(1)::after {
            transform: rotate(-45deg);
        }

        .diagramm__value:nth-child(2) {
            color: #F08400;
            top: 60%;
            left: -40%;
        }
        .diagramm__value:nth-child(2)::before {
            background: #F08400;
            width: 120%;
        }
        .diagramm__value:nth-child(2)::after {
            background: #F08400;
            width: 80px;
            left: 120%;
            transform: rotate(-38deg);
            transform-origin: bottom left;
        }
        .diagramm__value:nth-child(3) {
            color: #A8BF26;
            top: -10%;
            left: -16%;
        }
        .diagramm__value:nth-child(3)::before {
            background: #A8BF26;
            width: 90%;
        }
        .diagramm__value:nth-child(3)::after {
            background: #A8BF26;
            width: 80px;
            left: 90%;
            transform: rotate(38deg);
            transform-origin: bottom left;
        }
        .diagramm-aukcioner .diagramm__value:nth-child(3) {
            top: -14%;
            left: 22%;
        }
        .diagramm-aukcioner .diagramm__value:nth-child(3)::after {
            transform: rotate(78deg);
            width: 18px;
        }
        .diagramm__value:nth-child(4) {
            color: #E92841;
        }
        .diagramm__image {
            width: 312px;
            height: 312px;
        }

        .ges-levels__button {
            background: #EBF3FF;
            color: #2C3148;
            font-size: 16px;
            line-height: 24px;
            font-weight: 450;
            padding: 16px 24px;
        }

        .file-in-text {
            color: #005D9F;
            white-space: nowrap;
        }
        .file-in-text::before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 20px;
            position: relative;
            margin-right: 4px;
            background: #F08400 url('/local/templates/main/css/../img/download.svg') center center / 12px no-repeat;
            top: 4px;
            margin-left: 2px;
        }
        .file-in-text span {
            margin-right: 6px;
            white-space: break-spaces;
            border-bottom: 1px solid #005D9F;
            transition: .2s;
        }
        .file-in-text:hover span {
            border-color: transparent;
        }
        .file-in-text span ~ span {
            color: #787F91;
            border: none;
            white-space: nowrap;
        }

        .strategy {
            width: 100%;
        }

        .strategy__item {
            margin-bottom: 48px;
            align-items: center;
        }
        .strategy__item:last-child {
            margin-bottom: 0;
        }
        .strategy__title .p2:last-child {
            margin-bottom: 0;
        }
        .strategy__info {
            position: relative;
        }
        .strategy__ico {
            width: 48px;
            position: absolute;
            left: -110px;
            top: 50%;
            transform: translate(0,-50%);
        }

        .row-icons {
            flex-wrap: wrap;
            width: calc(100% + 60px);
            justify-content: center;
            margin-bottom: -60px;
        }
        .row-icons__item {
            width: calc(100% / 6 - 60px);
            margin-right: 60px;
            margin-bottom: 60px;
        }
        .row-icons-4-items .row-icons__item {
            width: calc(100% / 4 - 60px);
        }
        .row-icons__image {
            margin-bottom: 16px;
            width: 48px;
            height: 48px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            transition: .3s;
            position: relative;
            top:0;
        }
        .row-icons__image img {
            max-height: 100%;
            max-width: 100%;
        }
        .row-icons__title {
            font-weight: 750;
            font-size: 20px;
            text-transform: uppercase;
            transition: .3s;
            color: #2C3148;
            word-break: break-word;
        }
        .row-icons__item:hover .row-icons__image {
            top: -6px;
        }
        .row-icons__item:hover .row-icons__title {
            color: #005D9F;
        }
        .capitalize {
            text-transform: capitalize;
        }
        .button_mb {
            margin-bottom: 32px;
        }

        .elements-icons {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .elements-icons h5 {
            width: 100%;
        }
        .elements-icons__item {
            width: calc(50% - 16px);
            max-width: 312px;
            margin-top: 40px;
        }
        .elements-icons__item:nth-of-type(2n + 1) {
            margin-right: 32px;
        }
        .elements-icons__item .elements-icons__item-icon {
            width: auto !important;
        }
        .elements-icons__item .h6 {
            margin-top: 16px;
        }

        .elements-row__full .elements-icons__item {
            width: calc(33.333% - 32px);
            max-width: unset;
            margin-top: 40px;
            padding-right: 60px;
        }
        .row-icons-4-items .elements-icons__item {
            width: calc(25% - 32px);
        }
        .link-ikons-list .elements-icons__item .h6 {
            color: #2C3148;
            text-transform: uppercase;
            transition: .2s;
        }
        .link-ikons-list .elements-icons__item:hover .h6 {
            color: #005D9F;
        }

        .more-elements {
            margin-top: 16px;
            cursor: pointer;
            text-align: right;
        }
        .list-hidden {
            display: none;
        }

        .vacancy {
            display: block;
        }
        .vacancy h5 {
            margin: 24px 0 16px;
        }
        .vacancy__row {
            margin-bottom: 16px;
        }

        /* ÐŸÐ¾Ð¸ÑÐº */
        .jq-checkbox {
            transition:
                background 0.2s ease 0s,
                border-color 0.2s ease 0s;
        }
        .jq-checkbox__div,
        .jq-checkbox.checked .jq-checkbox__div {
            transition:
                border-color 0.2s ease 0s,
                opacity 0.2s ease 0s;
        }
        .search__form-top {
            position: relative;
            margin-bottom: 48px;
            padding: 36px 44px 24px;
            background: #005D9F;
        }
        .search__form-checkboxes {
            display: none;
        }
        .search__form-checkboxes .form__row {
            margin: 0 !important;
        }
        .checbox-white__wrapper .jq-checkbox {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid #ffffff;
        }
        .checbox-white__wrapper .checbox__label {
            color: #ffffff;
        }
        .search .form__row {
            justify-content: flex-start;
        }
        .search .form__row:first-child {
            margin: 0 20px 40px;
        }
        .search .checbox__wrapper {
            display: block;
            margin: 0 20px 24px;
        }
        .search .checbox__label {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .search .jq-checkbox {
            flex-shrink: 0;
        }
        .search .checbox__title {
            flex-shrink: 0;
        }
        .search .input__wrapper {
            height: 64px;
        }
        .search .input {
            padding: 24px 40px 8px 0;
            background: none;
            border-width: 2px !important;
            border-color: #ffffff !important;
            color: #ffffff;
            font-size: 26px;
            font-weight: 450;
            line-height: 32px;
        }
        .search .input:hover,
        .search .input:focus,
        .search .input:active {
            border-color: rgba(255, 255, 255, 0.5) !important;
        }
        .search .input__label {
            top: 16px;
            left: 0;
            transform: none;
            color: rgba(255, 255, 255, 0.5);
            font-size: 26px;
            font-weight: 450;
            line-height: 40px;
            opacity: 0;
        }
        .search .input__wrapper .input:focus ~ .input__label,
        .search .input__wrapper.full .input__label {
            transform: translateY(-24px);
        }
        .search__button {
            position: absolute;
            top: 48px;
            right: 64px;
            width: 40px;
            height: 40px;
            background: none;
        }
        .search__button svg {
            width: 100%;
            height: 100%;
        }
        .search__button path {
            transition: stroke 0.2s ease 0s;
        }
        .search__button:hover path {
            stroke: #F08400;
        }
        .search__form-bottom {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
        }
        .search__form-filters {
            display: flex;
            align-items: flex-start;
            opacity: 0;
            transition: opacity 0.2s ease 0.4s;
        }
        .search__radio {
            position: relative;
        }
        .search__radio + .search__radio {
            margin-left: 32px;
        }
        .search__radio label {
            cursor: pointer;
        }
        .search__radio .jq-radio {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            pointer-events: none;
        }
        .search__radio .jq-radio + span {
            text-transform: uppercase;
        }
        .search__radio .jq-radio.checked + span {
            color: #F08400;
        }
        .search__list {
            margin-top: 36px;
        }
        .search__item {
            display: block;
            padding: 40px 64px;
            transition: background 0.2s ease 0s;
            cursor: pointer;
        }
        .search__item:hover {
            background: #D5E2F7;
        }
        .search__item-title {
            color: #2C3148;
        }
        .search__item-subtitle {
            margin-top: 24px;
            color: #F08400;
        }
        .search__item-text {
            margin-top: 16px;
            color: #2C3148;
        }
        .search__error {
            color: #E71C00;
            text-transform: uppercase;
        }

        /* ====== */
        .img-on-third--mt72 {
            margin-top: 72px;
        }
        .img-on-third--mb52 {
            margin-bottom: 52px;
        }
        .img--relative {
            position: relative;
        }
        .img--absolute {
            position: absolute;
            top: 0;
            left: 0;
        }
        .text-block--absolute {
            position: absolute;
            top: 100%;
            left: 0;
        }
        .elements-row__inner-absolute {
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Ñ†Ð²ÐµÑ‚ Ð² Ñ‚Ð°Ð±Ð»Ð¸Ñ†Ðµ */
        .tr-table-blue {
            background: #EBF3FF;
        }

        .elements-row--relative {
            position: relative;
        }
        .content-block--absolute {
            position: absolute;
            top: 0;
            left: 0;
        }

        /* ====== */
        .ir-calendar-select {
            z-index: 2 !important;
            max-width: 312px;
        }
        .file-download-checkbox {
            position: absolute;
            top: 5px;
            left: calc(100% + 38px);
        }
        button.file-download_archiv {
            width: 100%;
        }
        .file-download_archiv-all {
            display: flex;
            align-items: center;
        }
        .file-download_archiv-all label {
            display: flex;
            align-items: center;
        }
        .file-download_archiv-all label .jq-checkbox {
            margin-right: 0;
            margin-left: 8px;
        }
        .file-download_archiv-size {
            display: none;
            margin-left: 16px;
        }
        .block--right .file-download_archiv:last-child {
            margin-bottom: 0;
        }

        .purchases .register-contact__inform a {
            color: #2C3148;
        }
        .purchases .register-contact__inform a:hover {
            color: #F08400;
        }

        /* Ð’ÐÐ˜Ð˜Ð“ Ð¸Ð¼. Ð‘.Ð•.Ð’ÐµÐ´ÐµÐ½ÐµÐµÐ²Ð° */
        .top-page-banner__text_left {
            position: absolute;
            top: 107px;
            left: 134px;
        }
        .video-no-margin {
            margin: 0;
        }

        /* Ð¡Ð¾Ñ€ÐµÐ²Ð½Ð¾Ð²Ð°Ð½Ð¸Ñ */
        .top-page-banner__text_center {
            top: 50%;
            transform: translateY(-50%);
        }
        .sorevnovaniya-header {
            position: relative;
            padding: 16px 28px;
        }
        .sorevnovaniya-header__gradient {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #FFFFFF 0%, #FFFFFF 53.65%, rgba(255, 255, 255, 0) 76.04%)
        }
        .sorevnovaniya-header__link {
            position: relative;
            z-index: 3;
            display: inline-flex;
            align-items: center;
        }
        .sorevnovaniya-header__link::before {
            display: none;
        }
        .sorevnovaniya-header__link-text {
            max-width: 398px;
            margin-left: 32px;
            color: #005D9F;
            transition: color 0.2s ease 0s;
        }
        .sorevnovaniya-header__link:hover .sorevnovaniya-header__link-text {
            color: #F08400;
        }
        .sorevnovaniya-header__link-logo {
            width: 165px;
        }
        .sorevnovaniya-header__decor {
            position: absolute;
            top: 0;
            left: 560px;
            z-index: 3;
            height: 100%;
        }
        .sorevnovaniya-header__background {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            height: 100%;
        }
        .sorevnovaniya-header__background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #FFFFFF 0.2%, rgba(255, 255, 255, 0) 49.98%);
        }
        .sorevnovaniya-banner {
            position: relative;
            padding: 64px 0;
            background: linear-gradient(90.58deg, #00499F -0.67%, rgba(0, 73, 159, 0.7) 101.56%);
            overflow: hidden;
        }
        .sorevnovaniya-banner__inner {
            position: relative;
        }
        .sorevnovaniya-banner__inner .elements-row {
            position: relative;
            z-index: 2;
        }
        .sorevnovaniya-banner__decore {
            position: absolute;
            top: -160px;
            right: 0;
            z-index: 1;
            width: 858px;
            height: 820px;
            background: url('/local/templates/main/css/../img/page-sorevnovaniya/sorevnovaniya-banner-decor.png');
        }
        .sorevnovaniya-banner__logo {
            position: absolute;
            bottom: 0;
            right: 124px;
            z-index: 2;
        }

        .news_top-center {
            align-items: center;
        }

        .sorevnovaniya-main-link {
            display: none;
            max-width: 222px;
            width: 100%;
        }
        .sorevnovaniya-main-link a {
            font-size: 10px;
            font-weight: 750;
            line-height: 16px;
        }
        .sorevnovaniya-header--bottom .header-menu__sub-menu {
            top: calc(100% + 26px);
        }

        .sorevnovaniya-slider-top {
            margin-bottom: 52px;
        }
        .sorevnovaniya-slider-top--wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 52px;
        }
        .sorevnovaniya-slider {
            overflow: hidden;
        }
        .sorevnovaniya-slide {
            color: #2C3148;
        }
        .sorevnovaniya-slide:hover .multimedia__count {
            background: #005D9F;
        }
        .sorevnovaniya-slider--button {
            top: 32%;
        }

        .sorevnovaniya-footer--mailto {
            position: relative;
            display: block;
            padding-left: 40px;
            color: #005D9F;
            font-family: 'Inter';
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            text-decoration-line: underline;
            text-transform: uppercase;
            transition: color 0.2s ease 0s;
        }
        .sorevnovaniya-footer--mailto:hover {
            color: #2C3148;
        }
        .sorevnovaniya-footer--mailto::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 24px;
            height: 21px;
            background: url('/local/templates/main/css/../img/mailto.svg') center center / contain no-repeat;
        }

        .sorevnovaniya-footer--links {
            align-items: center;
        }
        .sorevnovaniya-footer--links::before {
            display: none;
        }
        .sorevnovaniya-footer--links .footer__title {
            margin-bottom: 0;
            font-family: 'Inter';
        }
        .sorevnovaniya-footer--links a {
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            color: #2C3148;
            transition: color 0.2s ease 0s;
            text-decoration: none;
        }
        .sorevnovaniya-footer--links a:hover {
            color: #005D9F;
        }
        /* .sorevnovaniya-footer--links a::before {
    display: none;
} */

        .header-sorev-konkurs .header-item-name {
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            text-transform: uppercase;
        }
        .header-sorev-konkurs--bottom {
            display: none;
        }

        .header-social {
            display: flex;
        }
        .header-social-link {
            display: block;
            width: 40px;
            height: 40px;
        }
        .header-social-link img {
            width: 100%;
        }
        .header-social-link + .header-social-link {
            margin-left: 16px
        }

        .header-sorev-konkurs .header-item_border-left::before {
            display: block;
        }

        .sorev-konkurs {
            width: 100%;
            height: calc(100vh - 92px);
        }
        .sorev-konkurs__list {
            display: flex;
            width: 100%;
            height: 100%;
        }
        .sorev-konkurs__item {
            position: relative;
            width: calc(25%);
            height: 100%;
            padding: 0 40px 40px 40px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .sorev-konkurs__item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            background: #2c3148;
            opacity: 0.6;
            transition: background 0.2s ease 0s;
        }
        .sorev-konkurs__item:hover::before {
            background: linear-gradient(180deg, rgba(44, 49, 72, 0) 0%, #2C3148 100%);
            opacity: 0.5;
        }
        .sorev-konkurs__item-inner {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding-top: 50vh;
        }
        .sorev-konkurs__item-link {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            width: 100%;
            height: 100%;
        }
        .sorev-konkurs__item-ico {
            display: block;
            width: 64px;
            height: 64px;
            margin: 52px 0 0 auto;
        }

        /* Tiles */
        .tiles {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            flex-wrap: wrap;
            width: 100%;
        }

        .tiles-votes {
            margin: -40px 0 80px 0;
        }

        .tiles__item {
            position: relative;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            width: calc(33.33333% - 40px);
            height: 293px;
            margin: 52px 0 0 60px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .tiles__item:nth-of-type(3n + 1) {
            margin-left: 0;
        }
        .tiles__item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            background: #ffffff;
            opacity: 0;
            transition: opacity 0.2s ease 0s;
        }
        .tiles__item:hover::before {
            opacity: 0.2;
        }
        .tiles__item-vertical {
            height: 650px;
        }
        .tiles__item-votes {
            margin-top: 88px;
        }

        .tiles__name {
            position: relative;
            z-index: 2;
            width: calc(100% - 8px);
            margin-bottom: 8px;
            padding: 8px;
            background: rgba(0, 93, 159, 0.9);
            color: #ffffff;
            font-size: 24px;
            font-weight: 600;
            line-height: 140%;
            text-transform: uppercase;
        }
        .tiles__votes {
            position: absolute;
            top: 100%;
            left: 0;
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            padding: 8px 16px;
            background: #F08400;
            color: #FFFFFF;
            font-weight: 700;
        }

        .tiles__votes-value {
            margin-left: auto;

        }

        /* Ð¡Ð¾Ñ†Ð¸Ð°Ð»ÑŒÐ½Ñ‹Ðµ ÑÐµÑ‚Ð¸ */
        .social__list {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: -32px;
        }
        .social__list + .hidden-info {
            margin-top: 32px;
        }
        .social__item {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: calc(33.33333% - 40px);
            margin: 0 0 32px 60px;
            padding: 21px;
            border: 3px solid rgba(213, 226, 247, 0.7);
        }
        .social__item:nth-child(3n - 2) {
            margin-left: 0;
        }
        .social__item-hidden--pc {
            display: none;
        }
        .social__item-links {
            margin-top: 20px;
        }
        .social__item-ico {
            width: 40px;
            height: 40px;
            margin-left: 16px;
        }
        .social__item-ico:first-of-type {
            margin-left: 0;
        }

        /* Subscription */
        .subscription-mt52 {
            margin-top: 52px;
        }
        .subscription .checbox__wrapper {
            margin-top: 20px;
        }
        .subscription .checbox__label {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            width: auto;
        }
        .subscription .checbox__label input {
            opacity: 0;
        }
        .subscription__checkbox {
            margin-top: 40px;
        }
        .subscription__checkbox-block {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 40px 0;
            padding: 40px 0;
            border: 3px solid #D5E2F7;
            border-left: none;
            border-right: none;
        }
        .subscription__checkbox-column {
            display: flex;
            flex-wrap: wrap;
            width: calc(50% - 30px);
            margin-top: -20px;
        }
        .subscription__checkbox-column .checbox__wrapper {
            width: 100%;
        }
        .subscription__checkbox-column .checbox__wrapper .jq-checkbox {
            flex-shrink: 0;
        }

        /* Popup success */
        .popup-success {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            background: rgba(44, 49, 72, 0.25);
            backdrop-filter: blur(20px);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease 0s;
        }
        .popup-success.show {
            opacity: 1;
            pointer-events: all;
        }
        .popup-success__block {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -30%);
            width: 100%;
            max-width: 560px;
            padding: 64px;
            background: #FFFFFF;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease 0s;
        }
        .popup-success.show .popup-success__block {
            transform: translate(-50%, -50%);
        }
        .popup-success__block-close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 32px;
            height: 32px;
            cursor: pointer;
        }
        .popup-success__block-close::before,
        .popup-success__block-close::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 26px;
            height: 2px;
            background: #787F91;
            transition: background 0.3s ease 0s;
        }
        .popup-success__block-close:hover::before,
        .popup-success__block-close:hover::after {
            background: #005D9F;
        }
        .popup-success__block-close::before {
            transform: translate(-50%, -50%) rotateZ(45deg);
        }
        .popup-success__block-close::after {
            transform: translate(-50%, -50%) rotateZ(-45deg);
        }
        .popup-success__block-icon {
            display: block;
            margin: 0 auto;
        }
        .popup-success__block-title {
            margin-top: 32px;
            color: #005D9F;
            font-size: 24px;
            font-weight: 650;
            line-height: 32px;
            text-transform: uppercase;
            text-align: center;
        }
        .popup-success__block-descr {
            margin-top: 24px;
            text-align: center;
        }

        .pointer-reset {
            pointer-events: all;
        }

        /* ÑÑ‚Ð¸Ð»Ð¸ Ð¾Ñ‚ ÑÐºÑ€Ñ‹Ñ‚Ð¸Ñ Ð¿ÑƒÐ½ÐºÑ‚Ð¾Ð² Ð¼ÐµÐ½ÑŽ Ð½Ð° Ñ€Ð°Ð·Ð½Ñ‹Ñ… Ñ€Ð°Ð·Ñ€ÐµÑˆÐµÐ½Ð¸ÑÑ…*/
        body {
            overflow-x: hidden;
        }


        .header-menu__item { white-space: nowrap; opacity: 0; visibility: hidden; position: absolute }
        .header-menu__item.show { opacity: 1; visibility: visible; position: relative }

        .header-menu_drop-more { position: relative; width: 30px; height: 20px; flex: none; top: -.1em; cursor: pointer }
        .header-menu_drop-more:before { content: ''; width: 4px; height: 4px; background: #005D9F; position: absolute; border-radius: 2px; position: absolute; left: 5px; top: 50%; transition: all .3s ease 0s }
        .header-menu_drop-more:after { content: ''; width: 4px; height: 4px; background: #005D9F; position: absolute; border-radius: 2px; position: absolute; right: 5px; top: 50%; transition: all .3s ease 0s }
        .header-menu_drop-more span { content: ''; width: 4px; height: 4px; background: #005D9F; position: absolute; border-radius: 2px; position: absolute; right: 50%; margin-right: -2px; top: 50%; transition: all .3s ease 0s }
        .header-menu_drop-more:hover span, .header-menu_drop-more:hover:after, .header-menu_drop-more:hover:before { background: #F08400 }

        .header-menu_drop-ul {
            position: absolute;
            top: calc(100% + 36px);
            left: -32px;
            z-index: 1;
            padding: 32px;
            background: #fff;
            box-shadow: 0px 2px 8px rgba(33, 35, 46, 0.08);
            width: 360px;
            list-style: none;
            transition: .2s;
            opacity: 0;
            pointer-events: none;
            transform: translate(0,36px);
        }

        .header-menu_drop-more:hover .header-menu_drop-ul {
            opacity: 1;
            pointer-events: all;
            transform: translate(0,0px);
        }

        .header-menu_drop-ul:before {
            content: '';
            display: block;
            width: 100%;
            height: 36px;
            position: absolute;
            top: -36px;
            left: 0;
        }

        .header-menu_drop-item {
            position: relative;
            padding-bottom: 16px;
            display: block;
        }

        .header-menu_drop-item .header-menu__sub-menu {
            top: -32px;
            left: calc(100% + 32px);
        }

        .header-menu_drop-item:hover > .header-menu__sub-menu {
            opacity: 1;
            pointer-events: all;
            transform: translate(0,0px);
        }

        .header-menu_drop-item .header-menu__sub-menu::before {
            height: 100%;
            width: 36px;
            top: 0;
            left: -32px;
        }

        .header-menu_drop-item .header-menu__sub-menu li::after {
            display: none;
        }

        .header-menu_drop-item .header-menu__sub-menu .header-menu__sub-menu {
            display: none;
        }

        .header-menu_drop-item .header-link {
            font-weight: 450;
            font-size: 14px;
            line-height: 20px;
            text-transform: uppercase;
            color: #005D9F;
            transition: .2s;
            font-weight: 600
        }

        .header-menu_drop-item .header-link:hover { color: #E26110; }

        .header-menu_drop-item .header-link::before {
            display: none;
        }

        .header-menu_drop-item .header-link.have-sub::after {
            content: '';
            position: absolute;
            top: 10px;
            right: 0;
            transform: translateY(-50%) rotateZ(-45deg);
            width: 8px;
            height: 8px;
            border: 2px solid #F08400;
            border-top: none;
            border-left: none;
        }

        .header-menu__sub-item {
            white-space: initial;
        }


        .header-item_menu-wrapper {
            width: calc(100% - 790px);
        }
        .header-menu__list {
            flex-wrap: nowrap;
        }
        .header-menu__item {
            flex-shrink: 0;
        }
        .header-menu__item:last-child {
            margin-right: 0;
        }

        .celeveoe-item--borders .h5_orange-border {
            border: none;
            margin-bottom: 0;
            padding-bottom: 6px;
            padding-right: 16px;
            word-wrap: anywhere;
        }
        .celeveoe-item--borders {
            margin-bottom: 60px;
            padding: 16px;
            border: 2px solid #F08400;
            position: relative;
        }
        .celeveoe-item--borders::before {
            content: '';
            display: block;
            width: calc(100% - 32px);
            height: calc(100% - 32px);
            position: absolute;
            top: 16px;
            left: 16px;
            border-right: 2px solid #F08400;
            border-bottom: 2px solid #F08400;
        }
        .elements-row__one-third.celeveoe-item--borders .h5_orange-border {
            min-height: 170px;
        }

        /*Ð¡Ñ…ÐµÐ¼Ð°*/
        .shema {
            position: relative;
        }
        .shema__row {
            margin-bottom: 32px;
        }
        .shema__block {
            display: inline-flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            background: #EBF3FF;
            margin-right: 32px;
            padding: 10px 20px;
            flex-shrink: 0;
            position: relative;
        }
        .shema__block::before,
        .shema__block::after {
            content: '';
            display: block;
            width: 2px;
            height: 16px;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%,0);
            background: #005D9F;
        }
        .shema__block::before {
            top: -16px;
        }
        .shema__row:first-child .shema__block::before {
            display: none;
        }
        .shema__row:last-child .shema__block::after {
            display: none;
        }
        .shema__line {
            width: 100%;
            background: #005D9F;
            height: 2px;
            margin-top: -16px;
            margin-bottom: 16px;
            position: relative;
        }

        /*Ð¡Ñ‚Ñ€ÑƒÐºÑ‚ÑƒÑ€Ð° Ð²Ð½ÑƒÑ‚Ñ€ÐµÐ½Ð½ÐµÐ³Ð¾ Ð°ÑƒÐ´Ð¸Ñ‚Ð°*/
        .shema__block--supervisor {
            margin-left: 194px;
        }
        .shema__block--deputy {
            width: 422px;
        }
        .shema__block--analytical {
            margin-left: 64px;
        }
        .shema__line--1 {
            margin-left: 210px;
            width: 402px;
        }
        .shema__line--1::after {
            content: '';
            display: block;
            width: 2px;
            height: 150px;
            position: absolute;
            top: 100%;
            right: 0;
            background: #005D9F;
        }
        .shema__line--2 {
            margin-left: 88px;
            width: 229px;
        }

        #sIzo .h5 {
            margin: 24px 0 16px 0;
        }

        .help_form-block {
            background: url('/local/templates/main/css/../img/page-news/form/bg-new.png') left center / cover no-repeat, #EBF3FF !important;
            border-radius: 0 !important;
            color: #2C3148 !important;
        }
        .help_form-block .bx-core-adm-dialog-head {
            background: #EBF3FF !important;
        }
        .help_form-block .bx-core-adm-dialog-head-icons {
            background: #EBF3FF !important;
        }
        .help_form-block .bx-core-adm-icon-close {
            position: relative !important;
            background: none !important;
        }
        .help_form-block .bx-core-adm-icon-close::before,
        .help_form-block .bx-core-adm-icon-close::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            display: block;
            width: 12px;
            height: 2px;
            background: #005D9F;
            transition: background 0.3s ease 0s;
        }
        .help_form-block .bx-core-adm-icon-close::before {
            transform: translate(-50%, -50%) rotateZ(45deg);
        }
        .help_form-block .bx-core-adm-icon-close::after {
            transform: translate(-50%, -50%) rotateZ(-45deg);
        }
        .help_form-block .bx-core-adm-icon-close:hover::before,
        .help_form-block .bx-core-adm-icon-close:hover::after {
            background: #F08400;
        }
        .help_form-block .bx-core-adm-dialog-content {
            background: transparent !important;
            border: none !important;
        }
        .help_form-block .bx-core-adm-dialog-content-wrap-inner {
            height: 100%;
            padding: 0 !important;
        }
        .help_form-block .bx-core-adm-dialog-content-wrap-inner > div {
            height: 100%;
        }
        .help_form-block #help_form {
            height: 100%;
        }
        .help_form-block .input__wrapper {
            width: 100%;
            height: 100%;
        }
        .help_form-block .input {
            width: 100%;
            max-width: 400px;
            height: 100%;
            max-height: 195px;
            resize: none;
        }
        .help_form-block .input__label {
            top: 28px;
        }
        .help_form-block .button_min {
            height: auto;
            padding: 8px 16px;
        }


        .participant {
            display: flex;
            flex-wrap: wrap;
            margin: 36px 0;
        }
        .participant__figure {
            display: flex;
            width: calc(33.33333% - 26.66666px);
            margin-bottom: 64px;
            margin-left: 40px
        }
        .participant__figure:nth-child(3n - 2) {
            margin-left: 0;
        }
        .participant__figure-img {
            flex-shrink: 0;
            width: 80px;
            height: 80px;
            margin: 16px 16px 0 0;
        }
        .participant-shirt .participant__figure-img {
            width: 140px;
            height: auto;
        }
        .participant__figure-text h5 {
            margin: 0 !important;
        }
        .participant__figure-text p {
            margin-top: 16px;
        }


        .outerlink-nowrap-img {
            white-space: nowrap;
        }
        .block--left {
            height: 0;
        }
        .block--right .elements-row:first-child {
            margin-top: 0;
        }
        .block--right .elements-row__two-thirds--ml {
            margin-left: auto;
        }

        /* Ð‘Ð°Ð½Ð½ÐµÑ€ Ð¾Ð± Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¸Ð¸ ÐºÑƒÐºÐ¸ */
        .cookie-files-banner {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 20px;
            z-index: 99999;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: calc(100% - 40px);
            max-width: 1428px;
            margin: 0 auto;
            padding: 20px 40px 20px 20px;
            background: #005D9F;
            color: #ffffff;
            font-size: 18px;
            line-height: 1.2;
            transform: translateY(400px);
            transition: transform 0.3s ease 0s;
        }
        .cookie-files-banner.active {
            transform: translateY(0);
        }
        @media screen and (-webkit-min-device-pixel-ratio:0) {
            .cookie-files-banner.active {
                transform: translateY(0);
            }
        }
        .cookie-files-close {
            position: absolute;
            top: 14px;
            right: 8px;
            width: 17px;
            height: 17px;
            cursor: pointer;
        }
        .cookie-files-close:before,
        .cookie-files-close:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            display: block;
            width: 13px;
            height: 2px;
            background: #ffffff;
            transition: all 0.3s ease 0s;
        }
        .cookie-files-close:before {
            transform: translate(-50%, -50%) rotateZ(45deg)
        }
        .cookie-files-close:after {
            transform: translate(-50%, -50%) rotateZ(-45deg)
        }
        .cookie-files-close:hover:before,
        .cookie-files-close:hover:after {
            width: 17px;
        }
        .cookie-files-text {
            width: calc(100% - 164px);
            padding: 0 20px 0 0;
        }
        .cookie-files-text a {
            color: #FFFFFF;
        }
        .cookie-files-text a:hover {
            color: #F08400;
        }
        .cookie-files-accept {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 164px;
            height: 64px;
            background: #F08400;
            color: #FFFFFF;
            cursor: pointer;
            border: 2px solid #F08400;
        }
        .cookie-files-accept:hover {
            background: #005D9F;
            border-color: #FFFFFF;
        }
        .jq-selectbox li.optbold {
            font-weight: bold;
        }

        /* Ð ÐµÐµÑÑ‚Ñ€ Ð¸Ð½Ð½Ð¾Ð²Ð°Ñ†Ð¸Ð¹ */
        .innovation__section {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .innovation__section-item {
            width: calc((100% / 3) - 40px);
            margin: 0 0 60px 60px;
        }

        .innovation__section-item:hover .innovation__section-item__title {
            color: #005D9F;
        }

        .innovation__section-item:nth-child(3n - 2) {
            margin-left: 0;
        }

        .innovation__section-item__image {
            width: 100%;
            height: 300px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .innovation__section-item__title {
            margin-top: 16px;
            color: #2C3148;
            transition: color 0.2s ease 0s;
        }

        @media (max-width: 1280px) {
            .innovation__section-item {
                width: calc((100% / 2) - 20px);
                margin: 0 0 40px 40px;
            }

            .innovation__section-item:nth-child(3n - 2) {
                margin-left: 40px;
            }

            .innovation__section-item:nth-child(2n - 1) {
                margin-left: 0;
            }
        }

        @media (max-width: 1280px) {
            .innovation__section-item {
                width: 100%;
                margin: 0 0 24px 0 !important;
            }

            .innovation__section-item__image {
                height: calc(100vw / 2);
            }

            .innovation__section-item__title {
                margin-top: 8px;
            }
        }

        .center-button {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: center;
        }
        .mb--32 {
            margin-bottom: 32px;
        }
        .text--center {
            text-align: center;
        }
        /* End */


        /* Start:/local/templates/main/css/resize.css?169943242391621*/
        @media (max-width: 1680px) {
            .multimedia__prev {
                height: calc(((100vw - 252px) / 2 - 30px) * 0.5614);
            }
            .pswp__caption__center {
                left: 126px;
                max-width: calc(100vw - 252px);
            }
            .pswp__counter {
                right: auto;
            }
            .photo-slide .element-slider__ico {
                height: calc((100vw - 252px - 60px) / 2 * 0.56);
            }
            .photo-slider__container ~ .swiper-button {
                top: calc(((100vw - 252px - 60px) / 2 * 0.56) / 2 - 28px);
            }

            .sorevnovaniya-header__gradient {
                background: linear-gradient(90deg, #FFFFFF 0%, #FFFFFF 60%, rgba(255, 255, 255, 0) 80%);
            }
        }

        @media (max-width: 1650px) {
            .main-events-year {
                padding-left: 66px;
            }
        }

        @media(max-width: 1600px) {
            /*
    .header-menu__item-notimportant {
        display: none;
    }
	*/
            .header-search__form-wrapper {
                width: 400px;
            }
            .header-item_menu-wrapper {
                width: calc(100% - 790px);
            }
            .mop {
                display: none;
                width: 32px;
                height: 32px;
                margin: 0 24px;
                position: relative;
                cursor: pointer;
            }
            .mop:hover .mop__line {
                background: #F08400;
            }
            .mop__line {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 22px;
                height: 2px;
                background: #005D9F;
                transition: .2s;
            }
            .mop__line:nth-child(1) {
                margin-top: -8px;
            }
            .mop__line:nth-child(3) {
                margin-top: 8px;
            }
        }

        @media(min-width: 1599px) {
            .header-item_border-left_pda::before {
                display: none;
            }
            .header-item_border-left_pda {
                padding-left: 0;
            }
        }

        @media(max-width: 1598px) {
            .header-item_border-left_pda.header-item_small {
                margin-left: 0;
            }
        }

        @media(min-width: 1561px) {
            .header__ico_pda {
                display: none;
            }
        }

        @media(max-width: 1560px) {
            .container {
                width: calc(100% - 160px);
            }
            .header-item_border-left_pda.header-item_small {
                margin-left: 0;
            }
            .ges-levels__ico {
                width: calc(100% - 78px - 820px);
            }
            .swiper-button_next {
                right: -68px;
            }
            .swiper-button_rating-next {
                right: -68px;
            }
            .swiper-button_next--sustainable-news {
                right: -68px;
            }
            .swiper-button_next-gallery {
                right: -68px;
            }
            .swiper-button_prev {
                left: -68px;
            }
            .swiper-button_rating-prev {
                left: -68px;
            }
            .swiper-button_prev--sustainable-news {
                left: -68px;
            }
            .swiper-button_prev-gallery {
                left: -68px;
            }
            .form__row_table-row {
                width: calc(100vw - 160px);
            }
            .projects_ico {
                height: calc((100vw - 160px) / 6);
            }
            .small-column {
                width: 180px;
            }
            .big-column {
                width: calc(100% - 60px - 180px);
                margin-left: auto;
            }
            .multimedia__prev {
                height: calc(((100vw - 160px) / 2 - 30px) * 0.5614);
            }
            .pswp__img {
                max-width: calc(100vw - 160px) !important;
                max-height: calc(100vh - 200px);
            }
            .pswp__button--arrow--left,
            .pswp__button--arrow--right {
                width: 80px;
            }
            .pswp__button--arrow--left::before {
                left: 12px;
            }
            .pswp__button--arrow--right::before {
                right: 12px;
            }
            .pswp__caption__center {
                top: 58px;
                left: 80px;
                max-width: calc((100vw - 160px));
            }
            .pswp__counter {
                /* right: 80px; */
                bottom: 58px;
            }
            .photo-slide {
                width: calc(50% - 16px);
            }
            .photo-slide .element-slider__ico {
                height: calc((100vw - 160px - 60px) / 2 * 0.56);
            }
            .photo-slider__container ~ .swiper-button {
                top: calc(((100vw - 160px - 60px) / 2 * 0.56) / 2 - 28px);
            }
            .elements-row__one-third .diagramm__image {
                width: 240px;
                height: 240px;
                margin-left: 80px;
            }
            .elements-row__one-third .diagramm__value:nth-child(2)::after {
                width: 40px;
            }
            .row-icons {
                width: calc(100% + 40px);
                margin-bottom: -20px;
            }
            .row-icons__item {
                width: calc(100% / 3 - 40px);
                margin-right: 40px;
                margin-bottom: 40px;
            }
            .row-icons-4-items .row-icons__item {
                width: calc(100% / 2 - 40px);
            }

            .block-top-line::before {
                width: calc(100% - 160px);
            }
        }

        @media (max-width: 1500px) {
            .map-filters {
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: flex-start;
            }
            .map-select {
                width: calc(50% - 8px);
                margin: 0 16px 24px 0;
            }
            .map-select .select-with-name__select {
                width: 100%;
                margin-right: 0;
            }
            .map-select .select-with-name__select .jq-selectbox__select {
                width: 100%;
            }
            .map-select .select-with-name__select .jq-selectbox__dropdown {
                width: 100% !important;
            }
            .map-select:nth-child(2n) {
                margin-right: 0;
            }
            .map-switch {
                justify-content: flex-end;
                width: calc(50% - 8px);
                margin-left: 0;
            }
            .geography-map {
                margin-top: 8px;
            }
            .geography-table {
                margin-top: 24px;
            }

            .sorevnovaniya-header__gradient {
                background: linear-gradient(90deg, #FFFFFF 0%, #FFFFFF 72%, rgba(255, 255, 255, 0) 92%);
            }
        }

        @media(max-width: 1480px) {
            .ges-levels__top .select-with-name__select .jq-selectbox__select {
                width: 240px;
            }
            .ges-levels__top .input__wrapper_datepicker {
                width: 240px;
            }

            .main-events-year {
                padding-left: 56px;
            }
            .main-events-year__item-active .main-events-year__item-text--big {
                transform: translate(-17%, 70%) scale(1);
            }

            .elements-row__numbers .elements-row__half {
                width: calc(100% + 60px);
            }
        }

        @media(max-width: 1470px) {
            .three-banners-slider .banners-block__item {
                height: 248px;
            }
        }

        @media (max-width: 1440px) {
            .error-send {
                display: none;
            }
            .create {
                margin-left: auto;
            }
        }

        @media (max-width: 1390px) {
            .bloks-with-img__big .bloks-with-img__img {
                height: calc(100% - 88px);
            }
        }

        @media (max-width: 1340px) {
            .main-events-year {
                padding-left: 46px;
            }
        }

        @media(min-width: 1280px) {
            .multimedia_three {
                width: calc(100% + 60px);
                justify-content: flex-start;
            }
            .multimedia_three .multimedia_item {
                width: calc(33.3333% - 60px);
                margin-right: 60px;
            }
            .multimedia_three .multimedia__prev {
                height: 245px;
            }
            .developers .t1 {
                margin-bottom: 12px;
            }

            .strategy__item {
                align-items: flex-start;
            }
            .strategy__info {
                padding-left: 80px;
            }
            .strategy__ico {
                left: 0px;
            }
        }

        @media(max-width: 1320px) {
            .weaves-element + .ges .jq-selectbox__select {
                width: 240px;
            }
            .block_gray .news {
                margin: -20px 0px;
            }
        }

        @media(max-width: 1280px) {
            .mop {
                display: block;
            }
            .ges .jq-selectbox__select,
            .ges .select-with-name__select .jq-selectbox__select,
            .ges .input__wrapper_datepicker {
                width: 100%;
            }
            .ges-levels__top .input__wrapper_datepicker {
                margin-bottom: 24px;
            }
            .ges-levels__button {
                width: 100% !important;
                text-align: center;
                margin-bottom: 24px;
            }
            .header-item_menu-wrapper {
                display: none;
            }
            .header__sites-wrapper--pc {
                display: none;
            }
            .header__sites-wrapper--pda {
                display: flex;
            }
            .header__sites-list {
                width: 50%;
            }
            .top-page-banner__signature {
                display: none;
            }
            .ges {
                position: relative;
            }
            .ges-levels__ico {
                /* width: auto; */
                width: 275px;
                height: 216px;
                position: absolute;
                top: 0;
                right: 0;
            }
            .ges-levels__ico img {
                width: auto;
                /* height: 100%; */
            }
            .ges-levels__info {
                max-width: unset;
                width: 100%;
            }
            .ges-levels__top {
                width: calc(50% - 25px);
            }
            .water-day {
                width: 100%;
                justify-content: space-between;
            }
            .ges-levels .select-with-name {
                margin-bottom: 24px;
                width: 100%;
            }
            .select-with-name__select {
                width: 100%;
                margin-right: 0;
            }
            .select-with-name__select .jq-selectbox__select {
                width: 100%;
            }
            .elements-row__quarter {
                width: calc(33.33% - 48px);
                margin-right: 48px;
            }
            .elements-row__quarter:first-child {
                width: 100%;
                margin-bottom: 24px;
            }
            .kotirovki .elements-row__half,
            .footer .elements-row__half {
                width: calc(66.66% - 60px);
            }
            .no-br-1280 br {
                display: none;
            }
            .esg-item {
                width: 100%;
                margin-bottom: 32px;
            }
            .esg-item:last-child {
                margin-bottom: 0;
            }
            .element-row__fullscreen-1280 .elements-row__two-thirds--ml.elements-row__two-thirds--pda-mr-0 {
                margin-right: 0;
                width: calc(100% + 8px);
            }
            .director-slider__swiper-wrapper,
            .director-list {
                width: calc(100% + 48px);
            }
            .director-item {
                width: calc(33.3333% - 48px);
                color: #2C3148;
            }
            .director-list .director-item {
                margin-right: 48px;
            }
            .director-item__ico {
                width: 248px;
                height: 288px;
            }

            .elements-form-subscribe {
                padding: 32px;
                flex-wrap: wrap;
                background-size: cover;
            }
            .elements-form-subscribe__title {
                width: 100%;
                margin: 0 0 24px 0;
            }
            .elements-form-subscribe__form {
                margin: 0;
                width: 100%;
            }

            .elements-form-subscribe form {
                justify-content: space-between;
            }

            .elements-form-subscribe .input__wrapper, .select-without-name {
                width: calc(50% - 10px);
                margin: 0;
            }

            .elements-form-subscribe button {
                order: 2;
                margin-top: 28px;
                z-index: 1;
            }
            .elements-form-subscribe .c1 {
                width: calc(100% - 200px);
                margin-top: 28px;
            }


            .elements-form-subscribe__form--mla {
                margin-left: auto;
                width: calc(50% - 60px);
            }
            .bloks-with-img_thin .bloks-with-img__big .bloks-with-img__img {
                height: calc((100vw - 160px) * 0.45) !important;
            }
            .section-list .elements-row__one-third .h2-marginBot:last-child {
                margin-bottom: 0;
            }
            .complex-filter .select-with-name__select {
                width: 260px;
            }
            .complex-filter .select-with-name__select.page-select--what-filial-width {
                width: 288px;
            }
            .material {
                align-items: flex-start;
            }
            .material:last-child {
                margin-bottom: 0;
            }
            .material__ico {
                width: 208px;
                height: 192px;
            }
            .material__info {
                width: calc(100% - 208px - 32px);
            }
            .elements-row--mb40 .h3-marginBot:last-child {
                margin-bottom: 0;
            }
            .projects_item--izadnie .projects_ico {
                border-width: 2px;
                width: 128px;
            }
            .projects_item--izadnie .projects_info {
                width: calc(100% - 128px - 32px);
            }
            .projects_item--izadnie .projects_info .t3 {
                font-size: 16px;
            }
            .ges-levels__top .input__wrapper {
                width: 100%;
                max-width: unset;
            }
            .prioritets {
                justify-content: space-between;
                margin-bottom: -32px;
            }
            .prioritets__item {
                width: calc(50% - 16px);
                padding-right: 0;
                margin-bottom: 32px;
            }
            .elements-row__full .elements-icons__item {
                padding-right: 0px;
            }

            .developers .elements-row__one-third {
                width: 100%;
                margin-bottom: 32px;
            }

            .tiles__item-vertical {
                width: calc(50% - 30px);
                height: calc(((100vw / 2) - 130px)  / 0.64933);
            }
            .tiles__item-vertical:nth-of-type(3n + 1) {
                margin-left: 60px;
            }
            .tiles__item-vertical:nth-of-type(2n + 1) {
                margin-left: 0;
            }

            /* ==== */
            .element-row__fullscreen-1280 .pda-on {
                display: block;
            }
            .element-row__fullscreen-1280 .pda-off {
                display: none;
            }
            .element-row__fullscreen-1280 .elements-row__one-third {
                width: 100%;
                margin-right: 32px;
                margin-bottom: 40px;
            }
            .element-row__fullscreen-1280 .elements-row--trans-top-256 {
                transform: translateY(-129px);
                margin-bottom: -89px;
            }
            .element-row__fullscreen-1280 .elements-row__two-thirds--ml {
                width: 100%;
                margin: 0 32px 0 0;
            }
            .content-block_before {
                padding: 60px 32px 32px;
            }
            .element-row__fullscreen-1280 .content-block_before::before {
                top: 32px;
                left: 32px;
            }
            .content-block_big {
                width: 100%;
            }
            .element-row__fullscreen-1280 .big-number {
                display: flex;
                align-items: center;
            }
            .element-row__fullscreen-1280 .content-block + .big-number {
                margin-top: 72px;
            }
            .element-row__fullscreen-1280 .big-number .t2 {
                margin-top: 0;
            }
            .element-row__fullscreen-1280 .big-number__content + .t2 {
                margin-left: 32px;
            }
            .element-row__fullscreen-1280 .elements-icons__item {
                width: calc(50% - 24px);
                max-width: none;
                margin-top: 32px;
            }
            .element-row__fullscreen-1280 .elements-icons__item:nth-of-type(2n + 1) {
                margin-right: 48px;
            }
            .element-row__fullscreen-1280 .elements-row__two-thirds--ml-auto {
                width: 100%;
            }
            .strategy__info.elements-row__two-thirds--ml-auto {
                width: calc(100% - 90px);
                margin-right: 0;
            }
            .strategy__ico {
                left: -82px;
            }
            .elements-row__big-numbers {
                margin-bottom: -32px;
            }
            .elements-row__big-numbers .elements-row__one-third {
                width: calc(50% - 32px);
                margin-bottom: 32px;
            }
            .element-row__fullscreen-1280 .content-block--absolute {
                position: static;
            }

            .element-row__fullscreen-1280 .elements-row__inner-absolute {
                position: relative;
            }

            .element-row__fullscreen-1280 .five-columns {
                width: 100%;
            }

            .sorevnovaniya-header__gradient {
                background: linear-gradient(90deg, #FFFFFF 0%, #FFFFFF 80%, rgba(255, 255, 255, 0) 100%);
            }
            .sorevnovaniya-main-link {
                display: block;
            }


            .header-sorev-konkurs {
                padding: 8px 28px;
            }
            .header-sorev-konkurs .header-item-name {
                max-width: 380px;
            }

            .sorev-konkurs {
                height: auto;
            }
            .sorev-konkurs__list {
                flex-wrap: wrap;
            }
            .sorev-konkurs__item {
                width: 100%;
                height: 380px;
            }
            .sorev-konkurs__item-inner {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: flex-end;
                padding-top: 0;
            }
            .sorev-konkurs__item h5 {
                max-width: 526px;
            }
            .sorev-konkurs__item h5 br {
                display: none;
            }
            .sorev-konkurs__item-ico {
                width: 52px;
                height: 52px;
                margin: 0;
                margin-left: 12px;
            }

            .participant__figure {
                width: calc(50% - 20px);
            }
            .participant__figure:nth-child(3n - 2) {
                margin-left: 40px;
            }
            .participant__figure:nth-child(2n - 1) {
                margin-left: 0;
            }
            .block--left {
                height: auto;
            }
        }

        @media (max-width: 1250px) {
            .main-events-year {
                padding-left: 36px;
            }
            .main-events-year__item-active .main-events-year__item-text--big {
                transform: translate(-15%, 70%) scale(1);
            }
        }

        @media (max-width: 1200px) {
            .prava {
                display: none;
            }
        }

        @media (max-width: 1150px) {
            .main-events-year {
                padding-left: 26px;
            }
            .main-events-year__item-active .main-events-year__item-text--big {
                transform: translate(-13%, 70%) scale(1);
            }
        }

        @media(max-width: 1100px) {
            .news_top .tabs__list {
                width: 100%;
                margin-top: 40px;
            }
        }

        @media (max-width: 1060px) {
            .main-events-year {
                padding-left: 16px;
            }
            .main-events-year__item-active .main-events-year__item-text--big {
                transform: translate(-9%, 70%) scale(1);
            }
        }

        @media(min-width: 1025px) {
            .header__ico_pda {
                display: none;
            }
            .header-item_mop {
                display: none;
            }
        }

        @media(max-width: 1024px) {
            body {
                font-size: 18px;
            }
            body.fixed-menu {
                padding-top: 129px;
            }
            body.body-overflow-hidden {
                padding-right: 0;
            }
            .header {
                top: 60px;
            }
            .container {
                width: calc(100% - 80px);
            }
            h1,.h1 {
                font-size: 56px;
                line-height: 72px;
            }
            h3,.h3 {
                font-size: 32px;
                line-height: 40px;
            }
            h4,.h4 {
                font-size: 28px;
                line-height: 36px;
            }
            h5,.h5 {
                font-size: 20px;
                line-height: 28px;
            }
            h6,.h6 {
                font-size: 18px;
                line-height: 28px;
            }
            .text-block h1, .text-block .h1,
            .text-block h2, .text-block .h2,
            .text-block h3, .text-block .h3,
            .text-block h4, .text-block .h4,
            .text-block h5, .text-block .h5 {
                margin: 64px 0 36px;
            }
            .p2 {
                font-size: 24px;
                line-height: 32px;
            }
            .p3 {
                font-size: 24px;
                line-height: 32px;
            }
            .c3 {
                font-size: 16px;
                line-height: 24px;
            }
            .kotirovki  .c3 {
                font-weight: 400;
                font-size: 18px;
                line-height: 28px;
                text-transform: unset;
            }
            .t1 {
                font-size: 18px;
                line-height: 28px;
            }
            .t2 {
                font-size: 18px;
                line-height: 28px;
            }
            .no_pda {
                display: none;
            }
            .button_mtb {
                margin: 40px 0;
            }
            .header {
                padding: 18px 16px;
                width: 100%;
            }
            .logo_in-head {
                width: 113px;
            }
            .header-link {
                font-size: 13px;
                line-height: 16px;
            }
            .header__ico_desctop {
                display: none;
            }
            .header__ico_pda {
                display: block;
                width: 32px;
                height: 32px;
            }
            .header-item_border-left {
                padding-left: 40px;
            }
            .header-item_border-left::before {
                width: 2px;
                height: 31px;
                top: 50%;
                left: 16px;
            }
            .header-search-ico .header__ico:hover path {
                stroke: transparent;
                fill: #2C3148;
            }
            .header-search__form-wrapper {
                width: 350px;
            }
            .header-search__form-ico {
                display: none;
            }
            .header-search__form-ico--pda {
                display: block;
            }
            .header-search__form button {
                width: 32px;
                height: 32px;
            }
            .header-search__form button:hover .header-search__form-ico--pda path {
                fill: #2C3148;
            }
            .header__sites-inner > .container {
                padding-bottom: 64px;
            }
            .header__sites h4 {
                margin: 56px 0 16px 0;
            }
            .header__sites-list {
                padding-top: 32px;
            }
            .top-page-banner__text_right {
                left: 40px;
                top: 86px;
            }
            .top-page-banner__heading {
                font-size: 88px;
                line-height: 96px;
            }
            .top-page-banner__description {
                margin-left: 0;
                font-size: 32px;
                line-height: 40px;
                width: 400px;
            }
            .top-page-banner__link img {
                right: 40px;
                bottom: 48px;
                width: 56px;
            }
            .swiper-pagination_in-slider {
                bottom: 62px !important;
                text-align: left;
                padding-left: 32px;
            }
            .swiper-pagination-bullet {
                width: 14px;
                height: 14px;
                margin: 0 8px !important;
            }
            .photogallery-popup__nav {
                top: auto;
                transform: none;
                bottom: 44px;
                width: 100%;
                left: 0;
            }
            .photogallery-popup__nav .swiper-button {
                display: flex;
            }
            .photogallery-popup__nav .swiper-pagination {
                top: 0;
            }
            .block {
                padding: 48px 0;
            }
            .element-slider {
                overflow: hidden;
            }
            .element-slider__container {
                overflow: visible;
            }
            .sustainable-news {
                overflow: visible;
            }
            .element-slide {
                width: 288px !important;
            }
            .element-slider__ico {
                height: 270px;
            }

            .swiper-button,
            .swiper-pagination_after-elements {
                display: none;
            }
            .tabs__title {
                font-size: 16px;
                line-height: 24px;
            }
            .tabs__title::after {
                bottom: 3px;
            }
            .news_top {
                padding-bottom: 36px;
            }
            .news__image {
                width: 100%;
            }
            .news__item {
                padding: 16px 0 17px;
                border-width: 2px;
            }
            .news__image_big {
                margin-bottom: 24px;
            }
            .news__image_medium {
                margin-bottom: 16px;
            }
            .news__info {
                margin-left: 0;
                width: 100%;
            }
            .date__day {
                font-size: 40px;
                line-height: 48px;
                margin-right: 8px;
            }
            .date__month {
                font-size: 16px;
            }
            .news__title {
                margin-top: 16px;
            }
            .news__title_small {
                width: 100%;
            }
            .more-row_mt-52 {
                margin-top: 42px;
            }
            .more-link {
                font-size: 20px;
                line-height: 28px;
            }
            .more-link_arrow-right::after {
                width: 36px;
                height: 26px;
                margin-left: 20px;
            }
            .weaves-element::before {
                bottom: -22px;
                left: 0%;
                max-width: 499px;
                background-position: 0 center;
            }
            .ges-levels__top {
                margin: 52px 0 74px;
            }
            .ges-levels__ico {
                width: 318px;
                height: 250px;
            }
            .ges-levels__description {
                margin-top: 32px;
                font-size: 14px;
            }
            .banners-slider {
                overflow: visible;
                /* width: calc(100% + 40px);
        position: relative;
        left: -40px; */
            }
            .banners-slider .swiper-slide {
                width: 240px !important;
            }
            .banners-block__item {
                /* width: 240px !important; */
                height: 226px;
                margin-bottom: 0 !important;
            }
            .three-banners-slider {
                overflow: visible;
            }
            .three-banners-slider .swiper-slide {
                width: 300px !important;
            }
            .three-banners-slider .banners-block__item {
                height: 180px;
                padding-bottom: 124px;
            }
            .three-banners-slider .banners-block__ico {
                height: 108px;
            }
            .banners-block__item::before {
                right: -27px;
            }
            .banners-block__ico {
                height: 110px;
            }
            .block_pda_small_bottom {
                padding-bottom: 72px;
            }
            .elements-row {
                width: calc(100% + 32px);
            }
            .elements-row__quarter {
                width: calc(33.33% - 32px);
                margin-right: 32px;
            }
            .kotirovki .elements-row__half,
            .footer .elements-row__half {
                width: calc(66.66% - 32px);
                margin-right: 32px;
            }
            .kotirovki {
                padding: 38px 0 14px;
            }
            .kotirovki__title {
                font-size: 32px;
                line-height: 40px;
            }
            .kotirovki  {
                width: 100%;
                justify-content: space-between;
            }
            .kotiorovki__item {
                width: auto;
                margin-right: 0;
            }
            .kotirovki__wrapper {
                justify-content: space-between;
                width: 66.66666%;
                margin-right: 0;
            }
            .kotirovki__wrapper .kotirovki__item {
                width: 55% !important;
                margin-right: 0;
            }
            .kotirovki__wrapper .kotirovki__item:last-child {
                width: auto !important;
            }
            .kotirovki__value {
                /* margin-left: 30px; */
                justify-content: center;
            }
            .kotirovki__change {
                font-size: 14px;
                margin-left: 9px;
            }

            .logo_in-footer {
                width: 138px;
            }
            .footer__row_first {
                padding: 42px 0 30px;
            }
            .phone-block .toggle__arrow {
                position: absolute;
                top: 2px;
                left: 162px;
            }
            .phone-block__phone {
                font-size: 18px;
                line-height: 28px;
            }
            .elements-row__quarter_small-mb {
                margin-bottom: 34px !important;
            }
            .phone-block__description {
                font-size: 14px;
                line-height: 20px;
                margin-top: 8px;
            }
            .footer__title {
                margin-bottom: 12px;
            }
            .footer__row_second {
                padding-bottom: 34px;
            }
            .links-slider {
                padding: 26px 0 36px;
                overflow: visible;
            }
            .links-slider img {
                width: 80%;
                max-width: none;
            }
            .footer__bottom-row {
                padding: 27px 0;
            }
            .copyright {
                width: 100%;
                margin-bottom: 16px;
            }
            .sitemap-link {
                margin-left: 0;
            }
            .create {
                display: none;
            }
            .prava {
                display: block;
                width: 100%;
                margin: 16px 0 0 0;
            }
            .error-send {
                display: block;
                margin: 16px 0 0 0;
                padding: 0;
            }
            .breadcrumbs {
                display: none;
            }
            h1 {
                margin-top: 38px;
            }
            h2, .h2 {
                font-size: 40px;
                line-height: 48px;
            }
            .h1-marginBot {
                margin-bottom: 54px;
            }
            .h2-marginBot {
                margin-bottom: 42px;
            }
            .h4-marginBot {
                margin-bottom: 32px;
            }

            .elements-row--big-img .elements-row__one-third {
                width: 100%;
                margin-right: 32px;
            }
            .elements-row--big-img .elements-row__two-thirds {
                width: 100%;
                margin-left: 0;
            }
            .elements-row--big-img .elements-row__two-thirds--ml {
                width: 100%;
                margin-left: 0;
            }
            .elements-row--big-img .elements-row__two-thirds--ml-auto {
                width: 100%;
            }

            .elements-row__one-third {
                width: 100%;
                margin-right: 32px;
                margin-bottom: 32px;
            }
            .elements-row__two-thirds,
            .elements-row__two-thirds--ml-auto,
            .elements-row__two-thirds--ml {
                width: 100%;
                margin-right: 32px;
                margin-left: 0;
            }
            .content-block {
                padding: 32px;
            }
            .content-block_before {
                padding: 60px 32px 32px;
            }
            .link-with-lines {
                padding: 24px 0 23px;
                font-size: 18px;
                line-height: 28px;
            }
            .block_image {
                margin-top: 72px;
            }
            .block_image--nadoznoeObespeceniye {
                /*background: -467px 676px / 1755px;*/
            }
            .block__info-on-image {
                padding: 124px 0;
                min-height: 640px;
            }
            .block__info-on-image_small {
                width: 100%;
            }
            .block__info-on-image .c3 {
                font-weight: 750;
                text-transform: uppercase;
            }
            .p1 {
                font-size: 48px;
                line-height: 64px;
            }
            .p1_margin_top {
                margin-top: 48px;
            }
            .text-block p {
                margin-bottom: 4px;
            }
            .text-block_marginBot {
                margin-bottom: 28px;
            }
            .celeveoe-item {
                width: calc(33.33333% - 32px);
            }
            .h5_orange-border {
                padding-bottom: 21px;
                margin-bottom: 16px;
            }
            .celeveoe-item .h5 {
                word-wrap: anywhere;
            }
            .celeveoe-item .h5 br {
                display: none;
            }
            .scroll-info {
                margin-top: 40px;
            }
            .scroll-info__graf {
                width: 100%;
                padding: 32px;
                background-image: url(/local/templates/main/css/../img/page-mission/celevoe/2.svg);
            }
            .scroll-info__content {
                width: 100%;
                padding: 32px;
            }
            .scroll-info__scroll {
                padding-right: 32px;
                max-height: 482px;
            }
            ol li {
                position: relative;
                margin-bottom: 17px;
                padding-left: 34px;
                line-height: 153%;
            }
            .scroll-info__scrollol li {
                margin-bottom: 17px;
                padding-left: 34px;
                line-height: 153%;
            }
            .korporat-slider {
                width: calc(100% + 40px);
            }
            .korporat-slider__item {
                width: 288px;
                padding-top: 52px;
                padding-bottom: 0;
            }
            .korporat-slider__info {
                width: 100%;
            }
            .korporat-slider__image {
                width: 240px;
                order: -1;
                height: auto;
                margin-bottom: 32px;
            }
            .korporat-slider__info .h5 {
                margin-bottom: 16px;
            }
            .korporat-slider__image::before {
                left: -48px;
                top: -32px;
                width: 64px;
                height: 64px;
                font-size: 20px;
                line-height: 28px;
            }
            .t1-mb40 {
                margin-bottom: 32px;
            }
            .esg-item__char {
                font-size: 52px;
                line-height: 52px;
            }
            .esg-item::before {
                left: 54px;
            }
            .esg-item__info {
                padding-left: 80px;
            }
            .esg-item__info .h5 {
                margin-bottom: 17px;
            }
            .esg-item:last-child {
                margin-bottom: 0;
            }
            .spoiler__title {
                cursor: pointer;
                padding: 24px 56px 24px 0;
            }
            .spoiler__content {
                margin-top: -6px;
                padding-right: 56px;
                padding-bottom: 24px;
            }
            .spoiler::before {
                width: 16px;
                height: 16px;
                top: 25px;
                right: 8px;
            }
            .mb_40 {
                margin-bottom: 32px;
            }
            .mt_40 {
                margin-top: 32px;
            }
            .structur-table thead {
                display: none;
            }
            .structur-table.odd tr {
                border: 2px solid #D5E2F7;
            }
            table.structur-table.odd td {
                display: block;
                width: 100%;
                border: none;
                padding: 4px 16px;
            }
            table.structur-table.odd td:first-child {
                padding-top: 24px;
            }
            table.structur-table.odd td:last-child {
                padding-bottom: 24px;
            }
            .structur-table a[href^="tel:"] + a[href^="tel:"], .structur-table a[href^="tel:"] + a[href^="mailto:"], .structur-table a[href^="mailto:"] + a[href^="tel:"], .structur-table a[href^="mailto:"] + a[href^="mailto:"] {
                margin-top: 8px;
            }
            .tbody_odd {
                border-bottom: 2px solid #D5E2F7;
            }
            .structur-table.tbody_odd tr {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .structur-table.tbody_odd td:first-child {
                width: 100%;
                border-bottom: none;
            }
            .structur-table.tbody_odd td:nth-child(2),
            .structur-table.tbody_odd td:nth-child(1):nth-last-child(2) {
                width: 450px;
                border-bottom: none;
            }
            .structur-table.tbody_odd td:nth-child(3),
            .structur-table.tbody_odd td:nth-child(2):nth-last-child(1) {
                width: calc(100% - 450px);
                border-bottom: none;
                border-left: none;
                flex-grow: 1;
            }
            .more-link_arrow-left_to-bottom::before {
                width: 20px;
                height: 20px;
                top: 5px;
                margin-right: 8px;
            }
            .banner {
                padding: 40px 42px;
            }
            .banner__content {
                max-width: calc(66.666666% + 16px);
            }
            .banner_fon-logo::before {
                background-position: calc(100% + 170px) calc(50% + 31px);
                background-size: 400px;
            }
            .banner__zag {
                font-size: 24px;
                line-height: 32px;
            }
            .more-link_banner.more-link_arrow-right::after {
                top: -1px;
            }
            .elements-row__one-third-marginBotPDA {
                margin-bottom: 42px;
            }
            .text-block .p2 {
                margin-bottom: 16px;
            }
            .h2-block {
                display: block;
            }
            .h2-block .h2 + * {
                margin-top: 40px;
            }
            .h2-block .c3 {
                color: #787F91;
            }
            .big-number__row {
                width: 100%;
            }
            .big-number__pda-small {
                font-size: 88px;
                line-height: 96px;
                margin-right: 0px !important;
                margin-bottom: 0;
            }
            .big-number__descript {
                font-size: 24px;
                line-height: 32px;
            }
            .t2_marginTop {
                margin-top: 14px;
            }
            .rating-slider__item {
                width: 240px;
            }
            .elements-row__two-thirds--pda-mr-0 {
                margin-right: 0;
            }
            .rating-slider__item {
                padding-bottom: 20px;
            }
            .pda-on {
                display: block;
            }
            .more-link.pda-on {
                display: flex;
            }
            .pda-off {
                display: none;
            }
            .file-download {
                padding-left: 56px;
                padding-top: 4px;
            }
            .file-download.border-top-bottom {
                padding: 28px 0 24px 65px;
            }
            .file-download.border-top-bottom::before {
                top: 30px;
            }
            .file-download::before {
                width: 36px;
                height: 36px;
            }
            .text-block_text-margin p,
            .text-block_text-margin ol,
            .text-block_text-margin ul {
                margin-bottom: 24px;
            }
            .content-block_ink {
                font-size: 24px;
                line-height: 32px;
                margin: 24px 0;
            }
            .content-block .file-download {
                margin-top: 32px;
                padding-left: 50px;
            }
            .content-block_before::before {
                top: 32px;
                left: 32px;
                width: 48px;
            }
            .blockquote {
                padding: 12px 0 12px 36px;
                margin: 24px 0;
            }
            .blockquote2 {
                margin: 24px 0;
            }
            .text-block ul li {
                padding-left: 36px;
                margin-bottom: 12px;
            }
            .text-block ul li::before {
                top: 10px;
                left: 10px;
            }
            .text-block ul ul {
                margin-top: 12px;
            }
            .text-block ul.ul2 li::before {
                top: 7px;
                left: 7px;
            }
            .text-block img[align="left"] {
                margin: 0 24px 24px 0;
            }
            .text-block img[align="right"] {
                margin: 0 0 24px 24px;
            }
            p + img,
            ol + img,
            ul + img,
            table + img {
                margin-bottom: 24px;
            }

            .director-slider__container {
                width: calc(100% + 40px);
            }
            .director-slider__swiper-wrapper,
            .director-list {
                width: calc(100% + 40px);
            }
            .director-item {
                width: 240px;
            }
            .director-list .director-item {
                margin-right: 40px;
                margin-bottom: 40px;
                width: calc(33.3333% - 40px);
            }
            .director-item__ico {
                width: 240px;
                height: 278px;
                margin-bottom: 16px;
            }
            .director-item .t3 {
                margin-top: 8px;
            }
            .c3_marginBot {
                margin-bottom: 24px;
            }
            .person-one-image {
                width: max-content;
                height: auto;
            }
            .person-one-image img {
                position: relative;
                width: auto;
                height: auto;
            }
            .person-one-image:empty {
                display: none;
            }
            .committee__item {
                width: 100%;
                padding: 32px;
                margin-bottom: 32px;
            }
            .rating__logo img {
                max-width: 80%;
                max-height: 80%;
            }

            /*  .form__row .input__wrapper {
        width: 100%;
    } */
            /* .form__row--align-center {
        flex-wrap: wrap;
    }
    .soglas-text {
        margin-bottom: 24px;
    } */
            .five-columns {
                width: 100%;
            }
            .five-columns + .elements-row__half {
                width: 100%;
                margin-top: 32px;
            }
            .elements-form-subscribe {
                background-size: cover;
            }
            .button-min {
                padding: 12px 30px;
            }
            .before-ico {
                padding-left: 32px;
            }
            .before-ico::before {
                width: 24px;
                height: 24px;
            }

            .section-pt0 {
                padding-top: 1px;
            }
            .section-pb0 {
                padding-bottom: 1px;
            }


            .top-page-img--company {
                background-position: 100% 100% !important;
                background-size: 1250px !important;
            }
            .half {
                width: 100%;
            }
            .form__row_table-row {
                width: calc(100vw - 80px);
            }
            .button_min  {
                padding: 12px 30px !important;
            }
            #schedule-table {
                border-top: 2px solid #D5E2F7;
            }
            #schedule-table td {
                display: block;
                width: 100%;
                border-top: none;
            }
            .bloks-with-img_thin .bloks-with-img__big .bloks-with-img__img {
                height: 320px !important;
            }
            .bloks-with-img_thin .bloks-with-img__big .bloks-with-img__img {
                height: calc((100vw - 80px) * 0.45) !important;
            }
            .link-with-lines--horizontal-list {
                width: calc(100% + 32px);
            }
            .link-with-lines--horizontal-list .link-with-lines {
                width: calc(33.33% - 32px);
                margin-right: 32px;
                padding-bottom: 56px;
            }
            .link-with-lines--horizontal-list__four .link-with-lines {
                width: calc(25% - 32px);
            }
            .link-with-lines--horizontal-list__four .link-with-lines:nth-child(3n)::before {
                display: none;
            }
            .link-with-lines--horizontal-list .link-with-lines::before {
                right: -16px;
            }
            .register-contact__icons {
                width: 56px;
                height: 56px;
            }
            .register-contact__inform {
                width: calc(100% - 72px);
                margin-left: auto;
            }
            .banner-zag-link svg {
                margin: 0px 0px -8px 0px;
                width: 32px;
                height: 32px;
            }
            .projects_ico {
                width: calc(35% - 45px);
                height: calc((100vw - 80px) / 3.5);
            }
            .projects_info {
                width: calc(65% + 45px - 32px);
            }
            .link-with-lines_date .date {
                margin-right: 24px;
            }
            .helper-icon {
                width: 28px;
                height: 28px;
            }
            .create {
                display: block;
                width: 100%;
                margin-top: 16px;
            }
            .keywords {
                padding: 20px 0 10px;
                border-width: 2px;
            }
            .keywords__item {
                margin-right: 20px;
                margin-bottom: 10px;
            }
            .keywords__item:nth-child(2) {
                margin-left: 20px;
            }
            h1.h2 {
                margin-top: 0;
            }
            .block-with-column {
                margin-top: 24px;
            }
            a.back-link {
                margin-bottom: 32px;
            }
            .small-column {
                width: 100%;
            }
            .first-in-pda {
                order: -1;
            }
            .last-in-pda {
                order: 10;
            }
            .big-column {
                width: 100%;
            }
            .gray-socials {
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                justify-content: flex-start;
                width: 100%;
                margin-top: 40px;
            }
            .gray-solical__item {
                margin: 0 8px 0 0;
                width: 60px;
                height: 60px;
            }
            .complex-filter {
                justify-content: space-between;
                margin-top: 24px;
            }
            .complex-filter .select-with-name__select {
                width: calc(50% - 12px);
                margin-right: 0;
                margin-bottom: 16px;
            }
            .complex-filter__sort {
                margin-left: 0;
            }
            .pda2-3 {
                width: calc((100vw - 80px + 32px) / 9 * 6 - 32px) !important;
            }
            .pda1-3 {
                width: calc((100vw - 80px + 32px) / 9 * 3 - 32px) !important;
            }
            .complex-filter__sort {
                height: auto;
                margin-top: 16px;
            }
            .multimedia_item {
                width: calc(50% - 16px);
                margin-bottom: 40px;
            }
            .multimedia__prev {
                height: calc(((100vw - 80px) / 2 - 16px) * 0.5614);
            }
            .video__button {
                width: 64px;
                height: 64px;
            }
            .video__button svg {
                width: 8px;
                height: 12px;
            }
            .multimedia__views::after {
                width: 24px;
                height: 24px;
                background-size: cover;
            }
            .banner_fon-youtube::before {
                background-position: calc(100% - -25px) calc(100% + 70px);
                background-size: 300px;
            }
            .multimedia__count {
                width: 64px;
                height: 64px;
            }
            .multimedia__count .t3 {
                font-size: 16px;
                line-height: 24px;
            }

            .pswp__caption__center {
                font-size: 18px;
                line-height: 132%;
                left: 40px;
                max-width: calc((100vw - 80px));
                top: auto;
                bottom: 96px;
            }
            .pswp__counter {
                font-size: 18px;
                line-height: 132%;
                right: auto;
                left: 50%;
                transform: translate(-50%, 0);
                bottom: 38px;
            }
            .pswp__button--arrow--right,
            .pswp__button--arrow--left {
                transform: none;
                top: auto;
                bottom: 0px;
                width: 100px;
            }
            .pswp__button--arrow--left::before {
                left: 40px;
            }
            .pswp__button--arrow--right::before {
                right: 40px;
            }
            .pswp__img {
                max-width: 100vw !important;
                max-height: calc(100vw * 0.558) !important;
            }
            .section_top {
                margin-bottom: 40px;
            }
            .top-page-banner__text_left {
                left: 48px;
            }
            .video-no-margin {
                margin: 0;
            }
            .shema--desctop {
                display: none;
            }
            .shema--pda {
                display: block;
            }
            .prioritets {
                margin-bottom: -24px;
            }
            .prioritets__item {
                width: 100%;
                margin-bottom: 24px;
            }
            .prioritets__ico {
                width: 56px;
                height: 56px;
            }
            .prioritets__info {
                width: calc(100% - 56px - 24px);
            }
            .outerlink {
                margin-right: 0px;
            }
            .outerlink i {
                margin: 0px 0 -4px 2px;
                width: 18px;
                height: 18px;
            }
            .header-item.AvantGardeGothic .header-link {
                font-size: 12px;
            }
            .vacancy h5 {
                margin: 24px 0 16px;
            }
            .row-icons-4-items .elements-icons__item {
                width: calc(50% - 32px);
            }

            /* ==== */
            .h5-marginBot {
                margin-bottom: 32px;
            }
            .elements-row__half {
                width: calc(50% - 48px);
                margin-right: 48px;
            }
            .big-number {
                display: flex;
                align-items: center;
            }
            .big-number__content {
                margin-right: 32px;
                font-size: 88px;
                line-height: 96px;
            }
            .big-number__sub {
                margin-left: 16px;
                font-size: 32px;
                line-height: 88px;
            }
            .elements-row__big-numbers .big-number__percent {
                margin: 40px 0 0 12px;
                font-size: 28px;
                line-height: 36px;
            }
            .big-number__arrow {
                margin-left: 28px;
            }
            .video {
                margin: 32px 0 48px 0;
            }
            .elements-row__numbers {
                margin-bottom: -32px;
            }
            .elements-row__numbers .elements-row__half {
                margin-bottom: 32px;
            }
            .middle-number__content {
                font-size: 64px;
                line-height: 80px;
            }
            .middle-number__sub {
                font-size: 24px;
            }
            .middle-number .t2 {
                margin-top: 8px;
            }

            .geography-map {
                height: 826px;
                /* margin-bottom: -48px; */
            }
            .geography-map--full {
                height: 700px;
            }
            .informer:hover img {
                transform: scale(1);
            }
            .informer__inner {
                width: 288px;
                height: auto;
                padding: 0 16px;
            }
            .informer__inner-open {
                opacity: 1;
                pointer-events: all;
            }
            .informer__inner .informer__inner-item {
                margin: 16px 0;
            }
            .informer__inner .informer__inner-item:last-child {
                margin: 16px 0;
            }
            .button-center-map:hover img {
                transform: scale(1);
            }
            .button-page-map:hover img {
                transform: scale(1);
            }
            .button {
                padding: 24px 30px;
                font-size: 20px;
            }
            .button_mt {
                margin-top: 40px;
            }
            .button_arrow {
                margin-left: 18px;
            }
            .h2-noPDA {
                display: none;
            }
            .h2-noPC {
                display: block;
            }
            .element-row__fullscreen-1024 .elements-row__half {
                width: 100%;
                margin: 0 32px 32px 0;
                padding: 0;
            }
            .element-row__revers .element-row__revers-element {
                order: 2;
                margin-bottom: 0 !important;
            }
            .main-events-year {
                display: none !important;
            }
            .main-events-year__nav {
                display: none;
            }
            .main-events-year__select {
                opacity: 1;
                position: relative;
                pointer-events: all;
                margin-bottom: 32px;
            }
            .main-events-year__select .select-with-name__select {
                width: 288px;
            }
            .main-events-items--wrapper {
                margin-top: 0;
            }
            .main-events-items .owl-stage {
                flex-direction: column;
                width: 100% !important;
                pointer-events: none;
            }
            .main-events-items .owl-item {
                width: 100% !important;
            }
            .main-events-items .owl-item + .owl-item{
                margin-top: 32px !important;
            }
            .main-events-items__item {
                flex-direction: column;
                width: 100% !important;
                padding-top: 16px;
            }
            .main-events-items__item-img {
                width: 100%;
                height: 526px;
                margin-bottom: 16px;
            }
            .main-events-items__item-text {
                width: 100%;
            }
            .main-events__wrapper-sticks {
                display: none;
            }
            .top-block_gray {
                padding-bottom: 84px;
            }
            .block_margin-remove {
                margin: -72px 0;
            }
            .block-top {
                padding: 0 0 72px;
            }
            .top-page-img {
                height: 320px !important;
            }
            .geography-table__type-spoiler {
                min-height: 48px;
            }
            .geography-table__type-spoiler::after {
                right: 12px;
                border-width: 3px;
                width: 12px;
                height: 12px;
            }
            .geography-table__type-color {
                width: 48px;
            }
            .geography-table__type-color::before {
                width: 20px;
                height: 20px;
            }
            .geography-table__type-name {
                width: calc(100% - 248px);
                font-size: 18px;
            }
            .geography-table__type-power,
            .geography-table__type-date {
                width: 70px;
                padding: 0 6px;
            }
            .geography-table__type-date {
                width: 130px;
            }
            .geography-table__type-spoiler--active .geography-table__type-power,
            .geography-table__type-spoiler--active .geography-table__type-date {
                font-size: 14px;
            }
            .geography-table__item {
                min-height: 48px;
            }
            .geography-table__item-number {
                width: 48px;
                font-size: 18px;
            }
            .geography-table__item-name {
                width: calc(100% - 248px);
                font-size: 18px;
            }
            .geography-table__item-power,
            .geography-table__item-date {
                width: 70px;
                padding: 0 6px;
                font-size: 14px;
            }
            .geography-table__item-date {
                width: 130px;
            }

            .mobile-menu__inner {
                height: calc(100% - 93px);
            }
            .mobile-menu__sub {
                top: 69px;
                height: calc(100% - 69px);
            }

            .bloks-with-img__big {
                width: 100%;
                margin-right: 0;
                margin-bottom: 32px;
            }
            .bloks-with-img__img {
                margin-top: 16px;
            }
            .bloks-with-img__big .bloks-with-img__img {
                height: 444px;
            }
            .bloks-with-img__wrapper {
                width: 100%;
            }
            .bloks-with-img__small {
                width: calc(50% - 16px);
                margin-right: 32px;
            }
            .bloks-with-img__row + .bloks-with-img__row {
                margin-top: 32px;
            }

            .img-on-third--mt72 {
                margin-top: 40px;
            }
            .img-on-third--mb52 {
                margin-bottom: 40px;
            }
            .text-block--absolute {
                position: static;
            }

            .auction-list__item {
                padding: 24px 0;
            }
            .auction-list__item-date {
                margin-right: 32px;
                padding-left: 28px;
            }

            .price-audit__list .elements-row {
                padding: 24px 0;
            }

            .elements-row__inner-absolute {
                position: relative;
            }

            .two-blockLinks::before {
                display: none;
            }
            .two-blockLinks__item {
                width: 100%;
                margin-right: 0;
            }
            .two-blockLinks__item:first-child {
                margin-right: 0;
                margin-bottom: 40px;
                padding-bottom: 40px;
            }
            .two-blockLinks__item:first-child::before {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 3px;
                background: #D5E2F7;
            }
            .two-blockLinks__img {
                height: 310px;
                margin-bottom: 32px;
            }

            .search__form-top {
                margin-bottom: 36px;
                padding: 24px 24px 20px;
            }
            .search .form__row:first-child {
                margin: 0 12px 24px;
            }
            .search .checbox__wrapper {
                margin: 0 12px 16px;
            }
            .search .input {
                font-size: 20px;
            }
            .search .input__label {
                font-size: 20px;
            }
            .search__button {
                top: 40px;
                right: 36px;
            }
            .search__list {
                margin-top: 24px;
            }
            .search__item {
                padding: 24px 36px;
            }
            .search__item-subtitle {
                margin-top: 16px;
            }
            .search__item-text {
                margin-top: 12px;
            }

            .pagination__arrow {
                width: 40px;
                height: 40px;
            }
            .pagination__arrow-prev {
                margin-right: 12px;
            }
            .pagination__arrow-next {
                margin-left: 12px;
            }
            .pagination__item {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
            .pagination__dots {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }

            .elements-row__numbers .elements-row__half {
                width: calc(50% - 32px);
                margin-right: 32px;
            }
            .elements-row__numbers .elements-row__half .big-number__content {
                font-size: 88px;
                line-height: 96px;
            }

            .block-whith-image--inner {
                min-height: 638px;
                padding: 71px 0;
            }


            .sorevnovaniya-header {
                display: none;
            }
            .sorevnovaniya-banner {
                padding: 52px 0;
            }
            .sorevnovaniya-banner__decore {
                top: -160px;
                right: -224px;
            }
            .sorevnovaniya-banner__logo {
                right: 0;
                width: 142px;
            }

            .tiles__item {
                width: calc(50% - 16px);
                margin: 24px 0 0 32px;
            }

            .tiles__item-vertical {
                height: calc(((100vw / 2) - 80px)  / 0.64933);
            }

            .tiles__item-votes {
                margin-top: 60px;
            }

            .tiles__item:nth-of-type(3n + 1) {
                margin-left: 32px;
            }
            .tiles__item:nth-of-type(2n + 1) {
                margin-left: 0;
            }
            .tiles__name {
                font-size: 20px;
            }

            .block-top-line {
                padding-top: 40px;
            }
            .block-top-line::before {
                width: calc(100% - 80px);
            }

            .sorevnovaniya-slider {
                overflow: visible;
            }
            .sorevnovaniya-slide {
                width: 448px !important;
            }
            .sorevnovaniya-slider .sorevnovaniya-slide .multimedia__prev {
                height: 252px !important;
            }

            .sorevnovaniya-footer--links .elements-row__quarter {
                width: 100%;
            }
            .sorevnovaniya-footer--links .elements-row__quarter a {
                display: block;
                margin: 12px 0;
            }

            .social__list {
                margin-top: 40px;
            }
            .social__item {
                width: calc(50% - 16px);
                margin-left: 32px;
                padding: 16px;
            }
            .social__item-hidden--pc {
                display: block;
            }
            .social__item-hidden--pda {
                display: none;
            }
            .social__item:nth-of-type(3n - 2) {
                margin-left: 32px;
            }
            .social__item:nth-of-type(2n - 1) {
                margin-left: 0;
            }
            .social__item-links {
                margin-top: 12px;
            }

            .header-sorev-konkurs {
                padding: 8px 16px;
            }
            .header-sorev-konkurs .header-item-name {
                max-width: 280px;
                font-size: 12px;
                font-weight: 700;
                line-height: 16px;
            }
            .header-social-link {
                width: 32px;
                height: 32px;
            }

            .subscription-mt52 {
                margin-top: 32px;
            }

            .popup-success__block {
                max-width: 528px;
                padding: 44px;
            }
            .popup-success__block-close {
                top: 16px;
                right: 16px;
                width: 24px;
                height: 24px;
            }
            .popup-success__block-close::before,
            .popup-success__block-close::after {
                width: 15px;
            }
            .popup-success__block-descr {
                margin-top: 20px;
            }

            .banner--mini {
                margin-top: 36px;
            }

            .celeveoe-item--borders {
                margin-bottom: 48px;
            }
            .elements-row__one-third.celeveoe-item--borders {
                margin-bottom: 32px;
            }
            .top-block_gray {
                padding: 842px 0 88px 0 !important;
            }
            .shema__line--1 {
                width: 364px;
            }
            .shema__line--2 {
                margin-left: 82px;
                width: 213px;
            }
            .file-download_archiv {
                padding: 8px 16px 8px 56px;
            }
            .file-download_archiv::before {
                top: 4px;
                left: 4px;
            }

            .cookie-files-banner {
                font-size: 16px;
                transform: translateY(450px);
            }
        }

        @media(max-width: 900px) {
            .link-with-lines--horizontal-list {
                width: 100%
            }
            .link-with-lines--horizontal-list .link-with-lines {
                width: 100%;
                margin-right: 0;
                padding: 20px 40px 20px 0;
                border-top: 2px solid #D5E2F7;
                border-bottom: 2px solid #D5E2F7;
            }
            .link-with-lines--horizontal-list .link-with-lines + .link-with-lines {
                border-top: none;
            }
            .link-with-lines--horizontal-list .link-with-lines::before {
                display: none;
            }
            .link-with-lines--horizontal-list .link-with-lines_arrow {
                left: auto;
                right: 0;
                top: 50%;
                transform: translate(0,-50%);
            }
            .helper-icon_to-input {
                right: -32px;
            }
            .contacts-list__elem {
                width: 100%;
                padding: 16px 8px;
            }
            .contacts-list__elem_value {
                width: 100%;
            }
            .contacts-list__elem:nth-child(2n - 1) + .contacts-list__elem {
                border-left: none;
            }
        }

        @media(max-width: 850px) {
            .director-list .director-item {
                width: calc(50% - 40px);
            }
        }

        @media(max-width: 768px) {
            .three-banners-slider .swiper-slide {
                width: 240px !important;
            }
            .shema__row {
                flex-wrap: wrap;
                margin-bottom: 0;
            }
            .shema__block {
                width: 100%;
                flex-shrink: 1;
                margin-bottom: 16px;
                margin-right: 0;
                padding: 4px 10px;
            }
            .shema__block::before,
            .shema__block::after {
                width: 16px;
                height: 2px;
                left: -16px;
                top: 25%;
                transform: none;
            }
            .shema__block::after {
                top: 75%;
            }
            .shema__block--supervisor {
                margin-left: 0px;
            }
            .shema__block--deputy {
                width: calc(100% - 32px);
            }
            .shema__block--deputy,
            .shema__block--analytical {
                margin-left: 32px;
            }
            .shema__block--audit-center,
            .shema__block--audit-far-east {
                margin-left: 64px;
            }
            .shema__line--1 {
                width: 2px;
                height: 350px;
                top: 50px;
                left: -16px;
                margin: 0;
                position: absolute;
            }
            .shema__line--1::before {
                content: '';
                display: block;
                width: 32px;
                height: 2px;
                position: absolute;
                top: 55px;
                left: 0px;
                background: #005D9F;
            }
            .shema__line--1::after {
                width: 64px;
                height: 2px;
                left: 0;
            }
            .shema__line--2 {
                width: 2px;
                height: 145px;
                top: 154px;
                left: 16px;
                margin: 0;
                position: absolute;
            }
            .shema__line--2::before,
            .shema__line--2::after {
                content: '';
                display: block;
                width: 32px;
                height: 2px;
                position: absolute;
                top: 54px;
                left: 0px;
                background: #005D9F;
            }
            .shema__line--2::after {
                top: calc(100% - 2px);
            }

            .geography-table__item-number {
                font-size: 15px;
                line-height: 130%;
            }
            .geography-table__type-name {
                padding: 12px 6px;
                font-size: 15px;
                line-height: 130%;
            }
            .geography-table__item-name {
                padding: 12px 6px;
                font-size: 15px;
                line-height: 130%;
            }

            .participant__figure {
                width: 100%;
                margin-bottom: 36px;
                margin-left: 0 !important;
            }

            .cookie-files-banner {
                bottom: 0;
                width: 100%;
                font-size: 14px;
            }
            .cookie-files-text {
                width: calc(100% - 130px);
            }
            .cookie-files-accept {
                width: 130px;
                height: 55px;
            }
        }

        @media(max-width: 700px) {
            .header__sites-inner > .container {
                padding-bottom: 40px;
            }
            .header__sites h4 {
                margin: 40px 0 8px 0;
            }
            .header__sites-list {
                padding-top: 32px;
            }
            .header__sites-wrapper {
                flex-direction: column;
            }
            .header__sites-list:first-child {
                padding-top: 24px !important;
            }
            .header__sites-list {
                width: 100%;
                padding-top: 0;
                padding-left: 0 !important;
            }
            .header__sites-item a {
                font-size: 14px;
            }
            .ges-levels__top {
                width: calc(40% - 25px);
            }
            .ges-levels__levels {
                font-size: 16px;
            }
            .water-day-text {
                font-size: 16px;
            }
            .water-day-text.d30 {
                display: none;
            }
            .water-day__title {
                margin-right: 0;
                margin-bottom: 8px;
            }

            .kotirovki {
                align-items: flex-start;
            }
            .kotirovki__wrapper {
                flex-wrap: wrap;
                width: 50%;
            }
            .kotirovki__wrapper .kotirovki__item {
                width: 100% !important;
            }
            .kotirovki__wrapper .kotirovki__item:last-child {
                width: 100% !important;
            }
            .kotirovki__item {
                /* width: calc(50% - 32px); */
            }
            .kotirovki .elements-row__half {
                width: calc(50% - 32px);
                margin-right: 32px;
            }
            .kotirovki__value {
                justify-content: flex-start;
            }

            .footer__row {
                width: 100%;
            }
            .footer__row::before {
                width: 100%;
            }
            .footer__row .elements-row__quarter {
                width: 100%;
                margin-right: 0;
            }
            .footer__row .elements-row__half {
                width: 100%;
                margin-right: 0;
            }
            .footer__row .phone-block {
                margin-bottom: 4px;
            }
            .phone-block .toggle__arrow {
                position: relative;
                top: auto;
                left: auto !important;
            }
            .toggle__content {
                left: -16px;
                padding: 16px;
            }
            .footer__row .phone-block__description {
                margin-bottom: 12px;
            }
            .footer__row .elements-row__quarter:last-child .phone-block__description {
                margin-bottom: 0;
            }
            .footer__row .socila-links, .footer__row .logo-links {
                margin-bottom: 24px;
            }
            .footer__bottom-row {
                width: 100%;
            }
            .prava {
                width: 100%;
                margin-left: 0;
                margin-top: 16px;
            }
            .celeveoe-item {
                width: calc(100% - 32px);
            }
            .structur-table.tbody_odd td:nth-child(2),
            .structur-table.tbody_odd td:nth-child(1):nth-last-child(2) {
                width: 300px;
            }
            .structur-table.tbody_odd td:nth-child(3),
            .structur-table.tbody_odd td:nth-child(2):nth-last-child(1) {
                width: calc(100% - 300px);
            }
            .director-list {
                width: 100%;
            }
            .director-list .director-item {
                width: 100%;
                margin-right: 0;
            }
            .rating__logo {
                height: 116px;
            }
            .elements-form-subscribe {
                padding: 32px 24px;
            }
            .elements-form-subscribe__title {
                margin-bottom: 20px;
            }
            .elements-form-subscribe form {
                flex-wrap: wrap;
            }
            .elements-form-subscribe .input__wrapper,
            .select-without-name {
                width: 100%;
                margin-bottom: 16px;
            }
            .elements-form-subscribe .c1 {
                width: 100%;
                margin-top: 4px;
            }
            .elements-form-subscribe button {
                margin-top: 20px;
                width: 100%;
            }
            #invest-table {
                border-top: 2px solid #D5E2F7;
            }
            #invest-table td {
                display: block;
                width: 100%;
                border-top: none;
            }
            .bloks-with-img_thin .bloks-with-img__small {
                width: 100%;
                margin-bottom: 52px;
            }
            .bloks-with-img_thin .bloks-with-img__row + .bloks-with-img__row {
                margin-top: 0;
            }
            .projects_ico {
                width: 75%;
                height: calc((100vw - 80px) / 1.5);
                margin-bottom: 24px;
            }
            .projects_info {
                width: 100%;
            }
            .events__info {
                width: 100%;
            }
            .complex-filter {
                margin: 16px 0 32px;
            }
            .complex-filter .select-with-name__select {
                width: 100% !important;
            }
            .complex-filter__sort {
                margin-top: 8px;
            }
            .multimedia_item {
                width: 100%;
                margin-bottom: 32px;
            }
            .multimedia__prev {
                height: calc((100vw - 32px) * 0.561);
                background: center center / cover;
            }
            .banner_fon-youtube::before {
                background-position: calc(100% - -25px) calc(100% + 54px);
            }
            .material__ico {
                width: 160px;
                height: 144px;
            }
            .material__info {
                width: calc(100% - 160px - 24px);
            }

            .mater-al-wide-ico-list {
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                justify-content: space-between;
            }
            .mater-al-wide-ico-list .material {
                width: calc(50% - 16px);
            }
            .mater-al-wide-ico-list .material__ico {
                width: 100%;
                margin-bottom: 16px;
            }
            .mater-al-wide-ico-list .material__info {
                width: 100%;
            }
            .mater-al-wide-ico-list .material__info .c2 {
                margin-bottom: 16px;
            }
            .h5-material-margin {
                margin: 40px 0 32px;
            }
            .projects_item--izadnie .projects_ico {
                width: 152px;
            }
            .projects_item--izadnie .projects_info {
                width: 100%;
            }
            .display-none-700 {
                display: none;
            }
            .display-flex-700 {
                display: flex;
            }
            .shema--pda {
                display: none;
            }
            .shema--mobile {
                display: block;
            }
            .prioritets {
                margin-bottom: -16px;
            }
            .prioritets__item {
                margin-bottom: 16px;
            }
            .prioritets__ico {
                width: 48px;
                height: 48px;
            }
            .prioritets__info {
                width: calc(100% - 48px - 16px);
            }
            .diagramm .diagramm__image {
                margin-left: 80px;
                width: 240px;
                height: 240px;
            }
            .diagramm .diagramm__item::before {
                width: 8px;
                height: 8px;
                margin-right: 8px;
            }
            .diagramm .diagramm__value {
                font-size: 16px;
                line-height: 18px;
            }
            .row-icons__title {
                font-size: 18px;
            }

            /* ==== */
            .big-number {
                flex-direction: column;
                align-items: flex-start !important;
            }
            .map-select {
                width: 100%;
                margin: 0 0 16px 0;
            }
            .map-switch {
                width: 100%;
            }
            .geography-map {
                height: 560px;
                margin-top: 32px;
            }
            .geography-table {
                margin-top: 40px;
            }

            .sorevnovaniya-header--bottom .header-sites-link {
                display: none;
            }

            .header-sorev-konkurs {
                box-shadow: none;
            }
            .header-sorev-konkurs .header-item-name {
                display: none;
            }
            .header-sorev-konkurs--bottom {
                display: block;
                padding: 16px;
                border-top: 1px solid #EBF3FF;
                color: #005D9F;
                font-size: 12px;
                font-weight: 700;
                line-height: 16px;
                text-transform: uppercase;
            }
            .header-sorev-konkurs .header-sites-link .header-link {
                font-size: 0;
            }

            .subscription__checkbox-block {
                flex-wrap: wrap;
            }
            .subscription__checkbox-column {
                width: 100%;
            }
        }

        @media (max-width: 640px) {
            .mobile-on {
                display: block;
            }
            .mobile-off {
                display: none;
            }
        }

        @media(max-width: 600px) {
            .no_pda-600 {
                display: none;
            }
            .header-search__form-wrapper {
                width: calc(100% - 80px);
            }

            .tabs__list .swiper-slide:last-child {
                margin-right: 11px;
            }

            .block_blue .h1 {
                font-family: 'Inter';
                font-size: 36px;
                line-height: 52px;
            }
            .ges-levels__top {
                width: 100%;
                margin: 40px 0 32px;
            }
            .ges-levels__ico {
                position: static;
                width: 100%;
                height: auto;
                margin-bottom: 32px;
            }
            .ges-levels__ico img {
                width: 100%;
                height: auto;
            }
            .ges-levels__levels {
                font-size: 14px;
            }
            .water-day-text {
                font-size: 12px;
                line-height: 0px;
                transform: translate(2.2%,-5%);
            }

            .top-page-img--company {
                background-position: 90% 100% !important;
                background-size: 1100px !important;
            }
            .news-filter .select-with-name__select{
                margin-left: 0;
                width: 100%;
            }
            .news-filter{
                flex-wrap: wrap;
            }

            /* ==== */
            .elements-row__big-numbers .elements-row__one-third {
                width: 100%;
                margin-right: 0;
            }

            .search .form__row:first-child {
                margin: 0 0 24px;
            }
            .search .input {
                font-size: 16px;
            }
            .search .input__label {
                font-size: 16px;
            }
            .search__button {
                top: 32px;
                right: 16px;
                width: 32px;
                height: 32px;
            }
            .search .checbox__wrapper {
                width: 100%;
                height: auto;
                margin: 0 0 16px;
            }
            .search .checbox__title {
                width: 100%;
            }
            .search__form-top {
                margin-bottom: 8px;
                padding: 12px 16px 12px;
            }
            .search__form-bottom {
                flex-wrap: wrap;
            }
            .search__form-bottom h6 {
                order: 2;
            }
            .search__form-filters {
                width: 100%;
                margin-bottom: 16px;
            }
            .search__radio + .search__radio {
                margin-left: 16px;
            }
            .search__item {
                padding: 12px 16px;
            }
            .search__item-subtitle {
                margin-top: 12px;
            }
            .search__error {
                margin-top: 24px;
            }

            .pagination {
                margin-top: 24px;
            }
            .pagination__arrow {
                width: 32px;
                height: 32px;
            }
            .pagination__arrow-prev {
                margin-right: 4px;
            }
            .pagination__arrow-next {
                margin-left: 4px;
            }
            .pagination__item {
                width: 32px;
                height: 32px;
                font-size: 13px;
            }
            .pagination__dots {
                width: 14px;
                height: 32px;
                font-size: 13px;
            }

            .elements-row__numbers .elements-row__half {
                width: 100%;
                margin-right: 0;
            }
            .elements-row__numbers .elements-row__half .big-number__content {
                font-size: 64px;
                line-height: 72px;
            }

            .tiles__item {
                width: 100%;
                margin: 16px 0 0 0px;
            }
            .tiles__item-vertical {
                width: calc(50% - 12px);
                height: calc(((100vw / 2) - 60px)  / 0.64933);
            }
            .tiles__item-votes {
                margin-top: 60px;
                margin-top: 60px;
            }
            .tiles__item:nth-of-type(3n + 1) {
                margin-left: 0;
            }
            .tiles__name {
                font-size: 18px;
            }

            .sorevnovaniya-slide {
                width: 240px !important;
            }
            .sorevnovaniya-slider .sorevnovaniya-slide .multimedia__prev {
                height: 135px !important;
            }

            .social__list {
                margin-top: 32px;
            }
            .social__item {
                width: 100%;
                margin-left: 0 !important;
                margin-bottom: 16px;
            }

            .popup-success__block {
                max-width: 330px;
                padding: 48px 16px;
            }
            .popup-success__block-title {
                margin-top: 24px;
            }
            .popup-success__block-descr {
                margin-top: 16px;
            }

            .cookie-files-banner {
                flex-wrap: wrap;
                padding: 15px 35px 15px 15px;
                font-size: 13px;
            }
            .cookie-files-text {
                width: 100%;
                margin: 0 0 15px 0;
                padding: 0;
            }
            .cookie-files-accept {
                height: 30px;
                margin: 0 auto;
                transform: translateX(10px);
            }
        }

        @media (max-width: 550px) {
            .sorevnovaniya-header--bottom .header-trust-link {
                display: none;
            }
            .sorevnovaniya-header--bottom .header-item_border-left_pda.header-item_small {
                margin: 0 0 0 auto;
                padding: 0;
            }
            .sorevnovaniya-header--bottom .header-item_border-left_pda.header-item_small::before {
                display: none;
            }
        }

        @media(max-width: 500px) {
            .last-day-info__text {
                font-size: 16px;
                line-height: 24px;
            }
        }

        @media(max-width: 480px) {
            body {
                font-size: 16px;
            }
            .container {
                width: calc(100% - 32px);
            }
            h1 {
                margin-top: 22px;
            }
            h1,.h1 {
                font-family: 'Inter';
                font-size: 36px;
                line-height: 52px;
            }
            h2,.h2 {
                font-size: 32px;
                line-height: 40px;
            }
            h3,.h3 {
                font-size: 28px;
                line-height: 36px;
            }
            h4,.h4 {
                font-family: 'Inter';
                font-size: 24px;
                line-height: 32px;
            }
            h5,.h5 {
                font-family: 'Inter';
                font-size: 18px;
                line-height: 28px;
            }
            h6,.h6 {
                font-size: 16px;
                line-height: 24px;
            }
            .text-block h1, .text-block .h1,
            .text-block h2, .text-block .h2,
            .text-block h3, .text-block .h3,
            .text-block h4, .text-block .h4,
            .text-block h5, .text-block .h5 {
                margin: 48px 0 24px;
            }
            .h1-marginBot {
                margin-bottom: 40px;
            }
            .h2-marginBot {
                margin-bottom: 32px;
            }
            .h4-marginBot {
                margin-bottom: 24px;
            }
            .p2 {
                font-size: 20px;
            }
            .kotirovki .c3 {
                font-size: 16px;
                line-height: 24px;
            }
            .t1 {
                font-size: 16px;
                line-height: 24px;
            }
            .no_mobile {
                display: none;
            }

            .header {
                justify-content: space-between;
                padding: 16px;
                /* padding: 10px 16px 16px 16px; */
            }
            .header-item_border-left_pda.header-item_small {
                margin: 0 0 0 auto;
                padding: 0;
            }
            .header-item_border-left::before {
                display: none;
            }
            .mop {
                margin: 0 0 0 16px;
            }

            .top-page-slider {
                height: 496px;
            }
            .top-page-banner {
                padding: 16px;
            }
            .top-page-banner__text_right {
                left: 16px;
                top: 48px;
            }
            .top-page-banner__heading {
                font-size: 64px;
                line-height: 72px;
            }
            .top-page-banner__description {
                font-family: 'Inter';
                font-size: 24px;
                line-height: 32px;
                width: 350px;
            }
            .swiper-pagination_in-slider {
                bottom: 28px !important;
                padding-left: 8px;
            }
            .swiper-pagination-bullet {
                width: 12px;
                height: 12px;
            }
            .top-page-banner__link img {
                right: 16px;
                bottom: 24px;
                width: 32px;
            }

            .block {
                padding: 56px 0;
            }
            .element-slide {
                width: 240px !important;
            }
            .element-slider__ico {
                height: 225px;
            }

            .tabs__title {
                /* margin-left: 32px; */
            }
            .news_top .tabs__list {
                /* flex-wrap: nowrap; */
            }
            .news__item {
                padding: 16px 0;
            }
            .news__image {
                height: 238px;
            }
            .date__day {
                font-size: 32px;
                line-height: 40px;
            }
            .date__month {
                font-size: 15px;
            }
            .more-link {
                font-family: 'Inter';
                font-size: 18px;
                margin: 0 auto;
            }
            .more-link_arrow-right::after {
                width: 24px;
                height: 24px;
            }
            .kotirovki .elements-row__half {
                margin-right: 0;
            }
            .elements-row__quarter {
                width: calc(50% - 8px);
                margin-right: 16px;
            }
            .kotirovki .elements-row__half {
                width: calc(50% - 8px);
            }

            .ges-levels__levels {
                font-size: 13px;
            }
            .content-block {
                padding: 24px;
            }
            .elements-row {
                width: 100%;
            }

            .elements-row--big-img .elements-row__one-third {
                margin-right: 0;
            }

            .elements-row__one-third {
                margin-right: 0;
                margin-bottom: 24px;
            }
            .elements-row__two-thirds,
            .elements-row__two-thirds--ml-auto,
            .elements-row__two-thirds--ml {
                width: 100%;
                margin-right: 0px;
            }
            .block_image {
                margin-top: 56px;
            }
            .block__info-on-image {
                padding: 112px 0;
                min-height: 600px;
            }
            .p1_margin_top {
                margin-top: 32px;
            }
            .text-block {
                line-height: 147%;
            }
            .text-block_marginBot {
                margin-bottom: 24px;
            }
            .link-with-lines {
                padding: 16px 0 15px;
                font-size: 16px;
                line-height: 24px;
            }
            .p1 {
                font-size: 32px;
                line-height: 40px;
            }
            .block_image--nadoznoeObespeceniye {
                /*background: -666px 601px / 1594px;*/
            }
            .celeveoe-item {
                width: 100%;
            }
            .h5_orange-border {
                padding-bottom: 14px;
                margin-bottom: 8px;
            }
            .scroll-info {
                margin-top: 14px;
            }
            .scroll-info__graf {
                padding: 16px;
                background-position: 66% center;
            }
            .scroll-info__content {
                padding: 24px 8px;
            }
            ol li {
                margin-bottom: 14px;
                padding-left: 32px;
            }
            ol ol li {
                padding-left: 54px;
            }
            .scroll-info__scroll {
                padding-right: 16px;
                max-height: 492px;
            }
            .korporat-slider {
                width: calc(100% + 16px);
            }
            .korporat-slider__item {
                width: 240px;
                padding-top: 26px;
            }
            .korporat-slider__image {
                width: 216px;
                margin-bottom: 24px;
            }
            .korporat-slider__image::before {
                left: -24px;
                top: -24px;
                width: 48px;
                height: 48px;
                font-size: 18px;
                line-height: 28px;
            }
            .korporat-slider__info .h5 {
                margin-bottom: 8px;
            }
            .t1-mb40 {
                margin-bottom: 24px;
            }
            .esg-item__char {
                font-size: 40px;
                line-height: 48px;
            }
            .esg-item::before {
                left: 46px;
            }
            .esg-item__info {
                padding-left: 64px;
            }
            .esg-item__info .h5 {
                margin-bottom: 8px;
            }
            .spoiler__title {
                padding: 19px 48px 19px 0;
            }
            .spoiler__content {
                margin-top: -4px;
                padding-right: 48px;
                padding-bottom: 19px;
            }
            .spoiler::before {
                width: 12px;
                height: 12px;
                top: 22px;
                right: 6px;
                border-right: 3px solid #F08400;
                border-bottom: 3px solid #F08400;
            }
            .mb_40 {
                margin-bottom: 24px;
            }
            .mt_40 {
                margin-top: 24px;
            }
            table.structur-table.odd td {
                padding: 2px 8px;
            }
            table.structur-table.odd td:first-child {
                padding-top: 16px;
            }
            table.structur-table.odd td:last-child {
                padding-bottom: 16px;
            }
            table.structur-table.tbody_odd td {
                padding: 16px 8px;
            }
            table.structur-table.tbody_odd.small-td-table td {
                padding: 4px;
            }
            .structur-table a[href^="tel:"] + a[href^="tel:"], .structur-table a[href^="tel:"] + a[href^="mailto:"], .structur-table a[href^="mailto:"] + a[href^="tel:"], .structur-table a[href^="mailto:"] + a[href^="mailto:"] {
                margin-top: 4px;
            }
            .structur-table.tbody_odd td:nth-child(2),
            .structur-table.tbody_odd td:nth-child(1):nth-last-child(2) {
                width: 255px;
            }
            .structur-table.tbody_odd td:nth-child(3),
            .structur-table.tbody_odd td:nth-child(2):nth-last-child(1) {
                width: calc(100% - 255px);
            }
            .banner {
                padding: 24px 24px 160px 24px;
            }
            .banner__content {
                max-width: 100%;
            }
            .banner_fon-logo::before {
                background-position: calc(100% + 102px) calc(50% + 130px);
                background-size: 250px;
            }
            .banner__zag {
                font-size: 20px;
                line-height: 24px;
            }
            .tabs__list_line .swiper-slide {
                margin-right: 32px;
            }
            .elements-row__one-third-marginBotPDA {
                margin-bottom: 32px;
            }
            .h2-block .c3 {
                margin-top: 28px;
            }
            .t2 {
                font-size: 16px;
                line-height: 24px;
            }
            .more-link_mobile-left {
                margin-left: 0;
            }
            .file-download {
                padding-left: 48px;
            }
            .file-download::before {
                width: 32px;
                height: 32px;
            }
            .file-download.border-top-bottom {
                padding: 24px 0 20px 48px;
            }
            .file-download.border-top-bottom::before {
                top: 26px;
            }
            .text-block_text-margin p,
            .text-block_text-margin ol,
            .text-block_text-margin ul {
                margin-bottom: 20px;
            }
            .content-block_ink {
                font-size: 20px;
                margin: 20px 0;
            }
            .content-block_before {
                padding: 48px 24px 24px;
            }
            .content-block_before::before {
                top: 24px;
                left: 24px;
                width: 40px;
            }
            .content-block .file-download {
                margin-top: 24px;
                padding-left: 44px;
            }
            .blockquote {
                padding: 8px 0 8px 24px;
                margin: 20px 0;
            }
            .blockquote2 {
                padding: 84px 24px 24px;
                margin: 20px 0;
            }
            .blockquote2::before {
                top: 24px;
                left: 24px;
            }
            .direct-speech {
                display: block;
                margin-top: 24px;
            }
            .direct-speech__image {
                width: 86px;
                max-height: 96px;
                margin-bottom: 20px;
            }
            .direct-speech__text {
                width: 100%;
            }
            .c1 {
                font-size: 14px;
                line-height: 20px;
            }
            .text-block ul li {
                padding-left: 32px;
                margin-bottom: 8px;
            }
            .text-block ul li::before {
                top: 8px;
                left: 8px;
            }
            .text-block ul.ul2 li::before {
                top: 5px;
                left: 5px;
            }
            .text-block ul li {
                padding-left: 32px;
                margin-bottom: 8px;
            }
            .text-block ul ul {
                margin-left: -6px;
                margin-top: 8px;
            }
            .text-block ul > ul {
                margin-left: 26px;
                margin-top: 8px;
            }
            .text-block img[align="left"] {
                margin: 0 20px 20px 0;
            }
            .text-block img[align="right"] {
                margin: 0 0 20px 20px;
            }
            p + img,
            ol + img,
            ul + img,
            table + img {
                margin-bottom: 20px;
            }

            .director-slider__container {
                width: calc(100% + 16px);
            }
            .director-slider__swiper-wrapper,
            .director-sliderlist {
                width: calc(100% + 24px);
            }
            .director-item {
                width: 240px;
            }
            .back-link {
                margin-bottom: 32px;
            }
            .c3_marginBot {
                margin-bottom: 20px;
            }
            .committee__item {
                padding: 24px;
                margin-bottom: 24px;
            }
            .committee__hr {
                margin: 22px 0 20px;
            }
            .committee__info {
                width: 100%;
                margin-top: 16px;
            }
            .committee__info .h6 + .t3 {
                margin-top: 8px;
            }
            .rating__item {
                width: 100%;
                margin-bottom: 24px;
            }
            .rating__logo {
                height: 116px;
            }

            .form__row .input__wrapper {
                width: 100%;
                margin-bottom: 20px;
            }
            .form__row .input__wrapper:last-child {
                margin-bottom: 0;
            }
            .soglas-text {
                width: 100%;
                margin-right: 0;
                margin-bottom: 24px;
            }
            .form__row--align-center {
                align-items: flex-start;
                flex-wrap: wrap;
            }
            .elements-form-subscribe {
                padding: 32px 24px;
            }
            .before-ico {
                padding-left: 32px;
            }
            .before-ico::before {
                width: 24px;
                height: 24px;
            }
            .section-pt0 {
                padding-top: 1px;
            }
            .section-pb0 {
                padding-bottom: 1px;
            }
            .big-number__pda-small {
                font-size: 64px;
                line-height: 72px;
            }

            .top-page-img--company {
                background-position: 86% -50px !important;
                background-size: 1024px !important;
            }
            .form__row_table-row {
                width: calc(100vw - 32px);
            }
            .register-contact {
                padding: 16px;
            }
            .register-contact__icons {
                width: 48px;
                height: 48px;
            }
            .register-contact__inform {
                width: calc(100% - 56px);
                margin-left: auto;
            }
            .banner-zag-link svg {
                margin: 0px 0px -5px 0px;
                width: 24px;
                height: 24px;
            }
            .tabs__list .simplebar-content .tabs__title {
                margin-bottom: 20px;
                white-space: nowrap;
            }
            .file-download_archiv {
                flex-wrap: wrap;
                padding: 14px 14px 14px 60px;
            }
            .file-download_archiv .t2 {
                width: 100%;
            }
            .file-download_archiv::before {
                top: 14px;
                left: 14px;
            }
            .serevnovanie-prev__item {
                width: 100%;
                margin-bottom: 24px;
            }
            .h4_marginBot {
                margin-bottom: 24px;
            }
            .serevnovanie-prev {
                margin-bottom: 0;
            }
            .projects_ico {
                width: 100%;
                height: calc((100vw - 32px) / 1.2);
            }
            .link-with-lines_date {
                flex-wrap: wrap;
            }
            .link-with-lines_date .date {
                margin-right: 0px;
                margin-bottom: 4px;
                width: 100%;
            }
            .helper-icon {
                width: 20px;
                height: 20px;
            }
            .helper-icon_to-input {
                position: absolute;
                top: -16px;
                right: 0px;
            }
            .helper-box {
                padding: 14px;
            }
            .mb-40 {
                margin-bottom: 32px;
            }
            .keywords {
                padding: 16px 0 8px;
                border-width: 2px;
            }
            .keywords__item {
                margin-right: 16px;
                margin-bottom: 8px;
            }
            .keywords__item:nth-child(2) {
                margin-left: 16px;
            }
            .gray-solical__item {
                width: 56px;
                height: 56px;
                border-width: 3px;
            }
            .material {
                margin-bottom: 24px;
            }
            .material__ico {
                width: 100%;
                height: calc(100vw - 32px - 25px);
                border-width: 2px;
                margin-bottom: 16px;
            }
            .material__info {
                width: 100%;
            }
            .material__info .c2 {
                margin-bottom: 16px;
            }

            .mater-al-wide-ico-list .material {
                width: 100%;
            }
            .mater-al-wide-ico-list .material__ico {
                height: calc((100vw - 32px) * 0.561);
            }
            .pswp__caption__center {
                font-size: 16px;
                left: 16px;
                max-width: calc((100vw - 32px));
                bottom: 80px;
            }
            .pswp__counter {
                font-size: 16px;
                bottom: 32px;
            }
            .photogallery-popup__close, .pswp__button--close {
                position: fixed;
                top: 22px;
                right: 22px;
                width: 32px;
                height: 32px;
                cursor: pointer;
                opacity: 1;
            }
            .pswp__button--arrow--left::before,
            .pswp__button--arrow--right::before {
                top: auto;
                bottom: 16px;
            }

            .photogallery-popup__close, .pswp__button--close {
                top: 16px;
                right: 16px;
                width: 24px;
                height: 24px;
            }
            .photogallery-popup__close::before,
            .photogallery-popup__close::after,
            .pswp__button--close::before,
            .pswp__button--close::after {
                width: 16px;
            }
            .text-block_text-margin.t3 p,
            .text-block_text-margin.t3 ol,
            .text-block_text-margin.t3 ul {
                margin-bottom: 16px;
            }
            .section_top {
                margin-bottom: 40px;
            }
            .photo-slide {
                width: calc(100vw - 32px);
                margin-bottom: 32px;
            }
            .photo-slide .element-slider__ico {
                height: calc((100vw - 32px) * 0.56);
            }
            .more-link.display-flex-700 {
                margin-top: 0;
                margin-right: 0;
            }
            .swiper-container-multirow-column > .swiper-wrapper {
                max-height: 620px;
            }
            .video-no-margin {
                margin: 0;
            }
            .top-page-banner__text_left {
                left: 16px;
            }
            .outerlink i {
                margin: 0px 0 -3px 0px;
                width: 16px;
                height: 16px;
            }
            .diagramm .diagramm__image {
                width: 150px;
                height: 150px;
            }
            .diagramm .diagramm__value:nth-child(2) {
                left: -53%;
            }
            .diagramm .diagramm__value:nth-child(2)::after {
                width: 30px;
            }
            .diagramm .diagramm__value:nth-child(3) {
                left: -26%;
            }
            .diagramm .diagramm__value:nth-child(3)::after {
                width: 40px;
            }
            .file-in-text::before {
                width: 16px;
                height: 16px;
                background-size: 8px;
                top: 3px;
                margin-left: 0px;
            }
            .strategy__info {
                padding-left: 40px;
            }
            .strategy__ico {
                width: 24px;
            }
            .row-icons {
                width: 100%;
                margin-bottom: -20px;
            }
            .row-icons__item {
                width: 100%;
                margin-right: 0;
                margin-bottom: 30px;
            }
            .row-icons-4-items .row-icons__item {
                width: 100%;
            }
            .row-icons__image {
                margin-bottom: 8px;
                width: 32px;
                height: 32px;
            }
            .row-icons__title {
                font-size: 16px;
            }
            .button_mb {
                margin-bottom: 16px;
            }
            .diagramm-aukcioner .diagramm__value:nth-child(1)::after {
                width: 20px;
            }
            .diagramm .diagramm__value:nth-child(3) {
                left: 12%;
                top: -20%;
            }
            .vacancy h5 {
                margin: 12px 0 8px;
            }
            .row-icons-4-items .elements-icons__item {
                width: 100%;
            }

            /* ==== */
            .mobile-menu__back {
                width: 64px;
            }
            .mobile-menu__level {
                width: calc(100% - 64px);
            }

            .p3 {
                font-size: 20px;
            }
            .element-row__fullscreen-1280 .elements-row__one-third {
                margin-right: 0;
            }
            .element-row__fullscreen-1280 .elements-row__two-thirds--ml {
                margin: 0;
            }
            .elements-row__half {
                width: 100%;
                margin-right: 0;
            }
            .element-row__fullscreen-1024 .elements-row__half {
                margin: 0 0 24px 0;
            }
            .element-row__fullscreen-1280 .elements-row--trans-top-256 {
                transform: translateY(-106px);
                margin-bottom: -74px;
            }
            .element-row__fullscreen-1280 .content-block_before {
                padding: 48px 24px 24px;
            }
            .element-row__fullscreen-1280 .content-block_before::before {
                top: 24px;
                left: 24px;
            }
            .big-number__content {
                margin-right: 0 !important;
                font-size: 64px;
                line-height: 72px;
            }
            .big-number__content + .big-number__descript {
                margin-top: 16px;
            }
            .elements-row__big-numbers .big-number__percent {
                margin: 28px 0 0 8px;
                font-size: 20px;
                line-height: 28px;
            }
            .elements-row__big-numbers .big-number__content .big-number__percent {
                margin-bottom: 0;
            }
            .element-row__fullscreen-1280 .content-block + .big-number {
                margin-top: 56px;
            }
            .elements-row__numbers {
                margin-bottom: -24px;
            }
            /* .elements-row__numbers .middle-number {
        margin-bottom: 24px;
    } */
            .elements-row__numbers .elements-row__half {
                margin-bottom: 24px;
            }
            .middle-number__content {
                font-size: 48px;
                line-height: 56px;
            }
            .middle-number__sub {
                left: calc(100% + 8px);
                font-size: 18px;
                /* line-height: 56px; */
            }
            .video {
                margin: 32px 0;
            }
            .video__button {
                width: 64px;
                height: 64px;
            }
            .geography-map {
                /* margin-bottom: -56px; */
            }
            .button {
                padding: 16px 24px;
                font-size: 16px;
            }
            .button_mt {
                margin-top: 32px;
            }
            .button_arrow {
                margin-left: 12px;
            }
            .main-events-year__select .select-with-name__select {
                width: 100%;
            }
            .element-row__fullscreen-1280 .elements-icons__item {
                width: 100%;
                margin-top: 24px;
            }
            .block_margin-remove {
                margin: -56px 0;
            }
            .block-top {
                padding: 0 0 56px;
            }

            .geography-table__type-spoiler {
                min-height: 36px;
            }
            .geography-table__type-spoiler::after {
                right: 6px;
                border-width: 2px;
                width: 8px;
                height: 8px;
            }
            .geography-table__type-color {
                width: 28px;
            }
            .geography-table__type-color::before {
                width: 12px;
                height: 12px;
            }
            .geography-table__type-name {
                width: calc(100% - 168px);
                font-size: 14px;
            }
            .geography-table__type-power,
            .geography-table__type-date {
                width: 70px;
                padding: 0 4px;
            }
            .geography-table__type-date {
                width: 70px;
            }
            .geography-table__type-spoiler--active .geography-table__type-power,
            .geography-table__type-spoiler--active .geography-table__type-date {
                font-size: 13px;
            }
            .geography-table__item {
                min-height: 36px;
            }
            .geography-table__item-number {
                width: 28px;
                font-size: 14px;
            }
            .geography-table__item-name {
                width: calc(100% - 168px);
                font-size: 14px;
            }
            .geography-table__item-power,
            .geography-table__item-date {
                width: 70px;
                font-size: 14px;
            }
            .geography-table__item-date {
                width: 70px;
            }

            .header-menu__list {
                margin-top: 10px;
            }
            .mobile-menu__inner {
                height: calc(100% - 89px);
            }
            .mobile-menu__inner .header-link {
                padding: 16px 0;
                font-size: 14px;
            }
            .mobile-menu__inner .header-link.have-sub:after {
                right: 8px;
                width: 9px;
                height: 9px;
            }
            .mobile-menu__sub {
                top: 65px;
                height: calc(100% - 65px);
            }
            .mobile-menu__back-button {
                margin-top: 32px;
            }
            .mobile-menu__level {
                padding: 16px;
                padding-top: 26px;
                padding-bottom: 38px;
            }
            .mobile-menu__sub .header-menu__sub-link {
                padding: 12px 0;
            }
            .mobile-menu__sub .header-menu__sub-link.have-sub {
                padding-right: 28px;
            }
            .mobile-menu__sub .header-menu__sub-link.have-sub::after {
                right: 8px;
                width: 9px;
                height: 9px;
            }
            .mobile-menu__sub .header-menu__sub-item span {
                padding: 12px 0;
                font-size: 14px;
            }
            .mobile-menu__links {
                margin-bottom: 32px;
            }
            .mobile-menu__links-item {
                padding-right: 32px;
            }
            .mobile-menu__links-item::before {
                right: 16px;
                height: 30px;
            }

            .bloks-with-img__big .bloks-with-img__img {
                height: 345px;
            }
            .bloks-with-img__small {
                width: 100%;
                margin-right: 0;
            }
            .bloks-with-img__small + .bloks-with-img__small {
                margin-top: 32px;
            }

            .auction-list__item {
                flex-wrap: wrap;
                padding: 16px 0;
            }
            .auction-list__item-date {
                margin-right: 0;
                margin-bottom: 16px;
            }
            .auction-list__item-info {
                width: 100%;
            }

            .price-audit__list .elements-row {
                padding: 16px 0;
            }

            .two-blockLinks__item:first-child {
                margin-bottom: 32px;
                padding-bottom: 0;
            }
            .two-blockLinks__item:first-child::before {
                display: none;
            }
            .two-blockLinks__img {
                height: 180px;
                margin-bottom: 16px;
            }

            .block-whith-image--inner {
                min-height: 589px;
                padding: 55px 0;
            }


            .sorevnovaniya-banner {
                padding: 40px 0;
            }
            .sorevnovaniya-banner__decore {
                top: -155px;
                right: -270px;
            }
            .sorevnovaniya-banner__logo {
                width: 110px;
            }

            .tiles__item {
                height: 230px;
            }
            .tiles__item-vertical {
                width: 100%;
                height: calc((100vw - 60px)  / 0.64933);
                margin-left: 0 !important;
            }

            .block-top-line {
                padding-top: 32px;
            }
            .block-top-line::before {
                width: calc(100% - 32px);
            }

            .top-page-bigImg {
                height: 496px;
            }
            .top-page-bigImg__text {
                top: 80px;
                max-width: 390px
            }

            .sorev-konkurs__item {
                height: 180px;
                padding: 16px;
            }
            .sorev-konkurs__item-inner {
                flex-direction: column;
                justify-content: space-between;

            }
            .sorev-konkurs__item-ico {
                width: 32px;
                height: 32px;
                margin-left: auto;
            }

            .subscription-mt52 {
                margin-top: 24px;
            }
            .subscription .button {
                width: 100%;
            }

            .celeveoe-item--borders {
                margin-bottom: 16px;
            }
            .water_ch::before {
                width: 12px;
                height: 12px;
                top: 5px;
                left: 8px;
            }
            .shema__line--1 {
                height: 350px;
                top: 50px;
                left: -8px;
            }
            .shema__block::before, .shema__block::after {
                width: 8px;
                left: -8px;
            }
            .shema__line--1 {
                height: 302px;
                top: 42px;
                left: -8px;
            }
            .shema__line--1::before {
                top: 48px;
            }
            .shema__line--2 {
                height: 129px;
                top: 129px;
                left: 24px;
            }
            .shema__line--2::before {
                top: 50px;
            }

            .cookie-files-banner {
                font-size: 12px;
            }

            a[href*="tel"]:not([class]) {
                text-decoration: underline;
            }
        }
        /* End */


        /* Start:/local/templates/main/css/new.css?17020185809101*/
        .page-types { display: flex; justify-content: space-between; }
        .page-types-item { width: 33.33%; position: relative; padding: 0 28px; font-size: 24px; line-height: 1.4em; display: flex; flex-direction: column; justify-content: space-between; }
        .page-types-item:after { content: ''; height: 100%; width: 3px; background: #D5E2F7; position: absolute; top: 0; right: 0; }
        .page-types-item:last-child:after { display: none }
        .page-types-item a { display: block; margin-bottom: 24px; color: #111; font-weight: 700; text-transform: uppercase; position: relative; z-index: 1; transition: all .3s ease 0s; }
        .page-types-item a:before { display: none }
        .page-types-item:hover a { color: #15468A }
        .page-types-item_image div { height: 142px; background: #15468A; display: flex; align-items: center; justify-content: center }

        /* Ð‘Ð°Ð½Ð½ÐµÑ€ ÑÐ²ÐµÑ€Ñ…Ñƒ ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ñ‹ */
        .top-page-img {
            position: relative;
            width: 100%;
            height: 540px;
            padding: 32px;
        }
        .top-page-img .content-block {
            position: absolute;
            top: 100%;
            left: 0;
            transform: translateY(-136px);
            width: calc(33.33333% - 60px);
        }

        /* Ð‘Ð»Ð¾Ðº Ð´Ð»Ñ Ñ€Ð°Ð·Ð½Ð¾Ð³Ð¾ ÐºÐ¾Ð½Ñ‚ÐµÐ½Ñ‚Ð° */
        .content-block {
            position: relative;
            width: 100%;
            padding: 68px 40px 40px;
            background: #fff;
        }
        .content-block__blue,
        .content-block_blue {
            background: #EBF3FF;
        }
        .content-block::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 40px;
            width: 55px;
            height: 4px;
            background: #E26110;
        }
        .content-block_big {
            width: 472px;
        }

        @media (max-width: 1400px){
            .page-types-item { font-size: 21px }
        }

        @media (max-width: 1280px){
            .page-types-item { font-size: 17px; height: 220px }
            .page-types-item_image div { margin: 0 22px; height: 120px; }

        }

        @media (max-width: 1080px){
            .page-types { display: block; margin: 0 }
            .page-types-item { width: 100%; margin-bottom: 25px; padding: 0 0 25px 0; height: auto }
            .page-types-item:after { height: 3px; width: 100%; top: 100%; right: 0; }
            .page-types-item_image { position: relative; margin-top: 25px }
            .page-types-item_image div { margin: 0 }
        }



        @media (max-width: 1400px){
            .elements-row-links { display: block; width: auto }
            .elements-row-links .elements-row__two-thirds--ml { width: auto; margin: 0 }
            .elements-row-links .elements-row__one-third { width: auto; margin: 0 0 40px 0 }
            .h2 { font-size: 24px; line-height: normal }
            .link-with-lines { font-size: 18px; line-height: 1.3em }
            .button { font-size: 18px; padding: 20px }
        }

        @media (max-width: 600px){
            .link-with-lines_arrow { background: none }
        }

        .logo  {
            margin-right: 24px;
        }
        .logo_in-footer { width: auto; flex: none }
        .logo_in-footer img { width: auto }
        .elements-row__footer-menu { width: 100%; }

        .footer__row_first { align-items: center; }
        .footer-menu-wrapper { display: flex; flex-wrap: wrap; }
        .footer-menu-wrapper-1 .footer-menu-column { width: calc(100% - 4%); }
        .footer-menu-wrapper-2 .footer-menu-column { width: calc(100% / 2 - 4%); }
        .footer-menu-wrapper-3 .footer-menu-column { width: calc(100% / 3 - 4%); }
        .footer-menu-wrapper-4 .footer-menu-column { width: calc(100% / 4 - 4%); }
        .footer-menu-wrapper-5 .footer-menu-column { width: calc(100% / 5 - 4%); }
        .footer-menu-wrapper-6 .footer-menu-column { width: calc(100% / 6 - 4%); }
        .footer-menu-column { margin-right: 4%; width: calc(100% / 6 - 4%); }
        .footer-menu-column:last-child { margin-right: 0 }
        .footer-menu-column a { transition: all .3s ease 0s }
        .footer-menu-title { font-size: 24px; font-weight: bold; line-height: 1.3em; padding-bottom: 30px; height: 4em; padding-bottom: 10px }
        .footer-menu-item { text-transform: uppercase; font-size: 14px; padding-bottom: 15px; line-height: 1.3em }
        .footer .footer-menu-title a { color: #000 !important; text-decoration: none !important; word-break: break-word; }
        .footer .footer-menu-title a::before { display:none; }
        .footer .footer-menu-title a:hover { color: #15468A !important; }
        .footer .footer-menu-item a { color: #000 !important; text-decoration: none !important;}
        .footer .footer-menu-item a::before { display:none; }
        .footer .footer-menu-item a:hover { color: #15468A !important;}

        .footer .phone-block__link { color: #000; text-decoration: none }
        .footer .phone-block__link:hover { color: #15468A }

        table.odd { border-collapse: collapse; }
        table.odd th { padding: 16px; font-size: 16px; color: #787F91; }
        table.odd td { padding: 32px 16px; font-size: 20px; }
        table.odd td:first-child { color: #005D9F; }
        table.odd td:first-child, table.odd tr:last-child td { font-weight: 700; }
        table.odd th, table.odd td { background: #FFFFFF; line-height: 32px; border: 1px solid #D5E2F7; }
        table.odd tr:nth-child(odd) td { background: #EBF3FF; }

        @media (max-width: 1400px) {
            .elements-row__footer-menu { width: 100%; padding-top: 40px }
        }

        @media (max-width: 1300px) {
            /* .footer-menu-wrapper { display: block } */
            /* .footer-menu-column { width: auto; padding-bottom: 20px; max-width: 100%; margin-right: 0 } */
            .footer-menu-column { width: calc(100% / 3 - 4%) !important; padding-bottom: 20px; }
            .footer-menu-title { height: auto; padding-bottom: 20px }
            .elements-row__footer-menu { padding-top: 0 }
            .footer-menu-title { font-size: 18px }
        }

        @media (max-width: 768px) {
            .footer-menu-column { width: 100% !important; }
        }


        .header__top {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            background: #EBF3FF;
            padding: 24px 28px;
        }
        .impaired {
            cursor: pointer;
        }
        .header-link svg {
            margin-right: 5px;
        }
        .header-link path {
            transition: 0.2s;
        }
        .header-link:hover path {
            fill: #F08400;
        }
        .header__link-list {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }
        .header__link-list a {
            font-size: 14px;
            line-height: 120%;
            text-decoration: none;
            color: #005D9F;
            transition: color 0.2s;
            margin-left: 20px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .header__link-list a:hover {
            color: #F08400;
        }
        .header__link-list a:first-child {
            margin-left: 0;
        }
        a.lk-link {
            color: #F08400;
        }
        a.lk-link:hover {
            color: #2C3148;
        }

        @media (max-width: 1060px) {
            .no_pda-1060 {
                display: none;
            }
            .header-item_left-0-1060 {
                margin-left: 0;
            }
        }
        @media (max-width: 1024px) {
            .header__top {
                padding: 18px 16px;
            }
            .header__link-list a {
                font-size: 13px;
            }
        }
        @media (max-width: 850px) {
            .header__link-list {
                display: none;
            }
            .header-item--burger {
                margin-left: auto;
            }
            .mop {
                margin: 0;
            }
        }
        @media (max-width: 600px) {
            .impaired span {
                font-size: 0;
            }
            .header-item_border-left {
                padding-left: 16px;
            }
            .header-item_border-left::before {
                width: 1px;
                height: 19px;
                left: 8px;
            }
            .impaired svg {
                margin-right: 0;
            }
        }
        @media (max-width: 350px) {
            .header-geo-link {
                display: none;
            }
        }

        .three-banner-slider {
            margin: 40px 0;
        }
        .three-banner-slider .swiper-wrapper {
            align-items: unset;
        }
        .three-banner-slider .swiper-slide {
            height: auto;
        }
        .three-banner-slider .banners-block__item {
            position: relative;
            width: 100%;
            padding-bottom: 0;
            height: unset;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
            flex-direction: column;
            height: 100%;
        }
        .three-banner-slider__item {
            position: relative;
            width: 100%;
            padding-bottom: 0;
            height: 198px;
            background: #15468A;
            margin-top: 24px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }
        @media (max-width: 1279px) {
            .banners-block__item::before {
                right: -18px;
            }
        }
        @media (max-width: 1024px) {
            .banners-block__item::before {
                right: -14px;
            }
        }

        .two-different-banners {
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }
        .two-different-banners__item {
            display: block;
        }
        @media (max-width: 1630px) {
            .two-different-banners__item img {
                height: calc((100vw - 252px) * 0.135);
            }
        }
        @media (max-width: 1560px) {
            .two-different-banners__item img {
                height: calc((100vw - 160px) * 0.135);
            }
        }
        @media (max-width: 1024px) {
            .two-different-banners__item img {
                height: auto;
            }
            .two-different-banners__item {
                width: 100%;
            }
            .two-different-banners__item + .two-different-banners__item {
                margin-top: 16px;
            }
        }
        .header-link {
            cursor: pointer;
        }
        .header-calendar-link .header-link svg {
            margin-right: 0;
        }
        .show-hover-block:hover {
            color: inherit;
        }
        .show-hover-block:hover .hover-block {
            opacity: 1;
            pointer-events: all;
            transform: translate(0,0px);
        }
        .js-popup-show .hover-block {
            display: none;
        }
        .hover-block {
            position: absolute;
            top: 100%;
            left: -32px;
            z-index: 1;
            transition: .2s;
            opacity: 0;
            pointer-events: none;
            transform: translate(0,36px);
            padding-top: 26px;
        }
        .hover-block-inner {
            padding: 32px;
            background: #fff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            width: 360px;
            list-style: none;
            text-transform: none;
            font-weight: 400;
        }
        .header__top {
            z-index: 101;
        }
        /*.header-calendar-link .header-link:hover path {
	fill: transparent;
	stroke: #F08400;
}*/
        /* End */


        /* Start:/local/templates/main/components/bitrix/news.list/main_slider_rushydro/style.css?16959771871985*/
        .top-page-slider {
            height: calc(100vw / 3.0476);
            transition: height 0.3s ease 0s;
        }
        @media (max-width: 480px) {
            .top-page-slider {
                height: calc(100vw / 1.33333);
            }
        }
        .top-page-banner__text {
            position: absolute !important;
            top: 0 !important;
            right: auto !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
        }
        .top-page-banner__heading {
            position: absolute;
            top: 80px;
            right: 20%;
            margin-bottom: 0;
            font-size: 7.5vw;
            line-height: 140% !important;
        }
        .top-page-banner__description {
            position: absolute;
            top: 290px;
            right: 10%;
            width: 100%;
            max-width: 30%;
            margin-left: 0;
            font-size: 2.5vw;
            line-height: 133%;
        }
        /* @media (min-width: 1921px) {
    .top-page-banner__heading {
        font-size: 144px;
    }
    .top-page-banner__description {
        font-size: 48px;
    }
} */
        .top-page-banner-next, .top-page-banner-prev {
            position: absolute;
            right: 40px;
            bottom: 40px;
            z-index: 1;
            width: 40px;
            height: 40px;
            cursor: pointer;
        }
        @media (max-width: 1280px) {
            .top-page-banner-next, .top-page-banner-prev {
                right: 20px;
                bottom: 20px;
            }
        }
        @media (max-width: 1024px) {
            .top-page-banner-next, .top-page-banner-prev {
                right: 10px;
                bottom: 10px;
                width: 24px;
                height: 24px;
            }
        }
        .top-page-banner-next svg, .top-page-banner-prev svg {
            width: 100%;
            height: 100%;
        }
        .top-page-banner-next path, .top-page-banner-prev path {
            transition: fill 0.3s ease 0s;
        }
        .top-page-banner-next:hover path, .top-page-banner-prev:hover path {
            fill: #F08400;
        }
        .top-page-banner-prev {
            right: auto;
            left: 40px;
        }
        @media (max-width: 1280px) {
            .top-page-banner-prev {
                left: 20px;
            }
        }
        @media (max-width: 1024px) {
            .top-page-banner-prev {
                left: 10px;
            }
        }

    </style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>