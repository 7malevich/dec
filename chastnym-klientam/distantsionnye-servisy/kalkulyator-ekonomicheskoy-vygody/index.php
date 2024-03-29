<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Калькулятор экономической выгоды");
?>

<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "PATH" => "",
    "SITE_ID" => "ru",
    "START_FROM" => "0",
),
    false
); ?>

    <div class="container">
        <h1 class="h1-marginBot h1-relative"><?= $APPLICATION->showTitle() ?></h1>
    </div>

    <section id="bx_1949384460_1019">
        <div class="block section-pt0">
            <div class="container text-block">
                <p>Калькулятор экономической выгоды позволяет выбрать оптимальный вариант расчётов
                    (одноставочный/многоставочный) с учётом изменения&nbsp;тарифов.</p>

                <p>Воспользовавшись формой ниже, вы сможете рассчитать стоимость вашего электропотребления в целях
                    выбора оптимального варианта.</p>

            </div>
        </div>
    </section>

    <div id="bx_1949384460_1030">


        <div class="news__item vacancy">
            <section class="block section-pt0">
                <div class="container">

                    <div class="profit-calc">
                        <div class="profit-row">
                            <div class="profit-title">
                                Группа потребителя
                            </div>
                            <div class="select-without-name__select w100" style="z-index: 2;">
                                <div class="jq-selectbox jqselect" style="z-index: 10;"><select name="group">
                                        <?php
                                        $groups = array();

                                        $iblockId = 267;

                                        $filter = array(
                                            'IBLOCK_ID' => $iblockId,
                                        );

                                        $select = array(
                                            'ID',
                                            'NAME',
                                            'PROPERTY_TARIF1_MONTH',
                                            'PROPERTY_TARIF2_DAY',
                                            'PROPERTY_TARIF2_NIGHT',
                                            'PROPERTY_TARIF3_PICK',
                                            'PROPERTY_TARIF3_POLUPICK',
                                            'PROPERTY_TARIF3_NIGHT'
                                        );

                                        $result = \CIBlockElement::GetList(
                                            array(),
                                            $filter,
                                            false,
                                            false,
                                            $select
                                        );
                                        $tarifs = [];

                                        while ($element = $result->GetNext()) {
                                            $groups[] = $element['NAME'];
                                            $tarifs[$element['ID']] = [
                                                "CONSUMPTION_ALL" => $element['PROPERTY_TARIF1_MONTH_VALUE'],
                                                "CONSUMPTION_T1" => $element['PROPERTY_TARIF2_DAY_VALUE'],
                                                "CONSUMPTION_T2" => $element['PROPERTY_TARIF2_NIGHT_VALUE'],
                                                "CONSUMPTION_PIK" => $element['PROPERTY_TARIF3_PICK_VALUE'],
                                                "UF_SMCMS_SECTION" => '',
                                                "CONSUMPTION_POLUPIC" => $element['PROPERTY_TARIF3_POLUPICK_VALUE'],
                                                "CONSUMPTION_NIGHT" => $element['PROPERTY_TARIF3_NIGHT_VALUE']
                                            ];
                                            ?>
                                            <option data-consumption-all="<?= $element['PROPERTY_TARIF1_MONTH_VALUE'] ?>"
                                                    data-consumption-t1="<?= $element['PROPERTY_TARIF2_DAY_VALUE'] ?>"
                                                    data-consumption-t2="<?= $element['PROPERTY_TARIF2_NIGHT_VALUE'] ?>"
                                                    data-consumption-pik="<?= $element['PROPERTY_TARIF3_PICK_VALUE'] ?>"
                                                    data-consumption-polupic="<?= $element['PROPERTY_TARIF3_POLUPICK_VALUE'] ?>"
                                                    data-consumption-night="<?= $element['PROPERTY_TARIF3_NIGHT_VALUE'] ?>"
                                                    value="<?= $element['ID'] ?>">
                                                <?= $element['NAME'] ?>
                                            </option>
                                        <? } ?>
                                    </select>

                                    <div class="jq-selectbox__dropdown"
                                         style="height: auto; bottom: auto; top: 56px; display: none;">
                                        <ul style="max-height: 463.4px;">
                                            <?php foreach ($groups as $key => $group) { ?>
                                                <li class="sel <?php echo ($key === 0) ? 'selected': ''  ?>" style="max-height: 55px;">
                                                    <?= $group ?>
                                                </li>
                                            <? } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profit-row">
                            <div class="profit-title h6">
                                Тип учёта: Однотарифный счетчик
                            </div>
                            <div class="profit-input-row">
                                <label class="w100">
                                    <div class="input__wrapper input__wrapper--kvt full">
                                        <input name="CONSUMPTION_ALL" type="text" class="input numbers-mask">
                                        <div class="input__label">
                                            Месячное потребление
                                        </div>
                                        <div class="input__kvt">
                                            кВт*ч
                                        </div>
                                    </div>
                                    <div class="profit-tarif">
                                        Тариф <span class="CONSUMPTION_ALL">4.07</span> руб.
                                    </div>
                                </label>
                            </div>
                            <div class="profit-result result--1">
                                Сумма к оплате <b><span class="rub">31241</span> руб. <span class="cop">32</span>
                                    коп</b>
                            </div>
                        </div>

                        <div class="profit-row">
                            <div class="profit-title h6">
                                Тип учёта: Двухтарифный счетчик
                            </div>
                            <div class="profit-input-row">
                                <label class="w50">
                                    <div class="input__wrapper input__wrapper--kvt full">
                                        <input name="CONSUMPTION_T1" type="text" class="input numbers-mask">
                                        <div class="input__label">
                                            Дневное
                                        </div>
                                        <div class="input__kvt">
                                            кВт*ч
                                        </div>
                                    </div>
                                    <div class="profit-tarif">
                                        Тариф <span class="CONSUMPTION_T1">4.68</span> руб.
                                    </div>
                                </label>
                                <label class="w50">
                                    <div class="input__wrapper input__wrapper--kvt full">
                                        <input name="CONSUMPTION_T2" type="text" class="input numbers-mask">
                                        <div class="input__label">
                                            Ночное
                                        </div>
                                        <div class="input__kvt">
                                            кВт*ч
                                        </div>
                                    </div>
                                    <div class="profit-tarif">
                                        Тариф <span class="CONSUMPTION_T2">3.05</span> руб.
                                    </div>
                                </label>
                            </div>
                            <div class="profit-result result--2">
                                При использовании двухтарифого счётчика и распределении <span
                                        class="all-kvt">6812.00</span> кВт*ч.<br>
                                Сумма к оплате <b><span class="rub">31806</span> руб. <span class="cop">81</span>
                                    коп</b>
                            </div>
                        </div>

                        <div class="profit-row">
                            <div class="profit-title h6">
                                Тип учёта: Трёхтарифный счетчик
                            </div>
                            <div class="profit-input-row">
                                <label class="w33">
                                    <div class="input__wrapper input__wrapper--kvt">
                                        <input name="CONSUMPTION_PIK" type="text" class="input numbers-mask">
                                        <div class="input__label">
                                            Пик
                                        </div>
                                        <div class="input__kvt">
                                            кВт*ч
                                        </div>
                                    </div>
                                    <div class="profit-tarif">
                                        Тариф <span class="CONSUMPTION_PIK">5.29</span> руб.
                                    </div>
                                </label>
                                <label class="w33">
                                    <div class="input__wrapper input__wrapper--kvt">
                                        <input name="CONSUMPTION_POLUPIC" type="text" class="input numbers-mask">
                                        <div class="input__label">
                                            Полупик
                                        </div>
                                        <div class="input__kvt">
                                            кВт*ч
                                        </div>
                                    </div>
                                    <div class="profit-tarif">
                                        Тариф <span class="CONSUMPTION_POLUPIC">4.07</span> руб.
                                    </div>
                                </label>
                                <label class="w33">
                                    <div class="input__wrapper input__wrapper--kvt">
                                        <input name="CONSUMPTION_NIGHT" type="text" class="input numbers-mask">
                                        <div class="input__label">
                                            Ночное
                                        </div>
                                        <div class="input__kvt">
                                            кВт*ч
                                        </div>
                                    </div>
                                    <div class="profit-tarif">
                                        Тариф <span class="CONSUMPTION_NIGHT">3.05</span> руб.
                                    </div>
                                </label>
                            </div>
                            <div class="profit-result result--3">
                                При использовании трёхтарифого счётчика и распределении <span class="all-kvt">0</span>
                                кВт*ч.<br>
                                Сумма к оплате <b><span class="rub">0</span> руб. <span class="cop">00</span> коп</b>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div><!--WORK_AREA_END-->

        <script type="text/javascript">
            var tarifs = <?php echo json_encode($tarifs); ?>;
            console.log(tarifs)
        </script>

        <script src="calculator.js"></script>


    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>