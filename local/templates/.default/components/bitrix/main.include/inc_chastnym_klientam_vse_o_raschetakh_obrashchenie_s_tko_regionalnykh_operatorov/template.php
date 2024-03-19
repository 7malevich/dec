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

<p>Тарифы, нормативы на услуги региональных операторов по обращению с твердыми коммунальными отходами
</p>
<table>
    <tbody>
        <tr>
            <td rowspan="2" style="text-align: center;">№ п/п
            </td>
            <td rowspan="2" style="text-align: center;">Наименование технологической зоны
            </td>
            <td rowspan="2" style="text-align: center;">Наименование муниципальных образований, входящих в технологическую зону
            </td>
            <td rowspan="2" style="text-align: center;">ИНН
            </td>
            <td rowspan="2" style="text-align: center;">Наименование регионального оператора
            </td>
            <td colspan="2" style="text-align: center;">Установленный норматив (приказ от 30.12.2022 № 77-2161-од)
            </td>
            <td style="text-align: center;">Тариф для населения, руб./м3 с НДС
            </td>
            <td rowspan="2" style="text-align: center;">Приказ Министерства тарифной политики Красноярского края, дата, №
            </td>
            <td rowspan="2" style="text-align: center;">Ссылка на документ на портале Правительства края
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">МКД, м3/мес.
            </td>
            <td style="text-align: center;">жилые, м3/мес.
            </td>
            <td style="text-align: center;">с 01.01.2023
            </td>
        </tr>
        <tr>
            <td rowspan="8" style="text-align: center;">1
            </td>
            <td rowspan="8" style="text-align: center;">Ачинская
            </td>
            <td style="text-align: center;">Ачинский район
            </td>
            <td rowspan="8" style="text-align: center;">2443044730
            </td>
            <td rowspan="8" style="text-align: center;">ООО "Эко-Транспорт"
            </td>
            <td rowspan="8" style="text-align: center;">0,07
            </td>
            <td rowspan="8" style="text-align: center;">0,07
            </td>
            <td rowspan="8" style="text-align: center;">1 234,07
            </td>
            <td rowspan="8" style="text-align: center;">23.11.2022<br>№ 937-в
            </td>
            <td rowspan="8" style="text-align: center;"><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/142093_977_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow"></a><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/159550_937_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow">http://zakon.krskstate.ru/dat/bin/docs_attach/159550_937_v_raspoznan.pdf</a><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/142093_977_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow"></a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Бирилюсский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Большеулуйский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Козульский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Тюхтетский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Боготольский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">г.о. Боготол
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">г.о. Ачинск
            </td>
        </tr>
        <tr>
            <td rowspan="8" style="text-align: center;">2
            </td>
            <td rowspan="8" style="text-align: center;">Назаровская
            </td>
            <td style="text-align: center;">Назаровский район
            </td>
            <td rowspan="8" style="text-align: center;">2443044730
            </td>
            <td rowspan="8" style="text-align: center;">ООО "Эко-Транспорт"
            </td>
            <td rowspan="8" style="text-align: center;">0,07
            </td>
            <td rowspan="8" style="text-align: center;">0,07
            </td>
            <td rowspan="8" style="text-align: center;">1 374,03
            </td>
            <td rowspan="8" style="text-align: center;">23.11.2022<br>№ 935-в
            </td>
            <td rowspan="8" style="text-align: center;"><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/141952_923_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow"></a><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/159543_935_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow">http://zakon.krskstate.ru/dat/bin/docs_attach/159543_935_v_raspoznan.pdf</a><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/141952_923_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow"></a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">г.о. Назарово
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Балахтинский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">ЗАТО Солнечный
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Новоселовский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Ужурский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">г.о. Шарыпово
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Шарыповский район
            </td>
        </tr>
        <tr>
            <td rowspan="5" style="text-align: center;">3
            </td>
            <td rowspan="5" style="text-align: center;">Красноярская левобережная
            </td>
            <td style="text-align: center;">г.о. Красноярск (левый берег)
            </td>
            <td rowspan="5" style="text-align: center;">2461223108
            </td>
            <td rowspan="5" style="text-align: center;">ООО "Красноярская Рециклинговая Компания"
            </td>
            <td rowspan="5" style="text-align: center;">0,07
            </td>
            <td rowspan="5" style="text-align: center;">0,07
            </td>
            <td rowspan="5" style="text-align: center;">1 314,66
            </td>
            <td rowspan="5" style="text-align: center;">28.11.2022<br>№ 1015-в
            </td>
            <td rowspan="5" style="text-align: center;"><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/141876_887_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow"></a><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/160107_1015_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow">http://zakon.krskstate.ru/dat/bin/docs_attach/160107_1015_v_raspoznan.pdf</a><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/141876_887_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow"></a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Емельяновский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">г.о. Кедровый
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Сухобузимский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Большемуртинский район
            </td>
        </tr>
        <tr>
            <td rowspan="8" style="text-align: center;">4
            </td>
            <td rowspan="8" style="text-align: center;">Минусинская
            </td>
            <td style="text-align: center;">г.о. Минусинск
            </td>
            <td rowspan="8" style="text-align: center;">2455029568
            </td>
            <td rowspan="8" style="text-align: center;">МУП г. Минусинска "Минусинское городское хозяйство"
            </td>
            <td rowspan="8" style="text-align: center;">0,08
            </td>
            <td rowspan="8" style="text-align: center;">0,08
            </td>
            <td rowspan="8" style="text-align: center;">1 083,24
            </td>
            <td rowspan="8" style="text-align: center;">18.05.2022<br>№ 164-в
            </td>
            <td rowspan="8" style="text-align: center;">
                <p><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/149386_164_v.pdf" target="_blank" class="external" rel="nofollow"></a><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/149386_164_v.pdf" target="_blank" class="external" rel="nofollow">http://zakon.krskstate.ru/dat/bin/docs_attach/149386_164_v.pdf</a><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/149386_164_v.pdf" target="_blank" class="external" rel="nofollow"></a>
                </p>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Ермаковский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Идринский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Каратузский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Краснотуранский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Курагинский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Минусинский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Шушенский район
            </td>
        </tr>
        <tr>
            <td colspan="1" rowspan="4" style="text-align: center;">5
            </td>
            <td colspan="1" rowspan="4" style="text-align: center;">Северная
            </td>
            <td style="text-align: center;">Богучанский район
            </td>
            <td colspan="1" rowspan="4" style="text-align: center;">2466245458
            </td>
            <td colspan="1" rowspan="4" style="text-align: center;">АО "Автоспецбаза"
            </td>
            <td colspan="1" rowspan="4" style="text-align: center;">0,05
            </td>
            <td colspan="1" rowspan="4" style="text-align: center;">0,05
            </td>
            <td colspan="1" rowspan="4" style="text-align: center;">2 584,75
            </td>
            <td colspan="1" rowspan="4" style="text-align: center;">23.11.2022<br>№ 931-в
            </td>
            <td colspan="1" rowspan="4" style="text-align: center;"><a rel="noopener" class="outerlink" href="http://zakon.krskstate.ru/dat/bin/docs_attach/159535_931_v_raspoznan.pdf" target="_blank" class="external" rel="nofollow">http://zakon.krskstate.ru/dat/bin/docs_attach/159535_931_v_raspoznan.pdf</a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Кежемский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Мотыгинский район
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">г.п. Стрелка (городской округ г.Лесосибирск)
            </td>
        </tr>
    </tbody>
</table>