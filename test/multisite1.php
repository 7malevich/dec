<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.site.selector",
	"dropdown",
	Array(
		"SITE_LIST" => array("*all*"),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => ""
	)
);?> 
<br /> 
 

<?echo 'cookie:';
if(empty($_COOKIE['dvec_region'])) {
echo 'empty';
}

if ($_COOKIE['dvec_region'] == 'amursbyt') {
echo 'Амурсбыт';
}

echo '<br /> ';
echo htmlspecialchars($_COOKIE['dvec_region']);

echo '<br /> ';
echo 'Привет, ' . htmlspecialchars($_COOKIE["dvec_region"]) . '!';

echo '<br /> ';
echo $APPLICATION->get_cookie("LOGIN", FALSE);

echo '<br /> indir:';
if(CSite::InDir('/')) {
echo '/';
}
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>