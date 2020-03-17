<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(

	array(
		'title' => __('Localization', 'elservice'),
		'name' => 'menu_loc',
		'icon' => 'font-awesome:fa-language',
		'controls' => array(
			array(
				'type' => 'section',
				'title' => __('Localization', 'elservice'),
				'fields' => array(
					array(
						'type' => 'textbox',
						'name' => 'elservice_readmore_text',
						'label' => __('Set text for read more link', 'elservice'),
						'description' => __('It will be used instead READ MORE', 'elservice'),
					),
					array(
						'type' => 'textbox',
						'name' => 'elservice_search_text',
						'label' => __('Set text for Search placeholder', 'elservice'),
						'description' => __('It will be used in default search form instead SEARCH', 'elservice'),
					),
                    array(
						'type' => 'textbox',
						'name' => 'elservice_search_dropdown_text',
						'label' => __('Set Search default dropdown text', 'elservice'),
						'description' => __('It will be used in default search form instead All Categories', 'elservice'),
					),
					array(
						'type' => 'textbox',
						'name' => 'elservice_commenttitle_text',
						'label' => __('Set text for comment title, when no comments', 'elservice'),
						'description' => __('It will be used instead: We will be happy to see your thoughts', 'elservice'),
					),
					array(
						'type' => 'textbox',
						'name' => 'elservice_related_text',
						'label' => __('Set text for Related article title', 'elservice'),
						'description' => __('It will be used instead Related Articles', 'elservice'),
					),
				),
			),
		),
	),


);

/**
 *EOF
 */