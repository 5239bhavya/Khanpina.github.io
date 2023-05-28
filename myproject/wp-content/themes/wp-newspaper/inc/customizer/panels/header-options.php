<?php
/**
 * Header Settings
 *
 * @package WP Newspaper
 */

add_action( 'customize_register', 'wp_newspaper_customize_register_header_panel' );

function wp_newspaper_customize_register_header_panel( $wp_customize ) {
	$wp_customize->add_panel( 'wp_newspaper_header_panel', array(
	    'priority'    => 3,
	    'title'       => esc_html__( 'Header and Site Identity', 'wp-newspaper' ),
	) );
}