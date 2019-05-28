<footer id="footer">
    <div class="contain">
        <div class="flexbox">
            <?php
            $footer_menus = array('About us','Log in', 'Support', 'Contact');
            foreach ( $footer_menus as $footer_menu ) : ?>
                <div class="col col-2">
                    <div class="menu-wrapper">
                        <h2 class="heading"><?php echo $footer_menu; ?></h2>
                        <hr>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">Lorem ipsum</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Lorem ipsum</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Lorem ipsum</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Lorem ipsum</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Lorem ipsum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
            endforeach; ?>
        </div>
    </div>
</footer>

<script src="assets/js/lazyload.min.js" charset="utf-8"></script>
<script src="assets/js/jquery.min.js" charset="utf-8"></script>
<script src="assets/js/script.js" charset="utf-8"></script>
</body>
</html>
