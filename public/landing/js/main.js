;
(function ($) {
    "use strict";
    $('.oppi_get_appy_tab_wrap .oppi_get_appy_tab li a').on('click', function (e) {
        var tab_height = $('.oppi_get_appy_tab_slider_item').outerHeight();
        $('.oppi_get_appy_tab_content').css({
            'height': tab_height + 'px',
        });
    });

    /*===========  oppi_feedback_masonry  ===========*/
    function oppi_feedback_masonry() {
        if ($('.oppi_feedback_masonry').length > 0) {
            var $grid = $('.oppi_feedback_masonry').isotope({
                itemSelector: '.oppi_feedback_two_slider_item',
                percentPosition: false,
                layoutMode: 'masonry',
                filter: '.google_play',
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: 1
                }
            });

            $(".oppi_feedback_two_tab li a").on('click', function () {
                $('.apple_app_store').removeClass('d_none');
                $(".oppi_feedback_two_tab li a").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $grid.isotope({
                    filter: selector,
                });
                return false;
            });
        }
    }
    oppi_feedback_masonry();

    function menu_fixed() {
        var h_m_f = $('.oppi_header');

        function menu_scroll_fixed(e) {
            var windowTop = $(window).scrollTop();
            var adDcl = "fixedMenu";
            if (windowTop > 0) {
                e.addClass(adDcl);
            } else {
                e.removeClass(adDcl);
            }
        }
        menu_scroll_fixed(h_m_f);

        $(window).scroll(function () {
            menu_scroll_fixed(h_m_f);
        });
    }
    menu_fixed();


    function oppi_get_appy_tab_slider() {
        if ($('.oppi_get_appy_tab_slider').length > 0) {
            $('.oppi_get_appy_tab_slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                speed: 2000,
                arrows: false,
                dots: false,
                rtl: true,
                autoplay: true,
                pauseOnHover: false,
                responsive: [{
                        breakpoint: 1026,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 3,
                        }
                        },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                        },
                    {
                        breakpoint: 679,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                        }
                        }
                    ]
            });
        }
    }
    oppi_get_appy_tab_slider();

    function oppi_lifestyle_feedback_slider() {
        if ($('.oppi_lifestyle_feedback_slider').length > 0) {
            $('.oppi_lifestyle_feedback_slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                speed: 1000,
                rtl: true,
                arrows: true,
                dots: false,
                pauseOnHover: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            arrows: false,
                        }
                    },
                    {
                        breakpoint: 640,
                        settings: {
                            arrows: false,
                        }
                        }
                    ]
            });
        }
    }
    oppi_lifestyle_feedback_slider();


    /*--------- WOW js-----------*/
    function wowAnimation() {
        new WOW({
            offset: 100,
            mobile: true
        }).init();
    }
    wowAnimation();

    //js for latest_news_slider
    $('.oppi_review_text_slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        speed: 1000,
        rtl: true,
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        dots: false,
        asNavFor: '.oppi_review_slider',
        focusOnSelect: true,
        pauseOnHover: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    pauseOnHover: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                }
                }
            ]
    });

    function oppi_review_slider() {

        //js for latest_news_slider
        $('.oppi_review_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            speed: 1000,
            arrows: true,
            rtl: true,
            dots: false,
            asNavFor: '.oppi_review_text_slider',
            pauseOnHover: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        arrows: false,
                    }
                    }
                ]
        });
    }
    oppi_review_slider();

    function oppi_video_slider_wrap() {
        //js for oppi_video_slider_wrap
        $('.oppi_video_slider_wrap').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 2000,
            rtl:true,
            arrows: false,
            dots: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        dots: false,
                    }
                    }
                ]
        });
    }
    oppi_video_slider_wrap();

    function oppi_travel_video_slider() {
        //js for oppi_travel_video_slider
        $('.oppi_travel_video_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 2000,
            rtl: true,
            arrows: false,
            dots: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: false,
                    }
                    }]
        });
    }
    oppi_travel_video_slider();

    function rightClickOFf() {
        /* Right click , ctrl+u and ctrl+shift+i disabled */
        $('body').on('contextmenu', function (e) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        });
    }
    //rightClickOFf();

    function addCladdddssInFAq() {
        $('.oppi_accordion .oppi_faq_title').each(function () {
            var $this = $(this);
            $this.on('click', function (m) {
                var has = $this.parent().hasClass('open');
                $('.oppi_accordion .oppi_faq_title').parent().removeClass('open');
                if (has) {
                    $this.parent().removeClass('open');
                } else {
                    $this.parent().addClass('open');
                }
            });
        });
    }
    addCladdddssInFAq();

    /*----------------------------------------------------
                            Flexslider
    ----------------------------------------------------*/

    function social_slider_screen() {
        if ($(".social_slider_screen").length) {
            $('#sliders').flexslider({
                animation: "slide",
                directionNav: false,
                rtl: true,
                animationLoop: false,
                manualControls: ".w_items_wrap .w_items",
                slideshow: false,
                touch: true,
            });
        }
    }
    social_slider_screen();

    /*===========Portfolio isotope js===========*/
    function portfolioMasonry() {
        var portfolio = $("#work-portfolio");
        if (portfolio.length) {
            portfolio.imagesLoaded(function () {
                // Activate isotope in container
                portfolio.isotope({
                    itemSelector: ".portfolio_item",
                    layoutMode: 'masonry',
                    filter: "*",
                    animationOptions: {
                        duration: 1000
                    },
                    transitionDuration: '0.5s',
                    masonry: {

                    }
                });

                // Add isotope click function
                $("#portfolio_filter div").on('click', function () {
                    $("#portfolio_filter div").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    portfolio.isotope({
                        filter: selector,
                        animationOptions: {
                            animationDuration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
        }
    }
    portfolioMasonry();

    function popupGallery() {
        if ($(".img_popup,.image-link").length) {
            $(".img_popup,.image-link").each(function () {
                $(".img_popup,.image-link").magnificPopup({
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    removalDelay: 300,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image,
                    }
                });
            });
        }
        if ($('.popup-youtube').length) {
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
            });
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        }
    }
    popupGallery();

    function tab_hover() {
        var tab = $(".apz_price_tab");
        if ($(window).width() > 450) {
            if ($(tab).length > 0) {
                tab.append('<li class="hover_bg"></li>');
                if ($('.apz_price_tab li a').hasClass('active_hover')) {
                    var pLeft = $('.apz_price_tab li a.active_hover').position().left,
                        pWidth = $('.apz_price_tab li a.active_hover').css('width');
                    $('.hover_bg').css({
                        left: pLeft,
                        width: pWidth
                    });
                }
                $('.apz_price_tab li a').on('click', function () {
                    $('.apz_price_tab li a').removeClass('active_hover');
                    $(this).addClass('active_hover');
                    var pLeft = $('.apz_price_tab li a.active_hover').position().left,
                        pWidth = $('.apz_price_tab li a.active_hover').css('width');
                    $('.hover_bg').css({
                        left: pLeft,
                        width: pWidth
                    });
                });
            }
        }

    }
    tab_hover();


    function myMap() {
        if ($("#contact_map").length > 0) {
            var mapCanvas = document.getElementById("contact_map");
            var myCenter = new google.maps.LatLng(40.716614, -74.002786);
            var mapOptions = {
                center: myCenter,
                zoom: 13
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                position: myCenter,
                icon: 'images/location.png'
            });
            marker.setMap(map);
        }
    }
    myMap();

    /* ===== Parallax Effect===== */
    function parallaxEffect() {
        if ($('.parallax-effect').length) {
            $('.parallax-effect').parallax();
        }
    }
    parallaxEffect();

    function bootstrapTabControl() {
        var i, items = $('.oppi_how_it_tab .nav-link'),
            pane = $('.tab-pane');
        // next
        $('.nexttab').on('click', function () {
            for (i = 0; i < items.length; i++) {
                if ($(items[i]).hasClass('active') === true) {
                    break;
                }
            }
            if (i < items.length - 1) {
                // for tab
                $(items[i]).removeClass('active');
                $(items[i + 1]).addClass('active');
                // for pane
                $(pane[i]).removeClass('active show');
                $(pane[i + 1]).addClass('active show');
            }

        });
        // Prev
        $('.prevtab').on('click', function () {
            for (i = 0; i < items.length; i++) {
                if ($(items[i]).hasClass('active') === true) {
                    break;
                }
            }
            if (i != 0) {
                // for tab
                $(items[i]).removeClass('active');
                $(items[i - 1]).addClass('active');
                // for pane
                $(pane[i]).removeClass('active show');
                $(pane[i - 1]).addClass('active show');
            }
        });
    }
    bootstrapTabControl();


    // Dropdown Menu
    function active_dropdown() {
        if ($(window).width() < 992) {
            $('.oppi_header_menu ul li.nav-item > a.dropdown-toggle').on('click', function (event) {
                event.preventDefault();
                $(this).parent().find('.dropdown-menu').first().toggle(500);
                $(this).parent().siblings().find('.dropdown-menu').hide(500);
            });
        }
    }
    active_dropdown();


    $('.oppi_finance_features_item').on('click', function () {
        var index = $('.oppi_finance_features_item').index(this);
        $('.oppi_finance_features_item').removeClass('active').eq(index).addClass('active');
        $('.screen_changer .screen_bg').removeClass('active').eq(index).addClass('active');
    });

    function feedbackSlider() {
        //js for oppi_travel_video_slider
        $('.feedback_slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            rtl: true,
            autoplaySpeed: 3000,
            speed: 2000,
            arrows: false,
            dots: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }      
            }]
        });
    }
    feedbackSlider();
    
    
    function testimonialSlider() {
        //js for oppi_travel_video_slider
        $('.oppi_testimonial_info').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 2000,
            rtl: true,
            arrows: false,
            dots: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }      
            }]
        });
    }
    testimonialSlider();
    
    function oppi_health_about_slider(){
            $('.oppi_health_about_slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 2000,
                rtl: true,
                arrows: true,
                dots: false,
                autoplay: true,
                fade: true,
                responsive: [
                    {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                    {
                    breakpoint: 880,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                    {
                    breakpoint: 640,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                    }
                }
                ]
            });
        }
        oppi_health_about_slider();

})(jQuery);