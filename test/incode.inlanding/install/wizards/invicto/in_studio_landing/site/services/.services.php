<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
    "main" => Array(
        "NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
        "STAGES" => Array(
            "files.php",
            "template.php",
        ),
    ),

    "iblock" => Array(
        "NAME" => GetMessage("SERVICE_IBLOCK"),
        "STAGES" => Array(
            "types.php",
            "reviews.php",
            "portfolio.php",
        ),
    ),
);
?>