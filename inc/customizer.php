<?php
/**
 * Twenty Seventeen: Customizer
 *
 * @package WordPress
 * @subpackage ThemeFW
 * @since 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function twentyseventeen_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'twentyseventeen_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'twentyseventeen_customize_partial_blogdescription',
	) );

	// $wp_customize->add_setting('mg_site_layout', array(
	// 	'default'        => 'fullwidth'
	// ));
	// $wp_customize->add_control('mg_site_layout', array(
	// 	'label'      => __('Layout', 'themefw'),
	// 	'section'    => 'title_tagline',
	// 	'settings'   => 'mg_site_layout',
	// 	'type'       => 'radio',
	// 	'choices'    => array(
	// 	'fullwidth' => 'Fullwidth',
	// 	'boxed' => 'Boxed',
	// 	),
	// ));

	// Header Layouts
	$wp_customize->add_section('mg_header_layout_sec', array(
		'title'    => __('Header Layout', 'mg-themes'),
		'priority' => 25,
		'description' => '',
	));
	$wp_customize->add_setting('mg_header_layout', array(
		'default'        => 'scroll'
	));
	$wp_customize->add_control('mg_header_layout', array(
		'label'      => __('Layout', 'mg-themes'),
		'section'    => 'mg_header_layout_sec',
		'settings'   => 'mg_header_layout',
		'type'       => 'radio',
		'choices'    => array(
		'scroll' => 'Default',
		'fixed'  => 'Fixed',
		'shrink'  => 'Shrink'
		),
	));
	$wp_customize->add_setting('mg_header_color', array(
		'default'        => '#ffffff'
	));
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'link_color', 
		array(
		  'label'      => __( 'Header Color', 'mg-themes' ),
		  'section'    => 'mg_header_layout_sec',
		  'settings'   => 'mg_header_color',
		) ) 
	);
	$wp_customize->add_setting('mg_logo_align', array(
		'default'        => 'left'
	));
	$wp_customize->add_control('mg_logo_align', array(
		'label'      => __('Logo Align', 'mg-themes'),
		'section'    => 'mg_header_layout_sec',
		'settings'   => 'mg_logo_align',
		'type'       => 'radio',
		'choices'    => array(
		'left' => 'Left',
		'center'  => 'Center',
		'right'  => 'Right'
		),
	));
	$wp_customize->add_setting('show_menu_location', array(
		'default'        => 'default'
	));
	$wp_customize->add_control('show_menu_location', array(
		'label'      => __('Menu Location', 'mg-themes'),
		'section'    => 'mg_header_layout_sec',
		'settings'   => 'show_menu_location',
		'type'       => 'radio',
		'choices'    => array(
		'top'     => 'Top',
		'default'  => 'Default',
		'bottom'  => 'Bottom'
		),
	));

	// Social Icons
	$wp_customize->add_section('mg_social_icons_sec', array(
		'title'    => __('Social Icons', 'mg-themes'),
		'priority' => 25,
		'description' => '',
	));
	$wp_customize->add_setting('mg_icons_position', array(
		'default'        => 'header'
	));
	$wp_customize->add_control('mg_icons_position', array(
		'label'      => __('Position', 'mg-themes'),
		'section'    => 'mg_social_icons_sec',
		'settings'   => 'mg_icons_position',
		'type'       => 'radio',
		'choices'    => array(
		'header' => 'Header',
		'footer' => 'Footer',
		'both'   => 'Both',
		)
	));
	$wp_customize->add_setting( 'mg_facebook_link', [
		'default' => esc_html__( 'https://www.facebook.com/', 'mg-themes' )
	]);
	$wp_customize->add_control( 'mg_facebook_link', array(
		'label' => esc_html__( 'Facebook', 'mg-themes' ),
		'section' => 'mg_social_icons_sec',
		'type' => 'text',
	));
	$wp_customize->add_setting( 'mg_google_link', [
		'default' => esc_html__( 'https://www.google.com/', 'mg-themes' )
	]);
	$wp_customize->add_control( 'mg_google_link', array(
		'label' => esc_html__( 'Google', 'mg-themes' ),
		'section' => 'mg_social_icons_sec',
		'type' => 'text',
	));
	$wp_customize->add_setting( 'mg_youtube_link', [
		'default' => esc_html__( 'https://www.youtube.com/', 'mg-themes' )
	]);
	$wp_customize->add_control( 'mg_youtube_link', array(
		'label' => esc_html__( 'Youtube', 'mg-themes' ),
		'section' => 'mg_social_icons_sec',
		'type' => 'text',
	));
	$wp_customize->add_setting( 'mg_instagram_link', [
		'default' => esc_html__( 'https://www.instagram.com/', 'mg-themes' )
	]);
	$wp_customize->add_control( 'mg_instagram_link', array(
		'label' => esc_html__( 'Instagram', 'mg-themes' ),
		'section' => 'mg_social_icons_sec',
		'type' => 'text',
	));
	$wp_customize->add_setting( 'mg_linkedin_link', [
		'default' => esc_html__( 'https://www.linkedin.com/', 'mg-themes' )
	]);
	$wp_customize->add_control( 'mg_linkedin_link', array(
		'label' => esc_html__( 'Linkedin', 'mg-themes' ),
		'section' => 'mg_social_icons_sec',
		'type' => 'text',
	));
	$wp_customize->add_setting( 'mg_vimeo_link', [
		'default' => esc_html__( 'https://vimeo.com/', 'mg-themes' )
	]);
	$wp_customize->add_control( 'mg_vimeo_link', array(
		'label' => esc_html__( 'Vimeo', 'mg-themes' ),
		'section' => 'mg_social_icons_sec',
		'type' => 'text',
	));

	// Footer Layout
	$wp_customize->add_section('mg_footer_layout_sec', array(
		'title'    => __('Footer Layout', 'mg-themes'),
		'priority' => 25,
		'description' => '',
	));
	$wp_customize->add_setting('mg_footer_column', array(
		'default'    => '3'
	));
	$wp_customize->add_control('mg_footer_column', array(
		'label'      => __('Number of Columns', 'mg-themes'),
		'section'    => 'mg_footer_layout_sec',
		'settings'   => 'mg_footer_column',
		'type'       => 'radio',
		'choices'    => array(
		'1' => 'one',
		'2' => 'two',
		'3' => 'three',
		'4' => 'four'
		),
	));
	$wp_customize->add_setting('mg_show_siteinfo', array(
		'default'    => 'true'
	));
	$wp_customize->add_control('mg_show_siteinfo', array(
		'label'      => __('Show Siteinfo', 'mg-themes'),
		'section'    => 'mg_footer_layout_sec',
		'settings'   => 'mg_show_siteinfo',
		'type'       => 'radio',
		'choices'    => array(
		'true'   => 'Yes',
		'false'  => 'No',
		),
	));
	$wp_customize->add_setting( 'mg_siteinfo_text', [
		'default' => esc_html__( 'Proudly powered by Wordpress', 'mg-themes' )
	]);
	$wp_customize->add_control( 'mg_siteinfo_text', array(
		'label' => esc_html__( 'Info Text', 'mg-themes' ),
		'section' => 'mg_footer_layout_sec',
		'type' => 'text',
	));

	/**
	 * Custom colors.
	 */
	$wp_customize->add_setting( 'colorscheme', array(
		'default'           => 'light',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'twentyseventeen_sanitize_colorscheme',
	) );

	$wp_customize->add_setting( 'colorscheme_hue', array(
		'default'           => 250,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint', // The hue is stored as a positive integer.
	) );

	$wp_customize->add_control( 'colorscheme', array(
		'type'    => 'radio',
		'label'    => __( 'Color Scheme', 'themefw' ),
		'choices'  => array(
			'light'  => __( 'Light', 'themefw' ),
			'dark'   => __( 'Dark', 'themefw' ),
			'custom' => __( 'Custom', 'themefw' ),
		),
		'section'  => 'colors',
		'priority' => 5,
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorscheme_hue', array(
		'mode' => 'hue',
		'section'  => 'colors',
		'priority' => 6,
	) ) );

	/**
	 * Theme options.
	 */
	$wp_customize->add_section( 'theme_options', array(
		'title'    => __( 'Theme Options', 'themefw' ),
		'priority' => 130, // Before Additional CSS.
	) );

	$wp_customize->add_setting( 'page_layout', array(
		'default'           => 'two-column',
		'sanitize_callback' => 'twentyseventeen_sanitize_page_layout',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'page_layout', array(
		'label'       => __( 'Page Layout', 'themefw' ),
		'section'     => 'theme_options',
		'type'        => 'radio',
		'description' => __( 'When the two-column layout is assigned, the page title is in one column and content is in the other.', 'themefw' ),
		'choices'     => array(
			'one-column' => __( 'One Column', 'themefw' ),
			'two-column' => __( 'Two Column', 'themefw' ),
		),
		'active_callback' => 'twentyseventeen_is_view_with_layout_option',
	) );

	/**
	 * Filter number of front page sections in Twenty Seventeen.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param int $num_sections Number of front page sections.
	 */
	$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'themefw' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'themefw' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'twentyseventeen_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'twentyseventeen_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'twentyseventeen_customize_register' );

/**
 * Sanitize the page layout options.
 *
 * @param string $input Page layout.
 */
function twentyseventeen_sanitize_page_layout( $input ) {
	$valid = array(
		'one-column' => __( 'One Column', 'themefw' ),
		'two-column' => __( 'Two Column', 'themefw' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}

/**
 * Sanitize the colorscheme.
 *
 * @param string $input Color scheme.
 */
function twentyseventeen_sanitize_colorscheme( $input ) {
	$valid = array( 'light', 'dark', 'custom' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light';
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Twenty Seventeen 1.0
 * @see twentyseventeen_customize_register()
 *
 * @return void
 */
function twentyseventeen_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Twenty Seventeen 1.0
 * @see twentyseventeen_customize_register()
 *
 * @return void
 */
function twentyseventeen_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function twentyseventeen_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function twentyseventeen_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function twentyseventeen_customize_preview_js() {
	wp_enqueue_script( 'twentyseventeen-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'twentyseventeen_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function twentyseventeen_panels_js() {
	wp_enqueue_script( 'twentyseventeen-customize-controls', get_theme_file_uri( '/assets/js/customize-controls.js' ), array(), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'twentyseventeen_panels_js' );
