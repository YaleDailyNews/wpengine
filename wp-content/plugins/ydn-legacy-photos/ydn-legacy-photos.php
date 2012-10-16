<?php
/* Plugin Name: YDN Legacy Photos
Plugin URI: http://yaledailynews.com
Description: This plugin uses WordPress shortcodes to replace legacy photo markers with actual photos.
Version: 1.0
Author: Earl Lee & Michael DiScala
License: GPL2
*/

/**
 * This function replaces photos.
 **/

function ydn_legacy_photos_filter($atts) {
	$id = $atts[id];

	if ( wp_attachment_is_image( $id ) ) {
		print "ID variable is $id";
		$return_string = '<div class="inline inline-left">' . wp_get_attachment_image($id, medium) . '<div class="photo-credit">' . get_media_credit_html($id) . '</div><div class="caption">' . get_post($id)->post_excerpt . ' </div></div>';
		return $return_string;
	}

}

add_shortcode('ydn-legacy-photo-inline', 'ydn_legacy_photos_filter');

?>
