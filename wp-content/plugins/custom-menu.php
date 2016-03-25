<?php
/*

Plugin Name: Custom Menu for Class
Plugin URI:
Description: This plugin creates a custom menu area for the currently active theme
Author: Ibreaker Rollin
Version: 1.6
Author URI: http://ma.tt/
*/

//register new menu for user dashboard area
function register_ibreaker_menu(){
		/*	register_nav_menu('custom-menu',__('Custom Menu Area'));	//for only one menu area
		}
		add_action('init','register_ibreaker_menu');*/
	register_nav_menus(array('custom-menu'=>'Custom Menu Area'));	//for multiple menu areas
}
add_action('init','register_ibreaker_menu');

?>
