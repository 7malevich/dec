<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как снимать и передавать показания приборов&nbsp;учёта");
?><div class="spoiler folded">
	<h3 class="sp-hdr">Как перейти к странице передачи показаний:<br><small>(нажмите, чтобы развернуть)</small></h3>
</div>
<div class="spoiler-text mb-5">
	<p><strong>1. Нажмите кнопку «Передать показания» на стартовой странице раздела «Частным клиентам»:</strong></p>
	<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/c01.png" alt="Откройте ссылку «Передача показаний»" /></div>
	<p><strong>Или выполните поиск в Интернете по фразе «ДЭК передать показания»:</strong></p>
	<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/c03.png" alt="Или выполните поиск в Интернете по фразе «ДЭК передать показания»" /></div>
	<p>&nbsp;</p>
	<p><strong>2. На открывшейся странице выберите Ваш регион (филиал):</strong></p>
	<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/c02.png" alt="Выберите Ваш филиал" /></div>
</div>


<div class="spoiler folded">
	<h3 class="sp-hdr">Передача показаний приборов учёта на сайте:</h3>
</div>
<div class="spoiler-text mb-5">
  <p><strong>1. Укажите данные по вашему лицевому счету и прибору учета:</strong></p>
  <ul>
    <li>Введите номер лицевого счета в том виде, в  котором он указан в квитанции;</li>
    <li>Введите номер счетчика, по которому передаются  показания (в том виде, как он указан в квитанции);</li>
    <li>Подтвердите введенные данные с помощью кнопки «Отправить»:</li>
</ul>
<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/e01.png" alt="Укажите данные по вашему лицевому счету и прибору учета" /></div>
<p>Если введенный Вами номер лицевого счета не будет найден в системе, Вы получите сообщение:</p>
<p style="text-align:center; padding:10px; margin:1.2rem 0; border:1px solid red">Ошибка. Не найден номер лицевого счета.</p>
<p>Если система найдет номер лицевого счета, но не обнаружит введенного номера счетчика, Вы получите сообщение:</p>
<p style="text-align:center; padding:10px; margin:1.2rem 0; border:1px solid red">Ошибка. Не найден прибор учета. </p>
<!--
<p>Внимание! Система выдаст ошибку «Не найден прибор учета» также в том случае,  если <span style="color:red">истек межповерочный интервал</span> Вашего счетчика.</p>
-->
<p>После  правильного ввода лицевого счета и номера ПУ, откроется форма ввода показаний.</p>
<p>&nbsp;</p>
<p><strong>2. Введите текущие показания:</strong></p>
<ul>
  <ul>
    <li>Если счетчик однотарифный, вам предлагается ввести показания по суточному тарифу;</li>
    <li>Если счетчик двухтарифный, вам предлагается ввести данные по  дневному и ночному тарифам:</li>
  </ul>
</ul>
<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/e02.png" alt="Введите текущие показания" /></div>
<p>Цифры в  серых полях – это предыдущие показания Вашего счетчика, сохраненные в системе.</p>
<p><strong>Вводите показания с лидирующими нулями и без дробной части:</strong></p>
<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/e03.png" alt="Вводите показания с лидирующими нулями и без дробной части" /></div>
<p>После ввода показаний нажмите кнопку «Отправить». </p>
<p>&nbsp;</p>
<p><strong>3. Подтвердите введенные данные</strong></p>
<p>На следующем экране Вы увидите, какое количество киловатт-часов  будет учтено системой. Еще раз проверьте введенные вами данные и нажмите «Корректировать», если обнаружите ошибку. Если всё введено правильно, нажмите «Подтвердить».</p>
<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/e04.png" alt="Нажмите «Корректировать» или «Подтвердить»" /></div>
<p>Если введенные вами показания меньше предыдущих, система предупредит Вас об этом: </p>
<p style="text-align:center; padding:10px; margin:1.2rem 0; border:1px solid #efefef; color:red">Введенные показания по одной из шкал меньше  ранее переданных показаний.<br />
Если Вы считаете, что внесенные данные верны, нажмите кнопку  &quot;Подтвердить&quot;.<br />
Для корректировки данных нажмите кнопку &quot;Корректировать&quot;.</p>
<p>Вы должны подтвердить свое согласие с рассчитанным системой объемом потребления, <strong>нажатием кнопки «Подтвердить»</strong>. Если вы не согласны или допустили ошибку при введении данных, вы можете исправить их нажатием кнопки «Корректировать».</p>
<p>После подтверждения вами показаний, система  передает их в базу данных и выводит сообщение об успешной операции:</p>
<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/r01.png" alt="Сообщение «Показания приняты»" /></div>
<p>Передача  показаний по другим ресурсам аналогична передаче показаний по электричеству. <br>
Перейдите  на нужную Вам страницу передачи показаний, выбрав ее <u>в меню слева</u>:</p>
<div style="text-align:center; margin:1.2rem 0"><img src="/pokazaniya/menu.png" alt="Выберитети нужную страницу в меню" /></div>
</div>


<div class="spoiler folded">
	<h3 class="sp-hdr">Памятка по снятию показаний с электросчётчиков <span class="text-info">«МИРТЕК-12-РУ»</span><br><small>(нажмите, чтобы развернуть)</small>:</h3>
