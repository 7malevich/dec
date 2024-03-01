<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
global $APPLICATION;                           // записываем в статистику событий битрикс
if (CModule::IncludeModule('statistic')) { CStatEvent::AddCurrent('portal', 'telefon'); }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="ДЭК – Телефонный справочник">
  <title>ДЭК - Телефонный справочник</title>  <link rel="stylesheet" href="/portal/assets/bootstrap.css">
<style>
  .table-borderless td { border-bottom: 1px solid rgb(222, 226, 230) }
  .myfadein { opacity: 1; transition: opacity 2s linear; }
  .org-btn-space-gray { color: #ccc }
  .org-btn-space-0 { color: #373737 }
  .org-btn-space-1 { color: #f37c22 }
  .org-btn-space-2 { color: #4785c3 }
  .org-btn-space-3 { color: #aeccea }
  .org-btn-space-4 { color: #f7d382 }
  .myline { line-height: 1.2 }
  .btn-myclicked { background-color: #e4f2ff }
</style>
</head>
<body>
    
<div class="container">
  <header class="blog-header mt-2 pb-3 mb-4 border-bottom">
    <div class="nav-scroller pt-2 pb-1">
      <nav class="nav d-flex justify-content-between align-items-center">
        <a class="blog-header-logo text-dark" href="#"><img src="/portal/assets/img/logo_dek_hrz.png" style="height:3rem"></a>
        <!--<a class="px-1 text-muted" href="#">Наша жизнь</a>
        <a class="px-1 text-muted" href="#">Обзоры СМИ</a>
        <a class="px-1 text-muted" href="#">Информационный стенд</a>
        <a class="px-1 text-muted" href="#">База документов</a>
        <a class="px-1 text-muted" href="#">Телефонный справочник</a>-->
      </nav>
    </div>
  </header>
</div>


<main role="main" class="container">
  <div class="row">
    <div class="col">
      <h2 class="mt-0 mb-4">
        Телефонный справочник
      </h2>

<a name="scroll_here" id="scroll_here"></a>
<div class="card mt-4">
	<div class="card-body d-flex">
		<div><h4 class="card-title mr-3 my-0">Поиск сотрудника:</h4></div>
		<div class="mr-auto">
		<form id="form1" action="javascript:void(0);" class="form-inline">
			
			<input type="text" class="form-control mr-2" id="addr" name="addr" placeholder="ФИО или телефон">
			<button id="myButtonX" type="button" aria-label="Close" class="close px-1 mr-2">
				<span aria-hidden="true">×</span>
			</button>
			<button id="myButton" class="btn btn-primary myfadein" type="submit">Подгрузка...</button>
			<span id="mytime" class="text-white"></span>
		</form>
		</div>
		<div>
			<a class="btn btn-outline-primary" href="https://ab.rushydro.ru/" target="_blank">Справочник организаций РусГидро</a>
		</div>
	</div>
</div>
<div id="msg-no" class="alert alert-danger mt-4" role="alert" style="display:none; padding:2rem 1.75rem; clear:both; align-items:center">
	<div>Сотрудник не найден!</div>
</div>
<div class="iewarning h2 my-4" style="display:none">
	Устаревший браузер Internet Explorer не поддерживается. Пожалуйста, используйте современный браузер (Edge, Firefox, Chrome и т.п.)
</div>

<div id="myresult">
</div>

<div style="height:50px"></div>

<h4>Организационная структура:<!-- <a class="btn btn-outline-secondary btn-sm" role="button" data-toggle="collapse" data-target=".my-collapse">Развернуть всё</a>--></h4>
<div id="org_-1_children" class="mt-3">

</div>





    </div>
  </div><!-- /.row -->

<div style="margin:50px auto 20px auto">
	<center>
	<p>Телефонные коды выхода на внутренние номера АТС:</p>
	<div class="container" id="myGroup">
	<a class="btn btn-secondary" data-toggle="collapse" href="#kody_iadek" role="button" aria-expanded="false" aria-controls="kody_iadek">ИА ДЭК</a>
	<a class="btn btn-secondary" data-toggle="collapse" href="#kody_aes" role="button" aria-expanded="false" aria-controls="kody_hes">АЭС</a>
	<a class="btn btn-secondary" data-toggle="collapse" href="#kody_eao" role="button" aria-expanded="false" aria-controls="kody_hes">ЕАО</a>
	<a class="btn btn-secondary" data-toggle="collapse" href="#kody_hes" role="button" aria-expanded="false" aria-controls="kody_hes">ХЭС</a>
	<a class="btn btn-secondary" data-toggle="collapse" href="#kody_ses" role="button" aria-expanded="false" aria-controls="kody_ses">СЭС</a>
	
	<div style="height:10px"></div>
	
		<div class="collapse" id="kody_iadek" data-parent="#myGroup">
			<div class="container" style="max-width: 41rem;">
			<?include_once("kody_iadek.php");?>
			<?include_once("kody_proch.php");?>
			</div>
		</div>
		<div class="collapse" id="kody_aes" data-parent="#myGroup">
			<div class="container" style="max-width: 41rem;">
			<?include_once("kody_aes.php");?>
			</div>
		</div>
		<div class="collapse" id="kody_eao" data-parent="#myGroup">
			<div class="container" style="max-width: 41rem;">
			<?include_once("kody_eao.php");?>
			</div>
		</div>
		<div class="collapse" id="kody_hes" data-parent="#myGroup">
			<div class="container" style="max-width: 41rem;">
			<?include_once("kody_hes.php");?>
			</div>
		</div>
		<div class="collapse" id="kody_ses" data-parent="#myGroup">
			<div class="container" style="max-width: 41rem;">
			<?include_once("kody_ses.php");?>
			</div>
		</div>
	</div>
	</center>
</div>

</main><!-- /.container -->

<footer class="container my-5">
  <p class="text-center">
	  <a href="mailto:pressa8@dvec.ru?subject=Телефонный справочник ДЭК">Обратная связь</a> | <a href="instrukciya/">Инструкция</a> | <a href="print/">Версия для печати</a>
  </p>
</footer>

  <script src="/portal/assets/ienotsupported.js"></script>
  <script src="/portal/assets/jquery.min.js"></script>
  <script src="/portal/assets/bootstrap.min.js"></script>

  <script src="/portal/assets/misc.js"></script>
  <script src="script.js?5"></script>
  
  </body>
</html>