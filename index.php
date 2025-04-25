<?php
/**
 * The main template file. It is required in all themes.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/themes/basics/template-files/
 * 
 * @package Agisty
 */

get_header();
?>
<div class="wrapper-site__main grow">
<main id="main" class="width-wide agisty-main__index" tabindex="-1">
	<section aria-label="article list" class="pb-48px" data-layout="sidebar">
		<ul class="is-layout-grid entry-card__wrapper list-role" data-column="content">
		<?php
		while ( have_posts() ) :
			the_post()
			?>
			<li class="entry-card">
				<?php
				// Display post content.
				the_title( '<h2 class="entry-card__heading"><a class="entry-card__link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				?>
				<section aria-label="article snippet" class="entry-card__excerpt">
					<?php the_excerpt() ?>
				</section>
			</li>
			<?php 
		endwhile;
		?>
		</ul>
		<aside class="post-sidebar" data-column="sidebar">
			<h2>Related Articles</h2>
		</aside>
	</section>
</main>
</div>
<?php get_footer() ?>