<?php
/**
 * Colors and Fonts Settings
 *
 * @package WP Newspaper
 */

add_action( 'customize_register', 'wp_newspaper_customize_register_colors_fonts_panel' );

function wp_newspaper_customize_register_colors_fonts_panel( $wp_customize ) {
	$wp_customize->remove_section( 'colors' );

	$wp_customize->add_panel( 'wp_newspaper_colors_fonts_panel', array(
	    'title'       => esc_html__( 'Colors and Fonts', 'wp-newspaper' ),
	    'priority' => 4
	) );
}