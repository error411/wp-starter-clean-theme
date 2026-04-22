<?php
/**
 * Asset loading.
 *
 * @package StarterClean
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_asset_version' ) ) {
	/**
	 * Use filemtime during local development so changed assets bypass browser cache.
	 *
	 * @param string $relative_path Theme-relative asset path.
	 * @return string
	 */
	function starter_clean_asset_version( $relative_path ) {
		$file = get_theme_file_path( $relative_path );

		if ( file_exists( $file ) ) {
			return (string) filemtime( $file );
		}

		return wp_get_theme()->get( 'Version' );
	}
}

if ( ! function_exists( 'starter_clean_enqueue_assets' ) ) {
	/**
	 * Enqueue front-end assets.
	 */
	function starter_clean_enqueue_assets() {
		wp_enqueue_style(
			'starter-clean-main',
			get_theme_file_uri( '/assets/css/main.css' ),
			array(),
			starter_clean_asset_version( '/assets/css/main.css' )
		);

		wp_enqueue_script(
			'starter-clean-main',
			get_theme_file_uri( '/assets/js/main.js' ),
			array(),
			starter_clean_asset_version( '/assets/js/main.js' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'starter_clean_enqueue_assets' );

if ( ! function_exists( 'starter_clean_enqueue_editor_assets' ) ) {
	/**
	 * Enqueue editor CSS so content editing roughly matches the front end.
	 */
	function starter_clean_enqueue_editor_assets() {
		wp_enqueue_style(
			'starter-clean-editor',
			get_theme_file_uri( '/assets/css/editor.css' ),
			array(),
			starter_clean_asset_version( '/assets/css/editor.css' )
		);
	}
}
add_action( 'enqueue_block_editor_assets', 'starter_clean_enqueue_editor_assets' );
