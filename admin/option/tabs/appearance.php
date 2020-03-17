<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(

    array(
        'title' => __('Appearance/Color', 'elservice'),
        'name' => 'menu_6',
        'icon' => 'font-awesome:fa-edit',
        'controls' => array(
            array(
                'type' => 'section',
                'title' => __('Color schema of website', 'elservice'),
                'fields' => array(
                    array(
                        'type' => 'color',
                        'name' => 'elservice_custom_color',
                        'label' => __('Default color schema', 'elservice'),
                        'description' => __('Default theme color schema is green, but you can set your own main color (it will be used under white text)', 'elservice'),
                        'format' => 'hex',
                        'default'=> $elservice_custom_color,
                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_sec_color',
                        'label' => __('Custom secondary color', 'elservice'),
                        'description' => __('Set secondary color (for search buttons, tabs, etc).', 'elservice'),
                        'format' => 'hex',
                        'default'=> $elservice_sec_color,

                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_buttons_color',
                        'label' => __('Set buttons color', 'elservice'),
                        'format' => 'hex',
                        'default'=> $elservice_btnoffer_color,
                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_color_link',
                        'label' => __('Custom color for links inside posts', 'elservice'),
                        'format' => 'hex',
                    ),
                ),
            ),
            array(
                'type' => 'section',
                'title' => __('Layout settings', 'elservice'),
                'fields' => array(
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_disable_sidebar',
                        'label' => __('Disable sidebar?', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_sidebar_left',
                        'label' => __('Set sidebar to left side?', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_body_box',
                        'label' => __('Enable boxed version?', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_color_background',
                        'label' => __('Background Color', 'elservice'),
                        'description' => __('Choose the background color', 'elservice'),
                        'format' => 'hex',
                    ),
                    array(
                        'type' => 'upload',
                        'name' => 'elservice_background_image',
                        'label' => __('Background Image', 'elservice'),
                        'description' => __('Upload a background image. Works only if you set also background color above', 'elservice'),
                        'default' => '',
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'elservice_background_repeat',
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
                        'default' => array(
                            'repeat',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'elservice_background_position',
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
                        'type' => 'toggle',
                        'name' => 'elservice_background_fixed',
                        'label' => __('Fixed Background Image?', 'elservice'),
                        'description' => __('The background is fixed with regard to the viewport.', 'elservice'),
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_sized_background',
                        'label' => __('Fit size?', 'elservice'),
                        'description' => __('Set background image width and height to fit the size of window', 'elservice'),
                    ),
                ),
            ),
        ),
    ),

);

/**
 *EOF
 */