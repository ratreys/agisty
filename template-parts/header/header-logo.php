<?php
/**
 * If a custom logo is available, it displays the logo using `the_custom_logo()`.
 * If no custom logo is set, it displays the site title as a link to the home page.
 *
 * @package agisty
 */

namespace Agisty;

$site_title = get_bloginfo( 'name' );
$site_url   = home_url( '/' );

if ( has_custom_logo() ) :
	the_custom_logo();
else : 
	?>
	<a href="<?php echo esc_url( $site_url ); ?>" rel="home"><?php esc_html_e( $site_title, 'agisty' ); ?></a>
	<?php 
endif;