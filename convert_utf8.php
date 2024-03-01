<?header("Content-type: text/html; charset=cp1251");?><html><head><title>Конвертация файлов</title></head><body><?

$STEP = intval($_REQUEST['step']);
if (!$STEP)
	$STEP = 1;
$strRes = '';
define('LIMIT', 10); // time limit

if (!function_exists('file_get_contents')) // PHP 4
{
	function file_get_contents($file)
	{
		return implode(file($file));
	}

	function file_put_contents($file, $str)
	{
		return ($f = fopen($file, 'wb')) && fwrite($f, $str) && fclose($f);
	}
}

if (!$_REQUEST['go'])
{
	// Обязательные проверки
	if (!function_exists('mb_convert_encoding'))
		Error('Не доступна библиотека mbstring');

	if (ini_get('mbstring.func_overload') != 2)
		Error('Значение параметра mbstring.func_overload не равно 2');

	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

	if (!defined('BX_UTF') || BX_UTF !== true)
		Error('Константа BX_UTF не определена в true в /bitrix/php_interface/dbconn.php: <br><i>define("BX_UTF", true);</i>');

	$res = $DB->Query('SHOW VARIABLES LIKE "character_set_results"');
	$f = $res->Fetch();
	if (strtolower($f['Value']) != 'cp1251')
		Error('База данных работает в кодировке, отличной от cp1251 (значение: '.$f['Value'].')');
}
else // GO!
{
	define('START_TIME', time()); // засекаем время старта

	if ($STEP < 3)
	{
		define('START_PATH', $_SERVER['DOCUMENT_ROOT']); // стартовая папка для поиска
		if ($_REQUEST['break_point']) 
			define('SKIP_PATH',$_REQUEST['break_point']); // промежуточный путь

		Search(START_PATH);
		if (defined('BREAK_POINT'))
		{
			?><form method=post id=postform>
				<input type=hidden name=step value="<?=$STEP?>">
				<input type=hidden name=go value=Y>
				<input type=hidden name=break_point value="<?=htmlspecialchars(BREAK_POINT)?>">
			</form>
			Идёт обработка...<br>
			Текущий файл: <i><?=htmlspecialchars(BREAK_POINT)?></i>
			<script>window.setTimeout("document.getElementById('postform').submit()",500);</script><? // таймаут чтобы браузер показал текст
			die();
		}
		else
		{
			$strRes = "<font color=green><b>Шаг $STEP выполнен успешно</b></font>";
			$STEP++;
		}
	}
	elseif ($STEP == 3) // Конвертация базы
	{
		if ($_REQUEST['break_point']) 
			define('SKIP_PATH',$_REQUEST['break_point']); // промежуточный путь

		require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
		$res = $DB->Query('SHOW TABLES');
		while($f = $res->Fetch())
		{
			$table = $f['Tables_in_'.$DBName];
			if (defined('SKIP_PATH') && !defined('FOUND'))
			{
				if ($table == SKIP_PATH)
					define('FOUND', true);
				else
					continue;
			}

			$DB->Query('ALTER TABLE `'.$table.'` CHARACTER SET utf8');
			$res0 = $DB->Query('SHOW FIELDS FROM `'.$table.'`');
			while($f0 = $res0->Fetch())
			{
				if (false!==strpos($f0['Type'],'char') || false!==strpos($f0['Type'],'text'))
				{
					$q = 'ALTER TABLE `'.$table.'` MODIFY `'.$f0['Field'].'` '.$f0['Type'].' CHARACTER SET utf8 '.(trim($f0['Default'])?'DEFAULT '.($f0['Null']=='YES'?'NULL':'"'.$DB->ForSql($f0['Default']).'"'):'');
					$DB->Query($q);
					if (time() - START_TIME > LIMIT)
					{
						if (!defined('BREAK_POINT'))
							define('BREAK_POINT', $table);
						break;
					}
				}
			}

			if (defined('BREAK_POINT'))
				break;
		}

		if (defined('BREAK_POINT'))
		{
			?><form method=post id=postform>
				<input type=hidden name=step value="<?=$STEP?>">
				<input type=hidden name=go value=Y>
				<input type=hidden name=break_point value="<?=htmlspecialchars(BREAK_POINT)?>">
			</form>
			Идёт обработка...<br>
			Текущая таблица: <i><?=htmlspecialchars(BREAK_POINT)?></i>
			<script>window.setTimeout("document.getElementById('postform').submit()",500);</script><? // таймаут чтобы браузер показал текст
			die();
		}
		else
		{
			$DB->Query('ALTER DATABASE `'.$DBName.'` DEFAULT CHARACTER SET utf8');
			die("
			<font color=green><b>Шаг $STEP выполнен успешно. <br>Конвертация завершена.</b></font>
			<br>Последние штрихи:
			<li>Установите в <b>/bitrix/php_interface/after_connect.php</b>: <i>\$DB-&gt;Query(&quot;SET NAMES 'utf8'&quot;);</i>
			<li>Удалите весь кеш в административной панели
			<div style='color:red'>Обязательно удалите ".__FILE__."!</div>");
		}
	}
}

$arStep = array(
	0,
	'Проверка прав доступа',
	'Конвертация файлов в UTF8',
	'Конвертация базы данных в UTF8'
)

?>
<h1>Конвертация сайта в utf8</h1>
<p>Пример скрипта, описанного в блоге: <a href="http://dev.1c-bitrix.ru/community/blogs/howto/1466.php">http://dev.1c-bitrix.ru/community/blogs/howto/1466.php</a></p>
<?=$strRes?>
<form method=post>
	<h2>Шаг <?=$STEP?></h2>
	<input type=hidden name=step value="<?=$STEP?>">
	<input type=submit name=go value="<?=$arStep[$STEP]?>">
</form>
<?

function Search($path)
{
	if (time() - START_TIME > LIMIT)
	{
		if (!defined('BREAK_POINT'))
			define('BREAK_POINT', $path);
		return;
	}

	if (defined('SKIP_PATH') && !defined('FOUND')) // проверим, годится ли текущий путь
	{
		if (0!==strpos(SKIP_PATH, dirname($path))) // отбрасываем имя или идём ниже 
			return;

		if (SKIP_PATH==$path) // путь найден, продолжаем искать текст
			define('FOUND',true);
	}

	if (is_dir($path)) // dir
	{
		$dir = opendir($path);
		while($item = readdir($dir))
		{
			if ($item == '.' || $item == '..')
				continue;

			Search($path.'/'.$item);
		}
		closedir($dir);
	}
	else // file
	{
		if (!defined('SKIP_PATH') || defined('FOUND'))
		{
			if ((substr($path,-3) == '.js' || substr($path,-4) == '.php' || basename($path) == 'trigram') && $path != __FILE__)
				Process($path);
		}
	}
}

function Process($file)
{
	global $STEP;

	// Суть условия: в папке /bitrix
	// за исключением /bitrix/templates и /bitrix/modules/search/tools/ru
	// конвертируем только те файлы, которые лежат в /lang/ru
	if (
		0 === strpos($file, $_SERVER['DOCUMENT_ROOT'].'/bitrix')
		&&
		0 !== strpos($file, $_SERVER['DOCUMENT_ROOT'].'/bitrix/templates')
		&&
		0 !== strpos($file, $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/search/tools/ru')
		&& 
		false === strpos($file,'/lang/ru/') 
	)
		return;

	if ($STEP == 1)
	{
		if (!is_writable($file))
			Error('Файл не доступен на запись: '.$file);
	}
	elseif ($STEP == 2)
	{
		$content = file_get_contents($file);
		if ($content === false)
			Error('Не удалось прочитать файл: '.$file);

		if (file_put_contents($file, mb_convert_encoding($content, 'utf8', 'cp1251')) === false)
			Error('Не удалось сохранить файл: '.$file);
		
	}
}

function Error($text)
{
	die('<font color=red>'.$text.'</font>');
}
?>
