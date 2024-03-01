<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="block section-pt0">
    <div class="container">
        <div class="content">
            <div class="block-with-column">
                <div class="small-column first-in-pda">
                    <a href="/press/news/" class="back-link">
                        Все новости
                    </a>
                </div>
                <div class="big-column big-column_marginLeft">
                    <h1 class="h2 h2-marginBot">
                        <?= $arResult["NAME"] ?> </h1>
                </div>
                <div class="clear"></div>
                <div class="small-column last-in-pda">
                    <div class="gray-socials">
                        <a href="https://connect.ok.ru/offer?url=<?= $_SERVER['REQUEST_URI'] ?>" target="_blank"
                           class="gray-solical__item ok">
                            <svg width="15" height="24" viewBox="0 0 15 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7.17202 12.3678C3.80201 12.3678 1.06124 9.72253 1.06124 6.47056C1.06124 3.21753 3.80201 0.571548 7.17202 0.571548C10.5428 0.571548 13.2828 3.21753 13.2828 6.47056C13.2828 9.72253 10.5428 12.3678 7.17202 12.3678ZM7.17202 4.02858C8.56726 4.02858 9.70218 5.12375 9.70218 6.47056C9.70218 7.81631 8.56726 8.91219 7.17202 8.91219C5.77787 8.91219 4.64186 7.81631 4.64186 6.47056C4.64186 5.12375 5.77787 4.02858 7.17202 4.02858Z"
                                      fill="#ABADB6"></path>
                                <path d="M13.0782 20.4788L9.66209 17.181C10.906 16.9074 12.1056 16.4324 13.2105 15.7625C14.0467 15.2536 14.2986 14.1866 13.7718 13.3795C13.2453 12.5705 12.1407 12.327 11.303 12.836C8.79993 14.3554 5.57727 14.355 3.07563 12.836C2.23797 12.327 1.13303 12.5705 0.607624 13.3795C0.0807511 14.1874 0.331939 15.2536 1.16814 15.7625C2.27307 16.4317 3.4727 16.9074 4.71658 17.181L1.30013 20.4788C0.601774 21.1536 0.601774 22.2478 1.30086 22.9226C1.65077 23.2596 2.10854 23.4283 2.56631 23.4283C3.02481 23.4283 3.48331 23.2596 3.83321 22.9226L7.18897 19.6819L10.5476 22.9226C11.246 23.5974 12.3791 23.5974 13.0782 22.9226C13.778 22.2478 13.778 21.1529 13.0782 20.4788Z"
                                      fill="#ABADB6"></path>
                            </svg>
                        </a>
                        <a href="https://telegram.me/share/url?url=<?= $_SERVER['REQUEST_URI'] ?>" target="_blank"
                           class="gray-solical__item">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3684_5604)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.01172 20.8686C9.52767 20.8686 9.75563 20.6255 10.0436 20.337L12.7954 17.5802L9.36291 15.4476"
                                          fill="#ABADB6"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.36232 15.4481L17.6794 21.7791C18.6285 22.3187 19.3135 22.0393 19.5499 20.8713L22.9354 4.43411C23.2821 3.00233 22.4057 2.35295 21.4978 2.77765L1.61818 10.6754C0.261212 11.2362 0.269123 12.0162 1.37083 12.3637L6.47238 14.0043L18.283 6.32728C18.8406 5.97893 19.3523 6.16621 18.9323 6.55026"
                                          fill="#ABADB6"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3684_5604">
                                        <rect width="23.5294" height="24.2424" fill="white"
                                              transform="translate(0.570312 0.225113)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="http://vk.com/share.php?url=<?= $_SERVER['REQUEST_URI'] ?>" target="_blank"
                           class="gray-solical__item">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3684_6848)">
                                    <path d="M24.989 18.6827C24.9591 18.6182 24.9312 18.5648 24.9053 18.5219C24.4766 17.7499 23.6575 16.8023 22.4484 15.6789L22.4228 15.6532L22.41 15.6406L22.3971 15.6276H22.3841C21.8354 15.1045 21.4879 14.7528 21.3423 14.5727C21.0761 14.2296 21.0164 13.8824 21.1619 13.5306C21.2647 13.2648 21.6509 12.7034 22.3196 11.8457C22.6714 11.3911 22.95 11.0268 23.1557 10.7523C24.6394 8.77987 25.2826 7.51943 25.0853 6.97053L25.0086 6.84226C24.9571 6.76504 24.8242 6.69439 24.6101 6.62997C24.3954 6.56567 24.1211 6.55504 23.7866 6.59789L20.082 6.62348C20.022 6.60221 19.9363 6.60419 19.8247 6.62997C19.7132 6.65574 19.6574 6.66867 19.6574 6.66867L19.5929 6.70088L19.5417 6.73958C19.4988 6.76517 19.4517 6.81018 19.4002 6.87452C19.3489 6.93863 19.3061 7.01387 19.2719 7.09961C18.8685 8.13726 18.41 9.10201 17.8953 9.99381C17.578 10.5256 17.2866 10.9864 17.0204 11.3767C16.7547 11.7667 16.5317 12.0541 16.3517 12.2384C16.1715 12.4228 16.0089 12.5705 15.8628 12.6821C15.717 12.7938 15.6057 12.8409 15.5286 12.8237C15.4513 12.8064 15.3785 12.7893 15.3096 12.7722C15.1897 12.695 15.0932 12.5899 15.0204 12.457C14.9473 12.3241 14.8981 12.1568 14.8724 11.9553C14.8468 11.7536 14.8317 11.5802 14.8273 11.4343C14.8233 11.2887 14.8252 11.0826 14.8339 10.8168C14.8428 10.5509 14.8468 10.3709 14.8468 10.2766C14.8468 9.95065 14.8532 9.59693 14.8659 9.21532C14.8789 8.83371 14.8894 8.53135 14.8982 8.3086C14.9069 8.08563 14.911 7.84972 14.911 7.60102C14.911 7.35232 14.8958 7.15728 14.8659 7.01572C14.8363 6.87434 14.791 6.73711 14.7312 6.60406C14.671 6.47115 14.583 6.36834 14.4675 6.29535C14.3517 6.22245 14.2078 6.1646 14.0366 6.12162C13.582 6.01876 13.0032 5.96312 12.2999 5.95447C10.7049 5.93735 9.68006 6.04034 9.22556 6.26331C9.04548 6.35752 8.88251 6.48624 8.73681 6.64907C8.58241 6.8378 8.56087 6.9408 8.67234 6.95774C9.18695 7.03482 9.55125 7.21923 9.76567 7.51078L9.84294 7.66527C9.90304 7.77673 9.96305 7.97407 10.0231 8.25701C10.0831 8.53995 10.1218 8.85295 10.1388 9.19581C10.1816 9.82193 10.1816 10.3579 10.1388 10.8038C10.0959 11.2498 10.0553 11.597 10.0166 11.8457C9.97792 12.0944 9.92007 12.2959 9.84294 12.4503C9.76567 12.6046 9.71426 12.699 9.68849 12.7332C9.66276 12.7674 9.64132 12.789 9.62429 12.7975C9.51282 12.8402 9.3969 12.862 9.27692 12.862C9.15676 12.862 9.01105 12.8019 8.83958 12.6817C8.66815 12.5616 8.49023 12.3966 8.30582 12.1865C8.12141 11.9763 7.91344 11.6826 7.68182 11.3053C7.45037 10.9281 7.21023 10.4822 6.96153 9.96763L6.75577 9.59449C6.62714 9.35444 6.45143 9.00491 6.22845 8.54622C6.00535 8.08734 5.80814 7.64346 5.63671 7.21468C5.56818 7.0346 5.46524 6.8975 5.32804 6.80316L5.26366 6.76445C5.22086 6.73021 5.15215 6.69385 5.0579 6.65511C4.96351 6.6164 4.86502 6.58865 4.76203 6.57158L1.23747 6.59717C0.877311 6.59717 0.632936 6.67876 0.504261 6.84172L0.452764 6.91881C0.427038 6.96175 0.414062 7.03032 0.414062 7.12471C0.414062 7.21905 0.439789 7.33484 0.491286 7.47194C1.00581 8.6812 1.56534 9.84743 2.16987 10.9708C2.77441 12.0942 3.29975 12.9991 3.74556 13.6847C4.19146 14.3709 4.64597 15.0184 5.10908 15.6271C5.57219 16.236 5.87874 16.6263 6.02873 16.7977C6.17889 16.9694 6.29685 17.0978 6.38259 17.1836L6.70423 17.4922C6.91004 17.6981 7.21226 17.9446 7.61104 18.2319C8.0099 18.5193 8.45148 18.8022 8.93599 19.0811C9.4206 19.3596 9.98436 19.5869 10.6276 19.7626C11.2708 19.9386 11.8967 20.0092 12.5056 19.9751H13.985C14.285 19.9492 14.5123 19.8548 14.6668 19.692L14.7179 19.6275C14.7524 19.5764 14.7846 19.4968 14.8143 19.3898C14.8444 19.2827 14.8594 19.1646 14.8594 19.0361C14.8506 18.6674 14.8787 18.3352 14.9428 18.0393C15.0069 17.7436 15.08 17.5206 15.1617 17.3705C15.2434 17.2204 15.3356 17.0938 15.4382 16.9912C15.541 16.8883 15.6143 16.826 15.6572 16.8046C15.7 16.783 15.7341 16.7684 15.7598 16.7596C15.9656 16.691 16.2078 16.7574 16.4868 16.9591C16.7655 17.1606 17.027 17.4095 17.2715 17.7052C17.516 18.0012 17.8096 18.3333 18.1526 18.702C18.4957 19.0708 18.7958 19.345 19.053 19.5253L19.3102 19.6797C19.4819 19.7827 19.7049 19.877 19.9793 19.9628C20.2533 20.0484 20.4934 20.0699 20.6995 20.027L23.9924 19.9757C24.3181 19.9757 24.5715 19.9218 24.7513 19.8147C24.9314 19.7076 25.0384 19.5895 25.0729 19.461C25.1073 19.3324 25.1092 19.1866 25.0794 19.0235C25.0489 18.8608 25.0189 18.747 24.989 18.6827Z"
                                          fill="#ABADB6"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3684_6848">
                                        <rect width="24.7059" height="24.7059" fill="white"
                                              transform="translate(0.414062 0.647064)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="big-column big-column_marginLeft text-block text-block_text-margin">
                    <p class="c3 color-orange">
                        <?= $arResult["PROPERTIES"]["NUMBER"]["VALUE"] ?> <?= $arResult["PROPERTIES"]["MONTH"]["VALUE"] ?>
                        <?= $arResult["PROPERTIES"]["YEAR"]["VALUE"] ?> </p>
                    <? if ($arResult["PREVIEW_PICTURE"]["SRC"] && !$arResult['PROPERTIES']['SLIDER_IMAGES']['VALUE']): ?>
                        <img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= $arResult["NAME"] ?>"
                             class="full-ico">
                    <? endif; ?>
                    <?= $arResult["PREVIEW_TEXT"] ?>
                    <? if ($arResult['PROPERTIES']['SLIDER_IMAGES']['VALUE']): ?>

                    <div class="photogallery-slider">
                        <div class="photogallery-slider__list swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <?foreach ($arResult['PROPERTIES']['SLIDER_IMAGES']['VALUE'] as $value): ?>
                                    <div class="swiper-slide swiper-slide-active" style="width: 838px; margin-right: 32px;">
                                        <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/gray-pixel.png" data-original-src="<?= CFile::GetFileArray($value)["SRC"]; ?>" data-original-src-width="1920" data-original-src-height="1080" role="group" alt="<?= CFile::GetFileArray($value)["ALT"]; ?>">
                                        <div class="photogallery-slider__item" style="background-image: url('<?= CFile::GetFileArray($value)["SRC"]; ?>')"></div>
                                    </div>
                                <?endforeach;?>
                            </div>
                            <div class="photogallery-slider__nav">
                                <div class="swiper-button swiper-button_prev-gallery swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true">
                                    <div class="swiper-button_arrow"></div>
                                </div>
                                <div class="swiper-pagination-nav swiper-pagination-fraction"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">2</span></div>
                                <div class="swiper-button swiper-button_next-gallery" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                                    <div class="swiper-button_arrow"></div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                    <? endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
