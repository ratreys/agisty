<?php
/**
 * Custom functions that act independently of the theme templates.
 * 
 * @package Agisty
 */

add_filter( 'post_class', function ( $classes ) {

	if ( ! is_array( $classes ) ) {
		return $classes;
	}

	$classes[] = 'is-layout-constrained';

	$allowed_classes = [
		'entry',
		'type-' . get_post_type(),
		'is-layout-constrained',
	];

	return array_intersect( $classes, $allowed_classes );
} );
