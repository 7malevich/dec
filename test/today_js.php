<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<script>
var today = new Date();
var dd = today.getDate();
if ((dd>=20) && (dd<=25)) {
    document.write(dd);
} else {
	document.write('not today');
}
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>