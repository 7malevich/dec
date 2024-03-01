<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
// Template for navigation chain
$sChainProlog = "";
$sChainBody = "";


// Show items delimiter
if ($ITEM_INDEX > 0 and LANG_DIR == "/")
   $sChainBody = "<font class=\"chain\">&nbsp;/&nbsp;</font>";
if ($ITEM_INDEX > 1 and LANG_DIR == "/en/")
   $sChainBody = "<font class=\"chain\">&nbsp;/&nbsp;</font>";

if (LANG_DIR == "/en/" && $ITEM_INDEX == 0)
{
	$LINK = "/en".$LINK;
         $TITLE = "";
}


if (strlen($LINK)>0)
	$sChainBody .= "<a href=\"".$LINK."\" class=\"smalltext\">".htmlspecialchars($TITLE)."</a>";
else
	$sChainBody .= "<font class=\"smalltext\">".htmlspecialchars($TITLE)."</font>";

$sChainEpilog = "";
?>