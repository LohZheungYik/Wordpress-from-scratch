<?php
//require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function load_stylesheets() {

    /* ALWAYS PUT BOOTSTRAP BEFORE OWN STYLESHEET TO PREVENT BOOTSTRAP FROM OVERWRITING OTHERS */

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style( 'bootstrap' );

    wp_register_style('magnific', get_template_directory_uri() . '/bootstrap/css/magnific-popup.css', array(), false, 'all' );
		wp_enqueue_style('magnific');

    wp_register_style( 'stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all' );
    wp_enqueue_style( 'stylesheet' );

}

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

function load_js() {

    wp_enqueue_script( 'jquery' );

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', 'jquery', false, true );
    wp_enqueue_script( 'bootstrap' );

    wp_register_script('magnific', get_template_directory_uri() . '/bootstrap/js/jquery.magnific-popup.min.js', 'jquery', false, true);
		wp_enqueue_script('magnific');

    wp_register_script( 'custom', get_template_directory_uri() . '/js/scripts.js', 'jquery', false, true );
    wp_enqueue_script( 'custom' );

}
add_action( 'wp_enqueue_scripts', 'load_js' );

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//require_once get_template_directory() . '/wp-content/plugins/song_widget/song_widget.php';

function exclude_category($query) {
    if ( $query->is_home() ) {
    $query->set('cat', '-7');
    }
    return $query;
    }
    add_filter('pre_get_posts', 'exclude_category');