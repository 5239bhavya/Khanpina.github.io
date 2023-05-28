<?php

/**
 * Fired during plugin deactivation
 *
 * @link       as
 * @since      1.0.0
 *
 * @package    Wpmagplus_Companion
 * @subpackage Wpmagplus_Companion/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Wpmagplus_Companion
 * @subpackage Wpmagplus_Companion/includes
 */
class Wpmagplus_Companion_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		update_option( '__wpmagplus_companion_do_redirect', false );

	}

}
