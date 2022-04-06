<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Face2_Widget
 * @subpackage Face2_Widget/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Face2_Widget
 * @subpackage Face2_Widget/public
 * @author     iShopping inc. <developer@oktium.com>
 */
/** 
 * Register all actions and filters for the plugin
 * @link https://oktium.com
 * @since 1.0.0
 * @package Face2_Widget @subpackage Face2_Widget/includes
*/
class Face2_Widget_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $face2_widget    The ID of this plugin.
	 */
	private $face2_widget;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $face2_widget       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $face2_widget, $version ) {

		$this->face2_widget = $face2_widget;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
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

		wp_enqueue_style( $this->face2_widget, plugin_dir_url( __FILE__ ) . 'css/face2-widget-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
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

		wp_enqueue_script( $this->face2_widget, plugin_dir_url( __FILE__ ) . 'js/face2-widget-public.js', array( 'jquery' ), $this->version, false );

	}
	
	public function show_widget(){ 
		// require_once 'partials/face2-widget-public-display.php';
	}
}
