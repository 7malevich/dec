<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("PID= параметр в url");
?>
<?
if(!CModule::IncludeModule("iblock"))

return; 
$pid2 = htmlspecialchars($_GET["PID"]);
$res = CIBlockElement::GetByID($pid2);
if($ar_res = $res->GetNext())
  echo $ar_res['NAME'];
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>