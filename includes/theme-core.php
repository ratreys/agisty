<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @link 	https://developer.wordpress.org/themes/basics/theme-functions/
 * @link 	https://developer.wordpress.org/reference/functions/add_theme_support/
 *
 * @author 	Rey Sanchez
 * @license GPLv3.0
 */

namespace Agisty\Core;

add_action( 'after_setup_theme', function() {
    // This feature enables this theme to manage the document title tag.
	add_theme_support( 'title-tag' );

    // Enables Automatic Feed Links for post and comment in the head.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for featured image.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'responsive-embeds' );

    add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'html5', [
			'search-form',
			'gallery',
			'caption',

			/**
			* Remove type="text/javascript" and type="text/css" from enqueued scripts and styles.
			* Added in v5.3.
     		*
     		* @link https://make.wordpress.org/core/2019/10/15/miscellaneous-developer-focused-changes-in-5-3/
     		*/
			'script',
			'style',

			/**
     		* Accessibility improvements to widgets outputting lists of links.
			* Added in v5.5.
     		*
     		* @link https://make.wordpress.org/core/2020/07/09/accessibility-improvements-to-widgets-outputting-lists-of-links-in-5-5/
     		*/
			'navigation-widgets'
		]
	);

	/**
	 * Adding custom logo support.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/custom-logo/#adding-custom-logo-support-to-your-theme
	 */
	add_theme_support(
		'custom-logo', [
			'height'      =>  70, /* px */
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

	register_nav_menus( [
		'menu-header' => esc_html__( 'Header Menu', 'agisty' ),
		'menu-footer' => esc_html__( 'Footer Menu', 'agisty' ),
	] );

	add_theme_support( 'editor-styles' );
	// add_editor_style();
} );


add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style(
        'agisty-main',
        get_theme_file_uri( '/assets/css/main.css' ),
        [],
        filemtime( get_theme_file_path( '/assets/css/main.css') )
	);
} );