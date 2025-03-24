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
	<header class="entry-header">
		<?php the_title( '<h1>', '</h1>' ) ?>
	</header>
	<div class="entry-content is-layout-flow wp-block-post-content">
		<?php the_content() ?>
	</div>
</article>
