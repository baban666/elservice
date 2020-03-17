<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ElService
 */

?>

	</div><!-- #content -->
<?php if(elservice_option('elservice_footer_widgets')) : ?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <div  class="container">
                <a href="#" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
                <div class="row">
                    <div class="col-3">
                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        <?php else : ?>
                            <p><?php esc_html_e('No widgets added. You can disable footer widget area in theme options - footer options', 'elservice'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-3">
                        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-3">
                        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-3">
                        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-4' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<!-- ========================= BOTTOM LINE ========================= -->
<section>
    <div id="bottom-line" class="bottom-line-section">
        <div class="container">
            <div class="row bottom-line">
                <div class="col-3">

                </div>
                <div class="col-6">
                    <?php if ( elservice_option('elservice_footer_text') != '' ) :?>
                        <div class="copy text-center">
                            <p><?php echo elservice_option('elservice_footer_text'); ?></p>
                        </div>
                    <?php endif;?>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= BOTTOM LINE END// ========================= -->

<?php wp_footer(); ?>

</body>
</html>
