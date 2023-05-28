<?php

/**
 * Menu Fonts Settings
 *
 * @package WP Newspaper
 */

add_action( 'customize_register', 'wp_newspaper_customize_register_menu_fonts' );
function wp_newspaper_customize_register_menu_fonts( $wp_customize ) {

    $wp_customize->add_section( 'wp_newspaper_menu_fonts_section', array(
        'title'          => esc_html__( 'Menu Fonts', 'wp-newspaper' ),
        'panel'          => 'wp_newspaper_colors_fonts_panel',
    ) );
}


add_action( 'customize_register', 'wp_newspaper_customize_menu_fonts_colors' );
function wp_newspaper_customize_menu_fonts_colors( $wp_customize ) {


    $wp_customize->add_setting( 'top_bar_background_color', array(
        'transport'   => 'postMessage',
        'default'     => '#353844',
        'sanitize_callback' => 'wp_newspaper_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_background_color', array(
        'label'      => esc_html__( 'Top Bar Background Color', 'wp-newspaper' ),
        'section'    => 'wp_newspaper_menu_fonts_section',
        'settings'   => 'top_bar_background_color',
    ) ) );

    $wp_customize->add_setting( 'menu_font_color', array(
        'default'     => '#fff',
        'transport'   => 'postMessage',
        'sanitize_callback' => 'wp_newspaper_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_font_color', array(
        'label'      => esc_html__( 'Menu Color', 'wp-newspaper' ),
        'section'    => 'wp_newspaper_menu_fonts_section',
        'settings'   => 'menu_font_color',
    ) ) );

    $wp_customize->add_setting( 'menu_background_color', array(
        'default'     => '#0c9499',
        'transport'   => 'postMessage',
        'sanitize_callback' => 'wp_newspaper_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_background_color', array(
        'label'      => esc_html__( 'Menu Background Color', 'wp-newspaper' ),
        'section'    => 'wp_newspaper_menu_fonts_section',
        'settings'   => 'menu_background_color',
    ) ) );

    $wp_customize->add_setting( 'menu_font_family', array(
        'default'     => 'Poppins',
        'sanitize_callback' => 'wp_newspaper_sanitize_google_fonts',
    ) );

    $wp_customize->add_control( 'menu_font_family', array(
        'settings'    => 'menu_font_family',
        'label'       =>  esc_html__( 'Menu Font Family', 'wp-newspaper' ),
        'section'     => 'wp_newspaper_menu_fonts_section',
        'type'        => 'select',
        'choices'     => wp_newspaper_google_fonts(),
    ) );

    $wp_customize->add_setting( 'menu_font_size', array(
      'default'     => '14px',
      'sanitize_callback' => 'wp_newspaper_sanitize_select',
    ) );
    
    $wp_customize->add_control( 'menu_font_size', array(
        'settings'    => 'menu_font_size',
        'label'       =>  esc_html__( 'Menu Font Size', 'wp-newspaper' ),
        'section'     => 'wp_newspaper_menu_fonts_section',
        'type'        => 'select',
        'choices'     =>  array(             
                        '13px' => '13px',
                        '14px' => '14px',
                        '15px' => '15px',
                        '16px' => '16px',
                        '17px' => '17px',
                        '18px' => '18px',
                    ),
      ) );

    $wp_customize->add_setting( 'menu_font_weight', array(
        'default'           => 500,
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Slider_Control( $wp_customize, 'menu_font_weight', array(
        'section' => 'wp_newspaper_menu_fonts_section',
        'settings' => 'menu_font_weight',
        'label'   => esc_html__( 'Menu Font Weight', 'wp-newspaper' ),
        'choices'     => array(
            'min'  => 100,
            'max'  => 900,
            'step' => 100,
        ),
    ) ) );

}