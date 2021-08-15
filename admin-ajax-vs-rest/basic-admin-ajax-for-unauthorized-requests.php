<?php

namespace PublicFunctionOrg\WordPress\CodeSamples;

// ------------------------------------------------
// GET /wp-admin/admin-ajax.php?action=my_action
// ------------------------------------------------

function my_unauthorized_action_handler(){

	$latestPostTitles = array_map(function($post){
		return $post->post_title;
	}, get_posts());

	wp_send_json($latestPostTitles);
	exit;
}
add_action('wp_ajax_nopriv_my_action',__NAMESPACE__.'\my_unauthorized_action_handler');
