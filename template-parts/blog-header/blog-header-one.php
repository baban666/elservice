<?php
/**
 * Created by PhpStorm.
 * User: veraksoff
 * Date: 02.10.2019
 * Time: 12:42
 */
?>
<section id="intro-blog" class="header-blog">
    <div class="container">
        <div class="row d-flex">
            <div class="col-sm-6 d-flex align-items-center">
                <div class="intro-wrap">
                    <?php if( !is_single() ): ?>
                    <h1><?php esc_html_e('Latest Posts', 'elservice'); ?></h1>
                    <?php endif; ?>
                    <?php if( function_exists('wp_bac_breadcrumb') ): ?>
                        <?php wp_bac_breadcrumb(); ?>
                    <?php endif; ?>
                    <?php the_archive_description( '<div class="archive-description">', '</div>' );?>
                </div>  <!-- intro-wrap .// -->
            </div> <!-- col.// -->
            <?php if ( elservice_option('elservice_header_background_image') != '' ) :?>
                <div class="col-sm-6 text-right">
                    <img src="<?php echo elservice_option('elservice_header_background_image'); ?>" class="img-fluid" alt="">
                </div> <!-- col.// -->
            <?php endif;?>
        </div> <!-- row.// -->
        <a href="#" class="scroll-bottom"><i class="fas fa-chevron-down"></i></a>
    </div> <!-- container .//  -->
</section>
