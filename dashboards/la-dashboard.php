<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/property.php');
include_once('modules/footer.php');

$header = new Header('Dashboard'); ?>
<div id="dashboar-wrapper" class="local-authority">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="home">
        <div class="container">
            <section class="properties-grid">
                <div class="flexbox">
                    <?php
                    for ($i=0; $i < 3; $i++) { ?>
                        <div class="col col-33">
                            <div class="property-ingrid">
                                <div class="top">
                                    <div class="status">
                                        <p>New</p>
                                    </div>
                                    <div class="trafic-light">
                                        <div class="light"></div>
                                        <div class="light"></div>
                                        <div class="light"></div>
                                    </div>
                                    <img class="image lazy" data-src="/global/assets/img/image-placeholder.svg" alt="Image">
                                </div>
                                <div class="bottom">
                                    <p class="location">Upper Tooting Park, London, SW17</p>
                                    <h3 class="heading">2 Bedroom Semi-Detached</h3>
                                    <p class="distance">0.42 Miles from station</p>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>
            </section>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer; ?>
