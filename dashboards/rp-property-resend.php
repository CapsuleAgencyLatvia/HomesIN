<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Property Resent to CP');
$property = new Property; ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="property-returned">
        <div class="container">
            <div class="header">
                <?php
                $property->filter('attention');
                $property->breadcrumbs(); ?>
            </div>
            <div class="main">
                <?php
                $property->property_slider('sent'); ?>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer(); ?>
