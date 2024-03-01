<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Modal");
?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Работа сайта замедлена</h4>
      </div>
      <div class="modal-body">
        Уважаемый клиент! В данный момент сайт испытывает пиковую нагрузку.
		  Обращаем ваше внимание, что помимо сайта, действуют следующие способы передачи показаний онлайн:
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить передачу на сайте</button>
      </div>
    </div>
  </div>
<script>
	setTimeout(function(){
		//$('#jusakh').trigger('click');
		$('#exampleModalCenter').modal();
	}, 3500);
</script>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>