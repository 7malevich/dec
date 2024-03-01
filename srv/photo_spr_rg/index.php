<?
/*
сверка кучи файлов (jpg-фото) со списком.
Кучу положить в "check"
Список положить в codes.txt
*/
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

function cut($n) //удаляем спецсимволы из загруженных в файле кодов
{
    return (trim($n));
}

echo "<pre>Starting...<br><br>";

$arr_files = array();
/*foreach (new DirectoryIterator("check") as $file) { //не работает с русским юникодом
	if ($file->isFile()) {
		$filename = pathinfo($file->getFilename());
		array_push($arr_files,$filename);
	}
} */

foreach (array_filter(glob('check/*'), 'is_file') as $file) {
	$filename = $file;
	if (substr($file, -4) == 'jpeg') { // меняем jpeg на jpg
		$filename = substr($file, 0, -4).'jpg';
		echo 'Renaming '.$file.' to '.$filename.'<br>';
		rename($file, $filename);
	}
	$filename = substr($filename, 6); //убрать папку в имени
	array_push($arr_files,$filename);
}


if (!$arr_files) { 
	echo "Нет файлов."; 
} /*else {
	print_r ($arr_files);
}*/

$file_codes = 'codes.txt';
$arr_codes = explode(PHP_EOL, file_get_contents($file_codes));
$arr_codes = array_map('strval', $arr_codes);
$arr_codes = array_map('cut', $arr_codes); //удаляем спецсимволы из загруженных в файле кодов

//print_r ($arr_codes);

foreach ($arr_files as $file) {
	$filename = substr($file, 0, -4); //убрать расширение
	echo $filename.": ";
	if (in_array($filename, $arr_codes, true)) {
		rename('check/'.$file, 'ok/'.$file);
		echo "ok";
	} else {
		//rename('check/'.$file, 'not_found/'.$file);
		echo "не найдено";
	}
echo "<br>";

}

?>