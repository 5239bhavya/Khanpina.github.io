<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       as
 * @since      1.0.0
 *
 * @package    Wpmagplus_Companion
 * @subpackage Wpmagplus_Companion/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Wpmagplus_Companion
 * @subpackage Wpmagplus_Companion/includes
 * @author     s <sjunee5@gmail.com>
 */
class Wpmagplus_Companion {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Wpmagplus_Companion_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * Full Name of plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_full_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_full_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;


	/**
	 * Main Instance
	 *
	 * Insures that only one instance of Wpmagplus_Companion exists in memory at any one
	 * time. Also prevents needing to define globals all over the place.
	 *
	 * @since    1.0.0
	 * @access   public
	 *
	 * @return object
	 */
	public static function instance() {

		// Store the instance locally to avoid private static replication
		static $instance = null;

		// Only run these methods if they haven't been ran previously
		if ( null === $instance ) {
			$instance = new Wpmagplus_Companion;
		}

		// Always return the instance
		return $instance;
	}

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		if ( defined( 'WPMAGPLUS_COMPANION_VERSION' ) ) {
			$this->version = WPMAGPLUS_COMPANION_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'wpmagplus-companion';
		$this->plugin_full_name = esc_html__('WPMagPlus Companion','wpmagplus-companion');

		$this->load_dependencies();
		$this->set_locale();
		$pluginList = wpmagplus_companion_plugin_check_activated();

		if ( $pluginList == '1') {
			$this->define_hooks();
			$this->load_hooks();
		}
		else {
			add_action( 'admin_notices', array( $this, 'wpmagplus_companion_missing_notice' ) );
		}

		$this->define_hooks();
		$this->load_hooks();
		

	}

	/**
	 * Since the plugin is created specially for One page Conference Themes
	 * Show notice if One page Conference Themes theme is not installed/activated
	 *
	 * @since    1.0.0
	 */
	public function wpmagplus_companion_missing_notice() {

		
		$pluginList = wpmagplus_companion_plugin_check_activated();

		if($pluginList != '1'){

			$fileexists = wpmagplus_companion_plugin_file_exists();
			
			if( $fileexists == '1' ){
				$wpmagplus_companion_plugin = 'advanced-import/advanced-import.php'; 
				$activation_url = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . $wpmagplus_companion_plugin . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $wpmagplus_companion_plugin );
                $message = '<p>' . __( 'WPMagPlus Companion is not working because you need to activate the Advanced Import plugin.' ) . '</p>';
                $message .= '<p>' . sprintf( '<a href="%s" class="button-primary">%s</a>', $activation_url, __( 'Activate Advanced Import Now' ) ) . '</p>';

                echo '<div class="error"><p>' . $message . '</p></div>';
			}
			else{
				$search_url = admin_url( 'plugin-install.php?s=advanced-import&tab=search&type=term' );
	
				echo '<div class="error notice is-dismissible"><p><strong>' . $this->plugin_full_name . '</strong> &#8211; ' . sprintf( esc_html__( 'This plugin requires %s plugin to be activated to work.', 'wpmagplus-companion' ), '<a href="'.esc_url( $search_url ).'">' . esc_html__('Advanced Import','wpmagplus-companion'). '</a>' ) . '</p></div>';
				
			}
			}
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Wpmagplus_Companion_Loader. Orchestrates the hooks of the plugin.
	 * - Wpmagplus_Companion_i18n. Defines internationalization functionality.
	 * - Wpmagplus_Companion_Admin. Defines all hooks for the admin area.
	 * - Wpmagplus_Companion_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wpmagplus-companion-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wpmagplus-companion-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */

        require_once WPMAGPLUS_COMPANION_PATH . 'admin/functions.php';
		require_once WPMAGPLUS_COMPANION_PATH . 'admin/hooks.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-wpmagplus-companion-public.php';

		$this->loader = new Wpmagplus_Companion_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Wpmagplus_Companion_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Wpmagplus_Companion_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_hooks() {

		$plugin_admin = wpmagplus_companion_hooks();

		$this->loader->add_action( 'admin_init', $plugin_admin, 'redirect' );
        $this->loader->add_action( 'advanced_import_demo_lists', $plugin_admin, 'add_demo_lists',999 );
        $this->loader->add_action( 'admin_menu', $plugin_admin, 'import_menu' );
        $this->loader->add_action( 'wp_ajax_wpmagplus_companion_getting_started', $plugin_admin, 'install_advanced_import' );
        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Wpmagplus_Companion_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function load_hooks() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Wpmagplus_Companion_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
