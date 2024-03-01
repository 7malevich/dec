<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Потенциальным клиентам");
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

        <a class="link-with-lines border-top-bottom" href="formy-dogovorov-i-zayavleniy/">
            Формы договоров и заявлений            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="poryadok-zaklyucheniya-dogovora/">
            Порядок заключения договора            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="perechen-dokumentov-dlya-zaklyucheniya-dogovora-i-vneseniya-izmeneniy/">
            Перечень документов для заключения договора и внесения изменений            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="ispolnitelyam-kommunalnykh-uslug/">
            Исполнителям коммунальных услуг            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="byudzhetnym-organizatsiyam/">
            Бюджетным организациям            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="potrebitelyam-priravnennykh-k-naseleniyu/">
            Потребителям, приравненных к населению            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="energosbytovym-kompaniyam/">
            Энергосбытовым компаниям            <div class="link-with-lines_arrow "></div>
        </a>

        <a class="link-with-lines border-top-bottom" href="vladeltsam-mikrogeneratsii-169/">
            Владельцам микрогенерации            <div class="link-with-lines_arrow "></div>
        </a>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
