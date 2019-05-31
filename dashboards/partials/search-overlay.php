<div id="search-overlay" class="property-filters">
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
