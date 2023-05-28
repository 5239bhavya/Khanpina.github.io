<?php

require_once WPMAGPLUS_COMPANION_PATH . 'admin/about/about.php';

require_once WPMAGPLUS_COMPANION_PATH . 'admin/demo-documentation.php';

function wpmagplus_companion_get_current_theme_author(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Author');
}
function wpmagplus_companion_plugin_check_activated(){
    $pluginList = get_option( 'active_plugins' );
    $wpmagplus_companion_plugin = 'advanced-import/advanced-import.php'; 
    $checkPlugin = in_array( $wpmagplus_companion_plugin , $pluginList );
    return $checkPlugin;
}
function wpmagplus_companion_plugin_file_exists(){
    $wpmagplus_companion_plugin = 'advanced-import/advanced-import.php'; 
    $pathpluginurl = WP_PLUGIN_DIR .'/'. $wpmagplus_companion_plugin;
    $isinstalled = file_exists( $pathpluginurl );
    return $isinstalled;
}
function wpmagplus_companion_get_current_theme_slug(){
    $current_theme = wp_get_theme();
    return $current_theme->stylesheet;
}
function wpmagplus_companion_get_theme_screenshot(){
    $current_theme = wp_get_theme();
    return $current_theme->get_screenshot();
}
function wpmagplus_companion_get_theme_name(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Name');
}

function wpmagplus_companion_get_templates_lists( $theme_slug ){
    switch ( $theme_slug ):
        
        case "wp-magazine-plus":
        case "wp-magazine":
            require plugin_dir_path( __FILE__ ) . 'demo-data-template/wp-magazine-plus.php';

        break;

        case "lifestyle-magazine-lite":

            require plugin_dir_path( __FILE__ ) . 'demo-data-template/lifestyle-magazine-lite.php';

        break;

        case "travel-magazine-lite":

            require plugin_dir_path( __FILE__ ) . 'demo-data-template/travel-magazine-lite.php';

        break;

        case "wp-travel-magazine":

            require plugin_dir_path( __FILE__ ) . 'demo-data-template/wp-travel-magazine.php';

        break;


        default:
            $demo_templates_lists = array();
    endswitch;

    return $demo_templates_lists;

}