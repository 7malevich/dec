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

<table>
    <tbody>
        <tr>
            <td>
                <p style="text-align: center;">Наименование муниципального образования, поселения, учреждения
                </p>
            </td>
            <td>
                <p style="text-align: center;">Наименование документа, которым установлен размер платы
                </p>
            </td>
            <td>
                <p style="text-align: center;">Дата документа
                </p>
            </td>
            <td>
                <p style="text-align: center;">№ документа
                </p>
            </td>
            <td>
                <p style="text-align: center;">Размер платы, руб./кв.м
                </p>
            </td>
            <td>
                <p style="text-align: center;">Тип жилья, для которого установлен размер платы/наименование поселения
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="7">
                <p>г. Енисейск
                </p>
            </td>
            <td rowspan="7">
                <p style="text-align: center;">Распоряжение администрации города Енисейска
                </p>
            </td>
            <td rowspan="7">
                <p style="text-align: center;">31.03.2022
                </p>
            </td>
            <td rowspan="7">
                <p style="text-align: center;">353-р
                </p>
            </td>
            <td>
                <p style="text-align: center;">18,77
                </p>
            </td>
            <td rowspan="7">
                <p style="text-align: center;">утверждено поадресно распоряжением главы города Енисейска
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">18,86
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">19,76
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">20,65
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">21,55
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">22,45
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">23,35
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="3">
                <p>г. Кодинск
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">Решение Кодинского городского Совета депутатов Кежемского района
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">23.12.2022
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">17-92
                </p>
            </td>
            <td>
                <p style="text-align: center;">11,99
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в многоквартирных домах до 1-2 этажа
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">11,28
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в многоквартирных домах от 3 этажей и выше, не оборудованных лифтами
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">11,99
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в многоквартирных домах от 3 этажей и выше, оборудованных лифтами
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>г. Лесосибирск
                </p>
            </td>
            <td>
                <p style="text-align: center;">Постановление администрации города Лесосибирска
                </p>
            </td>
            <td>
                <p style="text-align: center;">15.11.2022
                </p>
            </td>
            <td>
                <p style="text-align: center;">2233
                </p>
            </td>
            <td>
                <p style="text-align: center;">от 9,16 до 12,64
                </p>
            </td>
            <td>
                <p style="text-align: center;">в зависимости от вида жилищного фонда, см. постановление
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>г. Шарыпово
                </p>
            </td>
            <td>
                <p style="text-align: center;">Постановление администрации города Шарыпово
                </p>
            </td>
            <td>
                <p style="text-align: center;">21.10.2021
                </p>
            </td>
            <td>
                <p style="text-align: center;">210
                </p>
            </td>
            <td>
                <p style="text-align: center;">от 7,62 до 9,50
                </p>
            </td>
            <td>
                <p style="text-align: center;">в зависимости от вида жилищного фонда, см. постановление
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <p>Казачинский район
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Казачинский сельсовет
                </p>
            </td>
            <td>
                <p style="text-align: center;">Постановление администрации Казачинского сельсовета Казачинского района
                </p>
            </td>
            <td>
                <p style="text-align: center;">31.05.2023
                </p>
            </td>
            <td>
                <p style="text-align: center;">48
                </p>
            </td>
            <td>
                <p style="text-align: center;">8,81
                </p>
            </td>
            <td>
                <p style="text-align: center;">не зависит от типа жилья
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <p>Партизанский район
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="2">
                <p>Имбежский сельсовет
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">Решение Имбежского сельского Совета депутатов Партизанского района
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">02.12.2021
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">13-66-р
                </p>
            </td>
            <td>
                <p style="text-align: center;">7,10
                </p>
            </td>
            <td>
                <p style="text-align: center;">для домов в д. Хайдак, д. Ной, не зависит от типа жилья
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">7,80
                </p>
            </td>
            <td>
                <p style="text-align: center;">для домов п. Западный Имбеж, не зависит от типа жилья
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="2">
                <p>КУИ Партизанского района
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">Решение Партизанского районного Совета депутатов Партизанского района
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">15.12.2022
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">35-359-р
                </p>
            </td>
            <td>
                <p style="text-align: center;">10,08
                </p>
            </td>
            <td>
                <p style="text-align: center;">для домов в с. Партизанское, не зависит от типа жилья
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">8,40
                </p>
            </td>
            <td>
                <p style="text-align: center;">для домов с. Вершино-Рыбное, не зависит от типа жилья
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Минский сельсовет
                </p>
            </td>
            <td>
                <p style="text-align: center;">Решение Минского сельского Совета депутатов Партизанского района
                </p>
            </td>
            <td>
                <p style="text-align: center;">24.12.2021
                </p>
            </td>
            <td>
                <p style="text-align: center;">38-116-р
                </p>
            </td>
            <td>
                <p style="text-align: center;">11,73
                </p>
            </td>
            <td>
                <p style="text-align: center;">не зависит от типа жилья
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="2">
                <p>Партизанский сельсовет
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">Решение Партизанского сельского Совета депутатов Партизанского района
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">16.11.2021
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">15-64-р
                </p>
            </td>
            <td>
                <p style="text-align: center;">7,77
                </p>
            </td>
            <td>
                <p style="text-align: center;">д. Крестьянск
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">9,33
                </p>
            </td>
            <td>
                <p style="text-align: center;">с. Партизанское
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <p>Сухобузимский район
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="3">
                <p>Атамановский сельсовет
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">Постановление администрации Атамановского сельсовета Сухобузимского района
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">23.12.2022
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">76-п
                </p>
            </td>
            <td>
                <p style="text-align: center;">5,75
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в деревянном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">7,29
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в панельном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">7,41
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений с центральным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="2">
                <p>Кононовский сельсовет
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">Постановление администрации Кононовского сельсовета Сухобузимского района
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">30.12.2022
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">91-п
                </p>
            </td>
            <td>
                <p style="text-align: center;">5,75
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в деревянном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">7,19
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в панельном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="3">
                <p>Миндерлинский сельсовет
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">Постановление администрации Миндерлинского сельсовета Сухобузимского района
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">30.11.2022
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">69
                </p>
            </td>
            <td>
                <p style="text-align: center;">5,75
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в деревянном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">6,25
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в панельном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">6,69
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений с центральным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="3">
                <p>Нахвальский сельсовет
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">Постановление администрации Нахвальского сельсовета Сухобузимского района
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">05.10.2022
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">89-п
                </p>
            </td>
            <td>
                <p style="text-align: center;">5,75
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в деревянном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">7,29
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в панельном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">7,41
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений с центральным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="2">
                <p>Подсопочный сельсовет
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">Постановление администрации Подсопочного сельсовета Сухобузимского района
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">04.10.2022
                </p>
            </td>
            <td rowspan="2">
                <p style="text-align: center;">39-п
                </p>
            </td>
            <td>
                <p style="text-align: center;">5,75
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в деревянном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">7,19
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых помещений в панельном доме с печным отоплением
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <p>Ужурский район
                </p>
            </td>
        </tr>
        <tr>
            <td rowspan="3">
                <p>Кулунский сельсовет
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">Решение Кулунского Совета депутатов Ужурского района
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">27.12.2019
                </p>
            </td>
            <td rowspan="3">
                <p style="text-align: center;">66-135-р
                </p>
            </td>
            <td>
                <p style="text-align: center;">7,14
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых домов и жилых помещений в зданиях со смешанными, деревянными или брусчатыми стенами, деревянными перекрытиями
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">8,03
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых домов и жилых помещений в зданиях с кирпичными стенами, монолитного шлакобетона, легких шлакоблоков, деревянными перекрытиями
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="text-align: center;">8,92
                </p>
            </td>
            <td>
                <p style="text-align: center;">для жилых домов и жилых помещений в каменных зданиях, с кирпичными стенами, железобетонными и бетонными перекрытиями, в зданиях с крупнопанельными стенами, железобетонными перекрытиями
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Озероучумский сельсовет
                </p>
            </td>
            <td>
                <p style="text-align: center;">Решение Озероучумского сельского Совета депутатов Ужурского района
                </p>
            </td>
            <td>
                <p style="text-align: center;">31.08.2018
                </p>
            </td>
            <td>
                <p style="text-align: center;">37-81р
                </p>
            </td>
            <td>
                <p style="text-align: center;">11,00
                </p>
            </td>
            <td>
                <p style="text-align: center;">не зависит от типа жилья
                </p>
            </td>
        </tr>
    </tbody>
</table><br>


<a href="/upload/iblock/60e/de0ex277a72g84fx0diacebbj4zpz1j4/Postanovlenie-Administracii-goroda-Lesosibirska_251059_19_12_2022_ver1_.PDF" class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1382">
    <div class="h6">
        г. Лесосибирск. Об утверждении методики определения платы за наем муниципальных жилых помещений для нанимателей муниципального жилищного фонда </div>
    <div class="c2">
        PDF, 7.4 мб </div>
</a>
<a href="/upload/iblock/108/abluug51fp2w1f84igjn36nu6kyh5vcc/Postanovlenie-_-210-ot-21.10.2021.pdf" class="file-download border-top-bottom" target="_blank" id="bx_3218110189_1383">
    <div class="h6">
        г. Шарыпово. Об установлении размера платы за пользование жилым помещением для нанимателей жилых помещений по договорам социального найма и договорам найма жилых помещений </div>
    <div class="c2">
        pdf, 274 кб </div>
</a>