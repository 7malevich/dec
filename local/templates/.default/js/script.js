$(function() {

    // Меню "Все сайты"
    $(document).on('click', '.js-open-menu-sites', function() {
        $('.header__sites').addClass('header__sites-active'); 
        $('body').addClass('body-overflow-hidden');
    });

    $(document).on('click', '.header__sites-close', function() {
        $('.header__sites').removeClass('header__sites-active');
        setTimeout(function() {
            $('body').removeClass('body-overflow-hidden');
        }, 400);
    });

    $(document).on('keyup', function(e) {
        if (e.key == 'Escape') {
            if ($('.header__sites').hasClass('header__sites-active')) {
                $('.header__sites-close').trigger('click');
            }
            if ($('.header-search__form-wrapper').hasClass('header-search__form-wrapper--show')) {
                $('.header-search__form-close').trigger('click');
            }
            if ($('.mobile-menu').hasClass('mobile-menu-active')) {
                $('.mobile-menu-close').trigger('click');
            }
            if ($('.phone-block__phone').hasClass('open')) {
                $('.toggle__arrow').trigger('click');
            }
        }
    });

    // скрытие пунктов меню на разных разрешениях
    $headermenu = $('.header-menu');
	
	function flexMenu() {
		$headermenu_dropmore = $headermenu.find('.header-menu_drop-more')[0];

		if ($headermenu_dropmore) $headermenu_dropmore.remove();
		
		$headermenu_drophtml = '';
		$headermenu_width = $headermenu.width();
		$headermenu_i = 0;
		$headermenu_k = 0;

		$headermenu.find('.header-menu__item').each(function() {
			$marginright = parseInt($(this).css('margin-right'));
			$elwidth = parseInt($(this).width()+$marginright);
			$headermenu_i += $elwidth;

			if (($headermenu_i-$marginright)>($headermenu_width - 40)) {
				$(this).removeClass('show');		

				if (!$headermenu_k) {
					$headermenu_k++;
					$(this).before('<li class="header-menu_drop-more"><span></span></li>'); 
				}
				
				$headermenu_drophtml += '<li class="header-menu_drop-item">'+$(this).html()+'</li>';
			} else {
				$(this).addClass('show');
			}
		})
			
		if($headermenu_k>0)	{
			$headermenu_drophtml = '<ul class="header-menu_drop-ul">'+$headermenu_drophtml+'</ul>';
			$headermenu_dropmore = $headermenu.find('.header-menu_drop-more');
			$headermenu_dropmore.append($headermenu_drophtml);
		}
	}
	
	flexMenu();

	$(window).resize(function(){		
		flexMenu()
	});

    // Мобильное меню
    $('.mobile-menu').show(function() {
        var menuClone = $('.header-menu__list').clone();
        menuClone.find('.header-menu_drop-more').remove();
        menuClone.find('.header-menu__item').addClass('show');
        menuClone.appendTo('.mobile-menu__inner .mobile-menu__list');
    });
    $(document).on('click', '.mop', function() {
        $('.mobile-menu').addClass('mobile-menu-active');
        $('body').addClass('body-overflow-hidden');
    });
    $(document).on('click', '.mobile-menu-close', function() {
        $('.mobile-menu').removeClass('mobile-menu-active');
        setTimeout(function() {
            $('body').removeClass('body-overflow-hidden');
        }, 400)
    });

    $(document).on('click', '.mobile-menu .header-link.have-sub', function(e) {
        e.preventDefault();
        $(this).next().clone().appendTo('.mobile-menu__level-two');

        $('.mobile-menu__level-two ul').prepend(
            '<li class="header-menu__sub-item mobile-menu__level-title">' +
                '<span>' + $(this).text() + '</span>' +
            '</li>' +
            '<li class="header-menu__sub-item mobile-menu__level-subtitle">' +
                '<a class="header-menu__sub-link" href="' + $(this).attr('href') + '">' + $('.header-menu__list').data('section') + '</a>' +
            '</li>'
        );

        $('.mobile-menu__sub').addClass('mobile-menu__sub-show mobile-menu__sub-two');
    });

    $(document).on('click', '.mobile-menu .header-menu__sub-link.have-sub', function(e) {
        e.preventDefault();
        $(this).next().clone().appendTo('.mobile-menu__level-three');

        $('.mobile-menu__level-three .mobile-menu__level-title').remove();
        $('.mobile-menu__level-three .mobile-menu__level-subtitle').remove();

        $('.mobile-menu__level-three ul').prepend(
            '<li class="header-menu__sub-item">' +
                '<span>' + $(this).text() + '</span>' +
            '</li>' +
            '<li class="header-menu__sub-item">' +
                '<a class="header-menu__sub-link" href="' + $(this).attr('href') + '">' + $('.header-menu__list').data('section') + '</a>' +
            '</li>'
        );

        $('.mobile-menu__level-three').addClass('mobile-menu__level-three--show');
        $('.mobile-menu__sub').addClass('mobile-menu__sub-three').removeClass('mobile-menu__sub-two');
    });

    $(document).on('click', '.mobile-menu__back', function() {
        if ($('.mobile-menu__sub').hasClass('mobile-menu__sub-two')) {
            $('.mobile-menu__sub').removeClass('mobile-menu__sub-show');

            setTimeout(function() {
                $('.mobile-menu__level-two').html('');
            }, 400);
        } else if ($('.mobile-menu__sub').hasClass('mobile-menu__sub-three')) {
            $('.mobile-menu__level-three').removeClass('mobile-menu__level-three--show');
            $('.mobile-menu__sub').addClass('mobile-menu__sub-two').removeClass('mobile-menu__sub-three');

            setTimeout(function() {
                $('.mobile-menu__level-three').html('');
            }, 400)
        }
    });

    // Форма поиска
    $(document).on('click', '.header-search-ico .header__ico', function() {
        $('.header-search__form-wrapper').addClass('header-search__form-wrapper--show');
        setTimeout(function() {
            $('.header-search__form input').focus();
        }, 600);
    });

    $(document).on('click', '.header-search__form-close', function() {
        if ($('.header-search__form input').val() != '') {
            $('.header-search__form input').val('');
            $('.header-search__form input').focus();
        } else {
            $('.header-search__form-wrapper').removeClass('header-search__form-wrapper--show');
        }
    });

    // Адаптация длинны формы поиска
    function adaptiveHeaderSearch() {
        if ($(window).width() > 1600) {
            $('.header-search__form-wrapper').css('width', '372px');
        } else if ($(window).width() <= 1600 && $(window).width() > 1024) {
            $('.header-search__form-wrapper').css('width', '400px');
        } else if ($(window).width() <= 1024 && $(window).width() > 600) {
            $('.header-search__form-wrapper').css('width', '350px');
        } else if ($(window).width() <= 600) {
            var headrWidth = ($('.header').width() - $('.mop').outerWidth(true)) + 'px';
            $('.header-search__form-wrapper').css('width', headrWidth);
        }
    }
    adaptiveHeaderSearch();
    $(window).resize(function() {
        adaptiveHeaderSearch();
    });

    // Результаты формы поиска
    function debounce(callback, delay) {
        var timeout;
        return function() {
            clearTimeout( timeout );
            timeout = setTimeout( callback, delay );
        }
    }

    var myInput = document.querySelector(".header-search__form input");

    myInput.addEventListener(
        "change", debounce(searchAjax, 500)
    );
    myInput.addEventListener(
        "keyup", debounce(searchAjax, 500)
    );
    function searchAjax() {
        var $this = $(".header-search__form input");
        if ($this.val().length > 3) {
            $('.header-search__list').fadeIn();
            var ajaxQuery = '/local/ajax/ajax_search.php?q=' + $this.val();
            $.ajax({
                url: ajaxQuery,
                method: 'get',
                dataType: 'html',
                success: function(content) {
                    var result = $(content).find("ul");
                    $('.header-search__list-inner .simplebar-content').html(content);
                }
            });
        } else {
            $('.header-search__list').fadeOut();
        }
    }
    new SimpleBar($('.header-search__list-inner')[0]);

    //Селекты
    $('select').styler({
		selectPlaceholder: '',
        selectSmartPositioning: false,
        onSelectOpened: function() {
            var openSelect = $(this).parent();
            $('.select-with-name').not(openSelect).css('z-index', 1);
            $('.select-without-name').not(openSelect).css('z-index', 1);
            openSelect.css('z-index', 2);
        }
    });

    // Селект с иконкой
    var iconColorList = [];
    function createSelectIcons() {
        $('.jq-selectbox__dropdown ul li').each(function() {
            var attr = $(this).data('color');
            if (typeof attr !== 'undefined' && attr !== false) {
                var iconColor = 'option-ico_' + attr;
                $(this).addClass('option-ico').addClass(iconColor);
                iconColorList.push(iconColor)
            }
        });
    }

    function removeOldColorClass(select) {
        for (var i = 0; i < iconColorList.length; i++) {
            if ($(select).hasClass(iconColorList[i])) {
                $(select).removeClass(iconColorList[i]);
            }
        }
        $(select).removeClass('option-ico');
    }

    function changeSelectIconOnSelectText() {
        $('.jq-selectbox__dropdown ul li').each(function() {
            var attr = $(this).data('color');
            if ($(this).hasClass('selected')) {
                var selectText = $(this).parents('.select-with-ico').find('.jq-selectbox__select-text');
                
                removeOldColorClass(selectText);
                if (typeof attr !== 'undefined' && attr !== false) {
                    selectText.addClass('option-ico').addClass('option-ico_' + attr);
                }
            }
        });
    }

    createSelectIcons();
    changeSelectIconOnSelectText();

    $(document).on('change', '.select-with-ico select', function() {
        changeSelectIconOnSelectText();
    });

    // Селекты для карты географии присутствия
    $(document).on('change', '#map-object-select select', function() {
        var colorAttr = $(this).find('option:selected').data('color');
        changeItemsAttrs('color', colorAttr);
        
        if (!$(this).find('option:selected')[0].hasAttribute("data-have-power")) {
            $('#map-power-select').addClass("select-with-name--disabled");
        } else {
            $('#map-power-select').removeClass("select-with-name--disabled");
        }
    });
    $(document).on('change', '#map-power-select select', function() {
        var powerAttr = $(this).find('option:selected').data('power');
        changeItemsAttrs('power', powerAttr);
    });
    $(document).on('change', '#map-district-select select', function() {
        var districtAttr = $(this).find('option:selected').data('district');
        changeItemsAttrs('district', districtAttr);
    });

    function changeItemsAttrs(dataAttr, valueAttr) {
        $('.geography-coordinates__item').each(function() {
            var $this = $(this),
                dataAttrActive = dataAttr + '-active',
                dataColorTrue;

            if (valueAttr != 'gesGaes') {
                dataColorTrue = $this.data(dataAttr) === valueAttr;
            } else {
                dataColorTrue = $this.data(dataAttr) === '582E91' || $this.data(dataAttr) === '00AEEF';
            }

            if (typeof valueAttr !== 'undefined' && valueAttr !== false) {
                if (dataAttr !== 'power') {
                    if (dataColorTrue) {
                        $this.data(dataAttrActive, true);
                    } else {
                        $this.data(dataAttrActive, false);
                    }
                } else {
                    arValueAttr = valueAttr.split(',');
                    if ($this.data(dataAttr) >= arValueAttr[0] && $this.data(dataAttr) <= arValueAttr[1]) {
                        $this.data(dataAttrActive, true);
                    } else if ($this.data(dataAttr) === '') {
                        $this.data(dataAttrActive, false);
                    } else {
                        $this.data(dataAttrActive, false);
                    }

                    if (
                        // $this.data('type') == 'Сбытовые компании' || 
                        // $this.data('type') == 'Электросетевые компании' || 
                        // $this.data('type') == 'Научно-исследовательские и проектные организации' ||
                        $this.data('type') == 'Крупные котельные'
                        // $this.data('type') == 'Энергокомпании ДФО, не разделенные по видам бизнеса'
                        ) {
                        $this.data(dataAttrActive, false);
                    }
                }
            } else {
                $this.data(dataAttrActive, true);
            }
        
            if ($this.data('color-active') === true && $this.data('power-active') === true && $this.data('district-active') === true) {
                $this.data('active', true);
            } else {
                $this.data('active', false);
            }
        });
        
    }

    // Легенда на карте
    function informerClick() {
        if ($(window).width() < 1024) {
            $('.informer').addClass('informer-mobile').removeClass('informer-pc');
        } else {
            $('.informer').addClass('informer-pc').removeClass('informer-mobile');
        }
    }
    informerClick();
    $(window).resize(function() {
        informerClick();
    });

    $(document).on('click', '.informer-mobile', function() {
        $('.informer__inner').toggleClass('informer__inner-open');
        if ($('.informer__inner').hasClass('informer__inner-open')) {
            $('.geography__wrapper').css('z-index', '11')
        } else {
            $('.geography__wrapper').css('z-index', '1');
        }
    });

    // Спойлеры в таблице карты географии присутствия
    $(document).on('click', '.geography-table__type-spoiler', function() {
        $(this).parent().find('.geography-table__type-block').slideToggle(500);
        $(this).toggleClass('geography-table__type-spoiler--active');
    });

    // Переключатель
    $(document).on('click', '.switch__button-item', function() {
        $('.switch__button-item').removeClass('switch__button-item--active');
        $(this).addClass('switch__button-item--active');
    });

    // Длинна переключателя
    $('.switch').each(function() {
        var childs = $(this).find('.switch__button-item');
        var childWidth = 0;
        for (child of childs) {
            if ($(child).outerWidth() > childWidth) {
                childWidth = $(child).outerWidth();
            }
        }
        $(this).find('.switch__button-item').css('width', childWidth);
    });

    // Переключатель для карты географии присутствия
    $(document).on('click', '.switch__button-item', function() {
        var $this = $(this);
        if ($this.attr('id') === 'geography-map-switch') {
            $('#geography-table-switch').css('pointer-events', 'none');
        } else {
            $('#geography-map-switch').css('pointer-events', 'none');
        }
        $('.geography__wrapper').slideUp(500, function() {
            if ($this.attr('id') === 'geography-map-switch') {
                $('#geography-table').fadeOut();
                $('#geography-map').fadeIn(function() {
                    $('.geography__wrapper').slideDown(function() {
                        $('.map-select').removeClass('select-with-name--disabled');
                        $('#geography-table-switch').css('pointer-events', 'all');
                    });
                });
            } else {
                $('.map-select').addClass('select-with-name--disabled');
                $('#geography-map').fadeOut();
                $('#geography-table').fadeIn(function() {
                    $('.geography__wrapper').slideDown(function() {
                        $('.map-select').addClass('select-with-name--disabled');
                        $('#geography-map-switch').css('pointer-events', 'all');
                    });
                });
            }
        });

    });

    // Слайдер вверху страницы
    if($('.top-page-slider').length){
        if($(".top-page-slider .swiper-slide").not(".swiper-slide-duplicate").length > 1)
        {
            var sliderLoop = true;
        }
        else
        {
            var sliderLoop = false;
        }
        $('.top-page-slider').each(function (e) {
            var topSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                slidesPerView: 1,
                loop: sliderLoop,
                /* pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                }, */
                autoplay: {
                    delay: 4000,
                },
                navigation: {
                    nextEl: '.top-page-banner-next',
                    prevEl: '.top-page-banner-prev',
                },
                on: {
                    slideChange: function () {
                        var swiperPagination = this.pagination.$el;
                        if (swiperPagination !== undefined) {
                            swiperPagination = $(swiperPagination[0]);
                            swiperBulletBeforeElem(swiperPagination);
                        }

                        /* var slideIndex = this.activeIndex,
                            slidePhotos = $('.top-page-slider').find('.swiper-slide').eq(slideIndex).find('.top-page-banner').data('slides');
                        
                        if (slidePhotos != undefined) {
                            var slidePhotosArr = slidePhotos.split(', '),
                                counter = 0,
                                slidePhotoImg = $('.top-page-slider').find('.swiper-slide').eq(slideIndex).find('.top-page-banner__img ');

                            slidePhotoImg.removeClass('active');
                            slidePhotoImg.eq(counter).addClass('active');
                            
                            if (slidePhotosArr.length > 1) {
                                var slidePhotoInterval = setInterval(function() {
                                    counter++;
                                    slidePhotoImg.eq(counter).addClass('active');
                                    
                                    if (counter == slidePhotosArr.length - 1) {
                                        clearInterval(slidePhotoInterval);
                                    }
                                }, 2000);
                            }
                        } */
                    }
                }
            });
        });
    }

    // Слайдер с элементами    
    if($('.element-slider__container').length){
        $('.element-slider__container').each(function (e) {
            var elementSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                spaceBetween: 24,
                slidesPerView: "auto",
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button_next',
                    prevEl: '.swiper-button_prev',
                },
                breakpoints: {
                    1025: {
                        spaceBetween: 32,
                        slidesPerView: 2,
                    },
                    1280: {
                        spaceBetween: 60,
                        slidesPerView: 3,
                    }
                },
                on: {
                    slideChange: function () {
                        var swiperPagination = $(this.pagination.$el[0]);
                        swiperBulletBeforeElem(swiperPagination);
                    }
                }
            }); 
        }); 
    }

    if($('.sustainable-news').length){
        $('.sustainable-news').each(function (e) {
            var sustainableSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                spaceBetween: 24,
                slidesPerView: "auto",
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button_next--sustainable-news',
                    prevEl: '.swiper-button_prev--sustainable-news',
                },
                breakpoints: {
                    1025: {
                        spaceBetween: 32,
                        slidesPerView: 2,
                    },
                    1280: {
                        spaceBetween: 60,
                        slidesPerView: 3,
                    }
                },
                on: {
                    slideChange: function () {
                        var swiperPagination = $(this.pagination.$el[0]);
                        swiperBulletBeforeElem(swiperPagination);
                    }
                }
            }); 
        }); 
    }

    // Слайдер табов
    if($('.tabs__list-mob').length){
        tabsSlider = new Swiper($('.tabs__list-mob'), {
            direction: 'horizontal',
            speed: 400,
            // spaceBetween: 40,
            slidesPerView: 'auto',
            loop: false,
            allowTouchMove: true,
            breakpoints: {
                559: {
                    allowTouchMove: false,
                }
            }
        }); 
    }
    
    // Слайдер баннеров (4)
    if($('.banners-slider').length){
        var bannerSlider = new Swiper($('.banners-slider'), {
            direction: 'horizontal',
            speed: 400,
            spaceBetween: 48,
            slidesPerView: 'auto',
            loop: false,
            breakpoints: {
                1025: {
                    spaceBetween: 60,
                    slidesPerView: 3,
                },
                1280: {
                    spaceBetween: 60,
                    slidesPerView: 4,
                }
            }
        }); 
    }
    // Слайдер баннеров (3)
    if($('.three-banners-slider').length){
        var bannerSlider = new Swiper($('.three-banners-slider'), {
            direction: 'horizontal',
            speed: 400,
            spaceBetween: 48,
            slidesPerView: 'auto',
            loop: false,
            breakpoints: {
                1025: {
                    spaceBetween: 60,
                    slidesPerView: 3,
                }
            }
        }); 
    }

    // Слайдер в подвале
    if($('.links-slider').length){
        var linksSlider = new Swiper($('.links-slider'), {
            direction: 'horizontal',
            speed: 400,
            spaceBetween: 15,
            slidesPerView: 'auto',
            loop: true,
            breakpoints: {
                480: {
                    spaceBetween: 25,
                },
                1025: {
                    spaceBetween: 100,
                },
                1440: {
                    spaceBetween: 140,
                },
            }
        }); 
    }

    // Слайдер соревнований
    if($('.sorevnovaniya-slider').length){
        $('.sorevnovaniya-slider').each(function (e) {
            var sorevnovaniyaSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                spaceBetween: 30,
                slidesPerView: 'auto',
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button_next',
                    prevEl: '.swiper-button_prev',
                },
                breakpoints: {
                    1025: {
                        spaceBetween: 60,
                        slidesPerView: 2,
                    }
                },
                on: {
                    slideChange: function () {
                        var swiperPagination = $(this.pagination.$el[0]);
                        swiperBulletBeforeElem(swiperPagination);
                    }
                }
            });
        });
    }

    // Появление в пагинации точек для первой и последней страниц слайдера
    function swiperBulletBeforeElem(swiperPagination) {
        var swiperBulletFirst = swiperPagination.find('.swiper-pagination-bullet:first-child');
        var swiperBulletLast = swiperPagination.find('.swiper-pagination-bullet:last-child');
        swiperPagination.find('.swiper-pagination-bullet').removeClass('swiper-pagination-bullet_before');

        if (swiperBulletFirst.hasClass('swiper-pagination-bullet-active')) {
            swiperBulletLast.addClass('swiper-pagination-bullet_before');
        } else if (swiperBulletLast.hasClass('swiper-pagination-bullet-active')) {
            swiperBulletFirst.addClass('swiper-pagination-bullet_before');
        }
    }

    $(document).on('click', '.swiper-pagination-bullet', function() {
        var swiperPagination = $(this).parent();
        swiperBulletBeforeElem(swiperPagination);
    });

    $('.swiper-pagination-bullet:last-child').addClass('swiper-pagination-bullet_before');

    // Слайдер основных событий
    setTimeout(function() {
        $('.main-events__wrapper').css('opacity', '1');
    }, 100);

    if($('.main-events-year').length){
        var mainEventsYear = $('.main-events-year').owlCarousel({
            margin: 0,
            autoWidth: true,
            items: 7,
            touchDrag: false,
            mouseDrag: false,
        })
    }

    var onePersent,
        yearItemWidth,
        yearItemActiveWidth;
    
    function eventsYearsWidth() {
        onePersent = $('.main-events-year').width() / 100;
        yearItemWidth = onePersent * 11.36;
        yearItemActiveWidth = onePersent * 31.872852;
    }

    function eventsYearsWidthSet() {
        $('.main-events-year__item').css('width', yearItemWidth);
        $('.main-events-year__item-active').css('width', yearItemActiveWidth);
    }

    function checkIndex(thisElem) {
        var $this = thisElem
            thisIndex = $this.parent().index(),
            leftToTheEnd = $('.main-events-year .owl-item').length - thisIndex;
            lastMoveSlide = $('.main-events-year .owl-item').length - 8;
            checkIndexArr = [thisIndex, lastMoveSlide, leftToTheEnd];
            return checkIndexArr;
    }

    function switchItemSlider() {
        $('.main-events-items--wrapper').fadeOut(400, function() {
            $('.main-events-items').removeClass('main-events-items--show');
            var curYear = $('.main-events-year__item-active').data('year');
            $('.main-events-items').each(function() {
                var $this = $(this);
                if ($this.data('year') === curYear) {
                    $this.addClass('main-events-items--show');
                    $this.show(function() {
                        $('.main-events-items--wrapper').fadeIn(400);
                    })
                }
            })
            setTimeout(function() {
                itemsNavDisable();
            }, 200);
        });
    }

    function removeActiveYear() {
        $('.main-events-year__item').removeClass('main-events-year__item-active');
        eventsYearsWidthSet();
    }

    function refreshYearSlider() {
        eventsYearsWidthSet();
        mainEventsYear.trigger('refresh.owl.carousel');
        setTimeout(function() {
            navDisable();
            switchItemSlider();
            $('.main-events-year__item').css('pointer-events', 'all');
            $('.main-events-year__nav').css('pointer-events', 'all');
        }, 100);
    }

    function navDisable() {
        var activeYearElem = $('.main-events-year__item-active').parent().index();
        if (activeYearElem === 0) {
            $('.main-events-year__nav-prev').addClass('main-events-year__nav-disabled');
        } else {
            $('.main-events-year__nav-prev').removeClass('main-events-year__nav-disabled');
        }
        
        if (activeYearElem === $('.main-events-year .owl-item').length - 2) {
            $('.main-events-year__nav-next').addClass('main-events-year__nav-disabled');
        } else {
            $('.main-events-year__nav-next').removeClass('main-events-year__nav-disabled');
        }
    }

    function temporaryNavDisable() {
        $('.main-events-year__item').css('pointer-events', 'none');
        $('.main-events-year__nav').css('pointer-events', 'none');
    }

    function autoHeight(item, ratio) {
        if ($(window).width() <= 1024) {
            $(item).height($(item).width() / ratio);
        } else {
            $(item).height(207);
        }
    }

    setTimeout(function() {
        eventsYearsWidth();
        eventsYearsWidthSet();
        navDisable();
        itemsNavDisable();
        autoHeight('.main-events-items__item-img', 1.7916);
    }, 10);

    if ($('.main-events-year').length) {
        $(window).resize(function() {
            eventsYearsWidth();
            eventsYearsWidthSet();
            mainEventsYear.trigger('refresh.owl.carousel');
            autoHeight('.main-events-items__item-img', 1.7916);
        });
    }

    $(document).on('click', '.main-events-year__item-dot', function(event) {
        var thisDot = $(this),
            $this = thisDot.parent();
            thisIndex = checkIndex($this);

        temporaryNavDisable();

        removeActiveYear();

        setTimeout(function() {
            if (thisIndex[2] >= 8) {
                mainEventsYear.trigger('to.owl.carousel', [thisIndex[0], 300]);
            } else {
                mainEventsYear.trigger('to.owl.carousel', [thisIndex[1], 300]);
            }

            setTimeout(function() {
                $this.addClass('main-events-year__item-active');
                refreshYearSlider();
            }, 400);
        }, 400);
    });

    $(document).on('click', '.main-events-year__nav-prev', function() {
        var indexPastActive = $('.main-events-year__item-active').parent().index() - 1,
            $this = $('.main-events-year .owl-item').eq(indexPastActive).find('.main-events-year__item'),
            thisIndex = checkIndex($this);

        temporaryNavDisable();

        removeActiveYear();

        setTimeout(function() {
            if (thisIndex[2] >= 8) {
                mainEventsYear.trigger('to.owl.carousel', [thisIndex[0], 300]);
            } else {
                mainEventsYear.trigger('to.owl.carousel', [thisIndex[1], 300]);
            }

            setTimeout(function() {
                $this.addClass('main-events-year__item-active');
                refreshYearSlider();
            }, 400);
        }, 400);
    });

    $(document).on('click', '.main-events-year__nav-next', function() {
        var indexPastActive = $('.main-events-year__item-active').parent().index() + 1,
            $this = $('.main-events-year .owl-item').eq(indexPastActive).find('.main-events-year__item'),
            thisIndex = checkIndex($this);

        temporaryNavDisable();

        removeActiveYear();

        setTimeout(function() {
            if (thisIndex[2] >= 8) {
                mainEventsYear.trigger('to.owl.carousel', [thisIndex[0], 300]);
            } else {
                mainEventsYear.trigger('to.owl.carousel', [thisIndex[1], 300]);
            }

            setTimeout(function() {
                $this.addClass('main-events-year__item-active');
                refreshYearSlider();
            }, 400);
        }, 400);
    });

    $(document).on('click', '.main-events__wrapper-start', function() {
        var $this = $('.main-events-year .owl-item').eq(0).find('.main-events-year__item');

        temporaryNavDisable();

        removeActiveYear();

        setTimeout(function() {
            mainEventsYear.trigger('to.owl.carousel', [0, 300]);
            setTimeout(function() {
                $this.addClass('main-events-year__item-active');
                refreshYearSlider();
            }, 400);
        }, 400);
    });

    $(document).on('click', '.main-events__wrapper-end', function() {
        var lastActiveSlide = $('.main-events-year .owl-item').length - 8,
            lastSlide = $('.main-events-year .owl-item').length - 2,
            $this = $('.main-events-year .owl-item').eq(lastSlide).find('.main-events-year__item');

        temporaryNavDisable();

        removeActiveYear();

        setTimeout(function() {
            mainEventsYear.trigger('to.owl.carousel', [lastActiveSlide, 300]);
            setTimeout(function() {
                $this.addClass('main-events-year__item-active');
                refreshYearSlider();
            }, 400);
        }, 400);
    });

    var mainEventsItems;
    if ($('.main-events-items').length) {
        $('.main-events-items').each(function() {
            mainEventsItems = $('.main-events-items');
            mainEventsItems.owlCarousel({
                margin: 60,
                autoWidth: true,
                nav: false,
                touchDrag: true,
                mouseDrag: true,
                responsive : {
                    0: {
                        touchDrag: false,
                        mouseDrag: false,
                    },
                    1024: {
                        touchDrag: true,
                        mouseDrag: true,
                    }
                }
            })
        })
    }

    $(document).on('click', '.main-events-items__nav-prev', function(e) {
        mainEventsItems.trigger('prev.owl.carousel', [300]);
    });

    $(document).on('click', '.main-events-items__nav-next', function(e) {
        mainEventsItems.trigger('next.owl.carousel', [300]);
    });

    function itemsNavDisable() {
        if ($('.main-events-items--show .owl-item').length < 4) {
            $('.main-events-items__nav-next').addClass('main-events-items__nav-disabled');
            $('.main-events-items__nav-prev').addClass('main-events-items__nav-disabled');
        } else {
            var owlItemActive = 0;
            $('.main-events-items--show .owl-item').each(function() {
                if ($(this).hasClass('active')) {
                    owlItemActive++;
                }
            });

            if (owlItemActive > 3) {
                $('.main-events-items__nav-next').removeClass('main-events-items__nav-disabled');
            } else {
                $('.main-events-items__nav-next').addClass('main-events-items__nav-disabled');
            }

            if ($('.main-events-items--show .owl-item:first').hasClass('active')) {
                $('.main-events-items__nav-prev').addClass('main-events-items__nav-disabled');
            } else {
                $('.main-events-items__nav-prev').removeClass('main-events-items__nav-disabled');
            }
        }
    }

    if ($('.main-events-items').length) {
        mainEventsItems.on('changed.owl.carousel', function(e) {
            mainEventsItems.on('to.owl.carousel', [1, 300]);
            if (e.item.index == 0) {
                $('.main-events-items__nav-prev').addClass('main-events-items__nav-disabled');
            } else {
                $('.main-events-items__nav-prev').removeClass('main-events-items__nav-disabled');
            }

            if ($('.main-events-items--show .owl-item').length >= 4) {
                if (e.item.count - e.item.index == 3) {
                    $('.main-events-items__nav-next').addClass('main-events-items__nav-disabled');
                } else {
                    $('.main-events-items__nav-next').removeClass('main-events-items__nav-disabled');
                }
            }
        });
    }

    $(document).on('change', '.main-events-year__select', function() {
        var yearAttr = $(this).find('option:selected').data('year');
        $('.main-events-items--wrapper').slideUp(400, function() {
            $('.main-events-items').removeClass('main-events-items--show');
            $('.main-events-items').each(function() {
                var $this = $(this);
                if ($this.data('year') === yearAttr) {
                    $this.addClass('main-events-items--show');
                    setTimeout(function() {
                            $('.main-events-items--wrapper').slideDown(400);
                    }, 100);
                }
            });
        });
    });

    // Четная раскраска таблиц
    var colorFlag = true;
    var counter = 1;
    $('.js-action tr').each(function() {
        if ($(this).find("td").length == 3) {
            counter++;
            colorFlag = !colorFlag;
        }

        if (counter > 12) {
            $(this).addClass("hidden-info");
        }

        if (colorFlag) {
            $(this).addClass("tr-table-blue");
        }
    });

    // Табы
    $(document).on('click', '.tabs__title', function (e) {
        tabs = $(this).closest('.tabs');
        var tabIndex = $(this).parent().index();
        if($(this).closest('.tabs__list').hasClass('tabs__list--full')) {
            tabIndex = $(this).index();
        }
        $(this).addClass('tabs__title_selected').siblings().removeClass('tabs__title_selected');
        $(this).parent().siblings().find('.tabs__title').removeClass('tabs__title_selected')
        if(tabs.hasClass('tabs_ajax')) {
            tabs.find('.ajax-target').html('<a href="" class="news__item"><div class="news__image news__image_big" style="background-image:url(./img/news/1.png)"></div><div class="news__info"><div class="date"><div class="date__day">01</div><div class="date__month">май</div></div><div class="h3 news__title news__title_big">Новость 1</div></div></a>')
        } else {
            console.log(tabIndex);
            tabs.find('.tabs__block').eq(tabIndex).addClass('tabs__block_selected').siblings().removeClass('tabs__block_selected');
            var data = {"tab":tabIndex};
            $.ajax({
                url: '/local/ajax/session_tabs.php',
                method: 'post',
                dataType: 'html',
                data: data,
                success: function(html){
                }
            });
        }

        if ($(window).width() < 601) {
            tabsSlider.slideTo(tabIndex, 300, false);
        }
    });

    // Выпадашка
    $(document).on('click', '.toggle__arrow', function (e) {
        $(this).closest('.toggle').toggleClass('open');
        $(this).closest('.toggle').find('.toggle__content').stop().slideToggle();
    })

    $(document).mouseup(function (e){
		var div = $(".toggle");
		if (!div.is(e.target) && div.has(e.target).length === 0) {
            $('.toggle').removeClass('open');
			$('.toggle__content').stop().slideUp();
		}
	});

    // Анимация подписей инпутов
    function inputChange(thisElem) {
        if (thisElem.val() != '') {
			thisElem.closest('.input__wrapper').addClass('full');
		} else {
			thisElem.closest('.input__wrapper').removeClass('full');
		}
    }

    $('input, textarea').each(function(){
		inputChange($(this));
	});

    $(document).on('keyup, change', 'input, textarea', function() {
		inputChange($(this));
	});
    
    $(document).on('click', '.video__button', function() {
        $(this).fadeOut(function() {
            var video = $(this).siblings('video');
            video[0].play();
            video.attr('controls', 'controls');
        });
    });

    // Задержка меню
    var subTimeout, menuHidde;
    var mTime = 300;
    $('.header-menu li').hover(function() {
        thisItem = $(this);
        menuTime(thisItem);
    }, function() {
        hiddeMenu(thisItem);
    });

    $('.header-menu__sub-menu').hover(function() {
        clearTimeout(menuHidde);
    },function() {
        hiddeMenu(thisItem);
    });

    function menuTime(thisItem) {
        clearTimeout(subTimeout);
        clearTimeout(menuHidde);
        subTimeout = setTimeout(function(){
            if(thisItem.hasClass('have-sub')){
                thisItem.addClass('active').siblings().removeClass('active').find('li').removeClass('active');
            } else {
                thisItem.siblings().removeClass('active');
            }
        },mTime);
    }

    function hiddeMenu(thisItem) {
        clearTimeout(menuHidde);
        menuHidde = setTimeout(function() {
            $('.header-menu li').removeClass('active')
        },mTime);
    }

    $(document).on('click', '.reset-button', function (e) {
        $(this).siblings('.search-on-page__input').val('').siblings('.search-on-page__button').trigger('click');
        $(this).siblings('.context').html('');
    });

    // Контекстные подсказки
    if($('.tabs__block .search-on-page__input').length){
        $(document).on('keyup', '.search-on-page__input', function (e) {
            filterVal = $(this).val().toLowerCase();
            context = $(this).siblings('.context');
            context.html('');
            if(filterVal != ''){
                $('.tabs__block_selected .search-content a[target="_blank"]').each(function (e) {
                    if($(this).text().toLowerCase().includes(filterVal)){
                        context.append('<div class="context-elem">'+$(this).text()+'</div>');
                    }
                });
            }
        });
        $(document).on('mousedown', '.context-elem', function (e) {
            selText = $(this).text();
            $('.tabs__block_selected .search-on-page__input').val(selText);
            $(this).closest('.context').html('');
            $('.tabs__block_selected .search-on-page__button').trigger('click');
        });
    }

    // Внешние ссылки
    $('.outerlink').each(function (e) {
        oldLink = $(this).html();
        $(this).html('<span>'+oldLink+'</span><i></i>');
    });

    // Появление чекбоксов и радиобатонов на странице поиска
    setTimeout(function() {
        $('.search__form-checkboxes').slideDown();
        $('.search .input__label').css('opacity', '1')
    }, 100);
    $('.search__form-filters').css('opacity', '1');

    $(document).on('click', '.search__radio', function() {
        $('.search__form button').trigger('click');
    });

    // Чекбоксы загрузки файлов
    $(document).on('click', '.file-download-checkbox', function() {
        var fileArhiveSize = 0;
        var checkAll = true;
        $('.file-download-checkbox input').each(function() {
            var $this = $(this);
            if ($this.is(':checked')) {
                fileArhiveSize += $this.data('size');
                fileArhiveSizeKb = fileArhiveSize / 1024;
                fileArhiveSizeMb = fileArhiveSizeKb / 1024;
                fileArhiveSizeKb = Math.round(fileArhiveSizeKb);
                fileArhiveSizeMb = Math.round(fileArhiveSizeMb * 100) / 100;
            } else {
                checkAll = false;
            }
        });

        if (checkAll) {
            $('.file-download_archiv-all input').prop('checked', true);
            $('.file-download_archiv-all input').trigger('refresh');
            $('.file-download_archiv-all span').text('Убрать все');
        } else {
            $('.file-download_archiv-all input').prop('checked', false);
            $('.file-download_archiv-all input').trigger('refresh');
            $('.file-download_archiv-all span').text('Выбрать все');
        }

        if (fileArhiveSize !== 0) {
            $('.file-download_archiv-size').show();
            if (fileArhiveSizeKb < 1024) {
                $('.file-download_archiv-size').text(fileArhiveSizeKb + ' kb')
            } else {
                $('.file-download_archiv-size').text(fileArhiveSizeMb + ' mb')
            }
        } else {
            $('.file-download_archiv-size').hide();
            $('.file-download_archiv-size').text('');
        }
    });

    $(document).on('click', '.file-download_archiv-all', function() {
        if ($(this).find('input').is(':checked')) {
            $(this).find('span').text('Убрать все');
            var fileArhiveSize = 0;

            $('.file-download-checkbox input').each(function() {
                $(this).prop('checked', true);
                $(this).trigger('refresh');
                fileArhiveSize += $(this).data('size');
                fileArhiveSizeKb = fileArhiveSize / 1024;
                fileArhiveSizeMb = fileArhiveSizeKb / 1024; 
                fileArhiveSizeKb = Math.round(fileArhiveSizeKb);
                fileArhiveSizeMb = Math.round(fileArhiveSizeMb * 100) / 100;
            });

            $('.file-download_archiv-size').show();

            if (fileArhiveSizeKb < 1024) {
                $('.file-download_archiv-size').text(fileArhiveSizeKb + ' kb')
            } else {
                $('.file-download_archiv-size').text(fileArhiveSizeMb + ' mb')
            }

            $(this).parents('form').find('.spoiler').addClass('open');
            $(this).parents('form').find('.spoiler__content').slideDown();
        } else {
            $(this).find('span').text('Выбрать все');
            $('.file-download-checkbox input').each(function() {
                $(this).prop('checked', false);
                $(this).trigger('refresh');
            });

            $('.file-download_archiv-size').hide();
            $('.file-download_archiv-size').text('');
        }
    });

    // ====
    var slideSelector = 'img',
        options = {bgOpacity: 1},
        events = {
            beforeOpen: function () {
                // console.log('open');
            }
        };
    $('.photogallery-slider__list:not(.not-photoswiper)').photoSwipe(slideSelector, options, events);

    // ===
    $(document).on('click', '.popup-success__block-close', function() {
        $(this).parents('.popup-success').removeClass('show');
    });

    // Чекбоксы на странице подписки
    $('.subscription__checkbox-block input').on('change', function() {
        var checkAll = true;
        $('.subscription__checkbox-block input').each(function() {
            var $this = $(this);
            if (!$this.is(':checked')) {
                checkAll = false;
            }
        });

        if (checkAll) {
            $('.subscription #all-filials').prop('checked', true);
            $('.subscription #all-filials').trigger('refresh');
        } else {
            $('.subscription #all-filials').prop('checked', false);
            $('.subscription #all-filials').trigger('refresh');
        }
    });

    $('.subscription #all-filials').on('change', function() {
        if ($(this).is(':checked')) {
            $('.subscription__checkbox-block input').each(function() {
                $(this).prop('checked', true);
                $(this).trigger('refresh');
            });
        } else {
            $('.subscription__checkbox-block input').each(function() {
                $(this).prop('checked', false);
                $(this).trigger('refresh');
            });
        }
    });

    // Блок телефонов в футере
    function phoneBlockWidthChange() {
        var phoneBlockWidth = $('.phone-block .toggle__name a').width() + 4;
        $('.phone-block .toggle__arrow').css('left', phoneBlockWidth);
    }

    var phoneBlockWidth = $('.phone-block .toggle__name a').width();

    var phoneBlockWidthChangeTimeOut = setInterval(function() {
        phoneBlockWidthChange();
        if ($('.phone-block .toggle__name a').width() != phoneBlockWidth) {
            phoneBlockWidthChange();
            clearInterval(phoneBlockWidthChangeTimeOut);
        }
    }, 100);

    $(window).resize(function() {
        phoneBlockWidthChange();
    });
    
    // Слайдер корпроративных ценностей
    if($('.korporat-slider').length){
        $('.korporat-slider').each(function (e) {
            var korporatSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                slidesPerView: 'auto',
                loop: false,
                spaceBetween: 24,
                navigation: {
                    nextEl: '.swiper-button_next',
                    prevEl: '.swiper-button_prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                on: {
                    slideChange: function () {
                        var swiperPagination = $(this.pagination.$el[0]);
                        swiperBulletBeforeElem(swiperPagination);
                    }
                },
                breakpoints: {
                    481: {
                        spaceBetween: 32,
                    },
                    1025: {
                        spaceBetween: 124,
                    }
                },
            });
        });
    }
    
    // Слайдер рейтингов и наград
    if($('.rating-slider').length){
        $('.rating-slider').each(function (e) {
            ratingSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                slidesPerView: 'auto',
                loop: false,
                spaceBetween: 24,
                navigation: {
                    nextEl: '.swiper-button_rating-next',
                    prevEl: '.swiper-button_rating-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    481: {
                        spaceBetween: 50,
                    },
                    1025: {
                        slidesPerView: 3,
                        spaceBetween: 60,
                    }
                },
                /* on: {
                    init: function () {
                        setTimeout(function(){
                            $('.rating-slider-container .swiper-button_next').removeClass('swiper-button-disabled');
                        },1);
                    },
                }, */
            });
        });
    }

    // Слайдер с элементами    
    if($('.director-slider__container').length){
        $('.director-slider__container').each(function (e) {
            var elementSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                spaceBetween: 24,
                slidesPerView: "auto",
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button_next',
                    prevEl: '.swiper-button_prev',
                },
                breakpoints: {
                    481: {
                        spaceBetween: 48,
                    },
                    1280: {
                        spaceBetween: 60,
                    }
                },
                on: {
                    slideChange: function () {
                        var swiperPagination = $(this.pagination.$el[0]);
                        swiperBulletBeforeElem(swiperPagination);
                    }
                }
            }); 
        }); 
    }

    // Слайдер фото
    if($('.photo-slider__container').length){
        $('.photo-slider__container').each(function (e) {
            var photoalbumSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                spaceBetween: 16,
                loop: false,
                slidesPerColumn: 2,
                slidesPerGroup: 1,
                slidesPerView: 1,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button_next',
                    prevEl: '.swiper-button_prev',
                },
                breakpoints: {
                    481: {
                        spaceBetween: 32,
                        slidesPerView: 2,
                        slidesPerColumn: 1,
                        slidesPerGroup: 2,
                    },
                    1024: {
                        spaceBetween: 60,
                        slidesPerView: 2,
                        slidesPerColumn: 1,
                        slidesPerGroup: 2,
                    }
                },
                on: {
                    slideChange: function () {
                        var swiperPagination = $(this.pagination.$el[0]);
                        swiperBulletBeforeElem(swiperPagination);
                    }
                }
            }); 
        }); 
    }    

    // Слайдер фотогаллереи
    var photoSliderNav;
    if($('.photogallery-slider__list').length){
        $('.photogallery-slider__list').each(function (e) {
            photoSliderNav = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                spaceBetween: 32,
                slidesPerView: 1,
                loop: false,
                pagination: {
                    el: '.swiper-pagination-nav',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button_next-gallery',
                    prevEl: '.swiper-button_prev-gallery',
                },
                watchSlidesProgress: true,
                on: {
                    slideChangeTransitionEnd: function() {
                      videoStop();
                    },
                }
            }); 
        });
        $('.photogallery-popup__list').each(function (e) {
            var photoSlider = new Swiper($(this), {
                direction: 'horizontal',
                speed: 400,
                spaceBetween: 32,
                slidesPerView: 1,
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                navigation: {
                    nextEl: '.swiper-button_next',
                    prevEl: '.swiper-button_prev',
                },
                thumbs: {
                    swiper: photoSliderNav,
                },
                on: {
                    slideChangeTransitionStart: function(swiper) {
                      var slideText = $('.photogallery-popup__item').eq($(this)[0].activeIndex).attr('data-name');
                      $('.photogallery-popup__name').fadeOut(function() {
                        $('.photogallery-popup__name').text(slideText);
                      });
                    },
                    slideChangeTransitionEnd: function() {
                      $('.photogallery-popup__name').fadeIn();
                    },
                }
            }); 
        }); 
    }

    $(document).on('click', '.photogallery-slider__item, .not-photoswiper vieo', function() {
        $('.photogallery-popup').addClass('photogallery-popup--show');
        videoStop();
    });
    $(document).on('click', '.photogallery-popup__close', function() {
        $('.photogallery-popup').removeClass('photogallery-popup--show');
        videoStop();
    });

    function videoStop() {
        $('video').each(function (e) {
            $(this).get(0).pause();
        });
    }
   

    // Спойлер
    $(document).on('click', '.spoiler__title', function (e) {
        $(this).closest('.spoiler').toggleClass('open');
        $(this).siblings('.spoiler__content').slideToggle();
    });

    // Открытие первого спойлера в вестнике Русгидро
    $('.vestnik-section').parent().each(function() {
        var $this = $(this);
        if ($this.prev().hasClass('container')) {
            $this.find('.spoiler__title').trigger('click');
        }
    });

    // Показать еще
    $(document).on('click', '.hidden-info-trigger', function (e) {
        e.preventDefault();
        $('.hidden-info').slideDown();
        $(this).remove();
    });

    // Показать еще
    $(document).on('click', '.social__trigger', function(e) {
        e.preventDefault();
        if ($(window).width() > 1024) {
            $('.social__item-hidden--pc').slideDown();
        } else {
            $('.social__item-hidden--pda').slideDown();
        }
        $(this).remove();
    });

    // Таблицы
    if(window.location.hostname != 'forum.rushydro.smhost.ru'){
        if($('table').length) {
            $('table').each(function (e) {
                $(this).wrap('<div class="scroll-table" data-class="'+$(this).attr('class')+'" data-simplebar></div>');
            });
        }
        setTimeout(function(){
            $('.scroll-table').each(function (e) {
                if($(this).find('table').width() > $(this).width()){
                    $(this).find('.simplebar-placeholder').addClass('simplebar-placeholder_border');
                }
            });
        },100);
    }


    // Загрузка файла
    $(document).on('change', '.file-upload__load input', function (e) {
        if($(this).val() != ''){         
            $('.file-upload__error').html('');
            maxSize = accept = false;
            maxSize = parseInt($(this).attr('max-size'));
            accept = $(this).attr('accept');
            file = fileCheck(this, maxSize, accept);   
            if(file[3] == ''){
                fileName = file[0];
                fileFormat = file[1];
                fileInfo = file[2];
                $(this).closest('.file-upload__load').next('.file-upload__list').append('<div class="file-upload__item before-ico">'+
                    '<div class="file-upload__file-name t2">'+fileName+''+
                    '<div class="file-remove"></div>'+
                    '</div>'+
                    '<div class="file-upload__file-info c2 color-gray--dip">'+fileFormat+', '+fileInfo+'</div>'+
                '</div>');
                var thisInput = $(this).clone();
                $(this).closest('.file-upload__load').next('.file-upload__list').find('.file-upload__item:last-child').append(thisInput);
            } else {
                $('.file-upload__error').html(file[3])
            }
            $(this).val('');
        }
    });

    // Проверка файла
    function fileCheck(input, maxSize, accept) {
        var size = input.files[0].size; // Размер в байтах        
        var name = input.files[0].name; // Газвание файла
        var format = name.split('.').pop().toLowerCase(); // Форимат файла
        var errors = [];

        // Проверка на размер файла
        if(maxSize && maxSize * 1000000 < size){
            errors[0] = 'Вес файла не может превышать '+maxSize+' Мбайт ';
        }

        // Проверка на резрешение фала
        if(accept) {
            var fileExtension = accept.replace(/[\s.%]/g, '').split(','); // Допустимые типы файлов
            if ($.inArray(format, fileExtension) == -1) {
                errors[1] = 'Файл должен быть одного из следующих форматов: '+fileExtension.join(', ')+'.';
            }
        }

        if(maxSize || accept){
            errors = errors.join('<br> ');
        } else {
            errors = '';
        }

        // Формат размера файла
        if(size / 1024 >= 1024){
            size = (size / 1024 / 1024).toFixed(2) + 'МБ';
        } else {
            size = parseInt(size / 1024) + 'КБ';
        }

        return fileInform = [name, format, size, errors];
    }

    // Удаление файла
    $(document).on('click', '.file-remove', function (e) {
        $(this).closest('.file-upload__item').remove();
    });

    // Табы
    $(document).on('change', 'select.tab-select', function (e) {
        $('.tab-content').removeClass('active');
        $('.tab-content[data-sel="'+$(this).val()+'"]').addClass('active');
    });

    $(document).on('click', '.hidden-flex-trigger', function (e) {
        $(this).remove();
        e.preventDefault();
        $('.hidden-flex').removeClass('hidden-flex');
    });


    // Подсказка
    $(document).on('click', '.helper-icon', function (e) {
        $(this).next('.helper-box').stop().slideToggle();
    });

	$(document).mouseup(function (e) {
        var container = $(".helper-icon");
        if (container.has(e.target).length === 0){
            $('.helper-box').stop().slideUp();
        }
    });

    // Фотогалеррея
    $('.multimedia_three').photoSwipe();
    $('section a:not([class])').photoSwipe();

    // Диаграмма
    function diagrams(){
        var testimonials = document.querySelectorAll('.myCanvas');

        var innerColor = '#fff';
        if($('.diagramm').closest('.block').hasClass('block_gray')){
            innerColor = '#EBF3FF';
        }

        Array.prototype.forEach.call(testimonials, function(element, index) {
            var myCanvas = element;
            myCanvas.width = $('.diagramm__image').width();
            myCanvas.height = $('.diagramm__image').height();

            function drawPieSlice(ctx,centerX, centerY, radius, startAngle, endAngle, color ){
                ctx.fillStyle = color;
                ctx.beginPath();
                ctx.moveTo(centerX,centerY);
                ctx.arc(centerX, centerY, radius, startAngle, endAngle);
                ctx.closePath();
                ctx.fill();
            }

            var Piechart = function(options){
                this.options = options;
                this.canvas = options.canvas;
                this.ctx = this.canvas.getContext("2d");
                this.colors = options.colors;
            
                this.draw = function(){
                    var total_value = 0;
                    var color_index = 0;
                    for (var categ in this.options.data){
                        var val = this.options.data[categ];
                        total_value += val;
                    }
            
                    var start_angle = 0;
                    for (categ in this.options.data){
                        val = this.options.data[categ];
                        var slice_angle = 2 * Math.PI * val / total_value;
            
                        drawPieSlice(
                            this.ctx,
                            this.canvas.width/2,
                            this.canvas.height/2,
                            Math.min(this.canvas.width/2,this.canvas.height/2),
                            start_angle,
                            start_angle+slice_angle,
                            this.colors[color_index%this.colors.length]
                        );
            
                        start_angle += slice_angle;
                        color_index++;
                    }
            
                    // drawing a white circle over the chart
                    // to create the doughnut chart
                    if (this.options.doughnutHoleSize){
                        drawPieSlice(
                            this.ctx,
                            this.canvas.width/2,
                            this.canvas.height/2,
                            this.options.doughnutHoleSize * Math.min(this.canvas.width/2,this.canvas.height/2),
                            0,
                            2 * Math.PI,
                            innerColor
                        );
                    }
                }
            }

            diagramValues = myCanvas.getAttribute('data-values').split(',');
            var diagramSumm = 0;

            var values = new Object();

            values.property0 = 0;
            values.property1 = 0;
            values.property2 = 0;
            values.property3 = 0;
            values.property4 = 0;

            for (var i = 0; i < diagramValues.length; i++) {
                Object.defineProperty(values, 'property'+i, {
                    value: parseFloat(diagramValues[i])
                });

                diagramSumm += parseFloat(diagramValues[i]);
            }

            $('.diagramm__values').html('');
            for (var i = 0; i < diagramValues.length; i++) {
                if (diagramValues[i] == 0) {
                    break;
                }
                var proc = (diagramValues[i] / diagramSumm * 100).toFixed(2);
                $('.diagramm__values').append('<div class="diagramm__value">'+proc+'%</div>')
            }


            var myDougnutChart = new Piechart(
                {
                    canvas:myCanvas,
                    data:values,
                    colors:["#005D9F","#F08400","#A8BF26","#E92841"],
                    doughnutHoleSize:0.5
                }
            );
            myDougnutChart.draw();
            
        });
    }
    if($('.diagramm').length){
        diagrams();    
    }
    
    // Формстайлер
    $('.container input[type="checkbox"]').styler();
	$('.container input[type="radio"]').styler();

    // Список больше
    $(document).on('click', '.more-elements', function (e) {
        listSpeed = 300;
        $(this).fadeOut(listSpeed);
        thisList = $(this).next('.list-hidden');
        setTimeout(function(){
            thisList.slideDown(listSpeed)
        },listSpeed);
    });



    // Сколл страницы
    $(window).scroll(function(){
        var top = $(window).scrollTop();
        // Скролл горизонтального ползука таблиц
        $('.scroll-table .simplebar-horizontal[style^="visibility: visible;"]').each(function (e) {
            var scrollTime;
            var thisScrol = $(this)
            var tKey = $(this).closest('.scroll-table').attr('data-key');
            var tHei =  $(this).closest('.scroll-table').height();
            var tpos =  $(this).closest('.scroll-table').offset().top - top - $(window).height();            
            if(tpos < 0) {
                tpos = tpos * -1;
                if(tpos > (tHei)){
                    tpos = tHei;
                }
            } else {
                tpos = 0;
            }
            tpos = parseInt(tpos);
            clearTimeout(scrollTime);
            scrollTime = setTimeout(function(){
                thisScrol.attr('style', 'visibility: visible; margin-top:'+(tpos - 11)+'px');
            },200);
            $('.photogallery-popup').removeClass('photogallery-popup--show');
        });
    })

    // Ресайз страницы
    $(window).resize(function(){
        $('.scroll-table').each(function (e) {
            if($(this).find('table').width() > $(this).width()){
                $(this).find('.simplebar-placeholder').addClass('simplebar-placeholder_border');
            } else {
                $(this).find('.simplebar-placeholder').removeClass('simplebar-placeholder_border');
            }
        });
        diagrams();     
    });

    // Всплывашка про куки
	if ($.cookie('cookieFilesBanner') != 1) {
		$('.cookie-files-banner').addClass('active');
	}

	$(document).on('click', '.cookie-files-close', function() {
		$('.cookie-files-banner').removeClass('active');
	});
    
	$(document).on('click', '.cookie-files-accept', function() {
		$.cookie('cookieFilesBanner', 1, { expires: 365, path: '/' });
		$('.cookie-files-banner').removeClass('active');
	});

	$('.js-popup-show').click(function() {
		var block_id = $(this).data('id');
		$(block_id).addClass('show');
	});


    /* Гид по квитанции */
    $(document).on('click', '.gid__tab', function (e) {
        $(this).addClass('active').siblings().removeClass('active');
        $(this).closest('.gid').find('.gid__page').eq($(this).index()).show().siblings().hide()
    });

    $(document).on('click', '.marker', function (e) {
        $(this).siblings('.marker').removeClass('show');
        $(this).addClass('show');
        $(this).addClass('visited');
    });

    $(document).mouseup(function (e){
        var div = $(".marker");
        if (!div.is(e.target) && div.has(e.target).length === 0) {
            div.removeClass('show');
        }
    });

    $(document).on('click', '.marker__select', function (e) {
        $(this).next('.marker').trigger('click');
    });
})

// создаём элемент <div>, который будем перемещать вместе с указателем мыши пользователя
var mapTitle = document.createElement('div'); mapTitle.className = 'mapTitle';
// вписываем нужный нам текст внутрь элемента
mapTitle.textContent = 'Для активации карты нажмите на карту';
// добавляем элемент с подсказкой последним элементов внутрь нашего <div> с id wrapMap
wrapMap.appendChild(mapTitle);
// по клику на карту
wrapMap.onclick = function() {
    // убираем атрибут "style", в котором прописано свойство "pointer-events"
    this.children[0].removeAttribute('style');
    // удаляем элемент с интерактивной подсказкой
    mapTitle.parentElement.removeChild(mapTitle);
}
// по движению мыши в области карты
wrapMap.onmousemove = function(event) {
    // показываем подсказку
    mapTitle.style.display = 'block';
    // двигаем подсказку по области карты вместе с мышкой пользователя
    if(event.offsetY > 10) mapTitle.style.top = event.offsetY + 20 + 'px';
    if(event.offsetX > 10) mapTitle.style.left = event.offsetX + 20 + 'px';
}
// при уходе указателя мыши с области карты
wrapMap.onmouseleave = function() {
    // прячем подсказку
    mapTitle.style.display = 'none';
}