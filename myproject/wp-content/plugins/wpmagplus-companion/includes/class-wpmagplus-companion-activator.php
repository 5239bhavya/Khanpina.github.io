<?php

/**
 * Fired during plugin activation
 *
 * @link       as
 * @since      1.0.0
 *
 * @package    Wpmagplus_Companion
 * @subpackage Wpmagplus_Companion/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wpmagplus_Companion
 * @subpackage Wpmagplus_Companion/includes
 * @author     s <sjunee5@gmail.com>
 */
class Wpmagplus_Companion_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		update_option( '__wpmagplus_companion_do_redirect', true );
	}

}
