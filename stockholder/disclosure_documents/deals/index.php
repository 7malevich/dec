<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Извещения о сделках");
?><style>
	.mycont {display:flex; margin: 25px 0; border:1px solid #ccc; border-radius:4px; padding: 20px 10px}
	.mybutt {flex: 0 0 10%; margin:-2px 17px 0 7px; min-width:48px; max-width:48px}
	.ox {border:1px solid #ccc}
</style>

<div style="height:0.5rem"></div>


<a href="20200925_izveschenie.pdf" target="_blank" class="mycont"> 
	<img src="/images/design2016/icons/pdf.svg" class="mybutt">
	<div>Извещение о сделке, в совершении которой имеется заинтересованность<br>
		<span class="text-muted">25.09.2020</span></div>
</a>
<a href="20200911_izveschenie.pdf" target="_blank" class="mycont"> 
	<img src="/images/design2016/icons/pdf.svg" class="mybutt">
	<div>Извещение о сделке, в совершении которой имеется заинтересованность<br>
		<span class="text-muted">11.09.2020</span></div>
</a>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>