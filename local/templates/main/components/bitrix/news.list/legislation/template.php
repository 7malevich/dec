<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult['ITEMS'] as $n=>$item){ ?>

		<a href="<?= $item["PROPERTIES"]["LINK_SECTION"]["VALUE"] ?>/" class="swiper-slide swiper-slide-active" id="bx_565502798_643" style="width: 240.75px; margin-right: 60px;">
			<div class="banners-block__item elements-row__quarter">
				<div class="h5">
					<?=$item['NAME']?>
				</div>
				<div class="banners-block__ico" style="background-image:url('<?= $item["PREVIEW_PICTURE"]["SRC"] ?>')"></div>
			</div>
		</a>

<?}?>

    




