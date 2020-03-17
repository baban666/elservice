<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

return array(

    array(
        'title' => __('Header and Menu', 'elservice'),
        'name' => 'menu_2',
        'icon' => 'font-awesome:fa-wrench ',
        'controls' => array(
            array(
                'type' => 'section',
                'title' => __('Main Header Options', 'elservice'),
                'fields' => array(
                    array(
                        'type' => 'radioimage',
                        'name' => 'elservice_header_type',
                        'label' => __('Specified Images Maximum Width and Height', 'elservice'),
                        'description' => __('RadioImage with specified item max width and item max height', 'elservice'),
                        'item_max_height' => '150',
                        'item_max_width' => '400',
                        'items' => array(
                            array(
                                'value' => 'base-header',
                                'label' => __('Base layout Header', 'elservice'),
                                'img' => 'http://placehold.it/400x80',
                            ),
                            array(
                                'value' => 'logo-center-header',
                                'label' => __('Center Logo', 'elservice'),
                                'img' => 'http://placehold.it/400x80',
                            ),
                            array(
                                'value' => 'sidebar-header',
                                'label' => __('Menu sidebar', 'elservice'),
                                'img' => 'http://placehold.it/400x80',
                            ),
                        ),
                        'default' => array(
                            'base-header',
                        ),
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_sticky_nav',
                        'label' => __('Sticky Menu Bar', 'elservice'),
                        'description' => __('Enable/Disable Sticky navigation bar.', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'upload',
                        'name' => 'elservice_logo_sticky_url',
                        'label' => __('Upload Logo for sticky menu', 'elservice'),
                        'description' => __('Upload your logo. Max height is 40px.', 'elservice'),
                        'default' => '',
                        'dependency' => array(
                            'field' => 'elservice_sticky_nav',
                            'function' => 'vp_dep_boolean',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'type_sticky_header',
                        'label' => __('Choose type of sticky header', 'elservice'),
                        'items' => array(
                            array(
                                'value' => 'bsnav-sticky-fade',
                                'label' => __('Fade Header', 'elservice'),
                            ),
                            array(
                                'value' => 'bsnav-sticky-slide',
                                'label' => __('Slide Header', 'elservice'),
                            ),
                        ),
                        'default' => array(
                            ' ',
                        ),
                        'dependency' => array(
                            'field' => 'elservice_sticky_nav',
                            'function' => 'vp_dep_boolean',
                        ),

                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_header_color_background',
                        'label' => __('Custom Background Color', 'elservice'),
                        'description' => __('Choose the background color or leave blank for default', 'elservice'),
                        'format' => 'hex',
                    ),
                    array(
                        'type' => 'upload',
                        'name' => 'elservice_header_background_image',
                        'label' => __('Custom Background Image', 'elservice'),
                        'description' => __('Upload a background image or leave blank', 'elservice'),
                        'default' => '',
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'elservice_header_background_repeat',
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
                        'name' => 'elservice_header_background_position',
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
                        'name' => 'elservice_header_support_number',
                        'label' => __('Header Support Number', 'elservice'),
                        'description' => __('Put Support Number', 'elservice'),
                        'default' => '',
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_header_support_email',
                        'label' => __('Header Support Email', 'elservice'),
                        'description' => __('Put Support Email', 'elservice'),
                        'default' => '',
                    ),

                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_login_icon',
                        'label' => __('Enable Login Icon', 'elservice'),
                        'description' => __('Enable/Disable Enable Login Icon in header', 'elservice'),
                        'default' => '0',
                    ),

                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_cart_icon',
                        'label' => __('Enable Cart Icon', 'elservice'),
                        'description' => __('Enable/Disable Enable Cart Icon in header', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_wishlist_icon',
                        'label' => __('Enable Wishlist Icon and set Url', 'elservice'),
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_action_button_text',
                        'label' => __('Put action button text', 'elservice'),
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_action_button_link',
                        'label' => __('Put action button Url', 'elservice'),
                    ),

                ),
            ),

            array(
                'type' => 'section',
                'title' => __('Header main menu Options', 'elservice'),
                'fields' => array(
                    array(
                        'type' => 'textbox',
                        'name' => 'elservice_nav_font_custom',
                        'label' => __('Add custom font size', 'elservice'),
                        'description' => __('Default is 15. Put just number', 'elservice'),
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_nav_font_upper',
                        'label' => __('Enable uppercase font?', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_nav_font_light',
                        'label' => __('Enable Light font weight?', 'elservice'),
                        'default' => '1',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_nav_font_border',
                        'label' => __('Disable border of items?', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_enable_menu_shadow',
                        'label' => __('Menu shadow', 'elservice'),
                        'description' => __('Enable/Disable shadow under menu', 'elservice'),
                        'default' => '1',
                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_custom_color_nav',
                        'label' => __('Custom color of menu background', 'elservice'),
                        'description' => __('Or leave blank for default color', 'elservice'),
                        'format' => 'hex',

                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_custom_color_nav_font',
                        'label' => __('Custom color of menu font', 'elservice'),
                        'description' => __('Or leave blank for default color', 'elservice'),
                        'format' => 'hex',
                    ),
                ),
            ),

            array(
                'type' => 'section',
                'title' => __('Search', 'elservice'),
                'fields' => array(
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_ajax_search',
                        'label' => __('Enable Live search?', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_search_category',
                        'label' => __('Enable Show Search Categories dropdown?', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_search_top_level',
                        'label' => __('Include only top level categories', 'elservice'),
                        'default' => '0',
                        'dependency' => array(
                            'field' => 'elservice_search_category',
                            'function' => 'vp_dep_boolean',
                        ),
                    ),
                    array(
                        'type' => 'multiselect',
                        'name' => 'elservice_search_post_types',
                        'label' => __('Choose custom post type for search', 'elservice'),
                        'description' => __('By default search form shows post and pages. You can change this here. Multiple post types are supported only for ajax search', 'elservice'),
                        'items' => array(
                            'data' => array(
                                array(
                                    'source' => 'function',
                                    'value'  => 'elservice_get_cpost_type',
                                ),
                            ),
                        ),
                        'default' => '',
                    ),


                ),
            ),

            array(
                'type' => 'section',
                'title' => __('Header top line Options', 'elservice'),
                'fields' => array(
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_header_top_enable',
                        'label' => __('Enable top line', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_custom_color_top',
                        'label' => __('Custom color for top line of header', 'elservice'),
                        'description' => __('Or leave blank for default color', 'elservice'),
                        'format' => 'hex',

                    ),
                    array(
                        'type' => 'color',
                        'name' => 'elservice_custom_color_top_font',
                        'label' => __('Custom color of menu font for top line of header', 'elservice'),
                        'description' => __('Or leave blank for default color', 'elservice'),
                        'format' => 'hex',
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_top_line_number',
                        'label' => __('Add custom number to top line', 'elservice'),
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_top_line_content_text',
                        'label' => __('Add custom content to top line', 'elservice'),
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_header_top_social_icons',
                        'label' => __('Enable top line social icons', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_header_top_menu',
                        'label' => __('Enable top line header menu', 'elservice'),
                        'default' => '0',
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_header_top_login',
                        'label' => __('Enable top line login', 'elservice'),
                        'default' => '0',
                    ),

                ),
            ),
        ),
    ),

);

/**
 *EOF
 */