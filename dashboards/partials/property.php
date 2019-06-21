<?php
/**
 * Property functions
**/
class Property {
    /**
     * Returned info
    **/
    function returned_info() { ?>
        <div id="returned-info">
            <div class="wrapper">
                <img class="person lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                <img class="warning lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                <p>The <span class="cp active">CP</span>/<span class="la">LA</span>/<span class="csv-upload">CSV upload</span> has returned this property as unsuitable</p>
            </div>
        </div>
        <?php
    }


    function la_property_slider_rejected() { ?>
        <article class="property-wrapper property-slider">
            <div class="block">
                <div class="property">
                    <div class="flexbox-full">
                        <div class="col col-5">
                            <div class="slider-wrapper owl-carousel">
                                <?php
                                for ($i=0; $i < 10; $i++) : ?>
                                    <div class="slide" data-hash="slide-<?php echo $i; ?>">
                                        <img class="owl-lazy" data-src="/global/assets/img/image-placeholder.svg" alt="">
                                    </div>
                                    <?php
                                endfor; ?>
                            </div>
                        </div>
                        <div class="col col-5">
                            <div class="content">
                                <div class="overlay">
                                    <?php
                                    //$this->vacancy_type($type); ?>
                                </div>
                                <p class="location">Upper Tooting Park, London, SW17</p>
                                <h3 class="title">2 Bedroom Semi-Detached</h3>
                                <p class="distance"><span class="val">0.42</span> Miles from station</p>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="footer flexbox-full">
                    <div class="col col-5">
                        <div class="thumbnails">
                            <div class="owl-carousel">
                                <?php
                                for ($i=0; $i < 10; $i++) : ?>
                                    <a href="#slide-<?php echo $i; ?>" class="thumbnail">
                                        <img src="/global/assets/img/image-placeholder.svg" alt="">
                                    </a>
                                    <?php
                                endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="information">
                            <div class="wrapper la">
                                <p class="full-name">John Smith</p>
                                <p>ID Info</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="reason-wrapper">
                    <div class="header">
                        <h3 class="heading">Registered Provider: Your Property is not Viable</h3>
                        <p class="name">2 Bedroom Semi-Detached</p>
                        <p class="location">Upper Tooting park, London, SW17</p>
                    </div>
                    <div class="content">
                        <h3 class="heading">Copy of Message Sent</h3>
                        <div class="message">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
    }

