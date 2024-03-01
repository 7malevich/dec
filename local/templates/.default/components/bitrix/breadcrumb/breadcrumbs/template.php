<?php

function getSectionsByCode($code)
{
    $iblockId = 259;

    $arFilter = array('IBLOCK_ID' => $iblockId, 'CODE' => $code);

    $arSelect = array('ID', 'NAME', 'CODE', 'IBLOCK_SECTION_ID', 'DEPTH_LEVEL');

    $dbSections = \CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
    $section = $dbSections->GetNext();

    return $section;
}

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$urlSegments = explode('/', trim($urlPath, '/'));

$breadcrumbs = '<div class="breadcrumbs">';
$breadcrumbs .= '<div class="container">';
$breadcrumbs .= '<div class="breadcrumbs__wrapper">';

// Home breadcrumb
$breadcrumbs .= '<a class="breadcrumbs__item" href="/">Главная</a>';

$currentPath = '';
if ($urlSegments[0] !== '') {
    $numSegments = count($urlSegments);
    foreach ($urlSegments as $key => $segment) {
        $currentPath .= '/' . $segment;
        $section = getSectionsByCode($segment);

        if ($section) {
            // Добавляем проверку на последний сегмент URL
            if ($key < $numSegments - 1) {
                $breadcrumbs .= '<a class="breadcrumbs__item" href="' . $currentPath . '/">' . $section['NAME'] . '</a>';
            }
        }
    }
}

$breadcrumbs .= '</div>';
$breadcrumbs .= '</div>';
$breadcrumbs .= '</div>';

return $breadcrumbs;
?>
