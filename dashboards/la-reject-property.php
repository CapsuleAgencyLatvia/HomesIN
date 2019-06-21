<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Property returned CP');
$property = new Property; ?>
<div id="dashboar-wrapper" class="local-authority">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="property-returned">
        <div class="container">
            <div class="header">
                <?php
                $property->filter('attention');
                $property->breadcrumbs(); ?>
            </div>
            <div class="main-content">
                <?php
                $property->la_property_slider(); ?>
            </div>
        </div>
        <?php
        include_once('partials/la-reject-property-overlay.php');
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer(); ?>
