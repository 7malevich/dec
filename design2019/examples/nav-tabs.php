<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Уведомления собственникам помещений");
?>  <div class="rates-nav">
    <ul class="nav nav-tabs" id="rates-nav" role="tablist">
      <li class="nav-item">
        <a class="nav-link text-decoration-none active" style="font-style: normal;" id="opt1-tab" data-toggle="tab" href="#opt1" role="tab" aria-controls="opt1" aria-selected="true">Все</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-decoration-none" style="font-style: normal;" id="opt2-tab" data-toggle="tab" href="#opt2" role="tab" aria-controls="opt2" aria-selected="false">О прямых договорах</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-decoration-none" style="font-style: normal;" id="opt3-tab" data-toggle="tab" href="#opt3" role="tab" aria-controls="opt3" aria-selected="false">О приостановлении услуг</a>
      </li>
    </ul>
  </div>
  <div class="tab-content" id="rates-nav-content">
    <div class="tab-pane fade show active" id="opt1" role="tabpanel" aria-labelledby="opt1-tab">
spisok 1
    </div>
    <div class="tab-pane fade" id="opt2" role="tabpanel" aria-labelledby="opt2-tab">
spisok 2
    </div>
    <div class="tab-pane fade" id="opt3" role="tabpanel" aria-labelledby="opt3-tab">
spisok 3
    </div>
  </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>