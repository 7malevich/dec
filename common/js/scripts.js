// Устранение мигания фоновых картинок в IE6
try { document.execCommand( 'BackgroundImageCache', false, true ) } catch ( e ) { }
// menu.js
function openclose1(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op1.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose2(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op2.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose3(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op3.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose4(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op4.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose5(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op5.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose6(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op6.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose7(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op7.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose8(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op8.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose9(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op9.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function openclose10(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^op10.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function accordeon(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^a.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function lists(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^list.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function _lists(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^_list.+/.test(all_divs[div].id))all_divs[div].style.display=all_divs[div].id==a?'block':'none'}function selunsel(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^sel.+/.test(all_divs[div].id))all_divs[div].className=all_divs[div].id==a?'sel':'unsel'}function _selunsel(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^_sel.+/.test(all_divs[div].id))all_divs[div].className=all_divs[div].id==a?'sel':'unsel'}function leftmenu(a){all_divs=document.getElementsByTagName('div');for(div in all_divs)if(all_divs[div].id&&/^lm.+/.test(all_divs[div].id))all_divs[div].className=all_divs[div].id==a?'sel':'unsel'}
//$(document).ready(function(){$(".buttom").click(function(){if($("#"+$(this).attr("id")+"0").is(":hidden")){$(this).attr("src","../../../common/ibank/img/but/lm-dwn.gif");$("#"+$(this).attr("id")+"0").fadeIn()}else{$(this).attr("src","../../../common/ibank/img/but/lm-up.gif");$("#"+$(this).attr("id")+"0").fadeOut()}})});
function addListener(a,b,c){try{if(document.attachEvent)a.attachEvent('on'+b,c);else if(document.addEventListener)a.addEventListener(b,c,true);else eval(a+'.on'+b+'='+c)}catch(e){}}
// interface2.js
try{document.execCommand('BackgroundImageCache',false,true)}catch(e){}function set_font(a){var b='../../../common/ibank/css/';var c=document.getElementById('css-font');switch(a){case'scena236':c.href=b+'scena236.css';break;case'scena235':c.href=b+'scena235.css';break;case'scena234':c.href=b+'scena234.css';break;case'scena233':c.href=b+'scena233.css';break;case'scena232':c.href=b+'scena232.css';break;case'scena231':c.href=b+'scena231.css';break;case'scena22':c.href=b+'scena22.css';break;default:c.href=b+'scena21.css'}}
// lib.js
var isDOM=(document.getElementById?true:false);var isIE4=((document.all&&!isDOM)?true:false);var isNS4=(document.layers?true:false);var tttt="";function getRef(a){return $("#"+a)}function getSty(a){return(isNS4?getRef(a):getRef(a).style)}
// style.js
browserName=navigator.appName;browserVer=parseInt(navigator.appVersion);var agent=navigator.userAgent;if(agent.indexOf("Opera")>-1){document.writeln("<link rel=stylesheet type=text/css href=\"../../../common/css/op.css\">")}else if((browserVer>3)&&(browserName=="Microsoft Internet Explorer")){document.writeln("<link rel=stylesheet type=text/css href=\"../../../common/css/ie.css\">")}else if((browserVer>3)&&(browserName=="Netscape")){document.writeln("<link rel=stylesheet type=text/css href=\"../../../common/css/nn4.css\">")}function addListener(a,b,c){try{if(document.attachEvent)a.attachEvent('on'+b,c);else if(document.addEventListener)a.addEventListener(b,c,true);else eval(a+'.on'+b+'='+c)}catch(e){}}
// tabs.js
$(function(){var a=$('div.tabs > div');a.hide().filter(':first').show();var b=new Image();b.src='../../../common/img/menu2/fon_tab2s.jpg';$('div.tabs ul.tabNavigation a').click(function(){a.hide();a.filter(this.hash).show();$('div.tabs ul.tabNavigation a').removeClass('selected');$(this).addClass('selected');return false}).filter(':first').click()});
// opisanie.js
function show(a,b){$('#id0').html($('#'+b).html());$(a).find('.i1').hide();$(a).find('.i2').show()}function hide(a){$(a).find('.i2').hide();$(a).find('.i1').show()}