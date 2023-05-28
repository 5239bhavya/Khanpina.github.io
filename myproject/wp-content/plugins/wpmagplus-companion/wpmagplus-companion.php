<?php
/**
 *
 * @link              https://www.wpmagplus.com
 * @since             1.0.0
 * @package           Wpmagplus_Companion
 *
 * @wordpress-plugin
 * Plugin Name:       WPMagPlus Companion
 * Plugin URI:        https://www.wpmagplus.com
 * Description:       This is a theme import plugin. Our plugin will help you import the theme content with just a click.
 * Version:           1.0.8
 * Author:            WPMagPlus
 * Author URI:        https://profiles.wordpress.org/avidthemes/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpmagplus-companion
 * Domain Path:       /languages
 */




// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WPMAGPLUS_COMPANION_VERSION', '1.0.8' );



/*Define Constants for this plugin*/
define( 'WPMAGPLUS_COMPANION_PLUGIN_NAME', 'WPMagPlus Companion' );
define( 'WPMAGPLUS_COMPANION_PATH', plugin_dir_path( __FILE__ ) );
define( 'WPMAGPLUS_COMPANION_URL', plugin_dir_url( __FILE__ ) );
define( 'WPMAGPLUS_COMPANION_TEMPLATE_URL', WPMAGPLUS_COMPANION_URL.'includes/demo-data/' );
define( 'WPMAGPLUS_COMPANION_SCRIPT_PREFIX', ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '' );


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpmagplus-companion-activator.php
 */
function activate_wpmagplus_companion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpmagplus-companion-activator.php';
	Wpmagplus_Companion_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpmagplus-companion-deactivator.php
 */
function deactivate_wpmagplus_companion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpmagplus-companion-deactivator.php';
	Wpmagplus_Companion_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpmagplus_companion' );
register_deactivation_hook( __FILE__, 'deactivate_wpmagplus_companion' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpmagplus-companion.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

if( !function_exists( 'run_wpmagplus_companion')){

	function run_wpmagplus_companion() {
  
	    return Wpmagplus_Companion::instance();
	}
	run_wpmagplus_companion()->run();
 }