<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Technical debt:
 * - Add a post class using post_class()
 * - Change agisty-post to type-post
 */
?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="wp-block-post-title">', '</h1>' );
		else :
			the_title( '<h2 class="wp-block-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header>
	<div class="entry-content is-layout-flow wp-block-post-content">
		<?php the_content(); ?>
	</div>
</article>
<aside class="is-layout-flex agisty__sidebar">
	<div style="background-color: yellow;"><h2>Sidebar</h2></div>
</aside>
