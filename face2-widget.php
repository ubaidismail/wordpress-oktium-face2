<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://oktium.com
 * @since             1.0.0
 * @package           Face2_Widget
 *
 * @wordpress-plugin
 * Plugin Name:       Oktium Face2 widget
 * Plugin URI:        https://oktium.zendesk.com/hc/en-us/articles/360023346574-Face2-Wordpress-plugin
 * Description:       This is a plugin for implementing Face2 button as floating widget.
 * Version:           1.0.3
 * Author:            oktium
 * Author URI:        https://oktium.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       face2-widget
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
require ( __DIR__ ) . '/vendor/autoload.php';
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FACE2_WIDGET_VERSION', '1.0.3' );


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-face2-widget-activator.php
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
function activate_face2_widget() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-face2-widget-activator.php';
	Face2_Widget_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-face2-widget-deactivator.php
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
function deactivate_face2_widget() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-face2-widget-deactivator.php';
	Face2_Widget_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_face2_widget' );
register_deactivation_hook( __FILE__, 'deactivate_face2_widget' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-face2-widget.php';
include_once plugin_dir_path(__FILE__) . 'includes/face2-post-type.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
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
function run_face2_widget() {

	$plugin = new Face2_Widget();
	$plugin->run();

}
run_face2_widget();
