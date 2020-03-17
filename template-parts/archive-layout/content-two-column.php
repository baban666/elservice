<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ElService
 */

?>
<div class="row">
<?php

/* Start the Loop */
while ( have_posts() ) :
    the_post();

    ?>
    <div class="col-md-6 col-lg-6 post-grid">
        <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?> >
            <div class="post-img">
                <a href="<?php esc_url( the_permalink() );?>"><?php elservicePostThumbnail::thePostThumbnail(); ?></a>
            </div>
            <div class="post-meta">
                <a href="#" class="post-date"><i class="far fa-clock"></i><?php echo get_the_date();?></a>
                <a href="#" class="post-author"><i class="far fa-user"></i><span>by </span><?php the_author(); ?></a>
                <a href="<?php echo esc_url(get_comments_link());?>" class="post-comment"><i class="far fa-comment-dots"></i><?php echo get_comments_number();?> Comment</a>
            </div>
            <div class="card-body">
                <a href="<?php esc_url( the_permalink() );?>" ><h5 class="card-title"><?php the_title(  ); ?></h5></a>
                <p class="card-text"><?php echo kama_excerpt('maxchar=70'); ?></p>
                <a href="<?php esc_url( the_permalink() );?>" class="link-btn">Read more<i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </article><!-- #post-<?php the_ID(); ?> -->
    </div>
<?php endwhile; ?>
</div>






