<article <?php post_class() ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="wp-block-post-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>
	</header>
	<div class="entry-content is-layout-flow wp-block-post-content">
		<?php the_content() ?>
	</div>
</article>