<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Передача показаний онлайн (холодное&nbsp;водоснабжение)");
?><?php
require_once 'settings.php';
$this_hour = intval(date('j'))*24-24+intval(date('G')); //текущий час с начала месяца
date_default_timezone_set('Asia/Vladivostok');

$return_link = 'http://www.dvec.ru/';
$return_link_title = 'Вернуться на сайт ПАО &laquo;ДЭК&raquo;';

$serverName = "172.18.225.201";
$uid = "web";
$pwd = "web";
$db = "hvc_web";
$connect = new PDO("dblib:host=$serverName;dbname=$db;charset=UTF8", $uid, $pwd);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //режим прерывания скрипта при ошибках

if ($connect=== false) {
  echo "Connection error.<br />";
}

$branch_list = Hvcget_branch_list($connect);

function Hvcsave_readings_old($connect, $sessionkey, $reading1, $reading2) {
  $stmt = $connect->prepare("HvcSaveReadings :sessionkey, :reading1, :reading2");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->bindParam(':reading1', $reading1);
  $stmt->bindParam(':reading2', $reading2);
  $stmt->execute();
  $stmt->closeCursor();
  $stmt = null;
  $connect = null; //разрываем соединение с БД
  header('Location: received.php');
}

function Hvcsave_readings($connect, $sessionkey, $reading) {
  $stmt = $connect->prepare("HvcSaveReadings :sessionkey, :reading");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->bindParam(':reading', $reading);
  $stmt->execute();
  $stmt->closeCursor();
  $stmt = null;
  $connect = null; //разрываем соединение с БД
  header('Location: received.php?mpi=ok');
}

function Hvcget_branch_list($connect) {
  $stmt = $connect->prepare("HvcGetBranchList");
  $stmt->execute();
  $branch_list = $stmt->fetchAll();
  $stmt->closeCursor();
  $stmt = null;
  return $branch_list;
}

