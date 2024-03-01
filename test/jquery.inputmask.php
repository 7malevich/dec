<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Inputmask");
?><script src="/design2019/js/jquery.inputmask.min.js"></script>

<input type="text" size="30" name="ORDER_PROP_129" id="soa-property-129" autocomplete="tel" placeholder="" class="form-control bx-soa-customer-input bx-ios-fix">

<script>
$(function() {
	$('#soa-property-129').inputmask({"mask": "7 (999) 999-99-99"});
});
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>