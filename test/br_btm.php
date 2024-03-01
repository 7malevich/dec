<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Привет");
?><div class="card-slider-big swiper-container js-card-slider-big">
	<div class="swiper-wrapper">

		<div class="swiper-slide">
			<a href="/amursbyt/private_clients/cabinet/" 
			class="card-slider-big__slide" style="background-image: url('/design2019/img/upload/br_btm_mir.jpg'); background-color: #F4F4F4; background-position:center top; background-size:contain">
				<span class="card-slide-big__img-wrap">
				</span>
			</a>
		</div>
		<div class="swiper-slide">
			<a href="/amursbyt/private_clients/cabinet/" 
			class="card-slider-big__slide" style="background-image: url('/design2019/img/upload/br_btm_giszhkh.png'); background-color: #F4F4F4; background-position:center top">
				<span class="card-slide-big__img-wrap">
				</span>
			</a>
		</div>

    </div>
    <div class="card-slider-big__controls">
        <div class="card-slider-big__nav">
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
    <div class="swiper-pagination card-slider-big__pagination"></div>
    </div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>