var App = function () {

    function handleIEFixes() {
        //fix html5 placeholder attribute for ie7 & ie8
        if (jQuery.browser.msie && jQuery.browser.version.substr(0, 1) < 9) { // ie7&ie8
            jQuery('input[placeholder], textarea[placeholder]').each(function () {
                var input = jQuery(this);

                jQuery(input).val(input.attr('placeholder'));

                jQuery(input).focus(function () {
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });

                jQuery(input).blur(function () {
                    if (input.val() == '' || input.val() == input.attr('placeholder')) {
                        input.val(input.attr('placeholder'));
                    }
                });
            });
        }
    }

    function handleBootstrap() {
        jQuery('.carousel').carousel({
            interval: 15000,
            pause: 'hover'
        });
        jQuery('.tooltips').tooltip();
        jQuery('.popovers').popover();
    }

    function handleMisc() {
        jQuery('.top').click(function () {
            jQuery('html,body').animate({
                scrollTop: jQuery('body').offset().top
            }, 'slow');
        }); //move to top navigator
    }

    function handleSearch() {    
        jQuery('.search').click(function () {
            if(jQuery('.search-btn').hasClass('icon-search')){
                jQuery('.search-open').fadeIn(500);
                jQuery('.search-btn').removeClass('icon-search');
                jQuery('.search-btn').addClass('icon-remove');
            } else {
                jQuery('.search-open').fadeOut(500);
                jQuery('.search-btn').addClass('icon-search');
                jQuery('.search-btn').removeClass('icon-remove');
            }   
        }); 
    }

    function dropdownMobile() {
        $('.dropdown-toggle').click(function(e) {
            // search fix
            if(jQuery('.search-btn').hasClass('icon-remove')){
                jQuery('.search-open').fadeOut(500);
                jQuery('.search-btn').addClass('icon-search');
                jQuery('.search-btn').removeClass('icon-remove');
            } else {}
            e.preventDefault();
            setTimeout($.proxy(function() {
                if ('ontouchstart' in document.documentElement) {
                    $(this).siblings('.dropdown-backdrop').off().remove();
                }
            }, this), 0);
        });
    }

    // make top menu dropdown animated
    function animTopMenuDropDown() {
        $(".header .navbar .nav > li > a").on("click", function () {
            $(".dropdown-menu li a").css("line-height","14px");
            $(".dropdown-menu").css("opacity","0");
            $(".dropdown-menu li a").animate({
                "line-height": "40px"
            }, 250);
            $(".dropdown-menu").animate({
                "opacity": "1"
            }, 350);
        });
    }

    //add/remove class focused to i-elem in navbar form-search
    function iconFocusInOut() {
        $(".form-search").on("mouseenter", function () {
            var current = $(this);
            current.find("input").on("focus", function () {
                current.find("i").addClass("focused");
            });
        });

        $(".form-search").on("mouseleave", function () {
            var current = $(this);
            current.find("input").focusout(function () {
                current.find("i").removeClass("focused");
            });
        });
    }

    //add/remove class focused to i-elem in navbar form-search and class .opened for input
    function searchIconClick() {
        $(".form-search i").on("click", function () {
            var current = $(this);
            var searchInput = current.parent().find("input");
            var sWidth = ( searchInput.width() < 1) ? 144 : 0 ;
            searchInput.animate({
                'width' : sWidth + "px"
            }, 500).toggleClass("opened");
            current.toggleClass("focused");
        });
    }

    // Add class active to Accordion panel-heading
    function addActive2PanelHeading() {
        var heading = $(".acc-home .panel-heading .accordion-toggle");
        heading.on("click", function () {
            if (!$(this).parent().hasClass('active')) {
                heading.parent().removeClass('active');
            }
            $(this).parent().toggleClass('active');
        });
    }

    // animate progress bar
    function animateProgressBar() {
        var heading = $(" .meter .meter-content");
        heading.css("width", "0").each( function () {
           $(this).animate({
                "width": $(this).data("percentage") + "%"
           }, 1000);
        });

    }

    //animate navbar-brand
    function animateBrand () {
        /*$(".content-title").on("click", function () {
            console.log("asd");
        });*/
    }


    return {
        init: function () {
            handleBootstrap();
            handleIEFixes();
            handleMisc();
            handleSearch();
            dropdownMobile();
            addActive2PanelHeading();
            animateProgressBar();
            searchIconClick();
            animateBrand ();
        },

        initSliders: function () {
            $('#clients-flexslider').flexslider({
                animation: "slide",
                easing: "swing",
                animationLoop: true,
                itemWidth: 1,
                itemMargin: 1,
                minItems: 2,
                maxItems: 9,
                controlNav: false,
                directionNav: false,
                move: 2
            });
            
            $('#photo-flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                itemWidth: 80,
                itemMargin: 0
            }); 
            
            $('#testimonal_carousel').collapse({
                toggle: false
            });
        },

        initFancybox: function () {
            jQuery(".fancybox-button").fancybox({
            groupAttr: 'data-rel',
            prevEffect: 'none',
            nextEffect: 'none',
            closeBtn: true,
            helpers: {
                title: {
                    type: 'inside'
                    }
                }
            });
        },

        initBxSlider: function () {
            $('.bxslider').bxSlider({
                minSlides: 3,
                maxSlides: 3,
                slideWidth: 360,
                slideMargin: 10
            });            
        },

        initBxSlider1: function () {
            $('.bxslider').bxSlider({
                minSlides: 4,
                maxSlides: 4,
                slideWidth: 360,
                slideMargin: 10
            });            
        }

    };
}();
