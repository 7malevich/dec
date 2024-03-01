<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?
if ($arParams["VIEW_URL"])
{
    $href = $arParams["SEF_MODE"] == "Y" ? str_replace("#RESULT_ID#", $arParams["RESULT_ID"], $arParams["VIEW_URL"]) : 
                $arParams["VIEW_URL"].(strpos($arParams["VIEW_URL"], "?") === false ? 
                "?" : "&")."RESULT_ID=".$arParams["RESULT_ID"]."&WEB_FORM_ID=".$arParams["WEB_FORM_ID"];
?>
<p>[ <a href="<?=$href?>"><?=GetMessage("FORM_VIEW")?></a> ]</p>
<?
}
?>

<?=$arResult["FORM_HEADER"]?>
<?=bitrix_sessid_post()?>

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
            <th colspan="2"> </th>
        </tr>
    </thead>
    <tbody>
<tr>
            <td><b><?=GetMessage("FORM_DATE_CREATE")?></b></td>
            <td><?=$arResult["RESULT_DATE_CREATE"]?></td>
        </tr>
        <tr>
            <td><b><?=GetMessage("FORM_TIMESTAMP")?></b></td>
            <td><?=$arResult["RESULT_TIMESTAMP_X"]?></td>
        </tr>
        <tr>
            <td><b><?=$arResult["arQuestions"]["name"]["TITLE"]?></b></td>
            <td><?=$arResult["arrVALUES"]["form_text_915"]?></td>
        </tr>
        <tr>
            <td><b><?=$arResult["arQuestions"]["text"]["TITLE"]?></b></td>
            <td><?=$arResult["arrVALUES"]["form_email_916"]?></td>
        </tr>
        <tr>
            <td><b><?=$arResult["arQuestions"]["text"]["TITLE"]?></b></td>
            <td><?=$arResult["arrVALUES"]["form_text_921"]?></td>
        </tr>
    <?
    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
    {
    if ($FIELD_SID == "work_comment") 
    {
    ?>
    <tr>
        <td>
            <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
            <span class="error-fld" title="<?=$arResult["FORM_ERRORS"][$FIELD_SID]?>"></span>
            <?endif;?>
            <b><?=$arQuestion["CAPTION"]?></b>
            </td>
        <td><?=$arQuestion["HTML_CODE"]?></td>
    </tr>
    <?
    }
} //endwhile

    ?>
    </tbody>
    <tfoot>
    <tr>
        <th colspan="2">
            <input type="submit" name="web_form_submit" value="<?=strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"];?>" />
             <input type="reset" value="<?=GetMessage("FORM_RESET");?>" />
        </th>
    </tr>
    </tfoot>
</table>

<?=$arResult["FORM_FOOTER"]?>
