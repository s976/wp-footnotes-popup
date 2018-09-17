<?php
/**
 * @package Hello_Dolly
 * @version 1.7
 */
/*
Plugin Name: WP Footnotes Popup
Plugin URI: https://github.com/s976/footnotes-popup
Description: Enable popup window for footnotes
Author: Shimon S
Version: 0.1.0
Author URI: shimon.shv@gmail.com
*/
add_action('wp_enqueue_scripts','wp_footnotes_script_init');

function wp_footnotes_script_init() {
	wp_enqueue_script( 'ftn-js', plugins_url( '/footnotes.js', __FILE__ ));
}