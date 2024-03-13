<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<p>Калькулятор экономической выгоды позволяет выбрать оптимальный вариант расчётов
    (одноставочный/многоставочный) с учётом изменения&nbsp;тарифов.</p>

<p>Воспользовавшись формой ниже, вы сможете рассчитать стоимость вашего электропотребления в целях
    выбора оптимального варианта.</p>