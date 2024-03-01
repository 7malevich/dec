<?

/* ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); */


include_once("settings.php");

if (isset($_GET["rgn"])) { //если указан регион
  $rgn = htmlspecialchars($_GET["rgn"]);
  if (array_key_exists($rgn, $regions)) { //если запрос в списке возможных регионов

    if (file_exists('files/br_'.$rgn.'.gif')) {
      $name = 'files/br_'.$rgn.'.gif';
      $hdrctype = "Content-Type: image/gif";
    }
    if (file_exists('files/br_'.$rgn.'.jpeg')) {
      $name = 'files/br_'.$rgn.'.jpeg';
      $hdrctype = "Content-Type: image/jpg";
    }
    if (file_exists('files/br_'.$rgn.'.jpg')) {
      $name = 'files/br_'.$rgn.'.jpg';
      $hdrctype = "Content-Type: image/jpg";
    }
    if (file_exists('files/br_'.$rgn.'.png')) {
      $name = 'files/br_'.$rgn.'.png';
      $hdrctype = "Content-Type: image/png";
    }

$txt = date(DATE_ATOM);
$file_write = file_put_contents('files/log_load_'.$rgn.'.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

if (isset($name)) { // если нашелся файл с картинкой

	/*require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
  global $APPLICATION;                        // записываем в статистику событий битрикс
if (CModule::IncludeModule('statistic')) { CStatEvent::AddCurrent('email_br', $rgn.'_load'); }*/

  $fp = fopen($name, 'rb'); // выдаем файл и выходим
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  header($hdrctype);
  fpassthru($fp);
  exit;
}

  } else {   echo "boo";   }
}


?>


