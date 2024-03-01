<pre>
<?
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$serverName = "172.18.225.201";
$uid = "web";
$pwd = "web";
$db = "otoplenie_web";
$connect = new PDO("dblib:host=$serverName;dbname=$db", $uid, $pwd);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //режим прерывания скрипта при ошибках
if ($connect=== false) {
  echo "Connection error.<br>";
}

$branch_list = Teploget_branch_list($connect);
print_r($branch_list);

/* foreach($results['data'] as $result) {
    echo $result['type'], '<br>';
} */

echo json_encode($branch_list);

function Teploget_branch_list($connect) {
  $stmt = $connect->prepare("TeploGetBranchList");
  $stmt->execute();
  $branch_list = $stmt->fetchAll();
  $stmt->closeCursor();
  $stmt = null;
  return $branch_list;
}

?>
</pre>