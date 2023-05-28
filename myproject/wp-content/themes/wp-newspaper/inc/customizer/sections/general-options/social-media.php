<?php
/**
 * Social Media Sections
 *
 * @package WP Newspaper
 */
add_action( 'customize_register', 'wp_newspaper_social_media_sections' );

function wp_newspaper_social_media_sections( $wp_customize ) {

	$wp_customize->add_section( 'wp_newspaper_social_media_sections', array(
	    'title'          => esc_html__( 'Social Media', 'wp-newspaper' ),
	    'priority'       => 5,
	    'panel'			 => 'wp_newspaper_general_panel',
	) );

    $wp_customize->add_setting( 'facebook_social_link', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'facebook_social_link', array(
        'type' => 'url',
        'section' => 'wp_newspaper_social_media_sections', // Add a default or your own section
        'label' => __( 'Facebook URL', 'wp-newspaper' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.facebook.com', 'wp-newspaper'  ),
    ),
    ) );
    $wp_customize->add_setting( 'twitter_social_link', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'twitter_social_link', array(
        'type' => 'url',
        'section' => 'wp_newspaper_social_media_sections', // Add a default or your own section
        'label' => __( 'Twitter URL', 'wp-newspaper' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.twitter.com', 'wp-newspaper'  ),
    ),
    ) );
    $wp_customize->add_setting( 'instagram_social_link', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'instagram_social_link', array(
        'type' => 'url',
        'section' => 'wp_newspaper_social_media_sections', // Add a default or your own section
        'label' => __( 'Instagram URL', 'wp-newspaper' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.instagram.com', 'wp-newspaper'  ),
    ),
    ) );
    $wp_customize->add_setting( 'linkedin_social_link', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'linkedin_social_link', array(
        'type' => 'url',
        'section' => 'wp_newspaper_social_media_sections', // Add a default or your own section
        'label' => __( 'LinkedIn URL', 'wp-newspaper' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.linkedin.com', 'wp-newspaper'  ),
    ),
    ) );

    $wp_customize->add_setting( 'youtube_social_link', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'youtube_social_link', array(
        'type' => 'url',
        'section' => 'wp_newspaper_social_media_sections', // Add a default or your own section
        'label' => __( 'Youtube URL', 'wp-newspaper' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.youtube.com', 'wp-newspaper'  ),
    ),
    ) );

    $wp_customize->add_setting( 'pinterest_social_link', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'pinterest_social_link', array(
        'type' => 'url',
        'section' => 'wp_newspaper_social_media_sections', // Add a default or your own section
        'label' => __( 'Pinterest URL', 'wp-newspaper' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.pinterest.com', 'wp-newspaper'  ),
    ) ) );


	$wp_customize->add_setting( 'wp_newspaper_social_share', array(
        'sanitize_callback' => 'wp_newspaper_sanitize_array',
        'default'  => array( 'facebook', 'twitter', 'pinterest', 'linkedin', 'email' )
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Multi_Check_Control( $wp_customize, 'wp_newspaper_social_share', array(
        'label' => esc_html__( 'Social Shares :', 'wp-newspaper' ),
        'section' => 'wp_newspaper_social_media_sections',
        'settings' => 'wp_newspaper_social_share',
        'type'=> 'multi-check',
        'choices'     => array(
            'facebook' => esc_html__( 'Facebook', 'wp-newspaper' ),
            'twitter' => esc_html__( 'Twitter', 'wp-newspaper' ),     
            'pinterest' => esc_html__( 'Pinterest', 'wp-newspaper' ),
            'linkedin' => esc_html__( 'LinkedIn', 'wp-newspaper' ),
            'email' => esc_html__( 'Email', 'wp-newspaper' ),
        ),
    ) ) );

    $wp_customize->add_setting( 'twitter_id', array(
        'sanitize_callback' =>  'wp_kses_post',
    ) );

    $wp_customize->add_control( 'twitter_id', array(
        'label' =>  esc_html__( 'Twitter ID:', 'wp-newspaper' ),
        'section'   =>  'wp_newspaper_social_media_sections',
        'Settings'  =>  'twitter_id',
        'type'=> 'text',
    ) );
	
}