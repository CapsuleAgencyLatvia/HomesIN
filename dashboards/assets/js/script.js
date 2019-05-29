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
});
