<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage ThemeFW
 * @since 1.0
 * @version 1.0
 */

?>
<div class="footer-info">
	<?php
	if ( get_theme_mod('mg_show_siteinfo') == 'true' ) {
		if ( !empty( get_theme_mod('mg_siteinfo_text') ) ) {
			?>
			<div class="site-info">
				<?php echo get_theme_mod('mg_siteinfo_text') ;?>
			</div>
			<?php
		}
	}
	?>
	
	<div class="social-icons right">
		<?php 
		if ( get_theme_mod('mg_icons_position') == 'footer' || get_theme_mod('mg_icons_position') == 'both' ) {
			mg_social_icons();
		}
		?>
	</div>
</div>
