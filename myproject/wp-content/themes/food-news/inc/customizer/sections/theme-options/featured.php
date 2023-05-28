<?php
/**
 * Featured Settings
 *
 * @package Food News
 */



add_action( 'customize_register', 'food_news_customize_register_featured_news' );

function food_news_customize_register_featured_news( $wp_customize ) {

    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';
    require_once get_template_directory() . '/inc/custom-controls/dropdown-taxonomies/class-dropdown-taxonomies-control.php';
    require_once get_template_directory() . '/inc/custom-controls/multicheck/class-multi-check-control.php';

	$wp_customize->add_section( 'food_news_featured_news_sections', array(
	    'title'          => esc_html__( 'Featured News', 'food-news' ),
	    'panel'          => 'wp_newspaper_theme_options_panel',
	) );

    $wp_customize->add_setting( 'featured_news_display_option', array(
      'sanitize_callback'     =>  'wp_newspaper_sanitize_checkbox',
      'default'               =>  true
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Toggle_Control( $wp_customize, 'featured_news_display_option', array(
      'label' => esc_html__( 'Hide / Show','food-news' ),
      'section' => 'food_news_featured_news_sections',
      'settings' => 'featured_news_display_option',
      'type'=> 'toggle',
    ) ) );


    $wp_customize->add_setting( 'featured_news_category', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'wp_newspaper_sanitize_category',
        'default'     => '',
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Customize_Dropdown_Taxonomies_Control( $wp_customize, 'featured_news_category', array(
        'label' => esc_html__( 'Choose Category', 'food-news' ),
        'section' => 'food_news_featured_news_sections',
        'settings' => 'featured_news_category',
        'type'=> 'dropdown-taxonomies',
        'taxonomy'  =>  'category'
    ) ) );

    $wp_customize->add_setting( 'featured_news_section_title', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'featured_news_section_title', array(
        'label' => esc_html__( 'Title', 'food-news' ),
        'section' => 'food_news_featured_news_sections',
        'settings' => 'featured_news_section_title',
        'type'=> 'text',
    ) );


    $wp_customize->add_setting( 'featured_fullwidth_option', array(
      'sanitize_callback'     =>  'wp_newspaper_sanitize_checkbox',
      'default'               =>  false
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Toggle_Control( $wp_customize, 'featured_fullwidth_option', array(
      'label' => esc_html__( 'Fullwidth Display?','food-news' ),
      'section' => 'food_news_featured_news_sections',
      'settings' => 'featured_fullwidth_option',
      'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'number_of_featured_posts', array(
        'sanitize_callback'     =>  'wp_newspaper_sanitize_select',
        'default'               =>  '5'
    ) );


    $wp_customize->add_control( new Food_News_Select_Control( $wp_customize, 'number_of_featured_posts', array(
        'label' => esc_html__( 'Number of posts', 'food-news' ),
        'section' => 'food_news_featured_news_sections',
        'settings' => 'number_of_featured_posts',
        'type'=> 'select',
        'choices'     => array(
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',
            '10' => '10',
        ),
    ) ) );


    $wp_customize->add_setting( 'featured_news_show_hide_details', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'wp_newspaper_sanitize_array',
        'default'     => array( 'date', 'categories', 'tags', 'description', 'read-more' ),
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Multi_Check_Control( $wp_customize, 'featured_news_show_hide_details', array(
        'label' => esc_html__( 'Hide / Show Details', 'food-news' ),
        'section' => 'food_news_featured_news_sections',
        'settings' => 'featured_news_show_hide_details',
        'type'=> 'multi-check',
        'choices'     => array(
            'author' => esc_html__( 'Show post author', 'food-news' ),
            'date' => esc_html__( 'Show post date', 'food-news' ),     
            'categories' => esc_html__( 'Show Categories', 'food-news' ),
            'tags' => esc_html__( 'Show Tags', 'food-news' ),
            'number_of_comments' => esc_html__( 'Show number of comments', 'food-news' ),
            'description'   =>  esc_html__( 'Show description', 'food-news' ),
            'read-more'   =>  esc_html__( 'Show Read More', 'food-news' ),
        ),
    ) ) );

}