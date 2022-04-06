<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Face2_Widget
 * @subpackage Face2_Widget/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Face2_Widget
 * @subpackage Face2_Widget/includes
 * @author     Your Name <email@example.com>
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
class Face2_Widget_i18n {


	/**
	 * Load the plugin text domain for translation.
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
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'face2-widget',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
