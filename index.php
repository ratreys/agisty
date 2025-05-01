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
<div class="is-layout-constrained wrapper-site__main grow">
<main id="main" class="alignwide width-wide agisty-main__index" tabindex="-1">
	<div class="is-layout-constrained is-layout-flex pb-48px" data-layout="with-sidebar">
		<section aria-label="article list">
			<h1 class="visually-hidden"><?php esc_html_e( get_bloginfo( 'name' ) ) ?></h1>
			<ul class="entry-card__wrapper" data-role="list">
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
		</section>
		<section aria-label="aside elements" class="wrapper-section__sidebar">
			<aside class="main-index__aside">
				<?php get_search_form() ?>
			</aside>
		</section>
	</div>
</main>
</div>
<?php get_footer() ?>