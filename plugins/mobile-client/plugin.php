<?php
/**
 * Plugin Name: html5-client
 * Description: Mobile html5 client (using JSON-based REST API for WordPress)
 * Author: Yannick Roffin
 * Author URI: https://plus.google.com/u/0/communities/114300723123963576395
 * Version: 1.0
 * Plugin URI: https://github.com/yroffin/wordpress/plugins/mobile-client
 */

/**
 * Version number for our API
 *
 * @var string
 */
define( 'HTML5_CLIENT_VERSION', '1.0' );

/**
 * Register our rewrite rules for the API
 */
function html5_client_init() {
	html5_client_register_rewrites();

	global $wp;
	$wp->add_query_var( 'html5_client' );
}
add_action( 'init', 'html5_client_init' );

function html5_client_register_rewrites() {
	add_rewrite_rule( '^' . json_get_url_prefix() . '/?$','index.php?html5_client=/','top' );
	add_rewrite_rule( '^' . json_get_url_prefix() . '(.*)?','index.php?html5_client=$matches[1]','top' );
}

/**
 * Determine if the rewrite rules should be flushed.
 */
function html5_client_maybe_flush_rewrites() {
	$version = get_option( 'html5_client_plugin_version', null );

	if ( empty( $version ) ||  $version !== HTML5_CLIENT_VERSION ) {
		flush_rewrite_rules();
		update_option( 'html5_client_plugin_version', HTML5_CLIENT_VERSION );
	}

}
add_action( 'init', 'html5_client_maybe_flush_rewrites', 999 );

/**
 * Register the default JSON API filters
 *
 * @internal This will live in default-filters.php
 */
function html5_client_default_filters( $server ) {
}
add_action( 'wp_json_server_before_serve', 'html5_client_default_filters', 10, 1 );

/**
 * Load the JSON API
 *
 * @todo Extract code that should be unit tested into isolated methods such as
 *       the wp_json_server_class filter and serving requests. This would also
 *       help for code re-use by `wp-json` endpoint. Note that we can't unit
 *       test any method that calls die().
 */
function html5_client_loaded() {
	if ( empty( $GLOBALS['wp']->query_vars['html5_client'] ) )
		return;

	// Finish off our request
	die();
}
add_action( 'template_redirect', 'html5_client_loaded', -100 );
