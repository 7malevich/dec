<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Законы РФ");
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

    <section class="block section-pt0 section-pb0">
        <div class="container">

            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1530">
                <a class="link-with-lines" href="https://base.garant.ru/12138291/">
                    Жилищный кодекс РФ <div class="link-with-lines_arrow"></div>
                </a>
            </div>
            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1531">
                <a class="link-with-lines" href="https://base.garant.ru/185656/">
                    Федеральный закон от 26 марта 2003 г. N 35-ФЗ "Об электроэнергетике" <div
                        class="link-with-lines_arrow"></div>
                </a>
            </div>
            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1532">
                <a class="link-with-lines" href="https://base.garant.ru/105108/">
                    Закон о конкуренции и ограничении монополистической деятельности на товарных рынках <div
                        class="link-with-lines_arrow"></div>
                </a>
            </div>
            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1533">
                <a class="link-with-lines" href="https://base.garant.ru/12171109/">
                    Федеральный закон от 23 ноября 2009 г. № 261-ФЗ «Об энергосбережении и о повышении энергетической
                    эффективности и о внесении изменений в отдельные законодательные акты Российской Федерации» <div
                        class="link-with-lines_arrow"></div>
                </a>
            </div>
            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1534">
                <a class="link-with-lines" href="https://base.garant.ru/72139472/">
                    Федеральный закон от 27.12.2018 № 522-ФЗ «О внесении изменений в отдельные законодательные акты РФ в
                    связи с развитием систем учета электрической энергии (мощности) в РФ», внесены изменения в ФЗ от
                    26.03.2003 № 35-ФЗ «Об электроэнергетике» <div class="link-with-lines_arrow"></div>
                </a>
            </div>
            <div class="border-top-bottom border-top-bottom--last" id="bx_3218110189_1535">
                <a class="link-with-lines" href="https://base.garant.ru/12148567/">
                    Федеральный закон от 27.07.2006 № 152-ФЗ «О персональных данных» <div class="link-with-lines_arrow">
                    </div>
                </a>
            </div>
        </div>

    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>