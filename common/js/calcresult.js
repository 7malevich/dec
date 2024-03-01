п»ї  $(document).ready(function(){
// -----------------------------

// ------ РџРѕРєР°Р·С‹РІР°РµРј СЂРµР·СѓР»СЊС‚Р°С‚С‹ СЂР°СЃС‡РµС‚Р°
    $("#calm2").click(
        function () {
			if ( div_calc && show_credit_result( div_calc ) ) {
			  $("#calform").fadeOut("slow");
			  $("#calforma").css("display", "none");
			  $("#calres").css("display", "block");
			  $("#calresult").fadeIn("slow");
			}
    });
    $("#calm_dep").click(
        function () {
			if ( show_deposit_result() ) {
			  $("#calform").fadeOut("slow");
			  $("#calforma").css("display", "none");
			  $("#calres").css("display", "block");
			  $("#calresult").fadeIn("slow");
			}
    });
// ------ Р’РѕР·РІСЂР°С‰Р°РµРјСЃСЏ Рє С„РѕСЂРјРµ РєР°Р»СЊРєСѓР»СЏС‚РѕСЂР°
    $("#calback").click(
        function () {
          $("#calresult").fadeOut("slow");
          $("#calres").css("display", "none");
          $("#calforma").css("display", "block");
          $("#calform").fadeIn("slow");


//          $("#calresult").fadeOut("slow");
//          $("#calt4").css("display", "none");
//          $("#calm3").css("display", "none");
//          $("#calb3").css("display", "none");
//          $("#calt1").css("display", "block");
//          $("#calt2").css("display", "block");
//          $("#calt3").css("display", "block");
//          $("#calm1").css("display", "block");
//          $("#calm2").css("display", "block");
//          $("#calb1").css("display", "block");
//          $("#calb2").css("display", "block");
//          $("#calform").fadeIn("slow");


    });


// -----------------------------
  });