function Hvccheck_account($connect, $branch, $account) {
  $stmt = $connect->prepare("HvcGetAccount ?, ?");
  $stmt->bindParam(1, $branch, PDO::PARAM_STR, 3);
  $stmt->bindParam(2, $account, PDO::PARAM_STR, 64);
  $stmt->execute();
  $ret = $stmt->fetchColumn(); //результат поиска
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function Hvccheck_meter($connect, $branch, $account, $meter) {
  $stmt = $connect->prepare("HvcGetMeter :branch, :account, :meter");
  $stmt->bindParam(':branch', $branch);
  $stmt->bindParam(':account', $account);
  $stmt->bindParam(':meter', $meter);
  $stmt->execute();
  $ret = $stmt->fetchColumn(); //результат поиска
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function Hvcget_random_string($length = 6) {
  $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ-*#@!?";
  $validCharNumber = strlen($validCharacters);
  $result = "";
  for ($i = 0; $i < $length; $i++) {
    $index = mt_rand(0, $validCharNumber - 1);
    $result .= $validCharacters[$index];
  }
  return $result;
}

function Hvcget_meter($connect, $sessionkey) {
  $stmt = $connect->prepare("HvcGetMeterData :sessionkey");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->execute();
  $ret = $stmt->fetch();
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function Hvccheck_data($connect, $branch, $account, $meter) {
  $res['result'] = false;
  if (($branch != '') && ($account != '') && ($meter != '')) {
    if (Hvccheck_account($connect, $branch, $account)) {
      if (Hvccheck_meter($connect, $branch, $account, $meter)) {
        $res['sessionkey'] = Hvcget_random_string(64);
		
		$stmt = $connect->prepare("HvcSetSession :branch, :account, :meter, :sessionkey");
		$stmt->bindParam(':branch', $branch);
		$stmt->bindParam(':account', $account);
		$stmt->bindParam(':meter', $meter);
		$stmt->bindParam(':sessionkey', $res['sessionkey']);

        $res['result'] = true;

        $stmt->execute();
        $stmt->closeCursor();	
		$stmt = null;		
		
      } else {
        $res['error'] = 'Ошибка. Не найден прибор учета.';
      }
    } else {
      $res['error'] = 'Ошибка. Не найден номер лицевого счета.';
    }
  } else {
    $res['error'] = 'Ошибка. Заполнены не все обязательные поля.';
  }
  return $res;
}
?>

    <link rel="stylesheet" href="css/queryLoader.css" type="text/css">
    <script defer src='js/queryLoader.js'></script>
    <script defer src='js/jquery.maskedinput.js'></script>
    
	
	<script type="text/javascript">
    	document.addEventListener('DOMContentLoaded', function(){
        $('.required').focus(function() {
          $(this).css('background-color', '#ffffff');
        }).blur(function() {
          if($(this).val() == '') {
            $(this).css('background-color', '#FAAFBE');            
          }
        });
        $('#branch').change(function() {
        });
      });
    </script>
    <style type="text/css">
      .h2 {
        font-weight: bold;
      }
      .msg {
        color: #ff0000;
        font-size: 14px;
      }
      #alert {
        padding: 5px 20px;
		margin: 0 0 35px 0;
		border: 1px solid red;
      }
      input, select, textarea {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
      }
    </style>


<!-- <div class="alert alert-danger mt-4 mb-4 pt-3 pb-4">
<p>Уважаемые клиенты! В рамках развития сервиса услуг и программы по защите персональных данных клиентов
 <span class="text-danger"><b>с&nbsp;1&nbsp;июля&nbsp;2021&nbsp;г. ПАО «ДЭК» прекращает прием показаний приборов учета на сайте без регистрации.</b></span>
 Показания будут приниматься в Личном кабинете клиента.</p>
<p>Показания принимаются с 20 по 25 число ежемесячно, круглосуточно, без праздников, выходных и очередей.
 Чтобы передать показания, войдите в личный кабинет или зарегистрируйтесь в системе.</p>
<a href="../../cabinet/" class="btn btn-secondary" style="color:white">Перейти к Личному кабинету</a>
</div> -->


<img src="/images/design2016/icons/kran_hvs.svg" style="display:block;float: left;margin: 4px 0 0 0;width: 48px;height: 48px">

<div style="width:560px; margin:10px auto">

                        <center>
				<?php if (($this_hour < $start_hour) || ($this_hour >= $final_hour)): /* проверка - мы в периоде передачи показаний */ ?>
					<?php include('schedule.php'); ?>
                          <?php elseif (!$_POST): ?>
                            <?php include('readingsform1.php'); ?>
                          <?php else: ?>
                            <?php if ($_POST['step'] == 1): ?>
                              <?php if (!key_exists('sessionkey', $_POST)): ?>
                                <?php $check = Hvccheck_data($connect, $_POST['branch'], htmlspecialchars($_POST['account']), htmlspecialchars($_POST['meter'])); ?>
                              <?php else: ?>
                                <?php $check['sessionkey'] = $_POST['sessionkey']; ?>
                                <?php $check['result'] = true; ?>
                              <?php endif; ?>
                              <?php if ($check['result']): ?>
                                <?php $sessionkey = $check['sessionkey']; ?>
                                <?php $meter = Hvcget_meter($connect, $sessionkey); ?>
                                <?php include('readingsform2.php'); ?>
                              <?php else: ?>
                                <?php // include('ddos.php'); ?>
                                <div id="alert">
                                  <span class="msg"><?php echo $check['error']; ?></span>
                                </div>
                                <div style="clear: both;"></div>
                                <?php include('readingsform1.php'); ?>
                              <?php endif; ?>
                            <?php elseif ($_POST['step'] == 2): ?>
                              <?php $sessionkey = $_POST['sessionkey']; ?>
                              <?php $meter = Hvcget_meter($connect, $_POST['sessionkey']); ?>
                              <?php if ((strlen($_POST['reading1']) != $meter['capacity']) ): ?>
                                <div id="alert">
                                  <span class="msg">Показания не введены или введенные показания не соответствуют разрядности прибора учета.</span>
								  </div>  
                                <div style="clear: both;"></div>
                                <?php include('readingsform2.php'); ?>
                              <?php // elseif ((intval($_POST['reading1']) < $meter['reading'])): ?>
							  <?php elseif ((floatval(substr_replace($_POST['reading1'], '.', $meter['capacity1'], 0)) < $meter['reading'])): ?>
							  
							  
                                <div id="alert">
									<span class="msg">Введенные показания <u>меньше</u> ранее переданных показаний.<br/>Если Вы считаете, что внесенные данные верны, нажмите кнопку "Подтвердить".<br/>Для корректировки данных нажмите кнопку "Корректировать".</span>
                                </div>     
                                <div style="clear: both;"></div>
                                <?php include('confirmform.php'); ?>
                              <?php else: ?>
                                <div id="alert">
                                  Пожалуйста, проверьте введенные данные. Если данные верны, подтвердите их отправку с помощью кнопки "Подтвердить".<br/>Для корректировки данных нажмите кнопку "Корректировать".

								   
                                </div>
                                <div style="clear: both;"></div>
                                <?php include('confirmform.php'); ?>
                              <?php endif; ?>
                            <?php elseif ($_POST['step'] == 3): ?>
                              <?php //Teplosave_readings($connect, $_POST['sessionkey'], $_POST['reading1'], key_exists('reading2', $_POST) ? $_POST['reading2'] : null); ?>
							  
							  
							 							  
							  <?php echo $_POST['reading1']; ?>
							  
							   
							   <?php echo 'Значение capacity1='.$_POST['capacity1']; ?>
							   <?php echo 'новое значение'; ?>
							  <?php echo substr_replace($_POST['reading1'], '.', $_POST['capacity1'], 0); ?>
							 
							  
							  <?php // Teplosave_readings($connect, $_POST['sessionkey'], substr_replace($_POST['reading1'], '.', $_POST['capacity1'], 0)); ?>
							  
							  <?php Hvcsave_readings($connect, $_POST['sessionkey'], number_format(floatval(substr_replace($_POST['reading1'], '.', $_POST['capacity1'], 0)), 4, '.', '')); ?>
							  
							  
							 
							  
                            <?php endif; ?>
                          <?php endif; ?>
                        </center>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>