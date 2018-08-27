<?php

// Register Custom Post Type
function envato_boosting_promotions_post_type()
{

    $labels = array(
        'name' => _x('Promotions', 'Post Type General Name', 'envato'),
        'singular_name' => _x('Promotion', 'Post Type Singular Name', 'envato'),
        'menu_name' => __('Promotions', 'envato'),
        'name_admin_bar' => __('Promotion', 'envato'),
        'archives' => __('Promotion Archives', 'envato'),
        'attributes' => __('Promotion Attributes', 'envato'),
        'parent_item_colon' => __('Parent Promotion:', 'envato'),
        'all_items' => __('Promotions', 'envato'),
        'add_new_item' => __('Add New Promotion', 'envato'),
        'add_new' => __('Add New Promotion', 'envato'),
        'new_item' => __('New Promotion', 'envato'),
        'edit_item' => __('Edit Promotion', 'envato'),
        'update_item' => __('Update Promotion', 'envato'),
        'view_item' => __('View Promotion', 'envato'),
        'view_items' => __('View Promotions', 'envato'),
        'search_items' => __('Search Promotion', 'envato'),
        'not_found' => __('Not found', 'envato'),
        'not_found_in_trash' => __('Not found in Trash', 'envato'),
        'featured_image' => __('Featured Image', 'envato'),
        'set_featured_image' => __('Set featured image', 'envato'),
        'remove_featured_image' => __('Remove featured image', 'envato'),
        'use_featured_image' => __('Use as featured image', 'envato'),
        'insert_into_item' => __('Insert into Promotion', 'envato'),
        'uploaded_to_this_item' => __('Uploaded to this Promotion', 'envato'),
        'items_list' => __('Promotions list', 'envato'),
        'items_list_navigation' => __('Promotions list navigation', 'envato'),
        'filter_items_list' => __('Filter Promotions list', 'envato'),
    );
    $args = array(
        'label' => __('Promotion', 'envato'),
        'description' => __('Promotion description', 'envato'),
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'item-boosting',
        'menu_position' => 5,
        'menu_icon' => 'dashicons-star-filled',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'capability_type' => 'page',
        'show_in_rest' => true,
        'show_in_graphql' => true,
        'graphql_single_name' => 'promotion',
        'graphql_plural_name' => 'promotions'

    );
    register_post_type('post_type_promotion', $args);

}
add_action('init', 'envato_boosting_promotions_post_type', 0);
