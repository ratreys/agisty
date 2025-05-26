<?php
/**
 * Displays the header menu if it is assigned in the theme.
 *
 * This code checks if a navigation menu is assigned to the 'menu-header' location.
 * If a menu is assigned, it renders the menu within a <div> element that includes
 * schema.org markup for a SiteNavigationElement.
 *
 * @package Agisty
 */

if ( has_nav_menu( 'menu-header' ) ) :
    ?>
    <div class="wrapper-nav__header" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-header',
            'menu_class'     => 'menu-header wp-block-navigation__container',
            'items_wrap'     => '<menu class="%2$s">%3$s</menu>',
            'fallback_cb'    => false,
            'container'      => false,
        ]);
        ?>
    </div>
    <?php
endif;
