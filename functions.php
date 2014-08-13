<?php
function rss_post_thumbnail($content) {
	if(is_feed()){
		$content = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
	}
	return $content[0];
	
}
add_filter('get_the_guid', 'rss_post_thumbnail');