    function la_property_inlist($class) { ?>
        <div class="property-block-wrapper">
            <div class="property-block flexbox-full">
                <div class="col col-5">
                    <div class="left">
                        <div class="status <?php echo $class; ?>">
                            <?php
                            switch ($class) :
                                case 'new':
                                    $text = "New";
                                break;
                                case 'upcoming':
                                    $text = "Upcoming";
                                break;
                                case 'filled':
                                    $text = "Filled";
                                break;
                                case "rejected":
                                    $text = "Rejected";
                                break;
                            endswitch; ?>
                            <p><?php echo $text; ?></p>
                        </div>
                        <?php
                        if ( $class != 'upcoming' ) : ?>
                            <div class="trafic-light <?php echo $class; ?>">
                                <div class="light"></div>
                                <div class="light"></div>
                                <div class="light"></div>
                            </div>
                            <?php
                        endif; ?>
                        <img class="image lazy" data-src="/global/assets/img/image-placeholder.svg" alt="Image">
                    </div>
                </div>
                <div class="col col-5">
                    <div class="right">
                        <?php
                        if ( $class != 'upcoming' ) : ?>
                            <img class="icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <?php
                        endif; ?>
                        <p class="location">Upper Tooting Park, London, SW17</p>
                        <h3 class="heading">2 Bedroom Semi-Detached</h3>
                        <p class="distance">0.42 Miles from station</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <a class="btn btn-gray btn-medium" href="#">View more</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    /**
     * Returned message
    **/
    function returned_message($button) { ?>
        <div id="returned-message">
            <div class="flexbox hsb">
                <div class="col col-3">
                    <p class="heading">Care Provider</p>
                    <h3 class="title">2 Bedroom Semi-Detached</h3>
                    <p class="location">Upper Tooting Park, London, SW17</p>
                </div>
                <div class="col col-5">
                    <p class="heading">Message</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a class="read" href="#">Read full message</a>
                </div>
                <div class="col col-2">
                    <p class="heading">Action Required</p>
                    <?php
                    switch ($button) :
                        case "resend": ?>
                            <button class="btn btn-lightgreen btn-small">Resend to CP</button>
                            <?php
                        break;
                        case "save": ?>
                            <button class="btn btn-yellow btn-small">Save Changes</button>
                            <?php
                        break;
                        case "update": ?>
                            <button class="btn btn-yellow btn-small">Info/Update</button>
                            <?php
                        break;
                    endswitch; ?>
                </div>
            </div>
        </div>
        <?php
    }

    /**
     * Vacancy submited
    **/
    function submited() { ?>
        <div id="submited">
            <div class="header">
                <h3 class="heading">Vacancy submited to CP</h3>
            </div>
            <hr>
            <div class="inner">
                <p class="person">Care provider HCPA</p>
                <p class="location">Mudells Campus, Ridgeway, Welwyn Garden City AL7 1FT</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-yellow btn-small" href="#">Property</a>
            </div>
        </div>
        <?php
    }

    /**
     * Submit another
    **/
    function add_another() { ?>
        <div id="add-another">
            <div class="flexbox hsb vc">
                <div class="col col-6">
                    <p class="upper-heading">Lorem ipsum dolor</p>
                    <p class="heading">Add another property</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col">
                    <a class="btn btn-gray btn-small" href="/dashboards/rp-submit-vacancy.php">Add another property</a>
                </div>
            </div>
        </div>
        <?php
    }

    /**
     * Update or create Vacancy
    **/
    function property_form($type) {
        switch ($type) :
            case 'new':
                $id = "create-record";
                $class = "info";
                $text = "Submit Vacancy";
            break;

            case 'update':
                $id = "update-record";
                $class = "warning";
                $text = "Update record";
            break;
        endswitch; ?>
        <div id="<?php echo $id; ?>" class="property-form">
            <div class="header <?php echo $class; ?>">
                <h3 class="heading"><?php echo $text; ?></h3>
            </div>
            <form class="content">
                <div class="block location">
                    <div class="flexbox vc">
                        <div class="col col-2">
                            <p>Address:</p>
                        </div>
                        <div class="col col-8">
                            <input class="input"  type="text" name="address-1" value="">
                        </div>
                        <div class="col col-2"></div>
                        <div class="col col-8">
                            <input class="input"  type="text" name="address-2" value="">
                        </div>
                        <div class="col col-2">
                            <p>Town/City:</p>
                        </div>
                        <div class="col col-8">
                            <input class="input"  type="text" name="town-city" value="">
                        </div>
                        <div class="col col-2">
                            <p>Postcode</p>
                        </div>
                        <div class="col col-8">
                            <input class="input"  type="text" name="postcode" value="">
                        </div>
                    </div>
                </div>
                <div class="block images">
                    <div class="flexbox vc">
                        <div class="col col-2">
                            <p>Images:</p>
                            <button class="btn btn-gray btn-small">Add image</button>
                            <button class="btn btn-gray btn-small">Upload</button>
                        </div>
                        <div class="col col-8">
                            <div class="images flexbox">
                                <?php
                                for ($i=0; $i < 8; $i++) : ?>
                                    <div class="col col-25">
                                        <img class="image" src="/global/assets/img/image-placeholder.svg" alt="">
                                    </div>
                                    <?php
                                endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block property">
                    <div class="flexbox">
                        <div class="col col-2">
                            <p>Property type:</p>
                        </div>
                        <div class="col col-8">
                            <input class="input" type="text" name="preperty-type" value="">
                        </div>
                    </div>
                </div>
                <div class="block info">
                    <div class="flexbox">
                        <div class="col col-2">
                            <p>Core rent:</p>
                        </div>
                        <div class="col col-8">
                            <input class="input" type="text" name="core-rent" value="">
                        </div>
                        <div class="col col-2">
                            <p>Service charge:</p>
                        </div>
                        <div class="col col-8">
                            <input class="input" type="text" name="service-change" value="">
                        </div>
                        <div class="col col-2">
                            <p>Nominated aggrement:</p>
                        </div>
                        <div class="col col-8">
                            <input class="input" type="text" name="nominated-agreement" value="">
                        </div>
                        <div class="col col-2">
                            <p>Care provider:</p>
                        </div>
                        <div class="col col-8">
                            <input class="input" type="text" name="cp" value="">
                        </div>
                        <div class="col col-2">
                            <p>Availability:</p>
                        </div>
                        <div class="col col-8">
                            <div class="auto-jsCalendar" data-first-day-of-the-week="2"></div>
                            <input class="input" type="date" name="cp" value="" hidden>
                        </div>
                        <div class="col col-2">
                            <p>Comments:</p>
                        </div>
                        <div class="col col-8">
                            <textarea class="input" name="name" rows="8" cols="80"></textarea>
                        </div>
                    </div>
                </div>
                <div class="update">
                    <div class="flexbox-full hc">
                        <button class="btn btn-green" type="submit">Update Record</button>
                    </div>
                </div>
            </form>
        </div>
        <?php
    }

    /**
     * Breadcrumbs and filters???
    **/
    function breadcrumbs() { ?>
        <div id="breadcrumbs">
            <div class="breadcrumbs">
                <div class="breadcrumb main">
                    <p>All property</p>
                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                </div>
                <div class="breadcrumb active">
                    <p>Details</p>
                </div>
                <div class="breadcrumb">
                    <p>Location</p>
                </div>
                <div class="breadcrumb">
                    <p>Facilities</p>
                </div>
                <div class="breadcrumb">
                    <p>Pricing</p>
                </div>
            </div>
        </div>
        <?php
    }

    /**
     * Properties search form
    **/
    function search_form() { ?>
        <div id="search-form">
            <form class="form" action="/dashboards/rp-search-results.php">
                <?php
                $blocks = array(
                    array(
                        'title' => 'Property Type',
                        'options' => array('Houses', 'Flats')
                    ),
                    array(
                        'title' => 'Bedrooms',
                        'options' => array('3', '5')
                    ),
                    array(
                        'title' => 'Features',
                        'options' => array('Garden', 'Balcony')
                    ),
                    array(
                        'title' => 'Rating',
                        'options' => array('5 stars', '4 stars')
                    ),
                    array(
                        'title' => 'Price range',
                        'options' => array('£50 - £100', '£100 - £200')
                    )
                ); ?>
                <div class="flexbox-full vc">
                    <div class="col">
                        <div class="search-radius">
                            <input class="input search" type="text" name="search" value="Barnet">
                            <select class="input radius" name="">
                                <option value="">+ 0 miles</option>
                            </select>
                        </div>
                    </div>
                    <?php
                    foreach ( $blocks as $block ) : ?>
                        <div class="col">
                            <div class="input-wrapper">
                                <select class="input" name="">
                                    <option value=""><?php echo $block['title']; ?></option>
                                    <?php
                                    foreach ( $block['options'] as $option ) : ?>
                                        <option value=""><?php echo $option; ?></option>
                                        <?php
                                    endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <?php
                    endforeach; ?>
                </div>
            </form>
        </div>
        <?php
    }


    /**
     * Properties nav and filter
    **/
    function filter($active_item) { ?>
        <div id="filter-form">
            <div class="flexbox-full hsb">
                <ul class="nav-menu">
                    <?php
                    $active_item == "attention" ? $class = "active" : $class = ""; ?>
                    <li class="menu-item">
                        <a class="link <?php echo $class; ?>" href="/dashboards/rp-requiring-attention.php">
                            <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Vacancies requiring Attention</span>
                        </a>
                    </li>
                    <?php
                    $active_item == "progress" ? $class = "active" : $class = ""; ?>
                    <li class="menu-item">
                        <a class="link <?php echo $class; ?>" href="/dashboards/rp-in-progress.php">
                            <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Vacancies in Progress</span>
                        </a>
                    </li>
                    <?php
                    $active_item == "filled" ? $class = "active" : $class = ""; ?>
                    <li class="menu-item">
                        <a class="link <?php echo $class; ?>" href="/dashboards/rp-filled.php">
                            <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Vacancies filled</span>
                        </a>
                    </li>
                </ul>
                <div class="form" action="">
                    <div class="flexbox vc">
                        <div class="col">
                            <p class="heading">Filters</p>
                        </div>
                        <div class="col">
                            <div class="filter-wrapper">
                                <button class="icon">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                </button>
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-wrapper">
                                <button class="icon toggle-map">
                                    <img class="lazy" data-src="/global/assets/img/marker.svg" alt="">
                                </button>
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-wrapper">
                                <button class="toggle-filter-overlay">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filter-overlay" class="property-filters">
                <div class="wrapper">
                    <form class="filter-form" action="index.html" method="post">
                        <div class="header">
                            <h3 class="heading">Location - <span>Barnet</span></h3>
                            <select class="select change" name="location">
                                <option value="">Change location</option>
                                <option value="">Location</option>
                            </select>
                        </div>
                        <?php
                        $blocks = array(
                            array(
                                'title' => 'Property Type',
                                'options' => array('Houses', 'Flats')
                            ),
                            array(
                                'title' => 'Number of Bedrooms',
                                'options' => array('3', '5')
                            ),
                            array(
                                'title' => 'Features',
                                'options' => array('Garden', 'Balcony')
                            ),
                            array(
                                'title' => 'Rating',
                                'options' => array('5 stars', '4 stars')
                            ),
                            array(
                                'title' => 'Search radius',
                                'options' => array('This area only')
                            ),
                            array(
                                'title' => 'Price range',
                                'options' => array('£50 - £100', '£100 - £200')
                            )
                        ); ?>
                        <div class="filters flexbox">
                            <?php
                            foreach ( $blocks as $block ) : ?>
                                <div class="col col-33">
                                    <div class="filter">
                                        <p><?php echo $block['title']; ?></p>
                                        <select class="input" name="">
                                            <?php
                                            foreach ( $block['options'] as $option ) : ?>
                                                <option value=""><?php echo $option; ?></option>
                                                <?php
                                            endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <?php
                            endforeach; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }

    function filter_inpipe() { ?>
        <div id="filter-form" class="small">
            <div class="flexbox-full">
                <div class="heading">
                    <h1 class="title">Upcoming/In pipe Properties</h1>
                </div>
                <div class="form" action="">
                    <div class="flexbox vc">
                        <div class="col">
                            <p class="heading">Filters</p>
                        </div>
                        <div class="col">
                            <div class="filter-wrapper">
                                <button class="icon">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                </button>
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-wrapper">
                                <button class="icon toggle-map">
                                    <img class="lazy" data-src="/global/assets/img/marker.svg" alt="">
                                </button>
                                <div class="overlay">

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="filter-wrapper">
                                <button class="toggle-filter-overlay">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filter-overlay" class="property-filters">
                <div class="wrapper">
                    <form class="filter-form" action="index.html" method="post">
                        <div class="header">
                            <h3 class="heading">Location - <span>Barnet</span></h3>
                            <select class="select change" name="location">
                                <option value="">Change location</option>
                                <option value="">Location</option>
                            </select>
                        </div>
                        <?php
                        $blocks = array(
                            array(
                                'title' => 'Property Type',
                                'options' => array('Houses', 'Flats')
                            ),
                            array(
                                'title' => 'Number of Bedrooms',
                                'options' => array('3', '5')
                            ),
                            array(
                                'title' => 'Features',
                                'options' => array('Garden', 'Balcony')
                            ),
                            array(
                                'title' => 'Rating',
                                'options' => array('5 stars', '4 stars')
                            ),
                            array(
                                'title' => 'Search radius',
                                'options' => array('This area only')
                            ),
                            array(
                                'title' => 'Price range',
                                'options' => array('£50 - £100', '£100 - £200')
                            )
                        ); ?>
                        <div class="filters flexbox">
                            <?php
                            foreach ( $blocks as $block ) : ?>
                                <div class="col col-33">
                                    <div class="filter">
                                        <p><?php echo $block['title']; ?></p>
                                        <select class="input" name="">
                                            <?php
                                            foreach ( $block['options'] as $option ) : ?>
                                                <option value=""><?php echo $option; ?></option>
                                                <?php
                                            endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <?php
                            endforeach; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }

    /**
     * Refine properties
    **/
    function refine() { ?>
        <div id="refine">
            <div class="flexbox-full he">
                <div class="refine-wrappper">
                    <button class="toggle-overlay">Refine</button>
                    <form class="overlay">
                        <p class="heading">Please select from the following:</p>
                        <ul class="choices">
                            <li class="choice">
                                <a class="icon-wrapper" href="#">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                    <span>Incomplete Records</span>
                                </a>
                            </li>
                            <li class="choice">
                                <a class="icon-wrapper" href="#">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                    <span>Return by Care Provider</span>
                                </a>
                            </li>
                            <li class="choice">
                                <a class="icon-wrapper" href="#">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                    <span>Retur by Local Authority</span>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }

    /**
     * Vaccancy type for Property in grid
    **/
    function vacancy_type($type) {
        switch ($type) {
            case 'filled': ?>
                <div class="star-wrapper">
                    <div class="stars">
                        <div class="star full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs></defs><path class="a" d="M25,1.318l7.725,16.459L50,20.417,37.5,33.227l2.951,18.091L25,42.777,9.549,51.318,12.5,33.227,0,20.417l17.275-2.64Z" transform="translate(0 -1.318)"/></svg>
                        </div>
                        <div class="star full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs></defs><path class="a" d="M25,1.318l7.725,16.459L50,20.417,37.5,33.227l2.951,18.091L25,42.777,9.549,51.318,12.5,33.227,0,20.417l17.275-2.64Z" transform="translate(0 -1.318)"/></svg>
                        </div>
                        <div class="star full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs></defs><path class="a" d="M25,1.318l7.725,16.459L50,20.417,37.5,33.227l2.951,18.091L25,42.777,9.549,51.318,12.5,33.227,0,20.417l17.275-2.64Z" transform="translate(0 -1.318)"/></svg>
                        </div>
                        <div class="star full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs></defs><path class="a" d="M25,1.318l7.725,16.459L50,20.417,37.5,33.227l2.951,18.091L25,42.777,9.549,51.318,12.5,33.227,0,20.417l17.275-2.64Z" transform="translate(0 -1.318)"/></svg>
                        </div>
                        <div class="star">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><defs></defs><path class="a" d="M25,1.318l7.725,16.459L50,20.417,37.5,33.227l2.951,18.091L25,42.777,9.549,51.318,12.5,33.227,0,20.417l17.275-2.64Z" transform="translate(0 -1.318)"/></svg>
                        </div>
                    </div>
                    <img class="icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                </div>
                <?php
            break;

            case "progress": ?>
                <div class="icon-wrapper">
                    <img class="icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                </div>
                <?php
            break;

            case "attention-single": ?>
                <div class="message-wrapper">
                    <img class="warning icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                    <div class="icon-group attention">
                        <img class="warning icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                        <div class="message">
                            <p class="person">Care provider</p>
                            <p class="reason">Says unsuitable</p>
                        </div>
                    </div>
                </div>
            <?php
            break;

            case "sent": ?>
                <div class="message-wrapper">
                    <img class="icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                    <div class="icon-group success">
                        <img class="icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                        <div class="message">
                            <p class="reason">Sent to</p>
                            <p class="person">Care provider</p>
                        </div>
                    </div>
                </div>
                <?php
            break;

            case 'attention': ?>
                <div class="icon-group">
                    <img class="icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                    <img class="exclamation lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                </div>
                <?php
            break;
        }
    }

    /**
     * Property in grid
    **/
    function grid($type) { ?>
        <article class="property-wrapper">
            <div class="property">
                <div class="flexbox-full">
                    <div class="col col-5">
                        <div class="image-wrapper">
                            <img src="/global/assets/img/image-placeholder.svg" alt="">
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="content">
                            <div class="overlay">
                                <?php
                                $this->vacancy_type($type); ?>
                            </div>
                            <p class="location">Upper Tooting Park, London, SW17</p>
                            <h3 class="title">2 Bedroom Semi-Detached</h3>
                            <p class="distance"><span class="val">0.42</span> Miles from station</p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
                            <a class="btn btn-small btn-gray" href="/dashboards/rp-returned-cp.php">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
    }

    function property_slider($type) { ?>
        <article class="property-wrapper property-slider">
            <div class="block">
                <div class="property">
                    <div class="flexbox-full">
                        <div class="col col-5">
                            <div class="slider-wrapper owl-carousel">
                                <?php
                                for ($i=0; $i < 10; $i++) : ?>
                                    <div class="slide" data-hash="slide-<?php echo $i; ?>">
                                        <img class="owl-lazy" data-src="/global/assets/img/image-placeholder.svg" alt="">
                                    </div>
                                    <?php
                                endfor; ?>
                            </div>
                        </div>
                        <div class="col col-5">
                            <div class="content">
                                <div class="overlay">
                                    <?php
                                    $this->vacancy_type($type); ?>
                                </div>
                                <p class="location">Upper Tooting Park, London, SW17</p>
                                <h3 class="title">2 Bedroom Semi-Detached</h3>
                                <p class="distance"><span class="val">0.42</span> Miles from station</p>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
                                <a class="btn btn-small btn-gray" href="">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="footer flexbox-full">
                    <div class="col col-5">
                        <div class="thumbnails">
                            <div class="owl-carousel">
                                <?php
                                for ($i=0; $i < 10; $i++) : ?>
                                    <a href="#slide-<?php echo $i; ?>" class="thumbnail">
                                        <img src="/global/assets/img/image-placeholder.svg" alt="">
                                    </a>
                                    <?php
                                endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="information">
                            <div class="wrapper">
                                <div class="info">
                                    <p class="person">Care provider HCPA</p>
                                    <p class="location">Mudelis Campus, Ridgeway, Welwyn Garden City AL7 1FT</p>
                                </div>
                                <a class="btn btn-yellow btn-small" href="#">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
    }

    function la_property_slider () { ?>
        <article class="property-wrapper property-slider">
            <div class="block">
                <div class="property">
                    <div class="flexbox-full">
                        <div class="col col-5">
                            <div class="slider-wrapper owl-carousel">
                                <?php
                                for ($i=0; $i < 10; $i++) : ?>
                                    <div class="slide" data-hash="slide-<?php echo $i; ?>">
                                        <img class="owl-lazy" data-src="/global/assets/img/image-placeholder.svg" alt="">
                                    </div>
                                    <?php
                                endfor; ?>
                            </div>
                        </div>
                        <div class="col col-5">
                            <div class="content">
                                <div class="overlay">
                                    <?php
                                    //$this->vacancy_type($type); ?>
                                </div>
                                <p class="location">Upper Tooting Park, London, SW17</p>
                                <h3 class="title">2 Bedroom Semi-Detached</h3>
                                <p class="distance"><span class="val">0.42</span> Miles from station</p>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="footer flexbox-full">
                    <div class="col col-5">
                        <div class="thumbnails">
                            <div class="owl-carousel">
                                <?php
                                for ($i=0; $i < 10; $i++) : ?>
                                    <a href="#slide-<?php echo $i; ?>" class="thumbnail">
                                        <img src="/global/assets/img/image-placeholder.svg" alt="">
                                    </a>
                                    <?php
                                endfor; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="information">
                            <div class="wrapper la">
                                <div class="btn-wrap">
                                    <p>Place Teneat</p>
                                    <a class="btn btn-yellow btn-small" href="#">Place</a>
                                </div>
                                <div class="btn-wrap">
                                    <p>Reject property</p>
                                    <a class="btn btn-yellow btn-small toggle-la-reject-property" href="#">Reject</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
    }
}
?>
