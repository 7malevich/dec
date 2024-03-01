<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Позвоните нам!");
?><script type="text/javascript">
        	    function callHandler(){
            		window.open('https://xmpp.intellin.ru/c2c/c2c_builder/iframe.html?type=audio&callee=76&dtmf=true', '_blank', 'width=300,height=300,resizable=no,toolbar=no,menubar=no,location=no,status=no');
            		return false;
        	    }
		</script>

<div style="box-shadow: rgb(39, 104, 115) 0px 10px 14px -7px; background: rgb(89, 155, 179) linear-gradient(rgb(89, 155, 179) 5%, rgb(64, 140, 153) 100%) 
repeat scroll 0% 0%; border-radius: 8px; display: inline-block; cursor: pointer; color: rgb(255, 255, 255); font-family: Arial; font-size: 20px; font-weight:
 bold; padding: 13px 32px; text-decoration: none; text-shadow: rgb(61, 118, 138) 0px 1px 0px;" onclick="callHandler()">Позвонить</div>
<div class="comment1" style="margin-top:25px">Убедитесь, что к вашему устройству <br />подключены динамики и микрофон</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>