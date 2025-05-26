<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agisty
 */

?>
<div class="wrapper-site__footer" itemscope itemtype="https://schema.org/WPFooter">
    <footer id="footer" class="agisty-footer">
        <div class="wrapper-nav__footer" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php get_template_part( 'template-parts/footer/footer-menu' ) ?>
        </div>
        <div class="wrapper-agisty__copyright">
            <?php
            printf(
                '<p class="agisty-copyright width-wide">© <time datetime="%1$s">%2$s</time> %3$s</p>',
                esc_attr( gmdate( 'Y' ) ),
                esc_html( gmdate( 'Y' ) ),
                esc_html( get_bloginfo( 'name' ) )
            );
            ?>
        </div>
    </footer>
</div>
<?php wp_footer() ?>
</body>
</html>
