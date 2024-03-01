<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(count($arResult['ITEMS']) > 2)
$newsItems = array_slice($arResult['ITEMS'], 2, 4);
?>
<ul><?foreach($newsItems as $n=>$item){
	if($n > 0){
		$addClass = (($n+1) % 2 == 0) ? 'even' : '';
		$clearTag = (($n+1) % 2 == 0) ? '<li class="clear"></li>' : '';
	}else{
		$addClass = $clearTag = "";
	}
	?>
	<li class="<?=$addClass?> ">
		<a href="<?=$item['DETAIL_PAGE_URL']?>" class="gray"><?=$item['~NAME']?></a>
	</li>
	<?=$clearTag?>
	<?}?>
</ul>