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
					'methods'             => WP_REST_Server::CREATABLE,
					'callback'            => array( $this, 'get_custom_field' ),
					'permission_callback' => function () {
						return true;
					},
					'args' => array(
						'name' => array(
							'required' => true,
						),
						'title' => array(
							'required' => true
						)
					)
				)

    );

register_rest_route(
	'wkmaa/v1',
				'acf-books',
				array(
					'method' => WP_REST_Server::READABLE,
					'callback' => array($this,'wk_acf_books'),
					'permission_callback' => function () {
						return true;
					},
				)

);

register_rest_route(
	'wkmaa/v1',
				'wk-users',
				array(
					'method' => WP_REST_Server::CREATABLE,
					'callback' => array($this,'wk_users'),
					'permission_callback' => function () {
						return true;
					},
				)
				);

register_rest_route( 
	'wkmaa/v1',
			'wk-ulist',
				array(
					'method' => WP_REST_Server::CREATABLE,
					'callback' =>array($this,'user_list'),
					'permission_callback' => function () {
						return true;
					},
					'schema' => 'prefix_get_comment_schema',

				)
				);

}



/**
 * Callback function for custom field
 */
public function get_custom_field($request)
{
$parameter = $request->get_params();
if($parameter != "")
{
return new WP_REST_Response(array(
	'Message' => 'Success.',
	'param' => $parameter,
	'status' => 1,
), 400);
} else {
	return new WP_Error(
		'no_data_found',
		'No data Foound',
	);
}

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

public function wk_users(WP_REST_Request $request) {
	$user_login = wp_slash( $request['user_login'] );
	$user_email = wp_slash( $request['user_email'] );
	$user_pass  = $request['user_pass'];
	$userdata = compact( 'user_login', 'user_email', 'user_pass' );
	$parameter =  wp_insert_user( $userdata );
	return $parameter;

	
}

public function user_list(WP_REST_Request $request) {
	
global $wpdb;
$params = get_userdata($request['id']);

return $params;

}




}