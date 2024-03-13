<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<p>
    С 1 сентября 2012 г., согласно Правилам предоставления коммунальных услуг собственникам и пользователям помещений в многоквартирных домах и жилых домов, утвержденных Постановлением Правительства РФ от 06.05.2011г. №354, объем электроэнергии, приходящийся на общедомовые нужды (ОДН), рассчитывается и распределяется между потребителями пропорционально размеру общей площади принадлежащего каждому потребителю (находящегося в его пользовании) жилого или нежилого помещения в многоквартирном доме.
</p>
<p>
    Расчет размера платы за коммунальную услугу электроснабжения на общедомовые нужды&nbsp;<strong>(формула №10 Приложения №2 Правил)</strong>&nbsp;следующий:
</p>
<p>
    <img alt="formula_10.gif" src="/upload/medialibrary/e0f/20vh336u8qee6tfz0mxr309u9zqybw5u/formula_10.gif" title="formula_10.gif">&nbsp;,
</p>
<p>
    где:
</p>
<p>
    <strong><img alt="formula_10_symbol_1.gif" src="/upload/medialibrary/b21/ntoz72b0fqhups09c28wb9pyht3wnc5y/formula_10_symbol_1.gif" title="formula_10_symbol_1.gif"></strong>&nbsp;- объем (количество) коммунального ресурса, предоставленный за расчетный период на общедомовые нужды в многоквартирном доме и приходящийся на i-е жилое помещение (квартиру) или нежилое помещение;
</p>
<p>
    <strong><img alt="formula_10_symbol_2.gif" src="/upload/medialibrary/0a6/o66flb3oadhrabhykxmx429yz9a1hkze/formula_10_symbol_2.gif" title="formula_10_symbol_2.gif"></strong>&nbsp;- тариф на соответствующий коммунальный ресурс, установленный в соответствии с законодательством Российской Федерации.
</p>
<h4>Если дом оборудован коллективным (общедомовым) прибором учета (ОДПУ):</h4>
<p>
    Объем электрической энергии, предоставленный за расчетный период на общедомовые нужды, приходящийся на i-е жилое помещение (квартиру) или нежилое помещение, рассчитывается&nbsp;<strong>по формуле №12 Приложения №2 Правил:</strong>
</p>
<p>
    <img alt="formula_12.gif" src="/upload/medialibrary/c39/wj69k2qwlj9qtj6t6qlj6mqx3717nvgm/formula_12.gif" title="formula_12.gif">&nbsp;,
</p>
<p>
    где:
</p>
<p>
    <strong><img alt="formula_12_symbol_1.gif" src="/upload/medialibrary/242/5ina7qu79l93vq3u91fdid3i1z419cv6/formula_12_symbol_1.gif" title="formula_12_symbol_1.gif"></strong>&nbsp;– объем (количество) коммунального ресурса, потребленный за расчетный период в многоквартирном доме, определенный по показаниям коллективного (общедомового) прибора учета коммунального ресурса. В случаях, предусмотренных пунктом 59(1) Правил, для расчета размера платы за коммунальные услуги используется объем (количество) коммунального ресурса, определенный в соответствии с положениями указанного пункта;
</p>
<p>
    <strong><img alt="formula_12_symbol_2.gif" src="/upload/medialibrary/c52/wd1xn6vymdk38batlckgtaykre6qqsxh/formula_12_symbol_2.gif" title="formula_12_symbol_2.gif"></strong>&nbsp;– объем (количество) коммунального ресурса, потребленный за расчетный период в u-м нежилом помещении, определенный в соответствии с пунктом 43 Правил;
</p>
<p>
    <strong><img alt="formula_12_symbol_3.gif" src="/upload/medialibrary/283/jf9lvcdj7vfdobj6pkiy1d8br0iiu32b/formula_12_symbol_3.gif" title="formula_12_symbol_3.gif"></strong>&nbsp;– объем (количество) коммунального ресурса, потребленный за расчетный период в v-м жилом помещении (квартире), не оснащенном индивидуальным или общим (квартирным) прибором учета;
</p>
<p>
    <strong><img alt="formula_12_symbol_4.gif" src="/upload/medialibrary/25f/ycg33050u9oa17les7o4k7cbgspewp7r/formula_12_symbol_4.gif" title="formula_12_symbol_4.gif"></strong>&nbsp;– объем (количество) коммунального ресурса, потребленный за расчетный период в w-м жилом помещении (квартире), оснащенном индивидуальным или общим (квартирным) прибором учета коммунального ресурса, определенный по показаниям такого прибора учета. В случаях, предусмотренных пунктом 59 Правил, для расчета размера платы за коммунальные услуги используется объем (количество) коммунального ресурса, определенный в соответствии с положениями указанного пункта;
</p>
<p>
    <strong><img alt="formula_12_symbol_5.gif" src="/upload/medialibrary/a0e/41czhhi262vurrx3ux2iexjjd3ni4b7p/formula_12_symbol_5.gif" title="formula_12_symbol_5.gif"></strong>&nbsp;– определяемый в соответствии с пунктом 54 Правил объем соответствующего вида коммунального ресурса (электрическая энергия, газ), использованный за расчетный период исполнителем при производстве коммунальной услуги по отоплению и (или) горячему водоснабжению (при отсутствии централизованного теплоснабжения и (или) горячего водоснабжения), который кроме этого также был использован исполнителем в целях предоставления потребителям коммунальной услуги по электроснабжению и (или) газоснабжению;
