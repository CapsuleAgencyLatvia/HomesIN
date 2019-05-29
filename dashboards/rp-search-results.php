<?php
include_once('modules/header.php'); ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    include_once('modules/sidebar.php'); ?>
    <div id="dashboard" class="search-results">
        <div class="container">
            <?php
            include_once('partials/properties-header.php'); ?>
            <div class="properties">
                <?php
                for ($i=0; $i < 3; $i++) :
                    include('partials/property-grid.php');
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
