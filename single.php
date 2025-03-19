<?php
/**
 * Template for displaying all posts.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="is-layout-constrained agisty-wrapper__main">
	<main id="main" class="is-layout-flex alignwide agisty__main" tabindex="-1">
		<?php
		while ( have_posts() ) : the_post();
			// Display post content.
			get_template_part( 'template-parts/content/content-single' );
		endwhile;
		?>
	</main>
</div>
<?php get_footer() ?>
