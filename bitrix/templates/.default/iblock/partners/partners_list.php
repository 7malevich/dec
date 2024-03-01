<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
// показ списока партнеров
IncludeTemplateLangFile(__FILE__); //	подключаем языковой файл
if (CModule::IncludeModule("iblock")):

	$CACHE_ID = __FILE__.md5($ID.$IBLOCK_TYPE);
	$obCache = new CPageCache;

	if($obCache->StartDataCache($CACHE_TIME, $CACHE_ID, "/")):
		$IBLOCK = (isset($IBLOCK) ? $IBLOCK : "partners");
		$IBLOCK_TYPE = (isset($IBLOCK_TYPE) ? $IBLOCK_TYPE : "partners");
	
		$iblock =  GetIBlockElementListEx($IBLOCK_TYPE, $IBLOCK, Array(), Array("SORT"=>"DESC", "ID"=>"DESC"), 20);	//выбираем 20 элементов
		if($iblock->SelectedRowsCount()>0) // если есть элементы
		{
			while ($ariblock = $iblock -> GetNext()):
				$arIBlockElement = GetIBlockElement($ariblock["ID"]);
				?>
				<font class="text"><a href="<? echo $arIBlockElement["DETAIL_PAGE_URL"]; ?>"><b><? echo $arIBlockElement["NAME"];?></b></a>
				<?if ($arIBlockElement["PROPERTIES"]["country"]["VALUE"]):?>
					&nbsp;(<?echo $arIBlockElement["PROPERTIES"]["country"]["VALUE"]?>)
				<?endif;?></font>
				<br clear="all"><br>
				<? if ($arIBlockElement["PREVIEW_PICTURE"]):?>
					<a href="<? echo $arIBlockElement["DETAIL_PAGE_URL"]; ?>"><? echo ShowImage($arIBlockElement["PREVIEW_PICTURE"], 80, 10000, "hspace='5' vspace='5' align='left' border='0' title=".$arIBlockElement["NAME"]."", "");?></a>
				<? endif;?>
				<font class="text">
				<? if($arIBlockElement["PREVIEW_TEXT"])
					echo $arIBlockElement["PREVIEW_TEXT"];?>
				</font>
				<br clear="all">
				<table width="100%" cellspacing="0" cellpadding="2" border="0">
				<? if ($arIBlockElement["PROPERTIES"]["phone"]["VALUE"]):?>
					<tr class="text">
						<td width="0%" nowrap><b><? echo $arIBlockElement["PROPERTIES"]["phone"]["NAME"].":";?></b></td>
						<td width="100%"><? echo $arIBlockElement["PROPERTIES"]["phone"]["VALUE"];?></td>
					</tr>
				<? endif;?>
				<? if ($arIBlockElement["PROPERTIES"]["url"]["VALUE"])://обрабатываем адрес веб-сайта?>
					<tr class="text">
						<td nowrap width="0%"><b><? echo $arIBlockElement["PROPERTIES"]["url"]["NAME"].":";?></b></td>
						<td width="100%"><?if(strpos($arIBlockElement["PROPERTIES"]["url"]["VALUE"], "http") === false):
							$site = "http://".$arIBlockElement["PROPERTIES"]["url"]["VALUE"]; 
						else:
							$site = $arIBlockElement["PROPERTIES"]["url"]["VALUE"]; endif;?><a href="/bitrix/redirect.php?event1=partners_out&event2=<? echo $site;?>&event3=&goto=<? echo $site;?>"><? echo $site;?></a>
						</td>
					</tr>
				<? endif;?>
				<tr valign="bottom"><td colspan="2" valign="bottom"><hr size="1" color="#C7DAE4"></td></tr></table>
			<?	endwhile;

			CIBlock::ShowPanel($arIBlockElement["IBLOCK_ID"], 0, 0, $IBLOCK_TYPE); // выводим панель редактирования информационного блока

			if($iblock->IsNavPrint()) echo $iblock->NavPrint(GetMessage("NEWS_TITLE"), false, "", $_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/nav_print.php"); //постраничный показ?>
			<?
		
		}
		else
		{
			echo ShowError(GetMessage("NO_PARTNERS"));
		}

		$obCache->EndDataCache();

	endif; // if($obCache->StartDataCache($CACHE_TIME, $CACHE_ID, "/")):

else:
	echo GetMessage("IB_NOT_INSTALL");
endif;
?>