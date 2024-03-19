<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Поиск входящего документа");
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


<section id="bx_1949384460_1671">
    <section class="block section-pt0">
        <div class="container text-block">
            <p>Сервис поиска&nbsp;входящего документа позволяет найти обращение и узнать статус его рассмотрения.</p>

            <p>Все обращения клиентов, поступающие в нашу компанию, регистрируются в единой системе&nbsp;электронного
                документооборота&nbsp;с присвоением уникальных номеров.</p>

            <p>Для поиска обращения и получения информации о стадии его рассмотрения необходимо ввести номер и дату
                регистрации документа и нажать кнопку &laquo;Поиск&raquo;.</p>

            <p>В соответствии с требованием законодательства<a href="#_ftn1" name="_ftnref1">[1]</a>, письменное
                обращение рассматривается в течение 30 дней&nbsp; со дня его регистрации.</p>


        </div>
    </section>
</section>

<section class="block block_gray">
    <div class="container" bis_skin_checked="1">
        <div class="form__wrapper form-center" bis_skin_checked="1">
            <div class="h2 h2-marginBot color-blue" bis_skin_checked="1">
                Искать документ
            </div>
            <form class="form" id="doc" method="post" enctype="multipart/form-data" action="" novalidate="novalidate">
                <div class="form__fields flex flex--v-center-h-space" bis_skin_checked="1">
                    <div class="form__space" bis_skin_checked="1">
                        <div class="input__wrapper input__wrapper-white" bis_skin_checked="1">
                            <input type="text" class="input" name="UF_NUM" required="">
                            <label class="input__label">Номер документа<span>*</span></label>
                        </div>
                        <div class="input__wrapper input__wrapper-white" bis_skin_checked="1">
                            <input type="text" class="input input--date" name="UF_DATE" required="">
                            <label class="input__label">Дата документа<span>*</span></label>
                        </div>
                        <button class="button button_min" type="submit"> Поиск </button>
                    </div>
                    <div class="form__errors" bis_skin_checked="1"></div>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="bx_1949384460_1681">
    <section class="block section-pt0">
        <div class="container text-block">


            <hr/>
            <p><a href="#_ftnref1" name="_ftn1">[1]</a>&nbsp;ст. 12 Федерального закона от 02.05.2006 № 59-ФЗ &ldquo;О
                порядке рассмотрения обращений граждан&nbsp;Российской Федерации&rdquo;.</p>
        </div>
    </section>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
