<?php
/**
 * Display the site footer menu.
 * 
 * @package Agisty
 */

if ( has_nav_menu( 'menu-footer' ) ) : 
	?>
	<nav class="is-layout-flex wp-block-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'agisty' ) ?>">
		<?php
		wp_nav_menu( [
			'theme_location'    => 'menu-footer',
			'menu_class'        => 'is-layout-flex wp-block-navigation__container wrapper-menu',
			'items_wrap'        => '<ul id="footer-menu-list" class="%2$s">%3$s</ul>',
			'fallback_cb'       => false,
			'container'         => false,
		] );
		?>
	</nav>
	<?php
endif;
