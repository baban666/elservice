<?php

function elservice_comment_form_settings($post_id = null){

    if(elservice_option('elservice_enable_custom_comments_form') !== ''){

        if ( null === $post_id ) {
            $post_id = get_the_ID();
        }

        $commenter     = wp_get_current_commenter();
        $user          = wp_get_current_user();
        $user_identity = $user->exists() ? $user->display_name : '';

        $args = wp_parse_args( $args = array());
        if ( ! isset( $args['format'] ) ) {
            $args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
        }

        $req      = get_option( 'require_name_email' );
        $html_req = ( $req ? " required='required'" : '' );
        $html5    = 'html5' === $args['format'];
        $required_text = sprintf( ' ' . __( 'Required fields are marked %s' ), '<span class="required">*</span>' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        (elservice_option('elservice_disable_website_comments') == '') ?
            $url = '<p class="comment-form-url form-group"><label for="url">' . __( 'Website' ) . '</label> ' .
                '<input id="url" class="form-control" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>' : $url = '';



        $defaults = array(
            'fields'   => array(
                'author' => '<div class="row">'. '<div class="col-sm-6"><p class="comment-form-author form-group">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . 'placeholder="Your Name*"' . ' /></p></div>',
                'email'  => '<div class="col-sm-6"><p class="comment-form-email form-group"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="email" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p></div></div>',
                'url'    => $url,
            ),
            'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
            'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
            'comment_notes_before' => '<p class="comment-notes"><span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>'. ( $req ? $required_text : '' ) . '</p>',
            'comment_notes_after'  => '',
            'id_form'              => 'commentform',
            'id_submit'            => 'submit',
            'class_form'           => 'comment-form',
            'class_submit'         => 'submit',
            'name_submit'          => 'submit',
            'title_reply'          => __( 'Leave a Reply' ),
            'title_reply_to'       => __( 'Leave a Reply to %s' ),
            'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
            'title_reply_after'    => '</h3>',
            'cancel_reply_before'  => ' <small>',
            'cancel_reply_after'   => '</small>',
            'cancel_reply_link'    => __( 'Cancel reply' ),
            'label_submit'         => __( 'Post Comment' ),
            'submit_button'        => '<input name="%1$s" type="submit" id="%2$s btn btn-elservice" class="%3$s" value="%4$s" />',
            'submit_field'         => '<div class="text-left btn btn-elservice">%1$s %2$s <i class="fas fa-long-arrow-alt-right"></i></div>',
            'format'               => 'xhtml',
        );



        function elservice_move_comment_field_to_bottom( $fields ) {
            $comment_field = $fields['comment'];
            unset( $fields['comment'] );
            $fields['comment'] = $comment_field;

            $cooke_field = $fields['cookies'];
            unset( $fields['cookies'] );
            $fields['cookies'] =  $cooke_field;

            return $fields;
        }

        add_filter( 'comment_form_fields', 'elservice_move_comment_field_to_bottom' );

        return $defaults;

    }

    return $defaults = array();


}


 if (elservice_option('elservice_disable_website_comments') !== ''){

     function remove_comment_fields($fields) {
         unset($fields['url']);
         return $fields;
     }
     add_filter('comment_form_default_fields','remove_comment_fields');

 }



