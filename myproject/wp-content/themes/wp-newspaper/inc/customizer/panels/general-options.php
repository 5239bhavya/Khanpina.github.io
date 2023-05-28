<?php
/**
 * General Settings
 *
 * @package WP Newspaper
 */

add_action( 'customize_register', 'wp_newspaper_customize_register_general_panel' );

function wp_newspaper_customize_register_general_panel( $wp_customize ) {
	$wp_customize->add_panel( 'wp_newspaper_general_panel', array(
	    'title'       => esc_html__( 'General Options', 'wp-newspaper' ),
	    'priority' => 3
	) );
}