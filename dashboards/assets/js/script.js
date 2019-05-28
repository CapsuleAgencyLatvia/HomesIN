/**
 * On DOM load
**/
$(document).ready(function(){

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
});
