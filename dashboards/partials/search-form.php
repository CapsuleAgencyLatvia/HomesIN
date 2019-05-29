<div id="rp-search-form">
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
