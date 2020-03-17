<?php

?>
   <!-- ========================= BLOG HEADER ========================= -->

    <?php
        get_template_part( 'template-parts/blog-header/blog-header', 'one');

    ?>

    <!-- ========================= BLOG HEADER ========================= -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                                <?php
                                while ( have_posts() ) :
                                    the_post();

                                    get_template_part( 'template-parts/content', get_post_type() );

                                    the_post_navigation();

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                endwhile; // End of the loop.
                                ?>

                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
        </div>
    </div>