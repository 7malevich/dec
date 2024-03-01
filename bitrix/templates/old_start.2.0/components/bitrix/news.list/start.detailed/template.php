<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="list">
	<?foreach($arResult['ITEMS'] as $n=>$item){?>
		<div class="item <?=$addClass?>">
			<div class="thumb">
				<?
				if($item['DATE_ACTIVE_FROM']){?>
				<span class="date"><?=$item['DATE_ACTIVE_FROM']?></span>
				<?}?>
				<?if(is_array($item['PREVIEW_PICTURE'])){?>
					<a href="<?=$item['DETAIL_PAGE_URL']?>">
						<img border="0" src="<?=$item['PREVIEW_PICTURE']['SRC']?>"
							 width="64" title="<?=$item['~NAME']?>"
							 alt="<?=$item['NAME']?>" >
					</a>
				<?}else{?>
<!--					Удалить после развертывания эту заглушку-->
					<a href="/"><img border="0" src="/images/newdesign/news_fish_tb.png" width="64" height="64"></a>
				<?}?>
			</div>
			<div class="text">
				<h3><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a></h3>
				<?$pretext = $item['PREVIEW_TEXT'] ? $item['PREVIEW_TEXT'] : '';?>
				<p><?=$pretext?></p>
			</div>
			<div class="clear"></div>
		</div>
	<?}?>
</div>