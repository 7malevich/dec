$(function() {
    //Только цифры
    $('.numbers-mask').on('input', function() {
        $(this).val($(this).val().replace(',', '.'))
        $(this).val($(this).val().replace(/[^\d.]/ig, ''))
    });


    //Калькулятор
    $(document).on('change', 'select[name="group"]', function (e) {
        profitGroup();
    });

    profitGroup();

    function profitGroup() {
        var group = $('select[name="group"]').val();
        $('.profit-tarif').each(function (e) {
            var tarifSpan = $(this).find('span')
            var tapifClass = tarifSpan.attr('class')
            tarifSpan.text(tarifs[group][tapifClass])
        });
        setTimeout(function(){
            profitCallc();
        },100);
    }

    $(document).on('input', '.profit-calc .input', function (e) {
        profitGroup();
    });

    function profitCallc() {

        var odnotarif = (inputPay('CONSUMPTION_ALL').toFixed(2)).toString().split('.');
        $('.result--1 .rub').text(odnotarif[0]);
        $('.result--1 .cop').text(odnotarif[1]);

        var dvuhtarif = (inputPay('CONSUMPTION_T1') + inputPay('CONSUMPTION_T2')).toFixed(2).toString().split('.');
        $('.result--2 .rub').text(dvuhtarif[0]);
        $('.result--2 .cop').text(dvuhtarif[1]);
        var t1 = parseFloat($('input[name="CONSUMPTION_T1"]').val());
        if(!t1)t1=0;
        var t2 = parseFloat($('input[name="CONSUMPTION_T2"]').val());
        if(!t2)t2=0;
        var dvuTotal = t1 + t2;
        var fixedDvuTotal = 0
        if(dvuTotal > 0) {
            fixedDvuTotal= 2;
        }
        $('.result--2 .all-kvt').text((dvuTotal).toFixed(fixedDvuTotal));

        var trehtarif = (inputPay('CONSUMPTION_PIK') + inputPay('CONSUMPTION_POLUPIC') + inputPay('CONSUMPTION_NIGHT')).toFixed(2).toString().split('.');
        $('.result--3 .rub').text(trehtarif[0]);
        $('.result--3 .cop').text(trehtarif[1]);
        var pik = parseFloat($('input[name="CONSUMPTION_PIK"]').val());
        if(!pik)pik=0;
        var polupik = parseFloat($('input[name="CONSUMPTION_POLUPIC"]').val());
        if(!polupik)polupik=0;
        var night = parseFloat($('input[name="CONSUMPTION_NIGHT"]').val());
        if(!night)night=0;
        var triTotal = pik + polupik + night;
        var fixedTriTotal = 0
        if(triTotal > 0) {
            fixedTriTotal= 2;
        }
        $('.result--3 .all-kvt').text((triTotal).toFixed(fixedTriTotal));
    }

    function inputPay(tName){
        var cost = $(`input[name="${tName}"]`).val() * parseFloat($(`.${tName}`).text().trim())
        return cost
    }
});