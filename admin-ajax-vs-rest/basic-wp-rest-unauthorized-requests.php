<?php

namespace PublicFunctionOrg\WordPress\CodeSamples;

add_action( 'rest_api_init', function () {
	register_rest_route(
		"code-samples/v1",
		"/basic",
		[
			'methods'             => \WP_REST_Server::READABLE,
			'permission_callback' => '__return_true',
			'callback'            => function () {
				return array_map( function ( $post ) {
					return $post->post_title;
				}, get_posts() );
			},
		]
	);
} );

