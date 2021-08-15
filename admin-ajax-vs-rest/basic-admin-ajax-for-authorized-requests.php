<?php

namespace PublicFunctionOrg\WordPress\CodeSamples;

// ------------------------------------------------
// GET /wp-admin/admin-ajax.php?action=my_action
// ------------------------------------------------

function my_authorized_action_handler(){

	wp_send_json([
		"firstname" => wp_get_current_user()->first_name,
		"lastname" => wp_get_current_user()->last_name,
	]);

	exit;
}

add_action('wp_ajax_my_action',__NAMESPACE__.'\my_authorized_action_handler');