</p>
<p>
    <strong><img alt="formula_12_symbol_6.gif" src="/upload/medialibrary/145/6lcvsbkvyx529wgarzg0afd6ezd3vpjt/formula_12_symbol_6.gif" title="formula_12_symbol_6.gif"></strong>&nbsp;– общая площадь i-го жилого помещения (квартиры) или нежилого помещения в многоквартирном доме;
</p>
<p>
    <strong><img alt="formula_12_symbol_7.gif" src="/upload/medialibrary/80f/5bmfq1ldaz5ji1zbdhdyucig5z04xsca/formula_12_symbol_7.gif" title="formula_12_symbol_7.gif"></strong>&nbsp;– общая площадь всех жилых помещений (квартир) и нежилых помещений в многоквартирном доме.
</p>

<h5><u><em>Пример расчета ОДН по жилому помещению в многоквартирном жилом доме, оснащенном ОДПУ:</em></u></h5>
<p>
    <img alt="formula_12_symbol_1.gif" src="/upload/medialibrary/242/5ina7qu79l93vq3u91fdid3i1z419cv6/formula_12_symbol_1.gif" title="formula_12_symbol_1.gif">&nbsp;= 12000 кВт*ч ;
</p>
<p>
    <img alt="formula_12_symbol_2.gif" src="/upload/medialibrary/c52/wd1xn6vymdk38batlckgtaykre6qqsxh/formula_12_symbol_2.gif" title="formula_12_symbol_2.gif">&nbsp;= 1000 кВт*ч;
</p>
<p>
    <img alt="formula_12_symbol_3.gif" src="/upload/medialibrary/283/jf9lvcdj7vfdobj6pkiy1d8br0iiu32b/formula_12_symbol_3.gif" title="formula_12_symbol_3.gif">&nbsp;= 4000 кВт*ч;
</p>
<p>
    <img alt="formula_12_symbol_4.gif" src="/upload/medialibrary/25f/ycg33050u9oa17les7o4k7cbgspewp7r/formula_12_symbol_4.gif" title="formula_12_symbol_4.gif">&nbsp;= 5000 кВт*ч;
</p>
<p>
    <img alt="formula_12_symbol_6.gif" src="/upload/medialibrary/145/6lcvsbkvyx529wgarzg0afd6ezd3vpjt/formula_12_symbol_6.gif" title="formula_12_symbol_6.gif">&nbsp;= 60 кв. м;
</p>
<p>
    <img alt="formula_12_symbol_7.gif" src="/upload/medialibrary/80f/5bmfq1ldaz5ji1zbdhdyucig5z04xsca/formula_12_symbol_7.gif" title="formula_12_symbol_7.gif">&nbsp;= 2400 кв. м;
</p>
<p>
    <img alt="formula_10_symbol_2.gif" src="/upload/medialibrary/0a6/o66flb3oadhrabhykxmx429yz9a1hkze/formula_10_symbol_2.gif" title="formula_10_symbol_2.gif">&nbsp;= 1,936 руб./кВт*ч.
</p>
<p>
    <strong><img alt="formula_10_symbol_1.gif" src="/upload/medialibrary/b21/ntoz72b0fqhups09c28wb9pyht3wnc5y/formula_10_symbol_1.gif" title="formula_10_symbol_1.gif">&nbsp;= (12000 - 1000 - 4000 - 5000) * (60 / 2400) * 1,936 = 96,8 руб.</strong>
</p>
<p>
    При этом объем ОДН не зависит от потребления по индивидуальному прибору учета. То есть платеж за «Начисление за общедомовые нужды» по квартире составит 96,8 руб., в независимости от того, сколько электроэнергии потрачено.
</p>
<p>
    Например, если израсходовано по индивидуальному прибору учета 150 кВт, то совокупный платеж по электроэнергии составит:
</p>
<p>
    <strong>150 * 1,936 + 96,8 = 387,20 руб.</strong>
</p>
<p>
    Если потребитель отсутствовал в расчетном периоде, то совокупный платеж за электроэнергию составит:
</p>
<p>
    <strong>0 * 1,936 + 96,8 = 96,8 руб.</strong>
</p>

<h4>Если ОДПУ неисправен:</h4>
<p>
    В случаях, когда общедомовой счетчик неисправен (полный перечень случаев см. в п.60), плата за коммунальную услугу на общедомовые нужды определяется исходя из рассчитанного среднемесячного объема потребления по предыдущим показаниям общедомового счетчика, но не более 3 расчетных периодов подряд.
</p>
<p>
    &nbsp;
</p>
<h3>Если дом не оборудован ОДПУ:</h3>
<p>
    В этом случае, в соответствии с пунктом 48, размер платы за коммунальную услугу, предоставленную на общедомовые нужды, определяется в соответствии с формулами 10 и 15.
