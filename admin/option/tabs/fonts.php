<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(


    array(
		'title' => __('Fonts Options', 'elservice'),
		'name' => 'menu_7',
		'icon' => 'font-awesome:fa-font',
		'controls' => array(
			array(
				'type' => 'section',
				'title' => __('General', 'elservice'),
				'fields' => array(
					array(
						'type' => 'toggle',
						'name' => 'disable_google_fonts',
						'label' => __('Enable Inner Storage of Google Fonts', 'elservice'),
						'default' => '0',
					),
				),
			),

			array(
				'type' => 'section',
				'title' => __('Navigation Font', 'elservice'),
				'fields' => array(
					array(
						'type' => 'select',
						'name' => 'elservice_nav_font',
						'label' => __('Navigation Font Family', 'elservice'),
						'description' => __('Font for navigation', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),
					array(
						'type' => 'radiobutton',
						'name' => 'elservice_nav_font_style',
						'label' => __('Font Style', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_nav_font',
									'value' => 'vp_get_gwf_style',
								),
							),
						),
						'default' => array(
							'{{first}}',
						),
					),
					array(
						'type' => 'radiobutton',
						'name' => 'elservice_nav_font_weight',
						'label' => __('Font Weight', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_nav_font',
									'value' => 'vp_get_gwf_weight',
								),
							),
						),
					),
					array(
						'type' => 'multiselect',
						'name' => 'elservice_nav_font_subset',
						'label' => __('Font Subset', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_nav_font',
									'value' => 'vp_get_gwf_subset',
								),
							),
						),
						'default' => 'latin',
					),
				),
			),//END NAV FONT

			array(
				'type' => 'section',
				'title' => __('Headings Font', 'elservice'),
				'fields' => array(
					array(
						'type' => 'select',
						'name' => 'elservice_headings_font',
						'label' => __('Headings Font Family', 'elservice'),
						'description' => __('Font for headings in text, sidebar, footer', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),
					array(
						'type' => 'radiobutton',
						'name' => 'elservice_headings_font_style',
						'label' => __('Font Style', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_headings_font',
									'value' => 'vp_get_gwf_style',
								),
							),
						),
						'default' => array(
							'{{first}}',
						),
					),
					array(
						'type' => 'radiobutton',
						'name' => 'elservice_headings_font_weight',
						'label' => __('Font Weight', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_headings_font',
									'value' => 'vp_get_gwf_weight',
								),
							),
						),
					),
					array(
						'type' => 'multiselect',
						'name' => 'elservice_headings_font_subset',
						'label' => __('Font Subset', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_headings_font',
									'value' => 'vp_get_gwf_subset',
								),
							),
						),
						'default' => 'latin',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_headings_font_upper',
						'label' => __('Enable uppercase?', 'elservice'),
						'default' => '0',
					),
				),
			),//END Headings FONT

			array(
				'type' => 'section',
				'title' => __('Body Font', 'elservice'),
				'fields' => array(
					array(
						'type' => 'select',
						'name' => 'elservice_body_font',
						'label' => __('Body Font Family', 'elservice'),
						'description' => __('Font for body text', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),
					array(
						'type' => 'radiobutton',
						'name' => 'elservice_body_font_style',
						'label' => __('Font Style', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_body_font',
									'value' => 'vp_get_gwf_style',
								),
							),
						),
						'default' => array(
							'{{first}}',
						),
					),
					array(
						'type' => 'radiobutton',
						'name' => 'elservice_body_font_weight',
						'label' => __('Font Weight', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_body_font',
									'value' => 'vp_get_gwf_weight',
								),
							),
						),
					),
					array(
						'type' => 'multiselect',
						'name' => 'elservice_body_font_subset',
						'label' => __('Font Subset', 'elservice'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'binding',
									'field' => 'elservice_body_font',
									'value' => 'vp_get_gwf_subset',
								),
							),
						),
						'default' => 'latin',
					),
					array(
						'type' => 'textbox',
						'name' => 'elservice_body_font_size',
						'label' => __('Set body font size', 'elservice'),
						'description' => __('Set font size in px', 'elservice'),
					),
				),
			),//END Body FONT


		),
	),


);

/**
 *EOF
 */