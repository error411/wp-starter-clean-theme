<?php
/**
 * Theme setup.
 *
 * @package StarterClean
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_setup' ) ) {
	/**
	 * Register theme features and navigation locations.
	 */
	function starter_clean_setup() {
		load_theme_textdomain( 'starter-clean', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_editor_style( 'assets/css/editor.css' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'starter-clean' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'starter_clean_setup' );

if ( ! function_exists( 'starter_clean_content_width' ) ) {
	/**
	 * Set the maximum content width for embeds and media.
	 */
	function starter_clean_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'starter_clean_content_width', 960 );
	}
}
add_action( 'after_setup_theme', 'starter_clean_content_width', 0 );
