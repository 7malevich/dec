<?php

$test = false;
$startday = 15;
$finalday = 25;
$start_hour = $startday*24-24-1; // начало приема, сдвиг по часовым поясам: 0
$final_hour = $finalday*24 ;  // конец приема, сдвиг по часовым поясам: +1

function base_url() {
  
	return 'https://www.dvec.ru';
  //return '';
  
  
}

?>