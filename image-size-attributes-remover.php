<?php
/*
Plugin Name: Image Size Attributes Remover
Plugin URI:  https://github.com/ixkaito/image-size-attributes-remover
Author:      Kite
Author: URI: http://kiteretz.com/
Version:     1.0.1
Description: Remove width and height attributes of image tags.
License:     GPLv2
*/

if ( ! function_exists ( 'kite_remove_image_size_attr' ) ):

	function kite_remove_image_size_attr( $html ) {
		$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
		return $html;
	}

endif;

add_filter( 'post_thumbnail_html', 'kite_remove_image_size_attr', 10 );
add_filter( 'image_send_to_editor', 'kite_remove_image_size_attr', 10 );
