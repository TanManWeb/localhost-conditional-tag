<?php 
/*
Plugin Name: Localhost Conditional Tag
Description: A simple and lightweight plugin that allows you to utilize the localhost conditional tag in the PHP programming of your WordPress theme.
Author: TanManWeb
Author URI: https://github.com/TanManWeb/
Version: 1.0.0
Text Domain: localhost-conditional-tag
*/

if ( ! function_exists( 'is_localhost' ) ) {
	function is_localhost($whitelist = ['127.0.0.1', 'localhost', '::1']) {
		return in_array($_SERVER['SERVER_NAME'], $whitelist);
	}	
}
