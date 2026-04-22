<?php
/**
 * Theme setup.
 *
 * @package StarterCleanPro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_pro_setup' ) ) {
	function starter_clean_pro_setup() {
		load_theme_textdomain( 'starter-clean-pro', get_template_directory() . '/languages' );

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
				'primary' => esc_html__( 'Primary Menu', 'starter-clean-pro' ),
				'footer'  => esc_html__( 'Footer Menu', 'starter-clean-pro' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'starter_clean_pro_setup' );

if ( ! function_exists( 'starter_clean_pro_content_width' ) ) {
	function starter_clean_pro_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'starter_clean_pro_content_width', 960 );
	}
}
add_action( 'after_setup_theme', 'starter_clean_pro_content_width', 0 );

if ( ! function_exists( 'starter_clean_pro_widgets_init' ) ) {
	function starter_clean_pro_widgets_init() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Primary Sidebar', 'starter-clean-pro' ),
				'id'            => 'primary-sidebar',
				'description'   => esc_html__( 'Widgets shown on posts and archive views.', 'starter-clean-pro' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget__title">',
				'after_title'   => '</h2>',
			)
		);
	}
}
add_action( 'widgets_init', 'starter_clean_pro_widgets_init' );
