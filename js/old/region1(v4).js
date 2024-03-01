var current_region_id = '1';
var ROOT_DIR = 'moscow';
var DIR_NAME = 'ru';
var region = $.cookie("dvec_region");
var PARAMS = '##';


// меняем москву в старых куки на дальсбыт 
if (region=="moscow") {
region = "dalsbyt";
$.cookie('dvec_region', region, { expires: 1000, path: '\/'});
}; 


jQuery.fn.extend({
        disableSelection : function() {
                this.each(function() {
                        this.onselectstart = function() { return false; };
                        this.unselectable = "on";
                        jQuery(this).css('-moz-user-select', 'none');
                });
        }
});
$.armdoverlaybg = {
	create: function() {
		var $el = $('<div></div>').appendTo(document.body)
					.addClass('armdoverlaybg-overlay').css({
						width: this.width(),
						height: this.height(),
						top:0,
						left:0,
						position:"absolute",
						"z-index":1009
					});
		return $el;
	},
	destroy: function($el) {
		try{
			$el.remove();
		}catch(e){};
	},
	height: function() {
		// handle IE 6
		if ($.browser.msie && $.browser.version < 7) {
			var scrollHeight = Math.max(
				document.documentElement.scrollHeight,
				document.body.scrollHeight
			);
			var offsetHeight = Math.max(
				document.documentElement.offsetHeight,
				document.body.offsetHeight
			);

			if (scrollHeight < offsetHeight) {
				return $(window).height() + 'px';
			} else {
				return scrollHeight + 'px';
			}
		// handle "good" browsers
		} else {
			return $(document).height() + 'px';
		}
	},
	width: function() {
		// handle IE 6
		if ($.browser.msie && $.browser.version < 7) {
			var scrollWidth = Math.max(
				document.documentElement.scrollWidth,
				document.body.scrollWidth
			);
			var offsetWidth = Math.max(
				document.documentElement.offsetWidth,
				document.body.offsetWidth
			);

			if (scrollWidth < offsetWidth) {
				return $(window).width() + 'px';
			} else {
				return scrollWidth + 'px';
			}
		// handle "good" browsers
		} else {
			return $(document).width() + 'px';
		}
	}
};


// если регион не установлен:
if (!region && checkCookie()) {
	if(DIR_NAME == "ru" && current_region_id=='1') {
	$(document).ready(function(){
			$("#regionDialogSelect").val("dalsbyt");
			$("#select_region_dialog").dialog({modal:true,minWidth:235,resizable:false,width:695,height:400,
			open: function(){
					$(".close-menu-button2").click(function(){
						$("#select_region_dialog").dialog("close");
						$(".region_menu").hide();
						$.armdoverlaybg.destroy(rbg);
					});
				}
			});
		$(".w_button_img").click(
			function(){
				region = $("#regionDialogSelect").val();
// if (region=="moscow")  {
// region="dalsbyt";
// }

// если регион не выбран, выбираем дальсбыт
if (region!="amursbyt" && region!="eaosbyt" && region!="khabsbyt" && region!="dalsbyt") {
region = "dalsbyt";
}
				$.cookie('dvec_region', region, { expires: 1000, path: '\/'});
				$("#select_region_dialog").dialog("close");

				var url = "\/"+region+"\/";

				if (region!="moscow")  {
					url=url.replace(/\/+/gi, '\/');
					window.location.href = url; //редирект по нажатию кнопки в центральном окне
				}  
			}
		);
	});
	} else {
	}
}
//region = (region)?region:ROOT_DIR;
region = ROOT_DIR;
$(document).ready(function(){
	$("#regionDialogSelect").val(region);
	var rm = $(".region_menu_temp").clone();
	rm.removeClass("region_menu_temp");
	rm.addClass("region_menu");
	$("body").append(rm);
	$(".region_menu_temp").remove();
	$(".region_menu").disableSelection();
	$(".region_menu").bgiframe({width:"242px",height:"279px"});
	$("div [region='"+region+"']").addClass("region_item_selected");
	$("#regionValue").val($("div [region='"+region+"'] > span").text().replace(/(^\s+)|(\s+$)/g, ""));
	$("#regionValue2").val($("div [region='"+region+"'] > span").text().replace(/(^\s+)|(\s+$)/g, ""));

	$("#regionValue").focus(function(){$("#regionValue").blur()});
	$("#regionValue2").focus(function(){$("#regionValue2").blur()});


	$(".region_item").hover(
	function(){
		$(this).addClass("region_item_hover");
	},
		function(){
		$(this).removeClass("region_item_hover");
	});
});

var rbg = {};
function showRegionMenu(isDialog){
	if($(".region_menu").css("display")=="block"){
		$(".region_menu").hide();
		$.armdoverlaybg.destroy(rbg);
	} else {
		if (!isDialog){
			var p = $(".regionDropDown2").offset();

			$(".region_item").unbind().click(function(){
				var region = $(this).attr("region");
				var url1 = "\/"+$(this).attr("region")+"\/";
				var temp = $(this).attr("dir_path");
				var url2 = (temp)?temp.replace(/\\/g,"\/"):'';
				var url = (url2)?("\/"+$(this).attr("region")+url2+PARAMS.replace("##","\/")):url1;
				$(".region_menu").hide();
				$.armdoverlaybg.destroy(rbg);
				$("#regionValue2").val($("span", this).text().replace(/(^\s+)|(\s+$)/g, ""));
				$("#regionDialogSelect").val(region);
//				window.location.href = url;
			}).hover(
	function(){
		$(this).addClass("region_item_hover");
	},
		function(){
		$(this).removeClass("region_item_hover");
	});


		} else {
			var p = $(".regionDropDown1").offset();

			$(".region_item").unbind().click(function(){
				var region = $(this).attr("region");
				$.cookie('dvec_region', region, { expires: 1000, path: '\/'});
				var url1 = "\/"+$(this).attr("region")+"\/";
				var temp = $(this).attr("dir_path");
				var url2 = (temp)?temp.replace(/\\/g,"\/"):'';
				var url = (url2)?("\/"+$(this).attr("region")+url2+PARAMS.replace("##","\/")):url1;
				url=url.replace(/\/+/gi, '\/');
window.location.href = url; // переход при выборе пункта в списке справа вверху

			}).hover(
	function(){
		$(this).addClass("region_item_hover");
	},
		function(){
		$(this).removeClass("region_item_hover");
	});

		}
		$(".region_menu").css({top:p.top+25,left:p.left-25}).show();
		makeScroll();
		rbg = $.armdoverlaybg.create();
		rbg.click(showRegionMenu);
	}
}
function makeScroll(){
	$("#r_menu").jScrollPane({showArrows:true,dragMaxHeight:12});
	$("#r_menu")[0].scrollTo(".region_item_selected");
}
function checkCookie(){
	$.cookie('test_cookie', "test", { expires: 1000, path: '\/'});
	var test = 	$.cookie('test_cookie');
	$.cookie('test_cookie', null, { expires: 1000, path: '\/'});
	return (test)?true:false;
}