<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://smartarget.online
 * @since             1.2
 * @package           Smartarget
 *
 * @wordpress-plugin
 * Plugin Name:       Smartarget Follow Us
 * Plugin URI:        https://smartarget.online
 * Description:       Adding Smartarget Follow Us by Smartarget For Wordpress
 * Version:           1.4
 * Author:            Smartarget
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       smartarget
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.2 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SMARTARGET_VERSION', '1.2' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-smartarget-social-follow-bar-activator.php
 */
function activate_smartarget_social_follow_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smartarget-social-follow-bar-activator.php';
	SmartargetSocialFollowBar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-smartarget-social-follow-bar-deactivator.php
 */
function deactivate_smartarget_social_follow_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-smartarget-social-follow-bar-deactivator.php';
	SmartargetSocialFollowBar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_smartarget_social_follow_bar' );
register_deactivation_hook( __FILE__, 'deactivate_smartarget_social_follow_bar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-smartarget-social-follow-bar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.2
 */
function run_smartarget_social_follow_bar() {

	$plugin = new SmartargetSocialFollowBar();
	$plugin->run();

}
run_smartarget_social_follow_bar();
