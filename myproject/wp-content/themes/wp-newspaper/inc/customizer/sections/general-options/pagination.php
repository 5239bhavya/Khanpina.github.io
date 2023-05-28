<?php

/**
 * Pagination Settings
 *
 * @package WP Newspaper
 */


add_action( 'customize_register', 'wp_newspaper_customize_register_pagination_section' );
function wp_newspaper_customize_register_pagination_section( $wp_customize ) {

    $wp_customize->add_section( 'wp_newspaper_pagination_section', array(
        'title'          => esc_html__( 'Pagination', 'wp-newspaper' ),
        'description'    => esc_html__( 'Pagination :', 'wp-newspaper' ),
        'panel'          => 'wp_newspaper_general_panel',
        'priority'       => 4,        
    ) );
}

add_action( 'customize_register', 'wp_newspaper_customize_pagination' );

function wp_newspaper_customize_pagination( $wp_customize ) {

    $wp_customize->add_setting( 'pagination_type', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'wp_newspaper_sanitize_choices',
        'default'     => 'ajax-loadmore',
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Radio_Buttonset_Control( $wp_customize, 'pagination_type', array(
        'label' => esc_html__( 'Pagination Type :', 'wp-newspaper' ),
        'section' => 'wp_newspaper_pagination_section',
        'settings' => 'pagination_type',
        'type'=> 'radio-buttonset',
        'choices'     => array(
            'ajax-loadmore' => esc_html__( 'Ajax Loadmore', 'wp-newspaper' ),
            'number-pagination'    =>  esc_html__( 'Number Pagination', 'wp-newspaper' ),      
        ),
    ) ) );            
    
}