<?php
include_once('modules/header.php'); ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    include_once('modules/sidebar.php'); ?>
    <div id="dashboard" class="search-results">
        <div class="container">
            <?php
            include_once('partials/filter-form.php');
            include_once('partials/search-form.php'); ?>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
include_once('modules/footer.php'); ?>
