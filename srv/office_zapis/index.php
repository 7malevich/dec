<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Запись в офис");
?><?
include_once("settings.php");
$i = 0;
foreach ($o_addresses as $k => $v) {
    $i++;
    echo '<button type="button" class="btn btn-primary text-nowrap d-block mb-2" data-toggle="modal" data-target="#ModalZapis" onclick="step1(\''.$k.'\')">'.$i.'. '.$v.'</button>';
}
?>

<!-- Modal Запись в офис -->
<div class="modal fade" id="ModalZapis" tabindex="-1" role="dialog" aria-labelledby="ModalZapisLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header pb-0 border-bottom-0">
        <div class="mt-1 ml-1">
          <p class="modal-title my-0" id="ModalZapisLabel">Запись на очный прием в Едином расчетно-информационном центре ДЭК по адресу:</p>
          <h1 id="myOffice" class="mt-1 mb-2">
          </h1>
          <span>Внимание! Предварительная запись осуществляется по принципу «одна запись - один лицевой счет»! При наличии вопросов по нескольким лицевым счетам необходимо записаться несколько раз.</span>
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" style="padding:3px 8px 1px 8px; margin:0 0 15px 25px">
          <span aria-hidden="true" style="font-size:1.5rem; line-height:1">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="card mt-6">
  <div class="card-body pb-2 pt-3 px-3">
	<form id="form1" action="javascript:void(0);">
		<div class="form-row">
			<div class="form-group col">
				<label for="clientFIO">Ваши фамилия, имя (отчество):<span class="text-danger">*</span></label>
				<input type="text" name="name" class="form-control" id="clientFIO" placeholder="Например, Иван Петров" required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="clientPhoneNumber">Контактный телефон:<span class="text-danger">*</span></label>
				<input type="tel" name="tel" class="form-control" id="clientPhoneNumber" placeholder="Номер телефона" required>
			</div>
			<div class="form-group col-md-6">
				<label for="clientEmail">Адрес эл.почты:</label>
				<input type="email" name="email" class="form-control" id="clientEmail" placeholder="adres@mail.ru">
				<div id="clientEmailInvalidFeedback" class="invalid-feedback w-100 hidden">Введите адрес эл.почты в верном формате или&nbsp;очистите это поле</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col" id="group1"></div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6" id="group2"></div>
			<div class="form-group col-md-6" id="group3"></div>
		</div>
		<div class="form-row">
			<div class="form-group col mb-3" id="group4"></div>
		</div>
	</form>
    <div id="msg" class="alert alert-success" role="alert" style="display:none; padding:2rem 1.75rem; clear:both; align-items:center">
		<img src="ticket.svg" style="width:4rem; height:auto; margin-right:1rem"> 
		<div>
			Вы записаны на приём! &nbsp;<u>Ждём Вас <span id="msg_datetime">xx.xx.xxxx к xx:xx</span></u>.
			<h2 class="mt-0 mb-0" id="msg_pincode">XXXX</h2>
		</div>
    </div>
    <div id="msg-noslots" class="alert alert-danger" role="alert" style="display:none; padding:2rem 1.75rem; clear:both; align-items:center">
		<img src="plug_no.svg" style="width:3rem; height:auto; margin-right:1rem">
		<div>
			Уважаемые клиенты, в настоящее время нет свободных талонов для предварительной записи. Приносим извинения.
		</div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>

<script src="script.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>