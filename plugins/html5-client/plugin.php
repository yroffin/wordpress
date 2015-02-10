<?php
/**
 * Plugin Name: Mobile html5 client
 * Description: Mobile html5 client (using JSON-based REST API for WordPress)
 * Author: Yannick Roffin
 * Author URI: https://plus.google.com/u/0/communities/114300723123963576395
 * Version: 1.0
 * Plugin URI: https://github.com/yroffin/wordpress/tree/master/plugins/html5-client
 */

/**
 * Version number for our API
 *
 * @var string
 */
define( 'HTML5_CLIENT_VERSION', '1.0' );

/**
 * Include our files for the API
 */
include_once( dirname( __FILE__ ) . '/lib/index.php' );

/**
 * Register our plugin
 */
function html5_client_init() {
	global $wp;
	$wp->add_query_var( 'html5_client' );
}
add_action( 'init', 'html5_client_init' );

/**
 * Activate html client rendering
 */
function html5_client_loaded() {
	if ( empty( $GLOBALS['wp']->query_vars['html5_client'] ) )
		return;
	// Finish off our request
        html5_client::index();
	die();
}
add_action( 'template_redirect', 'html5_client_loaded', -100 );
