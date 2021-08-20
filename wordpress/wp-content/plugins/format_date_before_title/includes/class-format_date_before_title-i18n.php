<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://matthew-forgette.netlify.app/
 * @since      1.0.0
 *
 * @package    Format_date_before_title
 * @subpackage Format_date_before_title/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Format_date_before_title
 * @subpackage Format_date_before_title/includes
 * @author     Matthew Forgette <mj0723@gmail.com>
 */
class Format_date_before_title_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'format_date_before_title',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
