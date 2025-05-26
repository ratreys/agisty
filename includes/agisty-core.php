<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @link https://make.wordpress.org/themes/handbook/review/recommended/
 *
 * @package Agisty
 */

namespace Agisty;

/**
 * Perform basic setup, registration, and init actions for the theme.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
 * @link https://developer.wordpress.org/reference/hooks/after_setup_theme/
 */
add_action( 'after_setup_theme', function () {

    /**
     * Allows WordPress to manage the document title.
     *
     * @link https://make.wordpress.org/themes/handbook/review/recommended/#document-title-tag-should-not-be-used
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
     * Make the content resize and keep its aspect ratio by adding wp-embed-responsive CSS class to the body HTML element.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support( 'responsive-embeds' );

    add_theme_support(
        'html5', [
            'caption',
            'gallery',
            'search-form',

            /**
             * Remove type=text/javascript and type=text/css from enqueued JS scripts and CSS styles.
             *
             * @link https://make.wordpress.org/core/2019/10/15/miscellaneous-developer-focused-changes-in-5-3/
             */
            'script',
            'style',

            /**
             * Accessibility improvements to widgets outputting lists of links.
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
     * Theme's editor style.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#editor-styles
     * @link https://developer.wordpress.org/reference/functions/add_editor_style/
     */
    add_theme_support( 'editor-styles' );
    add_editor_style( '/assets/css/admin/editor-styles.css' );

    /**
     * Remove WordPress core block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support( 'core-block-patterns' );

    /**
     * Adding `theme.json` file automatically enables block templates.
     */
    remove_theme_support( 'block-templates' );

    register_nav_menus([
        'menu-header' => __( 'Header Menu', 'agisty' ),
        'menu-footer' => __( 'Footer Menu', 'agisty' ),
    ]);
}); // End of after_setup_theme hook.

/**
 * Initiate sidebar widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * @link https://developer.wordpress.org/reference/functions/wp_widgets_init/
 */
add_action( 'widgets_init', function () {
    register_sidebar([
        'id'            => 'main-sidebar',
        'name'          => __( 'Main Sidebar', 'agisty' ),
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'agisty' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
});

/**
 * Enqueue theme's main CSS file on the frontend.
 *
 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'agisty-main',
        get_theme_file_uri( '/assets/css/main.css' ),
        [],
        filemtime( get_theme_file_path( '/assets/css/main.css' ) )
    );
});

/**
 * Enqueue JS file to cleanup the block editor. This will remove embed variations.
 *
 * @link https://developer.wordpress.org/block-editor/how-to-guides/enqueueing-assets-in-the-editor/
 * @link https://developer.wordpress.org/reference/hooks/enqueue_block_editor_assets/
 */
add_action( 'enqueue_block_editor_assets', function () {
    wp_enqueue_script(
        'editor-cleanup',
        get_theme_file_uri( '/assets/js/editor-cleanup.js' ),
        [ 'wp-blocks', 'wp-dom-ready' ],
        filemtime( get_theme_file_path( '/assets/js/editor-cleanup.js' ) ),
        true
    );
});
