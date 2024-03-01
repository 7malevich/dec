<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
if (CModule::IncludeModule("search")):

	IncludeTemplateLangFile(__FILE__);

	/*************************************************************************
				Инициализируем начальные параметры компонента
	*************************************************************************/
	/*
	$SEARCH_PAGE			= $arParams["SEARCH_PAGE"];						// путь к странице поиска
	*/

	?>
	<table border="0" cellspacing="0" cellpadding="2"  align="center">
	<form action="<? echo $SEARCH_PAGE; ?>">
		<tr>	
			<td align="center"><input type="text" name="q" value="" size="15" maxlength="50"  class="inputfield"></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td align="center"><input name="s" type="submit" value="<? echo GetMessage("SEARCH_BUTTON"); ?>" width="20" height="20" class="inputbuttonflat"></td>

		</tr>
		
	</form>
	</table>
	<?
endif
?>