/* var cb;
cb = Crossbrowser('/css');

// элемент по ид
function _(id){
	return document.getElementById(id);
}

_('topSearchField').onfocus = function(){
	var val = this.getAttribute('value');
	if(!this.value || this.value == 'Поиск по сайту'){
		this.value = '';
	}
}; 

_('topSearchField').onblur = function(){
	var val = this.getAttribute('value');
	if(!this.value){
		this.value = 'Поиск по сайту';
	}
};

_('topSearchForm').validate = function(){
	var checkVal = _('topSearchField').value;
	return Boolean(checkVal && checkVal != 'Поиск по сайту');
};

_('topSearchForm').onsubmit = function(){
	return this.validate();
}

_('topSearchSubmit').onclick = function(){
	if(_('topSearchForm').validate()){
		_('topSearchForm').submit();
	}
}; 

$(function(){
	$('#regionSelect').selectbox({animationSpeed:200});
});
 */


function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}


// Редирект на региональный сайт
// Если есть значение куки и она в списке дозволенных, обязательно переходим на региональный сайт
function dvec_cookie_redirect(){
var region = $.cookie("dvec_region2");
if (region=="amursbyt" || region=="amur-blag" || region=="eaosbyt" || region=="khabsbyt" || region=="dalsbyt" || region=="sakhalin" || region=="yakutiya") {
var urlnew = "\/"+region+location.pathname;
urlnew=urlnew.replace(/\/+/gi, '\/');
window.location.href = urlnew;
} else 
{
$.removeCookie("dvec_region2");
}
}



$(function(){
		$('.spoiler-text').hide();
		$('.spoiler').click(function(){
			$(this).toggleClass("folded").toggleClass("unfolded").next().slideToggle();
		})
	});


// для спойлеров - вариант 2
/* $(document).ready(function(){
 $('.spoiler').click(function(){
  $(this).next('.spoiler-text').toggle('normal');
  return false;
 });
}); */

function time_in_office(this_div, hour, minute) // часы - "сейчас в офисе"
{
	if (hour < 0) {hour = 23};
	if (hour > 23) {hour = 0};
	h = hour;
	m = minute;
	if (hour < 10) {h = "0" + hour};
	if (minute < 10) {m = "0" + minute};
	document.getElementById(this_div).innerHTML=h + ':' + m;
	minute = minute + 1;
	if (minute > 59) {minute = 0; hour = hour + 1};
	var t = setTimeout(function(){ time_in_office(this_div, hour, minute)}, 60000); // ошибка too much recursion вылечена обертыванием
}