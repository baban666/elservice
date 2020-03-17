<?php
/**
 * Created by PhpStorm.
 * User: veraksoff
 * Date: 24.12.2019
 * Time: 0:04
 */

class ElserviceBlogLayout
{

static $has_sidebar;
static $is_sidebar_left;
static $archive_layout;
static $search_layout;
static $category_layout;
static $content_width;
static $add_sidebar;
static $left_sidebar;



static function getOptions()
{
    (elservice_option('elservice_sidebar_left') != 0 ) ? self::$is_sidebar_left = true : self::$is_sidebar_left = false;
    (self::$is_sidebar_left ) ? self::$left_sidebar = ' order-first' : self::$left_sidebar = '';

    (elservice_option('elservice_disable_sidebar') != 1 ) ? self::$has_sidebar = false : self::$has_sidebar = true;

    (self::$has_sidebar ) ? self::$add_sidebar = 'col-md-12' : self::$add_sidebar = 'col-md-8';

    self::$archive_layout = elservice_option('elservice_framework_archive_layout');
    self::$search_layout = elservice_option('elservice_framework_search_layout');
    self::$category_layout = elservice_option('elservice_framework_category_layout');
}


static function getBlogHeader(){
    get_template_part( 'template-parts/blog-header/blog-header', 'one');
}


static function getBlogSidebar(){

    if (self::$add_sidebar){
        echo '<div class="col-md-4' . self::$left_sidebar . '">';
            get_sidebar();
        echo '</div>';
    }

}


static function getLayout($layout){

    switch ($layout):

        case('two_columns');
            get_template_part( 'template-parts/archive-layout/content', 'two-column' );
            break;

        case('list');
            get_template_part( 'template-parts/archive-layout/content', 'list' );
            break;

        default;
            get_template_part( 'template-parts/archive-layout/content', 'list' );
            break;

    endswitch;
}

static function getBlogTypeLayout($blog_type){

    switch ($blog_type):

        case('archive');
            self::getLayout(self::$archive_layout);
            break;

        case('search');
            self::getLayout(self::$search_layout);
            break;
        case('category');
            self::getLayout(self::$category_layout);
            break;

        default;
            self::getLayout(self::$archive_layout);
            break;

    endswitch;
}

    static function render($blog_type = 'archive'){

self::getOptions();
?>

        <!-- ========================= BLOG HEADER ========================= -->

        <?php self::getBlogHeader() ?>

        <!-- ========================= BLOG HEADER END ========================= -->
        <div class="container">
            <div class="row">
                <div class="<?php echo self::$add_sidebar ?>">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <?php
                            if ( have_posts() ) :

                                if ( is_home() && ! is_front_page() ) :
                                    ?>
                                    <header>
                                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                    </header>
                                <?php
                                endif;


                                self::getBlogTypeLayout($blog_type);

                                the_posts_navigation();

                            else :

                                get_template_part( 'template-parts/content', 'none' );

                            endif;
                            ?>
                            <!-- ========================= PAGINATION ========================= -->
                            <nav>
                                <?php elservice_pagination();?>
                            </nav>
                            <!-- ========================= PAGINATION END// ========================= -->
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div>
                <?php self::getBlogSidebar();?>
            </div>
        </div>



        <?php

    }



}