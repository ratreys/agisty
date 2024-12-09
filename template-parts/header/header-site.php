<div class="is-layout-constrained" itemscope itemtype="https://schema.org/WPHeader">
	<header id="header" class="is-layout-flex alignwide agisty__header">
		<div class="agisty-header__logo">
			<?php get_template_part( 'template-parts/header/header-logo' ); ?>
		</div>
		<div class="is-layout-flex header-menu__container" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<button class="header-menu-button" aria-label="<?php esc_attr_e( 'Menu', 'agisty' ); ?>" type="button">
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="28"
					height="28"
					viewBox="0 0 24 24"
					fill="none"
					stroke="currentColor"
					stroke-width="0.8571428571428571"
					stroke-linecap="round"
					stroke-linejoin="round"
					class="header-menu-icon"
				>
					<line x1="4" x2="20" y1="12" y2="12"/>
					<line x1="4" x2="20" y1="6" y2="6"/>
					<line x1="4" x2="20" y1="18" y2="18"/>
				</svg>
			</button>
		</div>
	</header>
</div>
