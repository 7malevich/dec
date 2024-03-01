<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");

$rsSites = CSite::GetByID('r4');
$arSite = $rsSites->Fetch();
echo "<pre>"; print_r($arSite); echo "</pre>";


      $filter = Array
      (
          "NAME" => '%'.посетители.'%'
      );
      $rsGroups = CGroup::GetList(($by="c_sort"), ($order="desc"), $filter); // группы посетителей
      $arVisitorsGroups = array();
      while ($Groups = $rsGroups->GetNext()) {
        array_push($arVisitorsGroups, $Groups['ID']);
      }

$arGroups = $USER->GetUserGroupArray(); // получаем текущие группы пользователя
$arGroups = array_diff ($arGroups, $arVisitorsGroups) ; // удаляем из списка временные группы для постеителей из городов (сайтов)
$CityName = $arSite['NAME'] ;
$filter = Array
(
  "NAME" => '%'.$CityName.'%'
);
$rsGroups = CGroup::GetList(($by="c_sort"), ($order="desc"), $filter); // гуппа опрделеная по сайту
$Group = $rsGroups->Fetch();
if (!empty($Group['ID'])) {
	$arGroups[] = $Group['ID'];
}
$userId = $USER->GetID();
$USER->Update($userId, array("GROUP_ID" => $arGroups)); // назначаем пользователю группы
$_SESSION["SESS_AUTH"]["GROUPS"] = $arGroups ; // назначаем пользователю группы в сессии
if ($USER->IsAuthorized()){  // если пользователь авторизован , то заходи повторно .
	$USER->Logout();
	$USER->Authorize($userId);
}

$arGroups = $USER->GetUserGroupArray(); // получаем текущие группы пользователя
echo "<pre>"; print_r($arGroups); echo "</pre>";

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>