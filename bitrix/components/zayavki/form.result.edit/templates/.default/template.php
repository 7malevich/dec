<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<p><a href="./">Вернуться к списку</a></p>

<!-- ссылку на страницу просмотра результата убираем
<?
if ($arParams["VIEW_URL"]) 
{
	$href = $arParams["SEF_MODE"] == "Y" ? str_replace("#RESULT_ID#", $arParams["RESULT_ID"], $arParams["VIEW_URL"]) : $arParams["VIEW_URL"].(strpos($arParams["VIEW_URL"], "?") === false ? "?" : "&")."RESULT_ID=".$arParams["RESULT_ID"]."&WEB_FORM_ID=".$arParams["WEB_FORM_ID"];
?>
<p>[&nbsp;<a href="<?=$href?>"><?=GetMessage("FORM_VIEW")?></a>&nbsp;]</p>
<?
}
?>
-->

	<?
	if ($arResult["isAccessFormParams"] == "Y")
	{?>
<table class="form-table data-table">
	<tr>
		<td><font style="font-size:9pt">ID заявки:</font></td>
		<td><font style="font-size:9pt"><?=$arResult["RESULT_ID"]?></font></td>
	</tr>
		<td><font style="font-size:9pt">Дата создания:</font></td>
		<td><font style="font-size:9pt"><?=$arResult["RESULT_DATE_CREATE"]?></font></td>
	</tr>
		<td><font style="font-size:9pt">Дата изменения:</font></td>
		<td><font style="font-size:9pt"><?=$arResult["RESULT_TIMESTAMP_X"]?></font></td>
	</tr>
</table>
<?	 }		?>

<?=$arResult["FORM_HEADER"]?>
<?=bitrix_sessid_post()?>

<!-- заголовок и изорбражение формы убираем
<table>
<?
if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y") 
{ 
?>
	<tr>
		<td><?
/***********************************************************************************
					form header
***********************************************************************************/
if ($arResult["isFormTitle"]) 
{
?>
			<h3><?=$arResult["FORM_TITLE"]?></h3>
<?
} //endif ;

if ($arResult["isFormImage"] == "Y")
{
?>
<a href="<?=$arResult["FORM_IMAGE"]["URL"]?>" target="_blank" alt="<?=GetMessage("FORM_ENLARGE")?>"><img src="<?=$arResult["FORM_IMAGE"]["URL"]?>" <?if($arResult["FORM_IMAGE"]["WIDTH"] > 300):?>width="300"<?elseif($arResult["FORM_IMAGE"]["HEIGHT"] > 200):?>height="200"<?else:?><?=$arResult["FORM_IMAGE"]["ATTR"]?><?endif;?> hspace="3" vscape="3" border="0" /></a>
<?//=$arResult["FORM_IMAGE"]["HTML_CODE"]?>
<?
} //endif
?>

			<p><?=$arResult["FORM_DESCRIPTION"]?></p>
		</td>
	</tr>
	<? 
} // endif 
	?>
</table>
-->
<br />

<?

/***********************************************************************************
					Form questions
***********************************************************************************/ 
		?>
<?if ($arResult["FORM_NOTE"]):?><?=$arResult["FORM_NOTE"]?><?endif?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<table class="form-table data-table">
	<thead>
		<tr>
			<th colspan="2">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	
<!-- поля формы -->	
	<?
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{
	?>
	<tr>
		<td>
			<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
			<span class="error-fld" title="<?=$arResult["FORM_ERRORS"][$FIELD_SID]?>"></span>
			<?endif;?>
			<?=$arQuestion["CAPTION"]?><?=$arResult["arQuestions"][$FIELD_SID]["REQUIRED"] == "Y" ? $arResult["REQUIRED_SIGN"] : ""?>
			<?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>
		</td>
		<td><?=$arQuestion["HTML_CODE"]?></td>
	</tr>
	<? 
	} //endwhile 
	?>

	<?if($arResult["FORM_SIMPLE"] == "N" && $arResult["isResultStatusChangeAccess"] == "Y" && $arParams["EDIT_STATUS"] == "Y")
{ //отображение и изменение статуса
?>
    <tr>
	    <td style="background-color:#FDF7EA;">
		    <b><?=GetMessage("FORM_CURRENT_STATUS")?></b>
		</td>
		<td style="background-color:#FDF7EA;">
	
			<p>[<?=$arResult["RESULT_STATUS"]?>]</p>
			<p><?=GetMessage("FORM_CHANGE_TO")?>: <?=$arResult["RESULT_STATUS_FORM"]?></p>
		</td>
    </tr>
<?
}
?>

	</tbody>
	<tfoot>
	<tr>
		<th colspan="2">
			<input type="hidden" name="web_form_apply" value="Y" /><input type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>" />
			&nbsp;
			<input type="submit" name="web_form_submit" value="<?=strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"];?>" />
		</th>
	</tr>
	</tfoot>
</table>
<br />
<p><a href="./">Вернуться к списку</a></p>
<!--
<p>
<?=$arResult["REQUIRED_SIGN"]?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>
</p>
-->
<?=$arResult["FORM_FOOTER"]?>
