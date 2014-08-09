<?php
/*
Plugin Name: Image Size Attributes Remover
Plugin URI: https://github.com/ixkaito/image-size-attributes-remover
Version: 1.0
Author: KITE
Description: Remove width and height attributes of image tags.
*/

if ( ! function_exists ( 'kite_remove_image_size_attr' ) ):

	function kite_remove_image_size_attr( $html ) {
		$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
		return $html;
	}

endif;

add_filter( 'post_thumbnail_html', 'kite_remove_image_size_attr', 10 );
add_filter( 'image_send_to_editor', 'kite_remove_image_size_attr', 10 );
