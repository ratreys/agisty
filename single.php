<?php
/**
 * Template for displaying all posts.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="is-layout-constrained wrapper-site__main grow">
<main id="main" class="alignwide width-wide agisty-main__post" tabindex="-1">
	<div class="is-layout-constrained is-layout-flex pb-48px" data-layout="with-sidebar">
		<?php
		while ( have_posts() ) : 
			the_post();
			// Display post content.
			get_template_part( 'template-parts/content/content-single' );
		endwhile;
		?>
		<section class="wrapper-section__sidebar">
			<h2>Related Articles</h2>
		</section>
	</div>
</main>
</div>
<?php get_footer() ?>
