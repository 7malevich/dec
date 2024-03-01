<!-- Modal акция кэшбэк МИР-->
<div class="modal fade" id="ModalPer" tabindex="-1" role="dialog" aria-labelledby="ModalPerTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <a href="/eaosbyt/private_clients/cabinet/"><img src="/private_clients/cabinet/privetmir_3_kvadrat2.jpg" class="m-0 p-0"></a>
      </div>
      <div class="modal-footer">
<a href="/eaosbyt/private_clients/cabinet/" class="btn btn-primary" style="color:white">Как получать кешбэк</a>
<button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Закрыть" style="color:white">Закрыть</button>
      </div>
    </div>
  </div>
<script>
var pokaz = Cookies.get('dvec_modal_mir');
if (pokaz=="1") {}
else {
	Cookies.set('dvec_modal_mir', '1', { expires: 7 });
	setTimeout(function(){
		$('#ModalPer').modal();
	}, 1500);
};
</script>
</div>