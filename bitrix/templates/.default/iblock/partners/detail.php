<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
// детальный показ информации о партнере
IncludeTemplateLangFile(__FILE__);			//подключаем языковой файл

if (CModule::IncludeModule("iblock")):

	$ID = IntVal($ID);													// ID партнера

	$CACHE_ID = __FILE__.md5($ID);
	$obCache = new CPHPCache;

	if($obCache->InitCache($CACHE_TIME, $CACHE_ID, "/"))
	{
		$arVars = $obCache->GetVars();
		$IBLOCK_ID		= $arVars["IBLOCK_ID"];
		$IBLOCK_TYPE	= $arVars["IBLOCK_TYPE"];
		$ELEMENT_NAME	= $arVars["ELEMENT_NAME"];
		$KEYWORDS		= $arVars["KEYWORDS"];
		$DESCRIPTION	= $arVars["DESCRIPTION"];
		$found = "Y";
	}
	else
	{
		if ($arIBlockElement = GetIBlockElement($ID)):
			$found = "Y";
			$IBLOCK_ID		= $arIBlockElement["IBLOCK_ID"];
			$IBLOCK_TYPE	= $arIBlockElement["IBLOCK_TYPE_ID"];
			$ELEMENT_NAME	= $arIBlockElement["NAME"];
			$KEYWORDS		= $arIBlockElement["PROPERTIES"]["KEYWORDS"]["VALUE"];
			$DESCRIPTION	= $arIBlockElement["PROPERTIES"]["DESCRIPTION"]["VALUE"];
		endif;
	}


	if ($found=="Y"):
		CIBlock::ShowPanel($IBLOCK_ID, $ID, 0, $IBLOCK_TYPE);
		$APPLICATION->SetTitle($ELEMENT_NAME);
		$APPLICATION->SetPageProperty("keywords", $KEYWORDS);
		$APPLICATION->SetPageProperty("description", $DESCRIPTION);


		if($obCache->StartDataCache()):

			if($arIBlockElement = GetIBlockElement($ID))
			{

				?><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td class="text">
						<? if ($arIBlockElement["PREVIEW_PICTURE"]):
							echo ShowImage($arIBlockElement["PREVIEW_PICTURE"], 150, 10000, "hspace='5' vspace='5' align='left' border='0'", "", true, "Enlarge");
						endif;?>
						<? echo $arIBlockElement["DETAIL_TEXT"]."<br><br clear='all'>";?>
						<table width="0%" cellspacing="5" cellpadding="0" border="0">
						<?if ($arIBlockElement["PROPERTIES"]["country"]["VALUE"]):?>
							<tr>
								<td valign="top" class="text"><b><? echo $arIBlockElement["PROPERTIES"]["country"]["NAME"].":";?></b></td><td width=20 class=text>&nbsp;</td><td valign="top" class="text"><? echo $arIBlockElement["PROPERTIES"]["country"]["VALUE"];?></td>
							</tr>
						<?endif;
						$i = 0;
						if ($arIBlockElement["PROPERTIES"]["activity"]["VALUE"]!=""):?>
							<tr>
								<td valign="top" class="text" nowrap><b><? echo $arIBlockElement["PROPERTIES"]["activity"]["NAME"].":";?></b></td><td width=20 class=text>&nbsp;</td>
								<td valign=top class=text>
								<?$enum_conf1 = CIBlockPropertyEnum::GetList(Array("NAME"=>"ASC"), Array("CODE"=>"activity", "IBLOCK_ID" => $arIBlockElement["IBLOCK_ID"]));
								while($arEnumConf1 = $enum_conf1->GetNext())
								{
									if (in_array($arEnumConf1["VALUE"], $arIBlockElement["PROPERTIES"]["activity"]["VALUE"])): 
										if ($i++ == 0)
										{
											echo $arEnumConf1["VALUE"];
										}
										else
										{
											echo", ".$arEnumConf1["VALUE"];
										}
									endif;
								}?>
							</td></tr>
						<?endif;?>
						<? if ($arIBlockElement["PROPERTIES"]["url"]["VALUE"]):?>
							<tr>
								<td valign="top" class="text"><b><? echo $arIBlockElement["PROPERTIES"]["url"]["NAME"].":";?></b></td>
								<td width=20 class=text>&nbsp;</td>
								<td valign="top" class="text">
									<?if(strpos($arIBlockElement["PROPERTIES"]["url"]["VALUE"], "http") === false):
										$site = "http://".$arIBlockElement["PROPERTIES"]["url"]["VALUE"]; 
									else: 
										$site = $arIBlockElement["PROPERTIES"]["url"]["VALUE"];
									endif;?>
									<a href="/bitrix/redirect.php?event1=partners_out&event2=<? echo $site;?>&event3=&goto=<? echo $site;?>"><? echo $site;?></a></td>
							</tr>
						<? endif;?>
						<? if ($arIBlockElement["PROPERTIES"]["address"]["VALUE"]):?>
							<tr>
								<td valign="top" class="text"><b><? echo $arIBlockElement["PROPERTIES"]["address"]["NAME"].":";?></b></td>
								<td width=20 class=text>&nbsp;</td>
								<td valign="top" class="text"><? echo $arIBlockElement["PROPERTIES"]["address"]["VALUE"];?></td>
							</tr>
						<? endif;?>
						<? if ($arIBlockElement["PROPERTIES"]["phone"]["VALUE"]):?>
							<tr>
								<td valign="top" class="text"><b><? echo $arIBlockElement["PROPERTIES"]["phone"]["NAME"].":";?></b></td>
								<td width=20 class=text>&nbsp;</td>
								<td valign="top" class="text"><? echo $arIBlockElement["PROPERTIES"]["phone"]["VALUE"];?></td>
							</tr>
						<? endif;?>
						</table>
					</td>
				</tr>
				</table><br>
				<?
				
			}
			else //если нет партнера
			{
				echo ShowError(GetMessage("NO_PARTNERS"));
			}
			?><p class="text"><a href="index.php"><?echo GetMessage("BACK")?></a></p><?
			$obCache->EndDataCache(array(
			"ELEMENT_NAME"	=> $ELEMENT_NAME,
				"IBLOCK_ID"		=> $IBLOCK_ID,
				"IBLOCK_TYPE"	=> $IBLOCK_TYPE,
				"KEYWORDS"		=> $KEYWORDS,
				"DESCRIPTION"	=> $DESCRIPTION
				));
		endif; // if($obCache->StartDataCache()):

	else:
		echo ShowError(GetMessage("NO_PARTNERS"));
		?><p class="text"><a href="index.php"><?echo GetMessage("BACK")?></a></p><?
	endif;

else:
	echo GetMessage("IB_NOT_INSTALL");
endif;
?>