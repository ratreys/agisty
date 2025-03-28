<?php
/**
 * Template part for displaying all page.
 * 
 * @package Agisty
 */

?>
<article <?php post_class() ?>>
	<header class="entry-header">
		<hgroup class="entry-header__group">
			<?php the_title( '<h1 class="entry-header__title">', '</h1>' ) ?>
		</hgroup>
	</header>
	<div class="entry-content is-layout-flow">
		<?php the_content() ?>
	</div>
</article>
