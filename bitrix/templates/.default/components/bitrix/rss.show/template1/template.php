<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- <h2><?echo $arResult["title"] ?></h2> -->
<div class="row news-list bx-blue">
	<div class="col">
<?
if(is_array($arResult["item"])):
foreach($arResult["item"] as $arItem):?>
		<div class="news-list-item mb-4 w-100">
			<div class="card">
				<div class="d-flex px-3 py-4">
					<span class="text-muted mr-3">
	<?if($arItem["pubDate"] <> ''):?>
		<?=CIBlockRSS::XMLDate2Dec($arItem["pubDate"], FORMAT_DATE)?>
	<?endif;?>
					</span>
					<h4 class="mb-0" style="font-weight:600">
	<?if($arItem["link"] <> ''):?>
		<a style="font-weight:600" href="<?=$arItem["link"]?>"><?=$arItem["title"]?></a>
	<?else:?>
		<?=$arItem["title"]?>
	<?endif;?>
					</h4>
				</div>
			</div>
		</div>
<?endforeach;
endif;?>
	</div>
</div>