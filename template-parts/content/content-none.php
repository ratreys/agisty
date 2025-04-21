<?php
/**
 * Template part for displaying 404 pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Agisty
 */

?>
<article class="type-error404">
	<header class="entry-header header-not__found">
		<h1><?php esc_html_e( 'Page not found', 'agisty' ) ?> </h1>
	</header>
	<div class="entry-content is-layout-flow flow-content">
		<p><?php esc_html_e( 'Sorry, but the page you were looking for might have been removed, renamed, or did not exist in the first place.', 'agisty' ) ?></p>
		<div class="wp-block-buttons is-content-justification-left is-layout-flex">
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button" href="/"><?php esc_html_e( 'Home Page', 'agisty' ) ?></a>
			</div>
		</div>
	</div>
</article>
