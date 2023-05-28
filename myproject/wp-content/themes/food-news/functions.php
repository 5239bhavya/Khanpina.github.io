<?php

if ( ! defined( 'FOOD_NEWS_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'FOOD_NEWS_VERSION', '1.0.2' );
}

function food_news_enqueue_styles() {

    $parent_style = 'wp-newspaper-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'food-news', get_stylesheet_directory_uri() . '/style.css', array( 'bootstrap', $parent_style ), wp_get_theme()->get('Version') );


}
add_action( 'wp_enqueue_scripts', 'food_news_enqueue_styles' );


require get_stylesheet_directory() . '/inc/custom-controls/custom-control.php';
require get_stylesheet_directory() . '/inc/customizer/customizer.php';


/**
  * Set default settings when switching themes
  */
function food_news_customizer_default_settings() {
    set_theme_mod( 'site_title_color_option', '#ffffff' );
    set_theme_mod( 'site_identity_font_family', 'Oleo Script' );
    set_theme_mod( 'link_color', '#e5a81b' );
    set_theme_mod( 'top_bar_background_color', '#24262d' );
    set_theme_mod( 'header_image_height', 25 );
    set_theme_mod( 'button_color', '#f0aa11' );
    set_theme_mod( 'menu_background_color', '#e5a81b' );
    set_theme_mod( 'blog_colors', '#333' );
   
}
add_action( 'after_switch_theme', 'food_news_customizer_default_settings' );

require get_stylesheet_directory() . '/inc/customizer/dynamic-css.php';