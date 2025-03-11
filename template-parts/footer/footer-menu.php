<?php
/**
 * Display the site footer menu.
 * 
 * @package Agisty
 */

if ( has_nav_menu( 'menu-footer' ) ) : 
	?>
	<nav id="footer-nav" class="is-layout-flex wp-block-navigation agisty-footer__menu" aria-label="<?php esc_attr_e( 'Footer menu', 'agisty' ) ?>">
		<?php
		wp_nav_menu( [
			'container'         => false,
			'fallback_cb'       => false,
			'items_wrap'        => '<ul id="footer-menu-list" class="%2$s">%3$s</ul>',
			'menu_class'        => 'is-layout-flex footer-menu-wrapper',
			'theme_location'    => 'menu-footer',
		] );
		?>
	</nav>
	<?php
endif;
