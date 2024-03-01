<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Привет");
?><style>
#hdr_anim_box1 {
  height:1px;
  -webkit-animation: hdr_anim_line1 30s linear alternate infinite;;
  -moz-animation: hdr_anim_line1 30s linear alternate infinite;
  animation: hdr_anim_line1 30s linear alternate infinite;
  }
@-webkit-keyframes hdr_anim_line1 {
    0%,90%{background-color:rgb(220, 220, 220)}
    93%{background-color:rgb(249, 175, 24)}
    97%,100%{background-color:rgb(243, 146, 32)}
}
@-moz-keyframes hdr_anim_line1 {
    0%,90%{background-color:rgb(220, 220, 220)}
    93%{background-color:rgb(249, 175, 24)}
    97%,100%{background-color:rgb(243, 146, 32)}
}
@keyframes hdr_anim_line1 {
    0%,90%{background-color:rgb(220, 220, 220)}
    93%{background-color:rgb(249, 175, 24)}
    97%,100%{background-color:rgb(243, 146, 32)}
}
</style>

<div id="hdr_anim_box1"></div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>