<?php

namespace PublicFunctionOrg\WordPress\CodeSamples;

add_action( 'rest_api_init', function () {
	register_rest_route(
		"code-samples/v1",
		"/basic",
		[
			'methods'             => \WP_REST_Server::READABLE,
			'permission_callback' => function () {
				return is_user_logged_in();
			},
			'callback'            => function () {
				return [
					"firstname" => wp_get_current_user()->first_name,
					"lastname"  => wp_get_current_user()->last_name,
				];
			},
		]
	);
} );

