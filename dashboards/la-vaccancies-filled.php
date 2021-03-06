<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');
$property = new Property;
$header = new Header('Vacancies filled'); ?>
<div id="dashboar-wrapper" class="local-authority">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="home">
        <div class="container">
            <div class="header">
                <?php
                $property->filter('attention');
                $property->refine(); ?>
            </div>
            <section class="properties-list">
                <?php
                for ($i=0; $i < 3; $i++) {
                    $property->la_property_inlist('filled');
                } ?>
            </section>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer; ?>
