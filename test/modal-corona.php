<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Modal");
?>
<!-- Modal -->
<div class="modal fade" id="ModalCorona" tabindex="-1" role="dialog" aria-labelledby="ModalCoronaTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
		  <img src="/design2019/img/upload/br_corona_w640.jpg" style="margin-bottom:1rem">
        В связи с распространением коронавирусной инфекции просим воздержаться от визитов 
в офисы ДЭК и пользоваться удобными сервисами для дистанционного взаимодействия с компанией. 
Эти сервисы позволяют решить практически все вопросы без посещения центров приема клиентов.
      </div>
      <div class="modal-footer">
		  <a href="/dalsbyt/private_clients/online" class="btn btn-primary" style="color:white">Сервисы дистанционного обслуживания ДЭК</a>
      </div>
    </div>
  </div>
<script>
var pokaz = Cookies.get("corona");
if (pokaz=="1") {}
else {
	Cookies.set("corona", 1, { expires: 3 });
	setTimeout(function(){
		$('#ModalCorona').modal();
	}, 2500);
};
</script>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>