<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Agisty
 */

?>
<article <?php post_class() ?>>
	<header class="entry-header post-header">
		<hgroup class="flow-content">
			<?php the_title( '<h1 class="entry-header__title">', '</h1>' ) ?>
			<section aria-label="article snippet" class="entry-header__excerpt">
				<?php the_excerpt() ?>
			</section>
			<?php
			printf(
				'<p class="entry-header__meta">%1$s<time datetime="%2$s">%3$s</time></p>',
				esc_html__( 'Updated: ', 'agisty' ),
				esc_attr( get_the_modified_date( 'c' ) ),
				esc_html( get_the_modified_date( 'M Y' ) )
			);
			?>
		</hgroup>
	</header>
	<section aria-label="article content" class="entry-content is-layout-flow flow-content">
		<?php the_content() ?>
	</section>
</article>
