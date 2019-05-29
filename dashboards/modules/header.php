<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header id="header">
    <div class="left">
        <div class="flexbox vc hsb">
            <div class="col">
                <a class="logo-wrapper" href="/">
                    <img class="logo lazy" data-src="" alt="">
                </a>
            </div>
            <div class="col">
                <button class="toggle-sidebar">
                    <div class="lines">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="container">
            <div class="flexbox vc">
                <div class="col">
                    <form class="icon-wrapper search-wrapper">
                        <button class="search" type="submit">
                            <img class="icon lazy" data-src="/global/assets/img/search.svg" alt="">
                        </button>
                        <input class="input" type="text" name="" value="" placeholder="Search">
                    </form>
                </div>
                <?php
                $blocks = array(
                    array(
                        'icon' => array(
                            'url' => '/global/assets/img/user-add.svg',
                            'alt' => 'Users',
                        ),
                    ),
                    array(
                        'icon' => array(
                            'url' => '/global/assets/img/notifications.svg',
                            'alt' => 'Notifications',
                        ),
                    ),
                    array(
                        'icon' => array(
                            'url' => '/global/assets/img/question-mark.svg',
                            'alt' => 'Questions',
                        ),
                    ),
                );
                $cnt = 0;
                foreach ( $blocks as $block ) :
                    $cnt == 0 ? $class = 'm-left' : $class = ''; ?>
                    <div class="col <?php echo $class; ?>">
                        <button class="icon-wrapper">
                            <img class="icon lazy" data-src="<?php echo $block['icon']['url']; ?>" alt="<?php echo $block['icon']['alt']; ?>">
                        </button>
                    </div>
                    <?php
                    $cnt++;
                endforeach; ?>
                <div class="col">
                    <div class="user-wrapper">
                        <button class="icon-wrapper user">
                            <img class="icon lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="Placeholder">
                            <p>Mollie Jennings</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="dashboar-wrapper">
