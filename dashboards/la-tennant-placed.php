<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Tennan Placed');
$property = new Property; ?>
<div id="dashboar-wrapper" class="local-authority">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="tennant-placed">
        <div class="container">
            <div class="main-content">
                <div class="tennant-message">
                    <div class="status-wrapper">
                        <img class="icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                        <p>Success</p>
                    </div>
                    <h3 class="heading">Tennant Placed</h3>
                    <hr>
                    <p class="full-name">John Smith</p>
                    <p class="location">Mundells Campus, Ridgeway, Welwyn Garden City AL7 1FT</p>
                    <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="buttons">
                        <div class="button">
                            <a class="btn btn-yellow btn-medium" href="#">Property link</a>
                        </div>
                        <div class="button">
                            <a class="btn btn-yellow btn-medium" href="#">Property link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer(); ?>
