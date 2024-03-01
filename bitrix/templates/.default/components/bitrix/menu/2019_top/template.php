<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<?if($arItem["PARAMS"]["REGIONS"]=="Y"):?>
						<div id="dropdown-city2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="header-nav__item is-active" style="cursor:pointer">Частным клиентам</div>
                        <div class="dropdown-menu" style="margin:0" aria-labelledby="dropdown-city2">
							<a onclick="RegionChange('amursbyt')" href="/amursbyt/" class="dropdown-item">
                                Амурская область
                            </a>
							<a onclick="RegionChange('nerungri')" href="/nerungri/" class="dropdown-item">
                                Нерюнгринский район РС(Я)
                            </a>
							<a onclick="RegionChange('yakutiya')" href="/yakutiya/" class="dropdown-item">
                                Республика Саха (Якутия)
                            </a>
							<a onclick="RegionChange('eaosbyt')" href="/eaosbyt/" class="dropdown-item">
                                Еврейская АО
                            </a>
							<a onclick="RegionChange('khabsbyt')" href="/khabsbyt/" class="dropdown-item">
                                Хабаровский край
                            </a>
							<a onclick="RegionChange('dalsbyt')" href="/dalsbyt/" class="dropdown-item">
                                Приморский край
                            </a>
							<a onclick="RegionChange('sakhalin')" href="/sakhalin/" class="dropdown-item">
                                Сахалинская область
                            </a>
							<a onclick="RegionChange('kamchatka')" href="/kamchatka/" class="dropdown-item">
                                Камчатский край
                            </a>
                        </div>
		<?else:?>
			<div class="header-nav__item is-active"><?=$arItem["TEXT"]?></div>
		<?endif?>
	<?else:?>
		<?if($arItem["PARAMS"]["REGIONS"]=="Y"):?>
						<div id="dropdown-city2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="header-nav__item" style="cursor:pointer">Частным клиентам</div>
                        <div class="dropdown-menu" style="margin:0" aria-labelledby="dropdown-city2">
                            <a onclick="RegionChange('amursbyt')" href="/amursbyt" class="dropdown-item">
                                Амурская область
                            </a>
                            <a onclick="RegionChange('nerungri')" href="/nerungri" class="dropdown-item">
                                Нерюнгринский район РС(Я)
                            </a>
							<a onclick="RegionChange('yakutiya')" href="/yakutiya/" class="dropdown-item">
                                Республика Саха (Якутия)
                            </a>
                            <a onclick="RegionChange('eaosbyt')" href="/eaosbyt" class="dropdown-item">
                                Еврейская АО
                            </a>
                            <a onclick="RegionChange('khabsbyt')" href="/khabsbyt" class="dropdown-item">
                                Хабаровский край
                            </a>
                            <a onclick="RegionChange('dalsbyt')" href="/dalsbyt" class="dropdown-item">
                                Приморский край
                            </a>
                            <a onclick="RegionChange('sakhalin')" href="/sakhalin" class="dropdown-item">
                                Сахалинская область
                            </a>
                            <a onclick="RegionChange('kamchatka')" href="/kamchatka" class="dropdown-item">
                                Камчатский край
                            </a>
                        </div>
		<?else:?>
			<a href="<?=$arItem["LINK"]?>" class="header-nav__item"><?=$arItem["TEXT"]?></a>
		<?endif?>
	<?endif?>
	
<?endforeach?>

<?endif?>