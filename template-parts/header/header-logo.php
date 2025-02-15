<?php
/**
 * If a custom logo is available, it displays the logo using `the_custom_logo()`.
 * If no custom logo is set, it displays the site title as a link to the home page.
 *
 * @package agisty
 */
$site_title   = get_bloginfo( 'name' );
$site_tagline = get_bloginfo( 'description' );

if ( has_custom_logo() ) :
	the_custom_logo();
else : 
	?>
	<a class="wp-block-site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( $site_title, 'agisty' ) ?></a>
	<?php 
endif;