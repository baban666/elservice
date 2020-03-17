<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(


	array(
		'title' => __('Logo & favicon', 'elservice'),
		'name' => 'menu_12',
		'icon' => 'font-awesome:fa-cog',
		'controls' => array(
			array(
				'type' => 'section',
				'title' => __('Logo settings', 'elservice'),
				'fields' => array(
					array(
						'type' => 'upload',
						'name' => 'elservice_logo',
						'label' => __('Upload Logo', 'elservice'),
						'description' => __('Upload your logo. Max width is 450px. (1200px for full width, 180px for logo + menu row layout)', 'elservice'),
						'default' => '',
					),

					array(
						'type' => 'upload',
						'name' => 'elservice_logo_retina',
						'label' => __('Upload Logo (retina version)', 'elservice'),
						'description' => __('Upload retina version of the logo. It should be 2x the size of main logo.', 'elservice'),
						'default' => '',
					),
					array(
						'type' => 'textbox',
						'name' => 'elservice_logo_retina_width',
						'label' => __('Logo width', 'elservice'),
						'description' => __('Please, enter logo width (without px)', 'elservice'),
					),
					array(
						'type' => 'textbox',
						'name' => 'elservice_logo_retina_height',
						'label' => __('Retina logo height', 'elservice'),
						'description' => __('Please, enter logo height (without px)', 'elservice'),
					),
					array(
						'type' => 'textbox',
						'name' => 'elservice_text_logo',
						'label' => __('Text logo', 'elservice'),
						'description' => __('You can type text logo. Use this field only if no image logo', 'elservice'),
					),
					array(
						'type' => 'textbox',
						'name' => 'elservice_text_slogan',
						'label' => __('Slogan', 'elservice'),
						'description' => __('You can type slogan below text logo. Use this field only if no image logo', 'elservice'),
					),
				),
			),
		),
	),

);

/**
 *EOF
 */