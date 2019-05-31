<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Property return CP');
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
            <div class="main-content">
                <div class="block">
                    <?php
                    $property->returned_info(); ?>
                </div>
                <div class="block">
                    <?php
                    $property->returned_message('resend'); ?>
                </div>
                <?php
                $property->property_slider('attention-single'); ?>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer(); ?>
