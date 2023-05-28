<?php
/**
 * Readmore Settings
 *
 * @package WP Newspaper
 */


add_action( 'customize_register', 'wp_newspaper_customize_register_readmore_section' );
function wp_newspaper_customize_register_readmore_section( $wp_customize ) {

    $wp_customize->add_section( 'wp_newspaper_readmore_section', array(
        'title'          => esc_html__( 'Readmore Button', 'wp-newspaper' ),
        'panel'          => 'wp_newspaper_general_panel',
        'priority'       => 8,        
    ) );

     $wp_customize->add_setting( 'readmore_text', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  esc_html__( 'Read More', 'wp-newspaper' )
    ) );

    $wp_customize->add_control( 'readmore_text', array(
        'label' => esc_html__( 'Read More Text', 'wp-newspaper' ),
        'section' => 'wp_newspaper_readmore_section',
        'settings' => 'readmore_text',
        'type'=> 'text',
    ) );
    
}