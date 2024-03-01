<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Организация коммерческого учета электрической энергии");
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

            <a class="link-with-lines border-top-bottom" href="glossariy/">
                Глоссарий            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="klass-tochnosti/">
                Класс точности            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="mesta-ustanovki-priborov-ucheta/">
                Места установки приборов учета            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="poryadok-dopuska-v-ekspluatatsiyu/">
                Порядок допуска в эксплуатацию            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="poryadok-proverki-pered-demontazhom/">
                Порядок проверки перед демонтажом            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="demontazh-priborov-i-sistem-ucheta-ne-svyazannyy-s-zamenoy/">
                Демонтаж приборов и систем учета, не связанный с заменой            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="ustanovka-zamena-priborov-ucheta-bez-tekhprisoedineniya/">
                Установка /замена приборов учета без техприсоединения            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="posledstviya-bezuchetnogo-potrebleniya-elektroenergii/">
                Последствия безучетного потребления электроэнергии            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="planovye-i-vneplanovye-proverki-raschetnykh-priborov/">
                Плановые и внеплановые проверки расчетных приборов            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="snyatie-i-predstavlenie-pokazaniy/">
                Снятие и представление показаний            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="opredelenie-obema-potrebleniya-elektricheskoy-energii-moshchnosti/">
                Определение объема потребления электрической энергии (мощности)            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="predyavlenie-poter/">
                Предъявление потерь            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="primenenie-koeffitsienta-transformatsii/">
                Применение коэффициента трансформации            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="potrebitelyam-svyshe-670-kvt/">
                Потребителям свыше 670 кВт            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="ispolnitelyam-kommunalnykh-uslug-184/">
                Исполнителям коммунальных услуг            <div class="link-with-lines_arrow "></div>
            </a>

            <a class="link-with-lines border-top-bottom" href="zastroyshchikam-mkd/">
                Застройщикам МКД            <div class="link-with-lines_arrow "></div>
            </a>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>