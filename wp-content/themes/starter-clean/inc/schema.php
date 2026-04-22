<?php
/**
 * Local business schema output.
 *
 * @package StarterClean
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_schema_value' ) ) {
	function starter_clean_schema_value( $theme_mod ) {
		return trim( (string) get_theme_mod( $theme_mod, '' ) );
	}
}

if ( ! function_exists( 'starter_clean_local_business_schema' ) ) {
	function starter_clean_local_business_schema() {
		if ( ! get_theme_mod( 'starter_clean_enable_schema', true ) || ! is_front_page() ) {
			return;
		}

		$same_as = array_filter(
			array(
				esc_url_raw( starter_clean_schema_value( 'starter_clean_facebook_url' ) ),
				esc_url_raw( starter_clean_schema_value( 'starter_clean_instagram_url' ) ),
				esc_url_raw( starter_clean_schema_value( 'starter_clean_linkedin_url' ) ),
			)
		);

		$address = array_filter(
			array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => starter_clean_schema_value( 'starter_clean_business_street' ),
				'addressLocality' => starter_clean_schema_value( 'starter_clean_business_city' ),
				'addressRegion'   => starter_clean_schema_value( 'starter_clean_business_region' ),
				'postalCode'      => starter_clean_schema_value( 'starter_clean_business_postal' ),
				'addressCountry'  => starter_clean_schema_value( 'starter_clean_business_country' ),
			)
		);

		if ( 1 === count( $address ) && isset( $address['@type'] ) ) {
			$address = array();
		}

		$schema = array_filter(
			array(
				'@context'     => 'https://schema.org',
				'@type'        => get_theme_mod( 'starter_clean_schema_type', 'LocalBusiness' ),
				'name'         => get_bloginfo( 'name' ),
				'description'  => get_bloginfo( 'description' ),
				'url'          => home_url( '/' ),
				'telephone'    => starter_clean_schema_value( 'starter_clean_business_phone' ),
				'email'        => starter_clean_schema_value( 'starter_clean_business_email' ),
				'priceRange'   => starter_clean_schema_value( 'starter_clean_price_range' ),
				'openingHours' => starter_clean_schema_value( 'starter_clean_business_hours' ),
				'sameAs'       => $same_as,
				'address'      => $address,
			)
		);

		if ( has_custom_logo() ) {
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo_url       = wp_get_attachment_image_url( $custom_logo_id, 'full' );

			if ( $logo_url ) {
				$schema['logo'] = esc_url_raw( $logo_url );
			}
		}

		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
	}
}
add_action( 'wp_head', 'starter_clean_local_business_schema' );
