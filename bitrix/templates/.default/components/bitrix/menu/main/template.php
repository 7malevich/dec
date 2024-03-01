<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
<ul class="mainMenu">
<?
foreach($arResult as $n => $arItem){
$addClass = strlen($arItem["TEXT"]) <=18 ? 'short' : '';
$addClass = strlen($arItem["TEXT"]) <=11 ? 'shortest' : $addClass;

	?>
	<?if($arItem["SELECTED"]):?>
		<li class="active <?=$addClass?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="<?=$addClass?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	<?if(($n+1)%4 == 0){?>
	<li class="clear"></li>
	<?}?>

<?}?>
</ul>
<?}?>