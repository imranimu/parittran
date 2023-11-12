<?php
/**
 * Parittran functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Parittran
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '2.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _parittran_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Parittran, use a find and replace
		* to change '_parittran' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( '_parittran', get_template_directory() . '/languages' );

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
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', '_parittran' ),
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
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'_parittran_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', '_parittran_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _parittran_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_parittran_content_width', 640 );
}
add_action( 'after_setup_theme', '_parittran_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _parittran_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_parittran' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_parittran' ),
			'before_widget' => '<section id="%1$s" class="sidebar-widget widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', '_parittran_widgets_init' );

/***
## submenu showing in responsive.
*/
/*class Child_Wrap extends Walker_Nav_Menu
{
   function start_lvl(&$output, $depth=0, $args = array())
   {
       $indent = str_repeat("\t", $depth);
       $output .= "\n$indent<div class=\"mobnav-subarrow icon-arrow-down-6\"></div><ul class=\"sub-menu\">\n";
   }
}*/

/**
 * Enqueue scripts and styles.
 */
function _parittran_scripts() {	
	wp_enqueue_style( '_parittran-style', get_stylesheet_uri(), array(), _S_VERSION );
	/*
	CSS
	============================================= */
	wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/assets/css/font-awesome-all.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'jquery.fancybox.min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
	wp_enqueue_style( 'jquery.bootstrap-touchspin', get_template_directory_uri() . '/assets/css/jquery.bootstrap-touchspin.css' );
	wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css' );
	wp_enqueue_style( 'elpath', get_template_directory_uri() . '/assets/css/elpath.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	 
	
	wp_style_add_data( '_parittran-style', 'rtl', 'replace' );

	/*
	jQurey
	============================================= */	
	wp_enqueue_script( '_parittran-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), '20151215', true );
	wp_enqueue_script( 'popper.min', get_template_directory_uri() . "/assets/js/popper.min.js", array(), '20151215', true );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '20151215', true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . "/assets/js/owl.js", array(), '20151215', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . "/assets/js/wow.js", array(), '20151215', true );
	wp_enqueue_script( 'validation', get_template_directory_uri() . "/assets/js/validation.js", array(), '20151215', true );
	wp_enqueue_script( 'jquery.fancybox', get_template_directory_uri() . "/assets/js/jquery.fancybox.js", array(), '20151215', true );
	wp_enqueue_script( 'appear', get_template_directory_uri() . "/assets/js/appear.js", array(), '20151215', true );
	wp_enqueue_script( 'scrollbar', get_template_directory_uri() . "/assets/js/scrollbar.js", array(), '20151215', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . "/assets/js/isotope.js", array(), '20151215', true );
	wp_enqueue_script( 'jquery.nice-select.min', get_template_directory_uri() . "/assets/js/jquery.nice-select.min.js", array(), '20151215', true );
	wp_enqueue_script( 'parallax-scroll', get_template_directory_uri() . "/assets/js/parallax-scroll.js", array(), '20151215', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . "/assets/js/jquery-ui.js", array(), '20151215', true );
	wp_enqueue_script( 'nav-tool', get_template_directory_uri() . "/assets/js/nav-tool.js", array(), '20151215', true );
	wp_enqueue_script( 'jquery.bootstrap-touchspin', get_template_directory_uri() . "/assets/js/jquery.bootstrap-touchspin.js", array(), '20151215', true );
	wp_enqueue_script( 'bxslider', get_template_directory_uri() . "/assets/js/bxslider.js", array(), '20151215', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . "/assets/js/script.js", array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_parittran_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

//require get_template_directory() . '/inc/custom-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."... (<a href='" .get_permalink($post->ID) ." '>Read more</a>)";
    echo $excerpt;
}


function create_slider_post_type() {
	$labels = array(
	  'name' => 'Sliders',
	  'singular_name' => 'Slider',
	  'add_new' => 'Add New',
	  'add_new_item' => 'Add New Slider',
	  'edit_item' => 'Edit Slider',
	  'new_item' => 'New Slider',
	  'view_item' => 'View Slider',
	  'search_items' => 'Search Sliders',
	  'not_found' => 'No Sliders found',
	  'not_found_in_trash' => 'No Sliders found in Trash',
	  'parent_item_colon' => 'Parent Slider:',
	  'menu_name' => 'Sliders'
	);
  
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => false,
	  'description' => 'Sliders',
	  'supports' => array( 'title', 'thumbnail' ),
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'menu_position' => 5,
	  'show_in_admin_bar' => true,
	  'show_in_nav_menus' => true,
	  'can_export' => true,
	  'has_archive' => true,
	  'exclude_from_search' => false,
	  'publicly_queryable' => true,
	  'capability_type' => 'page',
	  'menu_icon' => 'dashicons-slides',
	);
  
	register_post_type( 'slider', $args );
}
  
add_action( 'init', 'create_slider_post_type' );


function create_team_member_post_type() {
    register_post_type( 'team_member',
        array(
            'labels' => array(
                'name' => __( 'Team Members' ),
                'singular_name' => __( 'Team Member' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team-member'),
            'supports' => array( 'title', 'editor', 'thumbnail' ),
        )
    );
}
add_action( 'init', 'create_team_member_post_type' );