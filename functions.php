<?php
/**
 * @package WordPress
 * @subpackage Tersus
 */

// Define Child Theme Constants

	$theme_name = 'tersus-newted';
	$theme_data = wp_get_theme($theme_name);

	define('CHILD_THEME_URI', $theme_data->get('ThemeURI'));
	define('CHILD_THEME_NAME', $theme_data->get('Name'));
	define('CHILD_THEME_VERSION', trim($theme_data->get('Version')));
	define('CHILD_THEME_DESCRIPTION', trim($theme_data->get('Description')));

// Page menu support
// http://codex.wordpress.org/Function_Reference/register_nav_menus

if ( ! function_exists('register_my_menus') ) {
	function register_my_menus() {
		register_nav_menus(
			array( 'header-menu' => __('Header Menu', 'tersus-newted') )
		);
	}
	add_action( 'init', 'register_my_menus' );
}

// Child Theme Navigation Link Delimiters

if ( ! function_exists( 'tersus_newted_delim' ) ) {
	function tersus_newted_delim($d) {
		return '&nbsp;';
		}
	
	add_filter( 'post_link_delim', 'tersus_newted_delim' );
	add_filter( 'posts_link_delim', 'tersus_newted_delim' );
	add_filter( 'image_link_delim', 'tersus_newted_delim' );
	add_filter( 'comment_link_delim', 'tersus_newted_delim' );
	
	}
?>
