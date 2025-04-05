<?php
/**
 * Display 404 page if no content is found.
 * 
 * @package Agisty
 */

get_header();
?>
<div class="wrapper-site__main grow">
<main id="main" class="is-layout-constrained pb-main width-wide agisty-main__404" tabindex="-1">
	<article class="type-404">
		<h1 class="entry-header 404-header">Page not found</h1>
		<div class="entry-content is-layout-flow flow-content">
			<p>Sorry, but the page you were looking for might have been removed, renamed, or did not exist in the first place.</p>
			<!-- Home page link: -->
			<div class="wp-block-buttons is-content-justification-left is-layout-flex">
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="/">Home Page</a>
				</div>
			</div>
		</div>
	</article>
</main>
</div>
<?php get_footer() ?>
