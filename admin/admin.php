<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php
define('ELSERVICE_ADMIN', get_template_directory() . '/admin');
define('ELSERVICE_ADMIN_URI', get_template_directory_uri() . '/admin');
define('ELSERVICE_NAME_ACTIVE_THEME', 'elservice');


// require VafPress
require_once get_template_directory() . '/admin/vafpress-framework/bootstrap.php';
//load_theme_textdomain('elservice', get_template_directory() . '/lang');


$theme_options = ELSERVICE_ADMIN . '/option/option.php';

$theme_options_obj = new VP_Option(array(
	'is_dev_mode'           => 	false, // dev mode, default to false
	'option_key' => 'elservice_option',
	'page_slug'  => 'vpt_option',
	'template'   => $theme_options,
	'menu_page'  => array(),
	'page_title' => __( 'ElService Options', 'elservice' ),
	'menu_label' => __( 'ElService Options', 'elservice' )
));

function elservice_option( $key )
{
    if( is_customize_preview() ) {
		$value = get_theme_mod( $key );
	} else {
		$value = vp_option( "elservice_option." . $key );
	}
	return $value;
}

// load metaboxes
	
//$post_type_metabox  = REHUB_ADMIN . '/metabox/post_type.php';
//$post_type_side_metabox  = REHUB_ADMIN . '/metabox/post_type_side.php';
//$page_review_metabox  = REHUB_ADMIN . '/metabox/page_review.php';
//$page_toptable_metabox  = REHUB_ADMIN . '/metabox/page_toptable.php';
//$page_topchart_metabox  = REHUB_ADMIN . '/metabox/page_topchart.php';
//$page_option  = REHUB_ADMIN . '/metabox/page_option.php';
//$visual_builder_metabox  = REHUB_ADMIN . '/metabox/visual_builder.php';
//
//
//$post_type_metabox_obj = new VP_Metabox($post_type_metabox);
//$post_type_metabox_side_obj = new VP_Metabox($post_type_side_metabox);
//$page_review_metabox_obj = new VP_Metabox($page_review_metabox);
//$page_toptable_metabox_obj = new VP_Metabox($page_toptable_metabox);
//$page_topchart_metabox_obj = new VP_Metabox($page_topchart_metabox);
//$page_obj = new VP_Metabox($page_option);
//$visual_builder_metabox_obj = new VP_Metabox($visual_builder_metabox);
/*
 * EOF
 */