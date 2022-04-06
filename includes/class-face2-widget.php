<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://oktium.com
 *
 * @package    Face2_Widget
 * @subpackage Face2_Widget/includes
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
 * @package    Face2_Widget
 * @subpackage Face2_Widget/includes
 * @author     iShopping inc. <developer@oktium.com>
 */

class Face2_Widget {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Face2_Widget_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @access   protected
	 * @var      string    $face2_widget    The string used to uniquely identify this plugin.
	 */
	protected $face2_widget;

	/**
	 * The current version of the plugin.
	 *
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 */
	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
	*/
	public function __construct() {
		if ( defined( 'FACE2_WIDGET_VERSION' ) ) {
			$this->version = FACE2_WIDGET_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'face2-widget';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Face2_Widget_Loader. Orchestrates the hooks of the plugin.
	 * - Face2_Widget_i18n. Defines internationalization functionality.
	 * - Face2_Widget_Admin. Defines all hooks for the admin area.
	 * - Face2_Widget_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
	*/
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-face2-widget-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-face2-widget-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-face2-widget-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-face2-widget-public.php';

		$this->loader = new Face2_Widget_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Face2_Widget_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
	*/
	private function set_locale() {

		$plugin_i18n = new Face2_Widget_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}


	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
	*/
	private function define_admin_hooks() {

		$plugin_admin = new Face2_Widget_Admin( $this->get_face2_widget(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		
		// add admin menu for face2 widget
		$this->loader->add_action('admin_menu', $plugin_admin, 'face2_register_options_page');
		// register general settings
		$this->loader->add_action('admin_init', $plugin_admin, 'face2_widget_register_settings');
		// set default vaules
		$this->loader->add_action('face2_widget_default_values', $plugin_admin, 'face2_widget_set_default');

	}


	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
	*/
	private function define_public_hooks() {

		$plugin_public = new Face2_Widget_Public( $this->get_face2_widget(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		
		$this->loader->add_action('wp_head', $plugin_public, 'show_widget');

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
	*/
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
	*/
	public function get_face2_widget() {
		return $this->face2_widget;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Face2_Widget_Loader    Orchestrates the hooks of the plugin.
	 */
	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
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
	/** 
	 * Register all actions and filters for the plugin
	 * @link https://oktium.com
	 * @since 1.0.0
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	*/
	/** 
	 *  Register all actions and filters for the plugin.
	 * Maintain a list of all hooks that are registered throughout 
	 * the plugin, and register them with the WordPress API. 
	 * Call the run function to execute the list of actions and filters.
	 * @package Face2_Widget
	 * @subpackage Face2_Widget/includes 
	 * @author Oktium
	*/
	public function get_version() {
		return $this->version;
	}

}
