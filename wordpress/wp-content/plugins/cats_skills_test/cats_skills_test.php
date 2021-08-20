<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://matthew-forgette.netlify.app/
 * @since             1.0.0
 * @package           Cats_skills_test
 *
 * @wordpress-plugin
 * Plugin Name:       Cats Skills Test Plugin
 * Plugin URI:        https://my-first-wordpress-app.lndo.site:4433/wp-content/plugins/cats_skills_test
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Matthew Forgette
 * Author URI:        https://matthew-forgette.netlify.app/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cats_skills_test
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('CATS_SKILLS_TEST_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cats_skills_test-activator.php
 */
function activate_cats_skills_test()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-cats_skills_test-activator.php';
	Cats_skills_test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cats_skills_test-deactivator.php
 */
function deactivate_cats_skills_test()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-cats_skills_test-deactivator.php';
	Cats_skills_test_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_cats_skills_test');
register_deactivation_hook(__FILE__, 'deactivate_cats_skills_test');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-cats_skills_test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cats_skills_test()
{

	$plugin = new Cats_skills_test();
	$plugin->run();
}
run_cats_skills_test();

add_filter('the_content', 'add_cat_image_by_tag', 20);
/**
 * Add a icon to the beginning of every post page.
 *
 * @uses is_single()
 */
function add_cat_image_by_tag($content)
{

	if (is_single() && has_tag('cat'))
		// Add image to the beginning of each page
		$content = sprintf(
			'<img class="cat-img" src="wp-content/themes/twentytwentyone/assets/images/cats-skills-test-img.gif" alt="picture of cat" title=""',
			get_bloginfo('stylesheet_directory'),
			$content
		);

	// Returns the content.
	return $content;
}
