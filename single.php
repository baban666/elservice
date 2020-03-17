<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ElService
 */

get_header();



switch (elservice_option('elservice_framework_post_layout')):

    case('full_width_image');
        get_template_part( 'template-parts/single-layout/single', 'full');
        break;

    case('basic');
        get_template_part( 'template-parts/single-layout/single', 'basic' );
        break;

    default;
        get_template_part( 'template-parts/single-layout/single', 'basic');
        break;

endswitch;



get_footer();
