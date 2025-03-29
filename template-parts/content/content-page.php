<?php
/**
 * Template part for displaying all pages.
 * 
 * @package Agisty
 */

?>
<article <?php post_class() ?>>
	<header class="entry-header page-header">
		<hgroup class="page-header__group">
			<?php the_title( '<h1 class="page-header__title">', '</h1>' ) ?>
		</hgroup>
	</header>
	<div class="entry-content is-layout-flow flow-content">
		<?php the_content() ?>
	</div>
</article>
