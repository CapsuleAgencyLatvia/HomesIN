<div id="filter-overlay">
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
</div>
