<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

$themeOptionLogoImage = esc_url( get_template_directory_uri() )  . '/build/img/logo.png';
if (ELSERVICE_NAME_ACTIVE_THEME == 'elservice') {
	$elservice_custom_color = '#000000';
	$elservice_sec_color = '#000000';
	$elservice_btnoffer_color = '#000000';
}
else{
	$elservice_custom_color = '';
	$elservice_sec_color = '#000';
	$elservice_btnoffer_color = '#000';
}

$theme_options =  array(
	'title' => __('ElService Theme Options', 'elservice'),
	'page' => 'ElService Theme Options',
	'logo' => $themeOptionLogoImage,
	'menus' => array()
);


    /**
     * Loades all options by going through all files that are placed directly in option folder
     */

        foreach(glob(get_template_directory() .'/admin/option/tabs/*.php') as $option_load) {
            if(is_file($option_load)){
              $opt =  include $option_load;
              foreach ($opt as $theme_options_add) {
                $theme_options['menus'][] = $theme_options_add;
                }

            }
        }


return $theme_options;

/**
 *EOF
 */