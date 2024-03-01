<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("JQuery Mask Plugin");
?><script src="/design2019/js/jquery.mask.min.js"></script>

<input type="text" size="30" name="ORDER_PROP_129" id="soa-property-129" autocomplete="tel" placeholder="" class="form-control bx-soa-customer-input bx-ios-fix">

<script>
$(function() {
	$('#soa-property-129').mask('+7 (000) 000-00-00');
});
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>