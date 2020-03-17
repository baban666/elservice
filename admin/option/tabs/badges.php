<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php


return array(

	array(
		'title' => __('Custom badges for posts', 'elservice'),
		'name' => 'badges',
		'icon' => 'font-awesome:fa-certificate',
		'controls' => array(
			array(
				'type' => 'section',
				'title' => __('First badge', 'elservice'),
				'fields' => array(
				    array(
				        'type' => 'html',
				        'name' => 'admin_badge_preview_1',
				        'binding' => array(
				            'field'    => 'badge_label_1, badge_color_1',
				            'function' => 'admin_badge_preview_html',
				        ),
				    ),
					array(
						'type' => 'textbox',
						'name' => 'badge_label_1',
						'label' => __('Label', 'elservice'),
						'default' => __('Editor choice', 'elservice'),
						'validation' => 'maxlength[20]',
					),
					array(
						'type' => 'color',
						'name' => 'badge_color_1',
						'label' => __('Color', 'elservice'),
						'format' => 'hex',
					),
				),
			),
			array(
				'type' => 'section',
				'title' => __('Second badge', 'elservice'),
				'fields' => array(
				    array(
				        'type' => 'html',
				        'name' => 'admin_badge_preview_2',
				        'binding' => array(
				            'field'    => 'badge_label_2, badge_color_2',
				            'function' => 'admin_badge_preview_html',
				        ),
				    ),
					array(
						'type' => 'textbox',
						'name' => 'badge_label_2',
						'label' => __('Label', 'elservice'),
						'default' => __('Best seller', 'elservice'),
						'validation' => 'maxlength[20]',
					),
					array(
						'type' => 'color',
						'name' => 'badge_color_2',
						'label' => __('Color', 'elservice'),
						'format' => 'hex',
					),
				),
			),
			array(
				'type' => 'section',
				'title' => __('Third badge', 'elservice'),
				'fields' => array(
				    array(
				        'type' => 'html',
				        'name' => 'admin_badge_preview_3',
				        'binding' => array(
				            'field'    => 'badge_label_3, badge_color_3',
				            'function' => 'admin_badge_preview_html',
				        ),
				    ),
					array(
						'type' => 'textbox',
						'name' => 'badge_label_3',
						'label' => __('Label', 'elservice'),
						'default' => __('Best value', 'elservice'),
						'validation' => 'maxlength[20]',
					),
					array(
						'type' => 'color',
						'name' => 'badge_color_3',
						'label' => __('Color', 'elservice'),
						'format' => 'hex',
					),
				),
			),
			array(
				'type' => 'section',
				'title' => __('Fourth badge', 'elservice'),
				'fields' => array(
				    array(
				        'type' => 'html',
				        'name' => 'admin_badge_preview_4',
				        'binding' => array(
				            'field'    => 'badge_label_4, badge_color_4',
				            'function' => 'admin_badge_preview_html',
				        ),
				    ),
					array(
						'type' => 'textbox',
						'name' => 'badge_label_4',
						'label' => __('Label', 'elservice'),
						'default' => __('Best price', 'elservice'),
						'validation' => 'maxlength[20]',
					),
					array(
						'type' => 'color',
						'name' => 'badge_color_4',
						'label' => __('Color', 'elservice'),
						'format' => 'hex',
					),
				),
			),
		),
	),

);

/**
 *EOF
 */