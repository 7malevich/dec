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

<p>В нижнем правом углу экрана расположена кнопка «Напишите нам. Мы он-лайн». Нажимая её, открывается диалог с оператором компании. Здесь вы можете задать интересующие вас вопросы. Как только оператор уточнит информацию, он сразу вам ответит.</p>