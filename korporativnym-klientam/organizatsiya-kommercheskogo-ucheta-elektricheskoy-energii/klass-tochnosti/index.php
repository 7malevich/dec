<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Класс точности");
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

    <section class="block section-pt0">
        <div class="container text-block">
            <p>
                <strong>Допустимые классы точности расчетных счетчиков активной электроэнергии для различных объектов учета и потребителей:</strong>
            </p>
            <div class="scroll-table" data-class="undefined" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;"><table style="width:100%">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p>
                                                    <strong>Категория потребителей</strong>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <strong>Уровень напряжения</strong>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <strong>Подклю-<br>
                                                        чение</strong>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <strong>Альтернативное условие</strong>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <strong>Класс точности</strong>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Многоквартирные жилые дома
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    0,4 кВ и ниже
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    новое
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    при замене выбывших из эксплуатации приборов учета
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    1.0 и выше
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">
                                                <p>
                                                    Потребители юридические и приравненные к ним лица мощностью менее 670кВт
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    35 кВ и ниже
                                                </p>
                                            </td>
                                            <td rowspan="2">
                                                <p>
                                                    новое
                                                </p>
                                            </td>
                                            <td rowspan="2">
                                                <p>
                                                    при замене выбывших из эксплуатации приборов учета
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    1.0 и выше
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    1.0 и выше
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    0.5 S и выше
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Потребители юридические и приравненные к ним лица мощностью не менее 670 кВт
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Не имеет значения
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    новое
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    при замене выбывших из эксплуатации приборов учета
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Приборы учета позволяющие измерять почасовые объемы потребления электрической энергии, класса точности 0.5S и выше, обеспечивающие хранение данных о почасовых объемах потребления электрической энергии за последние 120дней.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Производители электрической энергии
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Не имеет значения
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Не имеет значения
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Не имеет значения
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    Приборы учета , позволяющие измерять почасовые объемы производства электрической энергии, класса точности 0.5 S и выше, обеспечивающие хранение данных о почасовых объемах потребления электрической энергии за последние 120дней и более или включенные в систему учета.
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table></div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1260px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>