<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$count = 0;?>
<section class="top-page-slider swiper-container-initialized swiper-container-horizontal">
    <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-2606px, 0px, 0px);">
<?foreach($arResult['ITEMS'] as $n=>$item){
    $count++;?>
    <div class="swiper-slide swiper-slide-prev" id="<?=$item['ID']?>" data-swiper-slide-index="<?=$count?>" style="width: 1303px;">
        <div class="top-page-banner" style="background-image:url('<?=$item['PREVIEW_PICTURE']['SRC']?>')" id="top-page-banner-<?=$count?>">
            <div class="top-page-banner__text">
                <p class="top-page-banner__heading">
                    <?if(!empty($item['PROPERTIES']['OPICANIE']['VALUE'])){
                      echo  $item['PROPERTIES']['OPICANIE']['VALUE'];
                    }?>
                </p>
                <p class="top-page-banner__description h2">
                  <?=$item['PREVIEW_TEXT']?>
                </p>
            </div>
            <?=htmlspecialchars_decode($item['PROPERTIES']['STYLE_CODE']['VALUE']['TEXT']);?>
            <div class="top-page-banner__signature top-page-banner__signature_left">

            </div>
        </div>
    </div>
<?}?>
    </div>
    <div class="swiper-pagination swiper-pagination_in-slider swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet_before" tabindex="0" role="button" aria-label="Go to slide 1"></span></div>
    <div class="top-page-banner-next" tabindex="0" role="button" aria-label="Next slide">
        <svg width="40" height="35" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M34.7826 17.3913L36.6129 19.2503L38.5009 17.3913L36.6129 15.5324L34.7826 17.3913ZM0 20H34.7826V14.7826H4.56118e-07L0 20ZM36.6129 15.5324L22.4824 1.61938L18.8219 5.33712L32.9523 19.2503L36.6129 15.5324ZM32.9523 15.5324L18.8219 29.4454L22.4824 33.1631L36.6129 19.2503L32.9523 15.5324Z" fill="white"></path>
        </svg>
    </div>
    <div class="top-page-banner-prev" tabindex="0" role="button" aria-label="Previous slide">
        <svg width="40" height="35" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.21739 17.3914L3.38713 15.5325L1.49913 17.3914L3.38713 19.2503L5.21739 17.3914ZM40 14.7827L5.21739 14.7827L5.21739 20.0001L40 20.0001L40 14.7827ZM3.38713 19.2503L17.5176 33.1633L21.1781 29.4456L7.04765 15.5325L3.38713 19.2503ZM7.04765 19.2503L21.1781 5.33733L17.5176 1.61959L3.38713 15.5325L7.04765 19.2503Z" fill="white"></path>
        </svg>
    </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</section>

