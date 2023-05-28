<?php
/**
 * Blog List Settings
 *
 * @package WP Newspaper
 */


add_action( 'customize_register', 'wp_newspaper_customize_blog_list_option' );

function wp_newspaper_customize_blog_list_option( $wp_customize ) {

    $wp_customize->add_section( 'wp_newspaper_blog_list_section', array(
        'title'          => esc_html__( 'Blog Options', 'wp-newspaper' ),
        'priority' => 5
    ) );

    $wp_customize->add_setting( 'homepage_blog_post_title_text', array(
        'sanitize_callback' =>  'wp_kses_post',        
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Custom_Text( $wp_customize, 'homepage_blog_post_title_text', array(
        'label' =>  esc_html__( 'Homepage Blog Section Options :', 'wp-newspaper' ),
        'section'   =>  'wp_newspaper_blog_list_section',
        'Settings'  =>  'homepage_blog_post_title_text'
    ) ) );

    $wp_customize->selective_refresh->add_partial( 'homepage_blog_post_title_text', array(
        'selector' => '.home-blog-area #main-content',
    ) );

    $wp_customize->add_setting( 'homepage_blog_display_option', array(
      'sanitize_callback'     =>  'wp_newspaper_sanitize_checkbox',
      'default'               =>  true
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Toggle_Control( $wp_customize, 'homepage_blog_display_option', array(
      'label' => esc_html__( 'Hide / Show','wp-newspaper' ),
      'section' => 'wp_newspaper_blog_list_section',
      'settings' => 'homepage_blog_display_option',
      'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'homepage_blog_section_title', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'homepage_blog_section_title', array(
        'label' => esc_html__( 'Title', 'wp-newspaper' ),
        'section' => 'wp_newspaper_blog_list_section',
        'settings' => 'homepage_blog_section_title',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'homepage_blog_section_category', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'wp_newspaper_sanitize_category',
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Customize_Dropdown_Taxonomies_Control( $wp_customize, 'homepage_blog_section_category', array(
        'label' => esc_html__( 'Choose Category', 'wp-newspaper' ),
        'section' => 'wp_newspaper_blog_list_section',
        'settings' => 'homepage_blog_section_category',
        'type' => 'dropdown-taxonomies',
    ) ) );

    $wp_customize->add_setting( 'homepage_blog_section_number_of_posts', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  get_option( 'posts_per_page' )
    ) );

    $wp_customize->add_control( 'homepage_blog_section_number_of_posts', array(
        'label' => esc_html__( 'Numbere of Posts', 'wp-newspaper' ),
        'section' => 'wp_newspaper_blog_list_section',
        'settings' => 'homepage_blog_section_number_of_posts',
        'type'=> 'text',        
        'description'   =>  'put -1 for unlimited'
    ) );

    $wp_customize->add_setting( 'blog_post_list_options_title_text', array(
        'sanitize_callback' =>  'wp_kses_post',        
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Custom_Text( $wp_customize, 'blog_post_list_options_title_text', array(
        'label' =>  esc_html__( 'Blog List Options :', 'wp-newspaper' ),
        'section'   =>  'wp_newspaper_blog_list_section',
        'Settings'  =>  'blog_post_list_options_title_text'
    ) ) );


    $wp_customize->add_setting( 'blog_post_show_hide_details', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'wp_newspaper_sanitize_array',
        'default'     => array( 'author', 'date', 'categories', 'tags' ),
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Multi_Check_Control( $wp_customize, 'blog_post_show_hide_details', array(
        'label' => esc_html__( 'Hide / Show Details', 'wp-newspaper' ),
        'section' => 'wp_newspaper_blog_list_section',
        'settings' => 'blog_post_show_hide_details',
        'type'=> 'multi-check',
        'choices'     => array(
            'author' => esc_html__( 'Show post author', 'wp-newspaper' ),
            'date' => esc_html__( 'Show post date', 'wp-newspaper' ),     
            'categories' => esc_html__( 'Show Categories', 'wp-newspaper' ),
            'tags' => esc_html__( 'Show Tags', 'wp-newspaper' ),
            'number_of_comments' => esc_html__( 'Show number of comments', 'wp-newspaper' ),
        ),
    ) ) );


    $wp_customize->add_setting( 'post_details_title_text', array(
        'sanitize_callback' =>  'wp_kses_post',        
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Custom_Text( $wp_customize, 'post_details_title_text', array(
        'label' =>  esc_html__( 'Detail Page Options :', 'wp-newspaper' ),
        'section'   =>  'wp_newspaper_blog_list_section',
        'Settings'  =>  'post_details_title_text'
    ) ) );


    $wp_customize->add_setting( 'detail_post_show_hide_details', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'wp_newspaper_sanitize_array',
        'default'     => array( 'date', 'categories', 'tags' ),
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Multi_Check_Control( $wp_customize, 'detail_post_show_hide_details', array(
        'label' => esc_html__( 'Hide / Show Details', 'wp-newspaper' ),
        'section' => 'wp_newspaper_blog_list_section',
        'settings' => 'detail_post_show_hide_details',
        'type'=> 'multi-check',
        'choices'     => array(
            'author' => esc_html__( 'Show post author', 'wp-newspaper' ),
            'date' => esc_html__( 'Show post date', 'wp-newspaper' ),     
            'categories' => esc_html__( 'Show Categories', 'wp-newspaper' ),
            'tags' => esc_html__( 'Show Tags', 'wp-newspaper' ),
            'number_of_comments' => esc_html__( 'Show number of comments', 'wp-newspaper' ),
        ),
    ) ) );


    $wp_customize->add_setting( 'show_hide_author_block_details', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'wp_newspaper_sanitize_array',
        'default'     => array( 'author' ),
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Multi_Check_Control( $wp_customize, 'show_hide_author_block_details', array(
        'label' => esc_html__( 'Author Block', 'wp-newspaper' ),
        'section' => 'wp_newspaper_blog_list_section',
        'settings' => 'show_hide_author_block_details',
        'type'=> 'multi-check',
        'choices'     => array(
            'author' => esc_html__( 'Show author block', 'wp-newspaper' ),
        ),
    ) ) );
}