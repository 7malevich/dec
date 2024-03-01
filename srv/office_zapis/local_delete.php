<?

/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); //Подключили ядро битрикса

$qid = htmlspecialchars($_GET["qid"]); //айди офиса
$lineid = htmlspecialchars($_GET["line"]);
//$clientname = htmlspecialchars(str_replace(";", "", $_GET["cln"]));
//$clienttel = htmlspecialchars(str_replace(";", "", $_GET["clt"]));
//$clientemail = htmlspecialchars(str_replace(";", "", $_GET["cle"]));
$file = $qid.'/queue.txt';
$content = file($file); //Read the file into an array. Line number => line content
$response = 'Ошибка'; //по умолчанию

foreach($content as $lineNumber => &$lineContent) { //Loop through the array (the "lines")
	$row = explode(";", $lineContent);
	if ($lineNumber == $line) { //найдена строка
		$lineContent = $row[0].";".$row[1].";".$row[2].";".$row[3].PHP_EOL; //Modify the line
		$allContent = implode("", $content); //Put the array back into one string
		file_put_contents($file, $allContent); //Overwrite the file with the new content
		$response = 'Удалено';
		break;
	}
}
echo $response;

?>