<?php
/**
 * Optional ACF local fields.
 *
 * @package StarterCleanPro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'starter_clean_pro_register_acf_fields' ) ) {
	function starter_clean_pro_register_acf_fields() {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		acf_add_local_field_group(
			array(
				'key'      => 'group_starter_clean_pro_page_sections',
				'title'    => esc_html__( 'Page Sections', 'starter-clean-pro' ),
				'fields'   => array(
					array(
						'key'          => 'field_starter_clean_pro_page_sections',
						'label'        => esc_html__( 'Page Sections', 'starter-clean-pro' ),
						'name'         => 'page_sections',
						'type'         => 'flexible_content',
						'button_label' => esc_html__( 'Add Section', 'starter-clean-pro' ),
						'layouts'      => array(
							'layout_starter_clean_pro_hero' => array(
								'key'        => 'layout_starter_clean_pro_hero',
								'name'       => 'hero_section',
								'label'      => esc_html__( 'Hero Section', 'starter-clean-pro' ),
								'display'    => 'block',
								'sub_fields' => array(
									array( 'key' => 'field_scp_hero_eyebrow', 'label' => esc_html__( 'Eyebrow', 'starter-clean-pro' ), 'name' => 'eyebrow', 'type' => 'text' ),
									array( 'key' => 'field_scp_hero_heading', 'label' => esc_html__( 'Heading', 'starter-clean-pro' ), 'name' => 'heading', 'type' => 'text' ),
									array( 'key' => 'field_scp_hero_subheading', 'label' => esc_html__( 'Subheading', 'starter-clean-pro' ), 'name' => 'subheading', 'type' => 'textarea', 'rows' => 3 ),
									array( 'key' => 'field_scp_hero_primary_text', 'label' => esc_html__( 'Primary Button Text', 'starter-clean-pro' ), 'name' => 'primary_button_text', 'type' => 'text' ),
									array( 'key' => 'field_scp_hero_primary_url', 'label' => esc_html__( 'Primary Button URL', 'starter-clean-pro' ), 'name' => 'primary_button_url', 'type' => 'url' ),
									array( 'key' => 'field_scp_hero_secondary_text', 'label' => esc_html__( 'Secondary Button Text', 'starter-clean-pro' ), 'name' => 'secondary_button_text', 'type' => 'text' ),
									array( 'key' => 'field_scp_hero_secondary_url', 'label' => esc_html__( 'Secondary Button URL', 'starter-clean-pro' ), 'name' => 'secondary_button_url', 'type' => 'url' ),
								),
							),
							'layout_starter_clean_pro_text_content' => array(
								'key'        => 'layout_starter_clean_pro_text_content',
								'name'       => 'text_content_section',
								'label'      => esc_html__( 'Text Content Section', 'starter-clean-pro' ),
								'display'    => 'block',
								'sub_fields' => array(
									array( 'key' => 'field_scp_text_heading', 'label' => esc_html__( 'Section Heading', 'starter-clean-pro' ), 'name' => 'section_heading', 'type' => 'text' ),
									array( 'key' => 'field_scp_text_body', 'label' => esc_html__( 'Body Content', 'starter-clean-pro' ), 'name' => 'body_content', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'basic', 'media_upload' => 0 ),
								),
							),
							'layout_starter_clean_pro_cta' => array(
								'key'        => 'layout_starter_clean_pro_cta',
								'name'       => 'cta_section',
								'label'      => esc_html__( 'CTA Section', 'starter-clean-pro' ),
								'display'    => 'block',
								'sub_fields' => array(
									array( 'key' => 'field_scp_cta_heading', 'label' => esc_html__( 'Heading', 'starter-clean-pro' ), 'name' => 'heading', 'type' => 'text' ),
									array( 'key' => 'field_scp_cta_text', 'label' => esc_html__( 'Text', 'starter-clean-pro' ), 'name' => 'text', 'type' => 'textarea', 'rows' => 3 ),
									array( 'key' => 'field_scp_cta_button_text', 'label' => esc_html__( 'Button Text', 'starter-clean-pro' ), 'name' => 'button_text', 'type' => 'text' ),
									array( 'key' => 'field_scp_cta_button_url', 'label' => esc_html__( 'Button URL', 'starter-clean-pro' ), 'name' => 'button_url', 'type' => 'url' ),
								),
							),
							'layout_starter_clean_pro_feature_grid' => array(
								'key'        => 'layout_starter_clean_pro_feature_grid',
								'name'       => 'feature_grid_section',
								'label'      => esc_html__( 'Feature Grid Section', 'starter-clean-pro' ),
								'display'    => 'block',
								'sub_fields' => array(
									array( 'key' => 'field_scp_features_heading', 'label' => esc_html__( 'Heading', 'starter-clean-pro' ), 'name' => 'heading', 'type' => 'text' ),
									array(
										'key'          => 'field_scp_features',
										'label'        => esc_html__( 'Features', 'starter-clean-pro' ),
										'name'         => 'features',
										'type'         => 'repeater',
										'button_label' => esc_html__( 'Add Feature', 'starter-clean-pro' ),
										'sub_fields'   => array(
											array( 'key' => 'field_scp_feature_title', 'label' => esc_html__( 'Title', 'starter-clean-pro' ), 'name' => 'title', 'type' => 'text' ),
											array( 'key' => 'field_scp_feature_description', 'label' => esc_html__( 'Description', 'starter-clean-pro' ), 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
										),
									),
								),
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'page',
						),
					),
				),
			)
		);
	}
}
add_action( 'acf/init', 'starter_clean_pro_register_acf_fields' );
