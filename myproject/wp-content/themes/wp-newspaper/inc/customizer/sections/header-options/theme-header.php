<?php
/**
 * Header Layout Settings
 *
 * @package WP Newspaper
 */

add_action( 'customize_register', 'wp_newspaper_theme_header_layout_section' );

function wp_newspaper_theme_header_layout_section( $wp_customize ) {

    $wp_customize->add_section( 'wp_newspaper_theme_header_layout_section', array(
        'title'          => esc_html__( 'Theme Header Options', 'wp-newspaper' ),
        'panel'          => 'wp_newspaper_header_panel',
        'priority'       => 3,
        'capability'     => 'edit_theme_options',
    ) );


    $wp_customize->add_setting( 'wp_newspaper_header_sticky_menu_option', array(
      'sanitize_callback'     =>  'wp_newspaper_sanitize_checkbox',
      'default'               =>  true
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Toggle_Control( $wp_customize, 'wp_newspaper_header_sticky_menu_option', array(
      'label' => esc_html__( 'Enable Sticky Menu?','wp-newspaper' ),
      'section' => 'wp_newspaper_theme_header_layout_section',
      'settings' => 'wp_newspaper_header_sticky_menu_option',
      'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'header_search_display_option', array(
        'sanitize_callback'     =>  'wp_newspaper_sanitize_checkbox',
        'default'               =>  true
    ) );
            
    $wp_customize->add_control( new Wp_Newspaper_Toggle_Control( $wp_customize, 'header_search_display_option', array(
        'label' => esc_html__( 'Hide / Show Header Search','wp-newspaper' ),
        'section' => 'wp_newspaper_theme_header_layout_section',
        'settings' => 'header_search_display_option',
        'type'=> 'toggle',
    ) ) );

}