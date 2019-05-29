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