</div>
<div class="spoiler-text mb-5">
<p>  Информация  на дисплее счетчика изменяется с интервалом 10 секунд, но для удобства можно  нажать на синюю кнопку, что бы перелистнуть следующий кадр Для того, чтобы снять  показания, необходимо пролистать кадры до следующего вида:</p>
<div class="m-4 text-center"><img src="/pokazaniya/mirtek_0.jpg" width="330" alt="счетчик"></div>
<p> Для потребителей, рассчитывающихся по  одноставочному тарифу, необходимо отражение на дисплее следующей информации –  в левом верхнем углу надпись
<mark>∑Т2</mark> и в  нижней части по середине <mark>kW∙h</mark> (Рис.1)</p>

<div class="m-4 text-center"><img src="/pokazaniya/mirtek_1.jpg" width="330" alt="рисунок 1"><br>Рис. 1</div>

<p>Для потребителей, рассчитывающихся по  одноставочному тарифу, <strong>дифференцированному по двум зонам суток (день, ночь)</strong> необходимо отражение на дисплее следующей информации – в левом верхнем углу  надпись 
  <mark>Т1</mark> (день), <mark>Т2</mark> (ночь) и в нижней части по середине <mark>kW∙h</mark>, (Рис. 2, Рис. 3)</p>
<div class="m-4 text-center"><img src="/pokazaniya/mirtek_2.jpg" width="330" alt="рисунок 2"><br>Рис. 2</div>
<div class="m-4 text-center"><img src="/pokazaniya/mirtek_3.jpg" width="330" alt="рисунок 3"><br>Рис. 3</div>

<p>  В срок с 20 по 25 число каждого месяца <a href="../sposoby/">передать</a> снятые показания в ПАО «ДЭК» или свою Управляющую  компанию (ТСЖ, ТСН, ЖСК).</p>
</div>


<div class="spoiler folded" id="clickme2">
	<h3 class="sp-hdr">Памятка по снятию показаний с электросчётчиков <span class="text-info">«ЭНЕРГОМЕРА СЕ 208»</span>:</h3>
</div>
<div class="spoiler-text mb-5">
	<div class="m-4 text-center"><img src="/pokazaniya/em_1.jpg" width="330" alt="счетчик Энергомера"></div>
	<ol>
	  <li>Нажмите кнопку «КАДР» на счётчике, включится  подсветка ЖКИ.</li>
	  <li>На ЖКИ будут отображены показания электроэнергии  (рис.1-3).</li>
	  <li>Смена кадров выполняется кнопкой «ПРСМ». Порядок  переключения показан на рисунке ниже:</li>
	</ol>
	<div class="m-4 text-center"><img src="/pokazaniya/em_2.png" width="540" alt="порядок смены кадров на дисплее счетчика"></div>
	<div class="m-4 text-center"><img src="/pokazaniya/em_3.jpg" alt="код 1.8.0">
		<br>Код 1.8.0 означает, что на экране отображаются  показания электроэнергии в сумме по всем тарифам.</div>
	<div class="m-4 text-center"><img src="/pokazaniya/em_4.jpg" alt="код 1.8.1">
		<br>Код 1.8.1 означает, что на экране отображаются показания электроэнергии по тарифу 1.
	</div>
	<div class="m-4 text-center"><img src="/pokazaniya/em_5.jpg" alt="код 1.8.2">
		<br>Код 1.8.2 означает, что на экране отображаются показания электроэнергии по тарифу 2.
	</div>
</div>


<div class="spoiler folded">
	<h3 class="sp-hdr">Памятка по снятию показаний с электросчётчиков <span class="text-info">«Ротек РТМ-01»</span>:</h3>
</div>
<div class="spoiler-text mb-5">
    <div class="m-4 text-center"><img src="/pokazaniya/rotek_1.jpg" width="330" alt="снятие показаний со счетчика Ротек РТМ-01"></div>
	<p>Информация на дисплее счетчика изменяется с  интервалом 5 секунд, но для удобства можно нажать на кнопку «Просмотр» чтобы  перелистнуть следующий кадр. Для того, чтобы снять  показания, необходимо  пролистать кадры до следующего вида:</p>
	<p>Для потребителей, рассчитывающихся по  одноставочному тарифу, необходимо отражение на дисплее следующей информации  – в левом верхнем углу код <strong>15.8.0</strong>.</p>
    <div class="m-4 text-center"><img src="/pokazaniya/rotek_2.jpg" width="330" alt="Ротек РТМ-01, код 15.8.0">
		<br>
		Код 15.8.0
	</div>
	<p>Для потребителей, рассчитывающихся по одноставочному тарифу,  дифференцированному <strong>по двум зонам суток (день, ночь),</strong> необходимо отражение на дисплее следующей информации – в левом верхнем углу код 15.8.1 соответствует расходу электроэнергии за день, код 15.8.2 соответствует расходу электроэнергии за ночь.</p>
    <div class="m-4 text-center"><img src="/pokazaniya/rotek_3.jpg" width="330" alt="Ротек РТМ-01, код 15.8.1">
		<br>
		Код 15.8.1
	</div>
    <div class="m-4 text-center"><img src="/pokazaniya/rotek_4.jpg" width="330" alt="Ротек РТМ-01, код 15.8.2">
		<br>
		Код 15.8.2
	</div>
</div>


<div class="spoiler folded">
	<h3 class="sp-hdr">Инструкция по получению показаний со счётчиков <span class="text-info">«Матрица»</span>:</h3>
</div>
<div class="spoiler-text mb-5">
	<a class="linkPDF" href="/organisations/cabinet/ses_matrica.pdf" target="_blank">Инструкция по получению показаний со счетчиков «Матрица»</a>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>