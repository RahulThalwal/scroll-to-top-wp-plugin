<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://profiles.wordpress.org/rahulthalwal/
 * @since             1.0.0
 * @package           scroll_To_Top
 *
 * @wordpress-plugin
 * Plugin Name:       Scroll to Top
 * Plugin URI:        https://Scroll to Top
 * Description:       A simple and lightweight "Scroll to Top" plugin that adds a smooth scroll button to your website, allowing users to quickly return to the top of the page with a single click.
 * Version:           1.0.0
 * Author:            Rahul Thawal
 * Author URI:        https://https://profiles.wordpress.org/rahulthalwal//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       scroll-to-top
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'scroll_TO_TOP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-scroll-to-top-activator.php
 */
function activate_scroll_to_top() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-scroll-to-top-activator.php';
	scroll_To_Top_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-scroll-to-top-deactivator.php
 */
function deactivate_scroll_to_top() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-scroll-to-top-deactivator.php';
	scroll_To_Top_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_scroll_to_top' );
register_deactivation_hook( __FILE__, 'deactivate_scroll_to_top' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-scroll-to-top.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_scroll_to_top() {

	$plugin = new scroll_To_Top();
	$plugin->run();

}
run_scroll_to_top();
