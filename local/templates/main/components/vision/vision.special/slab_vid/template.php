<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/*echo $arResult['DATE'];*/
/*$APPLICATION->AddHeadString('<link rel="stylesheet" type="text/css" href="/bitrix/templates/furniture_blue/css/style.css">', true);*/

$_SESSION["special_version"] = "Y";
if( $_SESSION["special_version"] == "Y")
{
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/style.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi-font.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi.min.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi-font.min.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/style.css", true);
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.min.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi-init.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.min.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.min.js");}

?>

<p>
     <span class="header-link bvi-open">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M2.14535 10.5896C1.99577 10.358 1.87503 10.1574 1.78395 10C1.87503 9.84261 1.99577 9.64204 2.14535 9.41044C2.52953 8.81557 3.09847 8.0245 3.83711 7.23662C5.3296 5.64463 7.41626 4.16667 10 4.16667C12.5837 4.16667 14.6704 5.64463 16.1629 7.23662C16.9015 8.0245 17.4705 8.81557 17.8547 9.41044C18.0042 9.64204 18.125 9.84261 18.216 10C18.125 10.1574 18.0042 10.358 17.8547 10.5896C17.4705 11.1844 16.9015 11.9755 16.1629 12.7634C14.6704 14.3554 12.5837 15.8333 10 15.8333C7.41626 15.8333 5.3296 14.3554 3.83711 12.7634C3.09847 11.9755 2.52953 11.1844 2.14535 10.5896ZM19.9117 9.62673C19.9119 9.62704 19.912 9.62732 19.1667 10C19.912 10.3727 19.9119 10.373 19.9117 10.3733L19.9114 10.374L19.9104 10.3759L19.9075 10.3816L19.8981 10.4001C19.8901 10.4156 19.8789 10.4372 19.8644 10.4646C19.8354 10.5194 19.7933 10.5973 19.7384 10.695C19.6285 10.8903 19.4668 11.1654 19.2547 11.4938C18.8316 12.1489 18.2026 13.0245 17.3788 13.9033C15.7463 15.6446 13.2496 17.5 10 17.5C6.75041 17.5 4.25373 15.6446 2.62122 13.9033C1.79736 13.0245 1.16839 12.1489 0.74528 11.4938C0.533208 11.1654 0.371493 10.8903 0.261643 10.695C0.206686 10.5973 0.164617 10.5194 0.135628 10.4646C0.121131 10.4372 0.109896 10.4156 0.101948 10.4001L0.0924917 10.3816L0.0896158 10.3759L0.0886417 10.374L0.0882708 10.3733C0.0881177 10.373 0.0879773 10.3727 0.833333 10C0.0879773 9.62732 0.0881177 9.62704 0.0882708 9.62673L0.0886417 9.626L0.0896158 9.62406L0.0924917 9.61837L0.101948 9.59985C0.109896 9.58439 0.121131 9.56276 0.135628 9.53537C0.164617 9.48058 0.206686 9.40269 0.261643 9.30499C0.371493 9.1097 0.533208 8.8346 0.74528 8.50623C1.16839 7.85109 1.79736 6.9755 2.62122 6.09672C4.25373 4.35537 6.75041 2.5 10 2.5C13.2496 2.5 15.7463 4.35537 17.3788 6.09672C18.2026 6.9755 18.8316 7.85109 19.2547 8.50623C19.4668 8.8346 19.6285 9.1097 19.7384 9.30499C19.7933 9.40269 19.8354 9.48058 19.8644 9.53537C19.8789 9.56276 19.8901 9.58439 19.8981 9.59985L19.9075 9.61837L19.9104 9.62406L19.9114 9.626L19.9117 9.62673ZM19.1667 10L19.912 9.62732C20.0293 9.86193 20.0293 10.1381 19.912 10.3727L19.1667 10ZM0.0879773 9.62732L0.833333 10L0.0879773 10.3727C-0.0293258 10.1381 -0.0293258 9.86193 0.0879773 9.62732ZM8.33333 10C8.33333 9.07953 9.07952 8.33333 10 8.33333C10.9205 8.33333 11.6667 9.07953 11.6667 10C11.6667 10.9205 10.9205 11.6667 10 11.6667C9.07952 11.6667 8.33333 10.9205 8.33333 10ZM10 6.66667C8.15905 6.66667 6.66667 8.15905 6.66667 10C6.66667 11.8409 8.15905 13.3333 10 13.3333C11.8409 13.3333 13.3333 11.8409 13.3333 10C13.3333 8.15905 11.8409 6.66667 10 6.66667Z"
                              fill="#2C3148"></path>
                    </svg>
                    Версия сайта для слабовидящих

                </span>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> <script src="/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.min.js"></script> 
	<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.js"></script> 
	<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/bvi-init.js"></script> 
	<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.min.js"></script> 
<?if( isset( $_POST['old_version'] ) )
{$APPLICATION->SetAdditionalCSS($old_css, true);
$_SESSION["special_version"] = "N";
}
?>


<!--<div class="container-fluid">

        <div class="navbar navbar-default" role="navigation">

            <div class="row ">

                <div class="col-md-2 col-centered">

                    <p><?=GetMessage("ALIN_VISION_RAZMER_SRIFTA1")?></p>

                    <br/>

                    <div class="btn-group">

                        <button type="button" id="a2" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-minus"></span>
   
                     </button>
             
           <button type="button" id="a1" class="btn btn-default btn-sm">
           <span class="glyphicon glyphicon-plus"></span>
               
         </button>
                 
   </div>
               
 </div>
             
   <div class="col-md-2 col-centered">
   
                 <p><?=GetMessage("ALIN_VISION_SRIFT")?></p>
             
       <br/>
                  
    <div class="btn-group">
         
               <button type="button" class="btn btn-default btn-sm nop"  id="font1">
                        <span style="font-family:'Times New Roman';font-size:14px;"><?=GetMessage("ALIN_VISION_S_ZASECKAMI")?></span>
  
                        </button>
                        
                        <button type="button" class="btn btn-default btn-sm nop" id="font2">
                        <span style="font-family:'Arial';font-size:14px;"><?=GetMessage("ALIN_VISION_BEZ_ZASECEK")?></span>

                        </button>
                  
   </div>
                    
                    
                    
                    
             
   </div>
             
   <div class="col-md-3 col-centered">
     
               <p>
                  
      <span><?=GetMessage("ALIN_VISION_CVETA_SAYTA")?></span>
   
                 </p>
              
                 <br/>
              
      <div class="btn-group">

                        <button type="button" class="btn btn-default btn-sm" id="c1">
                        <span class="glyphicon glyphicon-font"></span>
            
            </button>
  
                      <button type="button" class="btn btn-default btn-sm" id="c2">
                      <span class="glyphicon glyphicon-font"></span>
              
          </button>
                   
     <button type="button" class="btn btn-default btn-sm" id="c3">
     <span class="glyphicon glyphicon-font"></span>
                
        </button>
                   
     <button type="button" class="btn btn-default btn-sm" id="c4">
<span class="glyphicon glyphicon-font"></span>
               
         </button>
                      
  <button type="button" class="btn btn-default btn-sm" id="c5">
<span class="glyphicon glyphicon-font"></span>
                 
       </button>
                
    </div>
           
     </div>
           
     <div class="col-md-2 col-centered">

                    <p><?=GetMessage("ALIN_VISION_IZOBRAJENIA")?></p>
  
                  <br/>
    
                <div class="btn-group" data-toggle="buttons">

                        <label class="btn btn-default  btn-sm redis">
  
                          <input type="radio" id="q156" name="imgvis" value="1" />
                          <span class="glyphicon glyphicon-eye-open"></span>

    
                         </label>

                        <label class="btn btn-default  btn-sm redis">

                        <input type="radio" id="q157" name="imgvis" value="2" />
                        <span class="glyphicon glyphicon-eye-close"></span>

                        </label>
                    
                        </div>
 
                        </div>
          
                        <div class="col-md-1 col-centered">
 
                   <p><span class="glyphicon glyphicon-resize-horizontal"><?=GetMessage("ALIN_VISION_INT")?></span>
 
                   </p>
 
                   <br/>

                   <div class="btn-group">

                        <button type="button" id="i2" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-minus"></span>

                        </button>

                        <button type="button" id="i1" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-plus"></span>
 
                       </button>


                    </div>

                </div>

                <div class="col-md-1 col-centered">

                <p><span class="glyphicon glyphicon-resize-vertical"><?=GetMessage("ALIN_VISION_INT")?></span>

                </p>
                    <br/>
                    
                <div class="btn-group">
 
                <div class="btn-group" data-toggle="buttons">

                            <label class="btn btn-default  btn-sm ol1">

                                <input type="radio" id="yr1" name="inter" value="1" /><span class="glyphicon glyphicon-resize-small"></span>


                            </label>
 
                    <label class="btn btn-default btn-sm ol1">

                    <input type="radio" id="yr2" name="inter" value="2" />
      <span class="glyphicon glyphicon-resize-full"></span>
 
      </label>
                        
</div>
                    
</div>
                
</div>
                
<div class="col-md-1 col-centered">
                    
<p></p>
                    
<br/>
                    
<div class="btn-group">
                        
<button class="btn btn-default btn-sm" id="reset"> 
<i class="glyphicon glyphicon-refresh"></i> 
<?=GetMessage("ALIN_VISION_SBROS")?></button>
                    
</div>
                
</div>
            
</div>
        
</div>
    
</div>-->