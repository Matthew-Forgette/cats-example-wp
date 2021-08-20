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
 * @package    Cats_skills_test
 * @subpackage Cats_skills_test/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cats_skills_test
 * @subpackage Cats_skills_test/includes
 * @author     Matthew Forgette <mj0723@gmail.com>
 */
class Cats_skills_test_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cats_skills_test',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
