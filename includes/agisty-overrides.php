<?php

namespace Agisty\Overrides;

/**
 * Remove links to general and extra feeds from head element.
 *
 * @link https://developer.wordpress.org/reference/functions/feed_links_extra/
 * @link https://developer.wordpress.org/reference/functions/feed_links/
 */
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

/**
 * Remove emoji-related styles and scripts.
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
 */
add_filter( 'body_class', function( $classes ) {

	if ( ! is_array( $classes ) ) {
		return $classes;
	}

	if ( is_singular() ) {
		$classes[] = 'singlular';
	}

	$allowed_classes = [
		'singular',
		'single',
		'archive',
		'home',
		'search',
		'admin-bar',
		'logged-in',
		'wp-embed-responsive',
	];

	return array_intersect( $classes, $allowed_classes );

}, 20 );

/**
 * Clean the list of CSS class names for the current article element.
 *
 * @link https://github.com/billerickson/BE-Starter/blob/master/inc/wordpress-cleanup.php
 */
add_filter( 'post_class', function( $classes ) {

	if ( ! is_array( $classes ) ) {
		return $classes;
	}

	$allowed_classes = [
		'entry',
		'type-' . get_post_type(),
	];

	return array_intersect( $classes, $allowed_classes );

} );

/**
 * Clean CSS classes applied to a menu item’s list item element.
 *
 * @param   array       $classes    Array of the CSS classes that are applied to the menu item’s <li> element.
 * @param   WP_Post     $menu_item  The current menu item object.
 * @param   stdClass    $args       An object of wp_nav_menu() arguments.
 * @param   int         $dept       Depth of menu item. Used for padding.
 *
 * @link    https://developer.wordpress.org/reference/hooks/nav_menu_css_class/
 * @link    https://github.com/billerickson/BE-Starter/blob/master/inc/wordpress-cleanup.php
 */
// add_filter( 'nav_menu_css_class', function( $classes, $menu_item, $args, $depth ) {

//     if ( ! is_array( $classes ) || false === $args || false === $depth ) {
//         return $classes;
//     }


// }, 5, 3 );
