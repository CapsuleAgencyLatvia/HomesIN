<?php
include_once('partials/property.php');
$property = new Property;
include_once('modules/header.php'); ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    include_once('modules/sidebar.php'); ?>
    <div id="dashboard" class="requiring-attention">
        <div class="container">
            <?php
            $property->filter();
            $property->refine(); ?>
            <div class="properties">
                <?php
                for ($i=0; $i < 3; $i++) :
                    $type = 'vaccancy-filled';
                    $property->grid($type);
                endfor; ?>
            </div>
            <div class="flexbox hc">
                <button id="load-more" class="btn btn-gray">Load More</button>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
include_once('modules/footer.php'); ?>
