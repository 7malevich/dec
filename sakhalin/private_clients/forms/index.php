<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Формы договоров и соглашений");
?><div class="card" style="margin-bottom:35px">
  <div class="card-body">
    <h4 class="card-title">Для собственников (пользователей) помещений в многоквартирном доме, 
избравших форму непосредственного управления домом, или не избравших форму управления домом:</h4>
    <div class="wysiwyg collapse" id="card_neposredstv">
      <div class="mb-2">
<a href="files/ykt_dog_mkd_neposredstv_202302.docx" class="linkDOC">Форма договора электроснабжения, отопления, горячего водоснабжения</a>
      </div>
    </div>
    <button data-target="#card_neposredstv" class="btn btn-link btn-more" data-toggle="collapse" type="button" aria-expanded="true" aria-controls="card_neposredstv">Документы</button>
  </div>
</div>


<div class="card" style="margin-bottom:35px">
  <div class="card-body">
    <h4 class="card-title">Для собственника или пользователя жилого (садового) дома (домовладения):</h4>
    <div class="wysiwyg collapse" id="card_domovladenie">
      <div class="mb-2">
<a href="files/ykt_dog_domovladenie_teplo_202302.docx" class="linkDOC">Форма договора горячего водоснабжения, отопления (теплоснабжения)</a><br>
<a href="files/ykt_dog_domovladenie_eteplo_202302.docx" class="linkDOC">Форма договора электроотопления</a><br>
<a href="files/ykt_dog_domovladenie_ee_202302.doc" class="linkDOC">Форма договора энергоснабжения</a><br>
<a href="files/ykt_dog_domovladenie_ee_do_202302.doc" class="linkDOC">Форма договора энергоснабжения до тех.присоединения</a>
      </div>
    </div>
    <button data-target="#card_domovladenie" class="btn btn-link btn-more" data-toggle="collapse" type="button" aria-expanded="true" aria-controls="card_domovladenie">Документы</button>
  </div>
</div>


<div class="card" style="margin-bottom:35px">
  <div class="card-body">
    <h4 class="card-title">Для граждан, потребляющих электрическую энергию (мощность) для нужд погреба, сарая, отдельно стоящего гаража, иной хозяйственной постройки (за исключением подобных объектов, входящих в состав домовладений):</h4>
    <div class="wysiwyg collapse" id="card_postroiki">
      <div class="mb-2">
<a href="files/ykt_dog_postroiki_202302.docx" class="linkDOC">Форма договора энергоснабжения на отдельно стоящие хоз.постройки, гаражи</a></div>
    </div>
    <button data-target="#card_postroiki" class="btn btn-link btn-more" data-toggle="collapse" type="button" aria-expanded="true" aria-controls="card_postroiki">Документы</button>
  </div>
</div>



<div class="card mt-5">
  <div class="card-body">
      <h4 class="card-title">Типовые формы договоров на сайте гарантирующего поставщика ПАО «Якутскэнерго»:</h4>
	<ul>
		<li>
			<a target="_blank" href="https://yakutskenergo.ru/privat_pers/standard-documents/contract-of-energy-supply.php">по договору энергоснабжения</a>
		</li>
		<li>
			<a target="_blank" href="https://yakutskenergo.ru/privat_pers/standard-documents/heat-supply-contract.php">по договору теплоснабжения</a>
		</li>
	</ul>
  </div>
</div>

<p style="margin-top:50px">См. также:</p>
<ul> 
  <li><a href="/organisations/contractual_relations/forms_contracts_agreements/" >Формы договоров для юридических лиц</a></li>
  <li><a href="/iku/forms/" >Формы договоров для исполнителей коммунальных услуг</a></li>
</ul><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>