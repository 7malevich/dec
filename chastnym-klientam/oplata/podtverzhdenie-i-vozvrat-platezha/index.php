<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Подтверждение и возврат платежа");
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

<section>
    <div class="block section-pt0">
        <div class="container text-block">
            <p>Граждане, приобретающие электрическую энергию у гарантирующего поставщика, обязаны вносить в его адрес
                оплату стоимости потребленной за расчетный период электрической энергии (мощности) не позднее 10-го
                числа месяца, следующего за расчетным периодом (п. 66 Правил предоставления коммунальных услуг
                собственникам и пользователям помещений в многоквартирных домах и жилых домов).</p>

            <p>При осуществлении платежа Потребитель обязан указать: ФИО, адрес проживания, номер лицевого счета, номер
                счетчика, месяц за который производится платеж, начальные и конечный показания приборов учета, общий
                расход электроэнергии.</p>

        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
