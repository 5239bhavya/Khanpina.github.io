<?php
/**
 * Site Identity Settings
 *
 * @package WP Newspaper
 */


add_action( 'customize_register', 'wp_newspaper_change_site_identity_panel' );

function wp_newspaper_change_site_identity_panel( $wp_customize)  {
    $wp_customize->get_section( 'title_tagline' )->priority = 1;
    $wp_customize->get_section( 'title_tagline' )->panel = 'wp_newspaper_header_panel';
    $wp_customize->get_section( 'title_tagline' )->title = esc_html__( 'Logo and Site Identity', 'wp-newspaper' );

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.site-title',
    ) );

    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
    ) );
}



add_action( 'customize_register', 'wp_newspaper_site_identity_settings' );

function wp_newspaper_site_identity_settings( $wp_customize ) {

    $wp_customize->add_setting( 'site_title_color_option', array(
        'capability'  => 'edit_theme_options',
        'default'     => '#0c9499',
        'transport' => 'postMessage',
        'sanitize_callback' => 'wp_newspaper_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_color_option', array(
        'label'      => esc_html__( 'Site Title Color', 'wp-newspaper' ),
        'section'    => 'title_tagline',
        'settings'   => 'site_title_color_option',
    ) ) );

    $wp_customize->add_setting( 'site_tagline_color', array(
        'default'     => '#97a6b2',
        'sanitize_callback' => 'wp_newspaper_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_tagline_color', array(
        'label'      => esc_html__( 'Site Tagline Color', 'wp-newspaper' ),
        'section'    => 'title_tagline',
        'settings'   => 'site_tagline_color',
    ) ) );

	$wp_customize->add_setting( 'wp_newspaper_logo_size', array(
        'default'           => 31,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Slider_Control( $wp_customize, 'wp_newspaper_logo_size', array(
        'section' => 'title_tagline',
        'settings' => 'wp_newspaper_logo_size',
        'label'   => esc_html__( 'Logo Size', 'wp-newspaper' ),
        'choices'     => array(
            'min'   => 15,
            'max'   => 100,
            'step'  => 1,
        )
    ) ) );

    $wp_customize->add_setting( 'site_identity_font_family', array(
        'transport' => 'postMessage',
        'sanitize_callback' => 'wp_newspaper_sanitize_google_fonts',
        'default'     => 'Montserrat Alternates',
    ) );

    $wp_customize->add_control( 'site_identity_font_family', array(
        'settings'    => 'site_identity_font_family',
        'label'       =>  esc_html__( 'Site Identity Font Family', 'wp-newspaper' ),
        'section'     => 'title_tagline',
        'type'        => 'select',
        'choices'     => wp_newspaper_google_fonts(),
    ) );
    

    $wp_customize->add_setting( 'header_image_height', array(
        'default'           => 25,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Slider_Control( $wp_customize, 'header_image_height', array(
        'section' => 'title_tagline',
        'settings' => 'header_image_height',
        'label'   => esc_html__( 'Header Image Height', 'wp-newspaper' ),
        'choices'     => array(
            'min'   => 15,
            'max'   => 200,
            'step'  => 1,
        )
    ) ) );
    
}