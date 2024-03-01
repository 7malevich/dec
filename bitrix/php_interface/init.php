<?
function AgentSotrudCSVToJSON() // агент ежесуточной отправки сведений о предварительной записи в офисы
{
	include($_SERVER["DOCUMENT_ROOT"]."/telefon/sotrud_csv_to_json.php");
	return "AgentSotrudCSVToJSON();";
}

/*include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/form/validators/val_num_ex_3.php");
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/form/validators/val_blag_date_2.php");
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/form/validators/val_test_1.php");

include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/.default/sale/mp3/init_vars.php");*/

function AgentSendZapisOfficeForToday() // агент ежесуточной отправки сведений о предварительной записи в офисы
{
	include($_SERVER["DOCUMENT_ROOT"]."/srv/office_zapis/des_vl_okt/send_timetable.php");
	include($_SERVER["DOCUMENT_ROOT"]."/srv/office_zapis/des_nhk_eric/send_timetable.php");
	include($_SERVER["DOCUMENT_ROOT"]."/srv/office_zapis/neru_eric/send_timetable.php");
	/* include($_SERVER["DOCUMENT_ROOT"]."/yakutiya/private_clients/service/queue/yes_yk_rydzinskogo/send_timetable.php");
	include($_SERVER["DOCUMENT_ROOT"]."/yakutiya/private_clients/service/queue/yes_yk_titary/send_timetable.php");
	include($_SERVER["DOCUMENT_ROOT"]."/yakutiya/private_clients/service/queue/yes_yk_202mkr/send_timetable.php");
	include($_SERVER["DOCUMENT_ROOT"]."/yakutiya/private_clients/service/queue/yes_yk_kalandari/send_timetable.php");
	include($_SERVER["DOCUMENT_ROOT"]."/yakutiya/private_clients/service/queue/yes_yk_mojaiskogo/send_timetable.php");
	include($_SERVER["DOCUMENT_ROOT"]."/yakutiya/private_clients/service/queue/yes_yk_jatay/send_timetable.php"); */

	return "AgentSendZapisOfficeForToday();";
}

function AgentOffPdfArchive() // агент ежесуточной архивации (перемещения в архивные папки) уведомлений из off/pdf
{
	$skolko_dnei = 60;
	$dir_rab = $_SERVER["DOCUMENT_ROOT"]."/off/pdf/uvedomleniya";
	$dir_arc = $_SERVER["DOCUMENT_ROOT"]."/off/pdf/archive";
	$mycounter = 0;
	$mycounter2 = 0;
	$mess = "Starting...\r\n";

    if (is_dir("$dir_rab") )
        {
           $handle=opendir($dir_rab);
           while (false!==($file = readdir($handle))) {
               if ($file != "." && $file != "..") { 
                   $Diff = (time() - filemtime("$dir_rab/$file"))/60/60/24;
					$dir_y_m = date ("Y-m", filemtime("$dir_rab/$file"));
				   if ($Diff > $skolko_dnei) {
					   if (!file_exists("$dir_arc/$dir_y_m")) {
							mkdir("$dir_arc/$dir_y_m", 0755);
							$mess .= "created dir: ".$dir_y_m."\r\n";
					   }
						rename("$dir_rab/$file", "$dir_arc/$dir_y_m/$file"); 
						//$mess .= ++$mycounter.': "'.$dir_y_m.'/'.$file.'" archived.\r\n';
						//$mess .= ++$mycounter."\r\n";
						$mycounter = $mycounter+1;
				   } else {
					$mycounter2 = $mycounter2+1;
				   }
               }
           }
           closedir($handle);
        }
	$mess .= $mycounter." files moved to archive.\r\n";
	$mess .= $mycounter2." files in off/pdf.\r\n";

	mail('pressa8@dvec.ru', 'Архивация off/pdf', $mess);
        return "AgentOffPdfArchive();";
}


