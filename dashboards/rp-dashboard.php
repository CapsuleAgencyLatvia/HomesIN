<?php
include_once('modules/header.php'); ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    include_once('modules/sidebar.php'); ?>
    <div id="dashboard" class="home">
        <div class="container">
            <div class="segment overview">
                <div class="head">
                    <h2 class="heading">Overview</h2>
                    <select class="select time-period" name="period">
                        <option value="">Last 3 months</option>
                    </select>
                </div>
                <?php
                $blocks = array(
                    array(
                        'data' => '£ 3.864',
                        'percentage' => 6.2,
                        'title' => 'KPI Vacancy Filled',
                        'trend' => 'positive',
                    ),
                    array(
                        'data' => 628,
                        'percentage' => 5.5,
                        'title' => 'Occupied Property',
                        'trend' => 'positive',
                    ),
                    array(
                        'data' => 716,
                        'percentage' => 1.5,
                        'title' => 'In progress',
                        'trend' => 'positive',
                    ),
                    array(
                        'data' => '1,287',
                        'percentage' => 4.7,
                        'title' => 'All properties',
                        'trend' => 'negative',
                    ),
                ); ?>
                <div class="blocks flexbox">
                    <?php
                    foreach ( $blocks as $block ) : ?>
                        <div class="col col-25">
                            <div class="block">
                                <div class="icon-wrapper">
                                    <img class="icon" src="" alt="">
                                </div>
                                <div class="center">
                                    <p class="data"><?php echo $block['data']; ?></p>
                                    <div class="percentage-wrapper <?php echo $block['trend']; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="292.362" height="164.457" viewBox="0 0 292.362 164.457"><defs><style>.a{fill:none;}.b{clip-path:url(#a);}</style><clipPath id="a"><rect class="a" width="292.362" height="164.457"/></clipPath></defs><g transform="translate(0 -63.953)"><g class="b" transform="translate(0 63.953)"><g transform="translate(0 -63.953)"><path d="M286.935,69.377a17.552,17.552,0,0,0-12.848-5.424H18.274a17.558,17.558,0,0,0-12.85,5.424,17.931,17.931,0,0,0,0,25.7L133.331,222.982a17.921,17.921,0,0,0,25.7,0L286.935,95.074a17.923,17.923,0,0,0,0-25.7Z"/></g></g></g></svg>
                                        <p><span class="percentage"><?php echo $block['percentage']; ?></span>%</p>
                                    </div>
                                </div>
                                <h3 class="heading"><?php echo $block['title']; ?></h3>
                            </div>
                        </div>
                        <?php
                    endforeach; ?>
                </div>
            </div>
            <div class="segment kpi-business">
                <div class="head">
                    <h2 class="heading">KIP Business</h2>
                    <select class="select time-period" name="period">
                        <option value="">Last 3 months</option>
                    </select>
                </div>
                <div class="flexbox blocks">
                    <div class="col col-6">
                        <div class="block chart line">
                            <p>Cost of unfilled Vacancy</p>
                            <canvas id="vacancy-line" width="300" height="100">
                                <p>Your browser does not support the canvas element</p>
                            </canvas>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="block chart pie">
                            <p>Quality of Vacancy</p>
                            <canvas id="vacancy-pie" width="185" height="100">
                                <p>Your browser does not support the canvas element</p>
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="segment action-blocks status">
                <div class="head">
                    <h2 class="heading">Status</h2>
                </div>
                <?php
                $blocks = array(
                    array('title' => 'Requiring attention','value' => 11,'status' => 'error',),
                    array('title' => 'In Progress','value' => 14,'status' => 'notification',),
                    array('title' => 'All properties','value' => 102,'status' => 'notification',),
                ); ?>
                <div class="flexbox blocks">
                    <?php
                    foreach ( $blocks as $block ) : ?>
                        <div class="col col-33">
                            <div class="block">
                                <div class="head">
                                    <p class="heading"><?php echo $block['title']; ?></p>
                                    <div class="count <?php echo $block['status']; ?>">
                                        <p><?php echo $block['value']; ?></p>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="icon-wrapper">
                                        <img src="" alt="">
                                    </div>
                                    <a class="btn btn-blue" href="#">View</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    endforeach; ?>
                </div>
            </div>
            <div class="segment action-blocks add-property">
                <div class="head">
                    <h2 class="heading">Add Property</h2>
                </div>
                <?php
                $blocks = array(
                    array('title' => 'Submit New Vacancy','button' => 'Submit'),
                    array('title' => 'Bulk upload','button' => 'Upload'),
                    array('title' => 'Search','button' => 'Search'),
                ); ?>
                <div class="blocks flexbox">
                    <?php
                    foreach ( $blocks as $block ) : ?>
                        <div class="col col-33">
                            <div class="block">
                                <div class="head">
                                    <p><?php echo $block['title']; ?></p>
                                </div>
                                <div class="content">
                                    <img src="" alt="">
                                    <a class="btn btn-blue" href="#"><?php echo $block['button']; ?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    endforeach; ?>
                </div>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
include_once('modules/footer.php'); ?>
