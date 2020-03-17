<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(



	array(
		'title' => __('Global Enable/Disable', 'elservice'),
		'name' => 'menu_8',
		'icon' => 'font-awesome:fa-globe',
		'controls' => array(
			array(
				'type' => 'section',
				'title' => __('Global options', 'elservice'),
				'fields' => array(
					array(
						'type' => 'toggle',
						'name' => 'elservice_social_disable',
						'label' => __('Disable social buttons on images', 'elservice'),
						'description' => __('Enable/Disable buttons in grid loop', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'exclude_author_meta',
						'label' => __('Disable author link', 'elservice'),
						'description' => __('Disable author link from meta in string', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'exclude_cat_meta',
						'label' => __('Disable category link', 'elservice'),
						'description' => __('Disable category link from meta in string', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'exclude_date_meta',
						'label' => __('Disable date', 'elservice'),
						'description' => __('Disable date from meta in string', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'exclude_comments_meta',
						'label' => __('Disable comments count', 'elservice'),
						'description' => __('Disable comments count from meta in string', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'hotmeter_disable',
						'label' => __('Disable hot and thumb metter', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'thumb_only_users',
						'label' => __('Allow to use hot and thumbs only for logged users', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'wish_only_users',
						'label' => __('Allow to use wishlist only for logged users', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'post_view_disable',
						'label' => __('Disable post view script', 'elservice'),
						'default' => '0',
					),
				),
			),
			array(
				'type' => 'section',
				'title' => __('Global disabling parts on single pages', 'elservice'),
				'fields' => array(
					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_breadcrumbs',
						'label' => __('Disable breadcrumbs', 'elservice'),
						'description' => __('Disable breadcrumbs from pages', 'elservice'),
						'default' => '0',
					),

					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_share',
						'label' => __('Disable share buttons', 'elservice'),
						'description' => __('Disable share buttons after content on pages', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_share_top',
						'label' => __('Disable share buttons', 'elservice'),
						'description' => __('Disable share buttons before content on pages', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_social_footer',
						'label' => __('Disable share buttons in footer on mobiles', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_prev',
						'label' => __('Disable previous and next', 'elservice'),
						'description' => __('Disable previous and next post buttons', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_tags',
						'label' => __('Disable tags', 'elservice'),
						'description' => __('Disable tags after content from pages', 'elservice'),
						'default' => '0',
					),

					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_author',
						'label' => __('Disable author box', 'elservice'),
						'description' => __('Disable author box after content from pages', 'elservice'),
						'default' => '1',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_relative',
						'label' => __('Disable relative posts', 'elservice'),
						'description' => __('Disable relative posts box after content from pages', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_enable_tag_relative',
						'label' => __('Enable relative posts by tags', 'elservice'),
						'description' => __('By default, relative posts use category as base, you can switch to tags', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_feature_thumb',
						'label' => __('Disable top thumbnail on single page', 'elservice'),
						'default' => '0',
					),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_enable_custom_comments_form',
                        'label' => __('Enable custom comments form', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_disable_website_comments',
                        'label' => __('Disable website field in comments', 'elservice'),
                        'default' => '0',
                    ),
					array(
						'type' => 'toggle',
						'name' => 'elservice_disable_comments',
						'label' => __('Disable standart comments', 'elservice'),
						'default' => '0',
					),
					array(
						'type' => 'textarea',
						'name' => 'elservice_widget_comments',
						'label' => __('Insert comments widget code', 'elservice'),
						'description' => __('You can set here comments widget, for example, from disqus', 'elservice'),
					),

				),
			),
		),
	),


);

/**
 *EOF
 */