// ---------------------------------------------------------------------------
// заявка на эл квитанции и интернет-приемная - подставляем адрес для отправки заявки в отделение
function my_onAfterResultAddUpdate($WEB_FORM_ID, $RESULT_ID)
{
  // заявки на эл квитанции ***************************************************
if ($WEB_FORM_ID == 27 || $WEB_FORM_ID==28 || $WEB_FORM_ID==29 || $WEB_FORM_ID==30 || $WEB_FORM_ID==45 || $WEB_FORM_ID==46 || $WEB_FORM_ID==47 || $WEB_FORM_ID==60) 
  {
    // запишем в дополнительное поле 'user_ip' IP-адрес пользователя
    CFormResult::SetField($RESULT_ID, 'user_ip', $_SERVER["REMOTE_ADDR"]);

	// подставим адрес для отправки результата в специальное поле
	$arAnswer = CFormResult::GetDataByID(
	      $RESULT_ID, 
	      array("kvit_email_otdelenie"),
		      $arResult, 
	      $arAnswer2);
		   $EMAIL_TO = $arAnswer["kvit_email_otdelenie"][0]["VALUE"];
   CFormResult::SetField($RESULT_ID, 'EMAIL_TO', $EMAIL_TO);

	// подставим тему письма
	$arAnswer = CFormResult::GetDataByID(
	      $RESULT_ID, 
	      array("kvit_email_vybor"),
	      $arResult, 
	      $arAnswer2);
		   $kvit_dostavka = $arAnswer["kvit_email_vybor"][0]["VALUE"];
   CFormResult::SetField($RESULT_ID, 'kvit_dostavka', $kvit_dostavka);

	// статистика заявок на сайте
	$mypath2 = $_SERVER["DOCUMENT_ROOT"]."/srv/elkvit/";
	$curr_counter = file_get_contents($mypath2.$WEB_FORM_ID.".txt");
	$myfile2 = file_put_contents($mypath2.$WEB_FORM_ID.".txt", ++$curr_counter , LOCK_EX);
  }


  // интернет-приемная ***************************************************
if ($WEB_FORM_ID == 49 || $WEB_FORM_ID == 50 || $WEB_FORM_ID == 51 || $WEB_FORM_ID == 52 || $WEB_FORM_ID == 53 || $WEB_FORM_ID == 54 || $WEB_FORM_ID == 55 || $WEB_FORM_ID==59) 
	{
    // запишем в дополнительное поле 'user_ip' IP-адрес пользователя
    CFormResult::SetField($RESULT_ID, 'user_ip', $_SERVER["REMOTE_ADDR"]);

	// подставим адрес для отправки результата в специальное поле
	$arAnswer = CFormResult::GetDataByID(
    	  $RESULT_ID, 
    		  array("otdelenie"),
    	  $arResult, 
    	  $arAnswer2);
  	$EMAIL_TO = $arAnswer["otdelenie"][0]["VALUE"];
   	CFormResult::SetField($RESULT_ID, 'EMAIL_TO', $EMAIL_TO);
	
	// пишем в лог для статистики

	$arAnswer = CFormResult::GetDataByID(
    	  $RESULT_ID, 
    		  array("tema"),
    	  $arResult, 
    	  $arAnswer2);
  	$theme = $arAnswer["tema"][0]["VALUE"];

	$mypath = $_SERVER["DOCUMENT_ROOT"]."/srv/ias/ip/";
	$myfile = file_put_contents($mypath.$WEB_FORM_ID.".txt", date_create()->format('Y-m-d')."\t".$theme.PHP_EOL , FILE_APPEND | LOCK_EX);
	}
}

AddEventHandler('form', 'onAfterResultAdd', 'my_onAfterResultAddUpdate');
AddEventHandler('form', 'onAfterResultUpdate', 'my_onAfterResultAddUpdate');
// ---------------------------------------------------------------------------


AddEventHandler("sale", "OnSaleCancelOrder", "SaleCancelOrderEventAdd");
function SaleCancelOrderEventAdd(&$ID, &$var)
{
 	if($var == "Y" && CModule::IncludeModule("statistic"))
 	{
		CStatistic::Set_Event("eStore", "order_cancel", $ID);
	}
}

function MP3DeliveryOrderCallback($productID, $userID, $bPaid, $orderID)
{
	global $DB;

	$productID = IntVal($productID);
	$userID = IntVal($userID);
	$bPaid = ($bPaid ? True : False);
	$orderID = IntVal($orderID);

	if ($userID <= 0)
		return False;

	if ($orderID <= 0)
		return False;

	if (!array_key_exists($productID, $GLOBALS["arMP3Sums"]))
		return False;

	if (!($arOrder = CSaleOrder::GetByID($orderID)))
		return False;

	$baseLangCurrency = CSaleLang::GetLangCurrency($arOrder["LID"]);

	$currentPrice = $GLOBALS["arMP3Sums"][$productID]["PRICE"];
	$currentCurrency = $GLOBALS["arMP3Sums"][$productID]["CURRENCY"];
	if ($GLOBALS["arMP3Sums"][$productID]["CURRENCY"] != $baseLangCurrency)
	{
		$currentPrice = CCurrencyRates::ConvertCurrency($GLOBALS["arMP3Sums"][$productID]["PRICE"], $GLOBALS["arMP3Sums"][$productID]["CURRENCY"], $baseLangCurrency);
		$currentCurrency = $baseLangCurrency;
	}

	if (!CSaleUserAccount::UpdateAccount($userID, ($bPaid ? $currentPrice : -$currentPrice), $currentCurrency, "MANUAL", $orderID))
		return False;

	return True;
}


function getPriceId()
{
   // Указываем ID типов цен для городов\сайтов
   $prices = [
      'm1' => 10, 
      'm2' => 10, 
      'm3' => 14, 
      'm4' => 22, 
      'm5' => 15, 
      'm6' => 23, 
      'm7' => 21, 
   ];
   
   return $prices[getCityCode()];
}

function getCityCode()
{
   return SITE_ID;
}

AddEventHandler("catalog", "OnGetOptimalPrice", 'OnGetOptimalPriceHandler');

function OnGetOptimalPriceHandler($productID, $quantity = 1, $arUserGroups = array(), $renewal = "N", $arPrices = array(), $siteID = "m1", $arDiscountCoupons = false) 
{

	static $isLoop = false;
   
   	if ($isLoop)
      return true;

   $priceIterator = Bitrix\Catalog\PriceTable::getList(array(
      'select' => array('ID', 'CATALOG_GROUP_ID', 'PRICE', 'CURRENCY'),
      'filter' => array(
         '=PRODUCT_ID' => $productID,
         '@CATALOG_GROUP_ID' => getPriceId(),
         array(
            'LOGIC' => 'OR',
            '<=QUANTITY_FROM' => $quantity,
            '=QUANTITY_FROM' => null
         ),
         array(
            'LOGIC' => 'OR',
            '>=QUANTITY_TO' => $quantity,
            '=QUANTITY_TO' => null
         )
      ),
      'order' => array('CATALOG_GROUP_ID' => 'ASC')
   ));

   $isLoop = true;
   $prices = CCatalogProduct::GetOptimalPrice($productID, $quantity, $arUserGroups, $renewal, $priceIterator->fetchAll(), $siteID, $arDiscountCoupons);
   $isLoop = false;

   return $prices;

}
?>