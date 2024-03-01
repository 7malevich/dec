<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Привет");
?><style>
#hdr_anim_box1 {
  height:10px;
		/* background: linear-gradient(to right, rgb(41, 141, 219) 0%, rgb(41, 141, 219) 47%, rgb(241, 138, 33) 53%, rgb(241, 138, 33) 100%); */
  background: linear-gradient(to right, rgb(41, 141, 219) 0%, rgb(41, 141, 219) 23%, rgb(241, 138, 33) 27%, rgb(241, 138, 33) 73%, rgb(41, 141, 219) 77%, rgb(41, 141, 219) 100%);
  background-size: 500% 100%;
  -webkit-animation: hdr_anim_line1 12s linear reverse infinite;
  -moz-animation: hdr_anim_line1 12s linear reverse infinite;
		/* animation: hdr_anim_line1 5s cubic-bezier(0.7, 0, 0.3, 1) alternate infinite; */
  animation: hdr_anim_line1 60s linear reverse infinite;
  }
@-webkit-keyframes hdr_anim_line1 {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes hdr_anim_line1 {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes hdr_anim_line1 {
    from{background-position:0% 50%}
    to{background-position:100% 50%}
}
</style>

<div id="hdr_anim_box1"></div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>