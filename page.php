<?php
/**
 * Template for displaying default pages.
 * 
 * @package Agisty
 */

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );
endwhile;

get_footer();
