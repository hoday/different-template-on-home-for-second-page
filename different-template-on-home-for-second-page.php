<?php
/*
Plugin Name: Different Template on Home for Second Page and Onward
Description: Simple plugin that uses a different template for the second page and onward for the home page
Version: 0.0.0
Author: Hoday
Text Domain: hoday
License: GPLv2 or later
*/

// Template selection

function template_redirect_callback_home_page() {
	global $wp_query;
  if ($wp_query->is_home() && $wp_query->is_main_query() && !is_admin()) {
    if (!$wp_query->is_paged()) {
			// for first page
    } else {
			// for subsequent pages
      include(TEMPLATEPATH . '/archive.php');
      die();
    }	
	}		
		
}
add_action("template_redirect", 'template_redirect_callback_home_page');


