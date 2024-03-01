<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); //Подключили ядро битрикса

//ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
set_time_limit(3);
usleep(500000);

if (!isset($_GET["date1"]) or !isset($_GET["date2"]) or !isset($_GET["qid"])) {
	echo '<div class="alert">Не указаны даты или офис!</div>';
} else {
$qid = htmlspecialchars($_GET["qid"]); //айди офиса
$date1 = date_create_from_format('Y-m-d', htmlspecialchars($_GET["date1"]));
$date2 = date_create_from_format('Y-m-d', htmlspecialchars($_GET["date2"]));

$file = $qid."/queue.txt";
$content = file($file); //Read the file into an array. Line number => line content

$slots_used = 0;
$slots_free = 0;

?>

<table class="table table-bordered table-hover table-sm text-center">
	<tr>
		<th>С даты</th>
		<th>По дату</th>
		<th>Слотов</th>
		<th>Занято</th>
		<th>Свободно</th>
		<th>Загруженность</th>
	</tr>

	<? 
foreach($content as $lineNumber => &$lineContent) { //Loop through the array (the "lines")
	$row = explode(";", $lineContent);
	$date_check = date_create_from_format('d.m.Y', $row[2]);
	if (($date_check >= $date1) and ($date_check <= $date2)) {
		if ($row[4]) {
			$slots_used++;
		} else {
			$slots_free++;
		}
	}
	if ( $slots_used ) { $capacity = round((1 / ($slots_free + $slots_used) * $slots_used * 100),2); }
}
$output = "<tr><td>".$date1->format('d.m.Y')."</td><td>".$date2->format('d.m.Y')."</td><td>".($slots_used+$slots_free)."</td><td>".$slots_used."</td><td>".$slots_free."</td><td>".$capacity."%</td></tr>";
echo $output;
}
?>

</table>
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>