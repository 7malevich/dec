<?
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//set_time_limit(8);

include_once("settings.php");
$mykey = htmlspecialchars($_GET["oid"]);
//if (array_key_exists($mykey, $o_addresses)) {
  $myarray = array(
    'alias' => $mykey,
    'address' => $o_addresses[$mykey]
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($myarray, JSON_UNESCAPED_UNICODE);
//}

?>