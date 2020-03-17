<div id="recent-<?php echo $args[ 'widget_id' ];?>" class="post-list-widget">
    <?php echo $before_widget; ?>
    <div class="widget-title">
        <h3><i class="far fa-calendar-alt"></i><?php if ( $title ) echo  $title ; ?></h3>
    </div>

    <?php while ( $r->have_posts() ) : $r->the_post(); ?>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="widget-post-img">
                    <?php
                    if ( $show_thumb ) :
                        $is_thumb = false;
                        // if only first image
                        if ( $only_1st_img ) :
                            // try to find and to display the first post image and to return success
                            $is_thumb = $this->the_first_post_image();
                        else :
                            // else
                            // look for featured image
                            if ( has_post_thumbnail() ) :
                                // if there is featured image then show featured image
                                echo wp_get_attachment_image( get_post_thumbnail_id(), $this->current_thumb_dimensions ); // use wp_get_attachment_image() instead to have the same behaviour as in $this->the_first_post_image()
                                $is_thumb = true;
                            else :
                                // else
                                // if user wishes first image trial
                                if ( $try_1st_img ) :
                                    // try to find and to display the first post image and to return success
                                    $is_thumb = $this->the_first_post_image();
                                endif; // try_1st_img
                            endif; // has_post_thumbnail
                        endif; // only_1st_img
                        // if there is no image
                        if ( ! $is_thumb ) :
                            // if user allows default image then
                            if ( $use_default ) :
                                print $default_img;
                            endif; // use_default
                        endif; // not is_thumb
                        // (else do nothing)
                    endif; // show_thumb
                    ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <?php if ( ! $hide_title ) : ?>
                    <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php get_the_title() ? the_title() : the_ID();  ?></h5></a>
                    <?php endif; ?>
                    <?php if ( $show_date ) : ?>
                    <a href="#" class="widget-post-date"><i class="far fa-clock"></i><?php echo get_the_date(); ?></a>
                    <?php endif; ?>
                    <?php if ( $show_excerpt ) : ?>
                    <div class="rpwwt-post-excerpt"><?php echo $this->get_the_trimmed_excerpt( $excerpt_length, $excerpt_more ); ?></div>
                    <?php endif; ?>
                    <div class="widget-post-meta">
                        <span  href="#" class="widget-post-author"><i class="far fa-eye"></i>65456</span>
                        <a  href="#" class="widget-post-comment"><i class="far fa-comment-dots"></i>65</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php echo $after_widget; ?>
</div>