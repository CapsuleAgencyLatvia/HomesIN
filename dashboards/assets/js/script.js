/**
 * On DOM load
 **/
$(document).ready(function() {
    /**
     * Cost of unfilled vacancy
    **/
    var colors = {
        pink: 'rgba(160, 0, 255, .5)',
        blue: 'rgba(0, 40, 255, .5)',
    };
    var line1 = [20, 60, 30, 45, 30, 80, 30];
    var line2 = [40, 80, 40, 60, 30, 50, 25];
    var labels = [5, 10, 15, 20, 25, 30, 35];
    var config = {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                    data: line1,
                    label: "Data",
                    backgroundColor: colors.pink,
                    borderWidth: 0,
                    pointRadius: 0,
                    fill: true,
                },
                {
                    data: line2,
                    label: "Data 2",
                    backgroundColor: colors.blue,
                    borderWidth: 0,
                    pointRadius: 0,
                    fill: true,
                }
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: false,
            },
            scales: {
                xAxes: [{
                    gridLines: [{
                        display: false,
                        drawBorder: false,
                    }],
                    ticks: {
                        stepSize: 5,
                        min: 0,
                        max: 35,
                    }
                }],
                yAxes: [{
                    gridLines: [{
                        display: false,
                        drawBorder: false,
                    }],
                    ticks: {
                        stepSize: 20,
                        min: 20,
                        max: 100,
                    }
                }]
            }
        }
    };
    var ctx = document.getElementById("vacancy-line");
    if (ctx) {
        ctx.getContext("2d");
        var vacancyLine = new Chart(ctx, config);
    }

    /**
     * Quality of vacancy
     **/
    var colors = {
        pink: 'rgba(160, 0, 255, .5)',
        blue: 'rgba(0, 40, 255, .5)',
    };
    var line1 = [20, 60, 30, 45, 30, 80, 30];
    var line2 = [20, 80, 40, 60, 30, 50, 25];
    var config = {
        type: 'pie',
        data: {
            labels: [
                'Very Unsatisfied',
                'Unsatisfied',
                'Neutral',
                'Satisfied',
                'Very Satisfied',
            ],
            datasets: [{
                data: [19, 21, 19, 19, 40],
                backgroundColor: [
                    'rgba(94, 119, 255, .1)',
                    'rgba(94, 119, 255, 0.25)',
                    'rgba(94, 119, 255, 0.5)',
                    'rgba(94, 119, 255, 0.75)',
                    'rgba(94, 119, 255, 1)',
                ],
                label: 'Dataset 1'
            }],
        },
        options: {
            responsive: true,
            rotation: .5 * Math.PI,
            legend: {
                display: false,
            },
        }
    };
    var ctx = document.getElementById("vacancy-pie");
    if (ctx) {
        ctx.getContext("2d");
        var vacancyPie = new Chart(ctx, config);
    }

    /**
     * Search overlay
     **/
    var sidebar = $('#sidebar');
    var searchOverlay = $('#search-overlay');
    searchOverlay.find('.close').on('click', function() {
        searchOverlay.fadeOut();
    });
    sidebar.find('.toggle-search-overlay').on('click', function() {
        searchOverlay.fadeIn();
    });

    /**
     * Filter form
     **/
    var filterForm = $("#filter-form");
    var filterOverlay = $("#filter-overlay");
    var dashboard = $('#dashboard');
    if (filterForm.length) {
        // Filter overlay
        filterForm.find('.toggle-filter-overlay').on('click', function() {
            $(this).toggleClass('active');
            filterOverlay.fadeToggle();
        });
        $(document).mouseup(function(e) {
            if (!filterForm.is(e.target) && filterForm.has(e.target).length === 0) {
                filterForm.find('.toggle-filter-overlay').removeClass('active');
                filterOverlay.fadeOut();
            }
        });
        // Map
        /**
         * new_map
         *
         * This function will render a Google Map onto the selected jQuery element
        **/
        function new_map($el) {
            // var
            var $markers = $el.find('.marker');
            // vars
            var args = {
                zoom: 15,
                center: new google.maps.LatLng(0, 0),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            // create map
            var map = new google.maps.Map($el[0], args);
            // add a markers reference
            map.markers = [];
            // add markers
            $markers.each(function() {
                add_marker($(this), map);
            });
            // center map
            center_map(map);
            // return
            return map;
        }
        /**
         * add_marker
         *
         * This function will add a marker to the selected Google Map
        **/
        function add_marker($marker, map) {
            // var
            var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
            // create marker
            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            // add to array
            map.markers.push(marker);
            // if marker contains HTML
            if ($marker.html()) {
                google.maps.event.addListener(marker, 'click', function() {
                    var mapSidebar = $('#map-sidebar');
                    mapSidebar.html($marker.html());
                    if ( !mapSidebar.hasClass('active') ) {
                        mapSidebar.addClass('active');
                    }
                });
            }
        }

        /**
         *  center_map
         *
         *  This function will center the map, showing all markers attached to this map
        **/
        function center_map(map) {
            // vars
            var bounds = new google.maps.LatLngBounds();
            // loop through all markers and create bounds
            $.each(map.markers, function(i, marker) {
                var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
                bounds.extend(latlng);
            });
            // only 1 marker?
            if (map.markers.length == 1) {
                // set center of map
                map.setCenter(bounds.getCenter());
                map.setZoom(15);
            } else {
                // fit to bounds
                map.fitBounds(bounds);
            }
            // Add a marker clusterer to manage the markers.
        }
        filterForm.find('.toggle-map').on('click', function() {
            $.get({
                url: "partials/map-view.php",
                success: function(data) {
                    dashboard.find('.main-content').html(data);
                    new_map($('#map'));
                }
            });
        });
    }


    /**
     * Refine properies
    **/
    var refine = $('#refine');
    if (refine.length) {
        refine.find('.toggle-overlay').on('click', function() {
            refine.find('.overlay').toggleClass('active');
        });
        $(document).mouseup(function(e) {
            var container = refine.find('.refine-wrappper');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                refine.find('.overlay').removeClass('active');
            }
        });
    }
});

/**
 * Loaded page
**/
$(window).on('load', function() {
    /**
     * LazyLoad
    **/
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });

    var propertySingleSlider = $('.property-slider');
    if (propertySingleSlider.length) {
        propertySingleSlider.find('.slider-wrapper').owlCarousel({
            items: 1,
            dots: false,
            lazyLoad: true,
            URLhashListener: true,
            startPosition: 'URLHash',
        });
        propertySingleSlider.find('.thumbnails .owl-carousel').owlCarousel({
            items: 5,
            dots: false,
            lazyLoad: true,
        });
    }
});
