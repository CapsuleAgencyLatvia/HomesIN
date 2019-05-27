/**
 * On DOM load
**/
$(document).ready(function(){
    /**
     * Header
    **/
    var headerLogginWrapper = $('#header .loggin-wrapper');
    var loginFormOverlay = $('.login-form-overlay');
    headerLogginWrapper.find('.toggle-choices').on('click', function(){
        $(this).toggleClass('active');
        headerLogginWrapper.find('.choices').toggleClass('active');
    });
    headerLogginWrapper.find('.choice').on('click', function() {
        headerLogginWrapper.find('.toggle-choices').removeClass('active');
        headerLogginWrapper.find('.choices').removeClass('active');
        loginFormOverlay.fadeIn();
    });
});

/**
 * Loaded page
**/
$(window).on('load', function(){
    /**
     * LazyLoad
    **/
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });

    /**
     * Homepage slider
    **/
    var homeBanner = $('.home-banner');
    if ( homeBanner.length ) {

        homeBanner.find('.scroll-wrapper').on('click', function(){
            $('html, body').animate({
                scrollTop: homeBanner.height()
            }, 2000);
        });
    }
});
