<?php
/**
 * creator Theme Customizer
 *
 * @package creator
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function creator_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'creator_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'creator_customize_partial_blogdescription',
			)
		);
	}
	$wp_customize->add_setting( 'creator_header_bg_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#161616',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_header_bg_color', array(
		'label' => __( 'Header BG Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_header_border_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#161616',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_header_border_color', array(
		'label' => __( 'Header Border Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'search_form_field_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#262626',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_form_field_color', array(
		'label' => __( 'Search Text Field Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'search_form_field_text_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#666',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_form_field_color', array(
		'label' => __( 'Search Field Text Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'search_form_field_border_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#444442',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_form_field_border_color', array(
		'label' => __( 'Search Field Border Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_nav_bg_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#161616',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_nav_bg_color', array(
		'label' => __( 'Navigation BG Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_nav_text_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#b5b5b5',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_nav_text_color', array(
		'label' => __( 'Navigation Text Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_nav_current_menu_item_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#1c1c1c',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_nav_current_menu_item_color', array(
		'label' => __( 'Navigation Current Menu Item Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_post_title_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#919191',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_post_title_color', array(
		'label' => __( 'Post Title Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_post_metadata_text_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#494949',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_post_metadata_text_color', array(
		'label' => __( 'Post Metadata Text Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_post_metadata_link_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#969696',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_post_metadata_link_color', array(
		'label' => __( 'Post Metadata Link Color', 'creator' ),
		'section' => 'colors',
	  ) ) );
	
	$wp_customize->add_setting( 'creator_pagination_text_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#969696',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_pagination_text_color', array(
		'label' => __( 'Pagination Text Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_pagination_current_item_bg_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#40726d',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_pagination_current_item_bg_color', array(
		'label' => __( 'Pagination Current Item BG Color + Default Link Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_pagination_current_item_text_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#c6c6c6',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_pagination_current_item_text_color', array(
		'label' => __( 'Pagination Current Item Text Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_footer_bg_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#1b1b1b',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_footer_bg_color', array(
		'label' => __( 'Footer BG Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_footer_text_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#5e5e5e',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_footer_text_color', array(
		'label' => __( 'Footer Text Color', 'creator' ),
		'section' => 'colors',
	  ) ) );

	$wp_customize->add_setting( 'creator_footer_link_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#40726d',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_footer_link_color', array(
		'label' => __( 'Footer Link Color', 'creator' ),
		'section' => 'colors',
	  ) ) );
	
	$wp_customize->add_setting( 'creator_body_text_color', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage',
		'default' => '#939393',
		'sanitize_callback' => 'sanitize_hex_color',
	  ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creator_body_text_color', array(
		'label' => __( 'Default Text Color', 'creator' ),
		'section' => 'colors',
	  ) ) );
}
add_action( 'customize_register', 'creator_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function creator_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function creator_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function creator_customize_preview_js() {
	wp_enqueue_script( 'creator-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'creator_customize_preview_js' );
