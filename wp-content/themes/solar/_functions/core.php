<?php

/* Based on Bones by Eddie Machado URL: http://themble.com/bones/ */

/* ====================================================
    Firing initial functions at the start
==================================================== */
add_action('after_setup_theme','spades_ahoy', 15);

function spades_ahoy() {

    // launching operation cleanup
    add_action('init', 'spades_head_cleanup');

    // remove WP version from RSS
    add_filter('the_generator', 'spades_rss_version');

    // remove pesky injected css for recent comments widget
    add_filter( 'wp_head', 'spades_remove_wp_widget_recent_comments_style', 1 );

    // clean up comment styles in the head
    add_action('wp_head', 'spades_remove_recent_comments_style', 1);

    // enqueue base scripts and styles
    add_action('wp_enqueue_scripts', 'spades_scripts_and_styles', 999);

    // launching this stuff after theme setup
    spades_theme_support();

    // cleaning up random code around images
    add_filter('the_content', 'spades_filter_ptags_on_images');


} /* end spades ahoy */


/* ====================================================
    SCRIPTS & ENQUEUEING
==================================================== */
// loading modernizr and jquery, and reply script
function spades_scripts_and_styles() {
  if (!is_admin()) {

    // register styles
    wp_register_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,700|Open+Sans+Condensed:700', array(), '', 'all' );

    // wp_register_style( 'spades-min-css', get_stylesheet_directory_uri() . '/style-min.css', array(), '', 'all' );

    wp_register_style( 'ilightbox-css', get_stylesheet_directory_uri() . '/_js/ilightbox/css/ilightbox.css', array(), '', 'all' );
    wp_register_style( 'spades-css', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
    wp_register_style( 'spades-responsive', get_stylesheet_directory_uri() . '/responsive.css', array(), '', 'all' );


    // enqueue styles
    wp_enqueue_style( 'google-fonts' );
    // wp_enqueue_style( 'spades-min-css' );

    wp_enqueue_style( 'spades-css' );
    wp_enqueue_style( 'ilightbox-css' );
    wp_enqueue_style( 'spades-responsive' );



    // register scripts
    wp_register_script( 'mousewheel', get_stylesheet_directory_uri() . '/_js/jquery.mousewheel.min.js', array( 'jquery' ), '', false );
    wp_register_script( 'requestAnimationFrame', get_stylesheet_directory_uri() . '/_js/ilightbox/js/jquery.requestAnimationFrame.js', array( 'jquery' ), '', true );
    wp_register_script( 'ilightbox', get_stylesheet_directory_uri() . '/_js/ilightbox/js/ilightbox.packed.js', array( 'jquery' ), '', false );
    wp_register_script( 'enquire', get_stylesheet_directory_uri() . '/_js/enquire.min.js', array( 'jquery' ), '', false );
    wp_register_script( 'laziestloader', get_stylesheet_directory_uri() . '/_js/jquery.laziestloader.min.js', array( 'jquery' ), '', false );
    wp_register_script( 'waypoints', get_stylesheet_directory_uri() . '/_js/jquery.waypoints.min.js', array( 'jquery' ), '', false );
    wp_register_script( 'slick', get_stylesheet_directory_uri() . '/_js/slick/slick.min.js', array( 'jquery' ), '', false );
    wp_register_script( 'fitvids', get_stylesheet_directory_uri() . '/_js/jquery.fitvids.js', array( 'jquery' ), '', false );
    wp_register_script( 'spades-js', get_stylesheet_directory_uri() . '/_js/scripts.js', array( 'jquery' ), '', false );



    wp_register_script( 'imagesloaded-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js', array( 'jquery' ), '', false );

    // wp_register_script( 'spades-min-js', get_stylesheet_directory_uri() . '/_js/scripts-min.js', array( 'jquery' ), '', false );




    // enqueue scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'imagesloaded-js' );

    wp_enqueue_script( 'mousewheel' );

    wp_enqueue_script( 'requestAnimationFrame' );
    wp_enqueue_script( 'ilightbox' );
    wp_enqueue_script( 'enquire' );

    wp_enqueue_script( 'laziestloader' );
    wp_enqueue_script( 'waypoints' );
    wp_enqueue_script( 'slick' );

    wp_enqueue_script( 'fitvids' );
    wp_enqueue_script( 'spades-js' );


    // wp_enqueue_script( 'spades-min-js' );

  }
}


/* ====================================================
    THEME SUPPORT
==================================================== */
// Adding WP 3+ Functions & Theme Support
function spades_theme_support() {

	// wp thumbnails (sizes handled in functions.php)
	add_theme_support('post-thumbnails');

	//add excerpt to pages
	// add_post_type_support( 'page', 'excerpt' );

	// wp menus
	add_theme_support( 'menus' );

	// Menu MAIN
	register_nav_menu('MenuLeft', 'Relativos à fome!');
    register_nav_menu('MenuRight', 'Informação pura');

} /* end Theme Support */



/* ====================================================
    WP_HEAD GOODNESS
    The default wordpress head is a mess. Let's clean it up by removing all the junk we don't need.
==================================================== */
function spades_head_cleanup() {
	// category feeds
	remove_action( 'wp_head', 'feed_links_extra', 3 );

    // post and comment feeds
	remove_action( 'wp_head', 'feed_links', 2 );

    // EditURI link
	remove_action( 'wp_head', 'rsd_link' );

    // windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );

    // index link
	remove_action( 'wp_head', 'index_rel_link' );

    // previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

    // start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

    // links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

    // WP version
	remove_action( 'wp_head', 'wp_generator' );

    // remove WP version from css
	add_filter( 'style_loader_src', 'spades_remove_wp_ver_css_js', 9999 );

    // remove Wp version from scripts
	add_filter( 'script_loader_src', 'spades_remove_wp_ver_css_js', 9999 );

}


/* ====================================================
    remove WP version from RSS
==================================================== */
function spades_rss_version() { return ''; }


/* ====================================================
    remove WP version from scripts
==================================================== */
function spades_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}


/* ====================================================
    remove injected CSS for recent comments widget
==================================================== */
function spades_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}


/* ====================================================
    remove injected CSS from recent comments widget
==================================================== */
function spades_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}


/* ====================================================
    remove injected CSS from gallery
==================================================== */
function spades_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}


/* ====================================================
    RANDOM CLEANUP ITEMS
==================================================== */
// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function spades_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

?>
