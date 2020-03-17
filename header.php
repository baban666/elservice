<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ElService
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elservice' ); ?></a>
    <!-- ========================= HEADER ========================= -->

    <?php
    if (elservice_option('elservice_header_top_enable') !== '') {
        include get_template_directory() . '/template-parts/headers/top-line.php';
    }
    ?>

    <header id="header">
        <div id="masthead" class="header-main-nav">
            <div id="main-nav" class="header-main-nav">
                <div class="navbar navbar-expand-sm bsnav bsnav-sticky bsnav-sticky-fade bsnav-transparent">
                    <?php $header_template = (elservice_option('elservice_header_type') !='') ? elservice_option('elservice_header_type') : 'base-header' ;?>
                    <?php include get_template_directory() . '/template-parts/headers/'.$header_template.'.php'; ?>

                </div>
            </div>
        </div>
    </header>
    <!-- ========================= HEADER END// ========================= -->
	<div id="content" class="site-content">
