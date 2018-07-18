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
