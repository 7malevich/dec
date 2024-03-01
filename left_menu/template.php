<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<aside id="sidebar" class="col-lg-3">
	<div class="nav-container">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<a class="aside-nav-first" data-toggle="collapse" data-parent="#sidebar" href="#<?=$arItem['PARAMS']['ID']?>" aria-expanded="<?if ($arItem["SELECTED"]):?>true<?else:?>false<?endif?>" aria-controls="<?=$arItem['PARAMS']['ID']?>"><img src="<?=$arItem['PARAMS']['IMG']?>"><?=$arItem["TEXT"]?></a>
				<div class="collapse<?if ($arItem["SELECTED"]):?> show<?endif?>" id="<?=$arItem['PARAMS']['ID']?>">
		<?else:?>
				<a class="aside-nav-second" data-toggle="collapse" href="#<?=$arItem['PARAMS']['ID']?>" aria-expanded="<?if ($arItem["SELECTED"]):?>true<?else:?>false<?endif?>" aria-controls="<?=$arItem['PARAMS']['ID']?>"><?=$arItem["TEXT"]?></a>
  					<div id="<?=$arItem["PARAMS"]["ID"]?>" class="collapse<?if ($arItem["SELECTED"]):?> show<?endif?>">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 2):?>
				<a href="<?=$arItem["LINK"]?>" class="aside-nav-second <?if ($arItem["SELECTED"]):?>active<?endif;?>"><?=$arItem["TEXT"]?></a>
			<?else:?>
				<a href="<?=$arItem["LINK"]?>" class="aside-nav-third <?if ($arItem["SELECTED"]):?>active<?endif?>"><?=$arItem["TEXT"]?></a>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</div>", ($previousLevel-1) );?>
<?endif?>
	</div>
</aside>
<?endif?>