<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ElService
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-sections'); ?>>
	<header class="entry-header">
        <?php elservice_post_thumbnail(); ?>

        <div class="entry-meta">
            <?php the_category( ); ?>
            <?php elservice_posted_on(); ?>
            <?php elservice_posted_by(); ?>
        </div><!-- .entry-meta -->

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>

		<?php endif; ?>
	</header><!-- .entry-header -->

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