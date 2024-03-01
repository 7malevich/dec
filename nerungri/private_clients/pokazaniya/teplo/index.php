<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Передача показаний онлайн (отопление)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
?>
<?php
require_once 'settings.php';
$this_hour = intval(date('j'))*24-24+intval(date('G')); //текущий час с начала месяца
date_default_timezone_set('Asia/Vladivostok');

$return_link = 'https://www.dvec.ru/';
$return_link_title = 'Вернуться на сайт ПАО &laquo;ДЭК&raquo;';

$serverName = "172.18.225.201";
$uid = "web";
$pwd = "web";
$db = "otoplenie_web";
$connect = new PDO("dblib:host=$serverName;dbname=$db;charset=UTF8", $uid, $pwd);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //режим прерывания скрипта при ошибках

if ($connect=== false) {
  echo "Connection error.<br />";
}

$branch_list = Teploget_branch_list($connect);

function Teplosave_readings_old($connect, $sessionkey, $reading1, $reading2) {
  $stmt = $connect->prepare("TeploSaveReadings :sessionkey, :reading1, :reading2");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->bindParam(':reading1', $reading1);
  $stmt->bindParam(':reading2', $reading2);
  $stmt->execute();
  $stmt->closeCursor();
  $stmt = null;
  $connect = null; //разрываем соединение с БД
  header('Location: received.php');
}

function Teplosave_readings($connect, $sessionkey, $reading) {
  $stmt = $connect->prepare("TeploSaveReadings :sessionkey, :reading");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->bindParam(':reading', $reading);
  $stmt->execute();
  $stmt->closeCursor();
  $stmt = null;
  $connect = null; //разрываем соединение с БД
  header('Location: received.php?mpi=ok');
}

function Teploget_branch_list($connect) {
  $stmt = $connect->prepare("TeploGetBranchList");
  $stmt->execute();
  $branch_list = $stmt->fetchAll();
  $stmt->closeCursor();
  $stmt = null;
  return $branch_list;
}

