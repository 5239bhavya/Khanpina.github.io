<?php
if( ! function_exists( 'food_news_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function food_news_register_custom_controls( $wp_customize ) {
    
    // Load our custom control.
    require_once get_stylesheet_directory() . '/inc/custom-controls/select/class-select-control.php';
    
            
    // Register the control type.
    $wp_customize->register_control_type( 'Food_News_Select_Control' );
    
}
endif;
add_action( 'customize_register', 'food_news_register_custom_controls' );