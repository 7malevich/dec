<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Уведомления о введении ограничения режима потребления");
?><img src="ruki-i-komp.jpg" style="width:100%; margin-bottom:1rem">
<p style="margin:10px 0 25px 0">Уважаемые клиенты! ПАО «Дальневосточная энергетическая компания» упростило процедуру уведомления о вводе ограничений. 
В соответствии с действующим законодательством, клиенты могут быть уведомлены об ограничении посредством email-сообщения и SMS-сообщения. Уведомление открывается по ссылке в SMS,
также его можно открыть на этой странице, введя код из SMS.</p>

<?php
if(!empty($_SERVER['QUERY_STRING'])) {
	echo '<div style="padding:15px; margin-bottom:15px; background-color:#eee;border: 1px solid #dcdcdc;">';

	$filefullpath = 'https://www.dvec.ru/off/pdf/uvedomleniya/'.$_SERVER['QUERY_STRING'].'.pdf';

	$handle = curl_init($filefullpath);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
	/* Получить HTML или что там в урле */
	$response = curl_exec($handle);
	$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
//print_r ($httpCode);
	if($httpCode < 400) {
	header('Location: '.$filefullpath);
	echo '<p style="font-size:14pt; line-height:16pt; text-align:left"><a href="'.$filefullpath.'" class="linkPDF" target="blank">Открыть уведомление о введении ограничения режима потребления электрической энергии «'.$_SERVER['QUERY_STRING'].'»</a></p>'; 
	}
	else {
		echo '<p style="font-size:13pt; line-height:15pt; text-align:left; color:#b42b0a">Уведомление по коду «'.$_SERVER['QUERY_STRING'].'» не найдено!</p>';
	}
	curl_close($handle);
	echo '</div>';
}
?>


<div style="float:left; width:355px">
<p>Найти файл уведомления по коду из SMS:</p>
<div style="padding:5px 15px; background-color:#eee;border: 1px solid #dcdcdc; width:235px">
<input id="filenamesearch" type="text" min="1" max="5" required>
<button onclick="myFunction()">OK</button>

<script>
function myFunction() {
	var inpObj = document.getElementById("filenamesearch");
	var url3 = "\/"+"organisations"+"\/"+"ogranicheniya"+"\/\?"+inpObj.value;
url3=url3.replace(/\/+/gi, '\/');
window.location.href = url3;
}
</script>
</div>
</div>

<div style="float:left; width:300px">
<p>Пример кода в SMS:</p>
	<img src="sms_help.jpg" style="width:250px" />
</div>

<div style="clear:both;height:35px"></div>
<div class="alert alert-info mb-4">
В случае невозможности перехода по ссылке для просмотра уведомления об ограничении, Вам необходимо <a href="/organisations/service/">связаться с сотрудником ПАО «ДЭК»</a> по работе с дебиторской задолженностью.
</div>



<div class="spoiler folded"><h3 class="sp-hdr">Основные изменения, внесенные в порядок введения ограничения режима потребления электрической энергии: 
	<br><small>(нажмите, чтобы читать далее)</small></h3></div>
<div class="spoiler-text">
<p>С 29 сентября 2017 года вступило в силу постановление Правительства РФ от 24.05.2017 № 624 «О внесении изменений в некоторые акты Правительства РФ по вопросам введения полного и (или) частичного ограничения режима потребления электрической энергии, а также применения печатей хозяйственных обществ», которое утверждает изменения в порядок введения ограничения режима потребления электрической энергии (далее - Постановление № 624).
</p>
<p>Указанные изменения приняты в развитие Федерального закона от 03.11.2015 № 307-ФЗ «О внесении изменений в отдельные законодательные акты Российской Федерации в связи с укреплением платежной дисциплины потребителей энергетических ресурсов» и преследуют целью обеспечение своевременной оплаты за электрическую энергию и услуги по ее передаче.
</p>

<h3>Сокращение сроков и этапов процедуры ограничения электроснабжения потребителя </h3>
<p>Процедура введения ограничения в общем случае сокращается до одного этапа – введения полного ограничения потребления электроэнергии.&nbsp; Частичное ограничение вводится только в отношении потребителей, ограничение режима потребления которых может привести к экономическим, экологическим или социальным последствиям, и иных потребителей, имеющих акт согласования технологической и (или) аварийной брони. Полное ограничение режима потребления вводится сетевой организацией после предварительного однократного уведомления, в котором отражается исчерпывающая информация о предстоящем ограничении (дата, время, уровень ограничения и т.п.).
</p>

<h3>Ограничение за любой размер задолженности </h3>
<p>Энергосбытовая компания имеет право инициировать ограничение электроснабжения потребителя <strong>– </strong>должника при образовании задолженности в любом объеме без ожидания ее накопления.
</p>

<h3>Установление обязанности самоограничения потребителем </h3>
<p>Постановление № 624 вводит обязанность потребителя, в случае получения соответствующего уведомления инициатора, самостоятельно обеспечить прекращение (сокращение) потребления электроэнергии в указанный в уведомлении срок до 12 часов дня. <br>
	 Для контроля самоограничения потребитель обязан допустить представителей сетевой организации на свои объекты. Контроль самоограничения потребителя производится не позднее 10 дней с даты его введения и далее не реже чем один раз в 30 дней.
</p>

