<?php
/**
 * Plugin Name: Themovation SiteOrigin Widgets Bundle
 * Version: 1.0.0
 * Plugin URI: themovation.com
 * Description: A collection of widgets
 * Author: Themovation
 * Author URI: themovation.com
 * Text Domain: themovation-widgets
 * Domain Path: /languages/
 * License: GPL v3
 */

define('​THEMOVATION_WB_VER', '1.0.0');

require_once ( 'inc/template-functions.php' );

if ( ! function_exists( 'themovation_so_wb_collection' ) ) :
// Adding all the widgets
function themovation_so_wb_collection( $folders ) {
	$folders[] = plugin_dir_path(__FILE__) . '/widgets/';
	return $folders;
}
endif;
add_filter( 'siteorigin_widgets_widget_folders', 'themovation_so_wb_collection' );

if ( ! function_exists( 'themovation_so_wb_setup_group' ) ) :
// Creating the '​Themovation Widgets' group
function themovation_so_wb_setup_group( $group ) {
	$group[] = array(
		'title' => __('​Themovation Widgets', 'themovation-widgets'),
		'filter' => array(
			'groups' => array('themovation-so-wb')
		)
	);
	return $group;
}
endif;
add_filter( 'siteorigin_panels_widget_dialog_tabs', 'themovation_so_wb_setup_group', 20 );

if ( ! function_exists( 'themovation_so_wb_group' ) ) :
// Group widgets under '​Themovation Widgets' and adding an icon
function themovation_so_wb_group( $widgets ) {
	foreach( $widgets as $class => &$widget ) {
		if( preg_match('/Themovation_SO_WB_(.*)_Widget/', $class, $matches ) ) {
			$widget['icon'] = 'themovation-widget dashicons dashicons-welcome-learn-more';
			$widget['groups'] = array( 'themovation-so-wb' );
		}
		if( preg_match( '/SiteOrigin_Widget_Editor_Widget/', $class, $matches ) ||
			preg_match( '/SiteOrigin_Widget_GoogleMap_Widget/', $class, $matches ) ||
			preg_match( '/MSP_Main_Widget/', $class, $matches ) ||
			preg_match( '/SiteOrigin_Widget_Video_Widget/', $class, $matches ) ) {
			$widget['groups'] = array( 'themovation-so-wb' );
		}
	}
	return $widgets;
}
endif;
add_filter( 'siteorigin_panels_widgets', 'themovation_so_wb_group', 11 );

if ( ! function_exists( 'themovation_so_wb_translation' ) ) :
// Making the plugin translation ready
function themovation_so_wb_translation() {
	load_plugin_textdomain( 'themovation-widgets', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
endif;
add_action( 'plugins_loaded', 'themovation_so_wb_translation' );

require_once ( 'inc/activate.php' );
require_once ( 'inc/icons.php' );
require_once ( 'inc/enqueue.php' );
require_once ( 'inc/row-styles.php' );
require_once ( 'inc/widget-styles.php' );
require_once ( 'inc/portfolio.php' );

add_image_size( 'themo_brands', 150, 80, true);
add_image_size( 'themo_team', 480, 320, true);
