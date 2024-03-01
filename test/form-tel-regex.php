<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Inputmask");
?><form action="javascript:void(0);">
  <div class="d-flex w-50">
    <input class="form-control" type="tel" autocomplete="tel" pattern="((\+|00)?[1-9]{2}|0)[1-9]( ?[0-9]){8}" placeholder="телефон">
    <button class="btn btn-primary" type="submit" onclick="javascript:void(0);">Клик</button>
  </div>
</form><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>