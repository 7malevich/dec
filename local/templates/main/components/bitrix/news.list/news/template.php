<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="block branches-news  section-pt0">
    <div class="container">
        <div class="news_top">
            <div class="h1">Новости</div>
        </div>
        <div class="news__list">
<?foreach($arResult['ITEMS'] as $n=>$item){ ?>
    <a href="/press/news/<?=$item['CODE']?>/" class="news__item">
        <div class="news__image news__image_medium" style="background-image:url('<?=$item['PREVIEW_PICTURE']['SRC']?>')"></div>
        <div class="news__info">
            <div class="date">
                <div class="date__day">
                  <?=$item["PROPERTIES"]['NUMBER']['VALUE']?>
                </div>
                <div class="date__month">
                    <?=$item["PROPERTIES"]['MONTH']['VALUE']?>
                </div>
            </div>
            <div class="h4 news__title news__title_medium">
                <?=$item['NAME']?>
            </div>
        </div>
    </a>
<?}?>
<div class="more-row more-row_mt-52">
                <a href="/press/news/" class="more-link more-link_inter more-link_right more-link_arrow-right">
                    Все новости						</a>
            </div>
        </div>
    </div>
</section>

