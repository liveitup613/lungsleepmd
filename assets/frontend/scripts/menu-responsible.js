
    jQuery(document).ready(function() {
        var mwidth = jQuery(window).width();
        var dbmwidth = parseInt('1000px', 10);
        if (mwidth <= dbmwidth) {
            jQuery('body').addClass('option_mobile_menu');
        } else {
            jQuery('body').removeClass('option_mobile_menu');
        }

        jQuery(window).resize(function() {
            var mwidth = jQuery(window).width();
            var dbmwidth = parseInt('1000px', 10);
            if (mwidth <= dbmwidth) {
                jQuery('body').addClass('option_mobile_menu');
            } else {
                jQuery('body').removeClass('option_mobile_menu');
            }

        });
    });
    
    
    jQuery(document).ready(function($) {

        var enable_ghost_header = "off";

        if (enable_ghost_header == "" || enable_ghost_header == "off" || enable_ghost_header == "Default") {

            $("#logo").attr("src", base_url + "assets/frontend/images/epignosis-logo-white.svg");

            $(window).scroll(function() {
                var currentScroll = $(this).scrollTop();
                if (currentScroll > 100) {
                    $("#logo").attr("src", base_url + "assets/frontend/images/epignosis-logo.svg");                    
                } else {
                    $("#logo").attr("src", base_url + "assets/frontend/images/epignosis-logo-white.svg");                        
                }
            });
        }
    });

    jQuery(document).ready(function($) {
        jQuery(document).on('mouseenter', 'a[href^=\"#popup_3\"]', function() {
            jQuery('.mobile_nav').removeClass('opened');
            jQuery('.mobile_nav').addClass('closed');
            $('a[href^=\"#popup_3\"]').addClass('et_smooth_scroll_disabled');
            $('a[href^=\"#popup_3\"]').addClass("open-popup-popup_3");
            if (jQuery('body').find('.open-popup-popup_3').length > 0) {
                $('.open-popup-popup_3').magnificPopup({
                    mainClass: 'mfp-fade',
                    type: 'inline',
                    midClick: true,
                    closeBtnInside: true,
                    removalDelay: 300,
                    callbacks: {
                        open: function() {
                            $('body').find(".mfp-bg").addClass("medicus-mfp-bg");
                            $("#popup_3").parent().parent().parent().addClass(
                            "medicus-mfp");
                        }
                    },
                });
            }
        });
    });