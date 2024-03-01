<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
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
            <p>В <a target="_blank" rel="noopener" class="outerlink"
                    href="https://lik.resk.ru/lik/Account/Login?ReturnUrl=%2Flik%2F"><span><u>личном кабинете</u></span><i></i></a>
                на сайте вы можете оплатить коммунальные услуги, используя карту любого банка, а также при помощи
                QR-кода по системе быстрых платежей (СБП).</p>

            <p>При оплате онлайн на сайте в личном кабинете, комиссия с клиента НЕ ВЗИМАЕТСЯ, все расходы по проведению
                платежа несет ПАО «РЭСК».</p>


        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
