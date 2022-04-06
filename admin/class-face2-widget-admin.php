<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://oktium.com
 * @since      1.0.0
 *
 * @package    Face2_Widget
 * @subpackage Face2_Widget/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Face2_Widget
 * @subpackage Face2_Widget/admin
 * @author     iShopping inc. <developer@oktium.com>
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
class Face2_Widget_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $face2_widget    The ID of this plugin.
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
	private $face2_widget;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
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
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $face2_widget       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
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
	public function __construct( $face2_widget, $version ) {

		$this->face2_widget = $face2_widget;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->face2_widget, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->face2_widget, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	/**
	 * Create admin menu page.
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
	public function face2_register_options_page() {
		add_options_page('Face2 widget setup', 'Oktium Face2', 'manage_options', 'face2', array( $this, 'face2_widget_admin_page'));
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
	public function face2_widget_admin_page() {
		// return views
		require_once 'partials/face2-widget-admin-display.php';
	}
	
	/**
	 * Register Face2 widget propertys.
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
	public function face2_widget_register_settings() {
   
    register_setting( 'face2_widget_props', 'face2_option_face2Key', 'face2_callback' );
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
	public function face2_widget_set_default() {
		add_option( 'face2_option_face2Key');
	}

}
