<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://profiles.wordpress.org/rahulthalwal/
 * @since      1.0.0
 *
 * @package    scroll_To_Top
 * @subpackage scroll_To_Top/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    scroll_To_Top
 * @subpackage scroll_To_Top/includes
 * @author     Rahul Thawal <rahulthalwal5@gmail.com>
 */
class scroll_To_Top_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'scroll-to-top',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
