<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); //ВКЛЮЧИТЬ ОБРАТНО!!!!!
$APPLICATION->SetTitle("Передача показаний онлайн (электрическая&nbsp;энергия)"); //ВКЛЮЧИТЬ ОБРАТНО!!!!!
?>

<?
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);
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
$db = "web";
$connect = new PDO("dblib:host=$serverName;dbname=$db;charset=UTF8", $uid, $pwd);


$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //режим прерывания скрипта при ошибках

if ($connect=== false) {
  echo "Connection error.<br />";
}

$branch_list = get_branch_list($connect);

function save_readings_old($connect, $sessionkey, $reading1, $reading2) {
  $stmt = $connect->prepare("SaveReadings :sessionkey, :reading1, :reading2");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->bindParam(':reading1', $reading1);
  $stmt->bindParam(':reading2', $reading2);

  //дебаг - пишем в лог
	//$txt = 'Inserting '.date(DATE_ATOM).' '.$sessionkey.' '.$reading1.' '.$reading2;
	//$myfile = file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
 
  //sleep(.5);  
  $stmt->execute();  
  $stmt->closeCursor();
  $connect = null; //разрываем соединение с БД
  
  header('Location: received.php');
	//$myfile = file_put_contents('logs.txt', 'Redirecting'.PHP_EOL , FILE_APPEND | LOCK_EX); //дебаг - пишем в лог
}


function save_readings($connect, $sessionkey, $reading1, $reading2, $reading3) {
  $stmt = $connect->prepare("SaveReadings :sessionkey, :reading1, :reading2, :reading3");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->bindParam(':reading1', $reading1);
  $stmt->bindParam(':reading2', $reading2);
  $stmt->bindParam(':reading3', $reading3);
  //дебаг - пишем в лог
  //$txt = 'Inserting '.date(DATE_ATOM).' '.$sessionkey.' '.$reading1.' '.$reading2;
  //$myfile = file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
 
  //sleep(.5);  
  $stmt->execute();  
  $stmt->closeCursor();
  $connect = null; //разрываем соединение с БД
  
  header('Location: received.php?mpi=ok');
  //$myfile = file_put_contents('logs.txt', 'Redirecting'.PHP_EOL , FILE_APPEND | LOCK_EX); //дебаг - пишем в лог
}



function get_branch_list($connect) {
  $stmt = $connect->prepare("GetBranchList");
  $stmt->execute();
  $branch_list = $stmt->fetchAll();
  $stmt->closeCursor();
  $stmt = null;
  return $branch_list;
}

