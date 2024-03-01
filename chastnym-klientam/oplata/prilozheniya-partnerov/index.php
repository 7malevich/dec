<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Приложения партнеров");
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
            <p>Используя приложения партнеров:</p>

            <ol>
                <li>
                    <p><a target="_blank" rel="noopener" class="outerlink" href="https://abonent.online/mobile?referrer=appmetrica_tracking_id%3D1036213766087321357%26ym_tracking_id%3D1018276948308168069"><span>Мобильное приложение "Абонент+"</span><i></i></a></p>
                </li>
                <li>
                    <p><a target="_blank" rel="noopener" class="outerlink" href="https://vp.ru/common-modal/?action=provider&amp;guid=paoresk&amp;utm_source=widget&amp;utm_medium=paoresk&amp;utm_campaign=resk.ru"><span>Все платежи</span><i></i></a></p>
                </li>
            </ol>

        </div>
    </div></section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
