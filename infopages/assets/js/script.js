/**
 * On DOM load
**/
$(document).ready(function(){
    /**
     * Header Login and overlay forms
    **/
    var formOverlay = $('.form-overlay');
    var headerLoginWrapper = $('#header .loggin-wrapper');
    var loginFormOverlay = $('#login-form');
    var registerFormOverlay = $("#register-form");

    // Close overlay
    formOverlay.find('.close-form').on('click', function(){
        formOverlay.fadeOut();
    });
    $(document).mouseup(function(e){
        var container = formOverlay.find('.content');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            formOverlay.fadeOut();
        }
    });

    // Toggle choices
    headerLoginWrapper.find('.toggle-choices').on('click', function(){
        $(this).toggleClass('active');
        headerLoginWrapper.find('.choices').toggleClass('active');
    });
    // Toggle login form
    headerLoginWrapper.find('.choice').on('click', function() {
        var choice = $(this).attr('data-choice');
        var userType = $(this).attr('data-user-type');

        loginFormOverlay.find('.type').text(choice);
        loginFormOverlay.find('input[name="user-type"]').val(userType);

        headerLoginWrapper.find('.toggle-choices').removeClass('active');
        headerLoginWrapper.find('.choices').removeClass('active');
        loginFormOverlay.fadeIn();
    });
    // Toggle register form
    loginFormOverlay.find('.sign-up-toggle').on('click', function(){
        loginFormOverlay.hide();
        registerFormOverlay.fadeIn();
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
