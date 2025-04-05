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
		<hgroup class="flow-content post-header__group">
			<?php the_title( '<h1 class="entry-header__title">', '</h1>' ) ?>
			<div class="entry-header__excerpt">
				<?php the_excerpt() ?>
			</div>
			<?php
			printf(
				'<p class="entry-header__meta">%1$s<time datetime="%2$s">%3$s</time></p>',
				esc_html__( 'Updated: ', 'agisty' ),
				esc_attr( get_the_modified_date( 'c' ) ),
				esc_html( get_the_modified_date() )
			);
			?>
		</hgroup>
	</header>
	<div class="entry-content is-layout-flow flow-content">
		<?php the_content() ?>
	</div>
</article>
