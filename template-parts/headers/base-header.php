<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<div class="container d-flex justify-content-between">
    <div class="brand p-2 flex-fill bd-highlight">
        <?php if(elservice_option('elservice_logo')) : ?>
            <?php if ( is_front_page() || is_home() ) : ?>
                <span class="logo-image"><img src="<?php echo elservice_option('elservice_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" height="<?php echo elservice_option( 'elservice_logo_retina_height' ); ?>" width="<?php echo elservice_option( 'elservice_logo_retina_width' ); ?>" /></span>
            <?php else : ?>
                <a href="<?php echo home_url(); ?>" class="logo-image"><img src="<?php echo elservice_option('elservice_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" height="<?php echo elservice_option( 'elservice_logo_retina_height' ); ?>" width="<?php echo elservice_option( 'elservice_logo_retina_width' ); ?>" /></a>
            <?php endif; ?>
        <?php elseif (elservice_option('elservice_text_logo')) : ?>
            <div class="textlogo "><?php echo elservice_option('elservice_text_logo'); ?></div>
            <div class="sloganlogo">
                <?php if(elservice_option('elservice_text_slogan')) : ?><?php echo elservice_option('elservice_text_slogan'); ?><?php else : ?><?php bloginfo( 'description' ); ?><?php endif; ?>
            </div>
        <?php else : ?>
            <div class="textlogo "><?php bloginfo( 'name' ); ?></div>
            <div class="sloganlogo"><?php bloginfo( 'description' ); ?></div>
        <?php endif; ?>
    </div>
    <div class="main-phone">
        <a class="contact-icon" href="#"><i class="fas fa-phone-alt"></i>1.800.456.12345</a>
    </div>
    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse justify-content-sm-end p-2 flex-fill bd-highlight">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'menu-1',
            'depth'	          => 3, // 1 = no dropdowns, 2 = with dropdowns.
            'container_id'    => '',
            'menu_class'      => 'navbar-nav navbar-mobile mr-0',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</div>
<div class="bsnav-mobile">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar"></div>
</div>