<?php
//////////////////////////////////////////////////////////////////
// Pagination
//////////////////////////////////////////////////////////////////

if( !function_exists('elservice_pagination') ) {
    function elservice_pagination() {

        if( is_singular() )
            return;
        global $paged;
        global $wp_query;

        /** Stop execution if there's only 1 page */
        if( $wp_query->max_num_pages <= 1 )
            return;

        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $max   = intval( $wp_query->max_num_pages );

        /** Add current page to the array */
        if ( $paged >= 1 )
            $links[] = $paged;

        /** Add the pages around the current page to the array */
        if ( $paged >= 3 ) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }

        if ( ( $paged + 2 ) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }

        echo '<ul class="page-numbers pagination justify-content-center">' . "\n";

        /** Previous Post Link */
        if ( get_previous_posts_link() ){
            $prev_post_link = get_previous_posts_link('<i class="fas fa-chevron-left"></i>');
            $prev_post_link = str_replace('<a href=', '<a class="page-link" href=',  $prev_post_link);
            printf( '<li class="page-item">%s</li>' . "\n",  $prev_post_link );
        }


        /** Link to first page, plus ellipses if necessary */
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="page-item active"' : '';

            printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

            if ( ! in_array( 2, $links ) )
                echo '<li class="hellip_paginate_link"><span>&hellip;</span></li>';
        }

        /** Link to current page, plus 2 pages in either direction if necessary */
        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="page-item active"' : '';
            printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }

        /** Link to last page, plus ellipses if necessary */
        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) )
                echo '<li class="hellip_paginate_link"><span>&hellip;</span></li>' . "\n";

            $class = $paged == $max ? ' class="active"' : '';
            printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        }

        /** Next Post Link */
        if ( get_next_posts_link() )

            $next_post_link = '' ;

            $next_post_link = get_next_posts_link('<i class="fas fa-chevron-right"></i>');

            $next_post_link = str_replace('<a href=', '<a class="page-link" href=', $next_post_link);

            printf( '<li class="page-item">%s</li>' . "\n", $next_post_link );

        echo '</ul>' . "\n";

    }
}