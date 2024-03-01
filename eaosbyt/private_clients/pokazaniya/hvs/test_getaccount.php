<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("HvcGetAccount QWERTYUI");
?>
<pre>
<?php

$serverName = "172.18.225.201";
$uid = "web";
$pwd = "web";
$db = "hvc_web";
$connect = new PDO("dblib:host=$serverName;dbname=$db", $uid, $pwd);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //режим прерывания скрипта при ошибках

if ($connect) {
echo "OK";
} else {
  echo "Connection error.<br />";
}
//-------------------------

$branch = 'sah';
$account = 'QWE-RTYU-I';

$stmt = $connect->prepare("HvcGetAccount :branch, :account");
$stmt->bindParam(':branch', $branch);
$stmt->bindParam(':account', $account);
$stmt->execute();
//$result = $stmt->fetchAll();
$ret = $stmt->fetchAll();
$stmt->nextRowset();
$stmt->closeCursor();
$stmt = null;
print_r($ret);

/* function check_account($connect, $branch, $account) {
  $stmt = mssql_init('GetAccount', $connect);
  if ($stmt === false) {
    die(mssql_get_last_message());
  }
  mssql_bind($stmt, '@branch', $branch, SQLCHAR, false, false, 3);
  mssql_bind($stmt, '@account', $account, SQLVARCHAR, false, false, 64);
  $result = mssql_execute($stmt);
  if (!$result) {
    die(mssql_get_last_message());
  }
  $ret = mssql_num_rows($result) > 0;
  mssql_free_result($result);
  mssql_free_statement($stmt);
  return $ret;
} */
?>
</pre>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

