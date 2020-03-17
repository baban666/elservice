<?php
if ( ! function_exists( 'elservice_date_out_loop' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function elservice_date_out_loop($post_id) {
        global $post;
            $post_id = $post->ID;
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U', $post_id ) !== get_the_modified_time( 'U' , $post_id) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( DATE_W3C, $post_id) ),
            esc_html( get_the_date(DATE_W3C, $post_id) ),
            esc_attr( get_the_modified_date( DATE_W3C, $post_id ) ),
            esc_html( get_the_modified_date(DATE_W3C, $post_id) )
        );

        $posted_on = sprintf(
        /* translators: %s: post date. */
            esc_html_x( '%s', 'post date', 'elservice' ),
            '<i class="far fa-clock"></i><a href="' . esc_url( get_permalink($post_id) ) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

    }
endif;