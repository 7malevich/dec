<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Определение объема потребления электрической энергии (мощности)");
?>
<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "PATH" => "",
    "SITE_ID" => "ru",
    "START_FROM" => "1",
),
    false
); ?>
<div class="container">
    <h1 class="h1-marginBot h1-relative"><?= $APPLICATION->showTitle() ?></h1>
</div>

    <section class="section-mt-2">
        <div class="container">
            <div class="spoiler" id="bx_3218110189_883">
                <div class="spoiler__title">
                    <div class="h5">
                        Расчетные способы определения объемов потребления электрической электроэнергии
                    </div>
                </div>
                <div class="spoiler__content text-block" style="display: none;">
                    <p><strong>По факту выявленного в ходе проверки </strong><strong>безучетного</strong><strong>
                            потребления или бездоговорного потребления электрической энергии составляется акт о
                            неучтенном потреблении электрической энергии и не позднее 3 рабочих дней с даты его
                            составления передается в адрес:</strong></p>

                    <ul>
                        <li>
                            <p><em>гарантирующего поставщика;</em></p>
                        </li>
                        <li>
                            <p><em>лица, осуществившего бездоговорное потребление.</em></p>
                        </li>
                    </ul>

                    <p>Факт безучетного потребления может быть выявлен, в том числе при проведении проверки состояния
                        приборов учета, а также в ходе проведения осмотра прибора учета перед его демонтажем.</p>

                    <p>В случае если сетевая организация не присутствовала при проведении гарантирующим поставщиком
                        проверки состояния приборов учета, в результате которой был выявлен факт безучетного
                        потребления, то акт о неучтенном потреблении электрической энергии составляется гарантирующим
                        поставщиком и не позднее 3 рабочих дней со дня его составления передается в сетевую организацию.
                    </p>

                    <p>По факту выявленного безучетного потребления, расчетный прибор учета признается вышедшим из
                        строя.</p>

                    <p>Расчет объема безучетного потребления направляется сетевой организацией гарантирующему поставщику
                        вместе с актом о неучтенном потреблении электрической энергии не позднее 3 рабочих дней с даты
                        его составления.</p>

                    <p>Объем безучетного потребления в отношении потребителей электрической энергии (мощности), за
                        исключением населения и приравненных к нему категорий потребителей, определяется с применением
                        расчетного способа,&nbsp;предусмотренного подпунктом «а» пункта 1 приложения N 3&nbsp;Основных
                        положений функционирования розничных рынков электрической энергии, у
                        утвержденных&nbsp;постановлением Правительства РФ от 04.05.2012 N 442</p>

                    <p>Объем безучетного потребления определяется с даты предыдущей проверки прибора учета (в случае
                        если такая проверка не была проведена в запланированные сроки, - определяется с даты, не позднее
                        которой она должна была быть проведена в соответствии с настоящим документом) до даты выявления
                        факта безучетного потребления и составления акта о неучтенном потреблении электрической энергии.
                    </p>

                    <p>Стоимость электрической энергии в объеме безучетного потребления включается гарантирующим
                        поставщиком в выставляемый потребителю (покупателю) счет на оплату стоимости электрической
                        энергии (мощности), приобретенной по договору, за тот расчетный период, в котором был выявлен
                        факт безучетного потребления и составлен акт о неучтенном потреблении электрической энергии.</p>

                    <p>Потребитель (покупатель) обязан оплатить счет в срок, определенный в договоре.</p>

                    <p>С даты составления акта о неучтенном потреблении электрической энергии до даты замены прибора
                        учета объем потребления электрической энергии (мощности) определяется в порядке, предусмотренном
                        требованиями пункта 179 Правил,&nbsp;по замещающей информации.</p>

                    <p>Объем безучетного потребления в отношении приравненных к населению категорий потребителей
                        определяется исходя из объема, рассчитанного на основании показаний расчетного прибора учета за
                        аналогичный расчетный период предыдущего года с применением повышающего коэффициента 10, а при
                        отсутствии указанных показаний - на основании показаний расчетного прибора учета за ближайший
                        расчетный период, когда такие показания были представлены, с применением повышающего
                        коэффициента 10.</p>

                    <p>Объем безучетного потребления в отношении населения определяется в порядке, предусмотренном
                        Правилами предоставления коммунальных услуг собственникам и пользователям помещений в
                        многоквартирных домах и жилых домов, утвержденными&nbsp;постановлением Правительства Российской
                        Федерации от 06.05.2011 N 354 «О предоставлении коммунальных услуг собственникам и пользователям
                        помещений в многоквартирных домах и жилых домов».</p>

                    <p>Объем бездоговорного потребления электрической энергии определяется расчетным способом,
                        предусмотренным пунктом 2 приложения N 3 Основных положений функционирования розничных рынков
                        электрической энергии, утвержденных&nbsp;постановлением Правительства РФ от 04.05.2012 N 442.
                    </p>

                    <p>Объем определяется за период времени, в течение которого осуществлялось бездоговорное потребление
                        электрической энергии, но не более чем за один год.</p>

                    <p>Стоимость объема бездоговорного потребления за весь период его осуществления рассчитывается
                        исходя из цены, по которой сетевая организация приобретает электрическую энергию (мощность) в
                        целях компенсации потерь в объеме, не превышающем объема потерь, учтенного в сводном прогнозном
                        балансе, в тот же расчетный период, в котором составлен акт о неучтенном потреблении
                        электрической энергии, и тарифа на услуги по передаче электрической энергии на соответствующем
                        уровне напряжения.</p>
                </div>
            </div>
            <div class="spoiler" id="bx_3218110189_884">
                <div class="spoiler__title">
                    <div class="h5">
                        Формы предоставления данных о почасовых (30-минутных) объемах потребления электрической энергии
                        и мощности </div>
                </div>
                <div class="spoiler__content text-block" style="display: none;">
                    <p>
                        Объем электрической энергии, поставленной на общедомовые нужды (в целях содержания общего
                        имущества), определяется по формуле:
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p style="text-align: center;">
                        <b>&nbsp;V<span style="font-size: 10pt;">д</span>=V<span
                                style="font-size: 10pt;">одпу</span>-V<span style="font-size: 10pt;">потр</span></b>,
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                        где:
                    </p>
                    <p>
                        V<span style="font-size: 10pt;">одпу</span> - объем потребления электрической энергии,
                        определенный по показаниям коллективного (общедомового) прибора учета за расчетный период
                        (расчетный месяц);
                    </p>
                    <p>
                        V<span style="font-size: 10pt;">потр</span>- объем потребления электрической энергии, подлежащий
                        оплате потребителями в многоквартирном доме, определенный за расчетный период.
                    </p>
                    <p>
                        В случае если величина V<span style="font-size: 10pt;">потр</span>&nbsp;превышает или равна
                        величине V<span style="font-size: 10pt;">одпу</span>, то объем потребления электрической
                        энергии, подлежащий оплате Покупателем в отношении многоквартирного дома за расчетный период
                        (расчетный месяц), принимается равным 0.
                    </p>
                    <p>
                        При этом величина, на которую V<span style="font-size: 10pt;">потр</span> превышает V<span
                            style="font-size: 10pt;">одпу</span>, уменьшает объем коммунального ресурса, подлежащий
                        оплате исполнителем по договору ресурсоснабжения в отношении многоквартирного дома в следующем
                        за расчетным периодом расчетном периоде (следующих расчетных периодах).
                    </p>
                    <p>
                        В случае выхода из строя, утраты ранее введенного в эксплуатацию коллективного (общедомового)
                        прибора учета или истечения срока его эксплуатации в течение 3 месяцев после наступления такого
                        события (если период работы прибора учета составил более 3 месяцев) за расчетный период
                        (расчетный месяц), величина потребления электрической энергии&nbsp;в целях содержания общего
                        имущества определяется по формуле:
                    </p>
                    <p>
                    </p>
                    <p style="text-align: center;">
                        <b>&nbsp;V</b><b><span style="font-size: 10pt;">д</span></b><b>=V</b><span
                            style="font-size:10.8333px"><b><span style="font-size: 10pt;">одн1</span>,</b></span>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                        где:
                    </p>
                    <p>
                        V<span style="font-size: 10pt;">одн1</span>- объем (количество) коммунального ресурса,
                        потребленного при содержании общего имущества в многоквартирном доме, определенный за расчетный
                        период исходя из среднемесячного объема потребления коммунального ресурса&nbsp;в целях
                        содержания общего имущества, определенного за период не менее 6 месяцев, а если период работы
                        прибора учета составил меньше 6 месяцев, - то за фактический период работы прибора учета, но не
                        менее 3 месяцев.
                    </p>
                    <p>
                        В случае отсутствия коллективного (общедомового) прибора учета, либо после выхода из строя,
                        утраты ранее введенного в эксплуатацию коллективного (общедомового) прибора учета или истечения
                        срока его эксплуатации, если период работы прибора учета составил менее 3 месяцев, либо по
                        истечении 3 месяцев с момента выхода из строя, утраты ранее введенного в эксплуатацию
                        коллективного (общедомового) прибора учета или истечения срока его эксплуатации, если период
                        работы прибора учета составил более 3 месяцев, при непредставлении Покупателем сведений о
                        показаниях коллективного (общедомового) прибора учета в сроки, установленные законодательством
                        величина потребления электрической энергии&nbsp;в целях содержания общего имущества определяется
                        за расчетный период (расчетный месяц) по формуле:
                    </p>
                    <p>
                    </p>
                    <p style="text-align: center;">
                        <b>&nbsp;V</b><b><span style="font-size: 10pt;">д</span></b><b>=Vн</b><b><span
                                style="font-size: 10pt;">одн</span></b>
                    </p>
                    <p>
                    </p>
                    <p>
                    </p>
                    <p>
                        где
                    </p>
                    <p>
                        Vн<span style="font-size: 10pt;">одн</span>&nbsp;- объем (количество) коммунального ресурса,
                        потребленного при содержании общего имущества в многоквартирном доме, определенный за расчетный
                        период исходя из нормативов потребления в целях содержания общего имущества в многоквартирном
                        доме, утвержденных органами государственной власти субъектов Российской Федерации.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>