//строка "установить мобильное приложение"
jQuery(document).ready(function($){
//проверка куки, если показывал, тогда не запускается
if(!$.cookie('deklc'))
  {
  	//для ios
    if($('html').hasClass('ios')) {
        $('#topreg').addClass('is-visible');
		$('#topreg').html('<div style="display: block;position: relative;margin: 0 auto;padding: 30px 0 16px 0;color: #5c5c5c;height: 98px;"><a href="#0" id="regclose"><img style="height: 60px;width: 60px;float: right;position: relative;right: 24px;top:12px;" src="/images/design2016/lk_adv_knp_zakr.png"></a><a href="https://itunes.apple.com/ru/app/licnyj-kabinet-pao-dek/id1188929755?mt=8"><div style="color: #fff;position: relative;float: left;font-size: 34px;top:11px;left: 28px;line-height: 31px;">ЛИЧНЫЙ КАБИНЕТ<br> В ВАШЕМ СМАРТФОНЕ!</div><div style="color: #fff;background-color: #0aa1b8;position: relative;font-size: 32px;float: right;border-radius: 5px;border: 3px solid #fff;top: 9px;right: 45px;padding: 5px 15px;">УСТАНОВИТЬ ПРИЛОЖЕНИЕ</div></a></div>');
    }
    //для android
    if($('html').hasClass('android')) {
        $('#topreg').addClass('is-visible');
        $('#topreg').html('<div style="display: block;position: relative;margin: 0 auto;padding: 30px 0 16px 0;color: #5c5c5c;height: 98px;"><a href="#0" id="regclose"><img style="height: 60px;width: 60px;float: right;position: relative;right: 24px;top:12px;" src="/images/design2016/lk_adv_knp_zakr.png"></a><a href="https://play.google.com/store/apps/details?id=ru.white_soft.dec_android&amp;hl=ru"><div style="color: #fff;position: relative;float: left;font-size: 34px;top:11px;left: 28px;line-height: 31px;">ЛИЧНЫЙ КАБИНЕТ<br> В ВАШЕМ СМАРТФОНЕ!</div><div style="color: #fff;background-color: #0aa1b8;position: relative;font-size: 32px;float: right;border-radius: 5px;border: 3px solid #fff;top: 9px;right: 45px;padding: 5px 15px;">УСТАНОВИТЬ ПРИЛОЖЕНИЕ</div></a></div>');
    }

    //обработчик кнопки закрытия и добавления куки
    $('#regclose').on('click', function(event){
    
       $('#topreg').removeClass('is-visible');
       $.cookie('deklc', true ,{
       	expires: 100,
       	path: '/'
       });
       event.preventDefault();
      
    });

  }
});