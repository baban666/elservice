<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(

    array(
        'title' => __('Social Media Options', 'elservice'),
        'name' => 'menu_5',
        'icon' => 'font-awesome:fa-dove',
        'controls' => array(
            array(
                'type' => 'section',
                'title' => __('Social Media Pages', 'elservice'),
                'fields' => array(
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_facebook',
                        'label' => __('Facebook link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_twitter',
                        'label' => __('Twitter link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_instagram',
                        'label' => __('Instagram link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_wa',
                        'label' => __('WhatsApp link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_youtube',
                        'label' => __('Youtube link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_vimeo',
                        'label' => __('Vimeo link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_pinterest',
                        'label' => __('Pinterest link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_linkedin',
                        'label' => __('Linkedin link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_soundcloud',
                        'label' => __('Soundcloud link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_vk',
                        'label' => __('Vk.com link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_telegram',
                        'label' => __('Telegram link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_ok',
                        'label' => __('Odnoklassniki link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_rss',
                        'label' => __('Rss link', 'elservice'),
                        'validation' => 'url',
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_custom',
                        'label' => __('Custom link', 'elservice'),
                        'validation' => 'url',
                    ),
                ),
            ),
        ),
    ),


);

/**
 *EOF
 */