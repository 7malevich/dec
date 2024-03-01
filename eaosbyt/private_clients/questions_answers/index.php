<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопросы и ответы");
?><p>Актуальные вопросы сгруппированы по рубрикам. Выберите тему:</p>

<ul>
  <li><a href="odn/">ОДН</a><br />
    </li>
  <li><a href="pokazaniya/">Передача показаний</a><br />
    </li>
  <li><a href="receipts/">Квитанции</a><br />
    </li>
  <li><a href="tariffs/">Тарифы</a><br />
    </li>
  <li><a href="payment/">Начисления и оплата</a><br />
    </li>
  <li><a href="supply/">Качество электроснабжения</a><br />
    </li>
  <li><a href="service/">Подключение, обслуживание</a><br />
    </li>
  <li><a href="cabinet/">Личный кабинет</a><br />
    </li>
  <li><a href="misc/">Прочие вопросы</a></li>
</ul>

<p>Задать вопрос можно <a href="../priemnaya">в Интернет-приёмной.</a></p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>