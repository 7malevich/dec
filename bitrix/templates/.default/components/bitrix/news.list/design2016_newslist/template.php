<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<?foreach($arResult['ITEMS'] as $n=>$item){?>
<div style="min-height:105px">
			<div style="float:left;">
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
			<div style="margin-left:89px; padding: 0 0 20px 0">
				<?
				if($item['DISPLAY_ACTIVE_FROM']){?>
				<p style="font: 400 11px/11px Roboto; color:#5f5f5f; margin:0 0 5px 0"><?=$item['DISPLAY_ACTIVE_FROM']?></p>
				<?}?>
				
				<h3 style="margin: 0 0 5px 0; line-height: 17px;"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a></h3>
				<?$pretext = $item['PREVIEW_TEXT'] ? $item['PREVIEW_TEXT'] : '';?>
				<p style="line-height: 16px;"><?=$pretext?></p>
			</div>
			<div class="clear"></div>
		</div>
	<?}?>