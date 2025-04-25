<?php
/**
 * Template for displaying all posts.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="wrapper-site__main grow">
<main id="main" class="width-wide agisty-main__post" tabindex="-1">
	<div class="pb-48px" data-layout="sidebar">
		<?php
		while ( have_posts() ) : 
			the_post();
			// Display post content.
			get_template_part( 'template-parts/content/content-single' );
		endwhile;
		?>
		<aside class="post-sidebar" data-column="sidebar">
			<h2>Related Articles</h2>
		</aside>
	</div>
</main>
</div>
<?php get_footer() ?>
