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
                        <img src="assets/img/arrow-down.svg" alt="Arrow Down">
                    </button>
                    <div class="choices">
                        <div class="head">
                            <p class="heading">Please select from the following:</p>
                        </div>
                        <?php
                        $login_options = array('Registered Providers', 'Care Providers', 'Local Authority', 'Investor');
                        foreach ( $login_options as $login_option ) : ?>
                            <a class="choice" href="#">
                                <img src="assets/img/icon-placeholder-round.svg" alt="">
                                <span><?php echo $login_option; ?></span>
                            </a>
                            <?php
                        endforeach; ?>
                        <hr>
                        <a class="choice" href="#">
                            <img src="assets/img/icon-placeholder-round.svg" alt="">
                            <span>Back office</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="login-form-overlay">
    <div class="wrapper">
        <div class="content">
            <div class="head">
                <img class="icon lazy" data-src="assets/img/person.svg" alt="Person">
                <p class="info">Please log in</p>
                <h3 class="type">Registred Providers</h3>
            </div>
            <form class="form" action="" method="post">
                <div class="field-wrapper">
                    <input class="input" type="email" name="email" value="" placeholder="Email Address">
                </div>
                <div class="field-wrapper">
                    <input class="input" type="password" name="password" value="" placeholder="Password">
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
