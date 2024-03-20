<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Гид по квитанции");
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
        <div class="gid">

            <div class="gid__tabs">
                <div class="gid__tab active">
                    <span class="toggle-bar__text">Единая квитанция</span>
                </div>
                <div class="gid__tab">
                    <span class="toggle-bar__text">Обращение с ТКО</span>
                </div>
                <div class="gid__tab">
                    <span class="toggle-bar__text">Кап. ремонт</span>
                </div>
            </div>

            <div class="gid__pages">

                <div class="gid__page" style="display:block;">
                    <div class="quittance">
                        <img src="/local/templates/main/img/ed.jpg" alt="">
                        <img src="/local/templates/main/img/ed-obrat.jpg" alt="">
                        <div class="quittance-info quittance--ed-1">
                            <div class="quittance-info__marker">
                                1
                            </div>
                            <div class="quittance-info__text">
                                Номер лицевого счета, ФИО, адрес, месяц за который сформирован платежный документ.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-2">
                            <div class="quittance-info__marker">
                                2
                            </div>
                            <div class="quittance-info__text">
                                Площадь жилого помещения.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-3">
                            <div class="quittance-info__marker">
                                3
                            </div>
                            <div class="quittance-info__text">
                                Данные о количестве собственников, зарегистрированных.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-4 quittance-info--right">
                            <div class="quittance-info__marker">
                                4
                            </div>
                            <div class="quittance-info__text">
                                Задолженность / переплата на начало расчетного месяца.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-5 quittance-info--right">
                            <div class="quittance-info__marker">
                                5
                            </div>
                            <div class="quittance-info__text">
                                Информация о произведенных платежах в расчетном месяце, дата последней оплаты.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-6 quittance-info--right">
                            <div class="quittance-info__marker">
                                6
                            </div>
                            <div class="quittance-info__text  quittance-info__text--right">
                                Общая сумма к оплате.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-7 quittance-info--right">
                            <div class="quittance-info__marker">
                                7
                            </div>
                            <div class="quittance-info__text">
                                Объем индивидуального потребления и потребления на общедомовые нужды (указывается
                                при выборе непосредственного способа управления многоквартирных домов по социальной
                                и сверх социальной нормы потребления).
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-8">
                            <div class="quittance-info__marker">
                                8
                            </div>
                            <div class="quittance-info__text">
                                Объем коммунального ресурса, услуги, с учетом разницы между объемом потребления,
                                определенным по показаниям прибора учета и объемом, определенным расчетным способом.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-9 quittance-info--top">
                            <div class="quittance-info__marker">
                                9
                            </div>
                            <div class="quittance-info__text">
                                Тариф в рублях.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-10 quittance-info--top">
                            <div class="quittance-info__marker">
                                10
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Изменение ранее начисленных сумм платежей в связи с изменением условий.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-11 quittance-info--top">
                            <div class="quittance-info__marker">
                                11
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Начисления по неустойкам и судебным расходам.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-12 quittance-info--top">
                            <div class="quittance-info__marker">
                                12
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Начисление на конец периода.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-13 quittance-info--top">
                            <div class="quittance-info__marker">
                                13
                            </div>
                            <div class="quittance-info__text">
                                Показания индивидуального прибора учета.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-14">
                            <div class="quittance-info__marker">
                                14
                            </div>
                            <div class="quittance-info__text">
                                Расход по общедомовому прибору учета за период.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-15">
                            <div class="quittance-info__marker">
                                15
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Наименование изменения ранее начисленных сумм платежей в связи с изменением условий.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-16">
                            <div class="quittance-info__marker">
                                16
                            </div>
                            <div class="quittance-info__text">
                                QR-код для оплаты в мобильном приложении вашего банка.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-17">
                            <div class="quittance-info__marker">
                                17
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                QR-код для установки мобильного приложения.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-18 quittance-info--top">
                            <div class="quittance-info__marker">
                                18
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                QR-код для перехода на сайты контрагентов.
                            </div>
                        </div>
                        <div class="quittance-info quittance--ed-19">
                            <div class="quittance-info__marker">
                                19
                            </div>
                            <div class="quittance-info__text">
                                Лицевой счет в системе ГИС ЖКХ.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gid__page">
                    <div class="quittance">
                        <img src="/local/templates/main/img/tko2.jpg" alt="">
                        <div class="quittance-info quittance--tko-1">
                            <div class="quittance-info__marker">
                                1
                            </div>
                            <div class="quittance-info__text">
                                Номер лицевого счета, ФИО, адрес, месяц за который сформирован платежный документ.
                            </div>
                        </div>
                        <div class="quittance-info quittance--tko-2">
                            <div class="quittance-info__marker">
                                2
                            </div>
                            <div class="quittance-info__text">
                                Площадь жилого помещения, данные о количестве собственников, зарегистрированных.
                            </div>
                        </div>
                        <div class="quittance-info quittance--tko-3 quittance-info--right">
                            <div class="quittance-info__marker">
                                3
                            </div>
                            <div class="quittance-info__text">
                                Задолженность / переплата на начало расчетного месяца.
                            </div>
                        </div>
                        <div class="quittance-info quittance--tko-4">
                            <div class="quittance-info__marker">
                                4
                            </div>
                            <div class="quittance-info__text">
                                Информация о произведенных платежах в расчетном месяце, дата последней оплаты.
                            </div>
                        </div>
                        <div class="quittance-info quittance--tko-5">
                            <div class="quittance-info__marker">
                                5
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Общая сумма к оплате.
                            </div>
                        </div>
                        <div class="quittance-info quittance--tko-6">
                            <div class="quittance-info__marker">
                                6
                            </div>
                            <div class="quittance-info__text">
                                QR-коды для оплаты за услугу обращение с ТКО в мобильного приложении вашего банка.
                            </div>
                        </div>
                        <div class="quittance-info quittance--tko-7">
                            <div class="quittance-info__marker">
                                7
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                QR-код для установки мобильного приложения.
                            </div>
                        </div>
                        <div class="quittance-info quittance--tko-8">
                            <div class="quittance-info__marker">
                                8
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                QR-код для перехода на сайт контрагента.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gid__page">
                    <div class="quittance">
                        <img src="/local/templates/main/img/kap.jpg" alt="">
                        <div class="quittance-info quittance--kap-1">
                            <div class="quittance-info__marker">
                                1
                            </div>
                            <div class="quittance-info__text">
                                Номер лицевого счета, ФИО, площадь жилого помещения, адрес, месяц, за который
                                сформирован платежный документ.
                            </div>
                        </div>
                        <div class="quittance-info quittance--kap-2">
                            <div class="quittance-info__marker">
                                2
                            </div>
                            <div class="quittance-info__text">
                                Дата последнего платежа.
                            </div>
                        </div>
                        <div class="quittance-info quittance--kap-3">
                            <div class="quittance-info__marker">
                                3
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Итого к оплате за капитальный ремонт.
                            </div>
                        </div>
                        <div class="quittance-info quittance--kap-4">
                            <div class="quittance-info__marker">
                                4
                            </div>
                            <div class="quittance-info__text">
                                Тариф.
                            </div>
                        </div>
                        <div class="quittance-info quittance--kap-5 quittance-info--top">
                            <div class="quittance-info__marker">
                                5
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Начисление за месяц по видам услуг.
                            </div>
                        </div>
                        <div class="quittance-info quittance--kap-6 quittance-info--top">
                            <div class="quittance-info__marker">
                                6
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Задолженность / переплата на конец месяца по видам услуг.
                            </div>
                        </div>
                        <div class="quittance-info quittance--kap-7 quittance-info--top">
                            <div class="quittance-info__marker">
                                7
                            </div>
                            <div class="quittance-info__text quittance-info__text--right">
                                Итого к оплате по видам услуг.
                            </div>
                        </div>
                        <div class="quittance-info quittance--kap-8">
                            <div class="quittance-info__marker">
                                8
                            </div>
                            <div class="quittance-info__text">
                                QR-коды для оплаты взноса за капремонт.
                            </div>
                        </div>
                        <div class="quittance-info quittance--kap-9 quittance-info--right">
                            <div class="quittance-info__marker">
                                9
                            </div>
                            <div class="quittance-info__text">
                                QR-коды для оплаты пени.
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
