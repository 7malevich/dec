<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$mydate = "Oct 31 2023 12:00:00:AM";
echo "string: ". $mydate ."<br>";
echo "strtotime: " . strtotime($mydate) . "<br>";
$testme = strtotime($mydate);
var_dump($testme);

$dp = DateTime::createFromFormat("M DD YY HH:II:SS:meridian", $mydate);
//$dp = date_create_from_format('M DD YY HH:II:SS:meridian', $mydate);
//$dpstr = $dp->format('Y-m-d H:i:s');
var_dump($dp);
?>
