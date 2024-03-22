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
<div id="bx_1949384460_991">
    <section class="block section-pt0">
        <div class="container">

            <!--<a class="link-with-lines border-top-bottom" href="sbyt-elektricheskoy-energii-moshchnosti/">
                Сбыт электрической энергии (мощности)
                <div class="link-with-lines_arrow "></div>
            </a>
-->





<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <a class="link-with-lines border-top-bottom" href="<?=$arItem['DETAIL_PAGE_URL']?>">
        <?=$arItem['NAME']?>
        <div class="link-with-lines_arrow "></div>
    </a>

<?endforeach;?>
        </div>
    </section>
</div>