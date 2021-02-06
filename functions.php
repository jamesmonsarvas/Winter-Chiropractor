<?php
/**
* WinterChiropractor's functions and definitions
*
* @package WinterChiropractor
* @since WinterChiropractor 1.0
*/

/**
* First, let's set the maximum content width based on the theme's design and stylesheet.
* This will limit the width of all uploaded images and embeds.
*/
if ( ! isset( $content_width ) )
$content_width = 800; /* pixels */

if ( ! function_exists( 'winterchiropractor_setup' ) ) :
    /**
    * Sets up theme defaults and registers support for various WordPress features.
    *
    * Note that this function is hooked into the after_setup_theme hook, which runs
    * before the init hook. The init hook is too late for some features, such as indicating
    * support post thumbnails.
    */
    function winterchiropractor_setup() {
        
        /**
        * Enable support for post thumbnails and featured images.
        */
        add_theme_support( 'post-thumbnails' );
        
        /**
        * Add support for two custom navigation menus.
        */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'winterchiropractor' ),
            'secondary' => __('Secondary Menu', 'winterchiropractor' )
        ) );
        
        /**
        * Enable support for the following post formats:
        * aside, gallery, quote, image, and video
        */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

        /**
        * Enable support for the custom logo in Customizer
        */
        add_theme_support( 'custom-logo' );
    }
endif; // winterchiropractor_setup
add_action( 'after_setup_theme', 'winterchiropractor_setup' );

function winterchiropractor_widget_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'winterchiropractor' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column 1', 'winterchiropractor' ),
        'id' => 'footer-column-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column 2', 'winterchiropractor' ),
        'id' => 'footer-column-2',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column 3', 'winterchiropractor' ),
        'id' => 'footer-column-3',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Column 4', 'winterchiropractor' ),
        'id' => 'footer-column-4',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'winterchiropractor_widget_init' );

/**
 * Enqueue all external Styles and Scripts
 */

function winterchiropractor_scripts() {
    $ver = time();
    // Styles
    wp_enqueue_style( 'winterchiropractor-style', get_stylesheet_uri(), array(), $ver);
    wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/css/all.min.css', array(), $ver);
    wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), $ver);

    // Scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), $ver, true );
    wp_enqueue_script( 'fontawesome-js', get_template_directory_uri() . '/assets/js/all.min.js', array(), $ver, true );
    wp_enqueue_script( 'slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), $ver, true );
    wp_enqueue_script( 'scrollreveal', 'https://unpkg.com/scrollreveal', array(), $ver, true );
}
add_action( 'wp_enqueue_scripts', 'winterchiropractor_scripts' );

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );