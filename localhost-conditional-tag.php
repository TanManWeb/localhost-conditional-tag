<?php 
/*
Plugin Name: Localhost Conditional Tag
Description: A simple and lightweight plugin that allows you to utilize the localhost conditional tag in the PHP programming of your WordPress theme.
Author: TanManWeb
Author URI: https://github.com/TanManWeb/
Version: 1.1.0
Text Domain: localhost-conditional-tag
*/

if ( ! function_exists( 'is_localhost' ) ) {
	function is_localhost() {		
		$server_name = $_SERVER['SERVER_NAME'];
		$server_addr = $_SERVER['SERVER_ADDR'];

		if( strpos( $server_name, 'localhost' ) !== false || $server_addr == "::1" || $server_addr == "127.0.0.1" ) {
			$env = "localhost";			
		}
		return $env;	
	}
}
