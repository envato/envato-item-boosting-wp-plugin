<?php 
function envato_boosting_admin_menu() {
    add_menu_page(
        'Boosting',
        'Boosting',
        'read',
        'item-boosting',
        '',
        'dashicons-star-filled',
        5
    );
}

add_action('admin_menu', 'envato_boosting_admin_menu');

function envato_boosting_rest_allow_origins() {
	
	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
	
	$allowed_domains = array(
    'themeforest.net', 
    'codecanyon.net', 
    'videohive.net', 
    'graphicriver.net', 
    '3docean.net', 
    'photodune.net'
  );
	
	$origin = str_replace('https://', '', $_SERVER["HTTP_ORIGIN"]);

	if(isset( $_SERVER["HTTP_ORIGIN"] ) && in_array($origin, $allowed_domains)) {
	  add_filter( 'rest_pre_serve_request', function( $value ) {
		  header( 'Access-Control-Allow-Origin: ' . esc_url( $_SERVER["HTTP_ORIGIN"] ) );
		  header( 'Access-Control-Allow-Methods: GET' );
		  header( 'Access-Control-Allow-Credentials: true' );
		  return $value;
	  });	
	}
}

add_action( 'rest_api_init', 'envato_boosting_rest_allow_origins', 15 );	