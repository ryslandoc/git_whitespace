<?php

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

// Nav locations
register_nav_menus( array(
  'primary_menu' => __( 'Primary Menu', 'admiral-studies' ),
) );

register_nav_menus( array(
  'mobile_menu' => __( 'Mobile Menu', 'admiral-studies' ),
) );

register_nav_menus( array(
  'blog_menu' => __( 'Blog Menu', 'admiral-studies' ),
) );

register_nav_menus( array(
  'footer_links' => __( 'Footer Links', 'admiral-studies' ),
) );

// ACFPro options page setup
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page('Site settings');
}

////Custom Post Types
//require_once('inc/init.php');
//
//// SCRIPTS/STYLES
//require_once('inc/wp_enqueue.php');
//
//// WIDGETS
//require_once('inc/shortcodes.php');
//
//// Add SVG to file
//require_once('inc/add_svg.php');

