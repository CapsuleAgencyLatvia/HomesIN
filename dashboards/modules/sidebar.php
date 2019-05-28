<div id="sidebar">
    <div class="user-type">
        <p>Registered Porvider</p>
    </div>
    <?php
    $blocks = array(
        array('heading' => 'Home', 'items' => array(
            array('title' => 'Dashboard','url' => '/dashboards/register-provider-dashboard.php'),
            array('title' => 'Search','url' => '')
        )),
        array('heading' => 'Property', 'items' => array(
            array('title' => 'Vacancies Filled','url' => ''),
            array('title' => 'In Progress','url' => ''),
            array('title' => 'Requiring Attention','url' => ''),
            array('title' => 'Submit new Vacancy','url' => ''),
            array('title' => 'Bulk Upload','url' => ''),
        )),
        array('heading' => 'KPI Business', 'items' => array(
            array('title' => 'Vacancies Shared','url' => ''),
        )),
        array('heading' => 'Messages/Notifications', 'items' => array(
            array('title' => 'From care providers','url' => ''),
            array('title' => 'From local authorities','url' => ''),
            array('title' => 'From incomplete CSV','url' => ''),
        )),
        array('heading' => 'Settings', 'items' => array(
            array('title' => 'Your Profile','url' => ''),
            array('title' => 'Billing & Payments','url' => ''),
            array('title' => 'Contact HomesIN','url' => ''),
        )),
    );
    foreach ( $blocks as $block ) : ?>
        <div class="sidebar-block home">
            <div class="icon-wrapper head">
                <img src="" alt="">
                <p><?php echo $block['heading']; ?></p>
            </div>
            <ul class="menu">
                <?php
                foreach ( $block['items'] as $item ) : ?>
                    <li class="menu-item">
                        <a class="icon-wrapper" href="<?php echo $item['url']; ?>">
                            <img src="/global/assets/img/icon-placeholder-round.svg" alt="Placeholder">
                            <span><?php echo $item['title']; ?></span>
                        </a>
                    </li>
                    <?php
                endforeach; ?>
            </ul>
        </div>
        <?php
    endforeach; ?>
</div>
