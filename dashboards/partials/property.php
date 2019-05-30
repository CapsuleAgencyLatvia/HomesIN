<?php
/**
 * Property functions
**/
class Property {
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
     * Filter
    **/
    function filter($active_item) { ?>
        <div id="filter-form">
            <div class="flexbox-full hsb">
                <ul class="nav-menu">
                    <?php
                    $active_item == "attention" ? $class = "active" : $class = ""; ?>
                    <li class="menu-item">
                        <a class="link <?php echo $class; ?>" href="">
                            <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Vacancies requiring Attention</span>
                        </a>
                    </li>
                    <?php
                    $active_item == "progress" ? $class = "active" : $class = ""; ?>
                    <li class="menu-item">
                        <a class="link <?php echo $class; ?>" href="">
                            <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Vacancies in Progress</span>
                        </a>
                    </li>
                    <?php
                    $active_item == "filled" ? $class = "active" : $class = ""; ?>
                    <li class="menu-item">
                        <a class="link <?php echo $class; ?>" href="">
                            <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Vacancies filled</span>
                        </a>
                    </li>
                </ul>
                <form class="form" action="">
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
                                <button class="icon">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                </button>
                                <div class="overlay">

                                </div>
                            </div>
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
                    </div>
                </form>
            </div>
        </div>
        <?php
    }

    /**
     * Refine
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
     * Vaccancy type
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
                    <img class="icon" src="/global/assets/img/icon-placeholder-round.svg" alt="">
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
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a class="btn btn-small btn-gray" href="">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php
    }
}
?>
