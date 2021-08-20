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
 * @package           Format_date_before_title
 *
 * @wordpress-plugin
 * Plugin Name:       Format Date Before Title
 * Plugin URI:        https://my-first-wordpress-app.lndo.site:4433/wp-content/plugins/format_date_before_title
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Matthew Forgette
 * Author URI:        https://matthew-forgette.netlify.app/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       format_date_before_title
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
define('FORMAT_DATE_BEFORE_TITLE_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-format_date_before_title-activator.php
 */
function activate_format_date_before_title()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-format_date_before_title-activator.php';
	Format_date_before_title_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-format_date_before_title-deactivator.php
 */
function deactivate_format_date_before_title()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-format_date_before_title-deactivator.php';
	Format_date_before_title_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_format_date_before_title');
register_deactivation_hook(__FILE__, 'deactivate_format_date_before_title');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-format_date_before_title.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_format_date_before_title()
{

	$plugin = new Format_date_before_title();
	$plugin->run();
}
run_format_date_before_title();



add_filter('the_title', 'format_date_before_title', 10, 2);
/**
 * Add a icon to the beginning of every post page.
 *
 * @uses is_single() and has_tag
 */
function format_date_before_title($title)
{
	$date = get_the_date();

	return $date . ' - ' . $title;
}
// add_filter('wp_title', 'append_to_title', 10, 3);
// function append_to_title($title)
// {
// 	$date = get_the_date();
// 	return $title .= " | " . $date;
// }
