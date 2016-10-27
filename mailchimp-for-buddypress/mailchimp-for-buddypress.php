<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.multidots.com
 * @since             1.0.0
 * @package           Mailchimp_For_Buddypress
 *
 * @wordpress-plugin
 * Plugin Name:       MailChimp For BuddyPress
 * Plugin URI:        http://www.multidots.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Chetan Satasiya
 * Author URI:        http://www.multidots.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mailchimp-for-buddypress
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mailchimp-for-buddypress-activator.php
 */
function activate_mailchimp_for_buddypress() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mailchimp-for-buddypress-activator.php';
	Mailchimp_For_Buddypress_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mailchimp-for-buddypress-deactivator.php
 */
function deactivate_mailchimp_for_buddypress() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mailchimp-for-buddypress-deactivator.php';
	Mailchimp_For_Buddypress_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mailchimp_for_buddypress' );
register_deactivation_hook( __FILE__, 'deactivate_mailchimp_for_buddypress' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mailchimp-for-buddypress.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mailchimp_for_buddypress() {

	$plugin = new Mailchimp_For_Buddypress();
	$plugin->run();

}
run_mailchimp_for_buddypress();
