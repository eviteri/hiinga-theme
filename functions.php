<?php

if ( ! function_exists( 'hiinga_setup' ) ) :
    function hiinga_setup(){

        /*
		 * Make theme available for translation.
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
		 * If you're building a theme based on Twenty Sixteen, use a find and replace
		 * to change 'twentysixteen' to the name of your theme in all the template files
		 */
        load_theme_textdomain( 'hiinga' );
        
        // Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

        /*
		 * Enable support for custom logo.
		 *
		 *  @since Twenty Sixteen 1.2
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 240,
				'width'       => 240,
				'flex-height' => true,
			)
		);

        // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'hiinga' ),
				'footer1'  => __( 'Footer Our Work', 'hiinga' ),
				'footer2'  => __( 'Footer About Us', 'hiinga' ),
				'footer3'  => __( 'Footer How to Help', 'hiinga' ),
			)
        );
        
        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat',
			)
		);

    }
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'hiinga_setup' );

function hiinga_enqueue_styles(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style(
		'header',
		get_template_directory_uri() . '/css/header.css',
		array('style'),
		'1.0.0',
		'all'
	);

	wp_enqueue_style(
		'footer',
		get_template_directory_uri() . '/css/footer.css',
		array('style', 'header'),
		'1.0.0',
		'all'
	);

	wp_enqueue_style(
		'animations',
		get_template_directory_uri() . '/css/animations.css',
		array('style', 'header', 'footer'),
		'1.0.0',
		'all'
	);

	if(is_front_page()){
		wp_enqueue_style(
			'home',
			get_template_directory_uri() . '/css/home.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}

	if(is_page_template('our-work-template.php')){
		wp_enqueue_style(
			'ourwork',
			get_template_directory_uri() . '/css/our-work.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}

	if(is_page_template('about-template.php')){
		wp_enqueue_style(
			'about-us',
			get_template_directory_uri() . '/css/about.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}

	if(is_page_template('take-action-template.php')){
		wp_enqueue_style(
			'take-action',
			get_template_directory_uri() . '/css/take-action.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}

	if(is_page_template('contact-template.php')){
		wp_enqueue_style(
			'contac-us',
			get_template_directory_uri() . '/css/contact.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}

	if(is_page_template('donate-template.php')){
		wp_enqueue_style(
			'donate',
			get_template_directory_uri() . '/css/donate.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}

	if(is_page_template('people-template.php')){
		wp_enqueue_style(
			'people',
			get_template_directory_uri() . '/css/people.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}

	if(is_home()){
		wp_enqueue_style(
			'blog-page',
			get_template_directory_uri() . '/css/blog.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}

	if(is_single()){
		wp_enqueue_style(
			'single-post',
			get_template_directory_uri() . '/css/single.css',
			array('style', 'header', 'footer'), 
			'1.0.0',
			'all'
		);
	}


}

function hiinga_enqueue_scripts(){
	wp_enqueue_script(
		'global',
		get_template_directory_uri() . '/js/global.js',
		array(),
		'1.0.0',
		true
	);

	if(is_front_page()){
		wp_enqueue_script(
			'home',
			get_template_directory_uri() . '/js/home.js',
			array('global'),
			'1.0.0',
			true
		);
	}

	if(is_page_template('our-work-template.php')){
		wp_enqueue_script(
			'ourwork',
			get_template_directory_uri() . '/js/our-work.js',
			array('global'),
			'1.0.0',
			true
		);
	}

	if(is_page_template('about-template.php')){
		wp_enqueue_script(
			'about',
			get_template_directory_uri() . '/js/about-us.js',
			array('global'),
			'1.0.0',
			true
		);
	}

	if(is_page_template('contact-template.php')){
		wp_enqueue_script(
			'contact-us',
			get_template_directory_uri() . '/js/contact.js',
			array('global'),
			'1.0.0',
			true
		);
	}

	if(is_page_template('donate-template.php')){
		wp_enqueue_script(
			'donate',
			get_template_directory_uri() . '/js/donate.js',
			array('global'),
			'1.0.0',
			true
		);
	}

	if(is_home()){
		wp_enqueue_script(
			'blog-page',
			get_template_directory_uri() . '/js/blog.js',
			array('global'),
			'1.0.0',
			true
		);
	}

	if(is_single()){
		wp_enqueue_script(
			'single-post',
			get_template_directory_uri() . '/js/single.js',
			array('global'),
			'1.0.0',
			true
		);
	}

}
add_action( 'wp_enqueue_scripts', 'hiinga_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'hiinga_enqueue_scripts' );

// ADD CUSTOM POST TYPE
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'entrepreneurs',
		array(
			'labels' => array(
			'name' => __( 'Entrepreneurs' ),
			'singular_name' => __( 'Entrepreneur' )
		),
		'public' => true,
		'menu_position' => 4,
		)
	);

	register_post_type( 'directors',
		array(
			'labels' => array(
			'name' => __( 'Directors' ),
			'singular_name' => __( 'Director' )
		),
		'public' => true,
		'menu_position' => 5,
		)
	);

	register_post_type( 'board-members',
		array(
			'labels' => array(
			'name' => __( 'Board Members' ),
			'singular_name' => __( 'Board Member' )
		),
		'public' => true,
		'menu_position' => 6,
		)
	);

	register_post_type( 'advisors',
		array(
			'labels' => array(
			'name' => __( 'advisors' ),
			'singular_name' => __( 'advisors' )
		),
		'public' => true,
		'menu_position' => 7,
		)
	);
}

?>

