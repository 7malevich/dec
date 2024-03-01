<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); //Подключили ядро битрикса

//ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
set_time_limit(3);
usleep(500000);

if (!isset($_GET["date1"]) or !isset($_GET["date2"]) or !isset($_GET["qid"])) {
	echo '<div class="alert">Не указаны даты или офис!</div>';
} else {
$qid = htmlspecialchars($_GET["qid"]); //айди офиса
$date1 = date_create_from_format('Y-m-d', htmlspecialchars($_GET["date1"]));
$date2 = date_create_from_format('Y-m-d', htmlspecialchars($_GET["date2"]));
	//$date_now = date_create('now')->format('Y-m-d');
	//$date_now = date_create_from_format('Y-m-d', $date_now);
	//$title =  "Запись онлайн: расписание на дату ".$date_now->format('d.m.Y');
	//$APPLICATION->SetTitle($title);
	//echo $date_now->format('Y-m-d');
	//echo (date_create('now')->format('Y-m-d'));

$file = $qid."/queue.txt";
$content = file($file); //Read the file into an array. Line number => line content
?>

<table class="table table-bordered table-hover table-sm">
	<tr>
		<!-- <th>Офис</th> -->
		<!-- <th>Окно</th> -->
		<th class='text-center'>Дата</th>
		<th class='text-center'>Время</th>
		<th class='text-center'>ФИО</th>
		<th class='text-center'>Телефон</th>
		<th class='text-center'>Эл.почта</th>
		<th class='text-center'>X</th>
		<!-- <th>Пин</th> -->
	</tr>

<?
foreach($content as $lineNumber => &$lineContent) { //Loop through the array (the "lines")
	$row = explode(";", $lineContent);
	$date_check = date_create_from_format('d.m.Y', $row[2]);

	//echo "date check:<br>";
	//print_r($date_check);
	if (($date_check >= $date1) and ($date_check <= $date2)) {
		/*echo "<tr>";
		foreach ($row as $tablerow) {
			echo "<td>".$tablerow."</td>";
		}
		echo "</tr>";*/
		if ($row[4] != '') { 
			$todelete="DeleteZapis1('".$lineNumber."','".$row[2]."','".$row[3]."','".$row[4]."');"; 
		} else { 
			$todelete=''; }
		echo "<tr><td>".$row[2]."</td><td class=\"text-center\">".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td><button class=\"btn btn-sm btn-outline-danger\" onclick=\"".$todelete."\">X</a></td></tr>";
	}
	//echo "<pre>";
	//print_r($row);
}
}
?>

</table>
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>