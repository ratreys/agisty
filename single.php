<?php
/**
 * Template for displaying all posts.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="wrapper-site__main grow">
<main id="main" class="is-layout-constrained pb-main width-wide agisty-main__post" tabindex="-1">
	<?php
	while ( have_posts() ) : 
		the_post();
		// Display post content.
		get_template_part( 'template-parts/content/content-single' );
	endwhile;
	?>
</main>
</div>
<?php get_footer() ?>
