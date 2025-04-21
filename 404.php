<?php
/**
 * Display 404 page if no content is found.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="wrapper-site__main grow">
<main id="main" class="is-layout-constrained pb-main width-wide agisty-main__error404" tabindex="-1">
	<?php get_template_part( 'template-parts/content/content-none' ) ?>
</main>
</div>
<?php get_footer() ?>
