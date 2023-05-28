<?php
/**
 * Homepage Settings
 *
 * @package WP Newspaper
 */

add_action( 'customize_register', 'wp_newspaper_customize_register_theme_options_panel' );

function wp_newspaper_customize_register_theme_options_panel( $wp_customize ) {
	$wp_customize->add_panel( 'wp_newspaper_theme_options_panel', array(
	    'title'       => esc_html__( 'Theme Options', 'wp-newspaper' ),
	    'priority' => 5
	) );
}