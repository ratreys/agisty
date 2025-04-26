<?php
/**
 * Display site header including site branding and navigation.
 * 
 * @package Agisty
 */

?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ) ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open() ?>
<a class="visually-hidden skip-link" href="#main"><?php esc_html_e( 'Skip to main content', 'agisty' ) ?></a>
<div class="wrapper-site__header" itemscope itemtype="https://schema.org/WPHeader">
	<header id="header" class="is-layout-constrained width-wide agisty-header">
		<nav class="is-layout-flex alignwide wp-block-navigation header-menu__nav">
			<?php 
			get_template_part( 'template-parts/header/header-logo' );
			get_template_part( 'template-parts/header/header-menu' );
			?>
		</nav>
	</header>
</div>
