<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo '<PRE>Hello<BR>';
$filename = $_SERVER["DOCUMENT_ROOT"]."/telefon/sotrud.csv"; // файл должен быть в юникоде

$struktura = []; // набор линейных массивов

function otd_stroka($otd1, $otd2) { // формируем строку-ветку отделов
	$otd_part1 = trim($otd1);
	$otd_part2 = trim($otd2);
	if ( $otd_part2 ) {
		$otd = $otd_part1 . '/' . $otd_part2;
	} else {
		$otd = $otd_part1;
	}
  return $otd;
}
$array = explode(PHP_EOL, file_get_contents($filename));
$size_i = count($array); // кол-во строк сотрудников
for($i = 0; $i < $size_i; ++$i) { ////////////////////////// собрать структуру отделов
	$string = $array[$i];
	if ( trim($string) !== '' ) { // если строка не пуста
		$row = explode(";", $string);
		$otd = otd_stroka($row[1], $row[2]);
		if ( !in_array($otd, $struktura, true) ) {
			$struktura[] = $otd; // добавить отдел в структуру
		}
	}
}
sort($struktura, SORT_NATURAL | SORT_FLAG_CASE); // сортировать отделы
foreach ($struktura as &$value) {
	$value = explode("/", $value); // преобразовать строковое представление в массивы
}
unset($value);

$struktura3 = []; // набор линейных массивов, разложенных с шагом 1 (набор всех комбинаций)
$size_i = count($struktura);
for ($i = 0; $i < $size_i; ++$i) {
	$size_j = count($struktura[$i]);
	for ($j = 0; $j < $size_j; ++$j) {
		$temp = [];
		for ($k = 0; $k <= $j; ++$k) { // собрать все комбинации
			$temp[] = $struktura[$i][$k];
		}
		if (!in_array($temp, $struktura3)) { // без дублей
			$struktura3[] = $temp;
		}
	}
}
//print_r($struktura3);

$struktura4 = []; // структура с указанием родительских отделов
$size_j = count($struktura3);
for ($j = 0; $j < $size_j; ++$j) {
	$i = count($struktura3[$j])-1;
	$temp = ($struktura3[$j]);
	$temp2 = array_pop($temp);
	$struktura4[] = ['id' => $j, 'name' => $struktura3[$j][$i], 'str' => $temp];
}
//print_r($struktura4);

for ($i = 0; $i < $size_j; ++$i) {
	for ($j = 0; $j < $size_j; ++$j) {
		if ($struktura4[$i]['str'] == $struktura3[$j]) { // вписать ссылку на родителя
			$struktura4[$i]['parent'] = $j;
		}
	}
}
//print_r($struktura4);

$struktura5 = [];
for ($i = 0; $i < $size_j; ++$i) { // создать структуру только с нужными данными
	if (!isset($struktura4[$i]['parent'])) $struktura4[$i]['parent'] = -1;
	$struktura5[$i] = [
		'name' => $struktura4[$i]['name'], 
		'id' => $struktura4[$i]['id'], 
		'parent' => $struktura4[$i]['parent'], 
		'level' => count($struktura4[$i]['str']), 
		'sort' => 1000000
	];
}
//print_r($struktura5);

/*function buildTree(array &$elements, $parentId = -1) { // создать структуру-дерево
    $branch = array();
    foreach ($elements as $element) {
        if ($element['parent'] == $parentId) {
            $children = buildTree($elements, $element['id']);
            if ($children) {
                $element['children'] = $children;
            }
            $branch[$element['id']] = $element;
            unset($elements[$element['id']]);
        }
    }
    return $branch;
}
$struktura6 = buildTree($struktura5);*/
//print_r($struktura6);

