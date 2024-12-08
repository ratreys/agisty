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

namespace Agisty;

define( 'AGISTYINC', get_template_directory() . '/includes' );

require_once AGISTYINC . '/theme-core.php';
require_once AGISTYINC . '/theme-overrides.php';
