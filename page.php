<?php
/**
 * Template for displaying default pages.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="width-wide is-layout-constrained grow">
	<main id="main" class="pb-main agisty-main__page" tabindex="-1">
		<?php
		while ( have_posts() ) : 
			the_post();
			// Display post content.
			get_template_part( 'template-parts/content/content-page' );
		endwhile;
		?>
	</main>
</div>
<?php get_footer() ?>
