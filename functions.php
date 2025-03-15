<?php
/**
 * Agisty theme setup functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 * @link    https://developer.wordpress.org/reference/functions/add_theme_support/
 *
 * @package Agisty
 */

namespace Agisty;

define( 'AGISTYINC', get_template_directory() . '/includes' );

require_once AGISTYINC . '/agisty-core.php';
require_once AGISTYINC . '/agisty-overrides.php';