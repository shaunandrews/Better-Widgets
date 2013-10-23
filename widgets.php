<?php
/*
Plugin Name: Better Widgets
Description: This makes widgets better. Trust me. Or don't.
Version: 0.1
Author: Shaun Andrews
Author URI: http://wordpress.org
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function better_widgets_enqueue_scripts() {

	wp_enqueue_script( 'mp6-widgets', plugins_url( 'scripts.js', __FILE__ ), array( 'jquery' ) );
	wp_enqueue_style( 'mp6-widgets', plugins_url( 'styles.css', __FILE__ ) );

}

add_action( 'admin_enqueue_scripts', 'better_widgets_enqueue_scripts' );
