<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Search results');
$property = new Property; ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="search-results">
        <div class="container">
            <div class="header">
                <?php
                $type = 'filled';
                $property->filter($type);
                $property->search_form();
                $property->refine(); ?>
            </div>
            <div class="main-content">
                <div class="properties">
                    <?php
                    for ($i=0; $i < 3; $i++) :
                        $property->grid($type);
                    endfor; ?>
                </div>
                <div class="flexbox hc">
                    <button id="load-more" class="btn btn-gray">Load More</button>
                </div>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer(); ?>
