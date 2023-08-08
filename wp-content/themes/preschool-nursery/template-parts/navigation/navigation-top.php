<?php
/**
 * Displays top navigation
 */
?>

<div class="header-menu">
	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'preschool-nursery' ); ?>">
		<button role="tab" class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
			<?php
				esc_html_e( 'Menu', 'preschool-nursery' );
			?>
		</button>
		<?php wp_nav_menu( array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		) ); ?>
	</nav>
</div>