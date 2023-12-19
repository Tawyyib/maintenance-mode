<?php
/*
 * Plugin Name: Maintenance Mode
 * Plugin URI: https://www.claccsassociates.com
 * Description: Displays a coming soon page for anyone who's not logged in.
 * Version: 1.0
 * Author: Toheeb@DUBSHOP
 * Author URI: https://www.dubshop-emprise.com
 * License: GPL2
 *
 * @package maintenance-mode
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license GPL2+
*/

/**
 * Maintenance Page
 *
 * Displays the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * @return void
 */

function theme_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( $_SERVER["SERVER_PROTOCOL"] . ' 503 Service Temporarily Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/reconstruction.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/reconstruction.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'theme_maintenance_mode' );