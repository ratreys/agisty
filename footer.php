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
<footer id="footer" class="width-wide agisty-footer">
	<div class="wrapper-nav__footer" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<?php get_template_part( 'template-parts/footer/footer-menu' ) ?>
	</div>
	<?php 
	printf(
		'<p>© %1$s</p>',
		esc_html( gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' ) ),
	);
	?>
</footer>
</div>
<?php wp_footer() ?>
</body>
</html>
