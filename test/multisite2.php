<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><br /> 

<?echo 'cookie:';
if(empty($_COOKIE['dvec_region'])) {
echo 'empty';
}

echo '<br /> ';
echo 'Привет, ' . htmlspecialchars($_COOKIE["dvec_region"]) . '!';


echo '<br /> ';
if (in_array($_COOKIE['dvec_region'], array('dalsbyt', 'khabsbyt', 'amursbyt', 'eaosbyt'))) {
echo 'куки правильная!';
}
else {
echo 'куки нет или неправильная!';
}


echo '<br /> ';
echo 'Привет, ' . htmlspecialchars($_COOKIE["dvec_region"]) . '!';
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>