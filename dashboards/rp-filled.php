<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Vacancies filled');
$property = new Property; ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="property-returned">
        <div class="container">
            <div class="header">
                <?php
                $type = 'filled';
                $property->filter($type);
                $property->breadcrumbs();
                $property->refine(); ?>
            </div>
            <div class="main-content">
                <?php
                for ($i=0; $i < 3; $i++) :
                    $property->grid($type);
                endfor; ?>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer(); ?>
