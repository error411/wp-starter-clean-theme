<?php
/**
 * Asset loading.
 *
 * @package StarterCleanPro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_pro_asset_version' ) ) {
	/**
	 * File modification versions keep local CSS/JS changes from being cached.
	 */
	function starter_clean_pro_asset_version( $relative_path ) {
		$file = get_theme_file_path( $relative_path );

		if ( file_exists( $file ) ) {
			return (string) filemtime( $file );
		}

		return wp_get_theme()->get( 'Version' );
	}
}

if ( ! function_exists( 'starter_clean_pro_enqueue_assets' ) ) {
	function starter_clean_pro_enqueue_assets() {
		wp_enqueue_style(
			'starter-clean-pro-main',
			get_theme_file_uri( '/assets/css/main.css' ),
			array(),
			starter_clean_pro_asset_version( '/assets/css/main.css' )
		);

		wp_enqueue_script(
			'starter-clean-pro-main',
			get_theme_file_uri( '/assets/js/main.js' ),
			array(),
			starter_clean_pro_asset_version( '/assets/js/main.js' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'starter_clean_pro_enqueue_assets' );

if ( ! function_exists( 'starter_clean_pro_enqueue_editor_assets' ) ) {
	function starter_clean_pro_enqueue_editor_assets() {
		wp_enqueue_style(
			'starter-clean-pro-editor',
			get_theme_file_uri( '/assets/css/editor.css' ),
			array(),
			starter_clean_pro_asset_version( '/assets/css/editor.css' )
		);
	}
}
add_action( 'enqueue_block_editor_assets', 'starter_clean_pro_enqueue_editor_assets' );
