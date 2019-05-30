<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Requiring attention');
$property = new Property; ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="requiring-attention">
        <div class="container">
            <?php
            $property->filter('attention');
            $property->refine(); ?>
            <div class="properties">
                <?php
                for ($i=0; $i < 3; $i++) :
                    $type = 'attention';
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
$footer = new Footer(); ?>
