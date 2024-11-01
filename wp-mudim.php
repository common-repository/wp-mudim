<?php
/*
Plugin Name: WP-Mudim
Plugin URI: http://vietcoding.com/cat/wp-mudim
Description: A Vietnamese keyboard for WordPress, based on "mudim" (http://code.google.com/p/mudim/)
Version: 0.1
Author: Hoàng Tuấn Anh - htad@vietcoding.com
Author URI: http://vietcoding.com
License: GPL
*/


function add_mudim() 
{
	$plugin_path = WP_PLUGIN_URL . '/' . str_replace(basename( __FILE__), "", plugin_basename(__FILE__)); 

	echo ( '<script type="text/javascript" src="'. $plugin_path . 'mudim-0.8-r153.js"></script>' ); 
}

add_action('wp_print_scripts', 'add_mudim');

?>