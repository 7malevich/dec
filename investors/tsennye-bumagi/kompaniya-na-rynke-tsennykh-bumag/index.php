<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Компания на рынке ценных бумаг");
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

    <section id="bx_1949384460_1186">
        <section class="block section-pt0">
            <div class="container text-block">
                <h4>Акции ПАО «РЭСК» допущены к обращению на фондовой бирже ПАО Московская Биржа (ММВБ).</h4>

                <div class="scroll-table" data-class="undefined" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                     aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <p>Наименование организатора торгов</p>
                                                </td>
                                                <td>
                                                    <p>Код ценной бумаги</p>
                                                </td>
                                                <td>
                                                    <p>ISIN</p>
                                                </td>
                                                <td>
                                                    <p>Дата допуска к торгам</p>
                                                </td>
                                                <td>
                                                    <p>Уровень допуска</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>ПАО Московская Биржа</p>
                                                </td>
                                                <td>
                                                    <p>RZSB</p>
                                                </td>
                                                <td>
                                                    <p>RU000A0D9AF5</p>
                                                </td>
                                                <td>
                                                    <p>16.09.2005г.</p>
                                                </td>
                                                <td>
                                                    <p>III уровень</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: auto; height: 197px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                    </div>
                </div>

            </div>
        </section>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>