
                        </div>
						</section>
                    </div>
                    <div class="menu-nav-left col-md-12 col-lg-5">
						<hr class="menu-divider">
                        <nav class="typical-aside-nav">
<?$APPLICATION->IncludeComponent("bitrix:menu", "2019_left",
					Array(
						"ROOT_MENU_TYPE" => "top",
						"MAX_LEVEL" => "4",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"ALLOW_MULTI_SELECT" => "N",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "N",
						"MENU_CACHE_GET_VARS" => array()
					)
				);?>
                        </nav>

                        <!--  block aside  -->
<!-- баннер ************************************************************************* -->
<?include($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/br_pclients_prim.php");?>
                        <div class="card-slider swiper-container js-card-slider">
                            <div class="swiper-wrapper">

<!-- важные объявления ************************************************************** --> 
<?include($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/notice_pclients_prim.php");?>
                            </div>
                            <div class="card-slider__controls">
                                <div class="card-slider__nav">
                                    <div class="card-slider__btn--prev">
                                        <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn">
                                            <!-- "source/partials/svg/slide-nav-left.svg" -->
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 17L1 9.136 9 1" />
                                            </svg>
                                            <!-- /"source/partials/svg/slide-nav-left.svg" -->
                                        </a>
                                    </div>
                                    <div class="card-slider__btn--next">
                                        <a onclick="return false" href="/PleaseEnableJavascript.html" class="card-slider__btn">
                                            <!-- "source/partials/svg/slide-nav-right.svg" -->
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 17l8-7.864L1 1" />
                                            </svg>
                                            <!-- /"source/partials/svg/slide-nav-right.svg" -->
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-pagination card-slider__pagination"></div>
                            </div>
                        </div>
                        <!--  /block aside  -->
                    </div>
                </div>
            </main>

        </div>
    </div>
    <footer class="footer mt-auto">
        <div class="container">
            <div class="row no-gutters">
                <div class="partners swiper-container js-partners">
<!-- футер партнеры ************************************************************* -->
<?require_once($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/footer_partners.php");?>
                </div>
            </div>
        </div>

        <div class="footer-nav-wrap">
            <div class="container">
                <div class="row no-gutters">
                    <div class="footer-nav col-12">
                        <div class="footer-nav__contacts">
                            <div class="footer-nav__address">
                                Публичное акционерное общество
								<br>«Дальневосточная энергетическая компания»
                                <br>Филиал «Дальэнергосбыт»
								<br>690091, Россия, Приморский край, г.&nbsp;Владивосток, ул.&nbsp;Октябрьская, 8
                            </div>
                            <div class="footer-nav__map">
                                <a href="/company/contacts/#linkmap">Карта проезда</a>
                            </div>
                            <div class="footer-nav__map-phones">
                                <p class="footer-nav__map-phone-link">
                                    ЕРИЦ г.&nbsp;Владивосток: 
                                    <a href="tel:88002347777" class="footer-nav__map-phone-link">8 (800) 234-77-77</a>
                                </p>
                                <p class="footer-nav__map-phone-link">
                                    ЕРИЦ г. Артем: 
                                    <a href="tel:84233791091" class="footer-nav__map-phone-link">8 (42337) 9-10-91</a>
                                </p>
                                <p class="footer-nav__map-phone-link">
                                    ЕРИЦ г. Уссурийск: 
                                    <a href="tel:84234320623" class="footer-nav__map-phone-link">8 (4234) 32-06-23</a>
                                </p>
								<p class="footer-nav__map-phone-link">
                                    Контакт-центр: <br>
                                    <a href="tel:88002347777" class="footer-nav__map-phone-link">8 (800) 234-77-77</a>
                                </p>
                            </div>
                            <!-- <div class="footer-nav__mail">
                                <a href="mailto:priemn@dvec.ru" class="footer-nav__mail-link">priemn@dvec.ru</a>
                            </div> -->
                            <div class="footer-nav__virtual-reception">
                                <a href="/dalsbyt/private_clients/priemnaya/" class="footer-nav__virtual-reception-link">Интернет-приёмная</a>
                            </div>
                            <div class="footer-nav__social-links">
								<a class="footer-nav__social-link" href="https://www.youtube.com/channel/UChTnjEP3wpTtRUXo-20Rfmg" target="_blank" title="ПАО ДЭК на YouTube">
									<img src="/design2019/img/soc-youtube.svg">
								</a>
								<a class="footer-nav__social-link" href="https://vk.com/dvecru" target="_blank" title="ПАО ДЭК ВКонтакте">
									<img src="/design2019/img/soc-vk.svg">
								</a>
								<a class="footer-nav__social-link" href="https://ok.ru/group/62275973087329" target="_blank" title="ПАО ДЭК в Одноклассниках">
									<img src="/design2019/img/soc-ok.svg">
								</a>
								<a class="footer-nav__social-link" href="https://t.me/dvecru" target="_blank" title="ПАО ДЭК в Telegram">
									<img src="/design2019/img/soc-tg.svg" width="30" height="30">
								</a>
                            </div>
                        </div>
                        <div class="footer-nav__map-site-wrap">
                            <!-- <div class="footer-nav__search-documents-wrap">
                                <h3 class="footer-nav__search-title">Поиск входящего документа</h3>
                                <div class="row no-gutters">
                                    <form class="col-12">
                                        <div class="row">
                                            <div class="col-md-4 col-xl-5">
                                                <div class="form-group">
                                                    <label for="numberDocument">Номер документа</label>
                                                    <input type="text" class="form-control" id="numberDocument">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-xl-5">
                                                <div class="form-group">
                                                    <label for="dateRegDocument">Дата регистрации документа</label>
                                                    <input type="text" class="form-control" id="dateRegDocument">
                                                </div>
                                            </div>
                                            <div class="col-2 col-lg-1">
                                                <label><br></label>
                                                <input type="submit" class="btn btn-primary" value="Поиск">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <div class="footer-nav__map-site">
                                <div class="row">
                                    <div class="col-5">
										<div class="footer-nav__map-link-wrap">
                                            <a href="/dalsbyt/private_clients/" class="footer-nav__map-link">Частным клиентам</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/organisations/" class="footer-nav__map-link">Корпоративным клиентам</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/iku/" class="footer-nav__map-link">Исполнителям коммунальных услуг</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/stockholder/" class="footer-nav__map-link">Акционерам и инвесторам</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/customs/" class="footer-nav__map-link">Закупки</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/press_center/" class="footer-nav__map-link">Пресс-центр</a>
                                        </div>
										<div class="footer-nav__map-link-wrap">
                                            <a href="/company/" class="footer-nav__map-link">О компании</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
										<div class="footer-nav__map-link-wrap">
                                            <a href="/company/disclosure/" class="footer-nav__map-link">Раскрытие информации</a>
                                        </div>
										<div class="footer-nav__map-link-wrap">
                                            <a href="https://www.e-disclosure.ru/portal/company.aspx?id=11385" target="_blank" class="footer-nav__map-link">
											Раскрытие информации на e-disclosure.ru</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/dalsbyt/private_clients/dps/" class="footer-nav__map-link">Товары и услуги</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/company/career/" class="footer-nav__map-link">Карьера</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/company/contacts/" class="footer-nav__map-link">Реквизиты</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="/company/documents/#pol_pers_dan" class="footer-nav__map-link">Политика обработки персональных данных</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <a href="/dalsbyt/sitemap/" class="btn btn--footer-map-site">Карта сайта</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="footer-nav-bootom col-12">
                        <div class="copy-wrap">
                            <p class="footer-nav__copy">
                                © Публичное акционерное общество «Дальневосточная энергетическая компания» 2007-2022 г.
                            </p>
                        </div>
                        <!-- <div class="pitcher-logo">
                        </div> -->
                        <button class="btn btn-footer-arrow-up" onclick="scrollToAnchor('pagetop');">
                            <!-- "source/partials/svg/btn-arrow-up.svg" -->
                            <svg width="28" height="15" viewBox="0 0 28 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 14L13.78 1 27 14" stroke="#165280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <!-- /"source/partials/svg/btn-arrow-up.svg" -->
                            <span class="btn-footer-arrow-up__text">
                                наверх
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>




<!-- Modal -->
<?require($_SERVER["DOCUMENT_ROOT"]."/design2019/pages/modal_prim.php");?>
<!-- -->


    <!-- counters-body -->
    <!-- /counters-body -->

</body>

</html>