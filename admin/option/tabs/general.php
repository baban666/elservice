<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

VP_Security::instance()->whitelist_function('elservice_get_cpost_type');
function elservice_get_cpost_type()
{
    $post_types = get_post_types( array('public'   => true) );
    $data  = array();
    foreach ( $post_types as $post_type ) {
        if ( $post_type !== 'revision' && $post_type !== 'nav_menu_item' && $post_type !== 'attachment') {
            $data[] = array(
                'value' => $post_type,
                'label' => $post_type,
            );
        }
    }
    return $data;
}

return array(

    array(
        'title' => __('General Options', 'elservice'),
        'name' => 'menu_1',
        'icon' => 'font-awesome:fa-microchip',
        'controls' => array(
            array(
                'type' => 'section',
                'title' => __('General Options', 'elservice'),
                'fields' => array(
                    array(
                        'type' => 'select',
                        'name' => 'elservice_framework_archive_layout',
                        'label' => __('Select Blog Layout', 'elservice'),
                        'description' => __('Select what kind of post string layout you want to use for blog, archives', 'elservice'),
                        'items' => array(
                            array(
                                'value' => 'grid',
                                'label' => __('Grid Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'list',
                                'label' => __('List Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'time_line',
                                'label' => __('TimeLine Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'two_columns',
                                'label' => __('Two Columns Layout', 'elservice'),
                            ),

                        ),
                        'default' => array(
                            'list',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'elservice_framework_category_layout',
                        'label' => __('Select Category Layout', 'elservice'),
                        'description' => __('Select what kind of post string layout you want to use for categories', 'elservice'),
                        'items' => array(
                            array(
                                'value' => 'grid',
                                'label' => __('Grid Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'list',
                                'label' => __('List Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'time_line',
                                'label' => __('TimeLine Layout', 'elservice'),
                            ),

                        ),
                        'default' => array(
                            'list',
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'name' => 'elservice_framework_search_layout',
                        'label' => __('Select Search Layout', 'elservice'),
                        'description' => __('Select what kind of post string layout you want to use for search pages', 'elservice'),
                        'items' => array(
                            array(
                                'value' => 'grid',
                                'label' => __('Grid Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'list',
                                'label' => __('List Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'time_line',
                                'label' => __('TimeLine Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'two_columns',
                                'label' => __('Two Columns Layout', 'elservice'),
                            ),

                        ),
                        'default' => array(
                            'list',
                        ),
                    ),

                    array(
                        'type' => 'select',
                        'name' => 'elservice_framework_post_layout',
                        'label' => __('Select Post Layout', 'elservice'),
                        'description' => __('Select what kind of post layout you want to use', 'elservice'),
                        'items' => array(
                            array(
                                'value' => 'basic',
                                'label' => __('Basic Post Layout', 'elservice'),
                            ),
                            array(
                                'value' => 'gallery_slider',
                                'label' => __('Layout with Gallery Slider', 'elservice'),
                            ),
                            array(
                                'value' => 'justify_gallery',
                                'label' => __('Layout with Justify Gallery', 'elservice'),
                            ),
                            array(
                                'value' => 'full_width_image',
                                'label' => __('Layout with Full Width Image', 'elservice'),
                            ),
                        ),
                        'default' => array(
                            'basic',
                        ),
                    ),

                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_analytics',
                        'label' => __('Js code for footer', 'elservice'),
                        'description' => __('Enter your Analytics code or any html, js code', 'elservice'),
                    ),
                    array(
                        'type' => 'textarea',
                        'name' => 'elservice_analytics_header',
                        'label' => __('Js code for header (analytics)', 'elservice'),
                    ),
                    array(
                        'type' => 'toggle',
                        'name' => 'elservice_enable_scroll_to_top',
                        'label' => __('Enable scroll to top button', 'elservice'),
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