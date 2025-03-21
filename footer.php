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
<div class="agisty-wrapper__footer" itemscope itemtype="https://schema.org/WPFooter">
	<footer id="footer" class="agisty-footer">
		<div itemscope itemtype="https://schema.org/SiteNavigationElement">
			<?php get_template_part( 'template-parts/footer/footer-menu' ) ?>
		</div>
		<?php echo '<p>© ' . gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '</p>'; ?>
	</footer>
</div>
<?php wp_footer() ?>
</body>
</html>
