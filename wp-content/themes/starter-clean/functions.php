<?php
/**
 * Starter Clean theme functions.
 *
 * @package StarterClean
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function starter_clean_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'starter-clean' ),
		)
	);
}
add_action( 'after_setup_theme', 'starter_clean_setup' );

function starter_clean_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'starter-clean-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		$theme_version
	);

	wp_enqueue_script(
		'starter-clean-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'starter_clean_enqueue_assets' );
