<?php
/** 
 * Register all actions and filters for the plugin
 * @link https://oktium.com
 * @package Face2_Widget 
 * @subpackage Face2_Widget/includes
 * @author Oktium
*/
class Face2_Widget_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * Plugin Text Domain
	 * @since    1.0.0
	 * @link https://oktium.com
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
