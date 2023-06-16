<?php

class Wk_front_function
{

/**
 * Add Custom Field
 */
public function my_restapi_init(){

register_rest_route(
    'wkmaa/v1',
				'/page/',
				array(
					'methods'             => WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_custom_field' ),
					'permission_callback' => function () {
						return true;
					},
				)

    );

register_rest_route(
	'wkmaa/v1',
				'acf-books',
				array(
					'method' => 'GET',
					'callback' => array($this,'wk_acf_books'),
					'permission_callback' => function () {
						return true;
					},
				)

);


}

/**
 * Callback function for custom field
 */
public function get_custom_field()
{
    return "hi";
}

public function wk_acf_books(WP_REST_Request $request) {

	$metakey= $request->get_param('meta_key');
	$metavalue= $request->get_param('meta_value');

	$args = array(
		'post_type' => 'book',
		'status' => 'publish',
		'post_per_page' => 10,
		'meta_query' => array(
			array(
				'key' => $metakey,
				'value'=> $metavalue
			)
		)
		);
		//Query
		$the_query = new WP_Query($args);
		$acf_books = $the_query->posts;


		return $acf_books;


}
}