</p>
<p>
    Приходящийся на i-е жилое помещение (квартиру) или нежилое помещение объем (количество) коммунального ресурса (тепловая энергия, холодная вода, горячая вода, газ, сточные бытовые воды, электрическая энергия), предоставленный за расчетный период на общедомовые нужды в многоквартирном доме, не оборудованном коллективным (общедомовым) прибором учета, определяется<strong>&nbsp;по формуле 15:</strong>
</p>
<p>
    <img alt="formula_15.gif" src="/upload/medialibrary/c79/kx9g13v553sb9xwdsxcva43vuflqr9ed/formula_15.gif" title="formula_15.gif">&nbsp;,
</p>
<p>
    где:
</p>
<p>
    <img alt="formula_15_symbol_2.gif" src="/upload/medialibrary/068/y483ilrcj6fdlk5j12t1sx9ag8iqyknc/formula_15_symbol_2.gif" title="formula_15_symbol_2.gif">&nbsp;– норматив потребления соответствующего вида коммунальной услуги, предоставленной за расчетный период на общедомовые нужды в многоквартирном доме, установленный в соответствии с Правилами установления и определения нормативов потребления коммунальных услуг, утвержденными постановлением Правительства Российской Федерации от 23 мая 2006 г. № 306;
</p>
<p>
    <img alt="formula_15_symbol_3.gif" src="/upload/medialibrary/f76/gogjqu4fanycdxhlyn3ugaxwjgl4ecmd/formula_15_symbol_3.gif" title="formula_15_symbol_3.gif">&nbsp;– общая площадь помещений, входящих в состав общего имущества в многоквартирном доме;
</p>
<p>
    <img alt="formula_15_symbol_4.gif" src="/upload/medialibrary/585/afis9d1t4635fkzg3dgdeuudcn679j52/formula_15_symbol_4.gif" title="formula_15_symbol_4.gif">&nbsp;– общая площадь i-го жилого помещения (квартиры) или нежилого помещения в многоквартирном доме;
</p>
<p>
    <img alt="formula_15_symbol_5.gif" src="/upload/medialibrary/cc0/l8v4mbwjbuex2i95rernobj93ovv8hzc/formula_15_symbol_5.gif" title="formula_15_symbol_5.gif">&nbsp;– общая площадь всех жилых помещений (квартир) и нежилых помещений в многоквартирном доме.
</p>
<h5>Пример расчета ОДН по жилому помещению в многоквартирном жилом доме, не оснащенном ОДПУ:</h5>
<p>
    <img alt="formula_15_symbol_2.gif" src="/upload/medialibrary/068/y483ilrcj6fdlk5j12t1sx9ag8iqyknc/formula_15_symbol_2.gif" title="formula_15_symbol_2.gif">&nbsp;– Норматив потребления электроэнергии на общедомовые нужды для жителей многоквартирных домов, где не установлены общедомовые приборы учета (утвержден постановлением департамента по тарифам Красноярского края от 01.08.2012 г. №39/4) – 3,94 киловатт-часа на 1 квадратный метр мест общего пользования в месяц.
</p>
<p>
    <img alt="formula_15_symbol_3.gif" src="/upload/medialibrary/f76/gogjqu4fanycdxhlyn3ugaxwjgl4ecmd/formula_15_symbol_3.gif" title="formula_15_symbol_3.gif">&nbsp;– общая площадь помещений, входящих в состав общего имущества в доме – 1426 квадратных метров.
</p>
<p>
    <img alt="formula_15_symbol_4.gif" src="/upload/medialibrary/585/afis9d1t4635fkzg3dgdeuudcn679j52/formula_15_symbol_4.gif" title="formula_15_symbol_4.gif">&nbsp;– общая площадь квартиры – 60 квадратных метров.
</p>
<p>
    <img alt="formula_15_symbol_5.gif" src="/upload/medialibrary/cc0/l8v4mbwjbuex2i95rernobj93ovv8hzc/formula_15_symbol_5.gif" title="formula_15_symbol_5.gif">&nbsp;– общая площадь всех жилых помещений (квартир) и нежилых помещений в многоквартирном доме – 2&nbsp;400 квадратных метров.
</p>
<p>
    <img alt="formula_15_symbol_1.gif" src="/upload/medialibrary/6f8/9s2kgfywdea35d3qxh13rt1j9q2t5vwc/formula_15_symbol_1.gif" title="formula_15_symbol_1.gif">&nbsp;<strong>= 3,94 * 1426 * 60 / 2400 = 140,461 кВт*ч</strong>
</p>
<p>
    Применив к полученному объему электроэнергии тариф в соответствии с формулой 10, получим размер платы за коммунальную услугу электроснабжения на общедомовые нужды в выбранной квартире:
</p>
<p>
    <strong>140,461 * 1,936 = 271,93 руб.</strong>
</p>
<p>
    На практике размер платы за ОДН при расчете по нормативу (когда общедомовой прибор учета отсутствует или неисправен) может в несколько раз превышать плату за ОДН при наличии исправного коллективного счетчика. Поэтому все собственники помещений в доме напрямую заинтересованы в его установке.
</p>