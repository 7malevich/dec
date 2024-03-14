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

<p>Плата за соответствующий вид коммунальной услуги, предоставленной за расчетный период на общедомовые нужды потребителям не начисляется, если при расчете объема коммунальной услуги, предоставленной за расчетный период на общедомовые нужды, будет установлено, что объем коммунального ресурса, определенный исходя из показаний коллективного (общедомового) прибора учета за этот расчетный период, меньше чем сумма объемов соответствующего вида коммунальной услуги, предоставленной за этот расчетный период потребителям во всех жилых и нежилых помещениях в доме.</p>