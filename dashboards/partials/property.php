<?php
/**
 * Property functions
**/
class Property {
    function search() { ?>
        <div id="search-overlay">
            <div class="close-wrapper">
                <button class="close">
                    <img src="/global/assets/img/cross.svg" alt="">
                </button>
            </div>
            <div class="wrapper">
                <div class="container">
                    <form class="search-form" action="/dashboards/rp-search-results.php">
                        <h3 class="heading">Location - <span>None Specified</span></h3>
                        <div class="field-wrapper">
                            <input class="input" type="text" name="search" value="" placeholder="Postcode / Local Authority">
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
                        <div class="flexbox-full hc">
                            <button class="btn btn-yellow" type="submit" name="button">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    /**
     * Filter
    **/
    function filter() { ?>
        <div id="filter-form">
            <div class="flexbox-full hsb">
                <ul class="nav-menu">
                    <li class="menu-item">
                        <a class="link" href="">
                            <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Vacancies requiring Attention</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="link" href="">
                            <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Vacancies in Progress</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="link active" href="">
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
            case 'vaccancy-filled': ?>
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
