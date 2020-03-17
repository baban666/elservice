<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(


	array(
		'title' => __('Footer Options', 'elservice'),
		'name' => 'menu_3',
		'icon' => 'font-awesome:fa-caret-square-down',
		'controls' => array(
			array(
				'type' => 'section',
				'title' => __('Footer options', 'elservice'),
				'fields' => array(
					array(
						'type' => 'toggle',
						'name' => 'elservice_footer_widgets',
						'label' => __('Footer Widgets', 'elservice'),
						'description' => __('Enable or Disable the footer widget area', 'elservice'),
						'default' => '1',
					),
					array(
						'type' => 'color',
						'name' => 'elservice_footer_color_background',
						'label' => __('Custom Background Color', 'elservice'),
						'description' => __('Choose the background color or leave blank for default', 'elservice'),
						'format' => 'hex',
					),
					array(
						'type' => 'upload',
						'name' => 'elservice_footer_background_image',
						'label' => __('Custom Background Image', 'elservice'),
						'description' => __('Upload a background image or leave blank', 'elservice'),
						'default' => '',

					),
					array(
						'type' => 'select',
						'name' => 'elservice_footer_background_repeat',
						'label' => __('Background Repeat', 'elservice'),
						'items' => array(
							array(
								'value' => 'repeat',
								'label' => __('Repeat', 'elservice'),
							),
							array(
								'value' => 'no-repeat',
								'label' => __('No Repeat', 'elservice'),
							),
							array(
								'value' => 'repeat-x',
								'label' => __('Repeat X', 'elservice'),
							),
							array(
								'value' => 'repeat-y',
								'label' => __('Repeat Y', 'elservice'),
							),
						),

					),
					array(
						'type' => 'select',
						'name' => 'elservice_footer_background_position',
						'label' => __('Background Position', 'elservice'),
						'items' => array(
							array(
								'value' => 'left',
								'label' => 'Left',
							),
							array(
								'value' => 'center',
								'label' => 'Center',
							),
							array(
								'value' => 'right',
								'label' => 'Right',
							),
						),
					),
					array(
						'type' => 'textarea',
						'name' => 'elservice_footer_text',
						'label' => __('Footer Bottom Text', 'elservice'),
						'description' => __('Enter your copyright text or whatever you want right here.', 'elservice'),
						'default' => '2019 Veraksoff.info Design. All rights reserved.',
					),
					array(
						'type' => 'upload',
						'name' => 'elservice_footer_logo',
						'label' => __('Upload Logo for footer', 'elservice'),
						'description' => __('Upload your logo for footer.', 'elservice'),
						'default' => '',
					),
					array(
						'type' => 'textarea',
						'name' => 'elservice_footer_line_content_under_logo',
						'label' => __('Add custom content to footer', 'elservice'),
						'default' => '',
					),
					array(
						'type' => 'color',
						'name' => 'elservice_bottom_line_color_background',
						'label' => __('Full width Footer widget area Background', 'elservice'),
						'format' => 'hex',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_footer_center',
						'label' => __('Footer Center Align', 'elservice'),
						'description' => __('Enable center align in full width Footer Widget', 'elservice'),
						'default' => '1',
					),
				),
			),
		),
	),


);

/**
 *EOF
 */