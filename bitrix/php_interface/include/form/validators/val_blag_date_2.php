<?

class CFormCustomValidatorBlagDate
{
  function GetDescription()
  {
    return array(
      "NAME"            => "blag_dates",                                   // идентификатор
      "DESCRIPTION"     => "Выбор даты выполнения заявки по Благовещенску",                                 // наименование
      "TYPES"           => array("date"),                            // типы полей
      "SETTINGS"        => array("CFormCustomValidatorBlagDate", "GetSettings"), // метод, возвращающий массив настроек
      "CONVERT_TO_DB"   => array("CFormCustomValidatorBlagDate", "ToDB"),        // метод, конвертирующий массив настроек в строку
      "CONVERT_FROM_DB" => array("CFormCustomValidatorBlagDate", "FromDB"),      // метод, конвертирующий строку настроек в массив
      "HANDLER"         => array("CFormCustomValidatorBlagDate", "DoValidate")   // валидатор
    );
  }

  function GetSettings()
  {
    return array(
      "NUMBER_FROM" => array(
        "TITLE"   => "Нижний порог дней",
        "TYPE"    => "TEXT",
        "DEFAULT" => "0",
      ),

      "NUMBER_TO" => array(
        "TITLE"   => "Верхний порог дней (не исп)",
        "TYPE"    => "TEXT",
        "DEFAULT" => "100",
      ),
      
      "NUMBER_FLOAT" => array(
        "TITLE"   => "Не только целое",
        "TYPE"    => "CHECKBOX",
        "DEFAULT" => "Y",
      ),
    );
  }

  function ToDB($arParams)
  {
    // проверка переданных параметров
    $arParams["NUMBER_FLOAT"] = $arParams["NUMBER_FLOAT"] == "Y" ? "Y" : "N";
    $arParams["NUMBER_FROM"]  = $arParams["NUMBER_FLOAT"] == "Y" ? floatval($arParams["NUMBER_FROM"]) : intval($arParams["NUMBER_FROM"]);
    $arParams["NUMBER_TO"]    = $arParams["NUMBER_FLOAT"] == "Y" ? floatval($arParams["NUMBER_TO"]) : intval($arParams["NUMBER_TO"]);
    
    // перестановка значений порогов, если требуется
    if ($arParams["NUMBER_FROM"] > $arParams["NUMBER_TO"])
    {
      $tmp                     = $arParams["NUMBER_FROM"];
      $arParams["NUMBER_FROM"] = $arParams["NUMBER_TO"];
      $arParams["NUMBER_TO"]   = $tmp;
    }
    
    // возвращаем сериализованную строку
    return serialize($arParams);
  }

  function FromDB($strParams)
  {
    // никаких преобразований не требуется, просто вернем десериализованный массив
    return unserialize($strParams);
  }
    
// функция валидации
  function DoValidate($arParams, $arQuestion, $arAnswers, $arValues)
  {
    global $APPLICATION;

// если в строке адреса есть RESULT_ID, валидацию отменяем 
// (отменяем проверку даты при редактировании результата в бэкофисе)
if ($_REQUEST[RESULT_ID] > 0) {
return true; 
}

// проверка дат    
    foreach ($arValues as $value)
    {
      // пустые значения пропускаем
      if (strlen($value) <= 0) continue;
 
//проверка даты 1
$date1=date('d-m-Y');
$tempArr=explode('.', $value);
$date2 = date("d-m-Y", mktime(0, 0, 0, $tempArr[1], $tempArr[0], $tempArr[2]));

$datedifference = (strtotime($date2) - strtotime($date1))/60/60/24;
if ($datedifference < 10)
{
//валидация не прошла
    $APPLICATION->ThrowException("#FIELD_NAME#: дата выполнения заявки должна быть не ранее чем через 10 дней");
    return false;
}
 
//проверка даты 2, поиск по файлу
$data = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/form/validators/dates_excl.txt"); //read the file
$convert = explode("\r\n", $data); //create array separate by new line

for ($i=0;$i<count($convert);$i++) 
{
  if (strtotime($convert[$i]) == strtotime($date2))
  {
    $APPLICATION->ThrowException("#FIELD_NAME#: дата выполнения заявки не должна совпадать с выходными и праздничными днями");
    return false;
  }
}
    return true;
    }
  }
}

// установим метод CFormCustomValidatorBlagDate в качестве обработчика события
AddEventHandler("form", "onFormValidatorBuildList", array("CFormCustomValidatorBlagDate", "GetDescription"));
?>