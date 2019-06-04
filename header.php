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
                <img src="./svg//burger.svg" width="31" height="22" />
            </div>
            <div class="ev-logo-wrapper">
                <a href="index.php">
                    <img src="./svg/header-logo.svg" width="170" height="48" />
                </a>
            </div>
            <div class="ev-site-navigation">
                <nav class="ev-header-navigation">
                    <ul>
                        <li><a href="our-work.php">OUR WORK</a></li>
                        <li><a href="about-us.php">ABOUT US</a></li>
                        <li><a href="take-action.php">TAKE ACTION</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="blog.php">NEWS</a></li>
                    </ul>
                </nav>
            </div>
            <div class="ev-mobile-logo-wrapper">
                <a href="index.php">
                    <img src="./svg/header-mobile-logo.svg" width="34" height="32.66" />
                </a>
            </div>
            <div class="ev-donote-button">
                <div class="ev-donate-wrapper ev-btn-link" href="donate.php">
                    <div class="ev-donate-caption">Donate</div>
                </div>
            </div>
        </header>