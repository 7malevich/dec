<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>

<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "PATH" => "",
    "SITE_ID" => "ru",
    "START_FROM" => "0",
),
    false
); ?>

    <div class="container">
        <h1 class="h1-marginBot h1-relative"><?= $APPLICATION->showTitle() ?></h1>
    </div>

    <div>
        <section class="block">
            <div class="container show-more-list">
                <div class="flex news-filter">
                    <form action="/search/" method="GET" class="search-on-page mb-40">
                        <input type="text" name="q" class="search-on-page__input" placeholder="Поиск">
                        <input type="hidden" name="where_q[]" value="rushydro_news">
                        <input type="hidden" name="where_q[]" value="filials_news">
                        <button class="search-on-page__button">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 20L16.2223 16.2156L20 20ZM18.3158 11.1579C18.3158 13.0563 17.5617 14.8769 16.2193 16.2193C14.8769 17.5617 13.0563 18.3158 11.1579 18.3158C9.2595 18.3158 7.43886 17.5617 6.0965 16.2193C4.75413 14.8769 4 13.0563 4 11.1579C4 9.2595 4.75413 7.43886 6.0965 6.0965C7.43886 4.75413 9.2595 4 11.1579 4C13.0563 4 14.8769 4.75413 16.2193 6.0965C17.5617 7.43886 18.3158 9.2595 18.3158 11.1579V11.1579Z"
                                      stroke="#ABADB6" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </form>
                    <div class="select-with-name__select select-with-name__select--no-name">
                        <form id="year-select" method="GET">
                            <div class="jq-selectbox jqselect tab-select"><select name="YEAR" class="tab-select">
                                    <option value="">Все года</option>
                                    <option value="2023">2023 год</option>
                                </select>
                                <div class="jq-selectbox__dropdown" style="display: none;">
                                    <ul>
                                        <li class="selected sel" style="">Все года</li>
                                        <li style="">2023 год</li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                $newsInfo = array();

                $iblockId = 262;

                $filter = array(
                    'IBLOCK_ID' => $iblockId,
                    'ACTIVE' => 'Y'
                );

                $select = array(
                    'ID',
                    'NAME',
                    'CODE',
                    'PREVIEW_PICTURE',
                    'PROPERTY_MONTH',
                    'PROPERTY_NUMBER',
                );

                $result = \CIBlockElement::GetList(
                    array("ID" => "DESC"),
                    $filter,
                    false,
                    false,
                    $select
                );

                if ($result) {
                    while ($element = $result->GetNext()) {
                        $imageSrc = CFile::GetPath($element['PREVIEW_PICTURE']);
                        ?>
                        <a href="/press/news/<?= $element["CODE"] ?>/" class="news__item">
                            <? if ($imageSrc): ?>
                                <div class="news__image news__image_medium"
                                     style="background-image:url('<?= $imageSrc ?>')"></div>
                            <? endif; ?>
                            <div class="news__info <?= (!$imageSrc) ? 'news__info_full' : ''; ?>">
                                <div class="date">
                                    <div class="date__day">
                                        <?= $element["PROPERTY_NUMBER_VALUE"] ?>
                                    </div>
                                    <div class="date__month">
                                        <?= $element["PROPERTY_MONTH_VALUE"] ?>
                                    </div>
                                </div>
                                <div class="<?= (!$imageSrc) ? 'h5 news__title news__title_small' : 'h4 news__title news__title_medium'; ?>">
                                    <?= $element['NAME'] ?>
                                </div>
                            </div>
                        </a>
                    <? }
                } ?>

            </div>
        </section>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>