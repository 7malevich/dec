<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
IncludeTemplateLangFile(__FILE__);
if (CModule::IncludeModule("sale")):
//*******************************************************

$BASKET_PAGE = (!isset($BASKET_PAGE)?"/personal/basket.php":$BASKET_PAGE);
$PERSONAL_PAGE = (!isset($PERSONAL_PAGE)?"/personal/index.php":$PERSONAL_PAGE);

$BASKET_PAGE = Trim($BASKET_PAGE);
$PERSONAL_PAGE = Trim($PERSONAL_PAGE);
if (!function_exists("BasketNumberWordEndings"))
{
	function BasketNumberWordEndings($num, $lang = false, $arEnds = false)
	{
		if ($lang===false)
			$lang = LANGUAGE_ID;
	
		if ($arEnds===false)
			$arEnds = array(GetMessage("TSB1_WORD_OBNOVL_END1"), GetMessage("TSB1_WORD_OBNOVL_END2"), GetMessage("TSB1_WORD_OBNOVL_END3"), GetMessage("TSB1_WORD_OBNOVL_END4"));
	
		if ($lang=="ru")
		{
			if (strlen($num)>1 && substr($num, strlen($num)-2, 1)=="1")
			{
				return $arEnds[0];
			}
			else
			{
				$c = IntVal(substr($num, strlen($num)-1, 1));
				if ($c==0 || ($c>=5 && $c<=9))
					return $arEnds[1];
				elseif ($c==1)
					return $arEnds[2];
				else
					return $arEnds[3];
			}
		}
		elseif ($lang=="en")
		{
			if (IntVal($num)>1)
			{
				return "s";
			}
			return "";
		}
		else
		{
			return "";
		}
	}
}
$arItems = GetBasketList();
$num_prodcts = 0;
for ($i = 0; $i<count($arItems); $i++)
	$num_prodcts++;
?>
<table border="0" cellspacing="0" cellpadding="1" width="150">
	<tr>
		<td width="0%"><img src="/bitrix/templates/<?echo SITE_TEMPLATE_ID;?>/images/1.gif" width="8" height="1" alt=""></td>
		<td valign="top" width="0%">
			<font class="baskettext">
			<?if (strlen($BASKET_PAGE)>0):?><a href="<?echo $BASKET_PAGE?>"><?endif;?>
			<img src="/bitrix/templates/<?echo SITE_TEMPLATE_ID;?>/images/basket.gif" width="16" height="16" alt="<?= GetMessage("TSB1_BASKET") ?>" border="0" vspace="2"><?if (strlen($BASKET_PAGE)>0):?></a><?endif;?>
			</font>
		</td>
		<td valign="middle" width="100%">
			<font class="baskettext">
			<?
			if ($num_prodcts>0)
			{
				if (strlen($BASKET_PAGE)>0):?><a href="<?echo $BASKET_PAGE ?>" class="baskettext"><?endif;
				echo str_replace("#END#", BasketNumberWordEndings($num_prodcts), str_replace("#NUM#", $num_prodcts, GetMessage("TSB1_BASKET_TEXT")));
				if (strlen($BASKET_PAGE)>0):?></a><?endif;
			}
			else
			{
				?><?= GetMessage("TSB1_EMPTY") ?><?
			}
			?>
			</font>
		</td>
	</tr>
</table>
<table border="0" cellspacing="0" cellpadding="1" width="150">
	<tr>
		<td width="0%"><img src="/bitrix/templates/<?echo SITE_TEMPLATE_ID;?>/images/1.gif" width="8" height="1" alt=""></td>
		<td valign="top" width="0%"><a href="<?echo $PERSONAL_PAGE;?>"><img src="/bitrix/templates/<?echo SITE_TEMPLATE_ID;?>/images/personal.gif" width="16" height="16" alt="<?= GetMessage("TSB1_PERSONAL") ?>" border="0" vspace="2"></a></td>
		<td valign="middle" width="100%"><a href="<?echo $PERSONAL_PAGE;?>" class="baskettext"><?= GetMessage("TSB1_PERSONAL") ?></a></td>
	</tr>
</table>
<?
//*******************************************************
endif;
?>	