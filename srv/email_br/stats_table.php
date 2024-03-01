<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); //Подключили ядро битрикса

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
set_time_limit(3);
usleep(500000);


if (!isset($_GET["date1"]) or !isset($_GET["date2"])) {
	echo '<div class="alert">Не указаны даты!</div>';
} else {
	$date1 = date_create_from_format('Y-m-d', htmlspecialchars($_GET["date1"]));
	$date2 = date_create_from_format('Y-m-d', htmlspecialchars($_GET["date2"]));
?>

<table class="table table-bordered table-hover table-sm text-center">
	<tr>
		<th>Территория, текущий&nbsp;баннер</th>
		<th>Загрузок (показов)</th>
		<th>Кликов</th>
		<th>% кликов</th>
		<th>Всего подписчиков (сейчас)</th>
		<th>% загрузок</th>
	</tr>

<? 
	include_once("settings.php");
	include_once("../elkvit/settings.php");
	foreach($regions as $mykey => &$myvalue) {      //Loop through the array (the "lines")
		if (file_exists('files/br_'.$mykey.'.gif')) { $name = 'files/br_'.$mykey.'.gif'; }
		if (file_exists('files/br_'.$mykey.'.jpeg')) { $name = 'files/br_'.$mykey.'.jpeg'; }
		if (file_exists('files/br_'.$mykey.'.jpg')) { $name = 'files/br_'.$mykey.'.jpg'; }
		if (file_exists('files/br_'.$mykey.'.png')) { $name = 'files/br_'.$mykey.'.png'; } 
		$url_link = file_get_contents('files/url_'.$mykey.'.txt');
		$myarr = logs2stat($mykey, $date1, $date2);
		$loads = $myarr[0];
		$clicks = $myarr[1];
		if ($loads > 0) {
			$clicks_percent = round(($clicks / $loads * 100), 1);
		} else { $clicks_percent = 0; } //чтобы не было деления на 0
		$clients_elkvit = htmlspecialchars(file_get_contents('../elkvit/'.$forms_elkvit[$mykey].'.txt'));
		$clients_percent = round(($loads / $clients_elkvit * 100), 1);
		$output = "<style> .brimg-".$mykey.":before { content: url(\"".$name."?".$loads."\"); } </style>";
		$output .= "<tr><td>".$myvalue." <div class=\"brimg-".$mykey."\"><a href=\"".$url_link."\" target=\"blank\"><img src=\"".$name."?".$loads."\" class=\"backoffice_controls\" style=\"max-height:24px\"></div></td>";
		$output .= "<td style=\"background-color:#f2f9ffc4\"><a class=\"formatme\" href=\"files/stats_".$mykey.".txt\" target=\"_blank\">".$loads."</a></td><td class=\"formatme\">".$clicks."</td><td class=\"formatme\">".$clicks_percent."</td>";
		$output .= "<td class=\"formatme\">".$clients_elkvit."</td><td class=\"formatme\">".$clients_percent."</td></tr>";
		echo $output;
	}
}

function logs2stat($terr, $date1, $date2) // перевод загрузок/кликов из логов в файлы статистики
{
	$file = file('files/log_load_'.$terr.'.txt'); //Read the file into an array. Line number => line content
	foreach($file as $lineNumber => &$lineContent) {
		$rows = explode("T", $lineContent); // отбрасываем время, берем только дату
		$loads[] = $rows[0]; // добавляем загрузку в массив загрузок
	}
	$file = file('files/log_click_'.$terr.'.txt'); //Read the file into an array. Line number => line content
	foreach($file as $lineNumber => &$lineContent) { //Loop through the array (the "lines")
		$rows = explode("T", $lineContent); // отбрасываем время, берем только дату
		$clicks[] = $rows[0]; // добавляем клик в массив кликов
	}
	$lines = explode(PHP_EOL, file_get_contents('files/stats_'.$terr.'.txt'));  //массив строк
	foreach($lines as $lineNumber => &$lineContent) {
		if ($lineContent != NULL) {
			$stats[] = explode("\t", $lineContent); // 3-мерный массив стат-данных
		}
	}
	// дополняем статс-массив датами до текущей
	$n = count($stats) - 1;
	$date_last = date_create_from_format('Y-m-d', $stats[$n][0]);
	$date_today = date_create('')->format('Y-m-d');
	$date_today = date_create_from_format('Y-m-d', $date_today);
	if ($date_last < $date_today) {
		$interval = DateInterval::createFromDateString('1 day');
		$daterange = new DatePeriod($date_last, $interval, $date_today);
		foreach($daterange as $date1){
			$date1->add(new DateInterval('P1D'));
			$stats[] = [$date1->format('Y-m-d'), 0, 0];
		}
	}
	$stats_dates = array_column($stats, 0); // разбиваем статс-массив на 3 для удобства
	$stats_loads = array_column($stats, 1);
	$stats_clicks = array_column($stats, 2);
	if (!empty($loads)) {
		foreach($stats_dates as $key => $value) {
			foreach($loads as $load) { // дополняем статистикой загрузок
				if ($load == $value) {
					$stats_loads[$key]++;
				}
			}
		}
	}
	if (!empty($clicks)) {
		foreach($stats_dates as $key => $value) {
			foreach($clicks as $click) { // дополняем статистикой кликов
				if ($click == $value) {
					$stats_clicks[$key]++;
				}
			}
		}
	}
	//$stats_new = array_map(null, $stats_dates, $stats_loads, $stats_clicks); // собрать 3 массива в 1
	$write_value = NULL;
	$loads_and_clicks = [0, 0];
	foreach($stats_dates as $key => $value) {
		$write_value .= $value."\t".$stats_loads[$key]."\t".$stats_clicks[$key].PHP_EOL; //
		$date_check = date_create_from_format('Y-m-d', $value);
		if (($date_check >= $date1) and ($date_check <= $date2)) {
			$loads_and_clicks[0] += $stats_loads[$key];
			$loads_and_clicks[1] += $stats_clicks[$key];
		}
	}
	$write_file = file_put_contents('files/stats_'.$terr.'.txt', $write_value , LOCK_EX); // переписать стату
	$write_file = file_put_contents('files/log_load_'.$terr.'.txt', ''); // обнулить лог
	$write_file = file_put_contents('files/log_click_'.$terr.'.txt', ''); // обнулить лог

	return $loads_and_clicks;
}
?>

</table>