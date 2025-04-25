<?php
/**
 * If a custom logo is available, it displays the logo using `the_custom_logo()`.
 * If no custom logo is set, it displays the site title as a link to the home page.
 *
 * @package agisty
 */

if ( has_custom_logo() ) :
	the_custom_logo();
else : 
	printf(
		'<a class="agisty-site-title" href="%1$s" rel="home">%2$s</a>',
		esc_url( home_url( '/' ) ),
		esc_html( get_bloginfo( 'name' ) )
	);
endif;
