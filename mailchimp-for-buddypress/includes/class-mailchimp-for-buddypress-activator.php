<?php

/**
 * Fired during plugin activation
 *
 * @link       http://www.multidots.com
 * @since      1.0.0
 *
 * @package    Mailchimp_For_Buddypress
 * @subpackage Mailchimp_For_Buddypress/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Mailchimp_For_Buddypress
 * @subpackage Mailchimp_For_Buddypress/includes
 * @author     Chetan Satasiya <chetan.satasiya@multidots.in>
 */
class Mailchimp_For_Buddypress_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
            global $wpdb;
            
            if(!in_array( 'mailchimp-for-wp/mailchimp-for-wp.php',apply_filters('active_plugins',get_option('active_plugins'))) && !is_plugin_active_for_network( 'mailchimp-for-wp/mailchimp-for-wp.php' )) { 

                wp_die( "<strong>MailChimp for BuddyPress</strong> requires <strong>MailChimp for WordPress</strong> plugin activate to work normally.<br /><br />Back to the WordPress <a href='".get_admin_url(null, 'plugins.php')."'>Plugins page</a>." );
            }
	}

}
