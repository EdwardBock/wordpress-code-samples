<?php

namespace PublicFunctionOrg\WordPress\CodeSamples;

function my_ajax_action_handler(){
	wp_send_json([
		"firstname" => wp_get_current_user()->first_name,
		"lastname" => wp_get_current_user()->last_name,
	]);
	exit;
}
add_action('wp_ajax_my_action',__NAMESPACE__.'\my_ajax_action_handler');
