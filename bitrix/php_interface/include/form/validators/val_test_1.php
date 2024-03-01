<?

class CFormCustomValidatorTest1
{
  function GetDescription()
  {
    return array(
      "NAME"            => "validatortest1",                                   // идентификатор
      "DESCRIPTION"     => "тест передачи переменной в валидатор",                                 // наименование
      "TYPES"           => array("text", "textarea"),                            // типы полей
      "SETTINGS"        => array("CFormCustomValidatorTest1", "GetSettings"), // метод, возвращающий массив настроек
      "CONVERT_TO_DB"   => array("CFormCustomValidatorTest1", "ToDB"),        // метод, конвертирующий массив настроек в строку
      "CONVERT_FROM_DB" => array("CFormCustomValidatorTest1", "FromDB"),      // метод, конвертирующий строку настроек в массив
      "HANDLER"         => array("CFormCustomValidatorTest1", "DoValidate")   // валидатор
    );
  }

  function GetSettings()
  {
    return array(
      "MY_VAR" => array(
        "TITLE"   => "переменная",
        "TYPE"    => "TEXT",
        "DEFAULT" => "",
      ),
    );
  }

  function ToDB($arParams)
  {
   
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

if ($_REQUEST[RESULT_ID] > 0) {
return true;    
}

$APPLICATION->ThrowException("стоп: ".$_REQUEST[RESULT_ID]);
return false;    

  }
}

// установим метод CFormCustomValidatorTest1 в качестве обработчика события
AddEventHandler("form", "onFormValidatorBuildList", array("CFormCustomValidatorTest1", "GetDescription"));
?>