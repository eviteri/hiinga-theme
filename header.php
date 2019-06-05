<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <!--Fonts Imports-->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <div class="ev-site-loding-wrapper">
            <div class="ev-site-loading-container">
                    <div></div><div></div><div></div><div></div>
            </div>
        </div>

        <header class="ev-header-site-mobile">
            <div class="ev-burger-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/svg//burger.svg" width="31" height="22" />
            </div>
            <div class="ev-logo-wrapper">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/header-logo.svg" width="170" height="48" />
                </a>
            </div>
            <div class="ev-site-navigation">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container'     => 'nav',
                            'container_class'    => 'ev-header-navigation',
                            'depth'          => 1,
                        )
                    );
                ?>
            </div>
            <div class="ev-mobile-logo-wrapper">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/header-mobile-logo.svg" width="34" height="32.66" />
                </a>
            </div>
            <div class="ev-donote-button">
                <div class="ev-donate-wrapper ev-btn-link" href="donate.php">
                    <div class="ev-donate-caption">Donate</div>
                </div>
            </div>
        </header>