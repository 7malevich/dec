<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кто выставляет счета за отопление и подогрев воды в моём доме? (Благовещенск)");
?><div id="msg-no" class="alert alert-danger" role="alert" style="display:none; padding:2rem 1.75rem; clear:both; align-items:center">
		<!-- <img src="queue/plug_no.svg" style="width:3rem; height:auto; margin-right:1rem"> -->
		<div>
			Адрес не найден!
		</div>
</div>
<!-- «Кто выставляет счета за отопление и подогрев воды в моём доме?»  -->

<style>
.myfadein {
    opacity: 1;
    transition: opacity 2s linear;
}
</style>

<a name="scroll_here" id="scroll_here"></a>
<div class="card mt-4">
	<div class="card-body">
		<h3 class="card-title">Введите улицу, дом:</h3>
		<form id="form1" action="javascript:void(0);">
	<div class="form-row">
<!--		<div class="form-group col-md-6">
				<label for="clientPhoneNumber">Название УК:</label>
				<input type="text" class="form-control" id="naim_uk" name="naim_uk" placeholder="например: Единство">
		</div> -->
		<div class="form-group col-md-9">
			<!-- <label for="clientEmail">Улица, дом:</label> -->
			<input type="text" class="form-control" id="addr" name="addr" placeholder="например: Железнодорожная">
		</div>
		<div class="form-group col-md-3">
			<button id="myButton" class="btn btn-primary myfadein" type="submit">Подгрузка...</button>
			<span id="mytime" class="text-white"></span>
		</div>
	</div>
	<!-- <div class="form-row">
		<div class="form-group col text-center mt-2 mb-0">
			<button id="myButton" class="btn btn-primary" type="submit">Искать информацию</button>
		</div>
	</div> -->
		</form>
	</div>
</div>
<!-- <p>Внимание! Информация актуальна для жителей г. Благовещенска.</p> -->
<div id="msg-no" class="alert alert-danger mt-4" role="alert" style="display:none; padding:2rem 1.75rem; clear:both; align-items:center">
	<!-- <img src="queue/plug_no.svg" style="width:3rem; height:auto; margin-right:1rem"> -->
	<div>
		Адрес не найден!
	</div>
</div>

<div id="myresult" style="margin-top:35px">
</div>

<script src="script.js?48"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>