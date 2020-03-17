<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div class="navbar navbar-expand-md bsnav bsnav-brand-center">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse justify-content-md-between">
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
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'main',
            'depth'	          => 3, // 1 = no dropdowns, 2 = with dropdowns.
            'container_id'    => '',
            'menu_class'      => 'navbar-nav navbar-mobile',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
  </div>
</div>