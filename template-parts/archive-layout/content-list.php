<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ElService
 */

/* Start the Loop */
while ( have_posts() ) :
the_post();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="post">
    <div class="card">
        <div class="post-img">
            <a href="<?php esc_url( the_permalink() );?>"><?php elservicePostThumbnail::thePostThumbnail(); ?></a>
        </div>
        <div class="card-body">
            <a href="<?php esc_url( the_permalink() );?>" ><h5 class="card-title"><?php the_title(  ); ?></h5></a>
            <p class="card-text"><?php echo kama_excerpt('maxchar=250'); ?></p>
        </div>
        <div class="post-meta">
            <?php elservice_posted_on(); ?>
            <?php elservice_posted_by(); ?>
            <a href="<?php echo esc_url(get_comments_link());?>" class="post-comment"><i class="far fa-comment-dots"></i><?php echo get_comments_number();?> Comment</a>
            <a href="<?php esc_url( the_permalink() );?>" class="link-read-more"><i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>