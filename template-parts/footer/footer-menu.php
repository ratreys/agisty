<?php
/**
 * Display the site footer menu.
 *
 * @package Agisty
 */

if ( has_nav_menu( 'menu-footer' ) ) :
    ?>
    <nav class="is-layout-flex width-wide wp-block-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'agisty' ) ?>">
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-footer',
            'menu_class'     => 'menu-footer wp-block-navigation__container',
            'items_wrap'     => '<menu class="%2$s">%3$s</menu>',
            'fallback_cb'    => false,
            'container'      => false,
        ]);
        ?>
    </nav>
    <?php
endif;
