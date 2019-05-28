<div id="sidebar">
    <div class="user-type">
        <p>Registered Porvider</p>
    </div>
    <?php
    $blocks = array(
        array(
            'heading' => 'Home',
            'items' => array('Dashboard', 'Search'),
        ),
        array(
            'heading' => 'Property',
            'items' => array('Vacancies Filled', 'In Progress', 'Requiring Attention', 'Submit new Vacancy', 'Bulk Upload'),
        ),
        array(
            'heading' => 'KPI Business',
            'items' => array('Vacancies Shared'),
        ),
        array(
            'heading' => 'Messages/Notifications',
            'items' => array('From care providers', 'from local authorities', 'From incomplete CSV'),
        ),
        array(
            'heading' => 'Settings',
            'items' => array('Your Profile', 'Billing & Payments', 'Contact HomesIN'),
        ),
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
                        <a class="icon-wrapper" href="/">
                            <img src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span><?php echo $item; ?></span>
                        </a>
                    </li>
                    <?php
                endforeach; ?>
            </ul>
        </div>
        <?php
    endforeach; ?>
</div>
