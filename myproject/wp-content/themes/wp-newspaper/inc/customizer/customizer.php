<?php
/**
 * Wp Magazine Pro Theme Customizer
 *
 * @package WP Newspaper
 */

$panels   = array( 'header-options', 'colors-fonts', 'general-options', 'theme-options' );

add_action( 'customize_register', 'wp_newspaper_change_homepage_settings_options' );
function wp_newspaper_change_homepage_settings_options( $wp_customize )  {

	$wp_customize->get_section( 'title_tagline' )->priority = 12;
	$wp_customize->get_section( 'static_front_page' )->priority = 13;
}

$header_sections = array( 'header-image', 'theme-header', 'site-identity' );
$colors_fonts = array( 'body-fonts', 'menu-fonts', 'news-heading', 'heading-tags' );
$general_sections = array( 'container', 'image-border', 'pagination', 'social-media', 'background', 'readmore' );
$theme_sections = array( 'featured', 'pages' );


require get_template_directory() . '/inc/customizer/sections/upgrade-to-pro.php';


if( ! empty( $panels ) ) {
	foreach( $panels as $panel ){
	    require get_template_directory() . '/inc/customizer/panels/' . $panel . '.php';
	}
}

if( ! empty( $header_sections ) ) {
    foreach( $header_sections as $section ) {
        require get_template_directory() . '/inc/customizer/sections/header-options/' . $section . '.php';
    }
}


if( ! empty( $colors_fonts ) ) {
	foreach( $colors_fonts as $section ){
	    require get_template_directory() . '/inc/customizer/sections/colors-fonts/' . $section . '.php';
	}
}


if( ! empty( $general_sections ) ) {
	foreach( $general_sections as $section ) {
	    require get_template_directory() . '/inc/customizer/sections/general-options/' . $section . '.php';
	}
}


require get_template_directory() . '/inc/customizer/sections/blog-posts.php';


/**
 * Enqueue the customizer stylesheet.
 */
function wp_newspaper_customizer_stylesheet() {

	wp_register_style( 'wp-newspaper-customizer-css', get_template_directory_uri() . '/css/customizer.css', NULL, '1.1.0', 'all' );
	wp_enqueue_style( 'wp-newspaper-customizer-css' );

}
add_action( 'customize_controls_print_styles', 'wp_newspaper_customizer_stylesheet' );


/**
 * Enqueue the customizer javascript.
 */
function wp_newspaper_customize_preview_js() {
 	wp_enqueue_script( 'wp-newspaper-customizer-preview', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'wp_newspaper_customize_preview_js' );


/**
 * Sanitization Functions
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';