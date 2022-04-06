<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 * 
 * Register all actions and filters for the plugin
 * @link https://oktium.com
 * @package Face2_Widget 
 * @subpackage Face2_Widget/includes
 * @author Oktium
 */


class Face2_Widget_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 * 
	 * Activate Function
	 * @link https://oktium.com
	 * @package Face2_Widget 
	 * @subpackage Face2_Widget/includes
	 * @author Oktium
	 */
	public static function activate() {
		do_action('face2_widget_default_values');

	}

}
