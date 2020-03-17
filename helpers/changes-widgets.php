<?php


// Add a custom filter
add_filter( 'get_archives_link', 'elservice_get_archives_link', 10, 6 );


function elservice_get_archives_link(  $link_html, $url, $text, $format, $before, $after )
{
    if( 'html' === $format )
        $link_html = "\t<li class=\"list-group-item d-flex justify-content-between align-items-center\">$before<a href='$url'><span class=\"list-group\">$text</span></a>$after</li>\n";

    return $link_html;
}

add_filter('get_archives_link', 'elservice_the_archive_count');

function elservice_the_archive_count($links) {
    $links = str_replace('</a>&nbsp;(', '</a> <span class="badge badge-primary badge-pill">(', $links);
    $links = str_replace(')', ')</span>', $links);
    return $links;
}


function bs_categories_list_group_filter ($variable) {
    $variable = str_replace('<ul>', '<ul class="list-group">', $variable);
    $variable = str_replace('<li class="cat-item cat-item-', '<li class="list-group-item cat-item cat-item-', $variable);
    $variable = str_replace('(', '<span class="badge badge-primary badge-pill cat-item-count"> ', $variable);
    $variable = str_replace(')', ' </span>', $variable);

    return $variable;
}
add_filter('wp_list_categories','bs_categories_list_group_filter');



add_filter('wp_list_categories', 'add_span_cat_count');
function add_span_cat_count($links) {
    $links = str_replace('"><a', '"><i class="fas fa-chevron-right"></i><a', $links);
    return $links;
}


function kana_wp_tag_cloud_filter($args)
{
    $args['smallest'] = '14';
    $args['largest'] = '14';
    $args['unit'] = 'px';
    $args['format']   = 'div';


    return $args;
}

add_filter('widget_tag_cloud_args', 'kana_wp_tag_cloud_filter', 10, 2);