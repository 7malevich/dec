<?
error_reporting(E_ALL);
ini_set('display_errors', 1);


?>

<?
if ($_GET)
{
$filefullpath = htmlspecialchars($_GET['url']);
} else {
$filefullpath = 'yandex.ru';
}
?>


<div style="width:640px; margin:2rem auto">
<p>
	Предполагаемый адрес:<br>
	http://172.19.126.223:48080/public/preorder/queues<br>
	или <br>
	http://212.91.198.71:48080/public/preorder/queues
</p>

<form action="<?php $_PHP_SELF ?>" method="get">
 <p>Проверить адрес: <input type="text" name="url" id="urlfield" value="yandex.ru" size="48"></p>
 <p><input type="submit"></p>
</form>



<script>
document.getElementById("urlfield").value = "<? echo $filefullpath; ?>";
	document.write('Проверка адреса <u><? echo $filefullpath; ?></u>');
</script>

<?
	$handle = curl_init($filefullpath);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
	$response = curl_exec($handle);
	$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
echo '<blockquote><h3>код ответа: '.htmlspecialchars($httpCode).'</h3></blockquote>';
?>
<blockquote>
<small>
2xx - ok<br>
3xx - ok, перемещено<br>
4xx - ok, недоступно<br>
5xx - ошибка<br>
0 - таймаут
</small>
</blockquote>
<p>Результат выполнения cURL:</p>

<?
$info = curl_getinfo($handle);
if(curl_errno($handle))
{
	echo '<span style="color:red">Ошибка cURL: ' . curl_error($handle).'</span><br>';
}
curl_close($handle); // Закрываем дескриптор
?>
<pre>
	<? print_r ($info); ?>
	<br>
	response:
	<br>
	<? print_r ($response); ?>
	<br>
	input:
	<br>
	<? var_dump(file_get_contents("php://input")); ; ?>
</pre>
</div>