$stolbcy = [];
$size_i = count($array); 
for($i = 0; $i < $size_i; ++$i) {
    $string = $array[$i];
	if ( trim($string) !== '' ) { // если строка не пуста
		$row = explode(";", $string);
		$otd = explode("/", otd_stroka($row[1], $row[2]));
		//$stolbcy['otd'] = array_search($otd, $struktura3); // вписать сотруднику индекс отдела
		$otd2 = []; // собрать индексы на структуру отделов у сотрудника
		$size_j = count($otd);
		for($j = 0; $j < $size_j; ++$j) {
			$otd2[] = array_search($otd, $struktura3);
			$fruit = array_pop($otd);
		}
		$otd2 = array_reverse($otd2);
		$stolbcy['otd_str'] = $otd2;
		$stolbcy['fio'] = trim($row[3]);  //удалить спецсимволы и пробелы на концах
		$stolbcy['dolzh'] = trim($row[4]);
		$stolbcy['tel_vn'] = trim($row[5]);
		$stolbcy['tel_vsh'] = trim($row[6]);
		$stolbcy['email'] = trim($row[7]);
		$stolbcy['d_rozhd'] = substr(trim($row[8]), 0, 10); // отрезать время из даты
		$stolbcy['sort'] = intval(preg_replace('/[^\d]/', '', $row[9])); // убрать пробел в числе
		$stolbcy['status'] = trim($row[10]);
		$stolbcy['kab'] = trim($row[11]);
		$stolbcy['adr'] = trim($row[12]);
		$stolbcy['tel_mob'] = trim($row[13]);
		$stolbcy['lync'] = trim($row[14]);
		$sotr[$i] = $stolbcy;
		
		if ( $struktura5[$otd2[$size_j-1]]['sort'] > $stolbcy['sort'] ) { // вписать сортировку в отдел (найти наименьш.сорт.из сотрудников)
			$struktura5[$otd2[$size_j-1]]['sort'] = $stolbcy['sort'];
		}
	}
}

unset($array);
unset($stolbcy);
unset($struktura);
unset($struktura3);
unset($struktura4);

function SortStruk(&$str, $j, $minsort = 1000000) { // найти в дочерних отдел с мин.сортировкой и вписать себе
	if ($str[$j]['sort'] > $minsort) { 
		$str[$j]['sort'] = $minsort;
	}
	if ($str[$j]['parent'] < 0) {
		return $minsort;
	}
	SortStruk($str, $str[$j]['parent'], $str[$j]['sort']);
	return $minsort;
}
$size_j = count($struktura5);
for($j = 0; $j < $size_j; ++$j) { SortStruk($struktura5, $j); }
//

usort($struktura5, "custom_sort_stru");  // сортировать отделы по сортировке
function custom_sort_stru($a,$b) {
	if ($a['sort']>$b['sort']) { return 1; }
	if ($a['sort']<$b['sort']) { return -1; }
	if ($a['sort']==$b['sort']) { // если сортировка равна, то по алфавиту
		return strcasecmp($a['name'], $b['name']);
	}
}
//print_r($struktura5);

usort($sotr, "custom_sort_sort");  // сортировать сотрудников
function custom_sort_sort($a,$b) {  // 
          //return $a['sort']>$b['sort'];
	if ($a['sort']>$b['sort']) { return 1; }
	if ($a['sort']<$b['sort']) { return -1; }
	if ($a['sort']==$b['sort']) { // если сортировка равна, то по алфавиту
		return strcasecmp($a['fio'], $b['fio']);
	}
}

$str_id_map = []; // составить карту "старый id : новый id"
$size_j = count($struktura5);
for($j = 0; $j < $size_j; ++$j) {
	$str_id_map[$struktura5[$j]['id']] = $j;
}
for($j = 0; $j < $size_j; ++$j) { // перезаписать id в структуре
	$struktura5[$j]['id'] = $j;
	if ($struktura5[$j]['parent']>=0) { $struktura5[$j]['parent'] = $str_id_map[$struktura5[$j]['parent']]; }
}
//print_r($str_id_map);

$size_i = count($sotr); // вписать сотрудникам новые ключи структуры отделов
for($i = 0; $i < $size_i; ++$i) {
	foreach ($sotr[$i]['otd_str'] as &$value) {
		$value = $str_id_map[$value];
	}
	unset($value);
}

///////////////////////////////////////////////////////////////////////////////////////

$date = date('d.m.Y H:i:s'); // текущая
$unix_timestamp = filemtime($filename); // дата изм CSV
$datetime = new DateTime("@$unix_timestamp");

$itog = [];
$itog['csv_modified'] = $datetime->format('d.m.Y H:i:s');
$itog['vygruzheno'] = $date;
//$itog['struktura'] = ['id' => -1, 'name' => 'Структура', 'parent' => '', 'children' => $struktura6];
$itog['sotrudniki'] = $sotr;
$itog['otdely'] = $struktura5;
file_put_contents($_SERVER["DOCUMENT_ROOT"]."/telefon/sotrud.json", json_encode($itog, JSON_UNESCAPED_UNICODE), LOCK_EX);

//echo '<br>CSV @ ' . $datetime->format('d.m.Y H:i:s');;
$mess = 'Файл CSV на дату ' . $itog['csv_modified'];
mail('pressa8@dvec.ru', 'Тел.справочник: ОК', $mess);
echo '<br>ok @ ' . $date;
?>