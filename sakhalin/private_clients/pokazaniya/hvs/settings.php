<?php

$test = false;
$startday = 15;
$finalday = 25;
$start_hour = $startday*24-24-1;    // начало приема, сдвиг по часовым поясам
$final_hour = $finalday*24   ;  // конец приема, сдвиг по часовым поясам

function base_url() {
  
	return 'https://www.dvec.ru';
  //return '';
  
  
}

?>