<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Нормативно-правовая база");
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
        <div class="container">

            <a class="link-with-lines border-top-bottom" href="zakony-rf-374/">
                Законы РФ <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom"
                href="postanovleniya-pravitelstva-rf-i-inye-gosudarstvennye-normativnye-dokumenty-375/">
                Постановления Правительства РФ и иные государственные нормативные документы <div
                    class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom"
                href="normativnye-dokumenty-v-sfere-energoeffektivnosti-i-energosberezheniya-376/">
                Нормативные документы в сфере энергоэффективности и энергосбережения <div
                    class="link-with-lines_arrow "></div>
            </a>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>