function Teplocheck_account($connect, $branch, $account) {
  $stmt = $connect->prepare("TeploGetAccount ?, ?");
  $stmt->bindParam(1, $branch, PDO::PARAM_STR, 3);
  $stmt->bindParam(2, $account, PDO::PARAM_STR, 64);
  $stmt->execute();
  $ret = $stmt->fetchColumn(); //результат поиска
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function Teplocheck_meter($connect, $branch, $account, $meter) {
  $stmt = $connect->prepare("TeploGetMeter :branch, :account, :meter");
  $stmt->bindParam(':branch', $branch);
  $stmt->bindParam(':account', $account);
  $stmt->bindParam(':meter', $meter);
  $stmt->execute();
  $ret = $stmt->fetchColumn(); //результат поиска
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function Teploget_random_string($length = 6) {
  $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ-*#@!?";
  $validCharNumber = strlen($validCharacters);
  $result = "";
  for ($i = 0; $i < $length; $i++) {
    $index = mt_rand(0, $validCharNumber - 1);
    $result .= $validCharacters[$index];
  }
  return $result;
}

function Teploget_meter($connect, $sessionkey) {
  $stmt = $connect->prepare("TeploGetMeterData :sessionkey");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->execute();
  $ret = $stmt->fetch();
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function Teplocheck_data($connect, $branch, $account, $meter) {
  $res['result'] = false;
  if (($branch != '') && ($account != '') && ($meter != '')) {
    if (Teplocheck_account($connect, $branch, $account)) {
      if (Teplocheck_meter($connect, $branch, $account, $meter)) {
        $res['sessionkey'] = Teploget_random_string(64);
		
		$stmt = $connect->prepare("TeploSetSession :branch, :account, :meter, :sessionkey");
		$stmt->bindParam(':branch', $branch);
		$stmt->bindParam(':account', $account);
		$stmt->bindParam(':meter', $meter);
		$stmt->bindParam(':sessionkey', $res['sessionkey']);

        $res['result'] = true;

        $stmt->execute();
        $stmt->closeCursor();
		$stmt = null;		

      } else {
        $res['error'] = '<p class="msg">Ошибка. Не найден прибор учета.</p>
		<p><span class="msg">Внимание!</span> С целью принятия в расчет за коммунальную услугу отопления 
показаний Вашего индивидуального прибора учета тепловой энергии, 
Вам необходимо предоставить в пункт обслуживания, указанный в платежном документе 
филиала ПАО «ДЭК» документы, подтверждающие информацию 
о типе ИПУ, его заводском номере, дате установки и очередной поверки,
дате пломбирования и номере. А именно:</p>
<p>1. Акт ввода прибора учета в эксплуатацию;</p>
<p>2. Паспорт прибора учета;</p>
<p>3. Сведения о начальных показаниях прибора учета;</p>
<p>4. Сведения о текущих показаниях прибора учета.</p>';
      }
    } else {
      $res['error'] = 'Ошибка. Не найден номер лицевого счета.';
    }
  } else {
    $res['error'] = 'Ошибка. Заполнены не все обязательные поля.';
  }
  return $res;
}







function date_count($date_mpi) {
// подсчет количества дней, оставшихся до конца следующей поверки
// возвращает -200000000000 если дата NULL
// возвращает -100000000000 если дата уже прошла

$today = getdate();
$year = $today['year'];
$mount = $today['mon'];
$day = $today['mday'];

if ($mount <10) {
  $mount = '0'.$mount;
}

if (isset($date_mpi)) {

  if ($date_mpi !='') {

    
        if (is_null($date_mpi)) {
          
            return -200000000000;
    
         }

    if((strtotime($year.'-'.$mount.'-'.$day)>=strtotime($date_mpi)) ) {
          
      return -100000000000;
    
    } else {

      $difference = intval(abs(strtotime($year.'-'.$mount.'-'.$day) - strtotime($date_mpi)));
      // Количество дней оставшихся до даты следующей поверки
      $difference = $difference / (3600 * 24);
      $count = $difference;
      return $count;
    }

  }

}

}


function count_mm($count) {

if ($count >= 61 AND $count <= 90) {
  
$mm = " трех месяцев.";
return $mm;  

}

if ($count >= 31 AND $count <= 60) {
  
$mm = " двух месяцев.";
return $mm;  

}


if ($count > 0 AND $count <= 30) {
  
$mm = " одного месяца.";
return $mm;  

}

}



function get_alarm($connect, $branch) {
  $stmt = $connect->prepare("GetAlarm :branch");
  $stmt->bindParam(':branch', $branch);
  $stmt->execute();
  $ret = $stmt->fetch();
  //$ret = $stmt->fetchColumn(); //результат поиска
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
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

<img src="/images/design2016/icons/radiator2.svg" style="display:block;float: left;margin: 4px 0 0 0;width: 48px;height: 48px">

<div style="width:560px; margin:10px auto">

                        <center>
				<?php if (($this_hour < $start_hour) || ($this_hour >= $final_hour)): /* проверка - мы в периоде передачи показаний */ ?>
					<?php include('schedule.php'); ?>
                          <?php elseif (!$_POST): ?>
                            <?php include('readingsform1.php'); ?>
                          <?php else: ?>
                            <?php if ($_POST['step'] == 1): ?>
                              <?php if (!key_exists('sessionkey', $_POST)): ?>
                                <?php $check = Teplocheck_data($connect, $_POST['branch'], htmlspecialchars($_POST['account']), htmlspecialchars($_POST['meter'])); ?>
                              <?php else: ?>
                                <?php $check['sessionkey'] = $_POST['sessionkey']; ?>
                                <?php $check['result'] = true; ?>
                              <?php endif; ?>
                              <?php if ($check['result']): ?>
                                <?php $sessionkey = $check['sessionkey']; ?>
                                <?php $meter = Teploget_meter($connect, $sessionkey); ?>
                                <?php include('readingsform2.php'); ?>
                              <?php else: ?>
                                <?php // include('ddos.php'); ?>
                                <div id="alert">
                                  <?php echo $check['error']; ?>
                                </div>
                                <div style="clear: both;"></div>
                                <?php include('readingsform1.php'); ?>
                              <?php endif; ?>
                            <?php elseif ($_POST['step'] == 2): ?>
                              <?php $sessionkey = $_POST['sessionkey']; ?>
                              <?php $meter = Teploget_meter($connect, $_POST['sessionkey']); ?>
                              <?php if ( !ctype_digit($_POST['reading1']) ): ?>
                          <div id="alert">
                            <span class="msg">Введены некорректные символы. Проверьте показания:</span>
                          </div>  
                          <div style="clear: both;"></div>
                          <?php include('readingsform2.php'); ?>
                        <?php elseif ((strlen($_POST['reading1']) != $meter['capacity']) ): ?>
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
							  
							  <?php Teplosave_readings($connect, $_POST['sessionkey'], number_format(floatval(substr_replace($_POST['reading1'], '.', $_POST['capacity1'], 0)), 4, '.', '')); ?>
							  
							  
							 
							  
                            <?php endif; ?>
                          <?php endif; ?>
                        </center>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>