function check_account($connect, $branch, $account) {
  $stmt = $connect->prepare("GetAccount ?, ?"); //именно такой синтаксис у PDO к MSSQL, бл
  $stmt->bindParam(1, $branch, PDO::PARAM_STR, 3);
  $stmt->bindParam(2, $account, PDO::PARAM_STR, 64);
  $stmt->execute();
  $ret = $stmt->fetchColumn(); //результат поиска
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function check_meter($connect, $branch, $account, $meter) {
  $stmt = $connect->prepare("GetMeter :branch, :account, :meter");
  $stmt->bindParam(':branch', $branch);
  $stmt->bindParam(':account', $account);
  $stmt->bindParam(':meter', $meter);
  $stmt->execute();
  $ret = $stmt->fetchColumn(); //результат поиска
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function get_random_string($length = 6) {
  $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ-*#@!?"; //исключены + &
  $validCharNumber = strlen($validCharacters);
  $result = "";
  for ($i = 0; $i < $length; $i++) {
    $index = mt_rand(0, $validCharNumber - 1);
    $result .= $validCharacters[$index];
  }
  return $result;
}

function get_meter($connect, $sessionkey) {
  $stmt = $connect->prepare("GetMeterData :sessionkey");
  $stmt->bindParam(':sessionkey', $sessionkey);
  $stmt->execute();
  $ret = $stmt->fetch();
  $stmt->closeCursor();
  $stmt = null;
  return $ret;
}

function check_data($connect, $branch, $account, $meter) {
  $res['result'] = false;
  $account = trim($account); //вырезаем пробелы в начале и конце строки
  $meter = trim($meter);
  
  if (($branch != '') && ($account != '') && ($meter != '')) {
    if (check_account($connect, $branch, $account)) {
      if (check_meter($connect, $branch, $account, $meter)) {
        $res['sessionkey'] = get_random_string(64);
		$stmt = $connect->prepare("SetSession :branch, :account, :meter, :sessionkey");
		$stmt->bindParam(':branch', $branch);
		$stmt->bindParam(':account', $account);
		$stmt->bindParam(':meter', $meter);
		$stmt->bindParam(':sessionkey', $res['sessionkey']);

		//дебаг - пишем в лог
		  //$txt = 'Setting_session '.date(DATE_ATOM).' '.$res['sessionkey'].' '.$account.' '.$meter;
		  //$myfile = file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

        $res['result'] = true;

        $stmt->execute();
        $stmt->closeCursor();
		$stmt = null;
      } else {
        $res['error'] = 'Ошибка. Не найден прибор учета.';
		if ($branch == 'hes') {
			$res['error'] = $res['error'].'<br>Если Вы уверены, что номер был введен верно, <a href="/bitrix/redirect.php?event1=pokazaniya_pu_ne_naiden&event2=dps_sch_khab&goto=/khabsbyt/private_clients/dps_zamena_pu/proverka.php" style="color:red">обратитесь в Сервисный центр Хабаровскэнергосбыта за консультацией</a>.';
			// пишем в лог
			//$txt = date(DATE_ATOM).' '.$account.' '.$meter;
			//$myfile = file_put_contents('log_hes_pu_ne_naiden.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
		}
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
Уважаемые клиенты! В связи с возникшими техническими проблемами в сервисе "Личный кабинет" на сайте ПАО "ДЭК" временно 
возобновлен прием показаний приборов учета.
</div> -->


<div class="card pt-4 pb-3 pl-4 pr-4 mt-4 mb-4"> 
                  <center>
				<?php if (($this_hour < $start_hour) || ($this_hour >= $final_hour)): /* проверка - мы в периоде передачи показаний */ ?>
					<?php include('schedule.php'); ?>				  
                    <?php elseif (!$_POST): ?>
                      <?php include('readingsform1.php'); ?>
                    <?php else: ?>
                      <?php if ($_POST['step'] == 1): ?>
                        <?php if (!key_exists('sessionkey', $_POST)): ?>
                          <?php $check = check_data($connect, $_POST['branch'], htmlspecialchars($_POST['account']), htmlspecialchars($_POST['meter'])); ?>
                        <?php else: ?>
                          <?php $check['sessionkey'] = $_POST['sessionkey']; ?>
                          <?php $check['result'] = true; ?>
                        <?php endif; ?>
                        <?php if ($check['result']): ?>
                          <?php $sessionkey = $check['sessionkey']; ?>
                          <?php $meter = get_meter($connect, $sessionkey); ?>
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
                        <?php $meter = get_meter($connect, $_POST['sessionkey']); ?>
                        <?php if ( !ctype_digit($_POST['reading1']) || (($meter['scales'] == 2) && !ctype_digit($_POST['reading2'])) || (($meter['scales'] == 3) && !ctype_digit($_POST['reading3'])) ): ?>
                          <div id="alert">
                            <span class="msg">Введены некорректные символы. Проверьте показания:</span>
                          </div>  
                          <div style="clear: both;"></div>
                          <?php include('readingsform2.php'); ?>
                        <?php elseif ((strlen($_POST['reading1']) != $meter['capacity']) || (($meter['scales'] == 2) && (strlen($_POST['reading2']) != $meter['capacity'])) || (($meter['scales'] == 3) && (strlen($_POST['reading3']) != $meter['capacity'])) ): ?>
                          <div id="alert">
                            <span class="msg">Введены не все показания или введенные показания не соответствуют разрядности прибора учета.</span>
                          </div>  
                          <div style="clear: both;"></div>
                          <?php include('readingsform2.php'); ?>
                        <?php elseif ((intval($_POST['reading1']) < $meter['reading1']) || (intval($_POST['reading2']) < $meter['reading2']) || (intval($_POST['reading3']) < $meter['reading3'])  ): ?>
                          <div id="alert">
                            <span class="msg">Введенные показания по одной из шкал меньше ранее переданных показаний.<br/>Если Вы считаете, что внесенные данные верны, нажмите кнопку "Подтвердить".<br/>Для корректировки данных нажмите кнопку "Корректировать".</span>
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
                        <?php save_readings($connect, $_POST['sessionkey'], $_POST['reading1'], key_exists('reading2', $_POST) ? $_POST['reading2'] : null, key_exists('reading3', $_POST) ? $_POST['reading3'] : null); ?>
                      <?php endif; ?>
                    <?php endif; ?>
                  </center>
</div>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");     ?>