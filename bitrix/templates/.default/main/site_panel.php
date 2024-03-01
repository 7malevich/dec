<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><table cellpadding="0" cellspacing="0" border="0" width="0%">
	<tr>	
		<?
		$arSites = $APPLICATION->GetSiteSwitcherArray();
		// Let's show LANGUAGE SWITCH if there are more than one language on the site
		if (count($arSites)>1):
			for($i=0; $i<count($arSites); $i++):
				$arSite = $arSites[$i];
		?>
			<td align="left">
				<? if($arSite["SELECTED"]=="Y"):?>
					<font class="langact"><?echo $arSite["NAME"]?></font>
				<? else:?>
					<a href="<?=$arSite["DIR"]?>" class="lang"><?echo $arSite["NAME"]?></a>
				<? endif;?>
			</td>
			<td align="center" width="0%"><img src="/bitrix/templates/<?echo SITE_TEMPLATE_ID?>/images/lang_arrow.gif" width="10" height="11" hspace="5" alt=""></td>
		<?
			endfor;
		endif;
		?>
			<td align="center" width="0%"><img src="/bitrix/templates/<?echo SITE_TEMPLATE_ID?>/images/1.gif" width="10" height="11" alt=""></td>			
	</tr>
</table>
