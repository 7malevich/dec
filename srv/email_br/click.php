<?

/* ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); */


include_once("settings.php");

if (isset($_GET["rgn"])) { //если указан регион
  $rgn = htmlspecialchars($_GET["rgn"]);
  if (array_key_exists($rgn, $regions)) { //если запрос в списке возможных регионов
    $file_url = 'files/url_'.$rgn.'.txt'; //путь к файлу url
    if (file_exists($file_url)) {
      $txt = date(DATE_ATOM);
      $write_file = file_put_contents('files/log_click_'.$rgn.'.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

		/*require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
      global $APPLICATION;                           // записываем в статистику событий битрикс
if (CModule::IncludeModule('statistic')) { CStatEvent::AddCurrent('email_br', $rgn.'_click'); }*/
      
      $my_url = file_get_contents($file_url);
      header('Location: '.$my_url);
      die();
    }
  } else {   echo "boo";   }
}


?>