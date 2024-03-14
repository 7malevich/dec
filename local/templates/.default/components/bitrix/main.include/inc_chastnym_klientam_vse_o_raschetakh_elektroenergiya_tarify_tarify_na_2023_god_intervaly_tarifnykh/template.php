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

<p>Интервалы тарифных зон суток для населения и приравненных к нему категорий потребителей
</p>
<div class="scroll-table" data-class="undefined" data-simplebar="init" bis_skin_checked="1">
    <div class="simplebar-wrapper" style="margin: 0px;" bis_skin_checked="1">
        <div class="simplebar-height-auto-observer-wrapper" bis_skin_checked="1">
            <div class="simplebar-height-auto-observer" bis_skin_checked="1"></div>
        </div>
        <div class="simplebar-mask" bis_skin_checked="1">
            <div class="simplebar-offset" style="right: 0px; bottom: 0px;" bis_skin_checked="1">
                <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;" bis_skin_checked="1">
                    <div class="simplebar-content" style="padding: 0px;" bis_skin_checked="1">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p style="text-align: center;">Зона суток
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">январь
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">февраль
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">март
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">апрель
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">май
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">июнь
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align: center;">ночная
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">
                                        <p style="text-align: center;">пиковая
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align: center;">Зона суток
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">июль
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">август
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">сентябрь
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">октябрь
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">ноябрь
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">декабрь
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align: center;">ночная
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">23 - 7
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">
                                        <p style="text-align: center;">пиковая
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">7 - 10
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                    <td>
                                        <p style="text-align: center;">17 - 21
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="simplebar-placeholder" style="width: auto; height: 779px;" bis_skin_checked="1"></div>
    </div>
    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;" bis_skin_checked="1">
        <div class="simplebar-scrollbar" style="width: 0px; display: none;" bis_skin_checked="1"></div>
    </div>
    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;" bis_skin_checked="1">
        <div class="simplebar-scrollbar" style="height: 0px; display: none;" bis_skin_checked="1"></div>
    </div>
</div><br>
<p>Время местное
</p>
<p>Полупиковая зона - остальное время
</p>
<p>Дневная зона - время пиковой и полупиковой зон
</p>
<p><a rel="noopener" class="outerlink" href="https://krsk-sbit.ru/prikaz_1473e" target="_blank"><span>Приказ Федеральной службы по тарифам от 26.11.2013 г. N 1473-э</span><i></i></a>
</p>