<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Стоимость услуг по введению режима ограничения и возобновления электропотребления");
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

            <a href="/upload/iblock/960/puqk1zf1txqzu70st866fvztwd1f1k5t/Stoimost-uslug-s-01.10.2023.xlsx"
                class="file-download border-top-bottom" id="bx_3218110189_1010">
                <div class="h6">
                    Стоимость услуг с 01.10.2023 </div>
                <div class="c2">
                    xlsx, 11 кб </div>
            </a>
            <a href="/upload/iblock/a17/mr4tsvqqgoj4o1jbu42112hkr7fzi90v/Stoimost-uslug-s-14.09.20233.xlsx"
                class="file-download border-top-bottom" id="bx_3218110189_1011">
                <div class="h6">
                    Стоимость услуг с 14.09.2023 </div>
                <div class="c2">
                    xlsx, 10 кб </div>
            </a>
            <a href="/upload/iblock/bf8/miblrowlnyrvlbejz1nicjzo7ng3s2pa/Stoimost-uslug-s-17.07.2023.xlsx"
                class="file-download border-top-bottom" id="bx_3218110189_1012">
                <div class="h6">
                    Стоимость услуг с 17.07.2023 </div>
                <div class="c2">
                    xlsx, 10 кб </div>
            </a>
            <a href="/upload/iblock/6ce/2fad7g74v9ry3d7bs6cnm8g3ip570bcx/Stoimost-uslug-s-01.03.2022.xlsx"
                class="file-download border-top-bottom" id="bx_3218110189_1013">
                <div class="h6">
                    Стоимость услуг с 01.03.2022 </div>
                <div class="c2">
                    xlsx, 10 кб </div>
            </a>
            <a href="/upload/iblock/0dd/5t5ed0mk011d2b1wttll4orpfxsdbve5/Stoimost-uslugi-s-01.01.2021-po-01.03.2022.xlsx"
                class="file-download border-top-bottom" id="bx_3218110189_1014">
                <div class="h6">
                    Стоимость услуг с 01.01.2021 </div>
                <div class="c2">
                    xlsx, 9 кб </div>
            </a>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>