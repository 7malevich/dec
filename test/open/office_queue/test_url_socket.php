<?
error_reporting(E_ALL);
ini_set('display_errors', 1);


?>

<?
if ($_GET)
{
$filefullpath = htmlspecialchars($_GET['url']);
} else {
$filefullpath = 'yandex.ru:443';
}
?>


<div style="width:640px; margin:2rem auto">
<p>
	Предполагаемый адрес:<br>
	172.19.126.224:48080/public/preorder/queues<br>
	или <br>
	212.91.198.71:48080/public/preorder/queues
</p>

<form action="<?php $_PHP_SELF ?>" method="get">
 <p>Проверить адрес: <input type="text" name="url" id="urlfield" value="yandex.ru:443" size="48"></p>
 <p><input type="submit"></p>
</form>



<script>
document.getElementById("urlfield").value = "<? echo $filefullpath; ?>";
	document.write('Проверка адреса <u><? echo $filefullpath; ?></u> через fsockopen:');
</script>

<pre>
<?
var_dump(fsockopen($filefullpath));
?>
</pre>

</div>