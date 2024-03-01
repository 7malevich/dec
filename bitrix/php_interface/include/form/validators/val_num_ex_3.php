<?

class CFormCustomValidatorNumberEx
{
  function GetDescription()
  {
    return array(
      "NAME"            => "accounts_blag",                                   // идентификатор
      "DESCRIPTION"     => "Лицевые счета по Благовещенску",                                 // наименование
      "TYPES"           => array("text", "textarea"),                            // типы полей
      "SETTINGS"        => array("CFormCustomValidatorNumberEx", "GetSettings"), // метод, возвращающий массив настроек
      "CONVERT_TO_DB"   => array("CFormCustomValidatorNumberEx", "ToDB"),        // метод, конвертирующий массив настроек в строку
      "CONVERT_FROM_DB" => array("CFormCustomValidatorNumberEx", "FromDB"),      // метод, конвертирующий строку настроек в массив
      "HANDLER"         => array("CFormCustomValidatorNumberEx", "DoValidate")   // валидатор
    );
  }

  function GetSettings()
  {
    return array(
      "NUMBER_FROM" => array(
        "TITLE"   => "Нижний порог числа",
        "TYPE"    => "TEXT",
        "DEFAULT" => "0",
      ),

      "NUMBER_TO" => array(
        "TITLE"   => "Верхний порог числа",
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
    
  function DoValidate($arParams, $arQuestion, $arAnswers, $arValues)
  {
    global $APPLICATION;
    
    foreach ($arValues as $value)
    {
      // пустые значения пропускаем
      if (strlen($value) <= 0) continue;
 
 
//поиск по файлу
$value = strtoupper($value);
$data = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/form/validators/acc-amur-blag.txt"); //read the file
$convert = explode("\r\n", $data); //create array separate by new line

for ($i=0;$i<count($convert);$i++) 
{
  if ($convert[$i] == $value)
    return true;

}
    }

//валидация не прошла, лиц.счет не найден
    $APPLICATION->ThrowException("#FIELD_NAME#: лицевой счет в указанном отделении не найден, проверьте корректность введенных данных");
    return false;
  }
}

// установим метод CFormCustomValidatorNumberEx в качестве обработчика события
AddEventHandler("form", "onFormValidatorBuildList", array("CFormCustomValidatorNumberEx", "GetDescription"));
?>