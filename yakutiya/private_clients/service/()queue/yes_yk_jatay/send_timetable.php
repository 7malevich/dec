<?

$date1 = date_create('-1 minutes');
$date2 = date_create('+1 minutes');

$to = 'kassa_jatay@yakutskenergo.ru, ekc-nach@amur.dvec.ru';
$subject = 'Расписание предварительной записи на ' . date_create('now')->format('d.m.Y') . ' (п. Жатай)';

$file = $_SERVER["DOCUMENT_ROOT"]."/yakutiya/private_clients/service/queue/yes_yk_jatay/queue.txt";
$content = file($file);

$mymessage = '<html><body>';
$mymessage .= '<style>td{border-top:1px solid #e5e6ea; padding:4px 8px}</style>';
$mymessage .= '<table cellspacing="0"><tr style="background-color:aliceblue"><td>Дата</td><td>Время</td><td>ФИО</td><td>Телефон</td><td>Эл.почта</td></tr>';
$sloty = '';
foreach($content as $lineNumber => &$lineContent) {
	$row = explode(";", $lineContent);
	$date_check = date_create_from_format('d.m.Y', $row[2]);
	if (($date_check >= $date1) and ($date_check <= $date2)) {
		$sloty .= "<tr><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>";
	}
}

$mymessage .= $sloty.'</table></body></html>';

if (!empty($sloty)) {
	$headers  = "From: no-reply@dvec.ru\r\n";
	$headers .= "Reply-To: pressa8@dvec.ru\r\n";
	$headers .= "CC: pressa8@dvec.ru\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	mail($to, $subject, $mymessage, $headers);
	echo 'OK';
} else {
	echo 'no slots';
}

?>