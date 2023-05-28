<?php

/**
 * Container Settings
 *
 * @package WP Newspaper
 */


add_action( 'customize_register', 'wp_newspaper_customize_register_container_width_section' );
function wp_newspaper_customize_register_container_width_section( $wp_customize ) {

    $wp_customize->add_section( 'wp_newspaper_container_width_section', array(
        'title'          => esc_html__( 'Container Width', 'wp-newspaper' ),
        'panel'          => 'wp_newspaper_general_panel',
        'priority'       => 1,        
    ) );
}



// Website overall Padding


add_action( 'customize_register', 'wp_newspaper_container_width' );

function wp_newspaper_container_width( $wp_customize ) {

    $wp_customize->add_setting( 'container_width', array(
        'default'           => 1297,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Wp_Newspaper_Slider_Control( $wp_customize, 'container_width', array(
        'section' => 'wp_newspaper_container_width_section',
        'settings' => 'container_width',
        'label'   => esc_html__( 'Container Width', 'wp-newspaper' ),
        'choices'     => array(
            'min'  => 1000,
            'max'  => 2000,
            'step' => 1,
        ),
    ) ) );

}