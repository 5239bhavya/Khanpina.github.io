<?php

/**
 * News Heading Settings
 *
 * @package WP Newspaper
 */

add_action( 'customize_register', 'wp_newspaper_customize_register_news_heading_colors_fonts' );
function wp_newspaper_customize_register_news_heading_colors_fonts( $wp_customize ) {

    $wp_customize->add_section( 'wp_newspaper_news_heading_section', array(
        'title'          => esc_html__( 'News Heading', 'wp-newspaper' ),
        'panel'          => 'wp_newspaper_colors_fonts_panel',
    ) );
}

add_action( 'customize_register', 'wp_newspaper_customize_news_header_fonts_colors' );
function wp_newspaper_customize_news_header_fonts_colors( $wp_customize ) {

   
    $wp_customize->add_setting( 'blog_news_title_fonts_colors_label', array(
        'sanitize_callback' => 'wp_kses_post',
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Custom_Text( $wp_customize, 'blog_news_title_fonts_colors_label', array(
        'settings'    => 'blog_news_title_fonts_colors_label',
        'label'       =>  '<div class="customizer-custom-label">' . esc_html__( "Blog News Title", 'wp-newspaper' ) . '</div>',
        'section'     => 'wp_newspaper_news_heading_section',
        'type'        => 'customtext',
    ) ) );

    $wp_customize->add_setting( 'blog_colors', array(
        'default'     => '#0c9499',
        'sanitize_callback' => 'wp_newspaper_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_colors', array(
        'label'      => esc_html__( 'Color', 'wp-newspaper' ),
        'section'    => 'wp_newspaper_news_heading_section',
        'settings'   => 'blog_colors',
    ) ) );

    $wp_customize->add_setting( 'blog_news_title_font_family', array(        
        'default'     => 'Montserrat',
        'sanitize_callback' => 'wp_newspaper_sanitize_google_fonts',
    ) );

    $wp_customize->add_control( 'blog_news_title_font_family', array(
        'settings'    => 'blog_news_title_font_family',
        'label'       =>  esc_html__( 'Font Family', 'wp-newspaper' ),
        'section'     => 'wp_newspaper_news_heading_section',
        'type'        => 'select',
        'choices'     => wp_newspaper_google_fonts(),
    ) );

    $wp_customize->add_setting( 'blog_news_title_font_size', array(      
      'default'     => '22px',
      'sanitize_callback' => 'wp_newspaper_sanitize_select',
    ) );
    
    $wp_customize->add_control( 'blog_news_title_font_size', array(
        'settings'    => 'blog_news_title_font_size',
        'label'       =>  esc_html__( 'Font Size', 'wp-newspaper' ),
        'section'     => 'wp_newspaper_news_heading_section',
        'type'        => 'select',
        'default'     => '18px',
        'choices'     =>  array(             
                        '13px' => '13px',
                        '14px' => '14px',
                        '15px' => '15px',
                        '16px' => '16px',
                        '17px' => '17px',
                        '18px' => '18px',
                        '19px' => '19px',
                        '20px' => '20px',
                        '21px' => '21px',
                        '22px' => '22px',
                        '23px' => '23px',
                        '24px' => '24px',
                        '25px' => '25px',
                        '26px' => '26px',
                        '27px' => '27px',
                        '28px' => '28px',
                        '29px' => '29px',
                        '30px' => '30px',
                    ),
      ) );

    $wp_customize->add_setting( 'blog_news_title_line_height', array(      
      'default'     => '30px',
      'sanitize_callback' => 'wp_newspaper_sanitize_select',
    ) );
    
    $wp_customize->add_control( 'blog_news_title_line_height', array(
        'settings'    => 'blog_news_title_line_height',
        'label'       =>  esc_html__( 'Line Height', 'wp-newspaper' ),
        'section'     => 'wp_newspaper_news_heading_section',
        'type'        => 'select',
        'default'     => '22px',
        'choices'     =>  array(             
                        '13px' => '13px',
                        '14px' => '14px',
                        '15px' => '15px',
                        '16px' => '16px',
                        '17px' => '17px',
                        '18px' => '18px',
                        '19px' => '19px',
                        '20px' => '20px',
                        '21px' => '21px',
                        '22px' => '22px',
                        '23px' => '23px',
                        '24px' => '24px',
                        '25px' => '25px',
                        '26px' => '26px',
                        '27px' => '27px',
                        '28px' => '28px',
                        '29px' => '29px',
                        '30px' => '30px',
                    ),
      ) );


    $wp_customize->add_setting( 'blog_news_title_font_weight', array(
        'default'           => 600,
        'sanitize_callback' => 'absint',
        
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Slider_Control( $wp_customize, 'blog_news_title_font_weight', array(
        'section' => 'wp_newspaper_news_heading_section',
        'settings' => 'blog_news_title_font_weight',
        'label'   => esc_html__( 'Font Weight', 'wp-newspaper' ),
        'choices'     => array(
            'min'  => 100,
            'max'  => 900,
            'step' => 100,
        ),
    ) ) );
    

    
}