<?php
if( ! function_exists( 'wp_newspaper_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function wp_newspaper_register_custom_controls( $wp_customize ) {
    
    // Load our custom control.
    require_once get_template_directory() . '/inc/custom-controls/radiobtn/class-radio-buttonset-control.php';
    require_once get_template_directory() . '/inc/custom-controls/slider/class-slider-control.php';
    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';
    require_once get_template_directory() . '/inc/custom-controls/dropdown-taxonomies/class-dropdown-taxonomies-control.php';
    require_once get_template_directory() . '/inc/custom-controls/multicheck/class-multi-check-control.php';
    require_once get_template_directory() . '/inc/custom-controls/notes.php';
    require_once get_template_directory() . '/inc/custom-controls/upgrade-to-pro/class-section-pro-control.php';
            
    // Register the control type.
    $wp_customize->register_control_type( 'Wp_Newspaper_Radio_Buttonset_Control' );
    $wp_customize->register_control_type( 'Wp_Newspaper_Slider_Control' );
    $wp_customize->register_control_type( 'Wp_Newspaper_Toggle_Control' );
    $wp_customize->register_control_type( 'Wp_Newspaper_Multi_Check_Control' );
    $wp_customize->register_section_type( 'Wp_Newspaper_Customize_Section_Pro_Control' );
}
endif;
add_action( 'customize_register', 'wp_newspaper_register_custom_controls' );


function wp_newspaper_enqueue_custom_admin_style() {
        wp_register_style( 'wp-newspaper-upgrade-to-pro', get_template_directory_uri() . '/inc/custom-controls/upgrade-to-pro/upgrade-to-pro.css', false );
        wp_enqueue_style( 'wp-newspaper-upgrade-to-pro' );

        wp_enqueue_script( 'wp-newspaper-upgrade-to-pro', get_template_directory_uri() . '/inc/custom-controls/upgrade-to-pro/upgrade-to-pro.js', array( 'jquery' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'wp_newspaper_enqueue_custom_admin_style' );

