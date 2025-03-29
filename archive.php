<?php
/**
 * Display archive pages.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="width-wide grow">
<main class="is-layout-constrained agisty-main__archive padding-block__main" id="main" tabindex="-1">
	<section class="alignwide">
		<ul class="is-layout-grid entry-card__wrapper" role="list">
		<?php
		while ( have_posts() ) :
			the_post()
			?>
			<li class="entry-card">
				<?php
				// Display post content.
				the_title( '<h2 class="entry-card__heading"><a class="entry-card__link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				the_excerpt();
				?>
			</li>
			<?php 
		endwhile;
		?>
		</ul>
	</section>
</main>
</div>
<?php get_footer() ?>