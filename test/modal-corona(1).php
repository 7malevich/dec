<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Modal");
?><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCorona">
  Launch modal
</button>

<!-- Modal -->
<div class="modal fade" id="ModalCorona" tabindex="-1" role="dialog" aria-labelledby="ModalCoronaTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
		<img src="/design2019/img/upload/br_corona_w640.jpg" style="margin-bottom:1rem">
<span class="text-danger"><b>Внимание! По техническим причинам приостановлен прием клиентов в 
Едином расчетно-информационном центре ПАО «ДЭК» по адресу
	г. Владивосток, ул. Октябрьская, д.8 в период с 24.09.2020 по 01.10.2020 включительно.</b>
В случае необходимости рекомендуем обращаться в офисы по адресам: ул. Фирсова д.4; ул. Калина д.45.</span>
<br>
		<b>Подать заявление и получить все необходимые документы можно на сайте компании в разделе "Интернет приемная".</b> 
		Передать показания, оплатить счета и получать квитанции в электронном виде можно через онлайн-сервисы компании.
      </div>
		<div class="modal-footer">
		<a href="<?=SITE_DIR?>private_clients/priemnaya" class="btn btn-info btn-sm" style="color:white;font-size:1rem">Интернет-приёмная</a>
		<a href="<?=SITE_DIR?>private_clients/online" class="btn btn-primary btn-sm" style="color:white;font-size:1rem">Онлайн-сервисы</a>
		<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Закрыть" style="color:white;font-size:1rem">Закрыть</button>
		</div>
    </div>
  </div>

</div>
<!-- --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>