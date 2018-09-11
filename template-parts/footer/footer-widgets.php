<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage ThemeFW
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>
<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'themefw' ); ?>">
	<?php
	if ( get_theme_mod('mg_footer_column') == 1 ) {
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1 widget-col-12">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php }
	}
	if ( get_theme_mod('mg_footer_column') == 2 ) {
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1 widget-col-6">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="widget-column footer-widget-2 widget-col-6">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php }
	}
	if ( get_theme_mod('mg_footer_column') == 3 ) {
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1 widget-col-4">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="widget-column footer-widget-2 widget-col-4">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
			<div class="widget-column footer-widget-3 widget-col-4">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		<?php }
	}
	if ( get_theme_mod('mg_footer_column') == 4 ) {
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1 widget-col-3">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="widget-column footer-widget-2 widget-col-3">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
			<div class="widget-column footer-widget-3 widget-col-3">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
			<div class="widget-column footer-widget-4 widget-col-3">
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			</div>
		<?php }
	}
	?>
</aside><!-- .widget-area -->

<?php endif; ?>
