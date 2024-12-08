<?php
/**
 * Template for displaying all posts.
 */

namespace Agisty;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-single' );

	$next_label = esc_html__( 'Next Post', 'agisty' );
	$prev_label = esc_html__( 'Prev Post', 'agisty' );

	// the_post_navigation( [
	// 	'next-text' => '<p class="meta-nav">' . $next_label . '</p><p class="post-title">%title</p>',
	// 	'prev-text' => '<p class="meta-nav">' . $prev_label . '</p><p class="post-title">%title</p>',
	// ] );

endwhile;

get_footer();
