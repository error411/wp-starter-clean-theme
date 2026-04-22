<?php
/**
 * Custom post types.
 *
 * @package StarterClean
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_register_post_types' ) ) {
	function starter_clean_register_post_types() {
		register_post_type(
			'service',
			array(
				'labels'       => array(
					'name'          => esc_html__( 'Services', 'starter-clean' ),
					'singular_name' => esc_html__( 'Service', 'starter-clean' ),
					'add_new_item'  => esc_html__( 'Add New Service', 'starter-clean' ),
					'edit_item'     => esc_html__( 'Edit Service', 'starter-clean' ),
				),
				'public'       => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-hammer',
				'rewrite'      => array( 'slug' => 'services' ),
				'show_in_rest' => true,
				'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			)
		);

		register_post_type(
			'testimonial',
			array(
				'labels'       => array(
					'name'          => esc_html__( 'Testimonials', 'starter-clean' ),
					'singular_name' => esc_html__( 'Testimonial', 'starter-clean' ),
					'add_new_item'  => esc_html__( 'Add New Testimonial', 'starter-clean' ),
					'edit_item'     => esc_html__( 'Edit Testimonial', 'starter-clean' ),
				),
				'public'       => true,
				'has_archive'  => false,
				'menu_icon'    => 'dashicons-format-quote',
				'rewrite'      => array( 'slug' => 'testimonials' ),
				'show_in_rest' => true,
				'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			)
		);
	}
}
add_action( 'init', 'starter_clean_register_post_types' );

if ( ! function_exists( 'starter_clean_flush_rewrite_rules' ) ) {
	function starter_clean_flush_rewrite_rules() {
		starter_clean_register_post_types();
		flush_rewrite_rules();
	}
}
add_action( 'after_switch_theme', 'starter_clean_flush_rewrite_rules' );
