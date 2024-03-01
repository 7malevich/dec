<?

if ( function_exists( 'mail' ) )
{
    echo 'mail() is available';
}
else
{
    echo 'mail() has been disabled';
}

echo '<br><br>';

$mail = "pressa8@dvec.ru"; // ваш email
$subject = "тест отправки через сайт" ; // тема письма
$text = "Тестовое письмо"; // текст письма
if(mail($mail, $subject, $text)){ 
    echo 'Успешно отправлено!';
}
else{
     echo 'Отправка не удалась!';
}
?>