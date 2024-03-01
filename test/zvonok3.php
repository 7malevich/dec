<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Позвоните нам!");
?>	<style>
		.c2c_call_button {
		  display: inline-block;
		  text-align: center;
		  border-width: 1px;
		  border-style: solid;
		  text-transform: uppercase;
		  text-decoration: none;
		  line-height: 1.1;
		  font-weight: normal;
		  font-family: sans-serif;
		  color: #FFFFFF;
		  font-size: 12px;
		  background-color: #73B10E;
		  background-image: -webkit-linear-gradient(top, #76b60e 0%, #86c028 48%, #73B10E 49%, #73B10E 82%, #84cb10 100%);
		  background-image: -moz-linear-gradient(top, #76b60e 0%, #86c028 48%, #73B10E 49%, #73B10E 82%, #84cb10 100%);
		  background-image: -o-linear-gradient(top, #76b60e 0%, #86c028 48%, #73B10E 49%, #73B10E 82%, #84cb10 100%);
		  background-image: linear-gradient(top, #76b60e 0%, #86c028 48%, #73B10E 49%, #73B10E 82%, #84cb10 100%);
		  border-color: hsl(83, 29%, 37%);
		  -webkit-box-shadow: inset 0 0 1px 1px #95e512, 0 0 1px 3px rgba(0, 0, 0, 0.15);
		  -moz-box-shadow: inset 0 0 1px 1px #95e512, 0 0 1px 3px rgba(0, 0, 0, 0.15);
		  box-shadow: inset 0 0 1px 1px #95e512, 0 0 1px 3px rgba(0, 0, 0, 0.15);
		  -webkit-text-shadow: 1px 1px 1px #365207;
		  -moz-text-shadow: 1px 1px 1px #365207;
		  -o-text-shadow: 1px 1px 1px #365207;
		  text-shadow: 1px 1px 1px #365207;
		  -webkit-border-radius: 25px;
		  -moz-border-radius: 25px;
		  border-radius: 25px;
		  padding: 12px 30px 12px 30px;
		  cursor: pointer;
		  -webkit-touch-callout: none;
		  -webkit-user-select: none;
		  -khtml-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		}
    </style>
	<script>
	function callHandler(){
		window.open('https://xmpp.intellin.ru/c2c/dek/iframe.html', '_blank', 'width=300,height=300,resizable=no,toolbar=no,menubar=no,location=no,status=no');
		return false;
	}
  </script>

<div id="callbutton" class="c2c_call_button" onclick="callHandler()">Позвонить</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>