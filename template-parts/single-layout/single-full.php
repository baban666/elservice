<?php
/**
 * Created by PhpStorm.
 * User: veraksoff
 * Date: 27.10.2019
 * Time: 12:32
 */

//global $post;

while ( have_posts() ) :
the_post();
?>
<div id="single-post-header-full" class="header-main-full">

</div>
<div id="single-full"  class="container  single-post-full-width">
    <div class="row">
        <div class="col">
            <div class="card">
                <?php elservice_post_thumbnail(); ?>
                <div class="card-img-overlay">
                    <nav aria-label="breadcrumb">
                        <?php if( function_exists('wp_bac_breadcrumb') ): ?>
                            <?php wp_bac_breadcrumb(); ?>
                        <?php endif; ?>
                    </nav>
                </div>
                <div class="card-img-overlay">
                    <span class="link-category-top"> <?php the_category(' ' ,'multiple' ); ?></span>
                      <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title card-title">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;

                        if ( 'post' === get_post_type() ) :
                            ?>

                        <?php endif; ?>
                </div>
                <div class="post-meta card-img-overlay">
                    <?php elservice_posted_on(); ?>
                    <?php elservice_posted_by(); ?>
                    <?php elservice_post_edit_link()?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-sections'); ?>>
                        <div class="entry-content">
                            <?php
                            the_content( sprintf(
                                wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'elservice' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                get_the_title()
                            ) );

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elservice' ),
                                'after'  => '</div>',
                            ) );
                            ?>

                        </div><!-- .entry-content -->

                        <div class="post-author">
                            <div class="row">
                                <div class=" col-2 author-img">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                </div>
                                <div class=" col-10 author-info">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="author-header">
                                                <div class="header-left">
                                                    <span><?php the_author(); ?></span>
                                                    <span class="author-title">repaire master</span>
                                                </div>
                                                <div class="header-right">
                                <span class="social">
                                    <a href="<?php the_author_meta( 'user_url' );?>"><i class="fas fa-globe"></i></a>
                                    <a href="<?php echo 'mailto:' . get_the_author_meta( 'user_email' );?>"><i class="far fa-envelope"></i></a>
                                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-12 author-desc">
                                            <?php the_author_meta('user_description'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer class="entry-footer">
                            <?php elservice_entry_footer(); ?>
                            <div class = "circle-bg">
                                <i class = "icon fas fa-share-alt"> </i>
                            </div>
                            <div class = "outer-icons">
                                <i class = "one fab fa-twitter"> </i>
                                <i class = "two fab fa-facebook-f"> </i>
                                <i class = "three fab fa-instagram"> </i>
                            </div>
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-<?php the_ID(); ?> -->




                    <?php

                        the_post_navigation();

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    ?>

            </div>
            </main><!-- #main -->

            <?php endwhile; // End of the loop. ?>
        </div><!-- #primary -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
