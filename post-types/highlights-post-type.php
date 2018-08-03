<?php 

// Register Custom Post Type
function envato_boosting_highlights_post_type()
{

    $labels = array(
        'name' => _x('Highlights', 'Post Type General Name', 'boosting'),
        'singular_name' => _x('Highlight', 'Post Type Singular Name', 'boosting'),
        'menu_name' => __('Highlights', 'boosting'),
        'name_admin_bar' => __('Highlight', 'boosting'),
        'archives' => __('Highlight Archives', 'boosting'),
        'attributes' => __('Highlight Attributes', 'boosting'),
        'parent_item_colon' => __('Parent Highlight:', 'boosting'),
        'all_items' => __('Highlights', 'boosting'),
        'add_new_item' => __('Add New Highlight', 'boosting'),
        'add_new' => __('Add New Highlight', 'boosting'),
        'new_item' => __('New Highlight', 'boosting'),
        'edit_item' => __('Edit Highlight', 'boosting'),
        'update_item' => __('Update Highlight', 'boosting'),
        'view_item' => __('View Highlight', 'boosting'),
        'view_items' => __('View Highlights', 'boosting'),
        'search_items' => __('Search Highlight', 'boosting'),
        'not_found' => __('Not found', 'boosting'),
        'not_found_in_trash' => __('Not found in Trash', 'boosting'),
        'featured_image' => __('Featured Image', 'boosting'),
        'set_featured_image' => __('Set featured image', 'boosting'),
        'remove_featured_image' => __('Remove featured image', 'boosting'),
        'use_featured_image' => __('Use as featured image', 'boosting'),
        'insert_into_item' => __('Insert into Highlight', 'boosting'),
        'uploaded_to_this_item' => __('Uploaded to this highlight', 'boosting'),
        'items_list' => __('Highlights list', 'boosting'),
        'items_list_navigation' => __('Highlights list navigation', 'boosting'),
        'filter_items_list' => __('Filter Highlights list', 'boosting'),
    );
    $args = array(
        'label' => __('Highlight', 'boosting'),
        'description' => __('Highlight description', 'boosting'),
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'taxonomies' => array('category'),
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
    );
    register_post_type('post_type_highlight', $args);

}
add_action('init', 'envato_boosting_highlights_post_type', 0);
