<?php
if ( has_nav_menu( 'menu-header' ) ) : ?>
<nav id="header-nav" class="wp-block-navigation is-layout-flex header-menu__nav" aria-label="<?php esc_attr_e( 'Header menu', 'agisty' )?>">
	<?php
	wp_nav_menu( [
		'container'		 	=> false,
		'fallback_cb'		=> false,
		'items_wrap'		=> '<ul id="header-menu-list" class="%2$s">%3$s</ul>',
		'menu_class'	 	=> 'header-menu-wrapper is-layout-flex wp-block-navigation__container',
		'theme_location' 	=> 'menu-header',
	] );
	?>
</nav><?php
endif;
