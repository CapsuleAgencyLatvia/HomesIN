<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Submit vacancy');
$property = new Property; ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="property-returned">
        <div class="container">
            <div class="main-content">
                <div class="block">
                    <?php
                    $property->submited(); ?>
                </div>
                <div class="block">
                    <?php
                    $property->add_another(); ?>
                </div>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer(); ?>
