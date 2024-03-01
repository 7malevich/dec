<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><div class="container">
  <h3>Popover Example</h3>
  <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script>
	setTimeout(function(){
	$('[data-toggle="popover"]').popover();  
	}, 1500);
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>