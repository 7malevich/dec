<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?foreach($arResult['ITEMS'] as $n=>$item){?>
	<div class="card-news__item">
		<?
		if($item['DISPLAY_ACTIVE_FROM']){?>
		<span class="card-news__date"><?=$item['DISPLAY_ACTIVE_FROM']?></span>
		<?}?>
		<span class="card-news__text"><?=$item['NAME']?></span>
		<a href="<?=$item['DETAIL_PAGE_URL']?>" class="card-news__link">Подробнее</a>
	</div>
<?}?>