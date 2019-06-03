<?php
include_once('modules/header.php');
include_once('modules/sidebar.php');
include_once('partials/messaging.php');
include_once('modules/footer.php');

$header = new Header('Messages');
$messaging = new Messaging; ?>
<div id="dashboar-wrapper" class="registered-provider">
    <?php
    $sidebar = new Sidebar; ?>
    <div id="dashboard" class="message">
        <div class="container">
            <div class="header">
                <h1 class="title">Messages (Inbox 04)</h1>
                <?php
                $messaging->header(); ?>
            </div>
            <div class="main-content">
                <?php
                for ($i=0; $i < 3; $i++) : ?>
                    <div class="block">
                        <?php
                        $messaging->message_preview(); ?>
                    </div>
                    <?php
                endfor; ?>
            </div>
        </div>
        <?php
        include_once('partials/search-overlay.php'); ?>
    </div>
</div>
<?php
$footer = new Footer(); ?>
