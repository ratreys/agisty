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

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content/content' );
	endwhile;
endif;

get_footer();
