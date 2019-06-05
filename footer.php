<footer>
    <section class="ev-footer-top">
        <div class="ev-footer-top-1">
            <img class="ev-footer-logo" src="<?php echo get_template_directory_uri(); ?>/svg/footer-logo.svg" />
            <img class="ev-footer-logo-mobile" src="<?php echo get_template_directory_uri(); ?>/svg/header-logo.svg" />
        </div>
        <div class="ev-footer-top-2">
            <div class="ev-footer-top-header">Our Work</div>
            <div class="ev-footer-top-body">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer1',
                            'container'     => '',
                            'container_class'    => '',
                            'depth'          => 1,
                        )
                    );
                ?>
            </div>
        </div>
        <div class="ev-footer-top-3">
            <div class="ev-footer-top-header">About Us</div>
            <div class="ev-footer-top-body">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer2',
                            'container'     => '',
                            'container_class'    => '',
                            'depth'          => 1,
                        )
                    );
                ?>
            </div>
        </div>
        <div class="ev-footer-top-4">
            <div class="ev-footer-top-header">How to Help</div>
            <div class="ev-footer-top-body">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer3',
                            'container'     => '',
                            'container_class'    => '',
                            'depth'          => 1,
                        )
                    );
                ?>
            </div>
        </div>
        <div class="ev-footer-top-5">
            <div class="ev-footer-top-5-top">
                <div class="ev-footer-top-header">Follow Us</div>
                <div class="ev-footer-top-social-wrapper">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/svg/social/linkedin.svg" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/svg/social/twitter.svg" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/svg/social/instagram.svg" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/svg/social/facebook.svg" /></a>
                </div>
            </div>
            <div class="ev-footer-top-5-bottom">
                <div class="ev-footer-form-header">Sign up for our newsletter</div>
                <div class="ev-footer-form-wrapper">
                    <form id="subscribe_form" action="" method="Post">
                        <div class="ev-column-2">
                            <input id="user_fname" type="text" value="" name="fname" placeholder="FIRST NAME"
                                required />
                            <input id="user_lname" type="text" value="" name="lname" placeholder="LAST NAME" required />
                        </div>
                        <div class="ev-column-1">
                            <input id="user_email" type="email" value="" name="email" placeholder="EMAIL@WEB.COM" />
                        </div>
                        <div class="ev-column-1">
                            <button type="submit" class="ev-subscribe-button">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="ev-footer-bottom">
        <div class="ev-fotter-bottom-left">
            Hiinga is a 501c3. All donations are tax deductible in full or in part.
        </div>
        <div class="ev-fotter-bottom-right">
            © 2019 Hiinga | Privacy Policy | Terms & conditions | Site by burke
        </div>

    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>