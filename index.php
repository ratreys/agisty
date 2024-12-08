<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		echo '<h2>'; the_title(); echo '</h2>';

		the_content();
	endwhile;
else :
	get_template_part( 'template-parts/content/content-none' );
endif;

get_footer();
