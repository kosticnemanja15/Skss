<?php

/**
 * WP_Ogitive functions and definitions
 *
 * @package WP_Ogitive
 */
if (!function_exists('wpog_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function wpog_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on WP_Ogitive, use a find and replace
         * to change 'wpog' to the name of your theme in all the template files
         */
        load_theme_textdomain('wpog', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');


        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'wpog'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        //add_theme_support('html5', array(
        //    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        //));

    }

endif; // wpog_setup
add_action('after_setup_theme', 'wpog_setup');


function wpog_scripts() {

    wp_enqueue_style( 'wpog-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'wpog-reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'wpog-slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'wpog-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'wpog-sidr-dark', get_template_directory_uri() . '/assets/css/jquery.sidr.dark.min.css' );  
    wp_enqueue_style( 'wpog-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    // wp_enqueue_style( 'wpog-defaultcss', get_template_directory_uri() . '/assets/css/default.css' );
    //wp_enqueue_style( 'wpog-uikitcss', get_template_directory_uri() . '/assets/css/uikit.min.css' );
      

    wp_enqueue_style('wpog-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
   
    wp_enqueue_style( 'wpog-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/responsive.css') );
    wp_enqueue_style( 'wpog-customcss', get_template_directory_uri() . '/custom.css', array(), filemtime( get_stylesheet_directory() . '/custom.css') );

    wp_enqueue_script('wpog-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', '', '', true);
    //wp_enqueue_script('wpog-uikitjsicons', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', '', '', true);
    //wp_enqueue_script('wpog-uikitjs', get_template_directory_uri() . '/assets/js/uikit.min.js', '', '', true);    
    wp_enqueue_script('wpog-sidrjs', get_template_directory_uri() . '/assets/js/jquery.sidr.min.js', '', '', true);
    wp_enqueue_script('wpog-slickmin', get_template_directory_uri() . '/assets/js/slick.min.js', '', '', true);
    wp_enqueue_script('wpog-main', get_template_directory_uri() . '/assets/js/main.js', '', '', true);
    //wp_enqueue_script('wpog-scroll', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', '', '', true);
    //wp_enqueue_script('wpog-custom', get_template_directory_uri() .  '/assets/js/custom.js', array(), filemtime( get_stylesheet_directory() . '/assets/js/custom.js') );
    //wp_enqueue_script('wpog-countUP', get_template_directory_uri() . '/assets/js/countUp.js', '', '', true);


}
add_action('wp_enqueue_scripts', 'wpog_scripts');


/**
 * Google Fonts integration
 */

function child_styles() {
    if (!is_admin()) {

        // register styles
        wp_register_style('googlefont1', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&amp;subset=latin-ext', array(), false, 'all');
        wp_register_style('googlefont2', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&amp;subset=latin-ext', array(), false, 'all');
        // enqueue styles
        wp_enqueue_style('googlefont1');
        wp_enqueue_style('googlefont2');
    }
}

add_action('wp_enqueue_scripts', 'child_styles');


/* Aktivacija thumbnailova i velicine */
add_theme_support('post-thumbnails');
add_image_size( 'cat-thumb', 370, 260, true );


/* Excerpt Lenght */ 
function new_excerpt_length($length) {
    return 22;
}
add_filter('excerpt_length', 'new_excerpt_length');


/* Read More ending */
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Info</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );




/****************
 OTHER FUNCTIONS 
 ****************/


 /* Load Custom Post Types and Taxonomies */
 require get_template_directory() . '/inc/custom_post_types.php';
 require get_template_directory() . '/inc/custom_taxonomies.php';

  /* WordPress Fix Functions */
 require get_template_directory() . '/_functions/wpog_shortcodes.php';

 /* WordPress Fix Functions */
 require get_template_directory() . '/_functions/fix.php';

 /* ACF Options */
 require get_template_directory() . '/_functions/acf_json.php';
 require get_template_directory() . '/_functions/acf_themeoptions.php';

 /* Disable RSS feed */
 require get_template_directory() . '/_functions/disablerss.php';

 /* Enable filetypes upload */
 require get_template_directory() . '/_functions/filetypes.php';

 /* Youtube center iframe video */
 require get_template_directory() . '/_functions/youtube.php';

 /* WordPress Widgets */
//require get_template_directory() . '/_functions/widgets.php';

 /* Google Map API */
// require get_template_directory() . '/_functions/gmap.php';