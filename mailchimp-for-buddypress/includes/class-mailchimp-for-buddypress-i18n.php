<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.multidots.com
 * @since      1.0.0
 *
 * @package    Mailchimp_For_Buddypress
 * @subpackage Mailchimp_For_Buddypress/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mailchimp_For_Buddypress
 * @subpackage Mailchimp_For_Buddypress/includes
 * @author     Chetan Satasiya <chetan.satasiya@multidots.in>
 */
class Mailchimp_For_Buddypress_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mailchimp-for-buddypress',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
