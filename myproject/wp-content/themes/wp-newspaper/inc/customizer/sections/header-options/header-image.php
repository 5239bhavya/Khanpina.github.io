<?php
/**
 * Header Image Settings
 *
 * @package WP Newspaper
 */


add_action( 'customize_register', 'wp_newspaper_change_header_image_panel' );

function wp_newspaper_change_header_image_panel( $wp_customize)  {
    $wp_customize->get_section( 'header_image' )->priority = 2;
    $wp_customize->get_section( 'header_image' )->panel = 'wp_newspaper_header_panel';

}

add_action( 'customize_register', 'wp_newspaper_customize_header_background_color' );
function wp_newspaper_customize_header_background_color( $wp_customize ) {

    $wp_customize->add_setting( 'header_background_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'wp_newspaper_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
        'label'      => esc_html__( 'Header Background Color', 'wp-newspaper' ),
        'section'    => 'header_image',
        'settings'   => 'header_background_color',
    ) ) );

    $wp_customize->add_setting( 'header_background_color_opacity', array(
        'default'           => 0,
        'sanitize_callback' => 'wp_newspaper_sanitize_number_range'
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Slider_Control( $wp_customize, 'header_background_color_opacity', array(
        'section' => 'header_image',
        'settings' => 'header_background_color_opacity',
        'label'   => esc_html__( 'Background Color Opacity', 'wp-newspaper' ),
        'choices'     => array(
            'min'   => 0,
            'max'   => 1,
            'step'  => 0.1,
        )
    ) ) );

}