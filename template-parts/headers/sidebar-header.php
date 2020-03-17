<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div class="navbar navbar-expand-sm bsnav bsnav-sidebar bsnav-sidebar-left">
    <a class="navbar-brand align-self-end" href="#">bsnav</a>
    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse justify-content-sm-end align-items-start">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'	          => 3, // 1 = no dropdowns, 2 = with dropdowns.
            'container_id'    => '',
            'menu_class'      => 'navbar-nav navbar-mobile',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
</div>