<?
error_reporting(E_ALL);

$region = htmlspecialchars($_GET["region"]);

if ($region == 'amursbyt')  
  header('Location: https://www.dvec.ru/amursbyt/private_clients/payment/cards_online/');
if ($region == 'yakutiya')  
  header('Location: https://www.dvec.ru/yakutiya/private_clients/payment/');

?>