<?php
/*
Plugin Name: No image dimensions 
Description: Plugin to stop WP image uploader adding dimensions to images
Version: 1.0
Author: Dave Allen
Author URI: http://daveallengraphics.com
 */


// Stop WordPress adding dimensions on upload

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	      return $html;
}
