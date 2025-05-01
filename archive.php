<?php
/**
 * Display archive pages.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="is-layout-constrained wrapper-site__archive grow">
<main id="main" class="alignwide width-wide agisty-main__archive" tabindex="-1">
	<div class="is-layout-constrained pb-48px type-archive" data-layout="with-sidebar">
		<div class="is-layout-grid gap-32px">
			<header class="entry-header archive-header">
				<hgroup class="flow-content">
					<?php the_archive_title( '<h1 class="archive-header__title">', '</h1>' ) ?>
					<section aria-label="category description" class="archive-header__description">
						<?php the_archive_description() ?>
					</section>
				</hgroup>
			</header>
			<section aria-label="article list">
				<ul class="is-layout-grid entry-card__wrapper" data-role="list">
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
		</div>
		<section aria-label="aside elements" class="wrapper-section__sidebar">
			<aside class="main-archive__sidebar">
				<h2>Related Articles</h2>
			</aside>
		</section>
	</div>
</main>
</div>
<?php get_footer() ?>