<?php
/**
 * Customizer settings for client site details.
 *
 * @package StarterClean
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_sanitize_checkbox' ) ) {
	function starter_clean_sanitize_checkbox( $checked ) {
		return (bool) $checked;
	}
}

if ( ! function_exists( 'starter_clean_sanitize_schema_type' ) ) {
	function starter_clean_sanitize_schema_type( $value ) {
		$allowed = array( 'LocalBusiness', 'ProfessionalService', 'Store', 'Restaurant', 'MedicalBusiness' );

		return in_array( $value, $allowed, true ) ? $value : 'LocalBusiness';
	}
}

if ( ! function_exists( 'starter_clean_customize_register' ) ) {
	function starter_clean_customize_register( $wp_customize ) {
		$wp_customize->add_section(
			'starter_clean_site_settings',
			array(
				'title'       => esc_html__( 'Site Settings', 'starter-clean' ),
				'description' => esc_html__( 'Business details used by theme templates and local business schema.', 'starter-clean' ),
				'priority'    => 160,
			)
		);

		$settings = array(
			'starter_clean_business_phone'   => array( 'label' => esc_html__( 'Phone Number', 'starter-clean' ), 'sanitize' => 'sanitize_text_field', 'type' => 'text' ),
			'starter_clean_business_email'   => array( 'label' => esc_html__( 'Email Address', 'starter-clean' ), 'sanitize' => 'sanitize_email', 'type' => 'email' ),
			'starter_clean_business_street'  => array( 'label' => esc_html__( 'Street Address', 'starter-clean' ), 'sanitize' => 'sanitize_text_field', 'type' => 'text' ),
			'starter_clean_business_city'    => array( 'label' => esc_html__( 'City', 'starter-clean' ), 'sanitize' => 'sanitize_text_field', 'type' => 'text' ),
			'starter_clean_business_region'  => array( 'label' => esc_html__( 'State / Region', 'starter-clean' ), 'sanitize' => 'sanitize_text_field', 'type' => 'text' ),
			'starter_clean_business_postal'  => array( 'label' => esc_html__( 'Postal Code', 'starter-clean' ), 'sanitize' => 'sanitize_text_field', 'type' => 'text' ),
			'starter_clean_business_country' => array( 'label' => esc_html__( 'Country', 'starter-clean' ), 'sanitize' => 'sanitize_text_field', 'type' => 'text' ),
			'starter_clean_business_hours'   => array( 'label' => esc_html__( 'Opening Hours', 'starter-clean' ), 'sanitize' => 'sanitize_text_field', 'type' => 'text' ),
			'starter_clean_price_range'      => array( 'label' => esc_html__( 'Price Range', 'starter-clean' ), 'sanitize' => 'sanitize_text_field', 'type' => 'text' ),
			'starter_clean_facebook_url'     => array( 'label' => esc_html__( 'Facebook URL', 'starter-clean' ), 'sanitize' => 'esc_url_raw', 'type' => 'url' ),
			'starter_clean_instagram_url'    => array( 'label' => esc_html__( 'Instagram URL', 'starter-clean' ), 'sanitize' => 'esc_url_raw', 'type' => 'url' ),
			'starter_clean_linkedin_url'     => array( 'label' => esc_html__( 'LinkedIn URL', 'starter-clean' ), 'sanitize' => 'esc_url_raw', 'type' => 'url' ),
		);

		foreach ( $settings as $setting_id => $setting ) {
			$wp_customize->add_setting(
				$setting_id,
				array(
					'default'           => '',
					'sanitize_callback' => $setting['sanitize'],
				)
			);

			$wp_customize->add_control(
				$setting_id,
				array(
					'label'   => $setting['label'],
					'section' => 'starter_clean_site_settings',
					'type'    => $setting['type'],
				)
			);
		}

		$wp_customize->add_setting(
			'starter_clean_schema_type',
			array(
				'default'           => 'LocalBusiness',
				'sanitize_callback' => 'starter_clean_sanitize_schema_type',
			)
		);

		$wp_customize->add_control(
			'starter_clean_schema_type',
			array(
				'label'   => esc_html__( 'Schema Business Type', 'starter-clean' ),
				'section' => 'starter_clean_site_settings',
				'type'    => 'select',
				'choices' => array(
					'LocalBusiness'       => esc_html__( 'Local Business', 'starter-clean' ),
					'ProfessionalService' => esc_html__( 'Professional Service', 'starter-clean' ),
					'Store'               => esc_html__( 'Store', 'starter-clean' ),
					'Restaurant'          => esc_html__( 'Restaurant', 'starter-clean' ),
					'MedicalBusiness'     => esc_html__( 'Medical Business', 'starter-clean' ),
				),
			)
		);

		$wp_customize->add_setting(
			'starter_clean_enable_schema',
			array(
				'default'           => true,
				'sanitize_callback' => 'starter_clean_sanitize_checkbox',
			)
		);

		$wp_customize->add_control(
			'starter_clean_enable_schema',
			array(
				'label'   => esc_html__( 'Output Local Business Schema', 'starter-clean' ),
				'section' => 'starter_clean_site_settings',
				'type'    => 'checkbox',
			)
		);
	}
}
add_action( 'customize_register', 'starter_clean_customize_register' );
