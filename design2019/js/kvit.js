document.addEventListener('DOMContentLoaded', ukazhite, false);
function ukazhite() {
  setTimeout(check_if_display_correct, 2500);
}
function check_if_display_correct() { //перезагружает страницу, если был глюк и дропбокс не отобразился
  e2 = document.getElementById('form_dropdown_kvit_email_otdelenie');
  e2_styles = window.getComputedStyle(e2);
  e2_display =  e2_styles.getPropertyValue('display');
  console.log(e2_display);
  if (e2_display == 'none') { 
    document.location.reload(); 
  } else {
    e1 = $( '#form_dropdown_kvit_email_otdelenie option:contains("Укажите")' );
    e1.attr('disabled','disabled');
    e1.removeAttr('selected','selected');
    e3 = $( '#form_dropdown_kvit_email_otkuda option:contains("Выберите")' );
    e3.attr('disabled','disabled');
    e3.removeAttr('selected','selected');
	$('#phone1').inputmask({"mask": "+7 (999) 999-99-99"});
	$('#phone2').inputmask({"mask": "+7 (999) 999-99-99"});
	$('#email1').inputmask("email");
	$('#email2').inputmask("email");
  }
}