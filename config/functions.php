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

add_action( 'rest_api_init', 'wp_rest_allow_all_cors', 15 );
function wp_rest_allow_all_cors() {
    // Remove the default filter.
    remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );

    // Add a Custom filter.
    add_filter( 'rest_pre_serve_request', function( $value ) {
        header( 'Access-Control-Allow-Origin: *' );
        header( 'Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE' );
        header( 'Access-Control-Allow-Credentials: true' );
        return $value;
    });
}
