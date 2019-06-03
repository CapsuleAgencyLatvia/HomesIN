<?php
/**
 * Messaging
**/
class Messaging {
    function header() { ?>
        <div id="message-header">
            <div class="header">
                <form class="search">
                    <button class="submit" type="submit">
                        <img class="lazy" data-src="/global/assets/img/search.svg" alt="">
                    </button>
                    <input class="input" type="text" name="search" value="" placeholder="Search">
                </form>
                <div class="refine-wrapper">
                    <button class="refine">Refine</button>
                    <div class="dropdown">
                        <p class="heading">Please slect from the following:</p>
                        <ul class="menu">
                            <li class="item">
                                <a class="icon-group" href="#">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                    <span>Incomplete records</span>
                                </a>
                            </li>
                            <li class="item">
                                <a class="icon-group" href="#">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                    <span>Return by Care Provider</span>
                                </a>
                            </li>
                            <li class="item">
                                <a class="icon-group" href="#">
                                    <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                                    <span>Return by Local Authority</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    function message_preview() { ?>
        <div class="message-preview">
            <div class="flexbox hsb vc">
                <div class="col">
                    <div class="image-wrapper">
                        <img class="lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="info">
                        <p class="action required">Action Required</p>
                        <h3 class="heading">First name / User type</h3>
                        <p class="time">9.04 AM</p>
                    </div>
                </div>
                <div class="col fill">
                    <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col">
                    <a class="btn btn-small btn-gray" href="#">View</a>
                </div>
            </div>
        </div>
        <?php
    }

    function message_notify() { ?>
        <div id="message-notify">
            <div class="flexbox-full vc">
                <div class="col">
                    <img class="type lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                </div>
                <div class="col">
                    <img class="status lazy" data-src="/global/assets/img/icon-placeholder-round.svg" alt="">
                </div>
                <div class="col">
                    <p class="message">The <span class="user-type">CP</span> upload has returned this property as unsuitable</p>
                </div>
                <div class="col m-left">
                    <a class="btn btn-gray" href="#">Back to messages</a>
                </div>
            </div>
        </div>
        <?php
    }
    function message_single() { ?>
        <div id="message-single">
            <div class="info">
                <p class="user-type">Care Provider</p>
                <h2 class="heading">2 Bedroom Semi-Detached</h2>
                <p class="location">Upper Tooting Park, London, SW17</p>
            </div>
            <div class="message">
                <p class="heading">Message</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="action">
                <p class="heading">Action Required</p>
                <a class="btn btn-yellow btn-small" href="#">Info/Update</a>
            </div>
        </div>
        <?php
    }
}

?>
