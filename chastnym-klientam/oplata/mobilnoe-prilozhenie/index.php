<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Мобильное приложение");
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
            <p>
                В мобильном приложении (скачивание <a target="_blank" rel="noopener" class="outerlink"
                                                      href="https://disk.yandex.ru/d/T4CQq916vGA1KQ"><span><u>доступно только для </u><u>Android</u></span><i></i></a>).
                Помимо оплаты картой любого банка, можно совершить платеж через Mir&nbsp;Pay (Мирпей).&nbsp;
            </p>
            <p>
                При оплате онлайн в мобильном приложении, комиссия с клиента НЕ ВЗИМАЕТСЯ, все расходы по проведению
                платежа несет ПАО «РЭСК».
            </p>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
