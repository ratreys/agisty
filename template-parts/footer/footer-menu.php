<?php
if ( has_nav_menu( 'menu-footer' ) ) : ?>
<nav id="footer-nav" class="wp-block-navigation is-layout-flex footer-menu__nav" aria-label="<?php esc_attr_e( 'Footer menu', 'agisty' ); ?>">
	<?php
	wp_nav_menu( [
		'container'		 	=> false,
		'fallback_cb'		=> false,
		'items_wrap'		=> '<ul id="footer-menu-list" class="%2$s">%3$s</ul>',
		'menu_class'	 	=> 'footer-menu-wrapper is-layout-flex',
		'theme_location' 	=> 'menu-footer',
	] );
	?>
</nav><?php
endif;
