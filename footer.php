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

</main>
</div>
<div class="is-layout-constrained theme-footer-wrapper" itemscope itemtype="https://schema.org/WPFooter">
	<footer id="footer" class="alignwide agisty__footer">
		<div class="footer-menu__container" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<?php get_template_part( 'template-parts/footer/footer-menu' ); ?>
		</div>
		<div class="agisty-footer__copyright">
			<?php echo '<p>© ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '</p>'; ?>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
