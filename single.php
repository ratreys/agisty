<?php
/**
 * Template for displaying all posts.
 * 
 * @package Agisty
 */

namespace Agisty;

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-single' );

endwhile;

get_footer();
