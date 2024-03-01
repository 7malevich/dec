<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?foreach($arResult['ITEMS'] as $n=>$item){?>
	<a class="card-news__item" href="<?=$item['DETAIL_PAGE_URL']?>">
		<?
		if($item['DISPLAY_ACTIVE_FROM']){?>
		<span class="card-news__date"><?=$item['DISPLAY_ACTIVE_FROM']?></span>
		<?}?>
		<span class="card-news__text"><?=$item['NAME']?></span>
	</a>
<?}?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br><?=$arResult["NAV_STRING"]?>
<?endif;?>