<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage ThemeFW
 * @since 1.0
 * @version 1.0
 */

?>

<div class="site-branding" style="background: <?php echo get_theme_mod('mg_header_color') ?>">
	<?php
	if ( get_theme_mod('mg_icons_position') == 'header' || get_theme_mod('mg_icons_position') == 'both' ) {
		?>
		<div class="site-topbar">
			<?php
			if ( get_theme_mod('show_menu_location') == 'top' ) {
				?>
				<div class="top-menu left">
					<?php wp_nav_menu(); ?>
				</div>
				<?php
			}
			?>
			<div class="social-icons right">
				<?php mg_social_icons(); ?>
			</div>
		</div>
	<?php
	}
	?>
	<div class="wrap">

		<?php
		if (has_custom_logo()) {
			echo '<div class="site-branding-logo '.get_theme_mod('mg_logo_align').'">';
			the_custom_logo();
			if ( get_theme_mod('show_menu_location') == 'default' ) {
				?>
				<div class="top-menu default">
					<?php wp_nav_menu(); ?>
				</div>
				<?php
			}
			echo '</div>';
		}
		?>

		<div class="site-branding-text <?php echo get_theme_mod('mg_logo_align') ?>">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->

		<?php 
		if ( get_theme_mod('show_menu_location') == 'bottom' ) {
			if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
			<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'themefw' ); ?></span></a>
			<?php endif; ?>

			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif;
		}
		?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
