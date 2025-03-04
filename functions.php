<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 * @link    https://developer.wordpress.org/reference/functions/add_theme_support/
 *
 * @author  Rey Sanchez
 * @license GPLv3.0
 */

namespace Agisty;

define( 'AGISTYINC', get_template_directory() . '/includes' );

/**
 * Perform basic setup, registration, and init actions for the theme.
 * 
 * @link https://developer.wordpress.org/reference/hooks/after_setup_theme/
 */
add_action( 'after_setup_theme', function () {

	/**
	 * Allows WordPress to manage the document title.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
	 */
	add_theme_support( 'title-tag' );
	
	/**
	 * Enable RSS feed links in the head section of the theme.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#feed-links
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for featured image.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Add `wp-embed-responsive` class to the `body` element to make embeds responsive.
	 * This is to make the content resize and keep its aspect ratio.
	 * 
	 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
	 */
	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'html5', [
			'search-form',
			'gallery',
			'caption',

			/**
			 * Remove type="text/javascript" and type="text/css" from enqueued scripts and styles.
			 * Added in WordPress v5.3.
			 * 
			 * @link https://make.wordpress.org/core/2019/10/15/miscellaneous-developer-focused-changes-in-5-3/
			 */
			'script',
			'style',

			/**
			 * Accessibility improvements to widgets outputting lists of links.
			 * Added in WordPress v5.5.
			 *
			 * @link https://make.wordpress.org/core/2020/07/09/accessibility-improvements-to-widgets-outputting-lists-of-links-in-5-5/
			 */
			'navigation-widgets',
		]
	);

	/**
	 * Adding custom logo support. First introduced in WordPress v4.5.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/custom-logo/#adding-custom-logo-support-to-your-theme
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo', [
			'height'      => 70,  /* px */
			'width'       => 350, /* px */
			'flex-width'  => true,
			'flex-height' => true,
		]
	);

	/**
	 * Enables Post Formats support.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/post-formats/#supported-formats
	 * @link https://developer.wordpress.org/advanced-administration/wordpress/post-formats/
	 */
	add_theme_support(
		'post-formats', [
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		]
	);

	/**
	 * Theme's editor style.
	 * 
	 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#editor-styles
	 * @link https://developer.wordpress.org/reference/functions/add_editor_style/
	 */
	add_theme_support( 'editor-styles' );
	add_editor_style( '/assets/css/admin/style-editor.css' );

	register_nav_menus( [
		'menu-header' => esc_html__( 'Header Menu', 'agisty' ),
		'menu-footer' => esc_html__( 'Footer Menu', 'agisty' ),
	] );

	/**
	 * Remove WordPress core block patterns.
	 * 
	 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#disabling-the-default-block-patterns
	 */
	remove_theme_support( 'core-block-patterns' );
} ); // End of `after_setup_theme` hook.


add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'agisty-main',
		get_theme_file_uri( '/assets/css/main.css' ),
		[],
		filemtime( get_theme_file_path( '/assets/css/main.css' ) )
	);
} );

// require_once AGISTYINC . '/agisty-overrides.php';
// require_once AGISTYINC . '/agisty-functions.php';
