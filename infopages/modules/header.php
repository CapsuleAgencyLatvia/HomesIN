<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header id="header">
    <div class="container">
        <div class="flexbox-full hsb vc">
            <div class="col">
                <a class="logo-wrapper" href="/">
                    <img class="logo lazy" data-src="" alt="">
                </a>
            </div>
            <div class="col">
                <div class="loggin-wrapper">
                    <button class="toggle-choices">
                        <span>Log in</span>
                        <img src="/global/assets/img/arrow-down.svg" alt="Arrow Down">
                    </button>
                    <div class="choices">
                        <div class="head">
                            <p class="heading">Please select from the following:</p>
                        </div>
                        <?php
                        $login_options = array('Registered Providers', 'Care Providers', 'Local Authority', 'Investor');
                        $options = array('rp', 'cp', 'la', 'investor');
                        $cnt = 0;
                        foreach ( $login_options as $login_option ) : ?>
                            <button class="choice" data-choice="<?php echo $login_option; ?>" data-user-type="<?php echo $options[$cnt]; ?>">
                                <img src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                <span><?php echo $login_option; ?></span>
                            </button>
                            <?php
                            $cnt++;
                        endforeach; ?>
                        <hr>
                        <button class="choice" data-choice="Back office" data-user-type="bo">
                            <img src="/global/assets/img/icon-placeholder-round.svg" alt="">
                            <span>Back office</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="login-form" class="form-overlay">
    <div class="wrapper">
        <div class="content">
            <div class="close-wrapper">
                <button class="close-form">
                    <img class="lazy" data-src="/global/assets/img/cross.svg" alt="Close">
                </button>
            </div>
            <div class="head">
                <img class="icon lazy" data-src="/global/assets/img/person.svg" alt="Person">
                <p class="info">Please log in</p>
                <h3 class="type"></h3>
            </div>
            <form class="form login" action="/dashboards/rp-dashboard.php">
                <input type="text" name="user-type" value="" hidden>
                <div class="field-wrapper">
                    <input class="input" type="email" name="email" value="" placeholder="Email Address" required>
                </div>
                <div class="field-wrapper">
                    <input class="input" type="password" name="password" value="" placeholder="Password" required>
                </div>
                <div class="field-wrapper">
                    <button class="btn btn-black" type="submit" name="button">Log in</button>
                </div>
            </form>
            <div class="forgot">
                <a href="#">Forgot password?</a>
            </div>
            <hr>
            <div class="foo">
                <p>Not registered with Homesin? <button class="sign-up-toggle">Sign up</button></p>
            </div>
        </div>
    </div>
</div>
<div id="register-form" class="form-overlay">
    <div class="wrapper">
        <div class="content">
            <div class="close-wrapper">
                <button class="close-form">
                    <img class="lazy" data-src="/global/assets/img/cross.svg" alt="Close">
                </button>
            </div>
            <div class="head">
                <img class="icon lazy" data-src="/global/assets/img/person.svg" alt="Person">
                <h3 class="type">Application / Sign up</h3>
            </div>
            <form class="form register" action="/dashboards/rp-dashboard.php">
                <p class="heading">Sign up as:</p>
                <div class="field-wrapper">
                    <select class="input select user-type" name="user-type">
                        <option value="rp">Registered Provider</option>
                        <option value="cp">Care Provider</option>
                        <option value="la">Local Authority</option>
                    </select>
                </div>
                <div class="flexbox">
                    <div class="col col-5">
                        <div class="field-wrapper">
                            <input class="input" type="text" name="first-name" value="" placeholder="*First name" required>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="field-wrapper">
                            <input class="input" type="text" name="last-name" value="" placeholder="*Last name" required>
                        </div>
                    </div>
                </div>
                <div class="field-wrapper">
                    <input class="input" type="email" name="email" value="" placeholder="*Email address" required>
                </div>
                <div class="field-wrapper">
                    <input class="input" type="text" name="lorem" value="" placeholder="*Lorem ipsum" required>
                </div>
                <div class="flexbox">
                    <div class="col col-5">
                        <div class="field-wrapper">
                            <input class="input" type="text" name="lorem" value="" placeholder="*Lorem ipsum" required>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="field-wrapper">
                            <input class="input" type="text" name="lorem" value="" placeholder="*Lorem ipsum" required>
                        </div>
                    </div>
                </div>
                <div class="field-wrapper">
                    <input class="input" type="text" name="lorem" value="" placeholder="*Lorem ipsum" required>
                </div>
                <div class="field-wrapper">
                    <button class="btn btn-black" type="submit" name="button">Sign up / Submit application</button>
                </div>
            </form>
        </div>
    </div>
</div>
