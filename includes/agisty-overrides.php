<?php
/**
 * WP core cleanup.
 * 
 * @package Agisty
 */

namespace Agisty;

/**
 * Remove emoji-related styles and scripts (frontend only).
 *
 * @link https://selftawt.com/disable-wpemoji-correctly/
 * @link https://wordpress.org/plugins/remove-wp-emoji-correctly/
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); /** Retained for backwards compatibility */

/** Remove the link to the Really Simple Discovery service endpoint from the frontend. */
remove_action( 'wp_head', 'rsd_link' );

/**
 * Remove REST API link tag from head element.
 *
 * @link https://developer.wordpress.org/reference/functions/rest_output_link_wp_head/
 * @link https://github.com/WordPress/WordPress/blob/master/wp-includes/default-filters.php
 */
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );

/** Remove shortlink from the head element.  */
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

/** Remove WordPress meta generator. */
add_filter( 'the_generator', '__return_empty_string' );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

/**
 * Clean the class names for the body element.
 *
 * @link https://github.com/billerickson/BE-Starter/blob/master/inc/wordpress-cleanup.php
 * @link https://github.com/WordPress/wordpress-develop/blob/trunk/src/wp-includes/post-template.php
 */
add_filter( 'body_class', function ( $classes ) {

	if ( ! is_array( $classes ) ) {
		return $classes;
	}

	$allowed_classes = [
		'admin-bar',
		'archive',
		'attachment',
		'author',
		'blog',
		'category',
		'date',
		'error404',
		'home',
		'logged-in',
		'no-customize-support',
		'page',
		'paged',
		'privacy-policy',
		'search',
		'single',
		'wp-custom-logo',
		'wp-embed-responsive',
		'wp-singular',
		'wp-theme-' . sanitize_html_class( get_template() ),
	];

	return array_intersect( $classes, $allowed_classes );
}, 20 );

/**
 * Clean the list of CSS class names for the current article element.
 *
 * @link https://github.com/billerickson/BE-Starter/blob/master/inc/wordpress-cleanup.php
 * @link https://github.com/WordPress/wordpress-develop/blob/trunk/src/wp-includes/post-template.php
 */
add_filter( 'post_class', function ( $classes ) {

	if ( ! is_array( $classes ) ) {
		return $classes;
	}

	$allowed_classes = [
		'has-post-thumbnail',
		'post-password-protected',
		'post-password-required',
		'status-sticky',
		'sticky',
		'type-' . sanitize_html_class( get_post_type() ),
	];

	return array_intersect( $classes, $allowed_classes );
} );