<h3>Ограничение «неотключаемых» потребителей </h3>
	<p>Потребитель, ограничение режима потребления которого может привести к экономическим, экологическим или социальным последствиям, обязан утвердить план мероприятий по обеспечению готовности к введению в отношении его энергопринимающих устройств и (или) объектов электроэнергетики полного ограничения режима потребления, включающий в себя мероприятия, необходимые для безаварийного прекращения технологического процесса, обеспечения безопасности людей и сохранности оборудования, и (или) мероприятия по установке за свой счет автономных источников питания, обеспечивающих снабжение электрической энергией его энергопринимающих устройств и (или) объектов электроэнергетики.</p>
	<p>Срок проведения мероприятий по обеспечению готовности к введению полного ограничения режима потребления не должен превышать 6 месяцев либо, если в отношении потребителя согласованы технологическая и аварийная брони, - 6 месяцев за вычетом срока сокращения электроснабжения до уровня аварийной брони, указанного в акте согласования технологической и (или) аварийной брони.</p>
	<p>Потребитель, ограничение режима потребления которого может привести к экономическим, экологическим или социальным последствиям, не устранивший основания для введения ограничения режима потребления, обязан после дня введения в отношении его энергопринимающих устройств и (или) объектов электроэнергетики частичного ограничения режима потребления до уровня аварийной брони либо после дня уведомления его о введении частичного ограничения режима потребления (если у такого потребителя отсутствует акт согласования технологической и (или) аварийной брони или в этом акте не указан уровень аварийной брони):</p>
	<ul><li>в течение 3 дней представить исполнителю (субисполнителю) и инициатору введения ограничения утвержденный план мероприятий по обеспечению готовности к введению в отношении его энергопринимающих устройств и (или) объектов электроэнергетики полного ограничения режима потребления;</li>
		<li>в срок, предусмотренный соответствующим планом, выполнить указанные мероприятия;</li>
		<li>в течение 2 месяцев выполнить мероприятия по установке за свой счет автономных источников питания, обеспечивающих безопасное функционирование его энергопринимающих устройств и (или) объектов электроэнергетики без необходимости потребления электрической энергии из внешней сети, - в случае если в установленный настоящим пунктом срок исполнителю (субисполнителю) не был представлен утвержденный план указанных мероприятий либо если предусмотренный планом срок проведения указанных мероприятий превышает 6 месяцев.</li>
	</ul>
	<p>После выполнения этих мероприятий потребитель обязан направить исполнителю (субисполнителю) и инициатору введения ограничения уведомление о готовности к введению полного ограничения режима потребления.</p>
	<p>В соответствии с действующим законодательством ст. 9.22 КоАП РФ невыполнение потребителем электрической энергии, ограничение режима потребления электрической энергии которого может привести к экономическим, экологическим или социальным последствиям, определенных в установленном законодательством об электроэнергетике порядке мероприятий, обеспечивающих готовность потребителя электрической энергии к введению в отношении его полного ограничения режима потребления электрической энергии и предотвращение наступления экономических, экологических или социальных последствий вследствие введения такого ограничения режима потребления, влечет наложение административного штрафа на должностных лиц в размере от десяти тысяч до ста тысяч рублей или дисквалификацию на срок от двух до трех лет; на юридических лиц - от ста тысяч до двухсот тысяч рублей.</p>

<h3>Расширение перечня способов уведомления потребителя </h3>
<p>Постановление № 624 предусматривает более широкий перечень способов уведомления потребителей о введении ограничения потребления электрической энергии. По согласованию сторон договора имеется возможность использования смс-сообщений, сообщений на адрес электронной почты, путем включения соответствующего уведомления в счет на оплату услуг, публикацией в СМИ и рядом иных способов.
</p>

<h3>Ограничение электроснабжения граждан - потребителей </h3>
<p>Для граждан - потребителей электроэнергии (за исключением граждан – потребителей коммунальной услуги по электроснабжению), ограничение потребления электроэнергии осуществляется в том же порядке и в те же сроки, что и ограничение электроснабжения прочих потребителей.
</p>

<h3>Административная ответственность </h3>
<p>В соответствии со статьей 9.22 Кодекса Российской Федерации об административных правонарушениях предусматривается административная ответственность потребителя электрической энергии в виде штрафа (10 – 100 тыс. руб. – для должностных лиц, 100 – 200 тыс. руб. – для юр. лиц) за следующие нарушения в сфере электроснабжения:
</p>
<ul>
	<li>нарушение введенного полного или частичного ограничения режима потребления;</li>
	<li>невыполнение законного требования сетевой организации о самостоятельном ограничении режима потребления;</li>
	<li>необеспечение доступа представителю сетевой организации к принадлежащим потребителю энергопринимающим устройствам;</li>
	<li>нарушение требований о составлении актов согласования технологической и (или) аварийной брони;</li>
	<li>невыполнение мероприятий, обеспечивающих готовность к введению полного ограничения режима потребления электрической энергии.</li>
</ul>
<p>С полным текстом постановления Правительства РФ от 24.05.2017 №&nbsp;624 Вы можете ознакомиться на сайте Правительства Российской Федерации по ссылке <a href="http://government.ru/docs/all/111770/" target="_blank">government.ru/docs/all/111770/</a>
</p>
</div>

<p style="margin-top:35px">Читайте также:</p>
<ul>
	<li><a href="ogranicheniya_adresa_202005.pdf" class="linkPDF" target="_blank">Перечень электронных адресов ПАО «Дальневосточная энергетическая компания» для информирования потребителей-юридических лиц о вводимых ограничениях поставок электрической энергии</a></li>
	<li><a href="/organisations/contractual_relations/restrictions/">Информация об основаниях для введения полного и (или) частичного ограничения режима потребления электрической энергии</a>
</ul>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>