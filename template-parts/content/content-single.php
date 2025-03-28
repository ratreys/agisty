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
		<hgroup class="entry-header__group">
			<?php the_title( '<h1 class="entry-header__title">', '</h1>' ) ?>
			<?php the_excerpt() ?>
		</hgroup>
	</header>
	<div class="entry-content is-layout-flow">
		<?php the_content() ?>
	</div>
</article>
