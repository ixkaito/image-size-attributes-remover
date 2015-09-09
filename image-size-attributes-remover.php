<?php
/*
Plugin Name: Image Size Attributes Remover
Plugin URI:  https://github.com/ixkaito/image-size-attributes-remover
Author:      Kite
Author URI:  http://kiteretz.com/
Version:     1.0.2
Description: Remove width and height attributes of image tags.
License:     GPLv2
*/

if ( ! function_exists ( 'isar_remove_image_size_attr' ) ):

	function isar_remove_image_size_attr( $html ) {
		$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
		return $html;
	}

endif;

add_filter( 'post_thumbnail_html', 'isar_remove_image_size_attr', 10 );
add_filter( 'image_send_to_editor', 'isar_remove_image_size_attr', 10 );
