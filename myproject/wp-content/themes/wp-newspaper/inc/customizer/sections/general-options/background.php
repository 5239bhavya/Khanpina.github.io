<?php
/**
 * Background Settings
 *
 * @package WP Newspaper
 */


add_action( 'customize_register', 'wp_newspaper_change_background_panel' );

function wp_newspaper_change_background_panel( $wp_customize)  {
    $wp_customize->get_section( 'background_image' )->priority = 6;
    $wp_customize->get_section( 'background_image' )->panel = 'wp_newspaper_general_panel';
}