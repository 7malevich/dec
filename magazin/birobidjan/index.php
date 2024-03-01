<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин: г.&nbsp;Биробиджан");
?><h2>Товары:</h2>

<div class="row">
  <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <img src="/magazin/files/gr_svetilniki_svetodiodnye.jpg" class="card-img-top" alt="Светильники светодиодные">
        <h4 class="card-title">Светильники светодиодные</h4>
        <a href="tovary/svetilniki_svetodiodnye/" class="btn btn-primary">Открыть</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <img src="/magazin/files/gr_energosberegayushchie_lampy_2.jpg" class="card-img-top" alt="Энергосберегающие лампы">
        <h4 class="card-title">Энергосберегающие лампы</h4>
        <a href="tovary/energosberegayushchie_lampy/" class="btn btn-primary">Открыть</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <img src="/magazin/files/gr_kabelnaya_produktsiya_kabel_2.jpg" class="card-img-top" alt="Кабельная продукция">
        <h4 class="card-title">Кабельная продукция</h4>
        <a href="tovary/kabelnaya_produktsiya/" class="btn btn-primary">Открыть</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <img src="/magazin/files/gr_transformatory_toka.jpg" class="card-img-top" alt="Трансформаторы тока">
        <h4 class="card-title">Трансформаторы тока</h4>
        <a href="tovary/transformatory_toka/" class="btn btn-primary">Открыть</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <img src="/magazin/files/gr_vodoschetchiki.jpg" class="card-img-top" alt="Водосчетчики">
        <h4 class="card-title">Водосчетчики</h4>
        <a href="tovary/vodoschetchiki_vskm/" class="btn btn-primary">Открыть</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <img src="/magazin/files/gr_prochie_tovary_2.jpg" class="card-img-top" alt="Прочие товары">
        <h4 class="card-title">Прочие товары</h4>
        <a href="tovary/prochie_tovary/" class="btn btn-primary">Открыть</a>
      </div>
    </div>
  </div>
</div>

<h2>Электросчетчики:</h2>
<div class="row">
  <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <img src="/magazin/files/gr_elektroschetchiki_odnofaznye_odnotarifnye.jpg" class="card-img-top" alt="Однофазные однотарифные">
        <h4 class="card-title">Однофазные однотарифные</h4>
        <a href="tovary/elektroschetchiki/odnofaznye_odnotarifnye/" class="btn btn-primary">Открыть</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <img src="/magazin/files/gr_elektroschetchiki_trekhfaznye_odnotarifnye.jpg" class="card-img-top" alt="Трехфазные однотарифные">
        <h4 class="card-title">Трехфазные однотарифные</h4>
        <a href="tovary/elektroschetchiki/trekhfaznye_odnotarifnye/" class="btn btn-primary">Открыть</a>
      </div>
    </div>
  </div>
</div>

<!--
<h2 class="mt-4">Услуги:</h2>

<div class="card-deck mb-4">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Проверка и программирование счетчиков</h4>
    </div>
    <div class="card-footer">
      <a href="uslugi/ustanovka_i_obsluzhivanie_su/proverka_i_programmirovanie_schetchikov/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Проверка схем подключения и опломбирование</h4>
    </div>
    <div class="card-footer">
      <a href="uslugi/ustanovka_i_obsluzhivanie_su/proverka_skhem_podklyucheniya_i_oplombirovanie/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
</div>

<div class="card-deck mb-4">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Замена приборов учета</h4>
    </div>
    <div class="card-footer">
      <a href="uslugi/ustanovka_i_obsluzhivanie_su/zamena_priborov_ucheta/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Электротехнические услуги</h4>
    </div>
    <div class="card-footer">
      <a href="uslugi/elektrotekhnicheskie_uslugi/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
</div>

<div class="card-deck mb-4">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Услуги по организации системы АИИС КУЭ</h4>
      <p class="card-text text-left">(кроме вывода на ОРЭМ)</p>
    </div>
    <div class="card-footer">
      <a href="uslugi/uslugi_po_organizatsii_sistemy_aiis_kue_krome_vyvoda_na_orem/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Прочие услуги</h4>
      <p class="card-text text-left">Снятие показаний, заверенные копии документов и другое</p>
    </div>
    <div class="card-footer">
      <a href="uslugi/prochie_uslugi/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
</div>


<h2 class="mt-5">Страховые полисы:</h2>
<div class="card-deck mb-4">
  <div class="card">
    <img src="/magazin/files/gr_strakhovaya_programma_antiklesch.jpg" class="card-img-top" alt="Страховая программа Умный дом">
    <div class="card-body text-center">
      <h3 class="card-title">«Антиклещ»</h3>
      <a href="strahovanie/strakhovaya_programma_antikleshch/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
  <div class="card">
    <img src="/magazin/files/gr_strakhovaya_programma_umnyy_dom.jpg" class="card-img-top" alt="Страховая программа Умный дом">
    <div class="card-body text-center">
      <h3 class="card-title">«Умный дом»</h3>
      <a href="strahovanie/strakhovaya_programma_umnyy_dom/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
  <div class="card">
    <img src="/magazin/files/gr_strakhovaya_programma_semeynaya_zashchita.jpg" class="card-img-top" alt="Страховая программа Семейная защита">
    <div class="card-body text-center">
      <h3 class="card-title">«Семейная защита»</h3>
      <a href="strahovanie/strakhovaya_programma_semeynaya_zashchita/" class="btn btn-primary">Открыть</a>
    </div>
  </div>
</div> -->

<div style="height:25px"></div>
<div class="bg-light border rounded d-flex mt-1 mb-4 px-3 py-4 justify-content-left align-items-center">
	<img src="/design2019/img/icons/tel1.png" style="padding-right: 1rem;opacity: 0.5">
	<span>Остались вопросы? Мы с удовольствием свяжемся с Вами, 
		<br>звоните по номеру <a href="tel:+74262220575">(42622)&nbsp;2-05-75</a> 
		<br>или пишите на <a href="mailto:pto6@eao.dvec.ru">pto6@eao.dvec.ru</a>.</span>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>