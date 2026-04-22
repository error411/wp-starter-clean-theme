<?php
/**
 * General theme helpers.
 *
 * @package StarterCleanPro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_pro_has_acf' ) ) {
	function starter_clean_pro_has_acf() {
		return function_exists( 'get_field' ) && function_exists( 'have_rows' );
	}
}

if ( ! function_exists( 'starter_clean_pro_get_field' ) ) {
	function starter_clean_pro_get_field( $field_name, $default = '', $post_id = false ) {
		if ( starter_clean_pro_has_acf() ) {
			$value = get_field( $field_name, $post_id );

			if ( null !== $value && '' !== $value && false !== $value ) {
				return $value;
			}
		}

		return $default;
	}
}

if ( ! function_exists( 'starter_clean_pro_get_sub_field' ) ) {
	function starter_clean_pro_get_sub_field( $field_name, $default = '' ) {
		if ( function_exists( 'get_sub_field' ) ) {
			$value = get_sub_field( $field_name );

			if ( null !== $value && '' !== $value && false !== $value ) {
				return $value;
			}
		}

		return $default;
	}
}

if ( ! function_exists( 'starter_clean_pro_section_map' ) ) {
	function starter_clean_pro_section_map() {
		return array(
			'hero_section'         => 'hero',
			'text_content_section' => 'text-content',
			'cta_section'          => 'cta',
			'feature_grid_section' => 'feature-grid',
		);
	}
}

if ( ! function_exists( 'starter_clean_pro_render_section' ) ) {
	function starter_clean_pro_render_section( $layout_name ) {
		$section_map = starter_clean_pro_section_map();

		if ( empty( $section_map[ $layout_name ] ) ) {
			return;
		}

		$template = get_theme_file_path( '/template-parts/sections/' . $section_map[ $layout_name ] . '.php' );

		if ( file_exists( $template ) ) {
			get_template_part( 'template-parts/sections/' . $section_map[ $layout_name ] );
		}
	}
}

if ( ! function_exists( 'starter_clean_pro_render_page_sections' ) ) {
	function starter_clean_pro_render_page_sections( $post_id = false ) {
		if ( ! starter_clean_pro_has_acf() || ! have_rows( 'page_sections', $post_id ) ) {
			return false;
		}

		while ( have_rows( 'page_sections', $post_id ) ) {
			the_row();
			starter_clean_pro_render_section( get_row_layout() );
		}

		return true;
	}
}
